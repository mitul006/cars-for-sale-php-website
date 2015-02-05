<?php
	session_start();
	include "konekcija.php";
	$rb=$_GET["rb"];
	$nivo_pr=$_POST["nivopr".$rb];
	//$kor_ime=$_POST["korime".$rb];
	$kor_ime=$_GET["kor_ime"];
	
	if(isset($_POST["azuriraj"])){
		$sql="UPDATE korisnici SET NivoPristupa='".$nivo_pr."' WHERE KorisnickoIme='".$kor_ime."'";
		//$sql="UPDATE korisnici SET NivoPristupa='".$nivo_pr."' WHERE KorisnickoIme='milena'";
		$rezultat=mysql_query($sql);
		
		if(!$rezultat){
			?>
				<script type="text/javascript">alert("Neuspesno azuriranje podataka")</script>
			<?php
			//$_SESSION["tekuca"]="profil";
			include("korisnici.php");
		}else{
			?>
				<script type="text/javascript">
					alert("Uspesno azuriranje podataka")
					//alert("<?php echo $sql ?>")
				</script>
			<?php
			//$_SESSION["tekuca"]="korisnici";
			include("korisnici.php");	
		}
		
		
		//$_SESSION["profil"]=0;
	}elseif(isset($_POST["obrisi"])){
		$sql="DELETE FROM korisnici WHERE KorisnickoIme='".$kor_ime."'";
		$rezultat=mysql_query($sql);

		if(!$rezultat){
			?>
				<script type="text/javascript">alert("Neuspesno deaktiviranje profila")</script>
			<?php
			//$_SESSION["tekuca"]="profil";
			include("korisnici.php");
		}else{
			?>
				<script type="text/javascript">alert("Uspesno deaktiviranje profila")</script>
			<?php
			//unset($_SESSION["ulogovan"]);
			//$_SESSION["tekuca"]="brisiPoruka";
			include("korisnici.php");	
		}
		//$_SESSION["profil"]=0;
	}

?>