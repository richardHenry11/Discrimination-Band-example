-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Mar 2024 pada 08.50
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discrimination`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `albums`
--

CREATE TABLE `albums` (
  `id` bigint UNSIGNED NOT NULL,
  `album` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `slug` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `albums`
--

INSERT INTO `albums` (`id`, `album`, `year`, `slug`, `cover`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Diskriminasi Sosial', 2023, 'war', 'disc.jpg', 'album ini dibuat untuk memberikan semangat kepada saudara kita yang ada di palestina, guna memperubatkan kemerdekaan nya dan mendapatkan kebebasan, serta mengingatkan kepada pendengar bahwa perang adalah hal yang sungguh dan sangat menakutkan untuk kita dan jiwa kemanusiaan kita', '2024-02-01 02:52:22', '2024-02-01 02:52:22'),
(2, 'War Is Nightmare', 2022, 'war', 'war is nightmare.jpg', 'album ini dibuat untuk memberikan semangat kepada saudara kita yang ada di palestina, guna memperubatkan kemerdekaan nya dan mendapatkan kebebasan, serta mengingatkan kepada pendengar bahwa perang adalah hal yang sungguh dan sangat menakutkan untuk kita dan jiwa kemanusiaan kita', '2024-02-01 03:28:41', '2024-02-01 03:28:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apt` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama`, `foto`, `deskripsi`, `apt`, `tempt`, `created_at`, `updated_at`) VALUES
(1, 'Desember Destruction', 'desember.jpg', 'Acara Small gigs yang diselenggarakan oleh jolWehKolektif', '29 Desember 2023', NULL, '2024-02-01 06:33:13', '2024-02-01 06:33:13'),
(2, 'Suddenly Party', 'suddenParty.jpg', 'Acara Small gigs yang diselenggarakan oleh jolWehKolektif', '21 Januari 2024', NULL, '2024-02-01 06:35:00', '2024-02-01 06:35:00'),
(5, 'Papa Beer\'s fire party', NULL, 'Acara Gigs yang diselenggarakan oleh pihak YaudahWeh dan JolwehKolektif ini menuai banyak kesan baik dikarenakan band discrimination tampil dan membuka pt.2 nya kembali', '25 Februari 2024', 'Papa Beer\'s Bar and Lounge', '2024-02-21 21:45:32', '2024-02-21 21:45:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_29_042612_create_personils_table', 1),
(6, '2024_01_31_061705_create_tracks_table', 2),
(7, '2024_02_01_093450_create_albums_table', 3),
(8, '2024_02_01_110924_create_events_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personils`
--

CREATE TABLE `personils` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `role` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personils`
--

INSERT INTO `personils` (`id`, `nama`, `panggilan`, `alamat`, `hobi`, `deskripsi`, `role`, `foto`, `tgl`, `slug`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 'Richard Hendrik Sikumbang', 'Coki', 'Margaasih', 'Gaming, Bermusik', 'Richard Hendrik Sikumbang akrab dipanggil Coki adalah Seorang Programmer/Web Designer, front-end maupun back-end Developer dan Juga, lahir di Bandung pada tanggal 11 April 2000, Coki semasa SD merupakan korban Oral Bullying yang dilakukan teman kelasnya. hingga sampai pertengahan Coki masuk SMP ia berani melawan dan mendapatkan kebebasan serta jati dirinya. Saat lulus SMK Coki kesulitan mendapatkan pekerjaan hingga akhirnya ia bekerja di sebuah Perusahaan UMKM Herbal di jalan Pesantren Selama 3 Bulan hingga akhirnya Coki membuat masalah di tempat kerjanya lalu dipecat. Awalnya Coki mulai menyukai musik bergenre SKA dan Reggae ia menyukai band ScarpaSKA, ScimmiaSKA, Don Lego, dll. Lalu saat mulai masuk kelas 2 SMK Coki menggemari genre musik Country (Desert Rose Band,Hank William, Johnny Cash, The Statler Brothers). Coki berkuliah di Politeknik TEDC dengan mengambil jurusan Teknik Informatika, dan disaat itu juga lah selera bermusik Coki berubah ke genre cowPunk, Punk, dan Pop Punk (Social Distortion, Rancid, The Casualties dan Superman Is Dead). Coki menjelaskan alasan ia menyukai genre punk antara lain (mereka merupakan seorang yang terintimidasi dan mereka juga berjuang untuk mendapatkan kebebasannya, dan hal itu sama persis seperti apa yang ia alami) Ujar Coki. hingga pada awalnya ia bertemu dengan Kemed seorang Drummer dari band BrokenInside menawarinya bermain di bandnya untuk mengisi posisi pemain Bass mereka yang kabur dikarenakan perbedaan Persepsi. Awalnya coki tidak menyukai Hardcore Punk hingga akhirnya coki menikmatinya. Konflik pun terjadi antara vokalis (andres), hingga akhirnya andres di keluarkan dari BrokenInside dan Broken Inside vakum hingga mengganti nama Menjadi Discrimination. hingga di titik inilah Coki, Kemed dan Sandi Berkarya dan mengganti genre Band Menjadi D-beat/Crust Punk. yang mana rencana dari dekat dari band kita kali ini yaitu meluncurkan Album Pertama Kita yang berjudul (Diskriminasi Sosial). ', 'Bassist/ 2nd Vocal', 'rich.jpg', '11 April 2000', 'coki', 'Bandung', '2024-01-29 23:19:02', '2024-01-29 23:19:02'),
(2, 'Ahmad Arifin', 'Kemed', 'Cisarua', 'goes to nature, Bermusik', NULL, 'Drummer', 'kemet.jpg', NULL, 'kemed', 'Bandung', '2024-01-30 10:00:11', NULL),
(3, 'Sandi', 'Mbe', 'Cisarua', 'Bermusik', NULL, 'Guitar/ Vocalist', 'sand.jpg', NULL, 'mbe', 'Bandung', '2024-01-30 10:02:15', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint UNSIGNED NOT NULL,
  `song` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tracks`
