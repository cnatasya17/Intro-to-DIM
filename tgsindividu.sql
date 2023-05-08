-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 02:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgsindividu`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(10) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `id_pembelian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_hp`, `alamat`, `id_pembelian`) VALUES
('S001', 'Toko Jaya', '03124568698', 'Jalan Pattimura', 'PB1'),
('S002', 'Toko Abadi', '031111333', 'Jalan Abadi', 'PB17'),
('S003', 'Daster Murah Meriah', '08576585465', 'Jakarta Barat', 'PB16'),
('S004', 'Celana Korea', '08876567576', 'JaKarta Timur', 'PB2'),
('S005', 'Celana Viral', '085574347687', 'Jakarta Timur', 'PB3'),
('S006', 'Pernak Pernik Laptop', '08456458867', 'jakarta Barat', 'PB4'),
('S007', 'Rolex', '087646476768', 'Jambi', 'PB5'),
('S008', 'Gelang Couple', '087866587468', 'Jakarta Selatan', 'PB6'),
('S009', 'Kacamata Korea', '089587483767', 'Jakarta Selatan', 'PB7'),
('S010', 'Implora', '08747367645', 'Bandung', 'PB8'),
('S011', 'Hanasui', '081756156476', 'Bandung', 'PB9'),
('S012', 'Baju Rumahan', '087658745665', 'Kota Jakarta Barat ', 'PB10'),
('S013', 'Kemeja Korea', '086584677885', 'Jakarta Barat', 'PB11'),
('S014', 'Kemeja Kantoran', '087578546545', 'Jakarta Barat', 'PB12'),
('S015', 'Alat Rumah Tangga', '086215756675', 'Jakarta Barat', 'PB13'),
('S016', 'Acne Gelas', '08891686873', 'Kamboja', 'PB14'),
('S017', 'Oversizeee', '087765876879', 'Jakarta Timur', 'PB15'),
('S018', 'Daster Murah Meriah', '08576585465', 'Jakarta Barat', 'PB18'),
('S019', 'Celana Korea', '08876567576', 'JaKarta Timur', 'PB19'),
('S020', 'Celana Viral', '085574347687', 'Jakarta Timur', 'PB20'),
('S021', 'Pernak Pernik Laptop', '08456458867', 'jakarta Barat', 'PB21'),
('S022', 'Rolex', '087646476768', 'Jambi', 'PB22'),
('S023', 'Gelang Couple', '087866587468', 'Jakarta Selatan', 'PB23'),
('S024', 'Kacamata Korea', '089587483767', 'Jakarta Selatan', 'PB24'),
('S025', 'Implora', '08747367645', 'Bandung', 'PB25'),
('S026', 'Hanasui', '081756156476', 'Bandung', 'PB26'),
('S027', 'Baju Rumahan', '087658745665', 'Kota Jakarta Barat ', 'PB27'),
('S028', 'Kemeja Korea', '086584677885', 'Jakarta Barat', 'PB28'),
('S029', 'Kemeja Kantoran', '087578546545', 'Jakarta Barat', 'PB29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `id_pembelian` (`id_pembelian`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
