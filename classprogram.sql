-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 07:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classprogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `tagline_artikel` varchar(100) NOT NULL,
  `judul_artikel` varchar(400) NOT NULL,
  `isi_artikel` longtext NOT NULL,
  `date_artikel` varchar(148) DEFAULT NULL,
  `dokumentasi_artikel` varchar(1900) NOT NULL,
  `dokumentasi_compress` varchar(255) DEFAULT NULL,
  `slug_artikel` varchar(158) NOT NULL,
  `visible_artikel` tinyint(4) NOT NULL,
  `jumlah_share` int(11) NOT NULL,
  `total_view` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `pilihan_editor` int(11) NOT NULL,
  `kategori_cerbung` varchar(255) DEFAULT NULL,
  `keyword` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `tagline_artikel`, `judul_artikel`, `isi_artikel`, `date_artikel`, `dokumentasi_artikel`, `dokumentasi_compress`, `slug_artikel`, `visible_artikel`, `jumlah_share`, `total_view`, `id_author`, `pilihan_editor`, `kategori_cerbung`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'www', '<p>q</p>', '2023-10-06T13:47', 'dedde', 'eee', 'frf', 0, 11, 1, 1, 1, 'wsr', '1', '2023-10-06 13:47:46', '2023-10-06 13:47:46'),
(2, 'fsgb', 'fg', '<p>asedf</p>', '2023-10-07T14:44', 'dedde', 'eee', 'frf', 0, 1, 1, 3, 5, 'dfrtgh', 'fr', '2023-10-06 14:44:42', '2023-10-06 14:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `harga` float NOT NULL,
  `voucher` int(12) DEFAULT NULL,
  `jurusan` int(255) DEFAULT NULL,
  `sukses` enum('ya','tidak') DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id`, `user`, `paket`, `harga`, `voucher`, `jurusan`, `sukses`, `created_at`, `updated_at`) VALUES
(1, 'surpi', 'BSO', 10000, 10, NULL, 'ya', '2023-07-31 08:37:17', '2023-07-31 08:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `tampilan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `nama`, `judul`, `foto`, `waktu`, `sumber`, `tampilan`, `created_at`, `updated_at`) VALUES
(4, 'Zona A', 'Zona A', 'Frame 1.png', '2023-12-12 15:39:00', 'Liputan 6', 'https://www.youtube.com/watch?v=3cNxxrtj-mA', '2023-12-12 08:39:40', '2023-12-12 08:39:40'),
(5, 'oke', 'hsdjhdkjshdjsj', '22.png', '2023-12-12 17:14:00', 'Liputan Zona', 'https://www.youtube.com/watch?v=3cNxxrtj-mA', '2023-12-12 10:14:54', '2023-12-12 10:14:54'),
(6, 'Zona A', 'hsdjhdkjshdjsj', 'day 4.PNG', '2023-12-12 17:15:00', 'Liputan Zona Media Group', 'https://www.instagram.com/reel/CzbEX7lpniE/?utm_source=ig_web_copy_link', '2023-12-12 10:15:37', '2023-12-12 10:15:37'),
(7, 'Zona B', 'Zona B', 'day11.PNG', '2023-12-12 17:22:00', 'Liputan 7', 'https://www.instagram.com/reel/CzbEX7lpniE/?utm_source=ig_web_copy_link', '2023-12-12 10:22:48', '2023-12-12 10:22:48'),
(8, 'Apa haoyoo', 'Apa haoyoo', 'day5.PNG', '2023-12-12 17:23:00', 'Liputan 8', 'https://www.instagram.com/reel/CzbEX7lpniE/?utm_source=ig_web_copy_link', '2023-12-12 10:23:25', '2023-12-12 10:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `publish` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_jurusan` int(10) DEFAULT NULL,
  `publish` enum('ya','tidak') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `nama`, `kelas`, `foto`, `id_jurusan`, `publish`, `created_at`, `updated_at`) VALUES
