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
-- Table structure for table `temp_questions`
--

CREATE TABLE `temp_questions` (
  `pk_id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `created_ip_address` varchar(100) DEFAULT NULL,
  `createdBy` varchar(256) DEFAULT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedBy` varchar(256) DEFAULT NULL,
  `updatedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '''2''-inactive,''1''-active,''2''-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_questions`
--

INSERT INTO `temp_questions` (`pk_id`, `question`, `created_ip_address`, `createdBy`, `createdDate`, `updatedBy`, `updatedDate`, `status`) VALUES
(1, 'Cannot modify header information - headers already > sent by (output started at > \\vendor\\phpunit\\phpunit\\src\\Util\\Printer.php:104)', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1'),
(2, 'Call to undefined method CodeIgniter\\Database\\MySQLi\\Builder:: find()', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1'),
(3, 'Codeigniter to production server [closed]', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1'),
(4, 'image doesn\'t display from database Codigniter 4', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1'),
(5, 'Access to XMLHttpRequest at from origin \'http://localhost:4200\' has been blocked by CORS policy: Response to preflight request doesn\'t pass access [closed]', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1'),
(6, 'Honeypot Codeigniter 4', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1'),
(7, 'How can I properly pass data into a view intended for html email template in Codeigniter4?', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1'),
(8, 'Error while using running chat application in CodeIgniter 4', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1'),
(9, 'how can I add custom dropdown in server side datatable and pas data when select dropdown value in php? [closed]', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1'),
(10, 'Get current route rule', NULL, NULL, '2021-05-09 17:18:09', NULL, '2021-05-09 17:18:09', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temp_questions`
--
ALTER TABLE `temp_questions`
  ADD PRIMARY KEY (`pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temp_questions`
--
ALTER TABLE `temp_questions`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
