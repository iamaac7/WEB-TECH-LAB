-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 11:33 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

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
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email_id` varchar(20) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`Id`, `Name`, `Email_id`, `Phone`, `Password`) VALUES
(1, 'admin', 'admin@admin.com', 1234, '4321');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `Id` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `licence` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`Id`, `username`, `date`, `licence`, `phone`, `email`, `password`) VALUES
(1, 'Agency', '2016-12-16', 'ABC123', '01723968569', 'a@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `Name`, `Phno`, `Email`, `Message`) VALUES
(6, 'Amin', '01521300263', 'iam@gmail.com', 'I want to talk in person.'),
(7, 'Amin', '01547895654', 'iaw@gm.co', 'iacjucjCNCJNNCKCJKNCJncjlncjc'),
(8, 'ann', '01521300263', 'iaw@gm.co', 'b dbdzdbdbdbssb');

-- --------------------------------------------------------

--
-- Table structure for table `offer_table`
--

CREATE TABLE `offer_table` (
  `Id` int(11) NOT NULL,
  `Offer` varchar(50) NOT NULL,
  `Place_Id` varchar(50) NOT NULL,
  `licence` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_table`
--

INSERT INTO `offer_table` (`Id`, `Offer`, `Place_Id`, `licence`) VALUES
(1, '60%', '2', 'ABC123'),
(3, '10%', '3', 'ABC123'),
(4, '60%', '1', 'ABC123'),
(5, '40%', '4', 'ABC123'),
(6, '60%', '4', 'ABC123'),
(7, '30%', '4', 'ABC123'),
(8, '30%', '4', 'ABC123'),
(9, '', '', ''),
(10, '50', '7', 'ABC123');

-- --------------------------------------------------------

--
-- Table structure for table `photo_table`
--

