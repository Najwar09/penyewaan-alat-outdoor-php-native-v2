<?php

require 'koneksi.php';
include 'header.php';

if (empty($_SESSION['user'])) {
    echo '<script>alert("Harap login !");window.location="index.php"</script>';
}


$id_user = $_SESSION['user']['212303_id_login'];
$query = "SELECT
bk.212303_kode_booking,
bk.212303_nama AS 212303_nama1,
al.212303_nama,
bk.212303_jml_sewa,
bk.212303_total_bayar,
bk.212303_konfirmasi,
pb.212303_gambar
FROM
tbl_booking_212303 AS bk
INNER JOIN
tbl_login_212303 AS lg ON bk.212303_id_login = lg.212303_id_login
INNER JOIN
tbl_alat_212303 AS al ON bk.212303_id_alat = al.212303_id_alat
INNER JOIN
tbl_pembayaran_212303 AS pb ON bk.212303_id_booking = pb.212303_id_booking
WHERE
lg.212303_id_login = $id_user";

$hasil = mysqli_query($koneksi, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <table class="table">
            <thead>
                <th>No</th>
                <th>Kode Booking</th>
                <th>Nama</th>
                <th>Alat</th>
                <th>Jumlah</th>
                <th>Total Bayar</th>
                <th>Konfirmasi</th>
                <th>Gambar</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($hasil as $isi) {
                ?>
                    <tr class="table-active">
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $isi['212303_kode_booking']; ?></td>
                        <td><?= $isi['212303_nama1']; ?></td>
                        <td><?= $isi['212303_nama']; ?></td>
                        <td><?= $isi['212303_jml_sewa']; ?></td>
                        <td>Rp. <?= number_format($isi['212303_total_bayar']); ?></td>
                        <td><?= $isi['212303_konfirmasi']; ?></td>
                        <td><img src="images/<?= $isi['212303_gambar']; ?>" alt="" width="200px"></td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>

</body>

</html>







<?php include 'footer.php'; ?>