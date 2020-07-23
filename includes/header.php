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
        <link rel="stylesheet" href="css/headerStyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fontawesome.js"></script>
        <script src="js/all.js"></script>
        <script src="js/script.js"></script>
        <style media="screen">
        #catalog #catalog_items .img-container {
          position: relative;
          overflow: hidden;
        }
        #catalog #catalog_items .img-container .bag-btn {
            position: absolute;
            right: 0;
           top: 80%;
            font-family: Quicksand-VariableFont_wght,sans-serif;
            text-transform: initial;
            padding: 1px 12px;
            letter-spacing: .7px;
            transition: all 400ms linear;
            transform: translateX(101%);
            cursor: pointer;
            border: 0;
            outline: none;
        }
        #catalog_items .img-container .bag-btn:hover{
          color : FF5500;
        }
          #catalog #catalog_items .img-container:hover .bag-btn{
            transform: translateX(0);
          }
          #catalog #catalog_items .img-container img{
    display: block;
    width: 100%;
    min-height: 12rem;
    transition: all 300ms linear;
}
#catalog #catalog_items .img-container:hover img {
  opacity: 0.5;
}
        </style>
    </head>
   <body>
    <nav class=" navbar navbar-expand-lg sticky-top" >
        <div class="container-fluid">
            <a class="navbar-brand navbar-brand-left visible-xs visible-xm" href="home.php"><img id="logo" src="css/images/Sam.png" alt="Home"></a>
            <button class="navbar-toggler ml-auto navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
            <ul class="navbar-nav ml-3">
            <li class="nav-item active">
            <a class ="nav-link" href="home.php"><span class="mr-1"><i class="fas fa-home"></i></span>Acceuil</a>
            </li>
            <li class="nav-item dropdown">
            <a class ="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-1"><i class="far fa-list-alt"></i></span>Catégories</a>
            <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Smartphone.php">Smartphone</a>
                <a class="dropdown-item" href="Pcportable.php">Computer</a>
                <a class="dropdown-item" href="Tablette.php">Tablette</a>
                <a class="dropdown-item" href="Accessesoire.php">Accessoires</a>
            </div>
        </li>
            <li class="nav-item ">
            <a class ="nav-link" href="catalog.php"><span class="mr-1"><i class="far fa-heart"></i></span>Offres</a>
            </li>
            </ul>
            <form action="recherche.php" method="POST">
            <div class="search-box mr-2 ml-auto ">
            <input class="search-txt" type="text" name="search" value="" placeholder="Chercher sur SAM ...">
                <a class="search-btn" type="submit" ><i class="fas fa-search"></i></a>
          </div>
</form>
    <div class="ml-auto d-flex justify-content-between align-items-center">
       <?php
        if(isset($_SESSION['nom'])  )
        {
             if($_SESSION['nom']== "Admin")
            {
               echo "     <div class='profile mr-3 d-flex align-items-center'>
                                         <div id='profileIconWrap' class='icon_wrap'>
                                                 <img  src='css/images/user.png' alt='photo de profile'>
                                                 <i  class='fas fa-chevron-down'></i>
                                         </div>
                                         <div id='profileDd' class='profile_dd'>
                                                 <ul class='profile_ul' style='list-style-type: none; padding-left : inherit; min-width:200px;'>
                                                     <li class='profile_li '>
                                                             <a href='Panel.php' class='image_name'>
                                                                     <span class='picon'>
                                                                            
                                                                     </span>
                                                                     <h4 style='font-family:Quicksand-VariableFont_wght,sans-serif; font-size:20px'>Panel</h4>
                                                             </a>
                                                     </li>                                                          
                                                         <li >
                                                                 <a href='includes/accesses/logout.php' class='logout'>
                                                                         <span class='picon'>
                                                                                 <i class='fas fa-sign-out-alt' aria-hidden='true'></i>
                                                                         </span>
                                                                         Log out
                                                                 </a>
                                                         </li>
                                                 </ul>
                                         </div>
                                 </div>";
            }
            else
            {
                echo "     <div class='profile mr-3 d-flex align-items-center'>
									 <div id='profileIconWrap' class='icon_wrap'>
											 <img  src='css/images/user.png' alt='photo de profile'>
											 <i  class='fas fa-chevron-down'></i>
									 </div>
									 <div id='profileDd' class='profile_dd'>
											 <ul class='profile_ul' style='list-style-type: none; padding-left : inherit;'>
												 <li class='profile_li '>
														 <a href='' class='image_name'>
																 <span class='picon'>
																		
																 </span>
																 <h6 style='font-family:Quicksand-VariableFont_wght,sans-serif; font-size:20px'>".$_SESSION['nom']." ".$_SESSION['prenom']."</h6>
														 </a>
												 </li>
	 
 
															 <a href='includes/accesses/logout.php' class='logout'>
																	 <span class='picon'>
																			 <i class='fas fa-sign-out-alt' aria-hidden='true'></i>
																	 </span>
																	 Log out
															 </a>
													 </li>
											 </ul>
									 </div>
                             </div>
                             ";
                             echo "<a id='cart-info' class='mr-2' style='cursor: pointer;'><i class='fas fa-shopping-bag'></i></a>";
             }
        }
        else
        {
            echo "<a  class='mr-2' href='ConnexionClient.php'><i class='far fa-user'></i></a>";
        }
       ?>
      

    </div>
            </div>
        </div>
    </nav>
    <script src="js/cart.js"></script>
</body>

</html>
