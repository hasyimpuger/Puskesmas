-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jan 2019 pada 15.22
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id_diagnosis` int(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `tanggal` date NOT NULL,
  `dokter` text NOT NULL,
  `no_antrian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diagnosis`
--

INSERT INTO `diagnosis` (`id_diagnosis`, `id_pasien`, `diagnosa`, `tanggal`, `dokter`, `no_antrian`) VALUES
(1, '1', 'sakit gigi', '2018-12-30', 'Devitha', '1001'),
(8, '2', 'sakit gigi', '2018-12-31', 'Devitha', '1002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` text NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok_obat`, `satuan`, `expired`) VALUES
(1, 'Asam Mefenamat', 60, 'Pack', '2030-03-01'),
(2, 'Aspirin', 360, 'Pack', '2020-11-30'),
(3, 'Penisilin', 200, 'Pack', '2020-02-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat_masuk`
--

INSERT INTO `obat_masuk` (`id_masuk`, `id_obat`, `jumlah`, `tanggal`) VALUES
(1, 2, 100, '2019-01-01'),
(2, 2, 50, '2019-01-01'),
(3, 2, 50, '2019-01-01'),
(4, 2, 50, '2019-01-01'),
(5, 1, 50, '2019-01-01');

--
-- Trigger `obat_masuk`
--
DELIMITER $$
CREATE TRIGGER `tambahobat` AFTER INSERT ON `obat_masuk` FOR EACH ROW BEGIN
	UPDATE obat SET stok_obat=stok_obat+NEW.jumlah
    WHERE id_obat = NEW.id_obat;
  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `alamat`, `no_hp`, `tanggal_lahir`, `jenis_kelamin`, `agama`) VALUES
(1, 'Baron', 'Jln Kampung Melayu', '0896200496618', '2018-11-04', 'Laki-Laki', 'Islam'),
(2, 'Hayati', 'cemara raya', '089090909090', '1996-12-31', 'Perempuan', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(50) NOT NULL,
  `id_pasien` int(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_antrian` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('Proses','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_pasien`, `id_user`, `no_antrian`, `tanggal`, `status`) VALUES
(1, 1, 6, '1001', '2018-10-23', 'Selesai'),
(2, 2, 3, '1002', '2018-12-30', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `no_antrian` varchar(20) NOT NULL,
  `nama_obat` text NOT NULL,
  `jenis_obat` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('Proses','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `no_antrian`, `nama_obat`, `jenis_obat`, `jumlah`, `keterangan`, `status`) VALUES
(9, '1002', 'Asam Mefenamat', 'Tablet', 10, '3 x 1 hari', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `user_name`, `password`, `level`) VALUES
(2, 'Suci', 'suci', '1234', 'Apoteker'),
(3, 'Devitha', 'devitha', '1234', 'Dokter'),
(4, 'Salvia', 'salvia', '1234', 'Resipsionis'),
(5, 'Dony Prastio', 'dony', '1234', 'Administrator'),
(6, 'Putri', 'putri', '1234', 'Dokter'),
(8, 'Rizal', 'rizal', '1234', 'Dokter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id_diagnosis`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id_diagnosis` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
