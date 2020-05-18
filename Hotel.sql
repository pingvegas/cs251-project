-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 08:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `arrive` varchar(100) NOT NULL,
  `depart` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `guest` varchar(100) NOT NULL,
  `book_id` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Location` varchar(100) NOT NULL,
  `total_room` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Location`, `total_room`) VALUES
('Amnat Charoen ', 0),
('Ang Thong ', 0),
('Bangkok', 0),
('Bueng Kan ', 0),
('Buriram ', 0),
('Chachoengsao ', 0),
('Chai Nat ', 0),
('Chaiyaphum ', 0),
('Chanthaburi ', 0),
('Chiang Rai', 0),
('Chonburi ', 0),
('Chumphon ', 0),
('Kalasin ', 0),
('Kamphaeng Phet ', 0),
('Kanchanaburi ', 0),
('Khon Kaen ', 0),
('Krabi ', 0),
('Lampang ', 0),
('Lamphun ', 0),
('Loei ', 0),
('Lopburi ', 0),
('Mae Hong Son ', 0),
('Maha Sarakham', 0),
('Mukdahan ', 0),
('Nakhon Nayok ', 0),
('Nakhon Pathom ', 0),
('Nakhon Phanom ', 0),
('Nakhon Ratchasima ', 0),
('Nakhon Sawan ', 0),
('Nakhon Si Thammarat ', 0),
('Nan ', 0),
('Narathiwat ', 0),
('Nong Bua Lamphu', 0),
('Nong Khai ', 0),
('Nonthaburi ', 0),
('Pathum Thani ', 0),
('Pattani ', 0),
('Phang Nga ', 0),
('Phatthalung ', 0),
('Phayao', 0),
('Phetchabun ', 0),
('Phetchaburi ', 0),
('Phichit ', 0),
('Phitsanulok ', 0),
('Phra Nakhon Si Ayutthaya ', 0),
('Phrae ', 0),
('Phuket ', 0),
('Prachinburi ', 0),
('Prachuap Khiri Khan ', 0),
('Ranong ', 0),
('Ratchaburi ', 0),
('Rayong ', 0),
('Roi Et ', 0),
('Sa Kaeo ', 0),
('Sakon Nakhon ', 0),
('Samut Prakan ', 0),
('Samut Sakhon ', 0),
('Samut Songkhram ', 0),
('Saraburi ', 0),
('Satun ', 0),
('Sing Buri ', 0),
('Sisaket ', 0),
('Songkhla ', 0),
('Sukhothai ', 0),
('Suphan Buri ', 0),
('Surat Thani ', 0),
('Surin ', 0),
('Tak ', 0),
('Trang ', 0),
('Trat', 0),
('Ubon Ratchathani ', 0),
('Udon Thani ', 0),
('Uthai Thani ', 0),
('Uttaradit ', 0),
('Yala ', 0),
('Yasothon ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_des`
--

CREATE TABLE `room_des` (
  `room_type` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD KEY `foreign key user_id` (`user_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Location`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `foreign key user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
