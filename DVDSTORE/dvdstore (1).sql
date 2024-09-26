-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 06:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvdstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `aid` varchar(3) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`aid`, `aname`, `alastname`, `address`, `telephone`) VALUES
('310', 'หมํ่า', 'จ๊กม๊ก', 'saraburi', '011111111'),
('311', 'เท่ง', 'เทิดเทิง', 'saraburi', '022222222'),
('312', 'โหน่ง', 'ชะชะช่า', 'saraburi', '033333333'),
('313', 'แจ๊ส', 'ชวนชื่น', 'supanburi', '044444444'),
('314', 'คง', 'โอมเพี้ยง', 'saraburi', '055555555');

-- --------------------------------------------------------

--
-- Table structure for table `actormovie`
--

CREATE TABLE `actormovie` (
  `counter` varchar(3) NOT NULL,
  `aid` varchar(20) NOT NULL,
  `did` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actormovie`
--

INSERT INTO `actormovie` (`counter`, `aid`, `did`) VALUES
('2', '310', '210'),
('2', '310', '211'),
('1', '311', '211'),
('1', '312', '212'),
('1', '313', '213'),
('1', '314', '214');

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `did` varchar(3) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `ระยะเวลา` varchar(30) NOT NULL,
  `วันที่` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`did`, `dname`, `ระยะเวลา`, `วันที่`) VALUES
('156', 'teerak', '15.00', '3/02/55'),
('157', 'ponphilin', '20.00', '24/02/67'),
('244', 'teerak', '444', '44'),
('256', 'teerak', '15.00', '3/02/55'),
('257', 'อิทอีส', '15.00', '2024-08-30'),
('258', 'ดรีม', '08.00', '2024-09-28'),
('259', 'teeyod', '11:51', '2024-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` varchar(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `mlastname`, `address`, `telephone`) VALUES
('110', 'mei', 'lyly', 'saraburi', '0625809554'),
('111', 'pare', 'maifa', 'pathumtani', '0969304038'),
('112', 'mind', 'melody', 'saraburi', '0990078838'),
('113', 'tiww', 'ly', 'supanburi', '0989176512'),
('114', 'pook', 'ki', 'saraburi', '0955555555'),
('115', 'test2', 'test', 'test', '0555555555'),
('301', 'ดรีม222', 'สอนทองคำ', 'สระบุรี', '025633658');

-- --------------------------------------------------------

--
-- Table structure for table `memberbuy`
--

CREATE TABLE `memberbuy` (
  `amount` varchar(5) NOT NULL,
  `mid` varchar(20) NOT NULL,
  `mname` varchar(3) NOT NULL,
  `did` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberbuy`
--

INSERT INTO `memberbuy` (`amount`, `mid`, `mname`, `did`, `dname`) VALUES
('1', '110', 'mei', '211', 'peenak'),
('1', '111', 'par', '211', 'peenak2'),
('1', '112', 'min', '212', 'peenak3'),
('1', '113', 'tiw', '213', 'peenak4'),
('1', '114', 'poo', '214', 'teeyod');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
