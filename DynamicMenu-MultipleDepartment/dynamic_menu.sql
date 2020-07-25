-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 06:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `department_status` varchar(10) NOT NULL DEFAULT 'Enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_status`) VALUES
(1, 'Admin', 'Enable'),
(2, 'Accounts', 'Enable'),
(3, 'HR', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_icon` varchar(200) NOT NULL,
  `menu_status` varchar(20) NOT NULL DEFAULT 'Enable',
  `menu_department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_icon`, `menu_status`, `menu_department`) VALUES
(1, 'Category', 'fa fa-list', 'Enable', ''),
(2, 'User', 'fa fa-user', 'Enable', ''),
(3, 'Salary', 'fa fa-cash', 'Enable', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_useraccess`
--

CREATE TABLE `menu_useraccess` (
  `permission_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_useraccess`
--

INSERT INTO `menu_useraccess` (`permission_id`, `menu_id`, `sub_menu_id`, `user_id`, `user_permission`) VALUES
(7, 1, 1, 1, 'True'),
(8, 2, 2, 1, 'True'),
(9, 2, 3, 1, 'False');

-- --------------------------------------------------------

--
-- Table structure for table `submenu_department`
--

CREATE TABLE `submenu_department` (
  `subid` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenu_department`
--

INSERT INTO `submenu_department` (`subid`, `menu_id`, `sub_menu_id`, `department_id`, `status`) VALUES
(1, 1, 1, 1, 'Enable'),
(2, 3, 2, 2, 'Enable'),
(3, 3, 2, 3, 'Enable'),
(4, 2, 3, 2, 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `submenu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_name` varchar(100) NOT NULL,
  `submenu_url` varchar(200) NOT NULL,
  `submenu_display` varchar(10) NOT NULL,
  `submenu_order` int(11) NOT NULL,
  `submenu_status` varchar(20) NOT NULL DEFAULT 'Enable',
  `submenu_department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`submenu_id`, `menu_id`, `submenu_name`, `submenu_url`, `submenu_display`, `submenu_order`, `submenu_status`, `submenu_department`) VALUES
(1, 1, 'Category List', 'category_list.php', 'Yes', 0, 'Enable', ''),
(2, 3, 'Salary Generate', 'salary_generate.php', 'Yes', 0, 'Enable', ''),
(3, 2, 'Add User', 'user_add.php', 'Yes', 0, 'Enable', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_department` varchar(100) NOT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT 'Enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_department`, `user_status`) VALUES
(1, 'Knowledge', '1', 'Enable'),
(2, 'Thruster', '2', 'Enable'),
(3, 'User', '3', 'Enable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_useraccess`
--
ALTER TABLE `menu_useraccess`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `submenu_department`
--
ALTER TABLE `submenu_department`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu_useraccess`
--
ALTER TABLE `menu_useraccess`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `submenu_department`
--
ALTER TABLE `submenu_department`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
