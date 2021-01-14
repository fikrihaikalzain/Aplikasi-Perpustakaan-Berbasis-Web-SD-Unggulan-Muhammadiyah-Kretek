<?php
include "koneksi.php";

    $kodetransaksi = $_POST['kodetransaksi'];
    $idpeminjam = $_POST['idpeminjam'];
    $kodebuku = $_POST['kodebuku'];
     $tglpinjam = $_POST['tglpinjam'];
 $tglkembali = $_POST['tglkembali'];
   

$hehe =  "INSERT INTO transaksi(kodetransaksi,idpeminjam,kodebuku,tglpinjam,tglkembali) VALUES ('$kodetransaksi','$idpeminjam','$kodebuku','$tglpinjam','$tglkembali')";

$q=mysqli_query($koneksi,"select jumlahbuku from buku where kodebuku='$kodebuku'");
    $jumlah_buku_sebelumnya=mysqli_fetch_array($q)['jumlahbuku'];
    $jumlah_buku_sekarang=$jumlah_buku_sebelumnya-1;
    mysqli_query($koneksi,"update buku set jumlahbuku='$jumlah_buku_sekarang' where kodebuku='$kodebuku'");

if($koneksi -> query($hehe)){
    echo "berhasil";
}
else{
    echo "gagal".$koneksi -> error();
}
    header('Location: tampiltransaksiswa.php');
?>