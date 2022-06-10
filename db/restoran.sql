-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2020 pada 07.50
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(11) NOT NULL,
  `nama_bahan` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `harga_pokok` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama_bahan`, `stok`, `satuan`, `harga_pokok`) VALUES
(2, 'Cabai Merah', 250, 'ons', 10000),
(10, 'Cabai Hijau', 20, 'dag', 7000),
(11, 'Kencur', 15, 'kg', 5000),
(15, 'Boncabe', 100, 'g', 1000),
(16, 'bjhj', 989, 'hj', 9889),
(17, 'nkj', 98989, 'hkk', 9889),
(18, 'jhjh', 89, 'hjhj', 56),
(19, 'fyf', 45, ' yb', 6576),
(20, 'gu', 8, 'rdg', 132),
(21, 'gfgf', 67, 'hh', 567),
(22, 'ggh', 87, 'ggh', 79),
(23, 'ghg', 798, 'gugu', 998),
(24, 'gug', 78, 'gug', 878);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id_kas` int(11) NOT NULL,
  `saldo` bigint(20) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`id_kas`, `saldo`, `id_pengajuan`, `id_transaksi`, `tanggal`) VALUES
(57, 0, 73, 0, '2020-11-09'),
(58, 0, 0, 39, '2020-11-09'),
(59, 0, 74, 0, '2020-11-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga_menu` bigint(20) NOT NULL,
  `stok_menu` int(11) NOT NULL,
  `gambar_menu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `stok_menu`, `gambar_menu`) VALUES
(1, 'Nasi Geprek', 15000, 59, '2.PNG'),
(8, 'Nasi Pecel', 7500, 2999, 'abstract-paintings-wallpapers-56e40f60147f61093c3c9736.jpg'),
(10, 'coba', 10000, 69, '3.jpg'),
(11, 'Nasi Goreng Pedas', 11000, 2474, '2.jpg'),
(12, 'coba', 8000, 178, '1.-everythings-gonna-be-ok-750x422.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_bahan`
--

CREATE TABLE `pengajuan_bahan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_pengajuan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `tanggal_p` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_bahan`
--

INSERT INTO `pengajuan_bahan` (`id_pengajuan`, `nama_pengajuan`, `jumlah`, `satuan`, `harga`, `tanggal_p`, `status`) VALUES
(6, 'bakso', 10, 'kg', 100000, '2020-10-15', 'selesai'),
(8, 'Seledri', 5, 'g', 25000, '0000-00-00', 'selesai'),
(10, 'Bawang Merah', 3, 'kg', 60000, '0000-00-00', 'aktif'),
(11, 'Bawang Putih', 4, 'kg', 80000, '0000-00-00', 'selesai'),
(12, 'Daging Ayam', 10, 'kg', 450000, '0000-00-00', 'aktif'),
(13, 'Daging sapi', 5, 'kg', 350000, '0000-00-00', 'aktif'),
(18, 'Sosis Ayam', 100, 'g', 200000, '2020-10-27', 'aktif'),
(60, 'coba', 7, 'kg', 10000, '2020-11-04', 'aktif'),
(62, 'Telur Ayam', 10, 'kg', 12000, '2020-11-04', 'selesai'),
(63, 'opo ae', 8, 'kg', 200, '2020-11-05', 'nonaktif'),
(66, 'kemiri', 2, 'kg', 12000, '2020-11-05', 'nonaktif'),
(67, 'Daun sirih', 1, 'kg', 19000, '2020-11-05', 'nonaktif'),
(68, 'jeruk nipis', 3, 'kg', 20000, '2020-11-05', 'aktif'),
(69, 'Tahu', 10, 'kg', 5000, '2020-11-06', 'aktif'),
(70, 'Tahu', 10, 'kg', 5000, '2020-11-06', 'nonaktif'),
(71, 'Tahu', 10, 'kg', 4500, '2020-11-06', 'selesai'),
(72, 'Tomat', 10, 'kg', 20000, '2020-11-09', 'selesai'),
(73, 'hij', 9, 'kg', 10, '2020-11-09', 'selesai'),
(74, 'hh', 12, 'kg', 1, '2020-11-09', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama`) VALUES
(2, 'Owner'),
(3, 'Kasir'),
(5, 'Koki'),
(6, 'Manager'),
(8, 'Keuangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_waktu` datetime NOT NULL,
  `nomor` varchar(10) NOT NULL,
  `total` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bayar` bigint(20) NOT NULL,
  `kembali` bigint(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_waktu`, `nomor`, `total`, `nama`, `bayar`, `kembali`, `status`) VALUES
(18, '2020-10-31 00:00:00', '524268', 7000, 'Azizah', 20000, 13000, 'aktif'),
(19, '2020-10-31 00:00:00', '491029', 150000, 'Azizah', 170000, 20000, 'aktif'),
(21, '2020-11-01 00:00:00', '245782', 20000, 'Azizah', 20000, 0, 'aktif'),
(24, '2020-11-02 00:00:00', '439259', 10000, 'Azizah', 0, -10000, 'aktif'),
(25, '2020-11-02 00:00:00', '345777', 30000, 'Azizah', 50000, 20000, 'aktif'),
(26, '0000-00-00 00:00:00', '465364', 140000, 'Azizah', 150000, 10000, 'aktif'),
(27, '2020-11-04 10:05:42', '390100', 30000, 'Azizah', 40000, 10000, 'aktif'),
(28, '2020-11-04 10:07:02', '969735', 10000, 'Azizah', 10000, 0, 'aktif'),
(29, '2020-11-05 04:50:58', '385198', 11000, 'Azizah', 12000, 1000, 'aktif'),
(30, '2020-11-05 05:04:46', '736171', 110000, 'Azizah', 120000, 10000, 'aktif'),
(31, '2020-11-05 10:16:45', '862356', 132000, 'Azizah', 140000, 8000, 'aktif'),
(32, '2020-11-05 10:17:13', '530193', 8000, 'Azizah', 9000, 1000, 'aktif'),
(33, '2020-11-05 10:17:31', '320684', 100000, 'Azizah', 100000, 0, 'aktif'),
(34, '2020-11-05 10:18:09', '851861', 45000, 'Azizah', 50000, 5000, 'aktif'),
(35, '2020-11-06 09:03:17', '801984', 33000, 'Nurul Azizah', 40000, 7000, 'aktif'),
(36, '2020-11-06 09:04:06', '919047', 8000, 'Nurul Azizah', 10000, 2000, 'aktif'),
(37, '2020-11-06 09:45:36', '205179', 10000, 'Azizah', 11111, 1111, 'aktif'),
(38, '2020-11-09 09:12:57', '967794', 100000, 'Nurul Azizah', 220000, 120000, 'aktif'),
(39, '2020-11-09 09:52:54', '305093', 7500, 'Nurul Azizah', 10000, 2500, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_bahan`
--

CREATE TABLE `transaksi_bahan` (
  `id_transaksi_bahan` int(11) NOT NULL,
  `id_bahan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_bahan`
--

INSERT INTO `transaksi_bahan` (`id_transaksi_bahan`, `id_bahan`, `jumlah`, `tanggal`) VALUES
(16, 11, 5, '2020-10-22'),
(17, 2, 10, '2020-10-28');

--
-- Trigger `transaksi_bahan`
--
DELIMITER $$
CREATE TRIGGER `stok_bahan_keluar` AFTER INSERT ON `transaksi_bahan` FOR EACH ROW BEGIN
	UPDATE bahan set stok=stok-NEW.jumlah
    WHERE id_bahan = NEW.id_bahan;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `stok_bahan_masuk` AFTER DELETE ON `transaksi_bahan` FOR EACH ROW BEGIN
	UPDATE bahan set stok=stok+OLD.jumlah
    WHERE id_bahan = OLD.id_bahan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi`, `id_menu`, `harga`, `qty`, `total`) VALUES
(15, 18, 8, 7000, 1, 7000),
(18, 21, 10, 10000, 2, 20000),
(19, 24, 10, 10000, 1, 10000),
(20, 25, 1, 15000, 2, 30000),
(23, 26, 8, 7000, 20, 140000),
(24, 27, 1, 15000, 2, 30000),
(25, 28, 10, 10000, 1, 10000),
(26, 29, 11, 11000, 1, 11000),
(27, 30, 11, 11000, 10, 110000),
(28, 31, 11, 11000, 12, 132000),
(29, 32, 12, 8000, 1, 8000),
(30, 33, 10, 10000, 10, 100000),
(31, 34, 1, 15000, 3, 45000),
(32, 35, 11, 11000, 3, 33000),
(33, 36, 12, 8000, 1, 8000),
(34, 37, 10, 10000, 1, 10000),
(35, 38, 10, 10000, 10, 100000),
(36, 39, 8, 7500, 1, 7500);

--
-- Trigger `transaksi_detail`
--
DELIMITER $$
CREATE TRIGGER `stok_menu_keluar` AFTER INSERT ON `transaksi_detail` FOR EACH ROW BEGIN
	UPDATE menu set stok_menu=stok_menu-NEW.qty
    WHERE id_menu = NEW.id_menu;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `stok_menu_masuk` AFTER DELETE ON `transaksi_detail` FOR EACH ROW BEGIN
	UPDATE menu set stok_menu=stok_menu+OLD.qty
    WHERE id_menu = OLD.id_menu;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `no_telp`, `username`, `password`, `role_id`) VALUES
