-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 2 月 06 日 05:27
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `bookname` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookname`, `url`, `comment`, `indate`) VALUES
(2, '邂逅の森', 'https://www.amazon.co.jp/%E9%82%82%E9%80%85%E3%81%AE%E6%A3%AE-%E6%96%87%E6%98%A5%E6%96%87%E5%BA%AB-%E7%86%8A%E8%B0%B7-%E9%81%94%E4%B9%9F/dp/4167724014', '読んだ後、泣', '2022-02-05 22:07:06'),
(14, 'AELU', 'https://www.aelu.jp/', 'フレンチ系レストラン', '2022-02-05 22:21:24'),
(15, '寿司つぼみ', 'https://tabelog.com/tokyo/A1317/A131701/13221782/', '寿司', '2022-02-05 22:39:39'),
(16, 'こぐま商店', 'https://tabelog.com/tokyo/A1317/A131701/13221782/', 'こぐま', '2022-02-05 22:42:13'),
(17, 'test', 'https://tabelog.com/tokyo/A1317/A131701/13221782/', 'test', '2022-02-05 22:47:11'),
(18, '鮨 つきうだ', 'https://tabelog.com/tokyo/A1317/A131701/13199689/', 'うまい', '2022-02-05 23:00:24');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
