<?php
setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1'));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
@include_once ('sessie.php');
@include_once ('bovenstuk2.php');
?>





			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form name="myForm"  method="POST" onsubmit="return validateForm()" action="docent_registreren_afhandelen.php">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="naam" class="form-control input_user" value="" placeholder="Naam">
						</div>

                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="docent_code" class="form-control input_user" value="" placeholder="docent_code">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_pass" value="" placeholder="Email">
            </div>

            <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Wachtwoord">
            </div>
            
						
							<div class="d-flex justify-content-center mt-3 login_container">
              <button type="submit" value="Submit" name="action" class="btn login_btn">Sigh up</button>
				 	
				   </div>
					</form>
				</div>
		
	
			</div>
		
<?php
@include_once ('onderstuk.php');
?>



