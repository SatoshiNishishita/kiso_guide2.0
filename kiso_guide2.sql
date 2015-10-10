-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2015 年 10 月 10 日 11:49
-- サーバのバージョン： 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `kisoguide`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kiso_movie`
--

CREATE TABLE `kiso_movie` (
  `movie_id` int(11) NOT NULL,
  `spot_id` int(11) NOT NULL,
  `movie_path` text NOT NULL,
  `movie_img` text NOT NULL,
  `movie_ title` text NOT NULL,
  `movie_created` datetime NOT NULL,
  `movie_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `kiso_movie`
--

INSERT INTO `kiso_movie` (`movie_id`, `spot_id`, `movie_path`, `movie_img`, `movie_ title`, `movie_created`, `movie_modified`) VALUES
(1, 1, 'mizuya_butudan', 'mizuya_butudan', '上げ仏壇(あげぶつだん)', '2015-10-10 00:00:00', '2015-10-10 07:51:35'),
(2, 1, 'mizuya_hune', 'mizuya_hune', '上げ船(あげふね)', '2015-10-10 00:00:00', '2015-10-10 07:52:07'),
(3, 1, 'mizuya_ishigaki', 'mizuya_ishigaki', '農家と水屋(のうかとみずや)', '2015-10-10 00:00:00', '2015-10-10 07:52:54'),
(4, 1, 'mizuya_naka', 'mizuya_naka', '水屋の中(みずやのなか)', '2015-10-10 00:00:00', '2015-10-10 07:53:33'),
(5, 1, 'mizuya_teibou', 'mizuya_teibou', '輪中の断面(わぢゅうのだんめん)', '2015-10-10 00:00:00', '2015-10-10 07:54:29'),
(6, 1, 'mizuya_mizuya', 'mizuya_mizuya', '水屋(みずや)', '2015-10-10 00:00:00', '2015-10-10 07:55:38'),
(7, 2, 'tower_nw', 'tower_nw', '北西の景色(ほくせいのけしき)', '2015-10-10 00:00:00', '2015-10-10 07:57:44'),
(8, 2, 'tower_ne', 'tower_ne', '北東の景色(ほくとうのけしき)', '2015-10-10 00:00:00', '2015-10-10 07:58:10'),
(9, 2, 'tower_s', 'tower_s', '南の景色(みなみのけしき)', '2015-10-10 00:00:00', '2015-10-10 07:58:52'),
(10, 3, 'tisui_kouzi', 'tisui_kouzi', '治水工事(ちすいこうじ)', '2015-10-10 00:00:00', '2015-10-10 08:03:37'),
(11, 3, 'tisui_mark', 'tisui_mark', '治水神社のマーク(ちすいじんじゃのマーク)', '2015-10-10 00:00:00', '2015-10-10 08:04:24'),
(12, 4, 'shimekiri_koko', 'shimekiri_koko', '締切堤の場所(しめきりていのばしょ)', '2015-10-10 00:00:00', '2015-10-10 08:05:18'),
(13, 4, 'shimekiri_matu', 'shimekiri_matu', '千本松原(せんぼんまつばら)', '2015-10-10 00:00:00', '2015-10-10 08:06:03'),
(14, 5, 'shiryoukan_yukie', 'shiryoukan_yukie', '平田靱負(ひらたゆきえ)', '2015-10-10 00:00:00', '2015-10-10 08:08:43'),
(15, 5, 'shiryoukan_zyakago', 'shiryoukan_zyakago', '蛇籠(じゃかご)', '2015-10-10 00:00:00', '2015-10-10 08:09:46'),
(16, 5, 'shiryoukan_wadyu', 'shiryoukan_wadyu', '輪中の成り立ち(わぢゅうのなりたち)', '2015-10-10 00:00:00', '2015-10-10 08:10:36');

-- --------------------------------------------------------

--
-- テーブルの構造 `kiso_question`
--

