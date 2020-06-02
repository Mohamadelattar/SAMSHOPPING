<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

  


?>

 
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleLogin.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/cart.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fontawesome.js"></script>
        <script src="js/all.js"></script>
    </head>
    <body>
        <div>
        <header class="container-fluid" >
            <div class="row Panel">
                <div class="col-xs-12 col-lg-3 col-sm-4 col-md-4 title"  >
                    <h1><a href="home.php">SAM Shopping</a></h1>
                </div>

                <div class="col-xs-12 col-lg-5 list_header" >

                        <nav  class="navbar"   >
                        <button class="navbar-toggler collapsed"  id="button_nav" type="button" data-toggle="collapse" data-target="#CollapseNavbar "
          aria-expanded="false">
        		        	&#9776;
                        </button>
                <div class="collapse navbar-toggleable-xs  " id="CollapseNavbar">
                            <ul>
                                <li>
                                     <div class="button_header dropdown show">

                                        <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">categories  </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="Smartphone.php">Smartphone</a>
                                        <a class="dropdown-item" href="Pcportable.php">Pc Portable</a>
                                        <a class="dropdown-item" href="Tablette.php">Tablette</a>
                                        <a class="dropdown-item" href="Accessesoire.php">Accessesoire</a>
                                        </div> 
                                    </div>
                                </li>
                                <li>
                                    <div class="button_header">

                                        <a href="catalog.php">catalog</a>
                                     </div>
                                </li>

                                <li>
                                     <div class="button_header">

                                       <a href="#">about</a>
                                    </div>
                                </li>


                            </ul>
                            </div>
                        </nav>

                </div>

                <div class="col-xs-12 col-lg-3 col-sm-10 col-md-10 nav_header">
                        <nav>
                            <ul>
                                <li><i class="fas fa-search"></i></li>
                                <li ><i class="fas fa-shopping-bag"></i></li>
                                <li>
                                <div class="button_header dropdown show">
                                 <a class="btn btn-info dropdown-toggle" role="button" id="dropdownClient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><?php echo  $_SESSION['nom']."  ".$_SESSION['prenom'];?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownClient">
                                 <a class="dropdown-item" href="home.php">Se deconnecter</a>
                                 <a class="dropdown-item" href="home.php">Se deconnecter</a>
                                 </div> 
                                 </div>
                                 </li>
                            </ul>
                        </nav>
                </div>
                
            </div>
           
        </header>

        </div>
        
        <div class="ligne "></div>
</body>
</html>
<?php 

function removeClient() { 
    session_destroy();
 }

?>
