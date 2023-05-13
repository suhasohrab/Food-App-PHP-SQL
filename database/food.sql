-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 04:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`, `role`, `date`) VALUES
(50, 'Suha Sohrab', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2023-04-29 17:09:42');

-- --------------------------------------------------------



--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `price`, `image`, `description`, `category_id`, `category`) VALUES
(1, 'Mighty Burger', 94.38, 'beef-cheese.jpg', 'description', 1, 'Share The Goodness Upto 30% OFF'),
(2, 'Mighty Burger', 1.05, 'beef-cheese-veggie.jpg', 'description', 2, 'Share The Goodness Upto 30% OFF'),
(3, 'Mighty Burger', 22.10, 'beef-chilli-blast.jpg', 'description', 3, 'Share The Goodness Upto 30% OFF'),
(4, 'Mighty Burger', 7.37, 'beef-jalapeno-spark.jpg', 'description', 1, 'Mighty Deals upto 30% off'),
(5, 'Mighty Burger', 70.53, 'beef-veggie-min.jpg', 'description', 2, 'Mighty Deals upto 30% off'),
(6, 'Mighty Burger', 30.56, 'beef-veggie.jpg', 'description', 3, 'Mighty Deals upto 30% off'),
(7, 'Mighty Burger', 41.20, 'burger.jpeg', 'description', 1, 'Gourmet fries'),
(8, 'Mighty Burger', 14.31, 'burger2.jpg', 'description', 2, 'Gourmet fries'),
(9, 'Mighty Burger', 47.98, 'buster.jpg', 'description', 3, 'Gourmet fries'),
(10, 'Mighty Burger', 96.95, 'Chick-n-crisp.jpg', 'description', 4, 'Gourmet fries'),
(11, 'Mighty Burger', 40.80, 'crispy-chicken.jpg', 'description', 5, 'Gourmet fries'),
(12, 'Mighty Burger', 13.15, 'extreme-chilli-blast.jpg', 'description', 6, 'Gourmet fries'),
(13, 'Mighty Burger', 43.37, 'extreme-grilled-chicken-jalapeno-spark.jpg', 'description', 1, 'Premium burgers'),
(14, 'Mighty Burger', 77.40, 'extreme-jalapeno-spark.jpg', 'description', 2, 'Premium burgers'),
(15, 'Mighty Burger', 56.90, 'extreme-smoky-tang.jpg', 'description', 1, 'Extreme Burgers'),
(16, 'Mighty Burger', 52.29, 'fiery-chicken.jpg', 'description', 2, 'Extreme Burgers'),
(17, 'Mighty Burger', 90.76, 'fiery-gigantic-min.jpg', 'description', 3, 'Extreme Burgers'),
(18, 'Mighty Burger', 96.92, 'firebird.jpg', 'description', 4, 'Extreme Burgers'),
(19, 'Mighty Burger', 12.31, 'gigantic.jpg', 'description', 5, 'Extreme Burgers'),
(20, 'Mighty Burger', 70.78, 'grilled-chicken.jpg', 'description', 6, 'Extreme Burgers'),
(21, 'Mighty Burger', 16.98, 'jalapeno-spark.jpg', 'description', 7, 'Extreme Burgers'),
(22, 'Mighty Burger', 72.54, 'premium-crounches.jpg', 'description', 8, 'Extreme Burgers'),
(23, 'Mighty Burger', 11.79, 'premium-messy.jpg', 'description', 9, 'Extreme Burgers'),
(24, 'Mighty Burger', 41.30, 'smoky-tang-grilled.jpg', 'description', 1, 'Classic burgers'),
(25, 'Mighty Burger', 71.16, 'smoky-tang.jpg', 'description', 2, 'Classic burgers'),
(36, 'Mighty Burger', 5.00, 'food-name-4206.jpg', 'description', 1, 'Burger'),
(40, 'Mighty Burger', 5.00, 'food-name-9069.jpg', 'description', 2, 'Burger'),
(45, 'Mighty Burger', 6.00, 'food-name-6204.jpg', 'description', 3, 'Burger'),
(47, 'Mighty Burger', 6.00, 'food-name-4461.jpg', 'description', 4, 'Burger');

--

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `instructions` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `altno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`id`, `title`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `instructions`, `landmark`, `payment`, `altno`) VALUES
(154, 'Burger', 6.00, 1, 6.00, '2021-12-11 07:29:16', 'On Delivery', 'Ralph Rutledge', '+1 (176) 443-9984', 'qujylur@mailinator.com', 'Qui iste esse non r', NULL, NULL, NULL, NULL),
(157, 'Burger', 5.00, 1, 5.00, '2023-04-29 11:37:55', 'Ordered', 'Suha Sohrab', '123', 'suhasohrab011@gmail.com', 'karachi', NULL, NULL, NULL, NULL),
(158, 'Burger', 5.00, 1, 5.00, '2023-04-29 11:35:11', 'Ordered', 'Suha Sohrab', '+923365255670', 'suhasohrab011@gmail.com', 'A44, Street 5, Block H, North Nazimabad\r\napartment', NULL, NULL, NULL, NULL),
(159, 'Burger', 5.00, 1, 5.00, '2023-04-29 11:35:11', 'Ordered', 'Suha Sohrab', '+923365255670', 'suhasohrab011@gmail.com', 'A44, Street 5, Block H, North Nazimabad\r\napartment', NULL, NULL, NULL, NULL),
(160, 'Burger', 6.00, 1, 6.00, '2023-04-30 10:18:09', 'Ordered', 'faisal', '03334566', 'faisal@gmail.com', 'abc', 'abc', 'abc', NULL, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--


--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
