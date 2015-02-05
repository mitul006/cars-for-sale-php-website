<?php
		session_start();
		include "konekcija.php";
		$sql_upit="INSERT INTO korisnici(ID, Ime, Prezime, DatumRodjenaDan, DatumRodjenaMesec, DatumRodjenaGodina, KorisnickoIme, Lozinka, NivoPristupa, Email, Grad) 
					values ('', '$_POST[ime]', '$_POST[prezime]', '$_POST[dan]', '$_POST[mesec]', '$_POST[godina]', '$_POST[korime1]', 																									                    '$_POST[lozinka1]','guest','$_POST[email]','$_POST[grad]')";
		$rezultat=mysql_query($sql_upit);
				
		if ($rezultat)
			{
				//$_SESSION["poruka"]="Uspesno ste se registrovali, sada se mozete ulogovati";
				$_SESSION["tekuca"]="registracijaPoruka";
				include ("index.php");
			}
			else{?>
				<script type="text/javascript">alert("Niste se registrovali, pokusajte ponovo")</script>
			<?php
				$_SESSION["tekuca"]="registracija";
				include ("index.php");
			}
		mysql_close($db);
?>