<?php
$pomocna=$_GET["unos"];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
 {
 die('Konekcija sa bazom nije uspela: ' . mysql_error());
 }
mysql_select_db("autooglasi", $con);

$sql="SELECT Grad FROM korisnici WHERE Grad LIKE '$pomocna%' ORDER BY Grad";
$result = mysql_query($sql);
if (mysql_num_rows($result)==0)
{
	?>
    <font color="#FF0000"><?php echo "U bazi ne postoji grad koji pocinje na $pomocna"; ?></font>
<?php
} 
else {

while($row = mysql_fetch_array($result))
 {
 ?>
<a href="#" onclick="place(this)" style="text-decoration:none; color:#0F0;">

<?php  echo $row['Grad']?>

</a>
<br/>
 
 <?php
 }
 }
?>