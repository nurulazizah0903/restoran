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


$id = $_GET['id'];

$cart = $_SESSION['cart'];
//print_r($cart);

//untuk mengambil data secara spesifik menggunakan id
$k = array_filter($cart,function ($var) use ($id){
	return ($var['id_menu']==$id);
});
//print_r($k);

foreach ($k as $key => $value){
	unset($_SESSION['cart'][$key]);
}

//mengembalikan urutan data
$_SESSION['cart'] = array_values($_SESSION['cart']);

header('location:kasir.php');
?>