<?php
require 'config/config.php';
include("includes/header.php");
?>
 
<section class="container-fluid" id="catalog">
       <p><a href="#">Home</a>/<a href="#">About</a></p>
        <br>
        <h2>Sam Shopping</h2>
        <div class="row">
            <div class="col-xs-12 col-lg-3" style="text-align:left; font-family: Quicksand-VariableFont_wght , sans-serif;" >
                <p>931,423 results in all product</p>
            </div>
            <div class="col-xs-12   col-md-6 col-sm-6" style="text-align:center;">
                <div class="buttons">
                    <button class="btn btn-danger">New</button>
                    <button class="btn btn-danger">Popular</button>
                    <button class="btn btn-danger">All</button>
                    <button class="btn btn-danger">Sales</button>
                </div>
            </div>
            <div class="col-xs-12 col-lg-3 col-md-6 col-sm-6" style="text-align:right;">
                <p>Infos</p>
            </div>
        </div>
        <div class="d-lg-inline-flex d-md-inline-flex  d-sm-inline-flex align-content-end align-content-center flex-wrap" style="margin-top:2em;">
        <?php
        
        $result = mysqli_query($con,"SELECT * FROM `article` ORDER BY id_article DESC LIMIT 20");
      
      while( $row =  mysqli_fetch_array($result)) {  
       echo "<div class='border border-primary' id='new_item'>";
       echo '<img  height="170px"  src="data:image/jpg;base64,' .  base64_encode($row[5])  . '" />';
       echo "<br>"; 
       echo "<p>".$row[1]."</p>";
       echo "<p>".$row[3]."DH"."</p>";
      echo "</div>";
      }
      ?>
        </div>
        <div> <a href="#" id="button_items">view more</a></div>
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
                <h4>Wide choice</h4>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                </div>
            </div>
        </div> 
    </section>
<?php 
    include("includes/footer.php");
?>