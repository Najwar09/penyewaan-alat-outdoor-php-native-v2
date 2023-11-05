<?php

 require '../../koneksi.php';

if($_GET['id'] == 'konfirmasi')
{
    $status = $_POST['status'];
    $id_booking= $_POST['id_booking'];
    $query = "UPDATE tbl_booking_212303 SET 212303_konfirmasi= '$status' WHERE 212303_id_booking='$id_booking'";
    $hasil = mysqli_query($koneksi,$query);

    echo '<script>alert("Kirim Sukses , Pembayaran berhasil");history.go(-1);</script>'; 
}