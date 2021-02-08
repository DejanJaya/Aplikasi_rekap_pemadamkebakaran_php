-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2021 pada 12.06
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
-- Database: `aplikasi_fahmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebakaran`
--

CREATE TABLE `kebakaran` (
  `id` int(11) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `frek` varchar(30) NOT NULL,
  `i` varchar(30) NOT NULL,
  `ii` varchar(30) NOT NULL,
  `iii` varchar(30) NOT NULL,
  `iv` varchar(30) NOT NULL,
  `v` varchar(30) NOT NULL,
  `vi` varchar(30) NOT NULL,
  `vii` varchar(30) NOT NULL,
  `viii` varchar(30) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `bup` varchar(30) NOT NULL,
  `bi` varchar(30) NOT NULL,
  `kd` varchar(30) NOT NULL,
  `ln` varchar(30) NOT NULL,
  `kp` varchar(30) NOT NULL,
  `lp` varchar(30) NOT NULL,
  `ls` varchar(30) NOT NULL,
  `rk` varchar(30) NOT NULL,
  `ln2` varchar(30) NOT NULL,
  `jumlah_unit` varchar(30) NOT NULL,
  `jumlah_sdm` varchar(30) NOT NULL,
  `luka` varchar(30) NOT NULL,
  `tewas` varchar(30) NOT NULL,
  `luka_w` varchar(30) NOT NULL,
  `tewas_w` varchar(30) NOT NULL,
  `luas_area` varchar(30) NOT NULL,
  `bp2` varchar(30) NOT NULL,
  `bup2` varchar(30) NOT NULL,
  `bi2` varchar(30) NOT NULL,
  `kd2` varchar(30) NOT NULL,
  `ln3` varchar(30) NOT NULL,
  `taksiran_rugi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kebakaran`
--

INSERT INTO `kebakaran` (`id`, `bulan`, `frek`, `i`, `ii`, `iii`, `iv`, `v`, `vi`, `vii`, `viii`, `bp`, `bup`, `bi`, `kd`, `ln`, `kp`, `lp`, `ls`, `rk`, `ln2`, `jumlah_unit`, `jumlah_sdm`, `luka`, `tewas`, `luka_w`, `tewas_w`, `luas_area`, `bp2`, `bup2`, `bi2`, `kd2`, `ln3`, `taksiran_rugi`) VALUES
(2, 'Januari', '19', '4', '0', '2', '3', '5', '4', '0', '1', '5', '3', '0', '1', '10', '0', '0', '12', '0', '7', '62', '296', '0', '0', '0', '0', '384', '5', '3', '0', '1', '10', '786,100,000'),
(3, 'Februari', '24', '11', '1', '5', '4', '2', '1', '0', '0', '3', '3', '4', '2', '12', '0', '3', '14', '0', '7', '55', '283', '0', '0', '0', '0', '638', '3', '3', '4', '2', '9', '1,255,000,000'),
(4, 'Maret', '28', '4', '5', '7', '4', '2', '5', '1', '0', '8', '2', '1', '2', '15', '1', '0', '17', '0', '10', '69', '313', '0', '0', '2', '0', '1,472', '8', '2', '1', '2', '15', '1,967,000,000'),
(5, 'April', '27', '8', '1', '6', '3', '2', '6', '1', '0', '8', '3', '1', '1', '14', '0', '0', '20', '0', '7', '121', '557', '0', '0', '4', '2', '1,063', '8', '3', '1', '1', '14', '952,375,000'),
(6, 'Mei', '18', '4', '4', '3', '0', '1', '6', '0', '0', '6', '1', '1', '1', '9', '0', '0', '8', '0', '10', '77', '357', '0', '0', '4', '0', '3,056', '6', '1', '1', '1', '9', '2,441,100,000'),
(7, 'Juni', '27', '5', '3', '10', '1', '1', '6', '1', '0', '10', '5', '2', '1', '9', '0', '0', '15', '1', '11', '110', '506', '4', '0', '1', '0', '1,986', '9', '5', '2', '1', '10', '4,237,600,000'),
(8, 'Juli', '30', '8', '2', '6', '4', '3', '6', '1', '0', '12', '2', '1', '4', '11', '2', '0', '15', '2', '11', '131', '622', '0', '0', '5', '2', '6,168', '12', '2', '1', '4', '11', '3,676,900,000'),
(9, 'Agustus', '18', '2', '0', '4', '2', '3', '6', '0', '1', '8', '2', '1', '0', '7', '1', '0', '10', '0', '7', '69', '328', '0', '0', '2', '0', '808', '8', '2', '1', '0', '7', '1,534,200,000'),
(10, 'September', '20', '9', '1', '1', '3', '1', '4', '0', '1', '6', '0', '1', '0', '13', '0', '0', '13', '1', '6', '109', '553', '0', '0', '0', '0', '38,179', '7', '0', '1', '0', '13', '2,461,000,000'),
(11, 'Oktober', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'November', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Desember', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Jumlah', '211', '55', '17', '44', '24', '20', '44', '4', '3', '66', '21', '12', '12', '100', '4', '3', '124', '4', '76', '803', '3815', '4', '0', '18', '4', '53,754', '66', '21', '12', '12', '98', '19,311,275,000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyelamatan`
--

CREATE TABLE `penyelamatan` (
  `id` int(11) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `frek` varchar(30) NOT NULL,
  `i` varchar(30) NOT NULL,
  `ii` varchar(30) NOT NULL,
  `iii` varchar(30) NOT NULL,
  `iv` varchar(30) NOT NULL,
  `v` varchar(30) NOT NULL,
  `vi` varchar(30) NOT NULL,
  `vii` varchar(30) NOT NULL,
  `viii` varchar(30) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `bup` varchar(30) NOT NULL,
  `bi` varchar(30) NOT NULL,
  `kd` varchar(30) NOT NULL,
  `ln` varchar(30) NOT NULL,
  `nk1` varchar(30) NOT NULL,
  `nk2` varchar(30) NOT NULL,
  `nk3` varchar(30) NOT NULL,
  `nk4` varchar(30) NOT NULL,
  `nk5` varchar(30) NOT NULL,
  `nk6` varchar(30) NOT NULL,
  `nk7` varchar(30) NOT NULL,
  `jumlah_unit` varchar(30) NOT NULL,
  `jumlah_sdm` varchar(30) NOT NULL,
  `luka` varchar(30) NOT NULL,
  `tewas` varchar(30) NOT NULL,
  `luka_w` varchar(30) NOT NULL,
  `tewas_w` varchar(30) NOT NULL,
  `luas_area` varchar(30) NOT NULL,
  `bp2` varchar(30) NOT NULL,
  `bup2` varchar(30) NOT NULL,
  `bi2` varchar(30) NOT NULL,
  `kd2` varchar(30) NOT NULL,
  `ln2` varchar(30) NOT NULL,
  `taksiran_rugi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyelamatan`
--

INSERT INTO `penyelamatan` (`id`, `bulan`, `frek`, `i`, `ii`, `iii`, `iv`, `v`, `vi`, `vii`, `viii`, `bp`, `bup`, `bi`, `kd`, `ln`, `nk1`, `nk2`, `nk3`, `nk4`, `nk5`, `nk6`, `nk7`, `jumlah_unit`, `jumlah_sdm`, `luka`, `tewas`, `luka_w`, `tewas_w`, `luas_area`, `bp2`, `bup2`, `bi2`, `kd2`, `ln2`, `taksiran_rugi`) VALUES
(1, 'Januari', '105', '25', '11', '11', '15', '6', '23', '8', '6', '0', '0', '0', '0', '105', '0', '1', '33', '0', '0', '0', '71', '124', '622', '1', '0', '2', '2', '0', '0', '0', '0', '0', '105', '5,000,000'),
(2, 'Februari', '69', '22', '8', '4', '19', '6', '3', '3', '4', '0', '0', '0', '0', '69', '2', '1', '24', '0', '0', '0', '42', '75', '327', '0', '0', '1', '0', '80', '0', '0', '0', '0', '69', '202,000,000'),
(3, 'Maret', '45', '14', '7', '6', '5', '4', '3', '3', '3', '0', '0', '0', '0', '45', '3', '0', '2', '0', '0', '0', '40', '56', '243', '0', '0', '1', '1', '72', '0', '0', '0', '0', '45', '0'),
(4, 'April', '37', '7', '6', '6', '4', '4', '2', '3', '5', '0', '0', '0', '0', '37', '3', '0', '2', '0', '0', '0', '32', '44', '184', '0', '0', '0', '0', '0', '0', '0', '0', '0', '37', '0'),
(5, 'Mei', '43', '11', '5', '6', '3', '3', '0', '4', '11', '0', '0', '0', '0', '43', '3', '0', '0', '0', '0', '0', '40', '58', '239', '0', '0', '1', '1', '0', '0', '0', '0', '0', '43', '20,000,000'),
(6, 'Juni', '43', '3', '8', '4', '3', '1', '6', '4', '14', '0', '0', '0', '0', '43', '5', '0', '3', '0', '0', '0', '35', '61', '247', '0', '0', '0', '2', '20', '0', '0', '0', '0', '43', '254,000,000'),
(7, 'Juli', '35', '2', '3', '5', '6', '3', '7', '5', '4', '0', '0', '0', '0', '35', '6', '0', '5', '0', '0', '0', '24', '43', '181', '0', '0', '0', '1', '0', '0', '0', '0', '0', '35', '80,200,000'),
(8, 'Agustus', '40', '7', '3', '7', '3', '2', '5', '3', '10', '0', '0', '0', '0', '40', '8', '0', '7', '0', '0', '0', '25', '45', '194', '0', '0', '2', '0', '50', '0', '0', '0', '0', '39', '15,000,000'),
(9, 'September', '44', '8', '3', '6', '6', '6', '3', '7', '5', '0', '0', '0', '0', '44', '8', '0', '3', '0', '0', '0', '41', '50', '221', '0', '0', '0', '0', '0', '0', '0', '0', '0', '43', '20,000,000'),
(10, 'Oktober', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'November', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'Desember', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Jumlah', '461', '99', '54', '55', '64', '35', '52', '40', '62', '0', '0', '0', '0', '461', '38', '2', '79', '0', '0', '0', '350', '556', '2458', '1', '0', '7', '7', '222', '0', '0', '0', '0', '459', '596,200,000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap`
--

CREATE TABLE `rekap` (
  `id` int(11) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `jumlah_kejadian` varchar(30) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `bu` varchar(30) NOT NULL,
  `bi` varchar(30) NOT NULL,
  `kd` varchar(30) NOT NULL,
  `ln` varchar(30) NOT NULL,
  `kp` varchar(30) NOT NULL,
  `lp` varchar(30) NOT NULL,
  `ls` varchar(30) NOT NULL,
  `rk` varchar(30) NOT NULL,
  `ln2` varchar(30) NOT NULL,
  `bp2` varchar(30) NOT NULL,
  `bu2` varchar(30) NOT NULL,
  `bi2` varchar(30) NOT NULL,
  `kd2` varchar(30) NOT NULL,
  `ln3` varchar(30) NOT NULL,
  `jiwa` varchar(30) NOT NULL,
  `kk` varchar(30) NOT NULL,
  `mati` varchar(30) NOT NULL,
  `luka` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `luas_area` varchar(30) NOT NULL,
  `taksiran_rugi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekap`
--

INSERT INTO `rekap` (`id`, `bulan`, `jumlah_kejadian`, `bp`, `bu`, `bi`, `kd`, `ln`, `kp`, `lp`, `ls`, `rk`, `ln2`, `bp2`, `bu2`, `bi2`, `kd2`, `ln3`, `jiwa`, `kk`, `mati`, `luka`, `unit`, `luas_area`, `taksiran_rugi`) VALUES
(1, 'Januari', '124', '5', '3', '0', '1', '115', '0', '0', '12', '0', '112', '5', '3', '0', '1', '115', '39', '10', '2', '2', '186', '384', '791,100,000'),
(2, 'Februari', '93', '3', '3', '4', '2', '81', '0', '0', '17', '0', '76', '3', '3', '4', '2', '81', '33', '8', '0', '1', '133', '718', '1,457,000,000'),
(3, 'Maret', '73', '8', '2', '1', '2', '60', '1', '0', '17', '0', '55', '8', '2', '1', '2', '60', '32', '10', '1', '3', '125', '1,544', '1,967,000,000'),
(4, 'April', '64', '8', '3', '1', '1', '51', '0', '0', '20', '0', '44', '8', '3', '1', '1', '51', '49', '19', '2', '4', '165', '1,063', '952,375,000'),
(5, 'Mei', '61', '6', '1', '1', '1', '52', '0', '0', '8', '0', '53', '6', '1', '1', '1', '52', '161', '82', '1', '5', '135', '3,056', '2,461,100,000'),
(6, 'Juni', '70', '10', '5', '2', '1', '52', '0', '0', '15', '1', '54', '9', '5', '2', '1', '53', '251', '83', '2', '1', '171', '2,006', '4,491,600,000'),
(7, 'Juli', '65', '12', '2', '1', '4', '46', '2', '0', '15', '2', '46', '12', '2', '1', '4', '46', '131', '36', '3', '5', '174', '6,168', '3,757,100,000'),
(8, 'Agustus', '58', '8', '2', '1', '0', '47', '1', '0', '10', '0', '47', '8', '2', '1', '0', '46', '220', '57', '0', '4', '114', '858', '1,549,200,000'),
(9, 'September', '64', '6', '0', '1', '0', '57', '0', '0', '12', '1', '51', '7', '0', '1', '0', '56', '504', '173', '0', '0', '159', '38,179', '2,481,000,000'),
(10, 'Oktober', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'November', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'Desember', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Total', '672', '66', '21', '12', '12', '561', '4', '0', '126', '4', '538', '66', '21', '12', '12', '560', '1,420', '478', '11', '25', '1362', '53,976', '19,907,475,000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(12, 'dejan@gmail.com', '$2y$10$kREPV0mukUJLHoA8.tuBYuW0uKCQdXa552G4XDxV6P9o98MluBdmO'),
(13, 'fahmi@gmail.com', '$2y$10$tLQxaJIY54IFUp2m076rmuz2xuv2vbHlpLOrUxbDhGDxwa8jzKwc.'),
(14, 'catur@gmail.com', '$2y$10$mtgbOKjb8A8ioM3PGsJwhOnb1Eocz93d.vYMzYgaNiaeNzoP33m7q');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kebakaran`
--
ALTER TABLE `kebakaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyelamatan`
--
ALTER TABLE `penyelamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekap`
--
ALTER TABLE `rekap`
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
-- AUTO_INCREMENT untuk tabel `kebakaran`
--
ALTER TABLE `kebakaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `penyelamatan`
--
ALTER TABLE `penyelamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `rekap`
--
ALTER TABLE `rekap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
