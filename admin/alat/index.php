<?php
include '../header2.php';
include '../../koneksi.php';
?>

<br>
<div class="container">
    <div class="card">
        <div class="card-header text-white bg-primary">
            <h4 class="card-title">
                Daftar Alat
                <div class="float-right">
                    <a class="btn btn-success" href="tambah.php" role="button">Tambah</a>
                </div>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM tbl_alat_212303 ORDER BY 212303_id_alat DESC";
                        $hasil = mysqli_query($koneksi,$query);
                        $no = 1;

                        foreach ($hasil as $isi) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><img src="../../images/<?= $isi['212303_gambar']; ?>" class="img-fluid" style="width:200px;"></td>
                                <td><?php echo $isi['212303_nama']; ?></td>
                                <td><?php echo $isi['212303_harga']; ?></td>
                                <td><?php echo $isi['212303_stok']; ?></td>
                                <td><?php echo $isi['212303_deskripsi']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="edit.php?id=<?php echo $isi['212303_id_alat']; ?>" role="button">Edit</a>
                                    <a class="btn btn-danger  btn-sm" href="proses.php?aksi=hapus&id=<?= $isi['212303_id_alat']; ?>&gambar=<?= $isi['212303_gambar']; ?>" role="button">Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>








<?php
include '../footer2.php';
?>