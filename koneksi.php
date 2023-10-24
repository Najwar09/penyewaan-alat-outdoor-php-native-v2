<?php
// Konfigurasi koneksi database
$host = 'localhost';  // Lokasi server database (biasanya localhost)
$username = 'root';  // Nama pengguna database
$password = '';      // Kata sandi pengguna database (biasanya kosong)
$database = 'db_outdoor_212303';  // Nama database yang ingin Anda akses

// Buat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Jika koneksi berhasil, Anda dapat menjalankan query database di sini.
?>
