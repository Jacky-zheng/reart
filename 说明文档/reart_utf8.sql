-- phpMyAdmin SQL Dump
-- version 2.7.0-pl1
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2009 年 03 月 24 日 16:12
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5
-- 
-- 数据库: `a0317111520`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `artist`
-- 

CREATE TABLE `artist` (
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='艺术家信息表' AUTO_INCREMENT=10 ;

-- 
-- 导出表中的数据 `artist`
-- 

INSERT INTO `artist` VALUES (1, '1', '刘大鸿', '0', '1962 生于中国山东青岛<br />1985 毕业于中国美术学院，现工作生活于上海与北京，任教上海师范大学美术学院，主持双百工作室<br />个展 <br />2008 鸿5月：刘大鸿1988-2008/都亚特画廊/北京 <br />● 元旦献词： 刘大鸿 2008 首展 /香港艺术中心·包氏画廊/香港<br />2006 鸿图/浦东张江高科技园文化艺术中心/上海 <br />2005 红历： 二十四节气/汉雅轩画廊/香港', '', '', '0', '2009-03-23 04:02:30');
INSERT INTO `artist` VALUES (8, '8', '严培明', '0', '1960生于中国上海 <br />1981移居法国第戎 <br />1981-1986就读于法国第戎国立美术学院<br />个展 <br />2009蒙娜丽莎的葬礼／巴黎卢浮宫博物馆／法国 <br />2008严培明作品展／贝尔加莫市现代艺术画廊／意大利 <br />2006严培明个展／圣艾蒂安现代艺术博物馆／法国 <br />2005严培明：献给我的父亲／广东美术馆／中国', '', '', '0', '2009-03-23 05:04:54');
INSERT INTO `artist` VALUES (2, '2', '郑义', '0', '1961生于中国黑龙江哈尔滨，毕业于鲁迅美术学院油画系<br />展览 <br />2008奥林匹克美术大会/北京 <br />2006中国写实画派 <br />2006油画年展/中国美术馆/北京', '', '', '0', '2009-03-23 04:57:20');
INSERT INTO `artist` VALUES (6, '6', '刘炜', '0', '1965生于中国北京 <br />1989毕业于中央美术学院版画系<br />个展 <br />2008我的风景：刘炜作品展／红桥画廊／上海 <br />2006落花·流水：刘炜个人作品展／红桥画廊／上海 <br />2005刘炜 <br />2005<br />纸上作品展／沪申画廊／上海 <br />刘炜个人作品展／ <br />Loft画廊／巴黎 <br />2004刘炜“花儿”册页纸上作品展／麦勒画廊／卢塞恩 /瑞士', '', '', '0', '2009-03-23 05:02:57');
INSERT INTO `artist` VALUES (7, '7', '徐冰', '0', '1955生于中国重庆 <br />1987获中央美术学院版画系硕士学位 <br />1990接受美国威斯康辛大学的邀请作为荣誉艺术家移居美国 <br />2007 获美国全美版画家协会颁发的“版画艺术终身成就奖”现为中央美术学院副院长<br />近期个展 <br />2008徐冰：格罗斯曼艺术家个展／理查德 <br />A.与利萨 <br />W.格罗斯曼画廊、拉法耶特大学/宾州/美国 <br />徐冰的新观看方式/撒<br />海尔画廊/吉姆斯麦迪森大学/弗吉尼亚州 /美国 <br />2007天书到地书：徐冰的书本艺术/斯宾塞美术馆、堪萨斯大学 /堪萨斯州/美国 <br />2006徐冰：现代艺术特展/苏州博物馆/中国', '', '', '0', '2009-03-23 05:04:18');
INSERT INTO `artist` VALUES (3, '3', '刘野', '0', '1964生于北京 <br />1984毕业于北京工艺美校 <br />1989毕业于中央美术学院壁画系 <br />1994毕业于德国柏林艺术学院并获硕士学位<br />展览 <br />2008 中国：面对现实／维也纳现代美术馆／奥地利 <br />2007中国之窗／伯尔尼美术馆／瑞士 <br />2006麻将：希克中国当代<br />艺术收藏展／汉堡美术馆／德国 <br />●首届中国当代艺术年鉴／中华世纪坛美术馆／北京 ●Accrochage／20,21画廊／埃森/德国 诱惑／ <br />SperoneWestwater画廊／纽约 <br />2005刘野·金田胜一／Frank Schlag &amp; Cie画廊／埃森 /德国 一卡通／顶层空间／北京', '', '', '0', '2009-03-23 04:59:02');
INSERT INTO `artist` VALUES (4, '4', '张晓刚', '0', '1958生于中国云南省昆明 <br />1982毕业于四川美术学院<br />个展 <br />2009张晓刚：灵魂上的影子/昆士兰现代美术馆/澳大利亚 <br />2008张晓刚：修正/佩斯画廊/纽约 <br />张晓刚个展 /坦佩雷莎拉希尔登博物馆/芬兰 <br />2000张晓刚 2000/MaxProtetch画廊/纽约<br />重要收藏美国纽约古根海姆博物馆、美国旧金山现代美术馆、日本福冈亚洲艺术馆、澳洲国家美术馆等等', '', '', '0', '2009-03-23 05:00:31');
INSERT INTO `artist` VALUES (5, '5', '向京', '0', '1968生于中国北京 <br />1988毕业于中央美术学院附中 <br />1995毕业于中央美术学院雕塑系<br />个展 <br />2008全裸/当代唐人艺术中心/北京 <br />2007一百个人演奏你？还是一个人？/诚品画廊 /台北 <br />2006你的身体：向京<br />作品 <br />2000-2005/上海美术馆/上海 <br />2005保持沉默：向京作品 <br />2003-2005/季节画廊/北京 <br />2003镜子里的女人/中国<br />欧洲艺术中心/厦门 <br />2001白日梦/向京雕塑展/常春藤书园/上海', '', '', '0', '2009-03-23 05:02:17');
INSERT INTO `artist` VALUES (9, '9', '孙良', '0', '1957出生于中国杭州 <br />1982毕业于上海轻工业学院，现工作生活于上海<br />联展 <br />2007 八五新潮：中国第一次当代艺术运动/尤伦斯当代艺术中心 /北京 <br />纹身月亮/张江当代艺术馆 /上海 <br />2006 东方想象/中国美术馆 /北京 <br />图像的创世纪——孙良油画/上海美术馆 /上海 <br />2004第五届上海双年展 /上海美术馆/上海 <br />映象／Gransden画廊／伦敦 <br />2003形而上2003：上海抽象艺术展/上海美术馆/上海 <br />2002首届广州三年展/广东美术馆 /广州/中国 <br />2001首届成都双年展 /成都现代美术馆 /四川／中国', '', '', '0', '2009-03-23 05:06:45');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='分类信息表' AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `category`
-- 

INSERT INTO `category` VALUES (1, 0, '布面油画', 'oil on canvas', '2009-03-23 05:10:04', NULL);
INSERT INTO `category` VALUES (2, 0, '纸本油画', 'oil on paper', '2009-03-23 05:10:38', NULL);
INSERT INTO `category` VALUES (3, 0, '玻璃钢着色版本', 'painted fiberglass Edition', '2009-03-23 05:11:07', NULL);
INSERT INTO `category` VALUES (4, 0, '木刻版画', 'Woodcutting Printmaking A.P.', '2009-03-23 05:11:34', NULL);

-- --------------------------------------------------------

-- 
-- 表的结构 `content`
-- 

CREATE TABLE `content` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) default NULL,
  `content` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='系统内容（公司简介等）' AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `content`
