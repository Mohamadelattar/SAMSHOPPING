<?php
require 'config/config.php';
include("includes/header.php");
include("includes/Cart.php");
?>
<style>
    #search_section
{
	background: #CA634E;
    text-align: center;
    padding-top: 2em;
    height: 100%;
    max-width: 100%;
}
    #search_section h2
{
    font-family: Quicksand-VariableFont_wght , sans-serif;
	font-weight:bold;
	color:#fff;
	font-size:4em;
	
}
    </style>
<div  id ="search_section" class="align-content-center flex-wrap" style="text-align:center;">

<?php
if(isset($_POST['search']))
{
    $search = $_POST['search'];
    $result  = mysqli_query($con, "SELECT * FROM `article` WHERE (titre LIKE '$search%')");

    if(mysqli_num_rows ($result)!=0)
    {
        $item = "item_search";
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
        // echo "<h2>Il  aucun produit avec ce nom </h2>";
    }
}
    else
    {
        echo "<h2>Il n'y a  aucun produit avec ce nom </h2>";
    }

}
?>
</div>