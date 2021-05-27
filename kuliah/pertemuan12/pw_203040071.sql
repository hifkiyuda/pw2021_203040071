-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 13.35
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040071`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `transmisi` varchar(50) NOT NULL,
  `bahanbakar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `gambar`, `nama`, `harga`, `transmisi`, `bahanbakar`) VALUES
(1, 'innova.jpeg', 'Toyota Kijang Innova', 'Rp 337,6 juta', 'manual', 'bensin'),
(2, 'brio.jpeg', 'Honda Brio', 'Rp 149 juta', 'manual', 'bensin'),
(3, 'cr-v.jpeg', 'Honda CR-V', 'Rp 489 juta', 'otomatis', 'bensin'),
(4, 'pajero.jpeg', 'Mitsubishi Pajero Sport', 'Rp 733,7 juta', 'otomatis', 'solar'),
(5, 'wrangler.jpeg', 'Jeep Wrangler', 'Rp 1,78 milyar', 'manual', 'bensin'),
(6, 'hilux.jpeg', 'Toyota Hilux', 'Rp 497,65 juta', 'otomatis', 'solar'),
(7, 'yaris.jpeg', 'Toyota Yaris', 'Rp 266,25 juta', 'manual', 'bensin'),
(8, 'jimny.jpeg', 'Suzuki Jimny', 'Rp 382,5 juta', 'manual', 'bensin'),
(9, 'bmw6.jpeg', 'BMW 6 Series', 'Rp 1,81 milyar', 'otomatis', 'bensin'),
(10, 'vellfire.jpeg', 'Toyota Vellfire', 'Rp 1,19 milyar', 'otomatis', 'bensin');

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
(3, 'pw', '$2y$10$WLLXc22JV3YoIR3RteyBq.PXb2Q26vmfPzkc/CwR37amT6W5oBLfq'),
(4, 'admin', '$2y$10$sw/uKpmHupuIpPODG3F0x.YGINmGAEJ4sWNtooCCfliedmKj24zyy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
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
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
