<?php
require 'config/config.php';
include("includes/header.php");
include("includes/Cart.php");
?>
 
 
<section class="container-fluid" id="catalog">
       <p><a href="home.php">Home</a>/<a href="#">About</a></p>
        <br>
        <h2>Sam Shopping</h2>
        <div  style="margin-bottom:2em;">
             
            <div class="d-inline-flex" style="text-align:center;">
                <div class="buttons">
                    <button class="btn btn-danger" onclick="showNew();"id="newButton" autofocus data-toggle="collapse" data-target="#catalog_items">New</button>
                    <button class="btn btn-danger" onclick="showAll();" data-toggle="collapse" data-target="#catalog_all_items">All</button>
                </div>
            </div>
        </div>
        <div  class="collapse  align-content-center flex-wrap" id="catalog_items" style="margin-top:2em;">
        <?php
        
        $result = mysqli_query($con,"SELECT * FROM `article` ORDER BY id_article DESC LIMIT 20");
        $item = "item_new";
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
        <div  style="" class="collapse  align-content-center flex-wrap" id="catalog_all_items" style="margin-top:3em;">
        <?php
        
        $result = mysqli_query($con,"SELECT * FROM `article`");
        $item = "item_all";
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
                    <p> </p>
                    

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4>Easy Return</h4>
                <p> </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4></h4>
                <p> </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                </div>
            </div>
        </div> 
    </section>
<?php 
    include("includes/footer.php");
?>
<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(event) { 
document.getElementById("newButton").click();
 });

function showAll() { 
 document.getElementById("catalog_items").style.display="none";
 document.getElementById("catalog_all_items").style.display="block";
}
function showNew() { 
 document.getElementById("catalog_all_items").style.display="none";
 document.getElementById("catalog_items").style.display="block";
}
</script>

 