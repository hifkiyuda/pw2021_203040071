-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2021 pada 02.52
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
(1, 'tenet.jpg', 'Tenet', 'John David Washington, Robert Pattinson, Elizabeth Debicki', 'Action, Adventure', '7,5', 'Rp 289.000'),
(2, 'shawshank.jpg', 'The Shawshank Redemption', 'Tim Robbins, Morgan Freeman, Bob Gunton', 'Drama', '9,3', 'Rp 216.000'),
(3, 'mitty.jpg', 'The Secret Life of Walter Mitty', 'Ben Stiller, Kristen Wiig, Shirley MacLaine', 'Comedy, Drama, Action', '7,3', 'Rp 216.000'),
(4, '1917.jpg', '1917', 'George MacKay, Dean-Charles Chapman, Mark Strong', 'Drama, Suspense', '8,3', 'Rp 144.000'),
(5, 'pride.jpg', 'Pride & Prejudice', 'Keira Knightley, Talulah Riley, Rosamund Pike', 'Drama, Romance', '7,8', 'Rp 144.000'),
(6, 'wallflower.jpg', 'The Perks of Being a Wallflower', 'Logan Lerman, Emma Watson, Ezra Miller', 'Drama, Romance', '8,0', 'Rp 144.000'),
(7, 'joker.jpg', 'Joker', 'Joaquin Phoenix, Robert De Niro, Zazie Beetz', 'Drama, Suspense', '8,4', 'Rp 144.000'),
(8, 'parasite.jpg', 'Parasite', 'Kang Ho Song, Sun Kyun Lee, Yeo Jeong Cho', 'Drama, Suspense', '8,6', 'Rp 217.000'),
(9, 'midsommar.jpg', 'Midsommar', 'Florence Pugh, Jack Reynor, Will Poulter', 'Horror, Suspense', '7,1', 'Rp 144.000'),
(10, 'endgame.jpg', 'Avengers: Endgame', 'Robert Downey Jr., Chris Evans, Mark Ruffalo', 'Action, Adventure, Science Fiction', '8,4', 'Rp 289.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
