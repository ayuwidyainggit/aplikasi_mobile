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




?>
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
    <a href="index.html" class="logo">
        FURNITURE
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
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
                <img alt="" src="images/2.png">
                <span class="username">admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
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
                    <a class="active" href="index.html">
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
                        <li><a href="daftar_pembelian_gelas.php">Laporan Pembelian Bahan Jadi</a></li>
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
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    
                                 <?php  
								  $no=0;
										$id_penjualan = $_GET['id_penjualan']; 

										$sql_data="select * from penjualan where id_penjualan='$id_penjualan'";
										$hasil_data = $koneksidb->query($sql_data);
										$data = $hasil_data->fetch_array();
                                ?>
                              
    <div class="card-content table-responsive">
	<h4 class="title">Faktur Penjualan</h4><table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td colspan="3">Pembelian : <?php echo $data['nm_pelanggan']; ?></td>
                                                <td colspan="2">No Faktur : <?php echo $data['id_penjualan']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="2">Tanggal Penjualan : <?php echo $data['tgl_jual']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Kuantitas</th>
                                                <th>Harga Satuan</th>
                                                <th>Total</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td><?php echo  $data['barang']; ?> &nbsp </td>
                                                <td><?php echo  $data['qty_jual']; ?> &nbsp unit</td>
                                                <td>Rp &nbsp <?php echo  $data['harga_satuan']; ?></td>
                                                <td>Rp &nbsp <?php echo  $data['total_penjualan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="4"><center>Total Bayar</center></th>
                                                <th>Rp &nbsp <?php echo $data['total_penjualan']; ?></th>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td>Bagian Penjualan <br> <br> <br> <br> ...............................</td>
                                            </tr>
                                            
                                    <?php 
									{
                                        }
										
                                    ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>

<!--sidebar end-->
<!--main content start-->
 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
          </div>
  <!-- / footer -->
</section>
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