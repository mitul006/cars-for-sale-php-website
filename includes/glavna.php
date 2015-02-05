<!--pocetak sajta-->

<?php
		session_start();
		if($_SESSION['tekuca']=="pocetna"){
	?>
	<h3 align="center">izbor iz ponude</h3>
    <div id="oglas">
    <ul>
    <li><img width="120" height="90" src="slike/oglasi/r8.jpeg" /></li>
    </ul>
    
    </div>
    
	<?php
	}
	?>


<!--pocetak forme o nama-->

<?php
		session_start();
		if($_SESSION['tekuca']=="o_nama"){
	?>
	
    <div align="justify" style="padding:0 10px 0 10px;">
    <h3>O NAMA</h3>
    Mi smo prvi koji su počeli da se bave ovim poslom u Srbiji. Na našem sajtu mozete pronaći sve sto vas zanima u vezi polovnih automobila, najaktuelnije vesti iz automobilske industrije i mnoge druge korisne informacije.
    </div>
    
	<?php
	}
	?>
    
    <!--pocetak forme sa korisnim linkovima-->
    
	<?php
	if($_SESSION['tekuca']=="korisni_linkovi"){
	?>
	<div align="justify" style="padding:0 10px 0 10px;">
    <h3>KORISNI LINKOVI</h3>
    Na ovoj stranici možete pronaći korisne linkove koji će vas odvesti na prijateljske sajtove sa kojih možete preuzeti sve potrebne informacije.
    </div>
    <?php
	}
	?>
	
    <!--pocetak forme za postavljane pitanja-->
    
	<?php
	if($_SESSION['tekuca']=="cesta_pitanja"){
	?>
    
    <div align="justify" style="padding:0 10px 0 10px;">
    <h3>Najčešće postavljana pitanja</h3>
    <h3>stranica sa odgovorima na najčešće postavljana pitanja. ukoliko želite možete i vi postaviti svoje</h3>
    
	
	<?php
include("konekcija.php");
$sql = "SELECT username,date,pitanje,odgovor FROM faq";
if (!$q=mysql_query($sql))
{
echo "Nastala je greška pri izvodenju upita<br>" . mysql_query();
die();
}
if (mysql_num_rows($q)==0)
{
echo "TRENUTNO NEMA NIJEDNO POSTAVLJENO PITANJE";
} 
else {
// dok postoje redovi....
while ($red=mysql_fetch_array($q)) {
// echo podatke
	echo "Pitanje postavio/la <b>".$red['username']."</b>, ".$red["date"]."<br /><b>Pitanje : </b><i>".$red["pitanje"]."</i></b><br />Odgovor : ".$red["odgovor"]."<br /><br />";

}
}
?>
<span><br /><br />
<?php
if(/*!isset($_COOKIE['username'])*/!$_SESSION['ulogovan']){
echo "<strong>Napomena : Morate biti ulogovani da biste postavili pitanje!</strong>";
}
else {
?>
<form name="forma" method="post" action="includes/postaviPitanje.php">
				<b>Tekst pitanja :</b><br />
				<textarea name="Description" id="Description"cols=40 rows=6 style="border:solid 1px #00C; max-width:580px; max-height:200px; min-height:50px; min-width:50px;"></textarea><br /><br />
				<input type="submit"  value="Postavite pitanje" name = "postaviPitanje" style="border:solid 1px #00C; background:url(slike/nastavak.jpg); color:#FFF;" />
				<input type = "Reset" value="Obrišite sve" name = "reset" style="border:solid 1px #00C; background:url(slike/nastavak.jpg); color:#FFF;"/><br />
				
				
	</form>
	<?php
}
	?>
</span>
</div>
    
    <?php
	}
	?>
	
    <!--pocetak forme kontakt-->
    
    <?php
	if($_SESSION['tekuca']=="kontakt"){
	?>
	
    <div align="justify" style="padding:0 10px 0 10px;">
    <h3>kontakt</h3>
    Za sve dodatne informacije možete nas kontaktirati putem telefona na broj 010/111-2222, ili putem e-mail adresa:<br /><br />rusmil89@gmail.com<br /><br />akikrasic@gmail.com
    </div>
    
    <?php
	}
	?>
    
    <!--pocetak forme za pregled aktuelnih vesti-->
    
    <?php
	if($_SESSION['tekuca']=="vesti"){
	?>
    <div align="justify" style="padding:0 10px 0 10px;">
    <h3>aktuelne vesti</h3>
    </div>
    <?php
	}
	?>
	
    <!--pocetak forme za registraciju-->
    
    <?php	
	if(!isset($_SESSION['ulogovan'])){
		if($_SESSION['tekuca']=="porukaLogovanje"){
		?>
		<div align="center"><br />Korisnik sa datim korisničkim imenom i šifrom ne postoji u našoj bazi podataka
        <p align="center">Molimo vas pokušajte ponovo!</p>
        <p align="center"><img src="slike/no.png" /></p>
        </div>
		<?php
			/*echo("  <br>&nbsp;&nbsp;&nbsp;&nbsp;Korisnik sa datim korisnickim imenom i lozinkom ne postoji u nasoj bazi podataka<br>&nbsp;&nbsp;&nbsp;&nbsp;Molimo vas pokusajte ponovo!");
			*/
            
            
		}
		?>
        
        <?php
		
		if($_SESSION['tekuca']=="registracija"){
		?>
         
			<form id="form1" name="registracija" method="POST" action="insert.php" >
   			 <table height="400" border="0" cellspacing="5" cellpadding="5" align="center" style="margin-top:50px;">
      			<tr>
       				 <td width="173" align="left" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;">Ime</td>
        			<td colspan="2" align="left"><label>
          			<input name="ime" type="text" size="30" style="border: solid 1px #00C;" title="Unesite vaše ime"/>
       				 </label></td>
      			</tr>
      			<tr>
        			<td align="left" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;">Prezime</td>
        			<td colspan="2" align="left"><label>
          			<input name="prezime" type="text" size="30" style="border: solid 1px #00C;" title="Unesite vaše prezime" />
        			</label></td>
   			   </tr>
      			<tr>
        			<td align="left" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;">Datum rođena </td>
        			<td width="64" align="left"><label></label>
          			<label style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;">Godina</label></td>
        			<td width="229" align="left"><select name="godina" style="border: solid 1px #00C;"title="Izaberite godinu rođenja">
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
          			<option value="1986">1986</option>
          			<option value="1987">1987</option>
          			<option value="1988">1988</option>
          			<option value="1989">1989</option>
          			<option value="1990">1990</option>
          			<option value="1991">1991</option>
          			<option value="1992">1992</option>
          			<option value="1993">1993</option>
          			<option value="1994">1994</option>
          			<option value="1995">1995</option>
          			<option value="1996">1996</option>
          			<option value="1997">1997</option>
          			<option value="1998">1998</option>
          			<option value="1999">1999</option>
          			<option value="2000">2000</option>
                	</select></td>
      			</tr>
      			<tr>
        			<td align="left">&nbsp;</td>
        			<td align="left"><label style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;"> Mesec </label></td>
        			<td align="left"><select name="mesec" style="border: solid 1px #00C;" title="Izaberite mesec rođenja">
          			<option value="Januar">Januar</option>
				 	<option value="Februar">Februar</option>
          			<option value="Mart">Mart</option>
         			 <option value="April">April</option>
         			 <option value="Maj">Maj</option>
         			 <option value="Jun">Jun</option>
        			  <option value="Jul">Jul</option>
         			 <option value="Avgust">Avgust</option>
         			 <option value="Septembar">Septembar</option>
         			 <option value="Oktobar">Oktobar</option>
         			 <option value="Novembar">Novembar</option>
          			<option value="Decembar">Decembar</option>
        			</select></td>
      			</tr>
      			<tr>
        			<td align="left">&nbsp;</td>
        			<td align="left"><label style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;"> Dan </label></td>
        			<td align="left"><select name="dan" style="border: solid 1px #00C;" title="Izaberite dan rođenja">
          			<option value="1">1</option>
          			<option value="2">2</option>
          			<option value="3">3</option>
          			<option value="4">4</option>
          			<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
        			</select></td>
				</tr>
      			<tr>
        
     			 <td align="left" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;">Korisničko ime</td>
        		<script src="js/proveraKorisnika.js"></script>
      			<td colspan="2" align="left">
                <input name="korisnickoime1" type="text" size="30" id="korisnickoime1" onkeyup="proveri(document.getElementById('korisnickoime1').value)" style="border: solid 1px #00C;" title="Unesite vaše korisničko ime"/> 
        		<div id="zauzetost"></div></td>
      			</tr>
      			<tr height="20px">
        			<td align="left" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;">Šifra</td>
        			<td colspan="2" align="left"><label>
         			 <input name="sifra1" type="password" size="30"  style="border: solid 1px #00C;" title="Unesite vašu šifru"/>
        			</label></td>
      			</tr>
     			 <tr>
       			 <td align="left" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;">E-mail</td>
       			 <td colspan="2" align="left"><input name="email" type="text" size="30"  style="border: solid 1px #00C;" title="Unesite vašu email adresu"/></td>
      			</tr>
      			<tr>
        			<td align="left" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;">Grad</td>
					<script src="js/sugerisi.js"></script>
					<script>
                    function place(ele)
	                {	
                    document.getElementById('txt').value = ele.innerHTML;
	                document.getElementById("livesearch").style.display = "none";
                    }
                    </script>
        			<td colspan="2" align="left"><input name="grad" id="txt" onkeyup="sugestija(this.value)" type="text" size="30"  style="border: solid 1px #00C;" title="Unesite ime vašeg grada"/>
					<div id="livesearch">
                    
                    </div></td>
      			</tr>
                <tr>
       			 <td align="left"></td>
       			 <td colspan="2" align="left"><img src="CaptchaSecurityImages.php?width=130&height=40&characters=7" id="captcha_image"/></td>
      			</tr>
                
                <!--<tr><td>
                <img src="CaptchaSecurityImages.php?width=130&height=40&characters=7" id="captcha_image"/>
                </td></tr>-->
                <tr>
       				 <td width="173" align="left" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#333;">Upišite znakove sa slike</td>
        			<td colspan="2" align="left"><label>
          			<input id="security_code" name="security_code" type="text" size="30" style="border: solid 1px #00C;"/>
       				 </label></td>
      			</tr>
      			<tr>
        			<td colspan="3" align="center"><label>
          			<br/>
                    <input name="action" value="ubaci" type="hidden"> 
					<br>
          			<input type="submit" name="registrujse" value="Registruj se" style="border: solid 1px #00C; background:url(slike/nastavak.jpg); color:#FFF;" />				
                    <input value="Otkazi" namer="reset" type="reset" style="border: solid 1px #00C;background:url(slike/nastavak.jpg); color:#FFF;">
                    <br>
       			 </label></td>
   			   </tr>
   			  </table>
				  <p>
        			<input type="hidden" name="MM_insert" value="form1">
      			</p>
      			<p align="center" class="style1" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; font-weight:bold;  color:#F00; text-transform:uppercase;">*napomena: potrebno je popuniti sva polja da bi registracija bila uspešna!     </p>
  			</form>
		<?php
		}
		if($_SESSION['tekuca']=="registracijaPoruka"){
			?>
			<!-- /* prikaz prozora posle registracije, ne valja sto poziva insert.php-->
            <br />
			<div align="center">
            <h2 align="center">REGISTRACIJA USPEŠNA</h2><br />
			<img src="slike/ok.png" alt="box"/><br /><br /><br />
			<a href="meni.php?index=1">Vratite se na početak</a><br /><br />
			
			</div><br />
			
			
			<?php
			//echo("Uspešno ste se registrovali, sada se možete ulogovati!");
			//unset($_SESSION["poruka"]);
		}
	}else{
	//ulogovan
		//echo("ulogovan");
		
		if($_SESSION['tekuca']=="profil"){
		?>
        
        <!--pocetak forme za profil-->
		
        	<form id="form1" name="profil" method="POST" action="azurirajProfil.php">
    			<table border="0" cellspacing="5" cellpadding="5" align="center" style="margin-top:5px;">
      			<tr>
        			<td width="173" align="left">Ime</td>
        			<td colspan="2" align="left"><label>
         			<div id="ime"> 
                    <input name="ime" type="text" size="30" style="border: solid 1px #00C;" value="<?php echo mysql_result($_SESSION["rezultat"],0,"Ime");?>"/>
                    </div>
        			</label></td>
      			</tr>
      			<tr>
        			<td align="left">Prezime</td>
        			<td colspan="2" align="left"><label>
          			<div id="prezime"><input name="prezime" style="border: solid 1px #00C;" type="text" size="30" value="<?php echo mysql_result($_SESSION["rezultat"],0,"Prezime");?>	" /></div>
        			</label></td>
      			</tr>
      			<tr>
        			<td align="left">Datum rođena </td>
        			<td align="left"><label></label>
          			<label>Godina</label></td>
        			<td width="148" align="left"><div id="godina"><input type="text" name="godina" style="border: solid 1px #00C;" value="<?php echo mysql_result($_SESSION["rezultat"],0,"DatumRodjenaGodina");?>"></div></td>
      			</tr>
      			<tr>
        			<td align="left"></td>
        			<td align="left"> Mesec </td>
        			<td align="left"><div id="mesec"><input type="text" name="mesec" style="border: solid 1px #00C;" value="<?php echo mysql_result($_SESSION["rezultat"],0,"DatumRodjenaMesec");?>"></div></td>
      			</tr>
      			<tr>
        			<td align="left">&nbsp;</td>
        			<td align="left"><label> Dan </label></td>
					<td align="left"><div id="dan"><input type="text" name="dan" style="border: solid 1px #00C;" value="<?php echo mysql_result($_SESSION["rezultat"],0,"DatumRodjenaDan");?>"></div></td>
      			</tr>
      			<tr>
        			<td align="left">Korisničko ime</td>
        			<td colspan="2" align="left"><label>
          			<div id="korisnickoime"><input name="korisnickoime" type="text" style="border: solid 1px #00C;" size="30" value="<?php echo mysql_result($_SESSION["rezultat"],0,"KorisnickoIme");?>"/></div>
        			</label></td>
      			</tr>
      			<tr>
        			<td align="left">Šifra</td>
        			<td colspan="2" align="left"><label>
          			<div id="sifra"><input name="sifra" type="password" size="30" style="border: solid 1px #00C;" value="<?php echo mysql_result($_SESSION["rezultat"],0,"Lozinka");?>"/></div>
        			</label></td>
      			</tr>
      			<tr>
        			<td align="left">E-mail</td>
        			<td colspan="2" align="left"><div id="mail"><input name="email" style="border: solid 1px #00C;" type="text" size="30" value="<?php echo mysql_result($_SESSION["rezultat"],0,"Email");?>"/></div></td>
      			</tr>
      			<tr>
        		<td align="left">Grad</td>
        			<td colspan="2" align="left"><div id="grad"><input name="grad" style="border: solid 1px #00C;" type="text" size="30" value="<?php echo mysql_result($_SESSION["rezultat"],0,"Grad");?>"/></div></td>
      			</tr>
      			
				<tr><td>
                </form>
				<img width="200" height="200" src="<?php echo mysql_result($_SESSION["rezultat"],0,"Slika");?>" style="margin-bottom:15px;"/>
				<form enctype="multipart/form-data" action="upload.php" method="POST" >		
					<input width="10" name="uploaded" type="file" style="border: solid 1px #00C; margin-bottom:15px;" />
					<input type="submit" value="Upload-uj sliku" style="border: solid 1px #00C; margin-bottom:10px; background:url(slike/nastavak.jpg); color:#FFF;"/>
				</form>
                </td></tr>
                
                <tr>
      			<td colspan="2" align="right">
        			<input type="submit" name="promenipodatke" value="Promeni podatke" style="border: solid 1px #00C; background:url(slike/nastavak.jpg); color:#FFF;"/>
       			</td>
					<td align="left"><input type="submit" name="izbrisiprofil" value="Deaktiviraj profil" style="border: solid 1px #00C;background:url(slike/nastavak.jpg); color:#FFF;"/></td>
      			</tr>
                
    			</table>
      
      		
			<?php
					unset($_SESSION['rezultat']);
		}
		if($_SESSION['tekuca']=="azurirajPoruka"){
			echo("Uspešno ste promenili podatke <br><br><a href=\"profil.php\">Vidite nove podatke</a>");
		}
		if($_SESSION['tekuca']=="brisiPoruka"){
			unset($_SESSION['ulogovan']);
			echo("Uspešno ste deaktivirali profil <a href=\"index.php\">Vratite se na početnu stranicu</a>");
		}
		
						if($_SESSION['tekuca']=="azuriranje" && $_SESSION['nivo_pristupa']=="administrator"){
							include "konekcija.php";
	
                         /*$sql="SELECT * FROM drzave";
                         $result = mysql_query($sql);*/


	?>
          
          <!--pocetak forme za proveru korisnika od strane administratora-->
          
    <?php
			}
				
			if($_SESSION['tekuca']=="korisnici" && $_SESSION['nivo_pristupa']=="administrator"){
			if(isset($_SESSION['rezultat'])){
				?>
				<table width="600" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-align:center;">
				<tr height="30" style="background:url(slike/nastavak.jpg); color:#FFF; font-weight:bold;"><td>Slika</td><td>Ime i prezime</td><td>Datum rođenja</td><td>Korisničko ime</td><td>Nivo pristupa</td><td>Grad</td><td></td><td></td></tr>
				<?php	
				$rb=1;
				$niz=array();
				while ($red=mysql_fetch_array($_SESSION['rezultat']))
				{
				?>
				<form id="forma_korisnik" name="azuriranje_korisnika" method="POST" action="azurirajKorisnika.php?rb=<?php echo $rb ?>&kor_ime=<?php echo $red["KorisnickoIme"] ?>">
					<tr><font size="-4">
						
						<td><?php $slika=$red["Slika"]; echo "<img height='30' width='30' src='".$slika."'/>"?></td>
						<td id="<?php 'ime'.$rb ?>"><?php  $ime=$red["Ime"]."</br>".$red["Prezime"]; echo $ime; ?></td>
						<td id="<?php 'datum'.$rb ?>"><?php $datum=$red["DatumRodjenaDan"]." ".$red["DatumRodjenaMesec"]."</br>".$red["DatumRodjenaGodina"] ; echo $datum;?></td>
						<td name="korime<?php echo $rb ?>"><?php $korime=$red["KorisnickoIme"]; echo $korime?></div></td>
						<td>
							<?php 
								$nivopr=$red["NivoPristupa"]; //echo $nivopr;
								$niz = array('korisnik', 'administrator');
								echo ("<select name='nivopr".$rb."' id='nivopr".$rb."' >");
								for($i = 0; $i < count($niz); $i++){
									$selected = ($niz[$i] == $nivopr) ? 'selected="selected"' : '';
									echo "<option value=\"{$niz[$i]}\" {$selected}>".ucfirst($niz[$i])."</option>\n";
								}
								echo ("</select>");
							?>
						</td>
						
						<td><?php $grad=$red["Grad"]; echo $grad;?></td>
						
						<td>
							
							<input type="submit" name="obrisi" value="Obriši" style="border:solid 1px #00C;background:url(slike/nastavak.jpg); color:#FFF;"/>
						</td>
						<td>
							<input type="submit" name="azuriraj" value="Ažuriraj" style="border:solid 1px #00C;background:url(slike/nastavak.jpg); color:#FFF;"/>
						</td>
						</font>
					</tr>
				</form>
				<?php 
				$rb++;
				}
				?>
				</table>
				<?php
				//$_SESSION["proizvodi"]=$niz;
				unset($_SESSION['rezultat']);
			}
		}
	}
	
	
