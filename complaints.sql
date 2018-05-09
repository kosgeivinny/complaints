-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2018 at 03:40 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Image` varchar(200) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Surname` varchar(10) NOT NULL,
  `Gender` varchar(70) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Image`, `First_name`, `Last_name`, `Surname`, `Gender`, `Email`, `Username`, `Password`) VALUES
('Upload/IMG_20160124_103328.jpg', 'Alex', 'Kimeu', 'Mweu', 'Male', 'alex@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Image` varchar(200) NOT NULL,
  `First_name` varchar(48) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Job_title` varchar(80) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Image`, `First_name`, `Last_name`, `Surname`, `Department`, `Job_title`, `Gender`, `Email`, `Username`, `Password`) VALUES
('Upload/IMG_20160117_120521.jpg', 'Gladys', 'Losute', 'Chelimo', 'Criminology', 'Cleaning staff', 'Female', 'gladyslosute@gmail.com', 'gladys', '1234'),
('Upload/20160626_155904.jpg', 'Vincent', 'Kipchirchir', 'Kosgei', 'Criminology', 'Lecturer', 'Male', 'vinnykosgei@gmail.com', 'vinny', '5915');

-- --------------------------------------------------------

--
-- Table structure for table `staff_complain`
--

CREATE TABLE `staff_complain` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(60) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Job_title` varchar(40) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Complain` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_response`
--

CREATE TABLE `staff_response` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(40) NOT NULL,
  `Job_title` varchar(40) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Complain` varchar(2000) NOT NULL,
  `Response` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_response`
--

INSERT INTO `staff_response` (`ID`, `First_name`, `Job_title`, `Department`, `Complain`, `Response`) VALUES
(1, 'Vincent', 'Lecturer', 'Criminology', 'Criminals are poorly identified', ' Okey we will look into that');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Image` varchar(200) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Image`, `First_name`, `Last_name`, `Surname`, `Department`, `Course`, `Gender`, `Email`, `Username`, `Password`) VALUES
('Upload/IMG_20160122_143505.jpg', 'Nicholas', 'Kiplagat', 'Samoei', 'Political Science', 'Information Technology', 'single', 'samoei@gmail.com', 'samoei', '1234'),
('Upload/20160626_142029.jpg', 'Vincent', 'Kipchirchir', 'Keter', 'Education', 'Arts', 'single', 'vinnykosgei@gmail.com', 'vikip', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_complain`
--

CREATE TABLE `student_complain` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(40) NOT NULL,
  `Last_name` varchar(40) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Department` varchar(60) NOT NULL,
  `Complain` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_complain`
--

INSERT INTO `student_complain` (`ID`, `First_name`, `Last_name`, `Course`, `Department`, `Complain`) VALUES
(1, 'Vincent', 'Kipchirchir', 'Information Technology', 'Computing and Informatics', ' This system is poor');

-- --------------------------------------------------------

--
-- Table structure for table `student_response`
--

CREATE TABLE `student_response` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(40) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Complain` varchar(2000) NOT NULL,
  `Response` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_response`
--

INSERT INTO `student_response` (`ID`, `First_name`, `Course`, `Department`, `Complain`, `Response`) VALUES
(1, 'Vincent', 'Information Technology', 'Education', ' This is better', ' Thank you');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `staff_complain`
--
ALTER TABLE `staff_complain`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff_response`
--
ALTER TABLE `staff_response`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `student_complain`
--
ALTER TABLE `student_complain`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_response`
--
ALTER TABLE `student_response`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_complain`
--
ALTER TABLE `staff_complain`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff_response`
--
ALTER TABLE `staff_response`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_complain`
--
ALTER TABLE `student_complain`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_response`
--
ALTER TABLE `student_response`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
