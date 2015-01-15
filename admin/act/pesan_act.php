<?php
include("../lib/koneksi.php");
$aksi	= $_POST['aksi'];
$kode	= $_POST['kode'];
$nama	= $_POST['nama'];
$email	= $_POST['email'];
$pesan	= $_POST['pesan'];


switch($aksi){
	case "delete";
		$sql = mysql_query("DELETE FROM pesan WHERE KODE_PESAN = '$kode'");
		if($sql){ header('location:../pesan_konsumen.php'); }else{ ?>
        	<script language="javascript">alert('Gagal!!');document.location='../pesan_konsumen.php'</script>
        <?php }
		
		
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO pesan VALUES(NULL,'$nama','$email','$pesan')");
		if($sql){ header('location:../../contact.php'); }else{ ?>
        	<script language="javascript">alert('Gagal!!');document.location='../../contact.php'</script>
        <?php }
	break;
}

//echo $produk.'<br>'.$bs.'<br>'.$pb;