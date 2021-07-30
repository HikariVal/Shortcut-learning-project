-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 06:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shortcut_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `1key`
--

CREATE TABLE `1key` (
  `id` int(11) NOT NULL,
  `key1` text NOT NULL,
  `category` text NOT NULL,
  `explanation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `1key`
--

INSERT INTO `1key` (`id`, `key1`, `category`, `explanation`) VALUES
(1, 'F10', 'category_chrome-window', 'ツールバーの右端の項目（設定）にフォーカスする'),
(2, 'F6', 'category_chrome-window', 'フォーカスのないダイアグとすべてのツールバーにフォーカスを切り替える'),
(3, 'F1', 'category_chrome-window\r\n', 'ヘルプセンターを開く'),
(4, 'F7', 'category_chrome-window\r\n', 'キーボードの矢印やタブでサイト内を移動する'),
(5, 'F6', 'category_addressbar', 'アドレスバーに移動'),
(6, 'F5', 'category_webpage', 'ページの再読み込み'),
(7, 'Escape', 'category_webpage', '読み込みのページを停止'),
(8, 'Tab', 'category_webpage', 'クリック可能な項目間を移動'),
(9, 'F11', 'category_webpage', '全画面表示モードをオンかオフ'),
(10, 'Space', 'category_webpage', 'ウェブページを1画面ずつ下にスクロールする'),
(11, 'Home\r\n', 'category_webpage', 'ページの先頭に移動する'),
(12, 'End', 'category_webpage', 'ページの最後に移動');

-- --------------------------------------------------------

--
-- Table structure for table `2key`
--

CREATE TABLE `2key` (
  `key1` int(11) NOT NULL,
  `key2` int(11) NOT NULL,
  `category` text NOT NULL,
  `explanation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `3key`
--

CREATE TABLE `3key` (
  `key1` int(11) NOT NULL,
  `key2` int(11) NOT NULL,
  `key3` int(11) NOT NULL,
  `category` text NOT NULL,
  `explanation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1key`
--
ALTER TABLE `1key`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1key`
--
ALTER TABLE `1key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
