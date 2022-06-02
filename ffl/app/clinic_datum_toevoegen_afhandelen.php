<?php 

@include_once ("dbconnection.php");
@include_once ("sessie.php");
$clinic_id = $_POST['clinicid'];
//$clinic_dm = $_POST['clinicdatum'];  
//$clinic_td = $_POST['clinictijd'];  
//$clinic_datum = $clinic_td.$clinic_dm;

//echo $ee;
$to='2013-25-10 22:56:00'; //curr time
$timestamp = strtotime("Y-m-d H:i:s", $to); //convert to Unix timestamp
 //subtract 1 hour (3600 this is 1 hour in seconds)
 $ee=date("Y-m-d H:i:s", strtotime($_POST['clinicdatum']));
//echo $ee;
//echo"<br />";
//echo $clinic_id;




$dbconnect = new dbconnection();
$sql3 = "INSERT INTO clinicdatums(clda_clid, clda_datum) VALUES ($clinic_id, '$ee')";
$query = $dbconnect -> prepare($sql3);
$query ->execute();
header("Location: aangemaakte_clinics.php");


/*



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



*/

?>