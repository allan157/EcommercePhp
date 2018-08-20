-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 29, 2018 at 07:33 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dppproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'GIFSA1', 'Microwaves', 'fast food reheat,has space for a mug or two and best of all is the safest brand', 'microwave1.jpg', 15, '7999.00'),
(2, 'GIFSA2', 'Blenders', 'Ramtons blenders are the highest quality blenders in the market giving you value for your money. The best catch is they are in different sizes from large capacities of upto 2.5litres to the smallest which has a volum of 1.5 litres all at affordable prices', 'blender1.jpg', 20, '2999.00'),
(3, 'GIFSA3', 'Cookers', 'It comes with four burners, a grill for roasting and barbecues and a double shelf oven cabinet.It is the best deal in the market and a must have cooking component for all modern kitchens. We have both for gas and electricity', 'cooker1.jpg', 10, '20000.00'),
(4, 'GIFSA4', 'dvd players', 'This is a DVD-D530 DVD PLAYER-Progressive scan technology with MP3, HDMI, USB 3.0 enabled and weighs at only 1.260kg. Plays DVD+RW, DVD-RW AND CD-RW', 'dvd player1.jpg', 15, '3599.00'),
(5, 'GIFSA5', 'Fridges', 'This is the most exciting model in the market, comes both as a two door and four door with double freezers at the top and below of the shelves. The most exciting part is it keeps the frozen good in solid ice state thus does not melt', 'fridge1.jpg', 10, '25999.00'),
(6, 'GIFSA6', 'Laptops', 'We have all kinds of laptops from the mini laptops to the high end products in the market ranging from lenovo, hp,toshiba, macbooks, samsung e.t.c. From core i7 to centrino. From 1Tb to different specs', 'laptop.jpg', 30, '30000.00'),
(7, 'GIFSA7', 'Home theaters', 'With Acoustic Audio AAT2000 tower 5.1 Home Theater bluetooth speaker system with 8\" Powered Subwoofer there is no entertainment and smoothness in sound like this rhythm boom box', 'home theater1.jpg', 8, '43999.00'),
(8, 'GIFSA8', 'TV', 'Well we cant say ore than we have in stock ;LED, OLED, 3D and HD tvs. Come in different sizes of 24, 32, 48 and 55 inches\'', 'tvs1.JPG', 30, '33999.00'),
(9, 'GIFSA9', 'subwoofer', 'It has bluetooth connectivity,FM Radio,Amplifier,tuners and high sound output wattage', 'subwoofer.jpg', 10, '6999.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
