-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 11:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `First_Name` varchar(125) NOT NULL,
  `Last_Name` varchar(125) NOT NULL,
  `Email` varchar(125) NOT NULL,
  `Pwd` varchar(125) NOT NULL,
  `Ref_Code` varchar(125) NOT NULL,
  `Phone` varchar(125) DEFAULT NULL,
  `Adde` varchar(125) DEFAULT NULL,
  `Brand` varchar(125) DEFAULT NULL,
  `Model` varchar(125) DEFAULT NULL,
  `Chassis_Number` varchar(125) DEFAULT NULL,
  `Date_of_Registration` varchar(125) DEFAULT NULL,
  `Expiration_Date` varchar(125) DEFAULT NULL,
  `Date_of_Purchase` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`First_Name`, `Last_Name`, `Email`, `Pwd`, `Ref_Code`, `Phone`, `Adde`, `Brand`, `Model`, `Chassis_Number`, `Date_of_Registration`, `Expiration_Date`, `Date_of_Purchase`) VALUES
('David', 'Adigwu', 'davidadigwu@gmail.com', ' e10adc3949ba59abbe56e057f20f883e', '75454', '+2348149214808', '10, lagos way', 'Toyota', 'C61', 'GGHTS', '10/11/20', '10/11/22', '10/11/20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
