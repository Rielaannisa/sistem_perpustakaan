-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 10:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin@gmail.com', 'admin123', 'adminn');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `nim`, `alamat`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'namaaa000', 123, 'Pekanbaru', 'nama@gmail', '123456', 0, 0, 0),
(2, 'as', 123, '123', '123', '123456', 0, 0, 0),
(3, 'as', 123, '123', '123', '123456', 0, 0, 0),
(5, 'as', 3231, '3231', '3231', '123456', 0, 0, 0),
(6, 'riela', 888, 'pekanbaru', 'reila@gmail', '123456', 0, 0, 0),
(7, 'riela', 335, 'rere', 'tyru', '123456', 0, 0, 0),
(12, 'RielaMeiva', 1234, 'pku', 'riela.meiva19@gmail.com', '$2y$10$Z3h/3M0.OynCFqELqj.U0u1az/dpstHoyfr0P7UyPsZ.sGdC.9gDG', 2, 1, 1622525935),
(13, 'Rielaa', 1234, 'Pku', 'rielaannisa@gmail.com', '$2y$10$rXE2b33rcdWfYsIQ//OGROJ8XuD7Q3scV5kv5s..GdFzC0GXCYIdy', 1, 1, 1622529072),
(14, 'RielaMeivaaa', 3231, 'pku', 'rielaannisaa@gmail.com', '$2y$10$b0EV3y5v/FLtJaw8c7lKuejSMwovlyXkYW.XqnM6DtAlrv9RQIGx2', 1, 1, 1625664457),
(15, 'nama2', 1234, 'asadda', '1234', '', 0, 0, 0),
(16, 'nama', 0, '', 'asdasd@gmail.com', '1234', 2, 1, 1627199363);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `isbn` int(20) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `status` enum('tersedia','tidak_tersedia') NOT NULL,
  `jumlah_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `isbn`, `penerbit`, `pdf`, `status`, `jumlah_buku`) VALUES
(2, 'judulwe', 'pengarang1rrt', 12343, 'penerbit145', 'encryption4.png', 'tersedia', 12),
(4, 'Bumi', 'Tere Liye', 121312, 'Gramedia', 'Tere_Liye_-_Bumi.pdf', 'tersedia', 0),
(5, 'Aisyah RA', 'Sibel Eraslan', 434234, 'Keysya Media', 'Aisyah_RA.pdf', 'tersedia', 5),
(7, 'Glen Anggara', 'Luluk HF', 65464, 'Aibook', 'dlscrib_com-pdf-glen-anggarapdf-dl_d657f325eb55895f2e1d1a222adff407.pdf', 'tersedia', 14),
(8, 'judul2', 'fafsd', 6767, 'dwrw', 'signed_1625645299-60e560f341ffd-SuratEdaranpembayaranUKTgasal2021-2022fix.pdf', 'tersedia', 12);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_pinjam` enum('peminjaman','pengembalian') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_anggota`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status_pinjam`) VALUES
(5, 3, 2, '2021-04-20', '2021-05-01', ''),
(6, 2, 5, '2021-04-30', '2021-05-08', ''),
(7, 12, 4, '2021-06-04', '2021-06-04', ''),
(8, 12, 5, '2021-06-24', '2021-06-24', 'pengembalian'),
(25, 12, 5, '2021-08-04', '2021-08-04', 'pengembalian'),
(26, 12, 5, '2021-07-25', '2021-12-02', 'peminjaman'),
(27, 12, 8, '2021-08-05', '2021-08-05', 'pengembalian'),
(28, 12, 5, '2021-08-02', '2021-08-05', 'peminjaman');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
