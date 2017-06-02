-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2017 at 12:15 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, '96', 'juuuuuuuuuuuuuuuu', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(2, '963', '', '8484848484'),
(3, 'بسم الله الرحمن الرحيم', '', 'وبه نهتدي وسنتعين'),
(5, 'جامعة الخرطوم', '', 'سكول أوف ماس'),
(6, 'تنظيم الوقت', '', 'صلاة الصبح حاضر \r\nتجهيز الطعام والنظافة\r\nوقت العمل \r\nاوقات الراحة 5 مرات في اليوم لمدة 15 دقيقة'),
(8, 'vvvvvvvvvvvvvdssx', '', 'ddddddddddddddddddddddddddddddd'),
(9, 'vvvvvvvvvvvvvdssx', '', 'ddddddddddddddddddddddddddddddd'),
(10, 'vvvvvvvvvvvvvdssx', '', 'ddddddddddddddddddddddddddddddd'),
(11, 'vvvvvvvvvvvvvdssx', '', 'ddddddddddddddddddddddddddddddd'),
(12, 'vvvvvvvvvvvvvdssx', '', 'ddddddddddddddddddddddddddddddd'),
(13, 'vvvvvvvvvvvvvdssx', '', 'ddddddddddddddddddddddddddddddd'),
(14, 'jjhjjhhjvfjjkvkjkk', '', 'kiklklklhg'),
(15, 'jjhjjhhjvfjjkvkjkk', '', 'kiklklklhg'),
(16, 'jjhjjhhjvfjjkvkjkk', '', 'kiklklklhg'),
(17, 'jjhjjhhjvfjjkvkjkk', '', 'kiklklklhg'),
(18, 'jjhjjhhjvfjjkvkjkk', '', 'kiklklklhg');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `pers_no` int(11) NOT NULL,
  `pers_name` varchar(200) DEFAULT NULL,
  `pers_place` text NOT NULL,
  `pers_mail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='contian the person information';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pers_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
