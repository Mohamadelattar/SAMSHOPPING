<?php
require 'config/config.php';
include('includes/form/SupprimerProduit.php');
include("includes/header.php");


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
<section class='container-fluid'>
<h2>Supprimer Produit</h2>


<form action="SupprimerProduit.php" method="POST">
<input type="text" name="id_article" class="col-lg-6 form-control rounded-pill form-control-lg" style="display:none;" value="<?php echo $id_article; ?>">
<input type="submit" value="Supprimer" name="supprimer" class="form-control rounded-pill form-control-lg col-lg-2">
</form>

</section>