-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 10:56 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lacasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `complains` longtext NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `id` int(11) NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`complains`, `name`, `email`, `id`, `comment_status`) VALUES
('Dear la casa: some one sold me fake  property', 'Muhammad ', 'Muhammad.khalid.5498@gmail.com', 1, 1),
('Done , solved My problem Thanks La casa', 'Hesham', 'Hesham@gmail.com', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin question`
--

CREATE TABLE `admin question` (
  `question1` varchar(250) NOT NULL,
  `question2` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin question`
--

INSERT INTO `admin question` (`question1`, `question2`, `id`) VALUES
('lucy', 'zechs ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `img_name` varchar(500) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`img_name`, `img_path`, `id`) VALUES
('pepsi.jpg', 'Admin/upload/pepsi.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `user` varchar(55) NOT NULL,
  `admin` varchar(55) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`user`, `admin`, `id`) VALUES
('Buy', 'ADS', 1),
('Rent', 'Notification', 2),
('Sell', 'Trust Agent', 3),
('Myprofile', 'Users Report', 4),
('Login', 'Selling Report', 5),
('Contact us', 'Login', 6),
('', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(151) NOT NULL,
  `National_Id` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `numberofselling` int(11) NOT NULL,
  `numberofbooked` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `email`, `National_Id`, `phone`, `numberofselling`, `numberofbooked`, `comment`, `id`) VALUES
('Muhammad', '12345678', 'muhammad.khalid.5498@gmail.com', '11111111111111', '01123297097', 3, 2, ' Great Web Site', 1),
('Hesham', '12345678', 'Hesham@gmail.com', '22222222222222', '01212154454', 1, 0, '', 2),
('yasser', '12345678', 'yasser@gmail.com', '33333333333333', '012445454', 0, 1, ' Very trusted site ', 3),
('Atef', '12345678', 'atef@gmail.com', '44444444444444', '0105454489', 1, 1, '', 4),
('admin@admin', '12345678', '', '', '', 0, 0, '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

CREATE TABLE `selling` (
  `area` int(11) NOT NULL,
  `location` varchar(11) NOT NULL,
  `price` int(25) NOT NULL,
  `Description` longtext NOT NULL,
  `Floor` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rooms` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `img_name` varchar(500) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL,
  `sale status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `selling`
--

INSERT INTO `selling` (`area`, `location`, `price`, `Description`, `Floor`, `type`, `rooms`, `baths`, `img_name`, `img_path`, `payment`, `date`, `id`, `sale status`) VALUES
(150, 'cairo', 200000, ' 2 aircondition  + 1 tv', 2, 'Buy', 3, 1, 'download (1).jpg', 'upload/download (1).jpg', 'cash', '2018-04-26', 1, 1),
(150, 'cairo', 200000, ' 2 aircondition  + 1 tv', 2, 'Buy', 3, 1, 'download (1).jpg', 'upload/download (1).jpg', '', '2018-04-02', 2, 0),
(150, 'alex', 2000, ' available for 2 years for rent ', 2, 'Rent', 4, 2, 'images (3).jpg', 'upload/images (3).jpg', 'visa', '2018-04-26', 3, 1),
(250, 'cairo', 250000, 'park + garden + pool', 2, 'Buy', 5, 2, 'images (4).jpg', 'upload/images (4).jpg', '', '0000-00-00', 4, 0),
(150, 'alex', 3000, ' available for 2 years for rent ', 2, 'Rent', 2, 2, '2.jpg', 'upload/2.jpg', '', '0000-00-00', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trustagent`
--

CREATE TABLE `trustagent` (
  `agentname` varchar(250) NOT NULL,
  `agentbio` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trustagent`
--

INSERT INTO `trustagent` (`agentname`, `agentbio`, `id`) VALUES
('Ù…Ø¹Ù…Ø§Ø± Ø§Ù„Ù…Ø±Ø´Ø¯ÙŠ', 'one of the greatest company in Egypt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin question`
--
ALTER TABLE `admin question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selling`
--
ALTER TABLE `selling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trustagent`
--
ALTER TABLE `trustagent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin question`
--
ALTER TABLE `admin question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `selling`
--
ALTER TABLE `selling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trustagent`
--
ALTER TABLE `trustagent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
