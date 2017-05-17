-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 09:27 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets_bucket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `akn_id` int(11) NOT NULL,
  `akn_nama` varchar(30) NOT NULL,
  `akn_hp` varchar(15) NOT NULL,
  `akn_email` varchar(30) NOT NULL,
  `akn_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun_penjual`
--

CREATE TABLE `tb_akun_penjual` (
  `pjl_id` int(5) NOT NULL,
  `pjl_nama` varchar(30) NOT NULL,
  `pjl_nama_usaha` varchar(30) NOT NULL,
  `pjl_password` varchar(50) NOT NULL,
  `pjl_alamat` varchar(50) NOT NULL,
  `pjl_hp` varchar(15) NOT NULL,
  `pjl_email` varchar(30) NOT NULL,
  `pjl_bank` varchar(20) NOT NULL,
  `pjl_rekening` varchar(25) NOT NULL,
  `pjl_deskripsi` text NOT NULL,
  `pjl_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun_penjual`
--

INSERT INTO `tb_akun_penjual` (`pjl_id`, `pjl_nama`, `pjl_nama_usaha`, `pjl_password`, `pjl_alamat`, `pjl_hp`, `pjl_email`, `pjl_bank`, `pjl_rekening`, `pjl_deskripsi`, `pjl_gambar`) VALUES
(2, 'ENGGAL DENY SAPUTRA', 'Rumah Kucing', '202cb962ac59075b964b07152d234b70', 'Sumbersari-Jember', '087757747804', 'rumahkucing@gmail.com', 'BRI', '0187-0180-7197-8889-9798', 'Pet Shop Terbesar di Jember Area Kampus.\r\nMenjual aneka aksesoris dan pakan hewan.', 'ui-sam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `ktg_id` varchar(5) NOT NULL,
  `ktg_nama` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`ktg_id`, `ktg_nama`) VALUES
('KT-AK', 'Aksesoris'),
('KT-PK', 'Pakan Hewan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `prd_id` varchar(7) NOT NULL,
  `ktg_id` varchar(5) NOT NULL,
  `pjl_id` varchar(5) NOT NULL,
  `prd_nama` varchar(30) NOT NULL,
  `prd_stok` int(11) NOT NULL,
  `prd_satuan` varchar(10) NOT NULL,
  `prd_harga` int(11) NOT NULL,
  `prd_deskripsi` text NOT NULL,
  `prd_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`akn_id`);

--
-- Indexes for table `tb_akun_penjual`
--
ALTER TABLE `tb_akun_penjual`
  ADD PRIMARY KEY (`pjl_id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`ktg_id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`prd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `akn_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_akun_penjual`
--
ALTER TABLE `tb_akun_penjual`
  MODIFY `pjl_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
