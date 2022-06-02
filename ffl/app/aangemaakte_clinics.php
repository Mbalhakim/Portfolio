<?php
setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1'));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
@include_once ('../app/dbconnection.php');
@include_once ('../app/bovenstuk2.php');
@include_once ('sessie.php');
 
if(!$_SESSION['docent_logged_in'])
    header('Location: docent_login.php');
    $dbconnect = new dbconnection();
    $sql= "SELECT* FROM clinics WHERE docenten_id={$_SESSION['docent_id']}";
    $query=$dbconnect->prepare($sql);
    $query->execute();
    $aangemaakte_clinics=$query->fetchAll(PDO::FETCH_ASSOC);

        /// echo "<pre>";
       /// print_r($aangemaakte_clinics);/* */
       // echo "</pre>";
?>

<br/>
<div class="container  mx-auto">

	<div class="d-flex justify-content-center w-75 ">
    
        
            <div class="card-body bg-dark p-3 m-5" >
               
                    

                    <div class="card-header">
                        <div class=" text-center text-white"><h3 class="card-title">Zet Datum Voor Clinics</h3></div>
                        
                    </div>

                            
                    




                    <form name="clinicform"  method="POST"  action="clinic_datum_toevoegen_afhandelen.php">
 
  
                    <div class="form-group">
            <label class="mr-sm-2 text-white" for="inlineFormCustomSelect">Kies een Clinic</label>
            <select class="custom-select mr-sm-2" name="clinicid" required>
            <option selected></option>

                            <?php
                            foreach($aangemaakte_clinics as $clinic)
                            { 
                                
                                ?>
                                 <option value="<?=$clinic['id'] ?> "><?=$clinic['title'] ?></option>
                           
                            <?php
                            }
                            ?>
                             </select>
            </div>
            <div class="form-group">
    <label class="text-white">Kies Een Datum</label>
    
    <input type="datetime-local" class="text-dark"  name="clinicdatum" required>
    
   
  </div>

            <button type="submit" class="btn btn-primary">Submit</button>
</form>







                    
               
            </div>
        
 
</div>

</div>


<?php



@include_once ('../app/onderstuk.php')
?>


