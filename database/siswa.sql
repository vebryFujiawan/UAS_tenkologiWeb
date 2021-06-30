-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2021 pada 08.44
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsmp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `NISN` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Nama` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Alamat` varchar(80) CHARACTER SET latin1 NOT NULL,
  `Kelas` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `NISN`, `Nama`, `Alamat`, `Kelas`) VALUES
(1, '20060217', 'Muhammad Habib', 'Pendalian', 'VIII'),
(2, '20050406', 'Aisyah', 'Bengkolan Salak', 'IX'),
(3, '20060220', 'Hamdan', 'Sei Kandis', 'VII'),
(7, '20030520', 'Bayu', 'Pendalian', 'VII'),
(8, '20050520', 'Eka', 'Sei Kandis', 'VII'),
(10, '20050423', 'Ali Arham', 'Bengkolan Salak', 'IX'),
(11, '20040934', 'Nur Aminah', 'Bengkolan Salak', 'IX'),
(12, '20061205', 'Yusuf Habibi', 'Sei Kandis', 'VII'),
(13, '20060898', 'Mella Hany', 'Bengkolan Salak', 'VII'),
(14, '20059876', 'Siti Aisyah', 'Bengkolak Salak', 'VIII'),
(15, '20054506', 'Reny Andesi', 'Sei Kandis', 'VIII');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
