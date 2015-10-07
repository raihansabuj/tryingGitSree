-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2015 at 02:14 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sareestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'rubel', 'rubel');

-- --------------------------------------------------------

--
-- Table structure for table `care`
--

CREATE TABLE IF NOT EXISTS `care` (
  `care_id` int(30) NOT NULL,
  `care_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `care`
--

INSERT INTO `care` (`care_id`, `care_name`) VALUES
(7, 'Dry wash'),
(8, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `categories_table`
--

CREATE TABLE IF NOT EXISTS `categories_table` (
  `categories_id` int(30) NOT NULL,
  `product_categories` text COLLATE armscii8_bin NOT NULL,
  `categories_shortnotes` text COLLATE armscii8_bin NOT NULL,
  `categories_details` text COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `categories_table`
--

INSERT INTO `categories_table` (`categories_id`, `product_categories`, `categories_shortnotes`, `categories_details`) VALUES
(13, 'Benarasi', '(Wedding/Bridal)', 'Chose your favourite WEDDING saree from '),
(14, 'Casual', '', 'Chose your favourite CASUAL saree from our wide collection'),
(15, 'Party', '', 'Chose your favourite PARTY saree from our wide collection'),
(16, 'Kurti Tops', '', 'Chose your favourite KURTI TOPS from our wide collection'),
(17, 'Blouse', '', 'Chose your favourite BLOUSE from our wide collection'),
(18, 'Panjabi and Bed Sheet  ', '', 'Chose your favourite PANJABI AND BED SHEET from');

-- --------------------------------------------------------

--
-- Table structure for table `fabric`
--

CREATE TABLE IF NOT EXISTS `fabric` (
  `fabric_id` int(30) NOT NULL,
  `fabric_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fabric`
--

INSERT INTO `fabric` (`fabric_id`, `fabric_name`) VALUES
(4, 'Silk'),
(5, 'Cotton'),
(6, 'Mixed');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE IF NOT EXISTS `product_color` (
  `product_color_id` int(30) NOT NULL,
  `product_color_name` text COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`product_color_id`, `product_color_name`) VALUES
(15, 'Red'),
(16, 'Orange'),
(17, 'Blue'),
(18, 'Black'),
(19, 'Green');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `id` int(30) NOT NULL,
  `product_id` text COLLATE armscii8_bin NOT NULL,
  `image` text COLLATE armscii8_bin NOT NULL,
  `color` text COLLATE armscii8_bin NOT NULL,
  `coverpic` text COLLATE armscii8_bin NOT NULL,
  `product_img_entry_date` varchar(55) COLLATE armscii8_bin NOT NULL,
  `image_update_date` varchar(55) COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image`, `color`, `coverpic`, `product_img_entry_date`, `image_update_date`) VALUES
