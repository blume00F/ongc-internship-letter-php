-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 03:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fillform`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `marks_sem` double(5,2) NOT NULL,
  `marks_12th` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `date`, `address`, `phone`, `email`, `fname`, `mname`, `institute`, `course`, `marks_sem`, `marks_12th`) VALUES
(2, 'ak', 13091999, '271 new street', 123, 'sandlamp8909@gmail.com', 'KK', 'LD', 'DIT', 'Btech', 65.00, 89.90),
(5, 'Amar Kumar', 12, '271, Indira Colony Chukkuwala, Dehradun', 123456789, 'abc@gmail.com', 'Mr. Atmaram Kumar', 'xyz', 'St Agnes ', 'Inter ', 75.00, 82.00),
(6, 'Abhishek Kumar', 13091999, '271 Indira Colony Chukkuwala', 9675167144, 'abhishekar1399@gmail.com', 'Kailash Kumar', 'Laxmi Devi', 'DIT University', 'BTech CSE', 78.20, 89.00),
(21, 'yash goyal', 13091998, '271 heera colony', 9999988888, 'ok@gmail.com', 'mahesh goyal', 'rita goyal', 'skm', 'btech', 65.70, 82.90),
(22, 'Babita Kumari', 26081997, '271 indira colony chukkwala', 8410782063, 'getbabita.26@gmail.com', 'KKP', 'LD', 'gehu', 'cse', 79.00, 72.50),
(23, 'Sarthak Bhatia', 26091999, '271 machi bazar', 9997146310, 'bhatiasarthak0@gmail.com', 'Surendra Bhatia', 'K Bhatia', 'DIT ', 'cse', 78.00, 89.00),
(24, 'Shivam Rawat', 26051999, 'IT Park', 899999989, 'faltushiv9@gmail.com', 'SS', 'BB', 'DIT University', 'cse', 80.00, 96.00),
(25, 'Harshit Upadhyay', 15121999, '9 Patel Nagar', 9411112417, 'Harshit.Upadhyay3099@gmail.com', 'KU', 'MU', 'DIT', 'cse', 84.00, 72.00),
(26, 'Harshit Singhal', 10041999, '89 chukkuwala dehradun', 7895647447, 'harshitsinghal0410@gmail.com', 'HS', 'MS', 'DIT', 'cse', 92.00, 96.88);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
