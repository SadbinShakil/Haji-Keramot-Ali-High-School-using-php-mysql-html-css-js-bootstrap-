-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 05:39 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`, `email`, `dob`, `hiredate`, `address`, `sex`) VALUES
('ad2', 'Sakil', '$2y$10$kOE9qQQRb62Cbh4FSexafOuY61KXQHCs0N6ZN0IQzo9D2b3iHHxi.', '01871306176', 'amiaspyuk@gmail.com', '2020-12-02', '2020-12-22', 'Gazaria', 'Male'),
('ad3', 'Sadbin', '$2y$10$E.7jZEGK7xwTo6MOgKvxoOT4sA7419PzxYqCQqHFOdJhwV2SKe92i', '01857297599', 'sadbinshakil75@gmail', '2021-01-28', '2021-01-15', 'Munshigang,dhaka', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attendance` varchar(20) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `class_id` varchar(20) NOT NULL,
  `session` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `attendance`, `st_id`, `class_id`, `session`) VALUES
(113, '2020-12-18', 'Absent', 'st1', '10', 2020),
(114, '2020-12-25', 'Present', 'st1', '10', 2020),
(116, '2021-01-12', 'Absent', 'st1', '10', 2020),
(117, '2021-01-08', 'Present', 'st1', '10', 2020),
(122, '2021-01-08', 'Present', 'st1', '10', 2020),
(123, '2021-01-08', 'Absent', 'st11', '10', 2020),
(124, '2021-01-08', 'Present', 'st2', '10', 2020),
(125, '2021-01-08', 'Absent', 'st5', '10', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `availablecourse`
--

CREATE TABLE `availablecourse` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `classid` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `availablecourse`
--

INSERT INTO `availablecourse` (`id`, `name`, `classid`) VALUES
(1, 'Bangla 1st', '1'),
(2, 'Bangla 1st', '2'),
(3, 'Bangla 1st', '3'),
(4, 'Bangla 1st', '4'),
(5, 'Bangla 1st', '5'),
(6, 'Bangla 1st', '6'),
(7, 'Bangla 1st', '7'),
(8, 'Bangla 1st', '8'),
(9, 'Bangla 1st', '9'),
(10, 'Bangla 1st', '10'),
(11, 'Bangla 2nd', '1'),
(12, 'Bangla 2nd', '2'),
(13, 'Bangla 2nd', '3'),
(14, 'Bangla 2nd', '4'),
(15, 'Bangla 2nd', '5'),
(16, 'Bangla 2nd', '6'),
(17, 'Bangla 2nd', '7'),
(18, 'Bangla 2nd', '8'),
(19, 'Bangla 2nd', '9'),
(20, 'Bangla 2nd', '10'),
(21, 'English 1st', '1'),
(22, 'English 1st', '2'),
(23, 'English 1st', '3'),
(24, 'English 1st', '4'),
(25, 'English 1st', '5'),
(26, 'English 1st', '6'),
(27, 'English 1st', '7'),
(28, 'English 1st', '8'),
(29, 'English 1st', '9'),
(30, 'English 1st', '10'),
(31, 'English 2nd', '1'),
(32, 'English 2nd', '2'),
(33, 'English 2nd', '3'),
(34, 'English 2nd', '4'),
(35, 'English 2nd', '5'),
(36, 'English 2nd', '6'),
(37, 'English 2nd', '7'),
(38, 'English 2nd', '8'),
(39, 'English 2nd', '9'),
(40, 'English 2nd', '10');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(40) NOT NULL,
  `classid` varchar(40) NOT NULL,
  `session` int(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `classid`, `session`, `time`, `subject`) VALUES
(1, '10', 2020, '14:16', 'bangla');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `teacherid`, `studentid`, `classid`) VALUES
('1', 'Bangla 1st', 'te-124-1', 'st-123-1', '1A'),
('1', 'Bangla 1st', 'te-124-1', 'st-124-1', '1A');

-- --------------------------------------------------------

--
-- Table structure for table `examnotice`
--

CREATE TABLE `examnotice` (
  `session` varchar(40) NOT NULL,
  `classid` varchar(40) NOT NULL,
  `link` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `id` int(40) NOT NULL,
  `filename` varchar(40) NOT NULL,
  `size` int(40) NOT NULL,
  `session` int(40) NOT NULL,
  `classid` varchar(40) NOT NULL,
  `Date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`id`, `filename`, `size`, `session`, `classid`, `Date`) VALUES
(6, 'resume.pdf', 178299, 2020, '10', '2020/12/16'),
(7, 'CV.pdf', 56326, 2020, '9', '2020/12/18'),
(8, 'coverpage.jpg', 87664, 2020, '6', '2021/01/05');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `term` varchar(20) NOT NULL,
  `parentid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `studentid`, `grade`, `courseid`, `classid`, `session`, `term`, `parentid`) VALUES
