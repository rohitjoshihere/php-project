-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 05:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setup`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(3) NOT NULL,
  `name` text NOT NULL,
  `class` int(3) NOT NULL,
  `roll` int(10) NOT NULL,
  `fname` text NOT NULL,
  `tname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `name`, `class`, `roll`, `fname`, `tname`) VALUES
(0, 'Rohit Joshi', 4, 1, 'ffff', 'ttt'),
(0, 'Rohit Joshi', 4, 1, 'ffff', 'ttt'),
(0, 'test', 11, 123, 'abc', 'aaa'),
(0, 'avv', 5, 2, 'wwww', 'tttt'),
(0, 'adadadas', 9, 3, 'kkjh', 'jjj'),
(0, 'test1221', 6, 7, 'gg', 'gdgd'),
(0, 'test1221', 6, 7, 'gg', 'gdgd'),
(0, 'ds', 2, 2, 'dfdf', 'fdf'),
(0, 'abc123', 5, 14, 'abc', 'plc'),
(0, 'eeee', 2, 22, 'eee', 'eee');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
