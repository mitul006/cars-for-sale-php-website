<?php
		session_start();
		//unset($_SESSION["ulogovan"]);
		//$_SESSION["tekuca"]="pocetna";
		session_destroy();
		//include("sajt.php");
		header("Location: index.php");
?>