<?php
require 'config/config.php';
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fontawesome.js"></script>
        <script src="js/all.js"></script>
        <style>
.option
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
  transition: 1s ease;
  background-color: #FFDC00
}

.option:hover .overlay {
  opacity: 1;
  transform: rotate(360deg);
}
.text {
  color: #000;
  font-size: 2rem;
  position: absolute;
  top: 50%;
  left: 50%;
  font-family: Quicksand-VariableFont_wght , sans-serif;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}
h2
{
    text-align : center;
    color: #fff;
    font-family: 'FredokaOne-Regular';
    margin-bottom : 1em;
    font-size : 4em;
    
}
  h3
{
    text-align : center;
    color: #fff;
    display : block
    font-family: Quicksand-VariableFont_wght , sans-serif;
    margin-bottom : 1em;
    font-size : 3em;

}
</style>
    </head>
    <body style="background:#262A32; margin: 2em 3em;" >
    <h2>Panel</h2>
        
                   <div class="container" style="background:#816fca; padding : 2em 2em; border : 4px solid #fff; border-radius: 4px;  " >
                   <h3>Gestion de les produits</h3>
                        <div class="card-deck" style="margin: 1em 1em;">
                        
                        
                            <div class="card" id="container1" style="padding:6em 6em; border: 2px solid #000;  ">
                            <a href="AjouterProduit.php">
                                <img src="css\images\add.png" class="card-img-top" alt="Ajouter Produit" >
                                <div class="overlay">
                                    <div class="text">Ajouter un produit</div>
                                </div>
                                </a>
                            </div>
                            
                            <div class="card" id="container2" style="padding:6em 6em; border: 2px solid #000;">
                            <a href="ChercherProduit.php">
                                <img src="css\images\edit.png" class="card-img-top" alt="Modifier Produit">
                                <div class="overlay">
                                    <div class="text">Modifier un produit</div>
                                </div>
                                </a>
                            </div>
                            <div class="card" id="container3" style="padding:6em 6em; border: 2px solid #000;">
                            <a href="RechercheProduit.php">
                                <img src="css\images\delete.png" class="card-img-top" alt="Supprimer Produit">
                                <div class="overlay">
                                    <div class="text">Supprimer un produit</div>
                                </div>
                            </a>
                            </div>
                        </div>
                        <!-- Statistique -->
                        <h3 style="margin-top : 2em;">Statistique de la platforme</h3>
                        <div class="card-deck" style="margin: 5em 1em;">
                            <div class="card container" style="padding:1em 3em;   ">
                                <h4 style="margin-bottom:2em"> Nombre de Produit :
                                    <?php $result = mysqli_query($con,"SELECT * FROM `article`");
                                    $increment = 0;
                                    while( $row =  mysqli_fetch_array($result)) 
                                            { $increment++; }
                                             echo $increment;
                                    ?>
                                </h4>
                                <h5> Smartphone :
                                <?php $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Smartphone';");
                                $increment = 0;
                                while( $row =  mysqli_fetch_array($result)) 
                                { $increment++; }
                                echo $increment;
                                ?>
                                </h5>
                                <h5> Pc Portable :
                                <?php $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Pc portable';");
                                $increment = 0;
                                while( $row =  mysqli_fetch_array($result)) 
                                { $increment++; }
                                echo $increment;
                                ?>
                                </h5>
                                <h5> Tablette :
                                <?php $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Tablette';");
                                $increment = 0;
                                while( $row =  mysqli_fetch_array($result)) 
                                { $increment++; }
                                echo $increment;
                                ?>
                                </h5>
                                <h5> Accessesoire :
                                <?php $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Accessesoire';");
                                $increment = 0;
                                while( $row =  mysqli_fetch_array($result)) 
                                { $increment++; }
                                echo $increment;
                                ?>
                                </h5>
                            </div>
                            <div class="card container" style="padding:1em 3em;">
                                <h3 style="margin-bottom:2em">Produit Vendus</h3>
                            </div>
                            
                            </div>

                         </div>
                        
                    </div>
                </div>
            </div>
        
        


    </body>
</html>