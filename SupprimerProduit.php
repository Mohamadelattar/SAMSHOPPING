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
    $imageProduit = $row['imageProduit'];
}
?>
<style>
    body{
        background:#F53F85;
    }
</style>
<section class='container'>

<form action="SupprimerProduit.php" method="POST">
<div class="card" style="width:30%; margin: 2em auto;" >
  <img class="card-img-top"   alt="Card image cap" src="data:image/jpeg;base64,<?php echo base64_encode( $imageProduit ); ?>" />
  <div class="card-body">
    <h5 class="card-title"><?php echo $titre; ?></h5>
    <p class="card-text"><?php echo $prix; ?></p>
  </div>
</div>
<input type="submit" value="Supprimer" name="supprimer" class="form-control rounded-pill form-control-lg " style="width:30%; margin: 2em auto;" >
<input type="text" name="id_article" class="col-lg-6 form-control rounded-pill form-control-lg" style="display:none;" value="<?php echo $id_article; ?>">

</form>

</section>