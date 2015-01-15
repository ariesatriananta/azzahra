<?php
include("../lib/koneksi.php");
$aksi	= $_POST['aksi'];
$page	= $_POST['page'];
$kode	= $_POST['kode'];
$produk	= $_POST['produk'];
$bs		= $_POST['bestseller'];
$pb		= $_POST['produkbaru'];

if(empty($_POST['bestseller'])){ $bs = NULL; }
if(empty($_POST['produkbaru'])){ $pb = NULL; }


switch($aksi){
	case "delete";
		$sql = mysql_query("DELETE FROM frontend WHERE KODE_FRONTEND = '$kode'");
		if($sql){ header('location:../'.$page.''); }else{ ?>
        	<script language="javascript">alert('Gagal!!');document.location='../<?php echo $page; ?>'</script>
        <?php }
		
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO frontend VALUES(NULL,'$produk','$bs','$pb')");
		if($sql){ header('location:../'.$page.''); }else{ ?>
        	<script language="javascript">alert('Gagal!!');document.location='../<?php echo $page; ?>'</script>
        <?php }
	break;
}

//echo $produk.'<br>'.$bs.'<br>'.$pb;