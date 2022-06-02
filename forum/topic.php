<?php
@include_once ('bovenstukmenu.php');
@include_once ('db.php');

$topicidee=$_GET['id'];

if(dbConnect())
{
     /*$sql="SELECT username, threads.thr_title AS hoofdtitel, topics.tpc_title AS topictitel, topics.tpc_content AS topicinhoud, topics.tpc_created_at AS aangemaaktmoment, COUNT(replies.rpl_topic_id) AS aantalreplies FROM topics
        INNER JOIN threads ON threads.thr_id=topics.tpc_thread_id 
        INNER JOIN users ON users.id=topics.tpc_user_id 
        INNER JOIN replies ON replies.rpl_topic_id=topics.tpc_id 
        WHERE tpc_thread_id='$threadidee'
        GROUP BY replies.rpl_topic_id";*/
        
    $sql="SELECT username, rpl_id, topics.tpc_counter AS tpccounter, rpl_likes AS likes, topics.tpc_title AS topictitle, topics.tpc_content AS topiccontent, replies.rpl_created_at AS aangemaaktmoment, replies.rpl_content AS rplcontent FROM replies
    INNER JOIN users ON users.id=replies.rpl_user_id 
    INNER JOIN topics ON topics.tpc_id=replies.rpl_topic_id 
    WHERE tpc_id='$topicidee'";
    /*$sql="SELECT username, tpc_title, tpc_content, rpl_created_at, rpl_content FROM replies
    INNER JOIN users ON usr_id=rpl_user_id 
    INNER JOIN topics ON rpl_topic_id=tpc_id 
    WHERE tpc_id='$topicidee'";*/
  
    dbQuery($sql);
    $replies=dbGetAll();
    /* echo "<pre>";
        print_r($replies);
        echo "</pre>";*/
   
}
else
    die();


?>

    <!-- BEGIN PAGINA CONTAINER -->
    <div class="hero-body" >
        <div class="columns is-centered">

            <div class="column is-9">
                <div class="card">
                    <div class="card-content" >
                    <div class="box #ffd54f amber lighten-2">
                        <span class="text">Topic:  <?= $replies[0]['topictitle']?>  <p>Aantal views: <span id="topicviews" class="text-has-size-5"><?= $replies[0]['tpccounter'] ?></span> </p></span>
                        <br> <br>
                        <p>Topic content:</p>
                        <br>
                        <p><span class="text white-text"><?= $replies[0]['topiccontent']?></span> </p></div>
                        <div class="list is-hoverable">

                            <?php
                            $teller=1;
                            foreach($replies as $reply)
                            { ?>

                                <!-- BEGIN REPLY -->
                                <div class="box #42a5f5 blue lighten-1	">
                                    <div class="column list-item is-hovered">
                                        <div class="column is-1 right-align" style="font-size: xx-large">
                                            <?= $teller ?>.
                                        </div>
                                        <div class="column is-10">
                                                    <span class="text white-text"><?= $reply['rplcontent']?></span>
                                                    
                                        </div>
                                        
                                    </div>
                                    <div class="column">
                                    <div style="float:right" id="likes<?= $reply['rpl_id']  ?>"><a href="#" onclick="likeReply(<?= $reply['rpl_id']?>, <?= $reply['likes'] ?> )"><img style="height: 30px; width:30px;" src="like.png"> </a> <p> <?= $reply['likes'] ?> Likes </p>
                                        </div>
                                    
                                        <div class="column is-12">Gepost door: <?= $reply['username'] ?> op: <?= $reply['aangemaaktmoment'] ?>
                                        </div>
                                        
                                       

                                        
                                    </div>
                                </div>
                                <!-- EINDE REPLY -->
                                <?php
                                $teller++;
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <script> hoogGelezenEenOp(<?=$topicidee?>, <?= $reply['tpccounter']?>)</script>

        </div>
    </div>
    <!-- EINDE PAGINA CONTAINER -->
<?php
@include_once ('onderstuk.php');
?>