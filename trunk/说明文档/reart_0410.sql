-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2009 at 09:43 AM
-- Server version: 5.0.22
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `renew`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(8) NOT NULL auto_increment,
  `artistCode` int(10) default NULL,
  `name` varchar(50) NOT NULL COMMENT '作家名称',
  `ename` varchar(50) default NULL,
  `sex` enum('0','1') default NULL COMMENT '性别 0女士1男士',
  `description` text COMMENT '作家描述',
  `edescription` text,
  `profession` varchar(100) default NULL COMMENT '职业',
  `eprofession` varchar(100) default NULL,
  `birthday` varchar(50) default NULL COMMENT '出生日期',
  `status` enum('0','1') NOT NULL default '0' COMMENT '作家状态',
  `addDate` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='艺术家信息表' AUTO_INCREMENT=58 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artistCode`, `name`, `ename`, `sex`, `description`, `edescription`, `profession`, `eprofession`, `birthday`, `status`, `addDate`) VALUES
(1, 1, '刘大鸿', 'Liu Dahong', '0', '<p>1962 生于山东省青岛市<br />1985 毕业于中国美术学院，现工作生活于上海与北京，任教上海师范大学美术学院，主持双百工作室</p>\r\n<p>?</p>\r\n<p>个展<br />2008<br />鸿5月：刘大鸿1988-2008/都亚特画廊/北京 <br />元旦献词：刘大鸿 2008 首展 /香港艺术中心·包氏画廊/香港<br />2006<br />鸿图/浦东张江高科技园文化艺术中心/上海 <br />2005<br />红历： 二十四节气/汉雅轩画廊/香港<br /></p>', '1962 Born in Qingdao, Shandong Province, China 1985 Graduated from the China Academy of Fine Arts Now, <br />Living and Working in Shanghai and Beijing. He is Professor of Shanghai Normal University and the Master of <br />Shuangbai Studio <br />Solo Exhibitions 2008 Hong May: Liu Dahong 1988-2008, Doart Gallery, Beijing New Year Offerings: Liu <br /><br /><br />Dahong in 2008, Pao Galleries Hong Kong Arts Centre, Hong Kong 2006 Hong’s Paintings, Zhangjiang Art center, <br />Shanghai 2005 Red Calendar: 24 solar terms, Hanart TZ, Hong Kong', '', '', '', '0', '2009-03-29 13:03:39'),
(8, 8, '严培明', 'Yan PEiMing', '0', '<p>1960生于上海 <br />1981移居法国第戎 <br />1981-1986就读于法国第戎国立美术学院</p>\r\n<p>?</p>\r\n<p>个展 <br />2009<br />蒙娜丽莎的葬礼／巴黎卢浮宫博物馆／法国 <br />2008<br />严培明作品展／贝尔加莫市现代艺术画廊／意大利 <br />2006<br />严培明个展／圣艾蒂安现代艺术博物馆／法国 <br />2005<br />严培明：献给我的父亲／广东美术馆／中国<br /></p>', '1960 Born in Shanghai 1981 Moved to Dijon, France 1981-1986 Studied at Ecole nationale supérieure d"art, <br />Dijon, France <br />Solo Exhibitions 2009 The Funeral of Mona Lisa, Louvre Museum, Paris 2008 Yan Peiming Solo Exhibition, <br />Galleria d''Arte Moderna e Contemporanea, Bergamo, Italy 2006 Yan Pei Ming, Musée d''Art moderne de Saint-<br />Etienne, France 2005 Oil Painting by Yan Pei Ming, The Guangdong Art Museum of, Guangzhou, China', '', '', '', '0', '2009-03-29 13:20:13'),
(2, 2, '郑义', 'ZhEng Yi', '0', '<p>1961生于黑龙江省哈尔滨市<br />毕业于鲁迅美术学院油画系</p>\r\n<p>?</p>\r\n<p>展览 <br />2008<br />奥林匹克美术大会/北京 <br />2006<br />中国写实画派2006油画年展/中国美术馆/北京<br /></p>', '1961 Born in Harbin, Heilongjiang Province, China. Graduated from Department of Oil Painting, Lu Xun Academy <br />of Fine Arts <br /><br /><br />Group Exhibitions 2008 Olympic Art, Beijing, China 2006 China Realism 2006, National Art Museum of <br />China, Beijing', '', '', '', '0', '2009-03-29 13:04:17'),
(6, 6, '刘炜', 'Liu WEI', '0', '<p>1965生于北京 <br />1989毕业于中央美术学院版画系</p>\r\n<p>?</p>\r\n<p>个展 <br />2008<br />我的风景：刘炜作品展／红桥画廊／上海 <br />2006<br />落花·流水：刘炜个人作品展／红桥画廊／上海 <br />2005<br />刘炜2005纸上作品展／沪申画廊／上海 <br />刘炜个人作品展／Loft画廊／巴黎 <br />2004<br />刘炜“花儿”册页纸上作品展／麦勒画廊／卢塞恩 /瑞士</p>', '1965 Born in Beijing 1989 Graduated from the Department of Printmaking, Central Academy of Fine Arts, Beijing <br />Solo Exhibitions 2008 My Landscape: Liu Wei’s Solo Exhibition, Red Bridge Gallery, Shanghai 2006 Liu Wei’s <br />Solo exhibition, Red Bridge Gallery, Shanghai 2005 Works on paper,Liu Wei 2005,Shanghai Gallery of Art, <br />Shanghai Liu Wei,Loft Gallery, Paris 2004 Liu Wei “Flowers” Leporello-booksDrawings, GalerieUrsMeile, <br /><br />Luzern, Switzerland', '', '', '', '0', '2009-03-29 13:18:28'),
(7, 7, '徐冰', 'Xu Bing', '0', '<p>1955生于重庆 <br />1987获中央美术学院版画系硕士学位 <br />1990接受美国威斯康辛大学的邀请作为荣誉艺术家移居美国 <br />2007 获美国全美版画家协会颁发的“版画艺术终身成就奖”现为中央美术学院副院长</p>\r\n<p>?</p>\r\n<p>近期个展 <br />2008<br />徐冰：格罗斯曼艺术家个展／理查德 A.与利萨 W.格罗斯曼画廊、拉法耶特大学/宾州/美国 <br />徐冰的新观看方式/撒海尔画廊/吉姆斯麦迪森大学/弗吉尼亚州 /美国 <br />2007<br />天书到地书：徐冰的书本艺术/斯宾塞美术馆、堪萨斯大学 /堪萨斯州/美国 <br />2006<br />徐冰：现代艺术特展/苏州博物馆/中国</p>', '1955 Born in Chongqing, China 1987 Received MFA from Department of Printmaking, Central Academy of Fine Arts, Beijing <br />1990 Invited by University of Wisconsin and moved to the United States as honorary artist 2007 Received the Lifetime <br />Achievement Award of Southern Graphics Council. Now, Xu Bing is the Vice President of Central Academy of Fine Arts <br />Solo Exhibitions 2008 Xu Bing: Grossman Artist Solo Exhibition, Richard A. and Rissa W. Grossman Gallery, Lafayette College, <br />Pennsylvania, U.S.A Picturing Equality: Xu Bing’s New Ways of Seeing, Sawhill Gallery, James Madison University, Kansas <br /><br /><br />University, Virginia, U.S.A 2007 Book from the Sky to Book from the Ground: The Book Works of Xu Bing, Spencer Museum of <br />Art, Kansas, U.S.A 2006 Xu Bing, Suzhou Museum, Suzhou, China', '', '', '', '0', '2009-03-29 13:19:29'),
(3, 3, '刘野', 'Liu YE', '0', '<p>1964生于北京 <br />1984毕业于北京工艺美校 <br />1989毕业于中央美术学院壁画系 <br />1994毕业于德国柏林艺术学院并获硕士学位</p>\r\n<p>?</p>\r\n<p>展览 <br />2008<br />中国：面对现实／维也纳现代美术馆／奥地利 <br />2007<br />中国之窗／伯尔尼美术馆／瑞士 <br />2006<br />麻将：希克中国当代艺术收藏展／汉堡美术馆／德国 <br />首届中国当代艺术年鉴／中华世纪坛美术馆／北京 <br />Accrochage／20,21画廊／埃森/德国 <br />诱惑／SperoneWestwater画廊／纽约 <br />2005<br />刘野·金田胜一／Frank Schlag &amp; Cie画廊／埃森 /德国 <br />一卡通／顶层空间／北京</p>', '1964 Born in Beijing 1984 Graduated from School of Arts &amp; Crafts, Beijing 1989 Graduated from the Mural <br />Painting Department of Central Academy of Fine Arts, Beijing 1994 MFA, Hochschule der Kunst Berlin, Bildende <br />Kunst Berlin, Germany <br />Exhibitions 2008 China: Facing Reality,Vienna Modern Art Museum,Austria 2007 Chinese Window, Kunstmuseum <br />Bern, Bern, Switzerland 2006 Mahjong: Contemporary Chinese Art from the Sigg collection, Hamburger Kunsthalle, <br />Hamburg, Germany The First Chinese Contemporary Arts Annual Exhibition, China Millennium Monument Art <br /><br /><br />Museum, Beijing Accrochage, 20,21 Gallery, Essen, Germany Temptation, Sperone westwater Gallery, New York <br />2005 Liu Ye·Kaneda Shoich, Gallery Frank Schlag &amp; Cie. GmbH, Essen, Germany Cartoon, Top Space, Beijing', '', '', '', '0', '2009-03-29 13:04:54'),
(4, 4, '张晓刚', 'Zhang Xiaogang', '0', '<p>1958生于云南省昆明市 <br />1982毕业于四川美术学院</p>\r\n<p>?</p>\r\n<p>个展 <br />2009<br />张晓刚：灵魂上的影子/昆士兰现代美术馆/澳大利亚 <br />2008<br />张晓刚：修正/佩斯画廊/纽约 <br />张晓刚个展 /坦佩雷莎拉希尔登博物馆/芬兰 <br />2000<br />张晓刚 2000/MaxProtetch画廊/纽约<br />重要收藏美国纽约古根海姆博物馆、美国旧金山现代美术馆、日本福冈亚洲艺术馆、澳洲国家美术馆等等<br /></p>', '1958 Born in Kunming, Yunnan Province, China 1982 Graduated from the Sichuan Academy of Fine Arts, China <br />Solo Exhibitions 2009 Zhang Xiaogang: Shadows in Soul, Queensland Modern Museum, Australia 2008 Zhang <br />Xiaogang: Revision, Pace Gallery, New York Zhang Xiaogang Solo Exhibition, Sara Hilden Art Museum in <br /><br /><br />Tampere, Finland 2000 Zhang Xiaogang 2000, Gallery of Max Potetch, New York <br />Selected Museum Collections The Solomon R. Guggenheim Museum, U.S.A San Francisco Museum of Modern <br /><br /><br />Art, U.S.A Fukuoka Art Gallery, Japan National Gallery of Art, Australia', '', '', '', '0', '2009-03-29 13:16:52'),
(5, 5, '向京', 'Xiang Jing', '1', '<p>1968生于北京 <br />1988毕业于中央美术学院附中 <br />1995毕业于中央美术学院雕塑系</p>\r\n<p>?</p>\r\n<p>个展 <br />2008<br />全裸/当代唐人艺术中心/北京 <br />2007<br />一百个人演奏你？还是一个人？/诚品画廊 /台北 <br />2006<br />你的身体：向京作品 2000-2005/上海美术馆/上海 <br />2005<br />保持沉默：向京作品 2003-2005/季节画廊/北京 <br />2003<br />镜子里的女人/中国欧洲艺术中心/厦门 <br />2001<br />白日梦/向京雕塑展/常春藤书园/上海</p>', '1968 Born in Beijing 1988 Graduated from the Fine Arts School attached of the Central Academy of Fine Arts, <br />Beijing 1995 Graduated from the Department of Sculpture, Central Academy of Fine Arts, Beijing <br />Solo Exhibitions 2008 Naked beyond skin, Tang Contemporary Art, Beijing 2007 Are a Hundred Playing You&nbsp; <br />Or Just One&nbsp;, Eslite Gallery, Taipei, China 2006 Your Body: Xiang Jing 2000 – 2005, Shanghai Art Museum, <br />Shanghai 2005 Keep In Silence: Xiang Jing 2003 – 2005, China Art Seasons Gallery, Beijing 2003 Women In <br />The Mirror, Chinese European Art Center, Xiamen, China 2001 Day Dream: Xiang Jing Solo Exhibition, Ivy <br />Bookstore, Shanghai', '', '', '', '0', '2009-03-29 13:17:31'),
(9, 9, '孙良', 'Sun Liang', '0', '<p>1957生于浙江省杭州市<br />1982毕业于上海轻工业学院，现工作生活于上海</p>\r\n<p>?</p>\r\n<p>联展 <br />2007 <br />八五新潮：中国第一次当代艺术运动/尤伦斯当代艺术中心 /北京 <br />纹身月亮/张江当代艺术馆 /上海 <br />2006 <br />东方想象/中国美术馆 /北京 <br />图像的创世纪——孙良油画/上海美术馆 /上海 <br />2004<br />第五届上海双年展 /上海美术馆/上海 <br />映象／Gransden画廊／伦敦 <br />2003<br />形而上2003：上海抽象艺术展/上海美术馆/上海 <br />2002<br />首届广州三年展/广东美术馆 /广州/中国 <br />2001<br />首届成都双年展 /成都现代美术馆 /四川／中国<br /></p>', '1957 Born in Hangzhou, Zhejing Province, China 1982 Graduated from Shanghai Light Industry College. Now, <br />Living and workimg in Shanghai <br />Group Exhibitions 2007 ''85 New Wave - The Birth of Chinese Contemporary Art, UCCA, Beijing Tattooed Moon, <br /><br /><br />Zhangjing art Center,Shanghai 2006 Oriental Imagination, China Art Museum, Beijing Genesis of Image-Sunliang, <br /><br />Shanghai Art Museum, Shanghai 2004 The 5th Shanghai Biennial, Shanghai Art Museum, Shanghai Reflection, <br /><br />Gransden Gallery, London 2003 Metaphysics 2003 Shanghai Abstract Art Exhibition, Shanghai Art Museum, China <br />2002 The 1st Guangzhou Triennial, Guang Dong Art Museum, Guangzhou, China 2001 The 1st Chengdu Biennale, <br />Chengdu Modern Art Museum, Sichuan, China', '', '', '', '0', '2009-03-29 13:20:57'),
(11, 10, '海波', 'Hai Bo', '0', '<p>1962 生于吉林省长春市<br />1984 毕业于吉林艺术学院 <br />1989 结业于中央美术学院版画专业</p>\r\n<p>?</p>\r\n<p>个展 <br />2007 <br />The Story is Over： 海波个展／北京公社／北京 <br />2006 <br />海波个展／Max Protetch 画廊／纽约</p>', '1962 Born in Changchun, Jilin Province, China 1984 Graduated from the Jilin Academy of Fine Arts, China <br />1989 Advanced studied in the Department of Printmaking, Central Academy of Fine Arts, Beijing <br />Solo Exhibitions 2007 The Story is Over, Beijing Commune, Beijing 2006 Max Protetch Gallery, New York', '', '', '', '0', '2009-03-29 13:22:01'),
(12, 11, '尚扬', NULL, '0', '<p>1942 生于湖北洪湖<br />1981 湖北美术学院油画硕士研究生毕业<br />1989 湖北美术学院副院长<br />1995 华南师范大学美术研究所所长<br />2000 首都师范大学现代美术研究所所长</p>\r\n<p>&nbsp;</p>\r\n<p>展览<br />2008 <br />意派：中国“抽象”艺术三十年／laCaixa Forum 美术馆／巴塞罗那、马德里／西班牙<br />移花接木：中国当代艺术邀请展／华美术馆／深圳／中国<br />2007 <br />开放的中国／圣彼德堡国立俄罗斯博物馆／俄罗斯<br />丹山碧水：中德当代艺术家作品巡回展／德国吕贝克美术馆、普法尔茨历史博物馆／德国<br />风景：自然·心灵／赫尔辛基国家美术馆／芬兰</p>', NULL, '', NULL, '', '0', '2009-03-27 10:43:59'),
(13, 12, '王怀庆', NULL, '0', '<p>1944 生于北京<br />1969 毕业于中央工艺美院，获学士学位<br />1981 毕业于中央工艺美院，获硕士学位1987-1988 美国OCU 大学访问学者，北京画院一级画师</p>\r\n<p>展览<br />2008 <br />天工开物：王怀庆作品展／广东美术馆／广州／中国<br />王怀庆艺术展／历史博物馆／中国台北<br />2007 <br />巴塞尔艺术博览会／瑞士<br />丹山碧水：中德当代艺术家作品巡回展／德国吕贝克美术馆／德国普法尔茨历史博物馆／德国<br />2006 <br />意象武夷：中德艺术家联展／上海美术馆／上海<br />2004 <br />Marianne &amp; Heinrich Lenhardt Stiftung 夫妇收藏展／KaiserslauternPfalz 美术馆／德国<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 10:45:14'),
(14, 13, '江大海', NULL, '0', '<p>1949 生于江苏省南京市<br />1979 中央美术学院油画系教师<br />1986 毕业于中央美术学院油画系研究生班／现工作生活于北京</p>\r\n<p>?</p>\r\n<p>展览<br />2008 <br />月亮河当代艺术馆第一届月亮河雕塑艺术节／北京<br />2005 <br />江大海作品展／中国美术馆／北京<br />2004 <br />索非亚国际艺术基金会大展／法国<br />江大海作品展／上海美术馆／中国</p>', NULL, '', NULL, '', '0', '2009-03-27 10:50:56'),
(15, 14, '苏笑柏', NULL, '0', '<p>1949 生于中国湖北武汉<br />1969 毕业于武汉工艺美术学校<br />1985-1987 于北京中央美术学院油画系研修班学习<br />1987-1991 毕业于德国杜塞尔多艺术学院研究生班<br />1990-1992 德国杜塞尔多夫艺术学院大师弟子班<br />现生活工作于上海</p>\r\n<p>个展<br />2008 <br />澄怀观道：苏笑柏作品展／大未来画廊／台湾<br />考工记：苏笑柏作品展／今日美术馆／北京<br />2007 <br />大象无形：苏笑柏作品展／上海美术馆／上海<br />2006 <br />Beethovenstrasse 画廊／杜塞尔多夫／德国<br />2005 <br />阿里特画廊／慕尼黑／德国<br />2004 <br />艾姆特画廊／巴塞罗那／西班牙2002 议会大厦／美茵兹／德国</p>', NULL, '', NULL, '', '0', '2009-03-27 10:50:27'),
(16, 15, '斯蒂芬·拜肯豪尔', NULL, '0', '<p>1957 生于德国弗里茨拉<br />1976-1982 就读于德国汉堡艺术学院／师从德国著名艺术家Ullrich Ruckriem<br />现为卡尔斯鲁厄艺术学院教授<br />他是德国当前最具代表性的雕刻家</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2008 <br />堤坝之门美术馆／汉堡／德国<br />2007 <br />斯蒂芬·拜肯豪尔新作展／Deweer 画廊／比利时<br />现代艺术馆／萨尔兹堡／奥地利<br />Lars Bohman 画廊／斯登哥尔摩／瑞典<br />Thaddaeus Ropac 画廊／巴黎<br />2006 <br />状态艺术馆／巴登巴登／德国<br />林内博物馆／阿彭策尔／瑞士<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 10:54:03'),
(17, 16, '李大方', NULL, '0', '<p>1971 生于辽宁省沈阳市<br />2000 毕业于鲁迅美术学院油画系</p>\r\n<p>?</p>\r\n<p>个展<br />2007 <br />李大方个展／麦勒画廊／北京<br />2006 <br />移影：李大方个展／朱屺瞻艺术馆／上海<br />精致的旧事／麦勒画廊／卢塞恩／瑞士<br />2005 <br />肖像／玛蕊乐画廊／米兰／意大利<br />光天化日／艺术文件仓库／北京</p>', NULL, '', NULL, '', '0', '2009-03-27 10:58:44'),
(18, 17, '缪晓春', NULL, '0', '<p>1964 生于江苏省无锡市<br />1986 毕业于南京大学<br />1989 毕业于中央美术学院<br />1999 毕业于德国卡塞尔美术学院, 现任教于中央美术学院</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2008 <br />缪晓春：坐天观井／奥沙当代艺术中心／香港<br />天上人间：缪晓春的虚拟世界／大未来画廊／中国台北<br />2007 <br />缪晓春H2O ：艺术史研究／沃尔什画廊／芝加哥／美国<br />缪晓春：虚拟最后审判／南澳大利亚当代艺术中心（CACSA）2007 度当代视觉艺术计划／澳大利亚<br />2006 <br />缪晓春：都市山水／约翰·霍普·富兰克林文化中心／杜克大学／北卡罗来纳／美国</p>', NULL, '', NULL, '', '0', '2009-03-27 10:58:18'),
(19, 18, '郝强', NULL, '0', '<p>1976 生于天津<br />1996 毕业于中央美术学院附中<br />2001 年毕业于中央美术学院雕塑系</p>\r\n<p>?</p>\r\n<p>联展<br />2008 <br />N12 第四展／西五画廊／北京<br />2006 <br />N12 第二展／北京中央美院陈列馆<br />2005 <br />N12 首回展／北京中央美院陈列馆</p>', NULL, '', NULL, '', '0', '2009-03-27 11:05:47'),
(20, 19, '赵刚', NULL, '0', '<p>1961 生于北京<br />毕业于荷兰马斯特里赫特美术学院，纽约VassarCollege。<br />现生活工作于北京</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2007 <br />Jack Tilton 画廊／纽约<br />Christian Nagel 画廊／科隆／德国<br />风景·人物和我的文化／何香凝美术馆／深圳／中国<br />十号善赞里画廊／香港<br />2006 <br />Bleich-Rossi 画廊／维也纳／奥地利<br />2005 <br />纽约哈林的长征／横滨展览馆／横滨／日本</p>', NULL, '', NULL, '', '0', '2009-03-27 11:05:23'),
(21, 20, '徐一晖', NULL, '0', '<p>1964 生于江苏省连云港市<br />1985-1989 就读于南京艺术学院油画专业<br />1989-1990 任职于南京《江苏画刊》<br />1991-1992 任职于北京《艺术潮流》杂志，现居北京，自由艺术家。</p>\r\n<p>&nbsp;</p>\r\n<p><br />联展<br />2007 <br />后解严与后八九／两岸当代美术对照／台湾美术馆／台中<br />中国当代艺术／萨娜／哈登艺术博物馆／芬兰<br />2006-07 <br />雷达／维姬和肯特洛根收藏／丹佛艺术博物馆／美国<br />2006 <br />麻将／希客收藏中国当代艺术／汉堡艺术博物馆／德国<br />2004 <br />亚洲艺术／波洛那现代美术馆／意大利<br />2003 <br />中国艺术／马可当代艺术博物馆／罗马<br />中国当代艺术／路德维希当代艺术博物馆／布达佩斯<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 11:09:13'),
(22, 21, '罗克斯·佩尼', NULL, '0', '<p>1966 生于美国纽约<br />1987-1989 就读于美国纽约普瑞特艺术学院，罗克斯·佩尼是美国新秀艺术家，他的作品多次参加国际性展览并被诸多博物馆广泛收藏；他的木雕作品极具代表性，长期在如美国西雅图的奥林匹克雕塑公园等艺术馆展出。</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2009<br />美国纽约大都会美术馆2007 美国纽约麦迪逊时代公园<br />2006 <br />波兰国家美术馆</p>', NULL, '', NULL, '', '0', '2009-03-27 11:13:00'),
(23, 22, '丁乙', NULL, '0', '<p>1962 生于上海<br />1983 毕业于上海市工艺美术学校<br />1990 毕业于上海大学美术学院<br />2001 获德国沃普斯威的艺术基金会工作奖学金</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2008 <br />十示1989-2007：丁乙个展／博洛尼亚当代美术馆／博洛尼亚／意大利<br />2007 <br />丁乙／KarstenGreve 画廊／巴黎<br />2006 <br />经纬线：丁乙十年回顾展（1996-2006）／香格纳H 空间／上海<br />2005 <br />丁乙：十示／Ikon 美术馆／伯明翰／英国<br />2004 <br />十示：丁乙作品展／艺术文件仓库／北京<br />2003 <br />丁乙十示系列／麦勒画廊／卢塞恩／瑞士</p>', NULL, '', NULL, '', '0', '2009-03-27 11:15:18'),
(24, 23, '王光乐', NULL, '0', '<p>1976 生于福建<br />2000 毕业于中央美术学院油画系<br />2007 、2008 连续两年获得“艺术中国”年度优秀青年艺术家提名</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2007 <br />寿漆／AYE 画廊／北京<br />2005 <br />汉语／北京一月当代画廊／北京<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 11:17:22'),
(25, 24, '洪浩', NULL, '0', '<p>1965 生于北京<br />1985 毕业于中央美术学院附中<br />1989 毕业于中央美术学院版画系</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2007 <br />洪浩之雅集／前波画廊／纽约<br />2004 <br />阅览室／前波画廊／纽约<br />洪浩作品／Loft 画廊／巴黎<br />2003 <br />洪浩作品在阿尔勒国际摄影节／阿尔勒／法国<br />2000<br />景象／四合苑画廊／北京美术馆收藏美国纽约现代美术馆／英国大英博物馆／日本福冈亚洲美术馆／中国上海美术馆／美国联邦储备局／瑞士UBS 银行香港分行<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 11:20:03'),
(26, 25, '白宜洛', NULL, '0', '<p>1968 生于河南省洛阳市，现居住和工作在北京。</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2008 <br />驴和猪／磨金石空面／北京<br />白宜洛个展／华艺沙画廊／雅加达／印尼<br />2007 <br />宿命-4／麦勒画廊／卢塞恩／瑞士<br />2005 <br />宿命动物／玛蕊乐画廊／北京</p>', NULL, '', NULL, '', '0', '2009-03-27 16:03:04'),
(27, 26, '江芳', NULL, '0', '<p>1974 生于辽宁省<br />1995 毕业于中央美术学院附中<br />1999 毕业于中央美术学院油画系<br />现居北京从事艺术创作与教育</p>\r\n<p>&nbsp;</p>\r\n<p>联展<br />2008 <br />女性世界／田青画廊／上海<br />2007 <br />今日中国美术大展／中国美术馆<br />空白展／可当代艺术中心／上海<br />2005 <br />内与外／世纪翰墨画廊／北京</p>', NULL, '', NULL, '', '0', '2009-03-27 16:08:24'),
(28, 27, '胡勤武', NULL, '0', '<p>1969 生于山东省<br />1990 毕业于泰安师专美术系油画专业<br />1994 毕业于曲阜师范大学美术系<br />2008 毕业于中央美术学院油画系材料艺术工作室</p>\r\n<p>&nbsp;</p>\r\n<p>联展<br />2008 <br />未来天空：中国当代青年艺术家提名展／三尚艺术／今日美术馆／北京<br />图画手工：图画手工第三回展／偏锋新艺术空间／北京<br />拓展与融合：中国现代油画研究展／中国美术馆／北京<br />明亮的黑暗／布雷伯特瑞画廊／德国柏林<br />2007 <br />第四届画室开放日展／中央美术学院／北京</p>', NULL, '', NULL, '', '0', '2009-03-27 16:12:18'),
(29, 28, '刘文涛', NULL, '0', '<p>1973 生于山东省青岛市<br />1997 毕业于中央美术学院版画系获学士学位<br />2005 毕业于美国麻省州立大学达特默斯视觉与表演分院自由绘画系获硕士学位<br />现居北京</p>\r\n<p>?</p>\r\n<p>群展<br />2008 <br />看不见的青春：中国新锐艺术家展／WATERGATE 画廊／首尔·走向后抽象／偏锋新艺术空间／北京·时光与书写／空白空间／北京<br />中国压力：中国当代版画展／比梯海姆：比斯英恩城市美术馆／比梯海姆-比斯英恩／德国· 陈光武| 方力钧| 刘文涛／柏林东亚美术馆／德国<br />A+A ''2008 ：A+A 第三回展／上海多伦现代美术馆／上海·中国当代版画展／德国·光荣与梦想CHINESE RECORDS 五六七艺术展／北京·下午茶个展／韵画廊／北京</p>', NULL, '', NULL, '', '0', '2009-03-27 16:19:29'),
(30, 29, '练东亚', NULL, '0', '<p>1970 生于河南省商丘，现居住于北京。</p>\r\n<p>&nbsp;</p>\r\n<p>重要展览<br />2006 <br />吃Show／空间艺术／洛阳／河南<br />存在／空间艺术／洛阳／河南<br />亦真亦幻／OV 画廊／上海<br />2005 <br />表达／空间艺术／洛阳／河南</p>', NULL, '', NULL, '', '0', '2009-03-27 16:18:50'),
(31, 30, '喻红', NULL, '0', '<p>1966 生于北京<br />1984-1988 中央美术学院油画系学习<br />1994-1996 中央美术学院油画系学习<br />现工作生活在北京</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2006 <br />形象与场景／Loft 画廊／巴黎<br />2003<br />一个女人的生活：喻红的艺术／哈尔西美术馆／南卡罗莱那州／美国<br />古德豪斯当代艺术画廊／纽约</p>\r\n<p>2002 <br />目击成长：喻红作品展／北京远洋艺术中心／深圳何香凝美术馆／中国<br />1990 <br />喻红画展／中央美术学院画廊／北京<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:21:45'),
(32, 31, '草间弥生', NULL, '1', '<p>1929 出生于日本长野<br />1948 就读于京都市立工艺美术学校<br />1957 移居美国<br />1957-1958 在纽约艺术学生联盟学习<br />草间弥生是日本在世的最具影响力的艺术家，也是首位获得相当于艺术诺贝尔奖的日本PraemiumImperiale 世界文化奖的女艺术家；2008 年11 月，草间弥生的作品在佳士得纽约拍卖公司拍出579.45 万美金的高价，创造了女艺术家的最高拍卖记录。</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2009 <br />草间弥生个展／悉尼现代美术馆／澳大利亚<br />草间弥生作品展／松本城市美术馆／长野／日本<br />2007 <br />万点迷／海港城／香港</p>', NULL, '', NULL, '', '0', '2009-03-27 16:24:34'),
(33, 32, '刘韡', NULL, '0', '<p>1972 生于北京<br />1996 毕业于杭州中国美术学院</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2007 <br />徘徊者／U 空间／北京<br />爱它·咬它／艺术文件仓库／北京<br />2006 <br />刘韡财产／北京公社／北京<br />紫气／Grace Li 画廊／苏黎士／瑞士<br />2005 <br />战场／四合苑画廊／北</p>', NULL, '', NULL, '', '0', '2009-03-27 16:26:01'),
(34, 33, '段建伟', NULL, '0', '<p>1961 出生于河南省许昌市区<br />1981 毕业于河南大学</p>\r\n<p>&nbsp;</p>\r\n<p>展览<br />2008 <br />二段：段正渠段建伟作品展／中国美术馆／北京<br />08之约：十二人作品展／视平线画廊／上海<br />2005 <br />小孩：段建伟作品展／视平线画廊／上海<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:27:21'),
(35, 34, '李占洋', NULL, '0', '<p>1969 生于吉林省长春市，现生活工作在重庆和北京。</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2009 <br />性情／麦勒画廊／北京—卢塞恩／卢塞恩／瑞士<br />2008 <br />租：收租院／麦勒画廊／北京－卢塞恩／北京2007 裸露的人性／朱屺瞻美术馆／上海<br />2006 <br />场景／麦勒画廊／北京—卢塞恩／瑞士／卢塞恩<br />2003 <br />人间万象／艺术文件仓库／北京<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:28:50'),
(36, 35, '奈良美智', NULL, '0', '<p>1959 生于日本青森<br />1985-1987 就读于日本爱知县立艺术大学进行本科学习<br />1987 获得日本爱知县立艺术大学硕士1988-1993 在德国杜塞尔多夫艺术学院学习。<br />奈良美智是日本著名的当代艺术家，作品被许多博物馆收藏，如纽约现代艺术博物馆和洛杉矶当代艺术博物馆。</p>\r\n<p>&nbsp;</p>\r\n<p>重要个展<br />2009 <br />Marianne Boesky 画廊／纽约<br />2008-09 <br />Blum &amp; Poe 画廊／洛杉矶／美国<br />芭迪柯现代艺术中心／盖茨黑德／英国<br />Zink 画廊／慕尼黑／德国<br />2007 <br />奈良美智：我抽屉里的压箱宝／罗丹画廊／首尔<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:31:28'),
(37, 36, '杉本博司', NULL, '0', '<p>1948 生于日本东京<br />1970 毕业于东京Saint Paul''s University <br />1972 毕业于美国旧金山Art CenterCollege of Design <br />1974 赴美国纽约进行创作</p>\r\n<p>&nbsp;</p>\r\n<p>重要个展<br />2008 <br />七天七夜／高古轩画廊／纽约<br />杉本博司巡回个展／奥地利萨尔兹堡现代美术馆／德国柏林新国家美术馆／瑞士卢塞恩美术馆<br />历史中的历史／21世纪当代艺术馆／金泽／日本<br />2007 <br />光的乍泄／小柳画廊／东京<br />杉本博司／K20美术馆／杜塞尔多夫／德国、旧金山美术馆／美国<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:33:21'),
(38, 37, '王田田', NULL, '1', '<p>1974 生于北京<br />1997 毕业于中央美术学院壁画系<br />2001 毕业于美国纽约大学教育系获文学硕士学位</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2005 <br />个人展览／M.Sutherland 画廊／纽约<br />2004 <br />个展／九九画廊／德国<br />1998 <br />个人展览／四合苑画廊／北京<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:37:41'),
(39, 38, '洪磊', NULL, '0', '<p>1960 生于江苏省常州市<br />1987 毕业于南京艺术学院<br />1993 于中央美术学院学习版画</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2006 摄影系列：说吧，记忆（6 件）／美国驻中国大使馆收藏<br />2005 彩色摄影：仿《赵孟鹊华秋色图》／上海美术馆收藏<br />2004 彩色摄影：仿《赵孟鹊华秋色图》／美国芝加哥大学博物馆收藏<br />2003 洪磊的江南叙述／纽约<br />2002 中国肌理：洪磊艺术作品展／上海收藏<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:40:10'),
(40, 39, '马克·奎安', NULL, '0', '<p>1964 出生于伦敦<br />1985 毕业于剑桥大学罗宾森学院，YBA（英国青年艺术家）代表艺术家。</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2008 <br />Statuephilia-凯特·莫斯人像雕塑展／英国博物馆／伦敦<br />2007 <br />DHC／ART 当代艺术基金／蒙特利尔／加拿大<br />Sphinx-凯特·莫斯人像雕塑展／Mary Boone 画廊／纽约<br />2006 <br />赫斯特收藏展／Andipa 画廊／伦敦<br />马克·奎安作品展／EmanueleBonomi 画廊／米兰／意大利<br />2005 <br />马克·奎安个人展／Guereta 画廊／马德里<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:41:50'),
(41, 40, '叶永青', NULL, '0', '<p>1958 生于云南省昆明市<br />1982 毕业于四川美术学院绘画系油画专业<br />现任四川美术学院教授，生活创作于北京。</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2008 <br />迷涂症：叶永青艺术之旅／香港艺术中心<br />画鸟：矛盾与现实／纽约中国广场<br />2007 <br />画个鸟！方音空间／北京<br />一只忧伤的鸟／阿特塞帝画廊／首尔<br />2006 <br />单飞／蓝色空间画廊／成都<br />2005 <br />涂你个鸦／张江艺术馆／上海<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:43:56'),
(42, 41, '刘国松', NULL, '0', '<p>1932 生于安徽省<br />1949 定居台湾<br />1956 台湾师范大学毕业，创立“五月画会”发起现代艺术运动；<br />曾任美国威斯康辛州立大学，爱荷华大学客座教授，香港中文大学美术系系主任。</p>\r\n<p>&nbsp;</p>\r\n<p>重要个览 <br />2007 <br />宇宙心印：刘国松绘画一甲子／北京故宫武英殿／北京<br />2002 <br />宇宙心印——刘国松七十回顾展／中国历史博物馆／北京上海美术馆／广东美术馆<br />中华五千年文明艺术展／古根海姆美术馆／纽约<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:47:23'),
(43, 42, '曹晖', NULL, '0', '<p>1968 生于云南省昆明市<br />1991 云南艺术学院美术系学士<br />2000 中央美术学院雕塑系硕士</p>\r\n<p>&nbsp;</p>\r\n<p>个展<br />2008 <br />文明的盛宴／曹晖雕塑作品个展／寒舍空间／中国台北</p>\r\n<p>&nbsp;</p>\r\n<p>联展<br />2008 <br />未来天空／中国当代青年艺术家提名展／今日美术馆／北京<br />我的骨肉皮／ACAF NY 特别展／ACAF／纽约<br />移花接木／中国当代艺术中的后现代方式／华美术馆／深圳／中国<br />向内／偏锋新艺术空间／北京<br />自由落体／陈绫蕙当代空间／北京<br /></p>', NULL, '', NULL, '', '0', '2009-03-27 16:50:07'),
(44, 43, '荒木经惟', '', '0', '<p>1940 生于日本东京<br />1959-1963 在日本千叶大学学习摄影与电影制作<br />1963 毕业于千叶大学工学系摄影专业<br />1990获得日本摄影学会的Shashin-no-kai 奖<br />1991 获第七届HigashikawaPrize 奖<br />1994 日本Inter-Design 论坛大奖赛<br />2008 获奥地利装饰设计科学与艺术荣誉奖</p>\r\n<p>?</p>\r\n<p>近期个展<br />2008 <br />Nobuyoshi Araki／熊本市现代美术馆／熊本／日本<br />Nobuyoshi Araki-Silent Wishes／奥地利萨尔茨堡现代博物馆／萨尔茨堡／奥地利<br />Kinbaku Riis 画廊／奥斯陆／挪威<br />Hana Kibaku／Taka Ishii 画廊／东京<br />2007 <br />荒木经惟：自我、生命、死亡／斯德哥尔摩美术馆／斯德哥尔摩／瑞典<br />Nobuyoshi Araki-Taka Ishii 画廊／东京<br />Carte Blanche ：Nobuyoshi Araki／Kamel Mennour 画廊／巴黎<br /></p>', '1940 Born in Tokyo 1959-1963 Studied photography and film-making at Chiba University 1963 Graduated from the <br />Department of Engineering at Chiba University; majored in Photography and Film Making 1990 Shashin-no-kai Prize from <br />the Photographic Society of Japan 1991 7th Higashikawa Prize 1994 Japan Inter-Design Forum Grand Prix 2008 Austrian <br />Decoration of Honor for Science and Arts <br />Selected Solo Exhibitions 2008 Nobuyoshi Araki - Contemporary Art Museum, Kumamoto - CAMK, Kumamoto, Japan <br /><br />Nobuyoshi Araki - Silent Wishes - Museum der Moderne Salzburg, Salzburg Kinbaku - Galleri Riis, Oslo Hana Kibaku <br /><br />- Taka Ishii Gallery, Tokyo Nobuyoshi Araki - Taka Ishii Gallery, Tokyo Carte Blanche - Nobuyoshi Araki - Galerie Kamel <br />Mennour, Paris', '', '', '', '0', '2009-03-29 13:02:54'),
(45, 44, '陈劭雄', '', '0', '<p>1962 生于中国广东汕头<br />1984 毕业于广州美术学院版画系<br />1990 和林一林、梁矩辉组建“大尾象工作组”</p>\r\n<p>?</p>\r\n<p>重要个展<br />2008 <br />集体记忆Art &amp; Public-Cabinet PH／日内瓦／瑞士<br />2007 <br />看见的和看不见的，知道的和不知道的／U 空间／北京<br />陈劭雄／BarbaraGross 画廊／慕尼黑／德国<br />2006 <br />陈劭雄／Art &amp; Public-Cabinet PH／日内瓦／瑞士<br />2005 <br />双重风景／GraceAlexander 当代艺术画廊／苏黎世<br />墨水城市／四合苑画廊／北京<br /></p>', '1962 Born in Shantou, Guangdong Province, China 1984 Graduated from the Department of Printmaking, <br />Guangzhou Academy of Fine Art 1990 Formed Big Tail Elephant Group with Lin Yilin, Liang Juhui <br />Solo Exhibitions 2008 Collective Memory, Art &amp; Public - Cabinet PH, Geneva, Switzerland 2007 Visible and <br />invisible, Known and Unknown,UniversalStudios-beijing,Beijing Chen Shaoxiong Barbara Gross Galerie, <br /><br /><br />Munich, Germany 2006 Chen Shaoxiong, Art &amp; Public - Cabinet PH, Geneva, Switzerland 2005 Double <br />Landscape, Grace Alexander Contemporary Art Gallery, Zurich, Switzerland Ink City: New Works by Chen <br /><br /><br />Shaoxiong, The CourtYard Annex, Beijing', '', '', '', '0', '2009-03-29 13:02:25'),
(46, 45, '孙原·彭禹', '', '0', '<p>孙原 <br />1972 生于北京<br />1991 毕业于中央美院附中<br />1995 毕业于中央美院油画系第四工作室<br />2001 获CCAA 青年艺术家奖</p>\r\n<p>彭禹 <br />1974 生于黑龙江省<br />1994 毕业于中央美院附中<br />1998 毕业于中央美院油画系第三工作室<br />2001 获CCAA 青年艺术家奖</p>\r\n<p>?</p>\r\n<p>重要展览<br />2008 <br />中国21世纪：艺术的身份与转形／罗马／意大利<br />无“动”于衷／常青画廊／北京<br />前卫中国／国立新美术馆／东京<br />2007 <br />莫斯科双年展／俄罗斯<br /><a href="mailto:“$%?……@$">“$%?……@$</a>!# 饿￥日”展／唐人当代艺术中心／北京<br />2006 <br />中国馆特别计划／利物浦双年展／英国利物浦<br />匙——中国当代艺术展／大都会博物馆／菲律宾马尼拉<br /></p>', 'Sun Yuan 1972 Born in Beijing 1991 Graduated from the Fine Arts School attached of the Central Academy of <br />Fine Arts, Beijing 1995 Graduated from Department of Oil painting 4th studio, the Central Academy of Fine Arts <br />2001 Won The Contemporary Chinese Art Award of (CCAA) <br />Peng Yu 1974 Born in Heilongjiang Province, China 1994 Graduated from the Fine Arts School attached of the <br />Central Academy of Fine Arts, Beijing 1998 Graduated from Department of Oil painting 3rd studio, the Central <br />Academy of Fine Arts 2001 Won The Contemporary Chinese Art Award (CCAA) <br />Group Exhibitions 2008 Cina XXI Secolo: Arte fraldentita e Trasformazione. Palaexpo delle Esposizioni Comune <br /><br /><br />of Roma,Italy Unmoved, Galleria Continua-Beijing, Beijing Avant- garde China, The National Art Center, Tokyo <br />2007 Moscow Biennale of contemporany art, Moscow $%&nbsp;……@$!#饿￥日 <br />, Tang Contemporary, Beijing <br /><br /><br />2006 China Pavillion, Special project, Liverpool Biennial, U.K. Double – kick Cracker.Beijing china Susi – <br /><br />Future&amp; Fantasy, Metropolitan Museum of Manila ,Philippine', '', '', '', '0', '2009-03-29 13:01:46'),
(47, 46, '景柯文', 'Jing kEWEn', '0', '<p>1965 生于青海省西宁市<br />1986 毕业于西安美术学院油画系后留校任教<br />现生活工作于北京</p>\r\n<p>?</p>\r\n<p>个展<br />2008 <br />礼仪廉耻／景柯文作品2008个展／艺术文件仓库／北京<br />孔子代码—景柯文作品展／香港艺术中心／香港AnnaNing 画廊／香港<br />2007 <br />记忆·光荣·梦想：景柯文作品展1990-2007／何香凝美术馆／深圳／中国<br /></p>', '1965 Born in Xining, Qinghai Province, China 1986 Graduated from the Department of Oil Painting, Xi’an <br />Academy of Fine Arts. Living and working in Beijing <br />Solo Exhibitions 2008 Courtesy, Justice, Honest and Humility-Works by Jing Kewen, China Art Archives <br />Warehouse, Beijing The Confucius Code, Paintings by Jing Kewen, Hong Kong Arts Centre, China (presented <br /><br /><br />by Anna Ning Fine Art, Hong Kong) 2007 Memory, Glory and Dream: Painting of Jing Kewen 1990 - 2007, He <br />Xiangning Art Museum, Shenzhen, China', '', '', '', '0', '2009-03-29 12:56:23'),
(48, 47, '隋建国', 'Sui Jianguo', '0', '<p>1956 生于山东省青岛市，现为中央美术学院雕塑系主任教授。</p>\r\n<p>?</p>\r\n<p>个展<br />2008 <br />艺术·时间·广场：隋建国作品展／香港<br />2007 <br />大提速：隋建国空间影像作品展／阿拉里奥北京· 点穴：隋建国艺术展／浦江新城／上海<br />2005 <br />隋建国：理性的沉睡／亚洲美术馆／旧金山／美国<br />1999 <br />衣纹研究：隋建国作品展／通道画廊／北京<br />1997 <br />世纪的影子：隋建国作品展／维多利亚艺术学院／墨尔本／澳大利亚<br />1996 <br />隋建国作品展／汉雅轩画廊／香港<br /></p>', '1956 Born in Qingdao, Shandong Province, China, he is Professor and Director of Department of Sculpture of <br />Central Academy of Fine Arts, Beijing <br />Solo Exhibitions 2008 Art Time Square-Exhibition of works by Sui Jianguo, HongKong 2007 Speeding Up:Sui <br />Jianguo-Space-Video Exhibition, ARARIO Gallery, Beijing Dian Xue - Sui Jianguo Art Works, OCAT, Shanghai <br /><br /><br />2005 Sui Jianguo: The Sleep of Reason, Asian Art Museum, San Francisco, U.S.A 1999 Clothes Veins Study, <br />Passage Gallery, Beijing 1997 You Meet the Shadow of Hundred Years, Victoria College of the Arts, Melbourne, <br />Australia 1996 Exhibition of Works by Sui Jianguo, Hanart TZ Gallery, Hong Kong', '', '', '', '0', '2009-03-29 12:50:43'),
(56, 49, 'testete', 'dsfsdfsdf', '0', 'sdfsdf', 'fsdfsdfsd', '', '', '', '0', '2009-04-08 12:06:04'),
(55, 48, 'dfdsfs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2009-04-04 09:14:22'),
(57, 50, 'dfsdfsde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2009-04-08 13:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(3) NOT NULL auto_increment,
  `pID` int(3) default '0' COMMENT '0一级目录;父目录ID',
  `name` varchar(50) default NULL COMMENT '目录中文名称',
  `ename` varchar(200) default NULL COMMENT '目录英文名称',
  `addDate` datetime default NULL COMMENT '添加日期',
  `orderID` int(11) default NULL COMMENT '顺序ID',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='分类信息表' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `pID`, `name`, `ename`, `addDate`, `orderID`) VALUES
(1, 0, '布面油画', 'oil on canvas', '2009-03-23 05:10:04', NULL),
(2, 0, '纸本油画', 'oil on paper', '2009-03-23 05:10:38', NULL),
(3, 0, '玻璃钢着色版本', 'painted fiberglass Edition', '2009-03-23 05:11:07', NULL),
(4, 0, '木刻版画', 'Woodcutting Printmaking A.P.', '2009-03-23 05:11:34', NULL),
(5, 0, '照片', '', '2009-03-28 03:53:36', NULL),
(6, 0, '布面丙烯', 'acrylic on canvas', '2009-03-28 04:01:16', NULL),
(7, 0, '铜版画', 'Etching', '2009-03-28 04:08:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL auto_increment,
  `cateID` int(5) NOT NULL default '2',
  `title` varchar(50) default NULL,
  `etitle` varchar(50) default NULL,
  `content` longtext,
  `econtent` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统内容（公司简介等）' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `cateID`, `title`, `etitle`, `content`, `econtent`) VALUES
(1, 1, '关于睿艺', 'About Reart', '<p>　　这是一个当代艺术作品的推荐网站。我们为收藏者定期推荐值得长期持有并具投资价值的当代艺术品。 <br />　　艺术品被视为除了股票基金、房地产外的第三大投资商品。但艺术品流通率低，交易群小，变现性低，价格不够透明，风险评估困难。所以，艺术投资，绝对是智能型投资，一定得多作功课，多练眼力。但好眼力，是用脚走出来。所以，得多去美术馆、画廊、博览会，同时多向经纪人请教、结识艺术家、并与同好交换情报。还得多浏览画册、艺术网站及杂志，增加美术史常识。艺术市场上，能掌握精准信息者，就是赢家。但现在信息爆炸，展览太多，入门不易。所以，我们以这个网站，为收藏家挑选值得关注的艺术家，并提供清晰的买进建议。我们的网站上，还有关于当代艺术收藏的相关知识，可供同好研究。</p>\r\n<p>　　艺术投资稳赢不输的秘诀，只有一个，就是自己喜欢，并成为一个真正的收藏家。所以，只有以“收藏 ”为出发点，凌驾投资获利的目的，才能为自己买进无价的鉴赏力。投资，只是窄化的金钱游戏；收藏，却是日积月累的美学涵养。真正的收藏家，买画就是为了欣赏，并不关心升值与否。艺术收藏的最大乐趣，并非来自于脱手变现的实质获利，而是证明自己眼光的成就感；增值的不是艺术品本身，而是流连其中的乐趣与品味。</p>\r\n<p>　　收藏是一种审美生活，一种有品味的文化活动，一种精神生活的延续，一种为艺术而艺术的高尚自觉。一件藏品开启了一个世界，“收藏 ”也因此成为建构个人艺术国度的经验。收藏家的藏品，比他的财富更有分量；因为他收藏的不只是一件艺术品，也是一段文化与思想的历史。</p>\r\n<p>　　这里，我们为收藏家精心挑选值得收藏的当代艺术家作品。挑选艺术家的标准依循三个原则：第一、观念与技法是否有原创性，第二、学术地位与艺术史定位，第三、市场认同度。</p>\r\n<p>　　如果你一直想收藏当代艺术品，却不得其门而入。或许从这里开始。</p>\r\n<p>　　如果你开始收藏了，却感到迷茫，或许从这里能得到启发。</p>\r\n<p>　　如果你需要得到收藏常识，或与同好讨论，请浏览我们网站。</p>\r\n<p>　　如果你想为你的好藏品找到好买家，也可以委托我们。</p>\r\n<p><br />　　　　　　　　　　　　　　　　　　　　　　　　　总监 /赵孝萱</p>\r\n<p>?</p>\r\n<p>?</p>\r\n<p>?</p>\r\n<p>公司：联合艺道（北京）文化传媒有限公司<br />地址：北京市朝阳区百子湾路32号院北区3号楼B座705室<br />邮编：100022</p>\r\n<p>电话：+86 10 5876 9207/9013<br />传真：+86 10 5876 9207/9013-808<br />网址：<a href="http://www.reart.com.cn">www.reart.com.cn</a><br />电邮：<a href="mailto:service@reart.com.cn">service@reart.com.cn</a></p>\r\n<p>总监：赵孝萱<br />顾问：田恺</p>\r\n<p>行政主管：陈捷</p>\r\n<p>英文翻译：黄启哲 吕亨英<br />法律顾问：北京市昆仑律师事务所 杨怀民</p>\r\n<p>贵宾接待处：<br />北京市朝阳区百子湾路32号院北区一号楼9号 东站画廊<br /></p>\r\n<p>?</p>', 'About Reart'),
(2, 2, '投资收藏咨询', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(6) default '0' COMMENT '会员ID，为空则为匿名留言',
  `content` text NOT NULL COMMENT '留言内容',
  `type` enum('0','1') default '0',
  `addDate` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '留言时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言信息表' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `guestbook`
--


-- --------------------------------------------------------

--
-- Table structure for table `loginlog`
--

CREATE TABLE IF NOT EXISTS `loginlog` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(10) NOT NULL COMMENT '会员ID',
  `loginDate` datetime NOT NULL COMMENT '登录时间',
  `logoutDate` datetime NOT NULL COMMENT '登出时间',
  `loginIP` varchar(50) default NULL COMMENT '登录ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员登录日志' AUTO_INCREMENT=136 ;

--
-- Dumping data for table `loginlog`
--

INSERT INTO `loginlog` (`id`, `userID`, `loginDate`, `logoutDate`, `loginIP`) VALUES
(1, 1, '2009-03-21 06:37:04', '0000-00-00 00:00:00', '221.221.166.52'),
(2, 1, '2009-03-21 08:40:34', '0000-00-00 00:00:00', '221.221.166.52'),
(3, 2, '2009-03-22 08:43:29', '0000-00-00 00:00:00', '114.240.64.160'),
(4, 3, '2009-03-22 08:44:10', '0000-00-00 00:00:00', '114.240.64.160'),
(5, 3, '0000-00-00 00:00:00', '2009-03-22 10:08:52', '114.240.77.86'),
(6, 3, '2009-03-22 14:25:46', '0000-00-00 00:00:00', '123.115.176.36'),
(7, 1, '2009-03-22 14:38:13', '0000-00-00 00:00:00', '221.221.166.52'),
(8, 1, '0000-00-00 00:00:00', '2009-03-22 14:39:16', '221.221.166.52'),
(9, 4, '2009-03-22 15:36:47', '0000-00-00 00:00:00', '221.221.166.52'),
(10, 1, '2009-03-22 16:08:56', '0000-00-00 00:00:00', '221.221.166.52'),
(11, 1, '2009-03-22 16:11:32', '0000-00-00 00:00:00', '221.221.166.52'),
(12, 1, '0000-00-00 00:00:00', '2009-03-22 16:12:02', '221.221.166.52'),
(13, 4, '2009-03-23 01:35:20', '0000-00-00 00:00:00', '123.127.164.5'),
(14, 3, '2009-03-23 03:08:10', '0000-00-00 00:00:00', '219.142.130.99'),
(15, 3, '0000-00-00 00:00:00', '2009-03-23 03:08:55', '219.142.130.99'),
(16, 4, '2009-03-23 03:10:21', '0000-00-00 00:00:00', '123.127.164.5'),
(17, 4, '2009-03-23 03:11:00', '0000-00-00 00:00:00', '123.127.164.5'),
(18, 4, '2009-03-23 03:12:52', '0000-00-00 00:00:00', '123.127.164.5'),
(19, 1, '2009-03-23 03:38:03', '0000-00-00 00:00:00', '123.127.164.5'),
(20, 1, '0000-00-00 00:00:00', '2009-03-23 03:38:08', '123.127.164.5'),
(21, 1, '2009-03-23 03:38:27', '0000-00-00 00:00:00', '123.127.164.5'),
(22, 1, '2009-03-23 03:41:23', '0000-00-00 00:00:00', '123.127.164.5'),
(23, 1, '2009-03-23 03:42:27', '0000-00-00 00:00:00', '123.127.164.5'),
(24, 1, '0000-00-00 00:00:00', '2009-03-23 03:43:11', '123.127.164.5'),
(25, 1, '0000-00-00 00:00:00', '2009-03-23 03:51:43', '123.127.164.5'),
(26, 1, '0000-00-00 00:00:00', '2009-03-23 03:58:22', '123.127.164.5'),
(27, 1, '2009-03-23 04:00:44', '0000-00-00 00:00:00', '123.127.164.5'),
(28, 1, '2009-03-23 04:02:10', '0000-00-00 00:00:00', '123.127.164.5'),
(29, 1, '0000-00-00 00:00:00', '2009-03-23 04:51:10', '123.127.164.5'),
(30, 1, '2009-03-23 05:05:39', '0000-00-00 00:00:00', '123.127.164.5'),
(31, 1, '0000-00-00 00:00:00', '2009-03-23 05:20:32', '123.127.164.5'),
(32, 3, '2009-03-23 05:52:51', '0000-00-00 00:00:00', '219.142.130.99'),
(33, 3, '0000-00-00 00:00:00', '2009-03-23 05:54:28', '219.142.130.99'),
(34, 3, '2009-03-23 05:58:19', '0000-00-00 00:00:00', '219.142.130.99'),
(35, 3, '0000-00-00 00:00:00', '2009-03-23 06:06:30', '219.142.130.99'),
(36, 4, '0000-00-00 00:00:00', '2009-03-23 06:34:38', '123.127.164.5'),
(37, 1, '2009-03-24 02:03:36', '0000-00-00 00:00:00', '123.127.164.5'),
(38, 3, '2009-03-24 03:11:59', '0000-00-00 00:00:00', '219.142.130.99'),
(39, 1, '2009-03-24 05:28:52', '0000-00-00 00:00:00', '123.127.164.5'),
(40, 1, '0000-00-00 00:00:00', '2009-03-24 05:32:55', '123.127.164.5'),
(41, 1, '2009-03-24 05:33:02', '0000-00-00 00:00:00', '123.127.164.5'),
(42, 1, '0000-00-00 00:00:00', '2009-03-24 05:33:28', '123.127.164.5'),
(43, 1, '2009-03-24 05:34:24', '0000-00-00 00:00:00', '123.127.164.5'),
(44, 1, '0000-00-00 00:00:00', '2009-03-24 05:35:26', '123.127.164.5'),
(45, 1, '2009-03-24 07:50:51', '0000-00-00 00:00:00', '123.127.164.5'),
(46, 1, '0000-00-00 00:00:00', '2009-03-24 07:52:26', '123.127.164.5'),
(47, 1, '2009-03-24 10:45:25', '0000-00-00 00:00:00', '123.127.164.5'),
(48, 1, '2009-03-24 14:36:41', '0000-00-00 00:00:00', '221.221.152.207'),
(49, 2, '2009-03-24 15:08:01', '0000-00-00 00:00:00', '221.221.152.207'),
(50, 2, '0000-00-00 00:00:00', '2009-03-24 15:10:55', '221.221.152.207'),
(51, 2, '2009-03-24 15:27:54', '0000-00-00 00:00:00', '221.221.152.207'),
(52, 1, '2009-03-26 05:36:26', '0000-00-00 00:00:00', '219.142.231.74'),
(53, 1, '0000-00-00 00:00:00', '2009-03-26 05:58:15', '219.142.231.74'),
(54, 1, '2009-03-26 06:09:33', '0000-00-00 00:00:00', '219.142.231.74'),
(55, 1, '0000-00-00 00:00:00', '2009-03-26 06:36:53', '219.142.231.74'),
(56, 1, '2009-03-26 06:45:31', '0000-00-00 00:00:00', '219.142.231.74'),
(57, 1, '0000-00-00 00:00:00', '2009-03-26 06:54:39', '219.142.231.74'),
(58, 1, '2009-03-26 06:58:34', '0000-00-00 00:00:00', '219.142.231.74'),
(59, 1, '0000-00-00 00:00:00', '2009-03-26 07:00:02', '219.142.231.74'),
(60, 1, '2009-03-26 07:12:09', '0000-00-00 00:00:00', '219.142.231.74'),
(61, 1, '0000-00-00 00:00:00', '2009-03-26 07:17:56', '219.142.231.74'),
(62, 1, '2009-03-26 08:55:18', '0000-00-00 00:00:00', '219.142.231.74'),
(63, 1, '0000-00-00 00:00:00', '2009-03-26 08:57:31', '219.142.231.74'),
(64, 3, '2009-03-26 09:16:05', '0000-00-00 00:00:00', '219.142.133.188'),
(65, 5, '2009-03-26 12:39:17', '0000-00-00 00:00:00', '123.117.183.251'),
(66, 5, '0000-00-00 00:00:00', '2009-03-26 12:41:05', '123.117.183.251'),
(67, 1, '2009-03-26 15:24:26', '0000-00-00 00:00:00', '125.33.197.4'),
(68, 1, '0000-00-00 00:00:00', '2009-03-26 15:59:27', '125.33.197.4'),
(69, 1, '2009-03-26 16:02:16', '0000-00-00 00:00:00', '125.33.197.4'),
(70, 1, '0000-00-00 00:00:00', '2009-03-26 17:02:03', '125.33.197.4'),
(71, 1, '2009-03-26 17:03:34', '0000-00-00 00:00:00', '125.33.197.4'),
(72, 1, '0000-00-00 00:00:00', '2009-03-26 17:04:21', '125.33.197.4'),
(73, 1, '2009-03-27 03:12:37', '0000-00-00 00:00:00', '219.142.242.21'),
(74, 1, '0000-00-00 00:00:00', '2009-03-27 03:59:57', '219.142.242.21'),
(75, 1, '2009-03-27 07:58:33', '0000-00-00 00:00:00', '219.142.228.16'),
(76, 2, '2009-03-27 08:16:32', '0000-00-00 00:00:00', '219.142.228.16'),
(77, 2, '0000-00-00 00:00:00', '2009-03-27 08:19:18', '219.142.228.16'),
(78, 2, '2009-03-27 09:24:48', '0000-00-00 00:00:00', '219.142.228.16'),
(79, 2, '0000-00-00 00:00:00', '2009-03-27 09:26:10', '219.142.228.16'),
(80, 2, '2009-03-27 09:26:21', '0000-00-00 00:00:00', '219.142.228.16'),
(81, 2, '0000-00-00 00:00:00', '2009-03-27 09:26:39', '219.142.228.16'),
(82, 1, '2009-03-27 09:26:49', '0000-00-00 00:00:00', '219.142.228.16'),
(83, 1, '0000-00-00 00:00:00', '2009-03-27 09:29:23', '219.142.228.16'),
(84, 3, '2009-03-27 09:29:33', '0000-00-00 00:00:00', '219.142.228.16'),
(85, 3, '0000-00-00 00:00:00', '2009-03-27 09:29:53', '219.142.228.16'),
(86, 1, '2009-03-27 09:30:03', '0000-00-00 00:00:00', '219.142.228.16'),
(87, 1, '0000-00-00 00:00:00', '2009-03-27 09:30:09', '219.142.228.16'),
(88, 3, '2009-03-27 10:34:17', '0000-00-00 00:00:00', '219.142.228.16'),
(89, 3, '0000-00-00 00:00:00', '2009-03-27 11:20:55', '219.142.228.16'),
(90, 3, '2009-03-27 15:59:48', '0000-00-00 00:00:00', '123.117.173.240'),
(91, 3, '0000-00-00 00:00:00', '2009-03-27 16:36:14', '123.117.173.240'),
(92, 3, '2009-03-27 16:36:31', '0000-00-00 00:00:00', '123.117.173.240'),
(93, 3, '0000-00-00 00:00:00', '2009-03-27 17:36:55', '123.117.173.240'),
(94, 2, '2009-03-28 03:09:15', '0000-00-00 00:00:00', '221.221.160.18'),
(95, 2, '0000-00-00 00:00:00', '2009-03-28 03:10:39', '221.221.160.18'),
(96, 1, '2009-03-28 03:10:50', '0000-00-00 00:00:00', '221.221.160.18'),
(97, 3, '2009-03-28 03:45:18', '0000-00-00 00:00:00', '123.117.189.109'),
(98, 2, '2009-03-28 04:38:32', '0000-00-00 00:00:00', '221.221.160.18'),
(99, 2, '0000-00-00 00:00:00', '2009-03-28 04:49:38', '221.221.160.18'),
(100, 3, '2009-03-28 05:45:45', '0000-00-00 00:00:00', '123.117.189.109'),
(101, 3, '0000-00-00 00:00:00', '2009-03-28 05:49:13', '123.117.189.109'),
(102, 1, '2009-03-28 06:58:17', '0000-00-00 00:00:00', '221.221.160.18'),
(103, 1, '2009-03-28 06:59:52', '0000-00-00 00:00:00', '221.221.160.18'),
(104, 1, '0000-00-00 00:00:00', '2009-03-28 06:59:53', '221.221.160.18'),
(105, 1, '2009-03-28 07:00:18', '0000-00-00 00:00:00', '221.221.160.18'),
(106, 1, '0000-00-00 00:00:00', '2009-03-28 07:00:55', '221.221.160.18'),
(107, 1, '2009-03-28 07:01:30', '0000-00-00 00:00:00', '221.221.160.18'),
(108, 1, '0000-00-00 00:00:00', '2009-03-28 07:06:47', '221.221.160.18'),
(109, 1, '2009-03-28 07:07:10', '0000-00-00 00:00:00', '221.221.160.18'),
(110, 1, '0000-00-00 00:00:00', '2009-03-28 07:23:47', '221.221.160.18'),
(111, 1, '2009-03-28 07:24:18', '0000-00-00 00:00:00', '221.221.160.18'),
(112, 1, '0000-00-00 00:00:00', '2009-03-28 07:46:07', '221.221.160.18'),
(113, 1, '2009-03-28 08:27:50', '0000-00-00 00:00:00', '221.221.160.18'),
(114, 1, '2009-03-28 08:42:41', '0000-00-00 00:00:00', '221.221.160.18'),
(115, 1, '0000-00-00 00:00:00', '2009-03-28 13:59:36', '221.221.160.18'),
(116, 2, '2009-03-28 14:50:38', '0000-00-00 00:00:00', '221.221.160.18'),
(117, 2, '0000-00-00 00:00:00', '2009-03-28 15:19:54', '221.221.160.18'),
(118, 2, '2009-03-28 15:20:12', '0000-00-00 00:00:00', '221.221.160.18'),
(119, 2, '0000-00-00 00:00:00', '2009-03-28 15:31:52', '221.221.160.18'),
(120, 2, '2009-03-29 02:27:52', '0000-00-00 00:00:00', '221.221.160.18'),
(121, 2, '0000-00-00 00:00:00', '2009-03-29 02:28:06', '221.221.160.18'),
(122, 1, '2009-03-29 02:28:14', '0000-00-00 00:00:00', '221.221.160.18'),
(123, 1, '2009-03-29 12:39:31', '0000-00-00 00:00:00', '221.221.160.18'),
(124, 1, '2009-03-29 13:27:34', '0000-00-00 00:00:00', '221.221.161.233'),
(125, 2, '2009-03-29 13:32:55', '0000-00-00 00:00:00', '221.221.161.233'),
(126, 2, '0000-00-00 00:00:00', '2009-03-29 13:38:23', '221.221.161.233'),
(127, 2, '2009-03-29 13:40:08', '0000-00-00 00:00:00', '221.221.161.233'),
(128, 1, '2009-03-29 14:13:13', '0000-00-00 00:00:00', '127.0.0.1'),
(129, 6, '2009-03-29 14:23:52', '0000-00-00 00:00:00', '221.221.161.233'),
(130, 1, '2009-03-29 15:28:57', '0000-00-00 00:00:00', '221.221.161.233'),
(131, 2, '2009-03-29 15:42:25', '0000-00-00 00:00:00', '221.221.161.233'),
(132, 1, '2009-03-29 16:05:48', '0000-00-00 00:00:00', '221.221.161.233'),
(133, 1, '0000-00-00 00:00:00', '2009-03-29 16:19:38', '221.221.161.233'),
(134, 2, '0000-00-00 00:00:00', '2009-03-29 16:23:29', '221.221.161.233'),
(135, 3, '2009-03-30 01:58:45', '0000-00-00 00:00:00', '219.142.243.2');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(2) NOT NULL auto_increment,
  `userName` varchar(20) NOT NULL COMMENT '登录ID',
  `pwd` varchar(40) NOT NULL COMMENT '密码',
  `trueName` varchar(20) NOT NULL COMMENT '真实姓名',
  `msn` varchar(40) NOT NULL COMMENT 'MSN',
  `qq` int(15) default '0' COMMENT 'qq',
  `email` varchar(40) default NULL COMMENT '邮箱',
  `telephone` varchar(20) default NULL COMMENT '联系电话',
  `mobile` varchar(20) default NULL COMMENT '手机',
  `status` enum('0','1','2') NOT NULL default '1' COMMENT '状态0＝关闭，1＝正确，2冻结',
  `lastTime` datetime default '0000-00-00 00:00:00' COMMENT '最后登录时间',
  `lastIP` varchar(16) default NULL COMMENT '最后登录IP',
  `loginStatus` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='后台用户信息表' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `userName`, `pwd`, `trueName`, `msn`, `qq`, `email`, `telephone`, `mobile`, `status`, `lastTime`, `lastIP`, `loginStatus`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '睿艺', '', 0, '', '', '', '1', '2009-04-10 06:08:01', '127.0.0.1', '1'),
(2, 'xujian', 'e10adc3949ba59abbe56e057f20f883e', '徐健', '', 0, 'hehe2006@sina.com', '', '', '1', '2009-04-03 06:00:10', '127.0.0.1', '1'),
(3, 'chenjie', 'e35cf7b66449df565f93c607d5a81d09', '陈捷', '', 0, 'jchen_bj@reart.com.cn', '', '', '1', '2009-03-30 01:58:45', '219.142.243.2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL auto_increment,
  `userName` varchar(50) default NULL COMMENT '登录名',
  `trueName` varchar(50) default NULL,
  `pwd` varchar(50) default NULL COMMENT '密码',
  `address` varchar(255) default NULL COMMENT '地址',
  `phone` varchar(50) default NULL COMMENT '电话',
  `email` varchar(50) default NULL COMMENT 'EMAIL',
  `addDate` datetime default NULL COMMENT '注册日期',
  `loginDate` datetime default NULL COMMENT '最近登录日期',
  `loginNums` int(6) default NULL COMMENT '登录次数',
  `loginIp` varchar(100) default NULL COMMENT '最近登录IP',
  `status` enum('0','1') NOT NULL default '0' COMMENT '会员状态0:正常1：删除',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='注册会员信息表' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `userName`, `trueName`, `pwd`, `address`, `phone`, `email`, `addDate`, `loginDate`, `loginNums`, `loginIp`, `status`) VALUES
(1, 'xujian', 'xujianeee', '670b14728ad9902aecba32e22fa4f6bd', 'fdafdsfs', '00009999', 'xuj@sds.com', '2009-03-21 06:37:04', '2009-03-21 06:37:04', NULL, '221.221.166.52', '0'),
(2, 'stream', '', '4bcfcd82c74d2855069ca6edce7a5c42', '', '13401103237', 'yafei-ren1981@163.com', '2009-03-22 08:43:29', '2009-03-22 08:43:29', NULL, '114.240.64.160', '0'),
(3, 'stream_401', '', 'd1cfe329acf16f69cfe1d210e1581b30', '', '13401103237', 'yafei-ren1981@163.com', '2009-03-22 08:44:10', '2009-03-22 08:44:10', NULL, '114.240.64.160', '0'),
(4, 'test', '', '96e79218965eb72c92a549dd5a330112', '', '11111111111', 'dfs@df.com', '2009-03-22 15:36:47', '2009-03-22 15:36:47', NULL, '221.221.166.52', '0'),
(5, 'jchen_bj', '', 'e10adc3949ba59abbe56e057f20f883e', '', '13901311463', 'jchen_bj@qq.com', '2009-03-26 12:39:17', '2009-03-26 12:39:17', NULL, '123.117.183.251', '0'),
(6, 'xia', '', 'e10adc3949ba59abbe56e057f20f883e', '', '11111111111', 'xia@163.com', '2009-03-29 14:23:52', '2009-03-29 14:23:52', NULL, '221.221.161.233', '0');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(3) NOT NULL auto_increment,
  `pID` int(3) NOT NULL default '0',
  `orderID` int(3) default '0',
  `powerID` int(3) default '0',
  `name` varchar(50) NOT NULL default '',
  `url` varchar(50) NOT NULL default '',
  `addDate` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='后台目录树表' AUTO_INCREMENT=28 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `pID`, `orderID`, `powerID`, `name`, `url`, `addDate`) VALUES
(1, 0, 3, 0, '作品管理', '', '2009-03-19 08:09:50'),
(2, 0, 2, 0, '作家管理', '', '2009-03-19 08:10:27'),
(3, 0, 1, 0, '会员管理', '', '2009-03-19 08:10:36'),
(4, 0, 4, 0, '留言管理', '', '2009-03-19 08:10:43'),
(5, 0, 5, 0, '类别管理', '', '2009-03-19 08:10:49'),
(6, 0, 6, 0, '内容管理', '', '2009-03-19 08:10:55'),
(7, 0, 1, 0, '用户管理', '', '2009-03-19 08:11:01'),
(8, 1, 8, 0, '添加作品', 'work.php?act=edit', '2009-03-19 08:23:59'),
(9, 1, 9, 0, '作品列表', 'work.php?act=listAll', '2009-03-19 08:24:29'),
(10, 2, 10, 0, '添加作家', 'artist.php?act=edit', '2009-03-19 08:26:10'),
(11, 2, 11, 0, '作家列表', 'artist.php?act=listAll', '2009-03-19 08:26:26'),
(12, 3, 12, 0, '会员列表', 'member.php?act=listAll', '2009-03-19 08:26:50'),
(13, 4, 13, 0, '留言列表', 'gbook.php', '2009-03-19 08:27:11'),
(14, 5, 14, 0, '增加作品类别', 'category.php?act=add', '2009-03-19 08:27:51'),
(15, 5, 15, 0, '作品类别列表', 'category.php?act=listAll', '2009-03-19 08:28:04'),
(16, 6, 16, 0, '关于睿艺', 'content.php?act=edit&id=1', '2009-03-21 06:04:22'),
(17, 6, 17, 0, '投资收藏咨询', 'content.php?act=edit&id=2', '2009-03-21 06:04:53'),
(18, 7, 18, 0, '添加用户', 'manager.php?act=add', '2009-03-19 08:29:03'),
(19, 7, 19, 0, '用户列表', 'manager.php?act=listAll', '2009-03-19 08:29:15'),
(21, 0, 21, 0, '价格管理', '', '2009-03-24 10:45:48'),
(22, 21, 22, 0, '添加价格', 'price.php?act=add', '2009-03-24 14:50:19'),
(24, 21, 24, 0, '价格列表', 'price.php?act=listAll', '2009-03-24 14:51:30'),
(25, 0, 25, 0, '投资收藏', '', '2009-04-10 00:00:00'),
(26, 25, 26, 0, '添加投资收藏', 'invest.php?act=edit', '2009-04-10 00:00:00'),
(27, 25, 27, 0, '投资收藏列表', 'invest.php?act=listAll', '2009-04-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL auto_increment,
  `price_name` varchar(100) default NULL,
  `price_ename` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `price_name`, `price_ename`) VALUES
(1, '5万以下', 'less than 50,000'),
(2, '5万-20万', '50,000 ~ 200,000'),
(3, '20万-50万', '200,000 ~ 500,000'),
(4, '50万-100万', '500,000 ~ 1,000,000'),
(5, '100万以上', 'more than 1,000,000');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL COMMENT '作品名称',
  `ename` varchar(100) default NULL,
  `cID` smallint(4) NOT NULL,
  `price` int(11) default NULL,
  `actualPrice` int(11) default '0',
  `age` varchar(20) default NULL,
  `texture` varchar(100) default NULL,
  `etexture` varchar(100) default NULL,
  `comment` varchar(2000) default NULL COMMENT '作品点评',
  `ecomment` varchar(2000) default NULL,
  `description` text COMMENT '作品描述',
  `attachment` varchar(500) default NULL,
  `eattachment` varchar(500) default NULL,
  `edescription` text,
  `artistCode` varchar(100) default NULL,
  `status` enum('0','1','2','3') NOT NULL default '0',
  `rank` int(10) default '1',
  `picCode` varchar(20) default NULL,
  `flag` enum('0','1') NOT NULL default '0' COMMENT '中英文0＝中文 1＝英文',
  `addDate` datetime NOT NULL,
  `size` varchar(100) default NULL,
  `esize` varchar(100) default NULL,
  `signal` varchar(100) default NULL,
  `esignal` varchar(100) default NULL,
  `literature` varchar(200) default NULL,
  `eliterature` varchar(200) default NULL,
  `exhibition` varchar(200) default NULL,
  `exhibitionEName` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='作品信息表' AUTO_INCREMENT=24 ;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `name`, `ename`, `cID`, `price`, `actualPrice`, `age`, `texture`, `etexture`, `comment`, `ecomment`, `description`, `attachment`, `eattachment`, `edescription`, `artistCode`, `status`, `rank`, `picCode`, `flag`, `addDate`, `size`, `esize`, `signal`, `esignal`, `literature`, `eliterature`, `exhibition`, `exhibitionEName`) VALUES
(2, '眺望新世纪', 'A New Century', 1, 2, 0, '1997', NULL, NULL, '　　郑艺的此幅作品将农民形象完全提炼自现实生活中，与我们在乡间时常遇到的神色木讷、衣着简陋、缺乏教育的农民别无二致。在画幅中，画家刻意将其处理得顶天立地，在表达现实的严酷，也在寄予新世纪的希望。', '　　郑艺的此幅作品将农民形象完全提炼自现实生活中，与我们在乡间时常遇到的神色木讷、衣着简陋、缺乏教育的农民别无二致。在画幅中，画家刻意将其处理得顶天立地，在表达现实的严酷，也在寄予新世纪的希望。', '在中国现实主义风格的绘画中，郑艺的绘画是独树一帜的，他始终关怀农民的生存状态，并用一种诗意的表现方式传达出来。这幅《眺望新世纪》，创作于新千年的开端。寄托了画家与画中人对新世纪的无限希望。农民题材一直是许多艺术形式都成功表现过的。比如电影《喜盈门》，歌曲《在希望的田野上》等，往往可以唤起一代人对农村生活的回忆。绘画中，早有罗中立的《父亲》作为里程碑式的创作，长期以来，反映农民的绘画均带有浓厚的文学性，或是田园牧歌式的抒情色彩。\r\n<p>而郑艺的此幅作品将农民形象完全提炼自现实生活中，与我们在乡间时常遇到的神色木讷、衣着简陋、缺乏教育的农民别无二致。在画幅中，画家刻意将其处理得顶天立地，在表达现实的严酷，也在寄予新世纪的希望。</p>', NULL, NULL, 'Zheng Yi’s art stands out among the realist painting styles in China. He has always been sympathetic \r\n\r\nto the difficult life of farmers and he presents his concerns in a poetic way. The work, A New Century, \r\n\r\nwas created at the beginning of a new millennium. It is a vehicle for the hopes of both the painter, and \r\n\r\nthe human figure portrayed in the painting, for a better tomorrow. Farmers and their way of life have \r\n\r\nbeen successfully portrayed in many artistic forms, i.e. the movie, In-laws and the song, On the Field \r\nof Hope. Themes of this nature are a reminder to people of this generation what it was like when they \r\nlived on a farm. In this painting, we perceive that the artist has incorporated the style of Luo Zhongli’s \r\nmilestone work, Father. For a long period of time, paintings depicting farmers have all embodied a \r\nliterary sentiment or lyric style. \r\n\r\nHowever, in this painting, the image of the farmer is drawn from real life. He is exactly the kind of \r\n\r\npeasant we often encounter in the country – slow to respond, humbly dressed, and poorly educated. \r\nThe painter has deliberately endowed the figure with an indomitable spirit. It depicts the cruelty of \r\n\r\nreality, but at the same time, shows hope for a better future. ', '2', '1', 1, '09030002', '0', '2009-03-29 14:11:06', '180×130cm (70.9×51.2 in.)', '180×130cm (70.9×51.2 in.)', '郑艺  1997', 'signed in Chinese and dated 1997', '《郑艺油画作品》／天津人民美术出版  /2008', 'The Oil Painting of Zheng Yi, Tianjin People ''s Fine Arts  Publishing House, 2008', '走向新世纪——中国青年油画展  /中国美术馆／北京  1997年／并获优秀作品奖', 'Toward New Century: Chinese Youth Oil Painting  Exhibition, National Art Museum of China, 1997.  Received Excellence Award'),
(3, '女人', 'Lady', 2, 3, 0, '1989', NULL, NULL, '　　这作品画于一九八九年，这一时期是张晓刚艺术生涯中第一个创作高峰和风格形成期。张晓刚把此时期称为“彼岸时期”。此时他的生命自觉与情感体验特别强烈，有意识地寻找理性之外的原始生命诉求。作品徘徊在生与死、经验与超验、现实与梦境之间。', 'This painting was completed in 1989; a period when Zhang Xiaogang’s artistic creation first peaked ', '<p>这作品画于一九八九年，这一时期是张晓刚艺术生涯中第一个创作高峰和风格形成期。张晓刚把此时期称为“彼岸时期”。此时他的生命自觉与情感体验特别强烈，有意识地寻找理性之外的原始生命诉求。作品徘徊在生与死、经验与超验、现实与梦境之间。</p>\r\n<p>这幅静寂的人物形象，笼罩在幽暗而又绚丽的色彩氛围里，充满神秘、静观和隐喻性。张晓刚一直喜欢以源自中国书画传统的线的方式来造型，不太强调空间维度，这画法使画面倾向平面化。另外张晓刚也喜欢皴擦，用较为干涩的颜料在画布上慢慢擦出背景的质感。色彩因含混的渐变而使画面变得朦胧，凭添一种悠远的记忆性。这些画法，在艺术家之后的作品中也都能发现。</p>\r\n<p>其次，这人物有种漠然的阴郁气质，而充满一种阴性和忧郁。张晓刚画里的人都没有表情，这画里人物眼睛的单眼皮与大而无神，与后来“大家庭”系列很像；既是一种呆滞，又是一种超现实主义的表白。</p>\r\n<p>这张画虽然是早期画作，却有着始终贯穿张晓刚作品的重要元素，值得关注。</p>', NULL, NULL, 'This painting was completed in 1989; a period when Zhang Xiaogang’s artistic creation first peaked \r\n\r\nand when his unique style was formed. Zhang Xiaogang refers to this era as his “opposite shore \r\n\r\nepoch”. During this period, his awareness of life and sensitivity were especially intense, and he \r\n\r\nconsciously sought for a primal life outside of reason. The themes of his work vary between life and \r\ndeath, worldly experience and transcendental experience, as well as reality and dreams. \r\n\r\nThis painting of a serene human image is shrouded in a dark yet at the same time, magnificently \r\n\r\nbright-colored atmosphere. It is mysterious, tranquil, and symbolic. Zhang Xiaogang has always \r\npreferred to create his images in traditional Chinese painting style, a technique that gives short shrift \r\n\r\nto perspective; imparting a flat, one-dimensional appearance to his work. Another technique favored \r\n\r\nby Zhang Xiaogang is making use of the brush to slowly rub a dry pigment on the canvas to \r\ncreate a background texture. This blending of colors causes the composition to become obscure, \r\npermeating the painting with a feeling of distant memory. These techniques are also evident in \r\nthe artist’s later works. \r\n', '4', '1', 1, '09030004', '0', '2009-03-27 17:17:19', '48×33.5cm (18.9×13.2 in.)', NULL, '张晓刚 1989', NULL, '', NULL, '', ''),
(20, '他们NO.3 （包括创作稿）', 'They No. 3(Including drafts)', 5, 0, 0, '1999', NULL, NULL, '', NULL, '<p>海波从97年底开始拍摄的《他们》系列，得到广泛的关注。这个系列由11个单独的作品组成，有肖像、群像、家庭合影和风景。海波将两张相隔数十年拍摄的照片并列在一起。第一张是自卫反击战的集体合影，其中的年轻男人身穿军装，脸上洋溢着革命年代的幸福感。并列的另一张照片，则是现在拍摄的。几十年后，其它人都走了，只剩下一个人还在世间，且青春逝去。如此新旧死生产生了强烈对比，展现了对战争的残酷与历史的怀疑，令人感叹。对于观者而言，照片中的人物始终是陌生而神秘的，在观看的瞬间，参与了一个时代的生与死。</p>\r\n<p>如此简洁的表现方式，充满了视觉冲击与感受力。海波想用一种“不变”来展现一种“历史”的“变化，这些影像诉说着很多关于时间与记忆的故事。海波自己说：“这些作品并不仅仅是要表现出人与社会的变迁，时光的流逝。更重要的是我企图从各个角度复制逝去的时光。作品没有结束，在今后的不知哪一年、哪一天，我还会再拍摄这些人，这些风景。那时候很可能有人已经不在了，包括我自己。”摄影原本只是再现了时间的一瞬，但这些作品却让观者看到了时间变化的长河，撼人心弦。这作品其他版本广为世界各大美术馆、机构收藏，本件作品包括了海波“三易其稿”的创作过程，弥足珍贵。<br&nbsp;/></p>', NULL, NULL, 'In the latter part of 1997 Hai Bo began shooting his photo series, Them, which has subsequently \r\nreceived wide attention. This series is made up of 11 separate categories, including portraits, group \r\nand family photographs, and scenic pictures. Hai Bo juxtaposed two pictures of the same subject, \r\n\r\nwith the 2nd one taken after an interval of 10 years. The first is a group picture taken during the time \r\n\r\nof revolution. All the young men are in military uniform, and smiling in the blissful manner unique \r\nto that era. Next to this is a contemporary photograph. Decades have since passed. Only one of the \r\ngroup has survived, and he has lost his youthful looks. All the other men in the original picture are \r\ndead. This manner of juxtaposing old and new with life and death creates a shocking contrast. The \r\ncruelty of time and the fragility of life elicit a sigh from the viewer. To them, the people in the picture \r\nwill always remain unknown and mysterious. The moment viewer eyes fall on this picture, they are \r\ndrawn into the life and death of an era. \r\n\r\nThis simple expressive technique is charged with visual impact and the power to affect viewers. \r\n\r\nBy using an “unchanging” quality, Hai Bo hoped to present “historic” change. These images tell \r\n\r\nmany stories of time and memory. Hai Bo once remarked: “These works do not simply convey the \r\ntransformation of people and society, or the passage of time. More importantly, I have tried to \r\nreproduce the ambiance of the past from a variety of perspectives. This is a work in progress. Maybe \r\nin the years or days to come, I will once again photograph the same people, or scenery. It is possible \r\n\r\nthat when I do, some people will be gone, including myself.” Photography is nothing but a tool to \r\n\r\ncapture a moment in time. However, by enabling the viewer to see the changes that take place \r\nover a long period of time, these works will leave a strong impression on the viewer’s mind. The \r\n\r\n“They” series works were collected by many museums and art organizations.This is unique edition \r\n\r\nincluded artist''s drafts, which is so rare. ', '10', '1', 2, '09030010', '0', '2009-03-28 05:46:10', '120×180cm×2 (47.2×70.9 in.×2 ) ', NULL, '海波1999 （草图正面）', NULL, '', NULL, '', ''),
(21, 'E地风景37', 'The Landscape of E 37', 6, 2, 0, '2008', NULL, NULL, '', '', '<p>《E地风景》，“E”是英文东方的开头字母，他以一种纯净、轻盈、透明的色调，用东方的方式表达了当代山水的文化体验。尚扬保持了前期《大风景》系列的视觉张力，在黑、白、灰、棕色彩的对比和运用中，营造一种典雅有致的视觉意象。画面上流动着蕴藉而空灵的气息，显出更为单纯的山水图式，给人以散淡写意的抒情意味，充满了一种中国的书卷气。</p>', NULL, NULL, 'In The Landscape of E, the letter “E” stands for the English word, East. In his use of a pure, light, transparent \r\n\r\ncolor tone, Shang Yang has employed oriental technique to express the cultural sensation of contemporary \r\nlandscape painting. \r\n\r\nRetaining the visual intensity created in Grand Landscape, his earlier series, this work displays a refined classic \r\nvisual image, achieved by the artist’s flexible use of color contrast between black, white, gray, and brown. \r\nThe composition overflows with a spiritually rich, but restrained air, revealing a simple landscape art form. \r\n\r\nThe viewer is able to enjoy a relaxed, content, and lyrical atmosphere; a uniquely Chinese air of cultivated \r\n\r\nrefinement. \r\n\r\nShang Yang’s work has been deeply influenced by traditional Chinese painting; not just in spiritual character, \r\n\r\nbut in visual expression as well; thereby endowing his oil painting with a distinct Chinese quality. This \r\npainting is a perfect example of the spirit of Chinese art. The large, cross-section of triangular shapes that \r\nconfront the eye, together with the elements of sense perception; such as size, color, and orientation; \r\nenhance the expressive effect, as well as determine the spatial arrangement. \r\n\r\nThe visual landscape form enables Shang Yang to reveal his thoughts on the relationship between Man \r\nand the world. This landscape theme is a continuation of the natural style found in his Grand Landscape \r\n\r\nseries, but in a more purified way. The artist has observed and reflected upon the chaos of the present \r\n\r\ncultural atmosphere, contemplated human existence and civilization, and proceeded to ruminate on the \r\n\r\nsubject of “landscape painting”. Therefore, his landscape is not pure aesthetic formalism, but a profound \r\n\r\nvisual expression. A covert cultural element permeates all his creative effort. His works are an expression \r\nof spirituality combined with the charm of idiom. A profound humanism is embodied within this casual, \r\nmagnanimous, visual construct. ', '11', '1', 1, '09030011', '0', '2009-03-30 05:44:42', '63×123cm (24.8×48.4 in.)', '63×123cm (24.8×48.4 in.)', 'Shang(正面)；E 地风景37 尚扬Shangyang 2008(背面)', 'signed in Pinyin on the obverse side; signed in Chinese  and Pinyin, titled and dated 2008 on the re', '《山花》杂志/ 2008 年第7 期', 'Mountain Flowers, Vol.7 2008', '相约09 ：名家油画联谊展/ 北京环铁时代美术馆2008', 'Make an Appointment in 2009: The Exhibition of  Master of oil paintings, Huantie Times Art Museum,  2008'),
(5, '风景', 'Scenic View', 1, 3, 0, '1982', NULL, NULL, '　　一片彷佛是天空或湖水的留白，底下有着疏密错落的树丛。横画的蓝色像天像云，一圈圈的灰蓝像湖水又像涟漪，抽象中蕴含具象的想象。他的风景，并不表现风景的优美，这些随意的笔触以及半截留白，彷佛只是一个信手拈来的风景片断。刘炜将印象主义的精髓转化为中国式的意境，从看似无序的笔触和色彩之间，有传统“ 笔墨”的意味,极富中国气息和韵味。他在东方文化和西方手法间游走自如；西方的技法存在着，彷佛又消失了。', '　　一片彷佛是天空或湖水的留白，底下有着疏密错落的树丛。横画的蓝色像天像云，一圈圈的灰蓝像湖水又像涟漪，抽象中蕴含具象的想象。他的风景，并不表现风景的优美，这些随意的笔触以及半截留白，彷佛只是一个信手拈来的风景片断。刘炜将印象主义的精髓转化为中国式的意境，从看似无序的笔触和色彩之间，有传统“ 笔墨”的意味,极富中国气息和韵味。他在东方文化和西方手法间游走自如；西方的技法存在着，彷佛又消失了。', '<p>一片彷佛是天空或湖水的留白，底下有着疏密错落的树丛。横画的蓝色像天像云，一圈圈的灰蓝像湖水又像涟漪，抽象中蕴含具象的想象。他的风景，并不表现风景的优美，这些随意的笔触以及半截留白，彷佛只是一个信手拈来的风景片断。刘炜将印象主义的精髓转化为中国式的意境，从看似无序的笔触和色彩之间，有传统“笔墨”的意味,极富中国气息和韵味。他在东方文化和西方手法间游走自如；西方的技法存在着，彷佛又消失了。</p>\r\n<p>他与传统越来越近。因为他的内在性情就是传统文人强调的诗意风流，放任不羁。他的才情以写意之笔流露，这也是中国文人艺术最重要的美学特征。文人以字画寄托人生感受，通过画面的笔墨情趣，表现由物象引起的内心感受。所以品画，就是品评意象和笔墨的趣味和格调。同样的，刘炜那些灵动的笔触，不是一种具象性的表现语言，而是艺术家抽象的精神状态。我们可以从他用笔的过程中感悟到他的生存感觉和直觉情绪，读到他生命的气息；他的画饱含着对自我生存以及历史文化的敏锐感受。</p>\r\n<p>艺术对于刘炜，是“有所谓”，又“无所谓”的游戏；他以如此轻松平和的方式呈现，又不断变化探寻。</p>', NULL, NULL, 'A dense undergrowth lies randomly scattered beneath what appears to be an empty space of either \r\nsky or lake. The horizontal blue color can be interpreted as either sky or clouds. However, the grayish-\r\nblue color could be either the water of a lake, or ripples. In this manner, these abstract images actually \r\n\r\nembody figural likeness. The landscape painting is not intended to express the beauty of a scenic view. \r\n\r\nHis causal brush strokes, as well as the empty space occupying more than half the canvas, make his \r\npainting look more like scraps of scenery, haphazardly pasted together. Liu Wei has transformed the \r\nessence of Impressionism into something that conveys a Chinese ambiance. Between his seemingly \r\n\r\nunsystematic strokes and the use of color, one perceives the traits of traditional Chinese “ink-wash” \r\n\r\npainting; an air and charm that are purely Chinese. His sophisticated skill enables him to smoothly \r\ncombine Oriental culture with western technique. The western painting technique sometimes seems \r\npresent, while at other times it seems to have disappeared. \r\n\r\nBecause of his poetic, romantic, and uninhibited nature; the very qualities long treasured by the \r\nChinese literati; his art has become increasingly traditional. His artistic talent is revealed through \r\nhis emphasis on a few, rapid, rhythmic strokes, rather than careful delineation, which is the most \r\nimportant element in the aestheticism of traditional art of the Chinese literati. For scholars calligraphy \r\nand painting were a means of sublimating their feelings about life. The images created by their use of \r\nbrush and ink reveals the way they feel and their state of mind. To critique a painting entails closely \r\nviewing the images to determine what may be learned from the artist’s use of ink and brush. In this \r\n\r\nsense, Liu Wei’s vibrant brushwork is not an idiom of figural images, but rather, the artist’s abstract \r\n\r\nspiritual state. From his painting process, we can perceive his feelings regarding existence, intuitive \r\nemotions, and even gain insight into his life. His painting is permeated with his sensitive observations \r\nregarding self-existence, history, and culture. \r\n\r\nTo Liu Wei, art is a game that either “matters” or “doesn’t matter”. To appearances his attitude is \r\n\r\nrelaxed and gentle, yet he ceaselessly experiments with various ideas, always seeking change. ', '6', '1', 1, '09030006', '0', '2009-03-29 15:47:17', '120×70cm (47.2×27.6 in.)', '', '刘炜 2006', '', '', '', '', ''),
(7, '国际风景', 'Universal Scenery', 1, 2, 0, '2002', NULL, NULL, '　　严培明的“语言”就是他的观念。他的作品脱离了点、线、面三种基本元素的羁绊，笔触不是界定与定义，而是模糊与淹没。他在模糊中寻找某种复杂与微妙的关系。作品多是双色的，或黑白，或红白，但这双色不仅是对比辉映，也是相互作用的能量。这能量相互消解、融合、取舍，变得更加复杂，但又无比单纯，就像自然界中能量的守恒。', NULL, '<p>严培明的“语言”就是他的观念。他的作品脱离了点、线、面三种基本元素的羁绊，笔触不是界定与定义，而是模糊与淹没。他在模糊中寻找某种复杂与微妙的关系。作品多是双色的，或黑白，或红白，但这双色不仅是对比辉映，也是相互作用的能量。这能量相互消解、融合、取舍，变得更加复杂，但又无比单纯，就像自然界中能量的守恒。</p>\r\n<p>在严培明的创作中，有一条线索，就是对人性的逐渐关注。题材从亲人、名人到开始为卑微者群体造像，包括移民、残疾人、妓女、小偷和流浪汉等。</p>\r\n<p>这件作品中，仍旧是他的笔触，但人物转换成风景，色彩相对于双色更加丰富。《国际风景》，体现了严培明在人物造像中渐渐发展的“普遍关怀”。从树木、天空、屋子模糊的影像，我们无法辨认“风景”的归属，也找不到任何辨认的线索。或者这张作品是世界上每个风景的造像。我们能够些许体察到艺术家心中的“大同”思想：人类属于同一个自然，同一个“大风景”——国际风景。</p>', NULL, NULL, 'Yan Peiming’s “idiom” represents his concept. His work has broken free from the limitation of \r\nthree basic elements of painting: dot, contour, and flat surface. His brushstrokes do not outline any \r\nboundaries or definitions, rather they are vague and overwhelming. He is looking for some kind of \r\n\r\nrelationship between complexity and subtleness in the vagueness of his painting. The color tone in his \r\nworks mostly consists of dual colors, i.e. black and white, or red and white. These dual colors are not \r\nonly opposed to, or complementing, each other. Together, they display an interactive energy. After \r\n\r\nthe process of dissolving, fusing, and filtering, this energy has become even more complicated, while \r\n\r\nat the same time, more pure, similar to the law of conservation of energy in Nature. \r\n\r\n From Yan Peiming’s works, one may perceive a clue, which shows his increasing care for humanity. \r\nHis portrait subjects have extended beyond those of his relatives and celebrities, and now include \r\nsociety’s unfortunates, i.e. immigrants, handicapped, prostitutes, thieves, and homeless people. \r\n\r\n In this work, his brushstroke style remains unchanged, but the theme has altered from portrait to \r\nscenery. Compared to the use of dual colors, the colors in this painting are richer. Universal \r\nScenery reveals Yan Peiming’s “social concern”, a by-product of his portrait work. The vague \r\nappearances of trees, sky, and a house devoid of any clues, prevent us from recognizing their \r\nlocation. Perhaps the scenery in this work is universal, representing all scenery throughout the \r\nworld. From this viewpoint, we may perceive the concept of “commonality” in the artist. All \r\nhuman beings belong to one Nature; a “grand scenery” – The Universal Scenery. ', '8', '1', 1, '09030008', '0', '2009-03-27 17:32:34', '300×180cm×2 (118.1×70.9 in.×2)', NULL, '', NULL, '《演变》/ 帕莱斯特出版社/ 2009 ', NULL, '演变／路德维希博物馆／科布伦次／德国／2008 ', 'China''s Revision, Ludiwig Museum,  Koblenz, Germany,2008'),
(8, '纹身月亮', 'Tattooed Moon', 1, 3, 0, '1997', NULL, NULL, '　　自从1980年代后期，孙良的作品中便融合了超现实主义和象征主义的特征，多年以来，他一直延续了这样的创作风格，直到2000年后，孙良开始在超现实主义的道路上越走越远，并发展出自己独特的画面趣味。色彩单纯，形象怪诞而没有涵义，我们能够看到的只是画家天马行空般的想象力。', NULL, '<p>自从1980年代后期，孙良的作品中便融合了超现实主义和象征主义的特征，多年以来，他一直延续了这样的创作风格，直到2000年后，孙良开始在超现实主义的道路上越走越远，并发展出自己独特的画面趣味。色彩单纯，形象怪诞而没有涵义，我们能够看到的只是画家天马行空般的想象力。</p>\r\n<p>这幅《纹身月亮》便是此期间的代表画作。整幅画面像是画家在为月亮设计的一个纹身，色彩华丽，充满了诡异之美。</p>', NULL, NULL, 'Starting in the late 1980s, Sun Liang combined the unique characteristics found in Surrealism and \r\nSymbolism in his work, and he continued to use this form of creative expression for many years. It \r\nwas not until after 2000 that he parted ways with the Surrealist style and developed his own unique \r\npainting technique. His use of color is simple, and his images are bizarre and devoid of meaning. All \r\nwe can see is the painter’s fantastic imagination. \r\n\r\nThis work, Tattooed Moon, is his representative work from this period. The entire composition seems \r\nto be a tattoo pattern designed by the painter especially for the moon. The color is splendid and \r\nunleashes an extraordinary aesthetic sensation.', '9', '1', 1, '09030009', '0', '2009-03-27 17:36:04', '100×80cm (39.4×31.5 in.)', NULL, 'Sun Liang 1997 （正面），纹身月亮/ 孙良Sun Liang / 1997 （背面）', NULL, '', NULL, '', ''),
(10, '蒙德里安前的男孩', 'A Boy by Mondrian ', 1, 4, 0, '1997', NULL, NULL, '　　刘野的画极少关涉现实社会，与时代也并无关联；他只是安然地沉浸在自己营造的幻境之中，与其它当代艺术家显然不同。而这种疏离独特，正是刘野的可贵之处。', '　　刘野的画极少关涉现实社会，与时代也并无关联；他只是安然地沉浸在自己营造的幻境之中，与其它当代艺术家显然不同。而这种疏离独特，正是刘野的可贵之处。', '<p>一个圆头圆脑的小男孩，有着一对可爱的小翅膀。光线从右边打来，旁边的布幔与光线，显示这可能是个舞台。而这个像天使的小孩仔细看着一幅静物画，上头的大背景，是蒙德里安的方块。刘野经常使用画中画，画中常见蒙德里安的方块——他以此向大师致敬，因为他喜欢蒙德里安的单纯与纯粹。我们也感觉，这认真看画的男孩，彷佛就是刘野自己，画里隐喻了一种认真与纯真。</p>\r\n<p>他自己说：“一个艺术家只要寻找到自我才算完成任务了，你作品中的形象很像你。这种‘像’不是指写实的自画像，而是指某种性格，那一定会感动别人?”。他作品中的小人儿，与他真有种难以言说的神似。</p>\r\n<p>这幅画美丽、可爱、明亮，大师名作的色彩，与其它场景的色彩一致，整体感觉极其宁静和谐。作品虽然充满童趣，但却并不简单；欢悦的图像后有着一股淡淡的忧伤。用貌似欢乐的图像去表现忧伤，比用忧伤的图像去表现忧伤更深刻，更容易产生出触动观者的特殊魅力。</p>\r\n<p>刘野的画极少关涉现实社会，与时代也并无关联；他只是安然地沉浸在自己营造的幻境之中，与其它当代艺术家显然不同。而这种疏离独特，正是刘野的可贵之处。</p>', NULL, NULL, 'A round-headed boy wears a pair of cute little wings. The light coming in from the right, together \r\nwith the adjacent curtain, suggests that this is perhaps a stage. This angelic boy is carefully examining \r\na still life painting. The background image over his head are Mondrian squares. Liu Ye often applies \r\n\r\nthe technique of “a painting within a painting”, and Mondrian’s work frequently appears. This is \r\n\r\nthe way Liu Ye pays his respect to a master painter because he enjoys the simplicity and purity of \r\nMondrian’s art. From this painting, we perceive that the boy carefully examining a painting seems to \r\n\r\nbe a personification of the artist. The painting embodies a serious attitude and a sense of innocence. \r\n\r\nHe once commented: “An artist’s mission will not be completed until he finds himself. The image in \r\n\r\nyour work bears your resemblance. However, this ‘resemblance’ does not mean a realistic self-portrait, \r\n\r\nbut some form of character. In this manner the artist’s work will touch the heart of the viewer.” The \r\nsmall figure in his work truly does resemble him in some indefinable way. \r\n\r\nThis painting is attractive, charming, and delightful. The color tone of Mondrain’s piece agrees with \r\nthe other colors in the scene and the entire work is one of tranquility and harmony. Although the \r\nwork has a bounteous measure of childish appeal, it is not as simple as it may seem. Underlying this \r\nimage of joy is a faint sense of sorrow. When a seemingly cheerful picture is used to express sorrow, \r\nthe impact is more profound than that of an image of sadness. Images of this nature have the power \r\nto easily move viewers. \r\n\r\nLiu Ye’s work seldom touches social issues and has little to do with time. He finds contentment in \r\n\r\nthe illusory world he has created, which is very different from that of other contemporary artists. \r\nHowever, this detachment is what makes Liu Ye unique in his own way. \r\n', '3', '1', 1, '09030003', '0', '2009-03-29 14:09:49', '100×100cm (39.4×39.4 in.)', '', '刘野/1997-1998', '', '', '', '', ''),
(13, '有山的地方', 'Mountainous Regions', 4, 3, 0, '1986', NULL, NULL, '　　这是徐冰在1986年完成的版画，是在《析世鉴 ·天书》之前最重要的早期作品。画面只有黑白两种色彩，这些各种粗细、长短的线条，是用文字组成的一幅写生。徐冰到山里写生，他在有树的地方写上林字，在有山的地方写上山字。在有草的地方写上艸字像画，也像日记。', '　　这是徐冰在1986年完成的版画，是在《析世鉴 ·天书》之前最重要的早期作品。画面只有黑白两种色彩，这些各种粗细、长短的线条，是用文字组成的一幅写生。徐冰到山里写生，他在有树的地方写上林字，在有山的地方写上山字。在有草的地方写上艸字像画，也像日记。', '<p>全世界只有中国文字和中国人的图像性思维有关系，徐冰运用了中国文字最独特的图像化特质，使文字回到了自然与符号关系的原起点上。如此超越了语种的限制，找到文字原始的位置。任何不认识汉字的人，看到这个符号像山，就知道这是山字，也就知道这是有山的地方。</p>\r\n<p>当徐冰坐在山上画这个山，也是在写这个山，文字与图像在此合一。这既是对书写的体验，也是对中国文化系统的体验；他回到了人类观看自然那最原始的思维上。大部分人以为奇特、深沉、复杂才是“前卫”，艺术家却用这样简单的方法获致了深刻的内蕴。</p>', NULL, NULL, 'This is a woodblock print made by Xu Bing in 1986. Completed before his Xie Shi Jian, the Book from Heaven, it \r\nremains the most important work from his early period. This print utilizes only black and white. The various contours, \r\nbroad and slender; long and short, combine to form a still life composed entirely of Chinese characters. Xu Bing \r\n\r\ndid his sketching in mountainous areas. In places with trees he would write the Chinese character for “forests”, and \r\nwhere there were mountains he wrote the word “mountain”. Where he encountered fields he wrote the word “grain”, \r\nand in grassy places he wrote “weeds”. In this fashion, his work became not only a painting, but also a diary. \r\n\r\nThe Chinese script is the only written language in the world that was created according to symbols; a pictorial \r\nthinking process unique to the Chinese people. Xu Bing has taken this unusual symbolic aspect and returned these \r\n\r\ncharacters to their origins when our ancestors, inspired by Nature, first created them. A language barrier is thus \r\n\r\novercome and the primal role of written language revealed. Even those unfamiliar with Chinese characters will spot \r\nthe resemblance to a mountain in the Chinese symbol for mountain, and know that this is a mountainous region. \r\n\r\nWhen Xu Bing sat upon his hilltop drawing mountains, and writing the character, “mountain”, the written \r\n\r\nword and image were combined into one. It is both a writing experience and a taste of what it’s like to be a \r\npart of Chinese culture. He sought to recapture the way in which prehistoric man perceived the natural world. \r\nMost people are under the impression that avant-garde art must be exotic, profound, and complex. Here, by \r\nmeans of this simple method, the artist has captured the core value of modern art. \r\n\r\nXu Bing has always practiced printmaking as a means of creative expression. In 2007, he received the 36th \r\nLifetime Achievement Award from the United States Southern Graphics Council, the highest honor in the world \r\nof printmaking art. The reason for presenting him with this award was because of “his great contribution to the \r\ndevelopment of printmaking art…which had a great impact on the dialogue and understanding between the \r\n\r\nrespective fields of printmaking and contemporary art.” By employing the simple methods of the artisan, he has \r\n\r\nsucceeded in creating an outstanding contemporary art, examples of which are eagerly sought by collectors ', '7', '1', 1, '09030007', '0', '2009-03-29 14:02:51', '54×70cm (21.3×27.6 in.)', '54×70cm (21.3×27.6 in.)', 'A/P有山的地方／徐冰 XuBin 1986', 'XuBing／1986  signed in Chinese and Pinyin, and dated 1986', '', '', '', ''),
(18, '王府井二〇〇八', 'Wangfujing 2008', 1, 0, 0, '2008', NULL, NULL, '', '', '<p>多么伟大而惊愕的二〇〇八！刘大鸿把二〇〇八年里，所有重要事件的人物与意象，圣火地震福娃宋庄熊猫七九八奥运开幕等，密密麻麻拼贴堆列在一个虚构的王府井百货商场里。他以戏剧化的荒谬场景设置了作品的语境，描绘了去年那纷乱的浮世图景。真是个眼花撩乱的大千世界、芸芸众生！错综复杂，让人观之不尽。</p>\r\n<p>人物形象夸张地典型化处理，有着纯粹的形式感。但刘大鸿画面中的关键形象又同时有内容和形式的最大效果。这种效果具有复杂的象征意义。通过强行拼贴，视觉的符号图像从现实层面进到非现实的层面；又从非现实的层面，直指现实。现实事件透过画面处理竟然产生历史的纵深感，艺术家以此来表达他对当下社会的深刻关注，批判性隐藏在这些图像底下。</p>\r\n<p>作品话语的基调荒诞，而荒诞的方式主要源于对嘲讽、夸张手法的迷恋。刘大鸿综合了古典、学院和民间的综合表现手法，给予写实绘画视觉的现代性，发展出魔幻现实主义式的艺术语言，独步当代。他以这种另类手法重现新闻历史片段，幽了整个中国一默。让人忽然感到原来我们经历过的，竟是如此可笑；现实原来就是魔幻的，而存在根本是一种荒诞。我们的整体经验如此重现，作品折射出对现实生存秩序和价值观念的怀疑。</p>', NULL, NULL, '2008 was truly an eventful and astonishing year! Liu Dahong has packed together in a single collage \r\nall the people and images from the year’s important events. These range from the Olympic torch, \r\nSichuan Earthquake, Olympic mascot, Fuwa, the Song Village of artists, Pandas, the 798 Art Zone, and \r\nOlympic Opening Ceremony, to a virtual Wangfujing shopping center. The context of his work is set \r\n\r\nagainst a dramatic and surreal background, depicting the scenes from the “floating world” of 2008 – \r\nwhat a dazzling and boundless universe is this world of man! It is so complex that viewers will find a \r\n\r\ngood deal of time is required to properly appreciate its every detail. \r\n\r\nThe human images are exaggerated in typical fashion, and reveal the beauty of pure form. However, \r\nthe core images in Liu Dahong’s picture derive maximum effect from both context and form, \r\nendowing them with complex and symbolic meaning. Through his willful collage, symbolic images \r\nhave developed from real to dream-like, while at the same time that which is unreal suggests reality. \r\nThis painting imparts historic depth to realistic events, revealing the artist’s deep concern towards \r\ncontemporary society, and concealing his criticism behind these images. \r\n\r\nThe basic idiom of this work is absurdity, which comes from the artist’s obsession with the techniques \r\nof satire and exaggeration. Liu Dahong has combined multiple techniques, drawn from classical, \r\nacademic, and folk methods of expression, and given a modern vision to realistic painting. In \r\nso doing, he has become the exponent of fantastic realism, which distinguishes him from other \r\ncontemporary artists. This unconventional method of using fragments to reconstruct the news or \r\nhistoric events constitutes a joke at China’s expense. It makes the viewer suddenly realize that what \r\nthey have experienced in life is actually ridiculous; that reality is, in fact, fantastic and illusory, and \r\nexistence is nothing but a great absurdity. In this way, the artist has reconstructed all our experience. \r\n\r\nThe work reflects the artist’s reservations towards reality, existence, order, and social value. \r\n', '1', '1', 1, '09030001', '0', '2009-03-29 15:44:10', '200×200cm (78.7×78.7 in.) ', '', '', '', '', '', '预言/ 北京亦安画廊/ 2008', ''),
(19, '镜子里的女人', 'The Woman in the Mirror', 3, 0, 0, '2002', NULL, NULL, '', NULL, '<p>一个女人，揽镜自照，一头短发，皮肤折射出如蜡般的苍白，有着浑浊无神而又哀怨的眼睛。她沉默、犹疑、迷茫，面部凝结着记忆与幻想，于细微处流露出焦躁不安的神态。向京自己说：“那些女孩不是悲，不是喜，也不是忧伤，是走神。我表现的只是一种真实的生活状态。”裸露的身体和同样裸露的灵魂，透映出内心情感的空虚，观者在不自觉中被引入了某个情绪停顿的瞬间。她的裸露和孤独茫然，引起观者对无力与空虚的深思，从而得到外在和内心的双重体验。</p>\r\n<p>这些以玻璃钢上色的写实雕塑，不用模特与助手，向京全通过自己的手做出来，有时还能看到手指在泥胎上擦抹的痕迹。艺术家对形象敏锐，作品呈现了当代女性复杂的心灵体验。她致力于外在情境与心理空间的建构，凝固了生命瞬间的情境，流露了一种温暖的疏离；但她并不刻意去叙事或表现什么意义，却深刻地反映了当下人的精神状态。</p>', NULL, NULL, 'A woman studies herself in the mirror – short hair cut and pale, waxy skin. Her opaque eyes are devoid \r\n\r\nof spirit and full of self-pity. She is silent, uncertain, and lost. Her expression is a mixture of memory \r\nand dream, and only close observation reveals a sense of anxiety. Xiang Jing once said, “Those girls \r\nare neither sad, happy, nor melancholy. Their minds are a blank. What I seek to express is a true sense \r\n\r\nof life.” The naked body, just like the naked soul, reflects an empty heart. Without being aware of it, \r\n\r\nviewer feelings pause for an instant. The feeling inspired by the woman’s meaningless nudity and lack \r\nof direction, will lead the viewer to ponder the question of weakness and emptiness, thereby providing \r\n\r\nthem with both perceptual and intellectual pleasure – a dual experience. \r\n\r\n These realistic sculptures are colored glass-reinforced plastic figures. Without a model or assistance \r\n\r\nof any kind, Xiang Jing made each one of them with her own hands. Sometimes, we can still perceive \r\n\r\nthe traces of fingers smeared across the clay body. The artist is very sensitive to images and her \r\n\r\nwork represents the complex spiritual experience of contemporary woman. She devotes her effort to \r\nconstructing a situational and psychological space, capturing a moment in one’s life. A sense of warm \r\nisolation is thus revealed. She does not intentionally strive to achieve a narrative or depict a kind of \r\n\r\nmeaning, but her work accurately reflects the spiritual status of contemporary Man. ', '5', '1', 1, '09030005', '0', '2009-03-28 03:49:53', '102×45×35cm (40.2×17.2×13.8 in.)', NULL, '', NULL, '', NULL, '镜子里的女人/ 中国欧洲艺术中心/ 厦门/ 2003 你的身体：向京作品2000 －2005 / 上海美术馆/ 2006 ', ''),
(23, 'fff', 'eee', 1, 3, 111, 'fff', 'dddddd', 'ddd', 'ffff', 'ffff', 'ffff', 'ddd', 'dddd', 'ffff', '47', '0', 1, 'fff', '0', '2009-04-08 12:53:18', 'fff', NULL, NULL, NULL, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workfavorite`
--

