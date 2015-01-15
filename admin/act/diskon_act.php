<?php
include("../lib/koneksi.php");
$aksi	= $_POST['aksi'];
$kode	= $_POST['kode'];
$produk	= $_POST['produk'];
$persen	= $_POST['persen'];


switch($aksi){
	case "delete";
		$sql = mysql_query("DELETE FROM diskon WHERE KODE_DISKON = '$kode'");
		if($sql){ header('location:../diskon.php'); }else{ ?>
        	<script language="javascript">alert('Gagal!!');document.location='../diskon.php'</script>
        <?php }
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO diskon VALUES(NULL,'$produk','$persen')");
		if($sql){ header('location:../diskon.php'); }else{ ?>
        	<script language="javascript">alert('Gagal!!');document.location='../diskon.php'</script>
        <?php }
	break;
	case "update";
		$sql = mysql_query("UPDATE diskon SET PERSEN='$persen' WHERE KODE_DISKON = '$kode'");
		if($sql){ header('location:../diskon.php'); }else{ ?>
        	<script language="javascript">alert('Gagal!!');document.location='../diskon.php'</script>
        <?php }
	break;
}

//echo $produk.'<br>'.$bs.'<br>'.$pb;