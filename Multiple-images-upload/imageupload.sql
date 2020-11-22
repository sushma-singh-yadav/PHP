-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 08:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imageupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `multiple-images`
--

CREATE TABLE `multiple-images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_status` varchar(20) NOT NULL DEFAULT 'Enable',
  `image_createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiple-images`
--

INSERT INTO `multiple-images` (`image_id`, `image_name`, `image_status`, `image_createtime`) VALUES
(1, 'images.png', 'Enable', '2020-10-18 11:48:14'),
(2, 'download.png', 'Enable', '2020-10-18 11:48:14'),
(3, 'menu.jpg', 'Enable', '2020-10-18 11:48:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multiple-images`
--
ALTER TABLE `multiple-images`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multiple-images`
--
ALTER TABLE `multiple-images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
