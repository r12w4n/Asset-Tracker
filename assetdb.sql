-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql301.epizy.com
-- Generation Time: Oct 25, 2019 at 12:58 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24660641_assetdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `imei`
--

CREATE TABLE `imei` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `pmodel` varchar(30) NOT NULL,
  `imei` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imei`
--

INSERT INTO `imei` (`user_id`, `id`, `pmodel`, `imei`, `status`) VALUES
(62, 1, 'Nexus 6P', '867982020432291', 'Stolen'),
(62, 2, 'Iphone 11', '183740934834234', 'Stolen'),
(0, 3, 'Mi Note 3', '28934703472093', 'Sold'),
(62, 5, 'Mi Note 3', '280174093478023', 'Owned'),
(0, 6, 'Nokia Lumia ', '65798724682796', 'Owned'),
(64, 9, 'Nokia Lumia', '35268726876298', 'Owned'),
(64, 10, 'Micromax Bolt 380', '524773687236', 'Stolen'),
(64, 11, 'Nokia 3310', '87627682769276', 'Stolen'),
(65, 12, 'Lg k10', '355656105861423', 'Stolen'),
(65, 13, 'samsung m30', '354951080824786', 'Sold'),
(65, 14, 'iphone x ', '321111111111111', 'Sold'),
(65, 15, 'I phone x', '354951080821234', 'Sold'),
(65, 16, 'Samsung m30', '354951080821235', 'Sold'),
(65, 17, 'vivo a5', '354951080824777', 'Owned'),
(65, 18, 'Lg k10', '35495108082480', 'Owned'),
(66, 57, 'Redmi note 7', '579664482322719', 'Owned'),
(65, 22, 'Lg k10', '35495108082478', 'Lost'),
(66, 56, 'YU yunicorn', '838271031266917', 'Owned'),
(62, 24, 'Asus Max Prime Pro', '7352826292528', 'Stolen'),
(66, 55, 'iball andy 4.0', '658874185393947', 'Sold'),
(65, 28, 'Iphone X', '354951080821212', 'Owned'),
(65, 29, 'Nexus Google', '355656105861428', 'Owned'),
(66, 54, 'LG K10 ', '358774982372913', 'Owned'),
(66, 53, 'samsung J7 pro', '358674081392912', 'Owned'),
(65, 59, 'Vivo', '863881038653522', 'Owned'),
(62, 51, 'HTC 11 PRO', '123456789123456', 'Stolen'),
(65, 58, 'Vivo ', '863881038653530', 'Owned');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `phone`, `email`, `password`) VALUES
(62, 'rizwan', 'sayed', '8286665428', 'rizwan@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(63, 'irfan', 'sayed', '8767933178', 'irfan@gmail.com', 'cb01e7a9ac292aa6d0a5c7a412126d6a'),
(64, 'Zakir', 'Faruki', '8287776546', 'zakir@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(65, 'Rishi', 'Vas', '9765325272', 'rishi@gmail.com', '482c811da5d5b4bc6d497ffa98491e38'),
(66, 'KETAN', 'THAKUR', '8788519820', 'ketan78689@gmail.com', '9d2cfeed6cd419a4c0a08b51c96f0691');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imei`
--
ALTER TABLE `imei`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imei` (`imei`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imei`
--
ALTER TABLE `imei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
