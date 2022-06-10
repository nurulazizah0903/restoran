<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->

<?php

include 'config.php';
session_start();

if (isset($_SESSION['userid']))
{
  if ($_SESSION['role_id']==3)
  {
    //move ke admin
    header("location:kasir.php");
  
   }
  
}else{
  $_SESSION['error'] = "Anda Harus Login Dahulu";
  header("location:index.php");
}


$view = $dbconnect->query("SELECT * FROM menu");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Restoran</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/bg-01.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text">
                        Nurul Azizah
                    </a>
                </div>
                <ul class="nav">
                     <li>
                        <a class="nav-link" href="tambah_menu.php">
                            <i class="fa fa-plus-square-o"></i>
                            <p>Tambah Menu</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" onclick="history.back(-1)">
                            <i class="fa fa-reply"></i>             
                            <p>Kembali</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                          
                          Manajemen Restauran Berkah
                            
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link">
                                    <span class="no-icon">Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h3>List Menu</h3>
                                </div>
                                <div class="card-body">
                                    <?php if (isset($_SESSION['success']) && $_SESSION['success'] != '') {?>

    <div class="alert alert-success" role="alert">
      <?=$_SESSION['success']?>
  </div>

 <?php  
  }

  $_SESSION['success'] = '';

 ?>
 <form class="form-inline" method="post" role="search" >
   <div class="col-md-4">
        <input type="text" name="keyword" class="form-control" placeholder="Cari Menu Disini...">
    </div>
  <button type="submit" name="cari" class="btn btn-primary btn-fill">Cari</button>
  <a href="menu.php" class="btn btn-danger btn-fill">Reset</a>
</form> 

  <table id="tabel"  class="table table-hover table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Id Menu</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Stok Menu</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
</thead>
    <?php 
    
    $i=1;
    $batas = 7;
    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;    
 
    $previous = $halaman - 1;
    $next = $halaman + 1;
             
    $view = mysqli_query($dbconnect,"SELECT * FROM menu");
    $jumlah_data = mysqli_num_rows($view);
    $total_halaman = ceil($jumlah_data / $batas);
 
    $view = mysqli_query($dbconnect,"SELECT * FROM menu LIMIT $halaman_awal, $batas");
    $nomor = $halaman_awal+1;

    if(isset($_POST['cari'])) {
        $_SESSION['session_pencarian'] = $_POST['keyword'];
        $keyword = $_SESSION['session_pencarian'];
        $view = mysqli_query($dbconnect, "SELECT * FROM menu WHERE nama_menu LIKE '%$keyword%'");
    }else {
        $keyword = ['session_pencarian'];
    }


    while($row = mysqli_fetch_array($view)){
     // while ($row = $view-> fetch_array()) {
        # code...

    ?>
    <tr>
        <td><?=$i?></td>
        <td><?= $row['id_menu']?></td>
        <td><?= $row['nama_menu']?></td>
        <td><?= number_format($row['harga_menu'])?></td>
        <td><?= $row['stok_menu']?></td>
        <td align="Center"><img src="assets/img/<?=$row['gambar_menu']?>" width="100" height="80"></td>
        <td>
            <a href="edit_menu.php?id=<?=$row['id_menu']?>" class="btn btn-primary btn-fill">Edit</a> 
            <a href="hapus_menu.php?id=<?=$row['id_menu']?>" class="btn btn-warning btn-fill" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
        </td>
    </tr>
    <?php 
    $i++;
    }

    ?>
  </table>
  <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
        </nav>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, Nurul Azizah 
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
</html>
