<?php
include_once ("dbconnection.php");
include_once ("sessie.php");
//met $_GET haal je de waarde van de variabele die meegegeven is in de URL op
$clinic = $_GET['clinic'];
$clinicd = $_GET['clinicd'];
//echo $clinic;
//echo ("<br />");
//echo $clinicd;
$student = $_SESSION['userid'];





$dbconnect = new dbconnection();
//$sql = "DELETE FROM klant WHERE ID=".$klantnummer;
$sql = "DELETE FROM gekozenclinics WHERE gekcl_clinicdatumid=$clinicd AND gekcl_stid=$student";
$query = $dbconnect -> prepare($sql);
$query ->execute();


$sql2 ="UPDATE clinics 
SET plekken=plekken + 1 WHERE id= $clinic;";
$query2 = $dbconnect -> prepare($sql2);
$query2 ->execute();


header("Location: home.php");
?>