<?php 
include 'config.php';
session_start();
if(isset($_SESSION['userid']))
{
	if($_SESSION['role_id']==5)
	{
		header("location:keuangan.php");
	}
}else{
	$_SESSION['error']='Anda harus login dahulu';
	header("locatin:index.php");
}

$qty = $_POST['qty'];

foreach ($_SESSION['cart'] as $key => $value) {
	$_SESSION['cart'] [$key] ['qty'] = $qty[$key];

}

	header('location:kasir.php');
?>