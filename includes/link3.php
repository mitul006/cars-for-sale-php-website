<div id="treciRedLink">
    <ul>
    <?php
				if(!$_SESSION['nivo_pristupa']=="korisnik" && !$_SESSION['nivo_pristupa']=="administrator"){
				?>
                    <li><a href="meni.php?index=7" title="Najbolji AutoOglasi" style="font-size:16px;">OGLASI</a></li>
    <li><a href="meni.php?index=8" title="Najnovije vesti iz sveta automobilizma" style="font-size:16px;">AKTUELNE VESTI</a></li>
    <!--<li><a href="meni.php?index=9" title="Prijavite se za primanje novih oglasa na vašu e-mail adresu" style="font-size:16px;">OGLASI NA MAIL</a></li>
    <li><a href="meni.php?index=10" title="Poređenje modela automobila po vašem izboru" style="font-size:16px;">UPOREDI MODELE</a></li>
-->
                <?php
				}
				?>
    <?php
				if($_SESSION['nivo_pristupa']=="korisnik"){
				?>
                <li><a href="meni.php?index=7" title="Najbolji AutoOglasi" style="font-size:16px;">OGLASI</a></li>
    <li><a href="meni.php?index8" title="Najnovije vesti iz sveta automobilizma" style="font-size:16px;">AKTUELNE VESTI</a></li>
    <!--<li><a href="meni.php?index=9" title="Prijavite se za primanje novih oglasa na vašu e-mail adresu" style="font-size:16px;">OGLASI NA MAIL</a></li>
    <li><a href="meni.php?index=10" title="Poređenje modela automobila po vašem izboru" style="font-size:16px;">UPOREDI MODELE</a></li>-->
     <li><a href="meni.php?index=11" title="Postavite oglas na naš sajt" style="font-size:16px;">POSTAVI OGLAS</a></li>
     <li><a href="profil.php" title="Uredite izgled vašeg profila" style="font-size:16px;">MOJ PROFIL</a></li>
                 <?php   
				 }
				?>             
     <?php
				if($_SESSION['nivo_pristupa']=="administrator"){
				?>
 	<li><a href="meni.php?index=13" title="Korisnici sajta" style="font-size:16px;">KORISNICI</a></li>  
 	<li><a href="meni.php?index=14" title="Odgovaranje na postavljena pitanja" style="font-size:16px;">ODGOVORI NA PITANJA</a></li>
 	<li><a href="meni.php?index=15" title="Dodavanje novog administratora sajta" style="font-size:16px;">DODAJ ADMINISTRATORA</a></li>
 	<!--<li><a href="meni.php?index=16" title="Promena svih informacija na sajtu" style="font-size:16px;">PROMENA INFORMACIJA</a></li>
    -->
	
	<?php
					}
				?>

    </ul>
</div>