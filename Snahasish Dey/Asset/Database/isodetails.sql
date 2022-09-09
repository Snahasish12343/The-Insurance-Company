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
-- Table structure for table `isodetails`
--

CREATE TABLE `isodetails` (
  `ID` int(15) NOT NULL,
  `Name` text NOT NULL,
  `Gender` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `DOB` date NOT NULL,
  `Blood_Group` varchar(55) NOT NULL,
  `Degree` varchar(55) NOT NULL,
  `Occupation` varchar(55) NOT NULL,
  `User_Name` text NOT NULL,
  `Password` varchar(55) NOT NULL,
  `Confirm_Password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isodetails`
--

INSERT INTO `isodetails` (`ID`, `Name`, `Gender`, `Email`, `DOB`, `Blood_Group`, `Degree`, `Occupation`, `User_Name`, `Password`, `Confirm_Password`) VALUES
(1, 'Priya', 'Male', 'priya@gmail.com', '2001-08-01', 'B+', 'BBA', 'Student', 'Priya', 'P1542', 'P1542'),
(3, 'Bushra', 'Others', 'bushra@gmail.com', '2001-08-01', 'A+', 'MBBS', 'DOCTOR', 'Bushra', 'Bushra2001#', 'Bushra2001#'),
(5, 'Ijaz', 'Male', 'aaaaa@gmail.com', '2001-08-01', 'AB+', 'CSE', 'Student', 'IJAZ', 'IJAZ', 'IJAZ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
