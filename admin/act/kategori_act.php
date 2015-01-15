<?php
include("../lib/koneksi.php");
$kode	= $_POST['kode'];
$nama	= $_POST['nama'];
$aksi	= $_POST['aksi'];


switch($aksi){
	case "update";
		$sql = mysql_query("UPDATE kategori SET NAMA_KATEGORI='$nama' WHERE KODE_KATEGORI = '$kode'");
		if($sql){ header('location:../kategori.php'); }
	break;
	case "delete";
		$sql = mysql_query("DELETE FROM kategori WHERE KODE_KATEGORI = '$kode'");
		if($sql){ header('location:../kategori.php'); }
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO kategori VALUES(NULL,'$nama')");
		if($sql){ header('location:../kategori.php'); }
	break;
}

