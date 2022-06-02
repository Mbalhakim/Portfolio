<?php 
setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1'));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
@include_once ("dbconnection.php");
@include_once ("sessie.php");

$d_id=$_SESSION['docent_id'];
$title = $_POST['title'];
$plekken = $_POST['plekken'];
$inhoud = $_POST['inhoud'];

$dbConnect = new dbconnection();

    $sql= "INSERT INTO clinics(title,plekken,beschrijving,docenten_id) VALUES ('$title','$plekken','$inhoud','$d_id')";
    $query=$dbConnect->prepare($sql);
    $query->execute();
      
   
    if($_SESSION['docent_logged_in'])
    header('Location: ../app/docent_home.php');
    else {header("Location: docent_login.php");
exit(0);}



?>