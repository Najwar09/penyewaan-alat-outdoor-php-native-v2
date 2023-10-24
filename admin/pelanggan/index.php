<?php
include '../header2.php';
include '../../koneksi.php';
?>

<br>
<div class="container">
    <div class="card">
        <div class="card-header text-white bg-primary">
            <h5 class="card-title pt-2">
                Pelanggan
            </h5>
        </div>

        <!-- MENAMPILKAN DAFTAR USER YANG TELAH DAFTAR -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = "SELECT * FROM tbl_login_212303 WHERE 212303_level = 'user' ORDER BY 212303_id_login DESC";
                        $hasil = mysqli_query($koneksi,$query);
                        foreach ($hasil as $isi) {
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['212303_nama_pengguna']; ?></td>
                                <td><?= $isi['212303_username']; ?></td>
                               
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>











<?php include '../footer2.php'; ?>