<?php
	session_start();
	$target = "slike/korisnici/";
	//$_FILES['uploaded']['name']=$_SESSION["ulogovan"];
	//$_FILES['uploaded']['name']  basename($_SESSION["ulogovan"])
	$ime = $_SESSION['ulogovan'].'.jpg';
	$target = $target .$ime; //basename daje ime fajla koji je uploadovan 
	//echo($target);
	
	if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
	{
		include("konekcija.php");
		$sql="UPDATE korisnici SET Slika='".$target."' WHERE KorisnickoIme='".$_SESSION['ulogovan']."'";
		$rezultat=mysql_query($sql);
		if(!$rezultat){?>
			<script type="text/javascript">alert("Neuspesno azuriranje podataka")</script>
		<?php
			
		}
		include("profil.php");
		?>
			<script type="text/javascript">alert("Uspesno promenjena slika")</script>
		<?php
	}
	else {
		include("profil.php");
		?>
			<script type="text/javascript">alert("Izaberite fajl koji zelite da uploadujete")</script>
		<?php
		
	}
?>