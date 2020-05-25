<?php 
     // Error Array
     $error_array = array();
     
     if(isset($_POST["register"]))
     {
        
         // Form Data
         $firstname        = "";
         $lastname         = "";
         $email            = "";
         $confirmEmail     = "";
         $password         = "";
         $confirmPassword  = "";
         $age              = "";
         $adresse          = "";
         $ville            = "";
         
         // First name
         $firstname             =  strip_tags($_POST["firstname"]);                  // Remove tags
         $firstname             =  str_replace(' ','',$firstname);          // remove space
         $firstname             =  ucfirst(strtolower($firstname));         // Capitilaze the first letter
       
         // Last name
         $lastname              = strip_tags($_POST["lastname"]);                    // Remove tags
         $lastname              = str_replace(' ','',$lastname);            // remove space 
         $lastname              = ucwords(strtolower($lastname));           // capitilaze the first letter 
         
         // Email 
         $email                  = strip_tags($_POST["email"]);
         $email                  = str_replace(' ','',$email);
         $email                  = ucwords(strtolower($email));
       
         // Email  Confirmation 
         $confirmEmail             = strip_tags($_POST["confirmEmail"]);              // Remove tags
         $confirmEmail             = str_replace(' ','',$confirmEmail);      // remove space 
         $confirmEmail             = ucwords(strtolower($confirmEmail));     // capitilaze the first letter
        // $_SESSION["confirmEmail"] = $confirmEmail;
         // Password
         $password                    = strip_tags($_POST["password"]);               // Remove tags
         $confirmPassword             = strip_tags($_POST["confirmPassword"]);        // Remove tags
         
        //Age
         $age                   =  strip_tags($_POST["age"]);                  // Remove tags
         
        // Adresse
         $adresse             =  strip_tags($_POST["adresse"]);                  // Remove tags
         $adresse             =  str_replace(' ','',$adresse);          // remove space
         $adresse             =  ucfirst(strtolower($adresse));         // Capitilaze the first letter
        
        
         // Ville
         $ville             =  strip_tags($_POST["ville"]);                  // Remove tags
         $ville             =  str_replace(' ','',$ville);          // remove space
         $ville             =  ucfirst(strtolower($ville));         // Capitilaze the first letter
        
        
             // Email Verification 
 
             if( $email == $confirmEmail)
              {   
                 // Check if email in Invalid Format
                 if(filter_var($email, FILTER_VALIDATE_EMAIL))
                  { 
                     $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                     
                      // Check Email Repetation
                      $email_check = mysqli_query($con,"SELECT mail from client WHERE mail = '$email'");
                     // Count the numbers of rows returned
                     $num_rows = mysqli_num_rows($email_check);
                 
                     if($num_rows > 0)
                     {
                         
                         array_push($error_array," Email est déja utilisé<br>");
                     }
                  } 
                 else
                  {
                     array_push($error_array,"Email n'est pas validé<br>");
                      
                  }
 
              }
             
             else
              {
                 array_push($error_array,"L'Email n'est pas le même<br>");
                  
              }
              // Valid Input
 
             if (strlen($firstname)>20 || strlen($firstname)<4)
             {
                 array_push($error_array,"Le nom doit être entre 4 et 20 characters<br>");
             }
 
             if (strlen($lastname)>20 || strlen($lastname)<4)
             {
                 array_push($error_array,"Le prenom doit être entre 4 et 20 characters<br>");
             }
 
             if($password != $confirmPassword)
             {
                 array_push($error_array,"Le Mot de passe n'est pas le même <br>");
             }
            
             if(preg_match('/[^A-Za-z]/',$ville))
            {
                 
                     array_push($error_array,"La ville n'est pas validé<br>");
            }
            
            if(preg_match('/[^A-Za-z0-9]/',$adresse))
            {
                 
                     array_push($error_array,"L'adresse n'est pas validé<br>");
             }
 
             
 
             if(strlen($password) > 20 || strlen($password) < 8)
             {
             
                 array_push($error_array,"Le mot de passe doit être entre 8 et 20 characters<br>");
             
             }
            /* if(!is_integer($age))
             {
                array_push($error_array,"L'age n'est pas valider<br>");
             }*/
 
             if(empty($error_array))
             {
                 // Encrypt Password
                 $password = md5($password);

 
                 $query = mysqli_query($con,"INSERT INTO client VALUES ('','$firstname','$lastname','$age','$adresse','$ville','$email','$password')");
 
                 array_push($error_array,"<span style='color:#14C800;'>Tout est valide ! Aller pour se connecter<br> </span>");
                 
 
 
             }
 
             
 
      }
 
 
 ?> 