(5, 'suori', 'bso', 'wkwk', 1, 'ya', '2023-09-13 11:32:43', '2023-09-13 11:32:43'),
(6, 'Dimas Wildan Alfurqaans', 'KTK', 'Oprek Tim IT Mobile Apps (1).png', 1, 'ya', '2023-09-13 11:45:10', '2023-09-13 11:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengetian_prduk`
--

CREATE TABLE `pengetian_prduk` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `id_produk` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengetian_prduk`
--

INSERT INTO `pengetian_prduk` (`id`, `judul`, `isi`, `foto`, `ket`, `id_produk`, `created_at`, `updated_at`) VALUES
(0, 'ddd', '<p>ddt</p>', 'admin cp.png', 'bbb', '8', '2023-10-06 06:30:48', '2023-10-06 06:30:48'),
(6, 'Cara Cepat Bikin Titik-Titik Di Daftar Isi!', 'aasaassa', 'Oprek Tim IT Mobile Apps.png', 'kepo', 'kpk', '2023-09-13 03:22:32', '2023-09-13 03:22:32'),
(7, 'halo', 'Halo saya siapa\r\nini sauaya a\r\nsabar ya', 'Oprek Tim IT Mobile Apps.png', 'kepo', 'ktk', '2023-09-13 06:53:00', '2023-09-13 06:53:00'),
(8, 'Cara Cepat Bikin Titik-Titik Di Daftar Isi!', '<p>hallo gais jancok i</p>\r\n\r\n<p>kabeh</p>', 'Oprek Tim IT Mobile Apps.png', 'asdsddasads', 'bmj', '2023-09-13 07:29:25', '2023-09-13 07:29:25'),
(9, 'halo', '<p>✅wokwowkowkwok<br />\r\n✅okapodjsaodod</p>', 'Oprek Tim IT Mobile Apps (1).png', 'kepo', 'bso', '2023-09-13 07:42:18', '2023-09-13 07:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `publish` enum('ya','tidak') NOT NULL,
  `tutup` datetime NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `nama`, `publish`, `tutup`, `link`, `created_at`, `updated_at`) VALUES
(1, 'ok', 'ya', '2023-08-15 02:04:00', '', '2023-08-14 08:55:12', '2023-08-14 09:20:08'),
(3, 'saaas', 'ya', '2023-08-14 02:56:17', '', '2023-08-14 08:56:29', '2023-08-14 08:56:29'),
(4, 'Dimas Wildan Alfurqaans', 'ya', '2023-08-14 19:16:00', '', '2023-08-14 09:16:50', '2023-08-14 09:16:50'),
(5, 'paket apapun', 'tidak', '2023-08-29 14:54:00', 'https://www.tiktok.com/@zonamahasiswa.id/video/7187720733882076443', '2023-08-29 01:55:01', '2023-08-29 01:55:01'),
(6, 'paket apapun', 'tidak', '2023-08-29 14:54:00', 'https://www.tiktok.com/@zonamahasiswa.id/video/7187720733882076443', '2023-08-29 01:55:07', '2023-08-29 01:55:07'),
(7, 'Dimas Wildan Alfurqaans', 'tidak', '2023-08-01 10:55:00', 'https://www.tiktok.com/@zonamahasiswa.id/video/7218179762332732699', '2023-08-29 01:55:37', '2023-08-29 01:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `publish` enum('ya','tidak') NOT NULL,
  `harga` int(255) NOT NULL,
  `harga1` int(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `produk`, `publish`, `harga`, `harga1`, `foto`, `created_at`, `updated_at`) VALUES
(8, 'skripsi', 'bso', 'ya', 10000, 100000, NULL, '2023-09-13 03:21:45', '2023-09-13 03:21:45'),
(9, 'sumi', 'ktk', 'ya', 100000, 0, NULL, '2023-09-13 08:58:05', '2023-09-13 08:58:05'),
(10, 'bso', 'platinum', 'ya', 1000000, 0, 'Oprek Tim IT Mobile Apps (1).png', '2023-09-13 09:03:40', '2023-09-13 09:03:40'),
(11, 'ok', 'platinum', 'ya', 2000, 1000000, 'Oprek Tim IT Mobile Apps (1).png', '2023-09-13 09:04:14', '2023-09-13 09:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` int(12) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `cover` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `judul`, `isi`, `cover`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Cara Cepat Bikin Titik-Titik Di Daftar Isi!', 'aasaassa', 'Desktop - 6.png', 'https://www.tiktok.com/@zonamahasiswa.id/video/7187720733882076443', '2023-08-14 04:35:48', '2023-08-14 07:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `sobat_insan`
--

CREATE TABLE `sobat_insan` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `teks` text NOT NULL,
  `publish` enum('ya','tidak') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sobat_insan`
--

INSERT INTO `sobat_insan` (`id`, `nama`, `foto`, `teks`, `publish`, `created_at`, `updated_at`) VALUES
(6, 'Dimas Wildan Alfurqaans', 'Black___White_Simple_Initial_Circle_Badge_Logo-removebg-preview.png', 'sadfgh', 'ya', '2023-08-14 14:07:04', '2023-08-14 14:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomer` int(13) DEFAULT NULL,
  `kampus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` int(12) DEFAULT NULL,
  `jeniskelamin` enum('laki','perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `ttl`, `asal`, `nomer`, `kampus`, `jurusan`, `semester`, `jeniskelamin`, `created_at`, `updated_at`) VALUES
(1, 'aldia', 'test@gmail.com', NULL, '$2y$10$kLFW5ugqNFM/P2hgGXu1neo24ZhoU4J.C/VVeSnqqzJdU3MN18DyS', 'IaNvRczFQKVwy7voZHsVisq8cWRNVUBCjpGkXHytgp3sqKPsIcn3MbVARwS2', 'user', '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, '2023-12-13 03:03:19', '2023-12-13 03:03:19'),
(11, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$RXubsKDkeHmumflYPrytnuYx.0EdCwH7Oat/zY7ITWUt7tWHIRryu', '6qUxo5abiZK8NKMkeUFF23msMc50tYM4pQtgZ58CZYhCqcO2pcwPjXnrv0rz', 'admin', '2023-09-13', 'wkwwkwk', 380923889, 'kepo', 'opokek', 1, 'laki', '2023-08-31 01:49:50', '2023-08-31 01:49:50'),
(66, 'Aisyah Nur Yuliana', 'dimaswildan1986@gmail.com', NULL, '$2y$10$yDUfk1ZSP.yVLd8OVjaqLebn0e.0WC9vC8VQys//yS/1mGKHlJVIG', 'W0KUeFj4ib47u5yRKXuziZyZOQ2jJWnjbNjDF4211ixRBC2Gh4Y2I1R2RVsw', 'user', '2023-09-15', 'qwewqeeqw', 2147483647, 'ub', 'sistem informasi', 1, 'laki', '2023-09-07 04:54:48', '2023-09-07 04:54:48'),
(67, 'Daffa Annisa Hidayatul Ays Sujianto', 'daffaannisahidayatul@gmail.com', NULL, '', 'EW7GF5NjYWuQYpjjWcUhGoNUfIcvIdtSp417pYl5XKuQCZ7uHoMKhxsgJRQR', 'user', '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, '2023-09-08 14:09:33', '2023-09-08 14:09:33'),
(68, 'yohanesbabi', 'yohanesbabi@gmail.com', NULL, '$2y$10$lowSbWYf.jSVJtCJmZrduuZHFcR6QyvEkqtc7g3CQpR//U6fkUj/K', NULL, 'user', '2023-12-31', 'yohanesbabi', 2147483647, 'polije', 'tekkom', 6, 'laki', '2023-12-31 01:35:58', '2023-12-31 01:35:58'),
(69, 'al', 'al@gmail.com', NULL, '$2y$10$vuujRAbOEFMrYMDdpUK50u3eg4PO6TL01CWn.8zG4eVQgZNQQPYwG', NULL, 'user', '2023-12-31', 'putrasiregar', 2147483647, 'polije', 'tekkom', 8, 'laki', '2023-12-31 01:37:01', '2023-12-31 01:37:01'),
(70, 'FANDI', 'FANDI@GMAIL.COM', NULL, '$2y$10$6v9BmriWMR5tkbn3vkuXVuV7wiwkrAZhcyyHC6k5OJJrpeSolO0Tu', NULL, 'user', '2024-01-03', 'yohanesbabi', 2038283, 'polije', 'tekkom', 5, 'laki', '2024-01-03 03:10:53', '2024-01-03 03:10:53'),
(71, 'testing', 'testing@gmail.com', NULL, '$2y$10$vHOXMM19UaPGCrjkXSSh8.6BhwQ9jBnwCERWtpB//E1rkdu.9WQ4i', NULL, 'user', '2024-01-03', 'yohanesbabi', 28182812, 'polije', 'tekkom', 7, 'laki', '2024-01-03 03:15:54', '2024-01-03 03:15:54'),
(72, 'fadil', 'fadil@gmail.com', NULL, '$2y$10$fXxCrsfgc10K6FiNTdy8T.8QXVZBe3qjW5mAGfQUZgvaLh9nlC6GW', 'DLl6DWx3cpWmAwEdDuJ0lMST0jxhSDE7sFRDbmIeFzXBpUECutCK7JyNiqMr', 'user', '2000-10-05', 'lampung', 2147483647, 'UI', 'sastra', 8, 'laki', '2024-01-03 03:31:30', '2024-01-03 03:31:30'),
(73, 'Fadil Ainuddin', 'ainuddinfadil@gmail.com', NULL, '$2y$10$aml.LU2.CcBQv0cujPMNYOcf.tRO1sBzGZ/6Btc1lWjdHrHs35nG.', 'h0VOeCGa6HKgr7Ip7NwPPe82euXVD63CEp4onfgdltr7KNMxrczsBHjItWj4', 'user', '2000-10-05', 'Labuhan Ratu Baru, RT/RW 009/002, Kec. Way Jepara, Kab. Lampung Timur', 2147483647, 'Politeknik Negeri Lampung', 'IT', 14, 'laki', '2024-01-03 07:37:51', '2024-01-03 07:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `tampilan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `nama`, `judul`, `foto`, `waktu`, `tampilan`, `created_at`, `updated_at`) VALUES
(6, 'Tips Menarik', 'Tips Menarik', 'Tips (11).png', '2024-01-01 11:23:00', 'https://www.instagram.com/reel/C1eDXOAPKPI/?igsh=NTc4MTIwNjQ2YQ==', '2024-01-01 04:29:03', '2024-01-01 04:29:12'),
(7, 'Drama Perkuliahan', 'Drama Perkuliahan', 'Tips (11) (1).png', '2024-01-01 11:31:00', 'https://www.instagram.com/reel/C1eDXOAPKPI/?igsh=NTc4MTIwNjQ2YQ==', '2024-01-01 04:32:03', '2024-01-01 04:32:03'),
(8, 'Rosting Mahasiswa', 'Rosting Mahasiswa', 'Tips (11) (3).png', '2024-01-01 11:32:00', 'https://www.instagram.com/reel/C1eDXOAPKPI/?igsh=NTc4MTIwNjQ2YQ==', '2024-01-01 04:32:47', '2024-01-01 04:32:47'),
(9, 'Drama Perkuliahan', 'Drama Perkuliahan', 'Tips (11) (2).png', '2024-01-01 11:33:00', 'https://www.instagram.com/reel/C1eDXOAPKPI/?igsh=NTc4MTIwNjQ2YQ==', '2024-01-01 04:33:58', '2024-01-01 04:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `discount` int(12) NOT NULL,
  `publish` enum('ya','tidak') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `nama`, `discount`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'apaan', 10, 'ya', '2023-09-12 02:38:24', '2023-09-13 04:59:38'),
(2, 'Alif Laili Munazila', 10, 'tidak', '2023-09-13 04:55:50', '2023-12-13 02:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `tampilan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `nama`, `judul`, `foto`, `waktu`, `tampilan`, `created_at`, `updated_at`) VALUES
(13, 'KTK', 'KTK', 'Capture.PNG', '2024-01-01 11:51:00', 'https://www.youtube.com/watch?v=puKINTRTDZk&t=90s', '2024-01-01 04:51:22', '2024-01-01 04:51:22'),
(14, 'KTK', 'KTK', 'Capture.PNG', '2024-01-01 11:51:00', 'https://www.youtube.com/watch?v=puKINTRTDZk&t=90s', '2024-01-01 04:51:46', '2024-01-01 04:51:46'),
(15, 'KTK', 'KTK', 'Capture.PNG', '2024-01-01 11:52:00', 'https://www.youtube.com/watch?v=puKINTRTDZk&t=90s', '2024-01-01 04:52:26', '2024-01-01 04:52:26'),
(16, 'KTK', 'KTK', 'Capture.PNG', '2024-01-01 11:52:00', 'https://www.youtube.com/watch?v=puKINTRTDZk&t=90s', '2024-01-01 04:52:42', '2024-01-01 04:52:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengetian_prduk`
--
ALTER TABLE `pengetian_prduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sobat_insan`
--
ALTER TABLE `sobat_insan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
