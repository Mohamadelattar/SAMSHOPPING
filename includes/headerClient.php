<?php
if(!isset($_SESSION))
{
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
      <link rel="stylesheet" href="css/headerStyle.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/fontawesome.js"></script>
      <script src="js/all.js"></script>
      <script src="js/script.js"></script>
  </head>
</head>
<body>
    <nav class=" navbar navbar-expand-lg sticky-top" >
        <div class="container-fluid">
            <a class="navbar-brand navbar-brand-left visible-xs visible-xm" href="home.php"><img id="logo" src="Sam.png" alt="Home"></a>
            <button class="navbar-toggler ml-auto navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
            <ul class="navbar-nav ml-3">
            <li class="nav-item active">
            <a class ="nav-link" href="#"><span class="mr-1"><i class="fas fa-home"></i></span>Acceuil</a>
            </li>
            <li class="nav-item dropdown">
            <a class ="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-1"><i class="far fa-list-alt"></i></span>Catégories</a>
            <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Smartphone</a>
                <a class="dropdown-item" href="#">Computer</a>
                <a class="dropdown-item" href="#">Tablette</a>
                <a class="dropdown-item" href="#">Accessoires</a>
            </div>
        </li>

            <li class="nav-item ">
            <a class ="nav-link" href="#"><span class="mr-1"><i class="far fa-heart"></i></span>Offres</a>
            </li>
            </ul>
            <div class="search-box mr-2 ml-auto ">
                <input class="search-txt" type="text" name="" value="" placeholder="Chercher sur SAM ...">
                <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
          </div>
    <div class="ml-auto d-flex justify-content-between">
                <div class="profile mr-3 d-flex align-items-center">
                    <div id="profileIconWrap" class="icon_wrap">
                        <img src="user.png" alt="photo de profile">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div id="profileDd" class="profile_dd">
                        <ul class="profile_ul" style="list-style-type: none; padding-left : inherit;">
                          <li class="profile_li ">
                              <a href="#" class="image_name">
                                  <span class="picon">
                                     <img class="image-profile d-flex justify-content-center aign-items-center ml-auto mr-auto" src="user.png" alt="photo de profile">
                                  </span>
                                  <h6 style="font-family:Quicksand-VariableFont_wght,sans-serif; font-size:20px"><?php echo  $_SESSION['nom']."  ".$_SESSION['prenom'];?></h6>
                              </a>
                          </li>
                            <li class="profile_li">
                                <a href="#" class="profile">
                                    <span class="picon">
                                       <i class="fas fa-user" aria-hidden="true"></i>
                                    </span>
                                    profile
                                </a>
                            </li>
                            <li >
                                <a href="#" class="Adress">
                                    <span class="picon">
                                        <i class="fas fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                    Adresse
                                </a>
                            </li>
                            <li >
                                <a href="#" class="setting">
                                    <span class="picon">
                                        <i class="fas fa-cog" aria-hidden="true"></i>
                                    </span>
                                    Paramétres
                                </a>
                            </li>
                            <li >
                                <a href="#" class="logout">
                                    <span class="picon">
                                        <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                                    </span>
                                    Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
               <a class="mr-2" href="#"><i class="fas fa-shopping-bag"></i></a>
    </div>
            </div>
        </div>
    </nav>

</body>
</html>
