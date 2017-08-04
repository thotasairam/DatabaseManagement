-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2016 at 05:23 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BookStore`
--

-- --------------------------------------------------------

--
-- Table structure for table `Book Details`
--

CREATE TABLE `BookDetails` (
  `ISBN` int(10) NOT NULL,
  `BName` varchar(255) NOT NULL,
  `BAuthor` varchar(255) NOT NULL,
  `PublishYear` year(4) NOT NULL,
  `BPrice` double(100,2) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Availability` varchar(255) NOT NULL,
  `Publisher` varchar(255) NOT NULL,
  `InvoiceNumber` int(11) NOT NULL,
  `OrderNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Book Details`
--

INSERT INTO `BookDetails` (`ISBN`, `BName`, `BAuthor`, `PublishYear`, `BPrice`, `Genre`, `Availability`, `Publisher`, `InvoiceNumber`, `OrderNumber`) VALUES
(439708184, 'Harry Potter and the Sorcerer''s Stone', 'J.K. Rowling', 1998, 10.99, 'Action', 'Yes', 'Scholistic', 1, 12),
(439708185, 'Harry Potter and the Chamber of Scecrets', 'J.K.Rowling', 2000, 20.99, 'Fiction', 'Yes', 'Scholastic Paperbacks', 2, 15),
(470501243, 'Google Speaks: Secrets of the Worlds Greatest Billioniares, Serger Brin and Larry Page', 'Janet Lowe', 2009, 35.99, 'Business', 'Yes', 'John Wiley & Sons', 3, 14),
(553593714, 'A Game of Thrones 2\r\n', 'George R. R. Martin', 2011, 45.99, 'Fantasy', 'Yes', 'Bantam Books', 5, 16),
(1589941039, 'A Game of Thrones\r\n', 'George R. R. Martin', 2011, 45.99, 'Politics', 'Yes', 'HarperCollins Publishers Limited', 4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `Contact Details`
--

CREATE TABLE `ContactDetails` (
  `ZipCode` int(5) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `EmailID` varchar(255) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contact Details`
--

INSERT INTO `ContactDetails` (`ZipCode`, `Street`, `City`, `State`, `Phone`, `EmailID`, `CustomerID`) VALUES
(73056, '112 S Duncan St, Apt 5', 'Rockwell', 'OK', 4055326753, 'srikar786@gmail.com', 11463231),
(73073, 'N 23 UNIVERSITY PL, APT 3', 'Blackwell', 'NY', 4055324744, 'navaneet.bontu@gmail.com', 11575756),
(73112, '2521 N Glenhaven Dr, Apt 264', 'Midwest City', 'OK', 405121777, 'sbvuduta@gmail.com', 11573233),
(74074, '116 N West St, Apt C', 'Stillwater', 'OK', 4055324826, 'thotasaikrishna15@gmail.com', 11573231),
(74075, '112 N Duck, Apt 5', 'Stillwater', 'OK', 2055324799, 'thotasairam@gmail.com', 11573236);

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CustomerID` int(11) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `Zipcode` int(5) NOT NULL,
  `InvoiceNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CustomerID`, `FName`, `LName`, `Profession`, `Zipcode`, `InvoiceNumber`) VALUES
(11463231, 'Srikar', 'Dhawan', 'Cricketer', 73056, 0),
(11573231, 'Sai Krishna ', 'Thota', 'Student', 74074, 0),
(11573233, 'Satish', 'Vuduta', 'Businessman', 73112, 3),
(11573236, 'Sai Ram ', 'Thota', 'Student', 74075, 1),
(11575756, 'Navaneeth', 'Bonthu', 'Student', 73073, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Production`
--

CREATE TABLE `Production` (
  `OrderNumber` int(11) NOT NULL,
  `Date` int(2) NOT NULL,
  `Month` int(2) NOT NULL,
  `Year` year(4) NOT NULL,
  `Time` time(4) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Price` double(100,2) NOT NULL,
  `SupplierID` varchar(255) NOT NULL,
  `ISBN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Production`
--

INSERT INTO `Production` (`OrderNumber`, `Date`, `Month`, `Year`, `Time`, `Quantity`, `Price`, `SupplierID`, `ISBN`) VALUES
(12, 1, 9, 1998, '03:22:47.1033', 50, 10.99, '12345', '439708184'),
(13, 4, 2, 2014, '09:23:18.4980', 3, 120.99, '12346', '439708184'),
(14, 4, 3, 2016, '05:33:18.0000', 2, 99.99, '12347', '470501243'),
(15, 2, 2, 2000, '00:00:05.0000', 33, 252739.98, '12348', '439708185'),
(16, 3, 7, 1998, '07:16:21.3810', 100, 109.99, '12348', '553593714'),
(17, 30, 1, 1999, '06:16:15.0000', 100, 109.99, '12349', '1589941039'),
(18, 29, 2, 2014, '04:19:19.0000', 50, 823.99, '12349', '439708185');

-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE `Sales` (
  `InvoiceNumber` int(11) NOT NULL,
  `Date` int(2) NOT NULL,
  `Month` int(2) NOT NULL,
  `Year` year(4) NOT NULL,
  `Time` time(4) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` double(100,2) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sales`
--

INSERT INTO `Sales` (`InvoiceNumber`, `Date`, `Month`, `Year`, `Time`, `Quantity`, `Price`, `CustomerID`, `ISBN`) VALUES
(1, 2, 9, 1998, '08:30:00.0000', 2, 21.98, 11573236, 439708184),
(2, 23, 12, 2012, '12:23:24.0000', 3, 33.97, 11573233, 439708185),
(3, 23, 12, 2010, '06:20:15.0000', 1, 35.99, 11575756, 470501243),
(4, 3, 2, 2013, '17:25:30.0000', 2, 100.76, 11573231, 1589941039),
(5, 5, 3, 2016, '08:00:16.2720', 3, 99.99, 11463231, 553593714);

-- --------------------------------------------------------

--
-- Table structure for table `Suppliers`
--

CREATE TABLE `Suppliers` (
  `SupplierID` int(11) NOT NULL,
  `SFName` varchar(255) NOT NULL,
  `SLName` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `OrderNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Suppliers`
--

INSERT INTO `Suppliers` (`SupplierID`, `SFName`, `SLName`, `CompanyName`, `Phone`, `OrderNumber`) VALUES
(12345, 'Tenn and Young Adult', 'Family Fiction', 'Amazon', 2052052051, 12),
(12346, 'Samuel', 'Johnson', 'Berkley Productions', 4053323321, 0),
(12347, 'James', 'MAthews', 'Indian Student Association', 8790660839, 0),
(12348, 'Lenardo', 'DiCaprio', 'Hollywood', 7895239862, 0),
(12349, 'Adam', 'Grilichist', 'Australia Cricket', 6789875392, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Book Details`
--
ALTER TABLE `BookDetails`
  ADD PRIMARY KEY (`ISBN`),
  ADD FOREIGN KEY (`InvoiceNumber`)
  REFERENCES Sales(`InvoiceNumber`),
  ADD FOREIGN KEY (`OrderNumber`)
  REFERENCES Production(`OrderNumber`);

--
-- Indexes for table `Contact Details`
--
ALTER TABLE `ContactDetails`
  ADD PRIMARY KEY (`ZipCode`),
  ADD FOREIGN KEY (`CustomerID`)
  REFERENCES Customer(`CustomerID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD FOREIGN KEY (`InvoiceNumber`)
  REFERENCES Sales(`InvoiceNumber`);

--
-- Indexes for table `Production`
--
ALTER TABLE `Production`
  ADD PRIMARY KEY (`OrderNumber`),
  ADD FOREIGN KEY (`SupplierID`)
  REFERENCES Suppliers(`SupplierID`),
  ADD FOREIGN KEY (`ISBN`)
  REFERENCES BookDetails(`ISBN`);

--
-- Indexes for table `Sales`
--
ALTER TABLE `Sales`
  ADD PRIMARY KEY (`InvoiceNumber`),
  ADD FOREIGN KEY (`CustomerID`)
  REFERENCES Customer(`CustomerID`),
  ADD FOREIGN KEY `ISBN` (`ISBN`)
   REFERENCES BookDetails(`ISBN`);

--
-- Indexes for table `Suppliers`
--
ALTER TABLE `Suppliers`
  ADD PRIMARY KEY (`SupplierID`),
  ADD FOREIGN KEY (`OrderNumber`)
  REFERENCES Production(`OrderNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Book Details`
--
ALTER TABLE `BookDetails`
  MODIFY `ISBN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1589941040;
--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11575757;
--
-- AUTO_INCREMENT for table `Production`
--
ALTER TABLE `Production`
  MODIFY `OrderNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `Sales`
--
ALTER TABLE `Sales`
  MODIFY `InvoiceNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Suppliers`
--
ALTER TABLE `Suppliers`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12350;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
