<?php
@include_once ('sessie.php');
@include_once ('bovenstuk2.php');
?>


<!--
<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form name="myForm"  method="POST" onsubmit="return validateForm()" action="registreren.php">
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
							<input type="text" name="st_nummer" class="form-control input_user" value="" placeholder="Student Nummer">
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
            
            <div class="input-group-text ">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Student klas</label>
            <select class="custom-select mr-sm-2" name="klas" required>
            <option selected></option>
            <option value="1">IT-APP</option>
            <option value="2">IT-NET</option>
            <option value="3">IT-MEDIA</option>
            </select>
            </div>

						
							<div class="d-flex justify-content-center mt-3 login_container">
              <button type="submit" value="Submit" name="action" class="btn login_btn">Sigh up</button>
				 	
				   </div>
					</form>
				</div>
		
	
			</div>
      

-->


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card-log">
			<div class="card-header text-center">
				<h3>Student Registreren</h3>
			
			</div>
			<div class="card-body">
				<form  name="myForm"  method="POST" onsubmit="return validateForm()" action="registreren.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
					<input type="text" name="naam" class="form-control input_user" value="" placeholder="Naam" required>
						
					</div>

          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
					<input type="text" name="email" class="form-control input_user" value="" placeholder="Email" required>
						
					</div>

          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
					<input type="text" name="st_nummer" class="form-control input_user" value="" placeholder="Student Nummer" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control input_pass" value="" placeholder="Wachtwoord" required>
					</div>
					

          <div class="input-group-text" style="background-color: #9784FF;color:white">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Student klas</label>
            <select class="custom-select mr-sm-2" name="klas" required>
            <option selected></option>
            <option value="1">IT-APP</option>
            <option value="2">IT-NET</option>
            <option value="3">IT-MEDIA</option>
            </select>
            </div>
					<div class="form-group">
						<input  type="submit" name="action" value="Login" style="background-color:  #9784FF;" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="img">
<img src="../img/ffl.jpg" class="img-fluid" alt="Responsive image"></div>
				
			</div>
			
		</div>
	</div>
</div>

			
		
<?php
@include_once ('onderstuk.php');
?>



