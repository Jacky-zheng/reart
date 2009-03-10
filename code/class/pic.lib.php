<?php
/**
 * pic.lib.php��ͼƬ�ϴ��ࣩ
 * @author xiongzhixin (xzx747@sohu.com) 2006.12
 */

class pic 
{
	var $sUploadPath;				//ͼƬ�洢·��
	var $toFile	= true;			//�Ƿ������ļ�
	var $fontName;					//ʹ�õ�TTF��������
	var $maxWidth  = 120;			//ͼƬ�����
	var $maxHeight = 180;			//ͼƬ���߶�
	var $useTimeAsFileName = true;	//�Ƿ�ʹ��ʱ����Ϊ�ϴ�����ļ���
	
	function pic($sUploadPath)
	{
		$this->sUploadPath	= $sUploadPath;		
		$this->fontName		= $sUploadPath . "04B_08__.TTF";
	}
	
	//==========================================
	// ����: makeThumb($sourFile,$width=128,$height=128) 
	// ����: ��������ͼ(����������)
	// ����: $sourFile ͼƬԴ�ļ�
	// ����: $width ��������ͼ�Ŀ��
	// ����: $height ��������ͼ�ĸ߶�
	// ����: 0 ʧ�� �ɹ�ʱ�������ɵ�ͼƬ·��
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
	// ����: makeWaterMark($sourFile, $text)
	// ����: ��ͼƬ��ˮӡ
	// ����: $sourFile ͼƬ�ļ���
	// ����: $text �ı�����(���������ַ���)
	// ����: 1 �ɹ� �ɹ�ʱ�������ɵ�ͼƬ·��
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
		//�� image ͼ���л�һ���� color ��ɫ����˵ľ��Σ������Ͻ�����Ϊ x1��y1�����½�����Ϊ x2��y2��0, 0 ��ͼ��������Ͻǡ�
		// int imagefilledrectangle ( resource image, int x1, int y1, int x2, int y2, int color)
		
		//ImageFilledRectangle($new, 0, $height/2-26, $width, $height/2, $alpha);		 	
		//ImageFilledRectangle($new, 13, $height/2-20, 15, $height/2-7, $black);
		
		ImageTTFText($new, 4.9, 0, 20, $height/2-14, $red, $this->fontName, $text[0]);  // ��ˮӡ����1
		//ImageTTFText($new, 4.9, 0, 20, $height/2-6, $black, $this->fontName, $text[1]);   // ��ˮӡ����2
				
		/*
		ImageFilledRectangle($new, 0, $height-26, $width, $height, $alpha);	
		ImageFilledRectangle($new, 13, $height-20, 15, $height-7, $black);	
		
		ImageTTFText($new, 4.9, 0, 20, $height-14, $black, $this->fontName, $text[0]);  // ��ˮӡ����
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
	// ����: getInfo($file)
	// ����: ����ͼ����Ϣ
	// ����: $file �ļ�����
	// ����: ͼƬ��Ϣ����
	//==========================================
	
	function getInfo($file) 
	{
		$data	= getimagesize($file);
		$imageInfo["width"]	= $data[0];
		$imageInfo["height"]= $data[1];
		$imageInfo["type"]	= $data[2];
		$imageInfo["name"]	= basename($file); // ���ز���·���ĵ����ִ�
		$imageInfo["size"]  = filesize($file);
		return $imageInfo;		
	}

	//==========================================
	// ����: uploadImage($file)
	// ����: �����ϴ�ͼƬ
	// ����: $file �ϴ���file��nameֵ
	// ����: $newName �ϴ����ͼƬ����
	//==========================================
	
	function uploadPic($fileName,$i=0)
	{
		$img = !empty($_FILES[$fileName]) ? $_FILES[$fileName] : null;
		if($img == null)
			return 0;
		if ($this->useTimeAsFileName) 
		{
			$now	  = date("dHis");
			$p		  = strrpos($img['name'], "."); //�õ����һ��.��λ��
			$ext	  = substr($img['name'], $p+1); //�õ�ͼƬ��չ��
			$newName  = $now . $i."." . $ext; //Ҫ����ͼƬ��ȫ��
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
		if (move_uploaded_file($img['tmp_name'], $imgPath)) //�ϴ��ɹ�
		{
			//echo "�ɹ�".date("Y-m")."/".$newName; exit;
			return date("Y-m")."/".$newName;
		}
		else 
		{
			return 0;
		}
	}
}
?>