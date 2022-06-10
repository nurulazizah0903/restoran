<?php
include 'config.php';
session_start();

if (isset($_SESSION['userid']))
{
	if ($_SESSION['role_id']==8)
	{
		//move ke kasir
		header("location:keuangan.php");
	}
}else{
	$_SESSION['error'] = 'Anda Harus Login Dahulu';
	header("location:index.php");
}

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];

	mysqli_query($dbconnect, "DELETE FROM pengajuan_bahan WHERE status = 'selesai' AND id_pengajuan='$id
		' ");

	$_SESSION['success']='Berhasil Menghapus Data';

	header("location:pengeluaran_dana.php");
}

?>