(1, 'Nurul Azizah', 'Klampis Ngasem', '08727834231', 'nurulaz', '123', 2),
(2, 'Azizah', 'Banyu Mas', '081233792074', 'azz0903', '123', 3),
(3, 'Jojo', 'Kediri', '0898989893', 'jojo', '123', 5),
(4, 'Dinda', 'Jojoran', '087989882393', 'dinda', '123', 6),
(5, 'Ahmad Maulana Abdullah', 'klampis ngasem', '087672839394', 'lana', '123', 8);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indeks untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `pengajuan_bahan`
--
ALTER TABLE `pengajuan_bahan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi_bahan`
--
ALTER TABLE `transaksi_bahan`
  ADD PRIMARY KEY (`id_transaksi_bahan`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indeks untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `kas`
--
ALTER TABLE `kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_bahan`
--
ALTER TABLE `pengajuan_bahan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `transaksi_bahan`
--
ALTER TABLE `transaksi_bahan`
  MODIFY `id_transaksi_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi_bahan`
--
ALTER TABLE `transaksi_bahan`
  ADD CONSTRAINT `transaksi_bahan_ibfk_1` FOREIGN KEY (`id_bahan`) REFERENCES `bahan` (`id_bahan`);

--
-- Ketidakleluasaan untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
