<?php
 require 'config/config.php';
?>
<div class="cart-overlay">
<div id="cart" class="cart">
  <h2 style="margin-top : 10px;"> Votre Panier </h2>
  <div class="cart-content">
    <!-- cart-item -->
     <?php 
     if(!empty($_SESSION["ShoppingCart"])){
         $total=0;
         foreach ($_SESSION["ShoppingCart"] as $key => $value) {
     ?>
     <div class="cart-item">
     <img src="data:image/jpg;base64, <?php echo base64_encode($value["item_image"]) ?>" alt="test"> 
     <div> 
         <h4><?php echo $value["item_name"] ?></h4>
         <h5><?php echo $value["item_price"] ?></h5>
         <span class="remove-item">Supprimer</span>
        </div>
    <div>
        <i class="fas fa-chevron-up"></i>
        <p class="item-amount">1</p>
        <i class="fas fa-chevron-down"></i>
    </div>
     </div>

    <!-- end of cart-item -->
  <div class="   cart-footer">
    <h3>Le Montant Total : $ <span class="cart-total"></span></h3>
  <button class="clear-cart banner-btn btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">clear cart</button>
  </div>
</div>
         </div>
         <?php }} ?>
         </div>