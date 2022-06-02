<?php
@include_once('db.php');
@include_once('sessie.php');



$emailadres=$_POST['email'];
$password=$_POST['password'];
if(dbConnect())
{

    $sql = "SELECT password, username, id, usertype FROM users WHERE email='$emailadres'";
    dbQuery($sql);
    $users = dbGetAll();
    if(password_verify($password, $users[0]['password']))
    {
        $_SESSION['logged_in']=true;
        $_SESSION['user_email']=$emailadres;
        $_SESSION['username']=$users[0]['username'];
        $_SESSION['userid']=$users[0]['id'];
        $_SESSION['usertype']=$users[0]['usertype'];
        if( $_SESSION['usertype']==0)
            header('Location:threads.php');
        else
        header('Location:admins_threads.php');
        exit(0);
    }
    else
    {
        $_SESSION['logged_in']=false;
        echo"het ging niet goed bij het inloggen";
    }

}
?>
