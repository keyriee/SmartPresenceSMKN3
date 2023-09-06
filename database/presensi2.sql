-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2023 at 06:56 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `kode_absensi` varchar(255) NOT NULL,
  `jumlah_pegawai` int(11) NOT NULL,
  `jumlah_absen_masuk` int(11) DEFAULT NULL,
  `jumlah_absen_keluar` int(11) DEFAULT NULL,
  `jumlah_izin` int(11) DEFAULT NULL,
  `jumlah_sakit` int(11) DEFAULT NULL,
  `jumlah_dinas_luar` int(11) DEFAULT NULL,
  `total_pegawai` int(11) DEFAULT NULL,
  `tgl_absen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `kode_absensi`, `jumlah_pegawai`, `jumlah_absen_masuk`, `jumlah_absen_keluar`, `jumlah_izin`, `jumlah_sakit`, `jumlah_dinas_luar`, `total_pegawai`, `tgl_absen`) VALUES
(1, 'iZFLktfODH', 3, 1, 1, NULL, NULL, NULL, 1, '31-May-2023'),
(2, 'ZObF59K0a7', 3, 1, NULL, 1, NULL, NULL, 2, '03-Jun-2023'),
(3, 'mcOkD6iJXp', 4, 1, NULL, NULL, NULL, NULL, 1, '05-Jun-2023'),
(4, 'FOGKr3s0tz', 4, NULL, NULL, NULL, NULL, NULL, NULL, '08-Jul-2023'),
(5, '5StkQnDJpL', 4, NULL, NULL, NULL, NULL, NULL, NULL, '12-Jul-2023'),
(6, 'RXbIpjZhVi', 5, NULL, NULL, NULL, NULL, NULL, NULL, '14-Jul-2023'),
(7, 'eB8MuTSy2A', 9, NULL, NULL, NULL, NULL, NULL, NULL, '17-Jul-2023'),
(14, 'RDWwCZkUnf', 9, NULL, NULL, NULL, NULL, NULL, 1, '18-Jul-2023'),
(15, 'htEICkBcol', 9, NULL, NULL, NULL, NULL, NULL, NULL, '20-Jul-2023'),
(16, 'WujP72nQfv', 9, 1, NULL, 1, NULL, NULL, 4, '22-Jul-2023'),
(17, 'QkdlFwH5AT', 9, 2, 2, NULL, NULL, NULL, 2, '23-Jul-2023'),
(18, 'TsGCtNRwkj', 49, 1, NULL, NULL, NULL, NULL, 1, '21-Aug-2023');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`, `gambar`, `role`) VALUES
(1, 'admin1', 'admin1@gmail.com', '123', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_absensi`
--

CREATE TABLE `detail_absensi` (
  `id_detail_absensi` int(11) NOT NULL,
  `kode_absensi` varchar(255) NOT NULL,
  `pegawai` int(11) NOT NULL,
  `absen_masuk` int(11) DEFAULT NULL,
  `status_masuk` int(1) DEFAULT NULL,
  `latitude_masuk` varchar(255) DEFAULT NULL,
  `longitude_masuk` varchar(255) DEFAULT NULL,
  `absen_keluar` int(11) DEFAULT NULL,
  `status_keluar` int(1) DEFAULT NULL,
  `latitude_keluar` varchar(255) DEFAULT NULL,
  `longitude_keluar` varchar(255) DEFAULT NULL,
  `izin` int(1) DEFAULT NULL,
  `status_izin` int(1) DEFAULT NULL,
  `alasan` longtext,
  `sakit` int(1) DEFAULT NULL,
  `status_sakit` int(1) DEFAULT NULL,
  `alasan_sakit` longtext,
  `dinas_luar` int(1) DEFAULT NULL,
  `status_dinas_luar` int(1) DEFAULT NULL,
  `keterangan_dinas_luar` longtext,
  `bukti_izin` varchar(255) DEFAULT NULL,
  `bukti_sakit` varchar(255) DEFAULT NULL,
  `bukti_dinas_luar` varchar(255) DEFAULT NULL,
  `bukti_masuk` varchar(255) DEFAULT NULL,
  `bukti_keluar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_absensi`
--

INSERT INTO `detail_absensi` (`id_detail_absensi`, `kode_absensi`, `pegawai`, `absen_masuk`, `status_masuk`, `latitude_masuk`, `longitude_masuk`, `absen_keluar`, `status_keluar`, `latitude_keluar`, `longitude_keluar`, `izin`, `status_izin`, `alasan`, `sakit`, `status_sakit`, `alasan_sakit`, `dinas_luar`, `status_dinas_luar`, `keterangan_dinas_luar`, `bukti_izin`, `bukti_sakit`, `bukti_dinas_luar`, `bukti_masuk`, `bukti_keluar`) VALUES
(1, 'iZFLktfODH', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(2, 'iZFLktfODH', 3, 1685529509, 0, '-2.5392412', '112.8893193', 1685538036, NULL, '-2.5392714', '112.8893117', NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', '3jTkDN70cCZYvSL.png', 'OKwRFlDoMyCvji3.png'),
(3, 'iZFLktfODH', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(4, 'ZObF59K0a7', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 'Menikah', 0, 0, '', 0, 0, '', '1685770313_9a2b1fa7f894ae4542d8.jpg', '', '', NULL, NULL),
(5, 'ZObF59K0a7', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(6, 'ZObF59K0a7', 4, 1685769063, 0, '-2.5420322', '112.9462655', 1685538036, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', 'NmewPX3Fc7g5CSz.png', NULL),
(7, 'mcOkD6iJXp', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(8, 'mcOkD6iJXp', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(9, 'mcOkD6iJXp', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(10, 'mcOkD6iJXp', 6, 1685938089, 0, '-2.5393351', '112.8894461', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', '5hEvBAYtwDpRfa4.png', NULL),
(11, 'FOGKr3s0tz', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(12, 'FOGKr3s0tz', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(13, 'FOGKr3s0tz', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(14, 'FOGKr3s0tz', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(15, '5StkQnDJpL', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(16, '5StkQnDJpL', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(17, '5StkQnDJpL', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(18, '5StkQnDJpL', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(19, 'RXbIpjZhVi', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(20, 'RXbIpjZhVi', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(21, 'RXbIpjZhVi', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(22, 'RXbIpjZhVi', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(23, 'RXbIpjZhVi', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(24, 'RXbIpjZhVi', 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(25, 'eB8MuTSy2A', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(26, 'eB8MuTSy2A', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(27, 'eB8MuTSy2A', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(28, 'eB8MuTSy2A', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(29, 'eB8MuTSy2A', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(30, 'eB8MuTSy2A', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(31, 'eB8MuTSy2A', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(32, 'eB8MuTSy2A', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(33, 'eB8MuTSy2A', 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, '', NULL, '', '', NULL, NULL),
(88, 'RDWwCZkUnf', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'RDWwCZkUnf', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'RDWwCZkUnf', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'dsfaads', NULL, NULL, NULL, NULL, '1689632895_4055ce743ea691d49987.png', NULL, NULL, NULL),
(91, 'RDWwCZkUnf', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'RDWwCZkUnf', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'RDWwCZkUnf', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'RDWwCZkUnf', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'RDWwCZkUnf', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'RDWwCZkUnf', 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'htEICkBcol', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'htEICkBcol', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'htEICkBcol', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'htEICkBcol', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'htEICkBcol', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'htEICkBcol', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'htEICkBcol', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'htEICkBcol', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'htEICkBcol', 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'WujP72nQfv', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'WujP72nQfv', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 'Pelatihan', NULL, NULL, '1689999853_496d38fc5597afe249c9.png', NULL, NULL),
(108, 'WujP72nQfv', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'Pelatihan', NULL, NULL, '1689982577_73eb334ddee10ec3ce33.png', NULL, NULL),
(109, 'WujP72nQfv', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'WujP72nQfv', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'WujP72nQfv', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'menikah', NULL, NULL, NULL, NULL, NULL, NULL, '1689982823_e3053c69c97ea8073afd.png', NULL, NULL, NULL, NULL),
(112, 'WujP72nQfv', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'WujP72nQfv', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'WujP72nQfv', 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'WujP72nQfv', 18, 1689983585, 0, '-2.539264', '112.889565', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aiMSc1AFKyQq3sj.png', NULL),
(116, 'WujP72nQfv', 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'QkdlFwH5AT', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'QkdlFwH5AT', 3, 1690077082, 1, '-2.539134', '112.889425', 1690077424, NULL, '-2.539134', '112.889425', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fU6YOsrI4ced0yw.png', 'GARnYqy715OFXhD.png'),
(119, 'QkdlFwH5AT', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'QkdlFwH5AT', 6, 1690076946, 0, '-2.539134', '112.889425', 1690077316, NULL, '-2.539134', '112.889425', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'xU0QS6MiR25LPkc.png', 'c3KfXhSDH1FvYAW.png'),
(121, 'QkdlFwH5AT', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'QkdlFwH5AT', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'QkdlFwH5AT', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'QkdlFwH5AT', 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'QkdlFwH5AT', 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'TsGCtNRwkj', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'TsGCtNRwkj', 19, 1692600319, 1, '-2.5885886', '112.9796342', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3vd2DzbKlqpuifC.png', NULL),
(128, 'TsGCtNRwkj', 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'TsGCtNRwkj', 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'TsGCtNRwkj', 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'TsGCtNRwkj', 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'TsGCtNRwkj', 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'TsGCtNRwkj', 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'TsGCtNRwkj', 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'TsGCtNRwkj', 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 'TsGCtNRwkj', 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 'TsGCtNRwkj', 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 'TsGCtNRwkj', 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'TsGCtNRwkj', 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 'TsGCtNRwkj', 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'TsGCtNRwkj', 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'TsGCtNRwkj', 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'TsGCtNRwkj', 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 'TsGCtNRwkj', 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 'TsGCtNRwkj', 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, 'TsGCtNRwkj', 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(147, 'TsGCtNRwkj', 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 'TsGCtNRwkj', 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, 'TsGCtNRwkj', 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(150, 'TsGCtNRwkj', 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 'TsGCtNRwkj', 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 'TsGCtNRwkj', 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 'TsGCtNRwkj', 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 'TsGCtNRwkj', 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 'TsGCtNRwkj', 47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 'TsGCtNRwkj', 48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 'TsGCtNRwkj', 49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 'TsGCtNRwkj', 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, 'TsGCtNRwkj', 51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, 'TsGCtNRwkj', 52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 'TsGCtNRwkj', 53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 'TsGCtNRwkj', 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 'TsGCtNRwkj', 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 'TsGCtNRwkj', 56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 'TsGCtNRwkj', 57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 'TsGCtNRwkj', 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 'TsGCtNRwkj', 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 'TsGCtNRwkj', 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 'TsGCtNRwkj', 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 'TsGCtNRwkj', 62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 'TsGCtNRwkj', 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 'TsGCtNRwkj', 64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 'TsGCtNRwkj', 65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 'TsGCtNRwkj', 66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Sekolah'),
(2, 'Guru'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `role` int(1) NOT NULL,
  `tgl_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `jenis_kelamin`, `jabatan`, `email`, `password`, `gambar`, `is_active`, `role`, `tgl_update`) VALUES
