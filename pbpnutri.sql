-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 11:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbpnutri`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `id` varchar(25) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `departemen` varchar(20) DEFAULT NULL,
  `barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `approve` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`id`, `nama`, `departemen`, `barang`, `jumlah`, `satuan`, `kategori`, `tanggal`, `status`, `approve`, `updated_at`) VALUES
('AP4001', 'admin', 'PSA', 'Bayfresh Botol', 2, 'Botol', 'Toiletris', '2019-06-24', 'Progress', NULL, NULL),
('AP4002', 'manager', 'PSA', 'Clear Kaca Refill', 2, 'Pcs', 'Toiletris', '2019-06-24', 'Approved', '2019-06-24', NULL),
('AP4003', 'manager', 'PSA', 'Bebek Kloset', 2, 'Pcs', 'Toiletris', '2019-06-24', 'Approved', '2019-06-24', NULL),
('AP4004', 'manager', 'PSA', 'Bayclin', 10, 'Botol', 'Toiletris', '2019-06-24', 'Waiting Approve', NULL, NULL),
('AP4005', 'manager', 'PSA', 'Bayfresh Botol', 10, 'Botol', 'Toiletris', '2019-06-24', 'Waiting Approve', NULL, NULL),
('AP7006', 'admin', 'PSA', 'Dustbin 25L', -2, 'Pcs', 'Toiletris', '2019-06-27', 'Approved', '2019-06-27', NULL);

