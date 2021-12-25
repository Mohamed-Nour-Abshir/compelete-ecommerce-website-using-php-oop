-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 04:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apple_phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(0, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `checkoutaddress`
--

CREATE TABLE `checkoutaddress` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `co_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkoutaddress`
--

INSERT INTO `checkoutaddress` (`id`, `f_name`, `l_name`, `email`, `address`, `zip`, `co_no`) VALUES
(19, 'Abdihamid', 'adan', 'mnor32779@gmail.com', 'nikunja 2', '3128', '01645950765'),
(20, 'ABDIQADIR', 'adan', 'mnor32779@gmail.com', 'Rampura , Banasree B-block ,R3', '1219', '01645950765'),
(21, 'MOHAMEDNUR', 'Nour', 'mnor32779@gmail.com', 'B-block 3-Road 3-house', '1219', '01730931984'),
(22, 'MOHAMEDNUR', 'Nour', 'mnor32779@gmail.com', 'B-block 3-Road 3-house', '1219', '01730931984'),
(29, 'MOHAMEDNUR', 'MohamedNour', 'mnor32779@gmail.com', 'B-block 3-Road 3-house', '1219', '01730931984'),
(30, 'Abdihamid', 'adan', 'mnor32779@gmail.com', 'nikunja 2', '3128', '01645950765'),
(31, 'Abdihamid', 'adan', 'mnor32779@gmail.com', 'nikunja 2', '3128', '01645950765');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order_adddress`
--

CREATE TABLE `confirm_order_adddress` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `co_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order_product`
--

CREATE TABLE `confirm_order_product` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_type`, `item_image`, `item_register`) VALUES
(11, 'Apple', 'Iphone 5', 150.00, 'old', 'product_image/54f47ad917a0c4c3a8fee53e1d1947f51jfif.jfif', NULL),
(12, 'Apple', 'Iphone 6', 200.00, 'old', 'product_image/242c7647caaf5483468f3f565dc0625e2.jfif', NULL),
(13, 'Apple', 'Iphone 7', 300.00, 'old', 'product_image/728ed5db57f8d26404535ed9128dd14a3.jfif', NULL),
(14, 'Apple', 'Iphone 8', 350.00, 'new', 'product_image/5f249c272be817cbdc83e0043108e4b04.jfif', NULL),
(15, 'Apple', 'Iphone x', 400.00, 'new', 'product_image/cc0875654ab76d6dba6c66ebef15db805.jfif', NULL),
(16, 'Apple', 'Iphone 11 pro', 1000.00, 'upcoming', 'product_image/34c6c8e64f04b32620f6a5763066e4146.jfif', NULL),
(17, 'Apple', 'Iphone 12 pro max', 1500.00, 'upcoming', 'product_image/19cf5631b03d169f72690ef3cdea67637.jfif', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'nour', 'abshir', '2021-11-22 13:07:17'),
(2, 'salman', 'roble', '2021-11-22 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_f_Name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_pswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_f_Name`, `user_email`, `user_uid`, `user_pswd`) VALUES
(0, 'MohamedNour', 'nour123', 'mnor32779@gmail.com', '$2y$10$5PyLdV42zW2px245VHm9E.ztS58xXGYdnZtycFpaXbCpUqq.mBJwu'),
(0, 'MohamedNour', 'Moha123', 'mdnourabshir@gmail.com', '$2y$10$J9NiOTnxGRQV0P3a.c6EmeZIWRE9LMcoshNk5nzJFMoGHuhd8MzUK'),
(0, 'MahbuburRahman', 'mahbub', 'mahbuburrahman@gmail.com', '$2y$10$MI4W8QG3lY7vsdRC8Wlis.axunvQMPX0X6.7BiYoQblGBrZQ8Dcha'),
(0, 'Abdihamid adan', 'nfa', 'bnhg@gmail.com', '$2y$10$0ySTwPaswvrJpP0z5CXlQuU8OLrVP04765tGLEc/CoMWA8TlkySoG');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkoutaddress`
--
ALTER TABLE `checkoutaddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order_adddress`
--
ALTER TABLE `confirm_order_adddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order_product`
--
ALTER TABLE `confirm_order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkoutaddress`
--
ALTER TABLE `checkoutaddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `confirm_order_adddress`
--
ALTER TABLE `confirm_order_adddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confirm_order_product`
--
ALTER TABLE `confirm_order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
