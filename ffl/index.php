<?php
include_once ('sessie.php');
if($_SESSION['logged_in']==true)
    header('Location:FFL/app/home.php');
else
    header('Location:app/login.php');

    

?>