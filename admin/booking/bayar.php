<?php

include '../header2.php';
include '../../koneksi.php';
session_start();
if (empty($_SESSION['user'])) {
    echo '<script>alert("login dulu");window.location="index.php"</script>';
}
$kode_booking = $_GET['id'];
$query = "SELECT * FROM tbl_booking_212303 WHERE 212303_kode_booking = '$kode_booking'";
$hasil = mysqli_query($koneksi, $query);
$isi = mysqli_fetch_assoc($hasil);

$id_booking = $isi['212303_id_booking'];
$query2 = "SELECT * FROM tbl_pembayaran_212303 WHERE 212303_id_booking = '$id_booking'";
$hasil2 = mysqli_query($koneksi, $query2);
$isi2 = mysqli_fetch_assoc($hasil2);

?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5> Bukti Pembayaran</h5>
                </div>
                <div class="card-body">
                        <table class="table">
                            <tr>
                                <td><img src="../../images/<?= $isi2['212303_gambar']; ?>" alt="" width="100%"></td>
                            </tr>
                        </table>
                </div>
            </div>
            <br />
            <div class="card">

               
               
            </div>
        </div>


        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h5> Detail booking</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="proses.php?id=konfirmasi">
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
                                <td>Total Harga </td>
                                <td> :</td>
                                <td>Rp. <?php echo number_format($isi['212303_total_bayar']); ?></td>
                            </tr>
                            <tr>
                                <td>Status </td>
                                <td> :</td>
                                <td>
                                    <select class="form-control" name="status">
                                        <option <?php if ($isi['212303_konfirmasi'] == 'Sedang di proses') {
                                                    echo 'selected';
                                                } ?>>
                                            Sedang di proses
                                        </option>
                                        <option <?php if ($isi['212303_konfirmasi'] == 'Pembayaran di terima') {
                                                    echo 'selected';
                                                } ?>>
                                            Pembayaran di terima
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="id_booking" value="<?php echo $isi['212303_id_booking']; ?>">
                        <button type="submit" class="btn btn-primary float-right">
                            Ubah Status
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

<?php include '../footer.php'; ?>