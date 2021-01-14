<?php

include("koneksi.php");

if( isset($_GET['kodebukuguru']) ){

    $kodebukuguru = $_GET['kodebukuguru'];

    $sql = "DELETE FROM bukuguru WHERE kodebukuguru='$kodebukuguru' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ){
        header('Location: halaman_admin4.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>  