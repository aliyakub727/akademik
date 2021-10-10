-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Okt 2021 pada 11.06
-- Versi server: 10.2.40-MariaDB-cll-lve
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infh4361_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Admin'),
(2, 'operator', 'Operator'),
(3, 'siswa', 'Siswa'),
(4, 'guru', 'Guru'),
(5, 'kepala_sekolah', 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 23),
(2, 27),
(2, 31),
(3, 29),
(4, 28),
(5, 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'cobain11', 2, '2021-09-13 21:40:02', 0),
(2, '::1', 'cobain11', 7, '2021-09-13 21:53:39', 0),
(3, '::1', 'admin', 20, '2021-09-15 03:43:06', 0),
(4, '::1', 'admin', 20, '2021-09-15 03:43:25', 0),
(5, '::1', 'admin', 20, '2021-09-15 03:43:44', 0),
(6, '::1', 'admin', 20, '2021-09-15 03:44:20', 0),
(7, '::1', 'aliyakub', 21, '2021-09-15 03:46:04', 0),
(8, '::1', 'anwar@gmail.com', 22, '2021-09-15 03:49:07', 1),
(9, '::1', 'anwar@gmail.com', 22, '2021-09-15 03:51:56', 1),
(10, '::1', 'anwar@gmail.com', 22, '2021-09-15 03:52:41', 1),
(11, '::1', 'aliyakub', NULL, '2021-09-18 03:59:09', 0),
(12, '::1', 'aliyakub', NULL, '2021-09-18 23:39:01', 0),
(13, '::1', 'aliyakub', NULL, '2021-09-18 23:40:15', 0),
(14, '::1', 'aliyakub', NULL, '2021-09-18 23:40:40', 0),
(15, '::1', 'aliyakub', NULL, '2021-09-18 23:42:45', 0),
(16, '::1', 'aliyakub', NULL, '2021-09-18 23:43:35', 0),
(17, '::1', 'aliyakub', NULL, '2021-09-18 23:44:10', 0),
(18, '::1', 'aliyakub', NULL, '2021-09-18 23:45:11', 0),
(19, '::1', 'anwar@gmail.com', 22, '2021-09-18 23:46:08', 1),
(20, '::1', 'aliyakub727@gmail.com', 23, '2021-09-18 23:58:47', 1),
(21, '::1', 'aliyakub727@gmail.com', 23, '2021-09-20 07:06:01', 1),
(22, '::1', 'aliyakub727@gmail.com', 23, '2021-09-21 05:08:06', 1),
(23, '::1', 'aliyakub727@gmail.com', 23, '2021-09-21 05:12:49', 1),
(24, '::1', 'aliyakub727@gmail.com', 23, '2021-09-21 05:39:05', 1),
(25, '::1', 'aliyakub', NULL, '2021-09-23 22:42:53', 0),
(26, '::1', 'aliyakub727@gmail.com', 23, '2021-09-23 22:43:05', 1),
(27, '::1', 'aliyakub727@gmail.com', 23, '2021-09-23 22:59:39', 1),
(28, '::1', 'aliyakub727@gmail.com', 23, '2021-09-25 02:54:38', 1),
(29, '::1', 'aliyakub727@gmail.com', 23, '2021-09-26 21:57:29', 1),
(30, '::1', 'aliyakub727@gmail.com', 23, '2021-09-26 21:57:31', 1),
(31, '::1', 'aliyakub727@gmail.com', 23, '2021-09-27 23:07:27', 1),
(32, '::1', 'dafitgila@gmail.com', 25, '2021-10-02 02:42:24', 1),
(33, '::1', 'aliyakub727@gmail.com', 23, '2021-10-02 10:29:11', 1),
(34, '::1', 'aliyakub727@gmail.com', 23, '2021-10-03 06:45:20', 1),
(35, '::1', 'aliyakub727@gmail.com', 23, '2021-10-05 02:12:55', 1),
(36, '::1', 'aliyakub727@gmail.com', 23, '2021-10-06 03:58:46', 1),
(37, '114.124.195.164', 'aliyakub727@gmail.com', 23, '2021-10-06 07:48:42', 1),
(38, '114.124.195.36', 'aliyakub727@gmail.com', 23, '2021-10-06 07:54:21', 1),
(39, '114.124.195.164', 'aliyakub727@gmail.com', 23, '2021-10-06 08:08:12', 1),
(40, '114.124.195.36', 'dafitgila@gmail.com', 27, '2021-10-06 08:31:37', 1),
(41, '101.255.132.101', 'aliyakub727@gmail.com', 23, '2021-10-06 20:06:55', 1),
(42, '101.255.132.101', 'aliyakub727@gmail.com', 23, '2021-10-06 20:28:31', 1),
(43, '101.255.132.101', 'dafitgila@gmail.com', 27, '2021-10-06 20:29:39', 1),
(44, '101.255.132.101', 'dafitgila@gmail.com', 27, '2021-10-06 20:29:39', 1),
(45, '101.255.132.101', 'dafitgila@gmail.com', 27, '2021-10-06 20:40:13', 1),
(46, '101.255.132.101', 'dafitgila@gmail.com', 27, '2021-10-06 20:49:16', 1),
(47, '180.244.164.120', 'aliyakub727@gmail.com', 23, '2021-10-06 22:40:28', 1),
(48, '180.244.164.120', 'dafitgila@gmail.com', 27, '2021-10-06 22:41:15', 1),
(49, '180.243.248.203', 'aliyakub727@gmail.com', 23, '2021-10-06 23:31:34', 1),
(50, '180.243.248.203', 'dafitgila@gmail.com', 27, '2021-10-06 23:32:47', 1),
(51, '180.243.248.203', 'aliyakub727@gmail.com', 23, '2021-10-06 23:42:00', 1),
(52, '180.243.248.203', 'dafitgila@gmail.com', 27, '2021-10-06 23:46:43', 1),
(53, '114.124.131.1', 'aliyakub727@gmail.com', 23, '2021-10-06 23:54:13', 1),
(54, '114.124.130.1', 'dafitgila@gmail.com', 27, '2021-10-07 00:03:15', 1),
(55, '180.243.248.203', 'rayhan@gmail.com', 28, '2021-10-07 00:17:26', 1),
(56, '180.243.248.203', 'aliyakub727@gmail.com', 23, '2021-10-07 00:18:06', 1),
(57, '140.213.13.47', 'aliyakub727@gmail.com', 23, '2021-10-07 00:19:36', 1),
(58, '140.213.13.47', 'dafitgila@gmail.com', 27, '2021-10-07 00:20:18', 1),
(59, '114.124.131.65', 'aliyakub727@gmail.com', 23, '2021-10-07 00:22:04', 1),
(60, '180.243.248.203', 'dafitgila@gmail.com', 27, '2021-10-07 00:23:25', 1),
(61, '114.124.131.1', 'dafitgila@gmail.com', 27, '2021-10-07 00:29:44', 1),
(62, '180.243.248.203', 'aliyakub727@gmail.com', 23, '2021-10-07 00:31:58', 1),
(63, '180.243.248.203', 'dafitgila@gmail.com', 27, '2021-10-07 00:50:19', 1),
(64, '114.124.195.177', 'dafitgila@gmail.com', 27, '2021-10-08 08:29:08', 1),
(65, '182.0.198.229', 'dafitgila@gmail.com', 27, '2021-10-08 23:33:42', 1),
(66, '180.252.141.116', 'aliyakub727@gmail.com', 23, '2021-10-09 02:19:30', 1),
(67, '180.252.141.116', 'dafitgila@gmail.com', 27, '2021-10-09 02:22:49', 1),
(68, '180.252.141.116', 'aliyakub727@gmail.com', 23, '2021-10-09 02:28:04', 1),
(69, '101.128.125.122', 'aliyakub727@gmail.com', 23, '2021-10-09 03:57:28', 1),
(70, '101.128.125.122', 'dafitgila@gmail.com', 27, '2021-10-09 03:58:07', 1),
(71, '101.128.125.122', 'rayhan@gmail.com', 28, '2021-10-09 04:01:40', 1),
(72, '114.124.195.49', 'aliyakub727@gmail.com', 23, '2021-10-09 06:53:40', 1),
(73, '114.124.195.49', 'dafitgila@gmail.com', 27, '2021-10-09 06:55:09', 1),
(74, '114.124.195.177', 'aliyakub727@gmail.com', 23, '2021-10-09 07:07:03', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `id_mapel`, `nama_guru`, `alamat`, `no_telp`) VALUES
(3, 1, 'Hadi Nur Dianto S.Sos', 'Jl. Mawar', '081252149624'),
(4, 10, 'Desi S.Kom', 'GRIYA', '081295976123'),
(6, 2, 'Dr.Suprayekti, M.Pd', 'GRIYA ALAM SENTOSA', '081412348912'),
(8, 4, 'Dr.Khaerudin, M.Pd', 'Kp. Bakom', '081345678921'),
(9, 3, 'Dr.Robinson Situmorang, M.Pd', 'Cililitan', '081349992213'),
(10, 5, 'Imaningtyas, S.Pd. , M.Pd', 'Cengkareng', '081295976042'),
(11, 6, 'Yustia Suntari ,S.Pd. ,M.Pd', 'Cileungsi', '081345678945'),
(12, 7, 'Dr.Nidya Suntari ,S.Pd. ,M.Si', 'Depok', '081295976077'),
(13, 8, 'Dr.Gusti Yarmi, M.Pd', 'Cikeas', '081322919184'),
(14, 9, 'Drs. Sutrisno, M.Si', 'Gunung Putri', '081322919183'),
(15, 11, 'Dr.Iva, M.Pd', 'Bogor', '089156782912'),
(16, 11, 'Dr.Iva, M.Pd', 'Bogor', '089156782912'),
(17, 11, 'Dr.Iva Sagita, M.Pd', 'Bogor', '089156782911'),
(18, 11, 'Dr.Iva Sagita, M.Pd', 'Bogor', '089156782911'),
(19, 12, 'Dr.Yurniwati, M.Pd', 'Bekasi', '089212548912'),
(20, 12, 'Dr.Khaerr, M.Pd', 'Bantar Gebang', '089156782915'),
(21, 25, 'Dr.Rendi, M.Pd', 'Bekasi', '089156781234'),
(22, 24, 'Dr.Eva, M.Pd', 'Depok', '089156782124'),
(23, 23, 'Hadi Rone S.Kom', 'Jakarta Timur', '089156782914'),
(24, 22, 'Dr.Cinendi, M.Pd', 'Cinere', '089156782911'),
(25, 21, 'Dr.Karsih Yarmi, M.Pd', 'Ciracas', '081295976044'),
(26, 20, 'Dr.Herdi, M.Pd', 'Pasar Rebo', '089212548990'),
(27, 21, 'Wening Cahya, M.Pd', 'Jakarta Selatan', '081322919184'),
(28, 19, 'Dr.Rodrigo, M.Pd', 'Bogor', '089212548912'),
(29, 17, 'Nur Dianto S.Sos', 'Cibubur', '089212548948');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'Teknik Informatika Komputer'),
(2, 'Akuntansi'),
(3, 'Administrasi Perkantoran'),
(4, 'Multi Media'),
(5, 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(2, '18IK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'IPA'),
(2, 'MATEMATIKA'),
(3, 'PENDIDIKAN AGAMA DAN BUDI PEKERTI'),
(4, 'PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN'),
(5, 'BAHASA INDONESIA'),
(6, 'ILMU PENGETAHUAN SOSIAL'),
(7, 'SENI BUDAYA DAN PRAKARYA'),
(8, 'PENDIDIKAN JASMANI DAN KESEHATAN'),
(9, 'KEWIRAUSAHAAN'),
(10, 'BAHASA INGGRIS'),
(11, 'FISIKA'),
(12, 'KIMIA'),
(13, 'SIMULASI DIGITAL'),
(14, 'SISTEM KOMPUTER'),
(15, 'PEMOGRAMAN DASAR'),
(16, 'SISTEM OPERASI'),
(17, 'kimia'),
(18, 'PEMODELAN PERANGKAT LUNAK'),
(19, 'ADMINISTRASI BASIS DATA'),
(20, 'PEMOGRAMAN GRAFIK'),
(21, 'TEKNIK ANIMASI 3D'),
(22, 'DESAIN MULTIMEDIA'),
(23, 'TEKNIK PENGOLAHAN VIDIO'),
(24, 'ADMINISTRASI SERVER'),
(25, 'KEAMANAN JARINGAN'),
(26, 'Olahraga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_data`
--

CREATE TABLE `master_data` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `nis` varchar(16) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nama_walikelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_data`
--

INSERT INTO `master_data` (`id`, `tahun_ajaran`, `nis`, `nama_lengkap`, `kelas`, `jurusan`, `nama_walikelas`) VALUES
(3, '2020-2021', '1241240512', 'anwar udin', '19AK01', 'Akuntansi', 'bu dea'),
(4, '2019-2020', '1223132', 'dafit alpiqri', '19TKJ01', 'Teknik Komputer Jaringan', 'bangmaman'),
(5, '2020-2021', '455221', 'anwar', '18ik', 'Teknik Informatika Komputer', 'bangmaman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1631542522, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nis` varchar(16) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `tugas` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `nis` varchar(16) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nama_orangtua` varchar(255) NOT NULL,
  `alamat_orangtua` varchar(255) NOT NULL,
  `no_telp_orangtua` varchar(20) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama_lengkap`, `jenis_kelamin`, `nis`, `alamat`, `no_telp`, `tgl_lahir`, `tempat_lahir`, `agama`, `nama_orangtua`, `alamat_orangtua`, `no_telp_orangtua`, `jurusan`) VALUES
(2, 'Anwar Udin', 'Laki-Laki', '4552211', 'canadian', '081295976012', '2021-09-24', 'BAWAH JEMBATAN', 'Budha', 'XXXX', 'xxxx', '7675434', 'Akuntansi'),
(3, 'Ali Yakub Biantoro', 'Laki-Laki', '1918181', 'bekasi', '089818181', '2001-01-04', 'bekasi', 'Islam', 'Muh Yakub', 'bekasi', '099181811', 'Teknik Komputer Jaringan'),
(4, 'Raka Surendra', 'Laki-Laki', '1234567', 'DESA GANDOANG', '089212548945', '2001-09-27', 'Bogor', 'Islam', 'Rendi', 'DESA GANDOANG', '089212548666', 'Rekayasa Perangkat Lunak'),
(5, 'Deki Losmi', 'Laki-Laki', '0989581', 'Desa Cikeas', '089156782934', '2001-10-06', 'Jakarta', 'Islam', 'Andono', 'Desa Cikeas', '089822466795', 'Teknik Komputer Jaringan'),
(6, 'Chalisa Salsabila Fitri', 'Perempuan', '2456789', 'Desa Cikino', '084656958593', '2002-10-13', 'Jakarta', 'Islam', 'Hanon', 'Desa Cikini', '083809482934', 'Rekayasa Perangkat Lunak'),
(7, 'Muhammad Parij', 'Laki-Laki', '8678591', 'Desa Cikerewis', '083456940022', '2001-10-19', 'Bandung', 'Islam', 'Wandi', 'Desa Cikerewis', '083958321259', 'Multimedia'),
(8, 'Bambang', 'Laki-Laki', '0892359', 'Desa Cijantung', '081322912910', '2001-10-18', 'Bogor', 'Islam', 'Sinjan', 'Desa Cijantung', '089822466333', 'Rekayasa Perangkat Lunak'),
(9, 'Yuni Angsini', 'Perempuan', '4552256', 'Desa Ciangsana', '0813229191992', '2001-10-20', 'Jakarta', 'Islam', 'Wahyu', 'Desa Ciangsana', '089822466222', 'Rekayasa Perangkat Lunak'),
(10, 'Rara Raita', 'Perempuan', '4555515', 'Desa Gino', '081295944412', '2001-10-05', 'Jakarta', 'Islam', 'Antoro', 'Desa Gino', '083412348921', 'Multimedia'),
(11, 'Rahman Suhendi', 'Laki-Laki', '0989234', 'Desa Gandoang', '081295944333', '2002-10-19', 'Jakarta', 'Islam', 'Rendi', 'Desa Gandoang', '089822466222', 'Administrasi Perkantoran'),
(12, 'Andi Suhren', 'Laki-Laki', '0982781', 'Desa Gandoang Kali sari', '0892148278192', '2002-10-26', 'Bekasi', 'Islam', 'Kona', 'Desa Gandoang Kali sari', '089822464901', 'Akuntansi'),
(13, 'Rohmawati Sinta', 'Perempuan', '0812345', 'Desa Sukasari', '082134569021', '2001-10-19', 'Bekasi', 'Islam', 'Joko', 'Desa Sukasari', '083249021234', 'Akuntansi'),
(14, 'Tresna Rido', 'Laki-Laki', '0212931', 'Desa Sukasari Kali Malang', '082329389412', '2001-10-23', 'Bogor', 'Islam', 'Reto', 'Desa Sukasari Kali Malang', '082313459412', 'Administrasi Perkantoran'),
(15, 'Windi Putri', 'Perempuan', '9281293', 'Desa Cibubur', '0813229191333', '2002-10-26', 'Jakarta', 'Islam', 'Roti', 'Desa Cibubur', '089822466556', 'Teknik Komputer Jaringan'),
(16, 'Risman Woto', 'Laki-Laki', '4552333', 'Desa Cibubur Jongol', '089212548444', '2001-10-19', 'Jakarta', 'Hindu', 'Aroro', 'Desa Cibubur Jongol', '089822464333', 'Administrasi Perkantoran'),
(17, 'Edi Gunadi', 'Laki-Laki', '1234333', 'Desa  Jongol', '081295976312', '2001-10-17', 'Bogor', 'Budha', 'Rendi', 'Desa  Jongol', '089822466666', 'Rekayasa Perangkat Lunak'),
(18, 'Raden Kian Santang', 'Laki-Laki', '2355672', 'Desa Sukamakmur', '089212548121', '2001-10-21', 'Bogor', 'Islam', 'Prabu Siliwangi', 'Desa Sukamakmur', '081982246990', 'Akuntansi'),
(19, 'Adul Rinto', 'Laki-Laki', '0928192', 'Desa Sukamakmur Bantar Gebang', '082198221234', '2001-10-21', 'Jakarta', 'Islam', 'Muh Yakub', 'Desa Sukamakmur Bantar Gebang', '089833266222', 'Akuntansi'),
(20, 'Aulia Santi', 'Perempuan', '4552555', 'Desa Sukamakmur Bantar Gebang Sode', '081295976444', '2002-10-30', 'Bogor', 'Kristen', 'Andono', 'Desa Sukamakmur Bantar Gebang Sode', '089822466678', 'Rekayasa Perangkat Lunak'),
(21, 'Yuliana Anggrei', 'Perempuan', '4552565', 'Desa Setu', '089212548933', '2001-10-26', 'Bogor', 'Islam', 'Roney', 'Desa Setu', '089822466512', 'Akuntansi'),
(22, 'Eka Putri', 'Perempuan', '1234447', 'Desa Setu Serang', '084656958533', '2001-10-29', 'Jakarta', 'Islam', 'Andin', 'Desa Setu Serang', '089822466251', 'Teknik Komputer Jaringan'),
(23, 'Dika Randi', 'Laki-Laki', '4552244', 'Desa Setu Serang', '089212548944', '2001-10-27', 'Bogor', 'Islam', 'Oki', 'Desa Setu Serang', '089822466491', 'Teknik Komputer Jaringan'),
(24, 'Ari Lasso', 'Laki-Laki', '1234777', 'Desa Setu Serang', '089212548941', '2002-10-26', 'Jakarta', 'Islam', 'Rendi', 'Desa Setu Serang', '089822461231', 'Akuntansi'),
(25, 'Febri Ardianto', 'Laki-Laki', '81291291', 'Desa Setu Serang Bekasi', '089212543123', '2001-10-11', 'Bogor', 'Hindu', 'Rento', 'Desa Setu Serang Bekasi', '082134589212', 'Teknik Komputer Jaringan'),
(26, 'Lionel Messi', 'Laki-Laki', '0982782', 'Desa Setu Serang Bekasi', '089156782333', '2001-01-05', 'Bogor', 'Kristen', 'Bondan', 'Desa Setu Serang Bekasi', '089833466222', 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, 'aliyakub727@gmail.com', 'aliyakub', '$2y$10$Xdb1Mm2JAfjDvRiBoh4sIu9/HNrsn3G3oDsCEnkU9mTURjRUUFpCy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-18 23:58:39', '2021-09-18 23:58:39', NULL),
(27, 'dafitgila@gmail.com', 'operator', '$2y$10$BJJe0eK2So06t4q9MoAwreIw32hQ9jtJt8oXtATH4kCuB1Y6CVeHq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-06 08:26:32', '2021-10-06 08:26:32', NULL),
(28, 'rayhan@gmail.com', 'guru', '$2y$10$6wW344if8SIhHFZeuwqejO2/82WDt0ZhD6HXHjWQgTyJ5XJabRmOi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-06 08:27:24', '2021-10-06 08:27:24', NULL),
(29, 'adnan@gmail.com', 'siswa', '$2y$10$KhCAGqK.l2r7bxp1Rzp9vePrNYrvEhsazYBD6vZ095/YapmjhZjCK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-06 08:27:54', '2021-10-06 08:27:54', NULL),
(30, 'anwar@gmail.com', 'kepalasekolah', '$2y$10$7j4b6HdovN6fh5rtl/ZY2eQAmVvZ/MsT1I1tE7UkUZsCZnwJakXqC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-06 08:28:19', '2021-10-06 08:28:19', NULL),
(31, 'dafitnur900@gmail.com', 'dafit', '$2y$10$HaNtwxlZhiMYXcTYpi1Z9uOH5ESoJpAlFjW0/jIGmWpAgVPOvNiga', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-07 00:37:30', '2021-10-07 00:37:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `master_data`
--
ALTER TABLE `master_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `master_data`
--
ALTER TABLE `master_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
