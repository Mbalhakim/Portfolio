
<?php
setlocale(LC_ALL, array('Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1'));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
@include_once('bovenstuk2.php');


?>


<!--
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST" action="docent_login_afhandelen.php">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="" placeholder="email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label"style="color:white;" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
              <button type="submit" name="action" class="btn login_btn">Login</button>
				 	
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
          <div class="d-flex justify-content-center links" style="color:white;" >
          
						Heeft u geen account? <a href="register.php" class="ml-2"  style="color:white;" >Sign Up</a>
					</div>
				
				</div>
			</div>
-->



<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card-log">
			<div class="card-header">
				<h3>Login</h3>
			
			</div>
			<div class="card-body">
				<form  method="POST" action="docent_login_afhandelen.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="email" class="form-control input_user" value="" placeholder="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
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
			<div class="card-header text-white">
				<p>	Heeft u geen account? <a href="register.php" class="ml-2"  style="color:white; background-color:#9784FF" >Sign Up</a></p>
			
			</div>
		</div>
	</div>
</div>


<?php

@include_once ('onderstuk.php');

?>