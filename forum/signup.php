
<?php
@include_once("bovenstuk.php");


?>
<!--
<h1 style="" id="h1login">Login voor nieuwe </h1>
<p class=""></p>
<div class="field" id="logInDiv">
  <p class="control has-icons-left has-icons-right">
    <input class="input" type="email" placeholder="Email">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div class="field" id="logInDiv1">
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
</div>
<div class="field" id="logInBtn">
  <p class="control">
    <button class="button is-success">
      Login
    </button>
  </p>
</div>
-->
<section class="hero is-link  is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
          <form method="POST"  action="signup_afhandelen.php" class="box">
          <div class="field">
              <label for="" class="label">Username</label>
              <div class="control has-icons-left">
                <input  id="Username" name="username" type="text" placeholder="Username" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="label">Email</label>
              <div class="control has-icons-left">
                <input id="Email" name="email"  type="email" placeholder="e.g. bobsmith@gmail.com" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input id="Password" name="password" type="password" placeholder="*******" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
            </div>
         
            <div class="field">
              <button class="button is-success" type="submit" name="action">
              Registreren
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<?php

@include_once("onderstuk.php");

?>