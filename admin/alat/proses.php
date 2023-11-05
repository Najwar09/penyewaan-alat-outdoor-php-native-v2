<?php
include '../../koneksi.php';


// proses menambahkan alat dari admin
if ($_GET['aksi'] == 'tambah') {

    $dir = '../../images/';
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $temp = explode(".", $_FILES["gambar"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_path = $dir . basename($newfilename);
    $allowedImageType = array("image/gif",   "image/JPG",   "image/jpeg",   "image/pjpeg", "image/png",   "image/x-png");

    if ($_FILES['gambar']["error"] > 0) {
        echo '<script>alert("Error file");history.go(-1)</script>';
        exit();
    } elseif (round($_FILES['gambar']["size"] / 1024) > 4096) {
        echo '<script>alert("WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB !");history.go(-1)</script>';
        exit();
    } else {
        if (move_uploaded_file($tmp_name, $target_path)) {

            $harga = $_POST['harga'];
            $deskripsi = $_POST['deskripsi'];
            $status = $_POST['status'];
            $gambar = $newfilename;
            $nama = $_POST['nama'];

            $query = "INSERT INTO tbl_alat_212303 VALUES('','$nama','$harga','$deskripsi','$status','$gambar')";
            mysqli_query($koneksi, $query);

            echo '<script>alert("Data berhasil di tambahkan!");window.location="index.php";</script>';
        }
    }
}

// proses edit alat dari admin
if ($_GET['aksi'] == 'edit') {
    $dir = '../../images/';
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $temp = explode(".", $_FILES["gambar"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_path = $dir . basename($newfilename);
    $allowedImageType = array("image/gif",   "image/JPG",   "image/jpeg",   "image/pjpeg",   "image/png",   "image/x-png");

     $gambar = $_POST['gambar_lama'];

    $id_alat = $_POST['id_alat'];

    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];

    if ($_FILES['gambar']["size"] > 0) {
        if ($_FILES['gambar']["error"] > 0) {
            echo '<script>alert("Error file");history.go(-1)</script>';
            exit();
        } elseif (!in_array($_FILES['gambar']["type"], $allowedImageType)) {
            echo '<script>alert("You can only upload JPG, PNG and GIF file");history.go(-1)</script>';
            exit();
        } elseif (round($_FILES['gambar']["size"] / 1024) > 4096) {
            echo '<script>alert("WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB !");history.go(-1)</script>';
            exit();
        } else {
            if (move_uploaded_file($tmp_name, $target_path)) {
                if (file_exists('../../images/' . $gambar)) {
                    unlink('../../images/' . $gambar);
                }
                $gambar = $newfilename;
            } else {
                echo '<script>alert("Error file");history.go(-1)</script>';
                exit();
            }
        }
    } else {
        $gambar = $_POST['gambar_lama'];
    }

    
    $query = "UPDATE tbl_alat_212303 SET 212303_harga='$harga',212303_deskripsi='$deskripsi', 212303_status='$status', 212303_gambar='$gambar' WHERE 212303_id_alat = '$id_alat'";
    $hasil = mysqli_query($koneksi,$query);
    echo '<script>alert("sukses");window.location="index.php"</script>';

}


// proses hapus data barang
if ($_GET['aksi'] == 'hapus') {
    $id_alat = $_GET['id'];
    $gambar = $_GET['gambar'];

    unlink('../../images/' . $gambar);

    $query = "DELETE FROM tbl_alat_212303 WHERE 212303_id_alat='$id_alat'";
    mysqli_query($koneksi, $query);

    echo '<script>alert("Data berhasil di hapus!");window.location="index.php";</script>';
}










































?>
