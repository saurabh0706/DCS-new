-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2016 at 01:47 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `darshan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `plot_no` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `fax_no` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `plot_no`, `street`, `address`, `pincode`, `mobile_no`, `fax_no`, `status`, `date_added`) VALUES
(3, '42', 'Keshav nagar', 'Nimbahera, Chittorgarh, Rajasthan', 312601, 8560890087, 1203212546, 'Active', '2016-01-28'),
(4, '', 'fsgfgs', 'gfhgfhfh kjhkjhjh', 123456, 9876543210, 0, 'Deactive', '2016-01-31'),
(6, '', 'dajhdkja', 'dflkasdhlkhl', 123466, 9856985698, 45634563, 'Deactive', '2016-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_mobile` bigint(20) NOT NULL,
  `doj` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_email`, `admin_password`, `admin_mobile`, `doj`, `status`) VALUES
(1, 'naksh', 'naksh', 'rgr.nitesh1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 9876543210, '2016-01-31', 1),
(2, 'monika', 'monika', 'monikaameta24@gmail.com', 'c33367701511b4f6020ec61ded352059', 1234567890, '2016-02-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fabric_category`
--

CREATE TABLE IF NOT EXISTS `fabric_category` (
  `category_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `priority` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `date_of_creation` date NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `fabric_category`
--

INSERT INTO `fabric_category` (`category_id`, `category_name`, `priority`, `status`, `date_of_creation`) VALUES
(3, 'suits', NULL, 'Active', '2016-02-01'),
(5, 'Cotton', NULL, 'Deactive', '2016-01-29'),
(7, 'yarn', NULL, 'Active', '2016-02-01'),
(9, 'woolen', NULL, 'Active', '2016-01-31'),
(12, 'Shirt', NULL, 'Active', '2016-02-01'),
(17, 'Other', 3, 'Active', '2016-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `img_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `img_actual_name` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date_of_upload` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `img_actual_name`, `img_name`, `tagline`, `description`, `category_id`, `link`, `date_of_upload`, `status`) VALUES
(12, 'p2.jpg', '1454317230.jpg', 'Dyed Fancy & Normal Filament yarns', '', 7, 'gallery/1454317230.jpg', '2016-02-01', 'Active'),
(13, 'p4.jpg', '1454317252.jpg', 'Suiting fabrics', '', 5, 'gallery/1454317252.jpg', '2016-02-01', 'Active'),
(14, 'p6.jpg', '1454317273.jpg', 'Suit Length', '', 3, 'gallery/1454317273.jpg', '2016-02-01', 'Active'),
(15, 'p10.jpg', '1454317366.jpg', 'Safari', '', 3, 'gallery/1454317366.jpg', '2016-02-01', 'Active'),
(16, 'p11.jpg', '1454317384.jpg', 'Spun Grey yarn', '', 7, 'gallery/1454317384.jpg', '2016-02-01', 'Active'),
(17, 'p13.jpg', '1454317404.jpg', 'Linen Shirting', '', 5, 'gallery/1454317404.jpg', '2016-02-01', 'Active'),
(18, 'p14.jpg', '1454317424.jpg', 'Garmenting', '', 9, 'gallery/1454317424.jpg', '2016-02-01', 'Active'),
(19, 'p15.jpg', '1454317445.jpg', 'Suit Length', '', 3, 'gallery/1454317445.jpg', '2016-02-01', 'Active'),
(20, 'p16.jpg', '1454317461.jpg', 'Combo suiting & shirting', '', 12, 'gallery/1454317461.jpg', '2016-02-01', 'Active'),
(21, 'p17.jpg', '1454317476.jpg', 'Spun dyed yarn', '', 7, 'gallery/1454317476.jpg', '2016-02-01', 'Active'),
(22, 'port1.jpg', '1454318740.jpg', 'sggsddf', '', 5, 'gallery/1454318740.jpg', '2016-02-01', 'Active'),
(23, 'port2.jpg', '1454318750.jpg', 'sggsddf', '', 9, 'gallery/1454318750.jpg', '2016-02-01', 'Active'),
(24, 'port3.jpg', '1454318756.jpg', 'sggsddf', '', 5, 'gallery/1454318756.jpg', '2016-02-01', 'Active'),
(25, 'port5.jpg', '1454318770.jpg', 'sggsddf', '', 9, 'gallery/1454318770.jpg', '2016-02-01', 'Active'),
(26, 'port11.jpg', '1454318785.jpg', 'sggsddf', '', 7, 'gallery/1454318785.jpg', '2016-02-01', 'Active'),
(27, 'port7.jpg', '1454318818.jpg', 'sggsddf', '', 7, 'gallery/1454318818.jpg', '2016-02-01', 'Active'),
(28, 'port13.jpg', '1454318829.jpg', 'sggsddf', '', 7, 'gallery/1454318829.jpg', '2016-02-01', 'Active'),
(35, 'Tulips.jpg', '1454328571.jpg', 'flower print in design', 'this is most beautiful flower. and some goes for print on fabric', 5, 'gallery/1454328571.jpg', '2016-02-01', 'Active'),
(40, 'Koala.jpg', '1454408369.jpg', 'dfasdfasd', 'dfasdfasdfasd', 5, 'gallery/1454408369.jpg', '2016-02-02', 'Deactive'),
(41, 'Lighthouse.jpg', '1454408381.jpg', 'dfasdfasd fadfasd', 'dfasdfasdfasddf fasdfadfa', 17, 'gallery/1454408381.jpg', '2016-02-02', 'Deactive'),
(42, 'Penguins.jpg', '1454408391.jpg', 'dfasdfasd fadfasd', 'dfasdfasdfasddf fasdfadfa', 5, 'gallery/1454408391.jpg', '2016-02-02', 'Deactive'),
(43, 'Hydrangeas.jpg', '1454408398.jpg', 'dfasdfasd fadfasd', 'dfasdfasdfasddf fasdfadfa', 17, 'gallery/1454408398.jpg', '2016-02-02', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `redirect_link` varchar(255) NOT NULL,
  `priority` tinyint(4) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `date_of_creation` date NOT NULL,
  PRIMARY KEY (`menu_id`),
  UNIQUE KEY `menu_name` (`menu_name`),
  UNIQUE KEY `priority` (`priority`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_name`, `redirect_link`, `priority`, `status`, `date_of_creation`) VALUES