CREATE TABLE IF NOT EXISTS `workfavorite` (
  `id` int(8) NOT NULL auto_increment,
  `workID` int(10) NOT NULL COMMENT '作品ID',
  `userID` int(10) NOT NULL COMMENT '用户ID',
  `addDate` datetime NOT NULL COMMENT '收藏日期',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='收藏作品表' AUTO_INCREMENT=70 ;

--
-- Dumping data for table `workfavorite`
--

INSERT INTO `workfavorite` (`id`, `workID`, `userID`, `addDate`) VALUES
(43, 9, 4, '2009-03-23 03:13:55'),
(45, 4, 1, '2009-03-23 03:38:55'),
(41, 5, 4, '2009-03-23 03:13:47'),
(47, 7, 3, '2009-03-23 05:59:09'),
(14, 2, 1, '2009-03-22 14:38:27'),
(15, 4, 3, '2009-03-22 14:38:29'),
(42, 8, 4, '2009-03-23 03:13:52'),
(46, 6, 1, '2009-03-23 03:38:58'),
(37, 7, 4, '2009-03-23 03:13:09'),
(36, 4, 4, '2009-03-23 03:13:05'),
(39, 1, 4, '2009-03-23 03:13:40'),
(40, 2, 4, '2009-03-23 03:13:42'),
(38, 6, 4, '2009-03-23 03:13:10'),
(48, 8, 3, '2009-03-23 05:59:14'),
(52, 10, 3, '2009-03-23 06:01:53'),
(50, 1, 3, '2009-03-23 05:59:24'),
(51, 3, 3, '2009-03-23 05:59:46'),
(53, 2, 5, '2009-03-26 12:39:35'),
(54, 3, 5, '2009-03-26 12:39:38'),
(55, 4, 5, '2009-03-26 12:39:47'),
(56, 13, 5, '2009-03-26 12:41:01'),
(57, 2, 6, '2009-03-29 14:24:11'),
(69, 3, 6, '2009-03-29 14:37:11'),
(59, 20, 6, '2009-03-29 14:24:15'),
(60, 21, 6, '2009-03-29 14:24:16'),
(61, 5, 6, '2009-03-29 14:24:19'),
(62, 7, 6, '2009-03-29 14:24:25'),
(63, 8, 6, '2009-03-29 14:24:26'),
(64, 10, 6, '2009-03-29 14:24:28'),
(65, 19, 6, '2009-03-29 14:30:32'),
(66, 18, 6, '2009-03-29 14:30:34'),
(67, 13, 6, '2009-03-29 14:30:36'),
(68, 22, 6, '2009-03-29 14:30:38');
