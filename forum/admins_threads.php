<?php
@include_once ('bovenstukmenu.php');
@include_once ('db.php');

if($_SESSION['logged_in'] AND $_SESSION['usertype']==1)
{
if(dbConnect())
{
    $sql="SELECT thr_id, thr_title, thr_content, username, COUNT(tpc_id) AS aantaltopics, thr_icon, thr_goedgekeurd FROM threads
    INNER JOIN users ON thr_user_id=users.id
    LEFT JOIN topics ON thr_id=topics.tpc_thread_id 
    GROUP BY threads.thr_id";
    dbQuery($sql);
    $threads=dbGetAll();
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

                   
                        <div class="column is-12"><span class="title is-4">Threads - Adminpaneel</span></div>
                        

                    <div class="list is-hoverable">

                            <?php
                            foreach($threads as $thread)
                            { ?>
                                <!-- BEGIN VAN EEN THREAD -->
                                <a href="thread.php?osi=<?=$thread['thr_id'] ?>" class="list-item is-hovered">
                                    <img src="/img/<?= $thread['thr_icon'] ?>" alt="" class="is-rounded">

                                    <?php
                                    if($thread['thr_goedgekeurd']==0)
                                        $style='background: red';
                                    else
                                        $style='';
                                    ?>
                                    <div class="column" style="<?= $style; ?>">
                                        <div class="column is-9">
                                        <div class="box has-background-grey-lighter">
                                            <div class="column">
                                                <div class="column is-12">
                                                    <span class="title"><?=$thread['thr_title'] ?></span>
                                                    <p><?=substr($thread['thr_content'],0, 200)."........." ?></p>
                                                </div>
                                            </div>
                                            
                                            <div class="column">
                                                <div class="column is-12 is-italic">Moderator: <?=$thread['username'] ?></div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="column is-3">
                                            <h6 class="has-text-left">Statistieken</h6>
                                            <p class="has-text-left"><?=$thread['aantaltopics']  ?> topics</p>
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
    header('Location:index.php');
?>
