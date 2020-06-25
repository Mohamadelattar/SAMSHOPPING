<?php
require 'config/config.php';
 
 include("includes/header.php");
 
 include("includes/Cart.php");
?>
<style>
.container
{
  position: relative;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  max-width:100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #F5FFFA;
}

.container:hover .overlay {
  opacity: 1;
}
.text {
  color: #000;
  font-size: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  font-family: Quicksand-VariableFont_wght , sans-serif;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
    <!-- Background Section -->
     
    <div id="carouselExampleCaptions" class="carousel slide "  data-ride="carousel" >
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
 
<section id="home_background">
    <!-- Items Section -->
    <section class="container-fluid" id="items">
         
            <h3 class="mb-3">Collections</h3>
            <div class="d-flex justify-content-center d-md-inline-flex  d-sm-inline-flex align-content-end align-content-center flex-wrap">
                <div class=" col-md-6    ">
                  <div class="container" >
                    <a href="Smartphone.php" class="">
                    <img src="css\images\smartphone.jpg" alt=""  height="auto"style="max-height:300px; max-width:500px" width="100%" class="img-thumbnail img-fluid mb-4">
                    <div class="overlay">
                       <div class="text">Smartphone</div>
                      </div>
                    </a>
                 </div>
                </div>
                <div class=" col-md-6  ">
                  <div class="container" >
                   <a href="Pcportable.php" class="">
                   <img src="css\images\laptobs.jpg" alt="" height="auto" style="max-height:300px; max-width:500px" width="100%" class="img-thumbnail img-fluid mb-4"> 
                   <div class="overlay">
                       <div class="text">Pc Portable</div>
                      </div> 
                  </a>
                  </div>
                </div>
                <div class="  col-md-6   ">
                  <div class="container" >
                    <a href="Accessesoire.php" class="">
                    <img src="css\images\accessoires.jpg" alt="" height="auto" style="max-height:300px; max-width:500px" width="100%" class="img-thumbnail img-fluid mb-4">
                    <div class="overlay">
                       <div class="text">Accessesoire</div>
                      </div>  
                  </a>
                  </div>
              </div>
              <div class=" col-md-6   ">
                  <div class="container" >
                    <a href="Tablette.php" class="">
                    <img src="css\images\tablette.jpg" alt=""  height="auto" style="max-height:300px; max-width:500px" width="100%" class="img-thumbnail img-fluid mb-4  ">
                    <div class="overlay">
                       <div class="text">Tablette</div>
                      </div>  
                  </a>
                  </div>
              </div>
            </div>
         

        <div class="container mt-5" id="new_items">
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
      </section>
    <?php
    include("includes/footer.php");
    ?>
