-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 11:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_17`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tbl`
--

CREATE TABLE `complaint_tbl` (
  `complaint_id` int(10) NOT NULL,
  `login_id` int(5) NOT NULL,
  `model_no` varchar(20) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `response` varchar(1000) NOT NULL,
  `status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_tbl`
--

INSERT INTO `complaint_tbl` (`complaint_id`, `login_id`, `model_no`, `complaint`, `response`, `status`) VALUES
(1, 2, 'D56882456987', 'screen flicker', '', 1),
(2, 2, 'D56882456987', 'power button', '', 0),
(3, 2, 'D56789654123', 'power button', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `device_tbl`
--

CREATE TABLE `device_tbl` (
  `model_no` varchar(40) NOT NULL,
  `device_name` varchar(40) NOT NULL,
  `device_type` varchar(20) NOT NULL,
  `status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device_tbl`
--

INSERT INTO `device_tbl` (`model_no`, `device_name`, `device_type`, `status`) VALUES
('D56789654123', 'nokia', '', 1),
('D56882456987', 'blackberry', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `login_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(10) DEFAULT 'customer',
  `status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`login_id`, `username`, `password`, `user_type`, `status`) VALUES
(1, 'admin', 'Admin@123', 'admin', 1),
(2, 'anu12', 'tJ/W&PB2', 'customer', 1),
(3, 'technician', 'Technician@123', 'technician', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

CREATE TABLE `register_tbl` (
  `reg_id` int(5) NOT NULL,
  `login_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `file` varchar(50) NOT NULL,
  `status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (`reg_id`, `login_id`, `name`, `email`, `file`, `status`) VALUES
(1, 1, 'admin', 'admin@outlook.com', '1.jpg', 1),
(2, 2, 'anu benoy', 'anubenoy@mca.ajce.in', 'gareth-harper-dABKxsPTAEk-unsplash.jpg', 1),
(3, 3, 'technician', 'technician@gmail.com', 'bg3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `servicedistrict_tbl`
--

CREATE TABLE `servicedistrict_tbl` (
  `district_id` int(10) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicedistrict_tbl`
--

INSERT INTO `servicedistrict_tbl` (`district_id`, `district_name`, `status`) VALUES
(1, 'Kottayam', 1),
(2, 'Thrissur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sevicecentre_tbl`
--

CREATE TABLE `sevicecentre_tbl` (
  `serviceCentre_id` int(10) NOT NULL,
  `district_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sevicecentre_tbl`
--

INSERT INTO `sevicecentre_tbl` (`serviceCentre_id`, `district_id`, `name`, `email`, `phone_no`, `address`, `status`) VALUES
(1, 1, 'oxygen', 'oxygen@gmail.com', '9839874562', 'near Kurisgal,\r\nkanjirapally p.o\r\nkottayam', 1),
(2, 1, 'KalarS', 'kalars@outlook.com', '9874563214', 'near civil station,\r\nkottayam.', 1),
(3, 2, 'KalarS', 'kalars@outlook.com', '9745632178', 'near maydan,\r\nanavali\r\nthissur.', 1),
(4, 2, 'glanta', 'glanta@gmail.com', '654789321', 'near edger gas station,\r\nvellan\r\nthissur', 1),
(5, 2, 'oxygen', 'oxygenthsr@gmail.com', '6879541237', 'near up school,\r\nmeenakudi\r\nthissur.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint_tbl`
--
ALTER TABLE `complaint_tbl`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `device_tbl`
--
ALTER TABLE `device_tbl`
  ADD PRIMARY KEY (`model_no`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `register_tbl`
--
ALTER TABLE `register_tbl`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `servicedistrict_tbl`
--
ALTER TABLE `servicedistrict_tbl`
  ADD PRIMARY KEY (`district_id`),
  ADD UNIQUE KEY `district_name` (`district_name`);

--
-- Indexes for table `sevicecentre_tbl`
--
ALTER TABLE `sevicecentre_tbl`
  ADD PRIMARY KEY (`serviceCentre_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint_tbl`
--
ALTER TABLE `complaint_tbl`
  MODIFY `complaint_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_tbl`
--
ALTER TABLE `register_tbl`
  MODIFY `reg_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicedistrict_tbl`
--
ALTER TABLE `servicedistrict_tbl`
  MODIFY `district_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sevicecentre_tbl`
--
ALTER TABLE `sevicecentre_tbl`
  MODIFY `serviceCentre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
