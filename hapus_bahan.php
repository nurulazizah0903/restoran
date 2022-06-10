<?php
include 'config.php';
session_start();

if (isset($_SESSION['userid']))
{
	if ($_SESSION['role_id']==3)
	{
		//move ke kasir
		header("location:kasir.php");
	}
}else{
	$_SESSION['error'] = 'Anda Harus Login Dahulu';
	header("location:index.php");
}

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];

	mysqli_query($dbconnect, "DELETE FROM bahan WHERE id_bahan='$id' ");

	$_SESSION['success']='Berhasil Menghapus Data';

	header("location:bahan.php");
}

?>