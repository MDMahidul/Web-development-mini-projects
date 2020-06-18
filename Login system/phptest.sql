-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 10:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_users`
--

CREATE TABLE `my_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email_addr` varchar(255) NOT NULL,
  `usr_pwd` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `signupDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_users`
--

INSERT INTO `my_users` (`id`, `fname`, `lname`, `email_addr`, `usr_pwd`, `auth`, `avatar`, `signupDate`) VALUES
(105, 'Moon', 'islam', 'moon@gmail.com', '1cdc08273b3a8840f0012bded8f92d52', 'a1e22f64a9296320649f4994233abb90', 'avatar.png', '2020-05-21 18:25:19'),
(106, 'mahidul', 'islam', 'mmb@gmail.com', '4d07cd0157cb9c3e5b6edb850337d493', '88deb38027e599dea112f6b652ce9f45', 'avatar.png', '2020-06-18 08:25:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_users`
--
ALTER TABLE `my_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_users`
--
ALTER TABLE `my_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
