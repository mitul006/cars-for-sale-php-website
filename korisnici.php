<?php

	session_start();
	include "konekcija.php";
	
	$sql="SELECT * FROM korisnici";
	if (!$rezultat=mysql_query($sql))
	{
		echo "Nastala je greška pri izvodenju upita<br>" . mysql_query();
		die();
	}else{
		$_SESSION["tekuca"]="korisnici";
		$_SESSION["rezultat"]=$rezultat;
		
		//session_write_close();
		//session_start();
		//header("Location: index.php");
		include("index.php");
		
	}	
	
?>