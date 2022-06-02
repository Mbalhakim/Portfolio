<?php
@include_once ('sessie.php');
@include_once ('db.php');


$titel = $_POST['titel'];
$inhoud = $_POST['inhoud'];
$userid = $_SESSION['userid'];

$doelmap="img/";
$filenaam=$userid."_".$_FILES['icon_to_upload']['name'];
$doelfile=$doelmap.$filenaam;

if(dBconnect())
{
    move_uploaded_file($_FILES['icon_to_upload']['tmp_name'],$doelfile);
    $sql= "INSERT INTO threads(thr_title,thr_content,thr_icon,thr_user_id) VALUES ('$titel','$inhoud','$filenaam','$userid')";
    dbQuery($sql);
    header("Location:threads.php");
    exit(0);
}

?>