-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 01:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nur-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nik`, `nama`, `jabatan`, `username`, `password`, `role`) VALUES
(17, '1111111111111111', 'Nurida', 'Manager', 'nurida00', '$2y$10$uKMEbEZ8IN92HLpYIq8kie20HPpzLlsamJ7kg4nN.19S1R3550yS2', 'Admin Master'),
(19, '2222222222222222', 'Wahyu Pratama', 'Staff Perlengkapan', 'wahdjong', '$2y$10$8Go1BLbQjJmhjQ0JyzSrlubOXGjqy5vmOgfgtxHRpz4w1L9wthw72', 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_retribusi`
--

CREATE TABLE `tbl_retribusi` (
  `id_retribusi` int(11) NOT NULL,
  `pasar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_tiket` varchar(100) NOT NULL,
  `biaya` int(100) NOT NULL,
  `no_kios` varchar(100) NOT NULL,
  `kode_karcis` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_retribusi`
--

INSERT INTO `tbl_retribusi` (`id_retribusi`, `pasar`, `tanggal`, `jenis_tiket`, `biaya`, `no_kios`, `kode_karcis`, `nik`, `nama_pegawai`) VALUES
(52, 'KOBA', '2022-07-29', 'LAPAK', 2000, '111', '111', '1111111111111111', 'Nurida'),
(53, 'KOBA', '2022-07-29', 'KIOS', 3000, '222', '222', '1111111111111111', 'Nurida'),
(54, 'KOBA', '2022-07-29', 'MUSIMAN', 5000, '333', '333', '1111111111111111', 'Nurida'),
(55, 'KOBA', '2022-07-29', 'LAPAK', 2000, '444', '444', '1111111111111111', 'Nurida'),
(56, 'KOBA', '2022-07-29', 'KIOS', 3000, '555', '555', '1111111111111111', 'Nurida'),
(57, 'NAMANG', '2022-07-29', 'LAPAK', 2000, '11', '11', '1111111111111111', 'Nurida'),
(58, 'NAMANG', '2022-07-29', 'KIOS', 3000, '22', '22', '1111111111111111', 'Nurida'),
(59, 'NAMANG', '2022-07-29', 'MUSIMAN', 5000, '33', '33', '1111111111111111', 'Nurida'),
(60, 'NAMANG', '2022-07-29', 'MUSIMAN', 5000, '44', '44', '1111111111111111', 'Nurida'),
(61, 'SUNGAI SELAN', '2022-07-29', 'LAPAK', 2000, '122', '122', '1111111111111111', 'Nurida'),
(62, 'SUNGAI SELAN', '2022-07-29', 'KIOS', 3000, '123', '123', '1111111111111111', 'Nurida'),
(63, 'SUNGAI SELAN', '2022-07-29', 'MUSIMAN', 5000, '124', '124', '1111111111111111', 'Nurida'),
(64, 'SUNGAI SELAN', '2022-07-29', 'KIOS', 3000, '125', '125', '1111111111111111', 'Nurida'),
(65, 'SIMPANG KATIS', '2022-07-29', 'LAPAK', 2000, '23', '23', '1111111111111111', 'Nurida'),
(66, 'SIMPANG KATIS', '2022-07-29', 'KIOS', 3000, '2424', '2424', '1111111111111111', 'Nurida'),
(67, 'SIMPANG KATIS', '2022-07-29', 'MUSIMAN', 5000, '242424', '242424', '1111111111111111', 'Nurida'),
(68, 'SIMPANG KATIS', '2022-07-29', 'LAPAK', 2000, '25252', '25252', '1111111111111111', 'Nurida'),
(69, 'AIR MESU', '2022-07-29', 'LAPAK', 2000, '2121', '2121', '1111111111111111', 'Nurida'),
(70, 'AIR MESU', '2022-07-29', 'KIOS', 3000, '212', '212', '1111111111111111', 'Nurida'),
(71, 'AIR MESU', '2022-07-29', 'MUSIMAN', 5000, '42', '42', '1111111111111111', 'Nurida'),
(72, 'AIR MESU', '2022-07-29', 'MUSIMAN', 5000, '21', '2111', '1111111111111111', 'Nurida'),
(73, 'KAYU BESI', '2022-07-30', 'LAPAK', 2000, '12', '12', '1111111111111111', 'Nurida'),
(74, 'KAYU BESI', '2022-07-30', 'KIOS', 3000, '3123', '123123', '1111111111111111', 'Nurida'),
(75, 'KAYU BESI', '2022-07-30', 'MUSIMAN', 5000, '123123', '123123', '1111111111111111', 'Nurida'),
(76, 'KAYU BESI', '2022-07-30', 'LAPAK', 2000, '123123', '123123', '1111111111111111', 'Nurida'),
(77, 'KOBA', '2022-07-29', 'KIOS', 3000, '32', '32', '2222222222222222', 'Wahyu Pratama'),
(78, 'NAMANG', '2022-07-29', 'KIOS', 3000, '12312', '123123', '2222222222222222', 'Wahyu Pratama'),
(79, 'SUNGAI SELAN', '2022-07-29', 'LAPAK', 2000, '213', '123', '2222222222222222', 'Wahyu Pratama'),
(80, 'SIMPANG KATIS', '2022-07-29', 'KIOS', 3000, '1231', '123', '2222222222222222', 'Wahyu Pratama'),
(81, 'AIR MESU', '2022-07-29', 'MUSIMAN', 5000, '213', '123', '2222222222222222', 'Wahyu Pratama'),
(82, 'KAYU BESI', '2022-07-29', 'KIOS', 3000, '123', '123', '2222222222222222', 'Wahyu Pratama'),
(83, 'KAYU BESI', '2022-07-30', 'KIOS', 3000, 'asd', 'asda', '2222222222222222', 'Wahyu Pratama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sewa`
--

CREATE TABLE `tbl_sewa` (
  `id_sewa` int(11) NOT NULL,
  `qrcode_id` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmpt_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `pasar` varchar(255) NOT NULL,
  `jenis_pasar` varchar(255) NOT NULL,
  `blok_nomor` varchar(10) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `pembayaran_bulan` varchar(100) NOT NULL,
  `pembayaran_tahun` varchar(100) NOT NULL,
  `jenis_dagangan` varchar(255) NOT NULL,
  `dari_shp` date NOT NULL,
  `sampai_shp` date NOT NULL,
  `tgl_tempo` varchar(255) NOT NULL,
  `src_qrcode` varchar(255) NOT NULL,
  `link_qrcode` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `file_shp` varchar(255) NOT NULL,
  `author_nik` varchar(16) NOT NULL,
  `author_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sewa`
--

INSERT INTO `tbl_sewa` (`id_sewa`, `qrcode_id`, `nik`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `pasar`, `jenis_pasar`, `blok_nomor`, `harga_sewa`, `pembayaran_bulan`, `pembayaran_tahun`, `jenis_dagangan`, `dari_shp`, `sampai_shp`, `tgl_tempo`, `src_qrcode`, `link_qrcode`, `foto`, `file_shp`, `author_nik`, `author_nama`) VALUES
(80, 'T-000001', '1212312312312312', 'Wahyu Pratama', 'Palembang', '1996-01-05', 1, 'Jln. Peltu H Rozali No. 47 RT 16 RW 04 Kel. Kalidoni Kec. Kalidoni Palembang, Sumatera Selatan.', '081399966553', 'KOBA', 'Pasar Kering', 'A.1', 100000, 'Januari', '2022', 'Daging', '2022-08-18', '2022-08-31', 'Tanggal 28 Setiap Bulan', '20220825975208700.png', 'https://nur-app.000webhostapp.com/admin-master/e-sapa.php?qrcodeid=T-000001', '6306f500bab7c.jpg', 'Ada', '1111111111111111', 'Nurida'),
(81, 'T-000001', '1212312312312312', 'Wahyu Pratama', 'Palembang', '1996-01-05', 1, 'Jln. Peltu H Rozali No. 47 RT 16 RW 04 Kel. Kalidoni Kec. Kalidoni Palembang, Sumatera Selatan.', '081399966553', 'KOBA', 'Pasar Kering', 'A.1', 100000, 'Februari', '2022', 'Daging', '2022-08-18', '2022-08-31', 'Tanggal 28 Setiap Bulan', '20220825975208700.png', 'https://nur-app.000webhostapp.com/admin-master/e-sapa.php?qrcodeid=T-000001', '6306f500bab7c.jpg', '', '1111111111111111', 'Nurida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_retribusi`
--
ALTER TABLE `tbl_retribusi`
  ADD PRIMARY KEY (`id_retribusi`);

--
-- Indexes for table `tbl_sewa`
--
ALTER TABLE `tbl_sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_retribusi`
--
ALTER TABLE `tbl_retribusi`
  MODIFY `id_retribusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tbl_sewa`
--
ALTER TABLE `tbl_sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
