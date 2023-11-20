-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2023 at 03:19 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fast_forward`
--

-- --------------------------------------------------------

--
-- Table structure for table `mechanics`
--

CREATE TABLE `mechanics` (
  `User_ID` int(11) NOT NULL,
  `Responsible_Station` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rent_info`
--

CREATE TABLE `rent_info` (
  `Rent_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Shoes_ID` int(11) NOT NULL,
  `Rent_Date` date NOT NULL,
  `Rent_Start_Time` time NOT NULL,
  `Rent_Finish_Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `Shoes_ID` int(11) NOT NULL,
  `Shoes_Model` varchar(50) NOT NULL,
  `Shoes_Received_Date` date NOT NULL,
  `Shoes_Station` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`Shoes_ID`, `Shoes_Model`, `Shoes_Received_Date`, `Shoes_Station`) VALUES
(10, 'Nikke', '2023-11-20', 5);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `Station_ID` int(11) NOT NULL,
  `Station_Name` varchar(50) NOT NULL,
  `Station_Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`Station_ID`, `Station_Name`, `Station_Address`) VALUES
(4, 'Dream Town', '123/456 Test Street'),
(5, 'Bangchak', 'Tesco Lotus, Inno Street');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `User_Title` varchar(255) NOT NULL,
  `User_Fname` varchar(50) NOT NULL,
  `User_Lname` varchar(50) DEFAULT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_Phone_Number` varchar(25) NOT NULL,
  `User_Password` varchar(25) NOT NULL,
  `User_Role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_Title`, `User_Fname`, `User_Lname`, `User_Email`, `User_Phone_Number`, `User_Password`, `User_Role`) VALUES
(14, 'Mr.', 'admin', 'admin', 'admin@gmail.com', '0906668888', 'admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mechanics`
--
ALTER TABLE `mechanics`
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Responsible_Station` (`Responsible_Station`);

--
-- Indexes for table `rent_info`
--
ALTER TABLE `rent_info`
  ADD PRIMARY KEY (`Rent_ID`),
  ADD KEY `Rent_ID` (`Rent_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Shoes_ID` (`Shoes_ID`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD UNIQUE KEY `Shoes_ID` (`Shoes_ID`),
  ADD UNIQUE KEY `Shoes_Station` (`Shoes_Station`),
  ADD KEY `Shoes_ID_2` (`Shoes_ID`,`Shoes_Station`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD UNIQUE KEY `Station_ID` (`Station_ID`),
  ADD KEY `Station_ID_2` (`Station_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rent_info`
--
ALTER TABLE `rent_info`
  MODIFY `Rent_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `Shoes_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `Station_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mechanics`
--
ALTER TABLE `mechanics`
  ADD CONSTRAINT `mechanics_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mechanics_ibfk_3` FOREIGN KEY (`Responsible_Station`) REFERENCES `stations` (`Station_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rent_info`
--
ALTER TABLE `rent_info`
  ADD CONSTRAINT `rent_info_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rent_info_ibfk_4` FOREIGN KEY (`Shoes_ID`) REFERENCES `shoes` (`Shoes_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`Shoes_Station`) REFERENCES `stations` (`Station_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