-- 

INSERT INTO `content` VALUES (1, '关于睿艺', '<p>卷首语<br />这是一本当代艺术作品的推荐图录。我们为收藏者定期推荐值得长期持有并具投资价值的当代艺术品。艺术品被视为除了股票基金、房地产外的第三大投资商品。但艺术品流通率低，交易群小，变现性低，价格不够透明，风险评估困难。所以，艺术投资，绝对是智能型投资，一定得多作功课，多练眼力。但好眼力，是用脚走出来。所以，得多去美术馆、画廊、博览会，同时多向经纪人请教、结识艺术家、并与同好交换情报。同时多浏览画册、艺术网站及杂志，增加美术史常识。艺术市场上，能掌握精准信息者，就是赢家。但现在信息爆炸，展览太多，入门不易。所以，我们以这本目录，为收藏家挑选值得关注的艺术家，并提供清晰的买进建议。我们的网站上，还有关<br />于当代艺术收藏的相关知识，可供同好研究。艺术投资稳赢不输的秘诀，只有一个，就是自己喜欢，并成为一个真正的收藏家。所以，只有以“收藏 ”为出发点，凌驾投资获利的目的，才能为自己买进无价的「鉴赏力」。投资，只是窄化的金钱游戏；收藏，却是日积月累的美学涵养。真正的收藏家，买画就是为了欣赏，并不关心升值与否。艺术收藏的最大乐趣，并非来自于脱手变现的实质获利，而是证明自己眼光的成就感；增值的不是艺术品本身，而是流连其中的乐趣与品味。收藏是一种审美生活，一种有品味的文化活动，一种精神生活的延续，一种为艺术而艺术的高尚自觉。一件藏品开启了一个世界，“收藏 ”也因此成为建构个人艺术国度的经验。收藏家的藏品，比他的财富更有分量；因为他收藏的不只是一件艺术品，也是一段文化与思想的历史。这本推荐目录，是我们为收藏家精心挑选值得收藏的当代艺术家作品。挑选艺术家的标准依循三个原则：第一、观念与技法是否有原创性，第二、学术地位与艺术史定位，第三、市场认同度。如果你一直想收藏当代艺术品，却不得其门而入。或许从本书开始。如果你开始收藏了，却感到迷茫，或许从这里能得到启发。如果你需要得到收藏常识，或与同好讨论，请浏览我们网站。如果你想为你的好藏品找到好买家，也可以委托我们。<br />总监 /赵孝萱</p>\r\n<p>公司：联合艺道（北京）文化传媒有限公司<br />地址：北京市朝阳区百子湾路32号院北区3号楼B座705室 <br />邮编：100022</p>\r\n<p>总监：赵孝萱<br />顾问：田恺<br />客户服务主管：周雅婷<br />网络主管：陈捷<br />财务主管：衡崴<br />英文翻译：黄启哲 吕亨英<br />法律顾问：北京市昆仑律师事务所 杨怀民</p>\r\n<p>贵宾接待处：<br />北京市朝阳区百子湾路32号院北区一号楼9号房间 东站画廊</p>\r\n<p>电话： +86 10 5876 9207/9013<br />传真： +86 10 5876 9207/9013-808<br />网址： <a href="http://www.reart.com.cn">www.reart.com.cn</a><br />电邮： <a href="mailto:service@reart.com.cn">service@reart.com.cn</a> <br />特别通告</p>\r\n<p>本目录中所有推荐作品均可接受询价<br />免费咨询专线：+86 400 898 1600</p>\r\n<p>&nbsp;</p>');
INSERT INTO `content` VALUES (2, '投资收藏咨询', '<p>test</p>');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言信息表' AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `guestbook`
-- 


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
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COMMENT='会员登录日志' AUTO_INCREMENT=52 ;

