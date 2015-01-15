<?php
session_start();
if(!isset($_SESSION['user'])){
	?>
	<script language="javascript">
	document.location='signin.php';
	</script>
    <?php }
else{
	?>
	<script language="javascript">
	document.location='home.php';
	</script>
    <?php
}
?>