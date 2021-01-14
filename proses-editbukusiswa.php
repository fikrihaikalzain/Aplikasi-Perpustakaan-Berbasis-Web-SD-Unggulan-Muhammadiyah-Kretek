<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $kodebuku = $_POST['kodebuku'];
    $katbuku = $_POST['katbuku'];
    $namabuku = $_POST['namabuku'];
    $jumlahbuku = $_POST['jumlahbuku'];
    

    $sql = "UPDATE buku SET katbuku='$katbuku', namabuku='$namabuku', jumlahbuku='$jumlahbuku' WHERE kodebuku='$kodebuku' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: halaman_admin3.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
