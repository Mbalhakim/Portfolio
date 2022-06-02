<?php
setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1'));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
@include_once ('../app/dbconnection.php');
@include_once ('../app/bovenstuk.php');

 
?>
    <div class="img">
<img src="../img/ffl.jpg" class="img-fluid" alt="Responsive image"></div>
<div id="divnaam" class=" h1 p-3 mb-2 bg-primary text-center text-white text-capitalize font-weight-bold ">Over ons</div>


<div class="mx-auto card order-3 p-2" style="width: 50rem;">
  <div class="card-header text-center" style="background-color:#9784FF;">
    <h3 class="text-white">Wat is het Fit For Life programma?</h3>
  </div>
  <div class="card-body">
    <blockquote class="blockquote ">
      <p>Het Fit for Life programma is een fitness- en lifestyle programma dat gefocust is op drie pijlers: beweging, voeding en mental coaching.<br />
       Tijdens het programma ontvang je persoonlijke begeleiding van een gecertificeerd Personal Trainer.<br />
        Samen gaan jullie als een team aan de slag om al je persoonlijke doelstellingen te bereiken zoals afvallen,
       conditie verbeteren, fysieke klachten verhelpen of sterker worden.<br />
       Het programma is gebaseerd op 3 pijlers:<br /></p>
      <footer class="blockquote-footer">Fit For Life  <cite title="Source Title" >Schrijf nu in!!  <a href="clinics.php">Clinics</a> </cite></footer>
    </blockquote>
  </div>
  <div class="card-header text-center" style="background-color: #484848;"></div>
   
  
</div>
<br /><br />
<div class="mx-auto d-flex flex-nowrap">
<ul class=" list-group order-2 p-2 text-center" style="width: 40rem; ">
  <li class="list-group-item text-white   " style="background-color:#9784FF;" ><p class="h4">Het programma is gebaseerd op 3 pijlers:</p></li>
  <li class="list-group-item"><p class="h4">&#127939;Beweging&#127939;</p></li>
  <li class="list-group-item"><p class="h4">&#129367;Voeding&#129367;</p></li>
  <li class="list-group-item"><p class="h4">&#129496;Mental Coaching&#129496; </p></li>
  <div class="card-header text-center" style="background-color: #484848;"></div>
</ul>
<ul class=" list-group order-1 p-2 text-center" style="width: 40rem; ">
  <li class="list-group-item text-white   " style="background-color:#9784FF;" ><p class="h4">Fit For Life Mentors:</p></li>
  <li class="list-group-item"><p class="h4">Osinga Ids</p></li>
  <li class="list-group-item"><p class="h4">Francisca Fouchier </p></li>
  <li class="list-group-item"><p class="h4">Johan Koster</p></li>
  <div class="card-header text-center" style="background-color: #484848;"></div>
</ul>

</div>
<br /><br />

<div class=" p-2 mx-auto w-75 " style="background-color: white;">
<div class=" card-header text-white text-center"  style="background-color:#9784FF;">
    <h2>Het Fit for Life programma in het kort:</h2>
  </div> 
<div class=" d-flex justify-content-center">
<ul class="list-unstyled">
  <li>
  <div class="card-body "> 
  <p class="h3">✔ Training met persoonlijke begeleiding:</p>
  <blockquote class="blockquote">
   <p>Je traint wekelijks met jouw Personal Trainer in de studio.<br />
  Iedere week leer je weer nieuwe oefeningen, en wordt je weer
  uitgedaagd om tot het uiterste te gaan.<br />
  Je zult versteld staan van je eigen kracht! Tevens ontvang je je eigen persoonlijke
  fitnessset die in jouw bezit blijft.<br /> 
  Met deze fitnessset herhaal je de oefeningen thuis, in je eigen tijd en omgeving.<br />
  eenvoudig, effectief en je bespaart een hoop tijd!</p>
  </blockquote>
  </div>
  </li>


  <li>
  <div class="card-body"> 
  <p class="h3">✔ Voedingsadvies:</p>
  <blockquote class="blockquote">
   <p>Iedere week heb je een 'weegmoment' met jouw personal coach.<br /> 
   Aan de hand van het gewicht stelt jouw coach in overleg met
   onze gewichtsconsulent weer een persoonlijk voedingsadvies voor jou samen.<br /> 
   Tijdens het 'Fit for Life' programma leer je alles voor een gezonde levensstijl, gezonde, verantwoorde voeding en het effect van (snelle) suikers en vetten.<br /> Je zult de rest van je
   leven profiteren van deze kennis</p>
  </blockquote>
  </div>
  </li>

  <li>
  <div class="card-body"> 
  <p class="h3">✔ Mental coaching:</p>
  <blockquote class="blockquote">
   <p>Tijdens het programma gaan we ervoor zorgen dat je zelf meer oplossingsgericht gaat denken.<br />
    Door het programma en de coaching zul je beter in je vel gaan zitten en minder stress ervaren.<br /> 
    De focus tijdens een mental coaching sessie ligt op je gedachten en je mind set.<br /> 
    Door je gedachten de baas te worden, heb je meer invloed op je lichaam. We dagen je uit, motiveren,
   inspireren en adviseren en geven jou nét dat zetje in de rug als je het nodig hebt.<br /></p>
  </blockquote>
  </div>
  </li>

  
</ul>

</div>
<div class="card-header text-center" style="background-color: #484848;"></div>
</div>
<br />


<?php
@include_once ('../app/onderstuk.php')
?>


 
