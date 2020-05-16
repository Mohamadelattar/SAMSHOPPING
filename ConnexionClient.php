<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/styleLogin.css">
<link rel="JavaScript" href="/js/inputsvalidation.js">
  </head>
  <body>
    <?php
    include ("includes/header.php");
     ?>
  <div class="login-container d-flex align-items-center justify-content-center">
    <form class="login-form mt-5 needs-validation text-center" novalidate >
      <h1 class="mb-5 font-weight-light text-uppercase title">Connexion</h1>
      <div class="form-group">
        <input type="text" class="form-control rounded-pill form-control-lg"placeholder="Votre Email " required>
        <div class="invalid-tooltip">
          Verifier votre Email et Ressayer.
        </div>
      </div>
      <div class="form-group">
        <input type="password" class="form-control rounded-pill form-control-lg"placeholder="Mot de passe " required>
        <div class="invalid-tooltip">
          Verifier votre Mot de passe et Ressayer.
        </div>
      </div>
      <div class="forgot-link ">
        <div class="form-check ">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label for="rememberMe">Rester Connecté </label>
        </div>
       <a href="#">Mot de passe oublié?</a>
      </div>
      <button type="submit" class="btn btn-custom btn-block text-uppercase rounded-pill btn-lg">Se connecter</button>
       <p class="mt-3 font-weight-normal">Nouveau chez Nous ? <a href="#"><strong>Créer un Compte</strong></a></p>
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
</script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
