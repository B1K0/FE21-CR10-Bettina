-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2021 at 12:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CR10-Bettina-BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `CR10-Bettina-BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `CR10-Bettina-BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `author_fname` varchar(255) NOT NULL,
  `author_lname` varchar(255) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `publisher_adress` varchar(255) NOT NULL,
  `publisher_size` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `type`, `author_fname`, `author_lname`, `ISBN`, `description`, `publish_date`, `publisher`, `publisher_adress`, `publisher_size`, `status`) VALUES
(2, 'The Andromeda Strain', '6082b4b8de179.jpeg', 'Movie', 'Jens', 'Schutze', 12454848, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2012-05-21', 'Ankunding Inc', '7958 Kedzie Way, Canada', 'medium', 'reserved'),
(3, 'Call Me Kuchu', '6082bce1cd664.jpeg', 'Book', 'Ofella', 'Demel', 15487821, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '1997-12-15', 'Bruen, Zemlak and Labadie', '19420 Milwaukee Circle, USA', 'small', 'available'),
(4, 'The Mysterious Island', '6082bddd4dc6f.jpeg', 'Book', 'Hedwiga', 'Storer', 128784648, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2012-04-10', 'Schmitt-Pagac', '69 Gateway Circle, UK', 'big', 'reserved'),
(5, 'Bordertown', '6082be22ba642.jpeg', 'Book', 'Adair', 'Adair', 12487878, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2010-03-09', 'Considine Inc', '28409 Autumn Leaf Lane, USA', 'small', 'reserved'),
(6, 'North by Northwest', '6082be6a3edf3.jpeg', 'Movie', 'Jamie', 'Wherry', 12457886, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-07-09', 'Emard, Dibbert and Fay', '619 Cambridge Crossing, UK', 'medium', 'available'),
(7, 'Hermans House', '6082befd83421.jpeg', 'Book', 'Sayer', 'Kellett', 128787, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '1987-01-01', 'Stokes-Dietrich', '2283 Evergreen Way', 'medium', 'available'),
(8, 'Shadow Man', '6082bf84876ae.jpeg', 'Movie', 'Abby', 'Heijne', 124878, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2001-09-15', 'Koelpin Group', '70035 Larry Circle, US', 'medium', 'available'),
(9, 'Light of Day', '6082bfbd40c85.jpeg', 'Book', 'Sigismondo', 'Sigismondo', 17878481, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2015-08-11', 'McClure-Pagac', '352 Kim Center, Canada', 'medium', 'reserved'),
(10, 'The Frankenstein Syndrome', '6082c00d61721.jpeg', 'book', 'Sibilla', 'Burgisi', 12878828, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '1995-11-01', 'Bogan-Cruickshank', '4 Del Sol Terrace, Mexico', 'small', 'reserved'),
(14, 'The Picture of Dorian Gray', '6083e22a22970.jpeg', 'Book', 'Oscar', 'Wilde', 12487848, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '1999-01-02', 'Ullstein Verlag', '123 Main Street, Germany', 'Big', 'reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publisher_size` (`publisher_size`),
  ADD KEY `image` (`image`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
