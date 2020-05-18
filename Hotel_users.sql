-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 07:54 PM
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `phone`, `gender`, `age`, `password`) VALUES
(1, 'peem1', 'peem1@hotmail.com', '0898651212', 'Male', '20', '123456'),
(2, 'peem2', 'peem2@hotmail.com', '0976512221', 'Male', '20', '123456'),
(3, 'peem3', 'peem3@hotmail.com', '0987987765', 'Male', '20', '123456'),
(4, 'peem4', 'peem4@hotmail.com', '0909876651', 'Male', '20', '123456'),
(5, 'peem5', 'peem5@hotmail.com', '0909876652', 'Male', '20', '123456'),
(6, 'peem6', 'peem6@hotmail.com', '0909876653', 'Male', '20', '123456'),
(7, 'peem7', 'peem7@hotmail.com', '0909876654', 'Male', '20', '123456'),
(8, 'peem8', 'peem8@hotmail.com', '0909876655', 'Male', '20', '123456'),
(9, 'peem9', 'peem9@hotmail.com', '0909876656', 'Male', '20', '123456'),
(10, 'peem10', 'peem10@hotmail.com', '0909876657', 'Male', '20', '123456'),
(11, 'peem11', 'peem11@hotmail.com', '0909876658', 'Male', '20', '123456'),
(12, 'peem12', 'peem12@hotmail.com', '0909876659', 'Male', '20', '123456'),
(13, 'peem13', 'peem13@hotmail.com', '0909876660', 'Male', '20', '123456'),
(14, 'peem14', 'peem14@hotmail.com', '0909876661', 'Male', '20', '123456'),
(15, 'peem15', 'peem15@hotmail.com', '0909876662', 'Male', '20', '123456'),
(16, 'peem16', 'peem16@hotmail.com', '0909876663', 'Male', '20', '123456'),
(17, 'peem17', 'peem17@hotmail.com', '0909876664', 'Male', '20', '123456'),
(18, 'peem18', 'peem18@hotmail.com', '0909876665', 'Male', '20', '123456'),
(19, 'peem19', 'peem19@hotmail.com', '0909876666', 'Male', '20', '123456'),
(20, 'peem20', 'peem20@hotmail.com', '0909876667', 'Male', '20', '123456'),
(21, 'peem21', 'peem21@hotmail.com', '0909876668', 'Male', '20', '123456'),
(22, 'peem22', 'peem22@hotmail.com', '0909876669', 'Male', '20', '123456'),
(23, 'peem23', 'peem23@hotmail.com', '0909876670', 'Male', '20', '123456'),
(24, 'peem24', 'peem24@hotmail.com', '0909876671', 'Male', '20', '123456'),
(25, 'peem25', 'peem25@hotmail.com', '0909876672', 'Male', '20', '123456'),
(26, 'bill1', 'bill1@hotmailcom', '0123456789', 'Male', '18', '123'),
(27, 'bill2', 'bill2@hotmailcom', '0123456790', 'Male', '19', '124'),
(28, 'bill3', 'bill3@hotmailcom', '0123456791', 'Male', '20', '125'),
(29, 'bill4', 'bill4@hotmailcom', '0898651212', 'Male', '21', '126'),
(30, 'bill5', 'bill5@hotmailcom', '0976512221', 'Male', '22', '127'),
(31, 'bill6', 'bill6@hotmailcom', '0987987765', 'Male', '23', '128'),
(32, 'bill7', 'bill7@hotmailcom', '0909876651', 'Male', '24', '129'),
(33, 'bill8', 'bill8@hotmailcom', '0909876652', 'Male', '25', '130'),
(34, 'bill9', 'bill9@hotmailcom', '0909876653', 'Male', '26', '131'),
(35, 'bill10', 'bill10@hotmailcom', '0909876654', 'Male', '27', '132'),
(36, 'bill11', 'bill11@hotmailcom', '0909876655', 'Male', '28', '133'),
(37, 'bill12', 'bill12@hotmailcom', '0909876656', 'Male', '20', '134'),
(38, 'bill13', 'bill13@hotmailcom', '0909876657', 'Male', '21', '135'),
(39, 'bill14', 'bill14@hotmailcom', '0909876658', 'Male', '22', '136'),
(40, 'bill15', 'bill15@hotmailcom', '0909876659', 'Male', '23', '137'),
(41, 'bill16', 'bill16@hotmailcom', '0909876660', 'Male', '24', '138'),
(42, 'bill17', 'bill17@hotmailcom', '0909876661', 'Male', '25', '139'),
(43, 'bill18', 'bill18@hotmailcom', '0909876662', 'Male', '26', '140'),
(44, 'bill19', 'bill19@hotmailcom', '0909876663', 'Male', '27', '141'),
(45, 'bill20', 'bill20@hotmailcom', '0909876664', 'Male', '28', '142'),
(46, 'bill21', 'bill21@hotmailcom', '0909876665', 'Male', '29', '143'),
(47, 'bill22', 'bill22@hotmailcom', '0909876666', 'Male', '30', '144'),
(48, 'bill23', 'bill23@hotmailcom', '0909876667', 'Male', '31', '145'),
(49, 'bill24', 'bill24@hotmailcom', '0909876668', 'Male', '32', '146'),
(50, 'bill25', 'bill25@hotmailcom', '0909876669', 'Male', '33', '147'),
(51, 'stardew ', 'stardew@gmail.com', '0909876670', 'Male', '18', '444213'),
(52, 'mazda2', 'mas@hotmail.com', '0909876671', 'Male', '14', '987665'),
(53, 'porsccc', 'sdwdwe@hotmail.com', '0909876672', 'Male', '21', '456785'),
(54, 'nhg2we', 'massds@hotmail.com', '0123456789', 'Male', '42', '6565653'),
(55, 'Nongkai', 'zzzs@hotmail.com', '0123456790', 'Male', '23', '45456'),
(56, 'Pimpat', 'asdd@hotmail.com', '0123456791', 'Female', '23', '56698'),
(57, 'Janny', 'asdwe@hotmail.com', '0898651212', 'Female', '19', '663222'),
(58, 'Jinxxx', 'jixasew@hotmail.com', '0976512221', 'Female', '24', '65457'),
(59, 'Mkasdo', 'masdo@hotmail.com', '0987987765', 'Male', '26', '26456'),
(60, 'Mikasa', 'Miksa@hotmail.com', '0909876651', 'Male', '27', '445996'),
(61, 'GamerXD', 'MGSE@hotmail.com', '0909876652', 'Male', '45', '987564'),
(62, 'Kualax', 'Poirw@hotmail.com', '0909876653', 'Male', '26', '421231'),
(63, 'Qwerty', 'Qwefdcv@hotmail.com', '0909876654', 'Male', '36', '422221'),
(64, 'Pongtai', 'taikun@hotmail.com', '0909876655', 'Female', '21', '454862'),
(65, 'Uqwev', 'sldwer@hotmail.com', '0909876656', 'Female', '56', '2123485'),
(66, 'LovePong', 'Pong@hotmail.com', '0909876657', 'Male', '23', '456456'),
(67, 'Typing', 'poing@hotmail.com', '0909876658', 'Male', '48', '546996'),
(68, 'Error', 'erdvd@hotmail.com', '0909876659', 'Female', '23', '454574'),
(69, 'Uyuing', 'yuning@hotmail.com', '0909876660', 'Female', '29', '5645678'),
(70, 'Fasdwe', 'dfase@hotmail.com', '0909876661', 'Female', '15', '1234897'),
(71, 'qwedsvl', 'sfdgji@hotmail.com', '0909876662', 'Male', '20', '215789'),
(72, 'Jazasd', 'jazzawq@hotmail.com', '0909876663', 'Male', '23', '156489'),
(73, 'Ingjazds', 'ingjaz@hotmail.com', '0909876664', 'Male', '45', '1568754'),
(74, 'Mandarin', 'mandai@hotmail.com', '0909876665', 'Male', '23', '156487'),
(75, 'FahFond', 'fondy@hotmail.com', '0909876666', 'Female', '27', '984562'),
(76, 'apisarit1', 'knot@email.com', '0909876667', 'Male', '50', '12345669'),
(77, 'knotty', 'knotty@email.com', '0909876668', 'Other', '51', '12345670'),
(78, 'asdfgr', 'asdfgr@outlook.com026654558', '0909876669', 'Famale', '52', '12345677'),
(79, 'poker123', 'poker@hotmail.com', '0909876670', 'Male', '53', '12345680'),
(80, 'jojo', 'joj@gmail.com', '0909876671', 'Other', '24', '12345684'),
(81, 'jame', 'jojo1@gmail.com', '0909876672', 'Famale', '32', '12345688'),
(82, 'jame1', 'jojo2@gmail.cm', '0123456789', 'Male', '44', '12345692'),
(83, 'jame2', 'jame3@gmail.com', '0123456790', 'Other', '56', '12345696'),
(84, 'jame3', 'jj@gmail.com', '0123456791', 'Famale', '20', '12345700'),
(85, 'jame4', 'ap@gmail.com', '0898651212', 'Male', '21', '12345704'),
(86, 'jame5', 'cd@hotmail.com', '0976512221', 'Other', '23', '12345708'),
(87, 'jame6', 'ro@gmail.com', '0987987765', 'Famale', '21', '12345712'),
(88, 'jame7', 'ma@outlook.com', '0909876651', 'Male', '15', '12345716'),
(89, 'jame8', 'car@email.com', '0909876652', 'Other', '32', '12345720'),
(90, 'jojo1', 'loft@gmail.com', '0909876653', 'Famale', '28', '12345724'),
(91, 'jojo2', 'came@gmail.com', '0909876654', 'Male', '44', '12345728'),
(92, 'jojo3', 'ta@hotmail.com', '0909876655', 'Other', '65', '12345732'),
(93, 'jojo4', 'oo@email.com', '0909876656', 'Famale', '50', '12345736'),
(94, 'jojo5', 'count@email.com', '0909876657', 'Male', '45', '12345740'),
(95, 'jojo6', 'bass@hotmal.com', '0909876658', 'Other', '53', '12345744'),
(96, 'jojo7', 'game@gmail.com', '0909876659', 'Famale', '35', '12345748'),
(97, 'jojo8', 'koko@gmail.com', '0909876660', 'Male', '40', '12345752'),
(98, 'jojo9', 'love@hotmail.co.th', '0909876661', 'Other', '36', '12345756'),
(99, 'jafe', 'jafe@gmail.com', '0909876662', 'Male', '20', '12344555'),
(100, 'loli', 'lilipop@hotmail.com', '0909876663', 'Other', '11', '12121212');

--
-- Indexes for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
