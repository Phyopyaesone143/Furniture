-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2025 at 03:33 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `currentdate` date NOT NULL,
  `postuser` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `image`, `description`, `currentdate`, `postuser`) VALUES
(9, 'Living Room', 'blog-4.jpg', 'My living room is undoubtedly the favorite room in my house. It is the room where I relax when I am tired. I entertain my friends and any other guests in my living room. My living room is designed in such a way that windows are facing the hills. These hills offer extraordinarily beautiful scenery, and one can just look at them the whole day without noticing how time flies by. At the foot’ of the mountains is incredibly beautiful vegetation comprising mainly of cedar trees and blue lilies. My friends love coming to my home just to have a view of the beautiful snow-capped hills.', '2025-04-04', 'Hein'),
(6, 'Lover Seat bench together', 'blog-2.jpg', 'A couch, also known as a sofa, settee, chesterfield, or davenport, is a cushioned item of furniture that can seat multiple people. It is commonly found in the form of a bench with upholstered armrests and is often fitted with springs and tailored cushion and pillows.[1][2] Although a couch is used primarily for seating, it may be used for sleeping.[3] In homes, couches are normally put in the fami', '2025-03-29', 'Ko Ko'),
(7, 'Happy Hour Bubble', 'blog-3.jpg', 'A bathtub, also known simply as a bath or tub, is a container for holding water in which a person or another animal may bathe. Most modern bathtubs are made of thermoformed acrylic, porcelain-enameled steel or cast iron, or fiberglass-reinforced polyester. A bathtub is placed in a bathroom, either as a stand-alone fixture or in conjunction with a shower.\r\nModern bathtubs have overflow and waste dr', '2025-03-29', 'Hein'),
(10, 'Seat in garden', 'blog-1.jpg', '“A seat in the Garden” by Thomas King, tells the story of the Aboriginal people in Canada today, the stereotypes placed on the people, this story also uses irony to portray the issues and placement of Aboriginals today. At the beginning of the story King draws our attention to the issues of how the Aboriginal people were treated like Canada doesn’t belong to them and they only get to have certain parts of the country after the white people took over their land.', '2025-04-04', 'Pyae'),
(11, 'Seat at my backyard', 'blog-5.jpg', 'I have picked my backyard because when I was younger it was my favorite place to be at. I used to go out there and play any kind of game, but my favorite thing was playing soccer. My feelings about going out there was something amazing, some other kids would rather play video games and doing some other stuff, but all I wanted to do was to go out in my backyard and just enjoy there. Just like my love for soccer has changed even though I still love it but it is different, and i do not really play out there anymore. Then I started to grow up and the feeling kind of changed, it was not that amazing anymore, but still enjoyed going out there just to play soccer. The more I grew the less excited I was, I knew the feeling was different, but I realized I was growing up.', '2025-04-04', 'Arkar'),
(12, 'New living room', 'blog-6.jpg', 'The living room is a room that is specifically designed for unwinding and socialization. Let us suppose the living room in your house is messy, cozy, smells of sweat, and has an unattractive look. It is the time where you think that your living room is not designed properly with a good concept. Then, what is a good concept for a living room? A good concept can be anything that can describe the personality of the homeowner, convey a specific message, or follow a particular style. From research and experience, there are several living room concepts which can be used to guide people in designing their living room. When it is all about the living room, it must be a formal and a casual living room. A formal living room is usually designed for a meeting impression with your boss, father or mother-in-law, etc. This type of living room usually has high-standard furniture and decorations. A casual living room is contradicted to the formal living room; it is designed to get a relaxed and comfortable impression with your friends and family, and this one is more flexible to do with any kind of furniture and decoration. From there, it comes a modern and traditional living room. A modern living room is reflecting a simple and clean impression with a minimum amount of furniture. It is suitable for urban people who have a busy life. A modern living room also gives an advanced impression for the homeowner. A traditional living room is more friendly with more furniture and usually has a classic style decoration. This type of living room is more attractive for older people and those who like vintage. And the last is an indoor and an outdoor living room. It is a rare concept, but you can simply differentiate it from the placement.', '2025-04-04', 'admin'),
(13, 'Dream Workplace', 'computer table.png', 'My dream workplace would preferably be located near a lake and surrounded by trees. I would also like it to be on one of the top floors and, geographically close to everything except, of course, the unnecessary traffic congestion and noise. My office should also have two desks - one would be facing away from a large glass window (from where the lake is visible) so that I could interact with the people who come to visit me. The other desk, on which, I would have my computers, printers, and the other essentials, would be placed against a wall (or maybe even a corner of a small hallway) where the real work would get done. ', '2025-04-04', 'Phway');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `productname` varchar(200) NOT NULL,
  `price` bigint NOT NULL,
  `star` int DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `category` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `price`, `star`, `image`, `category`) VALUES
