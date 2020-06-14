-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2020 at 04:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ct_id` int(11) NOT NULL,
  `ct_name` varchar(255) DEFAULT NULL,
  `ct_status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ct_id`, `ct_name`, `ct_status`) VALUES
(1, 'NEW Project CI/CD Pipeline Setup', 'active'),
(2, 'Update CI/CD Pipeline Configuration', 'active'),
(3, 'DevSecOps Pipeline Setup', 'active'),
(4, 'CI/CD pipeline failure', 'active'),
(5, 'Automated Deployment failure', 'active'),
(6, 'Docker and Containers', 'active'),
(7, 'Kubernetes Deployments (like EKS/GCP)', 'active'),
(8, 'Git Source control', 'active'),
(9, 'PWSLab server not responding (502/503 errors)', 'active'),
(10, 'PWSLab Runner not working (jobs not running)', 'active'),
(11, 'User management and Project access', 'active'),
(12, 'Cloud Integration Consultation - AWS/GCP/Azure', 'active'),
(13, 'Others', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dp_id` int(11) NOT NULL,
  `dp_name` varchar(255) DEFAULT NULL,
  `dp_status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dp_id`, `dp_name`, `dp_status`) VALUES
(1, 'PWSLab DevOps Support', 'active'),
(2, 'iSupport', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `url_user_registration_list`
--

CREATE TABLE `url_user_registration_list` (
  `url_id` int(11) NOT NULL,
  `url_user_name` varchar(255) DEFAULT NULL,
  `url_user_email` varchar(255) DEFAULT NULL,
  `url_user_password` varchar(255) DEFAULT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `url_user_registration_list`
--

INSERT INTO `url_user_registration_list` (`url_id`, `url_user_name`, `url_user_email`, `url_user_password`, `user_status`) VALUES
(1, 'kavin kumar', 'kavinkumarkv6@gmail.com', '123', 'active'),
(2, 'kaleeswaran', 'kaleeswaranslcs@gmail.com', '123', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dp_id`);

--
-- Indexes for table `url_user_registration_list`
--
ALTER TABLE `url_user_registration_list`
  ADD PRIMARY KEY (`url_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `url_user_registration_list`
--
ALTER TABLE `url_user_registration_list`
  MODIFY `url_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
