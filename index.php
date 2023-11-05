<?php
include 'header.php';
require 'koneksi.php';

$query = "SELECT * FROM tbl_alat_212303 ORDER BY 212303_id_alat DESC";
$hasil = mysqli_query($koneksi, $query);


?>

<!-- GAMBAR DI HALAMAN UTAMAN -->
<img src="./images/bg.png" class="img-fluid w-100" alt="...">
</div>

<!-- menampilkan alat outdoor pada halamann utama -->
<div class="container">

    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row mt-3">
                    <?php
                    $no = 1;
                    foreach ($hasil as $isi) {
                    ?>
                        <!-- MENAMPILKAN DAFTAR ALAT OUTDOOR PADA HALAMAN BLOG -->
                        <div class="col-sm-4 my-5">
                            <div class="card">
                                <img src="images/<?php echo $isi['212303_gambar']; ?>" class="card-img-top" style="height:200px;object-fit:cover;">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="text-transform:uppercase;">
                                        <b><?= $isi['212303_nama']; ?></b>
                                    </li>
                                    <?php if ($isi['212303_status'] == 'Tersedia') { ?>
                                        <li class="list-group-item bg-primary text-white">
                                            <i class="fa fa-check"></i> Available
                                        </li>
                                    <?php } else { ?>
                                        <li class="list-group-item bg-danger text-white">
                                            <i class="fa fa-close"></i> Not Available
                                        </li>
                                    <?php } ?>
                                    <li class="list-group-item bg-dark text-white">
                                        <i class="fa fa-money"></i> Rp. <?php echo number_format($isi['212303_harga']); ?>/ day
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <center>
                                        <a href="booking.php?id=<?php echo $isi['212303_id_alat']; ?>" class="btn btn-success">Booking now!</a>
                                        <a href="detail.php?id=<?php echo $isi['212303_id_alat']; ?>" class="btn btn-info">Detail</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    <?php $no++;
                    } ?>
                </div>
            </div>
        </div>
    </div>

    <br>

    <br>

    <br>


</div>

<?php
include 'footer.php';
?>