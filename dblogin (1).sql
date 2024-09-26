-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2024 pada 09.22
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblogin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `image`, `name`, `description`, `youtube_link`) VALUES
(16, 'e0a8d0a2-c460-4121-8768-377d9da7e9a3.jpg', 'tonti ', 'tonti bara smkn 3 yogyakarta', 'https://www.youtube.com/embed/9VPZjc7Fduk'),
(17, 'pIra-2JP_400x400.jpeg', 'Pencinta alam', 'pencinta alam smk 3', 'https://www.youtube.com/embed/i7FQ5Ib92dM?si=j6yde3TtzR5aouCl '),
(18, 'images.png', 'Palang Merah Remaja', 'PMR WiRA KARYA BAKTI UNIT 57', 'https://www.youtube.com/embed/glr4B5QHdjI'),
(20, 'Basketball.png', 'basket', 'dsadasdasdasdasd', 'https://www.youtube.com/embed/reuU2zUsEPM?si=W7Um3HR0E3I5u8i4'),
(22, 'Admin.png', 'asadsad', 'asdasdasdasd', 'https://www.youtube.com/embed/32ZbGBkWoeo?si=uOopW4CCWiFoRAWl'),
(23, 'Basketball.png', 'sdasdsadas', 'dsadasdas', 'https://www.youtube.com/embed/32ZbGBkWoeo?si=uOopW4CCWiFoRAWl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_ekstrakurikuler`
--

CREATE TABLE `pendaftaran_ekstrakurikuler` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `ekstra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran_ekstrakurikuler`
--

INSERT INTO `pendaftaran_ekstrakurikuler` (`id`, `nama`, `kelas`, `ttl`, `nomor_hp`, `alamat`, `jk`, `ekstra`) VALUES
(20, 'fdfde', 'ffer', 'dfdafd', '34324', 'dasdasda', 'perempuan', 'basket'),
(22, 'mamang kuliner', 'xii tj', 'jogja', '0834028429357', 'Yogyakarata', 'laki-laki', 'karawitan'),
(23, 'mamang kuliner', 'xii tj', 'jogja', '0834028429357', 'Yogyakarata', 'laki-laki', 'karawitan'),
(24, 'Yoga', 'XII TJ', 'jogja', '523413221', 'jogja', 'laki-laki', 'drumband'),
(25, '1', '1', '1', '1', '1', 'laki-laki', 'rohkris'),
(26, '1', '1', '1', '1', '1', 'laki-laki', 'rohkris'),
(27, '1', '1', '1', '1', '1', 'laki-laki', 'rohkris'),
(28, '2', '2', '2', '2', '2', 'laki-laki', 'english club'),
(29, '2', '2', '2', '2', '2', 'laki-laki', 'english club'),
(30, '2', '2', '2', '2', '2', 'laki-laki', 'english club'),
(31, '2', '2', '2', '2', '2', 'laki-laki', 'english club'),
(32, 'mamang kuliner', 'xii tj', 'jogja', '1234455466', 'yogyakarta', 'laki-laki', 'robotik'),
(33, 'mamang kuliner', 'xii tj', 'jogja', '123456789009', 'ngasem', 'laki-laki', 'drumband'),
(35, 'dsadas', 'asdasd', 'sdsdaas', '2312312', 'dasdasd', 'perempuan', 'bulutangkis'),
(36, 'dsadas', 'asdasd', 'sdsdaas', '2312312', 'dasdasd', 'perempuan', 'bulutangkis'),
(37, 'dsadas', 'asdasd', 'sdsdaas', '2312312', 'dasdasd', 'perempuan', 'bulutangkis'),
(38, 'dsadas', 'asdasd', 'sdsdaas', '2312312', 'dasdasd', 'perempuan', 'bulutangkis'),
(39, 'dsadas', 'asdasd', 'sdsdaas', '2312312', 'dasdasd', 'perempuan', 'bulutangkis'),
(40, 'dsadas', 'asdasd', 'sdsdaas', '2312312', 'dasdasd', 'perempuan', 'bulutangkis'),
(41, 'Yoga', 'sdasd', 'dasdas', '31221', 'sdsadasda', 'laki-laki', 'bulutangkis'),
(42, 'dsadasdas', 'asdasdas', 'aswdasdas', '232132', 'dsdasdasdas', 'laki-laki', 'karawitan'),
(43, 'Yoga', 'xii tj', 'jogja', '13212321312', 'jogja', 'laki-laki', 'drumband');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` enum('user','admin','pengunjung') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `nama_lengkap`, `password`, `level`) VALUES
(28, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(45, 'sada', 'dsaas', '202cb962ac59075b964b07152d234b70', 'user'),
(46, 'dasdsa', 'd1322', '202cb962ac59075b964b07152d234b70', 'user'),
(47, 'budi', 'budirman', '202cb962ac59075b964b07152d234b70', 'user'),
(48, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran_ekstrakurikuler`
--
ALTER TABLE `pendaftaran_ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_ekstrakurikuler`
--
ALTER TABLE `pendaftaran_ekstrakurikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
