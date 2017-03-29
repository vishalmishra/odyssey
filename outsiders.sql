-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb12.biz.nf
-- Generation Time: Jan 29, 2017 at 09:56 AM
-- Server version: 5.7.16-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2281236_odyssey`
--
CREATE DATABASE IF NOT EXISTS `odyssey17` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `odyssey17`;

-- --------------------------------------------------------

--
-- Table structure for table `outsiders`
--

CREATE TABLE `outsiders` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `year` varchar(50) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `college` varchar(50) NOT NULL,
  `informalsolo` varchar(200) NOT NULL,
  `informalgroup` varchar(200) NOT NULL,
  `formalsolo` varchar(200) NOT NULL,
  `formalgroup` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `accomodation` varchar(20) NOT NULL,
  `fb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outsiders`
--

INSERT INTO `outsiders` (`fname`, `lname`, `year`, `branch`, `college`, `informalsolo`, `informalgroup`, `formalsolo`, `formalgroup`, `contact`, `email`, `accomodation`, `fb`) VALUES
('abhay', '', '3', '', 'hbti', 'dancing', '', '', '', '8979', 'abhaysharma7733@gmail.com', '', ''),
('hvh', 'hhh', '7', 'hh', 'hhh', 'v', 'iiii', 'ji', 'hh', '2147483647', 'vishalmishra94422@gmail.com', 'yes', 'http://odyssey17.in'),
('Vishal', 'Mishra', '2', 'CSE', 'HBTU', 'canary', 'no', 'no', 'no', '2147483647', 'vishalmishra9442@gmail.com', 'no', 'http://odyssey17.in'),
('Vishal', 'Mishra', '2', 'CSE', 'HBTU', 'primp', 'no', 'no', 'no', '2147483647', 'vishalmishra9442@gmail.com', 'no', 'http://odyssey17.in'),
('Vishal', 'Mishra', '2', 'CSE', 'HBTU', 'primp,canary, hello, raqsaan etc and all ', 'no', 'no', 'no', '2147483647', 'vishalmishra9442@gmail.com', 'no', 'http://odyssey17.in'),
('vishal', 'mishra', '2', 'cse', 'hbtu', 'canary', 'as', 's', 'd', '2147483647', 'vishalmishra9442@gmail.com', 'no', 'http://www.fb.com'),
('vishal', '', '2', 'cse', 'hbtu', 'nno', 'hh', 'hh', 'hh', '2147483647', 'vishalmishra9442@gmail.com', 'no', 'http://odyssey17.in/register2.html'),
('vishal', 'gdg', '2', 'dfd', 'gfg', 'dfdfd', 'fgf', 'fdf', 'fsf', '8381824745', 'vishalmishra94422@gmail.com', 'no', 'http://odyssey17.in/register2.html'),
('vdd', '', '', '', 'dd', 'sd', '', '', '', '8381824745', 'vishalmishra9442@gmail.com', '', 'http://odyssey17.in/register2.html'),
('Vishal', 'Mishra', '', '', 'Test ', 'Not interested', '', '', '', '8052092062', 'vishalmishra9442@gmail.com', 'no', 'http://myfb.com'),
('Vishal', 'Mishra', '2', 'Cse', 'Hbtu', '', '', '', '', '8381824745', 'vishalmishra9442@gmail.com', 'no', 'http://www.te'),
('Vishal', 'Mishra', '2', 'Cse', 'Hbtu', 'Hell', '', '', '', '8381824745', 'vishalmishra9442@gmail.com', 'no', 'http://www.tec'),
('Vishal ', 'Mishra', '2', 'Cse', 'Hbtu', 'No ', 'Singing', 'Lit', 'No', '8052092062', 'vishalmishra9442@gmail.com', 'yes', 'http://www.google.com'),
('Vishal ', 'Mishra', '2', 'Cse', 'Hbtu', 'No ', 'Singing', 'Lit', 'No', '8052092062', 'vishalmishra9442@gmail.com', 'yes', 'http://www.google.com'),
('testing', 'purpose', '2', 'cse', 'hbtu', 'no', '', '', '', '8381824745', 'vishalmishra9442@gmail.com', 'yes', 'http://www.fb.com'),
('vishal', 'mishra', '4', 'cse', 'hbtu', 'gu', 'gu', '', '', '8381824745', 'vishalmishra94422@gmail.com', 'no', 'http://www.fb.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
