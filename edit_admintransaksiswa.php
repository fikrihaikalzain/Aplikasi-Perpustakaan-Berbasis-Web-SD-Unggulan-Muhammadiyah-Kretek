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
        <li class="nav-item"><a class="nav-link" href="kembaliadmin5.php">kembali</a></li>
        <li><a href="logout.php">logout</a></li>
        <i class="small material-icons left" >search</i>
         <li class="input-field"><input type="text" name="cari" required>
         </li>
      </ul>
    </div>
  </nav>
</form>
<?php
if( !isset($_GET['kodetransaksi']) ){
    header('Location: halaman_admin5.php');
}

$kodetransaksi = $_GET['kodetransaksi'];

$sql = "SELECT * FROM transaksi WHERE kodetransaksi='$kodetransaksi' ";
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
        <h3>Edit Data Peminjaman Buku Siswa</h3>
    </header>
<div class="container">
    <form action="proses-edittransaksiswa.php" method="POST">

        <fieldset>

            <input type="hidden" name="kodetransaksi" value="<?php echo $data['kodetransaksi'] ?>" />

        
        <p>
            <label for="idpeminjam">ID Peminjam: </label>
            <input type="int" name="idpeminjam" readonly="" placeholder="nama" value="<?php echo $data['idpeminjam'] ?>" />
        </p>

        <p>
            <label for="kodebuku">Kode Buku: </label>
            <input type="int" name="kodebuku" readonly="" placeholder="nama" value="<?php echo $data['kodebuku'] ?>" />
        </p>

        <p>
            <label for="tglpinjam">tanggal pinjam: </label>
            <input type="date" name="tglpinjam" placeholder="nama" value="<?php echo $data['tglpinjam'] ?>" />
        </p>

        <p>
            <label for="tglkembali">tanggal kembali: </label>
            <input type="date" name="tglkembali" placeholder="nama" value="<?php echo $data['tglkembali'] ?>" />
        </p>

<p>
            <label for="status">Status: </label>
            <input type="text" name="status" placeholder="" value="<?php echo $data['status'] ?>" />
        </p>

        <p>
            <label for="dendabuku">Denda : </label>
            <input type="text" id="txt1" onkeyup="sum();"/>
                                <h7>Hasil Denda </h7><input type="text" id="txt2" class="form-control" name="dendabuku" placeholder=""/>

                                <script>
                                function sum(){
                                    var txtFirstNumberValue=document.getElementById('txt1').value;
                                    var result=parseFloat(txtFirstNumberValue)*1000;
                                    if(!isNaN(result)){
                                        document.getElementById('txt2').value=result;

                                    }
                                }
                            </script>
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