<?php include 'koneksi.php';
$key = $_POST['cari'];
// echo "Keyword pencarian = $key";
echo "<br>";
$result =mysqli_query($koneksi, "SELECT * FROM transaksiguru WHERE kodetranguru LIKE '%$key%' OR idpeminjamguru LIKE '%$key%' OR kodebukuguru LIKE '%$key%' OR tglpinjamguru LIKE '%$key%' OR tglkembaliguru LIKE '%$key%'");
    // $SQL = mysqli_query($connect,$QueryString); 
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<head>
    <title>admin</title>
</head>
<body>
<form method="post" action="cari6.php">
 <nav>
    <div class="nav-wrapper">
      <a href="halaman_admin.php" class="brand-logo">DATA PEMINJAMAN BUKU GURU</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
        <!-- <li class="input-field"><input type="text" name="cari" required></li> -->
        <li class="nav-item"><a class="nav-link" href="kembaliadmin6.php">kembali</a></li>
           <li><a href="logout.php">logout</a></li>
        <i class="small material-icons left" >search</i>
         <li class="input-field"><input type="text" name="cari" required>
         </li>
      </ul>
    </div>
  </nav>
</form></br></br>

    <table class="striped">
    <thead>
    <tr>
        <th>Kode Transaksi</th>
        <th>ID Peminjam</th>
        <th>Kode Buku</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
        <th>opsi</th>
    </tr>
    </thead>
    <tbody>
        <?php
        while($data = mysqli_fetch_array($result)) {
                echo "<tr>";
            echo "<td>".$data['kodetranguru']."</td>";
            echo "<td>".$data['idpeminjamguru']."</td>";
            echo "<td>".$data['kodebukuguru']."</td>";
           echo "<td>".$data['tglpinjamguru']."</td>";
           echo "<td>".$data['tglkembaliguru']."</td>";

            echo "<td>";
            echo "<a href='edit_admintransaksiguru.php?kodetranguru=".$data['kodetranguru']."'>Edit</a> | ";
            echo "<a href='hapustransaksiguru.php?kodetranguru=".$data['kodetranguru']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            }
        ?>  
    </table>
    <!-- <a href="halaman_admin.php">kembali</a> -->
                    </div></div></div></div></section></body></html>