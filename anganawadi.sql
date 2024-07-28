-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 26, 2023 at 10:03 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anganawadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `n_id` int NOT NULL AUTO_INCREMENT,
  `content` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

DROP TABLE IF EXISTS `resident`;
CREATE TABLE IF NOT EXISTS `resident` (
  `r_id` int NOT NULL AUTO_INCREMENT,
  `r_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `phone` bigint NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `otp` int NOT NULL,
  `update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`r_id`),
  KEY `r_id` (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`r_id`, `r_name`, `last_name`, `dob`, `gender`, `phone`, `image`, `email`, `address`, `password`, `otp`, `update_timestamp`) VALUES
(1, 'vishal ', 'shettigar', '2002-06-05', 'male', 7892072493, '../uploads/download (2).jpg', 'vishal@gmail.com', 'haleyangadi             ', '12345', 0, '2023-06-26 09:10:02'),
(2, 'yashwin', 'shettigar', '2002-03-11', 'Male', 5678689, '../uploads/download.jpg', 'vishal@gmail.com', 'haleyangadi', '1', 0, '2023-06-26 11:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

DROP TABLE IF EXISTS `tbl_address`;
CREATE TABLE IF NOT EXISTS `tbl_address` (
  `add_id` int NOT NULL AUTO_INCREMENT,
  `Apply_id` int NOT NULL,
  `d_no` varchar(20) NOT NULL,
  `land_mark` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `taluk` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `road` varchar(20) NOT NULL,
  `ward` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `pincode` int NOT NULL,
  PRIMARY KEY (`add_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`add_id`, `Apply_id`, `d_no`, `land_mark`, `city`, `taluk`, `state`, `road`, `ward`, `post`, `pincode`) VALUES
(1, 3, '5656', ' xcfvb', 'dfgh', 'sdfghj', 'Karnataka', 'asdfg', ' 54', 'sdfgh', 54876),
(2, 4, '5656', ' xcfvb', 'dfgh', 'sdfghj', 'Karnataka', 'asdfg', ' 54', 'sdfgh', 54876),
(26, 33, '54', 'vcx', 'dc', 'Mangalore', 'Karnataka', 'cx', 'xc', 'ds', 21),
(27, 34, '562', 'dfc', '65', 'Mangalore', 'Karnataka', 'fv', 'fd', 'vc', 56),
(28, 35, '54', 'fv', 'fd', 'Mangalore', 'Karnataka', 'fv', 'fd', 'fd', 23),
(29, 36, '54', 'gf', 'fd', 'Mangalore', 'Karnataka', 'ds', 'ds', 'sd', 65),
(30, 37, '65', 'dc', 'dc', 'Mangalore', 'Karnataka', 'dc', 'dc', 'dc', 65),
(31, 38, '56', ' s', 'dc', 'mangalore', 'Karnataka', 'dc', ' 45', 'cs', 56),
(32, 39, '45', ' xz', 'x', 'mangalore', 'Karnataka', 'xz', ' 65', 'sx', 56),
(33, 44, '258', ' belke', 'bhatkal', 'Mangalore', 'Karnataka', 'nh56belkeroad', ' 23', 'sarpanakatte', 581320);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `A_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `otp` int NOT NULL,
  `update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `A_name`, `email`, `phone`, `dob`, `address`, `image`, `password`, `otp`, `update_timestamp`) VALUES
(1, 'Admin', 'admin@gmail.com', 7349431204, '0000-00-00', 'sindhura 10th thokur haleyangadi post mangalore   ', 'default-dp-2.png', '12345', 0, '2023-06-26 11:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application`
--

DROP TABLE IF EXISTS `tbl_application`;
CREATE TABLE IF NOT EXISTS `tbl_application` (
  `aid` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `rnumber` varchar(25) NOT NULL,
  `caste` varchar(25) NOT NULL,
  `anumber` varchar(25) NOT NULL,
  `vid` varchar(25) NOT NULL,
  `s_id` int NOT NULL,
  `pnumber` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_application`
--

INSERT INTO `tbl_application` (`aid`, `name`, `fname`, `rnumber`, `caste`, `anumber`, `vid`, `s_id`, `pnumber`) VALUES
(0, 'fcgvhbjn', '', '', '', '', '', 0, 0),
(0, 'fcgvhbjn', '', '', '', '', '', 0, 0),
(0, 'vinu', '', '', '', '', '', 0, 0),
(0, 'vinu', '', '', '', '', '', 0, 0),
(0, 'rama', '', '', 'vsghdv', '', '', 0, 0),
(0, 'vinu', '5896', '1245', 'hindu', '789654', '4152', 0, 0),
(0, 'vinutha', '7485', '4562', 'bgvh', '1254', '1452', 0, 0),
(0, 'vinu', '786876', '124578', 'vsghdv', '54245', '75876', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply_schemes`
--

DROP TABLE IF EXISTS `tbl_apply_schemes`;
CREATE TABLE IF NOT EXISTS `tbl_apply_schemes` (
  `Apply_id` int NOT NULL AUTO_INCREMENT,
  `r_id` int NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `pan_no` int NOT NULL,
  `p_image` varchar(200) NOT NULL,
  `ration_no` int NOT NULL,
  `ration_img` varchar(200) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `Adhar_no` int NOT NULL,
  `voter_id` varchar(20) NOT NULL,
  PRIMARY KEY (`Apply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_apply_schemes`
--

INSERT INTO `tbl_apply_schemes` (`Apply_id`, `r_id`, `fathername`, `pan_no`, `p_image`, `ration_no`, `ration_img`, `caste`, `Adhar_no`, `voter_id`) VALUES
(1, 0, '', 0, '', 0, '', 'bbbn', 0, ''),
(2, 0, '', 0, '', 0, '', 'yyy', 0, ''),
(26, 2, '', 52, '13656-doctor-certificate-template1.jpg', 0, '', '', 0, 'dccd'),
(27, 2, '', 23, '91562-images-(69).jpg', 0, '', '', 0, 'xc'),
(28, 0, '', 0, '', 0, '', 'fv', 0, ''),
(29, 0, '', 0, '', 0, '', 'd', 0, ''),
(30, 0, '', 0, '', 0, '', 'c', 0, ''),
(31, 2, '', 32, '91831-images-(69).jpg', 0, '', '', 0, 'fd'),
(32, 2, '', 65, '49884-images-(69).jpg', 0, '', '', 0, 'rg'),
(33, 2, '', 21, '85900-driving-license-250x250.jpg', 0, '', '', 0, 'dc'),
(34, 2, '', 23, '86637-driving-license-250x250.jpg', 0, '', '', 0, 'dc'),
(35, 2, '', 23, '66087-driving-license-250x250.jpg', 0, '', '', 0, 'cv'),
(36, 2, '', 6, '36176-driving-license-250x250.jpg', 0, '', '', 0, 'sx'),
(37, 2, '', 65, '71721-driving-license-250x250.jpg', 0, '', '', 0, 'dc'),
(38, 2, '', 65, '43905-driving-license-250x250.jpg', 0, '', '', 0, 'd'),
(39, 2, '', 444, '30526-a_sample_of_permanent_account_number_pan_card_1280x720-770x433.jpg', 0, '', '', 444, 'ds'),
(40, 0, '', 0, '', 0, '', '', 0, ''),
(41, 0, '', 0, '', 0, '', 'dc', 0, ''),
(42, 0, '', 0, '', 0, '', 'ed', 0, ''),
(43, 0, '', 0, '', 0, '', 'df', 0, ''),
(44, 4, '', 2147483647, '63201-26285-a1.jpg', 0, '', '', 2147483647, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

DROP TABLE IF EXISTS `tbl_attendance`;
CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `atid` int NOT NULL AUTO_INCREMENT,
  `status` varchar(20) NOT NULL,
  `child_id` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`atid`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`atid`, `status`, `child_id`, `date`) VALUES
(1, 'absent', 1, '2020-02-18'),
(2, 'present', 3, '2020-02-18'),
(3, 'absent', 4, '2020-02-18'),
(5, 'present', 1, '2020-03-10'),
(6, 'present', 3, '2020-03-10'),
(7, 'present', 4, '2020-03-10'),
(9, 'present', 6, '2020-03-10'),
(10, 'present', 7, '2020-03-10'),
(11, 'present', 1, '2020-03-10'),
(12, 'present', 3, '2020-03-10'),
(13, 'absent', 4, '2020-03-10'),
(15, 'absent', 6, '2020-03-10'),
(16, 'present', 7, '2020-03-10'),
(17, 'present', 1, '2020-03-10'),
(18, 'present', 3, '2020-03-10'),
(19, 'absent', 4, '2020-03-10'),
(21, 'absent', 6, '2020-03-10'),
(22, 'present', 7, '2020-03-10'),
(23, 'present', 1, '2020-03-10'),
(24, 'present', 3, '2020-03-10'),
(25, 'present', 4, '2020-03-10'),
(27, 'present', 6, '2020-03-10'),
(28, 'present', 7, '2020-03-10'),
(29, 'absent', 8, '2020-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_camp`
--

DROP TABLE IF EXISTS `tbl_camp`;
CREATE TABLE IF NOT EXISTS `tbl_camp` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `discription` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_camp`
--

INSERT INTO `tbl_camp` (`cid`, `name`, `date`, `time`, `discription`) VALUES
(1, 'Blood Donation camp', '2023-07-01', '03:15', 'there will be a blood donation camp on 1-7-2023 at haleyangadi'),
(2, 'Medical camp', '2023-07-08', '09:00', 'There will be medical camp for all at temple hall from morning 9 am to 4 pm for all ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_child`
--

DROP TABLE IF EXISTS `tbl_child`;
CREATE TABLE IF NOT EXISTS `tbl_child` (
  `child_id` int NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `phone` bigint NOT NULL,
  `f_adharno` varchar(20) NOT NULL,
  `m_adharno` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_child`
--

INSERT INTO `tbl_child` (`child_id`, `c_name`, `fname`, `mname`, `phone`, `f_adharno`, `m_adharno`, `Address`, `dob`, `doj`, `image`, `gender`) VALUES
(1, 'Ryan', 'sukumar', 'shodha', 9876543212, '876543218787', '333345687856', 'shree durga resident ligth hosue haleyangadi', '2016-11-27', '2019-03-31', '98538-images-(3).jpg', 'Male'),
(2, 'anushree', 'raguram', 'arati', 8956234578, '456745683333', '333356985698', 'shree kripa house light house haleyangadi', '2019-07-10', '2023-03-10', '64114-images-(1).jpg', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feed_id` int NOT NULL AUTO_INCREMENT,
  `feedback` longtext NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feed_id`, `feedback`) VALUES
(1, 'Great Application\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(2, 'hi great interface'),
(3, 'cool interface');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grocery`
--

DROP TABLE IF EXISTS `tbl_grocery`;
CREATE TABLE IF NOT EXISTS `tbl_grocery` (
  `gid` int NOT NULL AUTO_INCREMENT,
  `gtype` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_grocery`
--

INSERT INTO `tbl_grocery` (`gid`, `gtype`, `quantity`) VALUES
(1, 'Rice', '50kg'),
(2, 'Egg ', '8 dazen'),
(3, 'Bean', '15kg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meeting`
--

DROP TABLE IF EXISTS `tbl_meeting`;
CREATE TABLE IF NOT EXISTS `tbl_meeting` (
  `meet_id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `topic` varchar(20) NOT NULL,
  PRIMARY KEY (`meet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_meeting`
--

INSERT INTO `tbl_meeting` (`meet_id`, `date`, `time`, `topic`) VALUES
(3, '2019-02-14', '03:07:00', 'pregnant women'),
(4, '2019-02-11', '05:08:00', 'child welfare'),
(6, '2019-02-06', '02:05:00', 'food'),
(7, '2019-03-24', '02:02:00', 'gggg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pregnant`
--

DROP TABLE IF EXISTS `tbl_pregnant`;
CREATE TABLE IF NOT EXISTS `tbl_pregnant` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `husband/father name` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `child` varchar(5) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pregnant`
--

INSERT INTO `tbl_pregnant` (`pid`, `name`, `husband/father name`, `phone`, `address`, `child`, `weight`, `height`, `age`, `month`) VALUES
(1, 'latha', 'balakrishna', '7349568512', 'haleyangadi         ', '1', '45', '4.5', '29', '3'),
(2, 'rakshitha', 'yashwin', '9336589451', 'haleyangadi', '1', '45', '5.5', '23', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scheme`
--

DROP TABLE IF EXISTS `tbl_scheme`;
CREATE TABLE IF NOT EXISTS `tbl_scheme` (
  `sc_id` int NOT NULL AUTO_INCREMENT,
  `sc_name` varchar(20) NOT NULL,
  `sc_desp` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `add_date` date NOT NULL,
  `Scheme_fromDate` date NOT NULL,
  `Scheme_ToDate` date NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_scheme`
--

INSERT INTO `tbl_scheme` (`sc_id`, `sc_name`, `sc_desp`, `image`, `add_date`, `Scheme_fromDate`, `Scheme_ToDate`) VALUES
(1, 'KISHORI SHAKTHI YOJA', 'Kishori Shakti Yojana  is a scheme initiated by Ministry of Women and Child Development in India, implemented by the Government of India for juvenile girls aged 11 to 18 under the Integrated Child Development Services (ICDS) government programme. Its goal is to empower adolescent girls, to motivate them to be self-reliant, assist them in studies and vocation, promote health care, and give them exposure to society for gaining knowledge so that they can grow into responsible citizens.', '54201-download-(2).jpg', '2023-03-23', '2023-06-26', '2023-08-31'),
(8, 'Bhagyalakshmi yojane', 'The prime goal of this scheme of the Karnataka government is to promote the birth of girl children in below poverty line (BPL) families and to raise the status of the girl child in the family in particular and society in general. Financial assistance is provided to the girl child through her mother/father or natural guardian subject to the fulfillment of certain conditions.', '29493-screenshot_2017-06-16-12-42-57.png', '2023-06-20', '2023-06-20', '2023-07-30'),
(9, 'balavikasa', 'Bala Vikasa is one of India’s leading nonprofits with innovative multi-sectoral, high-impact, sustainable development interventions aimed at achieving an equitable and just society for all. Founded by Singareddy Bala Theresa Gingras and her husband, André Gingras, a career diplomat with CIDA (Canadian International Development Agency), Bala Vikasa is widely regarded as a Development Innovator committed to Community-Driven Development. Our programs in Safe Water, Food Security, Water Conservation, WASH, Women Empowerment, Widow Emancipation, Quality Education, Model Communities and Humanitarian Relief have impacted over 10 million rural poor in more than 7,000 villages spanning 8 South-Central states over the past 30 years.', '76616-screenshot_2017-06-16-12-42-57.png', '2023-06-26', '2023-07-01', '2024-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

DROP TABLE IF EXISTS `tbl_staff`;
CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `staff_id` int NOT NULL AUTO_INCREMENT,
  `staff_fname` varchar(10) NOT NULL,
  `staff_lname` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `otp` int NOT NULL,
  `update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_fname`, `staff_lname`, `dob`, `image`, `email`, `contact`, `address`, `gender`, `password`, `otp`, `update_timestamp`) VALUES
(1, 'premalatha', '', '1984-06-14', '27889-download.jpg', 'premalatha@gmail.com', 985632147, 'haleyangadi', 'Female', '12345', 0, '2023-04-19 08:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaccination`
--

DROP TABLE IF EXISTS `tbl_vaccination`;
CREATE TABLE IF NOT EXISTS `tbl_vaccination` (
  `v_id` int NOT NULL AUTO_INCREMENT,
  `v_name` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `fromtime` time NOT NULL,
  `totime` time NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vaccination`
--

INSERT INTO `tbl_vaccination` (`v_id`, `v_name`, `date`, `fromtime`, `totime`) VALUES
(1, 'polio', '2023-06-26', '09:00:00', '15:00:00'),
(2, 'vitamin b1', '2023-06-29', '12:30:00', '15:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ventry`
--

DROP TABLE IF EXISTS `tbl_ventry`;
CREATE TABLE IF NOT EXISTS `tbl_ventry` (
  `ventry_id` int NOT NULL AUTO_INCREMENT,
  `v_id` int NOT NULL,
  `child_id` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ventry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ventry`
--

INSERT INTO `tbl_ventry` (`ventry_id`, `v_id`, `child_id`, `date`) VALUES
(1, 2, 7, '2019-03-27'),
(2, 4, 7, '2019-03-27'),
(3, 5, 2, '2019-03-27'),
(4, 6, 1, '2019-03-29'),
(5, 8, 2, '2019-03-29'),
(6, 9, 1, '2019-03-30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
