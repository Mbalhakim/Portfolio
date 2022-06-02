<?php
include_once ('sessie.php');
if($_SESSION['logged_in']==true)
    header('Location: threads.php');
else
    header('Location: home.php');
?>