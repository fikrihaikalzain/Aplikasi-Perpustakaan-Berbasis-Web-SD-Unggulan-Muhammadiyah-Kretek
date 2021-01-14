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
<form method="post" action="cari.php">
 <nav>
    <div class="nav-wrapper">
      <a href="halaman_admin.php" class="brand-logo">ADMIN</a>
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
</form>
<?php
if( !isset($_GET['kodebukuguru']) ){
    header('Location: halaman_admin4.php');
}

$kodebukuguru = $_GET['kodebukuguru'];

$sql = "SELECT * FROM bukuguru WHERE kodebukuguru='$kodebukuguru' ";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>
    <header>
        <h3>Edit Data Buku Guru</h3>
    </header>
<div class="container">
    <form action="proses-editbukuguru.php" method="POST">

        <fieldset>

            <input type="hidden" name="kodebukuguru" value="<?php echo $data['kodebukuguru'] ?>" />

        <p>
            
            <label for="katbukuguru">Kategori Buku: </label>
            <input type="text" name="katbukuguru" placeholder="nama" value="<?php echo $data['katbukuguru'] ?>" />

             <input type="radio" name="katbukuguru" value="Teks Utama" checked>Teks Utama
          <br>
          <input type="radio" name="katbukuguru" value="Non-Teks Utama">Non-Teks Utama

        </p>
        <p>
            <label for="namabukuguru">Judul Buku: </label>
            <input type="text" name="namabukuguru" placeholder="nama" value="<?php echo $data['namabukuguru'] ?>" />
        </p>

         <p>
            <label for="jumlahbukuguru">Jumlah Buku: </label>
            <input type="number" name="jumlahbukuguru" placeholder="nama" value="<?php echo $data['jumlahbukuguru'] ?>" />
        </p>
        
        
        </p>
        <p>
            <input type="submit" value="Simpan" class="btn btn-primary" name="simpan" />
        </p>

        </fieldset>


    </form>
</div>
       </div>
   </div>
</div>
</div>
    </body>
</html>