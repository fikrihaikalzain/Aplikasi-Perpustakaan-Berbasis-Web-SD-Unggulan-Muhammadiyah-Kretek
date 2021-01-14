<?php

include("koneksi.php");

if( isset($_GET['kodetransaksi']) ){

    $kodetransaksi = $_GET['kodetransaksi'];

    $sql = "DELETE FROM transaksi WHERE kodetransaksi='$kodetransaksi' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ){
        header('Location: halaman_admin5.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>  