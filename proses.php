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
            echo '<script>alert("Login Sukses");window.location="admin/index.php";</script>';
        } else {
            echo '<script>alert("gagal login!");window.location="login.php";</script>';
        }
    } else {
        echo '<script>alert("gagal login!");window.location="login.php";</script>';
    }
}
