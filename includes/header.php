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
        <!-- <link rel="stylesheet" href="css/payement.css"> -->
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function nameInput(){
                const svgname= document.getElementById("svgname");
                const svgnameback= document.getElementById("svgnameback");
                const name= document.getElementById("name");
                document.querySelector('.creditcard').classList.remove('flipped');
                if (name.value == "" || name.value==null)
        {
            svgname.innerHTML = 'John Doe';
            svgnameback.innerHTML = 'John Doe';
        }else{
            svgname.innerHTML = name.value;
            svgnameback.innerHTML = this.value;
        }
    }
    function cardnumberInput(){
            const svgnumber= document.getElementById("svgnumber");
            const cardnumber=document.getElementById("cardnumber");
            const svgnameback=document.getElementById("svgnameback");
            var cardnumber_mask = new IMask(cardnumber, {
        mask: [
            {
                mask: '0000 000000 00000',
                regex: '^3[47]\\d{0,13}',
                cardtype: 'american express'
            },
            {
                mask: '0000 0000 0000 0000',
                regex: '^(?:6011|65\\d{0,2}|64[4-9]\\d?)\\d{0,12}',
                cardtype: 'discover'
            },
            {
                mask: '0000 000000 0000',
                regex: '^3(?:0([0-5]|9)|[689]\\d?)\\d{0,11}',
                cardtype: 'diners'
            },
            {
                mask: '0000 0000 0000 0000',
                regex: '^(5[1-5]\\d{0,2}|22[2-9]\\d{0,1}|2[3-7]\\d{0,2})\\d{0,12}',
                cardtype: 'mastercard'
            },
            // {
            //     mask: '0000-0000-0000-0000',
            //     regex: '^(5019|4175|4571)\\d{0,12}',
            //     cardtype: 'dankort'
            // },
            // {
            //     mask: '0000-0000-0000-0000',
            //     regex: '^63[7-9]\\d{0,13}',
            //     cardtype: 'instapayment'
            // },
            {
                mask: '0000 000000 00000',
                regex: '^(?:2131|1800)\\d{0,11}',
                cardtype: 'jcb15'
            },
            {
                mask: '0000 0000 0000 0000',
                regex: '^(?:35\\d{0,2})\\d{0,12}',
                cardtype: 'jcb'
            },
            {
                mask: '0000 0000 0000 0000',
                regex: '^(?:5[0678]\\d{0,2}|6304|67\\d{0,2})\\d{0,12}',
                cardtype: 'maestro'
            },
            // {
            //     mask: '0000-0000-0000-0000',
            //     regex: '^220[0-4]\\d{0,12}',
            //     cardtype: 'mir'
            // },
            {
                mask: '0000 0000 0000 0000',
                regex: '^4\\d{0,15}',
                cardtype: 'visa'
            },
            {
                mask: '0000 0000 0000 0000',
                regex: '^62\\d{0,14}',
                cardtype: 'unionpay'
            },
            {
                mask: '0000 0000 0000 0000',
                cardtype: 'Unknown'
            }
        ],
        dispatch: function (appended, dynamicMasked) {
            var number = (dynamicMasked.value + appended).replace(/\D/g, '');
    
            for (var i = 0; i < dynamicMasked.compiledMasks.length; i++) {
                let re = new RegExp(dynamicMasked.compiledMasks[i].regex);
                if (number.match(re) != null) {
                    return dynamicMasked.compiledMasks[i];
                }
            }
        }
    });
    document.querySelector('.creditcard').classList.remove('flipped');
            if (cardnumber_mask.value== 0 ||cardnumber_mask.value== null || cardnumber_mask.value== ""){
                svgnumber.innerHTML = '0123 0000 8910 1112';
                svgnameback.innerHTML ='0123 0000 8910 1112';
            }else{
               svgnumber.innerHTML = cardnumber_mask.value;
               svgnameback.innerHTML =cardnumber_mask.value;
            }
                }
                // working
                function experationInput(){
            const svgexpire= document.getElementById("svgexpire");
            const expirationdate=document.getElementById("expirationdate");
            var expirationdate_mask = new IMask(expirationdate, {
        mask: 'MM{/}YY',
        groups: {
            YY: new IMask.MaskedPattern.Group.Range([0, 99]),
            MM: new IMask.MaskedPattern.Group.Range([1, 12]),
        }
    });
           document.querySelector('.creditcard').classList.remove('flipped');
            if (expirationdate_mask.value== 0 ||expirationdate_mask.value== null || expirationdate_mask.value== ""){
                svgexpire.innerHTML = '01/23';
            }else{
               svgexpire.innerHTML = expirationdate_mask.value;
            }
                }
                function cvvInput(){
                    const creditcard=document.querySelector('.creditcard');
                    const securitycode = document.getElementById("securitycode");
                    const svgsecurity= document.getElementById("svgsecurity");
                    var securitycode_mask = new IMask(securitycode, {
        mask: '0000',
    });
                    creditcard.classList.add('flipped');
                    if (securitycode_mask.value.length == 0) {
                         svgsecurity.innerHTML = '985';
        } else {
            svgsecurity.innerHTML = securitycode_mask.value;
        }
                }
                function validationForm(){
                    var a = document.forms["myForm"]["1"].value;
                    var b = document.forms["myForm"]["2"].value;
                    var c = document.forms["myForm"]["3"].value;
                    var d = document.forms["myForm"]["4"].value;
                    var e = document.forms["myForm"]["5"].value;
                    var f = document.forms["myForm"]["6"].value;
                    var g = document.forms["myForm"]["7"].value;
                    var h = document.forms["myForm"]["8"].value;
                    var  i= document.forms["myForm"]["9"].value;
                    var j = document.forms["myForm"]["10"].value;
                    var k = document.forms["myForm"]["11"].value;
                    if (a=="" || b=="" ||c=="" ||d=="" ||e=="" ||f=="" ||g=="" ||h=="" ||i=="" ||j=="" ||k=="" ){
                        swal("Attention !", "Vous Devez Remplir tous les champs!", "error");
                    }else{
                        swal({
            title: "Félicitation!",
            text: "Votre commande est Payé Avec Succés!",
            icon: "success"
        }).then( function() {
            window.location = "home.php";
        });
                    }
   
    }
   
               
        </script>
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
             if($_SESSION['nom'] == 'Admin@admin.com' )
            {
               echo "  <a href='Panel.php' class='image_name'>
                         <span class='picon'></span>
                     <h4 style='font-family:Quicksand-VariableFont_wght,sans-serif; font-size:20px'>Panel</h4>
                      </a> ";
                                 echo "<a href='includes/accesses/logout.php' class='logout'>
                                 <span class='picon'>
                                         <i class='fas fa-sign-out-alt' aria-hidden='true'></i>
                                 </span>
                                 Log out
                         </a>";
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
