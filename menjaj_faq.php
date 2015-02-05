<?php
if(isset($_POST['hidden'])){
	$id = $_POST['hidden'];
	$odgovor = $_POST['odgovor'];
	include("konekcija.php");
	$odgovor = mysql_real_escape_string($odgovor);
	$upit = "UPDATE faq SET odgovor = '$odgovor' WHERE q_id='$id'";
	if(!mysql_query($upit)){ 
				echo "Upit se nije izvrsio";
				mysql_close($db);
				
				
				}
			else{
				header("Location:meni.php?index=14.php");
				mysql_close($db);
				}
}
else{
header("Location:meni.php?index=14.php");
}

?>