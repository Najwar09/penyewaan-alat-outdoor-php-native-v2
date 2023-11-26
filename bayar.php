<?php

if (empty($_SESSION['user'])) {
    echo '<script>alert("Harap login !");"</script>';
  }
require 'koneksi.php';
include 'header.php';

$kode_booking = $_GET['id'];
$query = "SELECT * FROM tbl_booking_212303 WHERE 212303_kode_booking = '$kode_booking'";
$hasil = mysqli_query($koneksi,$query);
$isi = mysqli_fetch_assoc($hasil);

$id_alat = $isi['212303_id_alat'];
$query2 = "SELECT * FROM tbl_alat_212303 WHERE 212303_id_alat = '$id_alat'";
$hasil2 = mysqli_query($koneksi,$query2);
$isi2 = mysqli_fetch_assoc($hasil2);

$unik  = random_int(100, 999);

?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">

            <!-- INFORMASI MENGENAI REKENING PEMBAYARAN -->
            <div class="card">
                <div class="card-body text-center">
                    <h5>Pembayaran Dapat Melalui :</h5>
                    <hr />
                    <p>BRI / 4389483984.AHMAD</p>
                </div>
            </div>
            <br />


            <!-- DETAIL BARANG DI HALAMAN BAYAR -->
            <div class="card">
                <img src="images/<?php echo $isi2['212303_gambar']; ?>" class="card-img-top" style="height:200px;">

                <ul class="list-group list-group-flush">

                    <?php if ($isi2['212303_stok'] >= 1) { ?>

                        <li class="list-group-item bg-primary text-white">
                            <i class="fa fa-check"></i> Sisa <?= $isi2['212303_stok']; ?> Pcs
                        </li>

                    <?php } else { ?>

                        <li class="list-group-item bg-danger text-white">
                            <i class="fa fa-close"></i> Kosong
                        </li>

                    <?php } ?>


                    <li class="list-group-item bg-dark text-white">
                        <i class="fa fa-money"></i> Rp. <?php echo number_format($isi2['212303_harga']); ?>/ day
                    </li>
                </ul>
            </div>
        </div>

        <!-- DATA BOOKING -->
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Kode Booking </td>
                            <td> :</td>
                            <td><?php echo $isi['212303_kode_booking']; ?></td>
                        </tr>
                        <tr>
                            <td>KTP </td>
                            <td> :</td>
                            <td><?php echo $isi['212303_ktp']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama </td>
                            <td> :</td>
                            <td><?php echo $isi['212303_nama']; ?></td>
                        </tr>
                        <tr>
                            <td>telepon </td>
                            <td> :</td>
                            <td><?php echo $isi['212303_no_telp']; ?></td>
                        </tr>
                        <tr>
                            <td>Sewa Stok </td>
                            <td> :</td>
                            <td><?php echo $isi['212303_jml_sewa']; ?> Pcs</td>
                        </tr>
                        <tr>
                            <td>Tanggal Sewa </td>
                            <td> :</td>
                            <td><?php echo $isi['212303_tgl_sewa']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Kembali </td>
                            <td> :</td>
                            <td><?php echo $isi['212303_tgl_kmb']; ?></td>
                        </tr>
                        <tr>
                            <td>Total Harga </td>
                            <td> :</td>
                            <td>Rp. <?php echo number_format($isi['212303_total_bayar']); ?></td>
                        </tr>
                        <tr>
                            <td>Status </td>
                            <td> :</td>
                            <td><?php echo $isi['212303_konfirmasi']; ?></td>
                        </tr>
                    </table>

                    <?php if ($isi['212303_konfirmasi'] == 'Belum Bayar') { ?>
                        <a href="konfirmasi.php?id=<?php echo $kode_booking; ?>" class="btn btn-primary float-right">Konfirmasi Pembayaran</a>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

<?php include 'footer.php'; ?>