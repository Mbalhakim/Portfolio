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
                   
                        <form class="field" method="post" action="addthread_afhandelen.php" enctype="multipart/form-data">
                            <h1 class="title">Voeg nieuwe thread toe</h1>
                            
                                <div class="field">
                                <label class="label" for="titel">Thread-titel</label>
                                    <input id="titel" name="titel" type="text" class="input">
                                    
                                </div>
                            
                            
                                <div class="field">
                                    <textarea id="inhoud" type="text" name="inhoud" class="textarea" rows="5"></textarea>
                                    <label for="inhoud">Thread-inhoud</label>
                                </div>
                        
                            
                                <div class="file">
                                    <label class="file-label">
                                    <input id="icon_to_upload" name="icon_to_upload" type="file" class="file-input">
                                    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>

                                    </label>
                                   
                                </div>
                            
                                <div class="column is-12">
                                    <button class="button is-success" style="float:right;" type="submit" name="action">
                                        Voeg toe
                                    </button>
                                </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <!-- EINDE LOGIN FORMULIER -->

        </div>
    </div>
</div>
<!-- EINDE PAGINA CONTAINER -->

<?php
@include_once ('onderstuk.php');
?>