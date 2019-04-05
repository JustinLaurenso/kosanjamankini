-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2019 pada 07.04
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkos`
--

CREATE TABLE `tbkos` (
  `kode_kos` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kos` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `status_ruangan` varchar(100) NOT NULL,
  `fasilitas` text NOT NULL,
  `jlh_kamar` int(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbregister`
--

CREATE TABLE `tbregister` (
  `username` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbregister`
--

INSERT INTO `tbregister` (`username`, `name`, `email`, `password`) VALUES
('admin', 'admin', 'justin@gmail.com', '$2y$10$eFNYNk4t80Aa/XoLgXWQxOXujLtlWtG7HgeMtkYA3ikMOc5nYgZWS'),
('ateng', 'Justin L', 'justin@gmail.com', '$2y$10$Oi7cjZ8/e2ibVLWEATFhneI4r2yo.THTqi/TqoZzowQkt67YQ0keS'),
('justin', 'justinlaurenso', 'a@gmail.com', '$2y$10$2L/ILA1T4JTO4kgFWKHzPeUFTrrFlbUfwjGlik9SSyDjW.OcUDfou'),
('justin123', 'Justin Laurenso', 'justin.laurenso@gmail.com', '$2y$10$Ci0CDF6IlVy2BM6gHjN01uLSePvitV5sn8YG96Ehkjez5/nZS/YCS'),
('justinlauren', 'Justin Laurensoo', 'justinlaurenso@gmail.com', '$2y$10$pasazPwl2pNVLMg5f0B3WerzWuRYd3YH7bbRzuFFtSwNILT064a3C'),
('justinlaurenso', 'justin', 'justin@gmail.com', '$2y$10$N/EPDysMlyNeLs4K4iFFfuzwQ9cSjh9dYnZ76ZvhyE9/U9lmA/HTG'),
('user', 'usr', 'justin@gmail.com', '$2y$10$zrIZ7hB9UCGl6RhfrfNloufHSB/2misVahye6Mqa3NmrXzdfp5wum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`name`, `gender`, `birth`, `username`, `email`, `region`) VALUES
('Ateng', 'Male', '2019-03-12', 'justin123', 'justin.laurenso123@gmail.com', 'Pontianak, Indonesia'),
('Justin Laurensoo', 'Male', '0000-00-00', 'justinlauren', 'justinlaurenso@gmail.com', '-, -'),
('Justin L', '', '0000-00-00', 'ateng', 'justin@gmail.com', ''),
('admin', '', '0000-00-00', 'admin', 'justin@gmail.com', ''),
('usr', '', '0000-00-00', 'user', 'justin@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbkos`
--
ALTER TABLE `tbkos`
  ADD PRIMARY KEY (`kode_kos`);

--
-- Indeks untuk tabel `tbregister`
--
ALTER TABLE `tbregister`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
