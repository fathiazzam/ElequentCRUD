-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 12:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahardika`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` int(100) NOT NULL,
  `jns_kl` varchar(20) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tmpt_lhr` varchar(999) NOT NULL,
  `alamat` varchar(999) NOT NULL,
  `nohp` int(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `angt_klg` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `nama`, `nik`, `jns_kl`, `tgl_lhr`, `tmpt_lhr`, `alamat`, `nohp`, `pekerjaan`, `angt_klg`) VALUES
(12, 'Atikah', 1231, 'Perempuan', '2000-01-10', 'Bandung', 'Bandung utara', 3123131, 'Koki', 7),
(13, 'Fafa', 123105, 'Perempuan', '2002-04-19', 'Madiun', 'Madiun utara', 3123131, 'Sales', 4),
(15, 'Rosianti', 1231, 'Perempuan', '2002-03-12', 'Madiun', 'Madiun utara', 3123131, 'Guru', 6),
(20, 'Fidia', 1231, 'Perempuan', '2002-03-12', 'Madiun', 'Madiun utara', 3123131, 'Koki', 6),
(25, 'Nabila', 12301231, 'Perempuan', '2002-03-12', 'Purwakarta', 'Purwakarta utara', 3123131, 'Petani', 6),
(41, 'Nisrina', 23742, 'Perempuan', '2010-01-29', 'Surabaya', 'Rungkut Surabaya', 3123131, 'Make up Artis', 6),
(42, 'Nadia', 1231, 'Perempuan', '2002-03-12', 'Semarang', 'Semarang utara', 3123131, 'Admin', 6),
(49, 'Azzam Fathi', 162384, 'Laki-laki', '1997-11-14', 'Probolinggo', 'Probolinggo Jawa Timur', 2341231, 'Barista', 5),
(50, 'Fathi', 23654910, 'Laki-laki', '1999-11-13', 'Paiton', 'Paiton Jawa Timur', 432141231, 'Instrument Control', 8),
(51, 'Aji', 231418, 'Laki-laki', '1995-07-11', 'Lampung', 'Lampung', 1231, 'Network Engineer', 4),
(52, 'Ahmad', 2346723, 'Laki-laki', '2008-02-15', 'Gresik', 'Gresik Utara', 12313, 'Mandor', 2),
(53, 'Farouq', 3284720, 'Laki-laki', '1993-02-17', 'Blitar', 'Blitar Utara', 4327861, 'Gamer', 3),
(55, 'Ariq', 21312, 'Laki-laki', '2000-12-11', 'Pekan Baru', 'Pekan baru Riau', 324791, 'Analis', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
