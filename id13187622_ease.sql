-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021 年 02 月 22 日 10:41
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `id13187622_ease`
--

-- --------------------------------------------------------

--
-- 資料表結構 `nearby`
--

CREATE TABLE `nearby` (
  `id` int(11) NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `su-bcategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `recommend` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `nearby`
--

INSERT INTO `nearby` (`id`, `category`, `su-bcategory`, `image`, `name`, `recommend`, `time`, `tel`, `address`, `website`) VALUES
(1, ' Food', 'Afternoon-Tea', '', '宮原眼科', '冰淇淋、巧克力', '10:00 - 22:00 ', '04-2227-1927', '台中市中區中山路20號', 'http://www.miyahara.com.tw/index-go.php'),
(2, 'Food', 'Sandwiches', '', '洪瑞珍', '三明治', '09:00 - 22:00', '04-2462-1398', '台中市中區中山路125-2號', ''),
(3, ' Food', 'Afternoon-Tea', '', '第四信用合作社', '冰淇淋、巧克力', '10:00 - 22:00 ', '04-2227-1966', '台中市中區中山路72號', 'http://www.miyahara.com.tw/index-go.php');

-- --------------------------------------------------------

--
-- 資料表結構 `nearby-category`
--

CREATE TABLE `nearby-category` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `nearby-category`
--

INSERT INTO `nearby-category` (`id`, `type`, `name`) VALUES
(1, 'main', 'Food'),
(2, 'sub', 'Afternoon-Tea'),
(3, 'sub', 'Sandwiches');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `duration` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `notice` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `start`, `end`, `duration`, `title`, `caption`, `detail`, `notice`, `active`) VALUES
(1, '2019-11-09', '2019-12-01', '花海節期間', '花海節期間【 住宜舍 穿花襯衫 】送住宿折價券', '活動時間內住宿在宜含單人旅店的國人，每人贈送二張折價券\r\n下次 <a href=\"https://easeinn.com.tw/\" target=\"_blank\" style=\"bold; color:blue\">宜舍官網</a> 訂房後，櫃檯辦理辦入住手續時出示折價券方能折抵。', '', '本活動一次限用一張\r\n更詳細活動辦法請洽宜舍櫃檯及券面說明\r\n本活動恕不得與其他優惠及秋冬遊補助重複使用\r\n宜舍單人旅店保有本專案最終解釋權力', 1),
(2, '2019-11-09', '2019-12-01', '', '花海節期間【 住宜舍 穿花襯衫 】送住宿折價券', '活動時間內住宿在宜含單人旅店的國人，每人贈送二張折價券\r\n下次 <a href=\"https://easeinn.com.tw/\" target=\"_blank\" style=\"bold; color:blue\">宜舍官網</a> 訂房後，櫃檯辦理辦入住手續時出示折價券方能折抵。', '', '本活動一次限用一張\r\n更詳細活動辦法請洽宜舍櫃檯及券面說明\r\n本活動恕不得與其他優惠及秋冬遊補助重複使用\r\n宜舍單人旅店保有本專案最終解釋權力', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `account` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `booking` text COLLATE utf8_unicode_ci NOT NULL,
  `bouns` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `nearby`
--
ALTER TABLE `nearby`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `nearby-category`
--
ALTER TABLE `nearby-category`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `nearby`
--
ALTER TABLE `nearby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `nearby-category`
--
ALTER TABLE `nearby-category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
