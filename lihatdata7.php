<?php include 'koneksi.php'; ?>
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
<form method="post" action="lihatcari7.php">
 <nav>
    <div class="nav-wrapper">
      <a href="halaman_admin1.php" class="brand-logo">Data Pengembalian Buku Siswa</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
        <!-- <li class="input-field"><input type="text" name="cari" required></li> -->
        <li class="nav-item"><a class="nav-link" href="kembalisiswa7.php">kembali</a></li>
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
        <th>Kode Pengembalian</th>
        <th>Id Peminjam</th>
        <th>Kode Buku</th>
        <th>Tanggal Kembali</th>
        <th>Denda</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM pengembalian where kodekembali";
        $query = mysqli_query($koneksi, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$data['kodekembali']."</td>";
            echo "<td>".$data['idpeminjam']."</td>";
            echo "<td>".$data['kodebuku']."</td>";
           echo "<td>".$data['tglpengembalian']."</td>";
           echo "<td>".$data['denda']."</td>";

            


            echo "</tr>";
        }
        ?>
    </tbody>
    </table>    
    <p>total: <?php echo mysqli_num_rows($query) ?> </p>
    <!-- <h2><a href="logout.php">logout</a></h2> -->
</body>
</html>