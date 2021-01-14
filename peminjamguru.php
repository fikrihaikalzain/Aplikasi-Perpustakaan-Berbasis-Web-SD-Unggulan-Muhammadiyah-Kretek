<?php
require "header.php";
require "koneksi.php";
    $data=$koneksi->query("SELECT * FROM peminjamguru ORDER BY idpeminjamguru DESC");
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
                        <h3>Daftar Guru</h3>
                        <form class="row contact_form" action="input_peminjamguru.php" method="POST">
                           
                            <div class="col-md-10 form-group p_star">
                                <h5>Identitas Guru</h5>
                                <input type="int" class="form-control" name="idpeminjamguru" placeholder="" value="" required="">
                               <!--  <span class="placeholder"></span> -->
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                                <h5>Nama Guru</h5>
                                <input type="text" class="form-control" name="namapeminjamguru" placeholder="" required="">
                                <!-- <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>No HP</h5>
                                <input type="text" class="form-control" name="nohpguru" placeholder="" required="">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            
                         <div class="col-md-10 form-group p_star" align="">
                            <input type="submit" name="submit" value="Tambahkan"> 
                            <a href="lihatdata2.php">Lihat Data</a>      
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
