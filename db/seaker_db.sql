-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Sep 2022 pada 01.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(10) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `link` varchar(500) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`banner_id`, `banner`, `gambar`, `link`, `status`) VALUES
(1, 'banner1', 'banner1.jpg', 'index.php?page=detail&barang_id=3', 'on'),
(2, 'banner2', 'banner2.jpg', 'index.php?page=detail&barang_id=14', 'on'),
(6, 'banner3', 'bannerlagi.jpg', '', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `spesifikasi` text NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` tinyint(1) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`barang_id`, `kategori_id`, `nama_barang`, `spesifikasi`, `gambar`, `harga`, `stok`, `status`) VALUES
(1, 2, 'Gazelle Hi Red', '<ul><li>&nbsp;High cut silhouette</li><li>Twill upper material</li><li>Canvas lining material</li><li>PVC Gazelle Logo</li><li>Polyester flat laces</li><li>Rubber foxing &amp; outsole</li><li>Vulcanized process</li><li>Custom woven label</li><li>Made in Indonesia</li></ul>', 'Copy-of-GAZELLE-HI-RED-1.jpg', 338000, 5, 'on'),
(2, 2, 'Gazelle Hi Pink', '<p>&nbsp;</p><ul><li>High cut silhouette</li><li>Twill upper material</li><li>Canvas lining material</li><li>PVC Gazelle Logo</li><li>Polyester flat laces</li><li>Rubber foxing &amp; outsole</li><li>Vulcanized process</li><li>Custom woven label</li><li>Made in Indonesia</li></ul>', 'GAZELLE-HI-PINK-1.jpg', 338000, 7, 'on'),
(3, 2, 'Gazelle Hi Black/Black', '<ul><li>High cut silhouette</li><li>10 Oz canvas upper material</li><li>Canvas lining material</li><li>PVC Gazelle Logo</li><li>Polyester flat laces</li><li>Rubber foxing &amp; outsole</li><li>Vulcanized process</li><li>Custom woven label</li><li>Made in Indonesia<br />&nbsp;</li></ul>', 'Copy-of-GAZELLE-HI-BLACK-BLACK-1.jpg', 338000, 6, 'on'),
(4, 2, 'Gazelle Hi Cappuccino', '<ul><li>High cut silhouette</li><li>10 Oz canvas upper material</li><li>Canvas lining material</li><li>PVC Gazelle Logo</li><li>Polyester flat laces</li><li>Rubber foxing &amp; outsole</li><li>Vulcanized process</li><li>Custom woven label</li><li>Made in Indonesia</li></ul>', 'Copy-of-GAZELLE-HI-CAPPUCCINO-1.jpg', 338000, 6, 'on'),
(5, 2, 'Gazelle Hi Vintage â€“ Green', '<ul><li>Hi cut silhouette</li><li>Twill upper material</li><li>Canvas lining material</li><li>Suede Gazelle logo</li><li>Waxed flat cotton laces</li><li>Cream vintage rubber foxing &amp; out-sole</li><li>Custom silver eyelet</li><li>Vulcanized process</li><li>Custom woven label</li><li>Made in Indonesia</li></ul>', 'WEB-FOTO-VINTAGE-PRODUK-GREEN-HI.jpg', 438000, 5, 'on'),
(6, 6, 'Geoff Max Official - Timeless HI Blue Red', '<p>&nbsp;</p><ul><li>Bahan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:Kanvas</li><li>Jenis Sepatu&nbsp;&nbsp; &nbsp;:Sepatu Bertali</li><li>Model Sepatu&nbsp;&nbsp; :Model Lainnya</li><li>Ujung Sepatu&nbsp; &nbsp; :Model Lainnya</li><li>Ujung Sepatu&nbsp;&nbsp; &nbsp;:Ujung Tertutup<br />&nbsp;</li></ul>', 'gmxbiru.jpg', 299000, 10, 'on'),
(7, 6, 'Geoff Max Official - Timeless Hi Olive Grey White', '<ul><li>Bahan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:Kanvas</li><li>Jenis Sepatu&nbsp;&nbsp; &nbsp;:Sepatu Bertali</li><li>Model Sepatu&nbsp;&nbsp; :Model Lainnya</li><li>Ujung Sepatu&nbsp;&nbsp; :Model Lainnya</li><li>Ujung Sepatu&nbsp;&nbsp; :Ujung Tertutup<br />&nbsp;</li></ul><div id=\"gtx-trans\" style=\"position: absolute; left: 541px; top: 118px;\"><div class=\"gtx-trans-icon\">&nbsp;</div></div>', 'grey.jpg', 299000, 10, 'on'),
(8, 6, 'Geoff Max Official - Timeless Hi BlackWhite', '<ul><li>Bahan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:Kanvas</li><li>Jenis Sepatu&nbsp; &nbsp; :Sepatu Bertali</li><li>Model Sepatu&nbsp; &nbsp;:Model Lainnya</li><li>Ujung Sepatu&nbsp;&nbsp; :Model Lainnya</li><li>Ujung Sepatu&nbsp;&nbsp; :Ujung Tertutup<br />&nbsp;</li></ul><div id=\"gtx-trans\" style=\"position: absolute; left: 264px; top: 118px;\"><div class=\"gtx-trans-icon\">&nbsp;</div></div>', 'hitam.jpg', 299000, 10, 'on'),
(9, 6, 'Geoff Max Official - Timeless Hi Green Forest', '<ul><li>&nbsp;</li><li>Bahan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:Kanvas</li><li>Jenis Sepatu&nbsp;&nbsp; &nbsp;:Sepatu Bertali</li><li>Model Sepatu&nbsp;&nbsp; :Model Lainnya</li><li>Ujung Sepatu&nbsp;&nbsp; :Model Lainnya</li><li>Ujung Sepatu&nbsp;&nbsp; :Ujung Tertutup<br />&nbsp;</li></ul>', 'ijo.jpg', 299000, 7, 'on'),
(10, 6, 'Geoff Max Official - Timeless Hi Yellow White', '<ul><li>Bahan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:Kanvas</li><li>Jenis Sepatu&nbsp;&nbsp; &nbsp;:Sepatu Bertali</li><li>Model Sepatu&nbsp;&nbsp; :Model Lainnya</li><li>Ujung Sepatu&nbsp;&nbsp; :Model Lainnya</li><li>Ujung Sepatu&nbsp;&nbsp; :Ujung Tertutup</li></ul>', 'kuning.jpg', 299000, 4, 'on'),
(11, 5, 'Ventela Public High Black Natural', '<ul><li>UPPER&nbsp; &nbsp; &nbsp;: 12 oz canvas</li><li>TOE CAP&nbsp;&nbsp;: rubber</li><li>THREAD&nbsp;&nbsp; : nylon</li><li>EYELETS&nbsp;&nbsp;: alumunium silver + ring</li><li>INSOLE&nbsp; &nbsp; &nbsp;: ultralite foam</li><li>FOXING&nbsp; &nbsp; &nbsp;: rubber</li><li>OUTSOLE&nbsp;: rubber</li><li>STRIPE&nbsp; &nbsp; &nbsp; : 3M(reflective), leather, suede</li></ul>', 'ventela.jpg', 299000, 7, 'on'),
(12, 5, 'Ventela - Ethnic Low Black Natural', '<ul><li>UPPER&nbsp; &nbsp; &nbsp; &nbsp; : 12 oz canvas</li><li>TOE CAP &nbsp; &nbsp;: suede</li><li>THREAD&nbsp; &nbsp; &nbsp;: nylon</li><li>EYELETS &nbsp; : alumunium silver + ring</li><li>INSOLE&nbsp; &nbsp; &nbsp; : ultralite foam</li><li>FOXING&nbsp; &nbsp; &nbsp; : rubber</li><li>OUTSOLE&nbsp; : rubber</li><li>STRIPE&nbsp; &nbsp; &nbsp; &nbsp;: suede</li></ul><p>&nbsp;</p>', 'low.jpg', 179000, 5, 'on'),
(14, 7, 'VULCAN CLASSIC HI OLIVE BS', '<ul><li>Premium canvas 10 oz</li><li>Soft twill canvas lining</li><li>Faux leather quarter patch with print logo</li><li>Metal eyelet</li><li>Soft cotton lace</li><li>Comfy cut EVA insole with heel arch padding</li><li>Rubber foxing midsole</li><li>Rubber outsole</li></ul>', 'brodo olive.jpg', 230000, 5, 'on'),
(15, 7, 'VTG V.2 HI ALL BLACK', '<ul><li>Premium canvas 10 oz</li><li>Soft twill canvas lining</li><li>Faux leather quarter patch with print logo</li><li>Metal eyelet</li><li>Soft cotton lace</li><li>Comfy cut EVA insole with heel arch padding</li><li>Rubber foxing midsole</li><li>Rubber outsole</li></ul>', 'black.jpg', 375000, 10, 'on'),
(16, 7, 'VULCAN CLASSIC HI NAVY WS', '<ul><li>Premium canvas 10 oz</li><li>Soft twill canvas lining</li><li>Faux leather quarter patch with print logo</li><li>Metal eyelet</li><li>Soft cotton lace</li><li>Comfy cut EVA insole with heel arch padding</li><li>Rubber foxing midsole</li><li>Rubber outsole</li></ul>', 'ws.jpg', 230000, 7, 'on'),
(17, 7, 'VTG V.2 HI TERACOTA WS', '<ul><li>Premium canvas 10 oz</li><li>Soft twill canvas lining</li><li>Faux leather quarter patch with print logo</li><li>Metal eyelet</li><li>Soft cotton lace</li><li>Comfy cut EVA insole with heel arch padding</li><li>Rubber foxing midsole</li><li>Rubber outsole</li></ul>', 'teracota.jpg', 375000, 6, 'on'),
(19, 9, 'Nike Air Force 1-07', '<p>The radiance lives on in the Nike Air Force 1 &#39;07, the b-ball OG that puts a fresh spin on what you know best: durably stitched overlays, clean finishes and the perfect amount of flash to make you shine.</p><ul><li>Colour Shown: White/White</li><li>Style: CW2288-111</li></ul>', 'air-force-1-07-shoe-WrLlWX.png', 1300000, 10, 'on'),
(20, 9, 'Jordan MA2', '<p>Shatter the sneaker status quo in the Jordan MA2. Made from a mix of suede, full-grain leather and a variety of textiles, it&#39;s got unconventional labels, technical micro-graphics and raw foam edges for a balance of new and classic. Easy to get on and off, it looks good with just about anything.</p><ul><li>Colour Shown: Black/Gym Red/White/University Red</li><li>Style: CV8122-006</li></ul>', 'jordan-ma2-shoe-qw1Z6m.png', 299000, 7, 'on'),
(21, 9, 'Nike SB Zoom Blazer Mid Premium', '<p>Styled with slightly distressed suede, the Nike SB Zoom Blazer Mid Premium takes its cues from the well-worn pair of sneakers you&#39;ve had for years. This pair may look like that faded favourite, but it comes with a responsive Zoom Air unit and a new, grippy outsole that&#39;s built to skate.</p><ul><li>Colour Shown: Black/Coconut Milk/Light Dew/Light Dew</li><li>Style: DA1839-001</li></ul>', 'sb-zoom-blazer-mid-skate-shoe-jkRh6g.png', 1300000, 5, 'on'),
(22, 9, 'Nike BE-DO-WIN SP', '<p>Be confident in your style in the BE-DO-WIN.Do yourself a favour by stepping into a modern take on an &#39;80s original.Win with a comfortable design that cushions every step.The BE-DO-WIN also carries an impactful message: &quot;BE conscious of climate change, DO take action against climate change and WIN the battle to prevent climate change&quot;.</p><ul><li>Colour Shown: Black/Off-Noir/Multi-Colour</li><li>Style: DB3017-001<br />&nbsp;</li></ul>', 'be-do-win-sp-shoes-GKJ41Z.png', 1700000, 10, 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`, `status`) VALUES
(2, 'Compass', 'on'),
(5, 'Ventela', 'on'),
(6, 'GMX - Geoffmax', 'on'),
(7, 'Brodo', 'on'),
(8, 'Converse', 'on'),
(9, 'Nike', 'on'),
(10, 'Vans', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `konfirmasi_id` int(10) NOT NULL,
  `pesanan_id` int(10) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  `nama_account` varchar(150) NOT NULL,
  `tanggal_transfer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`konfirmasi_id`, `pesanan_id`, `nomor_rekening`, `nama_account`, `tanggal_transfer`) VALUES
(3, 20, '060606', 'imam', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `kota_id` int(10) NOT NULL,
  `kota` varchar(150) NOT NULL,
  `tarif` int(10) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`kota_id`, `kota`, `tarif`, `status`) VALUES
(1, 'Banda Aceh', 10000, 'on'),
(2, 'Medan', 25000, 'on'),
(3, 'Padang', 40000, 'on'),
(4, 'Palembang', 60000, 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanan_id` int(10) NOT NULL,
  `kota_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`pesanan_id`, `kota_id`, `user_id`, `nama_penerima`, `nomor_telepon`, `alamat`, `tanggal_pemesanan`, `status`) VALUES
(20, 1, 16, 'Imam Suranda', '0000', 'Banda Aceh', '2021-10-06 23:26:42', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_detail`
--

CREATE TABLE `pesanan_detail` (
  `pesanan_id` int(10) NOT NULL,
  `barang_id` int(10) NOT NULL,
  `quantity` tinyint(2) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan_detail`
--

INSERT INTO `pesanan_detail` (`pesanan_id`, `barang_id`, `quantity`, `harga`) VALUES
(20, 4, 1, 338000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(160) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `level`, `nama`, `email`, `alamat`, `phone`, `password`, `status`) VALUES
(15, 'superadmin', 'AdminSneakers', 'adminsneakers@gmail.com', 'Banda Aceh', '082288055898', '21232f297a57a5a743894a0e4a801fc3', 'on'),
(16, 'customer', 'imam suranda', 'callmedude45@gmail.com', 'Banda Aceh', '00000', '202cb962ac59075b964b07152d234b70', 'on');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`konfirmasi_id`),
  ADD KEY `pesanan_id` (`pesanan_id`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`pesanan_id`),
  ADD KEY `kota_id` (`kota_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD KEY `pesanan_id` (`pesanan_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  MODIFY `konfirmasi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `pesanan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`pesanan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`kota_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD CONSTRAINT `pesanan_detail_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`pesanan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_detail_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
