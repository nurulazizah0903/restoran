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

//$view = $dbconnect->query("SELECT k.id_transaksi,t.id_transaksi,t.total,t.tanggal_waktu FROM kas k,transaksi t WHERE k.id_transaksi=t.id_transaksi");


//$view1 = $dbconnect->query("SELECT k.id_pengajuan,p.id_pengajuan,p.harga,p.tanggal_p,p.jumlah FROM kas k,pengajuan_bahan p WHERE k.id_pengajuan=p.id_pengajuan AND status = 'selesai'");


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
        <div class="sidebar" data-image="assets/img/sidebar-4.jpg">
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
                                    <span class="no-icon">Arus Kas</span>
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
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Arus Kas</h4>
                                </div>
                                <div class="card-body">
<form method="POST" class="col-sm">
<div class="form-group">
            <label>Tanggal Awal</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <input type="date" id="tanggal1" placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tanggal1"  value="<?php if (isset($_POST['tanggal1'])) echo $_POST['tanggal1'];?>" >
            </div>
        </div>
        <div class="form-group">
            <label>Tanggal Akhir</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <input type="date" id="tanggal2" placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tanggal2" value="<?php if (isset($_POST['tanggal2'])) echo $_POST['tanggal2'];?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-fill">Cari</button>
        </div>
    </form>

   <!--
    <div class="form-group">
       <label for="tanggal1">Tanggal Mulai </label>
       <input type="date" name="tanggal1" id="tanggal1" value=""<?php if (isset($_POST['tanggal1'])) echo $_POST['tanggal1'];?>" class="form-control" required>
       <label for="tanggal2">Tanggal Akhir </label>
       <input type="date" name="tanggal2" id="tanggal2" value=""<?php if (isset($_POST['tanggal2'])) echo $_POST['tanggal2'];?>" class="form-control" required> 
       <button type="submit" name="submit" class="btn btn-primary btn-fill">Cari</button>
    </div>
</form>-->

<page size="dipakai" layout="landscape">
    <br>
     <div class="container">
      <span id="remove">
        <a class="btn btn-success" id="ct"><span class="icon-print"></span> CETAK</a>
      </span>
    </div>
<div align="center">

        <h4>
          RESTAURANT JasaThecno
        </h4>
        <span>
          Jl.juanda regency blok i7, Kab. Surabaya, Jawa Timur<br>
          Telp. +6289 xxx xxx xxx || E-mail exsample@gmail.com
        </span>
        <hr>
<div class="card-body table-full-width table-responsive">
    
    <h3>  Penerimaan Kas  </h3>
<table class="table table-hover table-striped">
    <tr>
       <td>ID Kas Dari Pelanggan</td>
       <td>Total</td>
       <td>Tanggal</td>
    </tr>
    <?php 
    // while ($row = $view-> fetch_array()) {
        # code...
    if (isset($_POST['submit'])) {
        $tanggal1 = $_POST['tanggal1'];
        $tanggal2 = $_POST['tanggal2'];

 if (!empty($tanggal1) && !empty($tanggal2)) {
  // perintah tampil data berdasarkan range tanggal
    $view = mysqli_query($dbconnect,"SELECT k.id_transaksi,t.id_transaksi,t.total,k.tanggal FROM kas k,transaksi t WHERE k.id_transaksi=t.id_transaksi AND tanggal BETWEEN '$tanggal1' AND '$tanggal2'"); 
 } else {
  // perintah tampil semua data
   $view = mysqli_query($dbconnect,"SELECT k.id_transaksi,t.id_transaksi,t.total,k.tanggal FROM kas k,transaksi t WHERE k.id_transaksi=t.id_transaksi ");
}
}else{
    // perintah tampil semua data
     $view = mysqli_query($dbconnect,"SELECT k.id_transaksi,t.id_transaksi,t.total,k.tanggal FROM kas k,transaksi t WHERE k.id_transaksi=t.id_transaksi ");
}

    /*if(isset($_POST['submit'])){
                $tgl = $_GET['tanggal'];
                $view = mysqli_query($dbconnect,"SELECT k.id_transaksi,t.id_transaksi,t.total,k.tanggal FROM kas k,transaksi t WHERE k.id_transaksi=t.id_transaksi AND tanggal='$tgl'");
            }else{
                $view = mysqli_query($dbconnect,"SELECT k.id_transaksi,t.id_transaksi,t.total,k.tanggal FROM kas k,transaksi t WHERE k.id_transaksi=t.id_transaksi ");
            }*/
    while($row = mysqli_fetch_array($view)){
    ?>
    <tr>
       <td><?=$row['id_transaksi']?></td>
       <td><?=number_format($row['total'])?></td>
       <td><?=date('d-F-Y',strtotime($row['tanggal']))?></td>
    </tr>
    <?php 
    }

    ?>
  </table>
