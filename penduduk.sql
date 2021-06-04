-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 06:08 PM
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
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `individu`
--

CREATE TABLE `individu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('pria','wanita') NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `born` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individu`
--

INSERT INTO `individu` (`id`, `nama`, `gender`, `alamat`, `email`, `born`) VALUES
(1, 'joko ardiyanto', 'pria', 'sobayan o4/02', 'jokoardi@gmail.com', '1998-11-16'),
(2, 'ryan hardi', 'pria', 'sobayan o3/02', 'rei12@gmail.com', '1999-10-07'),
(3, 'amelia', 'wanita', 'jetis o1/10', 'amell@yahoo.com', '2002-08-01'),
(4, 'prapti dwi', 'wanita', 'rejosari 12/09', 'praptiria@yahoo.com', '1992-01-01'),
(6, 'rahmad widiyanto', 'pria', 'sobayan 04/02', 'rahmad12@gmail.com', '2001-10-20'),
(7, 'putri sengkolon', 'wanita', 'ampel 06/01', 'putrikrl@gmail.com', '2002-11-30'),
(8, 'topik hiday', 'pria', 'ngenden 01/01', 'hiday561@gmail.com', '1999-08-01'),
(12, 'aldy sinaga', 'pria', 'jakarta', 'adyss@yahoo.com', '1997-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `individu`
--
ALTER TABLE `individu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `individu`
--
ALTER TABLE `individu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
