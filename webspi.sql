-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Okt 2024 pada 12.29
-- Versi server: 10.6.19-MariaDB
-- Versi PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gskstore_spi2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bagus`
--

CREATE TABLE `tbl_bagus` (
  `id_bagus` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text NOT NULL,
  `foto_denah` text NOT NULL
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
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_a` int(11) NOT NULL,
  `harga_b` int(11) NOT NULL,
  `harga_c` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `foto` text NOT NULL,
  `foto_b` text NOT NULL,
  `foto_c` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_kategori`, `nama_barang`, `harga_a`, `harga_b`, `harga_c`, `id_satuan`, `foto`, `foto_b`, `foto_c`) VALUES
(1, 1, 'Kitchen Set Bawah', 2200000, 1760000, 1540000, 1, 'c81ab453c152d2beabe908eba5cdc13f.jpeg', '36170e2216fa265967896323700806b6.jpeg', ''),
(2, 1, 'Kitchen Set Atas', 2200000, 1760000, 1540000, 1, '8268703025edda4f01b8db7d8db8b0d4.jpeg', '1145cd5078d957c8e9bc4c3aa54829d6.jpeg', '2017d02884deb2a92a6df8078888d6b1.jpeg'),
(4, 1, 'Kitchen Set Atas/Bawah Pintu Kisi', 2500000, 2000000, 1750000, 1, 'a2778c31e5a8513372e95d6f572075a6.jpeg,5ac94190bb54ef81a0748eda426f19eb.jpeg,a4d5b1f9a3fa1ec0ea15c39ca2c80264.jpeg,bd21c26260b607f27c04aa4d99842422.jpeg', 'b64998e0f7395fa4c452dcce15cc57b6.jpeg,90bc06364bb0a2775745fce458a9c188.jpeg,4fb911b0570437fbc1420e32fa2e7657.jpeg,5cc57af0e2434ca3bf1ba9b066248c3d.jpeg,aa52da3a5133b96b60a96f59ae8e9a02.jpeg', '5f0b068fe036e61ca48e268d48758072.jpeg,3082e7d03f49c9d289441e4c122bbe6b.jpeg,bb380eeed14a63e4f1cdccd765035a10.jpeg,7720f2851960462d0a03b2dd701343bd.jpeg,79fab6ef76b23dc606907d0357f83212.jpeg,11a7d7c29a89724846629c22118054bb.jpeg,6fb981ceea3bdca7b076d1d168fa5e78.jpeg,d97e6bade380a1559de2129446e40503.jpeg'),
(5, 3, 'Top Table AICA Toughtop', 1300000, 1040000, 910000, 1, 'fbba5d5419e949c0b9de85e59876e12b.jpg,98451f9a7c66d7b86b34fea347f452ce.jpg,949fd9b44ca4332e653ea0d6ba118cd9.jpg', '', ''),
(7, 2, 'Backdrop Satu Sisi', 1800000, 1440000, 1260000, 2, '971bd2a9be0cd73c41ce865fab4cfa44.jpeg,54b29f0175e7c867f21fd43c706e0fdb.jpeg,6c84107b0f31614a507128d9367b8e21.jpeg,61a5cbd9f622d54acc2db570ec6bc332.jpeg,bfbbce48aa5c6b536fc502ab3131e453.jpeg', 'ec1f61ddf0e6cc1b3de4a48d5231338f.jpeg,26e3f314ea85928a172adb90e7c7938d.jpeg,421e6e750a3a7e10ed78a7c6bf105d2f.jpeg,67c81e26b2b26727bc8fd6c96b3b929e.jpeg,3e68503cdeb8cbbe9abef3870f9d66b7.jpeg', 'b3c335ea3f21d7c6928f6a4b4cc2c0ba.jpeg,8b2d9fcd2ba1b22a1115fec0481c97db.jpeg,ac521c787d5d71996177a5b32f98cae0.jpeg,0e211625d9c93c43a03457d8e4d01126.jpeg,e2067bb25227df6305786beaa9cfd9ba.jpeg'),
(8, 2, 'Backdrop Dua Sisi ', 2200000, 1760000, 1540000, 2, '1b001c9c4fe3f1cf1856d1eefada53f9.jpg', '', ''),
(9, 4, 'Meja Kosongan', 2000000, 1600000, 1400000, 1, 'f630ccb9e3295a63302694da8d6756b0.png,d35dbc4caa53b851df08900d458eb052.png,3f1d100fd93f457ce5deefcb89964a48.png', 'd0b7ace615d1cb057d459550acec399b.png,5997824bfc3e7c52856f1027b5ddef6e.png,3da4bfabb2d427e5275eb373443d3159.png', '7de761aa9a4066700fd16362412f25da.png,380d9fe956a244a2f44cbdaeeaf118c8.png'),
(10, 4, 'Meja Model Laci', 2200000, 1760000, 1540000, 1, 'ce7561880be7c689103ad772f8b515d5.png,d846762606db1bb09efb68784f95784e.png,2bbda77b6f2ca76828bf4c63c38ab693.png', '7c6c9424b485ca394ca05e0ad765a4f7.png,bf8e03f57a87469bc27b567cb31a3b87.png,cf43fe57a06d8fd58322e4b05eaac288.png', 'e333c1efa4e7a71c24ea0964fa934d12.png,221f5d9ecf5efd4be692dfeb6cb99148.png,3e66afed12d6ec1052bdac2d9cf74447.png'),
(11, 4, 'Meja Bar', 2200000, 1760000, 1540000, 1, 'df42e3733ec8015891674d1be5e93f43.png,426bed12ee0ed15daae1679fe18616ca.png,03f2c26407373228b9be313c66d73b89.png,28df5dc92329976b45158c09cfc9f94d.png', 'f8be5138528e0666e89cf7b2d48702d8.png,c97dcba7be53eca7a9e303759923fad7.png', '35035402807b0f5a4569d5c77eceb533.jpeg,aa85ec4bf98a713e3781b50ac917e234.jpeg'),
(12, 4, 'Credensa TV/Meja Gantung', 1600000, 1280000, 1120000, 3, 'e88d5a22425593b5b8818f5b5872343c.png,291bfa95db12e535ab8e0a9d7ef0630b.png,b7812fb6fe9e5ef62580bffa0b7de9a3.png,31d5bc5afdd5d0480bab6b6149bb3ed7.png,0cdabb9baef56b50cc6a8aab36c16d3b.png,25385ed016716b048546a38ed70caa58.png', '873ebc923e9770c3bbdf5955831949f0.png,4db11b9eeb8b1f33a038410b9f7fd20c.png,40ef1edc6bff8a8c9429a99e5cb7ba44.png,e8db429262814d3b25384a5b5a286e2a.png,96a5d3480a4de1f2f9c85bdc2dbff9d4.png,8dd6431f473ee18850d7a916ab952ca0.png', '91d2056c4ee3641e57e6f05b50a90662.png,ecf11d4a7b3a3c394c51d1fa67071669.png,a0ce3b445059a60694721231e7861682.png,693b51c6df8b3bb0b2eb5fef8b370c79.png'),
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
(29, 4, 'Meja Nakas', 2000000, 1600000, 1400000, 3, '85162711db52ed0d077efc80421a8059.png,2fdceb1f556fcb50e1118b9c0dc9442e.png,c38b13cbc2d9023b0dac1c029edc7454.png', '85d70ebcdfc24c788256a424dae064a2.png,75da1a570a0166ce671e67e2cecea0b7.png,529607c4a4f5eff1e52ed95ec35602c0.png,a98f3247d1c29276a4e6f3a8f1bcfbaf.png', '50aa3b49ac686de5d38699079ceff7f2.png,25d3db0be0c687eaff0e079ea7d3a97c.png,b2a3f1605ddf5b95d9ae6eb0d11c1720.png'),
(30, 10, 'Kusen', 450000, 360000, 315000, 3, 'a81ecafc04343b4f7778422987c50b68.jpg,31d67a291da0ef9a8175d493a6fea72d.jpg,3905fa1484718971e531eef978e135e6.jpg', '', ''),
(33, 11, 'Backsplash', 1600000, 1280000, 1120000, 3, 'cb1be188eb31f690910d97a7af7fc80e.jpeg', '048eb8bcd83b048bc1cafb1d98d609a7.jpeg', 'e6962690cbc750459ce9ea600a398009.jpeg,f4718fd9fefda7b5cfd96b6107fd80e3.jpeg'),
(35, 13, 'Rak Sepatu Tanpa Pintu', 1800000, 1440000, 1260000, 1, '963cd560980c05d2644156038d5dff26.jpeg,5195f6ad9911778c28b81560b38e1f0e.jpeg,7799ecc72fee49d6366e1298cd2ed44b.jpeg,e0a88605eee4e1d6ab9f7fed4554e8db.jpeg,36daea66f196ca55566167cc99545ef1.jpeg,65f14b94f379a8fbeb172c98d2714db5.jpeg', '750017a6f5fb96ce82a56bd56813ffba.jpeg,a062e80f5325f24b46bd2f92d7d1dae1.jpeg,26fe77c6dede558b7462f69f440e914c.jpeg', 'b072337df4920ff562b26e28e855b939.jpeg,53854741ab554e9554d148d8b8ff078f.jpeg,ad830ad3abb1ff76c11e7de81b24d1f3.jpeg,382a62f7ba12ecb43e40c1d4abcff1a6.jpeg,0c952f21e35a07a2e583188f92f9c322.jpeg'),
(36, 13, 'Rak Sepatu + Pintu', 2000000, 1600000, 1400000, 1, '3893b743ec638c5ed33398cc2a9e945c.jpeg,0b251640b826425cd43065e48ded9ebc.jpeg,a5d635400d1521011f4a379f0a90fa21.jpeg,d475a49b087041b2d692ff913a4d2fd4.jpeg,909b73866e8b574822a04370c834df1e.jpeg,13869f0125e9b27d4895db2c1f87d11b.jpeg', '449e588a59867a916930ae2968d59909.jpeg,98dbfff821167751881cfab698a171c8.jpeg,0c7829ffaaf7dcd55208fed7a62dc632.jpeg,911f9c48dc827dab9786e8f617cdf5da.jpeg,514a63b0ea36dbfce54383443a5b15dd.jpeg,87ccb23f726a72f5f8126f7e30454fe1.jpeg,3139bfffeb97be1039474c7a315cdfbd.jpeg', '04849316150877d2fdbdb9a674efc899.jpeg,eb1fef8e4527d200d7033c1e80b649e7.jpeg,a83670f4f52585dea8bace6733c19e1f.jpeg'),
(37, 14, 'Kursi Standar (Bentuk Kotak/Persegi Panjang)', 1800000, 1440000, 1260000, 1, '9a3c4fe107e3e426189964d7608e8a27.png,47de67f0e45cfba50bde8d649baf3c63.png,d86fbceb884d989d3a505279b1a5e8f8.png', 'e8062130efcf73f967f70086199b0865.png,df822d843f0c852021c6ef9e9e77c9a3.png,c3112c862537589e37bed6be099934db.png', 'b9a576a7d9ec44311d1403cf4b88e77e.png,db33ac291ea307ac55a539e77b458e6f.png,7bc78d8cf49131b15e66dfb0ca38c52d.png'),
(40, 14, 'Kursi Model Lengkung', 2000000, 1600000, 1400000, 1, '4b04d720e1cedfb9a4cb6b3afe38c10c.png,09d8ae2f94350698a3cf84bbe9ca529c.png,e3be5b55ac0cc88eaeb33c64aac9af88.png,b6117302cd0b1669d7d030f62c83469e.png', '85d8050176c31bf2141e1e65795f5920.png,2bad0b180b3dc49027cbcb713872d558.png,97b587295af9d270a48be58a3ffa5379.png,c21bda1bfb8351f743cf39fc932438dd.png,f650f9c45ad733b52cbd79303ff09828.png', '26f8c27058ade1f2e635c60353754f99.png,8cd80c4b6b7575478057fbb338657b82.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_denah`
--

