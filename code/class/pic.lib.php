<?php
/**
 * pic.lib.php（图片上传类）
 * @author xiongzhixin (xzx747@sohu.com) 2006.12
 */

class pic 
{
	var $sUploadPath;				//图片存储路径
	var $toFile	= true;			//是否生成文件
	var $fontName;					//使用的TTF字体名称
	var $maxWidth  = 120;			//图片最大宽度
	var $maxHeight = 180;			//图片最大高度
	var $useTimeAsFileName = true;	//是否使用时间做为上传后的文件名
	
	function pic($sUploadPath)
	{
		$this->sUploadPath	= $sUploadPath;		
		$this->fontName		= $sUploadPath . "04B_08__.TTF";
	}
	
	//==========================================
	// 函数: makeThumb($sourFile,$width=128,$height=128) 
	// 功能: 生成缩略图(输出到浏览器)
	// 参数: $sourFile 图片源文件
	// 参数: $width 生成缩略图的宽度
	// 参数: $height 生成缩略图的高度
	// 返回: 0 失败 成功时返回生成的图片路径
	//==========================================
	
	function makeThumb($sourFile,$width=128,$height=128)
	{
		$sourFile = $this->sUploadPath . $sourFile;
		//echo $sourFile."<br>";//exit;
		$imageInfo	= $this->getInfo($sourFile);
		
		//$newName	= substr($imageInfo["name"], 0, strrpos($imageInfo["name"], ".")) . "_thumb.jpg";
		$newName	= date("Y-m")."/".substr($imageInfo["name"], 0, strrpos($imageInfo["name"], ".")) . ".jpg";
		//echo $newName."<br>";//exit;
		switch ($imageInfo["type"])
		{
			case 1:	//gif
				$img = imagecreatefromgif($sourFile);
				break;
			case 2:	//jpg
				$img = imagecreatefromjpeg($sourFile);
				break;
			case 3:	//png
				$img = imagecreatefrompng($sourFile);
				break;
			default:
				return 0;
				break;
		}
		
		if (!$img) 
			return 0;

		$width  = ($width > $imageInfo["width"]) ? $imageInfo["width"] : $width;
		$height = ($height > $imageInfo["height"]) ? $imageInfo["height"] : $height;
		
		//echo $width."<br>".$height;	exit;
		
		/**
		$srcW	= $imageInfo["width"];
		$srcH	= $imageInfo["height"]; 
		
		if ($srcW * $width > $srcH * $height)
			$height = round($srcH * $width / $srcW);
		else
			$width = round($srcW * $height / $srcH);
		**/	
		//*
		if (function_exists("imagecreatetruecolor")) //GD2.0.1
		{
			$new = imagecreatetruecolor($width, $height);
			ImageCopyResampled($new, $img, 0, 0, 0, 0, $width, $height, $imageInfo["width"], $imageInfo["height"]);
			//echo "1";
		}
		else
		{
			$new = imagecreate($width, $height);
			ImageCopyResized($new, $img, 0, 0, 0, 0, $width, $height, $imageInfo["width"], $imageInfo["height"]);
			//echo "2";
		}
		//exit;
		//*/
		//echo $this->sUploadPath . $newName;
		
        if ($this->toFile)
		{			
			if (file_exists($this->sUploadPath . $newName))
				unlink($this->sUploadPath . $newName);
			ImageJPEG($new, $this->sUploadPath . $newName);
			ImageDestroy($new);
			ImageDestroy($img);
			//echo $newName;exit;
			return $newName;
		}
		else
		{
			ImageJPEG($new);
			ImageDestroy($new);
			ImageDestroy($img);
		}


	}
	//==========================================
	// 函数: makeWaterMark($sourFile, $text)
	// 功能: 给图片加水印
	// 参数: $sourFile 图片文件名
	// 参数: $text 文本数组(包含二个字符串)
	// 返回: 1 成功 成功时返回生成的图片路径
	//==========================================
	
