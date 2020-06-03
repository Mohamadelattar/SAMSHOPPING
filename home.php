<?php
 
require 'config/config.php';
if(isset($_SESSION['nom']) )
{
    include("includes/headerClient.php");
}
else
{
    include("includes/header.php");
}

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
            <div class="d-flex justify-content-center d-md-inline-flex  d-sm-inline-flex align-content-end align-content-center flex-wrap">
            
                <?php
        
                  $result = mysqli_query($con,"SELECT * FROM `article` ORDER BY id_article DESC LIMIT 8");
                  $row = mysqli_fetch_all($result, MYSQLI_NUM);
                
                  // 1 Item
                
                  echo "<div class='border border-primary  new_item' id='Item1' >";
                  echo "<a href='#'>";
                  echo ' <img  height="200px" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[0][5])  . '" />';
                  echo "<br>"; 
                  echo "<div class='titre_item'><p> ".$row[0][1]."</p>";
                  echo "<span>".$row[0][3]."DH"."</span></div>";
                  echo "</a></div>";

                  // 2 Item

                  echo "<div class='border border-primary new_item' id='Item2'>";
                  echo "<a href='#'>";
                  echo ' <img  height="200px" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[1][5])  . '" />';
                  echo "<br>"; 
                  echo "<div class='titre_item'><p> ".$row[1][1]."</p>";
                  echo "<span>".$row[1][3]."DH"."</span></div>";
                  echo "</a></div>";

                  // 3 Item

                  echo "<div class='border border-primary new_item'  id='Item3'>";
                  echo "<a href='#'>";
                  echo ' <img  height="200px" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[2][5])  . '" />';
                  echo "<br>"; 
                  echo "<div class='titre_item'><p> ".$row[2][1]."</p>";
                  echo "<span>".$row[2][3]."DH"."</span></div>";
                  echo "</a></div>";

                  // 4 Item

                  echo "<div class='border border-primary new_item' id='Item4'>";
                  echo "<a href='#'>";
                  echo ' <img  height="200px" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[3][5])  . '" />';
                  echo "<br>"; 
                  echo "<div class='titre_item'><p> ".$row[3][1]."</p>";
                  echo "<span>".$row[3][3]."DH"."</span></div>";
                  echo "</a></div>";

                  // 5 Item

                  echo "<div class='border border-primary new_item' id='Item5'>";
                  echo "<a href='#'>";
                  echo ' <img  height="200px" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[4][5])  . '" />';
                  echo "<br>"; 
                  echo "<div class='titre_item'><p> ".$row[4][1]."</p>";
                  echo "<span>".$row[4][3]."DH"."</span></div>";
                  echo "</a></div>";

                  // 6 Item

                  echo "<div class='border border-primary new_item' id='Item6'>";
                  echo "<a href='#'>";
                  echo ' <img id="img6" onmouseover	="changeImg()" height="200px" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[5][5])  . '" />';
                  echo "<br>"; 
                  echo "<div class='titre_item'><p> ".$row[5][1]."</p>";
                  echo "<span>".$row[5][3]."DH"."</span></div>";
                  echo "</a></div>";

                  // 7 Item
               
                  echo "<div class='border border-primary new_item' id='Item7'>";
                  echo "<a href='#'>";
                  echo ' <img  height="200px" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[6][5])  . '" />';
                  echo "<br>"; 
                  echo "<div class='titre_item'><p> ".$row[6][1]."</p>";
                  echo "<span>".$row[6][3]."DH"."</span></div>";
                  echo "</a></div>";

                  // 8 Item

                  echo "<div class='border border-primary new_item' id='Item8'>";
                  echo "<a href='#'>";
                  echo ' <img  height="200px" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[7][5])  . '" />';
                  echo "<br>"; 
                  echo "<div class='titre_item'><p> ".$row[7][1]."</p>";
                  echo "<span>".$row[7][3]."DH"."</span></div>";
                  echo "</a></div>";
                
                ?>

         
              
            </div>
        </div>
        <div> <a href="catalog.php" id="button_items">view more</a></div>
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
    include("includes/cart.php");
    include("includes/footer.php");
    ?>