-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2026 pada 19.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kaskita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tipe` enum('masuk','keluar') NOT NULL,
  `nominal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id`, `tanggal`, `keterangan`, `tipe`, `nominal`) VALUES
(1, '2026-06-21', 'Saku Bulanan Orang Tua', 'masuk', 1500000.00),
(2, '2026-06-22', 'Beli Buku Pemrograman Web', 'keluar', 125000.00),
(3, '2026-06-23', 'Bayar Kosan Bulan Juni', 'keluar', 500000.00),
(4, '2026-06-24', 'Hadiah Lomba Koding', 'masuk', 350000.00),
(6, '2026-06-21', 'Saku Bulanan Orang Tua', 'masuk', 1500000.00),
(7, '2026-06-22', 'Beli Buku Pemrograman Web', 'keluar', 125000.00),
(8, '2026-06-23', 'Bayar Kosan Bulan Juni', 'keluar', 500000.00),
(9, '2026-06-24', 'Hadiah Lomba Koding', 'masuk', 350000.00),
(10, '2026-06-25', 'Makan Siang Sederhana', 'keluar', 25000.00);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
