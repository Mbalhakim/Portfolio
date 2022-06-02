<?php
@include_once ('dbconnection.php');
@include_once ('sessie.php');

$clinic_id = $_GET['clinicid'];

$userid=$_SESSION['userid'];


$dbconnect = new dbconnection();




$sql ="UPDATE clinics 
SET plekken=plekken - 1 WHERE id= $clinic_id;";
$query = $dbconnect -> prepare($sql);
$query ->execute();



$sql2 ="SELECT clinicdatums.clda_id AS clinidatumid, clinicdatums.clda_datum from clinicdatums
WHERE clda_clid=$clinic_id;";
$query = $dbconnect -> prepare($sql2);
$query ->execute();
$datum=$query->fetchAll(PDO::FETCH_ASSOC);  
//echo '<pre>';
//print_r($student);
//echo'</pre>';
$clinicdatumid=$datum[0]['clinidatumid'];

$sql3 = "INSERT INTO gekozenclinics VALUES (0,$userid,$clinicdatumid,$clinic_id)";
$query = $dbconnect -> prepare($sql3);
$query ->execute();

header("Location: clinics.php");
?>

