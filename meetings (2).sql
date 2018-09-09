-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 03:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meetings`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(44) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `role`) VALUES
(1, 'kiko', 'kula', 'admin'),
(2, 'milos', 'secerna', 'subscriber'),
(3, 'Danilo', 'kuglica123', 'subscriber'),
(4, 'Uros', 'umiljati', 'subscriber'),
(5, 'krit', 'himna', 'suscriber'),
(6, 'Leo', 'himna', 'admin'),
(8, 'Milica', 'tfgzuhjkkj', 'suscriber');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `approval` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `company`, `email`, `number`, `date`, `time`, `approval`) VALUES
(1, 'Danilo Leovac', 'Amplitudo', 'danilo@amplitudo.me', 69887766, '2018-08-30', '14:10:00', 'approve'),
(2, 'Milos Nikolic', 'Programiranje Doo', 'daniloleki@yahoo.com', 89976, '2018-08-28', '01:00:00', 'approve'),
(3, 'Milos Nikolic', 'Programiranje Doo', 'gfdgzhu@hfhfh.com', 6977656, '2018-02-02', '21:06:00', 'approve'),
(4, 'Milan Sekaric', 'Google', 'whuszgsuq@yahoo.com', 68887766, '2019-01-02', '21:32:00', 'unapprove'),
(24, 'Nikola Nikolic', 'google', 'dh@mail.com', 698877667, '2018-09-30', '02:01:00', 'approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
