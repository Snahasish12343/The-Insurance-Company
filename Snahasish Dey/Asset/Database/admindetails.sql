-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 01:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Blood_Group` varchar(50) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `User_Name` text NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`ID`, `Name`, `Gender`, `Email`, `DOB`, `Blood_Group`, `Degree`, `Occupation`, `User_Name`, `Password`, `Confirm_Password`) VALUES
(0, 'mahim', 'Male', 'assds@gmail.com', '2022-08-23', 'A+', 'BSC', 'Searching', 'asd', 'asd555', 'asd555'),
(0, 'mahim', 'Male', 'assds@gmail.com', '2022-08-23', 'A+', 'BSC', 'Searching', 'asd', 'asd555', 'asd555'),
(0, 'mahim', 'Male', 'assds@gmail.com', '2022-08-23', 'A+', 'BSC', 'Searching', 'asd', 'asd555', 'asd555'),
(1, 'IJAZZZ', 'Male', 'aaaaa@gmail.com', '2012-08-01', 'AB+', 'SSC', 'Student', 'IJAZ', 'ijaz', 'ijaz'),
(0, 'mahim', 'Male', 'assds@gmail.com', '2022-08-23', 'A+', 'BSC', 'Searching', 'asd', 'asd555', 'asd555'),
(0, 'Antu', 'Male', 'asd@gmail.com', '2022-08-02', 'A+', 'BSC', 'Student', 'antu', 'antu555', 'antu555'),
(0, 'Rafiq', 'Male', 'sfhsjf@gmail.com', '2022-08-03', 'B+', 'BSC', 'Teacher', 'rafiq', 'r999', 'r999'),
(0, 'Logan', 'Male', 'logan@gmail.com', '2022-08-10', 'A+', 'BSC', 'Govt_Employee ', 'logan', 'l555', 'l555'),
(0, 'Ritu', 'Male', 'rituasdfgg555@gmail.com', '2000-07-29', 'A+', 'BSC', 'Govt_Employee ', 'ritu', 'ritu555', 'ritu555'),
(0, 'Bushra', 'Other', 'others@gmail.com', '2022-08-16', 'A+', 'BSC', 'Student', 'bush', 'bushra2001#', 'bushra2001#'),
(0, 'asdfg', 'Other', 'sdgh@gmail.com', '2022-08-08', 'A+', 'MSC', 'Teacher', 'asdf', 'asdf555', 'asdf555'),
(0, 'anup', 'Male', 'aaa@gmail.com', '2022-08-02', 'A+', 'BBA', 'Student', 'ANUP', 'ANUP', 'ANUP'),
(0, 'ggg', 'Male', 'hhhhh@gmail.com', '2022-08-12', 'A+', 'BBA', 'Student', 'GGG', 'gggg', 'gggg'),
(0, 'RRR', 'Male', 'rrrrr@gnail.com', '2022-08-03', 'A+', 'BBA', 'Searching', 'RRR', 'RRR', 'RRR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
