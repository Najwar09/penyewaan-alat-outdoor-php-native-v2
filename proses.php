<?php
include 'koneksi.php';


// registrasi
if ($_GET['id'] == 'registrasi') {
    
    if (isset($_POST['save'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $level = "user";
        
        $query = "INSERT INTO login VALUES('','$nama','$username','$pass','$level')";
	    mysqli_query($koneksi, $query);

	    echo '<script>alert("Data telah berhasil di tambahkan!");history.back();</script>';
    }
}
