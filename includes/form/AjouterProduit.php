<?php
    $error_array = array();

    if(isset($_POST["enregistrer"]))
    {

         // Form Data
         $title             = "";
         $categorie         = "";
         $prix              = "";
         $imageProduit      = "";
          
         // Title
         $title             =  strip_tags($_POST["title"]);                  // Remove tags
         $title             =  str_replace(' ','',$title);                   // remove space
         $title             =  ucfirst(strtolower($title));                  // Capitilaze the first letter

         // Categorie
         $categorie             =  strip_tags($_POST["categorie"]);          // Remove tags
         $categorie             =  str_replace(' ','',$categorie);           // remove space
         $categorie             =  ucfirst(strtolower($categorie));          // Capitilaze the first letter

         // Prix
         $prix             =  strip_tags($_POST["prix"]);                    // Remove tags

         // Description
         $description             =  strip_tags($_POST["description"]);         // Remove tags
         $description             =  str_replace(' ','',$description);          // remove space
         $description             =  ucfirst(strtolower($description));         // Capitilaze the first letter

         // Description
         $imageProduit              =  addslashes(file_get_contents($_FILES["imageProduit"]["tmp_name"]));                 
         
         
        
         
         $query = mysqli_query($con,"INSERT INTO article VALUES ('','$title','$categorie','$prix','$description','$imageProduit')");
    }
       



?>