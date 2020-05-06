-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 19.40
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
-- Database: `tubes_193040181`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id`, `nama`, `kategori`, `merek`, `harga`, `gambar`) VALUES
(2, 'OPPO Reno3', 'Handphone', 'OPPO', 5499000, 'reno3.jpg'),
(3, 'Samsung Galaxy S20', 'Handphone', 'Samsung', 12999000, 's20.jpg'),
(4, 'Samsung Galaxy Note 10 Lite', 'Handphone', 'Samsung', 8199000, 'Note10.jpg'),
(5, 'Samsung Galaxy Watch Active 2', 'Smartwatch', 'Samsung', 5299000, 'A2.jpg'),
(6, 'Samsung Buds', 'Earphone', 'Samsung', 1899000, 'B2.jpg'),
(7, 'Samsung Monitor LED 27 inch', 'Monitor', 'Samsung', 2999000, 'M22.jpg'),
(8, 'Samsung Mesin Cuci Top Loading', 'Washers', 'Samsung', 3099000, 'MC.jpg'),
(9, 'Samsung FHD Smart TV', 'Television', 'Samsung', 5599000, 'ST.jpg'),
(10, 'Samsung Galaxy Tab S6', 'Tablet', 'Samsung', 11999000, 'S6.jpg'),
(12, 'OPPO A91', 'Handphone', 'OPPO', 3699000, 'A91.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$VfxVsQCrmiwNZjPaeIbFnOS6X.nCLn0NGs0TZiU6kMA0vadXhzPEC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
