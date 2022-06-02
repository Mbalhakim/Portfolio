<?php
@include_once ('../app/dbconnection.php');

$user = $_POST['naam'];
$emailadres = $_POST['email'];
$student_nummer = $_POST['st_nummer'];
$student_klas = $_POST['klas'];
$wachtwoord = password_hash($_POST['password'], PASSWORD_DEFAULT);



$dbConnect = new dbconnection();

    $sql = "INSERT INTO studenten(naam,stnummer,email,password,klas_id ) Values ('$user','$student_nummer','$emailadres','$wachtwoord','$student_klas') ";
    $query=$dbConnect->prepare($sql);
    $query->execute();
      
   
    if(!$_SESSION['logged_in'])
    header('Location: ../app/docent_home.php');
    else {header("Location: ../app/docent_login.php");
exit(0);}



?>