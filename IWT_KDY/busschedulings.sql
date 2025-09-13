-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 05:41 PM
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
-- Database: `busschedulings`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busno` varchar(10) NOT NULL,
  `start` varchar(20) NOT NULL,
  `end` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` float NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busno`, `start`, `end`, `date`, `time`, `price`) VALUES
('NC2345', 'Kandy', 'Colombo', '2024-05-13', 7.3, 900);

-- --------------------------------------------------------

--
-- Table structure for table `createaccount`
--

CREATE TABLE `createaccount` (
  `Name` varchar(40) NOT NULL,
  `User_Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` int(40) NOT NULL,
  `Phone_number` int(20) NOT NULL,
  `Password` int(30) NOT NULL,
  `Confirm_Password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `Driver_Name` varchar(40) NOT NULL,
  `User_Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Phone_number` int(20) NOT NULL,
  `License_number` int(30) NOT NULL,
  `License_Exp` date NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`Driver_Name`, `User_Name`, `Email`, `DOB`, `Phone_number`, `License_number`, `License_Exp`, `Password`) VALUES
('sunil', 'sunil123', 'sunil123@gamil.com', '2010-02-03', 776709234, 123456, '2024-05-13', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `feedback_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `Name` varchar(40) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`Name`, `UserName`, `Email`, `Address`, `PhoneNo`, `Password`, `confirmpassword`) VALUES
('Supun Maduranga', 'Supun123', 'supun345@gamil.com', 'B 101\\1 Kiribathkumbura,Peradeniya', 706723987, 'ASF345', 'DGHGF345');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `chname` varchar(40) NOT NULL,
  `cardnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`chname`, `cardnumber`) VALUES
('sadun samaraweera', 21322536),
('sadun samaraweera', 123423232),
('sadun samaraweera', 1221233245),
('sadun samaraweera', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busno`);

--
-- Indexes for table `createaccount`
--
ALTER TABLE `createaccount`
  ADD PRIMARY KEY (`User_Name`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`License_number`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`cardnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
