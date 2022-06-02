<?php
@include_once ('sessie.php');
@include_once ('db.php');


$titel = $_POST['titel'];
$inhoud = $_POST['inhoud'];
$userid = $_SESSION['userid'];
$thread=$_POST['thread'];



if(dBconnect())
{
   
    $sql3= "INSERT INTO topics(tpc_title, tpc_content, tpc_user_id, tpc_thread_id) VALUES ('$titel', '$inhoud', '$userid', '$thread')";
    dbQuery($sql3);
    header("Location:threads.php");
    exit(0);
}

?>