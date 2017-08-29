-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 05:26 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `name` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`, `category_id`, `added_by`) VALUES
('Electronics', '1', 'vk'),
('Fashion', '2', 'vk'),
('Office Stationery', '3', 'np'),
('Furniture', '4', 'np'),
('Sports', '5', 'vk'),
('Household', '6', 'vk');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Name` varchar(255) NOT NULL,
  `Product_id` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Category_Name` varchar(255) NOT NULL,
  `Category_id` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `Supplier_id` varchar(255) NOT NULL,
  `Supplier_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Name`, `Product_id`, `Description`, `Price`, `Image`, `Category_Name`, `Category_id`, `added_by`, `Supplier_id`, `Supplier_Name`) VALUES
('iPhone 7', '1', 'Check out the New iPhone 7 now..!!', 649, 'iphone.jpg', 'Electronics', '1', 'np', '1', 'Best Sales'),
('Beige Curtains', '10', '100% Silk curtains', 349.99, 'curtain.jpg', 'Household', '6', 'vk', '1', 'Best Sales'),
('abc', '10000', 'abc', 10, 'MANAGEMENT.jpg', 'Furniture', NULL, NULL, '1', ''),
('Samsung S7', '2', 'All new Samsung Galaxy S7 is here!', 599, 's7.jpg', 'Electronics', '1', 'np', '1', 'Best Sales'),
('Men''s Formal Suits', '3', 'A perfect finish for your formal events.', 299, 'suit.jpg', 'Fashion', '2', 'vk', '2', 'Just Deals'),
('Women Shoes', '4', 'Show stopper shoes!', 49.99, 'shoes.jpg', 'Fashion', '2', 'np', '2', 'Just Deals'),
('File Holder', '5', 'Now never misplace a file with this file holder.', 29.99, 'Office.jpg', 'Office Stationery', '3', 'np', '1', 'Best Sales'),
('Modern Coffee Table', '6', 'Time to say goodbye to your old coffee table for this modern, unique coffee table.', 139.99, 'table.jpg', 'Furniture', '4', 'vk', '2', 'Just Deals'),
('Sofa', '7', 'Add comfort to your living space with this afordable compy sofa.', 299.99, 'sofa.jpg', 'Furniture', '4', 'vk', '1', 'Best Sales'),
('Wilson Stream 99 Tennis Racquet', '8', 'Shift your game to attacking gear with this advanced racquet from Wilson.', 120, 'tennis.jpg', 'Sports', '5', 'np', '1', 'Best Sales'),
('Golf Kit', '9', 'Play like a professional with this professional golf kit.', 899.99, 'golf.jpg', 'Sports', '5', 'np', '2', 'Just Deals');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `name` varchar(255) NOT NULL,
  `supplier_id` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `addr_line1` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`name`, `supplier_id`, `email_id`, `phone_no`, `addr_line1`, `city`, `state`, `zip_code`, `added_by`) VALUES
('Best Sales', '1', 'abc@bs.com', '1234567890', '230, East block,\r\n', 'SF', 'CA', '123456', 'np'),
('Just Deals', '2', 'abc@jd.com', '1234567890', '21, Enterprise Avenue,\r\n', 'Greensboro', 'NC', '123345', 'vk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `addr_line1` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `password`, `username`, `addr_line1`, `state`, `city`, `zip_code`, `role`) VALUES
('Nitin', 'Purohit', 'np@123', 'np', '9309, Kittansett Dr.', 'NC', 'Charlotte', '28262', 'Product Manager'),
('Pratik', 'Doshi', 'p@123', 'pd', '9309, Kittansett Dr.\r\nAPT: G', 'NC', 'Charlotte', '28262', 'Customer'),
('Sashi', 'Tamma', 'st@123', 'st', '9309, Kittansett Dr.,', 'NC', 'Charlotte', '28262', 'Customer'),
('Vandita', 'K', 'v@123', 'vk', '9309, Kittansett Dr.', 'NC', 'Charlotte', '28262', 'Product Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `Category_id` (`Category_id`),
  ADD KEY `Supplier_id` (`Supplier_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`username`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`added_by`) REFERENCES `users` (`username`);

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
