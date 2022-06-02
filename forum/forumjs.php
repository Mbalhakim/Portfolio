<?php
@include_once('sessie.php');
@include_once('db.php');


$action = $_POST['action'];
if ($action=="topicophogen")
{
    //echo "test  topic id is ".$_POST['topic_id']."  counter is ".$_POST['counter'];
    if(dbConnect())
    {
        $topicid=$_POST['topic_id'];
        $topiccounter=$_POST['counter'] + 1;
        $sql="UPDATE topics SET tpc_counter='$topiccounter' WHERE tpc_id='$topicid'";
        dbQuery($sql);
     echo $topiccounter; 
    }
}

elseif($action=="likesophogen")

{
    if(dbConnect())
    {
        $replyid=$_POST['reply_id'];
        $userid=$_SESSION['userid'] ;
        $sql0="SELECT COUNT(*) AS aantal FROM reply_likes WHERE like_reply_id=$replyid AND like_user_id=$userid";
        dbQuery($sql0);
        $aantallikes=dbGetAll();
        $aantalgevonden = $aantallikes[0]['aantal'];
if($aantalgevonden==0)
{   
    $likecounter=$_POST['aantal_likes'] + 1;
    $sql1="UPDATE replies SET rpl_likes='$likecounter' WHERE rpl_id='$replyid'";
    dbQuery($sql1);
    $ipadres=$_SERVER['REMOTE_ADDR'];

    $sql2="INSERT INTO reply_likes(lik_reply_id,lik_user_id,lik_ipadres) VALUES ('$replyid','$userid','$ipadres')";
    dbQuery($sql2);
    echo $likecounter;

}
else {
    echo $_POST['aantal_likes'];

}

        
    }
     
}

?>