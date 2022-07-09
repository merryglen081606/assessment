-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 12:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lougehdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_tbl`
--

CREATE TABLE `customers_tbl` (
  `customer_id` int(11) NOT NULL,
  `customer_name` char(50) NOT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_tbl`
--

INSERT INTO `customers_tbl` (`customer_id`, `customer_name`, `contact_no`, `address`) VALUES
(1, 'Anna Maria Wang', '09988998211', 'Gagha'),
(2, 'Analisa Anap', '09876543212', 'Glan'),
(3, 'Ana Lisa', '', 'Gensan'),
(4, 'Weng Ka', '', 'Hegma'),
(5, 'Wenchu', '', 'Davoa');

-- --------------------------------------------------------

--
-- Table structure for table `items_tbl`
--

CREATE TABLE `items_tbl` (
  `item_id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `barcode` varchar(10) DEFAULT NULL,
  `quantity` int(100) NOT NULL,
  `quantity_type` varchar(10) DEFAULT NULL,
  `cost_per_item` int(100) DEFAULT NULL,
  `unit_price` int(100) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items_tbl`
--

INSERT INTO `items_tbl` (`item_id`, `product_name`, `barcode`, `quantity`, `quantity_type`, `cost_per_item`, `unit_price`, `description`) VALUES
(1, 'Apple', '111222', 5, 'Kilo', 52, 50, 'Fruit'),
(2, 'Baking Powder', '111223', 3, 'Kilo', 40, 70, 'Baking'),
(3, 'Orange', '1111233', 100, 'Kilo', 30, 40, 'Fruit'),
(4, 'bvm', '65454', 78, 'Kilo', 45, 67, 'ni'),
(5, 'Banana', 'SUP1AA', 50, 'Kilo', 30, 50, 'Fruit');

-- --------------------------------------------------------

--
-- Table structure for table `sale_transaction`
--

CREATE TABLE `sale_transaction` (
  `transaction_id` int(11) NOT NULL,
  `item_id` int(100) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `unit_price` int(100) DEFAULT NULL,
  `amount` int(100) DEFAULT NULL,
  `date` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_transaction`
--

INSERT INTO `sale_transaction` (`transaction_id`, `item_id`, `quantity`, `unit_price`, `amount`, `date`) VALUES
(2, 2, 3, 31, 91, '2022-07-04 09:28:57.406466');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_tbl`
--

CREATE TABLE `suppliers_tbl` (
  `supplier_id` int(11) NOT NULL,
  `company_code` varchar(10) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `telephone_no` varchar(12) DEFAULT NULL,
  `phone_no` varchar(12) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers_tbl`
--

INSERT INTO `suppliers_tbl` (`supplier_id`, `company_code`, `company_name`, `telephone_no`, `phone_no`, `address`) VALUES
(1, 'SUPP1', 'Four East Food Corner', '09876542222', '09876002221', 'Gensan'),
(2, 'SUPP3', 'Golden Coffee', '09876542220', '09822542221', 'Davao'),
(3, 'SUPP5', 'KM', '09876542221', '09876542200', 'Gensan'),
(4, 'SUPP4', 'SM mALl', '09988767519', '09888786220', 'NBHVHG'),
(5, 'SUPP2', 'Gim Foods ', '09998998987', '09900998987', 'Cebu'),
(6, 'SUPP6', 'Maletss', '09998878789', '09998878711', 'Sayes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_name` (`customer_name`);

--
-- Indexes for table `items_tbl`
--
ALTER TABLE `items_tbl`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indexes for table `sale_transaction`
--
ALTER TABLE `sale_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `suppliers_tbl`
--
ALTER TABLE `suppliers_tbl`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `company_code` (`company_code`),
  ADD UNIQUE KEY `company_name` (`company_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items_tbl`
--
ALTER TABLE `items_tbl`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_transaction`
--
ALTER TABLE `sale_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers_tbl`
--
ALTER TABLE `suppliers_tbl`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
