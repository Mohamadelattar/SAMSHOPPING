
    <?php
    require 'config/config.php';
    require 'includes/form/login_verification.php';
    include ("includes/header.php");
    include ("includes/Cart.php");

     ?>
  <div class="login-container d-flex align-items-center justify-content-center">
    <form class="login-form mt-5 needs-validation text-center" novalidate method="POST" action="ConnexionClient.php">
      <h1 class="mb-5 font-weight-light text-uppercase title">Connexion</h1>
      <div class="form-group">
        <input type="text" class="form-control rounded-pill form-control-lg"placeholder="Votre Email " name="log_email" required>
      </div>
      <div class="invalid-feedback">
        Verifier votre Email et Ressayer.
      </div>
      <div class="form-group">
        <input type="password" class="form-control rounded-pill form-control-lg"placeholder="Mot de passe " name="log_password" required>
        <?php
                if(in_array("Email or password was incorrect<br>",$error_login ))
                {
                    echo "Email or password was incorrect<br>";
                }
            ?>
      </div>
      <div class="invalid-feedback">
        Verifier votre Mot de passe et Ressayer.
      </div>
      <div class="forgot-link ">
        <div class="form-check ">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label for="rememberMe">Rester Connecté </label>
        </div>
       <a href="#">Mot de passe oublié?</a>
      </div>
      <button type="submit" name="login" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Se connecter</button>
       <p class="mt-3 font-weight-normal">Nouveau chez Nous ? <a href="InscriptionClient.php"><strong>Créer un Compte</strong></a></p>
    </form>

  </div>

<?php

include("includes/footer.php");
 ?>
 <!-- script for inputs requirement -->
 <script>
 (function() {
   'use strict';
   window.addEventListener('load', function() {
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
     var forms = document.getElementsByClassName('needs-validation');
     // Loop over them and prevent submission
     var validation = Array.prototype.filter.call(forms, function(form) {
       form.addEventListener('submit', function(event) {
         if (form.checkValidity() === false) {
           event.preventDefault();
           event.stopPropagation();
         }
         form.classList.add('was-validated');
       }, false);
     });
   }, false);
 })();
