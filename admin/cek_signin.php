<?php
error_reporting( E_ALL ^ E_NOTICE);
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$default_user = 'azzahra';
$default_pass = 'imamsarjono';

if(empty($user)or empty($pass)){
	?>
	<script language="JavaScript">
		alert("Tidak Boleh Kosong");
		document.location="index.php";
	</script>
	<?php
	
	}else{
		
		if (($user == $default_user) and ($pass == $default_pass)) {
			$_SESSION['user']= $default_user;
			$_SESSION['pass'] = $default_pass;

			?>
			<script language="JavaScript">
				document.location="home.php";
			</script>
			<?php
		}else{
				?>
			<script language="JavaScript">
				alert("Salah");
				document.location="index.php";
			</script>
			<?php
		}
}
?>