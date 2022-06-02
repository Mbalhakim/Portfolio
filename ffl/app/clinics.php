<?php
@include_once ('../app/dbconnection.php');
@include_once ('../app/bovenstuk.php');

if(!$_SESSION['logged_in'])
    header('Location: ../index.php');

    $dbconnect = new dbconnection();
    $sql = "SELECT clinics.id AS clid ,clinics.title  AS c_title, clinics.beschrijving AS c_inhoud, clinics.plekken AS c_plekken, clinicdatums.clda_id, clinicdatums.clda_datum AS c_datum FROM clinics
    INNER JOIN clinicdatums ON clinics.id=clinicdatums.clda_clid
    ORDER BY clda_datum, clinics.id";
    $query=$dbconnect->prepare($sql);
    $query->execute();
    $clinics=$query->fetchAll(PDO::FETCH_ASSOC);  



?>

<br/>
<div class="container">
    <div class="row first-row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    

                    <div class="row">
                        <div class="col s6 text-center"><h1 class="card-title">Clinics</h1></div>
                        
                    </div>

                            
                    <div class="collection">

                            <?php
                            foreach($clinics as $clinic)
                            { 
                                $displaydatum= strftime("%A %e %B %Y",strtotime($clinic['c_datum']));
                                $displaytijd= strftime(" %H:%M Om uur",strtotime($clinic['c_datum']));?>
                                
                              
                                <div class="card card text-white">
                                    <div class="card-header  text-primary font-weight-bold">
                                    <?=$clinic['c_title'] ?>
                                    </div>
                                    <div class="card-body  bg-primary">
                                        <h5 class="card-title">Datum: <?= $displaydatum ?></h5>
                                        <h5 class="card-title">Tijd : <?= $displaytijd ?></h5>
                                        <h5 class="card-title"><?=$clinic['c_plekken'] ?>  Plekken beschiekbaar</h5>
                                        <p class="card-text"><?=$clinic['c_inhoud'] ?></p>
                                        
                                        
                                       <?php
                                       
                                       
                                       
                                       echo "<a href='clinic_afhandelen.php?clinicid=".$clinic['clid']."' class='btn btn-light' >Aanmelden</a>" ?>
                                    </div>
                                    </div><br />
                                  
                                   
                               
                                

                             
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



@include_once ('../app/onderstuk.php')
?>


