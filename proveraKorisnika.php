<?php
	session_start();
	$q=$_GET["q"];
	
	include("konekcija.php");
	$sql="SELECT KorisnickoIme FROM korisnici WHERE KorisnickoIme='".$q."'";
	
	$result = mysql_query($sql);
if (mysql_num_rows($result)==0)
{
?>
    <font color="#00FF00"><?php echo "Korisničko ime $q je slobodno"; ?></font>
<?php
} 
else {
?>
    <font color="#FF0000"><?php echo "Korisničko ime $q je zauzeto"; ?></font>
<?php
 }

?>