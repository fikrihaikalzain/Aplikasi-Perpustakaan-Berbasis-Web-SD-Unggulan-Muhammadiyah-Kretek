<?php
include "koneksi.php";

    $idpeminjamguru = $_POST['idpeminjamguru'];
    $namapeminjamguru = $_POST['namapeminjamguru'];
    $nohpguru = $_POST['nohpguru'];

    // if($kelas == 'ekonomi'){
    //     echo "ekonomi";
    // }else if($kelas == 'vip'){
    //     echo "vip";
    // }else{
    //     echo "tidak terbaca".$kelas;
    // }

$hehe =  "INSERT INTO peminjamguru(idpeminjamguru,namapeminjamguru,nohpguru) VALUES ('$idpeminjamguru','$namapeminjamguru','$nohpguru')";

if($koneksi -> query($hehe)){
    echo "berhasil";
}
else{
    echo "gagal".$koneksi -> error();
}
    header('Location: tampilguru.php');
?>