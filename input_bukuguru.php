<?php
include "koneksi.php";

    $kodebukuguru = $_POST['kodebukuguru'];
    $katbukuguru = $_POST['katbukuguru'];
    $namabukuguru = $_POST['namabukuguru'];
     $jumlahbukuguru = $_POST['jumlahbukuguru'];

    // if($kelas == 'ekonomi'){
    //     echo "ekonomi";
    // }else if($kelas == 'vip'){
    //     echo "vip";
    // }else{
    //     echo "tidak terbaca".$kelas;
    // }

$hehe =  "INSERT INTO bukuguru(kodebukuguru,katbukuguru,namabukuguru,jumlahbukuguru) VALUES ('$kodebukuguru','$katbukuguru','$namabukuguru','$jumlahbukuguru')";

if($koneksi -> query($hehe)){
    echo "berhasil";
}
else{
    echo "gagal".$koneksi -> error();
}
    header('Location: tampilbukuguru.php');
?>