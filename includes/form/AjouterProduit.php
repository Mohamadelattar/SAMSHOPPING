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
                            // remove space
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
         
         if($title=="")
         {
            array_push($error_array,"S'il vous plait Insert le titre <br>");
         }
         if($categorie=="")
         {
            array_push($error_array,"S'il vous plait Insert la categorie <br>");
         }
         if($prix =="")
         {
            array_push($error_array,"S'il vous plait Insert le prix <br>");
         }
         else if(!is_numeric($prix))
         {
             
             
                array_push($error_array,"S'il vous plait Insert une valeur numeric <br>");
              
         }
         if($description=="")
         {
            array_push($error_array,"S'il vous plait Insert la description <br>");
         }
         if($imageProduit =="")
         {
            array_push($error_array,"S'il vous plait Insert l' image <br>");
         }
         
         
        
         
         $query = mysqli_query($con,"INSERT INTO article VALUES ('','$title','$categorie','$prix','$description','$imageProduit')");
    }
       



?>