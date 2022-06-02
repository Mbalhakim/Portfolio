<?php
include_once ('sessie.php');

//unset de sessie-variabelen:
unset( $_SESSION['logged_in']);
unset( $_SESSION['user_email']);
unset( $_SESSION['username']);
unset( $_SESSION['userid']);

header('location:home.php');
?>
