    <?php
    // Load file koneksi.php
    include "koneksi.php";
    $idpeminjam = $_POST['idpeminjam']; // Ambil data NIS yang dikirim oleh index.php melalui form submit
    $query = "DELETE FROM peminjam WHERE idpeminjam IN(".implode(",", $idpeminjam).")"; // Buat variabel $query untuk menampung query delete
    $sql = $pdo->prepare($query);
    $sql->execute(); // Eksekusi/Jalankan query dari variabel 
    $query
    header("location: halaman_admin1.php"); // Redirect ke halaman index.php
    ?>