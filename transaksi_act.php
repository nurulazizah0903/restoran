<?php 
include 'config.php';
session_start();
if(isset($_SESSION['userid']))
{
	if($_SESSION['role_id']==5)
	{
		header("location:index_koki.php");
	}
}else{
	$_SESSION['error']='Anda harus login dahulu';
	header("locatin:index.php");
}

//menghilangkan Rp pada nominal
$bayar = preg_replace(' /\D/ ', '', $_POST['bayar']);

$tanggal_waktu = date('Y-m-d H:i:s');
$nomor = rand(111111,999999);
$total = $_POST['total'];
$nama = $_SESSION['nama'];
$kembali = $bayar - $total;
$status = $_POST['status'];

//insert ke tabel transaksi
mysqli_query($dbconnect, "INSERT INTO transaksi (id_transaksi,tanggal_waktu,nomor,total,nama,bayar,kembali,status) VALUES (NULL,'$tanggal_waktu','$nomor','$total','$nama','$bayar','$kembali','$status')");

//mendapatkan id transaksi baru
$id_transaksi = mysqli_insert_id($dbconnect);

//save to db
 mysqli_query($dbconnect,"INSERT INTO kas VALUES (NULL,0,0,'$id_transaksi','$tanggal_waktu')")or die(mysqli_error($dbconnect));


//insert ke detail transaksi
foreach ($_SESSION['cart'] as $key => $value) {
	
	$id_menu = $value['id_menu'];
	$harga = $value['harga_menu'];
	$qty = $value['qty'];
	$tot = $harga*$qty;

	mysqli_query($dbconnect,"INSERT INTO transaksi_detail(id_transaksi_detail,id_transaksi,id_menu,harga,qty,total) VALUES (NULL, '$id_transaksi','$id_menu','$harga','$qty','$tot')");

	//$sum += $value['harga']*$value['qty'];

}

	$_SESSION['cart'] = [];
	//redirect ke halaman transaksi selesai
	header("location:transaksi_selesai.php?idtrx=".$id_transaksi);
?>