<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include_once "session.php";

include "koneksi.php";


    $sql="select MAX(id_beli) from pembelian";
    $hasil = $koneksidb->query($sql);
    $data = $hasil->fetch_array();

    $MaxID = $data[0];  //data kode perusahaan terakhir disimpan di variabel baru $MaxID

    $no_urut = (int) substr($MaxID,2,6);  //Memisahkan karakter dengan angka menggunakan fungsi substr
                        //string di $MaxID akan dipisahkan menjadi"PM" dan "000001"
                        //angka 0 pertama dimulai dari index ke-2 dengan panjang 6(sampaiangka 1).000001  dimasukkan ke variabel $no_urut
    $no_urut++;               //lalu variabel no_urut ditambah 1

    $new_ID = "B".sprintf("%06s","$no_urut");  //angka yang telah ditambah dengan dengan 1 kemudian  digabung kembali dengan "PM"
                          //sprintf digunakan untuk memanggil variabel dalam format yang sudah ditentukan
                          //%s merupakan format pemanggilan variabel yang bernilai string
?>
<?php
        $pemasok=("SELECT id_pemasok, nm_pemasok from pemasok");
        $pemasok_query = mysqli_query($koneksidb,$pemasok);
?>

<script>
function hitung() {
        var qty=parseInt(document.getElementById("qty").value);
        var harga=parseInt(document.getElementById("harga").value); 
        var total = qty * harga;        
        document.getElementById('total').value = total;
 if (isNaN(qty)){ 
        document.getElementById('total').value = harga;                                 
 }
 if (isNaN(harga)){ 
        document.getElementById('total').value = qty;                                 
 }
 if ((isNaN(qty))&&(isNaN(harga))){ 
        document.getElementById('total').value = 0;                                 
 }
}
</script>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.php" class="logo">
        FURNITURE
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/j.jpg">
                <span class="username">Setting</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="about_us.php"><i class=" fa fa-suitcase"></i>About Us</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Home</span>
                    </a>
                </li>
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book" ></i>
                        <span>Pemasok</span>
                    </a>
                    <ul class="sub">
                        <li><a href="input_pemasok.php">Input Suplier</a></li>
                        <li><a href="daftar_pemasok.php">Daftar Suplier</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book" ></i>
                        <span>Pembelian</span>
                    </a>
                    <ul class="sub">
                        <li><a href="input_pembelian.php">Input Pembelian</a></li>
						   <li><a href="daftar_pembelian_almari.php">Laporan Pembelian Almari</a></li>
                        <li><a href="daftar_pembelian_sofa.php">Laporan Pembelian Sofa</a></li>
                        <li><a href="daftar_pembelian_meja_makan.php">Laporan Pembelian Meja Makan</a></li>
                        <li><a href="daftar_pembelian_kursi.php">Laporan Pembelian Kursi</a></li>
                        <li><a href="daftar_pembelian_kasur.php">Laporan Pembelian Kasur</a></li>
                   
                    </ul>
                </li>
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book" ></i>
                        <span>Penjualan</span>
                    </a>
                    <ul class="sub">
                        <li><a href="input_penjualan.php">Input Penjualan</a></li>
                        <li><a href="daftar_penjualan.php">Laporan Penjualan</a></li>
                    </ul>
                </li>

                <li>
                    <a href="registration.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end--><html>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        
        
        <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Input Data Pembelian
            </header>
            <div class="panel-body">

                <form class="form-horizontal bucket-form" action="pembelian_i_res.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Id Pembelian </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value ="<?php echo $new_ID?>" name="id_pembelian" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tgl</label>
                        <div class="col-sm-6">
                           <input type="date" class="form-control" name="tgl_pembelian" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Pemasok :</label>
                        <div class="col-sm-6">
                                                     <select  class="form-control" name="id_pemasok" id="id_pemasok">  
                                                     <?php
                                                       while ($pemasok_tampil=mysqli_fetch_assoc($pemasok_query)){
                                                       echo "<option value='".$pemasok_tampil['id_pemasok']."'>".$pemasok_tampil['nm_pemasok']."</option>";
                                                        }
                                                    ?>
                                                    </select> 
                        </div>
                    </div>
                   <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis Pembelian :</label>
                        <div class="col-sm-6">
                                <select  class="form-control" name="jenis_pembelian"> 
                                                        <option value="almari">Almari</option>
                                                        <option value="sofa">Sofa</option>                                                  
                                                        <option value="meja_makan">Meja Makan</option>                                                  
                                                        <option value="kursi">Kursi</option>                                                  
                                                        <option value="kasur">Kasur</option>                                                  
                                                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kuantitas: Rp</label>
                        <div class="col-sm-6">
                            <input  type="number" class="form-control" name="qty" id="qty" required onblur="hitung()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Harga Satuan: Rp</label>
                        <div class="col-sm-6">
                            <input  type="number" class="form-control" name="harga" id="harga" required onblur="hitung()">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Total Pembelian: Rp </label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control" name="total" id="total" readonly>
                        </div>
                    </div>  
                 <button type="submit" class="btn btn-primary pull-right">SIMPAN</button>
                </form>
            </div>
        </section>
</body>
</html>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });
       
        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }
        
        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
            
            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });
        
       
    });
    </script>
<!-- calendar -->
    <script type="text/javascript" src="js/monthly.js"></script>
    <script type="text/javascript">
        $(window).load( function() {

            $('#mycalendar').monthly({
                mode: 'event',
                
            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

        switch(window.location.protocol) {
        case 'http:':
        case 'https:':
        // running on a server, should be good.
        break;
        case 'file:':
        alert('Just a heads-up, events will not work when run locally.');
        }

        });
    </script>
    <!-- //calendar -->
</body>
</html>
