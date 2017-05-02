<?php 
include 'crud.php';
$db = new crud();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['tahunterbit']);
 	header("location:index.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:index.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['tahunterbit']);
 	header("location:index.php");
 }
?>