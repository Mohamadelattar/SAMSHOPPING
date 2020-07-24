<?php
require 'config/config.php';
include("includes/header.php");
include("includes/Cart.php");
?>
<section class="container-fluid" id="catalog">
        <h2>Tablette</h2>
        <p><a href="Accessesoire.php">Accessesoire</a>/<a href="Pcportable.php">Pc Portable</a></p>
        <div  class="   align-content-center flex-wrap" id="catalog_items" style="margin-top:2em;">
        <?php
        
        $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Tablette';");
      
        $item = "item_tablette";
        $increment = 1;
        while( $row =  mysqli_fetch_array($result)) 
      {
        $id = $item.$increment;   
        echo "<div class='border border-primary new_item' id='" .$id . "' >" ;
        echo "<a href='#'>";
        echo ' <img  height="auto" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[5])  . '" />';
        echo "<br>"; 
        echo "<div class='titre_item'><p> ".$row[1]."</p>";
        echo "<span>".$row[3]."DH"."</span></div>";
        echo "</a></div>";
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
                <h4></h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                </div>
            </div>
        </div> 
    </section>
<?php 
    include("includes/footer.php");
?>
 

 