CREATE TABLE `photo_table` (
  `Id` int(11) NOT NULL,
  `User_Email` varchar(30) NOT NULL,
  `Url` varchar(50) NOT NULL,
  `Place_Id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_table`
--

INSERT INTO `photo_table` (`Id`, `User_Email`, `Url`, `Place_Id`) VALUES
(1, 's@gmail.com', 'url/Sundarban_1.jpg', '1'),
(2, 's@gmail.com', 'url/Coxs_bazar_sea.jpg', '2'),
(3, 's@gmail.com', 'url/Coxs_bazar_sea.jpg', ''),
(4, 's@gmail.com', 'url/jaflong.jpg', ''),
(5, 's@gmail.com', 'url/saint-martin.jpg', ''),
(6, 's@gmail.com', 'url/Sundarban_1.jpg', ''),
(7, 'sun.a@gmail.com', 'url/jaflong.jpg', ''),
(8, 'sun.a@gmail.com', 'url/logo.jpg', ''),
(9, 'sun.a@gmail.com', 'url/saint-martin.jpg', ''),
(10, 'sun.a@gmail.com', 'url/travel4.jpg', ''),
(11, 'sun.a@gmail.com', 'url/world.gif', ''),
(12, '', 'url/WP_20150513_18_32_05_Pro.jpg', '3'),
(13, '', 'url/WP_20150513_18_32_25_Pro.jpg', '3'),
(14, '', 'url/WP_20150513_18_34_57_Pro.jpg', '3'),
(15, '', 'url/WP_20150513_18_32_05_Pro.jpg', '3'),
(16, '', 'url/WP_20150513_18_32_25_Pro.jpg', '3'),
(17, '', 'url/WP_20150513_18_34_57_Pro.jpg', '3'),
(18, '', 'url/WP_20150513_18_32_05_Pro.jpg', '3'),
(19, '', 'url/WP_20150513_18_32_25_Pro.jpg', '3'),
(20, '', 'url/WP_20150513_18_34_57_Pro.jpg', '3'),
(21, '', 'url/WP_20150513_18_32_25_Pro.jpg', '3'),
(22, '', 'url/WP_20150513_18_34_57_Pro.jpg', '3'),
(23, '', 'url/bandarban.jpg', '4'),
(24, '', 'url/jaflong.jpg', '4'),
(25, '', 'url/travel4.jpg', '4'),
(26, 'razonamit@gmail.com', 'url/13659112_685107728306637_2656029672994228000_n', ''),
(27, 'razonamit@gmail.com', 'url/13659112_685107728306637_2656029672994228000_n', ''),
(28, '', 'url/Chologhuri ER.png', '101'),
(29, 'sun@gmail.com', 'url/mamun.jpeg', ''),
(30, 'rafiar789@gmail.com', 'url/rafi.jpg', ''),
(31, '', 'url/47.jpg', '7'),
(32, '', 'url/wall5.jpg', '7'),
(33, '', 'url/wall9.jpg', '7');

-- --------------------------------------------------------

--
-- Table structure for table `place_table`
--

CREATE TABLE `place_table` (
  `Place_Id` int(10) NOT NULL,
  `Place_Name` varchar(25) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Rating` float NOT NULL,
  `Details` varchar(100) NOT NULL,
  `Photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_table`
--

INSERT INTO `place_table` (`Place_Id`, `Place_Name`, `Type`, `Rating`, `Details`, `Photo`) VALUES
(1, 'Bandarban', 'Hill', 7.8, 'Good place', 'url/bandarban.jpg'),
(2, 'coxs bazar', 'sea', 8, 'beautiful', 'url/saint-martin.jpg'),
(4, 'sunderban', 'Forest', 6.6, 'Full of advanture', 'url/saint-martin.jpg'),
(5, 'Bandar     ', 'Hill      ', 6.5, 'Good place', 'url/47.jpg'),
(7, 'pyramid', 'historical', 8.5, 'Wonderful', 'url/wall5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request_trip`
--

CREATE TABLE `request_trip` (
  `Request_Id` int(3) NOT NULL,
  `Place_Name` varchar(60) COLLATE utf8_bin NOT NULL,
  `Duration` int(11) NOT NULL,
  `Budget` int(11) NOT NULL,
  `Name` varchar(60) COLLATE utf8_bin NOT NULL,
  `Phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `Email` varchar(60) COLLATE utf8_bin NOT NULL,
  `Time_Of_Trip` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `request_trip`
--

INSERT INTO `request_trip` (`Request_Id`, `Place_Name`, `Duration`, `Budget`, `Name`, `Phone`, `Email`, `Time_Of_Trip`) VALUES
(1, 'aa', 11, 50000, 'aa', '1521300263', 'io@iyu.com', '0000-00-00 00:00:00.000000'),
(2, 'Amin', 11, 500001, 'aa', '1521300263', 'io1@iyu.com', '2019-09-17 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Date_of_birth` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`FirstName`, `LastName`, `Date_of_birth`, `Gender`, `Phone`, `Email_id`, `Photo`, `Password`) VALUES
('Ahmed', 'Chowdhury', '1998-08-25', 'male', '01521300263', 'aac@gmail.com', 'url/test.jpg', '123456'),
('Ar Rafi', 'Sarkar', '1997-06-30', 'male', '01748963683', 'rafiar789@gmail.com', 'url/rafi.jpg', '12345'),
('Mamunur', 'Rashid', '1997-07-25', 'male', '01773411528', 'sun@gmail.com', 'url/user.jpg', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `visited_table`
--

CREATE TABLE `visited_table` (
  `Id` int(11) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `Place_Id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visited_table`
--

INSERT INTO `visited_table` (`Id`, `User_Email`, `Place_Id`) VALUES
(1, 's@gmail.com', '1'),
(2, 's@gmail.com', '2'),
(4, 'sun@gmail.com', '1'),
(5, 'sun@gmail.com', '2'),
(6, 'sun@gmail.com', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `offer_table`
--
ALTER TABLE `offer_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `photo_table`
--
ALTER TABLE `photo_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `place_table`
--
ALTER TABLE `place_table`
  ADD PRIMARY KEY (`Place_Id`);

--
-- Indexes for table `request_trip`
--
ALTER TABLE `request_trip`
  ADD PRIMARY KEY (`Request_Id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`Email_id`);

--
-- Indexes for table `visited_table`
--
ALTER TABLE `visited_table`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offer_table`
--
ALTER TABLE `offer_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `photo_table`
--
ALTER TABLE `photo_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `request_trip`
--
ALTER TABLE `request_trip`
  MODIFY `Request_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visited_table`
--
ALTER TABLE `visited_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
