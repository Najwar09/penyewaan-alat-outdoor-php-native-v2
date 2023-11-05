<?php

require '../../koneksi.php';
session_start();
if (empty($_SESSION['USER'])) {
    echo '<script>alert("login dulu");window.location="index.php"</script>';
}
$kode_booking = $_GET['id'];
$query = "SELECT * FROM tbl_booking_212303 WHERE 212303_kode_booking = '$kode_booking'";
$hasil = mysqli_query($koneksi,$query);
$isi = mysqli_fetch_assoc($hasil);

$id_booking = $isi['212303_id_booking'];
$query2 = "SELECT * FROM tbl_pembayaran_212303 WHERE 212303_id_booking = '$id_booking'";
$hasil2 = mysqli_query($koneksi,$query2);
$isi2 = mysqli_fetch_assoc($hasil2);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <br>
    <br>
    <center>
        <h2>LAPORAN TRANSAKSI</h2>
    </center>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Booking</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Sewa</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Konfirmasi</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $isi['212303_kode_booking']; ?></td>
                <td><?php echo $isi['212303_nama']; ?></td>
                <td><?php echo $isi['212303_tgl_sewa']; ?></td>
                <td><?php echo $isi['212303_tgl_kmb']; ?></td>
                <td>Rp. <?= number_format($isi['212303_total_bayar']); ?></td>
                <td><?php echo $isi['212303_konfirmasi']; ?></td>
            </tr>

        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>
<br>
<br>
<br>
<br>
<br>