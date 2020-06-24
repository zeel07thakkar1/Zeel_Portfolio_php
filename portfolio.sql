-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 09:47 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dou` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `uname`, `email`, `subject`, `message`, `isactive`, `doi`, `dou`) VALUES
(1, 'harsh thakkar', 'harshthakkar261199@gmail.com', 'about category', 'your product list outstanding...', 1, '2020-06-08 06:32:59', 0),
(2, 'sandip thakkar', 'sandip@gmail.com', 'about category', 'nice', 1, '2020-06-08 06:34:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `pro_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `pic1` varchar(50) NOT NULL,
  `pic2` varchar(50) NOT NULL,
  `pic3` varchar(50) NOT NULL,
  `client_nm` varchar(50) NOT NULL,
  `project_nm` varchar(50) NOT NULL,
  `pro_desc` varchar(1000) NOT NULL,
  `project_date` varchar(50) NOT NULL,
  `project_url` varchar(50) NOT NULL,
  `isactive` int(1) NOT NULL,
  `doi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pro_id`, `cat_name`, `pic1`, `pic2`, `pic3`, `client_nm`, `project_nm`, `pro_desc`, `project_date`, `project_url`, `isactive`, `doi`, `dou`) VALUES
(1, 'Web Design', 'img/E-laerning campus/index.jpg', 'img/E-laerning campus/courses.jpg', 'img/E-laerning campus/profile.jpg', 'zeel thakkar', 'E-laerning campus', 'elearning campus ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.', '06-06-2020', 'www.xyz.com', 1, '2020-06-07 11:31:10', '0000-00-00 00:00:00'),
(2, 'project 2', 'img/CA_service/1.png', 'img/CA_service/2.png', 'img/CA_service/3.png', 'Rutvi Patel', 'CA_service', 'CA_service ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.', '31-12-2020', 'www.abc.com', 1, '2020-06-07 11:37:26', '0000-00-00 00:00:00'),
(3, 'project 3', 'img/childAdoption/ca1.png', 'img/childAdoption/ca2.png', 'img/childAdoption/ca3.png', 'Akshit Parmar', 'childAdoption', 'child adoption ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.', '01-12-2019', 'www.abc.com', 1, '2020-06-07 11:58:29', '0000-00-00 00:00:00'),
(4, 'project 4', 'img/Clg_addmission_system/1.png', 'img/Clg_addmission_system/2.png', 'img/Clg_addmission_system/3.png', 'Priyank Panchal', 'Clg_addmission_system', 'Clg_addmisssion ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.', '15-01-2020', 'www.priyank.com', 1, '2020-06-07 12:03:02', '0000-00-00 00:00:00'),
(5, 'project 5', 'img/CreArt/2.jpg', 'img/CreArt/1.jpg', 'img/CreArt/3.jpg', 'Jaypal Shah', 'Creart', 'creart ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.', '18-05-2017', 'www.sarkar.com', 1, '2020-06-07 12:03:18', '0000-00-00 00:00:00'),
(6, 'project 6', 'img/e-store/1.png', 'img/e-store/2.png', 'img/e-store/3.png', 'priyank panchal', 'e-store', 'e-store ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.', '17-07-2015', 'www.estore.com', 1, '2020-06-07 12:03:30', '0000-00-00 00:00:00'),
(7, 'project 7', 'img/InternShala/is1.png', 'img/InternShala/is2.png', 'img/InternShala/is3.png', 'krupa parmar', 'InternShala', 'internshala ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.', '05-05-2015', 'www.krupa.com', 1, '2020-06-07 12:03:45', '0000-00-00 00:00:00'),
(8, 'project 8', 'img/navjyot/1.jpg', 'img/navjyot/2.jpg', 'img/navjyot/3.jpg', 'vrunda gadesha', 'navjyot', 'navjyot ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.', '03-010-2002', 'www.navjyot.com', 1, '2020-06-07 12:04:02', '0000-00-00 00:00:00'),
(9, 'project 9', 'img/PhysioAtDoor/1.png', 'img/PhysioAtDoor/2.png', 'img/PhysioAtDoor/3.png', 'krishna desai', 'PhysioAtDoor', 'physioatdoor ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.', '06-06-2020', 'www.PhysioAtDoor.com', 1, '2020-06-07 12:04:16', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
