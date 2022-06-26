-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 11:45 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `OrderID` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `Date-time` datetime NOT NULL DEFAULT current_timestamp(),
  `Total` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`OrderID`, `cname`, `Date-time`, `Total`) VALUES
(48, 'latif', '2022-06-26 13:09:04', '$234'),
(53, 'abdu', '2022-06-26 13:47:38', '$38.98'),
(54, 'abdu', '2022-06-26 13:48:26', '$38.98'),
(55, 'abdu', '2022-06-26 13:50:47', '$41.57'),
(56, 'abdu', '2022-06-26 13:52:28', '$43.98'),
(58, 'hell', '2022-06-26 14:33:28', '$49.95'),
(59, 'latif', '2022-06-26 14:43:25', '$98.22');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `phone`, `address`, `password`) VALUES
('abd', 'aa', '212121', '21', 'abd'),
('abdu', '', '', '', 'abdu'),
('hell', 'h@h.com', '12221323132', 'dsfsdf f sfjd fdsjf ', 'hell'),
('latif', 'afdf', '34342', 'asfhs fhsdfkjlhds af', 'latif'),
('user', '', '', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderId` int(11) NOT NULL,
  `PName` varchar(80) NOT NULL,
  `Quantity` tinyint(4) NOT NULL,
  `Price` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`OrderId`, `PName`, `Quantity`, `Price`) VALUES
(56, 'Apple Iphone', 1, '$30.99'),
(56, 'Realme Narzo', 1, '$12.99'),
(56, 'Redmi Note 11T 5G', 2, '$10.58'),
(56, 'Redmi Note 8 pro', 5, '$7.29'),
(56, 'Samsung F12', 3, '$5.25'),
(58, 'Redmi 11i', 2, '$9.99'),
(58, 'Redmo note 10s', 3, '$9.99'),
(59, 'Apple Iphone', 3, '$30.99'),
(59, 'Samsung F12', 1, '$5.25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `cname` (`cname`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderId`,`PName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`cname`) REFERENCES `customer` (`name`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `bill` (`OrderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
