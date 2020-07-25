<?php
require 'config/config.php';
include("includes/header.php");
include("includes/Cart.php");
?>
<section class="container-fluid" id="catalog">
      
        <h2>Pc Portable</h2>
        <p><a href="Smartphone.php">Smartphone</a>/<a href="Tablette.php">Tablette</a></p>
        <div  class="   align-content-center flex-wrap" id="catalog_items" style="margin-top:2em;">
        <?php
        $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Pc portable';");
        $item = "item_pc";
        $increment = 1;
      while( $row =  mysqli_fetch_array($result)) 
      {
        $id = $item.$increment;   
        echo "<form method='POST'style='display : inline;' action='addToCart.php'>";
        echo "<div class='border border-primary new_item' id='" .$id . "' >" ;
        echo "<a href='#'>";
        echo "<div class='img-container'>";
        echo "<input type='hidden' name='hidden_id' value='".$row[0]."'>";
        echo "<input type='hidden' name='hidden_price' value='".$row[3]."'>";
        echo ' <img  height="auto" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[5])  . '" />';
        echo "<button type='submit' class='bag-btn' data-id='1' > <i class='fas fa-shopping-cart'></i> Ajouter au Panier </button> </div>";
        echo "<br>"; 
        echo "<div class='titre_item'><p> ".$row[1]."</p>";
        echo "<span>".$row[3]."DH"."</span></div>";
        echo "</a></div>";
        echo "</form>";
        $increment++;
      }
      ?>
        </div>
        
         
</section>
<!-- Delivrey Section -->
<section class="container-fluid" id="delivrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h4>Free Delivrey</h4>
                    

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4>Easy Return</h4>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4> </h4>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                </div>
            </div>
        </div> 
    </section>
<?php 
    include("includes/footer.php");
?>
 

 