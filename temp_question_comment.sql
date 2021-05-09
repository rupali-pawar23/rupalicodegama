-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 03:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev-templete-local`
--

-- --------------------------------------------------------

--
-- Table structure for table `temp_question_comment`
--

CREATE TABLE `temp_question_comment` (
  `pk_id` int(11) NOT NULL,
  `fk_ques_id` int(11) DEFAULT NULL COMMENT 'primary key of master category',
  `comment` text DEFAULT NULL,
  `created_ip_address` varchar(155) DEFAULT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '''2''-inactive,''1''-active,''2''-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_question_comment`
--

INSERT INTO `temp_question_comment` (`pk_id`, `fk_ques_id`, `comment`, `created_ip_address`, `createdDate`, `updatedDate`, `updatedBy`, `status`) VALUES
(1, 3, 'i made a cookie popup for my index page, but and the html and js seems right and should be working but somehow only the orange button works for accepting the cookies, when i click button ', '::1', '2021-05-09 12:15:26', NULL, NULL, '1'),
(2, 5, 'I want to do show/hide div based on dropdown box selection. And display relevant content / text for each month as in the attached example. also need after the month passes th', '::1', '2021-05-09 12:15:36', NULL, NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temp_question_comment`
--
ALTER TABLE `temp_question_comment`
  ADD PRIMARY KEY (`pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temp_question_comment`
--
ALTER TABLE `temp_question_comment`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