CREATE TABLE `kiso_question` (
  `question_id` int(11) NOT NULL,
  `question_title` text NOT NULL,
  `question_img` text NOT NULL,
  `question_q` text NOT NULL,
  `answer1` text NOT NULL,
  `answer2` text NOT NULL,
  `answer3` text NOT NULL,
  `answer_fa` text NOT NULL,
  `answer_num` int(11) NOT NULL,
  `quest_text` text NOT NULL,
  `question_created` datetime NOT NULL,
  `question_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `kiso_question`
--

INSERT INTO `kiso_question` (`question_id`, `question_title`, `question_img`, `question_q`, `answer1`, `answer2`, `answer3`, `answer_fa`, `answer_num`, `quest_text`, `question_created`, `question_modified`) VALUES
(1, '輪中クイズ', 'question_img1', '輪中に住む人々が、洪水(こうずい)の時にひなんしたり、大切なお米などをいれていた建物を何と言いますか', '水屋(みずや)', '水車小屋(すいしゃごや)', '水防倉庫(すいぼうそうこ)', '水屋(みずや)', 1, '洪水(こうずい)の時のひなん場所であり、米や水など生活に必要な物が入れてありました', '2015-10-10 00:00:00', '2015-10-10 09:47:26'),
(2, '輪中クイズ', 'question_img2', '江戸時代の治水(ちすい)工事は大変むずかしい工事でした。この工事の犠牲者(ぎせいしゃ)がまつられている神社は何とよばれていますか', '八幡(はちまん)神社', '稲荷(いなり)神社', '治水(ちすい)神社', '治水(ちすい)神社', 3, '治水(ちすい)神社には工事の犠牲者(ぎせいしゃ)が多くまつられています', '2015-10-10 00:00:00', '2015-10-10 09:48:42'),
(3, '輪中クイズ', 'question_img3', '木曽川(きそがわ)、長良川(ながらがわ)、揖斐川(いびがわ)のうち最も長い川はどれでしょう', '木曽川(きそがわ)', '長良川(ながらがわ)', '揖斐川(いびがわ)', '木曽川(きそがわ)', 1, '木曽川(きそがわ)は227km、長良川(ながらがわ)は166km、揖斐川(いびがわ)は121kmです', '2015-10-10 00:00:00', '2015-10-10 09:48:58'),
(4, '輪中クイズ', 'question_img4', '仏壇(ぶつだん)をロープと滑車(かっしゃ)でひっぱり上げる工夫(くふう)してある家があります。これは何のためでしょう。', '仏壇(ぶつだん)の重さをはかるため', '仏壇(ぶつだん)を移動してそうじするため', '仏壇(ぶつだん)を急いで2階へ上げるため', '仏壇(ぶつだん)を急いで2階へ上げるため', 3, '洪水(こうずい)の時に滑車(かっしゃ)を使って仏壇(ぶつだん)を守っていました。これを上げ仏壇(ぶつだん)と言います。', '2015-10-10 00:00:00', '2015-10-10 09:49:11'),
(5, '輪中クイズ', 'question_img5', '洪水(こうずい)の時にひなんするためにいつも家の軒下(のきした)などに用意してあった舟を何と呼びますか', '軒舟(のきふね)', 'うら舟', '上げ舟', '3', 3, '人々は洪水(こうずい)の時はこの舟にのってひなんしていました。', '2015-10-10 00:00:00', '2015-10-10 09:49:32');

-- --------------------------------------------------------

--
-- テーブルの構造 `kiso_spot`
--

CREATE TABLE `kiso_spot` (
  `id` int(11) NOT NULL,
  `spot_id` int(11) NOT NULL,
  `spot_name` text NOT NULL,
  `spot_photo` text NOT NULL,
  `spot_icon` text NOT NULL,
  `spot_text` text NOT NULL,
  `spot_created` datetime NOT NULL,
  `spot_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `kiso_spot`
--

INSERT INTO `kiso_spot` (`id`, `spot_id`, `spot_name`, `spot_photo`, `spot_icon`, `spot_text`, `spot_created`, `spot_modified`) VALUES
(1, 1, '農家と水屋(のうかとみずや)', 'spot_img1', 'spot_icon1\r\n', '水害(すいがい)に苦しんだ人たちの工夫(くふう)が見つけられるよ', '2015-10-10 00:00:00', '2015-10-10 09:24:39'),
(2, 2, '治水タワー(ちすいタワー)', 'spot_img2', 'spot_icon2', '60メートルの高さから木曽三川(きそさんせん)を見渡せるよ', '2015-10-10 00:00:00', '2015-10-10 09:24:29'),
(3, 5, '治水神社(ちすいじんじゃ)', 'spot_img3', 'spot_icon3', '治水(ちすい)工事をした人たちがまつられている神社だよ', '2015-10-10 00:00:00', '2015-10-10 09:25:26'),
(4, 6, '締切堤(しめきりてい)', 'spot_img4', 'spot_icon4', '二つの川の高さの違いが見つけられるよ', '2015-10-10 00:00:00', '2015-10-10 09:25:50'),
(5, 8, '資料館(しりょうかん)', 'spot_img5', 'spot_icon5', '公園の外にも見所がいっぱい', '2015-10-10 00:00:00', '2015-10-10 09:26:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kiso_movie`
--
ALTER TABLE `kiso_movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `kiso_question`
--
ALTER TABLE `kiso_question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `kiso_spot`
--
ALTER TABLE `kiso_spot`
  ADD PRIMARY KEY (`spot_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kiso_movie`
--
ALTER TABLE `kiso_movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kiso_question`
--
ALTER TABLE `kiso_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kiso_spot`
--
ALTER TABLE `kiso_spot`
  MODIFY `spot_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;