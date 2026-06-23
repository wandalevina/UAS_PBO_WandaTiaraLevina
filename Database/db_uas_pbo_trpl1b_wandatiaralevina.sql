-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2026 at 01:25 AM
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
-- Database: `db_uas_pbo_trpl1b_wandatiaralevina`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` int NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `hari_kerja_masuk` date NOT NULL,
  `gaji_dasar_per_hari` decimal(12,2) NOT NULL,
  `jenis_karyawan` enum('Kontrak','Tetap','Magang') NOT NULL,
  `durasi_kontrak_bulan` int DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(12,2) DEFAULT NULL,
  `opsi_saham_id` varchar(50) DEFAULT NULL,
  `uang_saku_bulanan` decimal(12,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
(1, 'Andi Saputra', 'IT', '2024-01-15', '250000.00', 'Kontrak', 12, 'PT Maju Jaya', NULL, NULL, NULL, NULL),
(2, 'Budi Hartono', 'Keuangan', '2024-02-01', '230000.00', 'Kontrak', 24, 'PT Sumber Daya', NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', 'HRD', '2024-03-10', '220000.00', 'Kontrak', 18, 'PT Talenta Indonesia', NULL, NULL, NULL, NULL),
(4, 'Dedi Kurniawan', 'Operasional', '2024-04-05', '240000.00', 'Kontrak', 12, 'PT Maju Jaya', NULL, NULL, NULL, NULL),
(5, 'Eka Pratama', 'Marketing', '2024-05-12', '235000.00', 'Kontrak', 6, 'PT Global Rekrutmen', NULL, NULL, NULL, NULL),
(6, 'Fitri Ayu', 'IT', '2024-06-20', '260000.00', 'Kontrak', 12, 'PT Talenta Indonesia', NULL, NULL, NULL, NULL),
(7, 'Gilang Ramadhan', 'Logistik', '2024-07-01', '225000.00', 'Kontrak', 24, 'PT Sumber Daya', NULL, NULL, NULL, NULL),
(8, 'Hana Wijaya', 'IT', '2021-01-10', '400000.00', 'Tetap', NULL, NULL, '1500000.00', 'OS001', NULL, NULL),
(9, 'Indra Gunawan', 'Keuangan', '2020-03-15', '420000.00', 'Tetap', NULL, NULL, '1700000.00', 'OS002', NULL, NULL),
(10, 'Joko Susanto', 'Operasional', '2019-07-20', '390000.00', 'Tetap', NULL, NULL, '1400000.00', 'OS003', NULL, NULL),
(11, 'Kartika Dewi', 'HRD', '2022-02-18', '410000.00', 'Tetap', NULL, NULL, '1600000.00', 'OS004', NULL, NULL),
(12, 'Lukman Hakim', 'Marketing', '2021-09-25', '395000.00', 'Tetap', NULL, NULL, '1500000.00', 'OS005', NULL, NULL),
(13, 'Maya Sari', 'IT', '2020-11-11', '430000.00', 'Tetap', NULL, NULL, '1800000.00', 'OS006', NULL, NULL),
(14, 'Nanda Putri', 'Logistik', '2022-05-30', '385000.00', 'Tetap', NULL, NULL, '1450000.00', 'OS007', NULL, NULL),
(15, 'Olivia Maharani', 'IT', '2025-01-06', '100000.00', 'Magang', NULL, NULL, NULL, NULL, '1500000.00', 'Ya'),
(16, 'Pandu Firmansyah', 'Marketing', '2025-01-10', '100000.00', 'Magang', NULL, NULL, NULL, NULL, '1400000.00', 'Ya'),
(17, 'Qori Azzahra', 'HRD', '2025-02-01', '95000.00', 'Magang', NULL, NULL, NULL, NULL, '1300000.00', 'Ya'),
(18, 'Rizky Ananda', 'Keuangan', '2025-02-15', '100000.00', 'Magang', NULL, NULL, NULL, NULL, '1500000.00', 'Tidak'),
(19, 'Salsa Putri', 'Operasional', '2025-03-01', '105000.00', 'Magang', NULL, NULL, NULL, NULL, '1600000.00', 'Ya'),
(20, 'Teguh Prakoso', 'Logistik', '2025-03-10', '95000.00', 'Magang', NULL, NULL, NULL, NULL, '1400000.00', 'Tidak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
