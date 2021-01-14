<?php
include "koneksi.php";

    $kodekembaliguru = $_POST['kodekembaliguru'];
    $idpeminjamguru = $_POST['idpeminjamguru'];
    $kodebukuguru = $_POST['kodebukuguru'];
 $tglkembaliguru = $_POST['tglkembaliguru'];
 $dendaguru = $_POST['dendaguru'];
    // if($kelas == 'ekonomi'){
    //     echo "ekonomi";
    // }else if($kelas == 'vip'){
    //     echo "vip";
    // }else{
    //     echo "tidak terbaca".$kelas;
    // }

$hehe =  "INSERT INTO pengembalianguru(kodekembaliguru,idpeminjamguru,kodebukuguru,tglkembaliguru,dendaguru) VALUES ('$kodekembaliguru','$idpeminjamguru','$kodebukuguru','$tglkembaliguru','$dendaguru')";

$q=mysqli_query($koneksi,"select jumlahbukuguru from bukuguru where kodebukuguru='$kodebukuguru'");
    $jumlah_buku_sebelumnya1=mysqli_fetch_array($q)['jumlahbukuguru'];
    $jumlah_buku_sekarang1=$jumlah_buku_sebelumnya1+1;
    mysqli_query($koneksi,"update bukuguru set jumlahbukuguru='$jumlah_buku_sekarang1' where kodebukuguru='$kodebukuguru'");

if($koneksi -> query($hehe)){
    echo "berhasil";
}
else{
    echo "gagal".$koneksi -> error();
}
    header('Location: tampilpengembalianguru.php');
?>