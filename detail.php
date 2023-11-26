<?php

include 'koneksi.php';
include 'header.php';

$id_alat = $_GET['id'];
$query = "SELECT * FROM tbl_alat_212303 WHERE 212303_id_alat = '$id_alat'";
$hasil = mysqli_query($koneksi, $query);
$isi = mysqli_fetch_assoc($hasil);
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <!-- MENAMPILKAN GAMBAR PADA HALAMAN DETAILS -->
            <img class="card-img-top w-100" style="object-fit:cover;" src="images/<?php echo $isi['212303_gambar']; ?>" alt="">
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <!-- MENAMPILKAN DESKRIPSI ALAT PADA HALAMAN DETAILS -->
                    <p class="card-text"><b>
                            Deskripsi :</b>
                        <?php echo $isi['212303_deskripsi']; ?>
                    </p>

                    <!-- JIKA STATUS==TERSEDIA MAKA AVAILABLE JIKA TIDAK MAKA NOT AVAILABLE -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="text-transform:uppercase;">
                            <b><?= $isi['212303_nama']; ?></b>
                        </li>
                        <?php if ($isi['212303_stok'] >= 1 ) { ?>
                            <li class="list-group-item bg-primary text-white">
                                <i class="fa fa-check"></i> Sisa <?= $isi['212303_stok']; ?> Pcs
                            </li>
                        <?php } else { ?>
                            <li class="list-group-item bg-danger text-white">
                                <i class="fa fa-close"></i> Kosong
                            </li>
                        <?php } ?>
                        <!-- MENAMPILKAN HARGA PADA HALAMAN DETAILS -->
                        <li class="list-group-item bg-dark text-white">
                            <i class="fa fa-money"></i> Rp. <?php echo number_format($isi['212303_harga']); ?>/ day
                        </li>
                    </ul>
                    <hr />
                    <!-- TOMBOL BOOKING NOW DAN BACK -->
                    <center>
                        <a href="booking.php?id=<?php echo $isi['212303_id_alat']; ?>" class="btn btn-success">Booking now!</a>
                        <a href="index.php" class="btn btn-info">Back</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>