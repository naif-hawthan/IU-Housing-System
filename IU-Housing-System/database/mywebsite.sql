-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2025 at 09:29 PM
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
-- Database: `mywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `exp_d` date NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_bookings`
--

CREATE TABLE `room_bookings` (
  `room_number` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `bed` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_bookings`
--

INSERT INTO `room_bookings` (`room_number`, `user_id`, `level`, `specialization`, `bed`) VALUES
('12', 2, 2, 'dd', 0),
('123', 2, 3, 'IS', 2),
('201', 4, 1, 'IT', 1),
('222', 4, 2, 'IT', 2),
('23', 2, 1, 'IT', 1),
('305', 2, 7, 'it', 2),
('32', 2, 2, 'IS', 2),
('356', 4, 7, 'IT', 2),
('88', 4, 8, 'IT', 2),
('99', 4, 1, 'IT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` int(50) NOT NULL,
  `college` text DEFAULT NULL,
  `region` text DEFAULT NULL,
  `term` int(100) DEFAULT NULL,
  `level` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `college`, `region`, `term`, `level`) VALUES
(1, 'mmdooh salah albdrani', 'doh31', 'mmdooh@gmail.com', 25, NULL, NULL, NULL, 0),
(2, 'naif ahmed', 'n11', 'naif@gmail.com', 24, NULL, NULL, NULL, 0),
(4, 'doh salah albdrami', 'admin', 'admin@gmail.com', 21232, NULL, NULL, NULL, 0),
(5, 'ahmed fhd hrbi', 'aa9', 'ahmed@gmailcom', 0, NULL, NULL, NULL, 0),
(6, 'ad', 'admin', 'admin@gmail.com', 0, NULL, NULL, NULL, 0),
(7, 'mohmad', 'md1', 'moh@gmail', 0, NULL, NULL, NULL, 0),
(8, 'hh', 'h1', 'a@gmail.com', 0, NULL, NULL, NULL, 0),
(9, 'hha', 'h2', 'g@gmail.com', 0, NULL, NULL, NULL, 0),
(10, '[value-2]', '[value-3]', '[value-4]', 0, NULL, NULL, NULL, 0),
(11, 'mmddooh salah albadrni', 'm12', 'mmdoh12@gmail.com', 1383734, 'Computer', 'mad', NULL, 0),
(12, 'bader ahmed', '421014553', 'bader123@gmail.com', 0, 'Engineering', 'mad', NULL, 0),
(13, 'jaber salh', '1234567890', 'jaber12@gmail.com', 0, 'science', 'taif', 0, 0),
(14, 'r mmdoh', '987654321', 'rashwf12@gmail.com', 50, 'computer', 'taif', 8, 1),
(15, 'omr', '0580282546', 'omr123@gmail.com', 0, 'science', 'jed', 2, 7),
(16, 'rs', '999999999', 'rs123@gmail.com', 6700595, 'computer', 'tr', 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_bookings`
--
ALTER TABLE `room_bookings`
  ADD UNIQUE KEY `room_number` (`room_number`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_bookings`
--
ALTER TABLE `room_bookings`
  ADD CONSTRAINT `room_bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
