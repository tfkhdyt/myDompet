-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Agu 2021 pada 07.31
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15231238_mydompet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dompet`
--

CREATE TABLE `dompet` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `saldo` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `outcome` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dompet`
--

INSERT INTO `dompet` (`id`, `tanggal`, `saldo`, `income`, `outcome`, `user_id`) VALUES
(25, '2020-10-25 07:25:00', 68000, 68000, 0, 1),
(26, '2020-10-26 07:25:00', 61000, 5000, 12000, 1),
(27, '2020-10-27 07:25:00', 61000, 2000, 2000, 1),
(28, '2020-10-28 08:51:00', 1000000, 1000000, 0, 2),
(32, '2020-10-28 09:55:00', 1, 1, 0, 6),
(37, '2020-10-28 10:13:00', 600000, 600000, 0, 7),
(38, '2020-10-28 10:14:00', 530000, 0, 70000, 7),
(39, '2020-10-28 10:23:00', 200000, 200000, 0, 8),
(40, '2020-10-28 10:24:00', 300000, 100000, 0, 8),
(41, '2020-10-28 10:24:00', 250000, 0, 50000, 8),
(42, '2020-10-28 10:26:00', 850000, 600000, 0, 8),
(43, '2020-10-28 10:27:00', 1350000, 600000, 100000, 8),
(44, '2020-10-28 11:01:00', 40000, 50000, 10000, 9),
(46, '2020-10-28 11:17:00', 8, 5, 1, 10),
(47, '2020-10-28 11:53:00', 220000, 250000, 30000, 12),
(48, '2020-10-28 17:48:00', 0, 1000000000, 1000000000, 13),
(50, '2020-10-28 18:43:00', 49000, 0, 12000, 1),
(51, '2020-10-29 17:36:00', 54000, 5000, 0, 1),
(52, '2020-10-29 19:16:00', 2400000, 2400000, 0, 16),
(53, '2020-10-29 19:17:00', 2389000, 1000, 12000, 16),
(55, '2020-10-31 13:36:00', 42000, 0, 12000, 1),
(59, '2020-11-02 09:16:00', 57000, 15000, 0, 1),
(60, '2020-11-02 09:38:00', 69000, 14000, 2000, 1),
(61, '2020-11-03 09:35:00', 17000, 0, 52000, 1),
(62, '2020-11-03 20:44:00', 27000, 10000, 0, 1),
(63, '2020-11-05 13:38:00', 32000, 5000, 0, 1),
(64, '2020-11-06 09:45:00', 50000, 20000, 2000, 1),
(65, '2020-11-06 12:23:00', 35000, 0, 15000, 1),
(66, '2020-11-06 15:24:00', 33000, 0, 2000, 1),
(67, '2020-11-06 20:29:00', 39000, 6000, 0, 1),
(68, '2020-11-08 20:56:00', 47000, 8000, 0, 1),
(69, '2020-11-09 14:01:00', 52000, 5000, 0, 1),
(70, '2020-11-10 12:31:00', 54000, 14000, 12000, 1),
(71, '2020-11-10 12:32:00', 52000, 0, 2000, 1),
(72, '2020-11-10 16:58:00', 46000, 0, 6000, 1),
(73, '2020-11-11 14:47:00', 51000, 5000, 0, 1),
(74, '2020-11-13 13:18:00', 63000, 24000, 12000, 1),
(76, '2020-11-13 13:19:00', 61000, 0, 2000, 1),
(77, '2020-11-14 04:26:00', 113500, 52500, 0, 1),
(78, '2020-11-14 04:28:00', 118500, 5000, 0, 1),
(79, '2020-11-14 04:29:00', 63000, 0, 55500, 1),
(80, '2020-11-14 04:30:00', 59000, 0, 4000, 1),
(81, '2020-11-15 04:27:00', 74000, 15000, 0, 1),
(82, '2020-11-16 18:30:00', 62000, 0, 12000, 1),
(83, '2020-11-17 15:40:00', 57500, 0, 4500, 1),
(84, '2020-12-01 08:41:00', 68000, 10500, 0, 1),
(85, '2020-12-01 19:06:00', 61000, 5000, 12000, 1),
(86, '2020-12-02 09:32:00', 73000, 12000, 0, 1),
(87, '2020-12-04 05:28:00', 78000, 5000, 0, 1),
(88, '2020-12-04 05:29:00', 66000, 0, 12000, 1),
(89, '2020-12-06 17:57:00', 41000, 0, 25000, 1),
(90, '2020-12-09 08:41:00', 29000, 0, 12000, 1),
(91, '2020-12-09 08:42:00', 32000, 3000, 0, 1),
(92, '2021-01-02 18:36:00', 0, 0, 32000, 1),
(93, '2021-01-04 18:37:00', 0, 10000, 10000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user` varchar(12) NOT NULL,
  `pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user`, `pass`) VALUES
(1, 'tfkhdyt', 'tafanizer14'),
(2, 'second', 'second'),
(5, 'peler', 'peler'),
(6, 'fauzi', 'fauzi'),
(7, 'morfuz', 'lahngatur'),
(8, 'RevDonz', 'kintil842'),
(9, 'Iis', 'iis'),
(10, 'a', 'a'),
(12, 'Awokwkwkkwkk', '666'),
(13, 'Muhamad', '12345'),
(14, 'wkwkwk', 'wkwkwk'),
(15, 'spasi', 'spasi'),
(16, 'test', 'test'),
(17, 'ksm024', 'ksm024');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dompet`
--
ALTER TABLE `dompet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dompet`
--
ALTER TABLE `dompet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
