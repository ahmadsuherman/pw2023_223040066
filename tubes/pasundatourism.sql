-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Jun 2023 pada 14.54
-- Versi server: 10.5.20-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `223040066_tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `uid`, `name`, `is_active`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, '75ed5f40-5d4d-4e3c-9a4e-78ef278076d0', 'Penginapan', 1, 1, 1, NULL, '2023-05-27 19:14:41', '2023-05-27 19:14:41', NULL),
(25, '521c1901-c268-4689-a48c-a4a22a6461c6', 'Wisata', 1, 1, 1, NULL, '2023-05-27 19:14:46', '2023-05-27 19:14:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` char(36) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` longtext NOT NULL,
  `latitude` varchar(15) DEFAULT NULL,
  `longitude` varchar(15) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `destinations`
--

INSERT INTO `destinations` (`id`, `uid`, `category_id`, `name`, `description`, `image`, `latitude`, `longitude`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'b9e991ee-a642-49cb-98da-761f27df8322', 25, 'Kebun Binatang Surabaya', '&lt;div&gt;Kebun binatang Surabaya selalu menjadi favorit untuk wisata rekreasi keluarga dan wisata edukasi untuk anak-anak di setiap akhir pekan. Kebun Binatang Surabaya merupakan salah satu kebun binatang yang populer di Indonesia dan terbesar se Asia Tenggara. Kebun Binatang Surabaya pernah menjadi kebun binatang dengan satwa terlengkap. &lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Menikmati akhir pekan bersama keluarga dengan berekreasi sambil mengenal ratusan jenis hewan dan mengamati tingkah polah hewan tersebut adalah sesuatu yang menyenangkan untuk siapa saja. Bahkan kita bisa berinteraksi seperti memberi makan atau menaiki gajah. &lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Kebun Binatang Surabaya berlokasi di lingkungan yang asri dan rindang dengan pohon-pohon besar. Selain sebagai tempat edukasi, juga merupakan kawasan konservasi sekaligus Hutan Kota. Kebun Binatang Surabaya ini juga terkenal karena di depannya terdapat patung Surabaya, patung Hiu dan Buaya yang merupakan lambang kota Surabaya.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Jam Buka&lt;/strong&gt; : 08.00 - 16.00 WIB&lt;br&gt;&lt;strong&gt;Tiket&lt;/strong&gt; : Rp. 15.000 &lt;em&gt;(weekday &amp;amp; weekend)&lt;/em&gt;&lt;/div&gt;', '05292023_041232.jpeg', '-7.464319171972', '112.43180431675', 1, 1, NULL, '2023-05-29 16:12:32', '2023-05-29 16:12:32', NULL),
(2, '3531aee5-a3fc-42c6-af76-d105c1214de9', 25, 'Asia Afrika Bandung', '&lt;div&gt;Asia Afrika adalah jalan yang terletak di pusat kota Bandung dan melintasi dua benua, yaitu Asia dan Afrika. Jalan ini memiliki nilai sejarah yang tinggi karena menjadi saksi peristiwa bersejarah dalam konferensi Asia Afrika pada tahun 1955. Konferensi tersebut dihadiri oleh para pemimpin negara dari Asia dan Afrika yang sedang berjuang untuk kemerdekaan dan mengakhiri penjajahan.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Selama kunjungan ke Asia Afrika, pengunjung dapat melihat berbagai bangunan bersejarah yang memancarkan arsitektur kolonial Belanda yang megah. Di sepanjang jalan, terdapat beberapa gedung yang menjadi saksi bisu dari masa lalu, seperti Gedung Merdeka, Gedung Negara, dan Gedung Sate. Gedung-gedung ini sering kali digunakan untuk acara-acara pemerintahan dan menjadi ikon kota Bandung.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Selain bangunan bersejarah, di sepanjang jalan terdapat juga Taman Sejarah Asia Afrika. Taman ini dihiasi dengan taman hijau yang indah, patung-patung tokoh bersejarah, dan kolam air mancur. Pengunjung dapat berjalan-jalan di taman sambil menikmati pemandangan dan menelusuri jejak sejarah Asia Afrika.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Di area Asia Afrika, terdapat juga Museum Konferensi Asia Afrika yang menjadi tempat penyimpanan dan pameran benda-benda bersejarah terkait konferensi tersebut. Museum ini menampilkan dokumentasi, foto, dan artefak penting yang menggambarkan peristiwa penting dalam sejarah pergerakan kemerdekaan di Asia dan Afrika.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Selama perjalanan di Asia Afrika, pengunjung dapat merasakan atmosfer yang berbeda. Jalan yang luas dan tertata rapi, serta pohon-pohon yang rindang menciptakan lingkungan yang nyaman untuk berjalan-jalan atau sekadar duduk bersantai di taman.&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Selain nilai sejarahnya, Asia Afrika juga menjadi area yang sering digunakan untuk acara-acara besar, seperti festival, pameran, dan konser musik. Tempat ini menjadi destinasi favorit bagi wisatawan yang ingin mengenal sejarah, menikmati pemandangan kota, dan merasakan atmosfer kultural Bandung.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Asia Afrika adalah destinasi wisata yang menggabungkan nilai sejarah, keindahan arsitektur, dan ruang publik yang nyaman. Wisatawan dapat mengeksplorasi jejak sejarah, menikmati keindahan bangunan bersejarah, dan mengambil foto-foto yang berkesan. Destinasi ini menawarkan pengalaman yang mendalam dalam memahami perjuangan dan semangat kemerdekaan di Asia dan Afrika serta menikmati keindahan kota Bandung.&lt;/div&gt;', '05292023_042124.jpeg', '-6.921551790984', '107.61015321215', 1, 1, NULL, '2023-05-29 16:21:24', '2023-05-29 16:21:24', NULL),
(3, '35f0a05e-a472-45cf-8931-a675056d670c', 24, 'The Gaia Hotel Bandung', '&lt;div&gt;The Gaia Hotel Bandung adalah hotel boutique yang menawan dan bergaya, yang menawarkan pengalaman menginap yang unik dan berkesan bagi para tamunya. Hotel ini didesain dengan perpaduan elemen kontemporer dan tradisional, menciptakan suasana hangat dan mengundang. Terletak di lokasi yang strategis, hotel ini mudah diakses dan dekat dengan atraksi dan landmark populer di Bandung.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Hotel ini memiliki kamar-kamar yang dilengkapi dengan baik dan dirancang dengan gaya yang menarik. Setiap kamar menawarkan kenyamanan dan fasilitas modern untuk memastikan para tamu merasa nyaman selama menginap. Desain interior kamar menggabungkan sentuhan artistik, perabotan yang elegan, dan warna-warna yang menenangkan, menciptakan suasana yang menyenangkan.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Selain itu, The Gaia Hotel Bandung juga menawarkan berbagai fasilitas dan layanan yang membuat pengalaman menginap semakin menyenangkan. Terdapat restoran yang menyajikan hidangan lezat dengan pilihan menu yang beragam, sehingga tamu dapat menikmati kuliner khas Bandung. Hotel ini juga dilengkapi dengan fasilitas spa dan pusat kebugaran, tempat tamu dapat bersantai dan merawat diri setelah seharian beraktivitas.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Keunggulan lain dari The Gaia Hotel Bandung adalah pemandangan yang indah dari area rooftop yang menawarkan panorama kota Bandung. Tamu dapat menikmati suasana yang tenang sambil menikmati pemandangan yang memukau.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Dengan layanan yang ramah dan profesional, serta perhatian terhadap detail, The Gaia Hotel Bandung berusaha memberikan pengalaman menginap yang tak terlupakan bagi para tamunya. Hotel ini cocok untuk mereka yang mencari penginapan bergaya dan berkualitas di tengah kota Bandung.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Itulah deskripsi tentang The Gaia Hotel Bandung. Hotel ini menawarkan pengalaman menginap yang nyaman dan menarik dengan sentuhan desain yang kreatif dan layanan yang memuaskan.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Harga&lt;/strong&gt;: Rp. 2.382.000&lt;/div&gt;', '05292023_043048.jpeg', '-6.922836770984', '107.60868478620', 1, 1, NULL, '2023-05-29 16:30:48', '2023-05-29 16:32:34', NULL),
(4, 'b51cbaeb-8967-4e8e-a2c5-b54ed8ebcfce', 25, 'Candi Borobudur', '&lt;div&gt;Candi Borobudur adalah sebuah kompleks candi Buddha yang terletak di Magelang, Jawa Tengah, Indonesia. Candi ini merupakan salah satu warisan budaya dunia UNESCO dan menjadi salah satu tujuan wisata yang paling terkenal di Indonesia. Dibangun pada abad ke-8, Candi Borobudur merupakan salah satu keajaiban arsitektur dan seni dari masa lampau.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Candi Borobudur terdiri dari sembilan tingkat yang membentuk struktur piramida besar. Di atasnya terdapat stupa besar sebagai pusat perhatian, yang dikelilingi oleh 72 stupa kecil dengan patung Buddha di dalamnya. Dinding candi dihiasi oleh relief yang menggambarkan kisah kehidupan Buddha dan ajaran-ajarannya. Pemandangan dari atas Candi Borobudur menawarkan panorama yang indah dari lingkungan sekitarnya, termasuk pegunungan dan sawah yang hijau.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Untuk mengunjungi Candi Borobudur, Anda dapat membeli tiket masuk di lokasi. Harga tiket masuknya bervariasi tergantung pada kewarganegaraan Anda. Biasanya, tiket masuk untuk wisatawan domestik memiliki harga yang lebih rendah dibandingkan dengan wisatawan mancanegara. Namun, pastikan untuk memeriksa harga tiket terbaru sebelum Anda mengunjungi Candi Borobudur.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Selain tiket masuk, ada juga tiket sunrise yang memungkinkan Anda masuk lebih awal dan menyaksikan matahari terbit di atas Candi Borobudur. Pengalaman ini sangat populer di kalangan wisatawan, karena memberikan suasana yang magis dan indah.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Penting untuk diingat bahwa sebagai situs bersejarah dan suci, ada aturan-aturan tertentu yang harus diikuti oleh pengunjung. Misalnya, pengunjung diharapkan untuk mengenakan pakaian yang sopan dan menghormati tempat suci tersebut.&lt;/div&gt;&lt;div&gt;&lt;br&gt;Candi Borobudur adalah destinasi wisata yang menakjubkan dan bersejarah di Indonesia. Dengan arsitektur yang megah dan keindahan alam di sekitarnya, mengunjungi Candi Borobudur akan menjadi pengalaman yang tak terlupakan bagi setiap wisatawan.&lt;/div&gt;', '05292023_051050.jpg', '-7.547972426257', '110.20805385226', 1, 1, NULL, '2023-05-29 17:10:50', '2023-05-29 17:10:50', NULL),
(5, 'b785311a-2c38-4a62-9200-7ec4b4a7d83e', 25, 'Nusa Penida Bali', '                                        &lt;div&gt;&lt;strong&gt;Sejarah Singkat Nusa Penida&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;Nusa berarti “pulau” dan Penida berarti “pendeta” dalam bahasa Bali. Diterjemahkan berarti pulau pendeta dan tidak perlu menyebut pulau itu sebagai “Pulau Nusa Penida” – itu hanya akan mubazir!&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Pulau ini dikenal oleh penduduk lokal Bali sebagai pulau ilmu hitam. Jauh sebelum menjadi tempat wisata karena keindahan alamnya, Nusa Penida pernah diyakini oleh penduduk setempat dihuni oleh roh-roh gelap, dibuang ke pulau oleh para pendeta Bali. Namun, meski dengan konotasi negatif tersebut, Nusa Penida tetap menjadi destinasi religi yang penting. Ini karena kepercayaan spiritual Bali menentukan keseimbangan di alam semesta, di mana kebaikan dan kejahatan diperlukan.&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Saat ini, Nusa Penida lebih dikenal dengan Pantai Kelingking, Angel&#039;s Billabong, dan Broken Beach, tetapi Anda masih dapat mengunjungi pura di mana roh kegelapan disembah – dan dijauhkan. Saya akan menguraikan lebih lanjut tentang itu di bawah ini.&lt;br&gt;&lt;strong&gt;&lt;br&gt;Berapa hari yang harus saya habiskan di Nusa Penida?&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;Jika Anda ingin melihat seluruh Nusa Penida dan menikmati masa tinggal Anda secara perlahan, Anda membutuhkan &lt;strong&gt;2-3 hari&amp;nbsp;&lt;/strong&gt;di pulau itu.&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Namun jika Anda hanya memiliki waktu luang satu hari, &lt;strong&gt;perjalanan sehari&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;ke Nusa Penida dari Bali sangat bisa dilakukan. Anda bisa sampai ke Nusa Penida melalui speedboat dari Sanur di pagi hari dan kembali di sore hari. Saya pernah melakukan ini sebelumnya dan melihat bagian pulau yang bagus!&lt;br&gt;&lt;strong&gt;&lt;br&gt;Rincian biaya untuk perjalanan sehari ke Nusa Penida&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;Jika Anda ingin melakukan perjalanan DIY tanpa tur, berikut adalah perincian biaya yang komprehensif untuk membantu Anda memutuskan apakah itu sepadan:&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;Taksi ke Sanur&lt;/strong&gt;: Rp 75.000/mobil sekali jalan, tergantung tempat tinggal Anda&lt;/div&gt;&lt;div&gt;&lt;strong&gt;Tiket Kapal Ferry Pulang Pergi ke Nusa Penida&lt;/strong&gt;: Rp 300.000/orang (Rp 150.000/orang jika Anda orang Indonesia)&lt;br&gt;&lt;strong&gt;Transportasi di Nusa Penida&lt;/strong&gt;: Rp 75.000/sepeda atau, Rp 535.000/mobil&lt;br&gt;&lt;strong&gt;Penyewaan Snorkling&lt;/strong&gt;: Rp 50.000/orang&lt;br&gt;&lt;strong&gt;Makan Siang&lt;/strong&gt;: Rp 35.000/orang&lt;br&gt;&lt;strong&gt;Air&lt;/strong&gt;: Rp 25.000/orang&lt;br&gt;&lt;strong&gt;Taksi kembali ke hotel&lt;/strong&gt;: Rp 75.000/mobil sekali jalan, tergantung tempat tinggal Anda&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Seperti yang Anda lihat dari perincian biaya di atas, pembeda biaya utama adalah moda transportasi Anda di Nusa Penida.&lt;/div&gt;                                        ', '05302023_025408.webp', '-8.745960639907', '115.53499327887', 1, 1, NULL, '2023-05-30 14:54:08', '2023-06-02 21:46:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Pengguna') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `uid`, `name`, `email`, `password`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a9b47f0f-f30a-4c3a-bbac-78a3bf94a635', 'Ahmad Suherman', 'jhondoe@gmail.com', '$2y$10$gp2KqL6ttq.IMxX2v1r.0u60U9gEts1dYH6SJAEW7JKlnPyibkESS', 'Admin', '2023-05-18 05:15:50', '2023-05-18 05:15:50', NULL),
(23, 'd862120a-c091-4af7-a54e-cbc921c8a7e3', 'Ahmad Doe', 'ahmaddd@gmail.com', '$2y$10$TtqqCMNjRfSBIBA/uD5ODOJaBR0nuI9nnB7bJjldbm7dSqVm8OUUq', 'Pengguna', '2023-05-29 16:13:40', '2023-05-29 16:13:40', NULL),
(24, 'a160a62a-04b9-4986-8a45-6a2507498c38', 'SILVY PEA', 'silvialifia9d@gmail.com', '$2y$10$rPVPPmmpHPiM6q/IAh2.fel62JIeVOs88.qG5eZEPjGdpWL6bsQ.m', 'Pengguna', '2023-05-29 16:29:14', '2023-05-29 16:29:14', NULL),
(25, 'ae9e7d49-6f3e-4f43-a459-fb6fa21c32aa', 'unad', 'unad@gmail.com', '$2y$10$OIbnTtmDh8/36kp1rMROzuI71BaQPYoNgD5S8m3QIIu2ie.utyM/q', 'Pengguna', '2023-05-29 16:53:41', '2023-05-29 16:53:41', NULL),
(26, 'b97ee500-3967-4bcd-b46b-14d3e4a63de1', 'Irsan', 'irsan.febrian38@gmai.com', '$2y$10$OG55R.wRQ5DtlrnKr.siTudS/1eaVxeXHHxHm4bghExm/ap7mTgkm', 'Pengguna', '2023-05-30 15:37:42', '2023-05-30 15:37:42', NULL),
(27, 'e8bad4e3-2919-4770-ab64-44f1cd4b62ca', 'Narapati', 'nara@gmail.com', '$2y$10$9fdssjT109n01/3WHRxr8uwcQgVOZSmUeGXjVXUiVki6//vx5mdk2', 'Pengguna', '2023-05-30 20:22:36', '2023-05-30 20:22:36', NULL),
(28, 'c3b3778a-0e01-4054-9ca9-e0a0ebed4506', 'Sandi', 'sandiss432@gmail.com', '$2y$10$Cvo8n5.EzGiRk75I7X0cC.aQP5wsOWxMGG/4C.BeTVN4jxL/8ArJG', 'Pengguna', '2023-05-31 12:34:45', '2023-05-31 12:34:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_created_by_foreign` (`created_by`),
  ADD KEY `categories_updated_by_foreign` (`updated_by`),
  ADD KEY `categories_deleted_by_foreign` (`deleted_by`);

--
-- Indeks untuk tabel `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plants_category_id_foreign` (`category_id`),
  ADD KEY `plants_created_by_foreign` (`created_by`),
  ADD KEY `plants_updated_by_foreign` (`updated_by`),
  ADD KEY `plants_deleted_by_foreign` (`deleted_by`);

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
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `categories_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `categories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `plants_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `plants_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `plants_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `plants_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
