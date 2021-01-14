<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $idpeminjamguru = $_POST['idpeminjamguru'];
    $namapeminjamguru = $_POST['namapeminjamguru'];
    $nohpguru = $_POST['nohpguru'];
    

    $sql = "UPDATE peminjamguru SET namapeminjamguru='$namapeminjamguru', nohpguru='$nohpguru' WHERE idpeminjamguru='$idpeminjamguru' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: halaman_admin2.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
