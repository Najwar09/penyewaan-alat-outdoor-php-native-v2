<?php

include '../header2.php';
include '../../koneksi.php';

?>


<br>
<div class="container">
    <div class="card">
        <div class="card-header text-white bg-primary">
            <h4 class="card-title">
                Tambah Alat Outdoor
                <div class="float-right">
                    <a class="btn btn-warning" href="index.php" role="button">Kembali</a>
                </div>
            </h4>
        </div>
        <div class="card-body">
            <div class="container">
                <form method="post" action="proses.php?aksi=tambah" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-sm-6">
                        <div class="form-group row">
                                <label class="col-sm-3"><b>Nama</b></label>
                                <input type="text" class="form-control col-sm-9" name="nama" placeholder="Masukkan Nama Alat Outdoor">
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3"><b>Harga</b></label>
                                <input type="text" class="form-control col-sm-9" name="harga" placeholder="Isi Harga">
                            </div>

                        </div>

                        <div class="col-sm-6">

                            <div class="form-group row">
                                <label class="col-sm-3"><b>Deskripsi</b></label>
                                <input type="text" class="form-control col-sm-9" name="deskripsi" placeholder="Isi Deskripsi">
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3"><b>Stok</b></label>
                                <input type="number" class="form-control col-sm-9" name="stok" placeholder="Isi Stok">
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3"><b>Gambar</b></label>
                                <input type="file" accept="image/*" class="form-control col-sm-9" name="gambar" placeholder="Isi Gambar">

                            </div>
                        </div>
                    </div>
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
<?php include '../footer.php'; ?>