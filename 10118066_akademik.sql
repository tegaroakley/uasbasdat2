-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 11:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10118066_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` char(8) NOT NULL,
  `nama_dosen` varchar(35) NOT NULL,
  `nama_kul` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `alamat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `nama_kul`, `jenis_kelamin`, `tgl_lahir`, `alamat`) VALUES
('12345678', 'Agus Awaludin', 'Algoritma dan Pemograman', 'Laki-laki', '2000-08-25', 'Ujung Berung'),
('87654321', 'Om', 'Web Dasar', 'Laki-laki', '1945-08-17', 'cimahi');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `nama_kul` varchar(30) NOT NULL,
  `nama_dosen` varchar(35) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `tempat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`nama_kul`, `nama_dosen`, `waktu`, `tempat`) VALUES
('Algoritma dan Pemograman', 'Agus Awaludin', 'Senin, 10.00-12.00', 'R5406'),
('Web Dasar', 'Om', 'Rabu, 13.00-14.30', 'Lab-7');

-- --------------------------------------------------------

--
-- Table structure for table `kuliah`
--

CREATE TABLE `kuliah` (
  `nama_kul` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuliah`
--

INSERT INTO `kuliah` (`nama_kul`, `sks`, `semester`) VALUES
('Algoritma dan Pemograman', 4, 1),
('Web Dasar', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(8) NOT NULL,
  `nama_mhs` varchar(35) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `tgl_lahir`, `jenis_kelamin`, `alamat`) VALUES
('10118066', 'Tegar Oakley', '2000-12-21', 'Laki-Laki', 'Jl Jatiluhur 06'),
('51918108', 'aaaa', '1111-11-11', 'Perempuan', 'Jl Jatiluhur 07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nama_dosen` (`nama_dosen`),
  ADD UNIQUE KEY `nama_kul` (`nama_kul`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD UNIQUE KEY `nama_kul` (`nama_kul`),
  ADD UNIQUE KEY `nama_dosen` (`nama_dosen`);

--
-- Indexes for table `kuliah`
--
ALTER TABLE `kuliah`
  ADD UNIQUE KEY `nama_kul` (`nama_kul`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nama_mhs` (`nama_mhs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`nama_kul`) REFERENCES `kuliah` (`nama_kul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`nama_kul`) REFERENCES `kuliah` (`nama_kul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`nama_dosen`) REFERENCES `dosen` (`nama_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
