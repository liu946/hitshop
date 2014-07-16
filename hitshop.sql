-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014 年 07 月 15 日 14:54
-- 服务器版本: 5.5.32
-- PHP 版本: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hitshop`
--
CREATE DATABASE IF NOT EXISTS `hitshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `hitshop`;

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_car`
--

CREATE TABLE IF NOT EXISTS `hitshop_car` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `good` int(11) NOT NULL,
  `num` int(10) unsigned NOT NULL,
  `dtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='购物车' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `hitshop_car`
--

INSERT INTO `hitshop_car` (`id`, `uid`, `good`, `num`, `dtime`) VALUES
(1, 1, 3, 1, 1398593634),
(3, 2, 8, 1, 1401287679),
(6, 1, 5, 0, 1404389080),
(7, 10, 44, 10, 1405393401);

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_cat`
--

CREATE TABLE IF NOT EXISTS `hitshop_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，分类父id',
  `pid` int(11) NOT NULL COMMENT '存父id',
  `path` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '储存总路径',
  `name` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '类名',
  `info` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '描述',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用于无限分类' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `hitshop_cat`
--

INSERT INTO `hitshop_cat` (`id`, `pid`, `path`, `name`, `info`) VALUES
(1, 0, '0', 'ç”µå­äº§å“', 'ç”µå­ç›¸å…³'),
(2, 0, '0', 'æ—¥ç”¨å“', 'æ—¥ç”¨å“'),
(3, 2, '0,2', 'é¤é¥®', 'test3'),
(4, 0, '0', 'æˆ·å¤–è¿åŠ¨', 'test4'),
(5, 1, '0,1', 'æ‰‹æœº', 'æ‰‹æœº'),
(6, 1, '0,1', 'ç”µè„‘', 'ç”µè„‘'),
(7, 2, '0,2', 'å«ç”Ÿç”¨å“', ''),
(8, 7, '0,2,7', 'æ´—æ¼±ç”¨å“', ''),
(9, 5, '0,1,5', 'å°ç±³', 'å°ç±³æ‰‹æœº'),
(10, 6, '0,1,6', 'å®åŸº', ''),
(11, 6, '0,1,6', 'æˆ´å°”', '');

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_cat_img`
--

CREATE TABLE IF NOT EXISTS `hitshop_cat_img` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `bimg` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '存放类的大图名',
  `simg` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '存放类的小图名',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='存放类的图片' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `hitshop_cat_img`
--

INSERT INTO `hitshop_cat_img` (`id`, `cid`, `bimg`, `simg`) VALUES
(1, 1, '1_bimg.gif', '1_simg.gif'),
(2, 2, '2_bimg.gif', '2_simg.gif'),
(3, 3, '3_bimg.gif', '3_simg.gif'),
(4, 4, '4_bimg.gif', '4_simg.gif');

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_evaluate`
--

CREATE TABLE IF NOT EXISTS `hitshop_evaluate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `goodid` int(11) NOT NULL,
  `ownerid` int(11) NOT NULL,
  `evaluate` varchar(500) COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`,`goodid`,`ownerid`,`time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `hitshop_evaluate`
--

INSERT INTO `hitshop_evaluate` (`id`, `userid`, `goodid`, `ownerid`, `evaluate`, `time`) VALUES
(8, 1, 5, 1, 'å¥½', 1401798762);

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_flink`
--

