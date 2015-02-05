<?php
		session_start();
		include "konekcija.php";
		
		
		

if ((isset($_POST["action"])) && (isset($_POST["registrujse"])))
{
$pom1=$_POST["ime"];
$pom2=$_POST["prezime"];
$pom3=$_POST["korisnickoime1"];
$pom4=$_POST["sifra1"];
$pom5=$_POST["email"];
$pom5_bez_praznina=trim($pom5); 
$trazeni="@";
$brpojavljivanja=substr_count($pom5_bez_praznina,$trazeni);
$pozicijatrazenog=strpos($pom5_bez_praznina,$trazeni);
$brpojavljivanjatacke=substr_count($pom5_bez_praznina,"."); 
$pozicijatacke=strpos($pom5_bez_praznina,".");
$duzinamejla=strlen($pom5_bez_praznina) ;     
$pom6=$_POST["grad"];
if(!$pom1>0){?>
<script type="text/javascript">alert("Morate uneti vase ime!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if (!$pom2>0) {?>
<script type="text/javascript">alert("Morate uneti vase prezime!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if (!$pom3>0){?>
<script type="text/javascript">alert("Morate uneti vase korisnicko ime!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if (!$pom4>0){?>
<script type="text/javascript">alert("Morate uneti vasu lozinku!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if (!$pom5>0){?>
<script type="text/javascript">alert("Morate uneti vas e-mail!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if($brpojavljivanja != 1){?>
<script type="text/javascript">alert("E-mail format nije odgovarajuci!Pokušajte ponovo!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if($brpojavljivanjatacke != 1){?>
<script type="text/javascript">alert("E-mail format nije odgovarajuci!Pokušajte ponovo!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if($pozicijatrazenog < 1){?>
<script type="text/javascript">alert("E-mail format nije odgovarajuci!Pokušajte ponovo!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if($pozicijatacke > $duzinamejla-2){?>
<script type="text/javascript">alert("E-mail format nije odgovarajuci!Pokušajte ponovo!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if($pozicijatacke - $pozicijatrazenog < 2){?>
<script type="text/javascript">alert("E-mail format nije odgovarajuci!Pokušajte ponovo!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else if (!$pom6>0){?>
<script type="text/javascript">alert("Morate uneti naziv grada!");</script><?php $_SESSION["tekuca"]="registracija";
		include("index.php");
}else{
		$sql_upit="INSERT INTO korisnici(ID, Ime, Prezime, DatumRodjenaDan, DatumRodjenaMesec, DatumRodjenaGodina, KorisnickoIme, Lozinka, 					NivoPristupa, Email, Grad) 
					values ('', '$_POST[ime]', '$_POST[prezime]', '$_POST[dan]', '$_POST[mesec]', '$_POST[godina]', '$_POST[korisnickoime1]',  '$_POST[sifra1]','guest','$_POST[email]','$_POST[grad]')";
		$rezultat=mysql_query($sql_upit);
				
		if ($rezultat)
			{
				//$_SESSION["poruka"]="Uspesno ste se registrovali, sada se mozete ulogovati";
				$_SESSION['tekuca']="registracijaPoruka";
				include ("index.php");
			}
			else{?>
				<script type="text/javascript">alert("Neuspesna registracija, pokušajte ponovo!")</script>
			<?php
				$_SESSION['tekuca']="registracija";
				include ("index.php");
			}
	}
}
		mysql_close($db);
?>