(86, '96', 'lwk1852-enlarge-w.jpg', '5', '1', '10-09-2015 17:00:36 pm', '10-09-2015 18:01:05 pm'),
(87, '97', 'dbu619-enlarge.jpg', '16', '1', '10-09-2015 17:41:29 pm', NULL),
(88, '98', 'akz13-enlarge.jpg', '16', '1', '10-09-2015 17:42:54 pm', NULL),
(89, '99', 'SB7507-w.jpg', '16', '1', '10-09-2015 17:45:29 pm', NULL),
(90, '100', 'mse281-enlarge.jpg', '19', '1', '10-09-2015 17:45:46 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_print_type`
--

CREATE TABLE IF NOT EXISTS `product_print_type` (
  `product_print_id` int(30) NOT NULL,
  `product_print_name` text COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `product_print_type`
--

INSERT INTO `product_print_type` (`product_print_id`, `product_print_name`) VALUES
(5, 'Silky Stripe');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE IF NOT EXISTS `product_table` (
  `product_id` int(30) NOT NULL,
  `product_item_code` text COLLATE armscii8_bin NOT NULL,
  `product_title` text COLLATE armscii8_bin NOT NULL,
  `product_categories` text COLLATE armscii8_bin NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_shipping` varchar(200) COLLATE armscii8_bin NOT NULL,
  `product_brand` text COLLATE armscii8_bin NOT NULL,
  `product_blouse` text COLLATE armscii8_bin NOT NULL,
  `product_stock_availability` text COLLATE armscii8_bin NOT NULL,
  `product_color_availability` text COLLATE armscii8_bin NOT NULL,
  `product_work_type` text COLLATE armscii8_bin NOT NULL,
  `product_print_type` text COLLATE armscii8_bin NOT NULL,
  `product_weight` text COLLATE armscii8_bin NOT NULL,
  `fabric_name` text COLLATE armscii8_bin NOT NULL,
  `care_name` text COLLATE armscii8_bin NOT NULL,
  `product_description` text COLLATE armscii8_bin NOT NULL,
  `product_entry_date` varchar(55) COLLATE armscii8_bin NOT NULL,
  `product_update_date` varchar(55) COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_item_code`, `product_title`, `product_categories`, `product_price`, `product_shipping`, `product_brand`, `product_blouse`, `product_stock_availability`, `product_color_availability`, `product_work_type`, `product_print_type`, `product_weight`, `fabric_name`, `care_name`, `product_description`, `product_entry_date`, `product_update_date`) VALUES
(96, 'SH01', 'Benarashi', '13', 123, '25', '', 'yes', 'yes', '18, 16, 15', '3', '5', '2', '4', '7', 'TowficTowfic', '10-09-2015 17:00:17 pm', NULL),
(97, 'SH078', 'Blouse', '17', 234, '25', '', 'yes', 'yes', '17, 16, 15', '3', '5', '1', '6', '8', 'Best quality Blouse', '10-09-2015 17:41:00 pm', NULL),
(98, 'SH011', 'Kurti Tops', '16', 5435, '25', '', 'no', 'yes', '16', '3', '5', '2', '5', '8', 'Best quality Kurti Tops', '10-09-2015 17:42:39 pm', NULL),
(99, 'SH013', 'Casual', '14', 4534, '26', '', 'yes', 'yes', '19, 16, 15', '4', '5', '3', '5', '7', 'It is one of our luxurious prodct.', '10-09-2015 17:44:01 pm', NULL),
(100, 'SH0114', 'Panjabi and Bedsheets', '18', 3454, '26', '', 'no', 'yes', '19, 16, 15', '3', '5', '3', '4', '7', 'It is one of our luxurious prodct.', '10-09-2015 17:44:55 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_work_type`
--

CREATE TABLE IF NOT EXISTS `product_work_type` (
  `product_work_id` int(11) NOT NULL,
  `product_work_type` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_work_type`
--

INSERT INTO `product_work_type` (`product_work_id`, `product_work_type`) VALUES
(3, 'Factory Made'),
(4, 'Hand Made');

-- --------------------------------------------------------

--
-- Table structure for table `review_product`
--

CREATE TABLE IF NOT EXISTS `review_product` (
  `id` int(30) NOT NULL,
  `product_id` varchar(30) COLLATE armscii8_bin NOT NULL,
  `name` text COLLATE armscii8_bin NOT NULL,
  `email` varchar(50) COLLATE armscii8_bin NOT NULL,
  `rating` varchar(30) COLLATE armscii8_bin NOT NULL,
  `review` text COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `review_product`
--

INSERT INTO `review_product` (`id`, `product_id`, `name`, `email`, `rating`, `review`) VALUES
(1, '1', '', 'tapolly01@gmai.com', '1', ''),
(2, '48', '', 'tapolly01@gmai.com', '1', 'dsdsfdsf'),
(3, '48', '', 'tapolly01@gmai.com', '1', 'dsdsfdsf'),
(4, '56', '', 'tapolly01@gmai.com', '5', 'abcdefghijklmnopqrstucwxyz-abcdefghijklmnopqrstucwxyz-abcdefghijklmnopqrstucwxyz-abcdefghijklmnopqrstucwxyz');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `shipping_id` int(5) NOT NULL,
  `product_shipping` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `product_shipping`, `from`, `to`, `price`) VALUES
(25, 'DHL', 'Dhaka', 'Delhi', '123'),
(26, 'FedEx', 'Dhaka', 'Kolkata', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `care`
--
ALTER TABLE `care`
  ADD PRIMARY KEY (`care_id`);

--
-- Indexes for table `categories_table`
--
ALTER TABLE `categories_table`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `fabric`
--
ALTER TABLE `fabric`
  ADD PRIMARY KEY (`fabric_id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`product_color_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_print_type`
--
ALTER TABLE `product_print_type`
  ADD PRIMARY KEY (`product_print_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_work_type`
--
ALTER TABLE `product_work_type`
  ADD PRIMARY KEY (`product_work_id`);

--
-- Indexes for table `review_product`
--
ALTER TABLE `review_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `care`
--
ALTER TABLE `care`
  MODIFY `care_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories_table`
--
ALTER TABLE `categories_table`
  MODIFY `categories_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `fabric`
--
ALTER TABLE `fabric`
  MODIFY `fabric_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `product_color_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `product_print_type`
--
ALTER TABLE `product_print_type`
  MODIFY `product_print_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `product_work_type`
--
ALTER TABLE `product_work_type`
  MODIFY `product_work_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `review_product`
--
ALTER TABLE `review_product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
