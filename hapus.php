<?php

include("koneksi.php");

if( isset($_GET['idpeminjam']) ){

    $idpeminjam = $_GET['idpeminjam'];

    $sql = "DELETE FROM peminjam WHERE idpeminjam='$idpeminjam' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ){
        header('Location: halaman_admin1.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>  