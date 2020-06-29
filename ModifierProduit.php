<?php
require 'config/config.php';
include("includes/header.php");
?>
<section class="container-fluid" id="ajouter">
<select>
<?php
        
        $result = mysqli_query($con,"SELECT * FROM `article`");
        $item = "item_all";
        $increment = 1;
        while( $row =  mysqli_fetch_array($result)) 
        { 
            $id = $item.$increment;
            echo'<option>'; 
            echo "<p> ".$row[1]."</p>";
            echo"</option>";
            $increment++;
        }
      ?>
</select>
</section>

<?php 
    include("includes/footer.php");
    ?>
