-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 02:43 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crwaentertainmentaward`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL DEFAULT 'male',
  `age` int(3) NOT NULL,
  `phone` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=138 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `nickname`, `first_name`, `last_name`, `gender`, `age`, `phone`, `address`, `email`, `description`, `profile_image`) VALUES
(117, 'hitinternational', 'senderi', 'Eric', 'male', 46, '786079278', 'kinazi', 'senderi@gmail.com', '', 'cropper.jpg'),
(123, 'Bruce melody ', 'malina', 'Bruce', 'Female', 29, '000003245454', 'Kigali', 'kapa@g.com', '', 'Capture.PNG'),
(124, 'tomclose', 'muyombo', 'thomas', 'Female', 31, '0786091893', 'gatsata', 'thomas@gmail.com', '', 'Capture.PNG'),
(125, 'Qeen', 'hello', 'mavin', 'male', 0, '4534325612', 'huye', 'queen@gmail.com', 'gewergeragfsad', 'picture.jpg'),
(130, 'Frank', 'austin', 'nkuranyi', 'male', 37, '4534325612', 'Kigali', 'austin@gmail.com', 'gyjertrdsfhtyr', 'img.jpg'),
(131, 'knowless', 'butera', 'jeanne', 'male', 37, '4534325612', 'Kigali', 'butera@gmail.com', 'erqgyuhrythehdsh', 'cropper.jpg'),
(132, 'Active', 'kabwana', 'emille', 'male', 30, '4534325612', 'huye', 'kabwana@gmail.com', 'fgdhsdhsfdghsawsrthc ', 'prod-5.jpg'),
(133, 'Hordardighno', 'Hordard', 'Dighno ', 'male', 20, '32143433', 'eatrewtewqr', 'queen@gmail.com', 'asdafdsafasdf', 'picture.jpg'),
(134, '2Pac', 'Neza', 'Toussaint', 'male', 25, '0786091893', 'kigali', 'neza@gmail.com', 'rtwhtruety', 'picture.jpg'),
(135, 'Hodarsdd', 'Hodard', 'nshizirungu', 'male', 27, '0786091893', 'kigali', 'hodi@gmail.com', 'rtwhtruety', 'picture.jpg'),
(136, 'Safi', 'Madiba', 'Safi', 'male', 30, '324353124435', 'afaf', 'safi@g.com', 'dsafsdXzCXczz', 'img.jpg'),
(137, 'mavenge', 'sudi', 'muvinyi', 'male', 40, '4534325612', 'Kigali', 'mavenge@gmail.com', 'sadfgrdfgdhjrss', 'img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artregistration`
--

CREATE TABLE IF NOT EXISTS `artregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` int(10) NOT NULL,
  `subcategory_id` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `artist_id` (`artist_id`),
  KEY `subcategory_id` (`subcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=294 ;

--
-- Dumping data for table `artregistration`
--

INSERT INTO `artregistration` (`id`, `artist_id`, `subcategory_id`, `time`, `status`) VALUES
(261, 117, 14, '2018-09-12 14:19:31', 0),
(266, 123, 3, '2018-09-21 08:20:45', 0),
(267, 123, 4, '2018-09-21 08:20:45', 0),
(268, 124, 3, '2018-09-21 09:56:01', 0),
(269, 124, 5, '2018-09-21 09:56:01', 0),
(277, 125, 2, '2018-09-25 08:28:08', 0),
(279, 130, 11, '2018-09-25 08:28:08', 0),
(280, 131, 6, '2018-09-25 08:31:35', 0),
(281, 131, 7, '2018-09-25 08:31:35', 0),
(282, 131, 8, '2018-09-25 08:31:35', 0),
(283, 132, 14, '2018-09-25 08:33:55', 0),
(284, 133, 1, '2018-09-25 11:09:09', 0),
(285, 133, 4, '2018-09-25 11:09:09', 0),
(286, 133, 7, '2018-09-25 11:09:09', 0),
(287, 134, 13, '2018-09-28 16:47:54', 0),
(288, 135, 13, '2018-09-28 16:51:43', 0),
(289, 136, 2, '2018-10-01 09:03:26', 0),
(290, 136, 4, '2018-10-01 09:03:26', 0),
(291, 136, 5, '2018-10-01 09:03:26', 0),
(292, 136, 6, '2018-10-01 09:03:26', 0),
(293, 137, 12, '2018-10-01 12:53:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Music'),
(2, 'Dance'),
(3, 'Comedy'),
(4, 'Fashion'),
(5, 'Media');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcategory_id` int(10) NOT NULL AUTO_INCREMENT,
  `subcategory_name` varchar(50) NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`subcategory_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(1, 'Music Artist Of The Year 2018', 1),
(2, 'Best Cultural Artist Of The Year 2018', 1),
(3, 'Best Up Coming Artist', 1),
(4, 'Best Dj 2018', 1),
(5, 'Best Music Producer 2018', 1),
(6, 'Best East African collaboration', 1),
(7, 'Best Gospel Artist Of The Year 2018', 1),
(8, 'Best Upcoming Gospel Artist', 1),
(9, 'Best Traditional Dance Group', 2),
(10, 'Best Modern Dance Group', 2),
(11, 'Best Comedian', 3),
(12, 'Best Designer/stylist', 4),
(13, 'Best TV Entertainment Show', 5),
(14, 'Best Radio Entertainment Show', 5);

-- --------------------------------------------------------

--
-- Table structure for table `top_odi_wicket_takers`
--

CREATE TABLE IF NOT EXISTS `top_odi_wicket_takers` (
  `player` varchar(255) NOT NULL DEFAULT '',
  `wickets` int(11) DEFAULT NULL,
  PRIMARY KEY (`player`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_odi_wicket_takers`
--

INSERT INTO `top_odi_wicket_takers` (`player`, `wickets`) VALUES
('CJ Anderson', 25),
('Imran Tahir', 25),
('JH Davey', 21),
('M Morkel', 21),
('MA Starc', 34),
('ST Finn', 27),
('TA Boult', 36),
('TG Southee', 28),
('UT Yadav', 22),
('Wahab Riaz', 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL DEFAULT '0',
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'John', 'Doe', 'johnny', 'john123'),
(2, 'Albert', 'Minston', 'albert', 'albert');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` int(5) NOT NULL,
  `subcategory_id` int(10) NOT NULL,
  `vote_phone` int(15) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `artist_id` (`artist_id`),
  KEY `subcategory_id` (`subcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `artist_id`, `subcategory_id`, `vote_phone`, `date`) VALUES
