-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql113.epizy.com
-- Waktu pembuatan: 18 Des 2020 pada 02.25
-- Versi server: 5.6.48-88.0
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24979459_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jam1` varchar(100) NOT NULL,
  `jam2` varchar(100) NOT NULL,
  `jam3` varchar(100) NOT NULL,
  `jam4` varchar(100) NOT NULL,
  `jam5` varchar(100) NOT NULL,
  `jam6` varchar(100) NOT NULL,
  `jam7` varchar(100) NOT NULL,
  `jam8` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'admin', '541081.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `struktural` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `email`, `struktural`, `nohp`, `tanggal_lahir`, `alamat`, `username`, `password`, `foto`) VALUES
(19, 'Agung Wahyudi', 'agungfullday@gmail.com', 'TU/OPERATOR', '085231100597', '2014-04-27', 'Rambipuji', 'agung', '1234', 'IMG_20200204_171938.jpg'),
(20, 'Atika lina', 'atikaqween.01@gmail.com', 'Wali kelas', '+6283848892662', '1996-01-01', 'Jember', 'Lina', 'ayahibu01', 'IMG_20190809_074448.jpg'),
(18, 'Nurul Hidayat', 'd32y4883@gmail.com', 'Kepala Sekolah', '', '', '', 'dayat', 'dayat', 'IMG-20200203-WA0090.jpg'),
(21, 'Huzaimatul Ayun', 'ayuunku9077@gmail.com', 'Wali kelas', '082144854984', '1993-07-10', 'Jl.balung No.25 Ds sukorejo bangsalsari Jember', 'Ayun', '120613', 'IMG_20200124_123718.jpg'),
(22, 'Sari Imalia ', 'sariimalia20@gmail.com', 'Waka Kesiswaan, Pembina Osis', '085257075787 ', '1997-09-20', 'Jl. Karimata 102A jember', 'Imaliasari', '192021', 'IMG_2060_1.jpg'),
(23, 'Moh. Hariyanto', 'super.inova@yahoo.com', 'Sarpras', '', '', '', 'Iyan1989', 'realmadrid', '20200121_203451.jpg'),
(24, 'Sahrotul musyarofah', 'sahrotulm906@gmail.com', 'BK', '082245096075', '', 'Jatisari,tisnogambar', 'Ulfa', 'sayangulfa', 'IMG-20190702-WA0021.jpg'),
(25, 'Bayu Prasetyo', 'abay_prasutejo@yahoo.com', 'Pembina OSIS / Bendahara BPOPP', '', '', '', 'anzamania', 'anzamania', 'IMG20200128202442.jpg'),
(26, 'Hendi Syaiful Rizal', 'hendy10rizal@gmail.com', 'Admin', '', '', '', 'Hendi S.R', 'blaugrana', 'FB_IMG_15803093906852197.jpg'),
(27, 'Masyhuri', 'masyhurhady@yahoo.co.id', 'Wali kelas', '', '', '', 'Hury', 'masyhuri12345', 'IMG20200108231531.jpg'),
(36, 'Syahroni', 'syahroni_ahmad86@yahoo.co.id', 'WAKA HUMAS, WALI KELAS', '', '', '', 'Roony', '121217', 'IMG-20200201-WA0018.jpg'),
(29, 'moh Rifai', 'arifang86@yahoo.com', 'BK', '', '', '', 'rifai', '1234', '4740d7ec2b97a4d2ce7df4f3cef23467.jpg'),
(30, 'Muhammad Romli', 'romliajah@gmail.com', 'BENDAHARA, GURU', '082301528898', '1986-10-06', 'Dusun krajan tisnogambar', 'ROMLI', 'romli101986', '20190901_102244.jpg'),
(35, 'MasImam', 'imam31248@gmail.com', 'WaliKelasXIIPutra  ', '', '', '', 'imamasyari', 'imamunej12', 'IMG_20190902_094311.jpg'),
(32, 'zainul', 'muhammadzainulloh34@gmail.com', 'Guru,kurikulum,kesiswaan', '', '', '', 'zainul', '12345', '20190728_054440.jpg'),
(33, 'Imam Mashudi', 'bosremaja94@gmail.com', 'Wali Kelas X A,ketua LAB', '085335346242', '1999-01-02', 'dsn curah kalong tengah', 'mashudi', 'mashudi', 'IMG_20200120_191934_137.jpg'),
(34, 'Nimatul Lailiyah ', 'sigmasejahtera97@gmail.com', 'Wali Kelas ', '085236065712', '1981-12-01', 'Dusun Semboro Lor RT/RW: 02/28', 'Nikmah', 'nikmah', 'IMG_20200129_071415.jpg'),
(37, 'Agung Wahyudi', 'agungfullday@gmail.com', 'TU/OPERATOR', '', '', '', 'agung', '1234', 'IMG-20200207-WA0012.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `keterangan_jam` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `status_jabatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `nama`, `tanggal`, `waktu`, `bulan`, `keterangan_jam`, `status`, `status_jabatan`) VALUES
(63, 'Abdul munif', 'jumat,31-2020', '13:09:42', 'Januari', 'V', 'HADIR', ''),
(62, 'Abdul munif', 'jumat,31-2020', '13:09:23', 'Januari', 'V', 'HADIR', ''),
(61, 'Nurul Hidayat', 'jumat,31-2020', '12:50:21', 'Januari', 'V', 'HADIR', ''),
(60, 'Agung Wahyudi', 'jumat,31-2020', '12:48:20', 'Januari', 'V', 'HADIR', ''),
(59, 'admin', 'jumat,31-2020', '07:19:32', 'Januari', 'I', 'HADIR', ''),
(58, 'Abdul munif', 'Rabu,29-2020', '13:56:40', 'Januari', 'VI', 'HADIR', ''),
(57, 'Abdul munif', 'Rabu,29-2020', '08:22:11', 'Januari', 'I', 'HADIR', ''),
(56, 'admin', 'Rabu,29-2020', '05:36:54', 'Januari', 'I', 'HADIR', ''),
(64, 'admin', 'Sabtu,01-2020', '05:32:16', 'Februari', 'I', 'HADIR', ''),
(65, 'admin', 'Sabtu,01-2020', '05:33:45', 'Februari', 'I', 'HADIR', ''),
(66, 'admin', 'Sabtu,01-2020', '05:36:46', 'Februari', 'I', 'HADIR', 'kepalalab'),
(67, 'admin', 'Sabtu,01-2020', '07:53:07', 'Februari', 'I', 'HADIR', 'kepalalab'),
(68, 'Abdul munif', 'Sabtu,01-2020', '14:04:30', 'Februari', 'VI', 'HADIR', 'kepala lab'),
(69, 'Abdul munif', 'Minggu,02-2020', '11:43:10', 'Februari', 'IV', 'HADIR', 'kepala lab, kaprodi'),
(70, 'Agung Wahyudi', 'Senin,03-2020', '09:22:10', 'Februari', 'I', 'HADIR', ''),
(71, 'Nurul Hidayat', 'Senin,03-2020', '12:31:45', 'Februari', 'V', 'HADIR', ''),
(72, 'Bayu Prasetyo', 'Rabu,05-2020', '13:44:25', 'Februari', 'VI', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(73, 'Huzaimatul Ayun', 'Rabu,05-2020', '13:45:08', 'Februari', 'V', 'TELAT', 'Wali kelas'),
(74, 'Sari Imalia ', 'Rabu,05-2020', '13:46:03', 'Februari', 'V', 'TELAT', 'Waka Kesiswaan, Pembina Osis'),
(75, 'Bayu Prasetyo', 'Rabu,05-2020', '13:46:37', 'Februari', 'V', 'TELAT', 'Pembina OSIS / Bendahara BPOPP'),
(76, 'moh Rifai', 'Rabu,05-2020', '13:48:22', 'Februari', 'VI', 'HADIR', 'BK'),
(77, 'Masyhuri', 'Rabu,05-2020', '13:48:38', 'Februari', 'VI', 'HADIR', 'Wali kelas'),
(78, 'moh Rifai', 'Rabu,05-2020', '13:48:51', 'Februari', 'VI', 'HADIR', 'BK'),
(79, 'moh Rifai', 'Rabu,05-2020', '13:49:02', 'Februari', 'VI', 'HADIR', 'BK'),
(80, 'Bayu Prasetyo', 'Rabu,05-2020', '13:49:06', 'Februari', 'VI', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(81, 'Bayu Prasetyo', 'Rabu,05-2020', '13:49:21', 'Februari', 'VI', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(82, 'Muhammad Romli', 'Rabu,05-2020', '13:49:46', 'Februari', 'VI', 'HADIR', 'BENDAHARA, GURU'),
(83, 'moh Rifai', 'Rabu,05-2020', '13:50:22', 'Februari', 'VI', 'HADIR', 'BK'),
(84, 'Muhammad Romli', 'Rabu,05-2020', '13:51:18', 'Februari', 'VI', 'HADIR', 'BENDAHARA, GURU'),
(85, 'Agung Wahyudi', 'Rabu,05-2020', '13:51:23', 'Februari', 'VI', 'HADIR', 'TU/OPERATOR'),
(86, 'Agung Wahyudi', 'Rabu,05-2020', '13:51:26', 'Februari', 'VI', 'HADIR', 'TU/OPERATOR'),
(87, 'Huzaimatul Ayun', 'Rabu,05-2020', '13:59:10', 'Februari', 'VI', 'HADIR', 'Wali kelas'),
(88, 'Nurul Hidayat', 'Rabu,05-2020', '13:59:26', 'Februari', 'VI', 'HADIR', 'Kepala Sekolah'),
(89, 'zainul', 'Rabu,05-2020', '14:00:27', 'Februari', 'VI', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(90, 'Nimatul lailiyah ', 'Rabu,05-2020', '14:06:33', 'Februari', 'VI', 'HADIR', 'Guru'),
(91, 'Nurul Hidayat', 'kamis,06-2020', '10:58:06', 'Februari', 'III', 'HADIR', 'Kepala Sekolah'),
(92, 'moh Rifai', 'Sabtu,08-2020', '09:22:47', 'Februari', 'I', 'HADIR', 'BK'),
(93, 'Masyhuri', 'Sabtu,08-2020', '09:29:59', 'Februari', 'I', 'HADIR', 'Wali kelas'),
(94, 'moh Rifai', 'Sabtu,08-2020', '10:33:06', 'Februari', 'II', 'HADIR', 'BK'),
(95, 'Masyhuri', 'Sabtu,08-2020', '10:33:13', 'Februari', 'II', 'HADIR', 'Wali kelas'),
(96, 'Masyhuri', 'Sabtu,08-2020', '10:39:09', 'Februari', 'II', 'HADIR', 'Wali kelas'),
(97, 'Masyhuri', 'Sabtu,08-2020', '10:39:52', 'Februari', 'II', 'HADIR', 'Wali kelas'),
(98, 'Masyhuri', 'Sabtu,08-2020', '10:39:56', 'Februari', 'II', 'HADIR', 'Wali kelas'),
(99, 'Agung Wahyudi', 'Sabtu,08-2020', '10:40:04', 'Februari', 'III', 'HADIR', 'TU/OPERATOR'),
(100, 'Masyhuri', 'Sabtu,08-2020', '10:40:04', 'Februari', 'III', 'HADIR', 'Wali kelas'),
(101, 'Agung Wahyudi', 'Sabtu,08-2020', '10:40:52', 'Februari', 'III', 'HADIR', 'TU/OPERATOR'),
(102, 'moh Rifai', 'Sabtu,08-2020', '10:43:47', 'Februari', 'III', 'HADIR', 'BK'),
(103, 'Sahrotul musyarofah', 'Sabtu,08-2020', '10:43:55', 'Februari', 'III', 'HADIR', 'BK'),
(104, 'moh Rifai', 'Sabtu,08-2020', '11:34:55', 'Februari', 'IV', 'HADIR', 'BK'),
(105, 'moh Rifai', 'Sabtu,08-2020', '11:35:06', 'Februari', 'IV', 'HADIR', 'BK'),
(106, 'Agung Wahyudi', 'Sabtu,08-2020', '11:57:03', 'Februari', 'IV', 'HADIR', 'TU/OPERATOR'),
(107, 'moh Rifai', 'Sabtu,08-2020', '13:12:46', 'Februari', 'V', 'HADIR', 'BK'),
(108, 'Masyhuri', 'Sabtu,08-2020', '13:39:28', 'Februari', 'VI', 'HADIR', 'Wali kelas'),
(109, 'moh Rifai', 'Sabtu,08-2020', '14:01:49', 'Februari', 'VI', 'HADIR', 'BK'),
(110, 'moh Rifai', 'Sabtu,08-2020', '14:02:42', 'Februari', 'VI', 'HADIR', 'BK'),
(111, 'moh Rifai', 'Sabtu,08-2020', '14:03:52', 'Februari', 'VI', 'HADIR', 'BK'),
(112, 'zainul', 'Minggu,09-2020', '10:14:44', 'Februari', 'II', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(113, 'zainul', 'Minggu,09-2020', '10:19:26', 'Februari', 'II', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(114, 'Imam Mashudi', 'Minggu,09-2020', '10:31:15', 'Februari', 'II', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(115, 'zainul', 'Minggu,09-2020', '10:40:01', 'Februari', 'III', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(116, 'zainul', 'Minggu,09-2020', '12:00:21', 'Februari', 'V', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(117, 'MasImam', 'Minggu,09-2020', '12:37:12', 'Februari', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(118, 'MasImam', 'Minggu,09-2020', '12:37:20', 'Februari', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(119, 'Imam Mashudi', 'Minggu,09-2020', '13:24:43', 'Februari', 'V', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(120, 'MasImam', 'Senin,10-2020', '07:52:33', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(121, 'MasImam', 'Senin,10-2020', '07:53:04', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(122, 'Huzaimatul Ayun', 'Senin,10-2020', '09:39:45', 'Februari', 'I', 'HADIR', 'Wali kelas'),
(123, 'Bayu Prasetyo', 'Senin,10-2020', '10:54:09', 'Februari', 'III', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(124, 'zainul', 'Senin,10-2020', '11:00:43', 'Februari', 'III', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(125, 'Atika lina', 'Senin,10-2020', '11:29:29', 'Februari', 'IV', 'HADIR', 'Wali kelas'),
(126, 'Huzaimatul Ayun', 'Senin,10-2020', '11:44:57', 'Februari', 'IV', 'HADIR', 'Wali kelas'),
(127, 'Huzaimatul Ayun', 'Senin,10-2020', '11:59:29', 'Februari', 'IV', 'HADIR', 'Wali kelas'),
(128, 'Bayu Prasetyo', 'Senin,10-2020', '12:10:12', 'Februari', 'IV', 'TELAT', 'Pembina OSIS / Bendahara BPOPP'),
(129, 'Agung Wahyudi', 'Senin,10-2020', '13:01:36', 'Februari', 'V', 'HADIR', 'TU/OPERATOR'),
(130, 'Atika lina', 'Senin,10-2020', '13:36:23', 'Februari', 'VI', 'HADIR', 'Wali kelas'),
(131, 'MasImam', 'Selasa,11-2020', '07:43:33', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(132, 'MasImam', 'Selasa,11-2020', '07:43:51', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(133, 'MasImam', 'Selasa,11-2020', '07:43:55', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(134, 'Moh. Hariyanto', 'Selasa,11-2020', '09:24:05', 'Februari', 'I', 'HADIR', 'Sarpras'),
(135, 'Huzaimatul Ayun', 'Selasa,11-2020', '09:35:52', 'Februari', 'I', 'HADIR', 'Wali kelas'),
(136, 'Huzaimatul Ayun', 'Selasa,11-2020', '10:02:10', 'Februari', 'II', 'HADIR', 'Wali kelas'),
(137, 'zainul', 'Selasa,11-2020', '10:51:54', 'Februari', 'II', 'TELAT', 'Guru,kurikulum,kesiswaan'),
(138, 'Moh. Hariyanto', 'Selasa,11-2020', '10:52:20', 'Februari', 'III', 'HADIR', 'Sarpras'),
(139, 'Bayu Prasetyo', 'Selasa,11-2020', '10:52:24', 'Februari', 'III', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(140, 'Huzaimatul Ayun', 'Selasa,11-2020', '11:19:51', 'Februari', 'III', 'HADIR', 'Wali kelas'),
(141, 'Huzaimatul Ayun', 'Selasa,11-2020', '11:55:36', 'Februari', 'IV', 'HADIR', 'Wali kelas'),
(142, 'zainul', 'Selasa,11-2020', '12:19:04', 'Februari', 'IV', 'TELAT', 'Guru,kurikulum,kesiswaan'),
(143, 'zainul', 'Selasa,11-2020', '13:13:21', 'Februari', 'V', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(144, 'Agung Wahyudi', 'Rabu,12-2020', '09:51:39', 'Februari', 'I', 'HADIR', 'TU/OPERATOR'),
(145, 'zainul', 'Rabu,12-2020', '10:20:12', 'Februari', 'II', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(146, 'Agung Wahyudi', 'Rabu,12-2020', '10:39:14', 'Februari', 'II', 'HADIR', 'TU/OPERATOR'),
(147, 'moh Rifai', 'Rabu,12-2020', '10:46:56', 'Februari', 'III', 'HADIR', 'BK'),
(148, 'Masyhuri', 'Rabu,12-2020', '10:47:27', 'Februari', 'III', 'HADIR', 'Wali kelas'),
(149, 'Atika lina', 'Rabu,12-2020', '10:47:45', 'Februari', 'III', 'HADIR', 'Wali kelas'),
(150, 'moh Rifai', 'Rabu,12-2020', '10:48:05', 'Februari', 'III', 'HADIR', 'BK'),
(151, 'Atika lina', 'Rabu,12-2020', '11:30:44', 'Februari', 'III', 'TELAT', 'Wali kelas'),
(152, 'Atika lina', 'Rabu,12-2020', '11:31:29', 'Februari', 'IV', 'HADIR', 'Wali kelas'),
(153, 'moh Rifai', 'Rabu,12-2020', '11:46:08', 'Februari', 'IV', 'HADIR', 'BK'),
(154, 'Atika lina', 'Rabu,12-2020', '11:50:02', 'Februari', 'IV', 'HADIR', 'Wali kelas'),
(155, 'Nimatul Lailiyah ', 'Rabu,12-2020', '12:59:57', 'Februari', 'V', 'HADIR', 'Wali Kelas '),
(156, 'Masyhuri', 'Rabu,12-2020', '13:36:21', 'Februari', 'VI', 'HADIR', 'Wali kelas'),
(157, 'Bayu Prasetyo', 'kamis,13-2020', '09:29:00', 'Februari', 'I', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(158, 'Sari Imalia ', 'kamis,13-2020', '09:54:31', 'Februari', 'I', 'HADIR', 'Waka Kesiswaan, Pembina Osis'),
(159, 'Masyhuri', 'kamis,13-2020', '10:10:25', 'Februari', 'I', 'TELAT', 'Wali kelas'),
(160, 'Masyhuri', 'kamis,13-2020', '10:10:40', 'Februari', 'I', 'TELAT', 'Wali kelas'),
(161, 'Masyhuri', 'kamis,13-2020', '10:15:58', 'Februari', 'II', 'HADIR', 'Wali kelas'),
(162, 'Sari Imalia ', 'kamis,13-2020', '10:43:40', 'Februari', 'III', 'HADIR', 'Waka Kesiswaan, Pembina Osis'),
(163, 'Bayu Prasetyo', 'kamis,13-2020', '10:45:24', 'Februari', 'III', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(164, 'Syahroni', 'kamis,13-2020', '10:53:21', 'Februari', 'III', 'HADIR', 'WAKA HUMAS, WALI KELAS'),
(165, 'Agung Wahyudi', 'kamis,13-2020', '11:02:02', 'Februari', 'III', 'HADIR', 'TU/OPERATOR'),
(166, 'Masyhuri', 'kamis,13-2020', '11:07:32', 'Februari', 'III', 'HADIR', 'Wali kelas'),
(167, 'Moh. Hariyanto', 'kamis,13-2020', '11:17:21', 'Februari', 'III', 'HADIR', 'Sarpras'),
(168, 'Nimatul Lailiyah ', 'kamis,13-2020', '12:42:19', 'Februari', 'V', 'HADIR', 'Wali Kelas '),
(169, 'Masyhuri', 'kamis,13-2020', '13:16:17', 'Februari', 'V', 'HADIR', 'Wali kelas'),
(170, 'Bayu Prasetyo', 'kamis,13-2020', '13:28:09', 'Februari', 'V', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(171, 'Nimatul Lailiyah ', 'kamis,13-2020', '14:07:20', 'Februari', 'VI', 'HADIR', 'Wali Kelas '),
(172, 'MasImam', 'Sabtu,15-2020', '06:43:58', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(173, 'moh Rifai', 'Sabtu,15-2020', '09:24:49', 'Februari', 'I', 'HADIR', 'BK'),
(174, 'zainul', 'Sabtu,15-2020', '09:26:43', 'Februari', 'I', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(175, 'moh Rifai', 'Sabtu,15-2020', '10:00:15', 'Februari', 'II', 'HADIR', 'BK'),
(176, 'Sahrotul musyarofah', 'Sabtu,15-2020', '10:40:25', 'Februari', 'III', 'HADIR', 'BK'),
(177, 'moh Rifai', 'Sabtu,15-2020', '10:56:10', 'Februari', 'III', 'HADIR', 'BK'),
(178, 'moh Rifai', 'Sabtu,15-2020', '11:29:05', 'Februari', 'IV', 'HADIR', 'BK'),
(179, 'Masyhuri', 'Sabtu,15-2020', '14:05:01', 'Februari', 'VI', 'HADIR', 'Wali kelas'),
(180, 'zainul', 'Minggu,16-2020', '09:29:50', 'Februari', 'I', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(181, 'Huzaimatul Ayun', 'Senin,17-2020', '09:40:07', 'Februari', 'I', 'HADIR', 'Wali kelas'),
(182, 'Huzaimatul Ayun', 'Senin,17-2020', '10:21:39', 'Februari', 'II', 'HADIR', 'Wali kelas'),
(183, 'MasImam', 'Senin,17-2020', '11:44:29', 'Februari', 'IV', 'HADIR', 'WaliKelasXIIPutra  '),
(184, 'MasImam', 'Senin,17-2020', '11:44:57', 'Februari', 'IV', 'HADIR', 'WaliKelasXIIPutra  '),
(185, 'MasImam', 'Senin,17-2020', '11:45:09', 'Februari', 'IV', 'HADIR', 'WaliKelasXIIPutra  '),
(186, 'MasImam', 'Senin,17-2020', '11:45:10', 'Februari', 'IV', 'HADIR', 'WaliKelasXIIPutra  '),
(187, 'zainul', 'Selasa,18-2020', '13:47:31', 'Februari', 'VI', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(188, 'Agung Wahyudi', 'Rabu,19-2020', '09:41:35', 'Februari', 'I', 'HADIR', 'TU/OPERATOR'),
(189, 'Imam Mashudi', 'Rabu,19-2020', '10:02:13', 'Februari', 'II', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(190, 'Atika lina', 'Rabu,19-2020', '10:03:41', 'Februari', 'II', 'HADIR', 'Wali kelas'),
(191, 'Agung Wahyudi', 'Rabu,19-2020', '10:42:41', 'Februari', 'III', 'HADIR', 'TU/OPERATOR'),
(192, 'Atika lina', 'Rabu,19-2020', '10:58:30', 'Februari', 'III', 'HADIR', 'Wali kelas'),
(193, 'Atika lina', 'Rabu,19-2020', '11:32:31', 'Februari', 'IV', 'HADIR', 'Wali kelas'),
(194, 'Atika lina', 'Rabu,19-2020', '12:04:17', 'Februari', 'V', 'HADIR', 'Wali kelas'),
(195, 'Nimatul Lailiyah ', 'Rabu,19-2020', '12:58:41', 'Februari', 'V', 'HADIR', 'Wali Kelas '),
(196, 'Nimatul Lailiyah ', 'Rabu,19-2020', '14:07:00', 'Februari', 'VI', 'HADIR', 'Wali Kelas '),
(197, 'Nimatul Lailiyah ', 'Rabu,19-2020', '14:07:14', 'Februari', 'VI', 'HADIR', 'Wali Kelas '),
(198, 'Moh. Hariyanto', 'kamis,20-2020', '10:00:39', 'Februari', 'II', 'HADIR', 'Sarpras'),
(199, 'Masyhuri', 'kamis,20-2020', '10:20:35', 'Februari', 'II', 'HADIR', 'Wali kelas'),
(200, 'Nimatul Lailiyah ', 'kamis,20-2020', '12:42:40', 'Februari', 'V', 'HADIR', 'Wali Kelas '),
(201, 'Nimatul Lailiyah ', 'kamis,20-2020', '14:06:41', 'Februari', 'VI', 'HADIR', 'Wali Kelas '),
(202, 'zainul', 'Sabtu,22-2020', '09:34:08', 'Februari', 'I', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(203, 'MasImam', 'Sabtu,22-2020', '09:58:06', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(204, 'moh Rifai', 'Sabtu,22-2020', '10:00:49', 'Februari', 'II', 'HADIR', 'BK'),
(205, 'MasImam', 'Sabtu,22-2020', '10:02:39', 'Februari', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(206, 'MasImam', 'Sabtu,22-2020', '10:55:55', 'Februari', 'III', 'HADIR', 'WaliKelasXIIPutra  '),
(207, 'MasImam', 'Sabtu,22-2020', '10:56:14', 'Februari', 'III', 'HADIR', 'WaliKelasXIIPutra  '),
(208, 'Masyhuri', 'Sabtu,22-2020', '11:01:38', 'Februari', 'III', 'HADIR', 'Wali kelas'),
(209, 'moh Rifai', 'Sabtu,22-2020', '11:20:39', 'Februari', 'IV', 'HADIR', 'BK'),
(210, 'moh Rifai', 'Sabtu,22-2020', '11:21:51', 'Februari', 'IV', 'HADIR', 'BK'),
(211, 'moh Rifai', 'Sabtu,22-2020', '13:20:35', 'Februari', 'V', 'HADIR', 'BK'),
(212, 'MasImam', 'Minggu,23-2020', '15:31:34', 'Februari', 'VIII', 'TELAT', 'WaliKelasXIIPutra  '),
(213, 'MasImam', 'Minggu,23-2020', '15:31:59', 'Februari', 'VIII', 'TELAT', 'WaliKelasXIIPutra  '),
(214, 'Moh. Hariyanto', 'Selasa,25-2020', '09:27:00', 'Februari', 'I', 'HADIR', 'Sarpras'),
(215, 'Imam Mashudi', 'Rabu,26-2020', '07:42:50', 'Februari', 'I', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(216, 'Imam Mashudi', 'Rabu,26-2020', '07:44:22', 'Februari', 'I', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(217, 'MasImam', 'Senin,02-2020', '13:01:26', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(218, 'MasImam', 'Senin,02-2020', '13:01:38', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(219, 'Moh. Hariyanto', 'Rabu,04-2020', '09:58:16', 'Maret', 'I', 'HADIR', 'Sarpras'),
(220, 'MasImam', 'kamis,05-2020', '10:08:00', 'Maret', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(221, 'MasImam', 'kamis,05-2020', '10:08:19', 'Maret', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(222, 'MasImam', 'Minggu,08-2020', '10:33:18', 'Maret', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(223, 'MasImam', 'Senin,09-2020', '08:09:33', 'Maret', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(224, 'MasImam', 'Senin,09-2020', '08:09:52', 'Maret', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(225, 'MasImam', 'Senin,09-2020', '08:10:05', 'Maret', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(226, 'Huzaimatul Ayun', 'Senin,09-2020', '09:31:21', 'Maret', 'I', 'HADIR', 'Wali kelas'),
(227, 'Huzaimatul Ayun', 'Senin,09-2020', '10:10:06', 'Maret', 'I', 'TELAT', 'Wali kelas'),
(228, 'Atika lina', 'Senin,09-2020', '10:11:26', 'Maret', 'I', 'TELAT', 'Wali kelas'),
(229, 'Atika lina', 'Senin,09-2020', '10:11:38', 'Maret', 'I', 'TELAT', 'Wali kelas'),
(230, 'Arief fatur rochman', 'Senin,09-2020', '10:11:41', 'Maret', 'I', 'TELAT', 'Kaprodi,ka lab'),
(231, 'Atika lina', 'Senin,09-2020', '10:47:30', 'Maret', 'III', 'HADIR', 'Wali kelas'),
(232, 'Atika lina', 'Senin,09-2020', '11:09:33', 'Maret', 'III', 'HADIR', 'Wali kelas'),
(233, 'Atika lina', 'Senin,09-2020', '11:47:24', 'Maret', 'IV', 'HADIR', 'Wali kelas'),
(234, 'Masyhuri', 'Selasa,10-2020', '09:35:11', 'Maret', 'I', 'HADIR', 'Wali kelas'),
(235, 'MasImam', 'Selasa,10-2020', '10:21:39', 'Maret', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(236, 'Moh. Hariyanto', 'Selasa,10-2020', '10:43:53', 'Maret', 'III', 'HADIR', 'Sarpras'),
(237, 'Huzaimatul Ayun', 'Selasa,10-2020', '11:38:51', 'Maret', 'IV', 'HADIR', 'Wali kelas'),
(238, 'Huzaimatul Ayun', 'Selasa,10-2020', '12:02:53', 'Maret', 'V', 'HADIR', 'Wali kelas'),
(239, 'Huzaimatul Ayun', 'Rabu,11-2020', '09:45:12', 'Maret', 'I', 'HADIR', 'Wali kelas'),
(240, 'Huzaimatul Ayun', 'Rabu,11-2020', '10:04:44', 'Maret', 'II', 'HADIR', 'Wali kelas'),
(241, 'Atika lina', 'Rabu,11-2020', '10:05:18', 'Maret', 'II', 'HADIR', 'Wali kelas'),
(242, 'Atika lina', 'Rabu,11-2020', '10:42:35', 'Maret', 'III', 'HADIR', 'Wali kelas'),
(243, 'moh Rifai', 'Rabu,11-2020', '10:48:56', 'Maret', 'III', 'HADIR', 'BK'),
(244, 'Huzaimatul Ayun', 'Rabu,11-2020', '10:51:56', 'Maret', 'II', 'TELAT', 'Wali kelas'),
(245, 'moh Rifai', 'Rabu,11-2020', '11:39:38', 'Maret', 'IV', 'HADIR', 'BK'),
(246, 'Masyhuri', 'Rabu,11-2020', '12:37:28', 'Maret', 'V', 'HADIR', 'Wali kelas'),
(247, 'Huzaimatul Ayun', 'kamis,12-2020', '09:34:28', 'Maret', 'I', 'HADIR', 'Wali kelas'),
(248, 'Huzaimatul Ayun', 'kamis,12-2020', '10:03:00', 'Maret', 'II', 'HADIR', 'Wali kelas'),
(249, 'Huzaimatul Ayun', 'kamis,12-2020', '11:11:10', 'Maret', 'III', 'HADIR', 'Wali kelas'),
(250, 'Huzaimatul Ayun', 'kamis,12-2020', '11:33:52', 'Maret', 'IV', 'HADIR', 'Wali kelas'),
(251, 'MasImam', 'kamis,12-2020', '12:08:58', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(252, 'MasImam', 'jumat,13-2020', '11:31:05', 'Maret', 'IV', 'HADIR', 'WaliKelasXIIPutra  '),
(253, 'Sahrotul musyarofah', 'Sabtu,14-2020', '10:23:57', 'Maret', 'II', 'HADIR', 'BK'),
(254, 'MasImam', 'Sabtu,21-2020', '13:13:32', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(255, 'MasImam', 'Senin,23-2020', '13:07:44', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(256, 'MasImam', 'Selasa,24-2020', '10:51:21', 'Maret', 'II', 'TELAT', 'WaliKelasXIIPutra  ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi_struktural`
--

CREATE TABLE `presensi_struktural` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `keterangan_jam` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `status_jabatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presensi_struktural`
--

INSERT INTO `presensi_struktural` (`id`, `nama`, `tanggal`, `waktu`, `bulan`, `keterangan_jam`, `status`, `status_jabatan`) VALUES
(1, 'admin', 'Sabtu,01-2020', '05:48:31', 'Februari', 'I', 'HADIR', 'kepalalab'),
(2, 'Abdul munif', 'Sabtu,01-2020', '12:27:38', 'Februari', 'IV', 'TELAT', 'kepala lab'),
(3, 'Abdul munif', 'Sabtu,01-2020', '14:04:40', 'Februari', 'VI', 'HADIR', 'kepala lab'),
(4, 'Abdul munif', 'Minggu,02-2020', '11:43:19', 'Februari', 'IV', 'HADIR', 'kepala lab, kaprodi'),
(5, 'Abdul munif', 'Senin,03-2020', '05:57:45', 'Februari', 'I', 'HADIR', 'kepala lab, kaprodi'),
(6, 'Nurul Hidayat', 'Senin,03-2020', '12:31:37', 'Februari', 'V', 'HADIR', ''),
(7, 'Abdul munif', 'Rabu,05-2020', '08:08:28', 'Februari', 'I', 'HADIR', ''),
(8, 'Bayu Prasetyo', 'Rabu,05-2020', '13:44:39', 'Februari', 'VI', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(9, 'Bayu Prasetyo', 'Rabu,05-2020', '13:46:43', 'Februari', 'V', 'TELAT', 'Pembina OSIS / Bendahara BPOPP'),
(10, 'Nurul Hidayat', 'Rabu,05-2020', '13:47:22', 'Februari', 'VI', 'HADIR', 'Kepala Sekolah'),
(11, 'moh Rifai', 'Rabu,05-2020', '13:48:38', 'Februari', 'VI', 'HADIR', 'BK'),
(12, 'Bayu Prasetyo', 'Rabu,05-2020', '13:49:16', 'Februari', 'VI', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(13, 'Bayu Prasetyo', 'Rabu,05-2020', '13:49:28', 'Februari', 'VI', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(14, 'Sari Imalia ', 'Rabu,05-2020', '13:49:48', 'Februari', 'VI', 'HADIR', 'Waka Kesiswaan, Pembina Osis'),
(15, 'Muhammad Romli', 'Rabu,05-2020', '13:51:51', 'Februari', 'VI', 'HADIR', 'BENDAHARA, GURU'),
(16, 'Bayu Prasetyo', 'Rabu,05-2020', '13:52:12', 'Februari', 'VI', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(17, 'Huzaimatul Ayun', 'Rabu,05-2020', '13:58:57', 'Februari', 'VI', 'HADIR', 'Wali kelas'),
(18, 'Nurul Hidayat', 'Rabu,05-2020', '13:59:03', 'Februari', 'VI', 'HADIR', 'Kepala Sekolah'),
(19, 'Muhammad Romli', 'Rabu,05-2020', '13:59:44', 'Februari', 'VI', 'HADIR', 'BENDAHARA, GURU'),
(20, 'zainul', 'Rabu,05-2020', '14:02:29', 'Februari', 'VI', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(21, 'Nimatul lailiyah ', 'Rabu,05-2020', '14:09:00', 'Februari', 'VI', 'HADIR', 'Guru'),
(22, 'Nurul Hidayat', 'kamis,06-2020', '09:42:03', 'Februari', 'I', 'HADIR', 'Kepala Sekolah'),
(23, 'Nurul Hidayat', 'kamis,06-2020', '10:58:15', 'Februari', 'III', 'HADIR', 'Kepala Sekolah'),
(24, 'Syahroni', 'Sabtu,08-2020', '10:40:45', 'Februari', 'III', 'HADIR', 'WAKA HUMAS, WALI KELAS'),
(25, 'Muhammad Romli', 'Sabtu,08-2020', '11:57:12', 'Februari', 'IV', 'HADIR', 'BENDAHARA, GURU'),
(26, 'Sahrotul musyarofah', 'Sabtu,08-2020', '13:40:44', 'Februari', 'VI', 'HADIR', 'BK'),
(27, 'Sahrotul musyarofah', 'Sabtu,08-2020', '13:58:21', 'Februari', 'VI', 'HADIR', 'BK'),
(28, 'Imam Mashudi', 'Minggu,09-2020', '10:31:36', 'Februari', 'II', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(29, 'zainul', 'Minggu,09-2020', '12:15:41', 'Februari', 'IV', 'TELAT', 'Guru,kurikulum,kesiswaan'),
(30, 'zainul', 'Minggu,09-2020', '12:25:37', 'Februari', 'IV', 'TELAT', 'Guru,kurikulum,kesiswaan'),
(31, 'MasImam', 'Minggu,09-2020', '12:37:35', 'Februari', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(32, 'MasImam', 'Minggu,09-2020', '12:37:40', 'Februari', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(33, 'zainul', 'Minggu,09-2020', '12:47:50', 'Februari', 'V', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(34, 'Imam Mashudi', 'Minggu,09-2020', '13:25:02', 'Februari', 'V', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(35, 'zainul', 'Minggu,09-2020', '13:55:33', 'Februari', 'VI', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(36, 'MasImam', 'Senin,10-2020', '07:52:47', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(37, 'MasImam', 'Senin,10-2020', '07:52:58', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(38, 'Nurul Hidayat', 'Senin,10-2020', '09:55:38', 'Februari', 'I', 'HADIR', 'Kepala Sekolah'),
(39, 'Nurul Hidayat', 'Senin,10-2020', '10:00:07', 'Februari', 'II', 'HADIR', 'Kepala Sekolah'),
(40, 'Sahrotul musyarofah', 'Senin,10-2020', '10:22:31', 'Februari', 'II', 'HADIR', 'BK'),
(41, 'Syahroni', 'Senin,10-2020', '10:23:38', 'Februari', 'II', 'HADIR', 'WAKA HUMAS, WALI KELAS'),
(42, 'Sahrotul musyarofah', 'Senin,10-2020', '10:51:43', 'Februari', 'II', 'TELAT', 'BK'),
(43, 'zainul', 'Senin,10-2020', '11:00:50', 'Februari', 'III', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(44, 'Sahrotul musyarofah', 'Senin,10-2020', '11:38:11', 'Februari', 'IV', 'HADIR', 'BK'),
(45, 'Nurul Hidayat', 'Senin,10-2020', '12:59:58', 'Februari', 'V', 'HADIR', 'Kepala Sekolah'),
(46, 'Nurul Hidayat', 'Senin,10-2020', '13:00:11', 'Februari', 'V', 'HADIR', 'Kepala Sekolah'),
(47, 'MasImam', 'Selasa,11-2020', '07:43:43', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(48, 'MasImam', 'Selasa,11-2020', '07:43:59', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(49, 'Syahroni', 'Selasa,11-2020', '10:33:48', 'Februari', 'II', 'HADIR', 'WAKA HUMAS, WALI KELAS'),
(50, 'Huzaimatul Ayun', 'Selasa,11-2020', '13:06:51', 'Februari', 'V', 'HADIR', 'Wali kelas'),
(51, 'Atika lina', 'Selasa,11-2020', '13:08:19', 'Februari', 'V', 'HADIR', 'Wali kelas'),
(52, 'Huzaimatul Ayun', 'Selasa,11-2020', '14:21:03', 'Februari', 'VI', 'TELAT', 'Wali kelas'),
(53, 'Masyhuri', 'Rabu,12-2020', '09:49:57', 'Februari', 'I', 'HADIR', 'Wali kelas'),
(54, 'moh Rifai', 'Rabu,12-2020', '11:47:48', 'Februari', 'IV', 'HADIR', 'BK'),
(55, 'moh Rifai', 'Rabu,12-2020', '11:47:56', 'Februari', 'IV', 'HADIR', 'BK'),
(56, 'Agung Wahyudi', 'Rabu,12-2020', '11:54:49', 'Februari', 'IV', 'HADIR', 'TU/OPERATOR'),
(57, 'Bayu Prasetyo', 'Rabu,12-2020', '12:34:16', 'Februari', 'V', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(58, 'Bayu Prasetyo', 'Rabu,12-2020', '12:34:23', 'Februari', 'V', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(59, 'Nimatul Lailiyah ', 'Rabu,12-2020', '12:41:26', 'Februari', 'V', 'HADIR', 'Wali Kelas '),
(60, 'Nimatul Lailiyah ', 'Rabu,12-2020', '12:59:44', 'Februari', 'V', 'HADIR', 'Wali Kelas '),
(61, 'Arief fatur rochman', 'kamis,13-2020', '09:25:14', 'Februari', 'I', 'HADIR', 'Kaprodi,kalab'),
(62, 'Arief fatur rochman', 'kamis,13-2020', '10:12:11', 'Februari', 'II', 'HADIR', 'Kaprodi,kalab'),
(63, 'Syahroni', 'kamis,13-2020', '10:53:14', 'Februari', 'III', 'HADIR', 'WAKA HUMAS, WALI KELAS'),
(64, 'Arief fatur rochman', 'kamis,13-2020', '11:00:42', 'Februari', 'III', 'HADIR', 'Kaprodi,kalab'),
(65, 'Arief fatur rochman', 'kamis,13-2020', '11:23:09', 'Februari', 'IV', 'HADIR', 'Kaprodi,kalab'),
(66, 'MasImam', 'Sabtu,15-2020', '06:44:03', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(67, 'MasImam', 'Senin,17-2020', '11:44:47', 'Februari', 'IV', 'HADIR', 'WaliKelasXIIPutra  '),
(68, 'MasImam', 'Senin,17-2020', '11:45:23', 'Februari', 'IV', 'HADIR', 'WaliKelasXIIPutra  '),
(69, 'Moh. Hariyanto', 'Senin,17-2020', '12:38:00', 'Februari', 'V', 'HADIR', 'Sarpras'),
(70, 'zainul', 'Selasa,18-2020', '13:47:35', 'Februari', 'VI', 'HADIR', 'Guru,kurikulum,kesiswaan'),
(71, 'Bayu Prasetyo', 'Rabu,19-2020', '09:40:44', 'Februari', 'I', 'HADIR', 'Pembina OSIS / Bendahara BPOPP'),
(72, 'Arief fatur rochman', 'Rabu,19-2020', '10:01:34', 'Februari', 'II', 'HADIR', 'Kaprodi,ka lab'),
(73, 'Imam Mashudi', 'Rabu,19-2020', '10:02:24', 'Februari', 'II', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(74, 'Syahroni', 'Rabu,19-2020', '10:02:33', 'Februari', 'II', 'HADIR', 'WAKA HUMAS, WALI KELAS'),
(75, 'Agung Wahyudi', 'Rabu,19-2020', '10:42:47', 'Februari', 'III', 'HADIR', 'TU/OPERATOR'),
(76, 'Agung Wahyudi', 'Rabu,19-2020', '11:27:29', 'Februari', 'IV', 'HADIR', 'TU/OPERATOR'),
(77, 'Arief fatur rochman', 'Rabu,19-2020', '11:41:07', 'Februari', 'IV', 'HADIR', 'Kaprodi,ka lab'),
(78, 'Nimatul Lailiyah ', 'Rabu,19-2020', '12:09:35', 'Februari', 'V', 'HADIR', 'Wali Kelas '),
(79, 'Atika lina', 'Rabu,19-2020', '12:59:11', 'Februari', 'V', 'HADIR', 'Wali kelas'),
(80, 'Atika lina', 'Rabu,19-2020', '13:51:34', 'Februari', 'VI', 'HADIR', 'Wali kelas'),
(81, 'Moh. Hariyanto', 'kamis,20-2020', '10:00:50', 'Februari', 'II', 'HADIR', 'Sarpras'),
(82, 'MasImam', 'Sabtu,22-2020', '09:58:10', 'Februari', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(83, 'MasImam', 'Sabtu,22-2020', '10:02:43', 'Februari', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(84, 'MasImam', 'Sabtu,22-2020', '10:56:00', 'Februari', 'III', 'HADIR', 'WaliKelasXIIPutra  '),
(85, 'MasImam', 'Sabtu,22-2020', '10:56:04', 'Februari', 'III', 'HADIR', 'WaliKelasXIIPutra  '),
(86, 'MasImam', 'Sabtu,22-2020', '10:56:10', 'Februari', 'III', 'HADIR', 'WaliKelasXIIPutra  '),
(87, 'Sari Imalia ', 'Sabtu,22-2020', '13:15:19', 'Februari', 'V', 'HADIR', 'Waka Kesiswaan, Pembina Osis'),
(88, 'Sari Imalia ', 'Sabtu,22-2020', '13:15:29', 'Februari', 'V', 'HADIR', 'Waka Kesiswaan, Pembina Osis'),
(89, 'Moh. Hariyanto', 'Minggu,23-2020', '09:30:22', 'Februari', 'I', 'HADIR', 'Sarpras'),
(90, 'Moh. Hariyanto', 'Minggu,23-2020', '09:30:29', 'Februari', 'I', 'HADIR', 'Sarpras'),
(91, 'Sahrotul musyarofah', 'Senin,24-2020', '09:13:37', 'Februari', 'I', 'HADIR', 'BK'),
(92, 'Sahrotul musyarofah', 'Senin,24-2020', '11:49:00', 'Februari', 'IV', 'HADIR', 'BK'),
(93, 'Sahrotul musyarofah', 'Senin,24-2020', '11:49:28', 'Februari', 'IV', 'HADIR', 'BK'),
(94, 'Moh. Hariyanto', 'Selasa,25-2020', '09:27:08', 'Februari', 'I', 'HADIR', 'Sarpras'),
(95, 'Imam Mashudi', 'Rabu,26-2020', '07:42:54', 'Februari', 'I', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(96, 'Imam Mashudi', 'Rabu,26-2020', '07:44:25', 'Februari', 'I', 'HADIR', 'Wali Kelas X A,ketua LAB'),
(97, 'Moh. Hariyanto', 'Senin,02-2020', '09:57:16', 'Maret', 'I', 'HADIR', 'Sarpras'),
(98, 'MasImam', 'Senin,02-2020', '13:01:32', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(99, 'MasImam', 'Senin,02-2020', '13:01:42', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(100, 'Moh. Hariyanto', 'Rabu,04-2020', '09:58:22', 'Maret', 'I', 'HADIR', 'Sarpras'),
(101, 'MasImam', 'kamis,05-2020', '10:08:06', 'Maret', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(102, 'MasImam', 'kamis,05-2020', '10:08:24', 'Maret', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(103, 'MasImam', 'Minggu,08-2020', '10:33:22', 'Maret', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(104, 'MasImam', 'Senin,09-2020', '08:09:38', 'Maret', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(105, 'MasImam', 'Senin,09-2020', '08:09:56', 'Maret', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(106, 'MasImam', 'Senin,09-2020', '08:10:00', 'Maret', 'I', 'HADIR', 'WaliKelasXIIPutra  '),
(107, 'Moh. Hariyanto', 'Senin,09-2020', '09:23:40', 'Maret', 'I', 'HADIR', 'Sarpras'),
(108, 'Sahrotul musyarofah', 'Senin,09-2020', '09:31:45', 'Maret', 'I', 'HADIR', 'BK'),
(109, 'Sahrotul musyarofah', 'Senin,09-2020', '10:11:12', 'Maret', 'I', 'TELAT', 'BK'),
(110, 'Sahrotul musyarofah', 'Senin,09-2020', '10:47:01', 'Maret', 'III', 'HADIR', 'BK'),
(111, 'MasImam', 'Selasa,10-2020', '10:21:43', 'Maret', 'II', 'HADIR', 'WaliKelasXIIPutra  '),
(112, 'Masyhuri', 'Selasa,10-2020', '10:43:05', 'Maret', 'III', 'HADIR', 'Wali kelas'),
(113, 'Moh. Hariyanto', 'Selasa,10-2020', '10:44:05', 'Maret', 'III', 'HADIR', 'Sarpras'),
(114, 'Huzaimatul Ayun', 'Selasa,10-2020', '13:59:48', 'Maret', 'VI', 'HADIR', 'Wali kelas'),
(115, 'Atika lina', 'Selasa,10-2020', '13:59:50', 'Maret', 'VI', 'HADIR', 'Wali kelas'),
(116, 'Masyhuri', 'Rabu,11-2020', '09:54:59', 'Maret', 'I', 'HADIR', 'Wali kelas'),
(117, 'MasImam', 'kamis,12-2020', '12:09:02', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(118, 'MasImam', 'jumat,13-2020', '11:31:11', 'Maret', 'IV', 'HADIR', 'WaliKelasXIIPutra  '),
(119, 'Sahrotul musyarofah', 'Sabtu,14-2020', '13:06:04', 'Maret', 'V', 'HADIR', 'BK'),
(120, 'MasImam', 'Sabtu,21-2020', '13:13:36', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(121, 'MasImam', 'Senin,23-2020', '13:07:49', 'Maret', 'V', 'HADIR', 'WaliKelasXIIPutra  '),
(122, 'MasImam', 'Selasa,24-2020', '10:51:27', 'Maret', 'II', 'TELAT', 'WaliKelasXIIPutra  ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `akreditasi` varchar(100) NOT NULL,
  `npsn` varchar(100) NOT NULL,
  `kepala_sekolah` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_guru`
--

CREATE TABLE `rekap_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `tanggal_keluar` varchar(100) NOT NULL,
  `nomor_surat` varchar(100) NOT NULL,
  `file_surat` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `nama_surat`, `tanggal_keluar`, `nomor_surat`, `file_surat`) VALUES
(10, 'perijinan', '2020-01-16', '10/34/3/4/5', 'IMG_20181119_052942.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `tanggal_masuk` varchar(100) NOT NULL,
  `nomor_surat` varchar(100) NOT NULL,
  `file_surat` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi_struktural`
--
ALTER TABLE `presensi_struktural`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekap_guru`
--
ALTER TABLE `rekap_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT untuk tabel `presensi_struktural`
--
ALTER TABLE `presensi_struktural`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rekap_guru`
--
ALTER TABLE `rekap_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
