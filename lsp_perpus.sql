-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 05:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_perpus`
--

-- --------------------------------------------------------
DROP TABLE IF EXISTS `data_buku`;
--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id_buku` int(5) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `tahun_buku` varchar(4) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id_buku`, `judul_buku`, `penulis_buku`, `tahun_buku`) VALUES
(45634, 'Percy Jackson and The Olympians The Lightning Thief ', 'Rick Riordan', '2005'),
(89574, 'Percy Jackson and The Olympians The Sea of Monsters', 'Rick Riordan', '2005'),
(29183, 'Tsukuru Tazaki Tanpa Warna', 'Haruki Murakami', '2018');

-- --------------------------------------------------------

DROP TABLE IF EXISTS `data_petugas`;
--
-- Table structure for table `data_petugas`
--

CREATE TABLE `data_petugas` (
  `id_petugas` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `nik_petugas` varchar(16) NOT NULL,
  `jabatan_petugas` varchar(20) NOT NULL,
  `alamat_petugas` varchar(70) NOT NULL,
  `no_telp_petugas` varchar(13) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_petugas`
--

INSERT INTO `data_petugas` (`id_petugas`, `username`, `password`,`nama_petugas`, `nik_petugas`, `jabatan_petugas`, `alamat_petugas`, `no_telp_petugas`) VALUES
(35832, 'admin', 'admin','admin','3217583980000005','admin','jl.jalan',08345122287);

-- --------------------------------------------------------
DROP TABLE IF EXISTS `data_anggota`;
--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id_anggota` int(5) NOT NULL,
  `nik_anggota` varchar(16) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat_anggota` varchar(70) NOT NULL,
  `no_telp_anggota` varchar(13) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id_anggota`, `nik_anggota`, `nama_anggota`, `alamat_anggota`, `no_telp_anggota`) VALUES
(39283, '3217583980000005', 'Rick Riordan', 'jl.jalan', '08345122287');

-- --------------------------------------------------------


--
-- Indexes for dumped tables
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--

-- --------------------------------------------------------
DROP TABLE IF EXISTS `data_transaksi`;
--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--  FOREIGN KEY (`id_buku`) REFERENCES data_buku(`id_buku`),
--  FOREIGN KEY (`id_anggota`) REFERENCES data_anggota(`id_anggota`)
-- --------------------------------------------------------


--
-- AUTO_INCREMENT for table `data_transaksi`
--
--ALTER TABLE `data_transaksi`
 -- MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
