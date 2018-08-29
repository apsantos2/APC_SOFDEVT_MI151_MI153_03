-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 07:25 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `laun_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `laun_priority` int(11) NOT NULL,
  `laun_weight` int(11) NOT NULL,
  `laun_date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `laun_claimed` tinyint(4) NOT NULL DEFAULT '0',
  `laun_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`laun_id`, `customer_name`, `laun_priority`, `laun_weight`, `laun_date_received`, `laun_claimed`, `laun_type_id`) VALUES
(7, 'Reyvelyn Ybanez Viovicente', 7, 3, '2017-03-19 22:38:02', 1, 1),
(9, 'Winnie Alterado Damayo', 3, 2, '2017-03-19 22:43:23', 1, 1),
(10, 'Jane Dougah Hah', 1, 2, '2017-03-19 22:43:23', 1, 2),
(11, 'Johnny Deep', 7, 3, '2017-03-19 23:53:36', 1, 1),
(12, 'Winnie Alterado Damayo', 2, 2, '2017-03-22 16:14:48', 1, 2),
(13, 'Winnie Alterado Damayo', 4, 10, '2017-03-22 16:15:33', 1, 1),
(14, 'Winnie Damayo', 1, 2, '2018-08-05 04:46:29', 1, 1),
(15, 'Rain Potoza', 2, 3, '2018-08-05 04:46:29', 1, 2),
(16, 'Bea Ramos', 3, 3, '2018-08-05 04:46:28', 1, 11),
(17, 'David Solomo', 4, 6, '2018-08-05 04:46:29', 1, 11),
(18, 'Dar Wish', 5, 2, '2018-08-05 04:46:29', 1, 5),
(19, 'Darwin Opulencia', 6, 4, '2018-08-05 04:46:29', 1, 3),
(20, 'Nics Caasi', 7, 8, '2018-08-05 04:46:29', 1, 7),
(21, 'Bern Santos', 8, 5, '2018-08-05 04:46:29', 1, 2),
(22, 'Aeron Mendoza', 9, 6, '2018-08-05 04:46:28', 1, 11),
(23, 'Mary Santiago', 10, 2, '2018-08-05 04:46:29', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `laundry_type`
--

CREATE TABLE `laundry_type` (
  `laun_type_id` int(11) NOT NULL,
  `laun_type_desc` varchar(50) NOT NULL,
  `laun_type_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry_type`
--

INSERT INTO `laundry_type` (`laun_type_id`, `laun_type_desc`, `laun_type_price`) VALUES
(1, 'Blanket', 40),
(2, 'Polo', 35),
(3, 'T-shirt', 35),
(4, 'Pants', 35),
(5, 'Socks', 20),
(6, 'Tuxedo', 30),
(7, 'Bed Sheet', 40),
(8, 'Curtain', 40),
(9, 'Dress', 35),
(10, 'Towels', 40),
(11, 'Assorted', 50);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `sale_customer_name` varchar(100) NOT NULL,
  `sale_type_desc` varchar(50) NOT NULL,
  `sale_date_paid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sale_laundry_received` datetime NOT NULL,
  `sale_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `sale_customer_name`, `sale_type_desc`, `sale_date_paid`, `sale_laundry_received`, `sale_amount`) VALUES
(1, 'Reyvelyn Ybanez Viovicente', 'Blanket', '2017-03-18 22:38:02', '2017-03-20 00:00:00', 60),
(2, 'Jane Dougah Hah', 'Clothes', '2017-03-19 22:43:23', '2017-03-20 06:43:16', 60),
(3, 'Winnie Alterado Damayo', 'Blanket', '2017-03-19 22:43:23', '2017-03-20 06:42:58', 40),
(4, 'Johnny Deep', 'Blanket', '2017-03-19 23:53:36', '2017-03-20 07:53:27', 60),
(5, 'Winnie Alterado Damayo', 'Clothes', '2017-03-22 16:14:47', '2017-03-23 00:14:40', 60),
(6, 'Winnie Alterado Damayo', 'Blanket', '2017-03-22 16:15:33', '2017-03-23 00:15:28', 200),
(7, 'Aeron Mendoza', 'Assorted', '2018-08-05 04:46:28', '2018-08-05 12:44:15', 300),
(8, 'Bea Ramos', 'Assorted', '2018-08-05 04:46:28', '2018-08-05 12:40:38', 150),
(9, 'Bern Santos', 'Polo', '2018-08-05 04:46:29', '2018-08-05 12:43:47', 175),
(10, 'Darwin Opulencia', 'T-shirt', '2018-08-05 04:46:29', '2018-08-05 12:42:57', 140),
(11, 'Dar Wish', 'Socks', '2018-08-05 04:46:29', '2018-08-05 12:42:38', 40),
(12, 'David Solomo', 'Assorted', '2018-08-05 04:46:29', '2018-08-05 12:42:17', 300),
(13, 'Mary Santiago', 'Assorted', '2018-08-05 04:46:29', '2018-08-05 12:44:37', 100),
(14, 'Nics Caasi', 'Bed Sheet', '2018-08-05 04:46:29', '2018-08-05 12:43:28', 320),
(15, 'Rain Potoza', 'Polo', '2018-08-05 04:46:29', '2018-08-05 12:41:54', 105),
(16, 'Winnie Damayo', 'Blanket', '2018-08-05 04:46:29', '2018-08-05 12:41:46', 80);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_account` varchar(50) NOT NULL,
  `user_password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_account`, `user_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`laun_id`),
  ADD KEY `laun_type_id` (`laun_type_id`);

--
-- Indexes for table `laundry_type`
--
ALTER TABLE `laundry_type`
  ADD PRIMARY KEY (`laun_type_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `laun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `laundry_type`
--
ALTER TABLE `laundry_type`
  MODIFY `laun_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laundry`
--
ALTER TABLE `laundry`
  ADD CONSTRAINT `laundry_ibfk_1` FOREIGN KEY (`laun_type_id`) REFERENCES `laundry_type` (`laun_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
