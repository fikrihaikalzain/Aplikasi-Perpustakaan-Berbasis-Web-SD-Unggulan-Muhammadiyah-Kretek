
<?php
require "header.php";
require "koneksi.php";
    $data=$koneksi->query("SELECT * FROM pengembalian ORDER BY kodekembali DESC");
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
                        <h3>Pengembalian Buku Siswa</h3>
                        <form class="row contact_form" action="input_pengembalian.php" method="POST">
                           
                            <div class="col-md-10 form-group p_star">
                                <h5>Kode Pengembalian</h5>
                                <input type="int" class="form-control" name="kodekembali" placeholder="" value="" required="">
                               <!--  <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>Identitas Siswa</h5>
                             
               
                <td>
                     <select name="idpeminjam" required required onchange="$('#namapeminjam').val($('option:selected',this).attr('vnama'))">
            <option>pilih</option>>
                  <?php
                  $result=mysqli_query($koneksi,"select idpeminjam, namapeminjam from peminjam");
                   while($user_data = mysqli_fetch_array($result)) { ?>
                     <option vnama="<?php echo $user_data['namapeminjam'];?>"><?=$user_data['idpeminjam'];?></option>
                  <?php } ?>
                </select>
                 <input type="" class="form-control" id="namapeminjam" readonly>
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
                                <h5>Tanggal Kembali</h5>
                                <input type="date" class="form-control" name="tglpengembalian" placeholder="" required="">
                                <!-- <span class="placeholder"></span> -->
                            </div>

                             <div class="col-md-10 form-group p_star">
                                <h5>Denda</h5>
                    
                                <input type="text" id="txt1" onkeyup="sum();"/>
                                <h5>Hasil Denda </h5><input type="text" id="txt2" class="form-control" name="denda" placeholder=""/>

                                <script>
                                function sum(){
                                    var txtFirstNumberValue=document.getElementById('txt1').value;
                                    var result=parseFloat(txtFirstNumberValue)*1000;
                                    if(!isNaN(result)){
                                        document.getElementById('txt2').value=result;

                                    }
                                }
                            </script>

                                <!-- <span class="placeholder"></span> -->
                            </div>
                            
                         <div class="col-md-10 form-group p_star" align="">
                            <input type="submit" name="submit" value="Tambahkan"> 
                            <a href="lihatdata7.php">Lihat Data</a>      
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
