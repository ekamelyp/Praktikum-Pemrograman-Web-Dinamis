-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2021 pada 15.20
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `khs`
--

CREATE TABLE `khs` (
  `nim` varchar(10) NOT NULL,
  `kodeMK` varchar(5) NOT NULL,
  `nilai` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `khs`
--

INSERT INTO `khs` (`nim`, `kodeMK`, `nilai`) VALUES
('1600018023', '14802', '90'),
('1600018332', '14801', '89'),
('1700018156', '14803', '85'),
('1700018213', '14804', '90'),
('1800018227', '14805', '91');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgllhr` date DEFAULT NULL,
  `ipk` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jk`, `alamat`, `tgllhr`, `ipk`) VALUES
(2, '1600018332', 'Rita Putri', 'P', 'Solo', '1999-01-01', 3.55),
(3, '1600018023', 'Amirudin', 'L', 'Semarang', '1998-08-11', 3.8),
(4, '1700018156', 'Siti Maryam', 'P', 'Jakarta', '1995-04-15', 4),
(7, '1700018213', 'Putra', 'L', 'Jakarta', '1998-08-25', 4),
(8, '1800018227', 'Eka Meliyani Putri', 'P', 'Lampung', '2000-01-24', 4),
(9, '1800018001', 'Agung Putra Pratama', 'L', 'Yogyakarta', '1999-03-11', 3.5),
(11, '1500018123', 'Ayu Septiana', 'p', 'Yogyakarta', '1999-12-11', 3.7),
(12, '1800018050', 'Adam Sanjaya', 'L', 'Semarang', '1999-12-08', 3.66),
(13, '1900018520', 'Putra Pamungkas', 'L', 'Yogyakarta', '1998-08-25', 3.7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode`, `nama`, `sks`, `sem`) VALUES
('14801', 'Basis Data', 4, 3),
('14802', 'Pemrograman Web Dinamis', 3, 7),
('14803', 'Rekayasa Web', 3, 6),
('14804', 'Algoritma Pemrograman', 3, 2),
('14805', 'Sistem Pendukung Keputusan', 3, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `ipk` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `password`, `nama_lengkap`, `email`, `level`, `ipk`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Eka Meliyani Putri', 'ekameli@gmail.com', '', '4.00'),
('ekamelyp', 'b5630b0ca20f84638495ce6c96e0bb9e', 'Eka', 'ekaputri7475@gmail.com', '', '4.00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
