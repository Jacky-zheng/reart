-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2009 at 10:19 AM
-- Server version: 5.0.22
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reart`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(8) NOT NULL auto_increment,
  `artistCode` varchar(10) default NULL,
  `name` varchar(50) NOT NULL COMMENT '作家名称',
  `sex` enum('0','1') NOT NULL default '0' COMMENT '性别 0女士1男士',
  `description` text NOT NULL COMMENT '作家描述',
  `profession` varchar(100) default NULL COMMENT '职业',
  `birthday` varchar(50) default NULL COMMENT '出生日期',
  `status` enum('0','1') NOT NULL default '0' COMMENT '作家状态',
  `addDate` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='艺术家信息表' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artistCode`, `name`, `sex`, `description`, `profession`, `birthday`, `status`, `addDate`) VALUES
(1, '1', '刘大鸿', '0', '隋建国 SUI JIANGUO (b.&sup1;956)<br /><br />&sup1;956年生于中国山东省青岛市<br /><br />现为中央美术学院雕塑系主任、教授<br /><br />重要个展<br /><br />&sup2;008年  《艺术 时间 广场&mdash;隋建国作品展》 香港<br /><br />&sup2;007年  《点穴&mdash;&mdash;隋建国艺术展》浦江新城 上海 中国<br /><br />&sup2;005年  《隋建国&mdash;&mdash;理性的沉睡》亚洲美术馆 旧金山 美国<br /><br />&sup1;997年  《世纪的影子&mdash;&mdash;隋建国作品展》维多利亚艺术学院 墨尔本 澳大利亚<br /><br />&sup1;996年  《隋建国作品展》 汉雅轩画廊 香港 中国<br /><br />重要联展<br /><br />&sup2;007年  《点穴&mdash;&mdash;隋建国艺术展》浦江新城 上海 中国<br /><br />&sup2;005年  《隋建国&mdash;&mdash;理性的沉睡》亚洲美术馆 旧金山 美国<br /><br />&sup1;997年  《世纪的影子&mdash;&mdash;隋建国作品展》维多利亚艺术学院 墨尔本 澳大利亚<br /><br />&sup1;996年  《隋建国作品展》 汉雅轩画廊 香港 中国<br /><br />&sup1;997年  《世纪的影子&mdash;&mdash;隋建国作品展》维多利亚艺术学院 墨尔本 澳大利亚<br /><br />&sup1;996年  《隋建国作品展》 汉雅轩画廊 香港 中国', '作家', '', '0', '2009-03-19 10:08:39'),
(2, '2', '郑义', '0', '隋建国 SUI JIANGUO (b.&sup1;956)<br /><br />&sup1;956年生于中国山东省青岛市<br /><br />现为中央美术学院雕塑系主任、教授<br /><br />重要个展<br /><br />&sup2;008年  《艺术 时间 广场&mdash;隋建国作品展》 香港<br /><br />&sup2;007年  《点穴&mdash;&mdash;隋建国艺术展》浦江新城 上海 中国<br /><br />&sup2;005年  《隋建国&mdash;&mdash;理性的沉睡》亚洲美术馆 旧金山 美国<br /><br />&sup1;997年  《世纪的影子&mdash;&mdash;隋建国作品展》维多利亚艺术学院 墨尔本 澳大利亚<br /><br />&sup1;996年  《隋建国作品展》 汉雅轩画廊 香港 中国<br /><br />重要联展<br /><br />&sup2;007年  《点穴&mdash;&mdash;隋建国艺术展》浦江新城 上海 中国<br /><br />&sup2;005年  《隋建国&mdash;&mdash;理性的沉睡》亚洲美术馆 旧金山 美国<br /><br />&sup1;997年  《世纪的影子&mdash;&mdash;隋建国作品展》维多利亚艺术学院 墨尔本 澳大利亚<br /><br />&sup1;996年  《隋建国作品展》 汉雅轩画廊 香港 中国<br /><br />&sup1;997年  《世纪的影子&mdash;&mdash;隋建国作品展》维多利亚艺术学院 墨尔本 澳大利亚<br /><br />&sup1;996年  《隋建国作品展》 汉雅轩画廊 香港 中国', '画家2', '', '0', '2009-03-19 10:09:10'),
(3, '3', '刘野', '0', '隋建国 SUI JIANGUO (b.&sup1;956)<br /><br />&sup1;956年生于中国山东省青岛市<br /><br />现为中央美术学院雕塑系主任、教授<br /><br />重要个展<br /><br />&sup2;008年  《艺术 时间 广场&mdash;隋建国作品展》 香港<br /><br />&sup2;007年  《点穴&mdash;&mdash;隋建国艺术展》浦江新城 上海 中国<br /><br />&sup2;005年  《隋建国&mdash;&mdash;理性的沉睡》亚洲美术馆 旧金山 美国<br /><br />&sup1;997年  《世纪的影子&mdash;&mdash;隋建国作品展》维多利亚艺术学院 墨尔本 澳大利亚<br /><br />&sup1;996年  《隋建国作品展》 汉雅轩画廊 香港 中国<br /><br />重要联展<br /><br />&sup2;007年  《点穴&mdash;&mdash;隋建国艺术展》浦江新城 上海 中国<br /><br />&sup2;005年  《隋建国&mdash;&mdash;理性的沉睡》亚洲美术馆 旧金山 美国<br /><br />&sup1;997年  《世纪的影子&mdash;&mdash;隋建国作品展》维多利亚艺术学院 墨尔本 澳大利亚<br /><br />&sup1;996年  《隋建国作品展》 汉雅轩画廊 香港 中国<br /><br />&sup1;997年  《世纪的影子&mdash;&mdash;隋建国作品展》维多利亚艺术学院 墨尔本 澳大利亚<br /><br />&sup1;996年  《隋建国作品展》 汉雅轩画廊 香港 中国刘野', '画家', '', '0', '2009-03-19 10:09:36');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='分类信息表' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `pID`, `name`, `ename`, `addDate`, `orderID`) VALUES
(1, 0, '油画', 'youhua', '2009-03-19 08:33:51', NULL),
(2, 0, '水墨画', 'shuimohua', '2009-03-19 08:34:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) default NULL,
  `content` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统内容（公司简介等）' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `content`
--


-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(6) default '0' COMMENT '会员ID，为空则为匿名留言',
  `content` text NOT NULL COMMENT '留言内容',
  `addDate` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '留言时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言信息表' AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员登录日志' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `loginlog`
--


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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='后台用户信息表' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `userName`, `pwd`, `trueName`, `msn`, `qq`, `email`, `telephone`, `mobile`, `status`, `lastTime`, `lastIP`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '夏珊', 'ddd', 0, NULL, NULL, NULL, '1', '2009-03-19 10:06:27', '127.0.0.1');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='注册会员信息表' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `member`
--


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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='后台目录树表' AUTO_INCREMENT=20 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `pID`, `orderID`, `powerID`, `name`, `url`, `addDate`) VALUES
(1, 0, 1, 0, '作品管理', '', '2009-03-19 08:09:50'),
(2, 0, 2, 0, '作家管理', '', '2009-03-19 08:10:27'),
(3, 0, 3, 0, '会员管理', '', '2009-03-19 08:10:36'),
(4, 0, 4, 0, '留言管理', '', '2009-03-19 08:10:43'),
(5, 0, 5, 0, '类别管理', '', '2009-03-19 08:10:49'),
(6, 0, 6, 0, '内容管理', '', '2009-03-19 08:10:55'),
(7, 0, 7, 0, '用户管理', '', '2009-03-19 08:11:01'),
(8, 1, 8, 0, '添加作品', 'work.php?act=add', '2009-03-19 08:23:59'),
(9, 1, 9, 0, '作品列表', 'work.php?act=listAll', '2009-03-19 08:24:29'),
(10, 2, 10, 0, '添加作家', 'artist.php?act=add', '2009-03-19 08:26:10'),
(11, 2, 11, 0, '作家列表', 'artist.php?act=listAll', '2009-03-19 08:26:26'),
(12, 3, 12, 0, '会员列表', 'member.php?act=listAll', '2009-03-19 08:26:50'),
(13, 4, 13, 0, '留言列表', 'gbook.php', '2009-03-19 08:27:11'),
(14, 5, 14, 0, '增加作品类别', 'category.php?act=add', '2009-03-19 08:27:51'),
(15, 5, 15, 0, '作品类别列表', 'category.php?act=listAll', '2009-03-19 08:28:04'),
(16, 6, 16, 0, '公司简介', 'content.php?act=edit&id=1', '2009-03-19 08:28:25'),
(17, 6, 17, 0, '联系我们', 'content.php?act=edit&id=2', '2009-03-19 08:28:37'),
(18, 7, 18, 0, '添加用户', 'manager.php?act=add', '2009-03-19 08:29:03'),
(19, 7, 19, 0, '用户列表', 'manager.php?act=listAll', '2009-03-19 08:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL COMMENT '作品名称',
  `cID` smallint(4) NOT NULL,
  `price` decimal(10,4) default NULL COMMENT '作品价格',
  `age` int(4) default NULL,
  `comment` varchar(2000) default NULL COMMENT '作品点评',
  `description` text COMMENT '作品描述',
  `artistCode` varchar(10) default NULL,
  `status` enum('0','1','2','3') NOT NULL default '0',
  `picCode` varchar(20) default NULL,
  `flag` enum('0','1') NOT NULL default '0' COMMENT '中英文0＝中文 1＝英文',
  `addDate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='作品信息表' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `name`, `cID`, `price`, `age`, `comment`, `description`, `artistCode`, `status`, `picCode`, `flag`, `addDate`) VALUES
(1, '王府井2008', 1, 100.0000, 2008, '一幅欣慰的画品，应能触动人的心灵深处的某根情感神经，不管这种触动是属于快感还是怀伤，它总会携带一种很自然的冲动或者诠释着一种可以到达心灵的脉络，画家用色调来传达某种情感，让观者体察当有这种感觉。', '<font id="Zoom">马忠建，一个从一八岁开始就喜欢涂弄颜色的人，因为他对色彩的专一情致，在平方来左右的画布空间里，不断积累和琢 磨色彩与生活的沟通技巧，在他已成长这一位职业画家的今天，他将把自己的感悟做了一个汇集，呈献给我们。当读完他的这写画后，总感觉有一点意犹未尽。马忠 建的画以油画为主，细观其画在油画的色彩技法里，融入了中国画的磅礴气势，显得既细腻，有不乏豪放之气。 </font>\r\n<p><font id="Zoom">    代表作《马的系列》表现出一种特别的&quot;脱僵形象&quot;，似乎竭力表达一种生活中的冲动、挣扎和渴望，有那么一点不拘泥传统，展示一种欲望情感，一如发墨般倾注在马的&quot;脱僵&quot;瞬间奔腾气势里。 </font></p>\r\n<p><font id="Zoom">    他的自然风景里，来源于对人的内心世界和自然景物的紧密契合。每处富有动感的色 调，都试图传达出人与自然相通的情感脉络。自然景象中，人与景物强烈地虚实映衬，使得情思与物象交融，外在景物与内心世界相映、互补，是一种生命存在的博 大与深邃。这些，得归于画家对造型与情感的互动表达和画面灵动和笔触轨迹。 </font></p>\r\n<p><font id="Zoom">    &quot;建筑是凝固的音乐&quot;。马忠建画中的宗教式建筑其实在阐释着一种民族的情感信仰和自然精神。</font></p>', '1', '0', '1', '0', '2009-03-19 10:10:41'),
(2, '眺望新世纪', 1, 200.0000, 2008, ' 此次个展准备了2年，很多作品是第一次出展，是艺术家很重要的一次展览，也因杨静作品中的“女演员”总是玩偶，所以这次展览题为“偶的嘉年华”。', '<font id="Zoom"><strong><font color="#0000ff">北京：</font></strong> </font>\r\n<p><font id="Zoom">    &sup2;009年4月&sup1;8日--5月&sup1;7日  </font></p>\r\n<p><font id="Zoom">    开幕酒会：&sup2;009年4月&sup1;8日 星期六 下午&sup3;-6时  </font></p>\r\n<p><font id="Zoom">    展览地点: 北京朝阳区草场地&sup3;&sup1;9号  </font></p>\r\n<p><font id="Zoom">    (机场辅路南皋广汉堂院内F&sup2;画廊旁)  </font></p>\r\n<p><font id="Zoom">    <font color="#0000ff"><strong>上海：</strong></font>  </font></p>\r\n<p><font id="Zoom">    &sup2;009年5月&sup2;9日-6月&sup2;8日  </font></p>\r\n<p><font id="Zoom">    开幕酒会：&sup2;009年5月&sup2;9日 星期六 下午&sup3;-6时  </font></p>\r\n<p><font id="Zoom">    展览地点: 安杰当代艺术画廊  </font></p>\r\n<p><font id="Zoom">    地址：上海市静安区茂名北路&sup3;9号</font></p>\r\n<p><font id="Zoom"><strong><font color="#0000ff">北京：</font></strong> </font> </p>\r\n<p><font id="Zoom">    &sup2;009年4月&sup1;8日--5月&sup1;7日  </font></p>\r\n<p><font id="Zoom">    开幕酒会：&sup2;009年4月&sup1;8日 星期六 下午&sup3;-6时  </font></p>\r\n<p><font id="Zoom">    展览地点: 北京朝阳区草场地&sup3;&sup1;9号  </font></p>\r\n<p><font id="Zoom">    (机场辅路南皋广汉堂院内F&sup2;画廊旁)  </font></p>\r\n<p><font id="Zoom">    <font color="#0000ff"><strong>上海：</strong></font>  </font></p>\r\n<p><font id="Zoom">    &sup2;009年5月&sup2;9日-6月&sup2;8日  </font></p>\r\n<p><font id="Zoom">    开幕酒会：&sup2;009年5月&sup2;9日 星期六 下午&sup3;-6时  </font></p>\r\n<p><font id="Zoom">    展览地点: 安杰当代艺术画廊  </font></p>\r\n<p><font id="Zoom">    地址：上海市静安区茂名北路&sup3;9号</font></p>', '2', '0', '2', '0', '2009-03-19 10:11:29'),
(3, '1989年 女人', 2, 500.0000, 1989, '画面很纯朴，色调溶解的相当和谐。充分反映了生活中人们的完美的结合。画面对比也很强烈，运用的让人感觉这个画家不是在画画，面是在感悟这个世上被遗失的美好。也是一种表达美的方式，但却是另一番景象，唯一稍感不足之处是亲和力不够，没有足够的内涵来打动人', '画面很纯朴，色调溶解的相当和谐。充分反映了生活中人们的完美的结合。画面对比也很强烈，运用的让人感觉这个画家不是在画画，面是在感悟这个世上被遗失的美好。也是一种表达美的方式，但却是另一番景象，唯一稍感不足之处是亲和力不够，没有足够的内涵来打动人<br />画面很纯朴，色调溶解的相当和谐。充分反映了生活中人们的完美的结合。画面对比也很强烈，运用的让人感觉这个画家不是在画画，面是在感悟这个世上被遗失的美好。也是一种表达美的方式，但却是另一番景象，唯一稍感不足之处是亲和力不够，没有足够的内涵来打动人<br />画面很纯朴，色调溶解的相当和谐。充分反映了生活中人们的完美的结合。画面对比也很强烈，运用的让人感觉这个画家不是在画画，面是在感悟这个世上被遗失的美好。也是一种表达美的方式，但却是另一番景象，唯一稍感不足之处是亲和力不够，没有足够的内涵来打动人<br />画面很纯朴，色调溶解的相当和谐。充分反映了生活中人们的完美的结合。画面对比也很强烈，运用的让人感觉这个画家不是在画画，面是在感悟这个世上被遗失的美好。也是一种表达美的方式，但却是另一番景象，唯一稍感不足之处是亲和力不够，没有足够的内涵来打动人<br />画面很纯朴，色调溶解的相当和谐。充分反映了生活中人们的完美的结合。画面对比也很强烈，运用的让人感觉这个画家不是在画画，面是在感悟这个世上被遗失的美好。也是一种表达美的方式，但却是另一番景象，唯一稍感不足之处是亲和力不够，没有足够的内涵来打动人<br />画面很纯朴，色调溶解的相当和谐。充分反映了生活中人们的完美的结合。画面对比也很强烈，运用的让人感觉这个画家不是在画画，面是在感悟这个世上被遗失的美好。也是一种表达美的方式，但却是另一番景象，唯一稍感不足之处是亲和力不够，没有足够的内涵来打动人', '3', '0', '3', '0', '2009-03-19 10:12:04'),
(4, '镜子里的女人', 1, 300.0000, 2000, '仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没\r\n有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种\r\n合理的放大，使我们在读这些作品时心中常常会有一种“不可说”的味\r\n道。然“不可说”不正是一种境界么! ', '由上海缙华画廊承办，山东艺术学院教授，周仕超先生的水粉、油画作品展，&sup2;006年6月&sup1;&sup2;日起至6月&sup2;&sup3;日在上海朵云轩二楼&sup2;号画廊开展。 <br /> 　　此次展出的&sup3;0幅作品，是周先生近年来创作的一部分精品，分为瓶花、风景、静物系列。 <br /> 　　仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种<br /> 合理的放大，使我们在读这些作品时心中常常会有一种&ldquo;不可说&rdquo;的味道。然&ldquo;不可说&rdquo;不正是一种境界么! <br /> 　　周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。<br />由上海缙华画廊承办，山东艺术学院教授，周仕超先生的水粉、油画作品展，&sup2;006年6月&sup1;&sup2;日起至6月&sup2;&sup3;日在上海朵云轩二楼&sup2;号画廊开展。 <br />  　　此次展出的&sup3;0幅作品，是周先生近年来创作的一部分精品，分为瓶花、风景、静物系列。 <br />  　　仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种<br />  合理的放大，使我们在读这些作品时心中常常会有一种&ldquo;不可说&rdquo;的味道。然&ldquo;不可说&rdquo;不正是一种境界么! <br />  　　周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。', '2', '0', '5', '0', '2009-03-19 10:12:45'),
(5, '风景', 1, 300.0000, 1982, '仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种\r\n合理的放大，使我们在读这些作品时心中常常会有一种“不可说”的味道。然“不可说”不正是一种境界么! ', '由上海缙华画廊承办，山东艺术学院教授，周仕超先生的水粉、油画作品展，&sup2;006年6月&sup1;&sup2;日起至6月&sup2;&sup3;日在上海朵云轩二楼&sup2;号画廊开展。 <br /> 　　此次展出的&sup3;0幅作品，是周先生近年来创作的一部分精品，分为瓶花、风景、静物系列。 <br /> 　　仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种<br /> 合理的放大，使我们在读这些作品时心中常常会有一种&ldquo;不可说&rdquo;的味道。然&ldquo;不可说&rdquo;不正是一种境界么! <br /> 　　周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。<br />由上海缙华画廊承办，山东艺术学院教授，周仕超先生的水粉、油画作品展，&sup2;006年6月&sup1;&sup2;日起至6月&sup2;&sup3;日在上海朵云轩二楼&sup2;号画廊开展。 <br />  　　此次展出的&sup3;0幅作品，是周先生近年来创作的一部分精品，分为瓶花、风景、静物系列。 <br />  　　仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种<br />  合理的放大，使我们在读这些作品时心中常常会有一种&ldquo;不可说&rdquo;的味道。然&ldquo;不可说&rdquo;不正是一种境界么! <br />  　　周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。', '3', '0', '6', '0', '2009-03-19 10:13:32'),
(6, '有山的地方', 2, 800.0000, 1985, '周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。\r\n由上海缙华画廊承办，山东艺术学院教授，周仕超先生的水粉、油画作品展，2006年6月12日起至6月23日在上海朵云轩二楼2号画廊开展。 ', '由上海缙华画廊承办，山东艺术学院教授，周仕超先生的水粉、油画作品展，&sup2;006年6月&sup1;&sup2;日起至6月&sup2;&sup3;日在上海朵云轩二楼&sup2;号画廊开展。 <br />  　　此次展出的&sup3;0幅作品，是周先生近年来创作的一部分精品，分为瓶花、风景、静物系列。 <br />  　　仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种<br />  合理的放大，使我们在读这些作品时心中常常会有一种&ldquo;不可说&rdquo;的味道。然&ldquo;不可说&rdquo;不正是一种境界么! <br />  　　周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。<br /> 由上海缙华画廊承办，山东艺术学院教授，周仕超先生的水粉、油画作品展，&sup2;006年6月&sup1;&sup2;日起至6月&sup2;&sup3;日在上海朵云轩二楼&sup2;号画廊开展。 <br />   　　此次展出的&sup3;0幅作品，是周先生近年来创作的一部分精品，分为瓶花、风景、静物系列。 <br />   　　仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种<br />   合理的放大，使我们在读这些作品时心中常常会有一种&ldquo;不可说&rdquo;的味道。然&ldquo;不可说&rdquo;不正是一种境界么! <br />   　　周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。', '1', '1', '7', '0', '2009-03-19 10:14:18'),
(7, '国际风景', 1, 700.0000, 2002, '　周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。', '由上海缙华画廊承办，山东艺术学院教授，周仕超先生的水粉、油画作品展，&sup2;006年6月&sup1;&sup2;日起至6月&sup2;&sup3;日在上海朵云轩二楼&sup2;号画廊开展。 <br />   　　此次展出的&sup3;0幅作品，是周先生近年来创作的一部分精品，分为瓶花、风景、静物系列。 <br />   　　仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种<br />   合理的放大，使我们在读这些作品时心中常常会有一种&ldquo;不可说&rdquo;的味道。然&ldquo;不可说&rdquo;不正是一种境界么! <br />   　　周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。<br />  由上海缙华画廊承办，山东艺术学院教授，周仕超先生的水粉、油画作品展，&sup2;006年6月&sup1;&sup2;日起至6月&sup2;&sup3;日在上海朵云轩二楼&sup2;号画廊开展。 <br />    　　此次展出的&sup3;0幅作品，是周先生近年来创作的一部分精品，分为瓶花、风景、静物系列。 <br />    　　仕超的作品在朦胧中，把将要表现的物象虚拟了；当然虚拟不是没有，相反这种虑拟在更程度上，将物象的原貌进行放大。也正因为这种<br />    合理的放大，使我们在读这些作品时心中常常会有一种&ldquo;不可说&rdquo;的味道。然&ldquo;不可说&rdquo;不正是一种境界么! <br />    　　周先生的作品无论在其色彩、构图或表现手法上，绘画语言鲜明，个人风格尽显，是近年出现的学院派画家代表人物之一。', '3', '1', '8', '0', '2009-03-19 10:14:49'),
(8, '纹身月亮', 1, 500.0000, 2003, '    "建筑是凝固的音乐"。马忠建画中的宗教式建筑其实在阐释着一种民族的情感信仰和自然精神。', '<font id="Zoom">马忠建，一个从一八岁开始就喜欢涂弄颜色的人，因为他对色彩的专一情致，在平方来左右的画布空间里，不断积累和琢 磨色彩与生活的沟通技巧，在他已成长这一位职业画家的今天，他将把自己的感悟做了一个汇集，呈献给我们。当读完他的这写画后，总感觉有一点意犹未尽。马忠 建的画以油画为主，细观其画在油画的色彩技法里，融入了中国画的磅礴气势，显得既细腻，有不乏豪放之气。 </font>\r\n<p><font id="Zoom">    代表作《马的系列》表现出一种特别的&quot;脱僵形象&quot;，似乎竭力表达一种生活中的冲动、挣扎和渴望，有那么一点不拘泥传统，展示一种欲望情感，一如发墨般倾注在马的&quot;脱僵&quot;瞬间奔腾气势里。 </font></p>\r\n<p><font id="Zoom">    他的自然风景里，来源于对人的内心世界和自然景物的紧密契合。每处富有动感的色 调，都试图传达出人与自然相通的情感脉络。自然景象中，人与景物强烈地虚实映衬，使得情思与物象交融，外在景物与内心世界相映、互补，是一种生命存在的博 大与深邃。这些，得归于画家对造型与情感的互动表达和画面灵动和笔触轨迹。 </font></p>\r\n<p><font id="Zoom">    &quot;建筑是凝固的音乐&quot;。马忠建画中的宗教式建筑其实在阐释着一种民族的情感信仰和自然精神。</font></p>', '3', '1', '9', '0', '2009-03-19 10:15:38'),
(9, '海波', 1, 600.0000, 2005, '他的自然风景里，来源于对人的内心世界和自然景物的紧密契合。每处富有动感的色调，都试图传达出人与自然相通的情感脉络。自然景象中，人与景物强烈地虚实映衬，使得情思与物象交融，外在景物与内心世界相映、互补，是一种生命存在的博大与深邃。这些，得归于画家对造型与情感的互动表达和画面灵动和笔触轨迹', '<font id="Zoom">马忠建，一个从一八岁开始就喜欢涂弄颜色的人，因为他对色彩的专一情致，在平方来左右的画布空间里，不断积累和琢 磨色彩与生活的沟通技巧，在他已成长这一位职业画家的今天，他将把自己的感悟做了一个汇集，呈献给我们。当读完他的这写画后，总感觉有一点意犹未尽。马忠 建的画以油画为主，细观其画在油画的色彩技法里，融入了中国画的磅礴气势，显得既细腻，有不乏豪放之气。 </font>\r\n<p><font id="Zoom">    代表作《马的系列》表现出一种特别的&quot;脱僵形象&quot;，似乎竭力表达一种生活中的冲动、挣扎和渴望，有那么一点不拘泥传统，展示一种欲望情感，一如发墨般倾注在马的&quot;脱僵&quot;瞬间奔腾气势里。 </font></p>\r\n<p><font id="Zoom">    他的自然风景里，来源于对人的内心世界和自然景物的紧密契合。每处富有动感的色 调，都试图传达出人与自然相通的情感脉络。自然景象中，人与景物强烈地虚实映衬，使得情思与物象交融，外在景物与内心世界相映、互补，是一种生命存在的博 大与深邃。这些，得归于画家对造型与情感的互动表达和画面灵动和笔触轨迹。 </font></p>\r\n<p><font id="Zoom">    &quot;建筑是凝固的音乐&quot;。马忠建画中的宗教式建筑其实在阐释着一种民族的情感信仰和自然精神。</font></p>', '2', '1', '10', '0', '2009-03-19 10:16:07');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='收藏作品表' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `workfavorite`
--

