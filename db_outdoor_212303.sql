-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 14.01
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_outdoor_212303`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alat_212303`
--

CREATE TABLE `tbl_alat_212303` (
  `212303_id_alat` int(11) NOT NULL,
  `212303_nama` varchar(50) NOT NULL,
  `212303_harga` int(50) NOT NULL,
  `212303_deskripsi` varchar(255) NOT NULL,
  `212303_stok` int(15) NOT NULL,
  `212303_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_alat_212303`
--

INSERT INTO `tbl_alat_212303` (`212303_id_alat`, `212303_nama`, `212303_harga`, `212303_deskripsi`, `212303_stok`, `212303_gambar`) VALUES
(21, 'hammock', 5000, 'hammock ini maksimal beratnya sampai 200kg', 0, '1698743768.jfif'),
(22, 'headlamp', 4500, 'maksimal menerangi 500 lux', 0, '1698743952.jfif'),
(23, 'kompor bunga', 15000, 'dapat memasak di berbagai kondisi dan cuaca', 0, '1698744010.jfif'),
(24, 'lampu tenda', 6000, 'dapat digunakan untuk aktivitas selama di dalam tenda', 0, '1698744258.jfif'),
(25, 'matras', 12000, 'membuat anda tidur selama camping menjadi nyaman dan enak tanpa badan terasa sakit', 0, '1698744322.jfif'),
(26, 'sleeping bag', 9000, 'menghangatkan badan ketika cuasa ekstrim di outdoor', 0, '1698744435.jfif'),
(27, 'tenda double layer', 30000, 'tenda dengan double layer yang membuat dapat tetap bertahan walaupun di cuaca yang ekstrim', 0, '1698744497.png'),
(28, 'tracking pole', 7000, 'alat ini membantu anda dalam melakukan perjalan outdoor dan fungsi lainnya dapat digunakan sebagai penyangga tiang bendera', 33, '1698744557.png'),
(31, 'tes', 15000, 'lorem', 1, '1700993756.png'),
(32, 'kllkllkl', 98989, 'oioio', 2, '1700993947.jpg'),
(33, 'lklkl', 8989, 'oioio', 0, '1700993973.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_booking_212303`
--

CREATE TABLE `tbl_booking_212303` (
  `212303_id_booking` int(11) NOT NULL,
  `212303_kode_booking` varchar(25) NOT NULL,
  `212303_id_login` int(50) NOT NULL,
  `212303_id_alat` varchar(50) NOT NULL,
  `212303_nama` varchar(50) NOT NULL,
  `212303_alamat` varchar(100) NOT NULL,
  `212303_ktp` varchar(20) NOT NULL,
  `212303_no_telp` varchar(20) NOT NULL,
  `212303_jml_sewa` int(15) NOT NULL,
  `212303_tgl_sewa` date NOT NULL,
  `212303_tgl_kmb` date NOT NULL,
  `212303_total_bayar` int(100) NOT NULL,
  `212303_konfirmasi` varchar(50) NOT NULL,
  `212303_tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_booking_212303`
--

INSERT INTO `tbl_booking_212303` (`212303_id_booking`, `212303_kode_booking`, `212303_id_login`, `212303_id_alat`, `212303_nama`, `212303_alamat`, `212303_ktp`, `212303_no_telp`, `212303_jml_sewa`, `212303_tgl_sewa`, `212303_tgl_kmb`, `212303_total_bayar`, `212303_konfirmasi`, `212303_tgl_input`) VALUES
(45, '1701860529', 8, '31', 'najwar', 'cendrawasih', 'najwar', '9898', 9, '2023-07-10', '2024-01-06', 24300000, 'Sedang di proses', '2023-12-06'),
(46, '1701866475', 8, '28', 'aldi', 'arnold', '998989', '090909', 9, '2023-03-13', '2023-12-30', 18396000, 'Sedang di proses', '2023-12-06'),
(47, '1701866563', 12, '33', 'wawan', 'arnold', '98998', '43948934', 4, '2023-12-01', '2023-12-28', 970812, 'Sedang di proses', '2023-12-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laporan_212303`
--

CREATE TABLE `tbl_laporan_212303` (
  `212303_id_alat` int(50) NOT NULL,
  `212303_id_pembayaran` int(50) NOT NULL,
  `212303_namaalat` varchar(50) NOT NULL,
  `212303_jumlahalat` int(50) NOT NULL,
  `212303_harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login_212303`
--

CREATE TABLE `tbl_login_212303` (
  `212303_id_login` int(11) NOT NULL,
  `212303_nama_pengguna` varchar(50) NOT NULL,
  `212303_username` varchar(30) NOT NULL,
  `212303_password` varchar(255) NOT NULL,
  `212303_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_login_212303`
--

INSERT INTO `tbl_login_212303` (`212303_id_login`, `212303_nama_pengguna`, `212303_username`, `212303_password`, `212303_level`) VALUES
(8, 'najwar', 'najwar', '$2y$10$0UA8wi1L/Bc.8Kk3TMUHYOjiygQT2eGzxDQhk1JgS6MZAOensT94W', 'user'),
(9, 'admin', 'admin', '$2y$10$iX4yl2uJndA0UFUwSdeVYOiA.gVjAd4tuuTH5nWoC29ZBfmqPzdsW', 'admin'),
(10, 'wahyu', 'wahyu', '$2y$10$pH4DdIAhdVV9Im97jTtlEud2KvQsu6lPX9LdIWlEh264XsfUggTv2', 'user'),
(11, 'aldi', 'aldi', '$2y$10$zxHSwqmiElxXMmQFESK5tu4mZu5H6gj81UJIVeC0giG2NC3plL3SK', 'user'),
(12, 'wawan', 'wawan', '$2y$10$SVlrr2kOzokOH7lmIIqG8.a0TogIBkwvNH3tazJeOjqhGzg4MO3ES', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran_212303`
--

CREATE TABLE `tbl_pembayaran_212303` (
  `212303_id_pembayaran` int(11) NOT NULL,
  `212303_id_login` int(20) NOT NULL,
  `212303_id_booking` int(100) NOT NULL,
  `212303_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pembayaran_212303`
--

INSERT INTO `tbl_pembayaran_212303` (`212303_id_pembayaran`, `212303_id_login`, `212303_id_booking`, `212303_gambar`) VALUES
(13, 8, 45, '1701860547.jfif'),
(14, 8, 46, '1701866506.jpg'),
(15, 12, 47, '1701866577.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_alat_212303`
--
ALTER TABLE `tbl_alat_212303`
  ADD PRIMARY KEY (`212303_id_alat`);

--
-- Indeks untuk tabel `tbl_booking_212303`
--
ALTER TABLE `tbl_booking_212303`
  ADD PRIMARY KEY (`212303_id_booking`);

--
-- Indeks untuk tabel `tbl_laporan_212303`
--
ALTER TABLE `tbl_laporan_212303`
  ADD PRIMARY KEY (`212303_id_alat`),
  ADD UNIQUE KEY `212303_id_pembayaran` (`212303_id_pembayaran`);

--
-- Indeks untuk tabel `tbl_login_212303`
--
ALTER TABLE `tbl_login_212303`
  ADD PRIMARY KEY (`212303_id_login`);

--
-- Indeks untuk tabel `tbl_pembayaran_212303`
--
ALTER TABLE `tbl_pembayaran_212303`
  ADD PRIMARY KEY (`212303_id_pembayaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_alat_212303`
--
ALTER TABLE `tbl_alat_212303`
  MODIFY `212303_id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_booking_212303`
--
ALTER TABLE `tbl_booking_212303`
  MODIFY `212303_id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `tbl_login_212303`
--
ALTER TABLE `tbl_login_212303`
  MODIFY `212303_id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran_212303`
--
ALTER TABLE `tbl_pembayaran_212303`
  MODIFY `212303_id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_laporan_212303`
--
ALTER TABLE `tbl_laporan_212303`
  ADD CONSTRAINT `tbl_laporan_212303_ibfk_1` FOREIGN KEY (`212303_id_pembayaran`) REFERENCES `tbl_pembayaran_212303` (`212303_id_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
