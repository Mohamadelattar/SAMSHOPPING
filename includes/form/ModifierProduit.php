<?php

    if(isset($_POST["modifier"]))
    {
       $id_article = $_POST['id_article'];
       $titre  = $_POST['title'];
       $design = $_POST['categorie'];
       $prix   = $_POST['prix'];
       $categorie = $_POST['description'];     

       $query = mysqli_query($con, "UPDATE `article` SET `titre`='$titre',`design`='$design',`prix`='$prix',`categorie`='$categorie' WHERE `id_article`= '$id_article' ");
       header("Location: Panel.php");
         
    }
       



?>