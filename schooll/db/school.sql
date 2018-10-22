-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 10:07 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `ENO` varchar(20) NOT NULL,
  `NAME` varchar(80) NOT NULL,
  `FNAME` varchar(80) NOT NULL,
  `PHO` int(11) NOT NULL,
  `MAIL` varchar(80) NOT NULL,
  `ADDR` text NOT NULL,
  `CLA` varchar(20) NOT NULL,
  `BOARD` varchar(50) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `ENO`, `NAME`, `FNAME`, `PHO`, `MAIL`, `ADDR`, `CLA`, `BOARD`, `aid`) VALUES
(4, 'E101', 'pavi', 'mani', 2147483647, 'p@gmail.com', 'sdhfk\r\ndjgbjdshf', '6', 'Matric', 1),
(5, 'E102', 'nathiya', 'fg', 2147483647, 'njj@gmail.com', 'hjvds\r\ndhfsg', '3', 'CBSC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hclass`
--

CREATE TABLE `hclass` (
  `HID` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `CLA` varchar(50) NOT NULL,
  `SEC` varchar(50) NOT NULL,
  `SUB` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `MID` int(11) NOT NULL,
  `REGNO` varchar(80) NOT NULL,
  `SUB` varchar(80) NOT NULL,
  `MARK` varchar(80) NOT NULL,
  `TERM` varchar(80) NOT NULL,
  `CLASS` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`MID`, `REGNO`, `SUB`, `MARK`, `TERM`, `CLASS`) VALUES
(1, 'S101', 'English', '90', 'I-Term', '4'),
(2, 'S101', 'Maths', '70', 'I-Term', '4'),
(3, 'S101', 'English', '90', 'I-Term', '6');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `tid` int(11) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `tpass` varchar(20) NOT NULL,
  `qual` varchar(50) NOT NULL,
  `sal` varchar(20) NOT NULL,
  `PNO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `PADDR` text NOT NULL,
  `IMG` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`tid`, `tname`, `tpass`, `qual`, `sal`, `PNO`, `MAIL`, `PADDR`, `IMG`) VALUES
(1, 'sumithra', '1234', 'mca', '22000', '2775532', 'sb@mail.com', 'wert\r\nsgf', 'staff/cute_cats_04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `ENO` varchar(50) NOT NULL,
  `RNO` varchar(50) NOT NULL,
  `NAME` varchar(120) NOT NULL,
  `FNAME` varchar(120) NOT NULL,
  `DOB` int(11) NOT NULL,
  `GEN` varchar(50) NOT NULL,
  `PHO` int(11) NOT NULL,
  `MAIL` varchar(100) NOT NULL,
  `ADDR` text NOT NULL,
  `SCLASS` varchar(50) NOT NULL,
  `SBOARD` varchar(80) NOT NULL,
  `SIMG` varchar(50) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `ENO`, `RNO`, `NAME`, `FNAME`, `DOB`, `GEN`, `PHO`, `MAIL`, `ADDR`, `SCLASS`, `SBOARD`, `SIMG`, `tid`) VALUES
(8, 'E101', 'S101', 'pavi', 'mani', 15, 'Female', 2147483647, 'p@gmail.com', 'sdhfkdjgbjdshf', '6', 'Matric', 'student/1973897277_1354301145.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `SID` int(11) NOT NULL,
  `SNAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`SID`, `SNAME`) VALUES
(2, 'English'),
(3, 'Maths');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hclass`
--
ALTER TABLE `hclass`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hclass`
--
ALTER TABLE `hclass`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
