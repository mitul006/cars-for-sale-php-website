<?php
	require_once("../lib/nusoap.php");
	
	$server = new soap_server();
	$server->configureWSDL('konverzijaValuta', 'urn:KonverzijaValuta');
	
	$server->register('RSDtoRSD', array('a' => 'xsd:float'),array('return' => 'xsd:float'),'urn:RSDtoRSD');	
	$server->register('RSDtoEUR', array('a' => 'xsd:float'),array('return' => 'xsd:float'),'urn:RSDtoEUR');	
	$server->register('RSDtoDOL', array('a' => 'xsd:float'),array('return' => 'xsd:float'),'urn:RSDtoDOL');	
	$server->register('EURtoRSD', array('a' => 'xsd:float'),array('return' => 'xsd:float'),'urn:EURtoRSD');	
	$server->register('EURtoEUR', array('a' => 'xsd:float'),array('return' => 'xsd:float'),'urn:EURtoEUR');	
	$server->register('EURtoDOL', array('a' => 'xsd:float'),array('return' => 'xsd:float'),'urn:EURtoDOL');	
	$server->register('DOLtoRSD', array('a' => 'xsd:float'),array('return' => 'xsd:float'),'urn:DOLtoRSD');	
	$server->register('DOLtoEUR', array('a' => 'xsd:float'),array('return' => 'xsd:float'),'urn:DOLtoEUR');	
	$server->register('DOLtoDOL', array('a' => 'xsd:float'),array('return' => 'xsd:float'),'urn:DOLtoDOL');	


	function RSDtoRSD($a)
	{
      $rezultat=round($a, 2);
	  return $rezultat;
	}
	function RSDtoEUR($a)
	{
      $rezultat=round($a/105.8147, 2);
	  return $rezultat;
	}
	function RSDtoDOL($a)
	{
      $rezultat=round($a/79.5180, 2);
	  return $rezultat;
	}
	function EURtoRSD($a)
	{
      $rezultat=round($a*105.8147, 2);
	  return $rezultat;
	}
	function EURtoEUR($a)
	{
      $rezultat=round($a, 2);
	  return $rezultat;
	}
	function EURtoDOL($a)
	{
	  $din=round($a*105.8147, 2);
      $rezultat=round($din/79.5180, 2);
	  return $rezultat;
	}
	function DOLtoRSD($a)
	{
      $rezultat=round($a*79.5180, 2);
	  return $rezultat;
	}
	function DOLtoEUR($a)
	{
	  $din=round($a*79.5180, 2);
      $rezultat=round($din/105.8147, 2);
	  return $rezultat;
	}
	function DOLtoDOL($a)
	{
      $rezultat=round($a, 2);
	  return $rezultat;
	}
	
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	$server->service($HTTP_RAW_POST_DATA);
?>
