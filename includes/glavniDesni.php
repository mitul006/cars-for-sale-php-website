<div class="containerDesni">
	<div id="anketa">
    	<table>
        	<tr><td style="border:solid 1px #00C; font-family:Tahoma, Geneva, sans-serif; font-size:12px; width:190px; background:url(slike/nastavak.jpg); height:25px; color:#FFF;"><strong>Anketa</strong></td></tr>
            <tr><td style="text-align:center; font-family:Tahoma, Geneva, sans-serif; font-size:12px; color:#333;"><strong>Koji proizvođač pruža najbolji odnos cene i kvaliteta autoguma?</strong></td></tr>
            <tr><td style="border: solid 1px #999; padding-left: 3px;"><form method="post" name="anketa" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px;">
			<?php
			while($red = $rezultat->fetch_object()){
			?>
			<input type="radio" name="vote" value="<?php echo $red->ID;?>" onclick="glasaj(this.value)" />
            <?php echo $red->nazivProizvodjaca;?>
			<br>
			<?php
			}
			$mysqli->close();
			?>
            </form></td></tr>
        </table>
    </div>
	<!--<div class="vreme">vreme
	
	</div>
	<div class="najtrazeniji">najtrazeniji modeli
	
	</div>-->
</div>