(11, 117, 14, NULL, '2018-09-13 11:46:11'),
(12, 117, 14, NULL, '2018-09-13 11:46:11'),
(13, 117, 14, NULL, '2018-09-13 11:46:22'),
(14, 117, 14, NULL, '2018-09-13 11:46:22'),
(15, 117, 14, NULL, '2018-09-13 11:46:35'),
(16, 117, 14, NULL, '2018-09-13 11:46:35'),
(17, 117, 14, NULL, '2018-09-13 11:46:49'),
(18, 117, 14, NULL, '2018-09-13 11:46:49'),
(33, 123, 3, NULL, '2018-09-25 13:59:53'),
(34, 123, 4, NULL, '2018-09-25 14:02:42'),
(35, 123, 3, NULL, '2018-09-25 12:07:52'),
(39, 124, 3, NULL, '2018-09-21 23:06:27'),
(40, 124, 3, NULL, '2018-09-21 23:06:27'),
(41, 124, 3, NULL, '2018-09-21 23:06:42'),
(42, 124, 5, NULL, '2018-09-21 23:06:42'),
(43, 132, 14, 754896122, '2018-09-28 12:50:52'),
(44, 132, 14, 754896122, '2018-09-28 12:50:52'),
(45, 130, 11, NULL, '2018-09-28 14:47:08'),
(46, 130, 11, NULL, '2018-09-28 14:47:08'),
(47, 131, 6, 754896122, '2018-09-28 14:48:38'),
(48, 131, 7, 754896122, '2018-09-28 14:48:38'),
(49, 131, 6, 754896122, '2018-09-28 14:48:42'),
(50, 131, 7, 754896122, '2018-09-28 14:48:42'),
(51, 131, 8, NULL, '2018-09-28 14:49:08'),
(52, 131, 8, NULL, '2018-09-28 14:49:08'),
(53, 134, 13, 754896122, '2018-09-28 16:48:27'),
(54, 134, 13, 754896122, '2018-09-28 16:48:27'),
(55, 134, 13, 754896122, '2018-09-28 16:48:47'),
(56, 134, 13, 754896122, '2018-09-28 16:48:47'),
(57, 135, 13, NULL, '2018-09-28 16:52:05'),
(58, 135, 13, NULL, '2018-09-28 16:52:05'),
(59, 135, 13, NULL, '2018-09-28 16:52:12'),
(60, 135, 13, 754896122, '2018-09-28 16:52:58');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artregistration`
--
ALTER TABLE `artregistration`
  ADD CONSTRAINT `artregistration_ibfk_3` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artregistration_ibfk_4` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_3` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `votes_ibfk_4` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