?>

<!--pocetak forme za odgovor na pitanja korisnika-->

<?php
 if($_SESSION['tekuca']=="odgovori_na_pitanja")
	{
		print "<h2 align=\"center\">Sekcija za odgovaranje na postavljena pitanja</h2><br /><br />";
		print "<form action=\"meni.php?index=14.php\" method = \"get\">";
		print"Sortiraj pitanja po : <select name=\"atribut\" id=\"atribut\"><option value=\"q_id\">Rednom broju</option><option value=\"KorisnickoIme\">Korisničkom imenu</option></select>";
		print " , po <select name=\"rastepada\" id=\"rastepada\"><option value=\"ASC\">Rastućem</option><option value=\"DESC\">Opadajućem</option></select> redosledu. <input type = \"submit\" value = \"Sortiraj\">";
		print "</form><br /><br />";
		//if(isset($_POST['atribut'])){ echo $_POST['atribut']."+".$_POST['rastepada']; exit();}
		include("konekcija.php");
		//sql upit
		$sql  = "SELECT COUNT(*) FROM faq";
			//Ukoliko se upit pravilno izvrsi...
			if($q=mysql_query($sql))
				{
				$r = mysql_fetch_row($q);
				$numrows = $r[0];
				// broj redova koji se pokazuju po strani
				$rowsperpage = 4;
				// koliko ima ukupno strana
				$totalpages = ceil($numrows / $rowsperpage);
				// nađi trenutnu stranu ili stavi default
				if (isset($_GET['currentpage'])) 
				{
					// kastovanje var u int
					$currentpage = (int) $_GET['currentpage'];
				} 
				else {
				// default broj strane
				$currentpage = 1;
					} 
				// ako je trenutna strana veća od ukupnog broja
				if ($currentpage > $totalpages) {
				// trenutna strana je zadnja strana
				$currentpage = $totalpages;
					} 
				// ako je trenutna strana manja od prve....
				if ($currentpage < 1) {
				// trenutna strana je prva
				$currentpage = 1;
					} // end if
				// offset liste, baziran na trenutnoj strani
				$offset = ($currentpage - 1) * $rowsperpage;
				//Postavljanje vrednosti za sortiranje pitanja
				$atribut = (isset($_GET['atribut'])) ? $_GET['atribut'] : 'q_id';
				$rastepada = (isset($_GET['rastepada'])) ? $_GET['rastepada'] : 'ASC';
				$sql = "SELECT q_id,KorisnickoIme,date, pitanje, odgovor FROM faq ORDER BY $atribut $rastepada LIMIT $offset, $rowsperpage";
				if (!$d=mysql_query($sql)){
				echo "Nastala je greska pri izvodenju upita<br>" . mysql_query();
					}
				if (mysql_num_rows($d)==0) {
				echo "Nema pitanja";
					} 
				else {
				// dok postoje redovi....
					while ($red=mysql_fetch_array($d)){
						 echo "<div id = \"week\"><form action=\"menjaj_faq.php\" method = \"post\">Pitanje postavio : <strong>".$red['KorisnickoIme']."</strong><br />Datum postavljanja :<strong/>".$red['date']."</strong><br />Pitanje glasi :<strong/>".$red['pitanje']."</strong><br />";
						 echo "<textarea name=\"odgovor\" id=\"odgovor\"cols=40 rows=6>".$red['odgovor']."</textarea><br /><input type =\"submit\" value = \"Izmenite odgovor\"><input type =\"hidden\" name = \"hidden\" value = \"".$red['q_id']."\"></form><br /><br /></div><br />";

						}
					/******  izgradnja paginacionih linkova ******/
					// koliko linkova sa brojevima da se pokaže
					$string = "?atribut=".$atribut."&rastepada=".$rastepada;
					$range = 3;
					// ako je na prvoj strani, ne pokazuj linkove za nazad...
					if ($currentpage > 1) {
					// pokaži << za povratak na prvu stranu
					echo " <a href=\"".$_SERVER['PHP_SELF']."?currentpage=1".$string."\"><<</a> ";
					// broj prethodne strane
					$prevpage = $currentpage - 1;
					// pokaži link za stanu unazad
					echo " <a href=\"".$_SERVER['PHP_SELF']."?currentpage=$prevpage".$string."\"><</a> ";
						} 
					// petlja za pokazivanje linkova u određenom rasponu oko trenutne strane
					for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) 
					{
					// ako je validan broj strane...
						if (($x > 0) && ($x <= $totalpages)) 
						{
						// ako smo na trenutnoj strani...
							if ($x == $currentpage) {
							// "osvetli" ga, ali ne pravi link...
								echo " [<b>$x</b>] ";
								// ako nismo na toj strani...
											} 
							else {
								// napravi link...
								echo " <a href=\"".$_SERVER['PHP_SELF']."?currentpage=$x".$string."\">$x</a> ";
								} 
						}  
					} 
					// ako nismo na zadnjoj strani, pokaži linkove za sledeću i poslednju stranu        
					if ($currentpage != $totalpages) 
					{
						// sledeća
						$nextpage = $currentpage + 1;
						// echo link ka sledećoj strani
						echo " <a href=\"".$_SERVER['PHP_SELF']."?currentpage=$nextpage".$string."\">></a> ";
						// echo link ka poslednjoj strani
						echo " <a href=\"".$_SERVER['PHP_SELF']."?currentpage=$totalpages".$string."\">>></a> ";
					} 


				}
				
			}
			//Doslo je do greske prilikom izvrsavanja upita
			else     			{
						echo "DOŠLO JE DO GREŠKE!!!<br /><a href = \"meni.php?index=14.php\">PROBAJTE PONOVO</a>";
							}
			//U svakom slucaju, nakon svih radnji, zatvara se konekcija ka bazi
			mysql_close($db);
	
	}
	


?>
