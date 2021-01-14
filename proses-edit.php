<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $idpeminjam = $_POST['idpeminjam'];
    $namapeminjam = $_POST['namapeminjam'];
    $nohp = $_POST['nohp'];
    

    $sql = "UPDATE peminjam SET idpeminjam='$idpeminjam', namapeminjam='$namapeminjam', nohp='$nohp' WHERE idpeminjam='$idpeminjam' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: halaman_admin1.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