(16, 'Kid Comfort', 435, 4, 'product-6.png', 'House Sofa'),
(15, 'Teddy Chair', 345, 5, 'product-5.png', 'House Sofa'),
(14, 'White Chair', 110, 2, 'product-4.png', 'Office Chair'),
(12, 'Bunny Sit', 325, 4, 'product-2.png', 'House Sofa'),
(13, 'Coconut', 280, 4, 'product-3.png', 'House Sofa'),
(11, 'Wool Stool', 125, 3, 'product-1.png', 'Office Chair'),
(17, 'Easy chair', 130, 1, 'product-7.png', 'House Sofa'),
(18, 'Rounded chair', 210, 5, 'product-8.png', 'House Sofa'),
(19, 'Flower Corner', 365, 4, 'flower corner.png', 'Corner Table'),
(20, 'Wardrobe for Girls', 555, 5, 'girl cup board.png', 'New Wardrobe'),
(21, 'Kid Wardrobe', 515, 5, 'kid cupboard.png', 'New Wardrobe'),
(22, 'Study Table', 985, 5, 'computer table.png', 'Working Table'),
(23, 'Coding Table', 855, 4, 'working table.png', 'Working Table'),
(30, 'Hak Hak', 34, 3, 'blog-5.jpg', 'Corner Table');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `total` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`id`, `name`, `quantity`, `price`, `total`) VALUES
(102, 'White Chair', 1, 110, 110),
(101, 'Teddy Chair', 2, 345, 345);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tname` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `sarlary` int NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `tname`, `position`, `sarlary`, `image`) VALUES
(123, 'b', 'b', 22222, 'eat rope.jpeg'),
(133, 'ioan goi', 'HR Manager', 8707, '0_EcWpNwWV3A0m6X-D.gif'),
(132, 'ioan goi', 'HR Manager', 8707, '0_EcWpNwWV3A0m6X-D.gif'),
(131, 'ioan goi', 'HR Manager', 8707, '0_EcWpNwWV3A0m6X-D.gif'),
(127, '', 'CEO', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', '$2y$10$J0vLC7g70r/H6YwGN8Cks.IXiLp5NmXbUx5En5hg./45l.ehw.EnO'),
('Arkar', 'arkar@gmail.com', '$2y$10$c3hoZpfERXFb/bOy49RxAulENXxgn0UldRMggyKySdViZkFu4ZL.K'),
('Hein', 'hein@gmail.com', '$2y$10$PK1cub73tujvbSLZ.HHeN.8ON8YsSLmIYqCFaWyDu1YMUPBlRa7jC'),
('Ko Ko', 'kk@gmail.com', '$2y$10$j9gYkDej1h8QC63X8R2lr.OKtf73VwGW8FB/.Qb3/qrv6tXQFoM6C'),
('Phway', 'phway@gmail.com', '$2y$10$C4PLCYCuF9AeX86pTIzHpOkqP6n57oY.79AC0pxmYE4lmV/R1Vdle'),
('Pyae', 'pyae@gmail.com', '$2y$10$B.iu0P0l7UA2k5LIYsML5OMsb1iRVpn.BsOMRLdROarXQt1/iJKpO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
