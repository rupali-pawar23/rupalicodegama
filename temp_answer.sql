-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 03:25 PM
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
-- Table structure for table `temp_answer`
--

CREATE TABLE `temp_answer` (
  `pk_id` int(11) NOT NULL,
  `fk_ques_id` int(11) DEFAULT NULL COMMENT 'primary key of master category',
  `answer` text DEFAULT NULL,
  `created_ip_address` varchar(155) DEFAULT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '''2''-inactive,''1''-active,''2''-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_answer`
--

INSERT INTO `temp_answer` (`pk_id`, `fk_ques_id`, `answer`, `created_ip_address`, `createdDate`, `updatedDate`, `updatedBy`, `status`) VALUES
(1, 1, 'need your help. I try to testing my login page with feature test but i got this error, even thats run normaly when code is executed. but went i test the code i got error like this. ErrorException: ..', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(2, 2, 'I\'m making CRUD, with upload a file (image), but when I want to use unlink to delete the file I got an error, here\'s below. Codeigniter4 error: Call to undefined method CodeIgniter\\Database\\MySQLi\\...', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(3, 3, 'please what is proper and secure way to publish codeigniter on production server, (I mean files structure, not code), I can\'t find anythink what would work, thanks for response enter image ...', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(4, 4, 'i am new using codigniter. i am trying to display images from the mysql database by sending them to the database using a create page where you can type in a title, some info and select an image, ...', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(5, 5, 'Having mentioned CORS error while requesting from angular to codeigniter 4 via API, Access to XMLHttpRequest at \'http://localhost:8080/api/teams\' from origin \'http://localhost:4200\' has been blocked ...', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(6, 6, 'how is it possible to catch the honeypot-exception in Codeigniter 4? I simulated the bot, so that the field of honeypot is filled. But CI4 is throwing the exception instantly. I would like to log that ...', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(7, 7, 'I am trying to pass data into a view from which contents will be sent as an html email.', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(8, 7, ' The view file is loading properly and email delivers except that it doesn\'t show the data I have passed ...', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(9, 8, 'Downloaded a git repo for a chat application using the below link Git Repo for Chat Application Then changed the env file to .env file and also uncommented default database block as shown below. ...', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(10, 9, 'how can I add custom dropdown in server side datatable and pas data when select dropdown value in php ?', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(11, 10, 'I\'m trying to get the current route rule in my filter. $routes->group(\'creditCalculator\', [\'namespace\' => \'\\Modules\\CreditCalculator\', \"filter\" => \'auth:recht1\', \'extra_credentials\' ...', NULL, '2021-05-09 11:18:16', NULL, NULL, '1'),
(15, 3, 'ab', '::1', '2021-05-09 12:15:26', NULL, NULL, '1'),
(16, 5, 'hfg', '::1', '2021-05-09 12:15:36', NULL, NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temp_answer`
--
ALTER TABLE `temp_answer`
  ADD PRIMARY KEY (`pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temp_answer`
--
ALTER TABLE `temp_answer`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