--
-- Triggers `approve`
--
DELIMITER $$
CREATE TRIGGER `approve` AFTER UPDATE ON `approve` FOR EACH ROW BEGIN
UPDATE barang
SET stok = stok + new.jumlah
WHERE
barang = new.barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` varchar(20) NOT NULL,
  `barang` varchar(30) NOT NULL,
  `kode_oracle` varchar(25) DEFAULT NULL,
  `kategori` varchar(30) NOT NULL,
  `stok` int(30) DEFAULT NULL,
  `satuan` varchar(30) NOT NULL,
  `alasan` varchar(25) DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `barang`, `kode_oracle`, `kategori`, `stok`, `satuan`, `alasan`, `updated_at`) VALUES
('BR001', 'Bayclin', NULL, 'Toiletris', 0, 'Botol', NULL, '2019-06-14'),
('BR002', 'Bayfresh Botol', NULL, 'Toiletris', 0, 'Botol', NULL, '2019-06-14'),
('BR003', 'Bayfresh Gantung', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-22'),
('BR004', 'Bebek Kloset', NULL, 'Toiletris', 5, 'Pcs', NULL, '2019-04-22'),
('BR005', 'Clear Kaca Botol', NULL, 'Toiletris', 0, 'Botol', NULL, '2019-04-24'),
('BR006', 'Clear Kaca Refill', NULL, 'Toiletris', 87, 'Pcs', NULL, '2019-04-24'),
('BR007', 'Detergent Daia', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-24'),
('BR008', 'Dustbin 25L', NULL, 'Toiletris', 87, 'Pcs', NULL, '2019-04-24'),
('BR009', 'Dustbin 25L Krisbow', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-24'),
('BR010', 'Dustbin 50L', NULL, 'Toiletris', 1, 'Pcs', NULL, '2019-04-24'),
('BR011', 'Dustbin 50L Krisbow', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-24'),
('BR012', 'Duster', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-24'),
('BR013', 'Duster Krisbow', NULL, 'Toiletris', 3, 'Pcs', NULL, '2019-04-24'),
('BR014', 'Ember', NULL, 'Toiletris', 3, 'Pcs', NULL, '2019-04-24'),
('BR015', 'Gayung', NULL, 'Toiletris', 9, 'Pcs', NULL, '2019-04-25'),
('BR016', 'Handsoap Botol', NULL, 'Toiletris', 7, 'Botol', NULL, '2019-04-25'),
('BR017', 'Handsoap Refill', NULL, 'Toiletris', 100, 'Pcs', NULL, '2019-04-25'),
('BR018', 'Kain Kesed', NULL, 'Toiletris', 4, 'Pcs', NULL, '2019-04-25'),
('BR019', 'Kain Lap Serbet', NULL, 'Toiletris', 83, 'Pcs', NULL, '2019-04-25'),
('BR020', 'Kamper Biru', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR021', 'Kamper Bulat', NULL, 'Toiletris', 6, 'Pcs', NULL, '2019-04-25'),
('BR022', 'Kamper Gantung', NULL, 'Toiletris', 13, 'Pcs', NULL, '2019-04-25'),
('BR023', 'Kanebo', NULL, 'Toiletris', 4, 'Pcs', NULL, '2019-04-25'),
('BR024', 'Karet Pel', NULL, 'Toiletris', 100, 'Pcs', NULL, '2019-04-25'),
('BR025', 'Karet Pembersih Kaca', NULL, 'Toiletris', 2, 'Pcs', NULL, '2019-04-25'),
('BR026', 'Kemoceng', NULL, 'Toiletris', 5, 'Pcs', NULL, '2019-04-25'),
('BR027', 'Kesed Sintetis', NULL, 'Toiletris', 3, 'Pcs', NULL, '2019-04-25'),
('BR028', 'KIFA Botol', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR029', 'KIFA Bubuk Refill', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR030', 'Lap Handuk', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR031', 'Lap Microfiber Krisbow', NULL, 'Toiletris', 15, 'Pcs', NULL, '2019-04-25'),
('BR032', 'Lap Polos', NULL, 'Toiletris', 20, 'Pcs', NULL, '2019-04-25'),
('BR033', 'Pel Dinding Krisbow', NULL, 'Toiletris', 6, 'Pcs', NULL, '2019-04-25'),
('BR034', 'Pel Gagang Microfiber', NULL, 'Toiletris', 10, 'Pcs', NULL, '2019-04-25'),
('BR035', 'Pel Gagang Nagata', NULL, 'Toiletris', 16, 'Pcs', NULL, '2019-04-25'),
('BR036', 'Prostex Botol', NULL, 'Toiletris', 0, 'Botol', NULL, '2019-04-25'),
('BR037', 'Rakbol Ramat', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR038', 'Rakbol Ramat Krisbow', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR039', 'Refill Pel Dinding Krisbow', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR040', 'Rinso Cair', NULL, 'Toiletris', 6, 'Pcs', NULL, '2019-04-25'),
('BR041', 'Sapu Ijuk', NULL, 'Toiletris', 1, 'Pcs', NULL, '2019-04-25'),
('BR042', 'Sapu Ijuk Nylon', NULL, 'Toiletris', 100, 'Pcs', NULL, '2019-04-25'),
('BR043', 'Sapu Kecil', NULL, 'Toiletris', 11, 'Pcs', NULL, '2019-04-25'),
('BR044', 'Sapu Lidi', NULL, 'Toiletris', 22, 'Pcs', NULL, '2019-04-25'),
('BR045', 'Sapu Pengki Krisbow', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR046', 'Serokan Sampah', NULL, 'Toiletris', 5, 'Pcs', NULL, '2019-04-25'),
('BR047', 'Sikat Gagang', NULL, 'Toiletris', 23, 'Pcs', NULL, '2019-04-25'),
('BR048', 'Sikat Kawat', NULL, 'Toiletris', 3, 'Pcs', NULL, '2019-04-25'),
('BR049', 'Sikat Kloset', NULL, 'Toiletris', 5, 'Pcs', NULL, '2019-04-25'),
('BR050', 'Sikat Plastik', NULL, 'Toiletris', 17, 'Pcs', NULL, '2019-04-25'),
('BR051', 'SOS Lantai', NULL, 'Toiletris', 68, 'Pcs', NULL, '2019-04-25'),
('BR052', 'Spons Gagang', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR053', 'Sprayer', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR054', 'Sunlight Botol', NULL, 'Toiletris', 7, 'Botol', NULL, '2019-04-25'),
('BR055', 'Sunlight Refill', NULL, 'Toiletris', 63, 'Pcs', NULL, '2019-04-25'),
('BR056', 'Tapas Busa', NULL, 'Toiletris', 39, 'Pcs', NULL, '2019-04-25'),
('BR057', 'Tapas Serabut', NULL, 'Toiletris', 166, 'Pcs', NULL, '2019-04-25'),
('BR058', 'Tapas Stainless', NULL, 'Toiletris', 17, 'Pcs', NULL, '2019-04-25'),
('BR059', 'Tempat Handsoap', NULL, 'Toiletris', 12, 'Pcs', NULL, '2019-04-25'),
('BR060', 'Tempat Sampah Injak', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR061', 'Tempat Tissue Kotak', NULL, 'Toiletris', 1, 'Pcs', NULL, '2019-04-25'),
('BR062', 'Tempat Tissue Roll', NULL, 'Toiletris', 6, 'Pcs', NULL, '2019-04-25'),
('BR063', 'Tissue Kotak', NULL, 'Toiletris', 100, 'Pcs', NULL, '2019-04-25'),
('BR064', 'Tissue Roll', NULL, 'Toiletris', 1062, 'Pcs', NULL, '2019-04-25'),
('BR065', 'Tissue Towel', NULL, 'Toiletris', 0, 'Pcs', NULL, '2019-04-25'),
('BR066', 'Wipol Botol', NULL, 'Toiletris', 6, 'Botol', NULL, '2019-04-25'),
('BR067', 'Wipol Refill', NULL, 'Toiletris', 11, 'Pcs', NULL, '2019-05-02'),
('BR068', 'Celemek Kain', NULL, 'Perlengkapan Kerja', 27, 'Pcs', NULL, '2019-05-02'),
('BR069', 'Masker Kain', NULL, 'Perlengkapan Kerja', 317, 'Pcs', NULL, '2019-05-02'),
('BR070', 'Sarung Tangan Karet', NULL, 'Perlengkapan Kerja', 511, 'Pasang', NULL, '2019-05-02'),
('BR071', 'Topi Pria', NULL, 'Perlengkapan Kerja', 0, 'Pcs', NULL, '2019-05-02'),
('BR072', 'Topi wanita', NULL, 'Perlengkapan Kerja', 168, 'Pcs', NULL, '2019-05-02'),
('BR073', 'Seragam Dalam Kemeja Pendek', NULL, 'Perlengkapan Kerja', 0, 'Pcs', NULL, '2019-05-02'),
('BR074', 'Seragam Dalam Kemeja Panjang', NULL, 'Perlengkapan Kerja', 0, 'Pcs', NULL, '2019-05-02'),
('BR075', 'Seragam Dalam Kaos Pendek', NULL, 'Perlengkapan Kerja', 0, 'Pcs', NULL, '2019-05-02'),
('BR076', 'Seragam Kerja Kaos Panjang', NULL, 'Perlengkapan Kerja', 0, 'Pcs', NULL, '2019-05-02'),
('BR077', 'Celana Kerja', NULL, 'Perlengkapan Kerja', 0, 'Pcs', NULL, '2019-05-02'),
('BR078', 'Celana Kerja PDL', NULL, 'Perlengkapan Kerja', 0, 'Pcs', NULL, '2019-05-02'),
('BR079', 'Wearpack', NULL, 'Perlengkapan Kerja', 0, 'Pcs', NULL, '2019-05-02'),
('BR080', 'Jas Lab', NULL, 'Perlengkapan Kerja', 0, 'Pasang', NULL, '2019-05-02'),
('BR081', 'Acid S H3PO4 20 Liter', NULL, 'Chemical', 14, 'Jerigen', NULL, '2019-05-02'),
('BR082', 'Alkohol', NULL, 'Chemical', 134, 'Liter', NULL, '2019-05-03'),
('BR083', 'Blue Ocean 301', NULL, 'Chemical', 7, 'Jerigen', NULL, '2019-05-03'),
('BR084', 'Blue Ocean HC9', NULL, 'Chemical', 14, 'Jerigen', NULL, '2019-05-03'),
('BR085', 'DC Handsan', NULL, 'Chemical', 10, 'Jerigen', NULL, '2019-05-03'),
('BR086', 'Detergen Liquid', NULL, 'Chemical', 0, 'Pail', NULL, '2019-05-03'),
('BR087', 'Divertig', NULL, 'Chemical', 3, 'Jerigen', NULL, '2019-05-03'),
('BR088', 'H2SO4 30 % 1000 KG', NULL, 'Chemical', 0, 'IBC', NULL, '2019-05-03'),
('BR089', 'HCL 33 % 1000 KG', NULL, 'Chemical', 0, 'IBC', NULL, '2019-05-03'),
('BR090', 'Klorin NaoCL 12%', NULL, 'Chemical', 19, 'Jerigen', NULL, '2019-05-03'),
('BR091', 'NaoH 48 % 1000 KG', NULL, 'Chemical', 0, 'IBC', NULL, '2019-05-03'),
('BR092', 'Vital - 2 20 Liter', NULL, 'Chemical', 6, 'Jerigen', NULL, '2019-05-03'),
('BR093', 'Whisper V', NULL, 'Chemical', 12, 'Jerigen', NULL, '2019-05-03'),
('BR094', 'Alas Kaki Plastik', NULL, 'Embalage', 257, 'Ikat', NULL, '2019-05-03'),
('BR095', 'Cartridge 3M 3003 100K', NULL, 'Embalage', 29, 'Pcs', NULL, '2019-05-03'),
('BR096', 'Cartridge 3M 3744', NULL, 'Embalage', 960, 'Pcs', NULL, '2019-05-03'),
('BR097', 'Earplug Ultrafit', NULL, 'Embalage', 96, 'Pcs', NULL, '2019-05-03'),
('BR098', 'Masker 3M 8210', NULL, 'Embalage', 141, 'Pcs', NULL, '2019-05-03'),
('BR099', 'Masker Disposable', NULL, 'Embalage', 268, 'Dus', NULL, '2019-05-03'),
('BR100', 'Plastik Sampah Bening', NULL, 'Embalage', 111, 'Pack', NULL, '2019-05-03'),
('BR4015', 'aaa', NULL, 'Toiletris', 1, 'Botol', NULL, '2019-06-14'),
('BR7001', 'Sarung Tangan Kain', NULL, 'Embalage', 1010, 'Pasang', NULL, '2019-05-07'),
('BR7002', 'Sarung Tangan Motor', NULL, 'Embalage', 17, 'Pasang', NULL, '2019-05-07'),
('BR7003', 'Sarung Tangan Plastik', NULL, 'Embalage', 107, 'Dus', NULL, '2019-05-07'),
('BR7004', 'Sensi Gloves', NULL, 'Embalage', 99, 'Dus', NULL, '2019-05-07'),
('BR7005', 'Absorben Pad', NULL, 'ASL', 124, 'Lembar', NULL, '2019-05-07'),
('BR7006', 'Absorben pillow', NULL, 'ASL', 0, 'Pcs', NULL, '2019-05-07'),
('BR7007', 'Kotak Spill Kit', NULL, 'ASL', 0, 'Pcs', NULL, '2019-05-07'),
('BR7008', 'Oil Boom', NULL, 'ASL', 5, 'Pcs', NULL, '2019-05-07'),
('BR7009', 'Spill Containment 2 Drum', NULL, 'ASL', -2, 'Unit', NULL, '2019-05-07'),
('BR7010', 'Spill Containment Besar 4 Drum', NULL, 'ASL', 2, 'Unit', NULL, '2019-06-27'),
('BR7011', 'Spill Containment Besar 6 Drum', NULL, 'ASL', 2, 'Unit', NULL, '2019-06-27'),
('BR7012', 'Sticker Label & Symbol LB3', NULL, 'ASL', -51, 'Pcs', NULL, '2019-05-07'),
('BR7013', 'Sticker Symbol B3', NULL, 'ASL', 3, 'Pcs', NULL, '2019-06-27'),
('BR7014', 'Tissue Swipe All', NULL, 'ASL', 755, 'Lembar', NULL, '2019-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `gantungan`
--

CREATE TABLE `gantungan` (
  `id` varchar(25) NOT NULL,
  `transaksi` varchar(25) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `departemen` varchar(20) DEFAULT NULL,
  `barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jmlpenuhi` int(11) DEFAULT NULL,
  `satuan` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `terima` date DEFAULT NULL,
  `approve` date DEFAULT NULL,
  `gantungan` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gantungan`
