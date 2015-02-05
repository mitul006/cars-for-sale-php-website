<div id="drugiRedLink">
<table>
		<?php
			if(!isset($_SESSION['ulogovan'])){
			?> 
        <form action="login.php" method="post" name="login">
        <table>
        <tr>
        	<td align="left">
            <font size="2">Korisničko ime:</font>
            </td>
            <td align="left">
            <input type="text" name="korisnickoime" title="Unesite vaše korisničko ime" maxlength="40" style="border:solid 1px #00C;"/>
            </td>
            <td align="left">
            <font size="2">Šifra:</font>
            </td>
            <td align="left">
            <input type="password" name="sifra" title="Unesite vašu šifru" maxlength="40" style="border:solid 1px #00C;"/>
            </td>
            <td align="left">
            <input type="submit" value="Prijava" name="ulogujse" style="border:solid 1px #00C; background:url(slike/nastavak.jpg); color:#FFF;"/>
            </td>
            <!--<td align="left">
            <input type="checkbox" name="zapamti" value="yes"/>
            </td>
            <td align="left">
            <font size="2">Zapamti me</font> | 
            </td>-->
            <td align="left">
            <font size="-6" ><a href="registracija.php"> Registruj se!</a></font>
            </td>
            
            </tr>
            </table>
            </form>
            <?php
			}else{
			?>
            <form action="login.php" method="post" name="login">
        <table style="vertical-align:top;">
        <tr>
        	<td align="left">
            <font size="2">Korisničko ime:</font>
            </td>
            <td align="left">
            <input type="text" name="korisnickoime" title="Unesite vaše korisničko ime" maxlength="40" style="border:solid 1px #00C;" disabled="disabled"/>
            </td>
            <td align="left">
            <font size="2">Šifra:</font>
            </td>
            <td align="left">
            <input type="password" name="sifra" title="Unesite vašu šifru" maxlength="40" style="border:solid 1px #00C;" disabled="disabled"/>
            </td>
            <td align="right" width="565" style="font-size:14px;">Ulogovani ste kao:&nbsp;
			<font color="#FF0000"; style="text-transform:uppercase;">[<?php echo $_SESSION["nivo_pristupa"]  ?>]&nbsp;</font>
                        <a href="profil.php" style="color:#446381; font-size:12px;">[<?php echo $_SESSION['ulogovan']  ?>]&nbsp;</a>
						<a href="izlogujse.php" style="font-size:9px;">[odjavite se]</a>
            </td>
            </tr>
            </table>
            </form>
            
            
            <?php
			}
			?>
</div>