<?php
	if (!$db=mysql_connect("localhost", "root", ""))
	{
		die ("<b>Spajanje na mysql server je bilo neuspešno</b>");
	}
	if (!mysql_select_db("autooglasi", $db))
	{
		die ("<b>Greška pri odabiru baze</b>");
	}
?>

<?php
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "autooglasi";
$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
if ($mysqli->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset("utf8");
?>