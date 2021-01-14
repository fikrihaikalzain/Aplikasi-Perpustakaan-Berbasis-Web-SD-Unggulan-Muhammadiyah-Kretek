<?php

include("koneksi.php");

if( isset($_GET['kodekembaliguru']) ){

    $kodekembaliguru = $_GET['kodekembaliguru'];

    $sql = "DELETE FROM pengembalianguru WHERE kodekembaliguru='$kodekembaliguru' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ){
        header('Location: halaman_admin8.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>  