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
session_start();

if (isset($_SESSION['userid']))
{
    if ($_SESSION['role_id']==6)
    {
        //move ke admin
        header("location:manager.php");
    
     }
     else if ($_SESSION['role_id']==3)
    {
        //move ke kasir
        header("location:kasir.php");
    }
     else if ($_SESSION['role_id']==5)
    {
        //move ke koki
        header("location:koki.php");
    }
    else if ($_SESSION['role_id']==8)
    {
        //move ke koki
        header("location:keuangan.php");
    }
    
}else{
    $_SESSION['error'] = "Anda Harus Login Dahulu";
    header("location:index.php");
}
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
        <div class="sidebar" data-image="assets/img/sidebar-1.jpg">
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
                    <div class="logo">
                    <a class="simple-text">
                        KOKI
                    </a>
                </div>
                    <li>
                        <a class="nav-link" href="bahan_koki.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Bahan</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="menu.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Menu</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="transaksi_bahan.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Transaksi Bahan</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="pengajuan_bahan.php">
                            <i class="fa fa-plus-square-o"></i>
                            <p>Pengajuan Bahan</p>
                        </a>
                    </li>
                    <div class="logo">
                    <a class="simple-text">
                        MANAGER
                    </a>
                </div>
                    <li>
                        <a class="nav-link" href="riwayat_transaksi.php">
                            <i class="fa fa-history"></i>
                            <p>Riwayat Transaksi</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="menu.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Menu</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="info_pengajuan.php">
                            <i class="fa fa-balance-scale"></i>
                            <p>Info Pengajuan <br>Bahan</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="user.php">
                            <i class="fa fa-address-book"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="bahan.php">
                            <i class="fa fa-plus-square-o"></i>
                            <p> Bahan</p>
                        </a>
                    </li>
                    <div class="logo">
                    <a class="simple-text">
                        KEUANGAN
                    </a>
                </div>
                    <li>
                        <a class="nav-link" href="riwayat_transaksi.php">
                            <i class="fa fa-history"></i>
                            <p>Riwayat Transaksi</p>
                        </a>
                    </li>
                   <li>
                        <a class="nav-link" href="pengajuan_dana.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Pengajuan Dana <br>Bahan</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="pengeluaran_dana.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Riwayat <br>Pengeluaran Dana <br>Bahan</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="arus_kas.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Laporan Arus Kas</p>
                        </a>
                    </li>
                <div class="logo">
                    <a class="simple-text">
                        KASIR
                    </a>
                </div>
                    <li>
                        <a class="nav-link" href="kasir.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Kasir</p>
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
                                <a class="nav-link" href="logout.php">
                                    <span class="no-icon">Log out</span>
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
                                    <h4 class="card-title">Halo <?=$_SESSION['nama']?></h4>
                                </div>
                                <div class="card-body">
                                    <!--isi-->
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
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
</html>
