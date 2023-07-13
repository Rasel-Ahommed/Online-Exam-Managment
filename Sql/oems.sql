-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 06:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `usr_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `usr_name`, `usr_pwd`) VALUES
(1, 'Rasel Ahommed', '12345'),
(2, 'Rahul Biswas', 'rahul12345');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `coptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_number`, `is_correct`, `coptions`) VALUES
(1, 1, 1, 'Electronic'),
(2, 1, 0, ' Mechanical '),
(3, 1, 0, ' Automatic'),
(4, 1, 0, 'Software'),
(5, 2, 0, 'Reliability, Availability and Maintainability'),
(6, 2, 0, 'Rarely Adequate Memory'),
(7, 2, 0, 'Raised Angle Marker'),
(8, 2, 1, 'Random Access Memory'),
(9, 3, 0, 'Monitor'),
(10, 3, 0, 'Keyboard'),
(11, 3, 1, ' CPU'),
(12, 3, 0, ' Mouse'),
(13, 4, 0, 'Order of Significance'),
(14, 4, 0, 'Open Software'),
(15, 4, 1, ' Operating System'),
(16, 4, 0, 'Optical Sensor'),
(17, 5, 0, 'Image file'),
(18, 5, 1, 'Animation/movie file'),
(19, 5, 0, 'Audio file'),
(20, 5, 0, 'MS Office document'),
(21, 6, 0, ' Report'),
(22, 6, 1, 'Field'),
(23, 6, 0, 'Record'),
(24, 6, 0, 'File'),
(25, 7, 0, 'Word Perfect Document file'),
(26, 7, 0, 'MS Office document'),
(27, 7, 1, 'MS Office document'),
(28, 7, 0, 'Image file'),
(29, 8, 0, 'Dennis Ritchie & Ken Thompson'),
(30, 8, 1, 'David Filo & Jerry Yang'),
(31, 8, 0, 'Vint Cerf & Robert Kahn'),
(32, 8, 0, 'Steve Case & Jeff Bezos'),
(33, 9, 0, 'CPU'),
(34, 9, 1, ' Monitor '),
(35, 9, 0, 'Mouse '),
(36, 9, 0, 'Keyboard'),
(37, 10, 1, 'Mouse '),
(38, 10, 0, 'Microphone '),
(39, 10, 0, 'Speaker'),
(40, 10, 0, ' CPU');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_numbers` int(11) NOT NULL,
  `questions_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_numbers`, `questions_text`) VALUES
(1, ' A computer is a/ an _____________ device.'),
(2, 'What is the full form of RAM?'),
(3, 'Where is data stored in a computer?'),
(4, 'OS computer abbreviation usually means?'),
(5, '.MOV extension refers usually to what kind of file?'),
(6, 'What is part of a database that holds only one type of information?'),
(7, '.MPG extension refers usually to what kind of file?'),
(8, ' Who developed Yahoo?'),
(9, ' _____________ is an output device that displays information on the computer screen.'),
(10, 'Which is the input device that allows a user to move the cursor or pointer on the screen?');

-- --------------------------------------------------------

--
-- Table structure for table `stdn_signup`
--

CREATE TABLE `stdn_signup` (
  `id` int(11) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `usrRoll` varchar(255) NOT NULL,
  `usrReg` varchar(255) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stdn_signup`
--

INSERT INTO `stdn_signup` (`id`, `usr_name`, `usrRoll`, `usrReg`, `usr_email`, `usr_pwd`) VALUES
(1, 'Rasel Ahommed', '445315', '1502060674', 'raselahommed2002@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `usr_massage`
--

CREATE TABLE `usr_massage` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usr_massage`
--

INSERT INTO `usr_massage` (`id`, `fullname`, `email`, `massage`) VALUES
(1, 'Rasel Ahommed', 'raselahommed2002@gmail.com', 'HI I am Rasel.I am from Magura.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_numbers`);

--
-- Indexes for table `stdn_signup`
--
ALTER TABLE `stdn_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usr_massage`
--
ALTER TABLE `usr_massage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_numbers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stdn_signup`
--
ALTER TABLE `stdn_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usr_massage`
--
ALTER TABLE `usr_massage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