(1, 'Home', 'index.php', 1, 'Active', '2016-01-29'),
(2, 'Gallery', 'gallery.php', 2, 'Active', '2016-01-28'),
(5, 'Services', 'services.php', 3, 'Active', '2016-01-28'),
(7, 'About Us', 'aboutus.php', 4, 'Active', '2016-01-28'),
(17, 'Contact Us', 'contactus.php', 5, 'Active', '2016-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE IF NOT EXISTS `slider_image` (
  `sliderimg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sliderimg_name` varchar(255) NOT NULL,
  `timestamp_name` varchar(255) NOT NULL,
  `sliderimg_path` varchar(255) NOT NULL,
  `priority` tinyint(4) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`sliderimg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`sliderimg_id`, `sliderimg_name`, `timestamp_name`, `sliderimg_path`, `priority`, `status`, `date_added`) VALUES
(1, 'port9.jpg', '1454157317.jpg', '../gallery/slider/1454157317.jpg', 4, 'Active', '2016-01-31'),
(2, 'port3.jpg', '1454157377.jpg', '../gallery/slider/1454157377.jpg', 2, 'Active', '2016-01-30'),
(3, 'port2.jpg', '1454157423.jpg', '../gallery/slider/1454157423.jpg', 2, 'Active', '2016-01-30'),
(4, 'Facebook-cover-for-Love-boys-girls.jpg', '1454397023.jpg', '../gallery/slider/1454397023.jpg', 4, 'Deactive', '2016-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `social_link`
--

CREATE TABLE IF NOT EXISTS `social_link` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `social_icon` varchar(255) NOT NULL,
  `social_name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`social_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `social_link`
--

INSERT INTO `social_link` (`social_id`, `social_icon`, `social_name`, `link`, `status`, `date_added`) VALUES
(7, 'fa-facebook', 'Facebook', 'www.facebook.com/darshan', 'Active', '2016-01-30'),
(8, 'fa-twitter', 'Twitter', 'www.twitter.com/darshan', 'Active', '2016-02-02'),
(10, 'fa-linkedin', 'Linkedin', 'http:www.linkedin.com/darshan', 'Active', '2016-02-02'),
(13, 'fa-google-plus', 'Google+', '', '', '0000-00-00'),
(14, 'fa-pinterest', 'Pinterest', '', '', '0000-00-00'),
(15, 'fa-youtube', 'YouTube', '', '', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
