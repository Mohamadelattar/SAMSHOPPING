<?php
    $error_modifier_array = array();

    if(isset($_POST["modifier"]))
    {

        $title             = "";
        $title             =  strip_tags($_POST["title"]);                  // Remove tags
        $title             =  ucfirst(strtolower($title));                  // Capitilaze the first letter
                         
         
         /*---------------------------- Categorie --------------------------*/
        if(isset($_POST["categorie"]))
        {
         $categorie=="" ;    
         $categorie             =  strip_tags($_POST["categorie"]);          // Remove tags
         $categorie             =  str_replace(' ','',$categorie);           // remove space
         $categorie             =  ucfirst(strtolower($categorie));          // Capitilaze the first letter

         if($categorie=="")
         {
            array_push($error_modifier_array,"S'il vous plait Insert la categorie <br>");
            $categorie==""
         }
         else
         {
                $query = mysqli_query($con,"UPDATE `article` SET  `design`='$categorie'  WHERE `titre` = '$title'");
         }
        }

        /*---------------------------------- Prix ---------------------------------*/
        if(isset($_POST["prix"]))
        {
         $prix              = "";
         $prix             =  strip_tags($_POST["prix"]);                    // Remove tags
        if($prix =="")
         {
            array_push($error_modifier_array,"S'il vous plait Insert le prix <br>");
         }
         else if(!is_numeric($prix))
         {
             
             
                array_push($error_modifier_array,"S'il vous plait Insert une valeur numeric <br>");
              
         }
         else
         {
                $query = mysqli_query($con,"UPDATE `article` SET  `prix`='$prix'   WHERE `titre` = '$title'"); 
                $prix              = "";    
         }


        }
         


        /*------------------------------------ Description ----------------------------*/
        if(isset($_POST["description"]))
        {
          $description  ="";
          $descriptio   =  strip_tags($_POST["description"]);         // Remove tags
          $description  =  str_replace(' ','',$description);          // remove space
          $description  =  ucfirst(strtolower($description));         // Capitilaze the first letter

         if($description=="")
         {
            array_push($error_modifier_array,"S'il vous plait Insert la description <br>");
         }
         else
         {
                $query = mysqli_query($con,"UPDATE `article` SET `categorie`='$description' WHERE `titre` = '$title'");
                $description  ="";
         }
        }
        
         
         /*-------------------------------Image------------------------------*/
         if(isset($_POST["imageProduit"]))
         {
         $imageProduit      = "";
         $imageProduit              =  addslashes(file_get_contents($_FILES["imageProduit"]["tmp_name"]));
         if($imageProduit =="")
         {
            array_push($error_modifier_array,"S'il vous plait Insert l' image <br>");
         }
         else
         {
                $query = mysqli_query($con,"UPDATE `article` SET `imageProduit`='$imageProduit' WHERE `titre` = '$title'");
                $imageProduit      = "";
         }
         }      
         
         /*-------------------------------- Titre ---------------------*/
        if(isset($_POST["title"]))
        {
         
                if($title=="")
                {
                   array_push($error_modifier_array,"S'il vous plait Insert le titre <br>");
                }
                else
                {
                       $query = mysqli_query($con,"UPDATE `article` SET `titre`='$title' WHERE `titre` = '$title'");
                       $title="";
                }
        }
         
    }
       



?>