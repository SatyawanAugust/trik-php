-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 21, 2008 at 04:42 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `pintar`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `anak`
-- 

CREATE TABLE `anak` (
  `id_anak` int(5) NOT NULL auto_increment,
  `id_ang` int(5) NOT NULL,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `umur` int(3) NOT NULL,
  PRIMARY KEY  (`id_anak`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `anak`
-- 

INSERT INTO `anak` (`id_anak`, `id_ang`, `nama`, `umur`) VALUES 
(3, 5, 'Amara', 7),
(4, 5, 'Krisna', 5);

-- --------------------------------------------------------

-- 
-- Table structure for table `anggota`
-- 

CREATE TABLE `anggota` (
  `id_ang` int(3) NOT NULL auto_increment,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_ang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=40 ;

-- 
-- Dumping data for table `anggota`
-- 

INSERT INTO `anggota` (`id_ang`, `nama`, `alamat`) VALUES 
(1, 'Lukmanul Hakim', 'Yogyakarta'),
(2, 'Siti Mutmainah', 'Belitung'),
(3, 'Beauty Khuluqiyah', 'Banjarmasin'),
(4, 'Gelora Mahardika', 'Jakarta'),
(5, 'Clara Erika', 'Magelang'),
(6, 'Gita Indah Purnama', 'Surabaya'),
(7, 'Aji Pratama Putra', 'Surakarta'),
(8, 'Ririn Restu Amalia', 'Makasar'),
(9, 'Bangkit Prasetya Adi', 'Balikpapan'),
(10, 'Ikrima Mailani', 'Bandung'),
(11, 'Frita Faramita', 'Semarang'),
(12, 'Syalasiria Djuria', 'Medan'),
(13, 'Kanzul Firdaus', 'Manado'),
(14, 'Ririn Dwi Ariyanti', 'Lampung'),
(15, 'Mayadah Samarawati', 'Bali'),
(16, 'Ririn Nurul Hidayati', 'Palembang'),
(17, 'Brama Surya Kumbara', 'Malang'),
(18, 'Uspal Jandevi', 'Pekan Baru'),
(19, 'Ririn Elok Puspasari', 'Jepara'),
(20, 'Yunia Ervina', 'Bogor'),
(21, 'Hunter Pandega', 'Klaten'),
(22, 'Adamono Awamiti', 'Boyolali'),
(23, 'Muren Herdigenarosa', 'Palu'),
(24, 'Ririn Yusma Adelia', 'Tangerang'),
(25, 'Purnama Sahara', 'Cirebon'),
(26, 'Bryan Hartomo', 'Cilacap'),
(27, 'Ririn Fawzia Agustina', 'Padang'),
(28, 'Lubsir Munir', 'Pontianak'),
(29, 'Ariandra Satria', 'Temanggung'),
(30, 'Ruhul Ulya', 'Bekasi'),
(31, 'Lusiana Rustandika', 'Sleman'),
(32, 'Qori Adzani', 'Depok'),
(33, 'Azwin Yuda Himawan', 'Bima'),
(34, 'Septiana Prihastantri', 'Bangka'),
(35, 'Dwi Kusuma Wardhana', 'Sragen'),
(36, 'Retnowati Pambayun', 'Kulon Progo'),
(37, 'Philare Shopia', 'Majene'),
(38, 'Roger Basuki', 'Samarinda'),
(39, 'Riska Rembasepsela', 'Ambon');

-- --------------------------------------------------------

-- 
-- Table structure for table `fakultas`
-- 

CREATE TABLE `fakultas` (
  `id_fak` int(5) NOT NULL auto_increment,
  `nama_fak` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_fak`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `fakultas`
-- 

INSERT INTO `fakultas` (`id_fak`, `nama_fak`) VALUES 
(1, 'Ekonomi'),
(2, 'Ilmu Budaya'),
(3, 'Kehutanan'),
(4, 'Pertanian'),
(5, 'Teknik');

-- --------------------------------------------------------

-- 
-- Table structure for table `galeri`
-- 

CREATE TABLE `galeri` (
  `id_galeri` int(3) NOT NULL auto_increment,
  `judul` varchar(100) collate latin1_general_ci NOT NULL,
  `gambar` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_galeri`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `galeri`
-- 

INSERT INTO `galeri` (`id_galeri`, `judul`, `gambar`) VALUES 
(1, 'Bayi Lucu', 'images/2026.jpg'),
(2, 'Bayi Berselimut', 'images/2035.jpg'),
(3, 'Berlibur di Pantai', 'images/2305.jpg'),
(4, 'Balita Hulahop', 'images/2330.jpg'),
(5, 'Balita dan Bola', 'images/2336.jpg'),
(6, 'Ngambek nih ye', 'images/2027.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `prodi`
-- 

CREATE TABLE `prodi` (
  `id` int(5) NOT NULL auto_increment,
  `nama` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_berdiri` date NOT NULL,
  `id_fak` int(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `prodi`
-- 

INSERT INTO `prodi` (`id`, `nama`, `tgl_berdiri`, `id_fak`) VALUES 
(1, 'Arsitek', '2002-11-07', 5),
(2, 'Elektro', '2004-08-14', 5),
(3, 'Nuklir', '2000-12-20', 5),
(4, 'Sipil', '1998-05-13', 5),
(5, 'Akuntansi', '2002-10-15', 1),
(6, 'Manajemen', '2004-01-14', 1),
(7, 'Arkeologi', '2002-09-09', 2),
(8, 'Sastra Inggris', '2006-02-19', 2),
(9, 'Agronomi', '2001-01-09', 4),
(10, 'Agrobisnis', '1997-05-29', 4),
(11, 'Ilmu Hama & Penyakit Tumbuhan', '1999-09-09', 4),
(12, 'Penyuluhan & Komunikasi Pertanian', '2002-07-23', 4),
(13, 'Manajemen Kehutanan', '2001-05-08', 3);

-- --------------------------------------------------------

-- 
-- Table structure for table `upload_file`
-- 

CREATE TABLE `upload_file` (
  `id_upload` int(3) NOT NULL auto_increment,
  `nama_file` varchar(100) collate latin1_general_ci NOT NULL,
  `ukuran_file` int(100) NOT NULL,
  `deskripsi` text collate latin1_general_ci NOT NULL,
  `direktori` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_upload`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=74 ;

-- 
-- Dumping data for table `upload_file`
-- 

INSERT INTO `upload_file` (`id_upload`, `nama_file`, `ukuran_file`, `deskripsi`, `direktori`) VALUES 
(70, 'Counter.zip', 9976, 'Skrip PHP untuk membuat counter grafis', 'files/counter.zip'),
(71, 'SmartFTP.zip', 3175805, 'Program untuk mengupload file ke server.', 'files/SmartFTP.zip');
