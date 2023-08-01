-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 12:04 AM
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
(20, 0, 11),
(21, 0, 11),
(22, 0, 11),
(23, 0, 11),
(24, 0, 11),
(25, 0, 11),
(26, 0, 11),
(27, 0, 11),
(28, 0, 11),
(29, 0, 11),
(30, 0, 11);

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
(11, 'abdul aziz', 23, 'male', 'mtendeni', '12345678', 'ZNZ-2023', 'NC 5787', 0, 'red', 34),
(12, 'Tunguu', 778415671, 'male', 'Tunguu', '0778415671', 'ZNZ-2023', 'NC 5787', 0, 'black', 34),
(13, 'Ahmad', 25, 'male', 'tunguu', '2345678907', 'ZNZ-2023', 'NC 5787', 0, 'black', 35),
(14, 'Tunguu', 778415671, 'male', 'Tunguu', '3456789', 'ZNZ-2023', 'NC 5787', 0, 'black', 35),
(15, 'ali', 19, 'male', 'Tunguu', '0778415671', 'ZNZ-2023', 'GI 6643', 5678, 'black', 35),
(16, 'Tunguu', 778415671, 'male', 'Tunguu', '0778415671', 'ZNZ-2023', 'NC 5787', 0, 'red', 35),
(17, 'Tanzania', 778415671, 'female', 'Tunguu', '0778415671', 'ZNZ-2023', 'NC 5787', 345, 'Blue', 35),
(18, 'Tunguu', 778415671, 'male', 'Tunguu', '0778415671', 'ZNZ-2023', 'NC 5787', 767, 'black', 35),
(19, 'usama', 45, 'female', 'mombasa', '34567890', 'ZNZ-2023', 'NC 5787', 0, 'Green', 35),
(20, 'usama', 45, 'male', 'Tunguu', '0778415671', 'ZNZ-2023', 'NC 5787', 0, 'red', 35),
(21, 'Tunguu', 778415671, 'male', 'ee', '422', 'rewr', 'NC 5787', 0, 'wef', 34),
(22, 'Tunguu', 778415671, 'male', 'Tunguu', '0778415671', 'ZNZ34567', 'NC 5787', 0, 'black', 34),
(23, 'Testing ', 25, 'male', 'Tanzania', '+255623409095', 'ZNZ-2023', '', 0, '', 34),
(24, 'Testing ', 25, 'male', 'Tanzania', '+255623409095', 'ZNZ-2023', 'NC 5787', 0, 'black', 34),
(25, 'Tanzania', 30, 'male', 'Tanzania', '+255623409095', 'ZNZ-2023', '', 0, '', 34),
(26, 'aefrw4543', 1844, 'female', 'fdfsdf43', '+255874726472', 'ZNZ-2023', 'sgf', 0, '43543', 34);

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
(36, 18, 11, 29, '2023-07-31 10:37:34'),
(37, 18, 11, 29, '2023-07-31 10:39:41'),
(38, 18, 11, 29, '2023-07-31 10:40:33'),
(39, 19, 11, 29, '2023-07-31 10:43:03'),
(40, 19, 11, 29, '2023-07-31 10:49:19'),
(41, 20, 11, 29, '2023-07-31 11:00:59'),
(42, 20, 11, 29, '2023-07-31 11:03:23'),
(43, 20, 11, 29, '2023-07-31 11:05:16'),
(44, 22, 11, 29, '2023-07-31 14:26:42'),
(45, 22, 11, 29, '2023-07-31 14:28:29'),
(46, 24, 11, 29, '2023-08-01 09:15:34'),
(47, 26, 11, 29, '2023-08-01 19:10:34');

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
(29, 33, 'officer2', 'male', '+255 98765443', 2),
(30, 35, 'police5', 'male', '0778415671', 2),
(31, 36, 'Shamis', 'male', '234567890', 2);

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `police_station_id` int(11) NOT NULL,
  `station_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`police_station_id`, `station_name`, `location`, `phone_number`, `email`) VALUES
(2, 'Tunguu Police Station', 'Mkoa Wa Kusini Unguja', '+255 777 777 777', 'tunguustation@gmail.com'),
(3, 'Fuoni Police Station ', 'Mkoa Mjini Maghribi', '+255 888 888 888', 'fuonistation@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
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
(33, 'officer2', '8cb2237d0679ca88db6464eac60da96345513964', 'of.1@gmail.com', 2),
(34, 'abdul', '8cb2237d0679ca88db6464eac60da96345513964', 'abdul@gmail.com', 1),
(35, 'police5', '8cb2237d0679ca88db6464eac60da96345513964', 'pl.5@gmail.com', 3),
(36, 'Shamis', '8cb2237d0679ca88db6464eac60da96345513964', 'shamis@gmail.com', 3);

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
(11, 'Insuarance Expire', 'middle', 5000),
(12, 'Road Licence Expire', 'major', 35000),
(13, 'Reflactor Triangle', 'middle', 23000),
(16, 'Reflactor Triangle', 'middle', 23000),
(20, 'No Helment', 'middle', 15000),
(21, 'High Speed Drive', 'major', 100000);

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
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `driver_violation`
--
ALTER TABLE `driver_violation`
  MODIFY `dv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `police_man`
--
ALTER TABLE `police_man`
  MODIFY `police_man_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `police_station`
--
ALTER TABLE `police_station`
  MODIFY `police_station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `violation`
--
ALTER TABLE `violation`
  MODIFY `violation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