--

INSERT INTO `gantungan` (`id`, `transaksi`, `nama`, `departemen`, `barang`, `jumlah`, `jmlpenuhi`, `satuan`, `kategori`, `tanggal`, `status`, `terima`, `approve`, `gantungan`, `updated_at`) VALUES
('G-446', 'TR4013', 'admin', 'PSA', 'Clear Kaca Refill', 6, 5, 'Pcs', 'Toiletris', '2019-06-14', 'Not Completed', '2019-06-14', NULL, 1, NULL),
('GG-446', 'TR4016', 'admin', 'PSA', 'Tissue Kotak', 4, 2, 'Pcs', 'Toiletris', '2019-06-14', 'Waiting Approved', '2019-06-14', NULL, 2, NULL),
('GN-445', 'TR4012', 'admin', 'PSA', 'Detergent Daia', 5, 2, 'Pcs', 'Toiletris', '2019-06-14', 'Received', '2019-06-14', '2019-06-14', 3, NULL),
('GN-446', 'TR4012', 'admin', 'PSA', 'Detergent Daia', 5, 2, 'Pcs', 'Toiletris', '2019-06-14', 'Waiting Approved', '2019-06-14', NULL, 3, NULL),
('GN4445', 'TR', 'admin', 'PSA', 'Clear Kaca Refill', 1, 2, 'Pcs', 'Toiletris', '2019-06-14', 'Waiting Approved', '2019-06-14', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inputbarang`
--

CREATE TABLE `inputbarang` (
  `id` varchar(25) DEFAULT NULL,
  `barang` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `created_at` date NOT NULL,
  `keterangan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputbarang`
--

INSERT INTO `inputbarang` (`id`, `barang`, `stok`, `satuan`, `created_at`, `keterangan`) VALUES
('IN3001', 'Bayclin', 8, 'Botol', '2019-05-13', '0'),
('IN4002', 'Bayclin', 1, 'Botol', '2019-06-14', NULL),
('IN4003', 'Detergent Daia', 3, 'Pcs', '2019-06-14', NULL),
('IN4004', 'Bebek Kloset', 1, 'Pcs', '2019-06-14', NULL);

--
-- Triggers `inputbarang`
--
DELIMITER $$
CREATE TRIGGER `batal_input` AFTER DELETE ON `inputbarang` FOR EACH ROW BEGIN
UPDATE barang
SET stok = stok - old.stok
WHERE
barang = old.barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `input` AFTER INSERT ON `inputbarang` FOR EACH ROW BEGIN
UPDATE barang
SET stok = stok + new.stok
WHERE
barang = new.barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id` varchar(10) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id`, `file`, `created_at`, `updated_at`) VALUES
('KT001', '1557894237_IK.P.11707 Panduan Serah Terima Barang Scrap.pdf', '2019-05-14 21:23:57', '2019-05-14 21:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` varchar(20) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
('KT1', 'Toiletris'),
('KT1', 'Chemical'),
('KT2', 'ASL'),
('KT3', 'Perlengkapan Kerja'),
('KT4', 'Embalage');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` varchar(25) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `departemen` varchar(20) DEFAULT NULL,
  `barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jmlpenuhi` int(11) DEFAULT NULL,
  `satuan` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `terima` date DEFAULT NULL,
  `approve` date DEFAULT NULL,
  `gantungan` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status_gantung` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `nama`, `departemen`, `barang`, `jumlah`, `jmlpenuhi`, `satuan`, `kategori`, `tanggal`, `status`, `terima`, `approve`, `gantungan`, `updated_at`, `status_gantung`) VALUES
