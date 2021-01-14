
<?php
require "header.php";
require "koneksi.php";
    $data=$koneksi->query("SELECT * FROM pengembalianguru ORDER BY kodekembaliguru DESC");
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
                        <h3>Pengembalian Buku Guru</h3>
                        <form class="row contact_form" action="input_pengembalianguru.php" method="POST">
                           
                            <div class="col-md-10 form-group p_star">
                                <h5>Kode Pengembalian</h5>
                                <input type="int" class="form-control" name="kodekembaliguru" placeholder="" value="" required="">
                               <!--  <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>Identitas Guru</h5>
                             
               
                <td>
                     <select name="idpeminjamguru" required required onchange="$('#namapeminjamguru').val($('option:selected',this).attr('vnamaguru'))">
            <option>pilih</option>>
                  <?php
                  $result=mysqli_query($koneksi,"select idpeminjamguru, namapeminjamguru from peminjamguru");
                   while($user_data = mysqli_fetch_array($result)) { ?>
                     <option vnamaguru="<?php echo $user_data['namapeminjamguru'];?>"><?=$user_data['idpeminjamguru'];?></option>
                  <?php } ?>
                </select>
                 <input type="" class="form-control" id="namapeminjamguru" readonly>
              </td>

                            </div>



                            
                            <div class="col-md-10 form-group p_star">
                                <h5>Kode Buku Guru</h5>
                                
          
         
     
          
          <select name="kodebukuguru" required onchange="$('#namabukuguru').val($('option:selected',this).attr('vnamaguru'))">
            <option>pilih</option>
            <?php
            $result=mysqli_query($koneksi,"select kodebukuguru,namabukuguru from bukuguru");
            while($user_data = mysqli_fetch_array($result)) {  ?> 
              <option vnamaguru="<?php echo $user_data['namabukuguru'];?>"><?=$user_data['kodebukuguru'];?></option>
            <?php } ?>
          </select>
           <input type="" class="form-control" id="namabukuguru" readonly>
        

        </td>
                                <!-- <span class="placeholder"></span> -->
                            </div>

                           

                            <div class="col-md-10 form-group p_star">
                                <h5>Tanggal Kembali</h5>
                                <input type="date" class="form-control" name="tglkembaliguru" placeholder="" required="">
                                <!-- <span class="placeholder"></span> -->
                            </div>
                            
                            <div class="col-md-10 form-group p_star">
                            <h5>Denda</h5>
                    
                                <input type="text" id="txt3" onkeyup="sum();"/>
                                <h5>Hasil Denda </h5><input type="text" id="txt4" class="form-control" name="dendaguru" placeholder="" />

                                <script>
                                function sum(){
                                    var txtFirstNumberValue=document.getElementById('txt3').value;
                                    var result=parseFloat(txtFirstNumberValue)*1000;
                                    if(!isNaN(result)){
                                        document.getElementById('txt4').value=result;

                                    }
                                }
                            </script>

                                <!-- <span class="placeholder"></span> -->
                            </div>

                         <div class="col-md-10 form-group p_star" align="">
                            <input type="submit" name="submit" value="Tambahkan"> 
                            <a href="lihatdata8.php">Lihat Data</a>      
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
