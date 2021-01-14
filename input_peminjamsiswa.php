<?php
include "koneksi.php";

    $idpeminjam = $_POST['idpeminjam'];
    $namapeminjam = $_POST['namapeminjam'];
    $nohp = $_POST['nohp'];

    // if($kelas == 'ekonomi'){
    //     echo "ekonomi";
    // }else if($kelas == 'vip'){
    //     echo "vip";
    // }else{
    //     echo "tidak terbaca".$kelas;
    // }

$hehe =  "INSERT INTO peminjam(idpeminjam,namapeminjam,nohp) VALUES ('$idpeminjam','$namapeminjam','$nohp')";

if($koneksi -> query($hehe)){
    echo "berhasil";
}
else{
    echo "gagal".$koneksi -> error();
}
    header('Location: tampil.php');
?>