-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2024 at 03:13 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

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
-- Table structure for table `tbl_bagus`
--

CREATE TABLE `tbl_bagus` (
  `id_bagus` int NOT NULL,
  `tipe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_denah` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bagus`
--

INSERT INTO `tbl_bagus` (`id_bagus`, `tipe`, `harga`, `foto`, `foto_denah`) VALUES
(1, 'Classic', 5000000, '9bad78ad076389b7deba6dfe5d4360e9.jpg,27114d02bd30cfd9558d52ecae8857d0.jpg', ''),
(2, 'Skandinavian', 4000000, '', ''),
(3, 'Minimalis', 4000000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int NOT NULL,
  `id_kategori` int NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `harga_a` int NOT NULL,
  `harga_b` int NOT NULL,
  `harga_c` int NOT NULL,
  `id_satuan` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_b` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_c` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_kategori`, `nama_barang`, `harga_a`, `harga_b`, `harga_c`, `id_satuan`, `foto`, `foto_b`, `foto_c`) VALUES
(1, 1, 'Kitchen Set Bawah', 2200000, 1760000, 1540000, 1, '9f715f88d1a7ea5223b0690ef077e8ba.jpg,fc9792b332f8f00395d475c80da210e4.jpg,07d8e91dea3a4c2764a660fa9d9161dd.jpg', '', ''),
(2, 1, 'Kitchen Set Atas', 2200000, 1760000, 1540000, 1, '28066985b7b977faf86d364cbed6219a.jpg,4448466a7de3a7b652848386e0a0ac82.jpg,17b1e8e9250b9a86aef815b2e37a9c65.jpg', '', ''),
(4, 1, 'Kitchen Set Atas/Bawah Pintu Kisi', 2500000, 2000000, 1750000, 1, 'a2778c31e5a8513372e95d6f572075a6.jpeg,5ac94190bb54ef81a0748eda426f19eb.jpeg,a4d5b1f9a3fa1ec0ea15c39ca2c80264.jpeg,bd21c26260b607f27c04aa4d99842422.jpeg', 'b64998e0f7395fa4c452dcce15cc57b6.jpeg,90bc06364bb0a2775745fce458a9c188.jpeg,4fb911b0570437fbc1420e32fa2e7657.jpeg,5cc57af0e2434ca3bf1ba9b066248c3d.jpeg,aa52da3a5133b96b60a96f59ae8e9a02.jpeg', '5f0b068fe036e61ca48e268d48758072.jpeg,3082e7d03f49c9d289441e4c122bbe6b.jpeg,bb380eeed14a63e4f1cdccd765035a10.jpeg,7720f2851960462d0a03b2dd701343bd.jpeg,79fab6ef76b23dc606907d0357f83212.jpeg,11a7d7c29a89724846629c22118054bb.jpeg,6fb981ceea3bdca7b076d1d168fa5e78.jpeg,d97e6bade380a1559de2129446e40503.jpeg'),
(5, 3, 'Top Table AICA Toughtop', 1300000, 1040000, 910000, 1, 'fbba5d5419e949c0b9de85e59876e12b.jpg,98451f9a7c66d7b86b34fea347f452ce.jpg,949fd9b44ca4332e653ea0d6ba118cd9.jpg', '', ''),
(7, 2, 'Backdrop Satu Sisi', 1800000, 1440000, 1260000, 2, '971bd2a9be0cd73c41ce865fab4cfa44.jpeg,54b29f0175e7c867f21fd43c706e0fdb.jpeg,6c84107b0f31614a507128d9367b8e21.jpeg,61a5cbd9f622d54acc2db570ec6bc332.jpeg,bfbbce48aa5c6b536fc502ab3131e453.jpeg', 'ec1f61ddf0e6cc1b3de4a48d5231338f.jpeg,26e3f314ea85928a172adb90e7c7938d.jpeg,421e6e750a3a7e10ed78a7c6bf105d2f.jpeg,67c81e26b2b26727bc8fd6c96b3b929e.jpeg,3e68503cdeb8cbbe9abef3870f9d66b7.jpeg', 'b3c335ea3f21d7c6928f6a4b4cc2c0ba.jpeg,8b2d9fcd2ba1b22a1115fec0481c97db.jpeg,ac521c787d5d71996177a5b32f98cae0.jpeg,0e211625d9c93c43a03457d8e4d01126.jpeg,e2067bb25227df6305786beaa9cfd9ba.jpeg'),
(8, 2, 'Backdrop Dua Sisi ', 2200000, 1760000, 1540000, 2, '1b001c9c4fe3f1cf1856d1eefada53f9.jpg', '', ''),
(9, 4, 'Meja Kosongan', 2000000, 1600000, 1400000, 1, '818c3ba8cfc4611725fc5f1384ec4b1e.jpg', '', ''),
(10, 4, 'Meja Model Laci', 2200000, 1760000, 1540000, 1, '20691e212a4d1333c52325686732f748.jpg,2d4929a8f30ce007c32754bb86dc5cbf.jpg,1a9d5bd3f5765760ac232b01f1dd44b8.jpg', '', ''),
(11, 4, 'Meja Bar', 2200000, 1760000, 1540000, 1, 'acf0ddff405e64c44e849eb294d3673a.jpg,0887071d855e5e13ee76b69b533b4499.jpg', '', ''),
(12, 4, 'Credensa TV/Meja Gantung', 1600000, 1280000, 1120000, 3, '64f65708a4896b0df6eedab8bfaad443.jpg', '', ''),
(13, 5, 'Lemari Kulkas Kosongan', 2000000, 1600000, 1400000, 2, '7dbe1e50a0e82ac52f13c59d31942b2d.png,12e8389437c18ba03791d0e75ddd5a68.png,ad6b726d1c476fe63ca5f1142ef90096.png,ab1c2e994bf575423a4f01ca79f254ee.png,bee2c1c00492a9314ec56e257b649e50.png,62195a791f21b6992f4730db6ff33f87.png', '7e56185c70224e09a4f9d4ee0a4f9f5e.png,fa7e88a1bc6c209139849131e90e7ba6.png,7da45a2197652f1a09d9931f8fe2676a.png', 'dadac4232d3437ef4c90bfc6cda41d38.png,bf9e49c31d95d6c219f4d48bf55cd1a3.png'),
(14, 5, 'Lemari Rak Tanpa Pintu Full HPL', 2000000, 1600000, 1400000, 2, 'c14c94eeb11c322c9dc034a653b714be.png,97ceb54237213f9bc3b2ef4dc8f6d420.png,94c0fa8c3e6927740881468a2157b43f.png', 'ab160c760c493e16df2e6ce424a6df27.png,696d4873d74538efb7572ef4292cb62e.png', '302ce0da1e5a962b8668be15bf375679.png,29a6308fb1ff1837aa89b25058a77d45.png'),
(15, 5, 'Lemari Rak Tanpa Pintu Dalaman Putih', 1800000, 1440000, 1260000, 2, '22c4a86b2c8271f459341708fa2e88e1.png,0ab0036e489bdba7b25cda90c909051c.png,fdc17921b489df5b1441a505b02f252f.png', '65a7374cc15b672b77e03836627faf16.png,376c37c7ceaadf00d46cd57203b8b1e0.png', '8ec5eaf88db9e83ea273c34abcafded2.png,6e5f07e01e21cd30cf1ca189cdae9ade.png'),
(16, 5, 'Lemari Model Pintu', 2000000, 1600000, 1400000, 2, '9c5fbdd36ddc2574c3ac563ecccec487.jpg,eddba8c60121e22bd767951fcc416e74.jpg,faffb7b032653d3dc30891c8ca6abdb5.jpg,d566f68a9f99d424f1c75d09f07c8b25.png,1aeefa53dd97fb075ee1fcabc4c03437.png', '03e5e2e491a73cb0fb0d903085fdcf22.png,a8bc20f482dd2a270f70d76f9af39765.png,3ba351ffbb810fe2131d6a931401dba7.png', '87c8fa849290acb45a04c390e4431f29.png,a761f2fd5468a5dc272676a89844ebb5.png,27f7fa8e56718c24280cbaa74f73d49e.png'),
(17, 6, 'Partisi Biasa ', 1800000, 1440000, 1260000, 2, '7a2f87c2037a38ca24a636fdf695a894.jpg', '29677f0a2fa4cf862b7975bdc8d939c3.png', ''),
(18, 6, 'Partisi Model', 1800000, 1440000, 1260000, 2, '7d22cbed27cd4955aceafe6590350cb3.jpg', 'f4504c2ae0f0dfb2f60d9b7d3bc07e80.png', ''),
(19, 6, 'Partisi Biasa 2 Sisi', 2000000, 1600000, 1400000, 2, '56409339e2cacaf76a8815944d13101c.jpg,231e0be787b580352d345fb4bce5d300.png', '2155994bf5c724c5c9b4e9f97d58f08b.png', ''),
(20, 6, 'Partisi Model 2 Sisi', 2200000, 1760000, 1540000, 2, '5d379bc593b380421afa0c7d882091f3.jpg', 'edc4bd9565a18171586de41d6e4294c8.png', ''),
(21, 7, 'Pintu Swing Biasa + Aksesoris', 2500000, 2000000, 1750000, 4, '6fd7f3951e538c05f0b551d8b8b5dc0d.jpg', '', ''),
(22, 7, 'Pintu Geser + Aksesoris', 3000000, 2400000, 2100000, 4, 'fcedad2e445a04ef81c66a85fc6b81b0.jpg', '', ''),
(23, 7, 'Pintu Swing Model + Aksesoris', 3000000, 2400000, 2100000, 4, '77d62ae5e0c99a51270d3b6b52ffd835.jpg,fadf53122b1b6af75cc08d9d916aead3.jpg', '', ''),
(24, 7, 'Pintu Geser Model + Aksesoris', 3500000, 2800000, 2450000, 4, 'a814f4b1ac06f0737b978e831e871461.jpg,69f7992176666faa0ab907e15f9e23ab.jpg', '', ''),
(25, 7, 'Pintu Koboy + Aksesoris', 1200000, 960000, 840000, 4, 'fa653fe476ee5b32f602b8b27303515f.jpg,3c8b746f2da61f26f77eff674d0145e3.jpg,69b8abebd99d75052cc616c01f59b3b7.jpg', '', ''),
(26, 8, 'Dipan Biasa Tanpa Storage', 1400000, 1120000, 980000, 4, '11c3adadb5234fe80b5db2e776503d7d.png', '9d97edd20761014cbab1fe53d1389cb2.png', ''),
(27, 8, 'Dipan Dengan Storage', 1750000, 1400000, 1225000, 4, 'd63d6291e845555735a93586a6605925.png,ee538dc4fd52ecc301d8c774d0429b9f.png', '', ''),
(28, 9, 'Hambalan Dinding', 450000, 360000, 315000, 3, '', 'e8e0af46fa7876de9f0d3d29a6e48bcc.jpg', ''),
(29, 4, 'Meja Nakas', 2000000, 1600000, 1400000, 3, '14cb19722cb19ef641e28c75c69b8daf.jpg,d7c797b20ab2f6cfd85b37249b28210b.jpg', '', ''),
(30, 10, 'Kusen', 450000, 360000, 315000, 3, 'a81ecafc04343b4f7778422987c50b68.jpg,31d67a291da0ef9a8175d493a6fea72d.jpg,3905fa1484718971e531eef978e135e6.jpg', '', ''),
(31, 11, 'Backsplash AICA Cerarl + Plywood', 1250000, 1000000, 875000, 3, 'd05492c9e2dce8d19b3c878d7aa462af.jpg,40789138e2c0d736c183fd7228855256.jpg,219c6e907f87116308b09c599e1cfe2c.jpg', '', ''),
(32, 11, 'Backsplash AICA Cerarl Tanpa Plywood', 1000000, 800000, 700000, 3, 'ed4669d8fb6b832797aa6ec3defc51e4.jpg,5eb1d93daf9d45227e9834b1595a8ac8.jpg,03d57b5133c90dc66fedab4c3a3f4259.jpg', '', ''),
(33, 11, 'Backsplash Plywood + HPL', 1600000, 1280000, 1120000, 3, 'fb0d9a46002829d6b2e6c9603a3f1ead.jpg', '', ''),
(34, 12, 'Tusir Resin', 500000, 400000, 350000, 3, 'eb05b290d342e6c4c62994c9f3b0b6d4.jpg', '', ''),
(35, 13, 'Rak Sepatu Tanpa Pintu', 1800000, 1440000, 1260000, 1, '963cd560980c05d2644156038d5dff26.jpeg,5195f6ad9911778c28b81560b38e1f0e.jpeg,7799ecc72fee49d6366e1298cd2ed44b.jpeg,e0a88605eee4e1d6ab9f7fed4554e8db.jpeg,36daea66f196ca55566167cc99545ef1.jpeg,65f14b94f379a8fbeb172c98d2714db5.jpeg', '750017a6f5fb96ce82a56bd56813ffba.jpeg,a062e80f5325f24b46bd2f92d7d1dae1.jpeg,26fe77c6dede558b7462f69f440e914c.jpeg', 'b072337df4920ff562b26e28e855b939.jpeg,53854741ab554e9554d148d8b8ff078f.jpeg,ad830ad3abb1ff76c11e7de81b24d1f3.jpeg,382a62f7ba12ecb43e40c1d4abcff1a6.jpeg,0c952f21e35a07a2e583188f92f9c322.jpeg'),
(36, 13, 'Rak Sepatu + Pintu', 2000000, 1600000, 1400000, 1, '3893b743ec638c5ed33398cc2a9e945c.jpeg,0b251640b826425cd43065e48ded9ebc.jpeg,a5d635400d1521011f4a379f0a90fa21.jpeg,d475a49b087041b2d692ff913a4d2fd4.jpeg,909b73866e8b574822a04370c834df1e.jpeg,13869f0125e9b27d4895db2c1f87d11b.jpeg', '449e588a59867a916930ae2968d59909.jpeg,98dbfff821167751881cfab698a171c8.jpeg,0c7829ffaaf7dcd55208fed7a62dc632.jpeg,911f9c48dc827dab9786e8f617cdf5da.jpeg,514a63b0ea36dbfce54383443a5b15dd.jpeg,87ccb23f726a72f5f8126f7e30454fe1.jpeg,3139bfffeb97be1039474c7a315cdfbd.jpeg', '04849316150877d2fdbdb9a674efc899.jpeg,eb1fef8e4527d200d7033c1e80b649e7.jpeg,a83670f4f52585dea8bace6733c19e1f.jpeg'),
(37, 14, 'Kursi Standar (Bentuk Kotak/Persegi Panjang)', 1800000, 1440000, 1260000, 1, 'c5562efef13523698be0789820bb73a6.jpg', '', ''),
(40, 14, 'Kursi Model Lengkung', 2000000, 1600000, 1400000, 1, 'df9a3606651fa795a6a4bdabedb839b7.jpg,33c7156da1b252097f49ba73fe816155.jpg,ab7461262d1d0afb2a638909b814b1a0.jpg', 'be84432e09a3439eab23eb3e25cb9ccf.png,5ccf87cb6f6fac4eea36b2b81b7f7f49.jpg', 'dc2a4e60c61c8d658e2a6b40173b82d7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto_bagus`
--

CREATE TABLE `tbl_foto_bagus` (
  `id_foto` int NOT NULL,
  `id_bagus` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_foto_bagus`
--

INSERT INTO `tbl_foto_bagus` (`id_foto`, `id_bagus`, `foto`) VALUES
(2, 1, '318458798_556130412510580_5174515618610548653_n1.jpg'),
(3, 1, '448258791_18007844885576329_5071266956326590664_n.jpg'),
(4, 3, '302050351_138006998711086_1781253519676945369_n.jpg'),
(5, 2, '320603524_2394961197327120_3729949926717381703_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto_denah`
--

CREATE TABLE `tbl_foto_denah` (
  `id_foto_denah` int NOT NULL,
  `ukuran_awal` int NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `kamar` int NOT NULL,
  `wc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_foto_denah`
--

INSERT INTO `tbl_foto_denah` (`id_foto_denah`, `ukuran_awal`, `foto`, `kamar`, `wc`) VALUES
(1, 36, 'bff26a373da1697a1d67396f82b874b6.png,c79bd4963cd0ebe6d9d6344903c9fad4.png', 1, 1),
(2, 45, '160899bb9ec9efc074597a7b6415e860.png,f4f96e47ebe372f1744de60be2e83be8.png,3f1cf45a9389c7d4040d359300eadc4f.png', 1, 1),
(3, 60, '83530f40347ca64f7a19d683bff0809c.png,402c7322eacdbb6fb5fbe595793e4b2a.png,9c05cae610d79df6393d7104877b7016.png', 1, 1),
(4, 70, 'f878fef5652e02e031ea59bf25f18e86.png,fa1c0273751df0bc8a6616648bb3b745.png,05defd387ced69b24bb3d701805e3e83.png', 1, 1),
(5, 90, 'a6e392d61516a4fb3359d7d637bcf690.png,4dbd56860ac0a4300d90400df6b06182.png,d59903b4b1b47a1d052bfbdb9b27533f.png', 1, 1),
(6, 100, 'aadb343a0e4425a1575cac8799aaea42.jpeg,468bd9a93dcc8eb65da1590582d6ef3c.jpg,75f9567dfef05233067d16dd19a17a96.jpg', 1, 1),
(7, 120, 'f0d60ecca1a3507b5eb9ee63cd319bff.jpeg,07c317b9624b5d6b2afc7ff623b7c059.jpeg,6a13dbf29d9d1a72328df423e6206d8c.jpeg', 1, 1),
(8, 160, 'd64568744d66f05d88ef57fcb2c9703f.jpeg,ef7864174f850e3ca999f3f440d92cef.jpeg,9abb6ef7c19967cfe6196e860a57f6bf.jpeg', 1, 1),
(9, 200, 'd64568744d66f05d88ef57fcb2c9703f.jpeg,ef7864174f850e3ca999f3f440d92cef.jpeg,9abb6ef7c19967cfe6196e860a57f6bf.jpeg', 1, 1),
(30, 45, 'a955c8882c816e1f97c800b7a2638115.jpg', 2, 1),
(31, 36, 'b06cd5dfe3ac08f1946caa8ad4c8aefb.jpg', 1, 2),
(32, 36, '46b9e79619327c2acfd3543a136d7847.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto_mewah`
--

CREATE TABLE `tbl_foto_mewah` (
  `id_foto` int NOT NULL,
  `id_mewah` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_foto_mewah`
--

INSERT INTO `tbl_foto_mewah` (`id_foto`, `id_mewah`, `foto`) VALUES
(4, 1, '318458798_556130412510580_5174515618610548653_n.jpg'),
(5, 1, '448258791_18007844885576329_5071266956326590664_n.jpg'),
(6, 3, 'Snapinsta_app_167636359_493576198327501_1553888326136073381_n_10241.jpg'),
(7, 2, '320603524_2394961197327120_3729949926717381703_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto_murah`
--

CREATE TABLE `tbl_foto_murah` (
  `id_foto` int NOT NULL,
  `id_murah` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_foto_murah`
--

INSERT INTO `tbl_foto_murah` (`id_foto`, `id_murah`, `foto`) VALUES
(3, 1, '318458798_556130412510580_5174515618610548653_n.jpg'),
(4, 1, '448258791_18007844885576329_5071266956326590664_n.jpg'),
(5, 1, '448346657_18007844876576329_7389225056338954816_n.jpg'),
(6, 3, 'Snapinsta_app_167636359_493576198327501_1553888326136073381_n_10241.jpg'),
(7, 2, '320603524_2394961197327120_3729949926717381703_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto_rumah`
--

CREATE TABLE `tbl_foto_rumah` (
  `id_foto_rumah` int NOT NULL,
  `id_jenis` int NOT NULL,
  `id_tipe` int NOT NULL,
  `ukuran_awal` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_foto_rumah`
--

INSERT INTO `tbl_foto_rumah` (`id_foto_rumah`, `id_jenis`, `id_tipe`, `ukuran_awal`, `foto`) VALUES
(1, 1, 1, 36, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(2, 1, 1, 45, '682270c5c8ca5d052f85eaaab1e5a457.jpg'),
(3, 1, 1, 60, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(4, 1, 1, 70, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(5, 1, 1, 90, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(6, 1, 1, 100, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(7, 1, 1, 120, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(8, 1, 1, 160, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(9, 1, 1, 200, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(10, 1, 2, 36, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(11, 1, 2, 45, '1715289d5826a5e3f4d82a1ee84b4df3.jpg'),
(12, 1, 2, 60, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(13, 1, 2, 70, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(14, 1, 2, 90, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(15, 1, 2, 100, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(16, 1, 2, 120, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(17, 1, 2, 160, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(18, 1, 2, 200, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(19, 1, 3, 36, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(20, 1, 3, 45, 'f510898f29141365035da395d42b9fd2.jpg'),
(21, 1, 3, 60, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(22, 1, 3, 70, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(23, 1, 3, 90, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(24, 1, 3, 100, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(25, 1, 3, 120, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(26, 1, 3, 160, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(27, 1, 3, 200, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(28, 2, 1, 36, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(29, 2, 1, 45, 'f510898f29141365035da395d42b9fd2.jpg'),
(30, 2, 1, 60, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(31, 2, 1, 70, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(32, 2, 1, 90, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(33, 2, 1, 100, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(34, 2, 1, 120, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(35, 2, 1, 160, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(36, 2, 1, 200, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(37, 2, 2, 36, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(38, 2, 2, 45, 'f15547a2e4a156a95e5321e38e732939.jpg'),
(39, 2, 2, 60, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(40, 2, 2, 70, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(41, 2, 2, 90, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(42, 2, 2, 100, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(43, 2, 2, 120, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(44, 2, 2, 160, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(45, 2, 2, 200, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(46, 2, 3, 36, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(47, 2, 3, 45, 'f510898f29141365035da395d42b9fd2.jpg'),
(48, 2, 3, 60, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(49, 2, 3, 70, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(50, 2, 3, 90, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(51, 2, 3, 100, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(52, 2, 3, 120, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(53, 2, 3, 160, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(54, 2, 3, 200, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(55, 3, 1, 36, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(56, 3, 1, 45, 'f510898f29141365035da395d42b9fd2.jpg'),
(57, 3, 1, 60, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(58, 3, 1, 70, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(59, 3, 1, 90, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(60, 3, 1, 100, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(61, 3, 1, 120, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(62, 3, 1, 160, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(63, 3, 1, 200, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(64, 3, 2, 36, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(65, 3, 2, 45, ''),
(66, 3, 2, 60, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(67, 3, 2, 70, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(68, 3, 2, 90, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(69, 3, 2, 100, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(70, 3, 2, 120, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(71, 3, 2, 160, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(72, 3, 2, 200, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(73, 3, 3, 36, '743fea66f12e727960a4968f125f2073.jpg,270f45e4c07dda8e3a0e5a00ba554e3f.jpg,3814d73e401762a232148754b483dc36.jpg'),
(74, 3, 3, 45, 'f510898f29141365035da395d42b9fd2.jpg'),
(75, 3, 3, 60, '9669184dcd6e16926d6569c106f719f6.jpg,b17df901ee103f3957412660155bdf21.jpg,7de45276f1e7a99f5dd5b751aafc839b.jpg'),
(76, 3, 3, 70, 'c9cfa0585b2e98a1f12abb2feb574f1c.jpg,156fdb498a9dc8a59747d7604caa323c.jpg,5201f7de11ee52c847a5df4a6c09936f.jpg'),
(77, 3, 3, 90, 'ae057ee74cd50c4e1fa1065f2ba3f6e3.jpg,64c9d926b9f7bc34d78d4976395a8d7b.jpg'),
(78, 3, 3, 100, 'e9984ee648706689140c4083a7a0865b.jpg,51eed3d00384c38ef6ae6d24c0e3f22d.jpg,777299ba7fecf10a9303fd7dbae2b217.jpg'),
(79, 3, 3, 120, 'a525c5a6ce3e3c798021c27de430596a.jpg,6ce07179f5ad1b1b00717f4cc9fd3695.jpg,4c52143881a7beef5cea441788568fe4.jpg'),
(80, 3, 3, 160, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg'),
(81, 3, 3, 200, '7fb43faee844bed9d43a3866b9aad961.jpg,8a83da76e1a339e91cfd83ce8e114de7.jpg,b44d6112d2a76a7b4517cd745ed9d3a0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `id` int NOT NULL,
  `id_user_level` int NOT NULL,
  `id_menu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hak_akses`
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
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
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
-- Table structure for table `tbl_menu`
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
-- Dumping data for table `tbl_menu`
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
-- Table structure for table `tbl_mewah`
--

CREATE TABLE `tbl_mewah` (
  `id_mewah` int NOT NULL,
  `tipe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_denah` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mewah`
--

INSERT INTO `tbl_mewah` (`id_mewah`, `tipe`, `harga`, `foto`, `foto_denah`) VALUES
(1, 'Classic', 6000000, 'afe504811c65e4cc3c1aad728fe85a84.jpg,6c76b05aac337cc394a4aa0ae6b84007.jpg', '97cd234621688f656d9021ba1392a987.jpg'),
(2, 'Skandinavian', 5000000, '', ''),
(3, 'Minimalis', 5000000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_murah`
--

CREATE TABLE `tbl_murah` (
  `id_murah` int NOT NULL,
  `tipe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_denah` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_murah`
--

INSERT INTO `tbl_murah` (`id_murah`, `tipe`, `harga`, `foto`, `foto_denah`) VALUES
(1, 'Classic', 3500000, '3c638c2c3fac11e7d5c35c45272f7a9d.jpg,7e21a4562a5fe6f5fb204bb68e90dd28.jpg', '6d568ac67f7a475454299a44c9ab2ec7.jpg'),
(2, 'Skandinavian', 3000000, '', ''),
(3, 'Minimalis', 2800000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satuan`
--

CREATE TABLE `tbl_satuan` (
  `id_satuan` int NOT NULL,
  `nama_satuan` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_satuan`
--

INSERT INTO `tbl_satuan` (`id_satuan`, `nama_satuan`) VALUES
(1, 'm/m2'),
(2, 'm2'),
(3, 'm'),
(4, 'unit'),
(1, 'm/m2'),
(2, 'm2'),
(3, 'm'),
(4, 'unit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int NOT NULL,
  `nama_setting` varchar(50) NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `nama_setting`, `value`) VALUES
(1, 'Tampil Menu', 'ya'),
(1, 'Tampil Menu', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
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
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_users`, `full_name`, `email`, `password`, `images`, `id_user_level`, `is_aktif`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 1, 'y'),
(3, 'Faisal', 'it@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 2, 'y'),
(1, 'Admin', 'admin@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 1, 'y'),
(3, 'Faisal', 'it@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 2, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id_user_level` int NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id_user_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'IT'),
(1, 'Admin'),
(2, 'IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bagus`
--
ALTER TABLE `tbl_bagus`
  ADD PRIMARY KEY (`id_bagus`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_foto_bagus`
--
ALTER TABLE `tbl_foto_bagus`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tbl_foto_denah`
--
ALTER TABLE `tbl_foto_denah`
  ADD PRIMARY KEY (`id_foto_denah`);

--
-- Indexes for table `tbl_foto_mewah`
--
ALTER TABLE `tbl_foto_mewah`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tbl_foto_murah`
--
ALTER TABLE `tbl_foto_murah`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tbl_foto_rumah`
--
ALTER TABLE `tbl_foto_rumah`
  ADD PRIMARY KEY (`id_foto_rumah`);

--
-- Indexes for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_mewah`
--
ALTER TABLE `tbl_mewah`
  ADD PRIMARY KEY (`id_mewah`);

--
-- Indexes for table `tbl_murah`
--
ALTER TABLE `tbl_murah`
  ADD PRIMARY KEY (`id_murah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_foto_denah`
--
ALTER TABLE `tbl_foto_denah`
  MODIFY `id_foto_denah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_foto_rumah`
--
ALTER TABLE `tbl_foto_rumah`
  MODIFY `id_foto_rumah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
