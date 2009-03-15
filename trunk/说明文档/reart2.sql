-- phpMyAdmin SQL Dump
-- version 2.11.3
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2009 年 03 月 15 日 04:22
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `ruiyi`
--

-- --------------------------------------------------------

--
-- 表的结构 `artist`
--

CREATE TABLE `artist` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL COMMENT '作家名称',
  `sex` enum('0','1') NOT NULL default '0' COMMENT '性别 0女士1男士',
  `description` text NOT NULL COMMENT '作家描述',
  `profession` varchar(100) default NULL COMMENT '职业',
  `birthday` varchar(50) default NULL COMMENT '出生日期',
  `status` enum('0','1') NOT NULL default '0' COMMENT '作家状态',
  `addDate` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='艺术家信息表' AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `artist`
--

INSERT INTO `artist` (`id`, `name`, `sex`, `description`, `profession`, `birthday`, `status`, `addDate`) VALUES
(5, 'asdfasdf', '0', 'asdfasdf', 'asdfasdf', '', '0', '2009-03-14 15:09:30'),
(3, 'asdfasdf °¢µÄ·¢ËÍ', '0', 'asdfasdf', 'asdfasdfa', '2009-03-04', '0', '2009-03-14 15:13:10'),
(6, 'asdfasdf', '0', 'asdfasdasdfasdfasdf', 'IT', '2009-03-11', '0', '2009-03-14 15:29:00');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int(3) NOT NULL auto_increment,
  `pID` int(3) default '0' COMMENT '0一级目录;父目录ID',
  `name` varchar(50) default NULL COMMENT '目录中文名称',
  `ename` varchar(200) default NULL COMMENT '目录英文名称',
  `addDate` datetime default NULL COMMENT '添加日期',
  `orderID` int(11) default NULL COMMENT '顺序ID',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='分类信息表' AUTO_INCREMENT=1061 ;

--
-- 导出表中的数据 `category`
--

INSERT INTO `category` (`id`, `pID`, `name`, `ename`, `addDate`, `orderID`) VALUES
(1059, 0, 'ÓÍ»­', 'english sdf', '2009-03-13 06:40:25', NULL),
(1058, 0, 'È÷µØ·½´óÈü', 'asdf', '2009-03-13 06:13:32', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) default NULL,
  `content` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='系统内容（公司简介等）' AUTO_INCREMENT=17 ;

--
-- 导出表中的数据 `content`
--

INSERT INTO `content` (`id`, `title`, `content`) VALUES
(1, '0101', '0010&nbsp; <font size="4"><strong>testffsdf</strong></font>'),
(2, '52', '25'),
(4, 'sdfasfas', 'sadfasdf afsd');

-- --------------------------------------------------------

