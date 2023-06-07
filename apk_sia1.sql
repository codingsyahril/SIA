-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2023 pada 11.04
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apk_sia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id` int(255) NOT NULL,
  `penerima` varchar(255) DEFAULT NULL,
  `pemberi` varchar(255) DEFAULT NULL,
  `rincian` varchar(255) DEFAULT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `keluar` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`id`, `penerima`, `pemberi`, `rincian`, `jumlah`, `tgl`, `jenis`, `keluar`) VALUES
(2, 'Hakim', '  Elvi Nur Ramha ', '  KEGIATAN HUT MENWA', 200000000, '2023-06-04', 'masuk', 0),
(3, 'Hakim', '', 'Kantong Darah', 0, '2023-05-30', 'keluar', 120000),
(4, 'Jamaluddin', '', 'Pembeluan Unit Airsoft Gun', 0, '2023-05-24', 'keluar', 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_keluar`
--

CREATE TABLE `kas_keluar` (
  `id` int(11) NOT NULL,
  `penanggung` varchar(100) NOT NULL,
  `rincian` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kas_keluar`
--

INSERT INTO `kas_keluar` (`id`, `penanggung`, `rincian`, `jumlah`, `tanggal`) VALUES
(0, 'Mamun Saripudin', ' kantung donor darah banyak banyak', 150000, '2023-06-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_masuk`
--

CREATE TABLE `kas_masuk` (
  `id` int(11) NOT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `pemberi` varchar(100) DEFAULT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `rincian` varchar(100) NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kas_masuk`
--

INSERT INTO `kas_masuk` (`id`, `penerima`, `pemberi`, `jumlah`, `rincian`, `tgl`) VALUES
(15, 'ldwaa', 'lajldla', 94923, 'afajfa', '1201-12-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `username`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'syahril', '123', 'syahril');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kas_keluar`
--
ALTER TABLE `kas_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kas_masuk`
--
ALTER TABLE `kas_masuk`
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
-- AUTO_INCREMENT untuk tabel `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kas_masuk`
--
ALTER TABLE `kas_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
