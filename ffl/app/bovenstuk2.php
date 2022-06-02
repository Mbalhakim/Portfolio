
<?php
@include_once ('sessie.php');
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <script src="../js/main.js"></script>
    
    <link rel="stylesheet" href="../css/style.css">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


</head>
<body style="background-color: #00acc1">
<?php
                if($_SESSION['docent_logged_in'])
                    include_once ('../app/menu_loggedin2.php');
                else
                    include_once ('../app/menu2.php');
                ?>