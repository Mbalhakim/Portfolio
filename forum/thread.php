<?php
@include_once ('bovenstukmenu.php');
@include_once ('db.php');

$threadidee=$_GET['osi'];

//echo "threadid = ".$threadidee;

    if(dbConnect())
    {
       $sql="SELECT username,threads.thr_icon AS img , threads.thr_title AS hoofdtitel , tpc_title AS topictitel, tpc_thread_id, tpc_content AS topicinhoud, tpc_created_at AS aangemaaktmoment, tpc_id, COUNT(replies.rpl_topic_id) AS aantalreplies FROM topics
        INNER JOIN threads ON threads.thr_id=topics.tpc_thread_id 
        INNER JOIN users ON users.id=topics.tpc_user_id 
        INNER JOIN replies ON replies.rpl_topic_id=topics.tpc_id 
        WHERE tpc_thread_id='$threadidee'
        GROUP BY replies.rpl_topic_id;";
       /* $sql="SELECT threads.thr_id, thr_user_id,  threads.thr_title, threads.thr_content, users.username, COUNT(topics.tpc_id) AS aantaltopics, thr_icon FROM threads
        INNER JOIN users ON threads.thr_user_id=users.id
        LEFT JOIN topics ON threads.thr_id=topics.tpc_thread_id WHERE thr_goedgekeurd=1
        GROUP BY threads.thr_id";*/
        dbQuery($sql);
        $topics=dbGetAll();
        $img = $topics[0]['img'];
      echo "<pre>";
        print_r($img);
        echo "</pre>";
        
    }
    else
        die();

?>

<!-- BEGIN PAGINA CONTAINER -->
<div class="hero-body">
    <div class="columns is-centered">

        <div class="column is-9">
            <div class="card peach-gradient">
                <div class="card-content">
                    <span class="card-title is-size-4 has-text-white">Thread : <?= $topics[0]['hoofdtitel']?> - Topics</span>
                    <div class="column">
                    
            
                </div>

                    <div class="list is-hoverable">
                        
                      

                <?php
                    foreach($topics as $topic)
                    { ?>
                     

                        <!-- BEGIN TOPIC -->
                        <div class="box is-size-7 white ">
                        

                        <a href="topic.php?id=<?= $topic['tpc_id'] ?>" class="list-item is-hovered">
                            <img src="<?=$img?>" alt=""  style="width: 30px; height:30px" class="is-rounded">

                            <div class="column">

                                <div class="column is-8">
                                
                                    <div class="columns">
                                        <div class="column is-12">
                                            <span class="title">Thema &gt; <?= $topic['topictitel']?></span>
                                            <p style="font-size:15px;"><?= $topic['topicinhoud'] ?></p>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="column is-12 is-italic">Gepost door: <?= $topic['username'] ?> op: <?= $topic['aangemaaktmoment'] ?></div>
                                    </div>
                                
                                
                                <div class="columns">
                                <div class="column is-3 has-text-centered   ">
                                    <h6 class="title has-text-centered">Replies</h6>
                                    <p style="font-size: 35px;"><?= $topic['aantalreplies'] ?></p>
                                </div>

                                <div class="column is-8">
                                    <h6 class=" title has-text-centered">Status</h6>
                                    <div class=" column is-12 has-text-centered ">
                                        <span class=" button has-background-primary ">open</span>
                                    </div>
                                </div>
                                </div>
                                

                                </div>
                            </div>
                            </div>
                        </a>
                        <!-- EINDE TOPIC -->
                        <?php
                    }
                        ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- EINDE PAGINA CONTAINER -->
<?php
@include_once ('onderstuk.php');
?>