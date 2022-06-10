<?php  
include 'config.php';
session_start();

if(isset($_SESSION['userid']))
{
  if($_SESSION['role_id']==3)
  {
    header("location:kasir.php");
  }
}else{
  $_SESSION['error']='Anda harus login dahulu';
  header("locatin:index.php");
}

  
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <title>Nota</title>
  <style>

@page{
  size: auto;
}
body {
  background: rgb(204,204,204); 
}

page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.1cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 29.7cm;
  height: 21cm; 
}
page[size="A4"][layout="potrait"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 19.8cm;  
}
page[size="dipakai"][layout="landscape"] {
  width: 20cm;
  height: 20cm;  
}
@media print {
  body, page {
    margin: auto;
    box-shadow: 0;
  }
}

</style>
</head>
<body>
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
    <table class="table table-bordered">
          <thead>
                  <tr>
                    <th class="head0">Id Transaksi Bahan</th>
                    <th class="head1">Nama Bahan</th>
                    <th class="head0">Tanggal</th>
                    <th class="head1">Jumlah</th>
                    <th class="head0">Jumlah Stok</th>
          <th class="head1">Satuan</th>
                  </tr>
                </thead>
      <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM transaksi_bahan NATURAL JOIN bahan WHERE id_transaksi_bahan = '$id' ORDER BY id_transaksi_bahan DESC";
        $detail = mysqli_query($dbconnect, $query);
        
        }
        while($row = mysqli_fetch_array($detail)){
      
      
      ?>
      <tr>
        <td align="center"><?=$row['id_transaksi_bahan']?></td>
        <td align="center"><?=$row['nama_bahan']?></td>
        <td align="center"><?=date('d-F-Y',strtotime($row['tanggal']))?></td>
        <td align="center"><?= $row['jumlah']?></td>
        <td align="center"><?= $row['stok']?></td>
            <td align="center"><?= $row['satuan']?></td>
            
      </tr>
      <?php } ?>
      </table>
      <hr>
            <center>
              <h3>
            <strong>
                TERIMAKASIH 
            </strong>
              </h3>
            </center>
            <hr>
  </div>
</page>
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