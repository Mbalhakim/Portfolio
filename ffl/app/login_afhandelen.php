<?php
include_once ('../app/dbconnection.php');
include_once ('sessie.php');







$emailadres=$_POST['email'];
$password=$_POST['password'];

{   
    $dbConnect = new dbconnection();

    $sql = "SELECT password, naam, id FROM studenten
    
    WHERE email='$emailadres'";
    $query=$dbConnect->prepare($sql);
    $query->execute();
    $users =$query->fetchAll(PDO::FETCH_ASSOC);


   

    if(password_verify($password, $users[0]['password']))
    {
        $_SESSION['logged_in']=true;
        $_SESSION['user_email']=$emailadres;
        $_SESSION['naam']=$users[0]['naam'];
        $_SESSION['userid']=$users[0]['id'];
        $_SESSION['usertype']=$users[0]['usertype'];
        if( $_SESSION['usertype']==0)
            header('Location:home.php');
        else
        header('Location:admins_home.php');
        exit(0);
        
    }
   

    else {
        $_SESSION['logged_in'] + $_SESSION['docent_logged_in']=false;
        echo"het ging niet goed bij het inloggen";
    }



}




?>
