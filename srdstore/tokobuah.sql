-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 12:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuah`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `jasa_kirim` varchar(55) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `no_tlp`, `jasa_kirim`, `alamat`, `kode_pos`, `tgl_pesan`, `batas_bayar`) VALUES
(33, 'Sugeri Ashari R', '0895396581760', 'JNE', 'Wangun Tengah, RT05/03', 16146, '2021-10-25 20:22:12', '2021-10-26 20:22:12'),
(37, 'Dimasedesu', '0812345566', 'JNE', 'Langit ke 7, Rahmatullah Rt01/01', 3213213, '2021-10-26 09:33:45', '2021-10-27 09:33:45'),
(50, 'Dimasedesu', '0812345566', 'JNE', 'Jl.guntur', 122323, '2021-10-26 15:41:22', '2021-10-27 15:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no_tlp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` int(35) NOT NULL,
  `role` enum('1','2','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no_tlp`, `email`, `username`, `password`, `role`) VALUES
('08123456789', 'helow@gmail.com', 'User 2', 123, '2'),
('08123465678', 'desunihsenggoldong@gmail.com', 'Desuskuy', 123, '2'),
('083892316990', 'dimassp@gmail.com', 'Dimas SP', 123, '2'),
('0895396581760', 'geriashari@gmail.com', 'Sugeri Asha', 129, '1');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(55) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(14, 10, 2, 'tuak', 1, 600000, ''),
(15, 10, 21, 'Laptop OMEN GAMING', 1, 17000000, ''),
(16, 10, 17, 'Rog Phone 5', 1, 15000000, ''),
(17, 11, 2, 'tuak', 1, 600000, ''),
(18, 12, 17, 'Rog Phone 5', 1, 15000000, ''),
(19, 12, 19, 'Lebron James 11 Elite', 1, 2500000, ''),
(20, 13, 17, 'Rog Phone 5', 1, 15000000, ''),
(21, 14, 17, 'Rog Phone 5', 1, 15000000, ''),
(22, 33, 17, 'Rog Phone 5', 1, 15000000, ''),
(23, 34, 17, 'Rog Phone 5', 1, 15000000, ''),
(24, 37, 2, 'tuak', 1, 600000, ''),
(25, 38, 17, 'Rog Phone 5', 1, 15000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `description`) VALUES
(17, 'Rog Phone 5', 15000000, '17.jpg', 'Ram 16Gb Rom 1TB'),
(19, 'Lebron James 11 Elite', 2500000, '19.jpg', 'Sepatu Lebron James 11 Elite Original Import'),
(21, 'Laptop OMEN GAMING', 17000000, 'Laptop.jpg', 'LAPTOP MAHAL BANG!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no_tlp`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
