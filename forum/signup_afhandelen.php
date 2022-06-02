<?php
@include_once('db.php');
$user = $_POST['username'];
$emailadres = $_POST['email'];
$wachtwoord = password_hash($_POST['password'], PASSWORD_DEFAULT);


if(dbConnect())

{
    $sql= "INSERT INTO users(username,email,password) VALUES ('$user','$emailadres','$wachtwoord')";
    dbQuery($sql);
    header("Location:login.php");
    exit(0);
}



?>