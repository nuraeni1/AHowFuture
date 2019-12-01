-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 12:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `send_to` int(5) NOT NULL,
  `send_by` int(3) NOT NULL,
  `message` tinytext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grup_bimbel`
--

CREATE TABLE `grup_bimbel` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup_bimbel`
--

INSERT INTO `grup_bimbel` (`id_grup`, `nama_grup`) VALUES
(1, 'SAINTEK'),
(2, 'SOSHUM'),
(3, 'CAMPURAN');

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
-- Table structure for table `tbl_pengajar`
--

CREATE TABLE `tbl_pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama_pengajar` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `username_pengajar` varchar(60) NOT NULL,
  `password_pengajar` varchar(60) NOT NULL,
  `id_grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengajar`
--

INSERT INTO `tbl_pengajar` (`id_pengajar`, `nama_pengajar`, `alamat`, `username_pengajar`, `password_pengajar`, `id_grup`) VALUES
(1704, 'roni', 'jl mayjend sungkono 14c', 'roni', 'roni', 2),
(1704, 'roni', 'jl mayjend sungkono 14c', 'roni', 'roni', 2);

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
(1102, 'Rere', '2019-11-11', 'SMAN 1 Solo', 'Solo', 'Rere@gmail.com', 123677, 1, 'Rere', 'rere');

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_universitas` int(11) NOT NULL,
  `nama_universitas` varchar(60) NOT NULL,
  `total_prodi` int(11) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id_universitas`, `nama_universitas`, `total_prodi`, `alamat`, `deskripsi`) VALUES
(1, 'Universitas Trunojoyo Madura', 24, 'JL Telang Indah', 'Terakreditasi Baik  Sekali'),
(4, 'Universitas Airlangga', 28, 'JL Sudirman', 'Terakreditasi Baik Sekali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `sent_to` (`send_to`),
  ADD KEY `send_by` (`send_by`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grup_bimbel`
--
ALTER TABLE `grup_bimbel`
  ADD PRIMARY KEY (`id_grup`);

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
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id_universitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grup_bimbel`
--
ALTER TABLE `grup_bimbel`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1103;

--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_universitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`send_by`) REFERENCES `tbl_siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
