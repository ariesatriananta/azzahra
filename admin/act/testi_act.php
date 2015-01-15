<?php
include("../lib/koneksi.php");
$kode	= $_POST['kode'];
$by	= $_POST['by'];
$aksi	= $_POST['aksi'];
$isi	= $_POST['isi'];


switch($aksi){
	case "update";
			// print_r($_POST);
			// exit;
		$sql = mysql_query("UPDATE testimoni SET ISI='$isi', DARI='$by' WHERE KODE_TESTI = '$kode'");
		if($sql){ header('location:../testimoni.php'); }
	break;
	case "delete";
		$sql = mysql_query("DELETE FROM testimoni WHERE KODE_TESTI = '$kode'");
		if($sql){ header('location:../testimoni.php'); }
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO testimoni VALUES(NULL,'$isi','$by')");
		if($sql){ header('location:../testimoni.php'); }
	break;
}

