<?php
require 'config/config.php';
include("includes/header.php");

?>

    <!-- Background Section -->
    <section class="container-fluid" id="home_center">

        <div>
            <h2>Sam Shopping</h2>
        </div>
    
    </section>
    <!-- Items Section -->
    <section class="container-fluid" id="items">
        <div class="container" id="popular_items">
            <h3>Popular Items</h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">1</div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">2</div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">3</div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">4</div>

            </div>
        </div>

        <div class="container" id="new_items">
            <h3>New Items</h3>
            <div class="row">
            
                <?php
        
                  $result = mysqli_query($con,"SELECT * FROM `article` ORDER BY id_article DESC LIMIT 3");
                
                while( $row =  mysqli_fetch_array($result)) {  
                 echo "<div class='col-lg-3 col-md-6 col-sm-6 col-xs-12' id='new_item'>";
                 echo '<img  height="170px" src="data:image/jpg;base64,' .  base64_encode($row[5])  . '" />';
                 echo "<br>"; 
                 echo "<p>".$row[1]."</p>";
                 echo "<br>"; 
                 echo "<p>".$row[3]."DH"."</p>";
                echo "</div>";
                }
                ?>
             
              
            </div>
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