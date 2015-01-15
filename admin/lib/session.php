<?php 
if(!isset($_SESSION['user'])){
	?><script language="javascript">
	alert("Anda Belum Login");
    document.location="index.php";
    </script>
	
	<?php
}else{
	if(!isset($user)){
		$user = $_SESSION['user'];
	}
}