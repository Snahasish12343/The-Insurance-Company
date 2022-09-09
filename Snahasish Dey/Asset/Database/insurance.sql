-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 01:08 PM
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
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `Serial_No` int(10) NOT NULL,
  `Creation_Date` date NOT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`Serial_No`, `Creation_Date`, `Category`) VALUES
(888, '2022-08-01', 'Life_Insurance'),
(115, '2022-08-01', 'Life_Insurance'),
(555, '2022-08-08', 'Car_Insurance'),
(99, '2022-01-26', 'Property_Insurance'),
(125, '2022-08-09', 'Car_Insurance'),
(123, '2022-08-09', 'Property_Insurance'),
(119, '2022-08-11', 'Fire_Insurance'),
(119, '2022-08-11', 'Fire_Insurance'),
(119, '2022-08-04', 'Property_Insurance'),
(119, '2022-08-04', 'Property_Insurance'),
(200, '2022-08-11', 'Fire_Insurance'),
(201, '2022-08-15', 'Property_Insurance');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
