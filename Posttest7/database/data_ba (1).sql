-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2023 pada 11.46
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
(16, 'Shun (Little)', 'Shinjuku', '3 Star', 'Back', 'Explosion', 'Red', 'PC_26.png'),
(17, 'Arona', 'Schale', 'none', 'Artificial Inteligance', 'none', 'none', 'plana.jpg'),
(18, 'Kasumizawa Miyu', 'SRT', '3 Star', 'back', 'Explosion', 'Red', '4.png'),
(19, 'Okusora Ayane', 'Abydos', '2 Star', 'Medic', 'Explosion', 'Yellow', '34.png'),
(21, 'HIFUMI AJITANI', 'TRINITY', '3 STAR', 'MIDDLE', 'PIERCING', 'YELLOW', 'm_31_aos-removebg-preview.png'),
(22, 'Ajitani', 's', 's', 's', 's', 's', 'kucing.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'asd', '$2y$10$1uXBzqmS0rjDOxHebZRvcedA6lybMlmt7OJg61.CpjIbC7hYrvKEq'),
(2, 'are', '$2y$10$ALYkNsZAiV3JNyeCK8DoIO80dDkI3x0vuBdlHH8WhqRLe0q0fws2e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ba`
--
ALTER TABLE `ba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ba`
--
ALTER TABLE `ba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
