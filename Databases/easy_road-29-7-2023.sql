-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 10:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `control_number`, `violation_id`) VALUES
(1, 2147483647, 2),
(2, 2147483647, 2),
(3, 2147483647, 2),
(4, 2147483647, 2),
(5, 2147483647, 2),
(6, 2147483647, 2),
(7, 2147483647, 2);

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
  `phone_number` varchar(20) NOT NULL,
  `license_number` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `root_number` int(11) NOT NULL,
  `vcolour` varchar(255) NOT NULL,
  `police_man_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `name`, `age`, `gender`, `living_place`, `phone_number`, `license_number`, `vehicle_number`, `root_number`, `vcolour`, `police_man_id`) VALUES
(1, 'Abdull', 20, 'male', 'Tunguu', '+255623409095', 'ZNZ-2023', 'NC 5787', 3456, 'Blue', 27),
(3, 'Abdull Majid', 25, 'male', 'Tunguu', '+255623409095', 'ZNZ-875', 'EJ 2332', 7567, 'red', 27),
(4, 'Yussuf kai', 28, 'male', 'Gulion', '7774646363', 'ZNZ-34567', 'GI 6643', 56767, 'Green', 27),
(5, 'Shamis', 45, 'male', 'kwerekwe', '7778 6522', 'ZNZ-2023', 'NC 5787', 0, 'black', 27),
(6, 'usama', 35, 'male', 'kwa mchina', '34567890', 'ZNZ-4567', 'CB 675', 0, 'red', 2),
(7, 'usama', 18, 'other', 'kwa mchina', '4567', 'ZNZ-2023', 'NC 5787', 0, 'black', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_violation`
--

INSERT INTO `driver_violation` (`dv_id`, `driver_id`, `violation_id`, `police_man_id`, `date`) VALUES
(2, 3, 2, 21, '2023-06-25 06:34:17'),
(3, 3, 2, 21, '2023-06-25 06:35:53'),
(6, 4, 2, 21, '2023-06-25 06:59:06'),
(7, 5, 2, 21, '2023-06-25 07:09:16'),
(8, 6, 2, 21, '2023-06-26 09:08:15'),
(9, 7, 2, 21, '2023-06-26 09:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `police_man`
--

CREATE TABLE `police_man` (
  `police_man_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `police_station_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `police_man`
--

INSERT INTO `police_man` (`police_man_id`, `user_id`, `name`, `gender`, `phone_number`, `police_station_id`) VALUES
(21, 25, 'officer1', 'male', '+255 978658', 2),
(22, 26, 'officer2', 'male', '456789022', 3),
(23, 27, 'police1', 'male', '2345678922', 2),
(24, 28, 'police2', 'male', '234567890', 2);

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `police_station_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`police_station_id`, `name`, `location`, `phone_number`, `email`) VALUES
(2, 'Tunguu Police Station', 'Mkoa Wa Kusini Unguja', '+255 777 777 777', 'tunguustation@gmail.com'),
(3, 'Fuoni Police Station ', 'Mkoa Mjini Maghribi', '+255 888 888 888', 'fuonistation@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `email`, `role_id`) VALUES
(2, 'abdul', '8cb2237d0679ca88db6464eac60da96345513964', 'abdul@gmail.com', 1),
(25, 'officer1', '8cb2237d0679ca88db6464eac60da96345513964', 'of.1@gmail.com', 2),
(26, 'officer2', '8cb2237d0679ca88db6464eac60da96345513964', 'of.2@gmail.com', 2),
(27, 'police1', '8cb2237d0679ca88db6464eac60da96345513964', 'police1@gmaill.com', 3),
(28, 'police2', '8cb2237d0679ca88db6464eac60da96345513964', 'police2@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `violation`
--

CREATE TABLE `violation` (
  `violation_id` int(11) NOT NULL,
  `violation` varchar(100) NOT NULL,
  `vtype` varchar(255) NOT NULL,
  `penalt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `violation`
--

INSERT INTO `violation` (`violation_id`, `violation`, `vtype`, `penalt`) VALUES
(1, 'High Speed', 'major', 50000),
(2, 'License Expire', 'middle', 25000),
(4, 'Helment', 'middle', 50),
(11, 'Insuarance Expire', 'major', 5000),
(12, 'Road Licence Expire', 'major', 35000);

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
  ADD PRIMARY KEY (`police_station_id`);

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
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `driver_violation`
--
ALTER TABLE `driver_violation`
  MODIFY `dv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `police_man`
--
ALTER TABLE `police_man`
  MODIFY `police_man_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `police_station`
--
ALTER TABLE `police_station`
  MODIFY `police_station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `violation`
--
ALTER TABLE `violation`
  MODIFY `violation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `police_man_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `police_man_ibfk_2` FOREIGN KEY (`police_station_id`) REFERENCES `police_station` (`police_station_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
