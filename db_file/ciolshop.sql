-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 09:26 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciolshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'All Stars', 'Sepatu All Stars Cool', 'Sepatu Pria', 300000, 9, 'sepatuallstar1.jpg'),
(2, 'Vans Sneaker', 'Sepatu Sneaker VANS Casual', 'Sepatu Pria', 300000, 15, 'sepatusneaker.jpg'),
(3, 'Blazer', 'Sepatu Casual Nike Blazer Tumit Tinggi', 'Sepatu Wanita', 500000, 10, 'sepatublazer.jpg'),
(4, 'Nike Casual', 'Sepatu Nike Casual Anak', 'Sepatu Anak', 500000, 29, 'sepatunikecasual.jpg'),
(10, 'Skate HobiBear', 'Sepatu Anak Casual ', 'Sepatu Anak', 450000, 20, 'sepatuskate.jpg'),
(13, 'Tali Sepatu', 'Tali Sepatu Casual Merah', 'Aksesoris', 25000, 15, 'talisepatumerah.jpg'),
(14, 'Tali Sepatu', 'Tali Sepatu Casual Biru', 'Aksesoris', 25000, 25, 'talisepatubiru.jpg'),
(15, 'Bola', 'Bola Basket DBL Premiere League', 'Peralatan Olahraga', 400000, 9, 'bolabasket.jpg'),
(16, 'Sepatu Balita', 'Sepatu Balita Europe Best', 'Sepatu Anak', 150000, 15, 'sepatueurope.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'zohan', 'Malang', '2020-10-19 15:36:21', '2020-10-20 15:36:21'),
(2, 'Sebastian', 'Jalan Kalimalang Kab. Malang Jawa Timur', '2020-10-19 17:33:26', '2020-10-20 17:33:26'),
(4, 'Johan', 'Malang', '2020-10-20 00:06:06', '2020-10-21 00:06:06'),
(5, 'Gian Luigi', 'Jalan Kalimalang Kab. Malang Jawa Timur', '2020-10-20 13:26:05', '2020-10-21 13:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 3, 'Blazer', 1, 500000, ''),
(2, 2, 1, 'All Stars', 1, 300000, ''),
(3, 2, 4, 'Nike Casual', 1, 500000, ''),
(4, 2, 2, 'Vans Sneaker', 1, 300000, ''),
(5, 4, 4, 'Nike Casual', 1, 500000, ''),
(6, 4, 1, 'All Stars', 1, 300000, ''),
(7, 5, 15, 'Bola', 1, 400000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `update_stok_barang` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
UPDATE tb_barang SET stok = stok-NEW.jumlah
WHERE id_brg=NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Administrator', 'admin', '123', 1),
(2, 'Pengunjung', 'user', 'user', 2),
(8, 'han', 'han', 'han', 2),
(9, 'han', 'han', 'han', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
