-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2023 at 05:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Artec_Computers`
--

-- --------------------------------------------------------

--
-- Table structure for table `Billing_Details`
--

CREATE TABLE `Billing_Details` (
  `B_id` int(5) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `cart_id` int(15) NOT NULL,
  `id` int(15) DEFAULT NULL,
  `productcode` int(15) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `price` int(15) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Cart`
--

INSERT INTO `Cart` (`cart_id`, `id`, `productcode`, `productname`, `price`, `image`) VALUES
(1, 113, 1001, 'ASUS Vivobook S15', 69990, 'uploads/71jmTKE16uL._SX679_.jpg'),
(2, 16, 1003, 'MSI Gaming GeForce RTX 4060 Ti 8GB', 43000, 'uploads/msi-rtx-4060-ti-ventus-3x-oc-8gb-1.jpg'),
(3, 16, 1006, 'Apple 2023 MacBook Pro Laptop M2', 400000, 'uploads/618M+ksuptL._SX679_.jpg'),
(4, 16, 1004, 'Dell G15-5520 Gaming Laptop', 112390, 'uploads/61bwtzsBimL._SX679_.jpg'),
(5, 113, 1003, 'MSI Gaming GeForce RTX 4060 Ti 8GB', 43000, 'uploads/msi-rtx-4060-ti-ventus-3x-oc-8gb-1.jpg'),
(6, 113, 1004, 'Dell G15-5520 Gaming Laptop', 112390, 'uploads/61bwtzsBimL._SX679_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Customer_details`
--

CREATE TABLE `Customer_details` (
  `id` int(15) NOT NULL,
  `Cust_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `Passwo` varchar(255) NOT NULL,
  `Place` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customer_details`
--

INSERT INTO `Customer_details` (`id`, `Cust_Name`, `Email`, `Phone`, `user_name`, `Passwo`, `Place`) VALUES
(113, 'arun', 'arun@gmail.com', '2320919', 'arun', '1234567', 'Koch'),
(114, 'ben', 'ben@gmail.com', '2320919', 'benjoy', '123456789', 'Kochi');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `placed_on` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Product_Details`
--

CREATE TABLE `Product_Details` (
  `productcode` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `unitprice` varchar(255) NOT NULL,
  `sellingprice` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Product_Details`
--

INSERT INTO `Product_Details` (`productcode`, `productname`, `qty`, `unitprice`, `sellingprice`, `description`, `filename`) VALUES
(1001, 'ASUS Vivobook S15', '1', '92990', '69990', '12500H 12th Gen, Thin and Light Laptop (16GB/512GB SSD/Iris Xe Graphics/Windows 11/Office 2021/Black/1.8 kg)', 'uploads/71jmTKE16uL._SX679_.jpg'),
(1002, 'MSI Katana 15', '4', '139990', '99,990', 'Intel 12th Gen. i7-12650H, 40CM FHD 144Hz Gaming Laptop (16GB/1TB NVMe SSD/Windows 11 Home/Nvidia GeForce RTX4050, 6GB GDDR6/Black/2.25Kg)', 'uploads/713dZHEY2YL._SX679_.jpg'),
(1003, 'MSI Gaming GeForce RTX 4060 Ti 8GB', '6', '65999', '43000 ', 'Game, stream, create. The GeForce RTX™ 4060 Ti lets you take on the latest games and apps with the ultra-efficient NVIDIA Ada Lovelace architecture.\r\n', 'uploads/msi-rtx-4060-ti-ventus-3x-oc-8gb-1.jpg'),
(1004, 'Dell G15-5520 Gaming Laptop', '1', '161531', '112390', 'Intel Core I7-12650H Processor/ 16Gb DDR5/ 512Gb SSD/Nvidia RTX 3060 (6GB GDDR6), 15.6\" (39.62cm) FHD 165Hz 300 Nits/Windows 11+ MSO 21/2.81kg', 'uploads/61bwtzsBimL._SX679_.jpg'),
(1006, 'Apple 2023 MacBook Pro Laptop M2', '5', '349900', '400000', 'Apple 2023 MacBook Pro Laptop M2 Max chip with 12‑core CPU and 38‑core GPU: 33.74 cm (16.2-inch), 32GB Unified Memory, 1TB SSD Storage', 'uploads/618M+ksuptL._SX679_.jpg'),
(1007, 'Xiaomi [Smartchoice] Notebookpro', '1', '70000', '50000', 'Intel Core I5-11300H 11Th Gen 14 Inch(35.56Cm) T&L Laptop(8Gb/512Gb Ssd/Iris Xe Graphics/Win 11/Mso 21/Backlight Kb/Fp Sensor/1.4Kg)', 'uploads/71iiXU7HHkL._SX522_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `User_Credentials`
--

CREATE TABLE `User_Credentials` (
  `id` int(15) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User_Credentials`
--

INSERT INTO `User_Credentials` (`id`, `user_name`, `pwd`, `user_type`) VALUES
(113, 'arun', '1234567', 'Customer'),
(114, 'benjoy', '123456789', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `Customer_details`
--
ALTER TABLE `Customer_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Passwo` (`Passwo`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Product_Details`
--
ALTER TABLE `Product_Details`
  ADD PRIMARY KEY (`productcode`);

--
-- Indexes for table `User_Credentials`
--
ALTER TABLE `User_Credentials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `Password` (`pwd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cart`
--
ALTER TABLE `Cart`
  MODIFY `cart_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Customer_details`
--
ALTER TABLE `Customer_details`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Product_Details`
--
ALTER TABLE `Product_Details`
  MODIFY `productcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `User_Credentials`
--
ALTER TABLE `User_Credentials`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `User_Credentials`
--
ALTER TABLE `User_Credentials`
  ADD CONSTRAINT `User_Credentials_ibfk_2` FOREIGN KEY (`user_name`) REFERENCES `Customer_details` (`user_name`),
  ADD CONSTRAINT `User_Credentials_ibfk_3` FOREIGN KEY (`pwd`) REFERENCES `Customer_details` (`Passwo`),
  ADD CONSTRAINT `User_Credentials_ibfk_4` FOREIGN KEY (`id`) REFERENCES `Customer_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
