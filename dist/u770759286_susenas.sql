-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 07, 2026 at 12:46 PM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u770759286_susenas`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `nks` int(11) DEFAULT NULL,
  `r109` int(11) DEFAULT NULL,
  `r400` int(11) DEFAULT NULL,
  `r401` int(11) DEFAULT NULL,
  `krt` varchar(35) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `r402` varchar(37) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `r403` int(11) DEFAULT NULL,
  `r404` int(11) DEFAULT NULL,
  `r405` int(11) DEFAULT NULL,
  `r406a` int(11) DEFAULT NULL,
  `r406b` int(11) DEFAULT NULL,
  `r406c` int(11) DEFAULT NULL,
  `r407` int(11) DEFAULT NULL,
  `r408` int(11) DEFAULT NULL,
  `r409` int(11) DEFAULT NULL,
  `r505` varchar(40) DEFAULT NULL,
  `r610` int(11) DEFAULT NULL,
  `r611` int(11) DEFAULT NULL,
  `r612` int(11) DEFAULT NULL,
  `r613` int(11) DEFAULT NULL,
  `r614` int(11) DEFAULT NULL,
  `r615` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cacah`
--

CREATE TABLE `cacah` (
  `id` int(11) NOT NULL,
  `prov` varchar(2) DEFAULT NULL,
  `kab` varchar(2) DEFAULT NULL,
  `nks` varchar(9) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `nus` int(11) DEFAULT NULL,
  `nus0324` int(11) DEFAULT NULL,
  `krt` varchar(50) DEFAULT NULL,
  `krt0324` varchar(40) DEFAULT NULL,
  `kode_pcl` varchar(40) DEFAULT NULL,
  `pcl` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `kode_pml` varchar(40) DEFAULT NULL,
  `pml` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `pendidikan` int(11) DEFAULT NULL,
  `statusc` varchar(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `p1c` int(11) DEFAULT NULL,
  `p2c` int(11) DEFAULT NULL,
  `p1p` int(11) DEFAULT NULL,
  `p2p` int(11) DEFAULT NULL,
  `p3p` int(11) DEFAULT NULL,
  `p4p` int(11) DEFAULT NULL,
  `p5p` int(11) DEFAULT NULL,
  `p1k` int(11) DEFAULT NULL,
  `p2k` int(11) DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`))
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `updating`
--

CREATE TABLE `updating` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `prov` varchar(2) DEFAULT NULL,
  `kab` varchar(2) DEFAULT NULL,
  `nks` int(11) DEFAULT NULL,
  `kode_pcl` varchar(40) DEFAULT NULL,
  `pcl` varchar(23) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `kode_pml` varchar(40) DEFAULT NULL,
  `pml` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `statusc` varchar(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `p1c` int(11) DEFAULT NULL,
  `p2c` int(11) DEFAULT NULL,
  `p3c` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cacah`
--
ALTER TABLE `cacah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updating`
--
ALTER TABLE `updating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cacah`
--
ALTER TABLE `cacah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