	function makeWaterMark($sourFile, $text) 
	{
		$sourFile = $this->sUploadPath . $sourFile;
		$imageInfo	= $this->getInfo($sourFile);
		//print_r($imageInfo);//exit;
		$newName	= date("Y-m")."/".substr($imageInfo["name"], 0, strrpos($imageInfo["name"], ".")) . ".jpg";
		switch ($imageInfo["type"])
		{
			case 1:	//gif
				$img = imagecreatefromgif($sourFile);
				break;
			case 2:	//jpg
				$img = imagecreatefromjpeg($sourFile);
				break;
			case 3:	//png
				$img = imagecreatefrompng($sourFile);
				break;
			default:
				return 0;
				break;
		}
		if (!$img) 
			return 0;

		$width  = ($this->maxWidth > $imageInfo["width"]) ? $imageInfo["width"] : $this->maxWidth;
		$height = ($this->maxHeight > $imageInfo["height"]) ? $imageInfo["height"] : $this->maxHeight;
		$srcW	= $imageInfo["width"];
		$srcH	= $imageInfo["height"]; 
		if ($srcW * $width > $srcH * $height)
			$height = round($srcH * $width / $srcW);
		else
			$width = round($srcW * $height / $srcH);
			
		//*
		if (function_exists("imagecreatetruecolor")) //GD2.0.1
		{
			$new = imagecreatetruecolor($width, $height);
			ImageCopyResampled($new, $img, 0, 0, 0, 0, $width, $height, $imageInfo["width"], $imageInfo["height"]);
		}
		else
		{
			$new = imagecreate($width, $height);
			ImageCopyResized($new, $img, 0, 0, 0, 0, $width, $height, $imageInfo["width"], $imageInfo["height"]);
		}
		
		$white = imageColorAllocate($new, 255, 255, 255);
		$red = imageColorAllocate($new, 255, 255, 255);
		$black = imageColorAllocate($new, 0, 0, 0);
		$alpha = imageColorAllocateAlpha($new, 230, 230, 230, 100);
		//$rectW = max(strlen($text[0]),strlen($text[1]))*7;
		
		//echo $width.".".$height;
		//在 image 图像中画一个用 color 颜色填充了的矩形，其左上角坐标为 x1，y1，右下角坐标为 x2，y2。0, 0 是图像的最左上角。
		// int imagefilledrectangle ( resource image, int x1, int y1, int x2, int y2, int color)
		
		//ImageFilledRectangle($new, 0, $height/2-26, $width, $height/2, $alpha);		 	
		//ImageFilledRectangle($new, 13, $height/2-20, 15, $height/2-7, $black);
		
		ImageTTFText($new, 4.9, 0, 20, $height/2-14, $red, $this->fontName, $text[0]);  // 加水印文字1
		//ImageTTFText($new, 4.9, 0, 20, $height/2-6, $black, $this->fontName, $text[1]);   // 加水印文字2
				
		/*
		ImageFilledRectangle($new, 0, $height-26, $width, $height, $alpha);	
		ImageFilledRectangle($new, 13, $height-20, 15, $height-7, $black);	
		
		ImageTTFText($new, 4.9, 0, 20, $height-14, $black, $this->fontName, $text[0]);  // 加水印文字
		ImageTTFText($new, 4.9, 0, 20, $height-6, $black, $this->fontName, $text[1]);
		*/
		//print_r($text);exit;
				
        if ($this->toFile)
		{
			if (file_exists($this->sUploadPath . $newName))
				unlink($this->sUploadPath . $newName);
			ImageJPEG($new, $this->sUploadPath . $newName);
			ImageDestroy($new);
			ImageDestroy($img);

			return $newName;
		}
		else
		{
			ImageJPEG($new);
			ImageDestroy($new);
			ImageDestroy($img);
		}
	}
	

	//==========================================
	// 函数: getInfo($file)
	// 功能: 返回图像信息
	// 参数: $file 文件名称
	// 返回: 图片信息数组
	//==========================================
	
	function getInfo($file) 
	{
		$data	= getimagesize($file);
		$imageInfo["width"]	= $data[0];
		$imageInfo["height"]= $data[1];
		$imageInfo["type"]	= $data[2];
		$imageInfo["name"]	= basename($file); // 传回不含路径的档案字串
		$imageInfo["size"]  = filesize($file);
		return $imageInfo;		
	}

	//==========================================
	// 函数: uploadImage($file)
	// 功能: 处理上传图片
	// 参数: $file 上传表单file的name值
	// 返回: $newName 上传后的图片名称
	//==========================================
	
	function uploadPic($fileName,$i=0)
	{
		$img = !empty($_FILES[$fileName]) ? $_FILES[$fileName] : null;
		if($img == null)
			return 0;
		if ($this->useTimeAsFileName) 
		{
			$now	  = date("dHis");
			$p		  = strrpos($img['name'], "."); //得到最后一个.的位置
			$ext	  = substr($img['name'], $p+1); //得到图片扩展名
			$newName  = $now . $i."." . $ext; //要保存图片的全名
		}
		else
		{
			$newName = $img['name'];
		}
		$sDir = $this->sUploadPath.date("Y-m");		
		//echo $sDir."<br>";
		if(!is_dir($sDir)) 
		{
			mkdir($sDir);
			chmod($sDir,0777);
		}
		$imgPath = $sDir."/".$newName;
		//echo $imgPath."<br>";
		if (move_uploaded_file($img['tmp_name'], $imgPath)) //上传成功
		{
			//echo "成功".date("Y-m")."/".$newName; exit;
			return date("Y-m")."/".$newName;
		}
		else 
		{
			return 0;
		}
	}
}
?>