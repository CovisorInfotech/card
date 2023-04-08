-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 12:33 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `card`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `profile_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `userpassword` varchar(200) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `location_address` varchar(200) NOT NULL,
  `mobile_number` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `payment_link` varchar(200) NOT NULL,
  `whatsapp_number` varchar(200) NOT NULL,
  `google_maps_link` varchar(200) NOT NULL,
  `facebook_link` varchar(200) NOT NULL,
  `instagram_link` varchar(200) NOT NULL,
  `twitter_link` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `banner` varchar(200) NOT NULL,
  `colors` varchar(200) NOT NULL,
  `theme_color` varchar(200) NOT NULL,
  `pdf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(50) NOT NULL,
  `card_id` int(50) NOT NULL,
  `category` varchar(200) NOT NULL,
  `services` varchar(200) NOT NULL,
  `price_type` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `services_type` varchar(200) NOT NULL,
  `service_description` varchar(200) NOT NULL,
  `stusts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
