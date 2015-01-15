<?php
include("../lib/koneksi.php");
$aksi	= $_POST['aksi'];
$kode	= $_POST['kode'];
$nama	= $_POST['nama'];
$kate	= $_POST['kate'];
$harg	= $_POST['harg'];
$warn	= $_POST['warn'];
$gamb	= $_FILES['gamb']['name'];
$dir	= "../img/produk/".$gamb;
		  move_uploaded_file($_FILES['gamb']['tmp_name'],$dir);
$kete	= $_POST['kete'];
		  
if(!isset($_POST['stat'])){ $stat='Sembunyikan';}else if(isset($_POST['stat'])){ $stat='Tampilkan';}


switch($aksi){
	case "update";
		$kode_lama = $_POST['kode_lama'];
		$sql2=mysql_query("SELECT * FROM produk WHERE KODE_PRODUK='$kode_lama'");
		$data2=mysql_fetch_array($sql2);
		if(empty($gamb)){ $gamb = $data2['GAMBAR']; }
		$sql = mysql_query("UPDATE produk SET KODE_PRODUK='$kode', KODE_KATEGORI='$kate', NAMA_PRODUK='$nama', HARGA='$harg', GAMBAR='$gamb', WARNA='$warn', KETERANGAN='$kete', STATUS='$stat' WHERE KODE_PRODUK = '$kode_lama'");
		if($sql){ header('location:../produk.php'); }else{ ?> 
			<script language="javascript">alert('Gagal Update!!');document.location='../produk.php'</script>
		<?php }
	break;
	case "delete";
		$sql = mysql_query("DELETE FROM produk WHERE KODE_PRODUK = '$kode'");
		if($sql){ header('location:../produk.php'); }else{ ?>
			<script language="javascript">alert('Gagal Delete!!');document.location='../produk.php'</script>
		<?php }
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO produk VALUES('$kode','$kate','$nama','$harg','$gamb','$warn','$kete','$stat')");
		if($sql){ header('location:../produk.php'); }else{ ?>
			<script language="javascript">alert('Gagal Insert!!');document.location='../produk.php'</script>
		<?php }
	break;
}

// echo 'aksi = '.$aksi.'<br>kode = '.$kode.'<br>nama = '.$nama.'<br>kate = '.$kate.'<br>harga = '.$harg.'<br>gamb = '.$gamb.'<br>kate = '.$kete.'<br>stat = '.$stat;