-- 
-- 导出表中的数据 `loginlog`
-- 

INSERT INTO `loginlog` VALUES (1, 1, '2009-03-21 06:37:04', '0000-00-00 00:00:00', '221.221.166.52');
INSERT INTO `loginlog` VALUES (2, 1, '2009-03-21 08:40:34', '0000-00-00 00:00:00', '221.221.166.52');
INSERT INTO `loginlog` VALUES (3, 2, '2009-03-22 08:43:29', '0000-00-00 00:00:00', '114.240.64.160');
INSERT INTO `loginlog` VALUES (4, 3, '2009-03-22 08:44:10', '0000-00-00 00:00:00', '114.240.64.160');
INSERT INTO `loginlog` VALUES (5, 3, '0000-00-00 00:00:00', '2009-03-22 10:08:52', '114.240.77.86');
INSERT INTO `loginlog` VALUES (6, 3, '2009-03-22 14:25:46', '0000-00-00 00:00:00', '123.115.176.36');
INSERT INTO `loginlog` VALUES (7, 1, '2009-03-22 14:38:13', '0000-00-00 00:00:00', '221.221.166.52');
INSERT INTO `loginlog` VALUES (8, 1, '0000-00-00 00:00:00', '2009-03-22 14:39:16', '221.221.166.52');
INSERT INTO `loginlog` VALUES (9, 4, '2009-03-22 15:36:47', '0000-00-00 00:00:00', '221.221.166.52');
INSERT INTO `loginlog` VALUES (10, 1, '2009-03-22 16:08:56', '0000-00-00 00:00:00', '221.221.166.52');
INSERT INTO `loginlog` VALUES (11, 1, '2009-03-22 16:11:32', '0000-00-00 00:00:00', '221.221.166.52');
INSERT INTO `loginlog` VALUES (12, 1, '0000-00-00 00:00:00', '2009-03-22 16:12:02', '221.221.166.52');
INSERT INTO `loginlog` VALUES (13, 4, '2009-03-23 01:35:20', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (14, 3, '2009-03-23 03:08:10', '0000-00-00 00:00:00', '219.142.130.99');
INSERT INTO `loginlog` VALUES (15, 3, '0000-00-00 00:00:00', '2009-03-23 03:08:55', '219.142.130.99');
INSERT INTO `loginlog` VALUES (16, 4, '2009-03-23 03:10:21', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (17, 4, '2009-03-23 03:11:00', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (18, 4, '2009-03-23 03:12:52', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (19, 1, '2009-03-23 03:38:03', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (20, 1, '0000-00-00 00:00:00', '2009-03-23 03:38:08', '123.127.164.5');
INSERT INTO `loginlog` VALUES (21, 1, '2009-03-23 03:38:27', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (22, 1, '2009-03-23 03:41:23', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (23, 1, '2009-03-23 03:42:27', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (24, 1, '0000-00-00 00:00:00', '2009-03-23 03:43:11', '123.127.164.5');
INSERT INTO `loginlog` VALUES (25, 1, '0000-00-00 00:00:00', '2009-03-23 03:51:43', '123.127.164.5');
INSERT INTO `loginlog` VALUES (26, 1, '0000-00-00 00:00:00', '2009-03-23 03:58:22', '123.127.164.5');
INSERT INTO `loginlog` VALUES (27, 1, '2009-03-23 04:00:44', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (28, 1, '2009-03-23 04:02:10', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (29, 1, '0000-00-00 00:00:00', '2009-03-23 04:51:10', '123.127.164.5');
INSERT INTO `loginlog` VALUES (30, 1, '2009-03-23 05:05:39', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (31, 1, '0000-00-00 00:00:00', '2009-03-23 05:20:32', '123.127.164.5');
INSERT INTO `loginlog` VALUES (32, 3, '2009-03-23 05:52:51', '0000-00-00 00:00:00', '219.142.130.99');
INSERT INTO `loginlog` VALUES (33, 3, '0000-00-00 00:00:00', '2009-03-23 05:54:28', '219.142.130.99');
INSERT INTO `loginlog` VALUES (34, 3, '2009-03-23 05:58:19', '0000-00-00 00:00:00', '219.142.130.99');
INSERT INTO `loginlog` VALUES (35, 3, '0000-00-00 00:00:00', '2009-03-23 06:06:30', '219.142.130.99');
INSERT INTO `loginlog` VALUES (36, 4, '0000-00-00 00:00:00', '2009-03-23 06:34:38', '123.127.164.5');
INSERT INTO `loginlog` VALUES (37, 1, '2009-03-24 02:03:36', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (38, 3, '2009-03-24 03:11:59', '0000-00-00 00:00:00', '219.142.130.99');
INSERT INTO `loginlog` VALUES (39, 1, '2009-03-24 05:28:52', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (40, 1, '0000-00-00 00:00:00', '2009-03-24 05:32:55', '123.127.164.5');
INSERT INTO `loginlog` VALUES (41, 1, '2009-03-24 05:33:02', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (42, 1, '0000-00-00 00:00:00', '2009-03-24 05:33:28', '123.127.164.5');
INSERT INTO `loginlog` VALUES (43, 1, '2009-03-24 05:34:24', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (44, 1, '0000-00-00 00:00:00', '2009-03-24 05:35:26', '123.127.164.5');
INSERT INTO `loginlog` VALUES (45, 1, '2009-03-24 07:50:51', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (46, 1, '0000-00-00 00:00:00', '2009-03-24 07:52:26', '123.127.164.5');
INSERT INTO `loginlog` VALUES (47, 1, '2009-03-24 10:45:25', '0000-00-00 00:00:00', '123.127.164.5');
INSERT INTO `loginlog` VALUES (48, 1, '2009-03-24 14:36:41', '0000-00-00 00:00:00', '221.221.152.207');
INSERT INTO `loginlog` VALUES (49, 2, '2009-03-24 15:08:01', '0000-00-00 00:00:00', '221.221.152.207');
INSERT INTO `loginlog` VALUES (50, 2, '0000-00-00 00:00:00', '2009-03-24 15:10:55', '221.221.152.207');
INSERT INTO `loginlog` VALUES (51, 2, '2009-03-24 15:27:54', '0000-00-00 00:00:00', '221.221.152.207');

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
  `loginStatus` enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台用户信息表' AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `manager`
-- 

INSERT INTO `manager` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '夏珊', 'ddd', 0, NULL, NULL, NULL, '1', '2009-03-24 14:36:41', '221.221.152.207', '1');
INSERT INTO `manager` VALUES (2, 'xujian', 'e10adc3949ba59abbe56e057f20f883e', '徐健', '', 0, 'hehe2006@sina.com', '', '', '1', '2009-03-24 15:27:54', '221.221.152.207', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='注册会员信息表' AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `member`
-- 

INSERT INTO `member` VALUES (1, 'xujian', 'xujian', '670b14728ad9902aecba32e22fa4f6bd', 'fdafdsfs', '00009999', 'xuj@sds.com', '2009-03-21 06:37:04', '2009-03-21 06:37:04', NULL, '221.221.166.52', '0');
INSERT INTO `member` VALUES (2, 'stream', '', '4bcfcd82c74d2855069ca6edce7a5c42', '', '13401103237', 'yafei-ren1981@163.com', '2009-03-22 08:43:29', '2009-03-22 08:43:29', NULL, '114.240.64.160', '0');
INSERT INTO `member` VALUES (3, 'stream_401', '', 'd1cfe329acf16f69cfe1d210e1581b30', '', '13401103237', 'yafei-ren1981@163.com', '2009-03-22 08:44:10', '2009-03-22 08:44:10', NULL, '114.240.64.160', '0');
INSERT INTO `member` VALUES (4, 'test', '', '96e79218965eb72c92a549dd5a330112', '', '11111111111', 'dfs@df.com', '2009-03-22 15:36:47', '2009-03-22 15:36:47', NULL, '221.221.166.52', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='后台目录树表' AUTO_INCREMENT=25 ;

-- 
-- 导出表中的数据 `menu`
-- 

INSERT INTO `menu` VALUES (1, 0, 1, 0, '作品管理', '', '2009-03-19 08:09:50');
INSERT INTO `menu` VALUES (2, 0, 2, 0, '作家管理', '', '2009-03-19 08:10:27');
INSERT INTO `menu` VALUES (3, 0, 3, 0, '会员管理', '', '2009-03-19 08:10:36');
INSERT INTO `menu` VALUES (4, 0, 4, 0, '留言管理', '', '2009-03-19 08:10:43');
INSERT INTO `menu` VALUES (5, 0, 5, 0, '类别管理', '', '2009-03-19 08:10:49');
INSERT INTO `menu` VALUES (6, 0, 6, 0, '内容管理', '', '2009-03-19 08:10:55');
INSERT INTO `menu` VALUES (7, 0, 7, 0, '用户管理', '', '2009-03-19 08:11:01');
INSERT INTO `menu` VALUES (8, 1, 8, 0, '添加作品', 'work.php?act=add', '2009-03-19 08:23:59');
INSERT INTO `menu` VALUES (9, 1, 9, 0, '作品列表', 'work.php?act=listAll', '2009-03-19 08:24:29');
INSERT INTO `menu` VALUES (10, 2, 10, 0, '添加作家', 'artist.php?act=add', '2009-03-19 08:26:10');
INSERT INTO `menu` VALUES (11, 2, 11, 0, '作家列表', 'artist.php?act=listAll', '2009-03-19 08:26:26');
INSERT INTO `menu` VALUES (12, 3, 12, 0, '会员列表', 'member.php?act=listAll', '2009-03-19 08:26:50');
INSERT INTO `menu` VALUES (13, 4, 13, 0, '留言列表', 'gbook.php', '2009-03-19 08:27:11');
INSERT INTO `menu` VALUES (14, 5, 14, 0, '增加作品类别', 'category.php?act=add', '2009-03-19 08:27:51');
INSERT INTO `menu` VALUES (15, 5, 15, 0, '作品类别列表', 'category.php?act=listAll', '2009-03-19 08:28:04');
INSERT INTO `menu` VALUES (16, 6, 16, 0, '关于睿艺', 'content.php?act=edit&id=1', '2009-03-21 06:04:22');
INSERT INTO `menu` VALUES (17, 6, 17, 0, '投资收藏咨询', 'content.php?act=edit&id=2', '2009-03-21 06:04:53');
INSERT INTO `menu` VALUES (18, 7, 18, 0, '添加用户', 'manager.php?act=add', '2009-03-19 08:29:03');
INSERT INTO `menu` VALUES (19, 7, 19, 0, '用户列表', 'manager.php?act=listAll', '2009-03-19 08:29:15');
INSERT INTO `menu` VALUES (21, 0, 21, 0, '价格管理', '', '2009-03-24 10:45:48');
INSERT INTO `menu` VALUES (22, 21, 22, 0, '添加价格', 'price.php?act=add', '2009-03-24 14:50:19');
INSERT INTO `menu` VALUES (24, 21, 24, 0, '价格列表', 'price.php?act=listAll', '2009-03-24 14:51:30');

-- --------------------------------------------------------

-- 
-- 表的结构 `price`
-- 

CREATE TABLE `price` (
  `id` int(11) NOT NULL auto_increment,
  `price_name` varchar(100) character set utf8 default NULL,
  `price_ename` varchar(100) character set utf8 default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `price`
-- 

INSERT INTO `price` VALUES (1, '5万以下', 'less than 50,000');
INSERT INTO `price` VALUES (2, '5万-20万', '50,000 ~ 200,000');
INSERT INTO `price` VALUES (3, '20万-50万', '200,000 ~ 500,000');
INSERT INTO `price` VALUES (4, '50万-100万', '500,000 ~ 1,000,000');
INSERT INTO `price` VALUES (5, '100万以上', 'more than 1,000,000');

-- --------------------------------------------------------

-- 
-- 表的结构 `work`
-- 

CREATE TABLE `work` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL COMMENT '作品名称',
  `cID` smallint(4) NOT NULL,
  `price` int(6) default NULL,
  `age` int(4) default NULL,
  `comment` varchar(2000) default NULL COMMENT '作品点评',
  `description` text COMMENT '作品描述',
  `artistCode` varchar(10) default NULL,
  `status` enum('0','1','2','3') NOT NULL default '0',
  `picCode` varchar(20) default NULL,
  `flag` enum('0','1') NOT NULL default '0' COMMENT '中英文0＝中文 1＝英文',
  `addDate` datetime NOT NULL,
  `size` varchar(100) default NULL,
  `signal` varchar(100) default NULL,
  `literature` varchar(200) default NULL,
  `exhibition` varchar(200) default NULL,
  `exhibitionEName` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='作品信息表' AUTO_INCREMENT=14 ;

-- 
-- 导出表中的数据 `work`
-- 

INSERT INTO `work` VALUES (1, '王府井2008', 1, 1, 2008, '多么伟大而惊愕的二○○八！刘大鸿把二○○八年里，所有重要事件的人物与意象，圣火地震福娃宋庄熊猫七九八奥运开幕等，密密麻麻拼贴堆列在一个虚构的王府井百货商场里。他以戏剧化的荒谬场景设置了作品的语境，描绘了去年那纷乱的浮世图景。真是个眼花撩乱的大千世界、芸芸众生！错综复杂，让人观之不尽。', '多么伟大而惊愕的二○○八！刘大鸿把二○○八年里，所有重要事件的人物与意象，圣火地震福娃宋庄熊猫七九八奥运开幕等，密密麻麻拼贴堆列在一个虚构的王府井百货商场里。他以戏剧化的荒谬场景设置了作品的语境，描绘了去年那纷乱的浮世图景。真是个眼花撩乱的大千世界、芸芸众生！错综复杂，让人观之不尽。<br /><br />人物形象夸张地典型化处理，有着纯粹的形式感。但刘大鸿画面中的关键形象又同时有内容和形式的最大效果。这种效果具有复杂的象征意义。通过强行拼贴，视觉的符号图像从现实层面进到非现实的层面；又从非现实的层面，直指现实。现实事件透过画面处理竟然产生历史的纵深感，艺术家以此来表达他对当下社会的深刻关注，批判性隐藏在这些图像底下。<br /><br />作品话语的基调荒诞，而荒诞的方式主要源于对嘲讽、夸张手法的迷恋。刘大鸿综合了古典、学院和民间的综合表现手法，给予写实绘画视觉的现代性，发展出魔幻现实主义式的艺术语言，独步当代。他以这种另类手法重现新闻历史片段，幽了整个中国一默。让人忽然感到原来我们经历过的，竟是如此可笑；现实原来就是魔幻的，而存在根本是一种荒诞。我们的整体经验如此重现，作品折射出对现实生存秩序和价值观念的怀疑。', '1', '2', '1', '0', '2009-03-23 05:24:46', '200×200cm (78.7×78.7 in.)', NULL, NULL, '预言  /北京亦安画廊  / 2008', 'Cassandra, Aura Gallery, Beijing, 2008');
INSERT INTO `work` VALUES (2, '眺望新世纪', 1, 2, 1997, '郑艺的此幅作品将农民形象完全提炼自现实生活中，与我们在乡间时常遇到的神色木讷、衣着简陋、缺乏教育的农民别无二致。在画幅中，画家刻意将其处理得顶天立地，在表达现实的严酷，也在寄予新世纪的希望。', '在中国现实主义风格的绘画中，郑艺的绘画是独树一帜的，他始终关怀农民的生存状态，并用一种诗意的表现方式传达出来。这幅《眺望新世纪》，创作于新千年的开端。寄托了画家与画中人对新世纪的无限希望。农民题材一直是许多艺术形式都成功表现过的。比如电影《喜盈门》，歌曲《在希望的田野上》等，往往可以唤起一代人对农村生活的回忆。绘画中，早有罗中立的《父亲》作为里程碑式的创作，长期以来，反映农民的绘画均带有浓厚的文学性，或是田园牧歌式的抒情色彩。<br /><br />而郑艺的此幅作品将农民形象完全提炼自现实生活中，与我们在乡间时常遇到的神色木讷、衣着简陋、缺乏教育的农民别无二致。在画幅中，画家刻意将其处理得顶天立地，在表达现实的严酷，也在寄予新世纪的希望。', '2', '1', '2', '0', '2009-03-23 05:26:12', '180×130cm (70.9×51.2 in.)', '郑艺  1997', '《郑艺油画作品》／天津人民美术出版  /2008', '走向新世纪——中国青年油画展  /中国美术馆／北京  1997年／并获优秀作品奖', 'Toward New Century: Chinese Youth Oil Painting  Exhibition, National Art Museum of China, 1997.  Received Excellence Award');
INSERT INTO `work` VALUES (3, '女人', 2, 3, 1989, '这作品画于一九八九年，这一时期是张晓刚艺术生涯中第一个创作高峰和风格形成期。张晓刚把此时期称为“彼岸时期”。此时他的生命自觉与情感体验特别强烈，有意识地寻找理性之外的原始生命诉求。作品徘徊在生与死、经验与超验、现实与梦境之间。', '这作品画于一九八九年，这一时期是张晓刚艺术生涯中第一个创作高峰和风格形成期。张晓刚把此时期称为“彼岸时期”。此时他的生命自觉与情感体验特别强烈，有意识地寻找理性之外的原始生命诉求。作品徘徊在生与死、经验与超验、现实与梦境之间。<br /><br />这幅静寂的人物形象，笼罩在幽暗而又绚丽的色彩氛围里，充满神秘、静观和隐喻性。张晓刚一直喜欢以源自中国书画传统的线的方式来造型，不太强调空间维度，这画法使画面倾向平面化。另外张晓刚也喜欢皴擦，用较为干涩的颜料在画布上慢慢擦出背景的质感。色彩因含混的渐变而使画面变得朦胧，凭添一种悠远的记忆性。这些画法，在艺术家之后的作品中也都能发现。<br /><br />其次，这人物有种漠然的阴郁气质，而充满一种阴性和忧郁。张晓刚画里的人都没有表情，这画里人物眼睛的单眼皮与大而无神，与后来“大家庭”系列很像；既是一种呆滞，又是一种超现实主义的表白。<br /><br />这张画虽然是早期画作，却有着始终贯穿张晓刚作品的重要元素，值得关注。', '4', '1', '4', '0', '2009-03-23 05:28:57', '48×33.5cm (18.9×13.2 in.)', '张晓刚  1989', NULL, '', '');
INSERT INTO `work` VALUES (4, '镜子里的女人', 3, 4, 2002, '一个女人，揽镜自照，一头短发，皮肤折射出如蜡般的苍白，有着浑浊无神而又哀怨的眼睛。她沉默、犹疑、迷茫，面部凝结着记忆与幻想，于细微处流露出焦躁不安的神态。向京自己说：“那些女孩不是悲，不是喜，也不是忧伤，是走神。我表现的只是一种真实的生活状态。 ”裸露的身体和同样裸露的灵魂，透映出内心情感的空虚，观者在不自觉中被引入了某个情绪停顿的瞬间。她的裸露和孤独茫然，引起观者对无力与空虚的深思，从而得到外 在和内心的双重体验。', '一个女人，揽镜自照，一头短发，皮肤折射出如蜡般的苍白，有着浑浊无神而又哀怨的眼睛。她沉默、犹疑、迷茫，面部凝结着记忆与幻想，于细微处流露出焦躁不安的神态。向京自己说：“那些女孩不是悲，不是喜，也不是忧伤，是走神。我表现的只是一种真实的生活状态。 ”裸露的身体和同样裸露的灵魂，透映出内心情感的空虚，观者在不自觉中被引入了某个情绪停顿的瞬间。她的裸露和孤独茫然，引起观者对无力与空虚的深思，从而得到外<br />在和内心的双重体验。<br /><br />这些以玻璃钢上色的写实雕塑，不用模特与助手，向京全通过自己的手做出来，有时还能看到手指在泥胎上擦抹的痕迹。艺术家对形象敏锐，作品呈现了当代女性复杂的心灵体验。她致力于外在情境与心理空间的建构，凝固了生命瞬间的情境，流露了一种温暖的疏离；但她并不刻意去叙事或表现什么意义，却深刻地反映了当下人的精神状态。', '5', '2', '5', '0', '2009-03-23 05:30:11', '102×45×35cm (40.2×17.2×13.8 in.)', NULL, NULL, '镜子里的女人  /中国欧洲艺术中心  /厦门/ 2003<br />你的身体：向京作品  2000－2005 /上海美术馆  / 2006', 'The Woman in the Mirror, Chinese European  Art Center, Xiamen, 2003<br />  Your Body: Xiang Jing 2000 –  2005,  Shanghai Art museum, Shanghai, 2006');
INSERT INTO `work` VALUES (5, '风景', 1, 3, 1982, '一片彷佛是天空或湖水的留白，底下有着疏密错落的树丛。横画的蓝色像天像云，一圈圈的灰蓝像湖水又像涟漪，抽象中蕴含具象的想象。他的风景，并不表现风景的优美，这些随意的笔触以及半截留白，彷佛只是一个信手拈来的风景片断。刘炜将印象主义的精髓转化为中国式的意境，从看似无序的笔触和色彩之间，有传统“ 笔墨”的意味,极富中国气息和韵味。他在东方文化和西方手法间游走自如；西方的技法存在着，彷佛又消失了。', '一片彷佛是天空或湖水的留白，底下有着疏密错落的树丛。横画的蓝色像天像云，一圈圈的灰蓝像湖水又像涟漪，抽象中蕴含具象的想象。他的风景，并不表现风景的优美，这些随意的笔触以及半截留白，彷佛只是一个信手拈来的风景片断。刘炜将印象主义的精髓转化为中国式的意境，从看似无序的笔触和色彩之间，有传统“笔墨”的意味,极富中国气息和韵味。他在东方文化和西方手法间游走自如；西方的技法存在着，彷佛又消失了。<br /><br />他与传统越来越近。因为他的内在性情就是传统文人强调的诗意风流，放任不羁。他的才情以写意之笔流露，这也是中国文人艺术最重要的美学特征。文人以字画寄托人生感受，通过画面的笔墨情趣，表现由物象引起的内心感受。所以品画，就是品评意象和笔墨的趣味和格调。同样的，刘炜那些灵动的笔触，不是一种具象性的表现语言，而是艺术家抽象的精神状态。我们可以从他用笔的过程中感悟到他的生存感觉和直觉情绪，读到他生命的气息；他的画饱含着对自我生存以及历史文化的敏锐感受。<br /><br />艺术对于刘炜，是“有所谓”，又“无所谓”的游戏；他以如此轻松平和的方式呈现，又不断变化探寻。', '6', '1', '6', '0', '2009-03-23 06:09:01', '120×70cm (47.2×27.6 in.)', '刘炜  2006', NULL, '', '');
INSERT INTO `work` VALUES (7, '国际风景', 1, 2, 2002, '严培明的“语言”就是他的观念。他的作品脱离了点、线、面三种基本元素的羁绊，笔触不是界定与定义，而是模糊与淹没。他在模糊中寻找某种复杂与微妙的关系。作品多是双色的，或黑白，或红白，但这双色不仅是对比辉映，也是相互作用的能量。这能量相互消解、融合、取舍，变得更加复杂，但又无比单纯，就像自然界中能量的守恒。', '严培明的“语言”就是他的观念。他的作品脱离了点、线、面三种基本元素的羁绊，笔触不是界定与定义，而是模糊与淹没。他在模糊中寻找某种复杂与微妙的关系。作品多是双色的，或黑白，或红白，但这双色不仅是对比辉映，也是相互作用的能量。这能量相互消解、融合、取舍，变得更加复杂，但又无比单纯，就像自然界中能量的守恒。<br /><br />在严培明的创作中，有一条线索，就是对人性的逐渐关注。题材从亲人、名人到开始为卑微者群体造像，包括移民、残疾人、妓女、小偷和流浪汉等。<br /><br />这件作品中，仍旧是他的笔触，但人物转换成风景，色彩相对于双色更加丰富。《国际风景》，体现了严培明在人物造像中渐渐发展的“普遍关怀”。从树木、天空、屋子模糊的影像，我们无法辨认“风景”的归属，也找不到任何辨认的线索。或者这张作品是世界上每个风景的造像。我们能够些许体察到艺术家心中的“大同”思想：人类属于同一个自然，同一个“大风景”——国际风景。', '8', '1', '8', '0', '2009-03-23 06:11:43', '300×180cm×2 (118.1×70.9 in.×2)', NULL, 'China''s Revision演变／帕莱斯特出版社', '演变／路德维希博物馆／科布伦次／德国／  2008 ', 'China''s Revision, Ludiwig Museum,  Koblenz, Germany,2008');
INSERT INTO `work` VALUES (8, '纹身月亮', 1, 3, 1997, '自从1980年代后期，孙良的作品中便融合了超现实主义和象征主义的特征，多年以来，他一直延续了这样的创作风格，直到2000年后，孙良开始在超现实主义的道路上越走越远，并发展出自己独特的画面趣味。色彩单纯，形象怪诞而没有涵义，我们能够看到的只是画家天马行空般的想象力。', '自从1980年代后期，孙良的作品中便融合了超现实主义和象征主义的特征，多年以来，他一直延续了这样的创作风格，直到2000年后，孙良开始在超现实主义的道路上越走越远，并发展出自己独特的画面趣味。色彩单纯，形象怪诞而没有涵义，我们能够看到的只是画家天马行空般的想象力。<br /><br />这幅《纹身月亮》便是此期间的代表画作。整幅画面像是画家在为月亮设计的一个纹身，色彩华丽，充满了诡异之美。', '9', '1', '9', '0', '2009-03-23 06:12:58', '100×80cm (39.4×31.5 in.)', 'Sun Liang 1997', NULL, '', '');
INSERT INTO `work` VALUES (10, '蒙德里安前的男孩', 1, 4, 1997, '刘野的画极少关涉现实社会，与时代也并无关联；他只是安然地沉浸在自己营造的幻境之中，与其它当代艺术家显然不同。而这种疏离独特，正是刘野的可贵之处。', '一个圆头圆脑的小男孩，有着一对可爱的小翅膀。光线从右边打来，旁边的布幔与光线，显示这可能是个舞台。而这个像天使的小孩仔细看着一幅静物画，上头的大背景，是蒙德里安的方块。刘野经常使用画中画，画中常见蒙德里安的方块——他以此向大师致敬，因为他喜欢蒙德里安的单纯与纯粹。我们也感觉，这认真看画的男孩，彷佛就是刘野自己，画里隐喻了一种认真与纯真。<br /><br />他自己说：“一个艺术家只要寻找到自我才算完成任务了，你作品中的形象很像你。这种‘像’不是指写实的自画像，而是指某种性格，那一定会感动别人 ”。他作品中的小人儿，与他真有种难以言说的神似。<br /><br />这幅画美丽、可爱、明亮，大师名作的色彩，与其它场景的色彩一致，整体感觉极其宁静和谐。作品虽然充满童趣，但却并不简单；欢悦的图像后有着一股淡淡的忧伤。用貌似欢乐的图像去表现忧伤，比用忧伤的图像去表现忧伤更深刻，更容易产生出触动观者的特殊魅力。<br /><br />刘野的画极少关涉现实社会，与时代也并无关联；他只是安然地沉浸在自己营造的幻境之中，与其它当代艺术家显然不同。而这种疏离独特，正是刘野的可贵之处。', '3', '1', '3', '0', '2009-03-23 05:27:30', '100×100cm (39.4×39.4 in.)', '刘野/1997-1998', NULL, '', '');
INSERT INTO `work` VALUES (13, '有山的地方', 4, 3, 1986, '这是徐冰在1986年完成的版画，是在《析世鉴 ·天书》之前最重要的早期作品。画面只有黑白两种色彩，这些各种粗细、长短的线条，是用文字组成的一幅写生。徐冰到山里写生，他在有树的地方写上林字，在有山的地方写上山字。在有草的地方写上艸字像画，也像日记。', '这是徐冰在1986年完成的版画，是在《析世鉴 ·天书》之前最重要的早期作品。画面只有黑白两种色彩，这些各种粗细、长短的线条，是用文字组成的一幅写生。徐冰到山里写生，他在有树的地方写上林字，在有山的地方写上山字。在有草的地方写上艸字像画，也像日记。<br /><br />全世界只有中国文字和中国人的图像性思维有关系，徐冰运用了中国文字最独特的图像化特质，使文字回到了自然与符号关系的原起点上。如此超越了语种的限制，找到文字原始的位置。任何不认识汉字的人，看到这个符号像山，就知道这是山字，也就知道这是有山的地方。<br /><br />当徐冰坐在山上画这个山，也是在写这个山，文字与图像在此合一。这既是对书写的体验，也是对中国文化系统的体验；他回到了人类观看自然那最原始的思维上。大部分人以为奇特、深沉、复杂才是“前卫”，艺术家却用这样简单的方法获致了深刻的内蕴。<br /><br />徐冰始终执着于版画创作，2007年他获得第36届全美版画家协会(Southern Graphics Council)颁发的“版画艺术终生成就奖”。这是世界版画界的最高荣誉。他授奖的理由是：“对于版画艺术专业领域的发展有出色的贡献……对版画与当代艺术两个领域间的对话和沟通产生巨大影响”。他用工匠式的原始方法完成了非凡的当代艺术构想，极具收藏价值。', '7', '0', '7', '0', '2009-03-23 06:10:31', '54×70cm (21.3×27.6 in.)', 'A/P有山的地方／徐冰', NULL, '', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COMMENT='收藏作品表' AUTO_INCREMENT=53 ;

-- 
-- 导出表中的数据 `workfavorite`
-- 

INSERT INTO `workfavorite` VALUES (43, 9, 4, '2009-03-23 03:13:55');
INSERT INTO `workfavorite` VALUES (45, 4, 1, '2009-03-23 03:38:55');
INSERT INTO `workfavorite` VALUES (41, 5, 4, '2009-03-23 03:13:47');
INSERT INTO `workfavorite` VALUES (47, 7, 3, '2009-03-23 05:59:09');
INSERT INTO `workfavorite` VALUES (14, 2, 1, '2009-03-22 14:38:27');
INSERT INTO `workfavorite` VALUES (15, 4, 3, '2009-03-22 14:38:29');
INSERT INTO `workfavorite` VALUES (42, 8, 4, '2009-03-23 03:13:52');
INSERT INTO `workfavorite` VALUES (46, 6, 1, '2009-03-23 03:38:58');
INSERT INTO `workfavorite` VALUES (37, 7, 4, '2009-03-23 03:13:09');
INSERT INTO `workfavorite` VALUES (36, 4, 4, '2009-03-23 03:13:05');
INSERT INTO `workfavorite` VALUES (44, 3, 1, '2009-03-23 03:38:53');
INSERT INTO `workfavorite` VALUES (39, 1, 4, '2009-03-23 03:13:40');
INSERT INTO `workfavorite` VALUES (40, 2, 4, '2009-03-23 03:13:42');
INSERT INTO `workfavorite` VALUES (38, 6, 4, '2009-03-23 03:13:10');
INSERT INTO `workfavorite` VALUES (48, 8, 3, '2009-03-23 05:59:14');
INSERT INTO `workfavorite` VALUES (52, 10, 3, '2009-03-23 06:01:53');
INSERT INTO `workfavorite` VALUES (50, 1, 3, '2009-03-23 05:59:24');
INSERT INTO `workfavorite` VALUES (51, 3, 3, '2009-03-23 05:59:46');
