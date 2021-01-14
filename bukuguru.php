<?php

// koneksi ke mysql
mysql_connect("localhost", "root", "");
mysql_select_db("perpusmk");

// membaca kode barang terbesar
$query = "SELECT max(kodebukuguru) as maxKode FROM bukuguru";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$kodebukuguru = $data['maxKode'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kodebukuguru, 4, 4);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "BKGR";
$newID = $char . sprintf("%04s", $noUrut);
//Memasukkan data textbox ke database
?>
        
<?php
require "header.php";
require "koneksi.php";
    $data=$koneksi->query("SELECT * FROM bukuguru ORDER BY kodebukuguru DESC");
    $r=$data->fetch_array();
    ?>
        <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                   
                    <nav class="d-flex align-items-center">
                        
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
   <br>

        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Daftar Buku Guru</h3>
                        <form class="row contact_form" action="input_bukuguru.php" method="POST">
                           
                            <div class="col-md-10 form-group p_star">
                                <h5>Kode Buku</h5>
                                <input type="text" readonly="" class="form-control" name="kodebukuguru" placeholder="" value="<?php echo $newID; ?>" required="">
                               <!--  <span class="placeholder"></span> -->
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                <h5>Kategori Buku</h5>
                                
          <input type="radio" name="katbukuguru" value="Teks Utama" checked required="">Teks Utama
          <br>
          <input type="radio" name="katbukuguru" value="Non-Teks Utama" required="">Non-Teks Utama

        </td>
                                <!-- <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>Judul Buku</h5>
                                <input type="text" class="form-control" name="namabukuguru" placeholder="">
                                <!-- <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>Jumlah Buku</h5>
                                <input type="number" class="form-control" name="jumlahbukuguru" placeholder="">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            
                         <div class="col-md-10 form-group p_star" align="">
                            <input type="submit" name="submit" value="Tambahkan"> 
                            <a href="lihatdata4.php">Lihat Data</a>      
                        </div>
                        </form>                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area -->
<?php include "footer.php"; ?>