CREATE TABLE `tbl_foto_denah` (
  `id_foto_denah` int(11) NOT NULL,
  `id_foto_rumah` int(11) NOT NULL,
  `kamar` int(11) NOT NULL,
  `wc` int(11) NOT NULL,
  `foto_denah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_foto_denah`
--

INSERT INTO `tbl_foto_denah` (`id_foto_denah`, `id_foto_rumah`, `kamar`, `wc`, `foto_denah`) VALUES
(36, 83, 2, 1, 'ab9f62c1bbd722ca4c0f478cb3325e7e.png'),
(38, 84, 2, 1, 'd9f8c9e9cdd4578531a074408cc8c8b6.png'),
(39, 85, 2, 1, 'fa05c1e89b1dc573b35a7138baf24682.png'),
(40, 84, 2, 2, 'bcc31d800706d6149f92055959c42b66.png'),
(42, 88, 2, 2, '8d2d8e24d9f9cc770c14e2f19af9c58c.png'),
(43, 89, 2, 2, 'fcde3526691777a1b95946204976c27a.png'),
(44, 89, 3, 2, 'c266b06b7370ee4782ba89aef9213427.png'),
(45, 89, 2, 3, 'd9a3c0563aa5dd286101291ae30e2ca5.png'),
(46, 90, 2, 3, 'a609fadb867bc8595d51a418bb4a87dc.png'),
(47, 90, 4, 2, '3ef90861127f096c1c680f1f8c329376.png'),
(48, 90, 3, 2, '4a9effe1c7c302941abee9c10e7f841b.png'),
(49, 90, 2, 2, 'eb01ad24530f1da3891143d415f061fb.png'),
(50, 91, 2, 2, '021a355ccb8ce7f23b845e19fa758bad.png'),
(51, 92, 4, 3, '0ab46f74c437ce9092a8f2860caec6c4.jpg'),
(52, 93, 1, 1, 'd6a13aac7c7c4f618e24d936c3e6680d.png'),
(53, 94, 2, 1, 'a2ce4b4fe9b8eee0a16dc3b6a2b2896f.png'),
(54, 95, 2, 1, 'd737599c30bb4145663cc74d7a69d2dd.png'),
(55, 96, 3, 1, '1395cd269f9dc9b3d569741507515846.png'),
(56, 97, 2, 1, 'bc8707a62f2fa7a098e6ae3a0013d383.png'),
(57, 98, 2, 1, '4eaf7d3b819463b7a27199d85a14e5db.png'),
(58, 99, 2, 2, '8327b03379c8f7a9efbe2429ffe67639.png'),
(59, 100, 2, 1, '81ec2daea3fb350cb8f91bcd20980a9f.png'),
(60, 101, 2, 1, 'dce44ec434ae211984102f9cf55b7fbf.png'),
(61, 102, 2, 1, '47c2d6bb4cb1374cb856833399e1e811.png'),
(62, 103, 3, 2, '487b6791788f415d89214a66960007eb.png'),
(63, 104, 2, 3, 'c5f013837b35ef63c846366e6605e018.png'),
(64, 105, 5, 4, 'c054077a0963387056ef6b4edeed8f59.jpg'),
(65, 106, 2, 1, '2ef7cd1f35fb13be8b118f4d6e706f2d.png'),
(66, 107, 2, 1, '4f02978bbbd8666179eff21709cd193d.jpg'),
(67, 108, 2, 1, '25c715093044e0fec90bb4863e5381bf.jpg'),
(68, 109, 2, 1, 'e69755ea49ff213a211f3ce65c51b182.png'),
(69, 110, 2, 1, '90fee743368fdb5035fa074a533617a3.png'),
(70, 111, 2, 1, 'a631a31d828b2c97e15c9b518e17646e.png'),
(71, 112, 2, 1, '2a87527d61a0312134e7918a66938bb0.png'),
(73, 114, 2, 1, '0ca5de91a3e5a5eb69142d2a59f924fb.png'),
(74, 115, 2, 1, 'fd5aba19936d0a4de2f83e0957a015c1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto_rumah`
--

CREATE TABLE `tbl_foto_rumah` (
  `id_foto_rumah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `ukuran_awal` int(11) NOT NULL,
  `foto` text NOT NULL,
  `desain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_foto_rumah`
--

INSERT INTO `tbl_foto_rumah` (`id_foto_rumah`, `id_jenis`, `id_tipe`, `ukuran_awal`, `foto`, `desain`) VALUES
(83, 2, 2, 45, '9e167ec541572b2e625afc555e7a89b4.png', 1),
(84, 2, 2, 45, '2e355334870ddd12c23e30253ea582ac.png', 2),
(85, 2, 2, 45, 'ccf2560ef7d4d0e13af2dbad79b5398c.png', 3),
(88, 1, 1, 70, '404f48a3014a6a6ccd36062e50cfa556.png', 1),
(89, 1, 1, 100, '8ade9edfb6f5d6f75b2832b2156f3887.jpg', 1),
(90, 1, 1, 100, '202460f219a2837eba04f795dd4b1514.jpg', 2),
(91, 1, 1, 160, 'cc539e745e5312978c1128765b978f8f.png', 1),
(92, 1, 1, 200, '3ef5e6e98ece00f68feedba0d397cbbc.jpg', 1),
(93, 1, 2, 36, '1b319a87a1a88e17abffe470d4bbba71.png', 1),
(94, 1, 2, 36, '986a347219ca126f3d0c10eb8c64f8d1.png', 2),
(95, 1, 2, 36, 'de3172ffb8d8bb766c50778cc6f916e3.png', 3),
(96, 1, 2, 45, 'ebbb089ac25c786ab69036913c4e17b7.png', 1),
(97, 1, 2, 45, 'e9a25d4e93498112cc97b3aece50bab8.png', 2),
(98, 1, 2, 45, 'e1c68480cc2e82fa6a954f14fba8f8b4.png', 3),
(99, 1, 2, 100, 'b69fe481b00379e216e181dad5ed2f78.png', 1),
(100, 1, 3, 36, '1aebc028dc1cb431500588f78d962d98.png', 1),
(101, 1, 3, 36, '8b6fcd4d47f772ee4786ebcbfca97128.png', 2),
(102, 1, 3, 60, 'c7117f764f5aae258e7bc4a570cd30ed.png', 1),
(103, 1, 3, 100, '250c14f8c351b26ae5eba8d06033efd4.png', 1),
(104, 1, 3, 100, '191a907fde7db00c4f87cf19fd0534b7.png', 2),
(105, 1, 3, 200, 'e15887e013973bc6912b50a2f6414264.png', 1),
(106, 1, 1, 36, '6d72e5559c5aa9259817dab27c94871e.png', 1),
(107, 2, 1, 36, 'a0ae89e8c0c33c34a255fb60b8050c50.jpg', 1),
(108, 2, 1, 36, 'be53563c20b7c3f5b3c2ba1503847b08.jpg', 2),
(109, 2, 3, 45, 'c9c7ae84e0001fc2dfb48a0a2b33759f.png', 1),
(110, 2, 3, 45, '30d36ba538d85facdbb7bc53f06247d2.png', 2),
(111, 2, 3, 45, '6d1c266cae13f2c55d94a4840f092ea3.png', 3),
(112, 2, 2, 60, 'ff5ad392adfd3e5e752692b700f6774d.png', 1),
(114, 2, 2, 60, '39e39ecbe9437e690f381a2426dbfca3.png', 3),
(115, 2, 2, 60, 'e9b0a248583371b15436005fad23f9ed.png', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `id` int(11) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`id`, `id_user_level`, `id_menu`) VALUES
(21, 2, 1),
(29, 2, 2),
(31, 1, 10),
(32, 1, 14),
(33, 1, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
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
  `id_menu` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL COMMENT 'y=yes,n=no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(18, 'foto denah', 'tbl_foto_denah', 'fa', 0, 'y'),
(19, 'foto rumah', 'tbl_foto_rumah', 'fa', 17, 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mewah`
--

CREATE TABLE `tbl_mewah` (
  `id_mewah` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text NOT NULL,
  `foto_denah` text NOT NULL
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
  `id_murah` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text NOT NULL,
  `foto_denah` text NOT NULL
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
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_satuan`
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
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `nama_setting` varchar(50) NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `nama_setting`, `value`) VALUES
(1, 'Tampil Menu', 'ya'),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_users`, `full_name`, `email`, `password`, `images`, `id_user_level`, `is_aktif`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 1, 'y'),
(3, 'Faisal', 'it@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 2, 'y'),
(1, 'Admin', 'admin@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 1, 'y'),
(3, 'Faisal', 'it@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 2, 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id_user_level` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_user_level`
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
-- Indeks untuk tabel `tbl_foto_denah`
--
ALTER TABLE `tbl_foto_denah`
  ADD PRIMARY KEY (`id_foto_denah`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_denah`
--
ALTER TABLE `tbl_foto_denah`
  MODIFY `id_foto_denah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto_rumah`
--
ALTER TABLE `tbl_foto_rumah`
  MODIFY `id_foto_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
