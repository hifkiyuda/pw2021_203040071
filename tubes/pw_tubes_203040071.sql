-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 10.30
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
-- Database: `pw_tubes_203040071`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `poster` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `cast` varchar(75) NOT NULL,
  `genre` varchar(75) NOT NULL,
  `rating` varchar(15) NOT NULL,
  `harga` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `movies`
--

INSERT INTO `movies` (`id`, `poster`, `judul`, `cast`, `genre`, `rating`, `harga`) VALUES
(1, 'tenet.jpg', 'TENET', 'John David Washington, Robert Pattinson, Elizabeth Debicki', 'Action, Adventure', '7,5', 'Rp 289.000'),
(2, 'shawshank.jpg', 'The Shawshank Redemption', 'Tim Robbins, Morgan Freeman, Bob Gunton', 'Drama', '9,3', 'Rp 216.000'),
(3, 'mitty.jpg', 'The Secret Life of Walter Mitty', 'Ben Stiller, Kristen Wiig, Shirley MacLaine', 'Comedy, Drama, Action', '7,3', 'Rp 216.000'),
(5, 'pride.jpg', 'Pride & Prejudice', 'Keira Knightley, Talulah Riley, Rosamund Pike', 'Drama, Romance', '7,8', 'Rp 144.000'),
(6, 'wallflower.jpg', 'The Perks of Being a Wallflower', 'Logan Lerman, Emma Watson, Ezra Miller', 'Drama, Romance', '8,0', 'Rp 144.000'),
(7, 'joker.jpg', 'Joker', 'Joaquin Phoenix, Robert De Niro, Zazie Beetz', 'Drama, Suspense', '8,4', 'Rp 144.000'),
(8, 'parasite.jpg', 'Parasite', 'Kang Ho Song, Sun Kyun Lee, Yeo Jeong Cho', 'Drama, Suspense', '8,6', 'Rp 217.000'),
(9, 'midsommar.jpg', 'Midsommar', 'Florence Pugh, Jack Reynor, Will Poulter', 'Horror, Suspense', '7,1', 'Rp 144.000'),
(30, 'boyhood.jpg', 'Boyhood', 'Patricia Arquette, Ellar Coltrane, Lorelei Linklater', 'Drama', '7,9', 'Rp 102.000'),
(35, 'endgame.jpg', 'Avengers: Endgame', 'Robert Downey Jr., Chris Evans, Mark Ruffalo', 'Science Fiction, Adventure, Action', '8,4', 'Rp 300.000'),
(36, 'nysm.jpg', 'Now You See Me', 'Jesse Eisenberg, Mark Ruffalo, Woody Harrelson', 'Drama, Suspense', '7,3', 'Rp 75.000'),
(61, 'lalaland.jpg', 'La La Land', 'Ryan Gosling, Emma Stone, John Legend', '8,0', 'Drama, Music', 'Rp 105.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'unpas', '$2y$10$aWVQjOpnzXJtMab/23IQgu1v7CSPN2UCgpc5nV56/Pkj46WOXwyzK'),
(9, 'hifki', '$2y$10$/XLa9ffZPJpnvzdDXKUQyOCOmq6yaGGMRn1X9tSK/ktPRLlVsvniS'),
(10, 'admin', '$2y$10$OBjcHsdMU1IbHKjUApDp3.Vlo9m.llwqz65Rrm4aFNVH70BoQg8n.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `movies`
--
ALTER TABLE `movies`
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
-- AUTO_INCREMENT untuk tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
