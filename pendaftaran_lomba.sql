-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2024 at 01:40 AM
-- Server version: 10.11.5-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_lomba`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_lomba`
--

CREATE TABLE `bidang_lomba` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidang_lomba`
--

INSERT INTO `bidang_lomba` (`id`, `nama`) VALUES
(1, 'Web Technologies'),
(2, 'Cyber Security'),
(3, 'Cloud Computing'),
(4, 'IT Network System Administrator'),
(5, 'Robotika');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(10) NOT NULL,
  `kategori` enum('berita','informasi') NOT NULL,
  `isi_konten` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_reg` int(20) NOT NULL,
  `bid_lomba` varchar(100) NOT NULL,
  `asal_sekolah` varchar(80) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk_siswa` enum('L','P') NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `tempat_lahir_siswa` varchar(30) NOT NULL,
  `tgl_lahir_siswa` date NOT NULL,
  `no_hp_siswa` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jk_guru` enum('L','P') NOT NULL,
  `tempat_lahir_guru` varchar(50) NOT NULL,
  `tgl_lahir_guru` date NOT NULL,
  `no_hp_guru` varchar(20) NOT NULL,
  `file_bukti` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_reg`, `bid_lomba`, `asal_sekolah`, `nama_siswa`, `jk_siswa`, `nisn`, `tempat_lahir_siswa`, `tgl_lahir_siswa`, `no_hp_siswa`, `nama_guru`, `nip`, `jk_guru`, `tempat_lahir_guru`, `tgl_lahir_guru`, `no_hp_guru`, `file_bukti`, `id_user`) VALUES
(5, 'Web Technologies', 'SMKN 1 SLAWI', 'Raja A', 'L', '8889999', 'Tegal', '2002-02-22', '89899898', 'TEST', '9999', 'L', 'Ngawi', '2002-02-01', '89898998', 'test.pdf', 12),
(6, 'Web Technologies', 'SMKN 1 DUKUHTURI', 'Raja Aunur', 'L', '88988999', 'Tegal', '2006-12-28', '0895000000', 'Test', '8989898888', 'L', 'Tegal', '2001-01-01', '085888888', 'test1.pdf', 13);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama`) VALUES
(1, 'SMKN 1 SLAWI'),
(2, 'SMKN 1 DUKUHTURI'),
(3, 'SMKN 1 ADIWERNA'),
(4, 'SMKN 2 ADIWERNA'),
(5, 'SMKN 1 TEGAL'),
(6, 'SMKN 2 SLAWI'),
(7, 'SMKN 1 WARUREJA'),
(8, 'SMKN 2 TEGAL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(12, 'raja', '$2y$10$YCjQsMwDcLloN2KyQ/pX7elX6Jz7IlyKWxNHrGQnezorakdGbyebq', '1'),
(13, 'raja2', '$2y$10$iSFIA0tzeS1YIStdio7ROOZgVXMPHc0fXJYHMoUQNBTmB6FRrln9a', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_lomba`
--
ALTER TABLE `bidang_lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_reg`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_lomba`
--
ALTER TABLE `bidang_lomba`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_reg` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
