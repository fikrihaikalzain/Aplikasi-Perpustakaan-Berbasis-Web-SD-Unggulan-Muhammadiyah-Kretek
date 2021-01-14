<?php
include "koneksi.php";

    $kodetranguru = $_POST['kodetranguru'];
    $idpeminjamguru = $_POST['idpeminjamguru'];
    $kodebukuguru = $_POST['kodebukuguru'];
     $tglpinjamguru = $_POST['tglpinjamguru'];
 $tglkembaliguru = $_POST['tglkembaliguru'];
    // if($kelas == 'ekonomi'){
    //     echo "ekonomi";
    // }else if($kelas == 'vip'){
    //     echo "vip";
    // }else{
    //     echo "tidak terbaca".$kelas;
    // }

$hehe =  "INSERT INTO transaksiguru(kodetranguru,idpeminjamguru,kodebukuguru,tglpinjamguru,tglkembaliguru) VALUES ('$kodetranguru','$idpeminjamguru','$kodebukuguru','$tglpinjamguru','$tglkembaliguru')";

$q=mysqli_query($koneksi,"select jumlahbukuguru from bukuguru where kodebukuguru='$kodebukuguru'");
    $jumlah_buku_sebelumnya1=mysqli_fetch_array($q)['jumlahbukuguru'];
    $jumlah_buku_sekarang1=$jumlah_buku_sebelumnya1-1;
    mysqli_query($koneksi,"update bukuguru set jumlahbukuguru='$jumlah_buku_sekarang1' where kodebukuguru='$kodebukuguru'");

if($koneksi -> query($hehe)){
    echo "berhasil";
}
else{
    echo "gagal".$koneksi -> error();
}
    header('Location: tampiltranguru.php');
?>