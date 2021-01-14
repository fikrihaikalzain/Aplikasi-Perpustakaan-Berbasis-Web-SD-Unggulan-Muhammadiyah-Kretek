<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $kodekembali = $_POST['kodekembali'];
    $idpeminjam = $_POST['idpeminjam'];
    $kodebuku = $_POST['kodebuku'];
    $tglpengembalian = $_POST['tglpengembalian'];
    

    $sql = "UPDATE pengembalian SET idpeminjam='$idpeminjam', kodebuku='$kodebuku',  tglpengembalian='$tglpengembalian' WHERE kodekembali='$kodekembali' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: halaman_admin7.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