--

INSERT INTO `tracks` (`id`, `song`, `cover`, `durasi`, `year`, `created_at`, `updated_at`) VALUES
(1, 'War Is Nightmare', 'disc.jpg', '03:20', 2022, '2024-01-30 23:27:39', '2024-01-30 23:27:39'),
(2, 'Diskriminasi Sosial', 'disc.jpg', '02:50', 2022, '2024-01-30 23:28:51', '2024-01-30 23:28:51'),
(3, 'For Chaos', 'disc.jpg', '03:45', 2022, '2024-01-30 23:30:04', '2024-01-30 23:30:04'),
(4, 'Tamak', 'disc.jpg', '02:00', 2023, '2024-01-30 23:31:17', '2024-01-30 23:31:17'),
(5, 'Pembuktian', 'disc.jpg', '03:00', 2023, '2024-01-30 23:35:27', '2024-01-30 23:35:27'),
(6, 'intro', 'disc.jpg', '01:30', 2023, '2024-01-30 23:36:06', '2024-01-30 23:36:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'CokiAnakPunk', 'richardkumbang04@gmail.com', NULL, '$2y$12$sgSB12xB73bpfeLqBd7E3.yk1HVnYEGwEXEmaV17GcBuzm1qNDV7m', NULL, '2024-02-19 21:23:29', '2024-02-19 21:23:29', NULL),
(2, 'PunxNSkins', 'AingPunx@gmail.com', NULL, '$2y$12$ZypJNNKSLS7SiAzzG.59Ce3H04FwkVFI1MYlRIrSzW9zzOlVv7ifu', NULL, '2024-02-19 21:25:53', '2024-02-19 21:25:53', NULL),
(3, 'SandiMbe', 'mbe@gmail.com', NULL, '$2y$12$MYyghv.Y8MbXAoqDrpLkVO9OA1fk.BQehfFt4OeSV5Y17BUqNiVH6', NULL, '2024-02-19 21:39:37', '2024-02-19 21:39:37', NULL),
(4, 'Kemed123', 'keemetDrum@gmail.com', NULL, '$2y$12$DYohee833JI8kLUINxbyTOWokcvpacRkj2pWqiekAIOL9/XSvFliq', NULL, '2024-02-19 21:41:12', '2024-02-19 21:41:12', NULL),
(5, 'Oblehhhhh', 'bolehhhh@gmail.com', NULL, '$2y$12$hDFXz8yHCaRklNl12cjjsOgT7PxDtivmKQo.gK.ocGcLg1EQFwxl.', NULL, '2024-02-19 21:42:08', '2024-02-19 21:42:08', NULL),
(6, 'CokiPunx', 'richardhenrik11@gmail.com', NULL, '$2y$12$ZKEK3lZNwD7REvQkszBtteOYMPdIXc8/w2nn7ATcpzuLNbSYscBMy', NULL, '2024-02-20 20:33:54', '2024-02-20 20:33:54', 'admin'),
(7, 'aingPunx', 'aingPunx11@gmail.com', NULL, '$2y$12$S9aN43xXFR9S1z26d5M2r.GyBLjwqI7uYMhE0hawYxOu8gvQfvZ8.', NULL, '2024-02-21 00:56:28', '2024-02-21 00:56:28', 'User'),
(9, 'richard123', 'richardhenrik99@gmail.com', NULL, '$2y$12$LEpEL21hqRLZPXfvRAfNjeKm9Qksodtrr0yn0k6bVK9O9ZX1/blMW', NULL, '2024-03-06 21:50:21', '2024-03-06 21:50:21', 'User'),
(10, 'coki123456', 'asdw@ctrf.yh', NULL, '$2y$12$Aj2kncOjk8SRnYvGRzkBy.pxevaJ2/zrKhZb.ZuCR5rK.Si/0RRI.', NULL, '2024-03-06 21:55:36', '2024-03-06 21:55:36', 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `personils`
--
ALTER TABLE `personils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personils`
--
ALTER TABLE `personils`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
