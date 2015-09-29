-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2015 at 08:08 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aaddytools`
--
CREATE DATABASE IF NOT EXISTS `aaddytools` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aaddytools`;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `stateId` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `stateId`, `version`) VALUES
(1, 'Delhi', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `rank` int(11) NOT NULL,
  `po` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `phone`, `rank`, `po`, `version`) VALUES
(1, 'Test Client', 'test@weblemo.com', '0123456789', 1, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `version`) VALUES
(1, 'India', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failpage`
--

CREATE TABLE IF NOT EXISTS `failpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surveyId` varchar(100) NOT NULL,
  `updatedTime` datetime NOT NULL,
  `vendorId` varchar(100) NOT NULL,
  `resultData` longtext NOT NULL,
  `encKey` varchar(10) NOT NULL,
  `vendorData` longtext NOT NULL,
  `responseId` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `landpage`
--

CREATE TABLE IF NOT EXISTS `landpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surveyId` varchar(100) NOT NULL,
  `updatedTime` datetime NOT NULL,
  `vendorId` varchar(100) NOT NULL,
  `resultData` longtext,
  `encKey` varchar(10) NOT NULL,
  `respondentId` varchar(40) NOT NULL,
  `vendorData` text,
  `response` varchar(20) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `geoLocation` varchar(155) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `landpage`
--

INSERT INTO `landpage` (`id`, `surveyId`, `updatedTime`, `vendorId`, `resultData`, `encKey`, `respondentId`, `vendorData`, `response`, `status`, `ip`, `geoLocation`, `city`, `country`, `version`) VALUES
(1, '1', '2015-02-23 23:28:33', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'In System', '::1', '', '', '', 0),
(2, '1', '2015-03-04 20:13:05', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'In System', '::1', '', '', '', 0),
(3, '1', '2015-03-04 20:39:04', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'In System', '173.194.67.1', 'United StatesMountain View', 'Mountain View', 'United States', 0),
(4, '1', '2015-03-04 20:39:49', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'In System', '173.194.67.1', 'United StatesMountain View', 'Mountain View', 'United States', 0),
(5, '1', '2015-03-04 20:40:19', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'In System', '173.194.67.82', 'United StatesMountain View', 'Mountain View', 'United States', 0),
(6, '1', '2015-03-04 20:41:01', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'In System', '173.194.67.82', 'United StatesMountain View', 'Mountain View', 'United States', 0),
(7, '1', '2015-03-04 20:41:59', '1', 'Dummy Data', 'weblemoEsc', '12456798888', 'Dummy Data', 'Dummy Response', 'In System', '173.194.67.82', 'United StatesMountain View', 'Mountain View', 'United States', 0),
(8, '1', '2015-03-04 20:44:45', '1', 'Dummy Data', 'weblemoEsc', '12456797988', 'Dummy Data', 'Dummy Response', 'In System', '112.196.131.101', 'IndiaGhaziabad', 'Ghaziabad', 'India', 0),
(9, '1', '2015-03-04 20:47:53', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'In System', '112.196.131.101', 'lat:28.6667;long:77.4333', 'Ghaziabad', 'India', 0),
(10, '1', '2015-03-04 22:32:27', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'Duplicate ', '112.196.131.101', 'lat:28.6667;long:77.4333', 'Ghaziabad', 'India', 0),
(11, '1', '2015-03-04 22:34:12', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'Duplicate Entery', '112.196.131.101', 'lat:28.6667;long:77.4333', 'Ghaziabad', 'India', 0),
(12, '1', '2015-03-04 23:26:13', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'Duplicate Entery', '112.196.131.101', 'lat:28.6667;long:77.4333', 'Ghaziabad', 'India', 0),
(13, '1', '2015-03-04 23:26:59', '1', 'Dummy Data', 'weblemoEsc', '12456799989', 'Dummy Data', 'Dummy Response', 'In Status', '112.196.131.12', 'lat:28.6667;long:77.4333', 'Ghaziabad', 'India', 0),
(14, '1', '2015-03-04 23:28:52', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'In Status', '112.196.131.12', 'lat:28.6667;long:77.4333', 'Ghaziabad', 'India', 0),
(15, '1', '2015-03-04 23:29:00', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'Duplicate Entery', '112.196.131.12', 'lat:28.6667;long:77.4333', 'Ghaziabad', 'India', 0),
(16, '1', '2015-03-10 19:34:01', '1', 'Dummy Data', 'weblemoEsc', '12456799988', 'Dummy Data', 'Dummy Response', 'Duplicate Entery', '112.196.131.12', 'lat:28.6667;long:77.4333', 'Ghaziabad', 'India', 0);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `code`, `version`) VALUES
(2, 'English', '0', 0),
(3, 'English', 'en-US', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`, `version`) VALUES
(1, 'anuj', 'anuj@test.com', 'test', 'testi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nested_quota`
--

CREATE TABLE IF NOT EXISTS `nested_quota` (
  `id` int(11) NOT NULL,
  `parent_quota_id` int(11) NOT NULL,
  `lower_limit` int(11) NOT NULL,
  `upper_limit` int(11) NOT NULL,
  `next_quota_id` int(11) NOT NULL,
  `condition` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nested_quota_qualification`
--

CREATE TABLE IF NOT EXISTS `nested_quota_qualification` (
  `id` int(11) NOT NULL,
  `quota_qualification_id` int(11) NOT NULL,
  `nested_quota_id` int(11) NOT NULL,
  `parent_quota_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) NOT NULL,
  `clientId` int(11) NOT NULL,
  `projectId` int(11) NOT NULL,
  `productManager` varchar(100) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productName`, `clientId`, `projectId`, `productManager`, `version`) VALUES
(1, 'Test Product', 0, 0, 'extra', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectName` varchar(100) NOT NULL,
  `projectManagerName` varchar(100) NOT NULL,
  `managerMobile` int(11) NOT NULL,
  `managerEmail` varchar(100) NOT NULL,
  `masterId` int(11) NOT NULL,
  `productLine` varchar(300) NOT NULL,
  `productType` varchar(300) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `projectName`, `projectManagerName`, `managerMobile`, `managerEmail`, `masterId`, `productLine`, `productType`, `version`) VALUES
