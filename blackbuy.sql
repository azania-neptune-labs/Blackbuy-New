-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 11:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blackbuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankcard`
--

CREATE TABLE `bankcard` (
  `cardNumber` bigint(19) NOT NULL,
  `BankName` varchar(20) NOT NULL,
  `expiryDate` date NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderId` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productCode` int(11) NOT NULL,
  `productAmount` double NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderId`, `productName`, `productCode`, `productAmount`, `userID`) VALUES
(1, 'fruit', 567, 798, 0),
(2, 'fruit', 567, 798, 0),
(3, 'fruit', 567, 798, 0),
(4, 'khoza', 567, 676, 0),
(5, 'khoza', 567, 676, 0),
(6, 'khoza', 567, 676, 0),
(7, 'fruit', 567, 798, 0),
(8, 'fruit', 567, 798, 0),
(9, 'fruit', 567, 798, 0),
(10, 'fruit', 567, 798, 0),
(11, 'fruit', 567, 798, 0),
(12, 'fruit', 567, 798, 0),
(13, 'fruit', 567, 798, 0),
(14, 'fruit', 567, 798, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `REVIEW_ID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `REVIEW` varchar(100) DEFAULT NULL,
  `PRODUCT_RATING` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`REVIEW_ID`, `email`, `REVIEW`, `PRODUCT_RATING`, `FirstName`) VALUES
(1, 'Ayanda', 'ayanda205@gmail.com', 0, 'on'),
(2, 'samke205@gmail.com', 'kwdkdo', 0, 'khoza'),
(3, 'thobekagumede09@gmail.com', 'lkihycezwezxrctvybunimuyfrtcv', 25, 'zama'),
(4, 'leonluthuli@outlook.com', 'lkihycezwezxrctvybunimuyfrtcv', 50, 'nathi'),
(5, 'sthandwa@gmail.com', 'yazi wena', 100, 'sthandwa'),
(6, 'khoza@gmail.com', '23rx23xe2', 100, 'khoza'),
(7, 'khoz@gmail.com', '23rx23xe2', 100, 'khoza'),
(8, 'kho@gmail.com', 'erfwecrgtewex', 100, 'khoza'),
(9, 'kh@gmail.com', 'erfwecrgtewex', 25, 'khoza');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `companyId` int(11) NOT NULL,
  `companyName` text NOT NULL,
  `companyTimeOperation` text NOT NULL,
  `companyCategory` text NOT NULL,
  `companyTaxNumber` text NOT NULL,
  `companyNumber` text NOT NULL,
  `companyBEELevel` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `productId` int(11) NOT NULL,
  `productName` text NOT NULL,
  `productAmount` double(15,2) NOT NULL,
  `productDesciption` text NOT NULL,
  `productCode` text NOT NULL,
  `productQuantity` text NOT NULL,
  `productCategory` text NOT NULL,
  `productImage` text NOT NULL,
  `companyId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`productId`, `productName`, `productAmount`, `productDesciption`, `productCode`, `productQuantity`, `productCategory`, `productImage`, `companyId`) VALUES
(7, 'fruit', 798.00, 'ZAMAJI', '980', '567', 'opt0', 'IMG_20190420_184603.png', 0),
(8, 'khoza', 676.00, 'akudliwe', '980', '567', 'opt1', 'IMG_20181222_130626.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userID` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_address` text NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `UserType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userID`, `FirstName`, `LastName`, `phone`, `email`, `user_address`, `user_password`, `UserType`) VALUES
(2, 'Nkosinathi', 'khoza', '0715376673', 'nathi@gmail.com', 'n511 uhiue', '12345', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankcard`
--
ALTER TABLE `bankcard`
  ADD KEY `fk_user` (`userID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`REVIEW_ID`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `REVIEW_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `companyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bankcard`
--
ALTER TABLE `bankcard`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userID`) REFERENCES `userdetails` (`userID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
