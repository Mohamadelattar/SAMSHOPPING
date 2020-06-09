<?php
require 'config/config.php';
 
 include("includes/header.php");
 
 include("includes/Cart.php");
?>

    <!-- Background Section -->
    <section class="container-fluid" id="home_center" > 
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="css\images\compete-with-amazon.jpg" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="css\images\compete-with-amazon.jpg" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="css\images\compete-with-amazon.jpg" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
        $item = "Item";
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
    include("includes/footer.php");
    ?>