</div>
<div class="card-body table-full-width table-responsive">
<h3>  Pengeluaran Kas  </h3>
<table class="table table-hover table-striped">
    <tr>
       <td>ID Pengeluaran Bahan</td>
       <td>Jumlah</td>
       <td>Total Harga</td>
       <td>Tanggal</td>
    </tr>
    <?php 
if (isset($_POST['submit'])) {
        $tanggal1 = $_POST['tanggal1'];
        $tanggal2 = $_POST['tanggal2'];

 if (!empty($tanggal1) && !empty($tanggal2)) {
  // perintah tampil data berdasarkan range tanggal
    $view1 = mysqli_query($dbconnect,"SELECT k.id_pengajuan,p.id_pengajuan,p.harga,k.tanggal,p.jumlah FROM kas k,pengajuan_bahan p WHERE k.id_pengajuan=p.id_pengajuan AND status = 'selesai' AND tanggal BETWEEN '$tanggal1' AND '$tanggal2'"); 
 } else {
  // perintah tampil semua data
   $view1 = mysqli_query($dbconnect,"SELECT k.id_pengajuan,p.id_pengajuan,p.harga,k.tanggal,p.jumlah FROM kas k,pengajuan_bahan p WHERE k.id_pengajuan=p.id_pengajuan AND status = 'selesai'");
}
}else{
    // perintah tampil semua data
     $view1 = mysqli_query($dbconnect,"SELECT k.id_pengajuan,p.id_pengajuan,p.harga,k.tanggal,p.jumlah FROM kas k,pengajuan_bahan p WHERE k.id_pengajuan=p.id_pengajuan AND status = 'selesai'");
}

    // while ($row = $view1-> fetch_array()) {
        # code...
    /*if(isset($_GET['tanggal'])){
                $tgl = $_GET['tanggal'];
                $view1 = mysqli_query($dbconnect,"SELECT k.id_pengajuan,p.id_pengajuan,p.harga,k.tanggal,p.jumlah FROM kas k,pengajuan_bahan p WHERE k.id_pengajuan=p.id_pengajuan AND status = 'selesai' AND tanggal='$tgl'");
            }else{
                $view1 = mysqli_query($dbconnect,"SELECT k.id_pengajuan,p.id_pengajuan,p.harga,k.tanggal,p.jumlah FROM kas k,pengajuan_bahan p WHERE k.id_pengajuan=p.id_pengajuan AND status = 'selesai'");
            }*/
    while($row = mysqli_fetch_array($view1)){
    ?>
    <tr>
       <td><?=$row['id_pengajuan']?></td>
       <td><?=$row['jumlah']?></td>
       <td><?=number_format($row['harga']*$row['jumlah'])?></td>
       <td><?=date('d-F-Y',strtotime($row['tanggal']))?></td>
    </tr>
    <?php 
    }

    ?>
  </table>
            <hr>
  </div>
  </page>
</div>                               </div>
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
<script type="text/javascript">
  document.getElementById('ct').onclick = function(){
    $("#remove").remove();
    window.print();
  }
  $(document).ready(function(){
    $("remove").remove();

  });
 
</script>
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

</html>
