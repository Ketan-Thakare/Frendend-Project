-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 06:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_notes_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookissue`
--

CREATE TABLE `bookissue` (
  `id` int(11) NOT NULL,
  `bookno` varchar(30) NOT NULL,
  `bookname` varchar(30) NOT NULL,
  `bookissue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookrequest`
--

CREATE TABLE `bookrequest` (
  `id` int(11) NOT NULL,
  `Bookname` varchar(30) NOT NULL,
  `Details` varchar(30) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Publication` varchar(30) NOT NULL,
  `CourseName` varchar(30) NOT NULL,
  `ClassName` varchar(30) NOT NULL,
  `Semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookrequest`
--

INSERT INTO `bookrequest` (`id`, `Bookname`, `Details`, `Author`, `Publication`, `CourseName`, `ClassName`, `Semester`) VALUES
(1, 'java', 'Prigramming', 'Vaibhav', 'jadhav', 'MCA', 'FY', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mybooks`
--

CREATE TABLE `mybooks` (
  `id` int(11) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `bDetails` varchar(30) NOT NULL,
  `bAuthor` varchar(30) NOT NULL,
  `bPublication` varchar(30) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `sClass` varchar(30) NOT NULL,
  `Semester` varchar(30) NOT NULL,
  `BookPrice` varchar(30) NOT NULL,
  `book` varchar(30) NOT NULL,
  `booknumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mybooks`
--

INSERT INTO `mybooks` (`id`, `bname`, `bDetails`, `bAuthor`, `bPublication`, `Course`, `sClass`, `Semester`, `BookPrice`, `book`, `booknumber`) VALUES
(10, 'java', 'programming', 'Vaibhav', 'jadhav', 'MCA', 'FY', '1', '23', 'books/sh.pdf', '55'),
(12, 'html', 'programming', 'Vaibhav', 'jadhav', 'MBA', 'FY', '1', '12', 'books/kupan1.pdf', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student_regi`
--

CREATE TABLE `student_regi` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(30) NOT NULL,
  `sClass` varchar(30) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_regi`
--

INSERT INTO `student_regi` (`id`, `name`, `Email`, `Mobile`, `sClass`, `Course`, `Password`) VALUES
(1, 'vaibhav', 'vaibhav@gmail.com', '9309142461', 'FY', 'MCA', '123'),
(2, 'ketan', 'ketan@gmail.com', '9638520741', 'FY', 'MCA', '123'),
(4, 'dipak', 'dipak@gmail.com', '8520963741', 'SY', 'MCA', '123'),
(5, 'dipak', 'dipak1@gmail.com', '7418520963', 'SY', 'MCA', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookissue`
--
ALTER TABLE `bookissue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookrequest`
--
ALTER TABLE `bookrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mybooks`
--
ALTER TABLE `mybooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_regi`
--
ALTER TABLE `student_regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookissue`
--
ALTER TABLE `bookissue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookrequest`
--
ALTER TABLE `bookrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mybooks`
--
ALTER TABLE `mybooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_regi`
--
ALTER TABLE `student_regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
