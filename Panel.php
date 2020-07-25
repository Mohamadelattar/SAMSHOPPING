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

.text {
  color: #fff;
  font-size: 1.5em;
  text-align :center;
  font-family: Quicksand-VariableFont_wght , sans-serif;
  
}
a:hover
{
    text-decoration : none;
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
                        <div class="card" style="width: 18rem; background:transparent; padding : 2em 2em;">
                            <a href="AjouterProduit.php">
                                <img class="card-img-top" src="css\images\add.png" style="margin:1em 0.3em" alt="Card image cap">
                                <div class="card-body">
                                <p class="card-text text">Ajouter un produit</p>
                                </div>
                            </a>
                        </div>

                        <div class="card" style="width: 18rem; background:transparent; padding : 2em 2em;">
                            <a href="ChercherProduit.php">
                                <img class="card-img-top" src="css\images\edit.png" style="margin:1em 0.3em" alt="Card image cap">
                                <div class="card-body">
                                <p class="card-text text">Modifier un produit</p>
                                </div>
                            </a>
                        </div>

                        <div class="card" style="width: 18rem; background:transparent; padding : 2em 2em;">
                            <a href="RechercheProduit.php">
                                <img class="card-img-top" src="css\images\delete.png" style="margin:1em 0.3em" alt="Card image cap">
                                <div class="card-body" >
                                <p class="card-text text">Supprimer un produit</p>
                                </div>
                            </a>
                        </div>
                        </div>
                        <!-- Statistique -->
                        <h3 style="margin-top : 1em;">Statistique de la platforme</h3>
                        <div class="card-deck" style="margin: 3em 1em;">
                        <div class="card container" style="padding:1em 3em;   ">
                        <table class="table">
                        <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Nombre de Produit</th>
                        <th scope="col">
                            <?php $result = mysqli_query($con,"SELECT * FROM `article`");
                            $increment = 0;
                            while( $row =  mysqli_fetch_array($result)) 
                            { $increment++; }
                            echo $increment;
                            ?>
                        </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>Smartphone</td>
                            <td>
                            <?php $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Smartphone';");
                            $increment = 0;
                            while( $row =  mysqli_fetch_array($result)) 
                            { $increment++; }
                            echo $increment;
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Pc Portable</td>
                            <td>
                            <?php $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Pc portable';");
                            $increment = 0;
                            while( $row =  mysqli_fetch_array($result)) 
                            { $increment++; }
                            echo $increment;
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Tablette</td>
                            <td>
                            <?php $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Tablette';");
                                $increment = 0;
                                while( $row =  mysqli_fetch_array($result)) 
                                { $increment++; }
                                echo $increment;
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Accessesoire</td>
                            <td>
                            <?php $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Accessesoire';");
                                $increment = 0;
                                while( $row =  mysqli_fetch_array($result)) 
                                { $increment++; }
                                echo $increment;
                                ?>
                            </td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        </div>

                       
                        <button type="button" class="btn btn-primary btn-lg btn-block" ><a href="home.php" style="color : #fff;">Visiter le site</a></button>                                
    </body>
</html>