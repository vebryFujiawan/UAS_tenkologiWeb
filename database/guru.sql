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
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `NIK`, `nama`, `status`, `jabatan`) VALUES
(1, '1406022805650002', 'H. KENEDI, S.Pd, M.Pd', 'PNS', 'Kepala Sekolah'),
(2, '1406164212700001', 'FITRIANI AMERANG, S.Pd', 'PNS', 'Wakasek'),
(3, '1406164901750001', 'SUSY SRIANTI, S.Pd', 'PNS', 'Guru'),
(4, '1406055504840007', 'EKO AFRIYANI,S.Pd', 'PNS', 'Guru'),
(5, '1401032806870001', 'MUHAMMAD RAQIB, S.Pd.I', 'PNS', 'Guru'),
(6, '1406014904920001', 'ABNUR MELSYAH AGNESY,S.Pd', 'PNS', 'Guru'),
(7, '1406124209920003', 'SITI AMINAH, S.Pd, M.Pd', 'PNS', 'Guru'),
(8, '1406034102950003', 'ALIFFIONA SUCI RAMADHANY, S.Pd', 'PNS', 'Guru'),
(9, '1406034802950004', 'UMI KALSUM, S.Pd', 'PNS', 'Guru'),
(10, '1406020808950001', 'FERY FERDIAN, S.Pd', 'PNS', 'Guru'),
(11, '1406040909890001', 'ZULMAN', 'GTT', 'Guru'),
(12, '1406282903780002', 'IBRAHIM, S.Pd', 'GTT', 'Guru'),
(13, '1406069034910002', 'MUHAMAD DANIL', 'Honor', 'Tenaga Administrasi'),
(15, '3205142802980006', 'VEBRY FUJIAWAN', 'Honor', 'Tenaga Administrasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
