<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $kodekembaliguru = $_POST['kodekembaliguru'];
    $idpeminjamguru = $_POST['idpeminjamguru'];
    $kodebukuguru = $_POST['kodebukuguru'];
    $tglkembaliguru = $_POST['tglkembaliguru'];
    

    $sql = "UPDATE pengembalianguru SET idpeminjamguru='$idpeminjamguru', kodebukuguru='$kodebukuguru',  tglkembaliguru='$tglkembaliguru' WHERE kodekembaliguru='$kodekembaliguru' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: halaman_admin8.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
