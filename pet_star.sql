-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 11:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_star`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `ID_BARANG` int(255) NOT NULL,
  `NAMA_BARANG` varchar(255) NOT NULL,
  `FOTO` varchar(255) CHARACTER SET latin1 NOT NULL,
  `HARGA` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`ID_BARANG`, `NAMA_BARANG`, `FOTO`, `HARGA`) VALUES
(1, 'Royal Canin Hair & Skin Care Makanan Kucing Dewasa Dry 400gr', 'i300080-2x-royal-canin-hair-skin-care-makanan-kucing-dewasa-dry-400gr-1-1.JPG', 70000),
(2, '3 in 1 Tray Self Sifting Box – Cat Toilet', 'd200102-3-in-1-tray-self-sifting-box-cat-toilet-1-1.jpg', 250000),
(3, '5 in 1 PET GROOMING COMB KIT', 'm100133-5-in-1-pet-grooming-comb-kit-1-1.jpg', 230000),
(4, 'ACTIVE PRO MULTIVITAMIN IMMUNE BOOSTER UNTUK KUCING DAN ANJING', 'w10100047-active-pro-multivitamin-immune-booster-untuk-kucing-dan-anjing-1-1.jpg', 30000),
(5, 'Adex – Obat Anti Demodex dan Scabiosis 60ml', 'p000004-adex-obat-anti-demodex-dan-scabiosis-60ml-1-1.jpg', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_d_riwayat`
--

CREATE TABLE `tabel_d_riwayat` (
  `ID_D_RIWAYAT` int(11) NOT NULL,
  `RIWAYAT_ID` int(11) NOT NULL,
  `NAMA_BARANG` varchar(255) NOT NULL,
  `NAMA_VARIAN` varchar(255) NOT NULL,
  `HARGA_SATUAN` int(255) NOT NULL,
  `JUMLAH` int(255) NOT NULL,
  `HARGA_S_TOTAL` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_d_riwayat`
--

INSERT INTO `tabel_d_riwayat` (`ID_D_RIWAYAT`, `RIWAYAT_ID`, `NAMA_BARANG`, `NAMA_VARIAN`, `HARGA_SATUAN`, `JUMLAH`, `HARGA_S_TOTAL`) VALUES
(1, 1, 'MAKAN KUCING', 'SAPI', 5000, 10, 500000),
(2, 1, 'MAKAN KUCING', 'IKAN', 100000, 10, 500000),
(3, 2, 'KANDANG', '10M X 10M', 5000, 1, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_riwayat`
--

CREATE TABLE `tabel_riwayat` (
  `ID_RIWAYAT` int(255) NOT NULL,
  `TANGGAL` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `TOTAL_HARGA` int(255) NOT NULL,
  `METODE_P` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_riwayat`
--

INSERT INTO `tabel_riwayat` (`ID_RIWAYAT`, `TANGGAL`, `TOTAL_HARGA`, `METODE_P`) VALUES
(1, '2022-12-12 14:37:38', 5000000, 'DANA'),
(2, '2022-12-12 14:37:38', 5000000, 'GO-PAY');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `ID_USER` int(255) NOT NULL,
  `FOTO` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `NUMBER` int(14) NOT NULL,
  `LEVEL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`ID_USER`, `FOTO`, `USERNAME`, `PASSWORD`, `NAMA`, `EMAIL`, `NUMBER`, `LEVEL`) VALUES
(1, 'test1', 'admin1', 'admin1', 'admin1', 'admin1', 123, 'admin'),
(2, './img/logo.png', 'pegawai1', 'pegawai1', 'pegawai11', 'pegawai1', 123, 'pegawai'),
(4, '', 'gudang1', 'gudang1', 'gudang1', 'gudang1', 0, ''),
(5, '', 'Gudang 2', 'Gudang 2', 'Gudang 2', 'Gudang 2', 1, ''),
(6, '', 'gudang1111', 'gudang1', 'gudang1', 'gudang1', 1213, 'pegawai'),
(7, '', 'pabrik1', 'pabrik1', 'pabrik1', 'pabrik1', 0, 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_varian`
--

CREATE TABLE `tabel_varian` (
  `ID_VARIAN` int(11) NOT NULL,
  `BARANG_ID` int(11) NOT NULL,
  `NAMA_VARIAN` varchar(255) NOT NULL,
  `HARGA` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`ID_BARANG`);

--
-- Indexes for table `tabel_d_riwayat`
--
ALTER TABLE `tabel_d_riwayat`
  ADD PRIMARY KEY (`ID_D_RIWAYAT`),
  ADD KEY `fk_riwayat_d` (`RIWAYAT_ID`);

--
-- Indexes for table `tabel_riwayat`
--
ALTER TABLE `tabel_riwayat`
  ADD PRIMARY KEY (`ID_RIWAYAT`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Indexes for table `tabel_varian`
--
ALTER TABLE `tabel_varian`
  ADD PRIMARY KEY (`ID_VARIAN`),
  ADD KEY `fk_barang_varian` (`BARANG_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  MODIFY `ID_BARANG` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_d_riwayat`
--
ALTER TABLE `tabel_d_riwayat`
  MODIFY `ID_D_RIWAYAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_riwayat`
--
ALTER TABLE `tabel_riwayat`
  MODIFY `ID_RIWAYAT` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `ID_USER` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_varian`
--
ALTER TABLE `tabel_varian`
  MODIFY `ID_VARIAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_d_riwayat`
--
ALTER TABLE `tabel_d_riwayat`
  ADD CONSTRAINT `fk_riwayat_d` FOREIGN KEY (`RIWAYAT_ID`) REFERENCES `tabel_riwayat` (`ID_RIWAYAT`);

--
-- Constraints for table `tabel_varian`
--
ALTER TABLE `tabel_varian`
  ADD CONSTRAINT `fk_barang_varian` FOREIGN KEY (`BARANG_ID`) REFERENCES `tabel_barang` (`ID_BARANG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
