-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2023 pada 07.51
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
-- Struktur dari tabel `trasaction`
--

CREATE TABLE `trasaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `coa_kode` varchar(244) NOT NULL,
  `coa_nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `debit` bigint(11) NOT NULL,
  `kredit` bigint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `trasaction`
--

INSERT INTO `trasaction` (`id`, `tanggal`, `coa_kode`, `coa_nama`, `deskripsi`, `debit`, `kredit`, `created_at`, `updated_at`) VALUES
(7, '2022-01-01', '401', 'Gaji Karyawan', 'Gaji Di Perusahaan A', 0, 5000000, '2023-08-01 17:02:58', '2023-08-01 17:02:58'),
(8, '2022-02-01', '401', 'Gaji Ketua MPR', 'Gaji Ketum', 0, 7000000, '2023-08-01 17:03:50', '2023-08-01 17:03:50'),
(9, '2022-10-01', '401', 'Gaji Karyawan', 'Bensin Anak', 25000, 0, '2023-08-01 17:04:23', '2023-08-01 17:05:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `trasaction`
--
ALTER TABLE `trasaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `trasaction`
--
ALTER TABLE `trasaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
