-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2009 年 03 月 13 日 07:38
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `ruiyi`
--

-- --------------------------------------------------------

--
-- 表的结构 `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(6) NOT NULL auto_increment,
  `orderID` int(6) NOT NULL,
  `pID` int(6) NOT NULL default '0',
  `name` varchar(50) default NULL,
  `nextYes` int(2) default NULL,
  `grade` int(2) default NULL,
  `first` int(2) default NULL,
  `CategoryOrder` int(11) default NULL,
  `pic` varchar(50) default NULL,
  `meta` longtext,
  `hide` int(1) default NULL,
  `Intro` varchar(255) default NULL,
  `addDate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3332 ;

-- --------------------------------------------------------

--
-- 表的结构 `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `sex` enum('0','1') NOT NULL default '0',
  `description` text NOT NULL,
  `profession` varchar(100) default NULL,
  `birthday` varchar(50) default NULL,
  `addDate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(3) NOT NULL auto_increment,
  `pID` int(3) default '0',
  `name` varchar(50) default NULL,
  `ename` varchar(200) default NULL,
  `addDate` datetime default NULL,
  `orderID` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1060 ;

-- --------------------------------------------------------

--
-- 表的结构 `channel`
--

CREATE TABLE IF NOT EXISTS `channel` (
  `id` int(5) NOT NULL auto_increment,
  `orderID` int(6) default '0',
  `parentID` int(5) NOT NULL default '0',
  `realEffectID` tinyint(2) default '0',
  `name` varchar(255) default NULL,
  `number` int(2) NOT NULL default '0',
  `type` enum('0','1','2','3') NOT NULL default '0',
  `ispay` int(1) default '1',
  `buyPrice` float NOT NULL default '0',
  `salePrice` float NOT NULL default '0',
  `status` int(1) default '1',
  `addDate` date NOT NULL default '0000-00-00',
  `endDate` date NOT NULL default '0000-00-00',
  `remark` text,
  `owner` int(3) default '0',
  `isHtm` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `parentID` (`parentID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) default NULL,
  `content` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='系统内容（公司简介等）' AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- 表的结构 `gbook`
--

CREATE TABLE IF NOT EXISTS `gbook` (
  `id` int(11) NOT NULL auto_increment,
  `pID` int(6) NOT NULL default '0',
  `trueName` varchar(50) NOT NULL default '',
  `sex` enum('0','1') NOT NULL default '0',
  `phone` varchar(50) NOT NULL default '',
  `mobile` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `qq` varchar(20) NOT NULL default '',
  `content` text NOT NULL,
  `addDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `address` varchar(250) NOT NULL default '',
  `postcode` varchar(10) NOT NULL default '',
  `ip` varchar(30) NOT NULL default '',
  `isRead` int(1) NOT NULL default '0',
  `urlID` int(3) NOT NULL default '0',
  `isReply` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(6) default '0' COMMENT '会员ID，为空则为匿名留言',
  `content` text NOT NULL,
  `addDate` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `hangye`
--

CREATE TABLE IF NOT EXISTS `hangye` (
  `id` int(3) NOT NULL auto_increment,
  `orderID` int(3) default '0',
  `pID` int(3) default '0',
  `name` varchar(50) default NULL,
  `intro` varchar(200) default NULL,
  `addDate` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1055 ;

-- --------------------------------------------------------

--
-- 表的结构 `loginlog`
--

CREATE TABLE IF NOT EXISTS `loginlog` (
  `id` int(11) NOT NULL auto_increment,
  `userID` int(10) NOT NULL,
  `loginDate` datetime NOT NULL,
  `logoutDate` datetime NOT NULL,
  `loginIP` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='会员登录日志' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `log_login`
--

CREATE TABLE IF NOT EXISTS `log_login` (
  `id` int(11) NOT NULL auto_increment,
  `userName` varchar(20) NOT NULL default '',
  `pwd` varchar(20) NOT NULL default '',
  `loginTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `logoutTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `ip` varchar(15) NOT NULL default '',
  `status` enum('0','1','2') NOT NULL default '0',
  `adminType` enum('0','1','2','3','4') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=515 ;

-- --------------------------------------------------------

--
-- 表的结构 `log_operate`
--

CREATE TABLE IF NOT EXISTS `log_operate` (
  `id` int(20) NOT NULL auto_increment,
  `uID` tinyint(5) NOT NULL default '0',
  `addDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `msg` varchar(200) NOT NULL default '',
  `content` text,
  `fileName` varchar(20) default NULL,
  `action` varchar(50) default NULL,
  `status` enum('0','1','2') NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `userID` (`uID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=374 ;

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(2) NOT NULL auto_increment,
  `userName` varchar(20) NOT NULL default '',
  `intro` mediumtext NOT NULL,
  `pwd` varchar(40) NOT NULL default '',
  `trueName` varchar(20) NOT NULL default '',
  `department` varchar(40) NOT NULL default '',
  `duty` varchar(20) NOT NULL default '',
  `msn` varchar(40) NOT NULL default '',
  `qq` int(15) default '0',
  `email` varchar(40) default NULL,
  `telephone` varchar(20) default '',
  `mobile` varchar(20) default '',
  `roleID` int(3) NOT NULL default '0',
  `status` enum('0','1','2') NOT NULL default '1',
  `isManager` enum('0','1') NOT NULL default '0',
  `managerID` int(4) NOT NULL default '0',
  `extFunc` text NOT NULL,
  `lastTime` datetime default '0000-00-00 00:00:00',
  `lastIP` varchar(16) default NULL,
  `pic` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `roleID` (`roleID`),
  KEY `managerID` (`managerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL auto_increment,
  `userName` varchar(50) default NULL,
  `pwd` varchar(50) default NULL,
  `address` varchar(255) default NULL,
  `phone` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `addDate` datetime default NULL,
  `loginDate` datetime default NULL,
  `loginNums` int(6) default NULL,
  `loginIp` varchar(100) default NULL COMMENT '0:正常1：删除',
  `status` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='注册会员信息表' AUTO_INCREMENT=177 ;

-- --------------------------------------------------------

--
-- 表的结构 `menu`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

-- --------------------------------------------------------

--
-- 表的结构 `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL auto_increment,
  `userName` varchar(50) default NULL,
  `pwd` varchar(50) default NULL,
  `address` varchar(255) default NULL,
  `phone` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `addDate` datetime default NULL,
  `loginDate` datetime default NULL,
  `loginNums` int(6) default NULL,
  `loginIp` varchar(100) default NULL COMMENT '0:正常1：删除',
  `status` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='¸öÈË/×¨¼Ò»áÔ±' AUTO_INCREMENT=177 ;

-- --------------------------------------------------------

--
-- 表的结构 `pic`
--

CREATE TABLE IF NOT EXISTS `pic` (
  `id` int(6) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `keywords` varchar(200) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `author` varchar(30) NOT NULL,
  `content` text,
  `cID` int(3) default NULL,
  `hangyeID` int(3) NOT NULL default '0',
  `source` varchar(50) default NULL,
  `pic` varchar(255) default NULL,
  `attached` varchar(255) NOT NULL,
  `addDate` datetime default NULL,
  `click` int(6) NOT NULL default '0',
  `userName` varchar(50) default NULL,
  `isRed` enum('0','1') NOT NULL default '0',
  `status` enum('0','1','2','3') NOT NULL default '0',
  `fileName` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8817 ;

-- --------------------------------------------------------

--
-- 表的结构 `pic_class`
--

CREATE TABLE IF NOT EXISTS `pic_class` (
  `id` int(3) NOT NULL auto_increment,
  `orderID` int(3) NOT NULL,
  `pID` int(3) default '0',
  `name` varchar(50) default NULL,
  `intro` mediumtext,
  `addDate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='×ÊÑ¶À¸Ä¿' AUTO_INCREMENT=139 ;

-- --------------------------------------------------------

--
-- 表的结构 `power`
--

CREATE TABLE IF NOT EXISTS `power` (
  `id` int(10) NOT NULL auto_increment,
  `fileNameEn` varchar(40) NOT NULL default '',
  `fileNameCn` varchar(40) NOT NULL default '',
  `powerNameEn` varchar(40) NOT NULL default '',
  `powerNameCn` varchar(40) NOT NULL default '',
  `status` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL default '',
  `description` text NOT NULL,
  `powerID` text NOT NULL,
  `status` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `web_url`
--

CREATE TABLE IF NOT EXISTS `web_url` (
  `id` int(6) NOT NULL auto_increment,
  `userName` varchar(20) NOT NULL default '',
  `channelID` int(10) NOT NULL default '0',
  `bannerID` int(5) NOT NULL default '0',
  `type` enum('0','1','2','3','4') NOT NULL default '0',
  `name` varchar(50) default NULL,
  `adTitle` varchar(200) NOT NULL default '',
  `adWebPage` varchar(200) NOT NULL default '',
  `adKeyword` varchar(50) NOT NULL default '',
  `isNeedCount` enum('0','1') NOT NULL default '0',
  `buyPrice` float NOT NULL default '0',
  `salePrice` float NOT NULL default '0',
  `status` int(1) default '0',
  `pic` varchar(30) NOT NULL default '',
  `isRed` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `channelID` (`channelID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

-- --------------------------------------------------------

--
-- 表的结构 `workfavorite`
--

CREATE TABLE IF NOT EXISTS `workfavorite` (
  `id` int(8) NOT NULL auto_increment,
  `workID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `addDate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='收藏作品表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `works`
--

CREATE TABLE IF NOT EXISTS `works` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL COMMENT '作品名称',
  `price` decimal(10,4) default NULL COMMENT '作品价格',
  `age` varchar(50) default NULL COMMENT '作品年代',
  `comment` varchar(2000) default NULL COMMENT '作品点评',
  `description` text COMMENT '作品描述',
  `artistID` int(10) NOT NULL COMMENT '作家编号',
  `status` enum('0','1','2') NOT NULL default '0' COMMENT '作品状态0：正常1：推荐2：删除',
  `picPath` varchar(100) NOT NULL COMMENT '作品图片路径',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='作品信息表' AUTO_INCREMENT=1 ;
