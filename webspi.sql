-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2024 pada 09.47
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webspi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bagus`
--

CREATE TABLE `tbl_bagus` (
  `id_bagus` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bagus`
--

INSERT INTO `tbl_bagus` (`id_bagus`, `tipe`, `harga`) VALUES
(1, 'Classic', 5000000),
(2, 'Skandinavian', 4000000),
(3, 'Minimalis', 4000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_a` int(11) NOT NULL,
  `harga_b` int(11) NOT NULL,
  `harga_c` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_kategori`, `nama_barang`, `harga_a`, `harga_b`, `harga_c`, `id_satuan`, `foto`) VALUES
(1, 1, 'Kitchen Set Bawah', 2200000, 1760000, 1540000, 1, ''),
(2, 1, 'Kitchen Set Atas', 2200000, 1760000, 1540000, 1, ''),
(3, 2, 'Backdrop Satu Sisi Biasa', 1600000, 1280000, 1120000, 2, ''),
(4, 1, 'Kitchen Set Atas/Bawah Pintu Kisi', 2500000, 2000000, 1750000, 1, ''),
(5, 3, 'Top Table AICA Toughtop', 1300000, 1040000, 910000, 1, ''),
(6, 2, 'Backdrop Dua Sisi Biasa', 2000000, 1600000, 1400000, 2, ''),
(7, 2, 'Backdrop Satu Sisi Model', 1800000, 1440000, 1260000, 2, ''),
(8, 2, 'Backdrop Dua Sisi Model', 2200000, 1760000, 1540000, 2, ''),
(9, 4, 'Meja Kosongan', 2000000, 1600000, 1400000, 1, ''),
(10, 4, 'Meja Model Laci', 2200000, 1760000, 1540000, 1, ''),
(11, 4, 'Meja Bar', 2200000, 1760000, 1540000, 1, ''),
(12, 4, 'Credensa TV/Meja Gantung', 1600000, 1280000, 1120000, 3, ''),
(13, 5, 'Lemari Kulkas Kosongan', 2000000, 1600000, 1400000, 2, ''),
(14, 5, 'Lemari Rak Tanpa Pintu Full HPL', 2000000, 1600000, 1400000, 2, ''),
(15, 5, 'Lemari Rak Tanpa Pintu Dalaman Putih', 1800000, 1440000, 1260000, 2, ''),
(16, 5, 'Lemari Model Pintu', 2000000, 1600000, 1400000, 2, ''),
(17, 6, 'Partisi Biasa', 1800000, 1440000, 1260000, 2, ''),
(18, 6, 'Partisi Model', 1800000, 1440000, 1260000, 2, ''),
(19, 6, 'Partisi Biasa 2 Sisi', 2000000, 1600000, 1400000, 2, ''),
(20, 6, 'Partisi Model 2 Sisi', 2200000, 1760000, 1540000, 2, ''),
(21, 7, 'Pintu Swing Biasa + Aksesoris', 2500000, 2000000, 1750000, 4, ''),
(22, 7, 'Pintu Geser + Aksesoris', 3000000, 2400000, 2100000, 4, ''),
(23, 7, 'Pintu Swing Model + Aksesoris', 3000000, 2400000, 2100000, 4, ''),
(24, 7, 'Pintu Geser Model + Aksesoris', 3500000, 2800000, 2450000, 4, ''),
(25, 7, 'Pintu Koboy + Aksesoris', 1200000, 960000, 840000, 4, ''),
(26, 8, 'Dipan Biasa Tanpa Storage', 1400000, 1120000, 980000, 4, ''),
(27, 8, 'Dipan Dengan Storage', 1750000, 1400000, 1225000, 4, ''),
(28, 9, 'Hambalan Dinding', 450000, 360000, 315000, 3, ''),
(29, 4, 'Meja Nakas', 2000000, 1600000, 1400000, 3, ''),
(30, 10, 'Kusen', 450000, 360000, 315000, 3, ''),
(31, 11, 'Backsplash AICA Cerarl + Plywood', 1250000, 1000000, 875000, 3, ''),
(32, 11, 'Backsplash AICA Cerarl Tanpa Plywood', 1000000, 800000, 700000, 3, ''),
(33, 11, 'Backsplash Plywood + HPL', 1600000, 1280000, 1120000, 3, ''),
(34, 12, 'Tusir Resin', 500000, 400000, 350000, 3, ''),
(35, 13, 'Rak Sepatu Tanpa Pintu', 1800000, 1440000, 1260000, 1, ''),
(36, 13, 'Rak Sepatu + Pintu', 2000000, 1600000, 1400000, 1, ''),
(37, 14, 'Kursi Standar (Bentuk Kotak/Persegi Panjang)', 1800000, 1440000, 1260000, 1, ''),
(40, 14, 'Kursi Model Lengkung', 2000000, 1600000, 1400000, 1, 'c54c93d48956bf1e1e8f551b0897372a.jpg,dd93a988cab9b5721077b36454e02e13.jpg,abb394a29b407f785d3ec728e916150f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_bagus`
--

CREATE TABLE `tbl_foto_bagus` (
  `id_foto` int(11) NOT NULL,
  `id_bagus` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_foto_bagus`
--

INSERT INTO `tbl_foto_bagus` (`id_foto`, `id_bagus`, `foto`) VALUES
(2, 1, '318458798_556130412510580_5174515618610548653_n1.jpg'),
(3, 1, '448258791_18007844885576329_5071266956326590664_n.jpg'),
(4, 3, '302050351_138006998711086_1781253519676945369_n.jpg'),
(5, 2, '320603524_2394961197327120_3729949926717381703_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_mewah`
--

CREATE TABLE `tbl_foto_mewah` (
  `id_foto` int(11) NOT NULL,
  `id_mewah` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_foto_mewah`
--

INSERT INTO `tbl_foto_mewah` (`id_foto`, `id_mewah`, `foto`) VALUES
(4, 1, '318458798_556130412510580_5174515618610548653_n.jpg'),
(5, 1, '448258791_18007844885576329_5071266956326590664_n.jpg'),
(6, 3, 'Snapinsta_app_167636359_493576198327501_1553888326136073381_n_10241.jpg'),
(7, 2, '320603524_2394961197327120_3729949926717381703_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_murah`
--

CREATE TABLE `tbl_foto_murah` (
  `id_foto` int(11) NOT NULL,
  `id_murah` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_foto_murah`
--

INSERT INTO `tbl_foto_murah` (`id_foto`, `id_murah`, `foto`) VALUES
(3, 1, '318458798_556130412510580_5174515618610548653_n.jpg'),
(4, 1, '448258791_18007844885576329_5071266956326590664_n.jpg'),
(5, 1, '448346657_18007844876576329_7389225056338954816_n.jpg'),
(6, 3, 'Snapinsta_app_167636359_493576198327501_1553888326136073381_n_10241.jpg'),
(7, 2, '320603524_2394961197327120_3729949926717381703_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `id` int(11) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`id`, `id_user_level`, `id_menu`) VALUES
(21, 2, 1),
(28, 2, 3),
(29, 2, 2),
(31, 1, 10),
(32, 1, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kitchen Set'),
(2, 'Backdrop'),
(3, 'Top Table'),
(4, 'Meja'),
(5, 'Lemari'),
(6, 'Partisi'),
(7, 'Pintu'),
(8, 'Dipan'),
(9, 'Hambalan Dinding'),
(10, 'Kusen'),
(11, 'Backsplash'),
(12, 'Tusir Resin'),
(13, 'Rak'),
(14, 'Kursi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL COMMENT 'y=yes,n=no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `title`, `url`, `icon`, `is_main_menu`, `is_aktif`) VALUES
(1, 'KELOLA MENU', 'kelolamenu', 'fa fa-server', 0, 'y'),
(2, 'KELOLA PENGGUNA', 'user', 'fa fa-user-o', 0, 'y'),
(3, 'level PENGGUNA', 'userlevel', 'fa fa-users', 0, 'y'),
(9, 'Contoh Form', 'welcome/form', 'fa fa-id-card', 0, 'y'),
(10, 'DATA HARGA', '-', 'fa fa-money', 0, 'y'),
(11, 'MEWAH', 'tbl_mewah', 'fa', 10, 'y'),
(12, 'BAGUS/IDEAL', 'tbl_bagus', 'fa', 10, 'y'),
(13, 'MURAH', 'tbl_murah', 'fa', 10, 'y'),
(14, 'INTERIOR', '-', 'fa fa-bed', 0, 'y'),
(15, 'KATEGORI', 'tbl_kategori', 'fa', 14, 'y'),
(16, 'HARGA BARANG', 'tbl_barang', 'fa', 14, 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mewah`
--

CREATE TABLE `tbl_mewah` (
  `id_mewah` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mewah`
--

INSERT INTO `tbl_mewah` (`id_mewah`, `tipe`, `harga`) VALUES
(1, 'Classic', 6000000),
(2, 'Skandinavian', 5000000),
(3, 'Minimalis', 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_murah`
--

CREATE TABLE `tbl_murah` (
  `id_murah` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_murah`
--

INSERT INTO `tbl_murah` (`id_murah`, `tipe`, `harga`) VALUES
(1, 'Classic', 3500000),
(2, 'Skandinavian', 3000000),
(3, 'Minimalis', 2800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_satuan`
--

CREATE TABLE `tbl_satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_satuan`
--

INSERT INTO `tbl_satuan` (`id_satuan`, `nama_satuan`) VALUES
(1, 'm/m2'),
(2, 'm2'),
(3, 'm'),
(4, 'unit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `nama_setting` varchar(50) NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `nama_setting`, `value`) VALUES
(1, 'Tampil Menu', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_users` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_users`, `full_name`, `email`, `password`, `images`, `id_user_level`, `is_aktif`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 1, 'y'),
(3, 'Faisal', 'it@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 2, 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id_user_level` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id_user_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'IT');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bagus`
--
ALTER TABLE `tbl_bagus`
  ADD PRIMARY KEY (`id_bagus`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_foto_bagus`
--
ALTER TABLE `tbl_foto_bagus`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tbl_foto_mewah`
--
ALTER TABLE `tbl_foto_mewah`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tbl_foto_murah`
--
ALTER TABLE `tbl_foto_murah`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tbl_mewah`
--
ALTER TABLE `tbl_mewah`
  ADD PRIMARY KEY (`id_mewah`);

--
-- Indeks untuk tabel `tbl_murah`
--
ALTER TABLE `tbl_murah`
  ADD PRIMARY KEY (`id_murah`);

--
-- Indeks untuk tabel `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indeks untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bagus`
--
ALTER TABLE `tbl_bagus`
  MODIFY `id_bagus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_bagus`
--
ALTER TABLE `tbl_foto_bagus`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_mewah`
--
ALTER TABLE `tbl_foto_mewah`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_murah`
--
ALTER TABLE `tbl_foto_murah`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_mewah`
--
ALTER TABLE `tbl_mewah`
  MODIFY `id_mewah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_murah`
--
ALTER TABLE `tbl_murah`
  MODIFY `id_murah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
