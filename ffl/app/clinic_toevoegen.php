<?php 
setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1'));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
@include_once ("dbconnection.php");
@include_once ("sessie.php");
@include_once ("bovenstuk2.php");



?>
<div class="container">
	<div class="d-flex justify-content-center w-50 ">
<div class="card-body bg-primary  p-3 mx-auto m-5">
<div class="card-header bg-dark text-white text-center h4 ">Clinic Toevoegen</div>

<form class=""  method="POST" action="clinic_toevoegen_afhandelen.php" >
  <div class="col-auto">
    <label for="staticEmail2" class=" text-white">Title</label>
    <input type="text" name="title" class="form-control-plaintext bg-white" id="staticEmail2" value="" required>
  </div>
  <div class="col-auto">
    <label  class="visually-hidden text-white">Plekken</label>
    <input  type="number" min="20" max="30" name="plekken"  class="form-control-plaintext bg-white" id="staticEmail2" value="" required>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1"  maxlength="10" class="form-label text-white">Beschrijving</label>
  <textarea name="inhoud" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>
<div class="col-auto">
    <button value="Submit" name="action" class="btn btn-dark mb-3">Voeg Toe</button>
  </div>
</form>


</div>
  </div>
</div>
<?php
@include_once ("onderstuk.php")
?>

