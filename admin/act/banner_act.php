<?php
include("../lib/koneksi.php");
$aksi	= $_POST['aksi'];
$kode	= $_POST['kode'];
$no		= $_POST['no'];
$gamb	= $_FILES['gamb']['name'];
$dir	= "../img/banner/".$gamb;
		  move_uploaded_file($_FILES['gamb']['tmp_name'],$dir);


switch($aksi){
	case "update";
		$sql2=mysql_query("SELECT * FROM banner WHERE KODE_BANNER='$kode'");
		$data2=mysql_fetch_array($sql2);
		if(empty($gamb)){ $gamb = $data2['GAMBAR']; }
		$sql = mysql_query("UPDATE banner SET NO_URUT='$no', GAMBAR='$gamb' WHERE KODE_BANNER = '$kode'");
		if($sql){ header('location:../banner.php'); }else{ ?> 
			<script language="javascript">alert('Gagal Update!!');document.location='../banner.php'</script>
		<?php }
	break;
	case "delete";
		$sql3 = mysql_query("DELETE FROM banner WHERE KODE_BANNER = '$kode'");
		if($sql3){ ?><script language="javascript">document.location='../banner.php'</script> <?php }else{ ?>
			<script language="javascript">alert('Gagal Delete!!');document.location='../banner.php'</script>
		<?php }
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO banner VALUES(NULL,'$no','$gamb')");
		if($sql){ header('location:../banner.php'); }else{ ?>
			<script language="javascript">alert('Gagal Insert!!');document.location='../banner.php'</script>
		<?php }
	break;
}

// echo 'aksi = '.$aksi.'<br>kode = '.$kode.'<br>nama = '.$nama.'<br>kate = '.$kate.'<br>harga = '.$harg.'<br>gamb = '.$gamb.'<br>kate = '.$kete.'<br>stat = '.$stat;