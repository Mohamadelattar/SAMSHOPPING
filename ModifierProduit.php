<?php
require 'config/config.php';
include('includes/form/ModifierProduit.php');
include("includes/header.php");

?>
<section class="container-fluid" id="ajouter">
<p><a href="#">Home</a>/<a href="#">Contact</a></p>
         
        <h2>Modifier un produit</h2>
<?php
if(isset($_POST['titre']))
{
    $search = strip_tags($_POST['titre']);
    $item_data_query = mysqli_query($con, "SELECT * FROM `article` WHERE `titre`= '$search'");
    $row = mysqli_fetch_array($item_data_query);
    $id_article = $row['id_article'];
	$titre = $row['titre'];
	$design = $row['design'];
    $prix = $row['prix'];
    $categorie = $row['categorie'];
}
?>
<div class="container" id="ajouterProduit" >
    <div class="row">
    <form action="ModifierProduit.php" method="POST" class="col-lg-12" enctype="multipart/form-data">
        <div class="ajoutElement"  >
        <label for="title" class="col-lg-6 " >Titre : </label>
        <input type="text" name="title" class="col-lg-6 form-control rounded-pill form-control-lg" value="<?php echo $titre; ?>">
        <br>
        </div>
        <div class="ajoutElement">
        <label for="categorie"   class="col-lg-6">Categorie : </label>
        <select  name="categorie" class="col-lg-6 form-control rounded-pill form-control-lg">
            <option value=""><?php echo $design ; ?></option>
            <option value="smartphone">Smartphone</option>
            <option value="Pc portable">Pc Portable</option>
            <option value="tablette">Tablette</option>
            <option value="accessesoire">Accessesoire</option>
        </select>
        <br>
        </div>
        <div class="ajoutElement">
        <label for="prix" class="col-lg-6">Prix : </label>
        <input type="text" name="prix" class="col-lg-6 form-control rounded-pill form-control-lg" value="<?php echo $prix; ?>">
        <input type="text" name="id_article" class="col-lg-6 form-control rounded-pill form-control-lg" style="display:none;" value="<?php echo $id_article; ?>">
        <br>
        </div>
        <div class="ajoutElement">
        <label for="description" class="col-lg-6" >Description :</label><br>
        <textarea name="description" id="" cols="" rows="10%" class="col-lg-12 form-control   form-control-lg" ><?php echo $categorie; ?></textarea>
        <br>
        </div>  
        <input type="submit" value="Modifier" name="modifier" class="form-control rounded-pill form-control-lg col-lg-2">
    </form>
</div>
</div>
   
</section>
<?php 
    include("includes/footer.php");
    ?>

 