('TR7001', 'admin', 'PSA', 'Clear Kaca Refill', 4, 2, 'Pcs', 'Toiletris', '2019-06-27', 'Received', '2019-06-27', '2019-06-27', 2, NULL, NULL),
('TR7002', 'admin', 'PSA', 'Dustbin 25L', 4, 3, 'Pcs', 'Toiletris', '2019-06-27', 'Received', '2019-06-27', '2019-06-27', 1, NULL, NULL),
('TR7003', 'admin', 'PSA', 'Clear Kaca Refill', 50, 45, 'Pcs', 'Toiletris', '2019-06-27', 'Waiting Approved', '2019-06-27', NULL, 5, NULL, NULL),
('TR7004', 'admin', 'PSA', 'Kain Kesed', 5, 4, 'Pcs', 'Toiletris', '2019-06-27', 'Waiting Approved', '2019-06-27', NULL, 1, NULL, NULL),
('TR7005', 'admin', 'PSA', 'Dustbin 25L', 10, 5, 'Pcs', 'Toiletris', '2019-06-27', 'Waiting Approved', '2019-06-27', NULL, 5, NULL, NULL),
('TR7006', 'admin', 'PSA', 'Bebek Kloset', 3, 2, 'Pcs', 'Toiletris', '2019-06-27', 'Waiting Approved', '2019-06-27', NULL, 1, NULL, NULL),
('TR7007', 'admin', 'PSA', 'Dustbin 25L', 10, 8, 'Pcs', 'Toiletris', '2019-06-27', 'Waiting Approved', '2019-06-27', NULL, 2, NULL, NULL),
('TR7008', 'admin', 'PSA', 'Clear Kaca Refill', 10, 8, 'Pcs', 'Toiletris', '2019-06-27', 'Waiting Approved', '2019-06-27', NULL, 2, NULL, NULL);

