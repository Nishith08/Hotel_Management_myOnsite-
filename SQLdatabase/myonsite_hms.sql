-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 03:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myonsite_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `res_amenities_master`
--

CREATE TABLE `res_amenities_master` (
  `amenitiesid` int(11) NOT NULL,
  `amenitiesname` varchar(200) NOT NULL,
  `amenitiesstock` varchar(20) NOT NULL,
  `roomid` varchar(110) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_amenities_master`
--

INSERT INTO `res_amenities_master` (`amenitiesid`, `amenitiesname`, `amenitiesstock`, `roomid`) VALUES
(1, 'Towel', '', '3,2'),
(2, 'Tv', '', '3,2'),
(3, 'Gizer', '', '0'),
(4, 'Room Cleaner', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `res_branch_master`
--

CREATE TABLE `res_branch_master` (
  `branchid` int(11) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_branch_master`
--

INSERT INTO `res_branch_master` (`branchid`, `bname`, `username`, `password`) VALUES
(1, 'Hotel Foodza hub', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `res_room_master`
--

CREATE TABLE `res_room_master` (
  `roomid` int(11) NOT NULL,
  `rname` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_room_master`
--

INSERT INTO `res_room_master` (`roomid`, `rname`, `status`) VALUES
(2, 'R2 - 2nd Floor', 'Available'),
(3, 'R31 - 3rd floor', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `res_user_master`
--

CREATE TABLE `res_user_master` (
  `umid` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `umobile` varchar(200) NOT NULL,
  `branchid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_user_master`
--

INSERT INTO `res_user_master` (`umid`, `uname`, `umobile`, `branchid`) VALUES
(1, 'Nishith', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res_amenities_master`
--
ALTER TABLE `res_amenities_master`
  ADD PRIMARY KEY (`amenitiesid`);

--
-- Indexes for table `res_branch_master`
--
ALTER TABLE `res_branch_master`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `res_room_master`
--
ALTER TABLE `res_room_master`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `res_user_master`
--
ALTER TABLE `res_user_master`
  ADD PRIMARY KEY (`umid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `res_amenities_master`
--
ALTER TABLE `res_amenities_master`
  MODIFY `amenitiesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `res_branch_master`
--
ALTER TABLE `res_branch_master`
  MODIFY `branchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `res_room_master`
--
ALTER TABLE `res_room_master`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `res_user_master`
--
ALTER TABLE `res_user_master`
  MODIFY `umid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
