<?php
include_once ('../app/dbconnection.php');
include_once ('sessie.php');







$emailadres=$_POST['email'];
$password=$_POST['password'];

{   
    $dbConnect = new dbconnection();
 
    $sql = "SELECT password, naam, id, klas_id FROM docenten
    
    WHERE email='$emailadres'";
    $query=$dbConnect->prepare($sql);
    $query->execute();
    $docent =$query->fetchAll(PDO::FETCH_ASSOC);
    if(password_verify($password, $docent[0]['password']))
    {
        $_SESSION['docent_logged_in']=true;
        $_SESSION['docent_email']=$emailadres;
        $_SESSION['docent_naam']=$docent[0]['naam'];
        $_SESSION['docent_id']=$docent[0]['id'];
        $_SESSION['docent_klas_id']=$docent[0]['klas_id'];
        if( $_SESSION['usertype']==0)
            header('Location:docent_home.php');
        else
        header('Location:docent_home.php');
        exit(0);
    }
    else
    {
        $_SESSION['logged_in']=false;
        echo"het ging niet goed bij het inloggen";
    }





}




?>
