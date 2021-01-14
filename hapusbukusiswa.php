<?php

include("koneksi.php");

if( isset($_GET['kodebuku']) ){

    $kodebuku = $_GET['kodebuku'];

    $sql = "DELETE FROM buku WHERE kodebuku='$kodebuku' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ){
        header('Location: halaman_admin3.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>  