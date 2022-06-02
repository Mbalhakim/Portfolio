<?php
@include_once ('bovenstukmenu.php');
?>

<!-- BEGIN PAGINA CONTAINER -->
<div class="hero-body">
    <div class="columns is-centered">
        <div class="column is-6">

            <!-- BEGIN threads -->
            <div class="card">
                <div class="card-content">
                    
                        
                        <form class="field" method="post" action="addtopic_afhandelen.php" enctype="multipart/form-data">
                            <h1 class="title">Voeg nieuwe Topic toe</h1>
                            <div class="field">
                            <label class="label" for="titel">Topic-titel</label>
                              
                                    <input id="titel" name="titel" type="text" class="input">
                                    
                                </div>
                               
                            

                            <div class="field">
                            <label class="label" for="thread">Thread number is  <?=$threadidee=$_GET['osi'];?>
                               
                                    <input class="input" id="thread" name="thread" type="text" placeholder="Vul in de thread nummer>" >
                                   
                                
                            </div>
                            

                            <div class="column">
                            <label class="label" for="inhoud">Topic-inhoud</label>
                                <div class="input-field ">
                                    <textarea class="textarea" id="inhoud" type="text" name="inhoud" class="validate" rows="5"></textarea>
                                    
                                </div>
                          
                            <div class="Column">
                                <div class="column is-12">
                                    <button style="float: right;" class="button is-success" type="submit" name="action">
                                        Voeg toe
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    
                </div>
            </div>
            <!-- EINDE LOGIN FORMULIER -->

        </div>
    </div>
</div>
</div>

<!-- EINDE PAGINA CONTAINER -->

<?php
@include_once ('onderstuk.php');
?>





































<!---->