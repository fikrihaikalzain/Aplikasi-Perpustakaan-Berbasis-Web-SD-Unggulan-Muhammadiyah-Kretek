<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $kodebukuguru = $_POST['kodebukuguru'];
    $katbukuguru = $_POST['katbukuguru'];
    $namabukuguru = $_POST['namabukuguru'];
    $jumlahbukuguru = $_POST['jumlahbukuguru'];
    

    $sql = "UPDATE bukuguru SET katbukuguru='$katbukuguru', namabukuguru='$namabukuguru', jumlahbukuguru='$jumlahbukuguru' WHERE kodebukuguru='$kodebukuguru' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: halaman_admin4.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
