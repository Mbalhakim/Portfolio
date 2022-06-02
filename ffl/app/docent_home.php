<?php
setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1'));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
@include_once ('../app/dbconnection.php');
@include_once ('../app/bovenstuk2.php');
 
if(!$_SESSION['docent_logged_in'])
    header('Location: docent_login.php');
 
    $dbconnect = new dbconnection();
    $sql = "SELECT studenten.naam AS student_naam, studenten.stnummer AS student_nummer, studenten.email AS student_email, klassen.naam AS student_klas, klassen.opleiding AS student_opleiding
    FROM studenten 
    INNER JOIN klassen ON studenten.klas_id=klassen.id
    WHERE studenten.klas_id='".$_SESSION['docent_klas_id']."'
       ";
    $query=$dbconnect->prepare($sql);
    $query->execute();
    $studenten=$query->fetchAll(PDO::FETCH_ASSOC); 

    $sql2 = "SELECT * FROM clinics 
    INNER JOIN clinicdatums ON clinics.id=clinicdatums.clda_clid
    WHERE clinics.docenten_id='". $_SESSION['docent_id']."'
    GROUP BY clda_datum ";
    $query2=$dbconnect->prepare($sql2);
    $query2->execute();
    $clinics=$query2->fetchAll(PDO::FETCH_ASSOC);
 
       //echo "<pre>";
        //print_r($clinics);
        //echo "</pre>";
    
?>



<div class="img">
<img src="../img/ffl.jpg" class="img-fluid" alt="Responsive image"></div>

<div id="divnaam" class="p-3 mb-2 bg-primary text-center text-white text-capitalize font-weight-bold ">Welkom terug <?php echo $_SESSION['docent_naam']; ?></div>


<div class="card-body w-75 mx-auto mb-5" style="background-color: #9784FF">
 <h3 class="text-center text-white">Studenten van u Klas</h3>
 <!--<h5 class="card-title text-center text-white"style="color: #0d47a1">Clinics</h5>  <table class="table table-border  ">  -->

  <div class="row text-center">
    
  </div>
 <div class="row">
 <div class="col-sd-8 col-md-offset-2">
 <table class="table bg-white table-hover table-striped table-condensed table-bordered">

    <thead class="p-3 mb-2 bg-dark text-dark">
    <th>Student Naam</th>
            <th scope="col">Student Nummer</th>
            <th scope="col">Student Email</th>
            <th scope="col">Student Klas</th>
            <th scope="col">Student Opleiding</th>
    <tbody>
        
       
                
 

  
                

                <?php
                            foreach($studenten as $student)
                            { 
                               
                                ?>
                                
            <tr>                 
            <td data-label="Student Naam"><?=$student['student_naam'] ?></td>
            <td data-label="Student Nummer"><?=$student['student_nummer'] ?></td>
            <td data-label="Student Email"><?=$student['student_email'] ?></td>
            <td data-label="Student Klas"><?=$student['student_klas'] ?></td>
            <td data-label="Student Opleiding"><?=$student['student_opleiding'] ?></td>
        </tr>
                                
 
           
            
                                  
                                   
                               
                                
 
                             
                            <?php
                            }
                            ?>
              






              </tbody>
</table>
 </div>
 </div>
<a href="register.php" class="btn btn-dark text-white">Student Toevoegen</a>
 </div>


 
 <div class="card-body w-75 mx-auto mb-5" style="background-color: #9784FF">
 <h3 class="text-center text-white">Clinics</h3>
 <!--<h5 class="card-title text-center text-white"style="color: #0d47a1">Clinics</h5>  <table class="table table-border  ">  -->

 
 <div class="row">
 <div class="col-sd-8 col-md-offset-2">
 <table class="">

    <thead class="">
        
            <tr>
            <th scope="col">Clinic Title</th>
            <th scope="col">Clinic Datum</th>
            <th scope="col">Clinic Tijd</th>
            <th scope="col">Clinic Plekken</th>
            <th style="width: 50%;" scope="col">Clinic Beschrijving</th>
            </tr>
        
    </thead>
    <tbody>
        
  

                <?php
                            foreach($clinics as $clinic)
                            { 
                                $displaydatum= strftime("%A %e %B %Y",strtotime($clinic['clda_datum']));
                                $displaytijd= strftime(" Om %H:%M uur ",strtotime($clinic['clda_datum']));
                                ?>
                                <tr>
                                             
            <td class="text-dark" data-label="Clinic title"> <?=$clinic['title'] ?></td>
            <td class="text-dark" data-label="Clinic Datum"><?=$displaydatum ?></td>
            <td class="text-dark" data-label="Clinic Tijd"><?=$displaytijd ?></td>
            <td class="text-dark" data-label="Clinic Plekken"><?=$clinic['plekken'] ?></td>
            <td style="width: 50%;" class="text-dark" data-label="Clinic Beschrijving"><?=$clinic['beschrijving'] ?></td>
        
                                </tr>
 

                             
                            <?php
                            }
                            ?>

              </tbody>
</table>
 
<a href="clinic_toevoegen.php" class="btn btn-dark text-white">Clinic Toevoegen</a>
 </div>

 </div>
 </div></div>




 
<?php


 
@include_once ('../app/onderstuk.php')
?>


 
