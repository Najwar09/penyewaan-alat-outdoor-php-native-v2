-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 12.32
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
(28, 'tracking pole', 7000, 'alat ini membantu anda dalam melakukan perjalan outdoor dan fungsi lainnya dapat digunakan sebagai penyangga tiang bendera', 0, '1698744557.png'),
(31, 'tes', 15000, 'lorem', 0, '1700993756.png'),
(32, 'kllkllkl', 98989, 'oioio', 2, '1700993947.jpg'),
(33, 'lklkl', 8989, 'oioio', 4, '1700993973.jpg');

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
(11, '1699097317', 1, '28', 'wawan', 'abdesir', '48934983', '090909', 0, '2023-11-04', '2023-11-10', 42000, 'Sedang di proses', '2023-11-04'),
(12, '1699128876', 1, '27', 'najwar', 'najwar', '98998', '98989', 0, '2023-11-05', '2023-11-06', 30000, 'Pembayaran di terima', '2023-11-04'),
(13, '1700560616', 0, '28', 'oioiio', 'ioioioioioi', '90909', '090909', 0, '0009-09-09', '0009-09-09', 0, 'Belum Bayar', '2023-11-21'),
(14, '1700560715', 0, '27', 'najwar', 'sdfsdk', '98998', '98989', 0, '0001-11-11', '0022-02-22', 222240000, 'Belum Bayar', '2023-11-21'),
(15, '1700560866', 0, '22', 'wibu', 'wiby', '89889889899', '090909', 0, '0005-05-05', '0005-05-05', 0, 'Belum Bayar', '2023-11-21'),
(16, '1700560945', 0, '22', 'najwar', 'arnold', '89889889899', '43948934', 0, '0005-05-05', '0005-05-05', 0, 'Belum Bayar', '2023-11-21'),
(17, '1700561025', 0, '22', 'wawan', 'sdfsdk', '89889889899', '43948934', 0, '0006-06-06', '0006-06-06', 0, 'Belum Bayar', '2023-11-21'),
(18, '1700561837', 8, '22', 'wawan', 'wiby', '89889889899', '90329039', 0, '0003-03-07', '0003-03-31', 108000, 'Sedang di proses', '2023-11-21'),
(19, '1700578741', 11, '28', 'ioioioi', 'oioioi', '899898', 'ioioio', 0, '0006-06-06', '0006-06-06', 0, 'Belum Bayar', '2023-11-21'),
(20, '1700578750', 11, '28', 'ioioioi', 'oioioi', '899898', 'ioioio', 0, '0006-06-06', '0006-06-06', 0, 'Belum Bayar', '2023-11-21'),
(21, '1700578790', 11, '27', 'popop', 'popopop', '909', 'popopopp', 0, '2022-06-06', '2022-06-07', 30000, 'Belum Bayar', '2023-11-21'),
(22, '1700578795', 11, '27', 'popop', 'popopop', '909', 'popopopp', 0, '2022-06-06', '2022-06-07', 30000, 'Belum Bayar', '2023-11-21'),
(23, '1700578806', 11, '27', 'popop', 'popopop', '909', 'popopopp', 0, '2022-06-06', '2022-06-07', 30000, 'Belum Bayar', '2023-11-21'),
(24, '1700578852', 11, '21', 'najwr', 'fasdfkl', '290192', '09090', 0, '2023-11-21', '2023-11-24', 15000, 'Sedang di proses', '2023-11-21'),
(25, '1700996570', 8, '33', 'aldi', 'aldi', '9899898', '909090', 0, '0006-06-06', '0007-06-06', 3280985, 'Belum Bayar', '2023-11-26'),
(26, '1700996570', 8, '33', 'aldi', 'aldi', '9899898', '909090', 0, '0006-06-06', '0007-06-06', 3280985, 'Belum Bayar', '2023-11-26'),
(27, '1700996676', 8, '33', 'aldi', 'aldi', '89889889899', '898998', 0, '0005-05-05', '0006-06-06', 3568633, 'Belum Bayar', '2023-11-26'),
(28, '1700996676', 8, '33', 'aldi', 'aldi', '89889889899', '898998', 0, '0005-05-05', '0006-06-06', 3568633, 'Belum Bayar', '2023-11-26'),
(29, '1700996683', 8, '33', 'aldi', 'aldi', '89889889899', '898998', 0, '0005-05-05', '0006-06-06', 3568633, 'Belum Bayar', '2023-11-26'),
(30, '1700996683', 8, '33', 'aldi', 'aldi', '89889889899', '898998', 0, '0005-05-05', '0006-06-06', 3568633, 'Belum Bayar', '2023-11-26'),
(31, '1700996691', 8, '33', 'aldi', 'aldi', '89889889899', '898998', 0, '0005-05-05', '0006-06-06', 3568633, 'Belum Bayar', '2023-11-26'),
(32, '1700996691', 8, '33', 'aldi', 'aldi', '89889889899', '898998', 0, '0005-05-05', '0006-06-06', 3568633, 'Belum Bayar', '2023-11-26'),
(33, '1700996746', 8, '33', 'aldi', 'aldi', '89889889899', '99090', 0, '0006-06-06', '0007-07-07', 3559644, 'Belum Bayar', '2023-11-26'),
(34, '1700997115', 8, '33', 'maher', 'maher', '8989', '90099', 3, '2023-11-26', '2023-11-27', 8989, 'Pembayaran di terima', '2023-11-26');

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
(11, 'aldi', 'aldi', '$2y$10$zxHSwqmiElxXMmQFESK5tu4mZu5H6gj81UJIVeC0giG2NC3plL3SK', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran_212303`
--

CREATE TABLE `tbl_pembayaran_212303` (
  `212303_id_pembayaran` int(11) NOT NULL,
  `212303_id_booking` int(100) NOT NULL,
  `212303_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pembayaran_212303`
--

INSERT INTO `tbl_pembayaran_212303` (`212303_id_pembayaran`, `212303_id_booking`, `212303_gambar`) VALUES
(3, 11, '1699097348.jpg'),
(4, 12, '1699128901.jpg'),
(5, 18, '1700561915.png'),
(6, 24, '1700578875.png'),
(7, 34, '1700997188.png');

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
  MODIFY `212303_id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tbl_login_212303`
--
ALTER TABLE `tbl_login_212303`
  MODIFY `212303_id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran_212303`
--
ALTER TABLE `tbl_pembayaran_212303`
  MODIFY `212303_id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
