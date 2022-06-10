<?php
include 'config.php';
session_start();

if(isset($_SESSION['userid']))
{
	if($_SESSION['role_id']==5)
	{
		header("location:koki.php");
	}
}else{
	$_SESSION['error']='Anda harus login dahulu';
	header("locatin:index.php");
}

	if(isset($_POST['id_menu'])){
	$id_menu = $_POST['id_menu'];
	$qty = $_POST['qty'];

	$data=mysqli_query($dbconnect,"SELECT * FROM menu WHERE id_menu = '$id_menu'");
	$b = mysqli_fetch_assoc($data);
	
	$menu = [
		'id_menu' => $b['id_menu'],
		'nama_menu' => $b['nama_menu'],
		'harga_menu' => $b['harga_menu'],
		'qty' => $qty
		];
		
	$_SESSION['cart'][]=$menu;
	krsort($_SESSION['cart']);
	
	header('location:kasir.php');
}
?>