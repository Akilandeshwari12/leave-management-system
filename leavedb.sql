-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2026 at 10:46 AM
-- Server version: 8.0.23
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leavedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `leave_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `event` varchar(50) NOT NULL,
  `status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `name`, `branch`, `class`, `reason`, `date`, `leave_type`, `event`, `status`) VALUES
(12, 'nila', 'IT', '1st Year A', 'event', '2026-04-05', 'On Duty Full Day', 'Symposium', 'Approved'),
(13, 'nila', 'IT', '1st Year A', 'event', '2026-04-05', 'On Duty Full Day', 'Symposium', 'Rejected'),
(14, 'bhuvana', 'AIDS', '3rd Year A', 'Fever', '2026-04-10', 'Sick Leave Full Day', '', 'Approved'),
(15, 'Akilandeshwari s', 'IT', '2nd Year A', 'event', '2026-04-08', 'On Duty Full Day', 'Symposium', 'Approved'),
(16, 'lakshmi', 'IT', '3rd Year A', 'Fever', '2026-04-02', 'Sick Leave Half Day', '', 'Approved'),
(17, 'lakshmi', 'AIDS', '3rd Year A', 'Fever', '2026-04-02', 'Emergency Leave Full Day', '', 'Rejected'),
(18, 'lakshmi', 'AIDS', '3rd Year A', 'Fever', '2026-04-02', 'Sick Leave Full Day', '', 'Pending'),
(19, 'abi', 'CSE', '3rd Year A', 'workshop', '2026-04-03', 'On Duty Full Day', 'Workshop', 'Approved'),
(20, 'Akilandeshwari s', 'IT', '2nd Year A', 'Fever', '2026-04-02', 'Sick Leave Full Day', '', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
