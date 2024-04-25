-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2023 at 08:13 PM
-- Server version: 5.7.41-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globalfxp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(10, 'admin100', 'admin100');

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `id` int(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `currency` varchar(200) NOT NULL,
  `account_type` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `profit` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `amountinvested` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `btc_account` varchar(200) DEFAULT NULL,
  `front` varchar(200) DEFAULT NULL,
  `back` varchar(200) DEFAULT NULL,
  `code` varchar(200) DEFAULT NULL,
  `trade_type` int(200) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allusers`
--

INSERT INTO `allusers` (`id`, `fullname`, `email`, `password`, `currency`, `account_type`, `phone`, `profit`, `balance`, `status`, `amountinvested`, `message`, `btc_account`, `front`, `back`, `code`, `trade_type`) VALUES
(1, 'Test', 'test@gmail.com', 'Testing123', 'USD', 'Gold', '07081744560', '0', '0', '1', NULL, NULL, NULL, NULL, NULL, '240999', 0);

-- --------------------------------------------------------

--
-- Table structure for table `proofs`
--

CREATE TABLE `proofs` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `proof` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trading`
--

CREATE TABLE `trading` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `trade_order` varchar(200) NOT NULL,
  `trade_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(200) NOT NULL,
  `volume` varchar(200) NOT NULL,
  `profit` varchar(200) DEFAULT NULL,
  `loss` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `wallet` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(200) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `balance` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `transaction_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sign` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proofs`
--
ALTER TABLE `proofs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trading`
--
ALTER TABLE `trading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `allusers`
--
ALTER TABLE `allusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proofs`
--
ALTER TABLE `proofs`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trading`
--
ALTER TABLE `trading`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
