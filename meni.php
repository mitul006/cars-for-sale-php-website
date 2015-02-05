<?php

	session_start();
	$var = $_GET['index'];
	
	if($var==1){
		$_SESSION['tekuca']="pocetna";
		include("index.php");
	}
	
	if($var==2){
		$_SESSION['tekuca']="o_nama";
		include("index.php");
	}
	
	if($var==3){
		$_SESSION['tekuca']="korisni_linkovi";
		include("index.php");
	}
	
	if($var==4){
		$_SESSION['tekuca']="cesta_pitanja";
		include("index.php");
	}
	
	if($var==5){
		$_SESSION['tekuca']="kamere";
		include("index.php");
	}
	
	if($var==6){
		$_SESSION['tekuca']="kontakt";
		include("index.php");
	}
	
	if($var==7){
		$_SESSION['tekuca']="oglasi";
		include("index.php");
	}
	
	if($var==8){
		$_SESSION['tekuca']="vesti";
		include("index.php");
	}
	
	if($var==9){
		$_SESSION['tekuca']="oglasi_na_mail";
		include("index.php");
	}
	
	if($var==10){
		$_SESSION['tekuca']="uporedi_modele";
		include("index.php");
	}
	
	if($var==11){
		$_SESSION['tekuca']="postavi_oglas";
		include("index.php");
	}
	
	if($var==12){
		$_SESSION['tekuca']="moj_profil";
		include("index.php");
	}
	
	if($var==13){
	header("Location: korisnici.php");
	}
	
	if($var==14){
		$_SESSION['tekuca']="odgovori_na_pitanja";
		include("index.php");
	}
	
	if($var==15){
		$_SESSION['tekuca']="dodaj_administratora";
		include("index.php");
	}
	
	if($var==16){
		$_SESSION['tekuca']="promeni_informacije";
		include("index.php");
	}

?>