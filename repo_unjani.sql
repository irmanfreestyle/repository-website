-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2019 at 04:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repo_unjani`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `dosen_pembimbing` varchar(50) NOT NULL,
  `kata_kunci` varchar(50) NOT NULL,
  `abstrak` varchar(500) NOT NULL,
  `gambar_file` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id_file`, `nama_file`, `kategori`, `judul`, `pengarang`, `dosen_pembimbing`, `kata_kunci`, `abstrak`, `gambar_file`, `tgl_upload`) VALUES
(4, 'e1e51b43a71d46c15757bbf50992b0af.pdf', 'jurnal', 'Eloquent Javascript', 'Adi Bahar', '', 'ES6, CSS, HTML', 'adoadoa daodoanda daodoadoa oajdoajdajd adoadoa daodoanda daodoadoa oajdoajdajdadoadoa daodoanda daodoadoa oajdoajdajdadoadoa daodoanda daodoadoa oajdoajdajd adoadoa daodoanda daodoadoa oajdoajdajd', '6fd448afd3f1ddb60b060545961adff4.jpg', '2019-06-15'),
(6, '0f20d92b908d36e2bcc17f419fa42675.pdf', 'ebook', 'Kontruksi Luar Dalam', 'Sudirman', 'Andi', 'js, es6, pemrograman', 'adoajdojadadnoad adjaodjaod adoaodjaoda', '', '2019-06-15'),
(8, '0e46e755b54cfe7dcf51f9670a7a0cf0.pdf', 'ebook', 'Judul apa adanya', 'samsul hr', '', 'ES6, CSS, HTML', '', '7a26166a3fe1da894d907580f08ba3c3.jpg', '2019-06-15');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
