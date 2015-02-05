<?php
	session_start();
	include "konekcija.php";
	
	if(isset($_POST["promenipodatke"])){
		$sql="UPDATE korisnici SET Ime='". $_POST['ime'] ."', Prezime='".$_POST['prezime'] ."',  Email='".$_POST['email'] ."', Grad='".		        $_POST['grad'] ."', DatumRodjenaDan='".$_POST['dan']."', DatumRodjenaMesec='".$_POST['mesec']."', DatumRodjenaGodina='".$_POST['godina']."' WHERE KorisnickoIme='".$_SESSION['ulogovan']."'";
		
		$rezultat=mysql_query($sql);
		if(!$rezultat){?>
			<script type="text/javascript">alert("Neuspesno azuriranje podataka")</script>
		<?php
			$_SESSION['tekuca']="profil";
			include("index.php");
		}else{
			$_SESSION['tekuca']="azurirajPoruka";
			include("index.php");	
		}
		
		
		//$_SESSION["profil"]=0;
	}else{
		$sql="DELETE FROM korisnici WHERE KorisnickoIme='".$_SESSION['ulogovan']."'";
		$rezultat=mysql_query($sql);

		if(!$rezultat){?>
			<script type="text/javascript">alert("Neuspesno deaktiviranje profila")</script>
		<?php
			$_SESSION['tekuca']="profil";
			include("index.php");
		}else{
			//unset($_SESSION["ulogovan"]);
			$_SESSION['tekuca']="brisiPoruka";
			include("index.php");	
		}
		//$_SESSION["profil"]=0;
	}

?>