<div id="anketa">
    	<table>
        	<tr><td style="border:solid 1px #00C; font-family:Tahoma, Geneva, sans-serif; height:25px; color:#FFF; font-size:12px; width:190px; background:url(slike/nastavak.jpg);"><strong>Anketa</strong></td></tr>
            <tr><td style="text-align:center; font-family:Tahoma, Geneva, sans-serif; font-size:12px; color:#333;"><strong>Koji proizvođač pruža najbolji odnos cene i kvaliteta autoguma?</strong></td></tr>
            <tr><td style="border: solid 1px #999; padding-left: 3px;"><form method="post" name="anketa" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px;">
			<?php
if (!isset ($_GET["glas"])){
echo "Parametar Glas nije prosleđen!";
} else {
$vote = $_GET['glas'];
include "konekcija.php";
$sql1 = "SELECT brojglasova FROM gume WHERE id='".$vote."'"; //pronaći vrednost polja brojglasova za izabranog proizvodjaca
$upit1 = $mysqli->query($sql1);
$rezultat1 = $upit1->fetch_object();
$novi_rezultat = $rezultat1->brojglasova + 1;
$sql2 = "UPDATE gume SET  brojglasova=".$novi_rezultat." WHERE id='".$vote."'";//povećati broj glasova za jedan
$rezultat2 = $mysqli->query($sql2);
$sql3 = "SELECT SUM( brojglasova ) as br FROM gume"; //utvrditi ukupan broj glasova za sve zemlje zajedno
$ukupanbroj = $mysqli->query($sql3);
$objekat = $ukupanbroj->fetch_object();
$ukupan_broj_glasova = $objekat->br;
$sql4 = "SELECT nazivProizvodjaca, brojglasova FROM gume";
$konacni=$mysqli->query($sql4);
echo "<table>";
while($red = $konacni->fetch_object()){
$gume = $red->nazivProizvodjaca;
$brojglasova = $red->brojglasova;
$procenat_glasova = 100*round($brojglasova/$ukupan_broj_glasova,2);
?>
<tr>
<td><?php echo $gume; ?>:</td>
<td>
<img src="../AutoOglasi/slike/nastavak.jpg" width="<?php echo($procenat_glasova); ?>" height="10">
<b><?php echo($procenat_glasova); ?>%</b>  
</tr>
<?php
}
echo "</table>";
$mysqli->close();
}
?>
            </form></td></tr>
        </table>
    </div>