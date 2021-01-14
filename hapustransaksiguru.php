<?php

include("koneksi.php");

if( isset($_GET['kodetranguru']) ){

    $kodetranguru = $_GET['kodetranguru'];

    $sql = "DELETE FROM transaksiguru WHERE kodetranguru='$kodetranguru' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ){
        header('Location: halaman_admin6.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>  