<?php
 require 'config/config.php';
?>
<div class="cart-overlay">
<div id="cart" class="cart">
  <h2 style="margin-top : 10px;"> Votre Panier </h2>
  <div class="cart-content">
    <!-- cart-item -->
     <?php 
     $total=0;
      $result = mysqli_query($con,"SELECT * FROM `ligne`;");
        while( $row =  mysqli_fetch_array($result))
      {
        //echo $row;
        $sql = mysqli_query($con,"SELECT * FROM article WHERE id_article=$row[1] ");
        if (!$sql) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
      }
        while ($col = mysqli_fetch_array($sql) ) {
          $total+=$col[3];
        echo "<div id='clients-edit-wrapper' class='cart-item '>";
        echo ' <img  src="data:image/jpg;base64,' .  base64_encode($col[5])  . '" />';
        
         echo "
         <div> 
         <h4> $col[1]</h4>
         <h5> $col[3]</h5>
         <span class='remove-item'><a style='text-decoration:none;' href='#' class='close-div'>Supprimer</a></span>
        </div>
   <div>
        <i class='fas fa-chevron-up'></i>
        <h4 class='item-amount'>1</h4>
        <i class='fas fa-chevron-down'></i>
    </div>
     </div>
         ";

        }

      }
   
     ?>
     
    <!-- end of cart-item -->
  <div class="cart-footer">
    <h3>Le Montant Total : $ <span class="cart-total"><?php echo "$total"?></span></h3>
    <button class="clear-cart banner-btn btn mt-3 btn-custom btn-block text-uppercase rounded-pill btn-lg">Vider Le Panier</button>
  <button class="clear-cart banner-btn btn mt-3 btn-custom btn-block text-uppercase rounded-pill btn-lg" onclick="window.location.href='checkout.php'">Payer Votre Commande</button>
  </div>
</div>
         </div>

         </div>