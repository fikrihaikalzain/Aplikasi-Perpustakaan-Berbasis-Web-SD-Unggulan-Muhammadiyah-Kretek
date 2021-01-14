<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $kodetranguru = $_POST['kodetranguru'];
    $idpeminjamguru = $_POST['idpeminjamguru'];
    $kodebukuguru = $_POST['kodebukuguru'];
    $tglpinjamguru = $_POST['tglpinjamguru'];
    $tglkembaliguru = $_POST['tglkembaliguru'];
    $statusguru = $_POST['statusguru'];
    $dendabukuguru = $_POST['dendabukuguru'];
    

    $sql = "UPDATE transaksiguru SET idpeminjamguru='$idpeminjamguru', kodebukuguru='$kodebukuguru', tglpinjamguru='$tglpinjamguru' , tglkembaliguru='$tglkembaliguru', statusguru='$statusguru', dendabukuguru='$dendabukuguru' WHERE kodetranguru='$kodetranguru' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: halaman_admin6.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
