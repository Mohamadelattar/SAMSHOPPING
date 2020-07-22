<?php
require 'config/config.php';
 ?>
<div class="cart-overlay">
<div id="cart" class="cart">
  <h2 style="margin-top : 10px;"> Votre Panier </h2>
  <div class="cart-content">
    <!-- cart-item -->
    <?php 
      $result = mysqli_query($con,"SELECT * FROM `ligne`;");
        while( $row =  mysqli_fetch_array($result))
      {
        $sql = mysqli_query($con,"SELECT * FROM 'article' WHERE 'id_article'='$row[1]';");
        echo "$row[1]";
        while ($col = mysqli_fetch_array($sql) ) {
          // echo "$col[1]";
  //       echo "<div class='cart-item'>";
  //       echo "<img src='data:image/jpg;base64, base64_encode($col[5]) ' alt='image Produit'>";
  //       echo "
  //       <div> 
  //       <h4> $col[1]</h4>
  //       <h5> $col[3]</h5>
  //       <span class='remove-item'>Supprimer</span>
  //      </div>
  //  <div>
  //      <i class='fas fa-chevron-up'></i>
  //      <p class='item-amount'>1</p>
  //      <i class='fas fa-chevron-down'></i>
  //  </div>
  //   </div>
  //       ";

        }

      }
     
   
     ?>
    <!-- end of cart-item -->
  </div>
  <div class="   cart-footer">
    <h3>Le Montant Total : $ <span class="cart-total"></span></h3>
  <button class="clear-cart banner-btn btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">clear cart</button>
  </div>
</div>
</div>
