
<?php

// koneksi ke mysql
mysql_connect("localhost", "root", "");
mysql_select_db("perpusmk");

// membaca kode barang terbesar
$query = "SELECT max(kodetransaksi) as maxKode FROM transaksi";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$kodetransaksi = $data['maxKode'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kodetransaksi, 4, 4);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "TR";
$newID = $char . sprintf("%04s", $noUrut);
//Memasukkan data textbox ke database
?>
                               <!-- <span class="placeholder"></span> -->
                    
<?php
require "header.php";
require "koneksi.php";
    $data=$koneksi->query("SELECT * FROM transaksi ORDER BY kodetransaksi DESC");
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
                        <h3>Peminjaman Buku Siswa</h3>
                        <form class="row contact_form" action="input_transaksiswa.php" method="POST">
                           
                            <div class="col-md-10 form-group p_star">
                                <h5>Kode Transaksi</h5>
                                <input type="text" class="form-control" name="kodetransaksi" readonly="" placeholder="" value="<?php echo $newID; ?>">
                               <!--  <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>Identitas Siswa</h5>
                             
               
                <td>
                     <select name="idpeminjam" required required onchange="$('#namapeminjam').val($('option:selected',this).attr('vnama'))" required="">
            <option>pilih</option>>
                  <?php
                  $result=mysqli_query($koneksi,"select idpeminjam, namapeminjam from peminjam");
                   while($user_data = mysqli_fetch_array($result)) { ?>
                     <option vnama="<?php echo $user_data['namapeminjam'];?>"><?=$user_data['idpeminjam'];?></option required="">
                  <?php } ?>
                </select>
                 <input type="" class="form-control" id="namapeminjam" readonly="" required="">
              </td>

                            </div>
                                <div class="col-md-10 form-group p_star">
                                <h5>Kode Buku</h5>
                  
          <select name="kodebuku" required onchange="$('#namabuku').val($('option:selected',this).attr('vnama'))">
            <option>pilih</option>
            <?php
            $result=mysqli_query($koneksi,"select kodebuku,namabuku from buku");
            while($user_data = mysqli_fetch_array($result)) {  ?> 
              <option vnama="<?php echo $user_data['namabuku'];?>"><?=$user_data['kodebuku'];?></option>
            <?php } ?>
          </select>
           <input type="" class="form-control" id="namabuku" readonly>
        

        </td>
                                <!-- <span class="placeholder"></span> -->
                            </div>
          

                            <div class="col-md-10 form-group p_star">

                                <h5>Tanggal Pinjam</h5>
                              
                                <input id ="txtdate" type="date" class="form-control" name="tglpinjam" >
                                <!-- <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>Tanggal Kembali</h5>
                                <input type="date" class="form-control" name="tglkembali" placeholder="" required="">
                                <!-- <span class="placeholder"></span> -->
                            </div>

                            
                            
                         <div class="col-md-10 form-group p_star" align="">
                            <input type="submit" name="submit" value="Tambahkan">
                            <a href="lihatdata5.php">Lihat Data</a>       
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
