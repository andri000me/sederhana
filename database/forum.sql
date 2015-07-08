-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2015 at 06:37 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` varchar(30) NOT NULL,
  `id_thread` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `isi_comment` varchar(50) NOT NULL,
  `tanggal_comment` varchar(15) NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `judul_kategori` varchar(20) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `judul_kategori`, `ket`) VALUES
(1, 'Pelajaran', 'Mengenai pelajaran'),
(2, 'event sekolah', 'membuat acara yang akan di adakan di setiap sekola'),
(3, 'ekskul', 'sharing - sharing tentang ekskul'),
(4, 'OSIS', 'sharing - sharing tentang organisasi'),
(5, 'life style', 'membicarakan tentang gaya hidup yang lebih baik te');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `sekolah` varchar(23) NOT NULL,
  `jawaban` varchar(20) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `join` varchar(20) NOT NULL,
  `ulang_tahun` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `nama_lengkap`, `email`, `password`, `gender`, `sekolah`, `jawaban`, `pertanyaan`, `join`, `ulang_tahun`, `status`) VALUES
('', ' ', '', '', '', '', '', '', '09-Mar-2015', '--', 0),
('@nannysuhartini', 'nanny suhartini', 'nanay29@gmail.com', 'rns295698', 'Perempuan', '', 'Chuck Norris ', 'Siapa Ayah Anda ?', '05-Mar-2015', '1998-4-26', 0),
('@raisa', 'Raisa Adriana', 'r', 'ioio', 'Laki-Laki', '', 'wowo ', 'Siapa anak Tukang bakso?', '', '1945-1-1', 0),
('amoy', 'resti yulianti', 'restiamoy92@yahoo.co', 'hahay', 'Perempuan', '', 'wakwaww ', 'Siapa Ayah Anda ?', '05-Mar-2015', '1998-2-9', 0),
('ilham ramadhan', 'ilham ramadhan', 'baom@gmail.com', 'boambaom', 'Laki-Laki', '', 'tadii ', 'Kapan Anda Berhenti Menyusui?', '10-Mar-2015', '1998-1-15', 0),
('mcmjbc', 'gjsgjg jsgjgsj', 'shcksahjc', 'hdjhcajhj', 'Laki-Laki', '', ' jgadhgj', 'Siapa anak Tukang bakso?', '09-Mar-2015', '1990-1-19', 0),
('salmaaihsania', 'salmaa ihsania', 'salmaaihsania@gmail.', 'tsania19', 'Perempuan', '', ' jintom', 'Siapa anak Tukang bakso?', '10-Feb-2015', '1998-11-21', 0),
('tsaninashrullah', 'Tsani nashrullah', 't.nashrullah@gmail.c', 'ihtsania', 'Laki-Laki', '', 'ujang ', 'Siapa anak Tukang bakso?', '09-Feb-2015', '1998-1-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_message` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `tanggal_message` varchar(10) NOT NULL,
  `isi_message` varchar(30) NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `reputasi`
--

CREATE TABLE IF NOT EXISTS `reputasi` (
  `id_reputasi` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `reputasi` varchar(20) NOT NULL,
  `komentar` varchar(30) NOT NULL,
  `tanggal_reputasi` date NOT NULL,
  `id_thread` varchar(30) NOT NULL,
  PRIMARY KEY (`id_reputasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reputasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sekolah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(30) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `no_telp`) VALUES
(1, 'SMK PGRI 1 Cimahi', 'Jl Terusan Gg Karya SMEA', '6624052'),
(2, 'SMKN 1 Cimahi', 'JL MAhar Marta Negara', '081231083547'),
(3, 'Sky High School', 'Jl Langit Biru', '007');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `id_thread` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` varchar(30) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `isi` varchar(30) NOT NULL,
  `tanggal_thread` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`id_thread`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id_thread`, `id_kategori`, `judul`, `isi`, `tanggal_thread`, `username`) VALUES
(1, 'Pelajaran', 'sads', 'sadsdasda', '10-Mar-2015', 'salmaaihsania');
