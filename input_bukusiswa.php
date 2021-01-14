<?php
include "koneksi.php";

    $kodebuku = $_POST['kodebuku'];
    $katbuku = $_POST['katbuku'];
    $namabuku = $_POST['namabuku'];
     $jumlahbuku = $_POST['jumlahbuku'];

    // if($kelas == 'ekonomi'){
    //     echo "ekonomi";
    // }else if($kelas == 'vip'){
    //     echo "vip";
    // }else{
    //     echo "tidak terbaca".$kelas;
    // }

$hehe =  "INSERT INTO buku(kodebuku,katbuku,namabuku,jumlahbuku) VALUES ('$kodebuku','$katbuku','$namabuku','$jumlahbuku')";

if($koneksi -> query($hehe)){
    echo "berhasil";
}
else{
    echo "gagal".$koneksi -> error();
}
    header('Location: tampilbukusiswa.php');
?>