--
-- Triggers `keranjang`
--
DELIMITER $$
CREATE TRIGGER `stok` AFTER UPDATE ON `keranjang` FOR EACH ROW BEGIN
UPDATE barang
SET stok = stok + new.gantungan
WHERE
barang = old.barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tanggal` BEFORE INSERT ON `keranjang` FOR EACH ROW BEGIN
IF NEW. tanggal = '0000-00-00' THEN
SET NEW. tanggal = CURRENT_DATE();
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `transaksi` AFTER INSERT ON `keranjang` FOR EACH ROW BEGIN
UPDATE barang
SET stok = stok - new.jmlpenuhi
WHERE
barang = new.barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nama` varchar(30) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` varchar(25) NOT NULL,
  `satuan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id`, `satuan`) VALUES
('ST1', 'Botol'),
('ST2', 'Box'),
('ST3', 'Dus'),
('ST4', 'Dus'),
('ST5', 'IBC'),
('ST6', 'Ikat'),
('ST7', 'Jerigen'),
('ST8', 'Lembar'),
('ST9', 'Liter'),
('ST10', 'Pack'),
('ST10', 'Pail'),
('ST10', 'Pasang'),
('ST10', 'Pcs'),
('ST10', 'Unit');

-- --------------------------------------------------------

--
-- Table structure for table `scrap`
--

CREATE TABLE `scrap` (
  `id` varchar(25) NOT NULL,
  `id_barang` varchar(25) DEFAULT NULL,
  `barang` varchar(30) NOT NULL,
  `kode_oracle` varchar(25) DEFAULT NULL,
  `kategori` varchar(30) NOT NULL,
  `stok` int(30) DEFAULT NULL,
  `satuan` varchar(30) NOT NULL,
  `alasan` varchar(25) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scrap`
