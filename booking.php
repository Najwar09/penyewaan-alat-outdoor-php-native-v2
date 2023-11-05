<?php

require 'koneksi.php';
include 'header.php';

if (empty($_SESSION['user'])) {
    echo '<script>alert("Harap login !");window.location="index.php"</script>';
  }


$id_alat = $_GET['id'];
$query = "SELECT * FROM tbl_alat_212303 WHERE 212303_id_alat = '$id_alat'";
$hasil = mysqli_query($koneksi, $query);
$isi = mysqli_fetch_assoc($hasil);
?>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">

            <!-- MENAMPILKAN GAMBAR BESERTA DETAILSNYA PADA HALAMAN BOOKING -->
            <div class="card">
                <img src="images/<?php echo $isi['212303_gambar']; ?>" class="card-img-top" style="height:200px;">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="text-transform:uppercase;">
                        <b><?= $isi['212303_nama']; ?></b>
                    </li>
                    <li class="list-group-item bg-dark text-white">
                        <i class="fa fa-money"></i> Rp. <?php echo number_format($isi['212303_harga']); ?>/ day
                    </li>
                </ul>
            </div>
        </div>


        <!-- FORM UNTUK MENGINPUT DATA PENYEWA ALAT OUTDOOR PADA HALAMAN BOOKING -->
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="proses.php?id=booking">
                        <div class="form-group">
                            <label for="">KTP</label>
                            <input type="text" name="ktp" id="" required class="form-control" placeholder="KTP / NIK Anda">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="" required class="form-control" placeholder="Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" id="" required class="form-control" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" name="no_tlp" id="" required class="form-control" placeholder="Telepon">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Sewa</label>
                            <input type="date" name="tanggal" id="" required class="form-control" placeholder="Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_kembali" id="" required class="form-control" placeholder="Nama Anda">
                        </div>

                        <!-- <input type="hidden" value="<?php echo $_SESSION['USER']['id_login']; ?>" name="id_login"> -->
                        <input type="hidden" value="<?php echo $isi['212303_id_alat']; ?>" name="id_alat">
                        <input type="hidden" value="<?php echo $isi['212303_harga']; ?>" name="total_harga">
                        <hr />
                        <?php if ($isi['212303_status'] == 'Tersedia') { ?>
                            <button type="submit" class="btn btn-primary float-right">Booking Now</button>
                        <?php } else { ?>
                            <button type="submit" class="btn btn-danger float-right" disabled>Booking Now</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<br>

<br>


<?php include 'footer.php'; ?>