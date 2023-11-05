<?php

session_start();
require 'koneksi.php';
include 'header.php';
if (empty($_SESSION['USER'])) {
    echo '<script>alert("Harap Login");window.location="index.php"</script>';
}
$kode_booking = $_GET['id'];
$query = "SELECT * FROM tbl_booking_212303 WHERE 212303_kode_booking = '$kode_booking'";
$hasil = mysqli_query($koneksi, $query);
$isi = mysqli_fetch_assoc($hasil);

$id_alat = $isi['212303_id_alat'];
$query2 = "SELECT * FROM tbl_alat_212303 WHERE 212303_id_alat = '$id_alat'";
$hasil2 = mysqli_query($koneksi, $query2);
$isi2 = mysqli_fetch_assoc($hasil2);

?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">

                    <center>
                        <h3>Pembayaran Dapat Melalui :</h3>
                        <hr />
                        <p> BRI 2132131246 A/N Rental Dirga </p>
                    </center>

                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">

                    <!-- FORM NO REKENING DAN TOTAL TRANSFER PENYEWA -->
                    <form method="post" action="proses.php?id=konfirmasi" enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <td>Kode Booking </td>
                                <td> :</td>
                                <td><?php echo $isi['212303_kode_booking']; ?></td>
                            </tr>
                            <tr>
                                <td>Masukkan Bukti Pembayaran </td>
                                <td> :</td>
                                <td><input type="file" name="gambar" required class="form-control" accept="image/*"></td>
                            </tr>
                            <tr>
                                <td>Total yg Harus di Bayar </td>
                                <td> :</td>
                                <td>Rp. <?php echo number_format($isi['212303_total_bayar']); ?></td>
                            </tr>
                        </table>
                        <input type="hidden" name="id_booking" value="<?php echo $isi['212303_id_booking']; ?>">
                        <button type="submit" class="btn btn-primary float-right">Kirim</button>
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