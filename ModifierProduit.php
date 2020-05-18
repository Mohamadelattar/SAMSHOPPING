<?php
require 'config/config.php';
include("includes/header.php");
?>
<section class="container-fluid" id="ajouter">
<p><a href="#">Home</a>/<a href="#">Contact</a></p>
         
        <h2>Modifier un produit</h2>
<div class="container" id="ajouterProduit" >
    <div class="row">
    <form action=""  class="col-lg-12" enctype="multipart/form-data">
        <div class="ajoutElement"  >
        <label for="title" class="col-lg-6 " >Titre : </label>
        <input type="text" name="title" placeholder="Titre de le produit" class="col-lg-6">
         
         
        </div>
        <div class="ajoutElement">
        <label for="categorie"   class="col-lg-6">Categorie : </label>
        <select  name="categorie" class="col-lg-6">
            <option value="smartphone">Smartphone</option>
            <option value="pc">Pc Portable</option>
            <option value="tablette">Tablette</option>
            <option value="accessesoire">Accessesoire</option>
        </select>
     
        </div>
        <div class="ajoutElement">
        <label for="prix" class="col-lg-6">Prix : </label>
        <input type="text" name="prix" placeholder="Prix de le produit" class="col-lg-6">
         
         
        </div>
        <div class="ajoutElement">
        <label for="description" class="col-lg-6" >Description :</label><br>
        <textarea name="description" id="" cols="" rows="10%" class="col-lg-12" ></textarea>
         
        </div> 
        <label for="imageProduit" class="col-lg-6">Telecharger L'image du produit :</label>
        <input type="file"  name="imageProduit" class="col-lg-6 " id="buttUpload">
         
        </div> 
        <input type="submit" value="Modifier" name="modifier">
    </form>
</div>
</div>
   
</section>
<?php 
    include("includes/footer.php");
    ?>