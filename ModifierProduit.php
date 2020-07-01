<?php
require 'config/config.php';
require 'includes/form/ModifierProduit.php';
include("includes/header.php");

?>
<section class="container-fluid" id="ajouter">
<p><a href="#">Home</a>/<a href="#">Contact</a></p>
         
        <h2>Modifier un produit</h2>
<div class="container" id="ajouterProduit" >
    <div class="row">
    <form action="ModifierProduit.php" method="POST" class="col-lg-12" enctype="multipart/form-data">
        <div class="ajoutElement"  >
        <label for="title" class="col-lg-6 " >Titre : </label>
        <input type="text" name="title" class="col-lg-6 form-control rounded-pill form-control-lg" value="
        <?php
                $title  =  strip_tags($_POST["titre"]); 
                echo $title;
            ?>
        ">
        <br>
        <?php
                if(in_array("S'il vous plait Insert le titre <br>",$error_modifier_array))
                {
                    echo "S'il vous plait Insert le titre <br>";
                }
            ?>
        </div>
        <div class="ajoutElement">
        <label for="categorie"   class="col-lg-6">Categorie : </label>
        <select  name="categorie" class="col-lg-6 form-control rounded-pill form-control-lg">
            <option value="smartphone">Smartphone</option>
            <option value="pc">Pc Portable</option>
            <option value="tablette">Tablette</option>
            <option value="accessesoire">Accessesoire</option>
        </select>
        <br>
        <?php
                if(in_array("S'il vous plait Insert la categorie <br>",$error_modifier_array))
                {
                    echo "S'il vous plait Insert la categorie <br>";
                }
            ?>
        </div>
        <div class="ajoutElement">
        <label for="prix" class="col-lg-6">Prix : </label>
        <input type="text" name="prix" class="col-lg-6 form-control rounded-pill form-control-lg" value="
        <?php
        $title  =  strip_tags($_POST["titre"]); 
        $result = mysqli_query($con, "SELECT * FROM `article` WHERE `titre` = '$title'");
        $row =  mysqli_fetch_array($result);
        echo $row["prix"];
        ?>">
        <br>
        <?php
                if(in_array("S'il vous plait Insert le prix <br>",$error_modifier_array))
                {
                    echo "S'il vous plait Insert le prix <br>";
                
                }
                else if(in_array("S'il vous plait Insert une valeur numeric <br>",$error_modifier_array))
                {
                    echo "S'il vous plait Insert une valeur numeric <br>";
                }
            ?>
        </div>
        <div class="ajoutElement">
        <label for="description" class="col-lg-6" >Description :</label><br>
        <textarea name="description" id="" cols="" rows="10%" class="col-lg-12 form-control   form-control-lg" >
        <?php
        $title  =  strip_tags($_POST["titre"]); 
        $result = mysqli_query($con, "SELECT * FROM `article` WHERE `titre` = '$title'");
        $row =  mysqli_fetch_array($result);
        echo $row['categorie'];
        ?>
        </textarea>
        <br>
        <?php
                if(in_array("S'il vous plait Insert la description <br>",$error_modifier_array))
                {
                    echo "S'il vous plait Insert la description <br>";
                }
                
            ?>
        </div> 
        <div class="ajoutElement">      
        <label for="imageProduit" class="col-lg-6">Telecharger L'image du produit :</label>
        <input type="file"  name="imageProduit" class="col-lg-6 " id="buttUpload" >
        <br>
        <?php
                if(in_array("S'il vous plait Insert l' image <br>",$error_modifier_array))
                {
                    echo "S'il vous plait Insert l' image <br>";
                }
            ?>
        </div> 
        <input type="submit" value="Modifier" name="modifier" class="form-control rounded-pill form-control-lg col-lg-2">
    </form>
</div>
</div>
   
</section>
<?php 
    include("includes/footer.php");
    ?>

 