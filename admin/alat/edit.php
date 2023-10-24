<?php
include '../header2.php';
include '../../koneksi.php';
$id_alat = $_GET['id'];
$query = "SELECT * FROM tbl_alat_212303 WHERE 212303_id_alat = '$id_alat'";
$hasil = mysqli_query($koneksi, $query);
$isi = mysqli_fetch_assoc($hasil);
?>

<br>
<div class="container">
    <div class="card">
        <div class="card-header text-white bg-primary">
            <h4 class="card-title">
                Edit Alat Outdoor
                <div class="float-right">
                    <a class="btn btn-warning" href="index.php" role="button">Kembali</a>
                </div>
            </h4>
        </div>
        <div class="card-body">
            <div class="container">
                <form method="post" action="proses.php?aksi=edit&id=<?= $id_alat; ?>" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-sm-6">



                            <div class="form-group row">
                                <label class="col-sm-3">Harga</label>
                                <input type="text" class="form-control col-sm-9" name="harga" placeholder="Isi Harga" value="<?= $isi['212303_harga']; ?>">
                            </div>

                        </div>

                        <div class="col-sm-6">

                            <div class="form-group row">
                                <label class="col-sm-3">Deskripsi</label>
                                <input type="text" class="form-control col-sm-9" name="deskripsi" placeholder="Isi Deskripsi" value="<?= $isi['212303_deskripsi']; ?>">
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3">Status</label>
                                <select class="form-control col-sm-9" name="status">
                                    <option <?php if ($isi['212303_status'] == 'Tersedia') {
                                                echo 'selected';
                                            } ?>>Tersedia</option>
                                    <option <?php if ($isi['212303_status'] == 'Tidak Tersedia') {
                                                echo 'selected';
                                            } ?>>Tidak Tersedia</option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3">Gambar</label>
                                <input type="file" accept="image/*" class="form-control col-sm-9" name="gambar" placeholder="Isi Gambar">

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3">Penampakan</label>
                                <img src="../../images/<?php echo $isi['212303_gambar']; ?>" class="img-fluid" style="width:200px;">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $isi['212303_gambar']; ?>" name="gambar_lama">
                    <input type="hidden" value="<?= $isi['212303_id_alat']; ?>" name="id_alat">


                    <hr>
                    <div class="float-right">
                        <button class="btn btn-primary" role="button" type="submit">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include '../footer2.php';
?>