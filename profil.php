<?php
		session_start();
		include "konekcija.php";

		$sql="SELECT Ime, Prezime, DatumRodjenaGodina, DatumRodjenaMesec, DatumRodjenaDan, KorisnickoIme, Lozinka, Email, Grad, Slika FROM korisnici WHERE KorisnickoIme='".$_SESSION['ulogovan']."'";
		$rezultat=mysql_query($sql);
		if (!$rezultat)
		{
			?><script type="text/javascript">alert("Nastala je greska pri upitu")</script><?php
		}
		if (mysql_num_rows($rezultat)==0)
		{
			?><script type="text/javascript">alert("Ne postoji korisnik sa tim korisnickim imenom")</script><?php mysql_error();
		} 
		else {
			$_SESSION['tekuca']="profil";
			$_SESSION['rezultat']=$rezultat;
			include("index.php");
 		} 
 ?>