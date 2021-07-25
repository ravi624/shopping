-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 06:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `sr_no` int(11) NOT NULL,
  `username` varchar(2000) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`sr_no`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`sr_no`, `name`, `status`) VALUES
(1, 'shirt', 1),
(2, 'fridge', 1),
(3, 'jeans', 1),
(4, 'mobile', 1),
(5, 'shoe', 1),
(6, 'desktop', 1),
(7, 'girls wear', 1),
(8, 'sport', 1),
(10, 'decoration', 1),
(11, 'cricket', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `firstname` varchar(2000) NOT NULL,
  `lastname` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `subject` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstname`, `lastname`, `email`, `subject`) VALUES
(2, 'raj', 'kumar', 'raj123@gmail.com', 'hello ravi');

-- --------------------------------------------------------

--
-- Table structure for table `imgtest`
--

CREATE TABLE `imgtest` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgtest`
--

INSERT INTO `imgtest` (`sr_no`, `image`, `status`, `product_id`) VALUES
(1, 'images/tshirt3.jpeg', '1', 'chair'),
(2, 'images/bd.jpeg', '1', 'chair'),
(3, 'images/427756206.jpeg', '1', 'chair');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `img` varchar(3000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `pdesc` varchar(1000) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `qty`, `price`, `img`, `status`, `pdesc`, `cat`) VALUES
(1, 'puma', 1, '599', 'images/3073116830.jpeg', '1', 'very comfortable', 'shirt'),
(2, 'reebok', 1, '699', 'images/2656498000.jpeg', '1', 'very soft', 'shirt'),
(3, 'polo', 1, '499', 'images/2711235381.jpeg', '1', 'very comfortable', 'shirt'),
(4, 'nike', 1, '500', 'images/312823907.jpeg', '1', 'very good', 'shirt'),
(5, 'wanhusen', 1, '700', 'images/3010443459.jpeg', '1', 'biggest brand', 'shirt'),
(8, 'spykr', 1, '699', 'images/1046291580.jpeg', '1', 'very soft', 'shirt'),
(9, ' samsung fridge', 1, '10000', 'images/3127442479.jpeg', '1', 'very cool cooling', 'fridge'),
(10, 'LG Fridge', 1, '12000', 'images/543220997.jpeg', '1', 'very comfortable', 'fridge'),
(12, 'Candy fridge', 1, '7000', 'images/3630978925.jpeg', '1', 'good', 'fridge'),
(13, 'whirlpool fridge', 1, '13000', 'images/483349283.jpeg', '1', 'very comfortable', 'fridge'),
(14, 'Hier Fridge', 1, '13000', 'images/2823094132.jpeg', '1', 'good', 'fridge'),
(15, 'Acer Fridge', 1, '12500', 'images/269498846.jpeg', '1', 'good', 'fridge'),
(16, 'Lee jeans', 1, '800', 'images/2504871840.jpeg', '1', 'biggest brand', 'jeans'),
(17, 'lev jeans', 1, '550', 'images/3604198298.jpeg', '1', 'good', 'jeans'),
(18, 'levis jeans', 1, '10000', 'images/1503292914.jpeg', '1', 'brand', 'jeans'),
(19, 'mufti jeans', 1, '1200', 'images/4128117291.jpeg', '1', 'good', 'jeans'),
(20, 'pepe jeans', 1, '850', 'images/794769235.jpeg', '1', 'very good', 'jeans'),
(21, 'killer jeans', 1, '800', 'images/158295130.jpeg', '1', 'brand', 'jeans'),
(22, 'redm19', 1, '10000', 'images/1976806364.jpeg', '1', 'good', 'mobile'),
(23, 'realme20', 1, '8000', 'images/451573777.jpeg', '1', 'very good', 'mobile'),
(24, 'oppo', 1, '15000', 'images/3465329611.jpeg', '1', 'brand', 'mobile'),
(25, 'poco', 1, '12750', 'images/3063048536.jpeg', '1', 'good', 'mobile'),
(26, 'narzo', 1, '9000', 'images/2173661594.jpeg', '1', 'very good', 'mobile'),
(27, 'realme', 1, '9450', 'images/665666152.jpeg', '1', 'good', 'mobile'),
(28, 'reebok', 1, '1200', 'images/3211164133.jpeg', '1', 'brand', 'reebok'),
(29, 'addidas', 1, '1675', 'images/2490178165.jpeg', '1', 'brand', 'shoe'),
(30, 'bata', 1, '1900', 'images/216300910.jpeg', '1', 'good', 'shoe'),
(31, 'puma', 1, '1300', 'images/2988381674.jpeg', '1', 'biggest brand', 'shoe'),
(32, 'nike', 1, '1475', 'images/3094335801.jpeg', '1', 'brand', 'shoe'),
(33, 'spark', 1, '1675', 'images/2805311375.jpeg', '1', 'brand', 'shoe'),
(34, 'lenavo', 1, '27000', 'images/3370896495.jpeg', '1', 'brand', 'desktop'),
(35, 'hp', 1, '38000', 'images/3156898817.jpeg', '1', 'brand', 'desktop'),
(36, 'dell', 1, '35000', 'images/385307979.jpeg', '1', 'brand', 'desktop'),
(37, 'asus', 1, '23000', 'images/49374400.jpeg', '1', 'good', 'desktop'),
(38, 'toshiba', 1, '24000', 'images/3760221969.jpeg', '1', 'good', 'desktop'),
(39, 'acer', 1, '23000', 'images/2219616789.jpeg', '1', 'good', 'desktop'),
(40, 'black suit', 1, '400', 'images/45299798.jpeg', '1', 'good', 'girls wear'),
(41, 'green kurti', 1, '500', 'images/4058684663.jpeg', '1', 'very good', 'girls wear'),
(42, 'pink saree', 1, '800', 'images/347204370.jpeg', '1', 'very good', 'girls wear'),
(43, 'black suit', 1, '800', 'images/2749038574.jpeg', '1', 'very good', 'girls wear'),
(44, 'desineer saree', 1, '1000', 'images/462305604.jpeg', '1', 'desiner saree', 'girls wear'),
(45, 'red top', 1, '1200', 'images/1220392980.jpeg', '1', 'very good', 'girls wear'),
(46, 'carrom', 1, '400', 'images/1044037155.jpeg', '1', 'good', 'sport'),
(47, 'bat', 1, '1200', 'images/3291672196.jpeg', '1', 'very good', 'sport'),
(48, 'wicket', 1, '1200', 'images/2287093910.jpeg', '1', 'good', 'sport'),
(49, 'badminton', 1, '1200', 'images/853923038.jpeg', '1', 'good', 'sport'),
(50, 'football', 1, '1500', 'images/3668636165.jpeg', '1', 'good', 'sport'),
(51, 'football', 1, '1700', 'images/3115053848.jpeg', '1', 'good', 'sport'),
(52, 'black teddy', 1, '250', 'images/1884793610.jpeg', '1', 'good', 'decoration'),
(53, 'pink teddy', 1, '700', 'images/2470759148.jpeg', '1', 'good', 'decoration'),
(54, 'wall sticker', 1, '700', 'images/1785911745.jpeg', '1', 'very good', 'decoration'),
(55, 'rubic cube', 1, '`100', 'images/2895602646.jpeg', '1', 'very good', 'decoration'),
(56, 'buddha statue', 1, '400', 'images/2689075499.jpeg', '1', 'very good', 'decoration'),
(57, 'barbie doll', 1, '200', 'images/3711958382.jpeg', '1', 'very good', 'decoration');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `mobileno` varchar(2000) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tokens` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `mobileno`, `password`, `tokens`) VALUES
(1, 'abhi', 'abhi@gmail.com', '7765896754', '$2y$10$A/EqWvXjrw.xF6chx8nrH.KJBJ6kQUKBppbC9YtNV2mrjlxBAE9kW', '9d8fc7a7b5ee3c61d068c163e05070'),
(2, 'raj', 'raj213@gmail.com', '7878787878', '$2y$10$JREanegnKE31tplALSgT6.h67FInpvydsxQQlNVtNSFP87gzSUjaO', 'b2198d9c0ac6fa9fbfe39f07ce6d8e'),
(3, 'krish', 'mahi@gmail.com', '123456789', '$2y$10$E6RAvBFS.c51OL4RAZVJ4OCDCWciR5.RX4KuVX2CJIwdLX1e.2GFW', 'e0584acdebe94dc421bb4680db6641');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgtest`
--
ALTER TABLE `imgtest`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imgtest`
--
ALTER TABLE `imgtest`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
