-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- 主機: localhost:3306
-- 產生時間： 2015 年 08 月 13 日 16:27
-- 伺服器版本: 5.5.41-MariaDB
-- PHP 版本： 5.5.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `fanswoo_com_187french`
--

-- --------------------------------------------------------

--
-- 資料表結構 `fs_advertising`
--

CREATE TABLE IF NOT EXISTS `fs_advertising` (
  `advertisingid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `title` char(100) NOT NULL,
  `href` char(100) NOT NULL,
  `content` text NOT NULL,
  `picids` char(100) NOT NULL,
  `classids` char(100) NOT NULL,
  `prioritynum` mediumint(8) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_advertising`
--

INSERT INTO `fs_advertising` (`advertisingid`, `uid`, `title`, `href`, `content`, `picids`, `classids`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, 528503, 'test12222222', 'abc', 'abc', '528524', '1', 1, '2015-03-14 16:51:05', 1),
(528502, 528503, 'test2', 'ccc', 'ccc', '528670', '1', 999, '2015-03-14 19:18:26', 1),
(528503, 528503, 'test3', 'test55555555', 'test', '528669', '1', 3, '2015-03-14 16:50:48', 1),
(528504, 528501, 'test', 'tet', 'tete', '', '', 0, '2015-03-15 18:27:52', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_advertising_class`
--

CREATE TABLE IF NOT EXISTS `fs_advertising_class` (
  `classid` mediumint(8) NOT NULL,
  `classname` char(40) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_advertising_class`
--

INSERT INTO `fs_advertising_class` (`classid`, `classname`, `status`) VALUES
(1, '首頁廣告', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_class`
--

CREATE TABLE IF NOT EXISTS `fs_class` (
  `classid` mediumint(8) NOT NULL,
  `classname` char(40) NOT NULL,
  `slug` char(40) NOT NULL DEFAULT '',
  `uid` mediumint(8) NOT NULL,
  `amountnum` mediumint(4) NOT NULL DEFAULT '0',
  `modelname` char(32) NOT NULL DEFAULT '',
  `classids` char(100) NOT NULL,
  `prioritynum` mediumint(8) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_class`
--

INSERT INTO `fs_class` (`classid`, `classname`, `slug`, `uid`, `amountnum`, `modelname`, `classids`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, '網頁設計', '528501', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 1),
(528502, 'test2', 'test2', 528501, 0, 'showroom_roomclass', '', 0, '0000-00-00 00:00:00', 1),
(528508, 'test', '528508', 528501, 0, 'showroom_styleclass', '', 0, '0000-00-00 00:00:00', 1),
(528509, '趨勢', '0', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 0),
(528510, 'test4', 'test4', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 0),
(528511, 'ttt', '0', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 0),
(528512, 'ttttt', '0', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 0),
(528513, 'ggg', 'ggg', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 0),
(528514, 'ggg', 'ggg', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 0),
(528515, '科技趨勢', '528515', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 1),
(528516, '烘焙大小事', 'knowledge', 528501, 0, 'note', '', 0, '2015-04-28 14:07:11', 1),
(528517, 'test1', 'test1', 528501, 0, 'brand', '', 0, '0000-00-00 00:00:00', 1),
(528518, '最新消息', 'news', 528501, 0, 'note', '', 0, '2015-04-28 14:06:36', 1),
(528519, 'ggg', '528519', 528501, 0, 'note', '', 0, '0000-00-00 00:00:00', -1),
(528520, 'hhh', 'hhh', 528501, 0, 'note', '', 0, '0000-00-00 00:00:00', -1),
(528521, 'ggg', 'ggg', 528501, 0, 'note', '', 0, '0000-00-00 00:00:00', -1),
(528522, 'bbb', 'bbb', 528501, 0, 'showroom_styleclass', '', 0, '0000-00-00 00:00:00', 1),
(528523, 'sss', '0', 528501, 0, 'showroom_roomclass', '', 0, '0000-00-00 00:00:00', 1),
(528524, 'hhhhhhhhh', '528549copy', 528501, 0, 'showroom_roomclass', '', 0, '0000-00-00 00:00:00', 1),
(528525, 'tt', '528549', 528501, 0, 'showroom_roomclass', '', 0, '0000-00-00 00:00:00', 1),
(528526, 'g', 'g', 528501, 0, 'note', '', 0, '0000-00-00 00:00:00', -1),
(528527, 'ggxrrr', 'ggxrrr', 528501, 0, 'note', '', 0, '2015-04-20 13:54:42', -1),
(528528, 'hhhb', 'hhhb', 528501, 0, 'brand', '', 0, '0000-00-00 00:00:00', 1),
(528529, 'rrr', 'rrr', 528501, 0, 'brand', '', 0, '0000-00-00 00:00:00', 1),
(528530, 'test', '528501', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 1),
(528531, '22', '22', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 1),
(528532, '33', '33', 528501, 0, '', '', 0, '0000-00-00 00:00:00', 1),
(528533, '5ghgjhj', '52850123312312', 528501, 0, 'pic', '', 0, '0000-00-00 00:00:00', -1),
(528535, 'test', '0', 528503, 0, 'brand', '', 0, '0000-00-00 00:00:00', 0),
(528536, 'tt', 'tt', 528503, 0, 'showroom_roomclass', '', 0, '0000-00-00 00:00:00', 0),
(528556, '鏡頭', '222', 528503, 0, 'product_shop', '', 0, '2015-02-26 18:40:16', -1),
(528538, 'test', '0', 528503, 0, 'brand', '', 0, '0000-00-00 00:00:00', 0),
(528539, 'test', '444', 528503, 0, 'product_shop', '', 0, '2015-02-26 19:39:12', -1),
(528540, 'test', '0', 528503, 0, 'showroom_styleclass', '', 0, '0000-00-00 00:00:00', 1),
(528541, '33', '0', 528503, 0, 'note', '', 0, '0000-00-00 00:00:00', 0),
(528542, '555', '0', 528503, 0, 'activity', '', 0, '0000-00-00 00:00:00', 1),
(528543, 'test2', '0', 528503, 0, 'note', '', 0, '0000-00-00 00:00:00', -1),
(528544, '$$', '0', 528503, 0, 'brand', '', 0, '0000-00-00 00:00:00', 1),
(528545, 'ttttt', '0', 528503, 0, 'showroom_roomclass', '', 0, '0000-00-00 00:00:00', 1),
(528546, 'vvv', '0', 528503, 0, 'showroom_styleclass', '', 0, '0000-00-00 00:00:00', 1),
(528547, 'kkk', '0', 528503, 0, 'activity', '', 0, '0000-00-00 00:00:00', 1),
(528548, '$$', '0', 528503, 0, 'brand', '', 0, '0000-00-00 00:00:00', 1),
(528549, '111', 'testfere', 528503, 0, '', '', 0, '0000-00-00 00:00:00', 1),
(528550, '短鏡頭', '528552(1)', 528503, 0, 'product_shop', '528553', 2, '2015-03-05 16:57:57', 1),
(528551, 'ggsdf', 'gfgfdgg', 528503, 0, '', '', 0, '0000-00-00 00:00:00', 1),
(528552, '長鏡頭', '528552', 528503, 0, 'product_shop', '528553', 3, '2015-03-05 01:42:33', 1),
(528553, '攝影機身', 'b2605895', 528503, 0, 'product_shop_class2', '', 0, '2015-02-27 00:25:30', 1),
(528554, '中鏡頭', '528554', 528503, 0, 'product_shop', '528558', 0, '2015-02-28 01:51:09', 1),
(528555, '超遠鏡頭', '3224562345', 528503, 0, 'product_shop', '528561', 0, '2015-02-27 00:52:32', 1),
(528557, '鏡頭', '4520553453', 528503, 0, 'product_shop_class2', '', 0, '2015-02-26 19:42:14', -1),
(528558, '機身', 'baad2149', 528503, 0, 'product_shop_class2', '', 3, '2015-03-02 15:20:26', 1),
(528559, '555555', '(1)', 528503, 0, 'product_shop_class2', '', 0, '2015-02-26 19:45:17', -1),
(528560, '其它相關', 'other2', 528501, 0, 'product_shop_class2', '', 5, '2015-03-15 20:27:51', 1),
(528561, '鏡頭', 'fa10a469', 528503, 0, 'product_shop_class2', '', 0, '2015-02-27 00:26:06', 1),
(528562, 'test', 'a19bfdc1', 528503, 0, 'product_shop_class2', '', 0, '2015-02-27 00:47:49', -1),
(528563, '其它子分類', '20d658fb', 528503, 0, 'product_shop', '528560', 0, '2015-03-02 15:19:53', 1),
(528564, 'test', '6e117e41', 528503, 0, 'product_shop_class2', '', 0, '2015-03-02 15:20:40', -1),
(528565, 'test', 'a713bbc3', 528503, 0, 'product_shop_class2', '', 0, '2015-03-02 15:20:56', -1),
(528566, '', 'b9f2e4de', 528503, 0, '', '', 0, '2015-03-07 01:11:39', 1),
(528567, '', '5a55a1c0', 528503, 0, '', '', 0, '2015-03-07 01:51:04', 1),
(528568, '', '2adb33c7', 528503, 0, '', '', 0, '2015-03-07 02:01:45', 1),
(528569, '', 'bb6033d2', 528503, 0, '', '', 0, '2015-03-07 02:08:03', 1),
(528570, '', '0cf4f378', 528503, 0, '', '', 0, '2015-03-07 02:08:40', 1),
(528571, '', '9113a418', 528503, 0, '', '', 0, '2015-03-07 02:08:49', 1),
(528572, '', '44fe9423', 528503, 0, '', '', 0, '2015-03-07 02:11:45', 1),
(528573, 'test', 'f67786ca', 528503, 0, 'pic', '', 0, '2015-03-07 02:17:26', 1),
(528574, 'test2', '823f8482', 528503, 0, 'pic', '', 2, '2015-03-07 02:22:16', 1),
(528575, 'test3', '9e04fe31', 528503, 0, 'pic', '', 3, '2015-03-07 04:01:57', 1),
(528576, '首頁', '357a5bec', 528503, 0, 'advertising', '', 5, '2015-03-14 16:32:06', 1),
(528577, 'test', '57376f78', 528501, 0, 'pic', '', 0, '2015-03-15 19:22:42', -1),
(528578, 'test', '69894e29', 528501, 0, 'product', '528553', 0, '2015-03-15 20:27:41', 1),
(528579, 'tee', '4be3d9be', 528501, 0, 'showpiece_shop', '', 0, '2015-03-15 21:52:24', 1),
(528580, 'ffff', '3029be0f', 528501, 0, 'showpiece_shop', '', 0, '2015-03-15 21:53:22', 1),
(528581, 'test', 'cb2120bb', 528501, 0, 'showpiece', '528582', 0, '2015-03-15 21:55:16', 1),
(528582, 'testttt', '8c7e2a57', 528501, 0, 'showpiece_class2', '', 0, '2015-03-15 21:55:05', 1),
(528583, 'test2', '96af9cf1', 528501, 0, 'showpiece', '528582', 0, '2015-03-20 18:05:54', 1),
(528584, 'ggg', '97b832af', 528501, 0, 'showpiece_class2', '', 0, '2015-03-20 18:06:07', 1),
(528585, 'testttff', '094dab70ff', 528501, 0, 'dessert', '', 1, '2015-04-26 01:15:25', -1),
(528586, '每月課程表', '5b63a895', 528501, 0, 'pic', '', 1, '2015-04-28 16:35:40', 1),
(528587, 'Teacher', 'f05469a3', 528501, 0, 'pic', '', 0, '2015-04-30 17:08:28', 1),
(528588, '烘焙大小事', 'bf56ae9d', 528501, 0, 'pic', '', 0, '2015-04-30 17:13:42', 1),
(528589, '當月課程', '54ec83db', 528501, 0, 'pic', '', 0, '2015-04-30 17:43:58', 1),
(528590, '專修班', '4660925b', 528501, 0, 'pic', '', 0, '2015-04-30 18:26:47', 1),
(528591, '45456323456', '1ddac590', 528501, 0, 'dessert', '', 0, '2015-05-04 12:00:58', -1),
(528592, '初級系列課', '22691271', 528501, 0, 'series_course', '', 0, '2015-05-05 15:09:18', 1),
(528593, '中級系列課', 'a4dd4c6f', 528501, 0, 'series_course', '', 0, '2015-05-05 15:09:56', 1),
(528594, '高級系列課', 'a8eb1f46', 528501, 0, 'series_course', '', 0, '2015-05-05 15:10:33', 1),
(528595, '塔派', '268c91d7', 528501, 0, 'dessert', '', 0, '2015-05-05 15:27:27', 1),
(528596, '常溫點心', 'cb721d63', 528501, 0, 'dessert', '', 0, '2015-05-05 15:27:58', 1),
(528597, '餅乾', '6fead7a2', 528501, 0, 'dessert', '', 0, '2015-05-05 15:28:15', 1),
(528598, '慕斯蛋糕', '83cc7369', 528501, 0, 'dessert', '', 0, '2015-05-05 15:28:28', 1),
(528599, '其他點心', 'bd147a5e', 528501, 0, 'dessert', '', 0, '2015-05-16 12:40:23', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_contact_ask`
--

CREATE TABLE IF NOT EXISTS `fs_contact_ask` (
  `contactid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `email` char(100) NOT NULL,
  `phone` char(32) NOT NULL,
  `content` text NOT NULL,
  `status_process` int(1) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_contact_ask`
--

INSERT INTO `fs_contact_ask` (`contactid`, `name`, `email`, `phone`, `content`, `status_process`, `updatetime`, `status`) VALUES
(528501, '123dfgfdgfdg', 'test@test.test', '123', '123', 0, '0000-00-00 00:00:00', 0),
(528502, 'ffff', '', '', '3/07(六)14:00~17:00', 0, '2015-04-29 13:47:44', -1),
(528503, 'kkk', '', '', 'tkkk', 0, '2015-03-29 22:00:17', -1),
(528504, 'test', '', '', 'test<br />\r\ntest<br />\r\ntest\r\n<div></p>\r\n', 0, '2015-03-29 21:52:40', 0),
(528505, '費南雪-原味、榛果、抹茶栗子', 'tes@testes', '1231231242', '這款來自法國的經典小蛋糕Financier，直接音譯便是大家所熟悉的「費南雪」，由字義翻則是「金融家蛋糕」! 關於費南雪的由來，其實有個可愛的小故事。 當時忙著投資、洽談生意的金融家們，每天都連吃飯的空檔沒有，於是在巴黎金融區的蛋糕師便發明了這種不用刀叉、不黏手的小糕點費南雪。', 1, '2015-04-30 16:42:50', -1),
(528506, 'test222', '', '', 'tet', 0, '2015-03-29 21:51:59', 0),
(528507, 'test', '', '', '', 0, '2015-04-29 13:44:20', -1),
(528508, 'test', '', '', '', 0, '2015-04-29 13:45:33', -1),
(528509, 'test', 'test', 'test', 'test', 1, '2015-05-15 05:52:18', 0),
(528510, '楊翊', 'sacriley@gmail.com', '0917465550', '請問XXXXX，謝謝', 1, '2015-05-15 05:55:26', 1),
(528511, '楊翊', 'sacriley@gmail.com', '0917465550', 'test', 1, '2015-05-15 07:39:05', 1),
(528512, 'test', 'test', 'test', 'test', 1, '2015-05-15 08:15:01', 1),
(528513, 'linda', 'linda@facebook.com', '09789', '', 1, '2015-05-16 11:38:11', 1),
(528514, '張琬君', 'mimi@fanswoo.com', '0912345678', '1245', 1, '2015-08-13 09:47:58', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_contact_learn`
--

CREATE TABLE IF NOT EXISTS `fs_contact_learn` (
  `contactid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `email` char(100) NOT NULL,
  `phone` char(32) NOT NULL,
  `content` text NOT NULL,
  `learn_name` char(100) NOT NULL,
  `learn_time` char(100) NOT NULL,
  `status_process` int(1) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_contact_learn`
--

INSERT INTO `fs_contact_learn` (`contactid`, `name`, `email`, `phone`, `content`, `learn_name`, `learn_time`, `status_process`, `updatetime`, `status`) VALUES
(528501, '123dfgfdgfdg', 'test@test.test', '123', '123', '', '', 0, '0000-00-00 00:00:00', 0),
(528502, 'ffff', '', '', '3/07(六)14:00~17:00', '', '', 0, '2015-04-29 13:47:44', -1),
(528503, 'kkk', '', '', 'tkkk', '', '', 0, '2015-03-29 22:00:17', -1),
(528504, 'test', '', '', 'test<br />\r\ntest<br />\r\ntest\r\n<div></p>\r\n', '', '', 0, '2015-03-29 21:52:40', 0),
(528505, '費南雪-原味、榛果、抹茶栗子', 'tes@testes', '1231231242', '這款來自法國的經典小蛋糕Financier，直接音譯便是大家所熟悉的「費南雪」，由字義翻則是「金融家蛋糕」! 關於費南雪的由來，其實有個可愛的小故事。 當時忙著投資、洽談生意的金融家們，每天都連吃飯的空檔沒有，於是在巴黎金融區的蛋糕師便發明了這種不用刀叉、不黏手的小糕點費南雪。', '123', '123', 1, '2015-04-30 16:42:50', -1),
(528506, 'test222', '', '', 'tet', '', '', 0, '2015-03-29 21:51:59', 0),
(528507, 'test', '', '', '', '', '', 0, '2015-04-29 13:44:20', -1),
(528508, 'test', '', '', '', '', '', 0, '2015-04-29 13:45:33', -1),
(528509, '楊翊', 'sacriley@gmail.com', '0917465550', 'test', '528505', 'time1', 2, '2015-05-15 07:39:48', 1),
(528510, '楊翊', 'sacriley@gmail.com', '0917465550', 'test', '528508', '5/15起，每周五14:00~17:00', 1, '2015-05-15 08:35:40', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_contact_pay`
--

CREATE TABLE IF NOT EXISTS `fs_contact_pay` (
  `contactid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `email` char(100) NOT NULL,
  `phone` char(32) NOT NULL,
  `pay_time` char(100) NOT NULL,
  `pay_account` char(100) NOT NULL,
  `pay_name` char(100) NOT NULL,
  `pay_learn_name` char(100) NOT NULL,
  `content` text NOT NULL,
  `status_process` int(1) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_contact_pay`
--

INSERT INTO `fs_contact_pay` (`contactid`, `name`, `email`, `phone`, `pay_time`, `pay_account`, `pay_name`, `pay_learn_name`, `content`, `status_process`, `updatetime`, `status`) VALUES
(528501, '123dfgfdgfdg', 'test@test.test', '123', '', '', '', '', '123', 0, '0000-00-00 00:00:00', 0),
(528502, 'ffff', '', '', '', '', '', '', '3/07(六)14:00~17:00', 0, '2015-04-29 13:47:44', -1),
(528503, 'kkk', '', '', '', '', '', '', 'tkkk', 0, '2015-03-29 22:00:17', -1),
(528504, 'test', '', '', '', '', '', '', 'test<br />\r\ntest<br />\r\ntest\r\n<div></p>\r\n', 0, '2015-03-29 21:52:40', 0),
(528505, '費南雪-原味、榛果、抹茶栗子', 'tes@testes', '1231231242', 'test', 'test', 'test', 'test', '這款來自法國的經典小蛋糕Financier，直接音譯便是大家所熟悉的「費南雪」，由字義翻則是「金融家蛋糕」! 關於費南雪的由來，其實有個可愛的小故事。 當時忙著投資、洽談生意的金融家們，每天都連吃飯的空檔沒有，於是在巴黎金融區的蛋糕師便發明了這種不用刀叉、不黏手的小糕點費南雪。', 2, '2015-04-30 16:42:50', -1),
(528506, 'test222', '', '', '', '', '', '', 'tet', 0, '2015-03-29 21:51:59', 0),
(528507, 'test', '', '', '', '', '', '', '', 0, '2015-04-29 13:44:20', -1),
(528508, 'test', '', '', '', '', '', '', '', 0, '2015-04-29 13:45:33', -1),
(528509, '楊翊', 'sacriley@gmail.com', '0917465550', '2015/5/15', '12345', '楊翊', 'XX課程', '', 1, '2015-05-15 06:02:36', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_course`
--

CREATE TABLE IF NOT EXISTS `fs_course` (
  `courseid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `price` mediumint(10) NOT NULL,
  `classids` char(100) NOT NULL,
  `content` text NOT NULL,
  `precautions` text NOT NULL,
  `coursetime1` char(100) NOT NULL,
  `coursetime2` char(100) NOT NULL,
  `picids` char(100) NOT NULL,
  `prioritynum` mediumint(9) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_course`
--

INSERT INTO `fs_course` (`courseid`, `uid`, `name`, `price`, `classids`, `content`, `precautions`, `coursetime1`, `coursetime2`, `picids`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, 528503, '123dfgfdgfdg', 0, '528528', '123', '', '', '', 'test', 2, '0000-00-00 00:00:00', 0),
(528502, 528501, 'ffff', 5, '528590', '3/07(六)14:00~17:00', '', '', '', '', 0, '2015-04-29 13:47:44', -1),
(528503, 528501, 'kkk', 0, '', 'tkkk', '', '', '', '', 0, '2015-03-29 22:00:17', -1),
(528504, 528501, 'test', 0, '', 'test<br />\r\ntest<br />\r\ntest\r\n<div></p>\r\n', '', '', '', '', 0, '2015-03-29 21:52:40', 0),
(528505, 528501, 'gggggggggggg', 100, '', 'ff', '', '', '', '528698', 3, '2015-04-30 16:47:32', -1),
(528506, 528501, 'test222', 222, '', 'tet', '', '', '', '', 3, '2015-03-29 21:51:59', 0),
(528507, 528501, 'test', 0, '', '', '', '', '', '', 0, '2015-04-29 13:44:20', -1),
(528508, 528501, 'test', 0, '', '', '', '', '', '', 0, '2015-04-29 13:45:33', -1),
(528509, 528501, '鹹派專修班', 13500, '', '在歐洲很普常見的鹹派(Quiches)，其實在台灣不太容易見到。起源於德法交界的洛林地區，當地以畜牧業為主，天然環境提供了良好的雞蛋、乳製品、培根和洋蔥，也就是一開始鹹塔的基本食材。<br />\n&nbsp;<br />\n隨著時間過去，鹹派幾乎成為法國家庭必備的一道菜，每個媽媽都有一份自己的食譜!其實只要學會了鹹塔的基本作法，就能夠自己變化應用，完成一道既方便又美味的法式家常料理。<br />\n<br />\n&nbsp;<img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/23-3bdb4bdc48236aad.jpg" style="height: 500px; width: 500px;" /><br />\n鹹塔專修班除了教你基本的塔皮和蛋奶液，更準備了五種不同的鹹塔，每一樣食材以不同的烹飪方式方開處理，做出來的鹹塔絕對能讓人驚豔!<br />\n&nbsp;\n<ul>\n	<li><strong>洛林鹹派</strong>：洛林鹹派的內餡，雖然只是簡單的洋蔥與培根，但是，洋蔥先以綜合香草束（Bouquet Garni）及奶油做成Onion Confit，再搭配厚片培根填入蛋奶液中，不同於只是炒香的洋蔥培根，繁複的細節，成就令人迷戀的好味道。</li>\n</ul>\n&nbsp;\n\n<ul>\n	<li><strong>蒔蘿鮭魚雙重奏</strong>：使用煙燻及新鮮鮭魚製作，與堪稱為鮭魚的最佳配角的蒔蘿一起製作的鹹派，令人齒頰生香~~</li>\n</ul>\n&nbsp;\n\n<ul>\n	<li><strong>雙茄西班牙臘腸</strong>：使用&quot;滿甲肉品&quot;，無化學添加物的西班牙臘腸及香草腸，搭配自製油封番茄及奧勒岡茄子，美味又健康~~</li>\n</ul>\n&nbsp;\n\n<ul>\n	<li><strong>酪梨鮮蝦干貝</strong>：干貝及鮮蝦的鮮美海味，與富含維生素E的酪梨酪梨</li>\n</ul>\n&nbsp;\n\n<div>\n<ul>\n	<li><strong>綜合菇蕈：</strong>菇蕈鹹派，也可以製作成奶蛋素食者可食用喔~~ 使用多種菇類，再搭配芳香馥郁的牛肝菌(porcini)，香氣迷人~</li>\n</ul>\n<br />\n<br />\n<br />\n<img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/12-57039ada2c1549b9.jpg" style="width: 700px; height: 350px;" /></div>\n', '不接受單品項報名', '', '', '528724', 0, '2015-05-16 12:24:51', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_course_month`
--

CREATE TABLE IF NOT EXISTS `fs_course_month` (
  `month_courseid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `price` mediumint(10) NOT NULL,
  `classids` char(100) NOT NULL,
  `content` text NOT NULL,
  `precautions` text NOT NULL,
  `coursetime` char(100) NOT NULL,
  `open_use` int(1) NOT NULL,
  `picids` char(100) NOT NULL,
  `prioritynum` mediumint(9) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_course_month`
--

INSERT INTO `fs_course_month` (`month_courseid`, `uid`, `name`, `price`, `classids`, `content`, `precautions`, `coursetime`, `open_use`, `picids`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, 528503, '123dfgfdgfdg', 0, '528528', '123', '', '', 0, 'test', 2, '0000-00-00 00:00:00', 0),
(528502, 528501, 'ffff', 5, '528588', '3/07(六)14:00~17:00', '3/07(六)14:00~17:00', '3/07(六)14:00~17:00', 0, '', 0, '2015-04-29 13:24:33', -1),
(528503, 528501, 'kkk', 0, '', 'tkkk', '', '', 0, '', 0, '2015-03-29 22:00:17', -1),
(528504, 528501, 'test', 0, '', 'test<br />\r\ntest<br />\r\ntest\r\n<div></p>\r\n', '', '', 0, '', 0, '2015-03-29 21:52:40', 0),
(528505, 528501, '222222222', 222222, '528587', '2222222222222222', '2222222222222222222222', '22222222222', 0, '528698', 3, '2015-04-29 14:25:30', -1),
(528506, 528501, 'test222', 222, '', 'tet', '', '', 0, '', 3, '2015-03-29 21:51:59', 0),
(528507, 528501, 'test', 0, '', '', '', '', 0, '', 0, '2015-04-29 13:44:20', -1),
(528508, 528501, '初級系列課', 29999, '', '初級系列課的十堂中包含了8個類別、17個初階的法式甜點。<br />\n沒有任何經驗的新手，可以在這30個小時中，<br />\n透過理論的學習和實作的經驗，讓您對法式甜點有更進一步的認識。<br />\n更多介紹<span style="color:#0000CD;">&nbsp;</span><a href="http://web.fanswoo.com/187french/series_course/?class_slug=22691271"><span style="color:#0000FF;">http://web.fanswoo.com/187french/series_course/?class_slug=22691271</span></a>', '不接受單堂課程報名', '5/15起，每周五14:00~17:00', 1, '528710', 11, '2015-05-16 12:32:30', 1),
(528509, 528501, '鹹派專修班', 13500, '', '鹹塔可以是一道點心，也可以當一餐輕食~天氣熱的時候，一塊鹹塔搭配點蔬果沙拉，一杯白酒，輕鬆沒有負擔， 天冷時，再來一碗熱熱的濃湯，可以洗滌疲憊的身心，暖心又暖胃， 想要一起體驗這confort food帶來的美味嗎?跟著我們一起來寵壞你的味蕾吧!鹹塔專修班除了教你基本的塔皮和蛋奶液，更準備了五種不同的鹹塔，每一樣食材以不同的烹飪方式方開處理，做出來的鹹塔絕對能讓人驚豔!<br />\n&nbsp;\n<ul>\n	<li><strong>洛林鹹派</strong>：洛林鹹派的內餡，雖然只是簡單的洋蔥與培根，但是，洋蔥先以綜合香草束（Bouquet Garni）及奶油做成Onion Confit，再搭配厚片培根填入蛋奶液中，不同於只是炒香的洋蔥培根，繁複的細節，成就令人迷戀的好味道。</li>\n</ul>\n&nbsp;\n\n<ul>\n	<li><strong>蒔蘿鮭魚雙重奏</strong>：使用煙燻及新鮮鮭魚製作，與堪稱為鮭魚的最佳配角的蒔蘿一起製作的鹹派，令人齒頰生香~</li>\n</ul>\n&nbsp;\n\n<ul>\n	<li><strong>雙茄西班牙臘腸</strong>：使用&quot;滿甲肉品&quot;，無化學添加物的西班牙臘腸及香草腸，搭配自製油封番茄及奧勒岡茄子，美味又健康~</li>\n</ul>\n&nbsp;\n\n<ul>\n	<li><strong>酪梨鮮蝦干貝</strong>：干貝及鮮蝦的鮮美海味，與富含維生素E的酪梨酪梨</li>\n</ul>\n&nbsp;\n\n<ul>\n	<li><strong>綜合菇蕈：</strong>菇蕈鹹派，也可以製作成奶蛋素食者可食用喔~~ 使用多種菇類，再搭配芳香馥郁的牛肝菌(porcini)，香氣迷人</li>\n	<li>&nbsp;</li>\n	<li><img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/12-57039ada2c1549b9.jpg" style="height: 350px; width: 700px;" /></li>\n</ul>\n', '不接受單品項報名', '5/27(三)~5/28(四)，10:00~17:00', 1, '528711', 10, '2015-05-05 16:36:34', 1),
(528510, 528501, '薇拉巧克力慕斯', 3000, '', '<div>哥倫比亞的精品咖啡多半出自南部產區，其中薇拉(Huila)的好山好水是最知名的精品區，曾多次拿下美國精品咖啡協會杯測賽冠軍杯。薇拉所產的精品咖啡品種以卡杜拉和鐵比卡為主，有明顯的水果酸甜味，搭配65%可可巴芮巧克力奶油內餡，外層再以巧克力鏡面披覆。咖啡的香濃風味和巧克力苦甜在味覺上交錯，讓整體的口感及味道達到完美的平衡。</div>\n', '響應環保，請攜帶約18cm大小的保鮮盒或盒子裝成品', '5/13(五)09:30~12:30\n5/23(六)14:00~17:00', 1, '528713', 6, '2015-05-16 12:21:39', 1),
(528511, 528501, '加州橙光', 3000, '', '<div>帶著清新柳橙味的Bavaroise慕斯，裡面佈滿小小的黑點是珍貴的香草籽，<br />\n用它來提升蛋糕風味，也更襯托出慕斯的細膩滑順。而外層以亮麗的糖漬香橙片裝飾，<br />\n閃亮奪目好似加州陽光打在沙灘上熠熠閃亮著，人在台灣心卻已跟著蛋糕飛去加州度假曬太陽了!</div>\n', '響應環保，請攜帶約18cm大小的保鮮盒或盒子裝成品', '5/16(六)14:00~17:00\n5/21(四)14:00~17:00', 1, '528718', 5, '2015-05-16 12:22:01', 1),
(528512, 528501, '粉紅皇冠', 3000, '', '看似可愛，實則為魔鬼級的高難度甜點-粉紅皇冠<br />\n以塔皮為基底，先抹上一層綜合莓果醬，主體則由杏仁奶油慕斯和檸檬慕斯組合而稱，<br />\n莓果的酸爽滋味中和了慕斯的甜膩感。最後在以覆盆子淋面、馬卡龍殼裝飾。<br />\n甜中帶酸、多層次的味道與口感、精巧可愛的小皇冠外型，覺對讓你做的有成就感，吃的滿足!<br />\n(馬卡龍殼為裝飾，不含馬卡龍製作教學)', '響應環保，請攜帶約18cm大小的保鮮盒或盒子裝成品', '5/14(四)14:00~17:00\n5/30(六)14:00~17:01', 1, '528715', 8, '2015-05-16 12:20:50', 1),
(528513, 528501, '林茲塔', 3000, '', '林茲塔(Linzertorte)來自奧地利多瑙河畔林茲(Linz)這城鎮的17世紀古老甜點，有人說它是世界上最早出現的塔類甜點。<br />\n麵糊中添加大量的堅果粉及些許香料提味，內餡的覆盆子果醬與表面交錯覆蓋的斜紋塔皮更是林茲塔的特色，<br />\n烘烤時香氣四溢趁溫熱品嚐感覺特別暖和幸福，想必就是這感覺使而成為奧地利聖誕節的傳統甜點吧！', '', '5/09(六)14:00~17:00\n5/20(三)09:30~12:30', 1, '528716', 9, '2015-05-16 12:20:30', 1),
(528514, 528501, '夏日情懷', 3000, '', '這款清爽的蛋糕，很適合迎接初夏的到來。<br />\n正值產季的芒果和鳳梨是絕妙的夥伴，<br />\n略酸的水果和濃郁的起司奶油慕斯相互搭配，<br />\n再加上杏仁蛋糕體，美麗的剖面，微微酸甜，沒有負擔的夏日情懷!', '響應環保，請攜帶約18cm大小的保鮮盒或盒子裝成品', '5/08(五)14:00~17:00\n5/27(三)09:30~12:30', 1, '528717', 7, '2015-05-16 12:21:20', 1),
(528515, 528501, '嫩煎鮭魚佐青蒜洋芋泥', 3000, '', '', '', '5/16(六)09:30~12:30\n5/23(六)14:00~17:00', 1, '528719', 1, '2015-05-16 12:24:07', 1),
(528516, 528501, '法式烤春雞', 3000, '', '法式奶油巴西里塗抹醬，庫斯米西班牙辣腸內餡，結合脆皮的口感與香嫩的雞肉與香氣飽滿的內餡，是一道輕鬆宴客的美味料理。', '', '5/07(四)09:30~12:30\n5/19(二)14:00~17:00', 1, '528720', 4, '2015-05-16 12:22:30', 1),
(528517, 528501, '香料派皮小羔羊', 3000, '', '新鮮香草的香料濕派皮，包覆著嫩煎小羔羊，沒有羊騷味的小羔羊，祕訣就在這裡唷!', '', '5/12(二)14:00~17:00\n5/28(四)\\09:30~12:30', 1, '528721', 3, '2015-05-16 12:22:50', 1),
(528518, 528501, '西班牙海鮮燉飯', 3000, '', '嚴選西班牙Bomba米，撲滿新鮮的異國海鮮，放入最頂級的香料&rdquo;番紅花&rdquo;燉煮出飽滿鮮甜的西班牙海鮮燉飯。美味輕鬆無負擔!', '', '5/21(四)09:30~12:30\n5/26(二)14:00~17:00', 1, '528722', 2, '2015-05-16 12:23:11', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_course_series`
--

CREATE TABLE IF NOT EXISTS `fs_course_series` (
  `series_courseid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `name_french` char(32) NOT NULL,
  `price` mediumint(10) NOT NULL,
  `classids` char(100) NOT NULL,
  `content` text NOT NULL,
  `precautions` text NOT NULL,
  `picids` char(100) NOT NULL,
  `prioritynum` mediumint(9) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_course_series`
--

INSERT INTO `fs_course_series` (`series_courseid`, `uid`, `name`, `name_french`, `price`, `classids`, `content`, `precautions`, `picids`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, 528503, '123dfgfdgfdg', '', 0, '528528', '123', '', 'test', 2, '0000-00-00 00:00:00', 0),
(528502, 528501, 'ffff', '', 5, '528591', '3/07(六)14:00~17:00', '3/07(六)14:00~17:00', '', 0, '2015-05-04 02:16:54', -1),
(528503, 528501, 'kkk', '', 0, '', 'tkkk', '', '', 0, '2015-03-29 22:00:17', -1),
(528504, 528501, 'test', '', 0, '', 'test<br />\r\ntest<br />\r\ntest\r\n<div></p>\r\n', '', '', 0, '2015-03-29 21:52:40', 0),
(528505, 528501, '111', 'yrdy', 0, '528591', '', '111', '528698', 3, '2015-05-04 02:25:05', -1),
(528506, 528501, 'test222', '', 222, '', 'tet', '', '', 3, '2015-03-29 21:51:59', 0),
(528507, 528501, 'test', '', 0, '', '', '', '', 0, '2015-04-29 13:44:20', -1),
(528508, 528501, '蘋果塔', 'Tarte aux Pommes', 0, '528592', '', '塔皮的認識和操作、焦糖蘋果餡、花形裝飾。', '528725', 1, '2015-05-05 17:16:28', 1),
(528509, 528501, '開心果冰淇淋泡芙', 'Profiteroles, glace à la pistach', 0, '528592', '', '泡芙理論及應用、卡士達和甘納許製作、英式蛋奶醬製作、冰淇淋理論。', '528726', 0, '2015-05-05 15:12:45', -1),
(528510, 528501, '冰淇淋泡芙&閃電泡芙', 'Profiteroles, glace à la pistach', 0, '528592', '', '泡芙理論及應用、卡士達和甘納許製作、英式蛋奶醬製作、冰淇淋理論。', '528727', 2, '2015-05-05 17:16:53', 1),
(528511, 528501, '香草巧克力蛋糕&瑪德蓮', 'Cake Chocolate et vanilla &Madel', 0, '528592', '', '「乳沫類蛋糕」的理論和應用，利用蛋打發後，加入大量的奶油或鮮奶油，攪打成如霜狀的蛋糕。', '528728', 3, '2015-05-16 12:01:46', 1),
(528512, 528501, '蛋糕捲', 'Roll cake', 0, '528592', '', '全蛋法海綿蛋糕製作、蛋糕捲內餡和裝飾，捲收技巧。', '528732', 5, '2015-05-05 17:20:44', 1),
(528513, 528501, 'rtrt', 'rtrtr', 0, '', '', 'ertret', '528751', 0, '2015-05-05 15:45:25', -1),
(528514, 528501, '熱內亞&海綿蛋糕', 'Pain de Génes & Pàte de Génoise', 0, '528592', '', '熱內亞蛋糕的特色(豐富的奶油和杏仁口味)。全蛋法海綿蛋糕理論和實作、蛋糕抹面及裝飾。', '528754', 4, '2015-05-16 12:01:07', 1),
(528515, 528501, '芒果慕斯蛋糕&覆盆子巧克力', 'Bavarois mousse & Crème chocolat', 0, '528592', '', '全蛋法蛋糕、吉利丁應用理論、果凍和慕斯製作。', '528755', 6, '2015-05-16 12:00:39', 1),
(528516, 528501, '杏仁脆片&檸檬生巧克力', 'Ganache au citron vert & Rochers', 0, '528592', '', '利用調溫方式製作巧克力、加料巧克力', '528756', 7, '2015-05-16 12:00:14', 1),
(528517, 528501, '季節水果果醬', 'Confiture', 0, '528592', '', '果醬的製作方法、砂糖之於果醬的作用', '528757', 8, '2015-05-16 11:59:51', 1),
(528518, 528501, '重乳酪蛋糕&烤焦糖布蕾', 'Cheese cake & Crème brûlée à la', 0, '528592', '', '加入櫻桃餡的重乳酪蛋糕、法式焦糖烤布蕾的製作', '528758', 9, '2015-05-16 11:59:24', 1),
(528519, 528501, '達克瓦茲&佛羅倫汀', 'Dacquoise & Florentin', 0, '528592', '', '兩項法式點心:由杏仁蛋白餅、榛果奶油餡製作而成的達克瓦茲，以杏仁片、蜂蜜做成的牛軋丁鋪在甜塔皮上的佛羅倫丁。', '528759', 10, '2015-05-16 11:56:16', 1),
(528520, 528501, '巴黎單車', 'Paris Brest', 0, '528593', '', '泡芙理論和應用，以及製作榛果醬。', '528760', 1, '2015-05-05 17:19:14', 1),
(528521, 528501, '馬卡龍', '', 0, '528593', '', '製作馬卡龍與五種內餡。', '528761', 2, '2015-05-05 17:19:28', 1),
(528522, 528501, '焦糖紅茶慕斯蛋糕', '', 0, '528593', '', '焦糖與紅茶雙口味慕斯蛋糕。', '528762', 3, '2015-05-05 17:28:59', 1),
(528523, 528501, '覆盆子舒芙蕾&義大利杏仁脆餅', '', 0, '', '', '', '528763', 0, '2015-05-05 17:05:44', -1),
(528524, 528501, '覆盆子舒芙蕾&義大利杏仁脆餅', '', 0, '528593', '', '舒芙蕾是打發的蛋白霜做出雲朵般蓬鬆的甜點。義大利杏仁脆餅藉由烘烤兩次而口感脆硬，適合品嚐咖啡時一同享用的餅乾。', '528764', 4, '2015-05-05 17:20:10', 1),
(528525, 528501, '草莓樂園', 'Fraisier', 0, '528593', '', '海綿蛋糕體上鋪滿新鮮草莓，填入濃厚的幕斯林奶油餡，是法國非常經典的甜點之一。', '528765', 5, '2015-05-05 17:20:04', 1),
(528526, 528501, '紅酒西洋梨', 'Tarte au poires et vin rouge', 0, '528593', '', '甜塔皮中排入已用紅酒與香料燉煮的西洋梨，再填入克拉芙提布丁液去烘烤。', '528766', 6, '2015-05-05 17:19:56', 1),
(528527, 528501, '皇冠', 'Pithiviers', 0, '528593', '', '千層派皮與杏仁奶油餡的進階應用。', '528767', 7, '2015-05-05 17:18:40', 1),
(528528, 528501, '覆盆子乳酪塔', '', 0, '528593', '', '酥塔皮、起司乳酪餡與覆盆子的結合。', '528768', 8, '2015-05-05 17:18:46', 1),
(528529, 528501, '糖漬橙皮巧克力', 'Oranges confites', 0, '528593', '', '巧克力調溫技巧、橙皮蜜漬。', '528769', 9, '2015-05-05 17:17:56', 1),
(528530, 528501, '鹽味焦糖蛋糕', 'Gâteau au caramel beurre salé', 0, '528593', '', '奶油麵糊，鹹味焦糖口味的奶油蛋糕。', '528770', 10, '2015-05-05 17:15:35', 1),
(528531, 528501, '鹹派', '鹹派', 0, '528593', '', '法式風味的田園蔬菜鹹派', '528771', 11, '2015-05-05 17:33:04', 1),
(528532, 528501, '松露巧克力', 'Truffe', 0, '528593', '', '巧克力調溫技巧', '528772', 12, '2015-05-05 17:32:52', 1),
(528533, 528501, '裝飾慕斯', 'Jivara exotique', 0, '528593', '', '以杯裝來擺飾的慕斯甜點。', '528773', 13, '2015-05-05 17:31:38', 1),
(528534, 528501, '4種小點心', 'Petits fours', 0, '528593', '', '多種宴會聚餐型小點心。', '528774', 14, '2015-05-05 17:32:37', 1),
(528535, 528501, '年輪蛋糕及翻糖製作', 'Baumkuchen et Fondant', 0, '528594', '', '以手工製法層層堆疊蜂蜜香的麵糊，烘烤出如書本般的長條蛋糕。製作裝飾翻糖', '528775', 1, '2015-05-05 17:34:25', 1),
(528536, 528501, '草莓塔', 'Tarte sablée aux fraises', 0, '528594', '', '酥塔的認識和操作、杏仁奶油餡的應用、莓果果醬製作。', '528776', 2, '2015-05-05 17:35:02', 1),
(528537, 528501, '焦糖巧克力慕斯', 'Java', 0, '528594', '', '焦糖慕斯、巧克力慕斯與巴伐利亞Bavaroise蛋奶凍製作組合。', '528777', 3, '2015-05-05 17:35:54', 1),
(528538, 528501, '草莓夏洛特', 'Charlotte fraise', 0, '528594', '', '圍上手指餅乾的草莓慕斯蛋糕，並以新鮮草莓裝飾。', '528778', 4, '2015-05-05 17:36:26', 1),
(528539, 528501, '覆盆子千層', 'Millefeuille', 0, '528594', '', '桿千層派皮與卡士達餡製作。', '528781', 5, '2015-05-16 11:45:14', 1),
(528540, 528501, '巧克力', 'Bonbon Chocolate', 0, '528594', '', '巧克力調溫技巧、造型巧克力運用。', '528780', 6, '2015-05-05 17:37:15', 1),
(528541, 528501, '水果條磅蛋糕&金磚費南雪', 'Gâteau aux fruits & Financier', 0, '528594', '', '水果條磅蛋糕是加入糖煮無花果與多種果乾的重奶油蛋糕。金磚費南雪為榛果香氣的焦化奶油加入杏仁粉的小糕點。', '528782', 7, '2015-05-16 11:47:36', 1),
(528542, 528501, '抹茶小塔', 'Tartelette macarons avec moja', 0, '528594', '', '抹茶小塔是甜塔皮基底搭配抹茶內餡、馬卡龍裝飾。', '528783', 8, '2015-05-16 11:51:55', 1),
(528545, 528501, '法式白乳酪鮮果蛋糕', 'Crémét d’Anjou', 0, '528594', '', '清爽的白乳酪與雙重鮮奶油的結合，內為巧克力蛋糕與覆盆子甘納許。', '528786', 9, '2015-05-16 11:53:23', 1),
(528543, 528501, '歌劇院', 'Opéra', 0, '528594', '', '杏仁海綿蛋糕拍上咖啡酒糖液，與咖啡奶油餡和巧克力甘納許交錯堆疊，層次鮮明、口感豐富。', '528784', 10, '2015-05-16 11:52:28', 1),
(528544, 528501, '鹹口味馬卡龍(鵝肝醬)', 'Macarons au Foie gras', 0, '528594', '', '義大利蛋白霜製法的馬卡龍，夾入鵝肝醬調味內餡。', '528785', 11, '2015-05-16 11:52:36', 1),
(528546, 528501, '冰淇淋', 'Momo Parfit glacé', 0, '528594', '', '糖漬水蜜桃、冰淇淋製作、拉糖絲及冰淇淋餅乾杯製作。', '528787', 12, '2015-05-16 11:54:18', 1),
(528547, 528501, '巧克力小塔', 'Petits fours', 0, '528594', '', '杏仁酥塔皮、巧克力甘納許、鏡面巧克力。', '528788', 13, '2015-05-16 11:54:46', 1),
(528548, 528501, '4種小點心', 'Petits fours', 0, '528594', '', '多種宴會聚餐型小點心。', '528789', 14, '2015-05-16 12:33:06', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_dessert`
--

CREATE TABLE IF NOT EXISTS `fs_dessert` (
  `dessertid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `name_french` char(100) NOT NULL,
  `price` mediumint(10) NOT NULL,
  `classids` char(100) NOT NULL,
  `content` text NOT NULL,
  `picids` char(100) NOT NULL,
  `prioritynum` mediumint(9) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_dessert`
--

INSERT INTO `fs_dessert` (`dessertid`, `uid`, `name`, `name_french`, `price`, `classids`, `content`, `picids`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, 528501, '藍莓馬卡龍', 'Blueberry macarons', 888, '528585', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', '528696', 1, '2015-04-30 13:54:36', -1),
(528502, 528501, '馬卡龍2號', 'test', 888, '', '88888888', '528699', 0, '2015-04-29 14:23:30', -1),
(528503, 528501, '國王派', 'Galette des rois', 1400, '528595', '每年十二月底到一月中在法國可看到大大小小的甜點店擺滿金黃色澤像個車輪的大酥餅，這正是法國人在1/6主顯節會與親朋好友同聚共享的國王派。兩張千層酥皮，中間夾著杏仁奶油餡，還有個不知切分後會被誰吃到的小瓷偶(fève)，聽說得到小瓷偶的人會幸運一整年，戴上隨餅附贈的紙製金色王冠當國王，大家得聽命於你替你效勞！ㄎ', '528793', 0, '2015-05-16 12:41:28', 1),
(528504, 528501, '瑪德蓮', 'Madeleine', 30, '528596', '(12入360元/24入650元)\n經典的貝殼造型搭配鬆軟的口感，是法國甜點的代表作。相傳十八世紀時，洛林公爵開派對前，廚師和甜點師為事大打出手，把準備好的甜點給揮翻在地，而有名機靈的年輕女侍自告奮勇說要製作她家鄉的點心，沒想到這貝殼形狀、帶檸檬清香的小蛋糕深受公爵喜愛，決定以女侍的名字Madeleine為此甜點命名。', '528790', 0, '2015-05-16 12:28:28', 1),
(528505, 528501, '草莓樂園', 'Fraisier', 1600, '528598', '這是法國甜點師傅一定要會的甜點之一。草莓整齊貼排於模型邊，填入輕盈質地的奶油卡士達醬，上頭以調色的杏仁膏桿平裝飾頂部，撒上薄薄糖粉宛若降雪般，粉嫩可愛的造型和酸甜輕盈的好滋味，常被作為過節送禮的最佳選擇。', '528791', 0, '2015-05-16 12:31:32', 1),
(528506, 528501, '手工果醬', 'Confiture', 400, '528599', '沖杯黑咖啡，攤開報紙，取出烤箱中溫熱好的可頌麵包，橫剖後塗抹上帶鹽奶油和手工果醬，用簡單的幸福早餐展開充滿活力且美好的一天！挑選當季新鮮的水果，文火慢熬讓糖與水果長時間相處認識，吸收彼此的純粹，造就出一瓶瓶成為你我每日幸福開端的甜蜜果醬。', '528792', 0, '2015-05-16 12:40:34', 1),
(528507, 528501, '布列塔尼酥餅', 'Bretagne', 450, '528597', '(450元/20個)法國布列塔尼當地的特色小點，表面的焦糖色與特殊線條是它的特徵之一。使用依思尼奶油、杏仁粉、蛋和少許蘭姆酒製作而成。口感酥鬆，濃郁奶香。', '528794', 0, '2015-05-16 12:43:57', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_note`
--

CREATE TABLE IF NOT EXISTS `fs_note` (
  `noteid` mediumint(8) unsigned NOT NULL,
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `title` char(50) NOT NULL DEFAULT '',
  `username` char(30) NOT NULL DEFAULT '',
  `picids` char(100) NOT NULL DEFAULT '',
  `classids` char(100) NOT NULL DEFAULT '',
  `modelname` char(100) NOT NULL DEFAULT '',
  `signup` int(1) NOT NULL,
  `viewnum` mediumint(8) NOT NULL DEFAULT '0',
  `replynum` mediumint(8) NOT NULL DEFAULT '0',
  `prioritynum` mediumint(8) NOT NULL DEFAULT '0',
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_note`
--

INSERT INTO `fs_note` (`noteid`, `uid`, `title`, `username`, `picids`, `classids`, `modelname`, `signup`, `viewnum`, `replynum`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, 528501, ' to capture and share your world like never', '', '', '528516', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528502, 528501, 'test', '', '', '528516', 'note', 0, 0, 0, 3, '2015-04-29 02:07:23', -1),
(528506, 528501, 'tttttttt', '', '', '', 'note', 0, 0, 0, 123, '0000-00-00 00:00:00', -1),
(528505, 528501, 'testtt', '', '', '528510,528513', '', 0, 0, 0, 4, '0000-00-00 00:00:00', 0),
(528504, 528501, 'test', '', '', '528501', '', 0, 0, 0, 3, '0000-00-00 00:00:00', 0),
(528503, 528501, 'test', '', '', '', '', 0, 0, 0, 3, '0000-00-00 00:00:00', 0),
(528507, 528501, 'test/test.jpg', '', '', '', '', 0, 0, 0, 1, '0000-00-00 00:00:00', 0),
(528508, 528503, 'test22222255', '', '', '', 'activity', 0, 0, 0, 1, '0000-00-00 00:00:00', 1),
(528509, 528503, 'test3', '', '', '', 'activity', 0, 0, 0, 1, '0000-00-00 00:00:00', 1),
(528510, 528501, 'test2', '', '', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 1),
(528511, 528501, 'test3', '', '', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 1),
(528512, 528503, 'teee', '', '', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 1),
(528513, 528503, 'ggg', '', '', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 1),
(528514, 528503, '3', '', '', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 1),
(528515, 528503, 'ttttttttt', '', '', '', 'activity', 0, 0, 0, 0, '0000-00-00 00:00:00', 1),
(528516, 528501, 're your world like never before. From i', '', '', '528516', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528517, 528501, ' cameras, to mounts and accessories for', '', '', '528516', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528518, 528501, 'and share your world like nev', '', '', '528516', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528519, 528501, 'o capture and share your world like neve', '', '', '528518', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528520, 528501, 'GoPro App and software—GoPro make', '', '', '528518', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528521, 528501, 'and share your world like never be', '', '', '528518', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528522, 528501, 'powerful cameras, to mounts and', '', '', '528518', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528523, 528501, 'o mounts and accessories for nearl', '', '', '528516', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528524, 528501, 'to mounts and accessories for nearly a', '', '', '528518', 'note', 0, 0, 0, 0, '0000-00-00 00:00:00', -1),
(528525, 528501, 'From incredibly versatile, powerful', '', '', '528518', 'note', 0, 0, 0, 3, '0000-00-00 00:00:00', -1),
(528526, 528501, '【每月課程】5月份課程資訊', '', '', '528518', 'note', 0, 0, 0, 1, '2015-04-30 15:28:08', -1),
(528527, 528501, '123123123', '', '', '528516', 'note', 0, 0, 0, 0, '2015-04-28 17:03:31', -1),
(528528, 528501, '【每月課程】4月份課程資訊', '', '', '528518', 'note', 0, 0, 0, 0, '2015-04-30 17:06:36', 1),
(528529, 528501, '【料理老師】林庭右', '', '', '528518', 'note', 0, 0, 0, 0, '2015-04-30 17:10:24', 1),
(528530, 528501, '【每月課程】5月份課程資訊', '', '', '528518', 'note', 0, 0, 0, 0, '2015-04-30 17:12:08', 1),
(528531, 528501, '食用玫瑰花瓣', '', '', '528516', 'note', 0, 0, 0, 0, '2015-04-30 17:16:19', 1),
(528532, 528501, '自己做的最安全', '', '', '528516', 'note', 1, 0, 0, 0, '2015-05-16 11:34:21', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_note_field`
--

CREATE TABLE IF NOT EXISTS `fs_note_field` (
  `noteid` mediumint(8) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_note_field`
--

INSERT INTO `fs_note_field` (`noteid`, `content`) VALUES
(528501, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528502, '<img alt="" src="http://www.changefood.org/wp-content/uploads/2013/09/feel-healthier-bodymind-fresh-food-better-than-canned_32.jpg" style="height: 549px; width: 800px;" /><br />\n<br />\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\n<br />\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\n<br />\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br />\n<br />\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528518, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528519, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528521, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528522, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528523, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528524, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528525, '<img alt="" src="http://www.changefood.org/wp-content/uploads/2013/09/feel-healthier-bodymind-fresh-food-better-than-canned_32.jpg" style="height: 549px; width: 800px;" /><br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br />\r\n<br />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528506, 'tttttttttttt'),
(528505, 'testtt'),
(528503, 'test'),
(528504, 'test'),
(528507, 'test'),
(528508, 'test22222222222222555'),
(528509, 'test3'),
(528510, 'test2'),
(528511, 'test3'),
(528512, 'teee'),
(528513, 'fggg'),
(528514, '3'),
(528515, 'ttttttttttttttttttt'),
(528516, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528517, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>\r\n<div>\r\n<p>&nbsp;</p>\r\n</div>\r\n'),
(528520, '<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.<br />\r\n<br />\r\nFrom incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span><br style="line-height: 20.7999992370605px;" />\r\n<br style="line-height: 20.7999992370605px;" />\r\n<span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.&nbsp;</span><span style="line-height: 20.7999992370605px;">From incredibly versatile, powerful cameras, to mounts and accessories for nearly any activity, to the GoPro App and software&mdash;GoPro makes it easier than ever to capture and share your world like never before.</span>'),
(528526, '<div style="text-align: center;"><img alt="" src="http://web.fanswoo.com/187french/app/pic/00/52/86/97-00f8873571343fa4.jpg" style="width: 700px; height: 840px;" /></div>\n\n<div style="text-align: center;"><br />\n<br />\n<span style="color:#FFFFFF;"><span style="font-family: 微軟正黑體, sans-serif; font-size: 15px; font-weight: 600; letter-spacing: 4px; line-height: 24px; text-align: center;">2月份的課程資訊，歡迎下載!</span><br />\n<span style="font-family: 微軟正黑體, sans-serif; font-size: 15px; font-weight: 600; letter-spacing: 4px; line-height: 24px; text-align: center;">每班4~6人小班教學</span><br />\n<span style="font-family: 微軟正黑體, sans-serif; font-size: 15px; font-weight: 600; letter-spacing: 4px; line-height: 24px; text-align: center;">個人材料，每位學員實際操作</span><span style="font-family: 微軟正黑體, sans-serif; font-size: 15px; font-weight: 600; letter-spacing: 4px; line-height: 24px; text-align: center;">為響應</span><span style="font-family: 微軟正黑體, sans-serif; font-size: 15px; font-weight: 600; letter-spacing: 4px; line-height: 24px; text-align: center;">環保，上課請攜帶18cm大小的保鮮盒。</span></span></div>\n'),
(528527, '<table border="1" cellpadding="0" cellspacing="0">\n	<tbody>\n		<tr>\n			<td colspan="2" style="width:136px;height:34px;">公 司 名 稱</td>\n			<td colspan="20" style="width:530px;height:34px;">&nbsp;</td>\n		</tr>\n		<tr>\n			<td colspan="2" style="width:136px;height:27px;">統 一 編 號</td>\n			<td colspan="16" style="width:278px;height:27px;">&nbsp;</td>\n			<td colspan="2" style="width:112px;height:27px;">負 責 人</td>\n			<td colspan="2" style="width:139px;height:27px;">&nbsp;</td>\n		</tr>\n		<tr>\n			<td colspan="2" style="width:136px;height:52px;">公司登記地址</td>\n			<td colspan="20" style="width:530px;height:52px;">&nbsp;</td>\n		</tr>\n		<tr>\n			<td rowspan="3" style="width:32px;height:28px;">入帳銀行</td>\n			<td style="width:104px;height:28px;">銀&nbsp; 行</td>\n			<td colspan="17" style="width:280px;height:28px;">　　　&nbsp; &nbsp;　 銀行　　&nbsp;&nbsp; 　分行</td>\n			<td colspan="2" style="width:112px;height:28px;">總行代碼</td>\n			<td style="width:138px;height:28px;">分行代碼</td>\n		</tr>\n		<tr>\n			<td style="width:104px;height:29px;">帳&nbsp; 號</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td colspan="2" style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td colspan="2" style="width:20px;height:29px;">&nbsp;</td>\n			<td style="width:20px;height:29px;">&nbsp;</td>\n			<td colspan="2" style="width:20px;height:29px;">&nbsp;</td>\n			<td colspan="2" style="width:112px;height:29px;">□□□</td>\n			<td style="width:138px;height:29px;">□□□□</td>\n		</tr>\n		<tr>\n			<td style="width:104px;">戶&nbsp; 名</td>\n			<td colspan="20" style="width:530px;">※需與發票之公司名稱相同<br />\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\n		</tr>\n		<tr>\n			<td rowspan="2" style="width:32px;height:61px;">電匯通知單收件</td>\n			<td style="width:104px;height:61px;">通訊地址</td>\n			<td colspan="20" style="width:530px;height:61px;">□□□(郵遞區號務必填寫)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; □同公司登記地址<br />\n			&nbsp;</td>\n		</tr>\n		<tr>\n			<td style="width:104px;height:43px;">收件部門</td>\n			<td colspan="10" style="width:192px;height:43px;">&nbsp;</td>\n			<td colspan="3" style="width:40px;height:43px;">發&nbsp; 票 章</td>\n			<td colspan="7" style="width:298px;height:43px;">蓋妥統一發票章處</td>\n		</tr>\n	</tbody>\n</table>\n'),
(528528, '<div style="text-align: center;"><strong>4</strong><strong>月份的課程資訊，歡迎下載</strong><strong>!</strong><br />\n&nbsp;<br />\n頂級食材-用法國航空直送的食材，做最道地的法式甜點<br />\n豪華設備-使用工藝精緻的進口廚具，讓您體驗大師級的經典與嚴謹。<br />\n小班教學-每班3~6人，貼身學習專業甜點師的手藝。<br />\n實際手作-每位學員獨立實作，並帶回3~6人份的成品與親友一起分享。<br />\n<br />\n<br />\n<img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/00-2c6ca8aa22435f20.jpg" style="width: 700px; height: 840px;" /></div>\n'),
(528529, '<img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/02-fe5e149496b2c107.jpg" style="height: 451px; width: 300px;" /><br />\n<br />\n2014 台北文華東方酒店 &ndash; Cafe123 Sous-Chef<br />\n2010-2013松露之家 &ndash; Senior Sous-Chef<br />\n2010君品酒店 &ndash; Chef de Partie<br />\n2009 L&rsquo;Atelier de Jo&euml;l Robuchon Taipei &ndash; Chef de Partie<br />\n2008皮耶艾梅高等甜點工作坊<br />\n2008 Hotel de CRILLON(米其林二星內場)<br />\n2006 La Cuisine de Restaurant L&eacute;on de Lyon(米其林二星內場)<br />\n2005-2007法國里昂保羅包庫斯廚藝學院'),
(528530, '<div style="text-align: center;"><strong>5</strong><strong>月份的課程資訊，歡迎下載</strong><strong>!</strong><br />\n&nbsp;<br />\n頂級食材-用法國航空直送的食材，做最道地的法式甜點<br />\n豪華設備-使用工藝精緻的進口廚具，讓您體驗大師級的經典與嚴謹。<br />\n小班教學-每班3~6人，貼身學習專業甜點師的手藝。<br />\n實際手作-每位學員獨立實作，並帶回3~6人份的成品與親友一起分享。<br />\n<img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/01-fd01de082df1ade0.jpg" /></div>\n'),
(528531, '美美的玫瑰花果醬和飲料是怎麼來的呢?<br />\n&nbsp;<img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/06-1795a732332d1fcb.jpg" style="height: 300px; width: 300px;" /><br />\n一般市售的玫瑰花是觀賞用途，為了美觀大都有灑農藥，不適合拿來做成食材入菜。<br />\n而大部分商家，為了省錢省時，都會選擇化學製成的玫瑰花香精和紅色色素來代替。<br />\n&nbsp;<br />\n但是，真正的玫瑰花瓣其實是含有很多健康成分的食材呢!<br />\n(維他命C、花青素、生物類黃酮、B群、維他命K、胡蘿蔔素、鈣質、鎂、和銅)<br />\n而我們為了讓消費者吃得健康，特地向花農訂購新鮮的有機花瓣。<br />\n訂購當天現採的花瓣，不含農藥可以直接食用，色澤和和香氣也都特別濃郁。<br />\n&nbsp;<br />\n&nbsp;<br />\n愛吃甜點的你，知道嗎?<br />\n玫瑰和荔枝其實是很好的朋友，搭配在一起甜甜的香氣，瞬間讓整個甜點高級起來。<br />\n我們在果醬和馬卡龍中，都做了荔枝玫瑰口味。<br />\n<img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/07-5fd21aa7b7b7623a.jpg" style="height: 300px; width: 300px;" /><br />\n&nbsp;<br />\n有時間可以大家可以在家做看看，沒時間也可以來「187巷的法式」吃看看!'),
(528532, '這兩年來，頻傳食安問題，我們從小吃到大的食物，都成了黑心商品。<br />\n越來越多人開始開伙，自己煮飯、做蛋糕，就是希望能吃得安心。<br />\n&nbsp;<br />\n但是，你購買的是哪個階段的食物呢?<br />\n舉個最簡單的例子，買的「豆腐」是使用基因改良的黃豆所製成的嗎?<br />\n<img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/05-a6df09f748a66ee0.jpg" style="height: 300px; width: 300px;" /><br />\n以烘配來說，你用過杏仁膏做裝飾嗎?但都是買現成的吧?<br />\n但是你曾經仔細看過內容物嗎?<br />\n為了增加香味和保存期限，常會多了其他的化學添加物。<br />\n你相信嗎?<br />\n其實她的材料很簡單，杏仁、糖份和水份。<br />\n<br />\n<img alt="" src="http://web.fanswoo.com/187french/app/./pic/00/52/87/04-b5043f75a06ff104.jpg" style="height: 300px; width: 300px;" /><br />\n再看看榛果醬吧!原料也只有四樣<br />\n細砂糖、水、杏仁和榛果!<br />\n<br />\n<br />\n在系列課中，我們開始教學生從最原始的食物，製成西點會使用到的其他材料。<br />\n翻糖、杏仁膏、榛果醬、糖漬橘皮...等等，讓你有機會和預拌粉及化學物說掰掰!');

-- --------------------------------------------------------

--
-- 資料表結構 `fs_pic`
--

CREATE TABLE IF NOT EXISTS `fs_pic` (
  `picid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `title` char(100) NOT NULL,
  `filename` char(100) NOT NULL,
  `size` mediumint(8) NOT NULL,
  `type` char(32) NOT NULL,
  `md5` char(16) NOT NULL,
  `classids` char(100) NOT NULL,
  `thumb` char(100) NOT NULL,
  `prioritynum` mediumint(8) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_pic`
--

INSERT INTO `fs_pic` (`picid`, `uid`, `title`, `filename`, `size`, `type`, `md5`, `classids`, `thumb`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, 528501, '', '', 0, '', '04655894ba95c52e', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528536, 528503, 'shutterstock_99340109.jpg', 'shutterstock_99340109.jpg', 3518685, 'image/jpeg', '2e4c1d7e4e8ee6e4', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528535, 528503, 'date.jpg', 'date.jpg', 1334867, 'image/jpeg', '53ad448cffb149b4', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', -1),
(528534, 528503, '8380_201010241115151KWa5.jpg', '8380_201010241115151KWa5.jpg', 0, 'image/jpeg', '2a3de03a68be5659', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528533, 528503, '8380_201010241115151KWa5.jpg', '8380_201010241115151KWa5.jpg', 0, 'image/jpeg', '93aebc6805653e82', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528532, 528503, '8380_201010241115151KWa5.jpg', '8380_201010241115151KWa5.jpg', 220035, 'image/jpeg', '4ec2fc997da591aa', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', -1),
(528531, 528503, 'shutterstock_155566568.jpg', 'shutterstock_155566568.jpg', 3789126, 'image/jpeg', 'a97c48a98bdb8d23', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', -1),
(528530, 528503, 'shutterstock_99340109.jpg', 'shutterstock_99340109.jpg', 3518685, 'image/jpeg', '0510401a499d88ee', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528529, 528503, '2010610103530.jpg', '2010610103530.jpg', 7439, 'image/jpeg', '745ccc6c66e0e836', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528528, 528503, '8380_201010241115151KWa5.jpg', '8380_201010241115151KWa5.jpg', 220035, 'image/jpeg', 'eb077806ba1a92f6', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528527, 528503, '', '', 0, '', '2e105aa371f3755a', '', 'w50h50,w300h300', 0, '2015-03-06 01:57:15', -1),
(528526, 528503, '未命名-1.jpg', '未命名-1.jpg', 894088, 'image/jpeg', 'b10c3c8927859911', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528525, 528503, '', '', 0, '', 'a617c876c7fbf546', '', 'w50h50,w300h300', 0, '2015-03-06 02:03:47', -1),
(528524, 528503, 'ESM_LOGO_W (1).jpg', 'ESM_LOGO_W (1).jpg', 116571, 'image/jpeg', '6da04e7f66183a87', '', 'w50h50,w300h300', 0, '2015-03-06 16:46:17', 1),
(528523, 528503, '未命名-1.jpg', '未命名-1.jpg', 894088, 'image/jpeg', '9a2098f73250d4e4', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528522, 528503, '未命名-1.jpg', '未命名-1.jpg', 894088, 'image/jpeg', '006a1a1ff3f554c2', '528575', 'w50h50,w300h300', 0, '2015-03-07 04:34:58', 1),
(528521, 528503, '未命名-1.jpg', '未命名-1.jpg', 894088, 'image/jpeg', '01a92126e7a3207e', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528520, 528503, 'logo.png', 'logo.png', 58882, 'image/png', 'b02d43b0e07adf5d', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528519, 528503, 'ESM_LOGO_W (1).jpg', 'ESM_LOGO_W (1).jpg', 116571, 'image/jpeg', '31e795d6d96921aa', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528518, 528503, '10914763_10153460513827067_5682727957006612431_o.jpg', '10914763_10153460513827067_5682727957006612431_o.jpg', 156291, 'image/jpeg', '1d8a7a106fd51900', '528574', 'w50h50,w300h300', 0, '2015-03-08 17:22:15', 1),
(528517, 528503, 'ESM_LOGO_W (1).jpg', 'ESM_LOGO_W (1).jpg', 116571, 'image/jpeg', '23a7eb83d0e25509', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528516, 528503, 'ESM_LOGO_W (1).jpg', 'ESM_LOGO_W (1).jpg', 116571, 'image/jpeg', '4ebef75c6931eac3', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528515, 528503, 'ESM_LOGO_W (1).jpg', 'ESM_LOGO_W (1).jpg', 116571, 'image/jpeg', '0854f5d5dd778eb4', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528514, 528503, '10914763_10153460513827067_5682727957006612431_o.jpg', '10914763_10153460513827067_5682727957006612431_o.jpg', 156291, 'image/jpeg', '66caf58f1125ea20', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528513, 528503, '10914763_10153460513827067_5682727957006612431_o.jpg', '10914763_10153460513827067_5682727957006612431_o.jpg', 156291, 'image/jpeg', '643bdf66bae7e18d', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528512, 528503, 'logo.png', 'logo.png', 58882, 'image/png', 'd14d22fe6ac57a32', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528511, 528503, '未命名-1.jpg', '未命名-1.jpg', 894088, 'image/jpeg', '06a7ad50af0965d7', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528510, 528503, 'ESM_LOGO_W (1).jpg', 'ESM_LOGO_W (1).jpg', 116571, 'image/jpeg', '3d7d344b76e84b27', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528509, 528503, 'logo.png', 'logo.png', 58882, 'image/png', 'a73d8add56c72e07', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528508, 528503, 'ESM_LOGO_W (1).jpg', 'ESM_LOGO_W (1).jpg', 116571, 'image/jpeg', 'cf93c2d4fd3f597f', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528507, 528503, 'logo.png', 'logo.png', 58882, 'image/png', '873be1b940852901', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528506, 528503, 'logo.png', 'logo.png', 58882, 'image/png', '200a4598dca49a16', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528505, 528503, '未命名-1.jpg', '未命名-1.jpg', 894088, 'image/jpeg', '4c7b70541fb13f36', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528504, 528503, '10914763_10153460513827067_5682727957006612431_o.jpg', '10914763_10153460513827067_5682727957006612431_o.jpg', 156291, 'image/jpeg', 'e4609f7818eb4189', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528503, 528503, 'ESM_LOGO_W (1).jpg', 'ESM_LOGO_W (1).jpg', 116571, 'image/jpeg', '9cbf2671dab77b4b', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528502, 528503, '10914763_10153460513827067_5682727957006612431_o.jpg', '10914763_10153460513827067_5682727957006612431_o.jpg', 156291, 'image/jpeg', '9b76b0031c8a249c', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528537, 528503, 'date.jpg', 'date.jpg', 1334867, 'image/jpeg', '640959cf8d89d1d0', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528538, 528503, '溫度圖 (1).jpg', '溫度圖 (1).jpg', 54523, 'image/jpeg', 'ce66da5f24739f3d', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528539, 528503, '4hammer5.png', '4hammer5.png', 13990, 'image/png', 'ed58a9eb603ef522', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528540, 528503, 'date.jpg', 'date.jpg', 1334867, 'image/jpeg', '137f0cfd55c2c81b', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528541, 528503, 'date.jpg', 'date.jpg', 1334867, 'image/jpeg', 'd3f4e9fde00bf56d', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528542, 528503, 'date.jpg', 'date.jpg', 1334867, 'image/jpeg', '8a8b510da71e257d', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528543, 528503, '溫度圖.jpg', '溫度圖.jpg', 54457, 'image/jpeg', '451e912d471d81cc', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528544, 528503, 'ESM_LOGO_W (1).jpg', 'ESM_LOGO_W (1).jpg', 116571, 'image/jpeg', 'e3ad3341562c9132', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', -1),
(528545, 528503, '10914763_10153460513827067_5682727957006612431_o.jpg', '10914763_10153460513827067_5682727957006612431_o.jpg', 156291, 'image/jpeg', '13e8558c05f32861', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', -1),
(528546, 528503, 'date.jpg', 'date.jpg', 1334867, 'image/jpeg', '58931005ee467b70', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528547, 528503, '名片3_4.jpg', '名片3_4.jpg', 450222, 'image/jpeg', '7577ec84ed5af664', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 0),
(528548, 528503, '名片3_5.jpg', '名片3_5.jpg', 466194, 'image/jpeg', 'c7b855570d28dba3', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528549, 528503, 'ppt.png', 'ppt.png', 1170859, 'image/png', '979c87ff7c6bb35a', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528550, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '1c5a5997d3f49f87', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528551, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '264d3296e6fac604', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528552, 528503, '廣告3_2.jpg', '廣告3_2.jpg', 461412, 'image/jpeg', '596d15ed767a1796', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528553, 528503, '廣告3_3.jpg', '廣告3_3.jpg', 450896, 'image/jpeg', 'a0e44e11686d7b01', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528554, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '4441308d2fb5fe8d', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528555, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', 'af0e0cbd37e755e6', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528556, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', 'dd0c7fd7467efffa', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528557, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '8f0b513e395fe50e', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528558, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', 'b248392a9c9e2b4c', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528559, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '3cc93bec6e114b97', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528560, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '645d7a34e0db9e49', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528561, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '29f0077af6446918', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528562, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '359bac99c78029f6', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528563, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '7277c8b362fb0b61', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528564, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', 'f78fc6e5a3d1ae4e', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528565, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '61dc646f961aa8dd', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528566, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', 'e792476ac88c193a', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528567, 528503, '廣告3-2.jpg', '廣告3-2.jpg', 453386, 'image/jpeg', '7107bd348cba6802', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528568, 528503, '廣告3_2.jpg', '廣告3_2.jpg', 461412, 'image/jpeg', '3ecf7d40826d9e32', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528569, 528503, '廣告3_2.jpg', '廣告3_2.jpg', 461412, 'image/jpeg', 'b0b4d97e6d89a83c', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528570, 528503, '廣告3_2.jpg', '廣告3_2.jpg', 461412, 'image/jpeg', 'c28665b2fe99abe2', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528571, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', 'a23090f76891f7d1', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528572, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '0dc71dfe3bd4e94e', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528573, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', 'ab877eeeb3444b54', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528574, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '0b05ba69df3f13b5', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528575, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '9b78f78c81beabf5', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528576, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '6552138d47a01101', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528577, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '35a662e00c7004fa', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528578, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', 'fb875f4013f08888', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528579, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '40fc045874d0796a', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528580, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '3bfa8c613d07c4e9', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 0),
(528581, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', 'ffe817d9cfedf39a', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528582, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '750cd7b72a06b6f8', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528583, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '3302001f624f56b0', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528584, 528503, '廣告3_1.jpg', '廣告3_1.jpg', 466408, 'image/jpeg', '1c995ca0a9ad129f', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528585, 528503, '廣告3-2.jpg', '廣告3-2.jpg', 453386, 'image/jpeg', '97bbbd6141dfee25', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528586, 528503, '廣告3-2.jpg', '廣告3-2.jpg', 453386, 'image/jpeg', 'ee9fbb964d85f287', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528587, 528503, '廣告3-2.jpg', '廣告3-2.jpg', 453386, 'image/jpeg', 'f99e1603a656af80', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528588, 528503, 't3.jpg', 't3.jpg', 2437473, 'image/jpeg', 'ee706a4fd325ca2d', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528589, 528503, 't6.jpg', 't6.jpg', 2753137, 'image/jpeg', '19256ec85327032e', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528590, 528503, 't6.jpg', 't6.jpg', 2753137, 'image/jpeg', '4dcbdb6a6185ce19', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528591, 528503, 't6.jpg', 't6.jpg', 2753137, 'image/jpeg', '26f0d4dfe26646b6', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528592, 528503, 't4.jpg', 't4.jpg', 2227849, 'image/jpeg', '46e4ee8fff266ac2', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528593, 528503, 't3.jpg', 't3.jpg', 2437473, 'image/jpeg', '06e2776f1aba33fa', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528594, 528503, 't5.jpg', 't5.jpg', 2174217, 'image/jpeg', '2a4645f0b98b8c53', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528595, 528503, 't5.jpg', 't5.jpg', 2174217, 'image/jpeg', '900240ce20f40334', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528596, 528503, 't2.jpg', 't2.jpg', 2621019, 'image/jpeg', '3012085838729d59', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528597, 528503, 't2.jpg', 't2.jpg', 2621019, 'image/jpeg', 'a224286c2c419164', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528598, 528503, 't2.jpg', 't2.jpg', 2621019, 'image/jpeg', '2c6d88e838538833', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', -1),
(528599, 528503, 't7.jpg', 't7.jpg', 2113665, 'image/jpeg', '8b827c40d6209cae', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528600, 528503, 't8.jpg', 't8.jpg', 1867309, 'image/jpeg', '3c2b643669904bce', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528601, 528503, '', '', 0, '', '43f5a56837abb120', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528602, 528503, 't4.jpg', 't4.jpg', 2227849, 'image/jpeg', 'f97ac2b03685d5ba', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528603, 528503, 't5.jpg', 't5.jpg', 2174217, 'image/jpeg', '5eac6c3c3b4aefcf', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528604, 528503, 't6.jpg', 't6.jpg', 2753137, 'image/jpeg', '52f37fff21f761b9', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528605, 528503, '', '', 0, '', 'bb25fcea5928b59a', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528606, 528503, 't2.jpg', 't2.jpg', 2621019, 'image/jpeg', '72a8dd9878c5bd85', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 0),
(528607, 528503, 't3.jpg', 't3.jpg', 2437473, 'image/jpeg', '34a67556aa4d9bd5', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 0),
(528608, 528503, '', '', 0, '', '6185f07e4051db76', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 0),
(528609, 528503, 't4.jpg', 't4.jpg', 2227849, 'image/jpeg', '4b3cf509c1d2aaa4', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 0),
(528610, 528503, 't5.jpg', 't5.jpg', 2174217, 'image/jpeg', '41e94ec79554e64e', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 0),
(528611, 528503, 't3.jpg', 't3.jpg', 2437473, 'image/jpeg', '315217e7d4a057b0', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', -1),
(528612, 528503, 't4.jpg', 't4.jpg', 2227849, 'image/jpeg', '0d84cf66262be939', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', -1),
(528613, 528503, 't8.jpg', 't8.jpg', 1867309, 'image/jpeg', '0b9a021dfd93abbb', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528614, 528503, 't4.jpg', 't4.jpg', 2227849, 'image/jpeg', '7eff0be39ca8a57b', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528615, 528503, 't3.jpg', 't3.jpg', 2437473, 'image/jpeg', 'a4235a1b08c4eb6c', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528616, 528503, 't1.jpg', 't1.jpg', 2723372, 'image/jpeg', '68bbef678bae9969', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528617, 528503, 't1.jpg', 't1.jpg', 2723372, 'image/jpeg', '64dc73c851fe79e9', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 0),
(528618, 528503, '未命名-1.jpg', '未命名-1.jpg', 219180, 'image/jpeg', '8a2b454192a81e96', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', -1),
(528619, 528503, '未命名-1.jpg', '未命名-1.jpg', 219180, 'image/jpeg', '909418a9eb0b7886', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', -1),
(528620, 528503, '未命名-1.jpg', '未命名-1.jpg', 219180, 'image/jpeg', '27a7bef79b129d5b', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', -1),
(528621, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '65db3a64f76301ac', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528622, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', 'ce6e3fe95d227b76', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528623, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', 'aa1c22f457ca6c54', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528624, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '6ffcdae81caeb9e5', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528625, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '29ab94dcafddbc60', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528626, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', '7bfeb9ad3bd96b97', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528627, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '26f716fbd9635e62', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528628, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', 'f783aaa2150ea33c', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528629, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', '64bdf8641bb04065', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528630, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '76a5d80d5505054a', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528631, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '8abe21132e1ebb0f', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528632, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', '6051951bfda3c708', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528633, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '588de87e79111937', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528634, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '026b86393a395610', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528635, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', '033c6c760a5908ca', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528636, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '07002b24c08c3078', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528637, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', 'f46723acd2b1be51', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528638, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', '5f1842a00a54e4c0', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528639, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '5b516fbb72b93f20', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528640, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', 'e2ddfa899a3ba193', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528641, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', '6c83792de2444e87', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528642, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '8241e64289027227', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528643, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '87f822d51cdfe6aa', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528644, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', '0e76ecda41346eb9', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528645, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '1b8c6cc6c4ab7977', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528646, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '24abd1946d20054f', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528647, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', 'aa80aa0e3b84184f', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528648, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '14cd6d9767314df5', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528649, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', 'ce56af17d88ad75c', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528650, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '2b6b1eecd7c97725', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528651, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', 'e794d00d6634f50f', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528652, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '47c94d1d27ca7683', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', -1),
(528653, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', 'cfb946bb9a190b50', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528654, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', '82d26525aaa827d0', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528655, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', '8e1a010a142c26b0', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528656, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', 'c6f61975af023796', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528657, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', 'f11174ebaaf7eb66', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', -1),
(528658, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '36f8e993a990d219', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528659, 528503, '番茄名片2.jpg', '番茄名片2.jpg', 521226, 'image/jpeg', '279191168a2bfecf', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528660, 528503, '番茄名片3.jpg', '番茄名片3.jpg', 483375, 'image/jpeg', 'f4ea8bde98ea8735', '', 'w50h50,w300h300,w600h600', 0, '0000-00-00 00:00:00', 1),
(528661, 528503, '番茄名片.jpg', '番茄名片.jpg', 523478, 'image/jpeg', '6781f71ed32769dc', '528574', 'w50h50,w300h300,w600h600', 0, '2015-03-09 00:35:29', 1),
(528662, 528503, '插進女生.jpg', '插進女生.jpg', 14275, 'image/jpeg', 'f97234b69dbe393d', '', 'w50h50,w300h300', 0, '0000-00-00 00:00:00', 1),
(528663, 528503, '', '', 0, '', 'fb2dbda8f15055f7', '', 'w50h50,w300h300', 0, '2015-03-06 02:42:05', -1),
(528664, 528503, '', '', 0, '', 'fb8b3979712b3246', '', 'w50h50,w300h300', 0, '2015-03-06 02:42:12', -1),
(528665, 528503, '', '', 0, '', '59b699cb9592a899', '', 'w50h50,w300h300', 0, '2015-03-06 02:43:10', -1),
(528666, 528503, 'fser32rfgg.jpg', 'fser32rfgg.jpg', 1566362, 'image/jpeg', '3b03632fa1b4a917', '', 'w50h50,w300h300', 0, '2015-03-06 16:46:04', 1),
(528667, 528503, 'terfv534.jpg', 'terfv534.jpg', 869374, 'image/jpeg', 'b3ddd6d6342fd135', '528574', 'w50h50,w300h300', 0, '2015-03-09 00:46:18', -1),
(528668, 528503, 'fser32rfgg.jpg', 'fser32rfgg.jpg', 1566362, 'image/jpeg', 'fc89b786d4058be9', '528574', 'w50h50,w300h300', 0, '2015-03-09 00:50:41', 1),
(528669, 528503, '名片示意圖.jpg', '名片示意圖.jpg', 1230134, 'image/jpeg', '826082e4c22666c5', '', 'w50h50,w300h300,w600h600', 0, '2015-03-14 16:03:09', 1),
(528670, 528503, '名片示意圖.jpg', '名片示意圖.jpg', 1230134, 'image/jpeg', '5ad2c7665b7903bc', '', 'w50h50,w300h300,w600h600', 0, '2015-03-14 16:51:31', 1),
(528671, 528503, '名片示意圖.jpg', '名片示意圖.jpg', 1230134, 'image/jpeg', '2b0fa2d2a20a7b47', '528573', 'w50h50,w300h300', 0, '2015-03-14 16:52:51', 1),
(528672, 528501, '名片示意圖.jpg', '名片示意圖.jpg', 1230134, 'image/jpeg', '09b7d9a8f2e3a16f', '528577', 'w50h50,w300h300', 0, '2015-03-15 19:23:30', 1),
(528673, 528501, 'Resolution_3_2014_Clair_et_Net (1).jpg', 'Resolution_3_2014_Clair_et_Net (1).jpg', 308293, 'image/jpeg', '1d53324f13777f7b', '', 'w50h50,w300h300,w600h600', 0, '2015-03-20 21:28:13', 1),
(528674, 528501, 'stock-photo-untitled-48523444.jpg', 'stock-photo-untitled-48523444.jpg', 50284, 'image/jpeg', '9a3415a0551387c0', '', 'w50h50,w300h300,w600h600', 0, '2015-03-20 21:28:34', 1),
(528675, 528501, '名片示意圖.jpg', '名片示意圖.jpg', 1230134, 'image/jpeg', 'c6e98c9d745369ec', '528533', 'w50h50,w300h300', 0, '2015-03-25 00:25:37', 1),
(528676, 528501, 'upload2.jpg', 'upload2.jpg', 989001, 'image/jpeg', 'bdacc7de2e855832', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 15:28:24', -1),
(528677, 528501, 'upload1.jpg', 'upload1.jpg', 229156, 'image/jpeg', '360301fb9260fd3f', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 15:28:24', -1),
(528678, 528501, 'dock-black-bamboo-grid-A3_645x645_85.jpg', 'dock-black-bamboo-grid-A3_645x645_85.jpg', 30616, 'image/jpeg', '97bef001c1c45031', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:09:51', 1),
(528679, 528501, 'dock-black-bamboo-grid-B1_645x645_85.jpg', 'dock-black-bamboo-grid-B1_645x645_85.jpg', 37049, 'image/jpeg', '5a77f3df1444c295', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:09:51', 1),
(528680, 528501, 'dock-brass-walnut-grid-A2_645x645_85.jpg', 'dock-brass-walnut-grid-A2_645x645_85.jpg', 29630, 'image/jpeg', '2685b91f4b9ccb1e', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:10:11', 1),
(528681, 528501, 'dock-brass-walnut-grid-B1_2_645x645_85.jpg', 'dock-brass-walnut-grid-B1_2_645x645_85.jpg', 33835, 'image/jpeg', 'c4474b4b1964c46d', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:10:11', 1),
(528682, 528501, 'dock-silver-bamboo-grid-A2_645x645_85.jpg', 'dock-silver-bamboo-grid-A2_645x645_85.jpg', 33879, 'image/jpeg', '7192e4a1e71d17e4', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:10:23', 1),
(528683, 528501, 'dock-silver-bamboo-grid-B1_645x645_85.jpg', 'dock-silver-bamboo-grid-B1_645x645_85.jpg', 37273, 'image/jpeg', '7bae0c3a23010437', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:10:23', 1),
(528684, 528501, 'dock-black-bamboo-grid-A3_645x645_85.jpg', 'dock-black-bamboo-grid-A3_645x645_85.jpg', 30616, 'image/jpeg', '07bbbae0185150d5', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:12:47', 1),
(528685, 528501, 'dock-black-bamboo-grid-B1_645x645_85.jpg', 'dock-black-bamboo-grid-B1_645x645_85.jpg', 37049, 'image/jpeg', '1f3ae82feeb2156c', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:12:47', 1),
(528686, 528501, 'dock-brass-walnut-grid-A2_645x645_85.jpg', 'dock-brass-walnut-grid-A2_645x645_85.jpg', 29630, 'image/jpeg', '37a9c43f7dd54a5f', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:12:58', 1),
(528687, 528501, 'dock-brass-walnut-grid-B1_2_645x645_85.jpg', 'dock-brass-walnut-grid-B1_2_645x645_85.jpg', 33835, 'image/jpeg', '04f08bc174eb025e', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:12:58', 1),
(528688, 528501, 'dock-silver-bamboo-grid-A2_645x645_85.jpg', 'dock-silver-bamboo-grid-A2_645x645_85.jpg', 33879, 'image/jpeg', '257487eb434bdba9', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:13:17', 1),
(528689, 528501, 'dock-silver-bamboo-grid-B1_645x645_85.jpg', 'dock-silver-bamboo-grid-B1_645x645_85.jpg', 37273, 'image/jpeg', '4ce4b78d72988dd1', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:13:17', 1),
(528690, 528501, 'dock-black-bamboo-grid-A3_645x645_85.jpg', 'dock-black-bamboo-grid-A3_645x645_85.jpg', 30616, 'image/jpeg', '6eda6ea859b7f683', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:42:59', 1),
(528691, 528501, 'dock-black-bamboo-grid-B1_645x645_85.jpg', 'dock-black-bamboo-grid-B1_645x645_85.jpg', 37049, 'image/jpeg', '0f31492764fde1db', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:42:59', 1),
(528692, 528501, 'dock-brass-walnut-grid-A2_645x645_85.jpg', 'dock-brass-walnut-grid-A2_645x645_85.jpg', 29630, 'image/jpeg', '13834daa67b4c602', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:43:19', 1),
(528693, 528501, 'dock-brass-walnut-grid-B1_2_645x645_85.jpg', 'dock-brass-walnut-grid-B1_2_645x645_85.jpg', 33835, 'image/jpeg', 'e59a237e402b6318', '', 'w50h50,w300h300,w600h600', 0, '2015-04-06 18:43:19', 1),
(528694, 528501, '3月.jpg', '3月.jpg', 3300313, 'image/jpeg', '8b24e33a847bc48c', '528586', 'w50h50,w300h300', 0, '2015-04-28 16:36:00', -1),
(528695, 528501, '5月課程-網站.jpg', '5月課程-網站.jpg', 1108874, 'image/jpeg', '73ce55c4fd7eb832', '528586', 'w50h50,w300h300', 0, '2015-04-28 16:37:43', -1),
(528696, 528501, '5月課程-網站.jpg', '5月課程-網站.jpg', 1108874, 'image/jpeg', 'aa3b86137b12a2c2', '528586', 'w50h50,w300h300', 0, '2015-04-28 16:40:39', -1),
(528697, 528501, '5月課程-網站.jpg', '5月課程-網站.jpg', 1108874, 'image/jpeg', '00f8873571343fa4', '528586', 'w50h50,w300h300', 0, '2015-04-28 16:41:21', -1),
(528698, 528501, 'index_04.gif', 'index_04.gif', 37319, 'image/gif', '5cd3ab31167b439b', '528586', 'w50h50,w300h300', 0, '2015-04-28 16:43:29', 1),
(528699, 528501, '3月.jpg', '3月.jpg', 3300313, 'image/jpeg', '591ace84f37c4b32', '528586', 'w50h50,w300h300', 0, '2015-04-28 16:43:22', -1),
(528700, 528501, '4月課程-網站.jpg', '4月課程-網站.jpg', 363975, 'image/jpeg', '2c6ca8aa22435f20', '528586', 'w50h50,w300h300', 0, '2015-04-30 16:58:29', 1),
(528701, 528501, '5月課程-網站.jpg', '5月課程-網站.jpg', 389665, 'image/jpeg', 'fd01de082df1ade0', '528586', 'w50h50,w300h300', 0, '2015-04-30 16:58:47', 1),
(528702, 528501, '右.jpg', '右.jpg', 150080, 'image/jpeg', 'fe5e149496b2c107', '528587', 'w50h50,w300h300', 0, '2015-04-30 17:08:43', 1),
(528703, 528501, '5月課程-網站.jpg', '5月課程-網站.jpg', 389665, 'image/jpeg', '9c0c2f7d2657476d', '528586', 'w50h50,w300h300', 0, '2015-04-30 17:10:52', 1),
(528704, 528501, 'ingredient1.jpg', 'ingredient1.jpg', 131838, 'image/jpeg', 'b5043f75a06ff104', '528588', 'w50h50,w300h300', 0, '2015-04-30 17:14:17', 1),
(528705, 528501, 'ingredient2.jpg', 'ingredient2.jpg', 81973, 'image/jpeg', 'a6df09f748a66ee0', '528588', 'w50h50,w300h300', 0, '2015-04-30 17:14:32', 1),
(528706, 528501, 'rose0.jpg', 'rose0.jpg', 85225, 'image/jpeg', '1795a732332d1fcb', '528588', 'w50h50,w300h300', 0, '2015-04-30 17:14:49', 1),
(528707, 528501, 'rose-1.jpg', 'rose-1.jpg', 88583, 'image/jpeg', '5fd21aa7b7b7623a', '528588', 'w50h50,w300h300', 0, '2015-04-30 17:15:07', 1),
(528708, 528501, 'series.jpg', 'series.jpg', 139425, 'image/jpeg', 'b38f331c20510603', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 17:28:03', -1),
(528709, 528501, 'series.jpg', 'series.jpg', 54817, 'image/jpeg', 'b871d333a4596228', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 17:31:03', -1),
(528710, 528501, 'series.jpg', 'series.jpg', 56215, 'image/jpeg', '27f48bfd9db90e98', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 17:33:44', 1),
(528711, 528501, 'qu.jpg', 'qu.jpg', 49678, 'image/jpeg', 'd30604bb12fdbaba', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 17:42:02', 1),
(528712, 528501, 'Quiches2.jpg', 'Quiches2.jpg', 505168, 'image/jpeg', '57039ada2c1549b9', '528589', 'w50h50,w300h300', 0, '2015-04-30 18:33:37', 1),
(528713, 528501, '11127845_10202730099974215_1201227091_n-2.jpg', '11127845_10202730099974215_1201227091_n-2.jpg', 117001, 'image/jpeg', 'd89342e6ed4067a4', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 17:49:56', 1),
(528714, 528501, 'Orange.jpg', 'Orange.jpg', 80626, 'image/jpeg', 'bd18f8ec51acdb68', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 17:50:39', -1),
(528715, 528501, 'berry.jpg', 'berry.jpg', 159242, 'image/jpeg', '7726cf4d1a15c03b', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 17:54:41', 1),
(528716, 528501, 'lin-3.jpg', 'lin-3.jpg', 284493, 'image/jpeg', 'e3f7efa7e6ec007d', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 17:56:00', 1),
(528717, 528501, 'DSC05938-1.jpg', 'DSC05938-1.jpg', 518415, 'image/jpeg', '2bba38692bcb40ed', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 18:00:48', 1),
(528718, 528501, 'hogh.jpg', 'hogh.jpg', 81451, 'image/jpeg', '3ffffd88fbc8aeb5', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 18:04:29', 1),
(528719, 528501, 'DSC04778-1.JPG', 'DSC04778-1.JPG', 107304, 'image/jpeg', '8d2d9ddddbf0ca4a', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 18:12:26', 1),
(528720, 528501, '20150422-11118508_10206452753501842_983609856_n.jpg', '20150422-11118508_10206452753501842_983609856_n.jpg', 87055, 'image/jpeg', '43696f0c390d212f', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 18:13:48', 1),
(528721, 528501, '20150422-11178554_10206452748141708_345386449_n.jpg', '20150422-11178554_10206452748141708_345386449_n.jpg', 231203, 'image/jpeg', '554d346df3c690ae', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 18:15:03', 1),
(528722, 528501, 'seafood.jpg', 'seafood.jpg', 258929, 'image/jpeg', 'bd0da594aa998e12', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 18:18:08', 1),
(528723, 528501, 'Quiches.jpg', 'Quiches.jpg', 910335, 'image/jpeg', '3bdb4bdc48236aad', '528590', 'w50h50,w300h300', 0, '2015-04-30 18:27:13', 1),
(528724, 528501, 'qu.jpg', 'qu.jpg', 49678, 'image/jpeg', '3319eb8927e86ebd', '', 'w50h50,w300h300,w600h600', 0, '2015-04-30 18:31:43', 1),
(528725, 528501, '1.jpg', '1.jpg', 305040, 'image/jpeg', '39bfd71c5895ec29', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:11:20', 1),
(528726, 528501, '2-2.jpg', '2-2.jpg', 957039, 'image/jpeg', '3ce77512404a8b13', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:12:45', 1),
(528727, 528501, '2-1.jpg', '2-1.jpg', 110320, 'image/jpeg', '922056f42c3d176a', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:13:49', 1),
(528728, 528501, '3.jpg', '3.jpg', 120000, 'image/jpeg', 'fada3ed5f2215bdb', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:15:06', 1),
(528729, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', 'f2a47f53bf733998', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:17:27', 1),
(528730, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', '4d6059eade4aeddd', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:18:10', 1),
(528731, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', 'ed142db2cc7b048a', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:19:08', 1),
(528732, 528501, '5.jpg', '5.jpg', 873784, 'image/jpeg', '8731f7ed5275ee17', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:19:56', 1),
(528733, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', '1358a3c304b3235f', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:20:37', 1),
(528734, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', '3cc15cb2039bce0f', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:20:53', 1),
(528735, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', '92bbc16ec8292640', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:21:19', 1),
(528736, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', '7dfaa99bd9d71157', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:22:12', 1),
(528737, 528501, '4-2.jpg', '4-2.jpg', 886587, 'image/jpeg', '05a37e12a208baeb', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:22:46', 1),
(528738, 528501, '6.jpg', '6.jpg', 715292, 'image/jpeg', '8e391dce5bb2c8d2', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:23:21', 1),
(528739, 528501, '4-2.jpg', '4-2.jpg', 886587, 'image/jpeg', '3439606cd8d0719e', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:24:00', 1),
(528740, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', '990686207ccb8f8c', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:25:04', 1),
(528741, 528501, '_MG_9388-1.JPG', '_MG_9388-1.JPG', 7693394, 'image/jpeg', '386f8711abaf261d', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:33:16', 1),
(528742, 528501, '_MG_9388-1.JPG', '_MG_9388-1.JPG', 7693394, 'image/jpeg', '5c19df183517d5b8', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:38:29', 1),
(528743, 528501, '_MG_9383.JPG', '_MG_9383.JPG', 5097611, 'image/jpeg', '8c8a6439c85b5311', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:39:10', 1),
(528744, 528501, '1.jpg', '1.jpg', 305040, 'image/jpeg', '6dbe3c329c283318', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:39:17', -1),
(528745, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', '9989096bda35fed8', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:40:26', -1),
(528746, 528501, '4-1 - 複製.jpg', '4-1 - 複製.jpg', 866412, 'image/jpeg', 'c787b29962a5cff4', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:42:27', -1),
(528747, 528501, '2-1.jpg', '2-1.jpg', 110320, 'image/jpeg', '69425d078fa24bbe', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:42:38', -1),
(528748, 528501, '2-2.jpg', '2-2.jpg', 957039, 'image/jpeg', 'd42f5bc587817463', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:43:25', -1),
(528749, 528501, '4-1 - 複製.jpg', '4-1 - 複製.jpg', 283111, 'image/jpeg', 'f724eda884082152', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:44:04', -1),
(528750, 528501, 'ttt.jpg', 'ttt.jpg', 283111, 'image/jpeg', '5d3617ff9b10e324', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:44:32', -1),
(528751, 528501, '4-1 - 複製.jpg', '4-1 - 複製.jpg', 52078, 'image/jpeg', '73478a1916c69770', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 15:45:25', -1),
(528752, 528501, '_MG_9388-1.JPG', '_MG_9388-1.JPG', 48719, 'image/jpeg', '7ebcc7a1f6e9de33', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 16:34:18', 1),
(528753, 528501, '4-1.jpg', '4-1.jpg', 1042788, 'image/jpeg', '05a4c3032475e838', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 16:45:24', 1),
(528754, 528501, '4-1.jpg', '4-1.jpg', 77724, 'image/jpeg', 'c8e1a3de19b3e133', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 16:45:45', 1),
(528755, 528501, '6.jpg', '6.jpg', 62274, 'image/jpeg', 'efdfd99f9c608dc9', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 16:48:06', 1),
(528756, 528501, '7.jpg', '7.jpg', 74918, 'image/jpeg', '0a78637096c4f114', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 16:50:55', 1),
(528757, 528501, '8.jpg', '8.jpg', 64487, 'image/jpeg', 'd537afdef151f445', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 16:52:25', 1),
(528758, 528501, '9.jpg', '9.jpg', 71108, 'image/jpeg', '83234f3e15d5c2d1', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 16:53:58', 1),
(528759, 528501, '10.jpg', '10.jpg', 66930, 'image/jpeg', '2161212a077e10ea', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 16:55:47', 1),
(528760, 528501, '01.jpg', '01.jpg', 72223, 'image/jpeg', '37f0f974bed952dd', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:00:27', 1),
(528761, 528501, '02.jpg', '02.jpg', 120841, 'image/jpeg', '82bbf8f708b22a96', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:02:35', 1),
(528762, 528501, '03.jpg', '03.jpg', 67500, 'image/jpeg', '83da12e3828f9310', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:04:02', 1),
(528763, 528501, 'high.jpg', 'high.jpg', 0, '', '88253e96ef4067cc', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:05:44', 1),
(528764, 528501, 'high.jpg', 'high.jpg', 62924, 'image/jpeg', 'fb707ee593fcfc2e', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:06:40', 1),
(528765, 528501, '05.jpg', '05.jpg', 123935, 'image/jpeg', '90b4597a59c3d849', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:08:33', 1),
(528766, 528501, '06.jpg', '06.jpg', 854684, 'image/jpeg', '767f89bf8f51799f', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:09:41', 1),
(528767, 528501, '_MG_9388-1.JPG', '_MG_9388-1.JPG', 48719, 'image/jpeg', '452f21147320bbc1', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:10:50', 1),
(528768, 528501, '08.jpg', '08.jpg', 91052, 'image/jpeg', '582cb4cb340d43ad', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:12:19', 1),
(528769, 528501, '09.jpg', '09.jpg', 50214, 'image/jpeg', 'd19469123da59dd5', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:14:09', 1),
(528770, 528501, 'high.jpg', 'high.jpg', 62924, 'image/jpeg', 'd8a6874c7102fa63', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:15:35', 1),
(528771, 528501, '11.jpg', '11.jpg', 73468, 'image/jpeg', '075db4c9465dec2d', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:30:23', 1),
(528772, 528501, '12.jpg', '12.jpg', 137428, 'image/jpeg', '8430663456f37e67', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:31:07', 1),
(528773, 528501, 'high.jpg', 'high.jpg', 62924, 'image/jpeg', '0a6723a08f9817f6', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:31:38', 1),
(528774, 528501, '14.jpg', '14.jpg', 81855, 'image/jpeg', 'fadc82131e484c87', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:32:37', 1),
(528775, 528501, 'high.jpg', 'high.jpg', 62924, 'image/jpeg', 'edf24a7c94ad4bf8', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:34:25', 1),
(528776, 528501, 'high.jpg', 'high.jpg', 62924, 'image/jpeg', 'aca2291c90b4ed45', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:35:02', 1),
(528777, 528501, 'high.jpg', 'high.jpg', 62924, 'image/jpeg', 'c761f9b3f1f5bed7', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:35:28', 1),
(528778, 528501, 'high.jpg', 'high.jpg', 62924, 'image/jpeg', 'a4fa0943816250d5', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:36:26', 1),
(528779, 528501, 'high.jpg', 'high.jpg', 62924, 'image/jpeg', '7fe8676d9e590c39', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:36:50', -1),
(528780, 528501, 'high.jpg', 'high.jpg', 62924, 'image/jpeg', '0dc13ce5a3b04990', '', 'w50h50,w300h300,w600h600', 0, '2015-05-05 17:37:15', 1),
(528781, 528501, '1.jpg', '1.jpg', 13419, 'image/jpeg', 'd2145d590e92c7d4', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 11:45:14', 1),
(528782, 528501, '1.jpg', '1.jpg', 13419, 'image/jpeg', '5b6cf0f2082ac866', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 11:47:36', 1),
(528783, 528501, '1.jpg', '1.jpg', 13419, 'image/jpeg', '5be9067756091137', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 11:49:24', 1),
(528784, 528501, '1.jpg', '1.jpg', 13419, 'image/jpeg', '2093affa026d1a52', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 11:50:16', 1),
(528785, 528501, '1.jpg', '1.jpg', 13419, 'image/jpeg', 'b181182241abb2dd', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 11:50:49', 1),
(528786, 528501, '1.jpg', '1.jpg', 13419, 'image/jpeg', '6ada6f556c1b12cb', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 11:53:23', 1),
(528787, 528501, '1.jpg', '1.jpg', 13419, 'image/jpeg', 'ed9a5b9e62adfc22', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 11:54:18', 1),
(528788, 528501, '1.jpg', '1.jpg', 13419, 'image/jpeg', 'c0c19d9f6c44f7a6', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 11:54:46', 1),
(528789, 528501, '1.jpg', '1.jpg', 13419, 'image/jpeg', 'd45278a0974f8074', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 11:55:08', 1),
(528790, 528501, '20130814_094744-1.jpg', '20130814_094744-1.jpg', 80473, 'image/jpeg', '6bb0cf8ce885ecf5', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 12:28:28', 1),
(528791, 528501, 'fraisier.JPG', 'fraisier.JPG', 123315, 'image/jpeg', 'd549e0ec7098c638', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 12:31:32', 1),
(528792, 528501, '8-1.JPG', '8-1.JPG', 58696, 'image/jpeg', '21935ee4381536db', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 12:39:56', 1),
(528793, 528501, '_MG_9388-1.JPG', '_MG_9388-1.JPG', 116786, 'image/jpeg', 'c75b7e753e1b3054', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 12:41:28', 1),
(528794, 528501, '20130814_133622-1.jpg', '20130814_133622-1.jpg', 84760, 'image/jpeg', '781f29e3fcd4f493', '', 'w50h50,w300h300,w600h600', 0, '2015-05-16 12:43:57', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_sessions`
--

CREATE TABLE IF NOT EXISTS `fs_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_sessions`
--

INSERT INTO `fs_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0fa0daabeee060108ef3bb69aa8ce6f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415425109, ''),
('16453d17b059ead7fd00f43fd96f8830', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415424383, ''),
('167e7c94e1003a6eafe7d6f70c71965a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415423735, ''),
('1cd7067f2b9a8a3033ecb1bd7a384a91', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415424502, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('26d0056fd79217d7b8dd9f378d8de467', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415418447, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('2ff895ab3c6a62feb8e74476d1d34ead', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415418437, ''),
('33698f973e134b4a782f377e91bf6195', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415423735, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('45716e1319882f30c5606ff27c6be37d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415425109, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('46f4b0f5c47343e3ab8a616e51c3672c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415424393, ''),
('55e646a97690beb453e88a715fe4d2d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415424383, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('590771e3cab6be5256d3cbf9a8ac3293', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415424393, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('6ace5af3e892b96994cb2b647c0a6347', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415418447, ''),
('77d4d6b7ff077b8125b5a316c970363e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415423746, ''),
('8b5c1d333c1afdc7b25cf0ea7292309c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415424393, ''),
('8d3d25eb6ccff5e7fb7a2fe35e868307', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415418759, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('95de76f8b685a68b0faed2012188397f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415422189, ''),
('98da793e9583144535a678d5dc39631e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415418787, ''),
('a3c32d62c96f5a2bcdee743350f93704', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415424502, ''),
('c4e8c1468c5506056b1e7e2e03bf077e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415418759, ''),
('c823e1199676f48fe3399c716932385f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415418743, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('cd28cb0c9a118af5f1018a625440e7a1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415425109, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('d773b4bc0f5e02b9d32a26741d758f12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415418743, ''),
('d78f4018f2e5fb1de83e92ee5ead8520', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415423746, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('fc8a59f602d2d5c2b02d6ee507f9e722', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415423068, ''),
('98dc9cc36a60877b782f6449c7c798a3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415876555, ''),
('58982ff38fe8add915fd1adbfd480cc6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415876555, 'a:1:{s:9:"user_data";s:0:"";}'),
('b7264337f9dec72e81acc371202698e1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1416018858, ''),
('817d581a82e8ee5b5e5411c81b28122b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1416018858, ''),
('f5fb459e3b956c9571f70b9df2cc38a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1416018858, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('899e022464798ad69c9c79e23205d157', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; MAMIJS; rv:11.0) like Gecko', 1416377353, ''),
('512b68e09b5531e405d594d56f7cd2c1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; MAMIJS; rv:11.0) like Gecko', 1416377353, ''),
('dae229332e984cace410a8a53b13daa0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; MAMIJS; rv:11.0) like Gecko', 1425103707, 'a:1:{s:3:"uid";s:6:"528501";}'),
('cfab14d6dbff271ec38d3aa1414804a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416385775, ''),
('a61b328b865836ebfa5706c54da017e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416385775, ''),
('2afaa1d7f5b751d4e8892e6cc0cc30de', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416385775, ''),
('2ca5ff6af8fddc48dea3383734aba7bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416385775, ''),
('d023566675b01d6a37f4292d6ab156ef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416385775, ''),
('f35698d9590450588d797fd34812cd62', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416385775, ''),
('15cceb1a7b9e423a7bb4aed2267f8a94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416385775, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('0d41ffff36533c41737ea2e57426e8aa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416557773, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('3e9e59417f30da1e20fc3fc283ec0318', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416560574, ''),
('b3502ef3a097378eda46f8208308dbd1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416560574, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('fa384b2322dad8cba6ebcd1adc5a15b9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416762412, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('c8db4c4791486904cbea19b284ef3764', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36', 1417010480, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('ee47e632c83db821989781d1ab138e55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36', 1417437246, ''),
('7ccffc0128ff1e82f109cabea1d75223', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36', 1417440278, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('0c3fe2a18dbceedca779ac49cba2b488', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36', 1417442659, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('a436896c85fce8f55b091ec498e71e3c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36', 1417691818, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('5008633a4d5ab058b36e1b2250b5ec9e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1418466483, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('a533936c065f355457c9b29bc0fb480a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1418574117, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('272d4fe5559370d5a7f12b786c526334', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1418712836, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('db06ee64119e0d4a7f399f6b6d44ecd5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1418788056, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('d7beea8a8018e2db6fe9184b3c5bf7d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1418832151, ''),
('f6f14138442ab183f8185ea6d4901814', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1418887752, ''),
('19f4d099f692d7a95312b23f597baf19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1418887752, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('8aa52e6136ebd770d5d748efe00f8c61', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419690683, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('0be965b6dac28aee06df2950c2ec7a56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419823651, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('69349035722651eb201a1d6d4d5067c0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419838323, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('364410134e9570a519dbafb4292b8e32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419908688, ''),
('e4e4f21d363e51fa032115a6e63d70f1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419908689, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('141ecf33016852fe8e7c5cfb450623e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1420125533, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('bc18a3f3a9f419b6797a1aaada18302a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1420514073, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('a75499287530aac56ab023b8eff1a52e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1420628887, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('575546c1971af1f2bbd1ca64105a1616', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1420632175, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('6455beb395357cf89f27621ba01514ee', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1420716040, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('cde4d1072ab56c37cd5e6f738dad4cb8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421086189, ''),
('a943853fe5d612400a12d57bc79ed14c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421127016, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('48b5e9b27bea80462f5f6f729448273f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421138001, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('fa59a9a2597eb2a489313863f9e51c8f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421138130, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('3de0c901317575de5f5b3f98c4b5590f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421159994, ''),
('b8a219684c624c0a648a0b9b501b4abf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421169250, ''),
('e503fc0a41a94fece1f670d44d47ed27', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421174789, ''),
('306c7e502325730545a56b9a9c8285b4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421175353, ''),
('9f89d46db234580da60d27849faf39cd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421176129, ''),
('8977dcccd35fdb9f1d6e6df23c6c8e1b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421270093, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('19e1d79873445fcba0d6f1280c11f055', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421396580, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('85ce07fef330bdb020424d0947789309', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1421420980, ''),
('4f9a471c51d4d743dff65f65f0925891', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 4.2.2; GT-I9505 Build/JDQ39) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.59 Mobi', 1421436881, ''),
('98b2e7c6e6c574048080d4403434de84', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1421436904, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('40a5c8b53a17fe393eba24061b2178ca', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1421682540, ''),
('fa6e17195fd966cda8a6773c1882f474', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1421687193, ''),
('1b6f02710ba520e190667cfd5a96422c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1421688333, ''),
('9bfa341c7a6c48eb6488a85fcd10d5fb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1421689888, ''),
('c75b13122e87c706642224598eef08f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1421694433, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('28e78eb1385c341f02b59acbcbc223a8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1421934209, ''),
('a5a330530b60c9cabd6dd286d893015f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1421994616, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('4caf69cbcbf135fa91a4344b71cb59d9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1422008558, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('fa998a02f162bb59ef55373f60fe51de', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1422092368, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('90435b9a756ef4b6c12e52ac7e403ed9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1422180459, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('1442394280ef2f2b0a3ced98de7020f0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1422243887, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('5de37dac3291eb46b06e7768178bdb13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36', 1422244594, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('b845f17512969ce136889fdaf6c4c2e5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.91 Safari/537.36', 1422247274, ''),
('c12f5121bf161a20864da4c67ffb7df7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.91 Safari/537.36', 1422247284, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('1fbe1d08d15efc90b1fa66bd81f292b7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.91 Safari/537.36', 1422269981, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('05f088f32f833d804b67deb459bf1739', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 1422605968, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('c8f8ee6fcd9eb66acadc8ca22d5f7c80', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 1422609634, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('f01ca3dcb114f900487206482b772e9e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 1422609877, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('bd756e3891ec5480e2a386807a17f02e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 1422642189, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('9cb2dd529c3f2891816758d827d0e4a4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 1422874389, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('aa80678f7e7e4751639368c4c88ea8f0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 1423031324, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('4ec105a8bcbc8ecf14eda980641a071a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36', 1423123987, ''),
('21cd2181100ce217d80e1d1f94de22dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.94 Safari/537.36', 1423126669, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('b26c8318e5ab897eae8b3c1118c284d9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423325923, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('7849fb71d0a2cc51200c0f36c439c17c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423372485, 'a:1:{s:9:"user_data";s:0:"";}'),
('b552576bcc7ee024d06aed833a7ee6d9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423453908, ''),
('c1a0bd1b9a9485d5bebf7f2ab09bec14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423457078, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('e27079a428af63b0a0dd398139f1e2b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423490544, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('08e0c26239a7a7ce05a1b1c512d172e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423544765, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('61ddea20f8e9f41f430adad9d2332bcf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423548394, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('66f02987fb066695e2d264b7b2e3c57a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423635639, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('2cc9d7ba5667474462db92a58c01d9c3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423648797, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('4f4b481cc161007cf64ec07fcdc634a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423658640, ''),
('e56ba988bacf86c6606b5f42aa031287', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423727786, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('c347921c96671bf94df065287907f271', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423740019, ''),
('6336803107be8f0a899ad5ec501e2006', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423745007, ''),
('04814696da4588ef0ffb46cc4aa82adf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423747439, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('7cbfc532afb26808aaa816a447bfc414', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423751903, ''),
('64dfe4443fa6f632a1bc16b8bf860e98', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423753162, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('01621011b54e6dc80e0a754f01803353', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423754290, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('3e7838296c5a1a8b6321433c5632ae19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423770801, ''),
('30eda8405cf6c66a5f457ce72c976283', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423802647, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('c8123186e695894d1242af3641fe121a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423816459, ''),
('719067b01aab58b6fecb36b4b1f908bd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1423821273, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('c48a776f6ba8f30ed4270dd51accc9b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1424206344, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('c955af9254999def0dc4a63a31b56b94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1424210127, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('a9a7c7f1d94eb5430d33448ad1f66172', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1424267875, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('eee766faffcc07333fb8ac9ab1c9f5d9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424438733, ''),
('b7ee4e41edc947abb75387a24e9e9d90', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424438733, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('9710c78ea71c090e8507a616e02d9708', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424594293, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('03a2a1945c0158150289b1b06e27e304', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424788136, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('c27c687d9278fff8ea33b80bee48b38e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424793132, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('646d0b7c91f19ae1b801863ec62bcd24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424842965, ''),
('9a8d3561dbf6abcbafed2cee9e38f7be', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424843179, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('10e4d5b22a165f7847ad533c48d612a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424890989, ''),
('f8b51f615f0a0f03af9b840663637bd8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424898931, ''),
('f44c646f0168aecbef4719feb7633ba4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424898945, ''),
('82afd40e7e9a26a5489368c7f57632fc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424898945, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('4fe6b402f702b106dec9e6a69c42cc02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424990811, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('76aef7f34752571dc3b7ed24ecae1565', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1424991058, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('577c0928277e9955f6267712f69a2330', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425017787, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('621244382356109a6530b73fe2d6496e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425018806, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('0f5d5df52dce80f0e9248128524427ca', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425105737, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('faff77415d9ffba507274a9b9ab923a9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425105943, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('3651db34edf4b3df04fb5885a9e2700e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425108571, 'a:1:{s:3:"uid";s:6:"528503";}'),
('13c70bc79daa8ef52257b003d42433b8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425108590, ''),
('79936404fd9bbad88f4730c0775b2220', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425264441, ''),
('f16fb530748606a36d810d8fb2f30010', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425266299, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('dd03e56aeed1ab9c6549d3ee6f3caf63', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425287403, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('f18148ab024ece3701517277d9be90c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425317396, ''),
('1041cbcc62723586e9fe9b11a55e9c9c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425317852, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('8ec9e7ceed928915d1613d9bd9859df3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425339054, ''),
('a42a37c2be7137e1293442edf1788e92', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425368921, ''),
('17e505dcbefcd38ecef5d8c4a5868c84', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425401819, ''),
('f2d5cb3b2a825155b667bb6b1923c5b3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425401819, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('3a11352307195cb3fbb3d339b8f0e240', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425463381, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('108a49a3c36812cb809e0412ea95c2dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425629482, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('7320624ee03f5933ce9b45df6bf40b9d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425836972, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('1737f4cc47da40147bc939d02a9f2da6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425843505, ''),
('86da5df0b3a95188647e1c37e39b2e12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425845035, ''),
('d2e9722a61b6cafb233da60ad28968d0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425881574, ''),
('d94b82a8f96a7d4342ef4e85fb08ae32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425889735, ''),
('77e515a9505cde07304889fa52178248', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425907260, ''),
('78739f1a4874fc7cc901dda0cd9fc8d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425918671, ''),
('436c3421d4dedc0539883e72d116fd54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425953597, ''),
('1a2c66ab5faebda22780719725d2606e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425953598, ''),
('a775a2d393d3bec25491719bc0453a76', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425954747, ''),
('a8cbf6d1194753cb0b847b782112daba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425957288, ''),
('8c4966b8943fe91c95d5e986f8c61304', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425957289, ''),
('f5e6ac5d0c529d4a46f892f09e471a0e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425957290, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('cff5db3038945a4043f7d2491129dfc0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425962179, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('b2949fd6838e533c5e7ad914607d2038', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425962862, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('731a686c36d0fcda806941f67192063c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425968023, ''),
('296b967b9fd658d445ff0b64e7fbaead', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425968410, ''),
('6035f85889ce6e473511db5228b91b9e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425968956, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('0e09504305d95c68e1486ba11826d94b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1425970265, ''),
('9533c51558b83e31072b1253de915281', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36', 1426155950, ''),
('54f394a29c2f9036b6a384d26b31cf52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36', 1426155950, ''),
('ffe97af230c092b3c5b96641b3647324', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36', 1426157068, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('c8a88dbc2f7ed4b06f73e0d682598749', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36', 1426307394, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('f6fd8f24b3b2a8a75140533aaca29819', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2331.3 Safari/537.36', 1426315784, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('9583098cef4590bb79daf216f7e8acda', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2331.3 Safari/537.36', 1426329983, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('6c9acbf73dcbbeefc56ff18272df362a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2331.3 Safari/537.36', 1426330188, 'a:1:{s:9:"user_data";s:0:"";}'),
('bc8a8a3764bf9d147a1863cd57ddf2f3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2331.3 Safari/537.36', 1426330192, ''),
('5faaaac0236d1c4ad39cfe61996b52c0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2331.3 Safari/537.36', 1426331449, ''),
('d7c329ee7bb78c8227bc046727344694', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2331.3 Safari/537.36', 1426331893, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('d73e8ac7729b33e156bd40148da595a1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2331.3 Safari/537.36', 1426332748, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('a6e5f6d58ccefcf85e5926e65a9f3480', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2331.4 Safari/537.36', 1426350625, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528503";}'),
('c3af1a4bf0e169e97fe5c125594e500c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.2 Safari/537.36', 1426400193, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('3ce5075791cbbb782db3d537ef6f7d6e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426430484, ''),
('85a4984d115705f9268c8ca76b72eab6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426441955, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('90043407160847f00e0d31cdd334b4db', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426445224, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('c92b5db0d1394159f4965cc8da29c8d9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426448617, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('d2a97acc973af95dcda52730693f99c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426448789, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('4d7622d6d07a5fffe11e2d23bd5e7679', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426450380, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('c3b1795d44ed956e990e20c7447548ab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426451106, 'a:1:{s:9:"user_data";s:0:"";}'),
('5f26bb0c68e4648a35a928d585a2a1a3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; MAMIJS; rv:11.0) like Gecko', 1426455974, 'a:1:{s:9:"user_data";s:0:"";}'),
('1a2f78d7d37d1349798d1f62064f9063', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426506133, ''),
('335560b127c4cc4e9e13bad1f64572d1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426528763, ''),
('95d5498b3498e5431bcc756df2ab1daa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426672535, ''),
('11360f28dccb3fee9e7e33649281c1da', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426691630, ''),
('296d271886ad76ba4d07be087bbb496d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426745998, ''),
('d95ed59fb1e117e858f46709bfc726bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426793718, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('653d7195d273183bea6e9bdc7943c488', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426831855, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('d703f2ed3d4cb7c0329aa687af336b8e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426843609, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('7e962baf8df7e66ce126e544067192e9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426955338, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('dd93ab829112c3d93da884e060a5b414', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426963690, ''),
('159d99f81de09eb569e4ffb535fff88f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2332.4 Safari/537.36', 1426963724, ''),
('95bcd06a62cdfb4fd6c99db003fa8df9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2338.2 Safari/537.36', 1427004126, 'a:1:{s:9:"user_data";s:0:"";}'),
('867a75c820119bbf80f32e1b148ffb98', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2338.2 Safari/537.36', 1427028646, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('e59d780b9279637cc2b29c128c1f79cc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2338.2 Safari/537.36', 1427095803, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('dd796e0383ad3300c930998c026cfbe7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2338.2 Safari/537.36', 1427095947, 'a:1:{s:9:"user_data";s:0:"";}'),
('fd9c31d7663c587af296cb66eaad67ce', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2338.2 Safari/537.36', 1427129913, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('186bbdddd8bbbe7dab1f41686394a335', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2338.2 Safari/537.36', 1427130096, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('36fbab3c3e73faac0516a809e06b184f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2338.2 Safari/537.36', 1427193968, ''),
('0228f7234ac4f2e1d327cd91c7f79c84', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2342.2 Safari/537.36', 1427195373, ''),
('113e4524d90fc1e54d3a1d8f12d4c5ce', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2342.2 Safari/537.36', 1427195374, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('e21a84c28a8b22ea7d6317758a145222', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2342.2 Safari/537.36', 1427226580, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528510";}'),
('8fbe7fad6fe0e0ab100b89ef743adc6c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2342.2 Safari/537.36', 1427282123, ''),
('7bde1e1ffc87c2831e8965ce849c3cec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2342.2 Safari/537.36', 1427282123, ''),
('b6b6f68ac431794e1ff877f3e21cb3d9', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2347.0 Safari/537.36', 1427553083, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('e975d459b9efd407c56b581121bd4861', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2347.0 Safari/537.36', 1427711651, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528511";}'),
('db1a21bcd4a79ead4bdb99f62a43219c', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2347.0 Safari/537.36', 1427715957, ''),
('30b07da3f3c3b6c5886627fb342e419c', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2352.0 Safari/537.36', 1428033011, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('112ae06488ebd429784a4871154dc52e', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2352.0 Safari/537.36', 1428047756, ''),
('f4b68eaf8a4e3b0819b541c7ebf4c3ca', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2355.0 Safari/537.36', 1428082425, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('46c4ee0088d6b65a29441e6087e63a94', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2355.0 Safari/537.36', 1428345399, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('f4dc494e18fe784ac80e77636ea0b3c1', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; MAMIJS; rv:11.0) like Gecko', 1428348153, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('f0121e6d92cef3e7b6dc2f3cce4230d7', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2355.0 Safari/537.36', 1428349401, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528511";}'),
('7504d967e9ab24ca8ed3713b1c2f5991', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2355.0 Safari/537.36', 1428433842, ''),
('621544c33391561ccb7483f07c36f37b', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2355.0 Safari/537.36', 1428445452, ''),
('f9f308927af776b341e589f3778f62ca', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2355.0 Safari/537.36', 1428477474, 'a:1:{s:9:"user_data";s:0:"";}'),
('ef035320db7571aaddd31301f95bf748', '39.10.170.34', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2355.0 Safari/537.36', 1428559061, ''),
('8c01feeb7dd494bd2dfa2d9d705f9b97', '1.161.158.170', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 1428566817, ''),
('b2cd8218a10b8f5ab36bfb6006a8e6d1', '1.161.158.170', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 1428567673, ''),
('ac3187e255d8344d8a383491011be19e', '1.34.140.164', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 1428567825, ''),
('2615a72698b3b9a70a54aaa58cb19f0a', '69.171.237.113', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1428568855, ''),
('a23ac752b3fc88a128a4922679648349', '92.90.17.115', 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_1_2 like Mac OS X) AppleWebKit/537.51.2 (KHTML, like Gecko) Mobile/11D257 [FBAN/Mes', 1428569954, ''),
('038a65080ec9c4fc4824011587c8060e', '101.8.217.14', 'Mozilla/5.0 (Linux; Android 4.3; C5502 Build/10.4.B.0.569) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mo', 1428577309, ''),
('48acc23805f6bc34dc2c3aeab915b248', '1.161.158.170', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; Trident/7.0; Touch; rv:11.0) like Gecko', 1428644048, ''),
('e0229d897a7c894361403b4868f8a349', '61.230.191.205', 'Mozilla/5.0 (iPad; CPU OS 8_1_2 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12B440 Safari/', 1429460049, ''),
('462622fa59e96469d886692675e8e563', '61.230.191.205', 'Mozilla/5.0 (iPad; CPU OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12F69 Safari/600', 1429460279, ''),
('a879806e71734a5fe27345ecf0497cb9', '61.230.191.205', 'Mozilla/5.0 (iPad; CPU OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12F69 Safari/600', 1429460547, ''),
('7e57e1d77e6364080f82f207f292da9a', '61.230.176.36', 'Mozilla/5.0 (iPad; CPU OS 8_1_2 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Mobile/12B440', 1429531054, '');
INSERT INTO `fs_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('5258194e90a45dd17f058e779b20af68', '1.161.158.92', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1429582204, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('592c0b7728839ba390ea2bc95b207a12', '1.161.150.88', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; Trident/7.0; rv:11.0) like Gecko', 1429665473, ''),
('d4b80f492671567d420f5ffa1cd04723', '101.11.24.29', 'Mozilla/5.0 (Linux; Android 4.4.2; SGH-N075T Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mo', 1429671024, ''),
('1f98392d9408edd943826af27840f6b4', '101.11.31.105', 'Mozilla/5.0 (iPad; CPU OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) CriOS/42.0.2311.47 Mobile/12F69 Saf', 1429671620, ''),
('0dccd976371071c091d97eaac49f1571', '101.11.31.105', 'Mozilla/5.0 (iPad; CPU OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12F69 Safari/600', 1434459037, ''),
('b35d047f7ca7638bd28c2aae3472989d', '59.115.119.47', 'Mozilla/5.0 (iPad; CPU OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Mobile/12F69', 1429789614, ''),
('25b40b3a21236eaccd49bd2aade3695b', '1.161.150.88', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2374.0 Safari/537.36', 1429846379, ''),
('ceedf1cfd70867670607f4c418a600f7', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1429863285, ''),
('94e44a639cf2dfb25c12aa42afc75489', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1429864273, ''),
('9d6244a375ef7270c70057fe78908c5a', '1.161.129.139', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; Trident/7.0; rv:11.0) like Gecko', 1430184876, ''),
('9040dfa82a32f165b2757e53a132fedb', '220.133.138.76', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2381.0 Safari/537.36', 1430204710, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('90a4efe167524450a3cc9a47ed2dbd85', '220.133.138.76', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430211399, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('e5564d8b9b6521d7b8701c101d0e12c9', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430231309, ''),
('8bfc841dbd1fe643c26c3cefacc25c65', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430231310, ''),
('eaff7d310c95a8a0c8fca7a4a2d43d28', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430233556, ''),
('99e3929c508078d7a1e3112f8751c11f', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430234447, ''),
('f1ce0ea88d4813a0b024bdeb0b69101a', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430234761, ''),
('d3bbddd16e0fb2e54b97692f8b2c098b', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430235726, ''),
('ac9abc07b45bf7185b070afe44217c5a', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430235909, ''),
('bfde70d1e045b3dbc0d867ded134a9c5', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430235978, ''),
('7a7eb7ee4d43604d94f83739845786ae', '39.13.159.47', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2384.4 Safari/537.36', 1430239481, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('39f0886a7a5fee40c255447bd82052aa', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430241429, ''),
('f5288b3991f660d792423c40c9ecfa7b', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430242530, ''),
('f8d8a19614ec846ed90229bbbeef64a6', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430242531, ''),
('aa4bb78ef012916fc6fcc77d214a6da7', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430242684, ''),
('2996fa3d12248882d65c6ec44e57a7fe', '39.13.159.47', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2384.4 Safari/537.36', 1430242769, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('22060d54e06c6dacf70fa3cf92513774', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430243126, ''),
('1a2e722571b8c67097aa4a3b9472cf4d', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430243367, ''),
('51243ec7ca3a7c9dc6fb5d4821a15af8', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430243611, ''),
('0d6e79b780df205ad9549ab5bfb3d6e4', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430244208, ''),
('090e340c4ea8333450014883df73d04d', '39.13.159.47', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2384.4 Safari/537.36', 1430244422, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('47436ac6e55fb3e2ffc1dde4f0a040b3', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430244553, ''),
('b1eb06fd533321728c49411198c62973', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430250708, ''),
('5a4b00d43efcbd9d62ab36d9b485fb34', '54.209.60.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 1430254023, ''),
('19b6a86bbba54557a1856e538ca93af8', '220.133.138.76', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2384.4 Safari/537.36', 1430277190, ''),
('0a2514b8ae8cf9f748c1219e5076e1ed', '66.220.146.27', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1430384129, ''),
('4d12c0572fc2a6290c7f0ae7e6759b57', '66.220.146.27', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1430384129, ''),
('8f17c02ebc7cec3f6c218afc92a33096', '173.252.100.114', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1430384648, ''),
('c87633c585003319b7ecd6b146fc2aa9', '123.192.26.236', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430451629, ''),
('3de9ce0e28d0eb66b0aafd3e04bf9600', '123.192.26.236', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430451713, ''),
('a8dada7c27a83ef057e484cd11937e15', '39.12.176.115', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2389.0 Safari/537.36', 1430679398, ''),
('0d9da0962f8df20900f796f70003843b', '220.133.138.76', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1430711781, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('fd01ff6ad619fda2f354dc913414595c', '1.161.156.99', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1430809431, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('6dcf1aad1dd26534f99ba113c4b99b36', '220.133.138.76', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2391.0 Safari/537.36', 1430817723, ''),
('aa0efa0e12c1881a351a8a1e82bb004e', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1430898433, ''),
('77d3a9f3c45c56fc896647a0fb8aa865', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1430898750, ''),
('509b09999bcc6a8e357d0e3e024438cc', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1430906201, ''),
('565ffb56af44fa0a92535d9014169f98', '220.133.138.76', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2393.0 Safari/537.36', 1431066021, ''),
('f810055807eb6b20253bdf56f9ff3005', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1431081048, ''),
('4e17f591173b50ee120fbcfe6217ffea', '111.240.185.168', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1431091721, ''),
('63173e2b42a0cd61027da308930408af', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1431420275, ''),
('52370746c3e31233800a45f72e6d3622', '39.9.137.191', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2398.0 Safari/537.36', 1431631292, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('93b7bc93f05cfdbf0ae5290faed845bd', '173.252.100.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1431649905, ''),
('9513bf86f98d728d8100c57eac0bff90', '220.133.154.64', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/600.3.18 (KHTML, like Gecko) Version/8.0.3 Safari/600.3.18', 1431690762, ''),
('ca1854185c57abebb6395be1026f4bd2', '39.9.137.191', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2402.0 Safari/537.36', 1431720963, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('6a2eaaf29eb3d1d174123b8dc496b2af', '1.161.140.145', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1431746222, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('9129c3d8e5c65c37f52b14e2ede7d4d7', '66.220.146.22', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1431746303, ''),
('9f26076789c7d903d5145227aead4b50', '66.220.146.22', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1431746304, ''),
('c769fbc73911940d0c4defbb7acd90f6', '1.161.140.145', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1431755767, ''),
('42886b49a110d84dfc83ba89f909e702', '220.136.48.50', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2402.0 Safari/537.36', 1432107008, ''),
('70423aa865123de6e7184034597c924e', '1.161.158.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; MAARJS; rv:11.0) like Gecko', 1432191923, ''),
('88ef4577a93dd01905f00a4c45a2abc6', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433294809, ''),
('c6be76fe36feaa359ce23c6d9f123a65', '110.30.4.86', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1433768662, ''),
('9a6d420ac0e434a093bf620716c8779f', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433917589, ''),
('26885a9191d822067fbd0ab3a0bd55a7', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433919710, ''),
('d8fcbc1bf8d1ab4c6bc0a95ed9dda308', '220.133.138.76', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433920734, ''),
('0daf81b35c4701e2169c2ca8c56e474d', '39.8.179.173', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.124 Safari/537.36', 1434833154, ''),
('3a81dbdf4f0c12a957e7825da2b0db79', '39.8.143.87', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.124 Safari/537.36', 1434906384, ''),
('2e59a12cb38a42c51a549d2af486057d', '27.247.205.135', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36', 1435513662, ''),
('ee7ab430bc5798faccbd90f90b63a812', '110.26.186.234', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36', 1436761472, ''),
('e70dd563e27765921e6a28308be4d163', '39.12.58.88', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.134 Safari/537.36', 1437913243, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('aaa771d9f82a81c2bc7e77121afde968', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958168, ''),
('31a16e659cc87fd495c0335764aca3dc', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958219, ''),
('1fb106958f7596c6f134c60ef846a7ea', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958232, ''),
('edfc3ba9b1baaace1123d8a3307d7fc2', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958245, ''),
('0a60f9ca9df2fe81c1fdcfe3ebe340a5', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958259, ''),
('80765e5345bde1d5d2ad2235bbf9cee5', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958275, ''),
('e2fad704c3fb84e8cbd0d2c425ca3681', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958305, ''),
('3d8071d4b187c58f3e985e9f2ac978cf', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958334, ''),
('d902762e6d5db61b9c47d4a3bb6a7372', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958363, ''),
('5c3e16b0d87285fabe5b3e4b424e6708', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958392, ''),
('132fed77b55b0c65e8299908e86e9834', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958422, ''),
('daca07590a4a9706f0bf3c2c5953b517', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958454, ''),
('b5d3609b8e155ff5e10ae4caa839dd54', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958487, ''),
('1c8cabaa8826edbff41ff21e22531380', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958519, ''),
('ef0c25df897b1dfe4c4d95d49e99e5ae', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958520, ''),
('616428b2735f65d90636fc769eb96576', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958529, ''),
('a456c3457e82c2609ec1d3215fdb4396', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958542, ''),
('578827329e2794da4be0c0188b655217', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958555, ''),
('e18d6ebbadfcb836fb12331b0c822b36', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958569, ''),
('e958efd53504e62e3f25372e39725fa9', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958582, ''),
('d375b14cbce9425fa01caff6dde32f42', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958595, ''),
('bf9cf847485bd6ea08880f183365d2f4', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958608, ''),
('6186131a310e6b01949e1daa83e02f69', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958621, ''),
('b5d5139b7f7f259ece0263d6e8b17000', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958634, ''),
('07e7dacb9c1a628e311c65c31d600213', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958647, ''),
('b217b99a05cf0e6a30edb1d7a2ee46aa', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958660, ''),
('b987aa85c54df742d7698b0b3b191154', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958674, ''),
('64e3324f4b0851bbaa1587496de441a1', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958687, ''),
('a58525c606c380b9ca259b0aadf8f9bb', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958700, ''),
('2224cc956260525c766ef4c0dd8f4104', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958713, ''),
('21cb1d216f71821fec4a9f4acee59177', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958726, ''),
('cf942bea44a17d3638a2ed0bc885502b', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958739, ''),
('ac7f3d2b66ddcd1e85cedb3502d14352', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958753, ''),
('d21c3aeac667799a16083190c1b661cd', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958766, ''),
('4e5cf19a22eedc8b031020e5705b9023', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958781, ''),
('c13f14aa1b2e745b694f394d7b9fa07b', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1437958797, ''),
('948acd36fe086244c53928cc997450ce', '60.251.127.26', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.107 Safari/537.36', 1437984861, ''),
('464477797c315394ff15c19026977d23', '115.43.42.7', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.107 Safari/537.36', 1438012677, ''),
('b49cf1f79506f37d9f181ed2c62bdc1d', '66.249.73.140', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e', 1438092415, ''),
('10fe68ff8c3bf98004cbb009845fb690', '66.249.73.132', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e', 1438101890, ''),
('f76f8fde2766d231f17a1a6e59dccf22', '66.249.73.132', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e', 1438106608, ''),
('f2cec1d0ae3f43887e00de25202a9eca', '66.249.73.140', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e', 1438108965, ''),
('b5a478fdd1762328fd2e67607d1dbf82', '27.245.172.133', 'Mozilla/5.0 (Linux; Android 4.4.4; D6653 Build/23.0.1.A.5.77) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.93', 1438126006, ''),
('7ddc8fd94d964a14b81f3b1088299bd7', '61.219.36.196', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36', 1438153819, ''),
('c5772525dd8e3f91d3855bdb60115de3', '223.137.239.230', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.107 Safari/537.3', 1438177615, ''),
('1f4f551ca6e091a495142561f67b1129', '114.32.167.235', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.107 Safari/537.36', 1438222289, ''),
('c926569412badcec663dea45b4b158a5', '118.163.134.243', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36', 1438243788, ''),
('805e2ebfbf376c8550f05334edd8f365', '220.128.101.65', 'Mozilla/4.0 (compatible; Win32; WinHttp.WinHttpRequest.5)', 1438246605, ''),
('b3e7d4851333a87e537705d13c4bc7e5', '220.128.101.65', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0', 1438246605, ''),
('71b9a15b2c43d750337712273cc32ccc', '66.249.82.139', 'Mozilla/5.0 (Linux; Android 4.4.2; LG-D802 Build/KOT49I.D80220c) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357', 1438299742, ''),
('8a7291e84bea75a93508b0feb5f0ee2f', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438305891, ''),
('a5cf63fca39173e1062dc61b6bdfb780', '111.240.128.10', 'Mozilla/5.0 (Linux; Android 4.4.2; A3-A20 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.93 Safar', 1438315930, ''),
('ee435cdd7dc7ae14da052b57a84f9b7a', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438324078, ''),
('9d4290b8abe45f327915ac9df8fffcce', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438328625, ''),
('a3b1b19a58f18e626d21b3d2fd6ae53a', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438333173, ''),
('e8b847140ecc93a0de7cec2b7fbeeea3', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438337719, ''),
('f7e5a24482f18ceec59118450e5ae4e6', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438342266, ''),
('90ca1288f18c734c74152dec2daca6f9', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438346813, ''),
('2d629f84ae6c52a5dec6a32159a22f59', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438351361, ''),
('21bab10c10249896e9cfde2ed9d596f1', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438355907, ''),
('e84c08f612abba16d3475da417da3977', '208.107.41.62', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438357057, ''),
('ccfa9eb77e7f7ebbf60deccd11b23351', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438360455, ''),
('ef5311ca591eceed25443cabc56bba24', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438365009, ''),
('fbd2f25eba0f9965eda9d69150da7220', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438375416, ''),
('67b11669d5391024c56853054cf42d31', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438375482, ''),
('c30c027c97cd6dd9d15cf4412708e6a8', '66.249.73.140', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438375546, ''),
('dbf3c350d1846238c21de540d92bf0c5', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438375623, ''),
('5f2d89610d03d27a778bc2f7f75d9960', '66.249.73.148', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438375986, ''),
('de901e14d3002770f13101af4bbd3a5d', '66.249.73.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438380533, ''),
('bd21bc0826f222cc905409ee1ac3ddf1', '66.249.79.195', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438385081, ''),
('cee1de77cefdd964a91ca768f27f420c', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438389627, ''),
('1afd5fe8b22efb91a39d24ce978ae4ac', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438403269, ''),
('36d07ebb32ce147afbfe421e861c9b9c', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438407815, ''),
('39289bc7e80deec99bba8b5abbc89b3f', '66.249.79.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438412362, ''),
('ce59413854b559947cc60d6d37d51e8b', '66.249.79.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438416910, ''),
('5b219f5b57a7e7b833cdf8fed9199f8a', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438421456, ''),
('fefcafaa613f6bd45b46c0d2f81d2284', '66.249.79.195', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438426003, ''),
('6489cdf23e3e460ec8a5ffc069fd7793', '66.249.79.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438430551, ''),
('2da3e737db32bd3faaf91a26d414900e', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438435097, ''),
('696b2b3f036aa1a0df7dc2b7e54c1779', '66.249.79.195', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438439927, ''),
('c3f08569bed2c54f1aab46f80bcafdc8', '66.249.79.195', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438445486, ''),
('e4d182156f6766f262e06ebc819af381', '66.249.79.195', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438449500, ''),
('345f6e4dfa1a7222efc048bd9422ebe2', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438457833, ''),
('255b5acb74283e04149f532523892580', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438466927, ''),
('9f45b1547647c27a69a2350d85fda4ed', '66.249.79.195', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438471474, ''),
('9d6a8bd7b94e1f907e376caf45d36320', '66.249.79.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438476022, ''),
('ff5a85603e5eb174db4734eb0d3f3a79', '66.249.79.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438480568, ''),
('ca3cdd9951cd26b6f71c1fb3f68bb3cd', '66.249.79.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1438515627, ''),
('3691e6220f378467f21088be8c490806', '101.11.4.132', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.107 Safari/537.36', 1438576066, ''),
('ed5e3d45ce38b9f22acc8e60a0ab6b5e', '58.115.72.251', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36', 1438617346, ''),
('56b44b83c0e061a7dd199abf9d766b8e', '1.171.36.53', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1438624283, ''),
('4c7d1e078b7628111bb8704ece48d70a', '36.231.107.6', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36', 1438658719, ''),
('1534342989ef5e3a2144b618d0a51544', '69.171.230.115', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1438658783, ''),
('0f5fce35711041e010119a7e5223f0e6', '140.112.238.118', 'Mozilla/5.0 (Linux; Android 5.0.2; C6602 Build/10.6.A.0.454) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.133', 1438661380, ''),
('a710850643412fa2bfe59d07f3012652', '8.28.16.254', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 1.1.4322; MS-RTC LM 8; .NET ', 1438661404, ''),
('9b3d9c824e9877fef1e266ee88e30198', '199.116.169.254', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 1.1.4322; MS-RTC LM 8; .NET ', 1438661415, ''),
('b9db88006f705c515aba56e07eda433d', '150.70.173.57', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)', 1438661425, ''),
('fe3cb4377a41e4071a3204bac0e57928', '1.162.58.109', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0', 1438673290, ''),
('5e71a77deff157a6d6d56251cb7d4644', '66.220.158.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1438673291, ''),
('3c1f869855fd365285abe68e7f4a6025', '1.162.58.109', 'Mozilla/5.0 (X11; Linux x86_64; rv:10.0) Gecko/20150101 Firefox/20.0 (Chrome)', 1438673293, ''),
('534d1f47726ce8f34c89cb789988e8f1', '1.162.58.109', 'Mozilla/5.0 (X11; Linux x86_64; rv:10.0) Gecko/20150101 Firefox/20.0 (Chrome)', 1438673325, ''),
('609dba3bf348a67c8105f9f52a06e8bc', '1.162.58.109', 'Mozilla/5.0 (X11; Linux x86_64; rv:10.0) Gecko/20150101 Firefox/20.0 (Chrome)', 1438673377, ''),
('b97b89ef9407c8e075e77c66a51c0b7a', '1.162.58.109', 'Mozilla/5.0 (X11; Linux x86_64; rv:10.0) Gecko/20150101 Firefox/20.0 (Chrome)', 1438673398, ''),
('3ee7e49f4f95252bac8fe5b0cc3e03d9', '1.162.58.109', 'Mozilla/5.0 (X11; Linux x86_64; rv:10.0) Gecko/20150101 Firefox/20.0 (Chrome)', 1438673461, ''),
('122a1a8f4d14144f2393b3d75c519d89', '1.162.58.109', 'Mozilla/5.0 (X11; Linux x86_64; rv:10.0) Gecko/20150101 Firefox/20.0 (Chrome)', 1438673488, ''),
('0caee997a8cebbbdbee0f6a531d2e147', '111.243.205.145', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36', 1438706196, ''),
('5586290e2b0de984a9d198aa7d98a1f7', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720169, ''),
('b918cae4f9e2ce728338dc798601b588', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720179, ''),
('d2bdd5e1b77cf46fca982564528a9f6e', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720188, ''),
('c30b3de56d6a269f41d5f1bcea3e4c0f', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720196, ''),
('dfafbaddd772f8180ce3cf0e69591171', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720207, ''),
('1f93d876e49600fb915604cd665b8e12', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720217, ''),
('2b75be9f5ff2777b31380b4f42521c9c', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720226, ''),
('7be3296a97073bd01aba6aa4d5fca095', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720231, ''),
('33ded6b7a4f50ea25eb19a7ea95fdc15', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720242, ''),
('236be120882f3e99fe4fa9bd6a98b3f3', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720248, ''),
('5b77e8fe82c88e84e47ebacdbce80684', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720263, ''),
('db1f3e579998898b35f3e7da6014a7fc', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720269, ''),
('ccd6ff9707b8b607742779b2a238f287', '212.83.177.193', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1438720280, ''),
('4acbcab063dff2df0aa9488bc44aeffb', '36.224.179.60', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/600.7.12 (KHTML, like Gecko) Version/8.0.7 Safari/600.7.12', 1438762111, ''),
('f7e33a5048f6acf088dba92e3fd3891a', '36.226.186.81', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36', 1438763558, ''),
('3204f77902678aa0c107e313b95fe075', '24.52.208.253', 'Mozilla/5.0 (iPad; CPU OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12F69 Safari/600', 1438826547, ''),
('c66f01640138721946a1043e8d2b592b', '8.28.16.254', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 1.1.4322; MS-RTC LM 8; .NET ', 1438837772, ''),
('021fcf6c0a98f7dcce262ca8450c5750', '219.87.140.250', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36', 1438852533, ''),
('82477b3c12772705d549eec6a76d2bd5', '59.127.87.23', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36', 1438945395, ''),
('0a214d61a98e82d58a72edd6c33c88ac', '223.143.55.254', 'Mozilla/5.0 (iPhone; CPU iPhone OS 8_2 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12D508 ', 1438966820, ''),
('a7b8b58f541c20c2f73025b8b5406a6c', '1.163.140.27', 'Mozilla/5.0 (Linux; Android 5.0.2; HTC One 801e Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/', 1439031500, ''),
('31e04ad40b00e60a15287097c4eb35e0', '115.43.51.54', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/600.6.3 (KHTML, like Gecko) Version/8.0.6 Safari/600.6.3', 1439041944, ''),
('567e3f886ff33930d7d5449cd7aa0877', '223.142.205.205', 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Mobile/11A501 Safari Li', 1439044722, ''),
('a1ef047f9cc7ed4a525cd89b1e9babd3', '115.43.51.54', 'Mozilla/5.0 (iPhone; CPU iPhone OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Mobile/12F70 Safari Line/5', 1439044752, ''),
('9c4173672eca083eb69a946036e4d104', '118.171.141.149', 'Mozilla/5.0 (iPhone; CPU iPhone OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Mobile/12F70 Safari Line/5', 1439048647, ''),
('20e30c1280fc2ba8b08f6aa784972010', '118.171.141.149', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36', 1439050810, ''),
('d89dff8f8b8e888b446a579b05e552ec', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439075610, ''),
('e5bfc402f7d560d1cff6942fb3021c85', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439075613, ''),
('e0a85bc19b25cb65d917460dcc795b06', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112490, ''),
('264eda5935a7cfd9d45e656eaa78390f', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112493, ''),
('ba4f6b75e2f3c9af5880a6055a1af61c', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112495, ''),
('af64e2799ffcb8618696ed5e83e48e88', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112498, ''),
('02414ad439a8df924f9c2a0243e6392d', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112502, ''),
('d4d999a0c3d8e266427a0e75cebdef93', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112506, ''),
('cadf11b04f5634d582cdaa2c5b719469', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112512, ''),
('f87979792473780609a036b326d7b011', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112516, ''),
('60290715178d9b379923f99a682f7edf', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112519, ''),
('c4cecde7e9ee6508f6a245d2ca1608c8', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112523, ''),
('89c0ab1ce371219d02b6fa13da13eaae', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112526, ''),
('364d56395b87bb7ef2bb05f63740718d', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112531, ''),
('19c31c7a6d424106fd6ecb9b874e0a4e', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112536, ''),
('b182a303a457486e68974ec58d64ff86', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112543, ''),
('ca107b0ba935e9eabc85f1b2b5b110d9', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112547, ''),
('fd1ea4c622a2d1b8d4bb7fbfc73f3e27', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112556, ''),
('d59d2fc79324da844e7aedd8f09abd19', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112561, ''),
('86150354fff6b1a2311ad515c2c2199b', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112566, ''),
('605e33ad614a64c80e4617bc127b348b', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112570, ''),
('b562af73f9d7c7fd7cb4c77d99d7930c', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112576, ''),
('3faf599361211b3c33e20c8e4da4f272', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112580, ''),
('42b73142c63d627542e365700bb3679a', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112583, ''),
('a040a9a1dc0fcca396ccf4c13a26533f', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112593, ''),
('e6b4951138837bc77cf78a3a0fcd167c', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112603, ''),
('8e1d1d85787996b7950514b06a884f6b', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112606, ''),
('7046a0adf9d17e2b5729ebe3dec16c47', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112608, ''),
('07235957bf710efb0ff12ee8e721a5b0', '209.126.107.104', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439112613, ''),
('de21117318c00816fa7bd1c334459cf0', '122.116.227.220', 'Mozilla/5.0 (iPad; CPU OS 8_2 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12D508 Safari/60', 1439137129, ''),
('13788e63bd8e98f0a48ecb175ff67058', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1439158516, ''),
('3c41c7fe09df3805a215c1abcc19942d', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1439158839, ''),
('27208df5805b6d0b9bd3b5d251f5db71', '66.249.79.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1439158889, ''),
('e19aab1df7192e83cdb7caf258c8af36', '66.249.79.195', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1439158948, ''),
('118a9909cad2314e00711de12d5a6ba3', '66.249.79.195', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1439159006, ''),
('4102f24c01543f0cf58b2b93dcb11e2a', '66.249.79.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1439159075, ''),
('2cf675ed963da6d8386a89561eefe982', '66.249.79.219', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1439159138, ''),
('9cd7168c0efa62734d9dd1942902dec8', '66.249.79.195', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1439159139, ''),
('78ffd00b92fedd8620200331cade2fde', '61.62.85.183', 'Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko', 1439168310, ''),
('0611f1fe5f87cc0ef05499c9dc249823', '220.228.56.37', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1439198721, ''),
('1a7221fb493672bcedb4f0c22cd7ee63', '78.94.83.125', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439231428, ''),
('eee63ebce12b26202674890f6e78d878', '78.94.83.125', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439231430, ''),
('22d59e61a6d0d2af02c852c865705f33', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36', 1439276886, 'a:2:{s:9:"user_data";s:0:"";s:3:"uid";s:6:"528501";}'),
('2c4bb3ce6f1a6d77f844eeaf603ebd3f', '114.44.7.150', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36', 1439279711, ''),
('fafa13f06ea4ae23f2dc8c687f6f4a2a', '114.24.156.176', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/600.7.12 (KHTML, like Gecko) Version/8.0.7 Safari/600.7.12', 1439282001, ''),
('8d4824e50593732baf6e82a2fb187f98', '1.161.145.208', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36', 1439308926, ''),
('490bc9e07d7d2eef09b96e1c305044b6', '36.239.235.168', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1439349848, ''),
('c9b2eb291caa3882a8972cdf57abf469', '38.102.49.24', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36', 1439389110, ''),
('e58458e101ebff2d71f454e492bbbde2', '83.218.232.238', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439391380, ''),
('3eeb243138cfe1770066e442994f5098', '83.218.232.238', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439391384, ''),
('9c4cd3b2e5c2d27c528fe741b347337b', '83.218.232.238', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439391401, ''),
('8c1189cf864cbb8fb77d11d8e440b9e7', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445193, ''),
('e1632fc93800558ddfe19322422184db', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445197, ''),
('db7a1fe6130cc541fdbd11ff057ee8f2', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445201, ''),
('8e9edab6489c0511296dea84fa451a3f', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445205, ''),
('c2fe20904a67b35e502a6a77976642b6', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445210, ''),
('dbd3a96f38ffd98cafdd553d1975ad2d', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445214, ''),
('8a16a3a773864b62b0b084b359a3bfd1', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445219, ''),
('265f80a02ebb3c7c64933330821e5212', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445225, ''),
('8a33eba81e3bd96f4cd3f9da08f827c0', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445228, ''),
('8d649f849ca7dae73cebdf9e2a141b16', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445234, ''),
('e8548a3c7b38e949c7008d42bca07a5c', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445239, ''),
('9efe9454765393b7bba1a2719e943a72', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445244, ''),
('14d0ddf986584c37fea6116824a0bbaa', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445251, ''),
('315e18d0a8e22c12007b4bfde581333c', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445254, ''),
('897754aeb6c63c1eabfd8834070b4f48', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445265, ''),
('2c3f60a937bdd7a876487f9d5bc40c57', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445269, ''),
('c23ab8f9972e57b5692776811460dd86', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445273, ''),
('57688b4f523007dca110a73102089c2e', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445276, ''),
('2718413a5f8a09dd421312cbbeb6f176', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445283, ''),
('c3afa9cc410fe77d44b23574d4a02ce4', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445285, ''),
('8f95d49a3c10c521dda483274199fa18', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445288, ''),
('96f0d847db23b80ccba9211a742187e5', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445291, ''),
('2974152fa1b9853f0c52a428333414a2', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445294, ''),
('14c882c039fe65cf37b57dccf94c3630', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445297, ''),
('192d115298908cfedf3a4ff0fa6469bb', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445301, ''),
('c99999b7f5ed3f1a2f67c1eb05271a65', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445308, ''),
('296ff45ab960e251c6b7069b4854f60d', '198.100.144.83', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)', 1439445316, '');

-- --------------------------------------------------------

--
-- 資料表結構 `fs_setting`
--

CREATE TABLE IF NOT EXISTS `fs_setting` (
  `keyword` char(32) NOT NULL,
  `value` text NOT NULL,
  `modelname` char(32) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_setting`
--

INSERT INTO `fs_setting` (`keyword`, `value`, `modelname`, `status`) VALUES
('website_name', '瘋沃科技', '', 1),
('website_logo', 'app/img/logo.png', '', 1),
('website_email', 'service@fanswoo.com', '', 1),
('website_metatag', '網頁設計、fansWoo design,網頁設計,網站設計,網頁設計公司,台北網頁設計,瘋沃網頁設計\r\n中小型企業形象網站網頁設計瘋沃科技網頁設計公司提供最優質的網頁設計、網站架設、多媒體網頁設計等多項服務. 我們的客戶來自於各行各業，以最全面性的服務來滿足您對於網頁設計的需求', '', 1),
('website_script_plugin_custom', '', '', 1),
('website_script_plugin_ga', '', '', 1),
('website_script_plugin_fb', '', '', 1),
('note_order', 'priority', '', 1),
('note_amount', '5', '', 1),
('website_title_name', '187巷的法式', '', 1),
('website_title_introduction', '187巷的法式', '', 1),
('index_activity_content', 'test', '', 1),
('index_activity_image', 'app/img/bg8.jpg', '', 1),
('index_showroom_content', 'test', '', 1),
('index_showroom_image', 'app/img/bg6.jpg', '', 1),
('index_news_image', 'app/img/bg9.jpg', '', 1),
('index_news_content', 'test', '', 1),
('page_story_title1', 'test', 'page_story', 1),
('page_story_text1', 'test', '', 1),
('page_story_content1', 'test', '', 1),
('page_story_title2', 'test2', '', 1),
('page_story_text2', 'test2', '', 1),
('page_story_content2', 'test2', '', 1),
('page_story_title3', 'test3', '', 1),
('page_story_text3', 'test3', '', 1),
('page_story_content3', 'test3', '', 1),
('page_story_title4', 'test4', '', 1),
('page_story_text4', 'test4', '', 1),
('shop_hot_product', '528502\r\n528504\r\n528505', 'shop', 1),
('shop_hot_showpiece', '528502\r\n528505', 'showpiece/list', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_shop_cart`
--

CREATE TABLE IF NOT EXISTS `fs_shop_cart` (
  `cartid` mediumint(8) NOT NULL,
  `orderid` mediumint(8) NOT NULL,
  `productid` mediumint(8) NOT NULL,
  `stockid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `price` mediumint(8) NOT NULL,
  `amount` mediumint(8) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_shop_cart`
--

INSERT INTO `fs_shop_cart` (`cartid`, `orderid`, `productid`, `stockid`, `uid`, `price`, `amount`, `status`) VALUES
(528501, 528507, 528501, 0, 528503, 500, 2, 1),
(528503, 528508, 528505, 0, 528501, 123, 10, -1),
(528502, 528508, 528504, 0, 528501, 500, 8, -1),
(528506, 528508, 528504, 0, 528501, 500, 10, -1),
(528505, 528508, 528502, 0, 528501, 0, 1, -1),
(528504, 528508, 528507, 0, 528501, 3, 1, -1),
(528507, 528508, 528504, 0, 528501, 500, 1, -1),
(528508, 528508, 528504, 0, 528501, 500, 33, 1),
(528509, 528509, 528505, 0, 528501, 123, 15, 1),
(528510, 528510, 528507, 0, 528501, 3, 1, -1),
(528511, 528510, 528507, 0, 528501, 3, 1, -1),
(528512, 528510, 528502, 0, 528501, 0, 1, -1),
(528513, 528510, 528509, 0, 528501, 0, 1, -1),
(528514, 528510, 528507, 0, 528501, 3, 1, -1),
(528515, 528510, 528504, 0, 528501, 500, 1, -1),
(528516, 528510, 528508, 0, 528501, 0, 2, -1),
(528517, 528510, 528507, 0, 528501, 3, 1, -1),
(528518, 528510, 528507, 0, 528501, 3, 19, 1),
(528519, 528511, 528505, 0, 528501, 123, 10, 1),
(528520, 528511, 528507, 0, 528501, 3, 5, 1),
(528521, 528512, 528504, 0, 528501, 500, 1, 1),
(528522, 528513, 528504, 0, 528501, 500, 1, 1),
(528523, 528514, 528504, 0, 528510, 500, 1, 1),
(528524, 528515, 528504, 0, 528501, 500, 2, -1),
(528525, 528515, 528504, 0, 528501, 500, 1, -1),
(528526, 528515, 528505, 0, 528501, 123, 1, -1),
(528527, 528515, 528504, 0, 528501, 500, 1, -1),
(528528, 528515, 528507, 0, 528501, 3, 1, -1),
(528529, 528515, 528504, 0, 528501, 500, 1, 1),
(528530, 528516, 528505, 0, 528501, 123, 1, 1),
(528531, 528517, 528504, 0, 528501, 500, 1, -1),
(528532, 528517, 528509, 0, 528501, 0, 1, -1),
(528533, 528517, 528507, 0, 528501, 3, 1, 1),
(528534, 528518, 528504, 0, 528501, 500, 1, -1),
(528535, 528518, 528504, 0, 528501, 500, 1, -1),
(528536, 528518, 528505, 0, 528501, 123, 1, -1),
(528537, 528518, 528507, 0, 528501, 3, 1, -1),
(528538, 528518, 528505, 0, 528501, 123, 1, 1),
(528539, 528519, 528505, 0, 528501, 123, 1, -1),
(528540, 528519, 528509, 0, 528501, 0, 1, -1),
(528541, 528520, 528504, 0, 528511, 500, 1, -1),
(528542, 528520, 528505, 0, 528511, 123, 1, -1),
(528543, 528521, 528504, 0, 528501, 500, 1, -1),
(528544, 528520, 528504, 0, 528501, 500, 2, 1),
(528545, 528521, 528504, 0, 528511, 500, 2, -1),
(528546, 528521, 528507, 0, 528511, 3, 1, -1),
(528547, 528521, 528502, 0, 528511, 0, 1, -1),
(528548, 528521, 528504, 0, 528511, 500, 1, 1),
(528549, 528522, 528505, 0, 528511, 123, 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_shop_order`
--

CREATE TABLE IF NOT EXISTS `fs_shop_order` (
  `orderid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `receive_name` char(32) DEFAULT '',
  `receive_phone` char(32) DEFAULT '',
  `receive_time` char(32) DEFAULT '',
  `receive_address` char(100) DEFAULT '',
  `receive_remark` text,
  `pay_paytype` char(32) DEFAULT '',
  `pay_sendtype` char(32) DEFAULT '',
  `pay_price_total` mediumint(10) DEFAULT '0',
  `pay_price_freight` mediumint(10) DEFAULT '0',
  `pay_account` char(50) DEFAULT '',
  `pay_name` char(32) DEFAULT '',
  `pay_paytime` datetime DEFAULT NULL,
  `pay_remark` text,
  `pay_status` int(1) DEFAULT '0',
  `paycheck_status` int(1) DEFAULT '0',
  `product_status` int(1) DEFAULT '0',
  `order_status` int(1) DEFAULT '0',
  `sendtime` datetime NOT NULL,
  `setuptime` datetime NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_shop_order`
--

INSERT INTO `fs_shop_order` (`orderid`, `uid`, `receive_name`, `receive_phone`, `receive_time`, `receive_address`, `receive_remark`, `pay_paytype`, `pay_sendtype`, `pay_price_total`, `pay_price_freight`, `pay_account`, `pay_name`, `pay_paytime`, `pay_remark`, `pay_status`, `paycheck_status`, `product_status`, `order_status`, `sendtime`, `setuptime`, `updatetime`, `status`) VALUES
(528501, 528503, '123dfgfdgfdg', '0', '0', '', '', '', '', 0, 0, '', '', '0000-00-00 00:00:00', '', 0, 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(528502, 528503, '楊義', '0917465550', 'night', '台北市', '備註', 'ATM', '', 5550, 0, 'test', 'test', '0000-00-00 00:00:00', 'test', 0, 1, 1, 1, '2015-04-20 16:44:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(528503, 528503, 'kkk', 'test', 'morning', 'test', 'test', '', '', 100, 0, '', '', '0000-00-00 00:00:00', '', 0, 1, 1, 1, '2015-03-22 18:41:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(528504, 528501, '', '', 'morning', '', '', '', '', 0, 0, '', '', '2015-03-22 18:28:21', '', 0, 0, 0, 0, '2015-03-22 18:28:21', '0000-00-00 00:00:00', '2015-03-25 03:42:44', -1),
(528505, 528501, '', '', 'morning', '', '', '', '', 0, 0, '', '', '2015-03-22 18:29:51', '', 0, 0, 0, 0, '2015-03-22 18:29:51', '0000-00-00 00:00:00', '2015-03-25 03:42:34', -1),
(528506, 528501, '', '', 'morning', '', '', '', '', 0, 0, '', '', '2015-03-22 18:30:23', '', 0, 0, 0, 0, '2015-03-22 18:30:23', '0000-00-00 00:00:00', '2015-03-25 03:42:26', -1),
(528507, 528501, 'test', 'test', 'night', 'tset', 'test', '', '', 0, 0, '', '', '2015-03-22 18:30:36', '', 0, 1, 1, 1, '2015-03-31 20:14:39', '2015-03-01 00:00:00', '2015-03-22 20:27:45', 1),
(528508, 528501, 'rwar', 'test', 'night', 'test', 'stets', 'cash_on_delivery', 'cash_on_delivery', 2620, 120, '', '', '2015-03-23 19:44:28', '', 0, 0, 0, 0, '2015-03-23 19:44:28', '2015-03-23 19:44:28', '2015-03-23 19:44:28', 1),
(528509, 528501, 'test', 'test', 'night', 'tset', 'test', 'atm', 'delivery', 203, 80, 'fdsf', 'dsfdsf', '2015-03-02 00:00:00', 'sfdsf', 1, 0, 0, 0, '2015-03-24 01:39:38', '2015-03-24 01:39:38', '2015-03-24 01:39:38', 1),
(528510, 528501, 'test', 'test', 'afternoon', 'tset', '6', 'cash_on_delivery', 'cash_on_delivery', 123, 120, '', '', '2015-03-24 02:05:08', '', 0, 1, 0, 0, '2015-03-24 02:05:08', '2015-03-24 02:05:08', '2015-03-24 02:05:08', 1),
(528511, 528501, 'test', 'test', 'afternoon', 'tset', '515515', 'cash_on_delivery', 'cash_on_delivery', 1365, 120, '', '', '2015-03-24 02:08:31', '', 1, 1, 1, 1, '2015-03-24 02:08:31', '2015-03-24 02:08:31', '2015-03-24 02:13:29', 1),
(528512, 528501, '', '', 'morning', '', '', 'atm', 'delivery', 580, 80, 'setse', 'tsets', '2015-03-12 00:00:00', 'setsgds', 1, 0, 0, 0, '2015-03-24 19:12:22', '2015-03-24 19:12:22', '2015-03-24 19:12:22', 1),
(528513, 528501, '2131', '3123', 'night', '2312312', '', 'atm', 'delivery', 580, 80, '', '', '2015-03-25 03:04:59', '', 0, 0, 0, 0, '2015-03-25 03:04:59', '2015-03-25 03:04:59', '2015-03-25 03:04:59', 1),
(528514, 528510, '4645', '6456456', 'morning', '645645', '45645', 'cash_on_delivery', 'cash_on_delivery', 620, 120, '', '', '2015-03-25 03:50:24', '', 1, 1, 0, 0, '2015-03-25 03:50:24', '2015-03-25 03:50:24', '2015-03-25 03:50:24', 1),
(528516, 528501, 'test', 'test', 'morning', 'test', '', 'card', 'delivery', 203, 80, '', '', '2015-03-27 04:23:00', '', 1, 1, 0, 0, '2015-03-27 04:23:00', '2015-03-27 04:23:00', '2015-03-27 04:23:00', 1),
(528517, 528501, 'test', 'test', 'morning', 'test', NULL, 'card', 'delivery', 83, 80, NULL, NULL, '2015-03-30 02:14:15', NULL, 1, 1, NULL, 0, '2015-03-30 02:14:15', '2015-03-30 02:14:15', '2015-03-30 02:14:15', 1),
(528518, 528501, 'test', 'test', 'morning', 'test', NULL, 'card', 'delivery', 203, 80, NULL, NULL, '2015-03-30 02:20:02', NULL, 1, 1, NULL, 0, '2015-03-30 02:20:02', '2015-03-30 02:20:02', '2015-03-30 02:20:02', 1),
(528519, 528501, NULL, NULL, NULL, NULL, NULL, 'atm', NULL, 80, 80, NULL, NULL, '2015-03-30 12:29:47', NULL, 1, 1, NULL, 0, '2015-03-30 12:29:47', '2015-03-30 12:29:47', '2015-03-30 12:29:47', 1),
(528522, 528511, '43', '4534', 'morning', '54343', NULL, 'card', 'delivery', 203, 80, NULL, NULL, '2015-04-03 10:35:01', NULL, 1, 1, NULL, 0, '2015-04-03 10:35:01', '2015-04-03 10:35:01', '2015-04-03 10:35:01', 1),
(528520, 528501, NULL, NULL, NULL, NULL, NULL, 'atm', 'delivery', 1080, 80, NULL, NULL, '2015-03-30 13:16:06', NULL, 1, 1, NULL, 0, '2015-03-30 13:16:06', '2015-03-30 13:16:06', '2015-03-30 13:16:06', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_shop_product`
--

CREATE TABLE IF NOT EXISTS `fs_shop_product` (
  `productid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `name` char(100) NOT NULL,
  `price` mediumint(10) NOT NULL,
  `mainpicids` char(100) NOT NULL,
  `classids` char(100) NOT NULL,
  `content` text NOT NULL,
  `content_specification` text NOT NULL,
  `synopsis` text NOT NULL,
  `picids` char(100) NOT NULL,
  `prioritynum` mediumint(8) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_shop_product`
--

INSERT INTO `fs_shop_product` (`productid`, `uid`, `name`, `price`, `mainpicids`, `classids`, `content`, `content_specification`, `synopsis`, `picids`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, 528503, '123dfgfdgfdg', 50, '', '528528', '123', '', '', '528530', 2, '0000-00-00 00:00:00', 0),
(528502, 528501, 'test', 0, '528678', '528554', '', '', '1232312', '528679', 11, '2015-04-06 18:09:51', 1),
(528503, 528503, 'kkk', 0, '528518', '528552', 'tkkk', '', '', '528518,528517', 0, '2015-02-25 03:45:43', -1),
(528504, 528501, 'testfff333', 500, '528680', '528550,528554', 'ggg', 'abc', 'test', '528681', 5, '2015-04-06 18:10:11', 1),
(528505, 528501, 'wrwerewrewrwe', 123, '528688', '528550', 'werwer', 'ewrewrwe', 'rewrwerwerewr', '528689', 0, '2015-04-06 18:13:17', 1),
(528506, 528503, 'test', 0, '', '528552,528553,528554,528558,528560,528563', 'test', 'test', 'test', '', 3, '2015-03-02 15:38:17', -1),
(528507, 528501, 'test', 3, '528684', '528552', 'test', 'test', 'test', '528685', 3, '2015-04-06 18:12:47', 1),
(528509, 528501, 'testggg', 0, '528682', '', '', '', '', '528683', 4, '2015-04-06 18:10:23', 1),
(528508, 528501, 'test2', 0, '528686', '528550,528552', '', '', '', '528687', 0, '2015-04-06 18:12:58', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_shop_stock`
--

CREATE TABLE IF NOT EXISTS `fs_shop_stock` (
  `stockid` mediumint(8) NOT NULL,
  `stocknum` mediumint(8) NOT NULL,
  `status` int(11) NOT NULL,
  `productid` mediumint(8) NOT NULL,
  `classid` mediumint(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `fs_showpiece`
--

CREATE TABLE IF NOT EXISTS `fs_showpiece` (
  `showpieceid` mediumint(8) NOT NULL,
  `uid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `price` mediumint(10) NOT NULL,
  `mainpicids` char(100) NOT NULL,
  `classids` char(100) NOT NULL,
  `content` text NOT NULL,
  `content_specification` text NOT NULL,
  `synopsis` text NOT NULL,
  `picids` char(100) NOT NULL,
  `prioritynum` mediumtext NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_showpiece`
--

INSERT INTO `fs_showpiece` (`showpieceid`, `uid`, `name`, `price`, `mainpicids`, `classids`, `content`, `content_specification`, `synopsis`, `picids`, `prioritynum`, `updatetime`, `status`) VALUES
(528501, 528503, '123dfgfdgfdg', 0, '', '528528', '123', '', '', 'test', '2', '0000-00-00 00:00:00', 0),
(528502, 528501, 'ffff', 5, '528692', '528583', 'fffff', 'vvvvvvvvvvvvv', '', '528693', '111', '2015-04-06 19:37:29', 1),
(528503, 528501, 'kkk', 0, '', '', 'tkkk', '', '', '', '0', '2015-03-29 22:00:17', -1),
(528504, 528501, 'test', 0, '', '', 'test<br />\r\ntest<br />\r\ntest\r\n<div></p>\r\n', '', '', '', '', '2015-03-29 21:52:40', 0),
(528505, 528501, 'ffff', 100, '528690', '528581', 'test', '', '21312312\r\n212131\r\n12\r\n123123', '528691', '3', '2015-04-06 19:37:11', 1),
(528506, 528501, 'test222', 222, '', '', 'tet', '', 'test', '', '3', '2015-03-29 21:51:59', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_user`
--

CREATE TABLE IF NOT EXISTS `fs_user` (
  `uid` mediumint(8) NOT NULL,
  `email` char(32) NOT NULL,
  `username` char(32) NOT NULL,
  `picids` char(100) NOT NULL,
  `groupids` char(100) NOT NULL,
  `updatetime` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_user`
--

INSERT INTO `fs_user` (`uid`, `email`, `username`, `picids`, `groupids`, `updatetime`, `status`) VALUES
(528504, 'sacriley@gmail.com', 'Sacriley', '', '100', '2015-03-15 17:20:25', 1),
(528502, 'yi@fanswoo.com', 'Yi Yang', '', '100', '0000-00-00 00:00:00', 1),
(528501, 'service@fanswoo.com', 'admin', '', '1', '2015-04-07 20:55:12', 1),
(528505, 'test', 'test', '', '100', '2015-03-22 23:35:04', 1),
(528506, 'test2', 'test2', '', '100', '2015-03-22 23:40:23', 1),
(528507, 'testetst', 'testetst', '', '100', '2015-03-22 23:42:59', 1),
(528508, 'test@test.test', 'test@test.test', '', '100', '2015-03-22 23:43:45', 1),
(528509, 'servffice@fanswoo.com', 'servffice@fanswoo.com', '', '100', '2015-03-23 00:02:00', 1),
(528510, 'test2@fanswoo.com', 'fanswoo.com', '', '100', '2015-03-25 21:51:45', 1),
(528511, 'test@fanswoo.com', 'test@fanswoo.com', '', '100', '2015-03-30 12:34:34', 1),
(528512, 'herenow818@hotmail.com', 'herenow818@hotmail.com', '', '100', '2015-05-16 11:28:53', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_user_field_shop`
--

CREATE TABLE IF NOT EXISTS `fs_user_field_shop` (
  `uid` mediumint(8) NOT NULL,
  `receive_name` char(100) DEFAULT '',
  `receive_phone` char(100) NOT NULL DEFAULT '',
  `receive_address` char(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_user_field_shop`
--

INSERT INTO `fs_user_field_shop` (`uid`, `receive_name`, `receive_phone`, `receive_address`) VALUES
(528503, '收件人', '28825252', '台北市士林區'),
(528501, '', '', ''),
(528502, '', '', ''),
(528510, 'test', 'test2', 'test3'),
(528511, 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- 資料表結構 `fs_user_group`
--

CREATE TABLE IF NOT EXISTS `fs_user_group` (
  `groupid` mediumint(8) NOT NULL,
  `groupname` char(40) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_user_group`
--

INSERT INTO `fs_user_group` (`groupid`, `groupname`, `status`) VALUES
(1, '總管理員', 1),
(100, '一般會員', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fs_user_verification`
--

CREATE TABLE IF NOT EXISTS `fs_user_verification` (
  `uid` mediumint(8) NOT NULL,
  `email` char(32) NOT NULL,
  `password` char(32) DEFAULT NULL,
  `password_salt` char(6) NOT NULL,
  `password_key` char(32) DEFAULT NULL,
  `change_email_key` char(6) DEFAULT NULL,
  `change_email_updatetime` datetime DEFAULT NULL,
  `facebookid` mediumint(12) DEFAULT NULL,
  `googleid` mediumint(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `fs_user_verification`
--

INSERT INTO `fs_user_verification` (`uid`, `email`, `password`, `password_salt`, `password_key`, `change_email_key`, `change_email_updatetime`, `facebookid`, `googleid`) VALUES
(528501, 'service@fanswoo.com', 'f3ebc5fbce456c6f185f419c62461602', '0f7d26', '1234qwera', NULL, NULL, NULL, NULL),
(528512, 'herenow818@hotmail.com', '7bfc8255236269633de2e19111b7c67d', 'c53500', 'julie818', NULL, NULL, NULL, NULL);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `fs_advertising`
--
ALTER TABLE `fs_advertising`
  ADD UNIQUE KEY `advertisingid` (`advertisingid`);

--
-- 資料表索引 `fs_advertising_class`
--
ALTER TABLE `fs_advertising_class`
  ADD UNIQUE KEY `classid` (`classid`);

--
-- 資料表索引 `fs_class`
--
ALTER TABLE `fs_class`
  ADD UNIQUE KEY `classid` (`classid`);

--
-- 資料表索引 `fs_contact_ask`
--
ALTER TABLE `fs_contact_ask`
  ADD UNIQUE KEY `showpieceid` (`contactid`);

--
-- 資料表索引 `fs_contact_learn`
--
ALTER TABLE `fs_contact_learn`
  ADD UNIQUE KEY `showpieceid` (`contactid`);

--
-- 資料表索引 `fs_contact_pay`
--
ALTER TABLE `fs_contact_pay`
  ADD UNIQUE KEY `showpieceid` (`contactid`);

--
-- 資料表索引 `fs_course`
--
ALTER TABLE `fs_course`
  ADD UNIQUE KEY `showpieceid` (`courseid`);

--
-- 資料表索引 `fs_course_month`
--
ALTER TABLE `fs_course_month`
  ADD UNIQUE KEY `showpieceid` (`month_courseid`);

--
-- 資料表索引 `fs_course_series`
--
ALTER TABLE `fs_course_series`
  ADD UNIQUE KEY `showpieceid` (`series_courseid`);

--
-- 資料表索引 `fs_dessert`
--
ALTER TABLE `fs_dessert`
  ADD UNIQUE KEY `showpieceid` (`dessertid`);

--
-- 資料表索引 `fs_note`
--
ALTER TABLE `fs_note`
  ADD UNIQUE KEY `noteid` (`noteid`);

--
-- 資料表索引 `fs_note_field`
--
ALTER TABLE `fs_note_field`
  ADD UNIQUE KEY `noteid` (`noteid`);

--
-- 資料表索引 `fs_pic`
--
ALTER TABLE `fs_pic`
  ADD UNIQUE KEY `picid` (`picid`);

--
-- 資料表索引 `fs_sessions`
--
ALTER TABLE `fs_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD UNIQUE KEY `session_id` (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- 資料表索引 `fs_setting`
--
ALTER TABLE `fs_setting`
  ADD UNIQUE KEY `keyword` (`keyword`);

--
-- 資料表索引 `fs_shop_cart`
--
ALTER TABLE `fs_shop_cart`
  ADD UNIQUE KEY `cartid` (`cartid`);

--
-- 資料表索引 `fs_shop_order`
--
ALTER TABLE `fs_shop_order`
  ADD UNIQUE KEY `ordersid` (`orderid`);

--
-- 資料表索引 `fs_shop_product`
--
ALTER TABLE `fs_shop_product`
  ADD UNIQUE KEY `productid` (`productid`);

--
-- 資料表索引 `fs_shop_stock`
--
ALTER TABLE `fs_shop_stock`
  ADD UNIQUE KEY `stockid` (`stockid`);

--
-- 資料表索引 `fs_showpiece`
--
ALTER TABLE `fs_showpiece`
  ADD UNIQUE KEY `showpieceid` (`showpieceid`);

--
-- 資料表索引 `fs_user`
--
ALTER TABLE `fs_user`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- 資料表索引 `fs_user_field_shop`
--
ALTER TABLE `fs_user_field_shop`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- 資料表索引 `fs_user_group`
--
ALTER TABLE `fs_user_group`
  ADD UNIQUE KEY `groupid` (`groupid`);

--
-- 資料表索引 `fs_user_verification`
--
ALTER TABLE `fs_user_verification`
  ADD UNIQUE KEY `uid` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
