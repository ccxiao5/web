-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-07 09:21:38
-- 服务器版本： 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ia_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `professor`
--

CREATE TABLE `professor` (
  `number` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `professor`
--

INSERT INTO `professor` (`number`) VALUES
(151001101),
(151001102),
(151001103),
(151001104),
(151001105),
(151001106),
(151001107),
(151001108),
(151001109),
(151001110),
(151001111),
(151001112),
(151001113),
(151001114),
(151001115),
(151001116),
(151001117),
(151001118),
(151001119),
(151001120),
(151001121),
(151001122),
(151001123),
(151001124),
(151001125),
(151001126),
(151001127),
(151001128),
(151001129),
(151001130),
(151001201),
(151001202),
(151001203),
(151001204),
(151001205),
(151001206),
(151001207),
(151001208),
(151001209),
(151001210),
(151001211),
(151001212),
(151001213),
(151001214),
(151001215),
(151001216),
(151001217),
(151001218),
(151001219),
(151001220),
(151001221),
(151001222),
(151001223),
(151001224),
(151001225),
(151001226),
(151001227),
(151001228),
(151001229),
(151001230),
(151001231),
(140814219);

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

CREATE TABLE `question` (
  `q_num` char(2) NOT NULL,
  `question` varchar(255) NOT NULL,
  `max` int(11) DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `mid` float(10,4) DEFAULT NULL,
  `average_one` float(10,4) DEFAULT NULL,
  `differ` float(10,4) DEFAULT NULL,
  `stdv_one` float(10,3) DEFAULT NULL,
  `full_one` float(10,4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `question`
--

INSERT INTO `question` (`q_num`, `question`, `max`, `min`, `mid`, `average_one`, `differ`, `stdv_one`, `full_one`) VALUES
('1', '评论质量', 5, 1, 4.0000, 3.6000, 0.3009, 1.083, 0.2000),
('2', '评论用户素质', 5, 1, 5.0000, 3.4000, 0.2586, 0.879, 0.0667),
('3', '评论内容与歌曲贴合度', 5, 1, 4.0000, 3.2667, 0.3785, 1.237, 0.1333),
('4', '推荐音乐契合度', 5, 2, 3.5000, 3.8000, 0.1969, 0.748, 0.1333),
('5', '有版权的著名歌手资源数量', 5, 1, 3.0000, 2.8000, 0.3499, 0.980, 0.0667),
('6', '有版权的小众或翻唱歌手资源数量', 5, 2, 4.0000, 3.7333, 0.2487, 0.929, 0.2000),
('7', '歌曲音质', 5, 1, 3.0000, 4.3667, 0.2812, 1.087, 0.5333),
('8', '歌词质量', 5, 2, 2.5000, 4.7500, 0.2578, 0.980, 0.5967),
('9', '近一周及所有时间音乐排行榜准确度', 5, 3, 4.0000, 3.8000, 0.1719, 0.653, 0.1333),
('10', '自建歌单方便程度', 5, 2, 3.0000, 4.0667, 0.2454, 0.998, 0.4667),
('11', '隐私保护功能(如设置微博账号、听歌排行榜的可见性)', 4, 3, 4.0000, 3.6000, 0.1361, 0.490, 0.0000),
('12', '广告植入情况', 4, 2, 3.0000, 3.1333, 0.2823, 0.884, 0.0000);

-- --------------------------------------------------------

--
-- 表的结构 `question2`
--

CREATE TABLE `question2` (
  `q_num` char(2) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `ave` float(10,4) DEFAULT NULL,
  `mid` float(3,1) DEFAULT NULL,
  `stdv` float(10,4) DEFAULT NULL,
  `differ` float(10,4) DEFAULT NULL,
  `full` float(10,4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `question2`
--

INSERT INTO `question2` (`q_num`, `question`, `max`, `min`, `ave`, `mid`, `stdv`, `differ`, `full`) VALUES
('1', '评论质量', 5, 1, 3.5333, 4.0, 1.1470, 0.3246, 0.1333),
('2', '评论用户素质', 5, 1, 3.6000, 5.0, 1.0198, 0.2833, 0.1333),
('3', '评论内容与歌曲贴合度', 4, 1, 3.1333, 4.0, 1.0873, 0.3470, 0.0000),
('4', '推荐音乐契合度', 5, 1, 3.7333, 3.5, 0.9978, 0.2673, 0.2000),
('5', '有版权的著名歌手资源数量', 5, 1, 3.2667, 3.0, 0.9978, 0.3054, 0.0667),
('6', '有版权的小众或翻唱歌手资源数量', 5, 1, 3.6000, 3.0, 1.0198, 0.2833, 0.1333),
('9', '近一周及所有时间音乐排行榜准确度', 5, 1, 3.5333, 3.5, 0.8844, 0.2503, 0.0667),
('10', '自建歌单方便程度', 5, 3, 3.9333, 3.0, 0.6799, 0.1728, 0.2000),
('11', '隐私保护功能(如设置微博账号、听歌排行榜的可见性)', 5, 2, 3.4667, 4.0, 0.8055, 0.2324, 0.0667),
('12', '广告植入情况', 5, 2, 3.5333, 3.0, 0.7180, 0.2032, 0.0667);

-- --------------------------------------------------------

--
-- 表的结构 `round1`
--

CREATE TABLE `round1` (
  `number` int(10) NOT NULL,
  `CommentQuality` int(2) DEFAULT NULL,
  `CommentUserQuality` int(2) DEFAULT NULL,
  `CommentQualityWithSong` int(2) DEFAULT NULL,
  `Recommend` int(2) DEFAULT NULL,
  `SongNumFamous` int(2) DEFAULT NULL,
  `SongNumMinority` int(2) DEFAULT NULL,
  `ToneQuality` int(2) DEFAULT NULL,
  `LyricQuality` int(2) DEFAULT NULL,
  `RankingList` int(2) DEFAULT NULL,
  `SongList` int(2) DEFAULT NULL,
  `Privacy` int(2) DEFAULT NULL,
  `Ad` int(2) DEFAULT NULL,
  `suggest` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 MAX_ROWS=15;

--
-- 转存表中的数据 `round1`
--

INSERT INTO `round1` (`number`, `CommentQuality`, `CommentUserQuality`, `CommentQualityWithSong`, `Recommend`, `SongNumFamous`, `SongNumMinority`, `ToneQuality`, `LyricQuality`, `RankingList`, `SongList`, `Privacy`, `Ad`, `suggest`) VALUES
(151001103, 5, 4, 4, 5, 5, 3, 3, 3, 4, 5, 3, 3, '其他意见或建议'),
(151001109, 4, 4, 3, 4, 3, 4, 5, 5, 5, 5, 4, 3, 'wu'),
(151001111, 5, 3, 5, 3, 4, 4, 1, 2, 4, 5, 4, 4, '建议提高音乐品质'),
(151001114, 2, 3, 1, 4, 2, 5, 5, 4, 3, 5, 4, 2, '网易云歌曲评论复制粘贴情况太多，大多数歌曲热评都是段子'),
(151001116, 1, 1, 1, 4, 2, 4, 4, 4, 5, 4, 3, 2, '球球评论区别在那rpg了行不！'),
(151001118, 3, 4, 5, 4, 1, 2, 3, 4, 4, 5, 4, 2, '不要垄断我嵩版权！'),
(151001122, 3, 3, 2, 2, 3, 2, 4, 4, 3, 3, 3, 4, '好多指标不太了解'),
(151001124, 4, 3, 3, 4, 3, 3, 4, 3, 3, 3, 3, 3, 'ffvjg'),
(151001130, 4, 4, 4, 3, 2, 4, 3, 4, 4, 2, 4, 2, '歌手资源不多'),
(151001202, 4, 4, 4, 4, 3, 4, 5, 5, 4, 3, 3, 4, '音质很好，歌曲版权有点少'),
(151001205, 5, 4, 4, 3, 2, 4, 5, 5, 4, 5, 4, 4, '希望个性化推荐功能不要重复推荐'),
(151001206, 4, 5, 4, 4, 3, 5, 3, 3, 3, 4, 4, 4, '既然很多知名歌手的版权拿不到，希望小众歌手和翻唱收录可以更全。'),
(151001209, 4, 3, 2, 4, 3, 5, 5, 5, 4, 4, 4, 4, '有版权流行音乐较少，无法使用一个软件满足听所有类型歌曲的愿望'),
(151001211, 3, 3, 4, 4, 2, 4, 4, 5, 4, 5, 4, 4, '想要Jay的歌，请买版权吗！！！'),
(151001229, 3, 3, 3, 5, 4, 3, 5, 2, 3, 3, 3, 2, '粤语歌没有音译');

--
-- 触发器 `round1`
--
DELIMITER $$
CREATE TRIGGER `trigger_avg_min_max` AFTER INSERT ON `round1` FOR EACH ROW BEGIN
      DECLARE x1 float(10,4);
   DECLARE x2 float(10,4);
   DECLARE x3 float(10,4);
   DECLARE x4 float(10,4);
   DECLARE x5 float(10,4);
   DECLARE x6 float(10,4);
   DECLARE x7 float(10,4);
   DECLARE x8 float(10,4);
   DECLARE x9 float(10,4);
   DECLARE x10 float(10,4);
   DECLARE x11 float(10,4);
   DECLARE x12 float(10,4);
	DECLARE x13 float(10,4);
    
   SELECT AVG(CommentQuality) INTO x1 FROM round1;
   SELECT AVG(CommentUserQuality) INTO x2 FROM round1;
   SELECT AVG(CommentQualityWithSong) INTO x3 FROM round1;
   SELECT AVG(Recommend) INTO x4 FROM round1;
   SELECT AVG(SongNumFamous) INTO x5 FROM round1;
   SELECT AVG(SongNumMinority) INTO x6 FROM round1;
   SELECT AVG(ToneQuality) INTO x7 FROM round1;
   SELECT AVG(LyricQuality) INTO x8 FROM round1;
   SELECT AVG(RankingList) INTO x9 FROM round1;
   SELECT AVG(SongList) INTO x10 FROM round1;
   SELECT AVG(Privacy) INTO x11 FROM round1;
   SELECT AVG(Ad) INTO x12 FROM round1;
  
   UPDATE question SET average_one = x1 WHERE q_num = '1';
	UPDATE question SET average_one = x2 WHERE q_num = '2';
   UPDATE question SET average_one = x3 WHERE q_num = '3';
	UPDATE question SET average_one = x4 WHERE q_num = '4';
   UPDATE question SET average_one = x5 WHERE q_num = '5';
	UPDATE question SET average_one = x6 WHERE q_num = '6'; 
   UPDATE question SET average_one = x7 WHERE q_num = '7';
	UPDATE question SET average_one = x8 WHERE q_num = '8';
   UPDATE question SET average_one = x9 WHERE q_num = '9'; 
   UPDATE question SET average_one = x10 WHERE q_num = '10';
	UPDATE question SET average_one = x11 WHERE q_num = '11';
   UPDATE question SET average_one = x12 WHERE q_num = '12';
   
   
   SELECT MIN(CommentQuality) INTO x1 FROM round1;
   SELECT MIN(CommentUserQuality) INTO x2 FROM round1;
   SELECT MIN(CommentQualityWithSong) INTO x3 FROM round1;
   SELECT MIN(Recommend) INTO x4 FROM round1;
   SELECT MIN(SongNumFamous) INTO x5 FROM round1;
   SELECT MIN(SongNumMinority) INTO x6 FROM round1;
   SELECT MIN(ToneQuality) INTO x7 FROM round1;
   SELECT MIN(LyricQuality) INTO x8 FROM round1;
   SELECT MIN(RankingList) INTO x9 FROM round1;
   SELECT MIN(SongList) INTO x10 FROM round1;
   SELECT MIN(Privacy) INTO x11 FROM round1;
   SELECT MIN(Ad) INTO x12 FROM round1;
  
   UPDATE question SET min = x1 WHERE q_num = '1';
	UPDATE question SET min = x2 WHERE q_num = '2';
   UPDATE question SET min = x3 WHERE q_num = '3';
	UPDATE question SET min = x4 WHERE q_num = '4';
   UPDATE question SET min = x5 WHERE q_num = '5';
	UPDATE question SET min = x6 WHERE q_num = '6'; 
   UPDATE question SET min = x7 WHERE q_num = '7';
	UPDATE question SET min = x8 WHERE q_num = '8';
   UPDATE question SET min = x9 WHERE q_num = '9'; 
   UPDATE question SET min = x10 WHERE q_num = '10';
	UPDATE question SET min = x11 WHERE q_num = '11';
   UPDATE question SET min = x12 WHERE q_num = '12';

	SELECT MAX(CommentQuality) INTO x1 FROM round1;
   SELECT MAX(CommentUserQuality) INTO x2 FROM round1;
   SELECT MAX(CommentQualityWithSong) INTO x3 FROM round1;
   SELECT MAX(Recommend) INTO x4 FROM round1;
   SELECT MAX(SongNumFamous) INTO x5 FROM round1;
   SELECT MAX(SongNumMinority) INTO x6 FROM round1;
   SELECT MAX(ToneQuality) INTO x7 FROM round1;
   SELECT MAX(LyricQuality) INTO x8 FROM round1;
   SELECT MAX(RankingList) INTO x9 FROM round1;
   SELECT MAX(SongList) INTO x10 FROM round1;
   SELECT MAX(Privacy) INTO x11 FROM round1;
   SELECT MAX(Ad) INTO x12 FROM round1;
  
   UPDATE question SET max = x1 WHERE q_num = '1';
	UPDATE question SET max = x2 WHERE q_num = '2';
   UPDATE question SET max = x3 WHERE q_num = '3';
	UPDATE question SET max = x4 WHERE q_num = '4';
   UPDATE question SET max = x5 WHERE q_num = '5';
	UPDATE question SET max = x6 WHERE q_num = '6'; 
   UPDATE question SET max = x7 WHERE q_num = '7';
	UPDATE question SET max = x8 WHERE q_num = '8';
   UPDATE question SET max = x9 WHERE q_num = '9'; 
   UPDATE question SET max = x10 WHERE q_num = '10';
	UPDATE question SET max = x11 WHERE q_num = '11';
   UPDATE question SET max = x12 WHERE q_num = '12';

	SELECT STDDEV(CommentQuality) INTO x1 FROM round1;
   SELECT STDDEV(CommentUserQuality) INTO x2 FROM round1;
   SELECT STDDEV(CommentQualityWithSong) INTO x3 FROM round1;
   SELECT STDDEV(Recommend) INTO x4 FROM round1;
   SELECT STDDEV(SongNumFamous) INTO x5 FROM round1;
   SELECT STDDEV(SongNumMinority) INTO x6 FROM round1;
   SELECT STDDEV(ToneQuality) INTO x7 FROM round1;
   SELECT STDDEV(LyricQuality) INTO x8 FROM round1;
   SELECT STDDEV(RankingList) INTO x9 FROM round1;
   SELECT STDDEV(SongList) INTO x10 FROM round1;
   SELECT STDDEV(Privacy) INTO x11 FROM round1;
   SELECT STDDEV(Ad) INTO x12 FROM round1;
  
   UPDATE question SET stdv_one = x1 WHERE q_num = '1';
	UPDATE question SET stdv_one = x2 WHERE q_num = '2';
   UPDATE question SET stdv_one = x3 WHERE q_num = '3';
	UPDATE question SET stdv_one = x4 WHERE q_num = '4';
   UPDATE question SET stdv_one = x5 WHERE q_num = '5';
	UPDATE question SET stdv_one = x6 WHERE q_num = '6'; 
   UPDATE question SET stdv_one = x7 WHERE q_num = '7';
	UPDATE question SET stdv_one = x8 WHERE q_num = '8';
   UPDATE question SET stdv_one = x9 WHERE q_num = '9'; 
   UPDATE question SET stdv_one = x10 WHERE q_num = '10';
	UPDATE question SET stdv_one = x11 WHERE q_num = '11';
   UPDATE question SET stdv_one = x12 WHERE q_num = '12';

	SELECT STDDEV(CommentQuality) / AVG(CommentQuality) INTO x1 FROM round1;
   SELECT STDDEV(CommentUserQuality) / AVG(CommentUserQuality) INTO x2 FROM round1;
   SELECT STDDEV(CommentQualityWithSong) / AVG(CommentQualityWithSong) INTO x3 FROM round1;
   SELECT STDDEV(Recommend) / AVG(Recommend) INTO x4 FROM round1;
   SELECT STDDEV(SongNumFamous) / AVG(SongNumFamous) INTO x5 FROM round1;
   SELECT STDDEV(SongNumMinority) / AVG(SongNumMinority) INTO x6 FROM round1;
   SELECT STDDEV(ToneQuality) / AVG(ToneQuality) INTO x7 FROM round1;
   SELECT STDDEV(LyricQuality) / AVG(LyricQuality) INTO x8 FROM round1;
   SELECT STDDEV(RankingList) / AVG(RankingList) INTO x9 FROM round1;
   SELECT STDDEV(SongList) / AVG(SongList) INTO x10 FROM round1;
   SELECT STDDEV(Privacy) / AVG(Privacy) INTO x11 FROM round1;
   SELECT STDDEV(Ad) / AVG(Ad) INTO x12 FROM round1;
   
   UPDATE question SET differ = x1 WHERE q_num = '1';
	UPDATE question SET differ = x2 WHERE q_num = '2';
   UPDATE question SET differ = x3 WHERE q_num = '3';
	UPDATE question SET differ = x4 WHERE q_num = '4';
   UPDATE question SET differ = x5 WHERE q_num = '5';
	UPDATE question SET differ = x6 WHERE q_num = '6'; 
   UPDATE question SET differ = x7 WHERE q_num = '7';
	UPDATE question SET differ = x8 WHERE q_num = '8';
   UPDATE question SET differ = x9 WHERE q_num = '9'; 
   UPDATE question SET differ = x10 WHERE q_num = '10';
	UPDATE question SET differ = x11 WHERE q_num = '11';
   UPDATE question SET differ = x12 WHERE q_num = '12';
 
   SELECT Count(*) into x13 from round1; 
   SELECT Count(*) into x1 from round1 where CommentQuality = 5;
   SELECT Count(*) into x2 from round1 where CommentUserQuality = 5;
   SELECT Count(*) into x3 from round1 where CommentQualityWithSong = 5;
   SELECT Count(*) into x4 from round1 where Recommend = 5;
   SELECT Count(*) into x5 from round1 where SongNumFamous = 5;
   SELECT Count(*) into x6 from round1 where SongNumMinority = 5;
   SELECT Count(*) into x7 from round1 where ToneQuality = 5;
   SELECT Count(*) into x8 from round1 where LyricQuality = 5;
   SELECT Count(*) into x9 from round1 where RankingList = 5;
   SELECT Count(*) into x10 from round1 where SongList = 5;
   SELECT Count(*) into x11 from round1 where Privacy = 5;
   SELECT Count(*) into x12 from round1 where Ad = 5;
   

   UPDATE question set full_one = (x1 / x13) where q_num='1';
   UPDATE question set full_one = (x2 / x13) where q_num='2';
   UPDATE question set full_one = (x3 / x13) where q_num='3';
   UPDATE question set full_one = (x4 / x13) where q_num='4';
   UPDATE question set full_one = (x5 / x13) where q_num='5';
   UPDATE question set full_one = (x6 / x13) where q_num='6';
   UPDATE question set full_one = (x7 / x13) where q_num='7';
   UPDATE question set full_one = (x8 / x13) where q_num='8';
   UPDATE question set full_one = (x9 / x13) where q_num='9';
   UPDATE question set full_one = (x10 / x13) where q_num='10';		 	 
   UPDATE question set full_one = (x11 / x13) where q_num='11';
   UPDATE question set full_one = (x12 / x13) where q_num='12';


END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `round2`
--

CREATE TABLE `round2` (
  `number` int(10) NOT NULL,
  `CommentQuality` int(2) DEFAULT NULL,
  `CommentUserQuality` int(2) DEFAULT NULL,
  `CommentQualityWithSong` int(2) DEFAULT NULL,
  `Recommend` int(2) DEFAULT NULL,
  `SongNumFamous` int(2) DEFAULT NULL,
  `SongNumMinority` int(2) DEFAULT NULL,
  `RankingList` int(2) DEFAULT NULL,
  `SongList` int(2) DEFAULT NULL,
  `Privacy` int(2) DEFAULT NULL,
  `Ad` int(2) DEFAULT NULL,
  `suggest` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 MAX_ROWS=15;

--
-- 转存表中的数据 `round2`
--

INSERT INTO `round2` (`number`, `CommentQuality`, `CommentUserQuality`, `CommentQualityWithSong`, `Recommend`, `SongNumFamous`, `SongNumMinority`, `RankingList`, `SongList`, `Privacy`, `Ad`, `suggest`) VALUES
(151001103, 5, 4, 4, 5, 5, 3, 3, 5, 3, 3, '其他意见或建议'),
(151001109, 3, 4, 3, 4, 3, 4, 4, 5, 4, 3, 'wu'),
(151001111, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, ' '),
(151001114, 1, 2, 1, 1, 1, 1, 1, 3, 2, 4, '我最喜欢网易云了'),
(151001116, 1, 1, 1, 4, 2, 4, 4, 4, 3, 3, '球球评论区别在那rpg了行不！'),
(151001118, 3, 3, 4, 3, 4, 4, 4, 3, 4, 4, ' '),
(151001122, 4, 3, 3, 3, 4, 2, 3, 3, 2, 3, '其他意见或建议'),
(151001124, 4, 5, 2, 3, 3, 3, 5, 3, 3, 3, '其他意见或建议'),
(151001130, 4, 4, 4, 3, 4, 4, 3, 4, 4, 2, '没有意见'),
(151001202, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, '其他意见或建议'),
(151001205, 5, 4, 4, 4, 2, 4, 4, 4, 4, 3, '以前推荐过的歌曲希望可以不再推荐'),
(151001206, 4, 5, 4, 4, 3, 5, 3, 4, 4, 4, '无'),
(151001209, 4, 3, 2, 5, 3, 5, 4, 4, 3, 4, '其他意见或建议'),
(151001211, 4, 4, 4, 5, 4, 4, 4, 5, 5, 5, '需要扩大版权，有些歌曲的版权仍需争取'),
(151001229, 3, 4, 3, 4, 4, 3, 3, 4, 3, 4, '没有了');

--
-- 触发器 `round2`
--
DELIMITER $$
CREATE TRIGGER `trigger_avg_min_max2` AFTER INSERT ON `round2` FOR EACH ROW BEGIN
   DECLARE x1 float(10,4);
   DECLARE x2 float(10,4);
   DECLARE x3 float(10,4);
   DECLARE x4 float(10,4);
   DECLARE x5 float(10,4);
   DECLARE x6 float(10,4);

   DECLARE x9 float(10,4);
   DECLARE x10 float(10,4);
   DECLARE x11 float(10,4);
   DECLARE x12 float(10,4);
   DECLARE x13 float(10,4);
    
   SELECT AVG(CommentQuality) INTO x1 FROM round2;
   SELECT AVG(CommentUserQuality) INTO x2 FROM round2;
   SELECT AVG(CommentQualityWithSong) INTO x3 FROM round2;
   SELECT AVG(Recommend) INTO x4 FROM round2;
   SELECT AVG(SongNumFamous) INTO x5 FROM round2;
   SELECT AVG(SongNumMinority) INTO x6 FROM round2;

   SELECT AVG(RankingList) INTO x9 FROM round2;
   SELECT AVG(SongList) INTO x10 FROM round2;
   SELECT AVG(Privacy) INTO x11 FROM round2;
   SELECT AVG(Ad) INTO x12 FROM round2;
  
   UPDATE question2 SET ave = x1 WHERE q_num = '1';
	UPDATE question2 SET ave = x2 WHERE q_num = '2';
   UPDATE question2 SET ave = x3 WHERE q_num = '3';
	UPDATE question2 SET ave = x4 WHERE q_num = '4';
   UPDATE question2 SET ave = x5 WHERE q_num = '5';
	UPDATE question2 SET ave = x6 WHERE q_num = '6'; 

   UPDATE question2 SET ave = x9 WHERE q_num = '9'; 
   UPDATE question2 SET ave = x10 WHERE q_num = '10';
	UPDATE question2 SET ave = x11 WHERE q_num = '11';
   UPDATE question2 SET ave = x12 WHERE q_num = '12';
   
   
   SELECT MIN(CommentQuality) INTO x1 FROM round2;
   SELECT MIN(CommentUserQuality) INTO x2 FROM round2;
   SELECT MIN(CommentQualityWithSong) INTO x3 FROM round2;
   SELECT MIN(Recommend) INTO x4 FROM round2;
   SELECT MIN(SongNumFamous) INTO x5 FROM round2;
   SELECT MIN(SongNumMinority) INTO x6 FROM round2;

   SELECT MIN(RankingList) INTO x9 FROM round2;
   SELECT MIN(SongList) INTO x10 FROM round2;
   SELECT MIN(Privacy) INTO x11 FROM round2;
   SELECT MIN(Ad) INTO x12 FROM round2;
  
   UPDATE question2 SET min = x1 WHERE q_num = '1';
	UPDATE question2 SET min = x2 WHERE q_num = '2';
   UPDATE question2 SET min = x3 WHERE q_num = '3';
	UPDATE question2 SET min = x4 WHERE q_num = '4';
   UPDATE question2 SET min = x5 WHERE q_num = '5';
	UPDATE question2 SET min = x6 WHERE q_num = '6'; 

   UPDATE question2 SET min = x9 WHERE q_num = '9'; 
   UPDATE question2 SET min = x10 WHERE q_num = '10';
	UPDATE question2 SET min = x11 WHERE q_num = '11';
   UPDATE question2 SET min = x12 WHERE q_num = '12';

	SELECT MAX(CommentQuality) INTO x1 FROM round2;
   SELECT MAX(CommentUserQuality) INTO x2 FROM round2;
   SELECT MAX(CommentQualityWithSong) INTO x3 FROM round2;
   SELECT MAX(Recommend) INTO x4 FROM round2;
   SELECT MAX(SongNumFamous) INTO x5 FROM round2;
   SELECT MAX(SongNumMinority) INTO x6 FROM round2;

   SELECT MAX(RankingList) INTO x9 FROM round2;
   SELECT MAX(SongList) INTO x10 FROM round2;
   SELECT MAX(Privacy) INTO x11 FROM round2;
   SELECT MAX(Ad) INTO x12 FROM round2;
  
   UPDATE question2 SET max = x1 WHERE q_num = '1';
	UPDATE question2 SET max = x2 WHERE q_num = '2';
   UPDATE question2 SET max = x3 WHERE q_num = '3';
	UPDATE question2 SET max = x4 WHERE q_num = '4';
   UPDATE question2 SET max = x5 WHERE q_num = '5';
	UPDATE question2 SET max = x6 WHERE q_num = '6'; 

   UPDATE question2 SET max = x9 WHERE q_num = '9'; 
   UPDATE question2 SET max = x10 WHERE q_num = '10';
	UPDATE question2 SET max = x11 WHERE q_num = '11';
   UPDATE question2 SET max = x12 WHERE q_num = '12';

	SELECT STDDEV(CommentQuality) INTO x1 FROM round2;
   SELECT STDDEV(CommentUserQuality) INTO x2 FROM round2;
   SELECT STDDEV(CommentQualityWithSong) INTO x3 FROM round2;
   SELECT STDDEV(Recommend) INTO x4 FROM round2;
   SELECT STDDEV(SongNumFamous) INTO x5 FROM round2;
   SELECT STDDEV(SongNumMinority) INTO x6 FROM round2;

   SELECT STDDEV(RankingList) INTO x9 FROM round2;
   SELECT STDDEV(SongList) INTO x10 FROM round2;
   SELECT STDDEV(Privacy) INTO x11 FROM round2;
   SELECT STDDEV(Ad) INTO x12 FROM round2;
  
   UPDATE question2 SET stdv = x1 WHERE q_num = '1';
	UPDATE question2 SET stdv = x2 WHERE q_num = '2';
   UPDATE question2 SET stdv = x3 WHERE q_num = '3';
	UPDATE question2 SET stdv = x4 WHERE q_num = '4';
   UPDATE question2 SET stdv = x5 WHERE q_num = '5';
	UPDATE question2 SET stdv = x6 WHERE q_num = '6'; 

   UPDATE question2 SET stdv = x9 WHERE q_num = '9'; 
   UPDATE question2 SET stdv = x10 WHERE q_num = '10';
	UPDATE question2 SET stdv = x11 WHERE q_num = '11';
   UPDATE question2 SET stdv = x12 WHERE q_num = '12';

	SELECT STDDEV(CommentQuality) / AVG(CommentQuality) INTO x1 FROM round2;
   SELECT STDDEV(CommentUserQuality) / AVG(CommentUserQuality) INTO x2 FROM round2;
   SELECT STDDEV(CommentQualityWithSong) / AVG(CommentQualityWithSong) INTO x3 FROM round2;
   SELECT STDDEV(Recommend) / AVG(Recommend) INTO x4 FROM round2;
   SELECT STDDEV(SongNumFamous) / AVG(SongNumFamous) INTO x5 FROM round2;
   SELECT STDDEV(SongNumMinority) / AVG(SongNumMinority) INTO x6 FROM round2;

   SELECT STDDEV(RankingList) / AVG(RankingList) INTO x9 FROM round2;
   SELECT STDDEV(SongList) / AVG(SongList) INTO x10 FROM round2;
   SELECT STDDEV(Privacy) / AVG(Privacy) INTO x11 FROM round2;
   SELECT STDDEV(Ad) / AVG(Ad) INTO x12 FROM round2;
   
   UPDATE question2 SET differ = x1 WHERE q_num = '1';
	UPDATE question2 SET differ = x2 WHERE q_num = '2';
   UPDATE question2 SET differ = x3 WHERE q_num = '3';
	UPDATE question2 SET differ = x4 WHERE q_num = '4';
   UPDATE question2 SET differ = x5 WHERE q_num = '5';
	UPDATE question2 SET differ = x6 WHERE q_num = '6'; 

   UPDATE question2 SET differ = x9 WHERE q_num = '9'; 
   UPDATE question2 SET differ = x10 WHERE q_num = '10';
	UPDATE question2 SET differ = x11 WHERE q_num = '11';
   UPDATE question2 SET differ = x12 WHERE q_num = '12';
 
   SELECT Count(*) into x13 from round2; 
   SELECT Count(*) into x1 from round2 where CommentQuality = 5;
   SELECT Count(*) into x2 from round2 where CommentUserQuality = 5;
   SELECT Count(*) into x3 from round2 where CommentQualityWithSong = 5;
   SELECT Count(*) into x4 from round2 where Recommend = 5;
   SELECT Count(*) into x5 from round2 where SongNumFamous = 5;
   SELECT Count(*) into x6 from round2 where SongNumMinority = 5;

   SELECT Count(*) into x9 from round2 where RankingList = 5;
   SELECT Count(*) into x10 from round2 where SongList = 5;
   SELECT Count(*) into x11 from round2 where Privacy = 5;
   SELECT Count(*) into x12 from round2 where Ad = 5;
   

   UPDATE question2 set full = (x1 / x13) where q_num='1';
   UPDATE question2 set full = (x2 / x13) where q_num='2';
   UPDATE question2 set full = (x3 / x13) where q_num='3';
   UPDATE question2 set full = (x4 / x13) where q_num='4';
   UPDATE question2 set full = (x5 / x13) where q_num='5';
   UPDATE question2 set full = (x6 / x13) where q_num='6';

   UPDATE question2 set full = (x9 / x13) where q_num='9';
   UPDATE question2 set full = (x10 / x13) where q_num='10';		 	 
   UPDATE question2 set full = (x11 / x13) where q_num='11';
   UPDATE question2 set full = (x12 / x13) where q_num='12';


END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `round3`
--

CREATE TABLE `round3` (
  `number` int(10) NOT NULL,
  `suggest` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `round3`
--

INSERT INTO `round3` (`number`, `suggest`, `reason`) VALUES
(151001111, '结果均选择了4', '网易云音乐还是一个相当不错的音乐APP'),
(151001229, '评论质量	评论用户素质3	评论内容与歌曲贴合度3	推荐音乐契合度4	有版权的著名歌手资源数量4	有版权的小众或翻唱歌手资源数量3	近一周及所有时间音乐排行榜准确度3	自建歌单方便程度4	隐私保护功能(如设置微博账号、听歌排行榜的可见性)3	广告植入情况4', '因为不看评论，不听小众歌手，没有看近一周排行榜'),
(151001122, '评论质量 4	评论用户素质	3 评论内容与歌曲贴合度	3 推荐音乐契合度	3有版权的著名歌手资源数量	4有版权的小众或翻唱歌手资源数量	2近一周及所有时间音乐排行榜准确度	3自建歌单方便程度	3隐私保护功能(如设置微博账号、听歌排行榜的可见性)	2广告植入情况	 3', '不太了解的指标选3  觉得有欠缺的指标选2');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `name` int(10) DEFAULT NULL,
  `pw` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`name`, `pw`) VALUES
(151001210, 1),
(151001215, 2),
(151001200, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_num`);

--
-- Indexes for table `question2`
--
ALTER TABLE `question2`
  ADD PRIMARY KEY (`q_num`);

--
-- Indexes for table `round1`
--
ALTER TABLE `round1`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `round2`
--
ALTER TABLE `round2`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `round3`
--
ALTER TABLE `round3`
  ADD KEY `number` (`number`);

--
-- 限制导出的表
--

--
-- 限制表 `round2`
--
ALTER TABLE `round2`
  ADD CONSTRAINT `number` FOREIGN KEY (`number`) REFERENCES `round1` (`number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
