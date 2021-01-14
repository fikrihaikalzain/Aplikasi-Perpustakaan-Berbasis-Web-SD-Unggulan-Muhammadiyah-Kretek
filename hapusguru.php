<?php

include("koneksi.php");

if( isset($_GET['idpeminjamguru']) ){

    $idpeminjamguru = $_GET['idpeminjamguru'];

    $sql = "DELETE FROM peminjamguru WHERE idpeminjamguru='$idpeminjamguru' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ){
        header('Location: halaman_admin2.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>  