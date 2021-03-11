-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 11:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `setting_of_saturday_time`
--

CREATE TABLE `setting_of_saturday_time` (
  `id` int(15) NOT NULL,
  `Date` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Start` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  `end` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  `Active_all_day` varchar(5) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `setting_of_saturday_time`
--

INSERT INTO `setting_of_saturday_time` (`id`, `Date`, `Start`, `end`, `Active_all_day`) VALUES
(349, 'Thursday', '05:28', '07:28', 'False'),
(360, 'Thursday', '17:35', '21:20', 'False'),
(372, 'Saturday', '23:41', '01:41', 'False'),
(376, 'Monday', '16:16', '17:46', 'False'),
(377, 'Monday', '16:16', '18:31', 'False'),
(378, 'Sunday', '18:16', '21:16', 'True'),
(379, 'Thursday', '08:19', '10:19', 'True'),
(380, 'Monday', '16:19', '16:49', 'False'),
(381, 'Monday', '22:49', '23:19', 'False'),
(382, 'Tuesday', '00:11', '01:11', 'False');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `setting_of_saturday_time`
--
ALTER TABLE `setting_of_saturday_time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setting_of_saturday_time`
--
ALTER TABLE `setting_of_saturday_time`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
