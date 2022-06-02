<?php
setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1'));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
@include_once ('../app/dbconnection.php');

$user = $_POST['naam'];
$docent_code = $_POST['docent_code'];
$emailadres = $_POST['email'];
$wachtwoord = password_hash($_POST['password'], PASSWORD_DEFAULT);

$dbConnect = new dbconnection();

    $sql = "INSERT INTO docenten(naam,email,password,docent_code ) Values ('$user','$emailadres','$wachtwoord','$docent_code') ";
    $query=$dbConnect->prepare($sql);
    $query->execute();
      
   
    if(!$_SESSION['logged_in'])
    header('Location: ../app/docent_home.php');
    else {header("Location: docent_login.php");
exit(0);}



?>