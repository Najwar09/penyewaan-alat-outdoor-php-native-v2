<?php
include 'koneksi.php';


// registrasi
if ($_GET['id'] == 'registrasi') {

    if (isset($_POST['save'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $pass = mysqli_real_escape_string($koneksi, $_POST['pass']);
        $level = "user";

        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $cek = "SELECT 212303_username FROM tbl_login_212303 WHERE 212303_username = '$username'";
        $akhir = mysqli_query($koneksi, $cek);
        if (mysqli_fetch_assoc($akhir)) {
            echo '<script>alert("username sudah ada!");history.back();</script>';
        } else {
            $query = "INSERT INTO tbl_login_212303 VALUES('','$nama','$username','$pass','$level')";
            mysqli_query($koneksi, $query);
            if (mysqli_affected_rows($koneksi) > 0) {
                echo '<script>alert("berhasil registrasi");history.back();</script>';
            } else {
                echo '<script>alert("gagal registrasi");history.back();</script>';
            }
        }
    }
}

// login
if ($_GET['id'] == 'login') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM tbl_login_212303 WHERE 212303_username = '$user'";
    $hasil = mysqli_query($koneksi, $query);
    $isi = mysqli_fetch_assoc($hasil);

    if (mysqli_num_rows($hasil) == 1) {

        if (password_verify($pass, $isi['212303_password'])) {
            session_start();
            // membuat session user
            $_SESSION['user'] = $isi;
            if ($isi['212303_level'] == 'admin') {
                echo '<script>alert("Login Sukses");window.location="admin/index.php";</script>';
            } else {
                echo '<script>alert("Login Sukses!");window.location="index.php";</script>';
            }
        } else {

            echo '<script>alert("gagal login!");window.location="index.php";</script>';
        }
    } else {
        echo '<script>alert("gagal login!");window.location="index.php";</script>';
    }
}



// booking
if ($_GET['id'] == 'booking') {


    $tanggalAwal = $_POST['tanggal'];
    $tanggalAkhir = $_POST['tanggal_kembali'];

    $dateAwal = new DateTime($tanggalAwal);
    $dateAkhir = new DateTime($tanggalAkhir);

    $selisih = $dateAwal->diff($dateAkhir)->format("%a");


    $total = $_POST['total_harga'] * $selisih;
    $total_harga = $total * $_POST['jml_sewa'];

    $kode_booking = time();
    $id_login = $_POST['id_login'];
    $id_alat = $_POST['id_alat'];
    $ktp = $_POST['ktp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $jml_sewa = $_POST['jml_sewa'];
    $tanggalsewa = $_POST['tanggal'];
    $tanggal_pengembalian = $_POST['tanggal_kembali'];
    $total_bayar = $total_harga;
    $konfirmasi = "Belum Bayar";
    $tanggal_inp = date('Y-m-d');

    $stok = $_POST['stok'];
    $sisa_stok = $stok - $jml_sewa;

    if ($jml_sewa <= $stok && $jml_sewa >= 1) {
        $query = "INSERT INTO tbl_booking_212303 VALUES('','$kode_booking','$id_login','$id_alat','$nama','$alamat','$ktp','$no_tlp','$jml_sewa','$tanggalsewa','$tanggal_pengembalian','$total_bayar','$konfirmasi','$tanggal_inp')";
        $hasil = mysqli_query($koneksi, $query);
    
        $query2 = "UPDATE tbl_alat_212303 SET 212303_stok = '$sisa_stok' WHERE 212303_id_alat = '$id_alat'";
        $hasil2 = mysqli_query($koneksi, $query2);
            echo '<script>alert("Anda Sukses Booking silahkan Melakukan Pembayaran");
        window.location="bayar.php?id=' . $kode_booking . '";</script>';
    }else{
        echo '<script>alert("barang tidak cukup!");history.back();</script>';
    }







}



if ($_GET['id'] == 'konfirmasi') {



    $dir = 'images/';
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
            session_start();
            $id_login = $_SESSION['user']['212303_id_login'];
            $id_booking = $_POST['id_booking'];
            $gambar = $newfilename;


            $query = "INSERT INTO tbl_pembayaran_212303 VALUES('','$id_login','$id_booking','$gambar')";
            mysqli_query($koneksi, $query);

            $konfirmasi = 'Sedang di proses';
            $query2 = "UPDATE tbl_booking_212303 SET 212303_konfirmasi = '$konfirmasi' WHERE 212303_id_booking = '$id_booking'";
            mysqli_query($koneksi, $query2);
            echo '<script>alert("Kirim Sukses , Pembayaran anda sedang diproses");history.go(-2);</script>';
        }
    }
}
