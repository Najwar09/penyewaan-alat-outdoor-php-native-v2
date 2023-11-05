<?php
session_start();
include '../header2.php';
require '../../koneksi.php';

$tanggalAwal = $_POST['tanggal'];
$tanggalAkhir = $_POST['tanggal_kembali'];

$query ="SELECT * FROM tbl_booking_212303 WHERE 212303_tgl_sewa BETWEEN '$tanggalAwal' AND '$tanggalAkhir' ORDER BY 212303_tgl_sewa DESC";
$hasil = mysqli_query($koneksi,$query);

?>


<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-sm">
            <!--  -->
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Kode Booking</th>
                    <th>Nama </th>
                    <th>Tanggal Sewa </th>
                    <th>Tanggal Kembali </th>
                    <th>Total Harga</th>
                    <th>Konfirmasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($hasil as $isi) { ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?= $isi['212303_kode_booking']; ?></td>
                        <td><?= $isi['212303_nama']; ?></td>
                        <td><?= $isi['212303_tgl_sewa']; ?></td>
                        <td><?= $isi['212303_tgl_kmb']; ?></td>
                        <td>Rp. <?= number_format($isi['212303_total_bayar']); ?></td>
                        <td><?= $isi['212303_konfirmasi']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="bayar.php?id=<?= $isi['212303_kode_booking']; ?>" role="button">Detail</a>
                            <a class="btn btn-success" href="cetak.php?id=<?= $isi['212303_kode_booking']; ?>" role="button" target="_blank">Cetak</a>
                        </td>

                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
        <button class="btn btn-danger"><a href="../booking/booking.php" style="color: white;">Kembali</a></button>
        <button class="btn btn-success"><a href="../booking/cetaksemua.php?awal=<?= $tanggalAwal; ?>&akhir=<?= $tanggalAkhir; ?>" style="color: white;">Cetak Semua</a></button>
    </div>
</div>
</div>
</div>
<?php include '../footer.php'; ?>