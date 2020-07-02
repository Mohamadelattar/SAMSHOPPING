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
  background-color: #FFDC00
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
    </head>
    <body style="background:#816fca;">
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 fixed-top leftBar">
                            <a class="navbar-brand text-white d-block mx-auto text-center py-3 underLine" href="#">Panneau de configuration</a>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item courant mt-3">
                                    <a class="nav-link text-white p-2" href=""><i class="fas fa-home fa-lg mr-3"></i>Accueil</a>
                                </li>
                                <li class="nav-item leftBarItem mt-3">
                                    <a class="nav-link text-white p-2" href=""><i class="fas fa-clipboard-list fa-lg mr-3"></i>Commandes</a>
                                </li>
                                <li class="nav-item leftBarItem mt-3">
                                    <a class="nav-link text-white p-2" href=""><i class="fas fa-keyboard mr-3"></i>Produits</a>
                                </li>
                                <li class="nav-item leftBarItem mt-3">
                                    <a class="nav-link text-white p-2" href=""><i class="fas fa-user fa-lg mr-3"></i>Clients</a>
                                </li>
                            </ul>
                        </div>
                        </nav>
                        <div class="col-lg-9 col-md-8 ml-auto" >
                             
                        <div class="card-deck" style="margin: 1em 1em;">
                        
                            <div class="card container" style="padding:3em 3em; border: 2px solid #000;  ">
                            <a href="AjouterProduit.php">
                                <img src="css\images\add.png" class="card-img-top" alt="Ajouter Produit" >
                                <div class="overlay">
                                    <div class="text">Ajouter un produit</div>
                                </div>
                                </a>
                            </div>
                            
                            <div class="card container" style="padding:3em 3em; border: 2px solid #000;">
                            <a href="ChercherProduit.php">
                                <img src="css\images\edit.png" class="card-img-top" alt="Modifier Produit">
                                <div class="overlay">
                                    <div class="text">Modifier un produit</div>
                                </div>
                                </a>
                            </div>
                            <div class="card container" style="padding:3em 3em; border: 2px solid #000;">
                            <a href="RechercheProduit.php">
                                <img src="css\images\delete.png" class="card-img-top" alt="Supprimer Produit">
                                <div class="overlay">
                                    <div class="text">Supprimer un produit</div>
                                </div>
                            </a>
                            </div>
                        </div>
                        <!-- Statistique -->
                        <div class="card-deck">
                            <div class="card container" style="padding:1em 3em;   ">
                                <h3 style="margin-bottom:2em"> Nombre de Produit :
                                    <?php $result = mysqli_query($con,"SELECT * FROM `article`");
                                    $increment = 0;
                                    while( $row =  mysqli_fetch_array($result)) 
                                            { $increment++; }
                                             echo $increment;
                                    ?>
                                </h3>
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