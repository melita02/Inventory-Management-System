-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 03:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventorysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `I_id` int(11) NOT NULL,
  `I_Name` varchar(20) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`I_id`, `I_Name`, `Color`, `Quantity`, `Size`) VALUES
(1, 'Kurta', 'Black', 80, 'S'),
(2, 'Kurta', 'Black', 20, 'M'),
(3, 'Kurta', 'Black', 20, 'XL'),
(4, 'Kurta', 'White', 20, 'S'),
(5, 'Kurta', 'White', 20, 'M'),
(6, 'Kurta', 'White', 100, 'XL'),
(7, 'Jeans', 'Gray', 70, 'S'),
(8, 'Jeans', 'Gray', 20, 'M'),
(9, 'Jeans', 'Gray', 100, 'XL'),
(10, 'Jeans', 'Blue', 100, 'S'),
(11, 'Jeans', 'Blue', 100, 'M'),
(12, 'Jeans', 'Blue', 100, 'XL'),
(13, 'T-Shirt', 'Orange', 20, 'S'),
(14, 'T-Shirt', 'Orange', 100, 'M'),
(15, 'T-Shirt', 'Orange', 100, 'XL'),
(16, 'T-Shirt', 'Yellow', 100, 'S'),
(17, 'T-Shirt', 'Yellow', 100, 'M'),
(18, 'T-Shirt', 'Yellow', 100, 'XL'),
(19, 'Shirt', 'Green', 100, 'S'),
(20, 'Shirt', 'Green', 100, 'M'),
(21, 'Shirt', 'Green', 100, 'XL'),
(22, 'Shirt', 'Black', 100, 'S'),
(23, 'Shirt', 'Black', 99, 'M'),
(24, 'Shirt', 'Black', 100, 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_no` int(10) NOT NULL,
  `Item` varchar(20) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Supplier` varchar(20) NOT NULL,
  `Quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_no`, `Item`, `Color`, `Size`, `Supplier`, `Quantity`) VALUES
(25, 'jeans', 'gray', 'm', 'Arun', 80);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `S_Id` varchar(10) NOT NULL,
  `S_Name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`S_Id`, `S_Name`, `Address`, `Contact`) VALUES
('S001', 'Pramod', 'Dadar', '9824557214'),
('S002', 'Anand', 'Borivali', '9917242264'),
('S003', 'Sunil', 'Andheri', '9812506312'),
('S004', 'Arun', 'Virar', '9184880475');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`I_id`),
  ADD KEY `I_Name` (`I_Name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_no`),
  ADD KEY `fk_1` (`Item`),
  ADD KEY `fk_2` (`Supplier`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`S_Id`),
  ADD UNIQUE KEY `S_Name` (`S_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `I_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`Supplier`) REFERENCES `supplier` (`S_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
