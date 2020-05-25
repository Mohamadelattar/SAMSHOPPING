 
    <?php
    require 'config/config.php';
    require 'includes/form/register_verification.php';
    include ("includes/header.php");
    
    
     ?>
  <div class="login-container d-flex align-items-center justify-content-center">
    <form class="login-form mt-3 needs-validation text-center" novalidate method="POST" action="InscriptionClient.php">
      <h1 class="mb-5 font-weight-light text-uppercase title">Inscription</h1>
      <div class="form-group">
        <?php
            if(in_array("<span style='color:#14C800;'>Tout est valide ! Aller pour se connecter<br> </span>",$error_array))
            {
                echo "<span style='color:#14C800;'>Tout est valide ! Aller pour se connecter<br> </span>";
            }
        ?>
        <br>
        <input type="text" class="form-control rounded-pill form-control-lg"placeholder="Nom " name="firstname" value="<?php 
             if(isset($_SESSION["firstname"]))
             {
                 echo $_SESSION["firstname"];
             }
         ?>" required>
         <br>
         <?php
             if(in_array("Le nom doit être entre 4 et 20 characters<br>",$error_array))
             {
                 echo "Le nom doit être entre 4 et 20 characters<br>";
             }
          ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control rounded-pill form-control-lg"placeholder="Preom " name="lastname" value="<?php 
             if(isset($_SESSION["lastname"]))
             {
                 echo $_SESSION["lastname"];
             }
         ?>" required>
          <br>
         <?php
             if(in_array("Le prenom doit être entre 4 et 20 characters<br>",$error_array))
             {
                 echo "Le prenom doit être entre 4 et 20 characters<br>";
             }
         ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control rounded-pill form-control-lg"placeholder="Email " name="email" value="<?php
             if(isset($_SESSION["email"]))
             {
                 echo $_SESSION["email"];
             }
         ?>" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control rounded-pill form-control-lg"placeholder="Repeat Email " name="confirmEmail" required>
        <br>
         <?php
             if(in_array("Email est déja utilisé<br>",$error_array))
             {
                 echo "Email est déja utilisé<br>";
             }
             else if(in_array("Email n'est pas validé<br>",$error_array))
             {
                 echo "Email n'est pas validé<br>";
             }
             else if(in_array("L'Email n'est pas le même<br>",$error_array))
             {
                 echo "L'Email n'est pas le même<br>";
             }
?>
      </div>
      <div class="form-group">
        <input type="password" class="form-control rounded-pill form-control-lg"placeholder="Mot de passe " name="password" required>
        
      </div>
      <div class="form-group">
        <input type="password" class="form-control rounded-pill form-control-lg"placeholder=" Reapet Mot de passe " name="confirmPassword" required>
        <?php
            if(in_array("Le Mot de passe n'est pas le même <br>",$error_array))
            {
                echo "Your password do not match<br>";
            }
            else if(in_array("Le mot de passe doit être entre 8 et 20 characters<br>",$error_array))
            {
                echo "Le mot de passe doit être entre 8 et 20 characters<br>";
            }
        ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control rounded-pill form-control-lg"placeholder="Age " name="age" required>
        <?php
             if(in_array("L'age n'est pas valider<br>",$error_array))
             {
                 echo "L'age n'est pas valider<br>";
             }
         ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control rounded-pill form-control-lg"placeholder="Adresse " name="adresse" required>
        <?php
             if(in_array("L'adresse n'est pas validé<br>",$error_array))
             {
                 echo "L'adresse n'est pas validé<br>";
             }
         ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control rounded-pill form-control-lg"placeholder="Ville " name="ville" required>
        <?php
             if(in_array("La ville n'est pas validé<br>",$error_array))
             {
                 echo "La ville n'est pas validé<br>";
             }
         ?>
      </div>
       
      <button type="submit" name="register" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">S'inscrire</button>
       <p class="mt-3 font-weight-normal">Vous avez déja un compte ? <a href="ConnexionClient.php"><strong>Se connecter</strong></a></p>
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
 
