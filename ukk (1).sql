-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 01:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `bukuID` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahunterbit` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`bukuID`, `gambar`, `judul`, `penulis`, `penerbit`, `tahunterbit`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'mantappu.jpg', 'Mantappu Jiwa', 'Regas', 'Grc', '24-Dec-2024', '“Jadi ini buku latihan soal matematika ya, Jer?” Bukan! Kata orang, selama masih hidup, manusia akan terus menghadapi masalah demi masalah. Dan itulah yang akan kuceritakan dalam buku ini, yaitu bagaimana aku menghadapi setiap persoalan di dalam hidupku. Dimulai dari aku yang lahir dekat dengan hari meletusnya kerusuhan di tahun 1998, bagaimana keluargaku berusaha menyekolahkanku dengan kondisi ekonomi yang terbatas, sampai pada akhirnya aku berhasil mendapatkan beasiswa penuh S1 di Jepang. Manusia tidak akan pernah lepas dari masalah kehidupan, betul. Tapi buku ini tidak hanya berisi cerita sedih dan keluhan ini-itu. Ini adalah catatan perjuanganku sebagai Jerome Polin Sijabat, pelajar Indonesia di Jepang yang iseng memulai petualangan di YouTube lewat channel Nihongo Mantappu. Yuk, naik roller coaster di kehidupanku yang penuh dengan kalkulasi seperti matematika. It may not gonna be super fun, but I promise it would worth the ride. Minasan, let’s go, MANTAPPU JIWA!', '2024-03-04 14:05:42', '2024-03-04 14:05:42'),
(2, 'midnight.jpg', 'The Midnight Library', 'Regas', 'Grc', '24-Dec-2024', 'Perpustakaan Tengah Malam atau The Midnight Library adalah sebuah novel fantasi karya Matt Haig, diterbitkan pada 13 Agustus 2020 oleh Canongate Books. Diringkas dan disiarkan di BBC Radio 4 lebih dari sepuluh episode pada bulan Desember 2020.', '2024-03-04 14:09:43', '2024-03-04 14:09:43'),
(3, 'lautbercerita.jpg', 'Laut Bercerita', 'Regas', 'Grc', '20-12-2023', 'Laut Bercerita adalah novel karya penulis asal Indonesia bernama Leila Salikha Chudori. Ia juga merupakan seorang wartawan di majalah Tempo. Novel terbitan tahun 2017 ini, mengangkat tema persahabatan, percintaan, kekeluargaan, dan rasa kehilangan. Dengan berlatarkan waktu di tahun 90-an dan 2000, novel ini mampu membius para pembacanya untuk menerobos ruang masa lalu dan kembali melihat peristiwa yang terjadi di tahun yang bersangkutan.', '2024-03-04 14:23:01', '2024-03-04 14:23:01'),
(4, 'itily.jpg', 'I Think I Love You', 'Regas', 'Grc', '24-Dec-2023', 'Lemari pakaian itu berpintu ganda, dengan cermin setinggi badan. Di dalamnya tersimpan setelan tweed dengan kerah bulu musang milik ibunya. Banyak rok dan blus jahitan khusus di gantungannya. Ada sweter berwarna-warni lembut, terlipat rapi, dengan lapisan kertas tisu di antaranya. Di bawah terdapat beberapa rak sepatu.', '2024-03-04 14:27:33', '2024-03-04 14:27:33'),
(5, 'berhenti.jpg', 'Berhenti Di Kamu', 'Regas', 'Grc', '20-12-2023', '#Berhentidikamu – Jodoh merupakan sebuah takdir yang sudah diatur oleh Sang Maha Kuasa. Banyak orang yang mengeluh bahwa mereka susah dipertemukan dengan jodohnya, alih-alih mereka justru bertemu dengan orang yang menyakiti hatinya, sehingga membuat diri sendiri tidak percaya lagi apa arti cinta.\r\n\r\nSemua pengalaman yang berkaitan dengan cinta dapat memiliki suatu perubahan yang signifikan dalam hidup. Mulai dari pengalaman jatuh cinta, saling mencintai, hingga putus cinta, semuanya bisa mempengaruhi cara kita dalam menjalani hidup.', '2024-03-04 14:29:26', '2024-03-04 14:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `kategoriID` bigint(20) UNSIGNED NOT NULL,
  `namakategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategorirelasi`
--

CREATE TABLE `kategorirelasi` (
  `kategoribukuID` bigint(20) UNSIGNED NOT NULL,
  `bukuID` bigint(20) UNSIGNED NOT NULL,
  `kategoriID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `koleksiID` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `bukuID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_23_005655_create_buku_table', 1),
(7, '2024_02_23_081310_create_sessions_table', 1),
(8, '2024_02_29_094249_create_peminjamen_table', 1),
(9, '2024_02_29_094607_create_ulasans_table', 1),
(10, '2024_02_29_134106_create_ulasanbuku_table', 1),
(11, '2024_03_02_121846_create_koleksi_table', 1),
(12, '2024_03_02_175814_create_peminjaman_table', 1),
(13, '2024_03_03_175242_create_kategori_table', 1),
(14, '2024_03_03_175424_create_kategoribuku_table', 1),
(15, '2024_03_03_175600_create_kategorirelasi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjamanID` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `bukuID` bigint(20) UNSIGNED NOT NULL,
  `tanggalpeminjaman` date NOT NULL,
  `tanggalpengembalian` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjamen`
--

CREATE TABLE `peminjamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `ulasanID` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `bukuID` bigint(20) UNSIGNED NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ulasanbuku`
--

INSERT INTO `ulasanbuku` (`ulasanID`, `userID`, `bukuID`, `ulasan`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'mantap man', 4, '2024-03-04 14:51:01', '2024-03-04 14:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `ulasans`
--

CREATE TABLE `ulasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `role` enum('admin','petugas','user') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `alamat`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'regas', '$2y$12$olH1aqDlE0nsoj3rtZjYoeSXLY4DOqIzppI4V/JwNC1AZsrCiZuAy', 'andnn1006@gmail.com', 'fabregas andana', 'mdn', 'user', NULL, '2024-03-04 13:16:52', '2024-03-04 13:16:52'),
(2, 'cc', '$2y$12$0smPfO1jpXoV396s.CM28u6TyE2CUySzlgLI5Pldd3wuRzkaq7aFy', 'admin@gmail.com', 'caca', 'mdn', 'admin', NULL, '2024-03-04 14:03:24', '2024-03-04 14:03:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`bukuID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`kategoriID`);

--
-- Indexes for table `kategorirelasi`
--
ALTER TABLE `kategorirelasi`
  ADD PRIMARY KEY (`kategoribukuID`),
  ADD KEY `kategorirelasi_bukuid_foreign` (`bukuID`),
  ADD KEY `kategorirelasi_kategoriid_foreign` (`kategoriID`);

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`koleksiID`),
  ADD KEY `koleksi_userid_foreign` (`userID`),
  ADD KEY `koleksi_bukuid_foreign` (`bukuID`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjamanID`),
  ADD KEY `peminjaman_userid_foreign` (`userID`),
  ADD KEY `peminjaman_bukuid_foreign` (`bukuID`);

--
-- Indexes for table `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`ulasanID`),
  ADD KEY `ulasanbuku_userid_foreign` (`userID`),
  ADD KEY `ulasanbuku_bukuid_foreign` (`bukuID`);

