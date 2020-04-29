-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2020 pada 10.30
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040181`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nrp` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Busro', '193040148', 'busro@gmail.com', 'Teknik Informatika', 'busro.png'),
(2, 'Rifqi', '193040149', 'rifqi@gmail.com', 'Teknik Informatika', 'rifqi.jpg'),
(3, 'Ferdi', '193040150', 'ferdi@gmail.com', 'Teknik Informatika', 'ferdi.png'),
(4, 'Rizan', '193040151', 'rizan@gmail.com', 'Teknik Informatika', 'rizan.jpg'),
(5, 'Elti', '193040153', 'elti@gmail.com', 'Teknik Informatika', 'elti.jpg'),
(6, 'Ivan', '193040154', 'ivan@gmail.com', 'Teknik Informatika', 'ivan.jpg'),
(7, 'Syauqi', '193040155', 'syauqi@gmail.com', 'Teknik Informatika', 'syauqi.png'),
(8, 'Putry', '193040156', 'putry@gmail.com', 'Teknik Informatika', 'putry.jpg'),
(9, 'Alief', '193040157', 'alief@gmail.com', 'Teknik Informatika', 'alief.png'),
(10, 'Fajri', '193040158', 'fajri@gmail.com', 'Teknik Informatika', 'fajri.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