CREATE TABLE IF NOT EXISTS `hitshop_flink` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `webname` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(60) NOT NULL DEFAULT '',
  `logo` varchar(60) NOT NULL DEFAULT '',
  `rname` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `dtime` int(10) unsigned NOT NULL DEFAULT '0',
  `msg` varchar(200) NOT NULL DEFAULT '',
  `list` smallint(1) unsigned NOT NULL DEFAULT '0',
  `audit` smallint(1) unsigned NOT NULL DEFAULT '0',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `flink_list` (`list`),
  KEY `flink_audit` (`audit`),
  KEY `flink_ord` (`ord`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `hitshop_flink`
--

INSERT INTO `hitshop_flink` (`id`, `webname`, `url`, `logo`, `rname`, `email`, `dtime`, `msg`, `list`, `audit`, `ord`) VALUES
(1, 'baidu', 'http://www.baidu.com/', '', '123', '15028181529@163.com', 1393370166, '', 0, 1, 0),
(4, 'google', 'http://translate.google.cn/', 'www_google_com_hk.png', '123', '123@456.com', 1393856758, '12', 1, 1, 0),
(5, 'æ·˜å®', 'www.taobao.com', '', 'abc', '123@456.com', 1401250571, '', 0, 1, 0),
(6, '', '', '', '', '', 1404389198, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_goods`
--

CREATE TABLE IF NOT EXISTS `hitshop_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'mainkey',
  `cid` int(10) unsigned NOT NULL COMMENT 'class',
  `name` varchar(80) COLLATE utf8_bin NOT NULL COMMENT '商品名',
  `ownerid` int(10) unsigned NOT NULL COMMENT '主人id',
  `fbtime` int(10) unsigned NOT NULL COMMENT '发布时间',
  `simg` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '小图',
  `bimg` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '大图',
  `price` float NOT NULL COMMENT '价钱，折后价',
  `proprice` float NOT NULL COMMENT '原价',
  `danwei` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '单位',
  `num` int(11) NOT NULL COMMENT '库存',
  `jieshao` text COLLATE utf8_bin NOT NULL COMMENT '介绍',
  `xiangxi` text COLLATE utf8_bin NOT NULL,
  `state` int(11) NOT NULL COMMENT '状态',
  `starttime` int(10) unsigned NOT NULL COMMENT '开始时间',
  `endtime` int(10) unsigned NOT NULL COMMENT '结束时间',
  `chengjiaonum` int(11) NOT NULL DEFAULT '0' COMMENT '成交量',
  `checknum` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `cid_2` (`cid`),
  KEY `ownerid` (`ownerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品表' AUTO_INCREMENT=60 ;

--
-- 转存表中的数据 `hitshop_goods`
--

INSERT INTO `hitshop_goods` (`id`, `cid`, `name`, `ownerid`, `fbtime`, `simg`, `bimg`, `price`, `proprice`, `danwei`, `num`, `jieshao`, `xiangxi`, `state`, `starttime`, `endtime`, `chengjiaonum`, `checknum`) VALUES
(3, 1, 'name2', 1, 1111111123, '2simg.jpg', '2_bimg.gif', 111.13, 222.22, 'liang', 4, 'jieshao2', 'xiangxi2', 1, 11112, 11113, 0, 20),
(4, 2, 'name3', 2, 11112222, '3_simg.gif', '3_bimg.jpg', 12.24, 14.42, 'm', 50, 'sdf', 'safs', 1, 12313424, 12312321, 1, 13),
(5, 1, '444', 2, 1111111156, '3simg.jpg', '4bimg.jpg', 111.14, 120, 'miao', 1, 'demo', 'demo', 1, 123214124, 1232141, 0, 2),
(6, 4, '555', 3, 11112255, '5_simg.gif', '5_bimg.jpg', 12.25, 14.42, 'm', 2, 'dnfi', 'sdfnio', 1, 12313424, 12312321, 1, 11),
(7, 5, 'ä¸œè¥¿', 1, 0, 'simg.gif', 'bimg.gjf', 10.2, 11.2, 'ä¸ª', 11, 'å¥½', '&lt;p&gt;\r\n	å¾ˆå¥½&lt;img alt=&quot;wink&quot; data-cke-saved-src=&quot;http://localhost/HITshop/public/js/ckeditor/plugins/smiley/images/3.gif&quot; height=&quot;24&quot; src=&quot;http://localhost/HITshop/public/js/ckeditor/plugins/smiley/images/3.gif&quot; title=&quot;wink&quot; width=&quot;24&quot; /&gt;&lt;/p&gt;\r\n', 1, 1395285780, 1394853780, 0, 10),
(8, 1, '&lt;&gt;&gt;&lt;&gt;', 1, 1394338201, '&lt;&gt;', '&lt;&gt;', 123, 11.2, 'b', 4, '', '', 1, 1394338172, 0, 0, 25),
(23, 11, '11', 2, 111111111, '1', '1', 11, 11, '2', 2, '11', '11', 1, 11, 111, 0, 0),
(42, 3, '123', 1, 1395832491, '20140326191451_487.jpg', '', 0, 0, '', 123, '', '', 1, 1395832480, 0, 0, 5),
(43, 4, '123', 1, 1395832896, '20140326192136_613.jpg', '20140326192137_789.jpg', 0, 0, '', 100, '', '', 1, 1395832868, 0, 0, 3),
(44, 2, '2', 1, 1395833067, '20140326192427_462.jpg', '20140326192427_449.jpg', 10, 20, '', 30, '', '', 1, 1395833051, 0, 0, 12),
(45, 6, '123', 1, 1398565015, '20140427101655_822.jpg', '20140427101655_164.jpg', 0, 0, '', 50, '', '', 1, 1398564995, 0, 0, 1),
(46, 7, '123', 1, 1398565052, '20140427101732_545.jpg', '20140427101732_944.jpg', 123, 123, '123', 123, 'å•Šå•Š', '&lt;p&gt;\r\n	12&lt;/p&gt;\r\n', 1, 1398565030, 0, 0, 4),
(47, 4, 'æ°´æ¯', 2, 1398610783, '20140427225944_892.jpg', '20140427225944_584.jpg', 12, 13, 'æ–¤', 12, 'å¥½', '&lt;p&gt;\r\n	éžå¸¸å¥½&lt;img alt=&quot;&quot; src=&quot;/HITshop/upfile/tmp/20140427225938_538.jpg&quot; style=&quot;width: 128px; height: 96px;&quot; /&gt;&lt;/p&gt;\r\n', 1, 1398610661, 1408805820, 0, 6),
(48, 0, 'test', 5, 1399107971, '20140503170611_938.jpg', '20140503170611_586.jpg', 123, 234, 'fuck', 1234, 'buzhidao', '&lt;p&gt;\r\n	test&lt;/p&gt;\r\n', 1, 1399107900, 0, 0, 10),
(49, 0, 'æ ‘å¶', 1, 1399108065, '20140503170745_977.jpg', '20140503170745_923.jpg', 123, 123, 'ä¸ª', 12, '123', '&lt;p&gt;\r\n	123213&lt;img alt=&quot;&quot; src=&quot;/HITshop/upfile/tmp/20140503170732_575.jpg&quot; style=&quot;width: 300px; height: 225px;&quot; /&gt;&lt;/p&gt;\r\n', 1, 1399107906, 1400231100, 0, 3),
(50, 0, '123', 1, 1399108474, '20140503171434_560.jpg', '20140503171434_467.jpg', 123, 432, 'ä¸ª', 123, '123', '&lt;script language=&quot;javascript&quot;&gt;alert(&quot;1&quot;);&lt;/script&gt;', 1, 1399108351, 1400836320, 0, 5),
(51, 0, '&lt;svg/', 5, 1399110260, '20140503174420_626.jpg', '20140503174420_730.jpg', 11111.1, 22222.2, 'N/m', 3, '&lt;svg onload=alert(document.cookie)&gt;&lt;/svg&gt;', '&quot;&gt;&lt;script type=&quot;text/javascript&quot;&gt;alert(document.cookie);&lt;/script&gt;\r\n\r\n\r\n&quot;&gt;&lt;a href=&quot;javascript:window.open(&quot;http://www.baidu.com/&quot;);&quot;', 1, 1399109732, 0, 0, 2),
(52, 0, 'aaaa', 1, 1401007568, '20140525164609_567.jpg', '20140525164608_537.jpg', 123, 123, '123', 123, '123', '&lt;p&gt;\r\n	good&lt;img alt=&quot;&quot; src=&quot;/HITshop/upfile/tmp/20140525164557_246.jpg&quot; style=&quot;width: 128px; height: 96px;&quot; /&gt;&lt;/p&gt;\r\n', 1, 1401007503, 1401439500, 0, 2),
(53, 0, '&lt;&gt;&gt;&lt;&gt;', 1, 1401285791, '20140528220312_606.jpg', '20140528220311_491.jpg', 123, 11.2, 'b', 4, '12313221', '&lt;p&gt;\r\n	12312312&lt;/p&gt;\r\n', 1, 1401285774, 0, 0, 1),
(54, 0, '&lt;&gt;&gt;&lt;&gt;', 1, 1401287270, '20140528220547_920.jpg', '20140528220547_755.jpg', 123, 11.2, 'b', 4, '12313221', '&lt;p&gt;\r\n	1é¥¿1213çˆ±æƒ…çŽ©çš„åœ°æ–¹&lt;/p&gt;\r\n', 1, 1401287265, 0, 0, 4),
(55, 4, 'æ‰‹æœº', 1, 1404381314, '20140703175514_647.jpg', '20140703175514_296.jpg', 123, 125, 'ä¸ª', 14, 'å¥½', '&lt;p&gt;\r\n	12312312&lt;img alt=&quot;&quot; src=&quot;/HITshop/upfile/tmp/20140703175507_600.jpg&quot; style=&quot;width: 300px; height: 188px;&quot; /&gt;&lt;/p&gt;\r\n', 1, 1404381232, 1405677180, 0, 1),
(56, 3, 'xiaomi', 1, 1404822366, '20140708202607_956.jpg', '20140708202606_250.jpg', 12, 32, 'ge', 12, '12', '&lt;p&gt;\r\n	12321&lt;/p&gt;\r\n', 1, 1404821738, 1405685700, 0, 2),
(57, 2, '123', 1, 1404823332, '20140708204212_171.jpg', '20140708204212_136.jpg', 123, 123, '123', 123, '123', '&lt;p&gt;\r\n	123&lt;/p&gt;\r\n', 1, 1404823303, 1404996060, 0, 0),
(58, 1, '3123', 1, 1404962227, '20140710111708_172.jpg', '20140710111707_206.jpg', 123, 123, '123', 123, '123', '&lt;p&gt;\r\n	213&lt;/p&gt;\r\n', 1, 1404962205, 1406344560, 0, 2),
(59, 0, '123', 8, 1405391465, '20140715103105_979.jpg', '20140715103105_536.jpg', 123, 124, 'ä¸ª', 12, 'å¥½', '&lt;p&gt;\r\n	123&lt;img alt=&quot;cheeky&quot; data-cke-saved-src=&quot;http://localhost/HITshop/public/js/ckeditor/plugins/smiley/images/6.gif&quot; height=&quot;24&quot; src=&quot;http://localhost/HITshop/public/js/ckeditor/plugins/smiley/images/6.gif&quot; title=&quot;cheeky&quot; width=&quot;24&quot; /&gt;&lt;/p&gt;\r\n', 1, 1405391391, 1405650540, 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_group`
--

CREATE TABLE IF NOT EXISTS `hitshop_group` (
  `gid` int(10) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) COLLATE utf8_bin DEFAULT '""',
  `puser` tinyint(3) DEFAULT '0',
  `pgood` tinyint(3) DEFAULT '0',
  `pconfig` tinyint(3) DEFAULT '0',
  `pcolunm` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `hitshop_group`
--

INSERT INTO `hitshop_group` (`gid`, `description`, `puser`, `pgood`, `pconfig`, `pcolunm`) VALUES
(1, 'è¶…çº§ç®¡ç†å‘˜', 1, 1, 1, 1),
(2, 'å•†å“ç®¡ç†å‘˜', 1, 1, 0, 0),
(3, 'å…¬å‘Šé“¾æŽ¥ç®¡ç†å‘˜', 0, 0, 0, 1),
(5, 'ç³»ç»Ÿç®¡ç†å‘˜', 0, 0, 1, 0),
(6, 'æ™®é€šä¼šå‘˜', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_indent`
--

CREATE TABLE IF NOT EXISTS `hitshop_indent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ownerid` int(10) unsigned NOT NULL,
  `ownername` varchar(30) COLLATE utf8_bin NOT NULL,
  `userid` int(10) unsigned NOT NULL,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `userqq` int(11) NOT NULL,
  `userphone` int(15) NOT NULL,
  `userpostcode` int(7) NOT NULL,
  `useraddress` varchar(100) COLLATE utf8_bin NOT NULL,
  `goodid` int(10) unsigned NOT NULL,
  `goodsimg` varchar(40) COLLATE utf8_bin NOT NULL,
  `goodprice` float NOT NULL,
  `num` int(11) NOT NULL,
  `sumprice` float NOT NULL,
  `lastuptime` int(11) NOT NULL,
  `state` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ownerid` (`ownerid`,`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='存放订单信息' AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `hitshop_indent`
--

INSERT INTO `hitshop_indent` (`id`, `ownerid`, `ownername`, `userid`, `username`, `userqq`, `userphone`, `userpostcode`, `useraddress`, `goodid`, `goodsimg`, `goodprice`, `num`, `sumprice`, `lastuptime`, `state`) VALUES
(2, 1, 'admin', 1, 'admin', 570926881, 2147483647, 150011, 'hit4', 5, '3simg.jpg', 111.14, 1, 111.14, 1401287349, 1),
(4, 2, '123456', 1, 'admin', 570926881, 2147483647, 150011, 'hit4', 5, '3simg.jpg', 111.14, 1, 111.14, 1404388892, 1),
(8, 1, 'admin', 11, 'test1', 11111111, 1373117437, 150001, 'HIT B05', 7, 'simg.gif', 10.2, 1, 10.2, 1405394398, 3),
(20, 1, 'admin', 2, '123456', 570926881, 2147483647, 150011, 'hit4', 48, '20140327224235_877.jpg', 12, 1, 12, 1395931746, 3),
(23, 1, 'admin', 1, 'admin', 570926881, 2147483647, 150011, 'hit4', 5, '3simg.jpg', 111.14, 2, 222.28, 1396108559, 10);

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_message`
--

CREATE TABLE IF NOT EXISTS `hitshop_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uname` varchar(30) COLLATE utf8_bin NOT NULL,
  `tarid` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `msg` text COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`,`tarid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `hitshop_message`
--

INSERT INTO `hitshop_message` (`id`, `uid`, `uname`, `tarid`, `title`, `msg`, `time`, `state`) VALUES
(2, 1, 'admin', 2, '123', '&lt;p&gt;\r\n	123&lt;u&gt;123&lt;/u&gt;&lt;em&gt;123&lt;/em&gt;&lt;strong&gt;123&lt;/strong&gt;&lt;img alt=&quot;sad&quot; data-cke-saved-src=&quot;http://localhost/HITshop/public/js/ckeditor/plugins/smiley/images/2.gif&quot; height=&quot;24&quot; src=&quot;http://localhost/HITshop/public/js/ckeditor/plugins/smiley/images/2.gif&quot; title=&quot;sad&quot; width=&quot;24&quot; /&gt;&lt;/p&gt;\r\n', 1396072027, 1),
(3, 1, 'admin', 1, 'ä¸èƒ½ä¹°è‡ªå·±çš„ä¸œè¥¿', '&lt;p&gt;\r\n	ä¸èƒ½ä¹°è‡ªå·±çš„ä¸œè¥¿&lt;/p&gt;\r\n', 1401287640, 0),
(4, 10, '123456657', 1, 'æ„Ÿè°¢å­¦é•¿å‘ä¾¿å®œè´§', '&lt;p&gt;\r\n	è°¢è°¢ï¼&lt;img alt=&quot;&quot; data-cke-saved-src=&quot;http://localhost/HITshop/public/js/ckeditor/plugins/smiley/images/48.gif&quot; height=&quot;24&quot; src=&quot;http://localhost/HITshop/public/js/ckeditor/plugins/smiley/images/48.gif&quot; title=&quot;&quot; width=&quot;24&quot; /&gt;&lt;/p&gt;\r\n', 1405393699, 1),
(5, 11, 'test1', 1, 'æ„Ÿè°¢å­¦é•¿å‘ä¾¿å®œè´§', '', 1405394385, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_notice`
--

CREATE TABLE IF NOT EXISTS `hitshop_notice` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL DEFAULT '',
  `color` char(6) NOT NULL DEFAULT '000000',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `display` smallint(1) unsigned NOT NULL DEFAULT '1',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `notice_starttime` (`starttime`),
  KEY `notice_endtime` (`endtime`),
  KEY `notice_display` (`display`),
  KEY `notice_ord` (`ord`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hitshop_notice`
--

INSERT INTO `hitshop_notice` (`id`, `title`, `color`, `starttime`, `endtime`, `content`, `display`, `ord`) VALUES
(1, '12314', '000000', 1394333957, 1396061940, '<p>\r\n	213141<strong>124141<em>12421</em></strong></p>\r\n', 0, 2),
(2, 'HIT-SHOP HELLO WORLD', 'DB6225', 1401244141, 1402108140, '&lt;p&gt;\r\n	123123&lt;/p&gt;\r\n', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_user`
--

CREATE TABLE IF NOT EXISTS `hitshop_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gid` smallint(4) unsigned NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `userpwd` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `regtime` int(10) unsigned NOT NULL DEFAULT '0',
  `sex` smallint(3) NOT NULL DEFAULT '0',
  `info` varchar(120) NOT NULL DEFAULT '',
  `upic` char(24) NOT NULL DEFAULT '',
  `disable` smallint(2) unsigned NOT NULL DEFAULT '0',
  `msg` int(3) unsigned NOT NULL,
  `indentmsg` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_gid` (`gid`),
  KEY `user_username` (`username`),
  KEY `user_userpwd` (`userpwd`),
  KEY `user_disable` (`disable`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `hitshop_user`
--

INSERT INTO `hitshop_user` (`id`, `gid`, `username`, `userpwd`, `email`, `regtime`, `sex`, `info`, `upic`, `disable`, `msg`, `indentmsg`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '123231@bbb.com', 1393328196, 0, 'å“¦å•¦å•¦å•¦', 'chinaz.png', 0, 0, 0),
(2, 2, '123456', 'e10adc3949ba59abbe56e057f20f883e', '123@456.com', 0, 1, '', 'chinaz.png', 0, 0, 0),
(3, 2, 'abc', '202cb962ac59075b964b07152d234b70', '123@456.com', 1393853847, 1, '', '', 0, 0, 0),
(4, 2, 'liu', '202cb962ac59075b964b07152d234b70', '123@456.com', 1393921199, 1, '', '', 0, 0, 0),
(5, 2, 'ylxdzsw', 'c97569d4f8b999212e4af2cdf00d0830', 'ylxdzsw@126.com', 1399107581, 2, '', '', 0, 0, 0),
(7, 6, 'or11', 'e10adc3949ba59abbe56e057f20f883e', 'o@o.com', 1399473451, 0, '', '', 0, 0, 0),
(8, 2, 'example', 'e10adc3949ba59abbe56e057f20f883e', '123@456.com', 1405391161, 1, '', '', 0, 0, 0),
(9, 10, '3456', 'e10adc3949ba59abbe56e057f20f883e', '123@456.com', 1405393113, 1, '', '', 0, 0, 0),
(10, 10, '123456657', 'e10adc3949ba59abbe56e057f20f883e', '123e@bbb.com', 1405393257, 0, '', '', 0, 0, 0),
(11, 10, 'test1', 'e10adc3949ba59abbe56e057f20f883e', '123231@bbb.com', 1405394152, 0, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hitshop_user_info`
--

CREATE TABLE IF NOT EXISTS `hitshop_user_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `realname` varchar(16) COLLATE utf8_bin NOT NULL,
  `shenfennum` bigint(18) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `QQ` bigint(11) NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `postcode` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='保存用户详细信息' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `hitshop_user_info`
--

INSERT INTO `hitshop_user_info` (`id`, `uid`, `realname`, `shenfennum`, `phone`, `QQ`, `address`, `postcode`) VALUES
(1, 1, 'liu', 130105199406100000, 15776866963, 570926881, 'hit4', 150011),
(2, 2, 'wang', 2147483647, 2147483647, 2147483647, 'hit4', 150001),
(3, 8, '', 0, 0, 0, '', 0),
(4, 9, '', 0, 0, 0, '', 0),
(5, 10, '', 0, 0, 0, '', 0),
(6, 11, '', 130105199406100000, 1373117437, 11111111, 'HIT B05', 150001);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