--

INSERT INTO `scrap` (`id`, `id_barang`, `barang`, `kode_oracle`, `kategori`, `stok`, `satuan`, `alasan`, `updated_at`, `tanggal`) VALUES
('SC4001', 'BR003', 'Bayfresh Gantung', NULL, 'Toiletris', 14, 'Pcs', NULL, NULL, '2019-06-14');

--
-- Triggers `scrap`
--
DELIMITER $$
CREATE TRIGGER `habis` AFTER INSERT ON `scrap` FOR EACH ROW BEGIN
UPDATE barang
SET stok = stok - new.stok
WHERE
barang = new.barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `nama` varchar(30) DEFAULT NULL,
  `departemen` varchar(30) DEFAULT NULL,
  `id` varchar(20) NOT NULL,
  `tanggapan` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `password`, `dept`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '$2y$10$Ck4ZVH33XTW4SwYPqFeWhebtxRfw1iUaNoqD6XfG1Nf/ZRTvsuTFi', 'PSA', 'Elcb0MvQQr00Cj8Vkgk4kkS3IHBwDBxCrM1tThd3jfWcsxqQkqjeAMUW7lbQ', '2019-03-14 21:08:20', '2019-03-14 22:51:13'),
(4, 'user', 'Evelyn', '$2y$10$tv4lzv9nsAkJy2bPtsfGHOA6Kk42eU6ig7eda3CagRVq21BUt7456', 'YPC', 'd4F4yAvowG9UIohK9nG4X2nkK6qzUdiiGGma4NR3XcchjeO6WXQ2zgx9HJFV', '2019-03-15 02:51:49', '2019-03-15 02:51:49'),
(7, 'user', 'Rizky', '$2y$10$mnTUv9OAIqLy98jz70HTZ.IMMYZzqDexJnDTWUgPRz/fq9xECTJvW', 'RKA', 'GDaMHzNzSh9caSSBFgUDfCGLyUX034iWJ65CaprR03piYu1lqcHjA5NOSxhS', '2019-05-09 01:00:12', '2019-05-09 01:00:12'),
(8, 'manager', 'manager', '$2y$10$NGeeKywjsKoXIzq0N6lt9uqGjiYqwcPCcItHHsqQtO2qhEuVf5tya', 'PSA', 'ingXVkTeJxBmhABuapJZdRQV33OtYDVYUz1UR100ZcbE3lQe1Udwu4i2S8nF', '2019-06-20 23:47:25', '2019-06-20 23:47:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gantungan`
--
ALTER TABLE `gantungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scrap`
--
ALTER TABLE `scrap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