--
-- Indexes for table `ulasans`
--
ALTER TABLE `ulasans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `bukuID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `kategoriID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategorirelasi`
--
ALTER TABLE `kategorirelasi`
  MODIFY `kategoribukuID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `koleksiID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjamanID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjamen`
--
ALTER TABLE `peminjamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `ulasanID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategorirelasi`
--
ALTER TABLE `kategorirelasi`
  ADD CONSTRAINT `kategorirelasi_bukuid_foreign` FOREIGN KEY (`bukuID`) REFERENCES `buku` (`bukuID`) ON DELETE CASCADE,
  ADD CONSTRAINT `kategorirelasi_kategoriid_foreign` FOREIGN KEY (`kategoriID`) REFERENCES `kategoribuku` (`kategoriID`) ON DELETE CASCADE;

--
-- Constraints for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD CONSTRAINT `koleksi_bukuid_foreign` FOREIGN KEY (`bukuID`) REFERENCES `buku` (`bukuID`) ON DELETE CASCADE,
  ADD CONSTRAINT `koleksi_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_bukuid_foreign` FOREIGN KEY (`bukuID`) REFERENCES `buku` (`bukuID`) ON DELETE CASCADE,
  ADD CONSTRAINT `peminjaman_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD CONSTRAINT `ulasanbuku_bukuid_foreign` FOREIGN KEY (`bukuID`) REFERENCES `buku` (`bukuID`) ON DELETE CASCADE,
  ADD CONSTRAINT `ulasanbuku_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
