<?php
		session_start();
		include "konekcija.php";
		$sql_upit="SELECT * FROM korisnici WHERE KorisnickoIme='$_POST[korisnickoime]' AND Lozinka='$_POST[sifra]'";
		$rezultat=mysql_query($sql_upit);
				
		if (!$rezultat)
			{
				echo "Nastala je greska pri izvodenju upita<br>"; 
				die();
			}
		if (mysql_num_rows($rezultat)==1)
			{
				$_SESSION['ulogovan']=mysql_result($rezultat,0,"KorisnickoIme");
				$_SESSION['nivo_pristupa']=mysql_result($rezultat,0,"NivoPristupa");
				//$_POST["korime"];
				include("index.php");
			} 
			else
			{
				$_SESSION['tekuca']="porukaLogovanje";
				include("index.php");
				//echo "Korisnik sa korisnickim imenom $_POST[korime] i lozinkom $_POST[lozinka] ne postoji u nasoj bazi podataka";
			}
			mysql_close($db);			
?>