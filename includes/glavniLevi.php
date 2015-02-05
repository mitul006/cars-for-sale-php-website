<div class="containerLevi">
	<div class="konverzija">
	<?php include("webservis/konverzijaklijent.php"); ?>
    </div>
    <div class="sat">
	<?php
			//code for the World Wide Clock
			$rqst=$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];
			$url="http://www.onyoursite.com/data/wwc.htp?rqst=".$rqst;
			@readfile($url);
		?> 
	</div>
	<!--<div class="brojacPosete">brojac posete
	<a href="http://livecounter.co"><img src="http://livecounter.co/count.php?id=xxe6p&c=4" /></a><noscript><br /><a href="http://livecounter.co">hit counter</a></noscript>
	</div>
	<div class="statistika">statistika
    
    </div>-->
</div>