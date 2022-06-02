<?php
setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1'));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
@include_once ('../app/dbconnection.php');
@include_once ('../app/bovenstuk.php');
 
if(!$_SESSION['logged_in'])
    header('Location: ../index.php');
 
    $dbconnect = new dbconnection();
    $sql = "SELECT studenten.stnummer AS student_nummer, studenten.naam AS student_naam, studenten.vestiging, studenten.email, klassen.opleiding AS opleiding, klassen.naam AS klas, klassen.id AS klas_id   FROM studenten 
        INNER JOIN klassen ON studenten.klas_id=klassen.id
        WHERE email = '". $_SESSION['user_email']."'";
    $query=$dbconnect->prepare($sql);
    $query->execute();
    $student=$query->fetchAll(PDO::FETCH_ASSOC);  
 
    //echo "<pre>";
    //print_r($student);
    //echo "</pre>";
        
        $klasid =  $student[0]['klas_id'];
        
       
        $sql1 = "SELECT naam FROM docenten
        WHERE docenten.klas_id = $klasid";
         $query1=$dbconnect->prepare($sql1);
         $query1->execute();
         $docent=$query1->fetchAll(PDO::FETCH_ASSOC);
        
        //echo "<pre>";
        //print_r($docent);
        //echo "</pre>";
        
       $sql2 = "SELECT naam, title, clda_datum, gekcl_clinicdatumid AS clinicd, gekcl_clinic_id AS clinicidid FROM gekozenclinics 
       INNER JOIN (clinicdatums 
       INNER JOIN (clinics 
       INNER JOIN docenten 
       ON docenten_id=docenten.id) 
       ON clda_clid=clinics.id) 
       ON gekcl_clinicdatumid=clda_id 
       WHERE gekcl_stid={$_SESSION['userid']}
        ORDER BY clda_datum, clinics.id"; 
        
         $query2=$dbconnect->prepare($sql2);
         $query2->execute();
         $gekozenClinic=$query2->fetchAll(PDO::FETCH_ASSOC);
 
       // echo "<pre>";
        //print_r($gekozenClinic);
        //echo "</pre>";
    
?>



<div class="img">
<img src="../img/ffl.jpg" class="img-fluid" alt="Responsive image"></div>
<div id="divnaam" class="p-3 mb-2 bg-primary text-center text-white text-capitalize font-weight-bold ">Welkom terug <?php echo $_SESSION['naam']; ?></div>
<br />




<div class="grid-container">
<div id="" class="card" >

    <div class="card-body " style="background-color: #e3f2fd">
        <h5 class="card-title text-center"style="color: #0d47a1">Gegevens</h5>
        <div class="container">
            <div class="row">
                <div class="col text-white" style="background-color: #00acc1">Naam</div>

                <div class="col text-white" style="background-color: #1e88e5 "><?= $student[0]['student_naam'] ?></div>

                <div class="w-100"></div><br />
                <div class="col text-white"style="background-color: #00acc1">Klas </div>
                <div class="col text-white"style="background-color: #1e88e5 "><?= $student[0]['klas'] ?></div>
                <div class="w-100"></div><br />
                <div class="col text-white"style="background-color: #00acc1">Niveau </div>
                <div class="col text-white"style="background-color: #1e88e5 "><?= $student[0]['opleiding'] ?></div>
                <div class="w-100"></div><br />
                <div class="col text-white"style="background-color: #00acc1">Mentor </div>
                <div class="col text-white"style="background-color: #1e88e5 "><?= $docent[0]['naam'] ?></div>
                <div class="w-100"></div><br />
                <div class="col text-white"style="background-color: #00acc1">Vestiging </div>
                <div class="col text-white"style="background-color: #1e88e5 "><?= $student[0]['vestiging'] ?></div>
                <div class="w-100"></div><br />
                <div class="col text-white"style="background-color: #00acc1">Student nr. </div>
                <div class="col text-white"style="background-color: #1e88e5 "><?= $student[0]['student_nummer'] ?></div>
                <div class="w-100"></div><br />
                <div class="col text-white"style="background-color: #00acc1">Email </div>
                <div class="col text-white"style="background-color: #1e88e5 "><?php echo $_SESSION['user_email']?></div>
                <div class="w-100"></div><br />
                <div class="col text-white"style="background-color: #00acc1">EIS </div>
                <div class="col text-white"style="background-color: #1e88e5 ">EIS</div>



            </div>
        </div>

    </div>
</div>


    <div class="card-body " style="background-color: #e3f2fd"   >
    <div class="card-title text-center text-primary  h4">Clinics</div>
    <table class="">

  <thead>
    <tr class="text-white" style="background-color: #5c5c5c">
      <th scope="col">Clinic title</th>
      <th scope="col">Datum</th>
      <th scope="col">Tijd</th>
      <th scope="col">Clinic docent</th>
      <th scope="col">Uitschrijven</th>
    </tr>
  </thead>
  <tbody>

  <?php
                            foreach($gekozenClinic as $clinic)
                            { 
                                $displaydatum= strftime("%A %e %B %Y",strtotime($clinic['clda_datum']));
                                $displaytijd= strftime("Om %H:%M uur",strtotime($clinic['clda_datum']));
                                ?>

        <tr>
            <td class="text-white" style="background-color: #1e88e5 " data-label="Clinic title"><?=$clinic['title'] ?></td>
            <td  class="text-white" style="background-color: #00acc1" data-label="Datum"><?=$displaydatum ?></td>
            <td class="text-white" style="background-color: #1e88e5 "data-label="Tijd"><?=$displaytijd ?></td>
            <td  class="text-white" style="background-color: #00acc1"data-label="Clinic docent"><?=$clinic['naam'] ?></td>
            <td  class="text-white" style="background-color: #1e88e5 " data-label="Uitschrijven"> <?php $clidatum=$clinic['clinicd'];
                $clid=$clinic['clinicidid'];
                echo "<a href='clinic_Uitschrijven_afhandelen.php?clinicd=$clidatum&clinic=$clid' class='btn text-white'>Uitschrijven</a>";?> </td>
        </tr>
                            
                            <?php
                            }
                            ?>
    
   
  </tbody>
</table>
</div>


    
  
</div>

<br />
 
<?php


 
@include_once ('../app/onderstuk.php')
?>


 
