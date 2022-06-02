<?php
include_once ('sessie.php');

//unset de sessie-variabelen:
unset( $_SESSION['docent_logged_in']);
unset( $_SESSION['docent_email']);
unset( $_SESSION['docent_naam']);

unset(  $_SESSION['docent_klas_id']);

header('location:docent_home.php');
?>
