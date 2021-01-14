<?php include 'koneksi.php';
$key = $_POST['cari'];
// echo "Keyword pencarian = $key";
echo "<br>";
$result =mysqli_query($koneksi, "SELECT * FROM bukuguru WHERE kodebukuguru LIKE '%$key%' OR katbukuguru LIKE '%$key%' OR namabukuguru LIKE '%$key%' OR jumlahbukuguru LIKE '%$key%'");
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
<form method="post" action="cari4.php">
 <nav>
    <div class="nav-wrapper">
      <a href="halaman_admin.php" class="brand-logo">DATA BUKU GURU</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
        <!-- <li class="input-field"><input type="text" name="cari" required></li> -->
        <li class="nav-item"><a class="nav-link" href="kembaliadmin4.php">kembali</a></li>
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
        <th>Kode Buku</th>
        <th>Kategori Buku</th>
        <th>Judul Buku</th>
        <th>Jumlah Buku</th>
        
        <th>opsi</th>
    </tr>
    </thead>
    <tbody>
        <?php
        while($data = mysqli_fetch_array($result)) {
                echo "<tr>";
            echo "<td>".$data['kodebukuguru']."</td>";
            echo "<td>".$data['katbukuguru']."</td>";
            echo "<td>".$data['namabukuguru']."</td>";
           echo "<td>".$data['jumlahbukuguru']."</td>";

            echo "<td>";
            echo "<a href='edit_adminbukuguru.php?kodebukuguru=".$data['kodebukuguru']."'>Edit</a> | ";
            echo "<a href='hapusbukuguru.php?kodebukuguru=".$data['kodebukuguru']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            }
        ?>  
    </table>
    <!-- <a href="halaman_admin.php">kembali</a> -->
                    </div></div></div></div></section></body></html>