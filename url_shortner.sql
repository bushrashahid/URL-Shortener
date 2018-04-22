-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 02:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url_shortner`
--

-- --------------------------------------------------------

--
-- Table structure for table `link_address`
--

CREATE TABLE `link_address` (
  `id` int(11) NOT NULL,
  `user_link` varchar(500) NOT NULL,
  `short_url` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link_address`
--

INSERT INTO `link_address` (`id`, `user_link`, `short_url`) VALUES
(1, 'https://en.wikipedia.org/wiki/world_environment_day', 'xkP3'),
(2, 'https://www.unenvironment.org/news-and-stories/press-release/india-host-world-environment-day-2018', 'qZsX'),
(3, 'https://www.facebook.com', 'KZR5'),
(4, 'https://simple.wikipedia.org/wiki/environment', 'XTQn');

-- --------------------------------------------------------

--
-- Table structure for table `link_counter`
--

CREATE TABLE `link_counter` (
  `id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link_counter`
--

INSERT INTO `link_counter` (`id`, `link_id`, `counter`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link_address`
--
ALTER TABLE `link_address`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_link` (`user_link`);

--
-- Indexes for table `link_counter`
--
ALTER TABLE `link_counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `link_address`
--
ALTER TABLE `link_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `link_counter`
--
ALTER TABLE `link_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
