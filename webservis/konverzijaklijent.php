<html xmlns="http://www.w3.org/TR/REC-html40">
<head>
	<meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">
	<title>Konverzija valuta</title>
	<script type="text/javascript">
		function validacija(){
if (document.forms[0].konSuma.value=='')
{
alert("Niste uneli sumu koju konvertujete!");
document.forms[0].konSuma.focus();
return false
}
if (!(parseInt(document.forms[0].konSuma.value)))
{
alert("Morate uneti broj! Pokusajte ponovo!");
document.forms[0].konSuma.focus();
return false
}			
}
	</script>
	
</head>

<body>

<?php
  if (isset($_POST['konverzija'])){
    $pom1=$_POST['konValuta'];
	$pom2=$_POST['valutaKon'];
	If($pom1.value == 1 && $pom2.value == 2)
	{
      $client = new SoapClient("http://localhost/AutoOglasi/webservis/konverzijaservis.php?wsdl");
      $return = $client->RSDtoEUR($_POST['konSuma']);
     echo("Konvertovan iznos je : " . $return . " EUR");
	}else If($pom1.value == 1 && $pom2.value == 3)
	{
      $client = new SoapClient("http://localhost/AutoOglasi/webservis/konverzijaservis.php?wsdl");
      $return = $client->RSDtoDOL($_POST['konSuma']);
      echo("Konvertovan iznos je : " . $return . " DOL");
	}else If($pom1.value == 1 && $pom2.value == 1)
	{
      $client = new SoapClient("http://localhost/AutoOglasi/webservis/konverzijaservis.php?wsdl");
      $return = $client->RSDtoRSD($_POST['konSuma']);
      echo("Konvertovan iznos je : " . $return . " RSD");
	}else If($pom1.value == 2 && $pom2.value == 1)
	{
      $client = new SoapClient("http://localhost/AutoOglasi/webservis/konverzijaservis.php?wsdl");
      $return = $client->EURtoRSD($_POST['konSuma']);
      echo("Konvertovan iznos je : " . $return . " RSD");
	}else If($pom1.value == 2 && $pom2.value == 3)
	{
      $client = new SoapClient("http://localhost/AutoOglasi/webservis/konverzijaservis.php?wsdl");
      $return = $client->EURtoDOL($_POST['konSuma']);
      echo("Konvertovan iznos je : " . $return . " DOL");
	}else If($pom1.value == 2 && $pom2.value == 2)
	{
      $client = new SoapClient("http://localhost/AutoOglasi/webservis/konverzijaservis.php?wsdl");
      $return = $client->EURtoEUR($_POST['konSuma']);
      echo("Konvertovan iznos je : " . $return . " EUR");
	}else If($pom1.value == 3 && $pom2.value == 1)
	{
      $client = new SoapClient("http://localhost/AutoOglasi/webservis/konverzijaservis.php?wsdl");
      $return = $client->DOLtoRSD($_POST['konSuma']);
      echo("Konvertovan iznos je : " . $return . " RSD");
	}else If($pom1.value == 3 && $pom2.value == 2)
	{
      $client = new SoapClient("http://localhost/AutoOglasi/webservis/konverzijaservis.php?wsdl");
      $return = $client->DOLtoEUR($_POST['konSuma']);
      echo("Konvertovan iznos je : " . $return . " EUR");
	}else If($pom1.value == 3 && $pom2.value == 3)
	{
      $client = new SoapClient("http://localhost/AutoOglasi/webservis/konverzijaservis.php?wsdl");
      $return = $client->DOLtoDOL($_POST['konSuma']);
      echo("Konvertovan iznos je : " . $return . " DOL");
	}    
}
?>


	<div>
		<form  method=post enctype="application/x-www-form-urlencoded" onSubmit="return validacija();">
				<table align="centar" width="200">
				<tr>
					<th width="100" background="slike/nastavak.jpg" style="color:#FFF;">Vrednost:</th>
					<th width="100" background="slike/nastavak.jpg"><input type="text" name="konSuma" size="12"></th>
				</tr>
				<tr>
					<th background="slike/nastavak.jpg" style="color:#FFF;">Iz:</th>
					
                    <th background="slike/nastavak.jpg"><select name="konValuta"> 
					<option value="1"> RSD </option>
					<option value="2"> EUR </option>
					<option value="3"> DOL </option>
					</select></th>
				</tr>
				<tr>
					<th background="slike/nastavak.jpg" style="color:#FFF;">U:</th>
					
                   <th background="slike/nastavak.jpg"><select name="valutaKon"> 
					<option value="1"> RSD </option>
					<option value="2"> EUR </option>
					<option value="3"> DOL </option>
					</select></th>
				</tr>
				<tr>
					<th colspan="2"><input type="submit" value="Konvertuj" name="konverzija" style="font-weight:bold; border:solid 1px #6CB3FF; background:url(slike/nastavak.jpg); color:#FFF;"></th>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
