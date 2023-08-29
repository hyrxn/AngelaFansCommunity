-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 05:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angela_fan_community_ispm_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `fanslist`
--

CREATE TABLE `fanslist` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `profilePic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fanslist`
--

INSERT INTO `fanslist` (`username`, `password`, `email`, `fullName`, `gender`, `dob`, `nationality`, `profilePic`) VALUES
('anna', 'slFbpPHYpPLDY', 'anna@gmail.com', 'Annabelle', 'Female', '2021-12-15', 'Japan', '✨.jpg'),
('hellen', 'sl8jYqKRuz4m6', 'hellen@gmail.com', 'Hitomi Satsuya', 'Female', '2000-02-01', 'Japan', 'Karen Holmes on Twitter.jpg'),
('Ryo', 'slYizegIl8Fxw', 'ryoku@gmail.com', 'Ryoku Smith', 'Male', '1997-01-17', 'America', 'تَنسِـيقات _™ { مُغلَق }.jpg'),
('Vina', 'sl5ivfIWGcbpw', 'vina@gmail.com', 'Vina Elvira', 'Female', '2021-12-11', 'America', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `meetingID` int(10) NOT NULL,
  `meetingDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `venue` varchar(50) NOT NULL,
  `contactPerson` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`meetingID`, `meetingDate`, `startTime`, `endTime`, `venue`, `contactPerson`) VALUES
(1, '2017-12-12', '09:00:00', '11:00:00', 'Taman Indonesia', 'Anto - 08113017337'),
(2, '2017-12-19', '08:00:00', '10:00:00', 'El Rey Theatre', 'Louis - 2135550198'),
(3, '2017-12-28', '14:00:00', '16:00:00', 'Auditorium Singapore', 'Veridium - 0513587283');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fanslist`
--
ALTER TABLE `fanslist`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`meetingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `meetingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
