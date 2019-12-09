-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 05, 2019 at 12:13 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `Author_id` varchar(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Author`
--

INSERT INTO `Author` (`Author_id`, `FirstName`, `LastName`, `email`) VALUES
('100583834', 'Oleg', 'Gribanov', '100583834@kangan.edu.au'),
('100583835', 'Olegus', 'Gribanov', '100583835@kangan.edu.au'),
('100583836', 'Oleg', 'Grib', '100583836@kangan.edu.au'),
('100583837', 'Oleoleole', 'SpartakChampion', '100583837@kangan.edu.au');

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `bookid` varchar(10) NOT NULL,
  `Bookname` varchar(30) NOT NULL,
  `Authorid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`bookid`, `Bookname`, `Authorid`) VALUES
('123', 'ICT', '100583834'),
('321', 'IT', '100583835'),
('666', 'Design', '100583836'),
('777', 'Book', '100583837'),
('778', 'kooB', '100583834'),
('779', 'BooB', '100583835'),
('781', 'Learning Web Design', '100583835'),
('782', 'Don\'t Make Me Think', '100583837'),
('783', 'Grokking Algorithm', '100583834'),
('785', 'JavaScript: The Good Parts', '100583835'),
('786', 'Head First Java', '100583836'),
('788', 'The Art of Computer', '100583837');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `Customer_id` varchar(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`Customer_id`, `FirstName`, `LastName`, `Address`, `email`, `phone`) VALUES
('1111', 'Fourth', 'Name', 'Broadmeadows', '100583@kangan.edu.au', '12345678'),
('123', 'FirstName1', 'LastName1', 'Address1', 'email1', 'phone1'),
('1234', 'First', 'Name', 'Bendigo', '10058383@kangan.edu.au', '12345'),
('4321', 'Second', 'Name', 'Melbourne', '1005838@kangan.edu.au', '123456'),
('4444', 'Third', 'Name', 'Sydney', '1005838@kangan.edu.au', '1234567'),
('test', 'test', 'test', 'test', 'test', 'test'),
('testo', 'testo', 'testo', 'testo', 'testo', 'testo');

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE `Order` (
  `Customer_id` varchar(10) NOT NULL,
  `bookid` varchar(10) NOT NULL,
  `Orderdate` date NOT NULL,
  `Order details` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Order`
--

INSERT INTO `Order` (`Customer_id`, `bookid`, `Orderdate`, `Order details`) VALUES
('1111', '123', '2019-12-03', '1234'),
('1234', '321', '2019-12-02', '12345'),
('4321', '666', '2019-12-01', '123456'),
('4444', '777', '2019-12-01', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `table book`
--

CREATE TABLE `table book` (
  `id` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table book`
--

INSERT INTO `table book` (`id`, `ISBN`, `Title`, `description`) VALUES
(1, 978144933, 'Learning Web Design', 'Learning Web'),
(2, 978032134, 'Don\'t Make Me Think', 'Don\'t Make Me'),
(3, 978161729, 'Grokking Algorithm by Aditya Y', 'Grokking Algorithm'),
(4, 978059651, 'JavaScript: The Good Parts', 'JavaScript'),
(5, 978059600, 'Head First Java', 'Head First'),
(6, 978032175, 'The Art of Computer', 'The Art');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`Author_id`);

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `Authorid` (`Authorid`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`Customer_id`,`bookid`),
  ADD KEY `bookid` (`bookid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Book`
--
ALTER TABLE `Book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`Authorid`) REFERENCES `Author` (`Author_id`);

--
-- Constraints for table `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `Customers` (`Customer_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `Book` (`bookid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
