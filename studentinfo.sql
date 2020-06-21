-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 11:31 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` int(11) NOT NULL,
  `course_no` varchar(15) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_duration` varchar(15) NOT NULL,
  `course_costs` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `course_no`, `course_name`, `course_duration`, `course_costs`) VALUES
(5, 'CSE 1101', 'C++', '3 Credit', '10000'),
(6, 'CSE 4101', 'Machine Learning', '3 Credit', '12000'),
(7, 'EEE 3101', 'Electronics', '3 Credit', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `sclass` int(10) NOT NULL,
  `sphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `saddress`, `sclass`, `sphone`) VALUES
(6, 'Fahim Ahmed', 'Dhanmondi Lake', 1, '01711223344'),
(7, 'Saikat Ahmed', 'Gulshan-2', 4, '01822334455'),
(8, 'Karim Rahman', 'Banani', 3, '01911556677');

-- --------------------------------------------------------

--
-- Table structure for table `studentclass`
--

CREATE TABLE `studentclass` (
  `cid` int(10) NOT NULL,
  `cname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentclass`
--

INSERT INTO `studentclass` (`cid`, `cname`) VALUES
(1, 'CSE'),
(2, 'EEE'),
(3, 'ME'),
(4, 'IPE'),
(5, 'ECE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentclass`
--
ALTER TABLE `studentclass`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentclass`
--
ALTER TABLE `studentclass`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
