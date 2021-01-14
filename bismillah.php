
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

require "koneksi.php";

?>


<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/ft.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Perpustakaan SMKN1 SORONG</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.js"></script>
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({
                minDate: 0
            });
        });
    </script>
</head>

<body>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="halaman_costumer.php"><img src="img/smkn1.png" width="50px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="halaman_pegawai.php"></a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Daftar Peminjam</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="peminjamsiswa.php">Siswa</a></li>
                                    <li class="nav-item"><a class="nav-link" href="peminjamguru.php">Guru</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Daftar Buku</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="bukusiswa.php">Siswa</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bukuguru.php">Guru</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Transaksi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="transaksiswa.php">Siswa</a></li>
                                    <li class="nav-item"><a class="nav-link" href="transaksiguru.php">Guru</a></li>
                                </ul>
                            </li>

                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Pengembalian</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="pengembaliansiswa.php">Siswa</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pengembalianguru.php">Guru</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item"><a class="nav-link" href="#">login</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                           
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" name="cari" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>


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
Date :
    <input id="txtdate" type="text">
                                <h5>Tanggal Pinjam</h5>
                              
                                <input id ="txtdate" type="text" class="form-control" name="tglpinjam" >
                                <!-- <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>Tanggal Kembali</h5>
                                <input type="date" class="form-control" name="tglkembali" placeholder="" required="">
                                <!-- <span class="placeholder"></span> -->
                            </div>

                            <div class="col-md-10 form-group p_star">
                                <h5>Tanggal Buku Dikembalikan</h5>
                                <input type="date" class="form-control" name="dikembalikan" placeholder="">
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
<!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6></h6>
                        <p></p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class=""></i></a>
                            <a href="#"><i class=""></i></a>
                            <a href="#"><i class=""></i></a>
                            <a href="#"><i class=""></i></a>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Kontak</h6>
                        <p>
                            SMK NEGERI 1 KOTA SORONG <br>
                            082399418928
                          

                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Tentang Perpustakaan</h6>
                        <p>SMK Negeri 1 Kota Sorong merupakan sekolah kejurusan yang memiliki banyak keunggulan, salah satunya ialah perpustakaan untuk siswa siswi dan guru. dan memiliki buku yang lengkap</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                             method="get" class="form-inline">

                                    <!-- <div class="col-lg-4 col-md-4">
                                                <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                            </div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
           <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20"></h6>
                        <ul class="instafeed d-flex flex-wrap">
                            
                        </ul>
                    </div>
                </div>     
                
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
     crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
