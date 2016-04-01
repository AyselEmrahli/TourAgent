-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2016 at 10:37 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `touragent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admn`
--

CREATE TABLE `admn` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agency_id` int(11) NOT NULL,
  `agency_name` varchar(50) NOT NULL,
  `agency_img` varchar(200) NOT NULL,
  `agency_address` varchar(300) NOT NULL,
  `agency_email` varchar(150) NOT NULL,
  `agency_website` varchar(100) NOT NULL,
  `agency_phone` varchar(25) NOT NULL,
  `agency_mobile1` varchar(25) NOT NULL,
  `agency_mobile2` varchar(25) NOT NULL,
  `agency_password` varchar(100) NOT NULL,
  `agency_license` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_title` varchar(100) NOT NULL,
  `car_price` float NOT NULL,
  `car_rating` float NOT NULL,
  `car_type` varchar(25) NOT NULL,
  `car_img` varchar(200) NOT NULL,
  `car_transmission` varchar(25) NOT NULL,
  `car_doors` int(11) NOT NULL,
  `car_seats` int(11) NOT NULL,
  `car_include` text NOT NULL,
  `car_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `guide_id` int(11) NOT NULL,
  `guide_name` varchar(50) NOT NULL,
  `guide_surname` varchar(50) NOT NULL,
  `guide_email` varchar(150) NOT NULL,
  `guide_password` varchar(100) NOT NULL,
  `guide_avatar` varchar(200) NOT NULL,
  `guide_phone` varchar(25) NOT NULL,
  `guide_bday` date NOT NULL,
  `guide_joined` date NOT NULL,
  `guide_tripcount` int(11) NOT NULL,
  `guide_location` varchar(100) NOT NULL,
  `guide_agency` int(11) NOT NULL,
  `guide_license` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `htl`
--

CREATE TABLE `htl` (
  `htl_id` int(11) NOT NULL,
  `htl_title` varchar(50) NOT NULL,
  `htl_price` float NOT NULL,
  `htl_star` int(11) NOT NULL,
  `htl_adress` varchar(300) NOT NULL,
  `htl_email` varchar(150) NOT NULL,
  `htl_website` varchar(100) NOT NULL,
  `htl_phone` varchar(25) NOT NULL,
  `htl_mobile1` varchar(25) NOT NULL,
  `htl_mobile2` varchar(25) NOT NULL,
  `htl_password` varchar(100) NOT NULL,
  `htl_logo` varchar(200) NOT NULL,
  `htl_img` varchar(200) NOT NULL,
  `htl_roomtypes` varchar(100) NOT NULL,
  `htl_extras` varchar(250) NOT NULL,
  `htl_note` text NOT NULL,
  `htl_include` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(150) NOT NULL,
  `news_desc` varchar(300) NOT NULL,
  `news_text` text NOT NULL,
  `news_img` varchar(200) NOT NULL,
  `news_status` tinyint(1) NOT NULL,
  `news_date` date NOT NULL,
  `news_vcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `plcs`
--

CREATE TABLE `plcs` (
  `plcs_id` int(11) NOT NULL,
  `plcs_name` varchar(50) NOT NULL,
  `plcs_img` varchar(200) NOT NULL,
  `plcs_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rac`
--

CREATE TABLE `rac` (
  `rac_id` int(11) NOT NULL,
  `rac_name` varchar(50) NOT NULL,
  `rac_address` varchar(300) NOT NULL,
  `rac_email` varchar(150) NOT NULL,
  `rac_website` varchar(100) NOT NULL,
  `rac_phone` varchar(25) NOT NULL,
  `rac_mobile1` varchar(25) NOT NULL,
  `rac_mobile2` varchar(25) NOT NULL,
  `rac_img` varchar(200) NOT NULL,
  `rac_password` varchar(100) NOT NULL,
  `rac_license` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rsrv`
--

CREATE TABLE `rsrv` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stng`
--

CREATE TABLE `stng` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `tour_title` varchar(100) NOT NULL,
  `tour_price` float NOT NULL,
  `tour_duration` varchar(30) NOT NULL,
  `tour_type` varchar(50) NOT NULL,
  `tour_lastreg` date NOT NULL,
  `tour_country` varchar(50) NOT NULL,
  `tour_city` varchar(50) NOT NULL,
  `tour_startdate` date NOT NULL,
  `tour_enddate` date NOT NULL,
  `tour_transport` varchar(50) NOT NULL,
  `tour_hotel` varchar(100) NOT NULL,
  `tour_weather` varchar(200) NOT NULL,
  `tour_include` text NOT NULL,
  `tour_note` text NOT NULL,
  `tour_rating` float NOT NULL,
  `tour_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usr`
--

CREATE TABLE `usr` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(50) NOT NULL,
  `usr_surname` varchar(50) NOT NULL,
  `usr_bday` date NOT NULL,
  `usr_email` varchar(150) NOT NULL,
  `usr_password` varchar(100) NOT NULL,
  `usr_avatar` varchar(200) NOT NULL,
  `usr_location` varchar(100) NOT NULL,
  `usr_phone` varchar(25) NOT NULL,
  `usr_tripcount` int(11) NOT NULL,
  `usr_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admn`
--
ALTER TABLE `admn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`guide_id`);

--
-- Indexes for table `htl`
--
ALTER TABLE `htl`
  ADD PRIMARY KEY (`htl_id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `plcs`
--
ALTER TABLE `plcs`
  ADD PRIMARY KEY (`plcs_id`);

--
-- Indexes for table `rac`
--
ALTER TABLE `rac`
  ADD PRIMARY KEY (`rac_id`);

--
-- Indexes for table `rsrv`
--
ALTER TABLE `rsrv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stng`
--
ALTER TABLE `stng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admn`
--
ALTER TABLE `admn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `guide_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `htl`
--
ALTER TABLE `htl`
  MODIFY `htl_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `plcs`
--
ALTER TABLE `plcs`
  MODIFY `plcs_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rac`
--
ALTER TABLE `rac`
  MODIFY `rac_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rsrv`
--
ALTER TABLE `rsrv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stng`
--
ALTER TABLE `stng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usr`
--
ALTER TABLE `usr`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
