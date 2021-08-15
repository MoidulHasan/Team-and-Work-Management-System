-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 08:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(20) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_desc` varchar(255) NOT NULL,
  `createdby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_desc`, `createdby`) VALUES
(1, 'test_team', 'This is a Test Team.', 'test@test.com'),
(2, 'test_team2', 'Test Team 2', 'antu.khan.988@gmail.com'),
(3, 'test_team3', 'test@test.com', 'test@test.com'),
(4, 'test Team 4', 'Test team husah dfuisdufh fdush', 'test@test.com'),
(5, 'dcsvd', 'vsf vsdfs ', 'test@test.com'),
(6, 'bggfb ', ' bgffbgdfbg bfbd b', 'test@test.com'),
(7, 'sdf sfd ', 'fs fsfs sf', 'test@test.com'),
(8, 'vdf dgd ', ' f sdfgs dfg ssddfg', 'test@test.com'),
(9, 'scd sd df', ' s ffdsdf fdf d', 'test@test.com'),
(10, 'vsvdf s v', 'sdvf vdsfvdf', 'test@test.com'),
(11, 'df dfu 8sdfv', ' sdfvsf  vdfv sdf', 'test@test.com'),
(12, 'c sidhu', ' dfsdfdfs fdvdsfvs ', 'test@test.com'),
(13, 'css c', 's cds sd', 'test@test.com'),
(14, 'fds ', ' sdfvdfs fvd', 'test@test.com'),
(15, 'vf f', 'df d fd f', 'test@test.com'),
(16, 'sd dfvf', 'fd sf fdvs', 'test@test.com'),
(17, 'df bdf ', 'd  dfbbd f', 'test@test.com'),
(18, 'on', 'on', 'test@test.com'),
(19, 'ccdds', 'vd  dfbgdfb', 'test@test.com'),
(20, 'fcds s sv', 'fvds fdfs dfv sf', 'test@test.com'),
(21, 'team21', 'd fbg fbgdfgdbgf', 'antu.khan.988@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teams_members`
--

CREATE TABLE `teams_members` (
  `teams_members_id` int(20) NOT NULL,
  `teams_id` int(20) NOT NULL,
  `members_email` varchar(50) NOT NULL,
  `members_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams_members`
--

INSERT INTO `teams_members` (`teams_members_id`, `teams_id`, `members_email`, `members_role`) VALUES
(1, 20, 'test@test.com', 'Admin'),
(2, 21, 'test@test.com', 'Members');

-- --------------------------------------------------------

--
-- Table structure for table `teams_work`
--

CREATE TABLE `teams_work` (
  `teams_work_id` int(20) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `works_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `Full Name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `Full Name`, `email`, `password`, `created_at`) VALUES
(1, '', 'test@test.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2021-08-06 03:52:34'),
(33, '', 'admin@example.com', '2109d55400951b000367a3247ead59a18b12dc5f', '2021-08-12 04:10:30'),
(34, '', 'antu.khan.988@gmail.com', '26e0efd4ac5c2cc57eee4ab54c2c4ffa6e3379a0', '2021-08-12 23:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `work_id` int(20) NOT NULL,
  `work_name` varchar(50) NOT NULL,
  `work_desc` varchar(255) NOT NULL,
  `createdby` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `teams_members`
--
ALTER TABLE `teams_members`
  ADD PRIMARY KEY (`teams_members_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teams_members`
--
ALTER TABLE `teams_members`
  MODIFY `teams_members_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
