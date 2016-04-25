-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2016 at 03:15 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindbplac`
--

CREATE TABLE IF NOT EXISTS `admindbplac` (
  `name` varchar(40) NOT NULL,
  `passkey` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindbplac`
--

INSERT INTO `admindbplac` (`name`, `passkey`, `phone`, `email`) VALUES
('Admin', '21232f297a57a5a743894a0e4a801fc3', '9882186728', 'admin@nith.com');

-- --------------------------------------------------------

--
-- Table structure for table `companydbplac`
--

CREATE TABLE IF NOT EXISTS `companydbplac` (
  `companyID` varchar(255) NOT NULL,
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL DEFAULT 'Not Set',
  `email` varchar(40) NOT NULL,
  `CGPI_req` varchar(10) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `available_post` int(11) DEFAULT NULL,
  `about` longtext,
  `exam_date` date DEFAULT NULL,
  `exam_time` time DEFAULT NULL,
  `exam_venue` varchar(255) DEFAULT NULL,
  `exam_address` varchar(255) DEFAULT NULL,
  `interview_date` date DEFAULT NULL,
  `interview_time` time DEFAULT NULL,
  `interview_venue` varchar(255) DEFAULT NULL,
  `interview_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `companydbplac`
--

INSERT INTO `companydbplac` (`companyID`, `job_id`, `password`, `name`, `phone`, `email`, `CGPI_req`, `branch`, `available_post`, `about`, `exam_date`, `exam_time`, `exam_venue`, `exam_address`, `interview_date`, `interview_time`, `interview_venue`, `interview_address`) VALUES
('101', 9, 'ab56b4d92b40713acc5af89985d4b786', 'Infosys', '01902 225903', 'infosys@gmail.com', '7', 'CSE, ECE', 10, 'Infosys Limited is engaged in consulting, technology, outsourcing and next-generation services. The Company''s solutions include application development.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('102', 10, 'ab56b4d92b40713acc5af89985d4b786', 'TCS', 'Not Set', 'tcs@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('103', 11, 'ab56b4d92b40713acc5af89985d4b786', 'Adobe', 'Not Set', 'adobe@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('104', 12, 'ab56b4d92b40713acc5af89985d4b786', 'Drishti', 'Not Set', 'drishti@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_require` varchar(255) NOT NULL,
  `event_about` text NOT NULL,
  `event_venue` varchar(255) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_require`, `event_about`, `event_venue`) VALUES
(8, 'Mock Interview ', '2016-04-24', 'Pen & Paper', 'All job-seekers can benefit from practicing interview skills. Here are the best bets for interview prep: rehearsed, mock, and videotaped interviews. Come and enjoy the event.', 'Auditorium, 5 PM'),
(9, 'Placement Talk', '2016-05-28', '-', 'A talk by Aman kachroo on what to do to get best placement offers.\r\n', 'Auditorium ,1 PM');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE IF NOT EXISTS `job_application` (
  `student_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `why_join` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--


-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `material`
--


-- --------------------------------------------------------

--
-- Table structure for table `recuiter_admin_message`
--

CREATE TABLE IF NOT EXISTS `recuiter_admin_message` (
  `query_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` text NOT NULL,
  `reply` text,
  `status` varchar(255) NOT NULL DEFAULT 'Not Replied',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`query_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `recuiter_admin_message`
--


-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compName` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `branch` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `compName`, `date`, `branch`, `venue`) VALUES
(15, 'FlipKart', '2016-05-21', 'CSE', 'Auditorium ,1 PM'),
(14, 'Strontium', '2016-05-14', 'CSE,ECE', 'Auditorium ,2 PM'),
(13, 'Jugnoo', '2016-05-06', 'CSE', 'Auditorium, 2 PM');

-- --------------------------------------------------------

--
-- Table structure for table `studdbplac`
--

CREATE TABLE IF NOT EXISTS `studdbplac` (
  `passkey` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `college` varchar(50) DEFAULT NULL,
  `email` varchar(40) NOT NULL DEFAULT 'Not Set',
  `phone` varchar(15) NOT NULL DEFAULT 'Not Set',
  `aboutyou` longtext,
  `rollno` int(11) DEFAULT NULL,
  `branch` varchar(40) DEFAULT NULL,
  `CGPI_req` varchar(10) DEFAULT NULL,
  `skills` text NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studdbplac`
--

INSERT INTO `studdbplac` (`passkey`, `name`, `college`, `email`, `phone`, `aboutyou`, `rollno`, `branch`, `CGPI_req`, `skills`) VALUES
('e2fc714c4727ee9395f324cd2e7f331f', 'Anubhuti Singh', NULL, 'anubhuti@gmail.com', 'Not Set', NULL, 13540, NULL, NULL, ''),
('e2fc714c4727ee9395f324cd2e7f331f', 'Arjun Suri ', NULL, 'arjun@gmail.com', 'Not Set', NULL, 13542, NULL, NULL, ''),
('e2fc714c4727ee9395f324cd2e7f331f', 'Rajat Rana', 'nit hamirpur', 'rjtrana16@gmail.com', '9882186728', 'nothing', 13541, 'cse', '8', 'html css php java');

-- --------------------------------------------------------

--
-- Table structure for table `student_admin_message`
--

CREATE TABLE IF NOT EXISTS `student_admin_message` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Not Replied',
  `query_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subject` varchar(255) NOT NULL,
  `reply_from_admin` text NOT NULL,
  PRIMARY KEY (`query_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `student_admin_message`
--

INSERT INTO `student_admin_message` (`name`, `email`, `query`, `status`, `query_id`, `date`, `subject`, `reply_from_admin`) VALUES
('Rajat Rana', 'rjtrana16@gmail.com', 'this i s trial', 'Not Replied', 16, '2016-04-21 16:01:31', 'Help', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
