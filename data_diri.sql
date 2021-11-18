-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 14 Okt 2021 pada 08.46
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idolaqu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_diri`
--

CREATE TABLE `data_diri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama`, `alasan`, `created_at`, `updated_at`) VALUES
(1, 'Lana Saiful Aqil', 'Idola pertama saya adalah saya sendiri, karena selflove itu penting :)', NULL, NULL),
(2, 'Ibu', 'Karena Ibu adalah Ibuku', NULL, NULL),
(3, 'Ayah', 'Karena Ayah adalah Ayahku', NULL, NULL),
(4, 'Kakak', 'Karena Kakak adalah Kakakku', NULL, NULL),
(5, 'Idolaku', 'Karena Idolaku adalah Idolaku', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
