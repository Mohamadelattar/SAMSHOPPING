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

include("includes/Cart.php");
?>
 
<section class="container-fluid" id="catalog">
       <p><a href="home.php">Home</a>/<a href="#">About</a></p>
        <br>
        <h2>Sam Shopping</h2>
        <div class="row" style="margin-bottom:2em;">
            <div class="col-xs-12 col-lg-3" style="text-align:left; font-family: Quicksand-VariableFont_wght , sans-serif;" >
                <p>931,423 results in all product</p>
            </div>
            <div class="col-xs-12   col-md-6 col-sm-6" style="text-align:center;">
                <div class="buttons">
                    <button class="btn btn-danger" onclick="showNew();"id="newButton" autofocus data-toggle="collapse" data-target="#catalog_items">New</button>
                    <button class="btn btn-danger">Popular</button>
                    <button class="btn btn-danger" onclick="showAll();" data-toggle="collapse" data-target="#catalog_all_items">All</button>
                    <button class="btn btn-danger">Sales</button>
                </div>
            </div>
            <div class="col-xs-12 col-lg-3 col-md-6 col-sm-6" style="text-align:right;">
                <p>Infos</p>
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
        <div  style="" class="collapse  align-content-center flex-wrap" id="catalog_all_items" style="margin-top:3em;">
        <?php
        
        $result = mysqli_query($con,"SELECT * FROM `article`");
        $item = "item_all";
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
<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(event) { 
document.getElementById("newButton").click();
 });

function showAll() { 
 //document.getElementById("id1").style.display="none";
 //document.getElementById("id2").style.display="none";
 document.getElementById("catalog_items").style.display="none";
 document.getElementById("catalog_all_items").style.display="block";
}
function showNew() { 
 //document.getElementById("id1").style.display="none";
 //document.getElementById("id2").style.display="none";
 document.getElementById("catalog_all_items").style.display="none";
 document.getElementById("catalog_items").style.display="block";
}
</script>

 