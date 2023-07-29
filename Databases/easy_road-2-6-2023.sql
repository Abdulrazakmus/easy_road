-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 04:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_road`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `control_number` int(11) NOT NULL,
  `violation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `living_place` varchar(255) NOT NULL,
  `license_number` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `police_man_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver_violation`
--

CREATE TABLE `driver_violation` (
  `dv_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `violation_id` int(11) NOT NULL,
  `police_man_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `police_man`
--

CREATE TABLE `police_man` (
  `police_man_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `police_station_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `police_stationn_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'Chief_Officer'),
(3, 'police_man');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `email`, `role_id`) VALUES
(2, 'abdul', '8cb2237d0679ca88db6464eac60da96345513964', 'abdul@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `violation`
--

CREATE TABLE `violation` (
  `violation_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `violation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `violation_id` (`violation_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD KEY `police_man_id` (`police_man_id`);

--
-- Indexes for table `driver_violation`
--
ALTER TABLE `driver_violation`
  ADD PRIMARY KEY (`dv_id`),
  ADD KEY `driver_FK_driver_violation` (`driver_id`),
  ADD KEY `violation_FK_driver_violation` (`violation_id`),
  ADD KEY `policeman_FK_driver_violation` (`police_man_id`);

--
-- Indexes for table `police_man`
--
ALTER TABLE `police_man`
  ADD PRIMARY KEY (`police_man_id`),
  ADD KEY `police_station_id` (`police_station_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`police_stationn_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `violation`
--
ALTER TABLE `violation`
  ADD PRIMARY KEY (`violation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_violation`
--
ALTER TABLE `driver_violation`
  MODIFY `dv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `police_man`
--
ALTER TABLE `police_man`
  MODIFY `police_man_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `police_station`
--
ALTER TABLE `police_station`
  MODIFY `police_stationn_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `violation`
--
ALTER TABLE `violation`
  MODIFY `violation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`violation_id`) REFERENCES `violation` (`violation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `driver_violation`
--
ALTER TABLE `driver_violation`
  ADD CONSTRAINT `driver_FK_driver_violation` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `policeman_FK_driver_violation` FOREIGN KEY (`police_man_id`) REFERENCES `police_man` (`police_man_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `violation_FK_driver_violation` FOREIGN KEY (`violation_id`) REFERENCES `violation` (`violation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `police_man`
--
ALTER TABLE `police_man`
  ADD CONSTRAINT `police_man_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `police_station`
--
ALTER TABLE `police_station`
  ADD CONSTRAINT `police_station_ibfk_1` FOREIGN KEY (`police_stationn_id`) REFERENCES `police_man` (`police_station_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
