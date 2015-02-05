<?php
		session_start();
		if(!isset($_SESSION['tekuca'])){
		$_SESSION['tekuca']="pocetna";
		}	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Auto oglasi::</title>
</head>
<script type="text/javascript" src="js/proveraKorisnika.js"></script>
<script type="text/javascript" src="js/obradiGlasanje.js"></script>
<link rel="stylesheet" type="text/css" href="css/stil.css">
<body>
<?php
include "konekcija.php";
$sql="SELECT * FROM gume";
$rezultat = $mysqli->query($sql);	//anketa
?>
	<div class="main">
    	<?php include('includes/link.php'); ?>
		<?php include('includes/link2.php'); ?>
		<?php include('includes/heder.php'); ?>
    	<?php include('includes/link3.php'); ?>
        <?php include('includes/pretrazivac.php'); ?>
        <div class="container">
		<?php include('includes/glavniLevi.php'); ?>
		<?php include('includes/glavniDesni.php'); ?>
		<div class="containerSrednji">
		<div class="glavniOglas"><?php include('includes/glavna.php'); ?></div>
		</div>
		</div>
        <?php include('includes/futer.php'); ?>
   	</div>
</body>
</html>