(2, '196812052000031008', 'Drs. I NYOMAN SUETA', 'Laki - Laki', 1, 'inyoman@gmail.com', '196812052000031008', 'default.jpg', 1, 2, NULL),
(19, '777', 'Keyrie', 'Laki - Laki', 3, 'keyrie@gmail.com', '999', 'default.jpg', 1, 2, '2023-07-23 08:53:39'),
(20, '197009111996011001', 'AGUS HERIYANTO, S.Pd., M,Si', 'Laki - Laki', 2, 'agus@gmail.com', '197009111996011001', 'default.jpg', 1, 2, NULL),
(21, '197804262006042020', 'LENY APRIANTY, S.Pd', 'Perempuan', 2, 'leny@gmail.com', '197804262006042020', 'default.jpg', 1, 2, NULL),
(22, '198004092007012011', 'MILA, S.Pd', 'Perempuan', 2, 'mila@gmail.com', '198004092007012011', 'default.jpg', 1, 2, NULL),
(23, '197107082007011021', 'BAHRIS, S.Ag., M.Pd', 'Laki - Laki', 2, 'bahris@gmail.com', '197107082007011021', 'default.jpg', 1, 2, NULL),
(24, '198108202009042002', 'CAHYO WULANDARI, S.Si', 'Perempuan', 2, 'cahyo@gmail.com', '198108202009042002', 'default.jpg', 1, 2, NULL),
(25, '198404092009042002', 'SITI RAHMAH UTAMI, S.Pd', 'Perempuan', 2, 'siti@gmail.com', '198404092009042002', 'default.jpg', 1, 2, NULL),
(26, '198702192009042002', 'AULIA ARIE FRIDAYANTI, S.Pd', 'Perempuan', 2, 'aulia@gmail.com', '198702192009042002', 'default.jpg', 1, 2, NULL),
(27, '198302042010011004', 'FEBRI SUGIYANTO, S.Pd. Jas', 'Laki - Laki', 2, 'febri@gmail.com', '198302042010011004', 'default.jpg', 1, 2, NULL),
(28, '198307222010012003', 'JULIA BELLINA SIAHAAN, S.Pd', 'Perempuan', 2, 'julia@gmail.com', '198307222010012003', 'default.jpg', 1, 2, NULL),
(29, '198412212010012007', 'RONA DWI ROSANY NUDDIN, S.Pd', 'Perempuan', 2, 'rona@gmail.com', '198412212010012007', 'default.jpg', 1, 2, NULL),
(30, '198611132011011011', 'HERIANSYAH, S.Pd', 'Laki - Laki', 2, 'heriansyah@gmail.com', '198611132011011011', 'default.jpg', 1, 2, NULL),
(31, '198909072014022006', 'NOVA ADELIA, S.Kom', 'Perempuan', 2, 'nova@gmail.com', '198909072014022006', 'default.jpg', 1, 2, NULL),
(32, '199008232020122014', 'TRISNAWATI, S.Pd', 'Perempuan', 2, 'trisnawati@gmail.com', '199008232020122014', 'default.jpg', 1, 2, NULL),
(33, '198810062014031002', 'MUHAMMAD LUQMAN HAKIM, S.Pd', 'Laki - Laki', 2, 'luqman@gmail.com', '198810062014031002', 'default.jpg', 1, 2, NULL),
(34, '198307072022212013', 'YURIANTINI SARITAYATI, S.Pd', 'Perempuan', 2, 'yuriantini@gmail.com', '198307072022212013', 'default.jpg', 1, 2, NULL),
(35, '198107012022212008', 'DWI YULIASIH, S.Pd', 'Perempuan', 2, 'dwi@gmail.com', '198107012022212008', 'default.jpg', 1, 2, NULL),
(36, '199101022022212009', 'FRANSISKA ANGGUN, S.Kom', 'Perempuan', 2, 'fransiska@gmail.com', '199101022022212009', 'default.jpg', 1, 2, NULL),
(37, '198805172022211003', 'MUHAMMAD FITRIADIANSYAH, S.Kom', 'Laki - Laki', 2, 'fitriadiansyah@gmail.com', '198805172022211003', 'default.jpg', 1, 2, NULL),
(38, '198603202022212010', 'ANIK TRI WAHYUNI, S.Pd', 'Perempuan', 2, 'anik@gmail.com', '198603202022212010', 'default.jpg', 1, 2, NULL),
(39, '199312302022212006', 'MUKTI NIRMALA SARI, S.Pd', 'Perempuan', 2, 'mukti@gmail.com', '199312302022212006', 'default.jpg', 1, 2, NULL),
(40, '199208222022211002', 'AGUNG FANDY FATTAH, S.Pd', 'Laki - Laki', 2, 'agung@gmail.com', '199208222022211002', 'default.jpg', 1, 2, NULL),
(41, '199208262022211005', 'Feriyanto, S.Pd', 'Laki - Laki', 2, 'feri@gmail.com', '199208262022211005', 'default.jpg', 1, 2, NULL),
(42, '197808192022212005', 'Erna Agustina, S.Pd', 'Perempuan', 2, 'erna@gmail.com', '197808192022212005', 'default.jpg', 1, 2, NULL),
(43, '199202282022211003', 'Husin, S.Kom', 'Laki - Laki', 2, 'husin@gmail.com', '199202282022211003', 'default.jpg', 1, 2, NULL),
(44, '198307242022212021', 'Eka Meranti, S.Pd', 'Perempuan', 2, 'eka@gmail.com', '198307242022212021', 'default.jpg', 1, 2, NULL),
(45, '199608122022211003', 'Muhammad Nasir, S.Pd', 'Laki - Laki', 2, 'muhammad@gmail.com', '199608122022211003', 'default.jpg', 1, 2, NULL),
(46, '199406252022212008', 'Rizky Maisyarah, S.S', 'Perempuan', 2, 'rizky@gmail.com', '199406252022212008', 'default.jpg', 1, 2, NULL),
(47, '197411182022212004', 'Nurida, SH', 'Perempuan', 2, 'nurida@gmail.com', '197411182022212004', 'default.jpg', 1, 2, NULL),
(48, '01', 'IKA ARIS NURCAHYAWATI, SE', 'Perempuan', 2, 'ika@gmail.com', '01', 'default.jpg', 1, 2, NULL),
(49, '02', 'HIKMATUL HUSNA, S.Pd', 'Perempuan', 2, 'hikmatul@gmail.com', '02', 'default.jpg', 1, 2, NULL),
(50, '03', 'DENI RAHMAWATI, S.Pd', 'Perempuan', 2, 'deni@gmail.com', '03', 'default.jpg', 1, 2, NULL),
(51, '04', 'Novi Yannor, S.Pd', 'Perempuan', 2, 'novi@gmail.com', '04', 'default.jpg', 1, 2, NULL),
(52, '05', 'Suhadi, S.Pd', 'Laki - Laki', 2, 'suhadi@gmail.com', '05', 'default.jpg', 1, 2, NULL),
(53, '06', 'Muhammad Rinaldhi, S.Pd', 'Laki - Laki', 2, 'muhammad@gmail.com', '06', 'default.jpg', 1, 2, NULL),
(54, '07', 'Yusuf Frandy Tabarat, S.Pd', 'Laki - Laki', 2, 'yusuf@gmail.com', '07', 'default.jpg', 1, 2, NULL),
(55, '08', 'Nurul Sa\'adah, S.Gz', 'Perempuan', 2, 'nurul@gmail.com', '08', 'default.jpg', 1, 2, NULL),
(56, '09', 'Nurhalimatus Sa’diyah, S.Pd', 'Perempuan', 2, 'nurhalimatus@gmail.com', '09', 'default.jpg', 1, 2, NULL),
(57, '10', 'Melenia, S.Pd', 'Perempuan', 2, 'melenia@gmail.com', '10', 'default.jpg', 1, 2, NULL),
(58, '11', 'Thomas Rogi Widagdo, S.Pd.K', 'Laki - Laki', 2, 'thomas@gmail.com', '11', 'default.jpg', 1, 2, NULL),
(59, '12', 'Jedi, S.Ag', 'Laki - Laki', 2, 'jedi@gmail.com', '12', 'default.jpg', 1, 2, NULL),
(60, '13', 'Sri Rahmah, S.Kom', 'Perempuan', 2, 'sri@gmail.com', '13', 'default.jpg', 1, 2, NULL),
(61, '14', 'Roni Setiawan', 'Laki - Laki', 2, 'roni@gmail.com', '14', 'default.jpg', 1, 2, NULL),
(62, '15', 'Noprida Arianto, S.Kom', 'Laki - Laki', 2, 'noprida@gmail.com', '15', 'default.jpg', 1, 2, NULL),
(63, '16', 'Fovi Melda Sucidianti', 'Perempuan', 2, 'fovi@gmail.com', '16', 'default.jpg', 1, 2, NULL),
(64, '17', 'Muhammad Ridho Ramadhani', 'Laki - Laki', 2, 'muhammad@gmail.com', '17', 'default.jpg', 1, 2, NULL),
(65, '18', 'Handoko', 'Laki - Laki', 2, 'handoko@gmail.com', '18', 'default.jpg', 1, 2, NULL),
(66, '19', 'Binawati', 'Perempuan', 2, 'binawati@gmail.com', '19', 'default.jpg', 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan_absen`
--

CREATE TABLE `pengaturan_absen` (
  `id_pengaturan_absen` int(11) NOT NULL,
  `jam_masuk` varchar(100) NOT NULL,
  `jam_keluar` varchar(100) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `batas_jarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengaturan_absen`
--

INSERT INTO `pengaturan_absen` (`id_pengaturan_absen`, `jam_masuk`, `jam_keluar`, `latitude`, `longitude`, `batas_jarak`) VALUES
(1, '08:50', '08:55', '-2.588088182932093', '112.97949921260492', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_absensi`
--
ALTER TABLE `detail_absensi`
  ADD PRIMARY KEY (`id_detail_absensi`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pengaturan_absen`
--
ALTER TABLE `pengaturan_absen`
  ADD PRIMARY KEY (`id_pengaturan_absen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_absensi`
--
ALTER TABLE `detail_absensi`
  MODIFY `id_detail_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `pengaturan_absen`
--
ALTER TABLE `pengaturan_absen`
  MODIFY `id_pengaturan_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
