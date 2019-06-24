-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： Y-m-d: H:i:s
-- 伺服器版本: 5.6.20
-- PHP 版本： 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `student`
--

-- --------------------------------------------------------

--
-- 資料表結構 `106midterm_table`
--

CREATE TABLE IF NOT EXISTS `106midterm_table` (
  `Id_no` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Sex` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tel` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `106midterm_table`
--

INSERT INTO `106midterm_table` (`Id_no`, `Name`, `Sex`, `Address`, `Tel`) VALUES
('A901001', 'AMY', 'F', '住址 1', 212345678),
('A901002', 'James', 'M', '住址 2', 312345678),
('B901001', 'Kavin', 'M', '住址 3', 412345678),
('B901002', 'Daniel', 'M', '住址 4', 512345678),
('C901005', 'john', 'M', '住址 5', 612345678),
('C901006', 'Wang', 'F', '住址 6', 712345678),
('D901007', 'Cindy', 'F', '住址 7', 812345678),
('D901008', 'Geroage', 'M', '住址 8', 912345678);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `106midterm_table`
--
ALTER TABLE `106midterm_table`
 ADD PRIMARY KEY (`Id_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
