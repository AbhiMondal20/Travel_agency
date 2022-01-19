-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 07:34 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `subs_record`
--

CREATE TABLE `subs_record` (
  `id` int(11) NOT NULL,
  `v_title` varchar(20) NOT NULL,
  `v_category` text NOT NULL,
  `v_subscriber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subs_record`
--

INSERT INTO `subs_record` (`id`, `v_title`, `v_category`, `v_subscriber`) VALUES
(1, 'A', 'Music', 'abc@gmail.com'),
(2, 'B', 'Comedy', 'def@gmail.com'),
(3, 'C', 'Technology', 'ghi@gmail.com'),
(4, 'A', 'Music', 'jkl@gmail.com'),
(5, 'C', 'Technology', 'mno@gmail.com'),
(6, 'C', 'Technology', 'pqr@gmail.com'),
(7, 'E', 'Wildlife', 'stu@gmail.com'),
(8, 'B', 'Comedy', 'vwx@gmail.com'),
(9, 'A', 'Music', 'yza@gmail.com'),
(10, 'C', 'Technology', 'abc@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subs_record`
--
ALTER TABLE `subs_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subs_record`
--
ALTER TABLE `subs_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
