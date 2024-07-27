-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Jul 2024 pada 08.07
-- Versi server: 8.0.30
-- Versi PHP: 7.4.33

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
  `id_bagus` int NOT NULL,
  `tipe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_denah` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_bagus`
--

INSERT INTO `tbl_bagus` (`id_bagus`, `tipe`, `harga`, `foto`, `foto_denah`) VALUES
(1, 'Classic', 5000000, '9bad78ad076389b7deba6dfe5d4360e9.jpg,27114d02bd30cfd9558d52ecae8857d0.jpg', ''),
(2, 'Skandinavian', 4000000, '', ''),
(3, 'Minimalis', 4000000, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int NOT NULL,
  `id_kategori` int NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `harga_a` int NOT NULL,
  `harga_b` int NOT NULL,
  `harga_c` int NOT NULL,
  `id_satuan` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_kategori`, `nama_barang`, `harga_a`, `harga_b`, `harga_c`, `id_satuan`, `foto`) VALUES
(1, 1, 'Kitchen Set Bawah', 2200000, 1760000, 1540000, 1, '9f715f88d1a7ea5223b0690ef077e8ba.jpg,fc9792b332f8f00395d475c80da210e4.jpg,07d8e91dea3a4c2764a660fa9d9161dd.jpg'),
(2, 1, 'Kitchen Set Atas', 2200000, 1760000, 1540000, 1, '28066985b7b977faf86d364cbed6219a.jpg,4448466a7de3a7b652848386e0a0ac82.jpg,17b1e8e9250b9a86aef815b2e37a9c65.jpg'),
(3, 2, 'Backdrop Satu Sisi Biasa', 1600000, 1280000, 1120000, 2, 'd7c22ab28f880cedcb243d64468c12f5.jpg'),
(4, 1, 'Kitchen Set Atas/Bawah Pintu Kisi', 2500000, 2000000, 1750000, 1, '23f43a61f92714734120fcae01644219.jpg,5a4d93a49b28697fa7128bff5447ce3b.jpg,eb67adaf1e66ed2c5a0ced6895b386f8.jpg'),
(5, 3, 'Top Table AICA Toughtop', 1300000, 1040000, 910000, 1, 'fbba5d5419e949c0b9de85e59876e12b.jpg,98451f9a7c66d7b86b34fea347f452ce.jpg,949fd9b44ca4332e653ea0d6ba118cd9.jpg'),
(6, 2, 'Backdrop Dua Sisi Biasa', 2000000, 1600000, 1400000, 2, '4a20c89f3424f87bfca352f6fcbf6e2e.jpg'),
(7, 2, 'Backdrop Satu Sisi Model', 1800000, 1440000, 1260000, 2, '8eba48529300d64d2e444bd331f6609d.jpg,2e5099f09a8d729d77e2334b6a6dcd9c.jpg'),
(8, 2, 'Backdrop Dua Sisi Model', 2200000, 1760000, 1540000, 2, '1b001c9c4fe3f1cf1856d1eefada53f9.jpg'),
(9, 4, 'Meja Kosongan', 2000000, 1600000, 1400000, 1, '818c3ba8cfc4611725fc5f1384ec4b1e.jpg'),
(10, 4, 'Meja Model Laci', 2200000, 1760000, 1540000, 1, '20691e212a4d1333c52325686732f748.jpg,2d4929a8f30ce007c32754bb86dc5cbf.jpg,1a9d5bd3f5765760ac232b01f1dd44b8.jpg'),
(11, 4, 'Meja Bar', 2200000, 1760000, 1540000, 1, 'acf0ddff405e64c44e849eb294d3673a.jpg,0887071d855e5e13ee76b69b533b4499.jpg'),
(12, 4, 'Credensa TV/Meja Gantung', 1600000, 1280000, 1120000, 3, '64f65708a4896b0df6eedab8bfaad443.jpg'),
(13, 5, 'Lemari Kulkas Kosongan', 2000000, 1600000, 1400000, 2, 'd7a14c581e5f04fe85fb2f22ef4d62d6.jpg'),
(14, 5, 'Lemari Rak Tanpa Pintu Full HPL', 2000000, 1600000, 1400000, 2, '4bd066cb191d2ae257384fc27bcb4bdb.jpg'),
(15, 5, 'Lemari Rak Tanpa Pintu Dalaman Putih', 1800000, 1440000, 1260000, 2, '9442458b6946604a5b6a8f09911af7ed.jpg,b9157f4818786f93e9b02c1a079511e8.jpg'),
(16, 5, 'Lemari Model Pintu', 2000000, 1600000, 1400000, 2, '519e8112048d81f624250d33d6c5a05c.jpg,c5a90d0f6b23742da5eadde9f0913f55.jpg'),
(17, 6, 'Partisi Biasa', 1800000, 1440000, 1260000, 2, '423d45ec9e8cb1acfbcb831bfc56cabc.jpg,cc3ece841a2d62a4c1419dc5f75df433.jpg'),
(18, 6, 'Partisi Model', 1800000, 1440000, 1260000, 2, '61cdc4839dc138d6993377a2d3548a3b.jpg,3512ba2ac3b5b8524d95c471252eb4b6.jpg'),
(19, 6, 'Partisi Biasa 2 Sisi', 2000000, 1600000, 1400000, 2, '56409339e2cacaf76a8815944d13101c.jpg'),
(20, 6, 'Partisi Model 2 Sisi', 2200000, 1760000, 1540000, 2, '18e9fb2d547f50ce1a959df792545f29.jpg,f5f4ef32ef4d57c761c8e0d90370796e.jpg'),
(21, 7, 'Pintu Swing Biasa + Aksesoris', 2500000, 2000000, 1750000, 4, '6fd7f3951e538c05f0b551d8b8b5dc0d.jpg'),
(22, 7, 'Pintu Geser + Aksesoris', 3000000, 2400000, 2100000, 4, 'fcedad2e445a04ef81c66a85fc6b81b0.jpg'),
(23, 7, 'Pintu Swing Model + Aksesoris', 3000000, 2400000, 2100000, 4, '77d62ae5e0c99a51270d3b6b52ffd835.jpg,fadf53122b1b6af75cc08d9d916aead3.jpg'),
(24, 7, 'Pintu Geser Model + Aksesoris', 3500000, 2800000, 2450000, 4, 'a814f4b1ac06f0737b978e831e871461.jpg,69f7992176666faa0ab907e15f9e23ab.jpg'),
(25, 7, 'Pintu Koboy + Aksesoris', 1200000, 960000, 840000, 4, 'fa653fe476ee5b32f602b8b27303515f.jpg,3c8b746f2da61f26f77eff674d0145e3.jpg,69b8abebd99d75052cc616c01f59b3b7.jpg'),
(26, 8, 'Dipan Biasa Tanpa Storage', 1400000, 1120000, 980000, 4, 'cf7f14dcf8cf26cf04edadee48fea3e4.jpg,3f04a1911f1aacd75774c2987d8b4693.jpg,a3726f94709faa3a3fe36f6138f84ba6.jpg'),
(27, 8, 'Dipan Dengan Storage', 1750000, 1400000, 1225000, 4, '75bdd6d801b5a338027b68752c32a791.jpg,6ddf6555c0b5ae88fdc883c578e59108.jpg'),
(28, 9, 'Hambalan Dinding', 450000, 360000, 315000, 3, '9020662cac5026e4c8a2cb2b1c933cdc.jpg,4a3ab0ee157617875931d697c699cbfd.jpg,0de6ebb7422803645f880f6df48f5b6b.jpg'),
(29, 4, 'Meja Nakas', 2000000, 1600000, 1400000, 3, '14cb19722cb19ef641e28c75c69b8daf.jpg,d7c797b20ab2f6cfd85b37249b28210b.jpg'),
(30, 10, 'Kusen', 450000, 360000, 315000, 3, 'a81ecafc04343b4f7778422987c50b68.jpg,31d67a291da0ef9a8175d493a6fea72d.jpg,3905fa1484718971e531eef978e135e6.jpg'),
(31, 11, 'Backsplash AICA Cerarl + Plywood', 1250000, 1000000, 875000, 3, 'd05492c9e2dce8d19b3c878d7aa462af.jpg,40789138e2c0d736c183fd7228855256.jpg,219c6e907f87116308b09c599e1cfe2c.jpg'),
(32, 11, 'Backsplash AICA Cerarl Tanpa Plywood', 1000000, 800000, 700000, 3, 'ed4669d8fb6b832797aa6ec3defc51e4.jpg,5eb1d93daf9d45227e9834b1595a8ac8.jpg,03d57b5133c90dc66fedab4c3a3f4259.jpg'),
(33, 11, 'Backsplash Plywood + HPL', 1600000, 1280000, 1120000, 3, 'fb0d9a46002829d6b2e6c9603a3f1ead.jpg'),
(34, 12, 'Tusir Resin', 500000, 400000, 350000, 3, 'eb05b290d342e6c4c62994c9f3b0b6d4.jpg'),
(35, 13, 'Rak Sepatu Tanpa Pintu', 1800000, 1440000, 1260000, 1, '0145b336104baf9ed6ed5a912063d910.jpg,e716dd824dff1d1d280b02a7c6df803a.jpg'),
(36, 13, 'Rak Sepatu + Pintu', 2000000, 1600000, 1400000, 1, 'a57add3aafd3f8d70f4ea6006e609069.png,785be5e0960fbc6dbe8f83ddb48665ee.png'),
(37, 14, 'Kursi Standar (Bentuk Kotak/Persegi Panjang)', 1800000, 1440000, 1260000, 1, 'c5562efef13523698be0789820bb73a6.jpg'),
(40, 14, 'Kursi Model Lengkung', 2000000, 1600000, 1400000, 1, 'df9a3606651fa795a6a4bdabedb839b7.jpg,33c7156da1b252097f49ba73fe816155.jpg,ab7461262d1d0afb2a638909b814b1a0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_bagus`
--

CREATE TABLE `tbl_foto_bagus` (
  `id_foto` int NOT NULL,
  `id_bagus` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Struktur dari tabel `tbl_foto_denah`
--

CREATE TABLE `tbl_foto_denah` (
  `id_foto_denah` int NOT NULL,
  `ukuran_awal` int NOT NULL,
  `ukuran_akhir` int NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_foto_denah`
--

INSERT INTO `tbl_foto_denah` (`id_foto_denah`, `ukuran_awal`, `ukuran_akhir`, `foto`) VALUES
(1, 36, 44, '891631bb1083456b6f01e8c437db5c6b.jpg,bb372d9f78f533627a6004908b65dbda.jpg,3065b8dfe58c5dba7ef4cc3fa45d3b6d.jpg,09d051b819f9d5731eebda78cbf1da82.jpg'),
(2, 45, 55, '2c11db6d4dc58ba27c30093419bcdb4d.jpg,8b86950f6eb2d396e6bc71c695d86f75.jpg,5e21b2fdbd6166fce78dedb827683013.jpg,b9a91ed48fc55ae13b7843c10c477052.jpg,30f8142b16712955d939fb1b475280e7.jpg,709479276d42edc2f9e31e47eaf8c3b4.jpg'),
(3, 56, 69, 'a926ad2326e6c854c63aafe95e31032d.jpg,fd57fa1aaccf3201a095a06e0c0c2c11.jpg,c0665f96261ba66b34035472cd052bf0.jpg'),
(4, 70, 99, '904dc99bf9bbd57e40193d72a6376aa6.jpg,17a3f746dfe5e2a898cc43fce147cca3.jpg,c23ee3c39836c577ca6d56c328f1d9c1.png'),
(5, 100, 149, 'e1274a95cc4c7584b58b084dcc82a66b.jpg,d1ed91aa51bc882520f7981209d0f57b.jpg,445eef25bd312b12141d597697f7873c.png'),
(6, 150, 199, '1d586394a3fe282ccee9ca4ed7f0d59e.jpg,07248b2b39e0ec582af3edee9f21afdb.png,301804db2a39fdcdbe92cbe95d7ff006.png'),
(7, 200, 249, 'c1c451232fc7ad04ffe654e56c4a68a1.jpg,57428f271dcd514490f654f88673a781.jpg,225d5fa5baa001772be8f080b2465ecd.jpg'),
(8, 250, 300, '41f02d9d8942aebb71ee266d32147f01.jpg,75c984ac0b672793f173255df081fada.jpg,e9b87279fb2f8bb376895142f462212e.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_mewah`
--

CREATE TABLE `tbl_foto_mewah` (
  `id_foto` int NOT NULL,
  `id_mewah` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `id_foto` int NOT NULL,
  `id_murah` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Struktur dari tabel `tbl_foto_rumah`
--

CREATE TABLE `tbl_foto_rumah` (
  `id_foto_rumah` int NOT NULL,
  `id_tipe` int NOT NULL,
  `ukuran_awal` int NOT NULL,
  `ukuran_akhir` int NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_foto_rumah`
--

INSERT INTO `tbl_foto_rumah` (`id_foto_rumah`, `id_tipe`, `ukuran_awal`, `ukuran_akhir`, `foto`) VALUES
(1, 1, 36, 44, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(2, 2, 36, 44, '0df5ea5b99c342370973ed5fe92b52fc.jpg,32ca78d891e9833449b636af7ed1118f.jpg,d74000417addc7da34001c8ba2a07a40.jpg'),
(3, 3, 36, 44, '5424afc9f6b04588bf08fbbf1cfb42c6.jpg,4d0dd624c071ed938ebd4d5fd7b5d948.jpg,afdf71f38907cba44e64dde7fe186687.jpg'),
(4, 1, 45, 55, 'f510898f29141365035da395d42b9fd2.jpg'),
(5, 2, 45, 55, '034a8a7575b861196a33f572c922c252.jpg,f6716fa5115acda9877a558cdc5659e4.jpg,a2317c07f886215166b11a8b42fa9277.jpg'),
(6, 3, 45, 55, '0708205c77d7d601c53fc6076783a7c4.jpg,8bfff19f6b189b7359662f8b7979d5fc.jpg,973f6ba81be2c2cafe9bd4d9347c70a5.jpg'),
(7, 1, 56, 69, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(8, 2, 56, 69, '376b89e3c0e71a489a7d887d08770e73.jpg,9345b3f47488b38e510cd4aef49a91ab.jpg,aa43de87c62b30a0950d0c2bd45751d8.jpg'),
(9, 3, 56, 69, '8bff70e935f06c422b2cdd8ec88e2249.jpg,c40c57e025d559199a31bad14c35f8e3.jpg,66d354c85faa9bfe5a1d743a64da48f1.jpg,462971c03d1bc4ab4887a902028e10d2.jpg'),
(10, 1, 70, 99, 'bb55b530e86964b37baa1b12b222ba7c.jpg,99af71f9d47a5ba6941d12a56da2884d.jpg'),
(11, 2, 70, 99, 'e1fbaf332e4bdface4d360cfe1dfd09e.jpg,967927eba00e4bd8104f20ca795870f2.jpg,209f3a9c7919e51be48b5dd7d61160ee.jpg'),
(12, 3, 70, 99, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(13, 1, 100, 149, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(14, 2, 100, 149, '2b35dfe0526988fa8b3cdc38157667fe.jpg,2f50f219d858fca15b80897d22fc3a1f.jpg,459731aeb166875791a6afc3c10bd3a4.jpg,b63ab7b38508b109542bd15f54552640.jpg'),
(15, 3, 100, 149, '183c2328fef2fd11b5e0ddb0954db0b7.jpg,b4231133d326e68632b952e99f44adf7.jpg,acdc5c00b9764c7ab5f5f9f0fb5af25b.jpg'),
(16, 1, 150, 199, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(17, 2, 150, 199, '2e8db7877e2fc38d36d0fdfa963ce898.jpg,a7cb6993f4f9ed23035ffb71d2dbf1a7.jpg,d28bf63a942dad4a52fc39b614cde271.jpg'),
(18, 3, 150, 199, '016976521a702af2bffd59f5d881888e.jpg,924bc7a838c8460fef947942d0ff8d7c.jpg,23a3310a9e1b762f5f0510e714c45c16.jpg'),
(19, 1, 200, 249, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(20, 2, 200, 249, '5e012641911f8a848aa8396b3b71cfae.jpg,676a44a71b3581216f3599e697707e1b.jpg,e2b2a5d0c7ce21335397cf840c9d7060.jpg'),
(21, 3, 200, 249, '121fc29b7edc9b22151a0a3cbcebe879.jpg,98c77f7e7d2708e97a236f3cf5c757a4.jpg,9a1b63309a915eb7832b3dd48003d782.jpg'),
(22, 1, 250, 300, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(23, 2, 250, 300, '60dcefb720340dc9f002dd3399f83307.jpg,1276b0c39da98753b30257c276454790.jpg,f019617b7f65cde8003dda61dfb30d24.jpg'),
(24, 3, 250, 300, 'cd41653f1dc74004cf4ff0492f92869c.jpg,5a7c8a719695cc8f85af9f9c698c39b2.jpg,3c2a1d8fd960ec07e0a2c40c9019b819.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `id` int NOT NULL,
  `id_user_level` int NOT NULL,
  `id_menu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`id`, `id_user_level`, `id_menu`) VALUES
(21, 2, 1),
(28, 2, 3),
(29, 2, 2),
(31, 1, 10),
(32, 1, 14),
(33, 1, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `id_menu` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int NOT NULL,
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
(16, 'HARGA BARANG', 'tbl_barang', 'fa', 14, 'y'),
(17, 'DATA FOTO', '-', 'fa fa-picture-o', 0, 'y'),
(18, 'foto denah', 'tbl_foto_denah', 'fa', 17, 'y'),
(19, 'foto rumah', 'tbl_foto_rumah', 'fa', 17, 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mewah`
--

CREATE TABLE `tbl_mewah` (
  `id_mewah` int NOT NULL,
  `tipe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_denah` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mewah`
--

INSERT INTO `tbl_mewah` (`id_mewah`, `tipe`, `harga`, `foto`, `foto_denah`) VALUES
(1, 'Classic', 6000000, 'afe504811c65e4cc3c1aad728fe85a84.jpg,6c76b05aac337cc394a4aa0ae6b84007.jpg', '97cd234621688f656d9021ba1392a987.jpg'),
(2, 'Skandinavian', 5000000, '', ''),
(3, 'Minimalis', 5000000, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_murah`
--

CREATE TABLE `tbl_murah` (
  `id_murah` int NOT NULL,
  `tipe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_denah` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_murah`
--

INSERT INTO `tbl_murah` (`id_murah`, `tipe`, `harga`, `foto`, `foto_denah`) VALUES
(1, 'Classic', 3500000, '3c638c2c3fac11e7d5c35c45272f7a9d.jpg,7e21a4562a5fe6f5fb204bb68e90dd28.jpg', '6d568ac67f7a475454299a44c9ab2ec7.jpg'),
(2, 'Skandinavian', 3000000, '', ''),
(3, 'Minimalis', 2800000, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_satuan`
--

CREATE TABLE `tbl_satuan` (
  `id_satuan` int NOT NULL,
  `nama_satuan` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `id_setting` int NOT NULL,
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
  `id_users` int NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `id_user_level` int NOT NULL,
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
  `id_user_level` int NOT NULL,
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
-- Indeks untuk tabel `tbl_foto_denah`
--
ALTER TABLE `tbl_foto_denah`
  ADD PRIMARY KEY (`id_foto_denah`);

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
-- Indeks untuk tabel `tbl_foto_rumah`
--
ALTER TABLE `tbl_foto_rumah`
  ADD PRIMARY KEY (`id_foto_rumah`);

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
  MODIFY `id_bagus` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_bagus`
--
ALTER TABLE `tbl_foto_bagus`
  MODIFY `id_foto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_denah`
--
ALTER TABLE `tbl_foto_denah`
  MODIFY `id_foto_denah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_mewah`
--
ALTER TABLE `tbl_foto_mewah`
  MODIFY `id_foto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_murah`
--
ALTER TABLE `tbl_foto_murah`
  MODIFY `id_foto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_rumah`
--
ALTER TABLE `tbl_foto_rumah`
  MODIFY `id_foto_rumah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_mewah`
--
ALTER TABLE `tbl_mewah`
  MODIFY `id_mewah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_murah`
--
ALTER TABLE `tbl_murah`
  MODIFY `id_murah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id_satuan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id_user_level` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
