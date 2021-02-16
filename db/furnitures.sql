-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2021 at 11:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furnitures`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `categoryname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `categoryname`) VALUES
(12, 'homes'),
(13, 'offices'),
(14, 'clinic'),
(15, 'hospital'),
(16, 'beachs'),
(17, 'vehicle'),
(18, 'bedrooms'),
(20, 'living room'),
(21, 'kitchens'),
(22, 'dining room'),
(23, 'dining room'),
(24, 'dining room'),
(25, 'school'),
(26, 'school'),
(27, 'school'),
(28, 'school'),
(29, 'school'),
(30, '22');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Cust_id` int(11) NOT NULL,
  `Cust_number` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Region` int(11) NOT NULL,
  `Contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Cust_id`, `Cust_number`, `f_name`, `l_name`, `Address`, `City`, `Region`, `Contact_no`) VALUES
(3, 3, 'ngugi', 'david', 'nairobi', 'nairobi', 47, 798305620);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `not_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`not_id`, `customer_id`, `username`, `status`) VALUES
(5, 22, 'ngugidavid', 'added'),
(6, 22, 'ngugidavid', 'added'),
(7, 22, 'ngugidavid', 'added');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_code` int(20) NOT NULL,
  `order_date` varchar(200) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `total_price` int(20) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_code`, `order_date`, `customer_id`, `total_price`, `status`) VALUES
(25, 1611560072, '2021-01-25', 22, 1000, 'Pending'),
(26, 1611567818, '2021-01-25', 22, 24000, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `Orders_id` int(11) NOT NULL,
  `order_code` int(20) NOT NULL,
  `order_date` varchar(200) NOT NULL,
  `Product_code` int(11) NOT NULL,
  `UnitPrice` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`Orders_id`, `order_code`, `order_date`, `Product_code`, `UnitPrice`, `Quantity`, `total`, `customer_id`) VALUES
(43, 1611551316, '2021-01-25', 1001, 250, 1, 250, 22),
(44, 1611551316, '2021-01-25', 1003, 300, 2, 600, 22),
(45, 1611559787, '2021-01-25', 1006, 150, 1, 150, 22),
(46, 1611559787, '2021-01-25', 1001, 250, 1, 250, 22),
(47, 1611560072, '2021-01-25', 1002, 1000, 1, 1000, 22),
(48, 1611567818, '2021-01-25', 1001, 12000, 2, 24000, 22);

-- --------------------------------------------------------

--
-- Table structure for table `products_table`
--

CREATE TABLE `products_table` (
  `Product_Id` int(11) NOT NULL,
  `Product_Name` varchar(50) DEFAULT NULL,
  `Supplier_Id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Onhand` int(11) NOT NULL,
  `Original_price` int(11) NOT NULL,
  `markup` int(30) NOT NULL,
  `Selling_price` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `ProductCode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_table`
--

INSERT INTO `products_table` (`Product_Id`, `Product_Name`, `Supplier_Id`, `category_id`, `Quantity`, `Onhand`, `Original_price`, `markup`, `Selling_price`, `date`, `ProductCode`) VALUES
(947, 'Cabinet', 1, 12, 50, 20, 12000, 50, 12000, '2019-03-16', '1001'),
(948, 'Wooden Chair', 2, 12, 70, 46, 1000, 1000, 1000, '2019-03-16', '1002'),
(949, 'Stool', 3, 13, 80, 58, 850, 50, 850, '2019-03-16', '1003'),
(950, 'Sofa', 4, 12, 100, 90, 15000, 100, 15000, '2019-03-16', '1004'),
(951, 'Wooden Table', 7, 12, 60, 15, 3000, 40, 3000, '2019-03-16', '1005'),
(952, 'Bed', 8, 13, 76, 74, 10000, 50, 10000, '2019-03-16', '1006');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

CREATE TABLE `tblaccounts` (
  `acct_id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`acct_id`, `f_name`, `l_name`, `address`, `contact`, `email`, `position`, `username`, `password`) VALUES
(1, 'ngugi', 'david', '', 798305620, 'ngugidavid1001@gmail.com', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(22, 'David', 'ngugi', 'nairobi', 798305620, 'ngugidavid10@gmail.com', 'Customer', 'customer', '91ec1f9324753048c0096d036a694f86');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Cust_id`),
  ADD KEY `Cust_number` (`Cust_number`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`not_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`Orders_id`);

--
-- Indexes for table `products_table`
--
ALTER TABLE `products_table`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD PRIMARY KEY (`acct_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `not_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `Orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `products_table`
--
ALTER TABLE `products_table`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=953;

--
-- AUTO_INCREMENT for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  MODIFY `acct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
