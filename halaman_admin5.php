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
<form method="post" action="cari5.php">
 <nav>
    <div class="nav-wrapper">
      <a href="halaman_admin1.php" class="brand-logo"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
        <!-- <li class="input-field"><input type="text" name="cari" required></li> -->
        <li><a href="halaman_admin1.php">Data Siswa</a></li>
        <li><a href="halaman_admin2.php">Data Guru</a></li>
        <li><a href="halaman_admin3.php">Buku Siswa</a></li>
        <li><a href="halaman_admin4.php">Buku Guru</a></li>
        <li><a href="halaman_admin5.php">Transaksi Siswa</a></li>&emsp;
        <li><a href="halaman_admin6.php">Transaksi Guru</a></li>
        
        <li><a href="logout.php">logout</a></li>
        <i class="small material-icons left" >search</i>
         <li class="input-field"><input type="text" name="cari" required>
         </li>
      </ul>
    </div>
  </nav>
</form>

    <table class="striped">
        <header>
        <h5>Data Peminjaman Buku Siswa</h5>
    </header>
    <thead>
    <tr>
        <th>Kode Transaksi</th>
        <th>Id Peminjam</th>
        <th>Kode Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
         <th>Status</th>
          <th>Denda</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM transaksi where idpeminjam";
        $query = mysqli_query($koneksi, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$data['kodetransaksi']."</td>";
            echo "<td>".$data['idpeminjam']."</td>";
            echo "<td>".$data['kodebuku']."</td>";
           echo "<td>".$data['tglpinjam']."</td>";
           echo "<td>".$data['tglkembali']."</td>";
           echo "<td>".$data['status']."</td>";
           echo "<td>".$data['dendabuku']."</td>";

            echo "<td><a href='edit_admintransaksiswa.php?kodetransaksi=$data[kodetransaksi]'>Edit</a></td></tr>";   
            
            echo "</td>";


            echo "</tr>";
        }
        ?>
    </tbody>
    </table>    
    <p>total: <?php echo mysqli_num_rows($query) ?> </p>
    <!-- <h2><a href="logout.php">logout</a></h2> -->
</body>
</html>