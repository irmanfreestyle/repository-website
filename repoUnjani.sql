-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2019 at 06:56 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repoUnjani`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id_file` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `dosen_pembimbing` varchar(50) NOT NULL,
  `kata_kunci` varchar(50) NOT NULL,
  `abstrak` varchar(500) NOT NULL,
  `gambar_file` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL,
  `tahun_upload` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id_file`, `kategori`, `judul`, `pengarang`, `dosen_pembimbing`, `kata_kunci`, `abstrak`, `gambar_file`, `tgl_upload`, `tahun_upload`) VALUES
('5d4318212d74c', 'ebook', 'Vue.js Master', 'Sudirman', 'Sumarin', 'ES6, CSS, HTML', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolorem quo itaque laboriosam dolores voluptas recusandae. Distinctio cum unde amet. Ipsam tempora quibusdam perferendis quaerat modi similique enim, ducimus officia.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolorem quo itaque laboriosam dolores voluptas recusandae. Distinctio cum unde amet. Ipsam tempora quibusdam perferendis quaerat modi similique enim, ducimus officia.', 'e04615f28801c07bbcd89a1a6a10feaa.jpg', '2019-08-01', 2019),
('5d43184fc7287', 'jurnal', 'Javascript is the best', 'Iron man', 'Ip-man', 'js, es6, pemrograman', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolorem quo itaque laboriosam dolores voluptas recusandae. Distinctio cum unde amet. Ipsam tempora quibusdam perferendis quaerat modi similique enim, ducimus officia.', '', '2019-08-01', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `file_files`
--

CREATE TABLE `file_files` (
  `file_files_id` int(11) NOT NULL,
  `id_file` varchar(200) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_files`
--

INSERT INTO `file_files` (`file_files_id`, `id_file`, `nama_file`, `path`) VALUES
(12, '5d4318212d74c', 'Faktur', '179513b74c87146b06c0692d7381c59b.png'),
(13, '5d4318212d74c', 'Cover', 'fc4826d2536d7c24ddec994883998888.png'),
(14, '5d4318212d74c', 'lampiran', '8129d21927eae89d2c98f8950a929513.png'),
(15, '5d43184fc7287', 'Cover', '91ab4d5a38a2188985773b2a5f4a036a.png'),
(16, '5d43184fc7287', 'lampiran', '62430f97f2b8374dcec08b7bb6b92b1b.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `file_files`
--
ALTER TABLE `file_files`
  ADD PRIMARY KEY (`file_files_id`),
  ADD KEY `file_files_ibfk_1` (`id_file`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_files`
--
ALTER TABLE `file_files`
  MODIFY `file_files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file_files`
--
ALTER TABLE `file_files`
  ADD CONSTRAINT `file_files_ibfk_1` FOREIGN KEY (`id_file`) REFERENCES `files` (`id_file`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