(26, 'st1', '77', 'bangla', '10', '2020', '2nd', 'pr1'),
(27, 'st2', '90', 'bangla', '10', '2020', '2nd', 'pr1'),
(28, 'st3', '95', 'bangla', '10', '2020', '2nd', 'pr2'),
(29, 'st4', '100', 'bangla', '10', '2020', '2nd', 'pr2'),
(42, 'st1', '100', 'islam', '10', '2020', '1st', 'pr1'),
(43, 'st1', '77', 'Math', '10', '2020', 'final', 'pr2'),
(44, 'st2', '100', 'Math', '10', '2020', 'final', 'pr2'),
(45, 'st1', '100', 'Islam', '10', '2020', '2nd', 'pr1');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `id` int(40) NOT NULL,
  `noticetitle` varchar(40) NOT NULL,
  `session` int(40) NOT NULL,
  `classid` varchar(40) NOT NULL,
  `size` int(40) NOT NULL,
  `Date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `noticetitle`, `session`, `classid`, `size`, `Date`) VALUES
(7, 'CV.pdf', 2020, '10', 56326, '2020/12/16'),
(8, 'CV.docx', 2020, '9', 50629, '2020/12/16'),
(9, 'CV.pdf', 2020, '9', 56326, '2020/12/16'),
(10, 'resume.pdf', 2020, '10', 178299, '2020/12/16'),
(11, 'CV.docx', 2020, '9', 50629, '2020/12/16'),
(12, 'resume.pdf', 2020, '9', 178299, '2020/12/16'),
(13, 'CV.docx', 2018, '9', 50629, '2020/12/17'),
(14, 'coverpage.jpg', 2020, '6', 87664, '2021/01/05');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `password`, `name`, `phone`) VALUES
('p2', '$2y$10$EYJAtgyYrz4KW1U5ejUvgu3bzCAbnnG7Tmr6uP3uxgQSWU8XUOHG6', 'Shahid', '01729923734'),
('pr1', '$2y$10$pnlZ8iX8Z7H6ar7iyYc67uYstlMVBiK7jmdva7JLgbPvNELLWWNgG', 'Shahid', '01729923734'),
('pr2', '$2y$10$M8Qi5PZsp67v..LS1zZhwOPUuncQcbZz6mDjvnyRGyMvop7kGPMiS', 'Shahid', '01729923734');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `classid` varchar(5) NOT NULL,
  `session` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `studentid`, `amount`, `date`, `classid`, `session`) VALUES
(1, 'st-123-1', 500, '2016-05-04', '1A', 2014),
(2, 'st-123-1', 500, '2016-05-04', '1A', 2014),
(3, 'st-124-1', 500, '2016-05-04', '1A', 2014),
(4, '', 1500, '0567-12-31', '1A', 2014),
(5, '', 2000, '0567-12-31', '1A', 2014),
(6, 'st123', 2000, '5678-12-31', '1A', 2014),
(7, '', 0, '0000-00-00', '', 0),
(8, 'st1', 1500, '2021-01-06', '10', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportid` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `courseid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportid`, `studentid`, `teacherid`, `message`, `courseid`) VALUES
(1, 'st-123-1', 'te-123-1', 'Good Boy', '790'),
(2, 'st-124-1', 'te-123-1', 'Good boy But not honest.', '790'),
(3, 'st-123-1', 'te-124-1', ' good', '1');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `password`, `phone`, `email`, `sex`, `dob`, `hiredate`, `address`, `salary`) VALUES
('sta-123-1', 'Fogg', '123', '01913827384', 'fogg@example.com', 'male', '1985-12-18', '2016-01-01', 'dhaka', 900000),
('sta-124-1', 'Eyasin', '123', '01822369874', 'eyasin@example.com', 'Male', '1998-03-25', '2016-05-03', 'Dhaka', 60000),
('sta-125-1', 'Robin', '123', '01922584693', 'robin@gmail.com', 'Male', '1992-12-12', '2016-05-03', '', 10000),
('sta-126-1', 'Tanjil  Ahmed', '123', '016392489298', 'tanjil@yahoo.com', 'Male', '0000-00-00', '2016-05-05', 'Dhaka', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `addmissiondate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `parentid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL,
  `session` int(40) NOT NULL,
  `parentname` varchar(40) NOT NULL,
  `parentphone` varchar(40) NOT NULL,
  `parentpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `phone`, `email`, `sex`, `dob`, `addmissiondate`, `address`, `parentid`, `classid`, `session`, `parentname`, `parentphone`, `parentpass`) VALUES
('st1', 'sakil sarker', '$2y$10$DLIiYm/kWzoVLAw.YjUcZuBkt6Jnst5Ty74WNn2b92g1XINdRvGNm', '01871306176', 'sadbinshakil75@gmail', 'Male', '1998-01-13', '2020-12-03', 'Munshigang,dhaka', 'pr1', '10', 2020, 'Shahid', '01729923734', '$2y$10$pnlZ8iX8Z7H6ar7iyYc67uYstlMVBiK7jmdva7JLgbPvNELLWWNgG'),
('st11', 'Sadbin Shakil', '$2y$10$tmn3dI0jnjZLOpYXSbPe.eIKirffpQ8h0rxoRwH9xxrHAt0rXw6Ay', '01857297599', 'amiaspyuk@gmail.com', 'Male', '2021-01-29', '2021-01-21', 'Munshigang,dhaka', 'p2', '10', 2020, 'Shahid', '01729923734', '$2y$10$EYJAtgyYrz4KW1U5ejUvgu3bzCAbnnG7Tmr6uP3uxgQSWU8XUOHG6'),
('st2', 'Sadbin Shakil', '$2y$10$4OwalKWEEkHF477bPuFQFeBwZrIlcBnvUgXZ8cJxl/bVHVEHa4JZa', '01871306176', 'sadbinshakil75@gmail', 'Male', '2021-01-29', '2021-01-04', 'Munshigang,dhaka', 'pr1', '10', 2020, 'Shahid', '01729923734', '$2y$10$yeeGT8fohamSYJ6ovx87ceN8roteZqC1hp.WwbP6clDABba4vA2F2'),
('st5', 'Sadbin Shakil', '$2y$10$q0VF4/7lb0R7ufLylM1w2.nhCHhbIwNAK1te1q2zv5S4sAbBdc.q6', '01871306176', 'sadbinshakil75@gmail', 'Male', '2021-01-06', '2021-01-18', 'Munshigang,dhaka', 'pr1', '10', 2020, 'Shahid', '01729923734', '$2y$10$hu2TeFIIe.u/QDjfP/PrGeGdneoTpvL4eJZ.XyRTs9xR3q/9N6tga');

-- --------------------------------------------------------

--
-- Table structure for table `takencoursebyteacher`
--

CREATE TABLE `takencoursebyteacher` (
  `id` int(11) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `takencoursebyteacher`
--

INSERT INTO `takencoursebyteacher` (`id`, `courseid`, `teacherid`) VALUES
(1, '4', 'te-123-1'),
(2, '8', 'te-123-1'),
(3, '1', 'te-124-1'),
(4, '2', 'te-124-1'),
(5, '18', 'te-125-1'),
(6, '19', 'te-125-1'),
(7, '11', 'te-125-1'),
(8, '24', 'te-126-1'),
(9, '23', 'te-126-1'),
(10, '22', 'te-126-1'),
(11, '4', 'te-124-1'),
(12, '5', 'te-123-1'),
(13, '6', 'te-125-1'),
(14, '7', 'te-127-1'),
(15, '9', 'te-127-1'),
(16, '10', 'te-127-1'),
(17, '17', 'te-125-1'),
(18, '16', 'te-125-1'),
(19, '15', 'te-125-1'),
(20, '14', 'te-126-1'),
(21, '13', 'te-126-1'),
(22, '12', 'te-126-1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `password`, `phone`, `email`, `address`, `sex`, `dob`, `hiredate`, `salary`) VALUES
('tr2', 'Rafiqul Islam', '$2y$10$HZHIgvbSsoyLJBjCgh9LVuIvWFnw9GU6q/isTW43XZ.kjOHrNbxuq', '01871306176', 'amiaspyuk@gmail.com', 'Gazaria', 'Male', '2020-12-01', '2020-12-22', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('testuser1', '123'),
('testuser2', '123'),
('testuser3', '123'),
('testuser4', '123'),
('testuser5', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availablecourse`
--
ALTER TABLE `availablecourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examschedule`
--
ALTER TABLE `examschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `availablecourse`
--
ALTER TABLE `availablecourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examschedule`
--
ALTER TABLE `examschedule`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
