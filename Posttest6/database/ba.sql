-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2023 pada 16.23
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_ba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ba`
--

CREATE TABLE `ba` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `rarity` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `weapon_type` varchar(255) NOT NULL,
  `armor_type` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ba`
--

INSERT INTO `ba` (`id`, `nama`, `school`, `rarity`, `role`, `weapon_type`, `armor_type`, `image_name`) VALUES
(12, 'Arona', 'Schale', 'ISTRI KU', 'AI', 'PAYUNG', 'BIRU', 'aroan2.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ba`
--
ALTER TABLE `ba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ba`
--
ALTER TABLE `ba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
