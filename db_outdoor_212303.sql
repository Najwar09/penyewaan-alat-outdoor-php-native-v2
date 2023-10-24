-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2023 pada 04.20
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
  `212303_harga` int(255) NOT NULL,
  `212303_deskripsi` varchar(255) NOT NULL,
  `212303_status` varchar(255) NOT NULL,
  `212303_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_booking_212303`
--

CREATE TABLE `tbl_booking_212303` (
  `212303_id_booking` int(11) NOT NULL,
  `212303_kode_booking` varchar(255) NOT NULL,
  `212303_id_login` int(11) NOT NULL,
  `212303_id_alat` int(11) NOT NULL,
  `212303_ktp` varchar(255) NOT NULL,
  `212303_nama` varchar(255) NOT NULL,
  `212303_alamat` varchar(255) NOT NULL,
  `212303_no_tlp` varchar(15) NOT NULL,
  `212303_tanggal` varchar(255) NOT NULL,
  `212303_tanggal_kembali` varchar(255) NOT NULL,
  `212303_total_harga` int(11) NOT NULL,
  `212303_konfirmasi_pembayaran` varchar(255) NOT NULL,
  `212303_tgl_input` varchar(255) NOT NULL,
  `212303_id_pengembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_infoweb_212303`
--

CREATE TABLE `tbl_infoweb_212303` (
  `212303_id` int(11) NOT NULL,
  `212303_nama_rental` varchar(255) DEFAULT NULL,
  `212303_telp` varchar(15) DEFAULT NULL,
  `212303_alamat` text DEFAULT NULL,
  `212303_email` varchar(255) DEFAULT NULL,
  `212303_no_rek` text DEFAULT NULL,
  `212303_updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_infoweb_212303`
--

INSERT INTO `tbl_infoweb_212303` (`212303_id`, `212303_nama_rental`, `212303_telp`, `212303_alamat`, `212303_email`, `212303_no_rek`, `212303_updated_at`) VALUES
(1, 'Rental Alat Outdoor', '1234564', 'xxxxxxxxxxxx', 'rantal@gmail.com', 'BRI A/N Ms.Mutiara 123123213123', '2022-01-24 04:57:29');

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
  `212303_nama_pengguna` varchar(255) NOT NULL,
  `212303_username` varchar(255) NOT NULL,
  `212303_password` varchar(255) NOT NULL,
  `212303_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_login_212303`
--

INSERT INTO `tbl_login_212303` (`212303_id_login`, `212303_nama_pengguna`, `212303_username`, `212303_password`, `212303_level`) VALUES
(6, 'root', 'fadfads', '202018_mycak', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran_212303`
--

CREATE TABLE `tbl_pembayaran_212303` (
  `212303_id_pembayaran` int(11) NOT NULL,
  `212303_id_booking` int(255) NOT NULL,
  `212303_no_rekening` int(255) NOT NULL,
  `212303_nama_rekening` varchar(255) NOT NULL,
  `212303_nominal` int(255) NOT NULL,
  `212303_tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  ADD PRIMARY KEY (`212303_id_booking`),
  ADD UNIQUE KEY `212303_id_login` (`212303_id_login`),
  ADD UNIQUE KEY `212303_id_alat` (`212303_id_alat`),
  ADD UNIQUE KEY `212303_id_pengembalian` (`212303_id_pengembalian`);

--
-- Indeks untuk tabel `tbl_infoweb_212303`
--
ALTER TABLE `tbl_infoweb_212303`
  ADD PRIMARY KEY (`212303_id`);

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
  ADD PRIMARY KEY (`212303_id_pembayaran`),
  ADD UNIQUE KEY `212303_id_booking` (`212303_id_booking`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_alat_212303`
--
ALTER TABLE `tbl_alat_212303`
  MODIFY `212303_id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_booking_212303`
--
ALTER TABLE `tbl_booking_212303`
  MODIFY `212303_id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_login_212303`
--
ALTER TABLE `tbl_login_212303`
  MODIFY `212303_id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran_212303`
--
ALTER TABLE `tbl_pembayaran_212303`
  MODIFY `212303_id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_booking_212303`
--
ALTER TABLE `tbl_booking_212303`
  ADD CONSTRAINT `tbl_booking_212303_ibfk_1` FOREIGN KEY (`212303_id_login`) REFERENCES `tbl_login_212303` (`212303_id_login`),
  ADD CONSTRAINT `tbl_booking_212303_ibfk_2` FOREIGN KEY (`212303_id_alat`) REFERENCES `tbl_alat_212303` (`212303_id_alat`),
  ADD CONSTRAINT `tbl_booking_212303_ibfk_3` FOREIGN KEY (`212303_id_pengembalian`) REFERENCES `penyewaan-alat-outdoor-v2`.`tbl_pengembalian_212303` (`212303_id_pengembalian`);

--
-- Ketidakleluasaan untuk tabel `tbl_laporan_212303`
--
ALTER TABLE `tbl_laporan_212303`
  ADD CONSTRAINT `tbl_laporan_212303_ibfk_1` FOREIGN KEY (`212303_id_pembayaran`) REFERENCES `tbl_pembayaran_212303` (`212303_id_pembayaran`);

--
-- Ketidakleluasaan untuk tabel `tbl_pembayaran_212303`
--
ALTER TABLE `tbl_pembayaran_212303`
  ADD CONSTRAINT `tbl_pembayaran_212303_ibfk_1` FOREIGN KEY (`212303_id_booking`) REFERENCES `tbl_booking_212303` (`212303_id_booking`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
