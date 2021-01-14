
<?php
require "header.php";
require "koneksi.php";
    $data=$koneksi->query("SELECT * FROM peminjam ORDER BY idpeminjam DESC");
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
    <section class="checkout_area" >
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Daftar Siswa</h3>
                        <form class="row contact_form" action="input_peminjamsiswa.php" method="POST">
                           
                            <div class="col-md-10 form-group p_star">
                                <h5>Identitas Siswa (Nomor Induk)</h5>
                                <input type="int" class="form-control" name="idpeminjam" placeholder="" value="" required="">
                               <!--  <span class="placeholder"></span> -->
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                <h5>Nama Siswa</h5>
                                <input type="text" class="form-control" name="namapeminjam" placeholder="" required="">
                                <!-- <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>No HP</h5>
                                <input type="text" class="form-control" name="nohp" placeholder="" required="">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            
                         <div class="col-md-10 form-group p_star" align="">
                            <input type="submit" name="submit" value="tambahkan"> 
                            <a href="lihatdata1.php">Lihat Data</a>      
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
</body>

</html>
