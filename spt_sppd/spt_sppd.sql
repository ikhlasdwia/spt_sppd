-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 08:44 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spt_sppd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'atkpmakassar', 'atkpmakassar2018');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('admin','user','editor','') NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_session` varchar(45) NOT NULL,
  `create_time` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `level`, `nama`, `email`, `id_session`, `create_time`, `last_update`, `foto`) VALUES
(1, 'ikhlasdwia', 'ikhlas', 'admin', 'Nur Ikhlas Dwi Amiruddin', 'ikhlasdwiamir@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` bigint(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `pangkat` enum('IV/a','IV/b','IV/c','IV/d','III/a','III/b','III/c','III/d','II/a','II/b','II/c','II/d','I/a','I/b','I/c','I/d') NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `pangkat`, `jabatan`) VALUES
(1, '196808111991031001', 'Agus Salim', 'III/d', 'Penata Tingkat I'),
(2, '196909272007011001', 'Najamuddin', 'II/c', 'Pengelola Keuangan'),
(3, '196808111991031001', 'Sudirman, S.E', 'IV/c', 'Wakil Direktur III'),
(4, '196909272010011003', 'Sitti Anisah', 'I/c', 'Kepegawaian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sppd`
--

CREATE TABLE `tb_sppd` (
  `nomor_surat` varchar(30) NOT NULL,
  `kd_surat` bigint(20) NOT NULL,
  `pejabat_pk` varchar(30) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `pangkat` enum('IV/a','IV/b','IV/c','IV/d','III/a','III/b','III/c','III/d','II/a','II/b','II/c','II/d','I/a','I/b','I/c','I/d') NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `biaya` varchar(30) NOT NULL,
  `isi_perintah` varchar(100) NOT NULL,
  `angkutan` enum('mobil','kapal','pesawat','') NOT NULL,
  `tempat_berangkat` varchar(30) NOT NULL,
  `tempat_tujuan` varchar(30) NOT NULL,
  `lama_dinas` varchar(30) NOT NULL,
  `satuan` enum('hari','minggu','bulan','tahun') NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `pengikut` varchar(30) NOT NULL,
  `anggaran_dari` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sppd`
--

INSERT INTO `tb_sppd` (`nomor_surat`, `kd_surat`, `pejabat_pk`, `nama_pegawai`, `nip`, `pangkat`, `jabatan`, `biaya`, `isi_perintah`, `angkutan`, `tempat_berangkat`, `tempat_tujuan`, `lama_dinas`, `satuan`, `tgl_berangkat`, `tgl_kembali`, `pengikut`, `anggaran_dari`) VALUES
('JJBJKBJKBM', 0, 'Najamuddin', 'Agus Salim', '196808111991031001', 'III/d', 'Penata Tingkat I', '1344554', 'mnm,n', 'mobil', 'mksr', 'mksr', '1', 'hari', '2018-08-01', '2018-08-02', 'Nurhaeda', 'ATKP-Makassar'),
('UM.202/II/07/PPSDMPU-19', 0, 'Agus Salim', 'Najamuddin', '196909272007011001', 'II/c', 'Pengelola Keuangan', '1000000', 'vfvf', 'kapal', 'MAKASSAR', 'MAKASSAR', '1', 'hari', '2018-08-04', '2018-08-05', 'Sitti Annisa', 'ATKP-MKSR'),
('UM.202/II/07/PPSDMPU-21', 1, 'Agus Salim', 'Sudirman, S.E ', '197010061991121001', 'IV/c', 'Wakil Direktur III', '1000000', 'nnnnnnnnnnnn', 'mobil', 'Makassar', 'Surabaya', '1', 'hari', '2018-08-16', '2018-08-09', 'Wakil Direktur III', 'ATKP-MKSR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spt`
--

CREATE TABLE `tb_spt` (
  `kd_surat` bigint(20) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `pangkat` enum('IV/a','IV/b','IV/c','IV/d','III/a','III/b','III/c','III/d','II/a','II/b','II/c','II/d','I/a','I/b','I/c','I/d') NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `isi_perintah` varchar(100) NOT NULL,
  `pengirim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_spt`
--

INSERT INTO `tb_spt` (`kd_surat`, `no_surat`, `tgl`, `nama_pegawai`, `nip`, `pangkat`, `jabatan`, `isi_perintah`, `pengirim`) VALUES
(16, 'UM.202/II/07/PPSDMPU-19', '2018-08-08', 'Najamuddin', '196909272007011001', 'II/c', 'Pengelola Keuangan', 'Undangan', 'Kepala Pusat Pengembangan Sumber Daya Manusia Perhubungan Udara'),
(17, 'UM.202/II/07/PPSDMPU-21', '2018-08-08', 'Sudirman, S.E ', '197010061991121001', 'IV/c', 'Wakil Direktur III', 'vdsvsd', 'Kepala Pusat Pengembangan Sumber Daya Manusia Perhubungan Udara'),
(18, 'JJBJKBJKBM', '2018-08-01', 'Agus Salim', '196808111991031001', 'III/d', 'Penata Tingkat I', 'njkbkjb', 'Kemenhub');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_laporan`
-- (See below for the actual view)
--
CREATE TABLE `view_laporan` (
`kd_surat` bigint(20)
,`no_surat` varchar(30)
,`tgl` date
,`nama_pegawai` varchar(50)
,`nip` varchar(20)
,`pangkat` enum('IV/a','IV/b','IV/c','IV/d','III/a','III/b','III/c','III/d','II/a','II/b','II/c','II/d','I/a','I/b','I/c','I/d')
,`jabatan` varchar(30)
,`isi_perintah` varchar(100)
,`pejabat_pk` varchar(30)
,`biaya` varchar(30)
,`angkutan` enum('mobil','kapal','pesawat','')
,`tempat_berangkat` varchar(30)
,`tempat_tujuan` varchar(30)
,`tgl_berangkat` date
,`tgl_kembali` date
,`anggaran_dari` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_laporan_spt`
-- (See below for the actual view)
--
CREATE TABLE `view_laporan_spt` (
`pengirim` varchar(255)
,`nama_pegawai` varchar(50)
,`nip` varchar(20)
,`pangkat` enum('IV/a','IV/b','IV/c','IV/d','III/a','III/b','III/c','III/d','II/a','II/b','II/c','II/d','I/a','I/b','I/c','I/d')
,`jabatan` varchar(30)
,`isi_perintah` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `view_laporan`
--
DROP TABLE IF EXISTS `view_laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_laporan`  AS  select `tb_spt`.`kd_surat` AS `kd_surat`,`tb_spt`.`no_surat` AS `no_surat`,`tb_spt`.`tgl` AS `tgl`,`tb_spt`.`nama_pegawai` AS `nama_pegawai`,`tb_spt`.`nip` AS `nip`,`tb_spt`.`pangkat` AS `pangkat`,`tb_spt`.`jabatan` AS `jabatan`,`tb_spt`.`isi_perintah` AS `isi_perintah`,`tb_sppd`.`pejabat_pk` AS `pejabat_pk`,`tb_sppd`.`biaya` AS `biaya`,`tb_sppd`.`angkutan` AS `angkutan`,`tb_sppd`.`tempat_berangkat` AS `tempat_berangkat`,`tb_sppd`.`tempat_tujuan` AS `tempat_tujuan`,`tb_sppd`.`tgl_berangkat` AS `tgl_berangkat`,`tb_sppd`.`tgl_kembali` AS `tgl_kembali`,`tb_sppd`.`anggaran_dari` AS `anggaran_dari` from (`tb_spt` join `tb_sppd`) where (`tb_spt`.`kd_surat` = `tb_sppd`.`kd_surat`) ;

-- --------------------------------------------------------

--
-- Structure for view `view_laporan_spt`
--
DROP TABLE IF EXISTS `view_laporan_spt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_laporan_spt`  AS  select `tb_spt`.`pengirim` AS `pengirim`,`tb_spt`.`nama_pegawai` AS `nama_pegawai`,`tb_spt`.`nip` AS `nip`,`tb_spt`.`pangkat` AS `pangkat`,`tb_spt`.`jabatan` AS `jabatan`,`tb_spt`.`isi_perintah` AS `isi_perintah` from `tb_spt` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_sppd`
--
ALTER TABLE `tb_sppd`
  ADD PRIMARY KEY (`nomor_surat`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kd_spt` (`nomor_surat`);

--
-- Indexes for table `tb_spt`
--
ALTER TABLE `tb_spt`
  ADD PRIMARY KEY (`kd_surat`),
  ADD UNIQUE KEY `no_surat` (`no_surat`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`),
  ADD KEY `nama_pegawai` (`nama_pegawai`),
  ADD KEY `nama_pegawai_2` (`nama_pegawai`),
  ADD KEY `no_surat_2` (`no_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_spt`
--
ALTER TABLE `tb_spt`
  MODIFY `kd_surat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_sppd`
--
ALTER TABLE `tb_sppd`
  ADD CONSTRAINT `tb_sppd_ibfk_1` FOREIGN KEY (`nomor_surat`) REFERENCES `tb_spt` (`no_surat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
