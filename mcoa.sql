-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2023 pada 07.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiketux`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mcoa`
--

CREATE TABLE `mcoa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mcoa`
--

INSERT INTO `mcoa` (`id`, `kode`, `nama`, `kategori`, `created_at`, `updated_at`) VALUES
(19, '401', 'Gaji Karyawan', 'Salary', '2023-08-01 16:55:08', '2023-08-01 17:02:16'),
(20, '402', 'Gaji Ketua MPR', 'Salary', '2023-08-01 16:55:40', '2023-08-01 16:55:40'),
(21, '403', 'Profit Trading', 'Other Income', '2023-08-01 16:55:56', '2023-08-01 16:55:56'),
(22, '601', 'Biaya Sekolah', 'Family Expense', '2023-08-01 16:56:12', '2023-08-01 16:56:12'),
(23, '602', 'Bensin', 'Transport Expense', '2023-08-01 16:56:27', '2023-08-01 16:56:27'),
(24, '603', 'Parkir', 'Transport Expense', '2023-08-01 16:56:51', '2023-08-01 16:56:51'),
(25, '604', 'Makan Siang', 'Meal Expense', '2023-08-01 16:57:07', '2023-08-01 16:57:07'),
(26, '605', 'Makanan Pokok Bulanan', 'Meal Expense', '2023-08-01 16:57:29', '2023-08-01 16:57:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mcoa`
--
ALTER TABLE `mcoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mcoa`
--
ALTER TABLE `mcoa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
