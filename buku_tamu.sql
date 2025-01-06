-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 01 Okt 2024 pada 00.45
-- Versi server: 8.3.0
-- Versi PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

DROP TABLE IF EXISTS `kunjungan`;
CREATE TABLE IF NOT EXISTS `kunjungan` (
  `id` int NOT NULL,
  `lab` varchar(50) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `instansi` varchar(200) NOT NULL,
  `masuk` time NOT NULL,
  `keluar` time NOT NULL,
  `kegiatan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `lab`, `tanggal_pesan`, `nama_lengkap`, `instansi`, `masuk`, `keluar`, `kegiatan`) VALUES
(1, 'De Morgan', '2024-10-03', 'Rio Anindita Pratama', 'Lab FTI', '08:00:00', '10:00:00', '<p>Konsultasi</p>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
