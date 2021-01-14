<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $kodetransaksi = $_POST['kodetransaksi'];
    $idpeminjam = $_POST['idpeminjam'];
    $kodebuku = $_POST['kodebuku'];
    $tglpinjam = $_POST['tglpinjam'];
    $tglkembali = $_POST['tglkembali'];
    $status = $_POST['status'];
    $dendabuku = $_POST['dendabuku'];
    

    $sql = "UPDATE transaksi SET idpeminjam='$idpeminjam', kodebuku='$kodebuku', tglpinjam='$tglpinjam' , tglkembali='$tglkembali', status='$status', dendabuku='$dendabuku' WHERE kodetransaksi='$kodetransaksi' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: halaman_admin5.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
