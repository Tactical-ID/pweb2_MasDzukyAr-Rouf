-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 01:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int NOT NULL,
  `tgl_gabung` date NOT NULL,
  `no_ktp` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat`, `no_hp`, `tgl_gabung`, `no_ktp`) VALUES
(1, 'Agus', 'kembangsari', 11111, '2023-11-01', 131455672),
(8, 'sdadsds', 'dasdsada', 213323, '2023-11-09', 321),
(15, 'satir', 'karangbawang', 132421432, '2023-11-27', 98765432);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pinjaman` int NOT NULL,
  `id_anggota` int DEFAULT NULL,
  `tgl_jatuh_tempo` date DEFAULT NULL,
  `jumlah_pinjaman` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pinjaman`, `id_anggota`, `tgl_jatuh_tempo`, `jumlah_pinjaman`) VALUES
(2, 1, '2023-11-06', 1234),
(4, 1, '2023-12-12', 100000),
(5, 15, '2023-12-19', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `no_hp` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `jabatan`, `no_hp`) VALUES
(1, 'tirko', 'ketua', 987654321),
(6, 'bagor', 'Karyawan', 12345678),
(7, 'jafar', 'wakil', 80808080);

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int NOT NULL,
  `id_anggota` int DEFAULT NULL,
  `tgl_pinjaman` date DEFAULT NULL,
  `tgl_jatuh_tempo` date DEFAULT NULL,
  `jumlah_pinjaman` bigint DEFAULT NULL,
  `bunga` int DEFAULT NULL,
  `angsuran` bigint DEFAULT NULL,
  `lama_angsuran` int DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `id_anggota`, `tgl_pinjaman`, `tgl_jatuh_tempo`, `jumlah_pinjaman`, `bunga`, `angsuran`, `lama_angsuran`, `status`) VALUES
(1, 1, '2023-11-01', '2024-11-01', 2000000, 5, 175000, 12, 'belum lunas');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `id_anggota` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`username`, `password`, `role`, `id_anggota`) VALUES
('admin123', '12345', 'admin', NULL),
('anggota123', '12345', 'anggota', NULL),
('agus', '12345', 'anggota', 1),
('satir', '12345', 'anggota', 15);

-- --------------------------------------------------------

--
-- Table structure for table `shu`
--

CREATE TABLE `shu` (
  `id_shu` int NOT NULL,
  `id_anggota` int DEFAULT NULL,
  `id_simpanan` int DEFAULT NULL,
  `id_pinjaman` int DEFAULT NULL,
  `bunga` int DEFAULT NULL,
  `nominal_shu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shu`
--

INSERT INTO `shu` (`id_shu`, `id_anggota`, `id_simpanan`, `id_pinjaman`, `bunga`, `nominal_shu`) VALUES
(1, 1, 1, 1, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int NOT NULL,
  `id_anggota` int DEFAULT NULL,
  `tgl_simpanan` date DEFAULT NULL,
  `jumlah_simpanan` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `id_anggota`, `tgl_simpanan`, `jumlah_simpanan`) VALUES
(1, 1, '2023-11-01', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `id_anggota` int DEFAULT NULL,
  `id_petugas` int DEFAULT NULL,
  `nominal` bigint DEFAULT NULL,
  `kwitansi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tipe_bayar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_anggota`, `id_petugas`, `nominal`, `kwitansi`, `tipe_bayar`) VALUES
(15, 1, NULL, 80000000, 'download.png', 'pinjaman'),
(23, 1, NULL, 10000000, 'dwon.jpg', 'pinjaman'),
(24, 1, NULL, 1000000, 'dwon.jpg', 'pinjaman'),
(25, 15, NULL, 1000000, 'dwon.jpg', 'pinjaman'),
(26, 15, NULL, 1000000, 'dwon.jpg', 'simpanan'),
(27, 15, NULL, 999999, 'dwon.jpg', 'pinjaman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD KEY `fk_anggota_role` (`id_anggota`);

--
-- Indexes for table `shu`
--
ALTER TABLE `shu`
  ADD PRIMARY KEY (`id_shu`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_simpanan` (`id_simpanan`),
  ADD KEY `id_pinjaman` (`id_pinjaman`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pinjaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shu`
--
ALTER TABLE `shu`
  MODIFY `id_shu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `fk_anggota_role` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Constraints for table `shu`
--
ALTER TABLE `shu`
  ADD CONSTRAINT `shu_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `shu_ibfk_2` FOREIGN KEY (`id_simpanan`) REFERENCES `simpanan` (`id_simpanan`),
  ADD CONSTRAINT `shu_ibfk_3` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`);

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
