<?php
include("../lib/koneksi.php");
$kode	= $_POST['kode'];
$aksi	= $_POST['aksi'];
$judul	= $_POST['judul'];
$alamat	= $_POST['alamat'];
$telp	= $_POST['telp'];
$bbm	= $_POST['bbm'];
$email	= $_POST['email'];
$web	= $_POST['web'];


switch($aksi){
	case "update";
		$sql = mysql_query("UPDATE hubungi_kami SET JUDUL='$judul', ALAMAT='$alamat', TELP='$telp', BBM='$bbm', EMAIL='$email', WEB='$web' WHERE KODE_HUBUNGIKAMI = '$kode'");
		if($sql){ header('location:../hubungi_kami.php'); }
	break;
	case "delete";
		$sql = mysql_query("DELETE FROM hubungi_kami WHERE KODE_HUBUNGIKAMI = '$kode'");
		?>
		<script language='javascript'>document.location='../hubungi_kami.php';</script>
		<?php
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO hubungi_kami VALUES(NULL,'$judul','$alamat','$telp','$bbm','$email','$web')");
		if($sql){ header('location:../hubungi_kami.php'); }
	break;
}

