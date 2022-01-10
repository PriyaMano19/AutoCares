-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2022 at 03:09 AM
-- Server version: 10.3.32-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoozec_autocareslk`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `service` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `shop_id`, `customer_name`, `customer_mobile`, `customer_email`, `vehicle_no`, `service`, `time`, `created`, `updated`) VALUES
(1, 1, 'dsd', '0778434368', 'senthoo19828@gmail.com', 'dsd', 0, 1, '2021-12-07 13:16:03', '2021-12-07 13:16:03'),
(2, 1, 'senghth', '0778434368', 'senthoo19828@gmail.com', 'sasa', 1, 2, '2021-12-07 13:21:07', '2021-12-07 13:21:07'),
(3, 1, 'dds', '0778434368', 'senthoo19828@gmail.com', 'dsdsd', 1, 2, '2021-12-07 13:28:50', '2021-12-07 13:28:50'),
(4, 1, 'Kabilan', '0761077307', 'kabilansri6@gmail.com', 'PI 0551', 1, 2, '2021-12-08 05:52:57', '2021-12-08 05:52:57'),
(5, 1, 'Kabilan', '0761077307', '', 'PI 0551', 2, 1, '2022-01-10 01:36:11', '2022-01-10 01:36:11'),
(6, 1, 'Kabilan', '0761077307', '', 'PI 0551', 2, 2, '2022-01-10 01:37:24', '2022-01-10 01:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `shop_id`) VALUES
(1, 'Oil Change', 1),
(2, 'Full Service', 1),
(3, 'Body Wash', 1),
(4, 'Body Wash & Interior', 1),
(5, 'Full Service', 2),
(6, 'Oil change', 2),
(7, 'Body wash', 2),
(8, 'Body wash & interior', 2),
(9, 'Body Wash', 3),
(10, 'Oil Change', 3),
(11, 'Full Service', 3),
(12, 'Body Wash & Interior', 3);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `address`, `district`, `image`, `created`, `updated`) VALUES
(1, 'R.S.Auto solutions', 'Vavuniya', 'Vavuniya', 'rs.png', '2021-12-03 01:20:48', '2021-12-13 13:46:50'),
(2, 'Green World Service Station', 'Urumbirai', 'Jaffna', 'default.png', '2021-12-08 05:22:56', '2021-12-13 10:56:05'),
(3, 'Losington Service Station', 'Mannar', 'Mannar', 'default.png', '2021-12-08 05:22:56', '2021-12-13 10:57:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