(1, 'Test Project', 'Test Manager', 123456789, 'test@weblemo.com', 1, 'Test Line', 'Test Type', 0),
(2, 'Demo Project', 'Demo Manager', 958789456, '123@weblemo.com', 0, 'Demo Line', 'Demo Type', 0),
(3, 'My Test Project11', 'Welcome to Project11', 2147483647, '123@weblemo.com11', 0, 'Test Line 111', 'Test Product Type11', 0),
(4, 'Demo Project', 'Demo Project 1', 0, 'demo@weblemo.com', 0, 'Demo Project 4', 'Demo Project 5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `visibilty` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `languageId` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualification_content_type`
--

CREATE TABLE IF NOT EXISTS `qualification_content_type` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `no_of_options` varchar(45) NOT NULL,
  `html_tag` varchar(45) NOT NULL,
  `type` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualification_language`
--

CREATE TABLE IF NOT EXISTS `qualification_language` (
  `id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `qualification_id` int(11) NOT NULL,
  `qualification_name` varchar(200) NOT NULL,
  `qualification_description` varchar(400) NOT NULL,
  `qualification_question` varchar(100) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualification_options_value`
--

CREATE TABLE IF NOT EXISTS `qualification_options_value` (
  `id` int(11) NOT NULL,
  `qualification_content_type_id` int(11) NOT NULL,
  `option_display_value` varchar(100) NOT NULL,
  `stored_value` varchar(100) NOT NULL,
  `result` int(11) NOT NULL,
  `css_class` varchar(100) NOT NULL,
  `javascript_funtion` varchar(100) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualification_type`
--

CREATE TABLE IF NOT EXISTS `qualification_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `html_type` varchar(100) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quota`
--

CREATE TABLE IF NOT EXISTS `quota` (
  `id` int(11) NOT NULL,
  `upper_limit` int(11) NOT NULL,
  `lower_limit` int(11) NOT NULL DEFAULT '0',
  `parent_quota_id` int(11) NOT NULL DEFAULT '0',
  `quota_name` int(11) NOT NULL,
  `no_of_subquota` int(11) NOT NULL DEFAULT '0',
  `quota_type` int(11) NOT NULL,
  `adjustment_type` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quota_qualification`
--

CREATE TABLE IF NOT EXISTS `quota_qualification` (
  `id` int(11) NOT NULL,
  `quota_id` int(11) NOT NULL,
  `completes` int(11) NOT NULL,
  `survey_qualification_id` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shorturl`
--

CREATE TABLE IF NOT EXISTS `shorturl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baseURL` varchar(350) NOT NULL,
  `newURL` varchar(400) NOT NULL,
  `createdTime` datetime NOT NULL,
  `updatedTime` datetime NOT NULL,
  `encKey` varchar(20) NOT NULL,
  `hitCount` int(11) NOT NULL,
  `createdBy` varchar(50) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `shorturl`
--

INSERT INTO `shorturl` (`id`, `baseURL`, `newURL`, `createdTime`, `updatedTime`, `encKey`, `hitCount`, `createdBy`, `version`) VALUES
(1, 'http://test.com', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-300', '2015-03-03 20:54:38', '2015-03-03 20:54:38', 'Weblemo@AddyTools', 0, 'Testing', 0),
(2, 'http://test.com', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-300', '2015-03-03 20:57:22', '2015-03-03 20:57:22', 'Weblemo@AddyTools', 0, 'Testing', 0),
(3, 'http://test.com', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-200', '2015-03-03 20:57:22', '2015-03-03 20:57:22', 'Weblemo@AddyTools', 0, 'Testing', 0),
(4, 'http://test.com?test', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-300', '2015-03-03 20:58:16', '2015-03-03 20:58:16', 'Weblemo@AddyTools', 0, 'Testing', 0),
(5, 'http://test.com?live', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-200', '2015-03-03 20:58:16', '2015-03-03 20:58:16', 'Weblemo@AddyTools', 0, 'Testing', 0),
(6, 'http://test.com?test', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-300', '2015-03-03 21:02:59', '2015-03-03 21:02:59', 'Weblemo@AddyTools', 0, 'Testing', 0),
(7, 'http://test.com?live', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-200', '2015-03-03 21:03:00', '2015-03-03 21:03:00', 'Weblemo@AddyTools', 0, 'Testing', 0),
(8, 'http://test.com?test', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-300', '2015-03-03 21:04:08', '2015-03-03 21:04:08', 'Weblemo@AddyTools', 0, 'Testing', 0),
(9, 'http://test.com?live', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-200', '2015-03-03 21:04:08', '2015-03-03 21:04:08', 'Weblemo@AddyTools', 0, 'Testing', 0),
(10, 'http://test.com?test', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-300', '2015-03-03 21:07:30', '2015-03-03 21:07:30', 'Weblemo@AddyTools', 0, 'Testing', 0),
(11, 'http://test.com?live', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-200', '2015-03-03 21:07:30', '2015-03-03 21:07:30', 'Weblemo@AddyTools', 0, 'Testing', 0),
(12, 'http://test.com?test', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-300', '2015-03-03 21:08:10', '2015-03-03 21:08:10', 'Weblemo@AddyTools', 0, 'Testing', 0),
(13, 'http://test.com?live', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-200', '2015-03-03 21:08:10', '2015-03-03 21:08:10', 'Weblemo@AddyTools', 0, 'Testing', 0),
(14, 'http://test.com?test', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-300', '2015-03-03 21:08:34', '2015-03-03 21:08:34', 'Weblemo@AddyTools', 0, 'Testing', 0),
(15, 'http://test.com?live', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-200', '2015-03-03 21:08:34', '2015-03-03 21:08:34', 'Weblemo@AddyTools', 0, 'Testing', 0),
(16, 'http://test.com?test', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-300', '2015-03-03 21:09:01', '2015-03-03 21:09:01', 'Weblemo@AddyTools', 0, 'Testing', 0),
(17, 'http://test.com?live', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Test-Project&type=server-200', '2015-03-03 21:09:01', '2015-03-03 21:09:01', 'Weblemo@AddyTools', 0, 'Testing', 0),
(18, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:10:58', '2015-03-03 21:10:58', 'Weblemo@AddyTools', 0, 'Testing', 0),
(19, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:10:58', '2015-03-03 21:10:58', 'Weblemo@AddyTools', 0, 'Testing', 0),
(20, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:11:11', '2015-03-03 21:11:11', 'Weblemo@AddyTools', 0, 'Testing', 0),
(21, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:11:11', '2015-03-03 21:11:11', 'Weblemo@AddyTools', 0, 'Testing', 0),
(22, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:12:00', '2015-03-03 21:12:00', 'Weblemo@AddyTools', 0, 'Testing', 0),
(23, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:12:00', '2015-03-03 21:12:00', 'Weblemo@AddyTools', 0, 'Testing', 0),
(24, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:13:18', '2015-03-03 21:13:18', 'Weblemo@AddyTools', 0, 'Testing', 0),
(25, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:13:18', '2015-03-03 21:13:18', 'Weblemo@AddyTools', 0, 'Testing', 0),
(26, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:43:13', '2015-03-03 21:43:13', 'Weblemo@AddyTools', 0, 'Testing', 0),
(27, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:43:13', '2015-03-03 21:43:13', 'Weblemo@AddyTools', 0, 'Testing', 0),
(28, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:43:41', '2015-03-03 21:43:41', 'Weblemo@AddyTools', 0, 'Testing', 0),
(29, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:43:41', '2015-03-03 21:43:41', 'Weblemo@AddyTools', 0, 'Testing', 0),
(30, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:46:47', '2015-03-03 21:46:47', 'Weblemo@AddyTools', 0, 'Testing', 0),
(31, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:46:47', '2015-03-03 21:46:47', 'Weblemo@AddyTools', 0, 'Testing', 0),
(32, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:47:49', '2015-03-03 21:47:49', 'Weblemo@AddyTools', 0, 'Testing', 0),
(33, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:47:49', '2015-03-03 21:47:49', 'Weblemo@AddyTools', 0, 'Testing', 0),
(34, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:48:19', '2015-03-03 21:48:19', 'Weblemo@AddyTools', 0, 'Testing', 0),
(35, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:48:20', '2015-03-03 21:48:20', 'Weblemo@AddyTools', 0, 'Testing', 0),
(36, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:50:17', '2015-03-03 21:50:17', 'Weblemo@AddyTools', 0, 'Testing', 0),
(37, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:50:17', '2015-03-03 21:50:17', 'Weblemo@AddyTools', 0, 'Testing', 0),
(38, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:51:55', '2015-03-03 21:51:55', 'Weblemo@AddyTools', 0, 'Testing', 0),
(39, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:51:55', '2015-03-03 21:51:55', 'Weblemo@AddyTools', 0, 'Testing', 0),
(40, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:55:38', '2015-03-03 21:55:38', 'Weblemo@AddyTools', 0, 'Testing', 0),
(41, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:55:38', '2015-03-03 21:55:38', 'Weblemo@AddyTools', 0, 'Testing', 0),
(42, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:56:43', '2015-03-03 21:56:43', 'Weblemo@AddyTools', 0, 'Testing', 0),
(43, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:56:43', '2015-03-03 21:56:43', 'Weblemo@AddyTools', 0, 'Testing', 0),
(44, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 21:59:09', '2015-03-03 21:59:09', 'Weblemo@AddyTools', 0, 'Testing', 0),
(45, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 21:59:09', '2015-03-03 21:59:09', 'Weblemo@AddyTools', 0, 'Testing', 0),
(46, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 22:00:42', '2015-03-03 22:00:42', 'Weblemo@AddyTools', 0, 'Testing', 0),
(47, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 22:00:42', '2015-03-03 22:00:42', 'Weblemo@AddyTools', 0, 'Testing', 0),
(48, '11?dsjfgjgdhfsdhgf', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-300', '2015-03-03 22:05:50', '2015-03-03 22:05:50', 'Weblemo@AddyTools', 0, 'Testing', 0),
(49, 'hkjjhgjgjhgjhg?hkhuguyg', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-sadas&type=server-200', '2015-03-03 22:05:50', '2015-03-03 22:05:50', 'Weblemo@AddyTools', 0, 'Testing', 0),
(50, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7643', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Latest Survey Test 1&type=server-300', '2015-03-04 00:34:01', '2015-03-04 00:34:01', 'Weblemo@AddyTools', 0, 'Testing', 0),
(51, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7653', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Latest Survey Test 1&type=server-200', '2015-03-04 00:34:01', '2015-03-04 00:34:01', 'Weblemo@AddyTools', 0, 'Testing', 0),
(52, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7643', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Latest Survey Test 1&type=server-300', '2015-03-04 00:35:34', '2015-03-04 00:35:34', 'Weblemo@AddyTools', 0, 'Testing', 0),
(53, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7653', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Latest Survey Test 1&type=server-200', '2015-03-04 00:35:34', '2015-03-04 00:35:34', 'Weblemo@AddyTools', 0, 'Testing', 0),
(54, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7643', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Latest Survey Test 1&type=server-300', '2015-03-04 00:38:40', '2015-03-04 00:38:40', 'Weblemo@AddyTools', 0, 'Testing', 0),
(55, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7653', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Latest Survey Test 1&type=server-200', '2015-03-04 00:38:40', '2015-03-04 00:38:40', 'Weblemo@AddyTools', 0, 'Testing', 0),
(56, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7643', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Latest Survey Test 1&type=server-300', '2015-03-04 00:40:12', '2015-03-04 00:40:12', 'Weblemo@AddyTools', 0, 'Testing', 0),
(57, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7653', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-Latest Survey Test 1&type=server-200', '2015-03-04 00:40:12', '2015-03-04 00:40:12', 'Weblemo@AddyTools', 0, 'Testing', 0),
(58, 'http://localhost:8079/tool/addSurvey.php', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-2-Latest Survey Test 1&type=server-300', '2015-03-04 23:22:02', '2015-03-04 23:22:02', 'Weblemo@AddyTools', 0, 'Testing', 0),
(59, 'http://localhost:8079/tool/listSurvey.php', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-2-Latest Survey Test 1&type=server-200', '2015-03-04 23:22:02', '2015-03-04 23:22:02', 'Weblemo@AddyTools', 0, 'Testing', 0),
(60, 'http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_case_navbar3&stacked=h', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-2-Latest Survey Test 123&type=server-300', '2015-03-06 02:13:31', '2015-03-06 02:13:31', 'Weblemo@AddyTools', 0, 'Testing', 0),
(61, 'http://www.w3schools.com/js/js_dates.asp', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-2-Latest Survey Test 123&type=server-200', '2015-03-06 02:13:31', '2015-03-06 02:13:31', 'Weblemo@AddyTools', 0, 'Testing', 0),
(62, 'http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_case_navbar3&stacked=h', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-2-Latest Survey Test 123&type=server-300', '2015-03-06 02:14:13', '2015-03-06 02:14:13', 'Weblemo@AddyTools', 0, 'Testing', 0),
(63, 'http://www.w3schools.com/js/js_dates.asp', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-2-Latest Survey Test 123&type=server-200', '2015-03-06 02:14:13', '2015-03-06 02:14:13', 'Weblemo@AddyTools', 0, 'Testing', 0),
(64, 'http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_case_navbar3&stacked=h', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-2-Latest Survey Test 123&type=server-300', '2015-03-06 02:16:03', '2015-03-06 02:16:03', 'Weblemo@AddyTools', 0, 'Testing', 0),
(65, 'http://www.w3schools.com/js/js_dates.asp', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-2-Latest Survey Test 123&type=server-200', '2015-03-06 02:16:03', '2015-03-06 02:16:03', 'Weblemo@AddyTools', 0, 'Testing', 0),
(66, 'http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_case_navbar3&stacked=h', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-3-xzczxczxcz&type=server-300', '2015-03-06 02:17:04', '2015-03-06 02:17:04', 'Weblemo@AddyTools', 0, 'Testing', 0),
(67, 'http://www.w3schools.com/js/js_dates.asp', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-3-xzczxczxcz&type=server-200', '2015-03-06 02:17:05', '2015-03-06 02:17:05', 'Weblemo@AddyTools', 0, 'Testing', 0),
(68, 'http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_case_navbar3&stacked=h', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-3-xzczxczxcz&type=server-300', '2015-03-06 02:18:27', '2015-03-06 02:18:27', 'Weblemo@AddyTools', 0, 'Testing', 0),
(69, 'http://www.w3schools.com/js/js_dates.asp', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-3-xzczxczxcz&type=server-200', '2015-03-06 02:18:27', '2015-03-06 02:18:27', 'Weblemo@AddyTools', 0, 'Testing', 0),
(70, 'http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_case_navbar3&stacked=h', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-gdfgdgdsf&type=server-300', '2015-03-06 02:21:12', '2015-03-06 02:21:12', 'Weblemo@AddyTools', 0, 'Testing', 0),
(71, 'http://www.w3schools.com/js/js_dates.asp', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-gdfgdgdsf&type=server-200', '2015-03-06 02:21:12', '2015-03-06 02:21:12', 'Weblemo@AddyTools', 0, 'Testing', 0),
(72, 'http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_case_navbar3&stacked=h', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-gdfgdgdsf&type=server-300', '2015-03-06 02:21:29', '2015-03-06 02:21:29', 'Weblemo@AddyTools', 0, 'Testing', 0),
(73, 'http://www.w3schools.com/js/js_dates.asp', 'http://weblemo.com/market-tool/getURL.php?hasId=market-essess-200-us-1-gdfgdgdsf&type=server-200', '2015-03-06 02:21:29', '2015-03-06 02:21:29', 'Weblemo@AddyTools', 0, 'Testing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `countryId` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `countryId`, `version`) VALUES
(1, 'Delhi', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `successpage`
--

CREATE TABLE IF NOT EXISTS `successpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surveyId` varchar(100) NOT NULL,
  `updatedTime` datetime NOT NULL,
  `vendorId` varchar(100) NOT NULL,
  `resultData` longtext NOT NULL,
  `encKey` varchar(10) NOT NULL,
  `vendorData` longtext NOT NULL,
  `responseId` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surveyDisplayId` varchar(100) NOT NULL,
  `surveyName` varchar(100) NOT NULL,
  `projectId` int(11) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `clientId` int(11) NOT NULL,
  `sales` int(11) NOT NULL,
  `cpi` int(11) NOT NULL,
  `margin` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `revenue` int(11) NOT NULL,
  `grossProfit` int(11) NOT NULL,
  `loi` int(11) NOT NULL,
  `completesNeeded` int(11) NOT NULL,
  `ir` int(11) NOT NULL,
  `description` text NOT NULL,
  `countryId` int(11) NOT NULL,
  `languageId` int(11) NOT NULL,
  `notes` text NOT NULL,
  `validationId` int(11) NOT NULL,
  `testLinkId` int(11) NOT NULL,
  `liveLinkId` int(11) NOT NULL,
  `reportingLink` varchar(400) NOT NULL,
  `customLiveId` int(11) NOT NULL,
  `customTestId` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `surveyDisplayId`, `surveyName`, `projectId`, `startDate`, `endDate`, `clientId`, `sales`, `cpi`, `margin`, `productId`, `revenue`, `grossProfit`, `loi`, `completesNeeded`, `ir`, `description`, `countryId`, `languageId`, `notes`, `validationId`, `testLinkId`, `liveLinkId`, `reportingLink`, `customLiveId`, `customTestId`, `version`) VALUES
(1, 'market-essess-200-ind-nationCity-300', 'Test Survey', 1, '2015-02-23 00:00:00', '2015-03-23 00:00:00', 1, 10, 5, 2, 1, 50, 20, 2, 50, 2, 'Test Survey', 1, 1, 'Test Survey', 1, 1, 1, 'weblemo.com/test/', 0, 0, 1),
(2, 'market-essess-200-us-1-Test-Project', 'Test-Project', 1, '2015-03-03 00:00:00', '2015-03-03 00:00:00', 1, 10, 10, 10, 0, 10, 10, 10, 10, 10, 'Test', 1, 2, 'Test Survey {$test}', 1, 0, 0, 'http://test.com', 0, 0, 0),
(3, 'market-essess-200-us-1-Test-Project', 'Test-Project', 1, '2015-03-03 00:00:00', '2015-03-03 00:00:00', 1, 10, 10, 10, 0, 10, 10, 10, 10, 10, 'Test', 1, 2, 'Test Survey {$test}', 1, 4, 5, 'http://test.com', 0, 0, 0),
(4, 'market-essess-200-us-1-Test-Project', 'Test-Project', 1, '2015-03-03 00:00:00', '2015-03-03 00:00:00', 1, 10, 10, 10, 0, 10, 10, 10, 10, 10, 'Test', 1, 2, 'Test Survey {$test}', 1, 4, 5, 'http://test.com', 0, 0, 0),
(5, 'market-essess-200-us-1-Test-Project', 'Test-Project', 1, '2015-03-03 00:00:00', '2015-03-03 00:00:00', 1, 10, 10, 10, 0, 10, 10, 10, 10, 10, 'Test', 1, 2, 'Test Survey {$test}', 1, 4, 5, 'http://test.com', 0, 0, 0),
(6, 'market-essess-200-us-1-Test-Project', 'Test-Project', 1, '2015-03-03 00:00:00', '2015-03-03 00:00:00', 1, 10, 10, 10, 0, 10, 10, 10, 10, 10, 'Test', 1, 2, 'Test Survey {$test}', 1, 4, 5, 'http://test.com', 0, 0, 0),
(7, 'market-essess-200-us-1-Test-Project', 'Test-Project', 1, '2015-03-03 00:00:00', '2015-03-03 00:00:00', 1, 10, 10, 10, 0, 10, 10, 10, 10, 10, 'Test', 1, 2, 'Test Survey {$test}', 1, 4, 5, 'http://test.com', 0, 0, 0),
(8, 'market-essess-200-us-1-Test-Project', 'Test-Project', 1, '2015-03-03 00:00:00', '2015-03-03 00:00:00', 1, 10, 10, 10, 0, 10, 10, 10, 10, 10, 'Test', 1, 2, 'Test Survey {$test}', 1, 4, 5, 'http://test.com', 0, 0, 0),
(9, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(10, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(11, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(12, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(13, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(14, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(15, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(16, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(17, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(18, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(19, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(20, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(21, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(22, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(23, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(24, 'market-essess-200-us-1-sadas', 'sadas', 1, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 11, 11, 11, 0, 11, 11, 11, 111, 11, '11', 1, 3, '111111111111111111111111111111111', 1, 18, 19, 'dfgfhgghgfhgf', 0, 0, 0),
(25, 'market-essess-200-us-1-Latest Survey Test 1', 'Latest Survey Test 1', 1, '2015-03-05 00:00:00', '2015-03-27 00:00:00', 1, 100, 100, 120, 0, 130, 140, 150, 160, 170, 'Latest Survey Test 1', 1, 3, 'Latest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1', 5, 50, 51, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7643', 0, 0, 0),
(26, 'market-essess-200-us-1-Latest Survey Test 1', 'Latest Survey Test 1', 1, '2015-03-05 00:00:00', '2015-03-27 00:00:00', 1, 100, 100, 120, 0, 130, 140, 150, 160, 170, 'Latest Survey Test 1', 1, 3, 'Latest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1', 5, 50, 51, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7643', 0, 0, 0),
(27, 'market-essess-200-us-1-Latest Survey Test 1', 'Latest Survey Test 1', 1, '2015-03-05 00:00:00', '2015-03-27 00:00:00', 1, 100, 100, 120, 0, 130, 140, 150, 160, 170, 'Latest Survey Test 1', 1, 3, 'Latest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1', 5, 50, 51, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7643', 0, 0, 0),
(28, 'market-essess-200-us-1-Latest Survey Test 1', 'Latest Survey Test 1', 1, '2015-03-05 00:00:00', '2015-03-27 00:00:00', 1, 100, 100, 120, 0, 130, 140, 150, 160, 170, 'Latest Survey Test 1', 1, 3, 'Latest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1\nLatest Survey Test 1', 5, 50, 51, 'http://localhost:8079/phpmyadmin/#PMAURL-52:sql.php?db=aaddytools&table=survey&server=1&target=&token=702fefed2932311d8084e5635abf7643', 0, 0, 0),
(29, 'market-essess-200-us-2-Latest Survey Test 1', 'Latest Survey Test 1', 2, '2015-03-10 00:00:00', '2015-03-12 00:00:00', 1, 100, 100, 1111, 0, 111, 111, 11, 11, 11, '11', 1, 3, 'cxzvxczvzxcvcxzvxcvxcvz', 0, 58, 59, 'http://localhost:8079/tool/addSurvey.php', 0, 0, 0),
(30, 'market-essess-200-us-2-Latest Survey Test 123', 'Latest Survey Test 123', 2, '2015-03-05 00:00:00', '2015-03-27 00:00:00', 1, 21, 21, 21, 0, 12, 0, 21, 122, 12, '', 1, 2, 'nvccccccccccccccccc ccccccccccccccccccccc ccccccccccccccccccc cccccccccccccccccccc cccccccc cnnnnnnnnnnnnnnnnnnnn dffffffffffffffffffgh dhhhhhhhhhhhhhhhhh', 0, 60, 61, 'http://php.net/manual/en/function.date.php', 0, 0, 0),
(31, 'market-essess-200-us-2-Latest Survey Test 123', 'Latest Survey Test 123', 2, '2015-03-05 00:00:00', '2015-03-27 00:00:00', 1, 21, 21, 21, 0, 12, 0, 21, 122, 12, '', 1, 2, 'nvccccccccccccccccc ccccccccccccccccccccc ccccccccccccccccccc cccccccccccccccccccc cccccccc cnnnnnnnnnnnnnnnnnnnn dffffffffffffffffffgh dhhhhhhhhhhhhhhhhh', 0, 60, 61, 'http://php.net/manual/en/function.date.php', 0, 0, 0),
(32, 'market-essess-200-us-2-Latest Survey Test 123', 'Latest Survey Test 123', 2, '2015-03-05 00:00:00', '2015-03-27 00:00:00', 1, 21, 21, 21, 0, 12, 0, 21, 122, 12, '', 1, 2, 'nvccccccccccccccccc ccccccccccccccccccccc ccccccccccccccccccc cccccccccccccccccccc cccccccc cnnnnnnnnnnnnnnnnnnnn dffffffffffffffffffgh dhhhhhhhhhhhhhhhhh', 0, 60, 61, 'http://php.net/manual/en/function.date.php', 0, 0, 0),
(33, 'market-essess-200-us-3-xzczxczxcz', 'xzczxczxcz', 3, '2015-03-05 00:00:00', '2015-03-28 00:00:00', 1, 12, 12, 12, 0, 12, 12, 12, 12, 12, '12222 ergdfb g ergreg tgergyh   yhdfthgh dthdghttty yuyt hjhytj dhgfh drhfgh yehgfh', 1, 3, '12222 ergdfb g ergreg tgergyh   yhdfthgh dthdghttty yuyt hjhytj dhgfh drhfgh yehgfh', 1, 60, 61, 'http://php.net/manual/en/function.date.php', 0, 0, 0),
(34, 'market-essess-200-us-3-xzczxczxcz', 'xzczxczxcz', 3, '2015-03-05 00:00:00', '2015-03-28 00:00:00', 1, 12, 12, 12, 0, 12, 12, 12, 12, 12, '12222 ergdfb g ergreg tgergyh   yhdfthgh dthdghttty yuyt hjhytj dhgfh drhfgh yehgfh', 1, 3, '12222 ergdfb g ergreg tgergyh   yhdfthgh dthdghttty yuyt hjhytj dhgfh drhfgh yehgfh', 1, 60, 61, 'http://php.net/manual/en/function.date.php', 0, 0, 0),
(35, 'market-essess-200-us-1-gdfgdgdsf', 'gdfgdgdsf', 1, '2015-03-05 00:00:00', '2015-03-27 00:00:00', 1, 22, 22, 222, 0, 22, 22, 22, 22222, 22, '22', 1, 2, 'Wix.com provides a free, easy-to-use online platform that lets you create and publish your own unique website. Its powerful editing tools & customizable website designs make building a beautiful website easy.\r\n\r\nAdd eCommerce features, connect a custom domain and experience superior SEO results. Wix is your ultimate solution for creating an exquisite HTML website.\r\n\r\nOver 20 million users have created their website with Wix.', 6, 60, 61, 'http://php.net/manual/en/function.date.php', 0, 0, 0),
(36, 'market-essess-200-us-1-gdfgdgdsf', 'gdfgdgdsf', 1, '2015-03-05 00:00:00', '2015-03-27 00:00:00', 1, 22, 22, 222, 0, 22, 22, 22, 22222, 22, '22', 1, 2, 'Wix.com provides a free, easy-to-use online platform that lets you create and publish your own unique website. Its powerful editing tools & customizable website designs make building a beautiful website easy.\r\n\r\nAdd eCommerce features, connect a custom domain and experience superior SEO results. Wix is your ultimate solution for creating an exquisite HTML website.\r\n\r\nOver 20 million users have created their website with Wix.', 6, 60, 61, 'http://php.net/manual/en/function.date.php', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey_qualification`
--

CREATE TABLE IF NOT EXISTS `survey_qualification` (
  `id` int(11) NOT NULL,
  `surveyId` int(11) NOT NULL,
  `qualificationId` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE IF NOT EXISTS `validation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `relevantId` int(11) NOT NULL,
  `Ip` int(11) NOT NULL,
  `geoLocation` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`id`, `relevantId`, `Ip`, `geoLocation`, `version`) VALUES
(1, 1, 1, 0, 0),
(2, 1, 0, 0, 0),
(3, 1, 1, 0, 0),
(4, 1, 1, 1, 0),
(5, 0, 1, 0, 0),
(6, 0, 1, 1, 0),
(7, 0, 0, 1, 0),
(8, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendorDisplayId` varchar(200) NOT NULL,
  `vendorName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `vendorDisplayId`, `vendorName`, `email`, `phone`) VALUES
(1, 'test-vendor', 'Vendor test', 'test@weblemo.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_survey`
--

CREATE TABLE IF NOT EXISTS `vendors_survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendorId` int(11) NOT NULL,
  `surveyId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vendors_survey`
--

INSERT INTO `vendors_survey` (`id`, `vendorId`, `surveyId`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `version_update`
--

CREATE TABLE IF NOT EXISTS `version_update` (
  `id` int(11) NOT NULL,
  `master_id` int(11) NOT NULL,
  `master_table` varchar(200) NOT NULL,
  `master_column_name` varchar(200) NOT NULL,
  `master_version` int(11) NOT NULL,
  `master_previous_value` varchar(200) NOT NULL,
  `master_new_value` varchar(200) NOT NULL,
  `data` text NOT NULL,
  `update_date` datetime NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
