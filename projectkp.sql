-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Nov 2020 pada 09.40
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectkp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `foto`, `no_hp`, `jabatan`, `pendidikan`) VALUES
(3, 'Fauzi Ihsan', '111', 'Muara Bungkal', '2016-10-10', 'Siak', 'IMG-20201007-WA0007.jpg', '08', 'Mahasiswa', 'S6'),
(4, 'Alex', '789', 'Pku', '2016-10-10', 'Tampan', 'P_20200914_105232_HDR.jpg', '080', 'Kaur Pemerintahan', 'S10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `nama_surat_keluar` varchar(100) NOT NULL,
  `tanggal_surat_keluar` date NOT NULL,
  `keterangan_surat_keluar` varchar(100) NOT NULL,
  `file_surat_keluar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `nama_surat_keluar`, `tanggal_surat_keluar`, `keterangan_surat_keluar`, `file_surat_keluar`) VALUES
(2, 'fauzi', '2016-10-10', 'ziyad', 'a.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan`
--

CREATE TABLE `surat_keterangan` (
  `id_surat_keterangan` int(11) NOT NULL,
  `nama_surat_keterangan` varchar(100) NOT NULL,
  `tanggal_surat_keterangan` date NOT NULL,
  `keterangan_surat_keterangan` varchar(100) NOT NULL,
  `file_surat_keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `surat_keterangan`
--

INSERT INTO `surat_keterangan` (`id_surat_keterangan`, `nama_surat_keterangan`, `tanggal_surat_keterangan`, `keterangan_surat_keterangan`, `file_surat_keterangan`) VALUES
(1, 'keterangan', '2016-10-10', 'tarek sis bro', 'GuideLine_Author_IJAIDM_Predatech_UIN_SUSKA_RIAU.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `nama_surat_masuk` varchar(100) NOT NULL,
  `tanggal_surat_masuk` date NOT NULL,
  `keterangan_surat_masuk` varchar(100) NOT NULL,
  `file_surat_masuk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `nama_surat_masuk`, `tanggal_surat_masuk`, `keterangan_surat_masuk`, `file_surat_masuk`) VALUES
(3, 'fauzi', '2016-10-10', 'ihsanmb', 'a.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'administrator'),
(5, 'pegawai', 'pegawai', 'pegawai'),
(7, 'fauziganteng', 'fauziganteng', 'administrator'),
(8, 'fauziganteng1', 'fauziganteng1', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD PRIMARY KEY (`id_surat_keterangan`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  MODIFY `id_surat_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
