-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2019 pada 16.34
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusmk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kodebuku` int(30) NOT NULL,
  `katbuku` varchar(50) NOT NULL,
  `namabuku` varchar(50) NOT NULL,
  `jumlahbuku` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kodebuku`, `katbuku`, `namabuku`, `jumlahbuku`) VALUES
(1116, 'Teks Utama', 'Rekayasa Perangkat Lunak (PRPL)', 21),
(1117, 'Teks Utama', 'Sistem Operasi', 9),
(1118, 'Non-Teks Utama', 'Perhitungan Pengelolaan Dana', 10),
(1119, 'Non-Teks Utama', 'Teknologi Komputer', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukuguru`
--

CREATE TABLE `bukuguru` (
  `kodebukuguru` int(30) NOT NULL,
  `katbukuguru` varchar(50) NOT NULL,
  `namabukuguru` varchar(50) NOT NULL,
  `jumlahbukuguru` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukuguru`
--

INSERT INTO `bukuguru` (`kodebukuguru`, `katbukuguru`, `namabukuguru`, `jumlahbukuguru`) VALUES
(2219, 'Teks Utama', 'Administrasi Server ', 17),
(2220, 'Teks Utama', 'Manajemen Perkantoran', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `idpeminjam` int(30) NOT NULL,
  `namapeminjam` varchar(50) NOT NULL,
  `nohp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`idpeminjam`, `namapeminjam`, `nohp`) VALUES
(13803, 'IAN RANDY', '08114860202'),
(13812, 'MENDIANA ALEXANDRA SASABONE', '082344758627');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjamguru`
--

CREATE TABLE `peminjamguru` (
  `idpeminjamguru` int(30) NOT NULL,
  `namapeminjamguru` varchar(50) NOT NULL,
  `nohpguru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjamguru`
--

INSERT INTO `peminjamguru` (`idpeminjamguru`, `namapeminjamguru`, `nohpguru`) VALUES
(19591120, 'HENY', '08234552635'),
(19591121, 'NICOLAS', '086362537');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `kodekembali` int(30) NOT NULL,
  `idpeminjam` int(30) NOT NULL,
  `kodebuku` int(30) NOT NULL,
  `tglpengembalian` date NOT NULL,
  `denda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`kodekembali`, `idpeminjam`, `kodebuku`, `tglpengembalian`, `denda`) VALUES
(20, 13812, 1117, '2019-12-04', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalianguru`
--

CREATE TABLE `pengembalianguru` (
  `kodekembaliguru` int(30) NOT NULL,
  `idpeminjamguru` int(30) NOT NULL,
  `kodebukuguru` int(30) NOT NULL,
  `tglkembaliguru` date NOT NULL,
  `dendaguru` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalianguru`
--

INSERT INTO `pengembalianguru` (`kodekembaliguru`, `idpeminjamguru`, `kodebukuguru`, `tglkembaliguru`, `dendaguru`) VALUES
(20, 19591120, 2219, '2019-12-05', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pustakawan`
--

CREATE TABLE `pustakawan` (
  `idstaff` int(30) NOT NULL,
  `namastaff` varchar(50) NOT NULL,
  `nohpstaff` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pustakawan`
--

INSERT INTO `pustakawan` (`idstaff`, `namastaff`, `nohpstaff`) VALUES
(56, 'Lala', ''),
(1299, 'gigi', ''),
(2223, 'hana sritantiya', ''),
(2245, 'tante', ''),
(3456, 'yyyyy', ''),
(3466, 'gegee', ''),
(58302, 'setyo', ''),
(7555666, 'Ana Widyaa', '0823445678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kodetransaksi` int(30) NOT NULL,
  `idpeminjam` int(30) NOT NULL,
  `kodebuku` int(30) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kodetransaksi`, `idpeminjam`, `kodebuku`, `tglpinjam`, `tglkembali`) VALUES
(18, 13803, 1117, '2019-11-27', '2019-12-04'),
(19, 13812, 1116, '2019-11-30', '2019-12-07'),
(20, 13803, 1116, '2019-11-04', '2019-12-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksiguru`
--

CREATE TABLE `transaksiguru` (
  `kodetranguru` int(30) NOT NULL,
  `idpeminjamguru` int(30) NOT NULL,
  `kodebukuguru` int(30) NOT NULL,
  `tglpinjamguru` date NOT NULL,
  `tglkembaliguru` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksiguru`
--

INSERT INTO `transaksiguru` (`kodetranguru`, `idpeminjamguru`, `kodebukuguru`, `tglpinjamguru`, `tglkembaliguru`) VALUES
(20, 19591120, 2219, '2019-11-28', '2019-12-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'smknegeri1', 'smkn1sorong', 'smkn1', 'admin'),
(2, 'pegawai', 'pegawai', 'pegawai123', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kodebuku`);

--
-- Indeks untuk tabel `bukuguru`
--
ALTER TABLE `bukuguru`
  ADD PRIMARY KEY (`kodebukuguru`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`idpeminjam`);

--
-- Indeks untuk tabel `peminjamguru`
--
ALTER TABLE `peminjamguru`
  ADD PRIMARY KEY (`idpeminjamguru`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`kodekembali`),
  ADD KEY `idpeminjam` (`idpeminjam`),
  ADD KEY `kodebuku` (`kodebuku`);

--
-- Indeks untuk tabel `pengembalianguru`
--
ALTER TABLE `pengembalianguru`
  ADD PRIMARY KEY (`kodekembaliguru`),
  ADD KEY `idpeminjamguru` (`idpeminjamguru`,`kodebukuguru`),
  ADD KEY `kodebukuguru` (`kodebukuguru`);

--
-- Indeks untuk tabel `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD PRIMARY KEY (`idstaff`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kodetransaksi`),
  ADD KEY `idpeminjam` (`idpeminjam`),
  ADD KEY `kodebuku` (`kodebuku`);

--
-- Indeks untuk tabel `transaksiguru`
--
ALTER TABLE `transaksiguru`
  ADD PRIMARY KEY (`kodetranguru`),
  ADD KEY `idpeminjamguru` (`idpeminjamguru`),
  ADD KEY `kodebukuguru` (`kodebukuguru`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`idpeminjam`) REFERENCES `transaksi` (`idpeminjam`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`kodebuku`) REFERENCES `transaksi` (`kodebuku`);

--
-- Ketidakleluasaan untuk tabel `pengembalianguru`
--
ALTER TABLE `pengembalianguru`
  ADD CONSTRAINT `pengembalianguru_ibfk_1` FOREIGN KEY (`idpeminjamguru`) REFERENCES `transaksiguru` (`idpeminjamguru`),
  ADD CONSTRAINT `pengembalianguru_ibfk_2` FOREIGN KEY (`kodebukuguru`) REFERENCES `transaksiguru` (`kodebukuguru`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kodebuku`) REFERENCES `buku` (`kodebuku`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idpeminjam`) REFERENCES `peminjam` (`idpeminjam`);

--
-- Ketidakleluasaan untuk tabel `transaksiguru`
--
ALTER TABLE `transaksiguru`
  ADD CONSTRAINT `transaksiguru_ibfk_1` FOREIGN KEY (`kodebukuguru`) REFERENCES `bukuguru` (`kodebukuguru`),
  ADD CONSTRAINT `transaksiguru_ibfk_2` FOREIGN KEY (`idpeminjamguru`) REFERENCES `peminjamguru` (`idpeminjamguru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
