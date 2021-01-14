<?php
include "koneksi.php";

    $kodekembali = $_POST['kodekembali'];
    $idpeminjam = $_POST['idpeminjam'];
    $kodebuku = $_POST['kodebuku'];
 $tglpengembalian = $_POST['tglpengembalian'];
 $denda = $_POST['denda'];
    // if($kelas == 'ekonomi'){
    //     echo "ekonomi";
    // }else if($kelas == 'vip'){
    //     echo "vip";
    // }else{
    //     echo "tidak terbaca".$kelas;
    // }

$hehe =  "INSERT INTO pengembalian(kodekembali,idpeminjam,kodebuku,tglpengembalian,denda) VALUES ('$kodekembali','$idpeminjam','$kodebuku','$tglpengembalian','$denda')";

$q=mysqli_query($koneksi,"select jumlahbuku from buku where kodebuku='$kodebuku'");
    $jumlah_buku_sebelumnya=mysqli_fetch_array($q)['jumlahbuku'];
    $jumlah_buku_sekarang=$jumlah_buku_sebelumnya+1;
    mysqli_query($koneksi,"update buku set jumlahbuku='$jumlah_buku_sekarang' where kodebuku='$kodebuku'");

if($koneksi -> query($hehe)){
    echo "berhasil";
}
else{
    echo "gagal".$koneksi -> error();
}
    header('Location: tampilpengembalian.php');
?>