--
-- 表的结构 `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(6) default '0' COMMENT '会员ID，为空则为匿名留言',
  `content` text NOT NULL COMMENT '留言内容',
  `addDate` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '留言时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='留言信息表' AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `guestbook`
--

INSERT INTO `guestbook` (`id`, `userID`, `content`, `addDate`) VALUES
(1, 0, 'zsdfasdfasdf', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `loginlog`
--

CREATE TABLE `loginlog` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(10) NOT NULL COMMENT '会员ID',
  `loginDate` datetime NOT NULL COMMENT '登录时间',
  `logoutDate` datetime NOT NULL COMMENT '登出时间',
  `loginIP` varchar(50) default NULL COMMENT '登录ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='会员登录日志' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `loginlog`
--


-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE `manager` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='后台用户信息表' AUTO_INCREMENT=17 ;

--
-- 导出表中的数据 `manager`
--

INSERT INTO `manager` (`id`, `userName`, `pwd`, `trueName`, `msn`, `qq`, `email`, `telephone`, `mobile`, `status`, `lastTime`, `lastIP`) VALUES
(1, 'admin', '670b14728ad9902aecba32e22fa4f6bd', 'lentim', 'dsfsdf', 0, 'dfdf', '', '', '1', '2009-03-14 15:39:54', '127.0.0.1'),
(2, 'test', '96e79218965eb72c92a549dd5a330112', '²âÊÔ', '', 0, '', '', '', '1', '2009-03-10 03:48:51', '127.0.0.1'),
(15, 'test_test12', '670b14728ad9902aecba32e22fa4f6bd', 'ºÇºÇ', '12', 123, '123', '123', '123', '0', '0000-00-00 00:00:00', NULL),
(16, 'root', '670b14728ad9902aecba32e22fa4f6bd', 'test', '', 0, '', '', '', '1', '2009-03-14 09:36:59', '127.0.0.1');

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE `member` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='注册会员信息表' AUTO_INCREMENT=178 ;

--
-- 导出表中的数据 `member`
--

INSERT INTO `member` (`id`, `userName`, `trueName`, `pwd`, `address`, `phone`, `email`, `addDate`, `loginDate`, `loginNums`, `loginIp`, `status`) VALUES
(177, 'lentim', 'asdfasdf', '670b14728ad9902aecba32e22fa4f6bd', '±±¾©º£µí', '123123', '123', '2009-03-12 14:55:30', '2009-03-01 14:55:33', 3, NULL, '0');

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE `menu` (
  `id` int(3) NOT NULL auto_increment,
  `pID` int(3) NOT NULL default '0',
  `orderID` int(3) default '0',
  `powerID` int(3) default '0',
  `name` varchar(50) NOT NULL default '',
  `url` varchar(50) NOT NULL default '',
  `addDate` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='后台目录树表' AUTO_INCREMENT=135 ;

--
-- 导出表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `pID`, `orderID`, `powerID`, `name`, `url`, `addDate`) VALUES
(6, 0, 11, 0, 'ÓÃ»§¹ÜÀí', '', '2007-05-25 23:16:11'),
(7, 6, 13, 7, 'Ìí¼ÓÓÃ»§', 'manager.php?act=add', '2007-05-25 23:17:44'),
(8, 6, 14, 9, 'ÓÃ»§ÁÐ±í', 'manager.php?act=listAll', '2007-05-25 23:18:24'),
(21, 0, 4, 0, '»áÔ±¹ÜÀí', '', '2007-06-21 15:56:21'),
(25, 29, 12, 0, 'ÁªÏµÎÒÃÇ', 'content.php?act=edit&id=2', '2009-03-10 05:40:35'),
(26, 0, 12, 0, 'ÁôÑÔ¹ÜÀí', '', '2009-03-10 06:42:56'),
(27, 26, 15, 0, 'ÁôÑÔÁÐ±í', 'gbook.php', '2009-03-13 03:56:23'),
(29, 0, 3, 0, 'ÄÚÈÝ¹ÜÀí', '', '2007-07-07 14:19:39'),
(35, 0, 1, 0, '×÷Æ·¹ÜÀí', '', '2009-03-13 03:54:27'),
(36, 35, 36, 0, 'Ìí¼Ó×÷Æ·', 'work.php?act=add', '2009-03-14 15:26:52'),
(37, 35, 37, 23, '×÷Æ·ÁÐ±í', 'work.php?act=listAll', '2009-03-13 15:36:05'),
(38, 0, 8, 0, 'Àà±ð¹ÜÀí', '', '2007-06-23 09:08:58'),
(41, 38, 20, 17, '×÷Æ·Àà±ðÁÐ±í', 'category.php?act=listAll', '2009-03-13 05:45:33'),
(66, 29, 11, 0, '¹«Ë¾¼ò½é', 'content.php?act=edit&id=1', '2009-03-10 05:39:05'),
(68, 21, 11, 15, '»áÔ±ÁÐ±í', 'member.php?act=listAll', '2009-03-14 06:53:53'),
(130, 0, 130, 0, '×÷¼Ò¹ÜÀí', '', '2009-03-13 08:08:57'),
(129, 38, 15, 0, 'Ôö¼Ó×÷Æ·Àà±ð', 'category.php?act=add', '2009-03-13 05:45:23'),
(131, 130, 135, 0, '×÷¼ÒÁÐ±í', 'artist.php?act=listAll', '2009-03-13 08:12:09'),
(132, 130, 132, 0, 'Ìí¼Ó×÷¼Ò', 'artist.php?act=add', '2009-03-13 08:11:55');

-- --------------------------------------------------------

--
-- 表的结构 `work`
--

CREATE TABLE `work` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL COMMENT '作品名称',
  `cID` smallint(4) NOT NULL,
  `price` decimal(10,4) default NULL COMMENT '作品价格',
  `age` varchar(50) default NULL COMMENT '作品年代',
  `comment` varchar(2000) default NULL COMMENT '作品点评',
  `description` text COMMENT '作品描述',
  `artistID` int(10) default NULL COMMENT '作家编号',
  `status` enum('0','1','2') NOT NULL default '0' COMMENT '作品状态0：正常1：推荐2：删除',
  `picPath` varchar(100) default NULL COMMENT '作品图片路径',
  `flag` enum('0','1') NOT NULL default '0' COMMENT '中英文0＝中文 1＝英文',
  `addDate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='作品信息表' AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `work`
--

INSERT INTO `work` (`id`, `name`, `cID`, `price`, `age`, `comment`, `description`, `artistID`, `status`, `picPath`, `flag`, `addDate`) VALUES
(1, 'tttt', 1059, 0.0000, '', '', '', NULL, '1', NULL, '0', '2009-03-14 00:00:00'),
(2, 'tttt7776666666', 1059, 0.0000, '', 'dfdf', 'dfsdf', NULL, '1', NULL, '0', '2009-03-14 06:41:06');

-- --------------------------------------------------------

--
-- 表的结构 `workfavorite`
--

CREATE TABLE `workfavorite` (
  `id` int(8) NOT NULL auto_increment,
  `workID` int(10) NOT NULL COMMENT '作品ID',
  `userID` int(10) NOT NULL COMMENT '用户ID',
  `addDate` datetime NOT NULL COMMENT '收藏日期',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='收藏作品表' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `workfavorite`
--

