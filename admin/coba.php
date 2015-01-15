<?php error_reporting(0); ?>
<form action="<?php  ?>" method="post" >
<input type="text" name="nama">
<input type="text" name="alamat">
<input type="submit" >
</form>
<br><br>
<?php 
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
echo $nama.'<br>'.$alamat;
?>