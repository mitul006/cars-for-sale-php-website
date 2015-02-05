<?php
/*session_start();
include("konekcija.php");

$kom = $_POST["Description"];

if (isset ($_POST['postaviPitanje'])){
	$sql = "INSERT INTO 'faq' ('pitanje');";
	$rezultat=mysql_query($sql);
	
	if(!$rezultat){
			?>
				<script type="text/javascript">alert("Neuspesno ubacivanje pitanja!")</script>
			<?php
			//$_SESSION["tekuca"]="profil";
					$_SESSION["tekuca"]="cesta_pitanja";
		include("index.php");


		}else{
			?>
				<script type="text/javascript">alert("Uspesno ste ubacili pitanje!")</script>
			<?php
			//unset($_SESSION["ulogovan"]);
			//$_SESSION["tekuca"]="brisiPoruka";
					$_SESSION["tekuca"]="cesta_pitanja";
		include("index.php");

	
		}
}
*/	


if(!isset($_POST["postaviPitanje"])){
header("Location:../index.php");

exit();
}
else{
include("konekcija.php");
//$ime = $_COOKIE['username'];
$ime = $_SESSION['ulogovan'];
$description = mysql_real_escape_string($_POST[Description]);
$odgovor = "Jos nema odgovora na ovo pitanje";
$sql = "INSERT into faq(username,pitanje,odgovor,date) 
			VALUES ('$ime','$description','$odgovor',CURDATE())";
if(!mysql_query($sql)){ 
				echo "Doslo je do greske, niste uspeli da postavite pitanje!!!";
				mysql_close($db);		
				}
			else{
				header("Location:../meni.php?index=4");
				mysql_close($db);
				}
}
ob_end_flush();

?>