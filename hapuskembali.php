<?php

include("koneksi.php");

if( isset($_GET['kodekembali']) ){

    $kodekembali = $_GET['kodekembali'];

    $sql = "DELETE FROM pengembalian WHERE kodekembali='$kodekembali' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ){
        header('Location: halaman_admin7.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>  