<?php
@include_once ('bovenstukmenu.php');
//@include_once ('db.php');
@include_once ('db.php');

if($_SESSION['logged_in'])
{
    if(dbConnect())
    {
    
        $sql="SELECT threads.thr_id, thr_user_id,  threads.thr_title, threads.thr_content, users.username, COUNT(topics.tpc_id) AS aantaltopics, thr_icon FROM threads
        INNER JOIN users ON threads.thr_user_id=users.id
        LEFT JOIN topics ON threads.thr_id=topics.tpc_thread_id WHERE thr_goedgekeurd=1
        GROUP BY threads.thr_id";
        dbQuery($sql);
        $threads=dbGetAll(); 
       // echo "<pre>";
        //print_r($threads);
       // echo "</pre>";
    }
    else
    die();
?>

<!-- BEGIN PAGINA CONTAINER -->
<div class="hero-body">
    <div class=" columns is-centered">
        <div class="column is-9">
            <div class="card">
                <div class="card-content">
                    <!--<span class="card-title">Threads</span>-->

                    <div class="column is-vcentereds">
                    <div class="column is-11" style="text-align: right"><a href="addthread.php" class="button is-success">Voeg thread toe</a></div>
                        </div>

                   
                        <div class="column is-12"><span class="title is-4">Threads</span></div>
                        

                    <div class="list is-hoverable">

                            <?php
                            foreach($threads as $thread)
                            { ?>
                                <!-- BEGIN VAN EEN THREAD -->
                                
                                <a href="thread.php?osi=<?=$thread['thr_id'] ?>" class="list-item is-hovered">
                                    <img src="img/<?= $thread['thread_icon'] ?>" alt="" class="circle">
                                    <div class="column">
                                        <div class="column is-10">
                                            <div class="box has-background-grey-lighter">
                                                <div class="column is-12">
                                                    <span class="title"><?=$thread['thr_title'] ?></span>
                                                    <p class="has-text-size-4"><?=substr($thread['thr_content'],0, 200)."........." ?></p>
                                                </div>
                                                <div style="position: absolute;padding:10px; 
                                                right: 200px" class="columns is-1">
                                                 <a href="addtopic.php?osi=<?=$thread['thr_id'] ?>" class="button is-success" style="float: right;"> Voeg topic toe</a>
                                <!--<p style=" position: absolute;
                                            right: 300px"></p>-->
                                            <?php
                                            
                                            if( $_SESSION['userid']==$thread['thr_user_id'] or $_SESSION['usertype']==9)
                                            {
                                                echo "<button class='button is-success'>EDIT</button>";
                                            }
                                            
                                            ?>
                                                </div>
                                            
                                                <div class="column">
                                                    <div class="column is-12 is-italic">Moderator: <?=$thread['username'] ?></div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        <div class="column">
                                            <h6 class="has-text-left">Statistieken</h6>
                                            <p class="has-text-left"><?=$thread['aantaltopics']  ?> topics</p>
                                            
                                            <div class="coulmn is-1">

                                          
                                        </div>
                                    
                                    </div>

                                

                                        </div>
                                    </div>
                                </a>

                                <!-- EINDE VAN EEN THREAD -->
                            <?php
                            }
                            ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

@include_once ('onderstuk.php');
}
else
    header('Location: index.php');
?>








