-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 01:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahowfuture`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(20) NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `username_admin` varchar(64) NOT NULL,
  `password_admin` varchar(64) NOT NULL,
  `email_admin` varchar(64) NOT NULL,
  `nohp_admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `email_admin`, `nohp_admin`) VALUES
(1, 'william', 'admin', 'admin', 'william99@gmail.com', 2299345);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(20) NOT NULL,
  `nama_siswa` varchar(64) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `asal_sekolah` varchar(64) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `email_siswa` varchar(64) NOT NULL,
  `nohp_siswa` int(20) NOT NULL,
  `id_grupbimbel` int(20) NOT NULL,
  `username_siswa` varchar(64) NOT NULL,
  `password_siswa` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama_siswa`, `tgl_lahir`, `asal_sekolah`, `alamat`, `email_siswa`, `nohp_siswa`, `id_grupbimbel`, `username_siswa`, `password_siswa`) VALUES
(1101, 'Clarissa', '2002-09-01', 'SMAN 1 Gresik', 'Gresik', 'Clarissa11@gmail.com', 1119014, 1, 'clarissa', 'clarissa'),
(1102, 'Rere', '2019-11-11', 'SMAN 1 Solo', 'Solo', 'Rere@gmail.com', 123677, 1, 'Rere', 'rere'),
(1103, 'Farhan', '1999-08-17', 'SMAN 2 Semarang', 'Semarang', 'Farhan@gmail.com', 110328, 2, 'Farhan', 'Farhan'),
(1104, 'Razka', '2000-06-17', 'SMAN 1 Bangkalan', 'Bangkalan', 'Razka@gmail.com', 1107928, 3, 'Razka', 'Razka'),
(1105, 'Azzam', '1999-10-28', 'SMAN 1 Ponorogo', 'Ponorogo', 'Azzam@gmail.com', 117658, 2, 'Azzam', 'Azzam'),
(1106, 'Riki', '2000-04-07', 'SMAN 2 Tanggerang', 'Tanggerang', 'Riki@gmail.com', 116786, 3, 'Riki', 'Riki'),
(1107, 'Friska', '1999-12-11', 'SMAN 3 Surabaya', 'Surabaya', 'Frizka@gmail.com', 118765, 3, 'Frizka', 'Frizka'),
(1108, 'Yolanda', '1999-09-20', 'SMAN 3 MAlang', 'Malang', 'Yolanda@gmail.com', 114567, 2, 'Yolanda', 'Yolanda'),
(1109, 'Citra', '1999-08-30', 'SMAN 4 Batu', 'Batu', 'Citra@gmail.com', 110900, 3, 'Citra', 'Citra'),
(1110, 'Shofia', '1999-01-14', 'SMAN 4 Jakarta', 'Jakarta', 'Shofia@gmail.com', 113782, 2, 'Shofia', 'Shofia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
