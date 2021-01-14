<?php include 'koneksi.php';
$key = $_POST['cari'];
// echo "Keyword pencarian = $key";
echo "<br>";
$result =mysqli_query($koneksi, "SELECT * FROM peminjamguru WHERE idpeminjamguru LIKE '%$key%' OR namapeminjamguru LIKE '%$key%' OR nohpguru LIKE '%$key%'");
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
<form method="post" action="cari1.php">
 <nav>
    <div class="nav-wrapper">
      <a href="halaman_admin.php" class="brand-logo">DATA GURU</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
        <!-- <li class="input-field"><input type="text" name="cari" required></li> -->
        <li class="nav-item"><a class="nav-link" href="kembaliadmin2.php">kembali</a></li>
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
        <th>ID Guru</th>
        <th>Nama Guru</th>
        <th>No Hp</th>
        
        <th>opsi</th>
    </tr>
    </thead>
    <tbody>
        <?php
        while($data = mysqli_fetch_array($result)) {
                echo "<tr>";
            echo "<td>".$data['idpeminjamguru']."</td>";
            echo "<td>".$data['namapeminjamguru']."</td>";
            echo "<td>".$data['nohpguru']."</td>";
           

            echo "<td>";
            echo "<a href='edit_adminguru.php?idpeminjamguru=".$data['idpeminjamguru']."'>Edit</a> | ";
            echo "<a href='hapusguru.php?idpeminjamguru=".$data['idpeminjamguru']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            }
        ?>  
    </table>
    <!-- <a href="halaman_admin.php">kembali</a> -->
                    </div></div></div></div></section></body></html>