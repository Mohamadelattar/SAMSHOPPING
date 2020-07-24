<?php
require 'config/config.php';
 include("includes/header.php");
?>
<style>

@font-face {
	font-family: 'FredokaOne-Regular';
	src: url('../fonts/FredokaOne-Regular.ttf');
}

@font-face {
	font-family: 'Quicksand-VariableFont_wght';
	src: url('../fonts/Quicksand-VariableFont_wght.ttf');
}

@font-face {
	font-family: 'Sniglet-ExtraBold';
	src: url('../fonts/Sniglet-ExtraBold.ttf');
}

@font-face {
	font-family: 'Sniglet-Regular';
	src: url('../fonts/Sniglet-Regular.ttf');
}



body {
  font-family :Quicksand-VariableFont_wght,sans-serif;
  font-size: 17px;
  padding: 8px;
}
h2{
	font-family: Sniglet-ExtraBold,sans-serif;
text-align:center;
margin-top: 16px;
margin-bottom : 20px;
color: #6622CC;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -10px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #fff;
  padding: 3px 18px 13px 18px;
  border-radius: 3px;
  box-shadow: 0 5px 15px -1px rgba(0,0,0,.16)!important;
}
.input_info {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 40px;
  outline: none;
}

label {
  margin-bottom: 10px;
  display: block;
  margin-left : 20px ;
}
svg{
  margin-right : 9px ;
}
.icon-container {

  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #6622CC;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  outline: none;
  border-radius: 50px;
}

.btn:hover {
  background-color: #62DD4C;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.ccicon {
    height: 38px;
    position: absolute;
    right: 6px;
    top: calc(50% - 17px);
    width: 60px;
}
/* CREDIT CARD IMAGE STYLING */
.preload * {
    -webkit-transition: none !important;
    -moz-transition: none !important;
    -ms-transition: none !important;
    -o-transition: none !important;
   
}
.container1 {
    width: 100%;
    max-width: 400px;
    max-height: 251px;
    height: 54vw;
    padding: 20px;
}
#ccsingle {
    position: absolute;
    right: 15px;
    top: 20px;
}

#ccsingle svg {
    width: 100px;
    max-height: 60px;
}

.creditcard svg#cardfront,
.creditcard svg#cardback {
    width: 100%;
    -webkit-box-shadow: 1px 5px 6px 0px black;
    box-shadow: 1px 5px 6px 0px black;
    border-radius: 22px;
}
 

/* CHANGEABLE CARD ELEMENTS */
.creditcard .lightcolor,
.creditcard .darkcolor {
    -webkit-transition: fill .5s;
    transition: fill .5s;
}

.creditcard .lightblue {
    fill: #03A9F4;
}

.creditcard .lightbluedark {
    fill: #0288D1;
}

.creditcard .red {
    fill: #ef5350;
}

.creditcard .reddark {
    fill: #d32f2f;
}

.creditcard .purple {
    fill: #ab47bc;
}

.creditcard .purpledark {
    fill: #7b1fa2;
}

.creditcard .cyan {
    fill: #26c6da;
}

.creditcard .cyandark {
    fill: #0097a7;
}

.creditcard .green {
    fill: #66bb6a;
}

.creditcard .greendark {
    fill: #388e3c;
}

.creditcard .lime {
    fill: #d4e157;
}

.creditcard .limedark {
    fill: #afb42b;
}

.creditcard .yellow {
    fill: #ffeb3b;
}

.creditcard .yellowdark {
    fill: #f9a825;
}

.creditcard .orange {
    fill: #ff9800;
}

.creditcard .orangedark {
    fill: #ef6c00;
}

.creditcard .grey {
    fill: #bdbdbd;
}

.creditcard .greydark {
    fill: #616161;
}

/* FRONT OF CARD */
#svgname {
    text-transform: uppercase;
}

#cardfront .st2 {
    fill: #FFFFFF;
}

#cardfront .st3 {
    font-family: 'Source Code Pro', monospace;
    font-weight: 600;
}

#cardfront .st4 {
    font-size: 54.7817px;
}

#cardfront .st5 {
    font-family: 'Source Code Pro', monospace;
    font-weight: 400;
}

#cardfront .st6 {
    font-size: 33.1112px;
}

#cardfront .st7 {
    opacity: 0.6;
    fill: #FFFFFF;
}

#cardfront .st8 {
    font-size: 24px;
}

#cardfront .st9 {
    font-size: 36.5498px;
}

#cardfront .st10 {
    font-family: 'Source Code Pro', monospace;
    font-weight: 300;
}

#cardfront .st11 {
    font-size: 16.1716px;
}

#cardfront .st12 {
    fill: #4C4C4C;
}

/* BACK OF CARD */
#cardback .st0 {
    fill: none;
    stroke: #0F0F0F;
    stroke-miterlimit: 10;
}

#cardback .st2 {
    fill: #111111;
}

#cardback .st3 {
    fill: #F2F2F2;
}

#cardback .st4 {
    fill: #D8D2DB;
}

#cardback .st5 {
    fill: #C4C4C4;
}

#cardback .st6 {
    font-family: 'Source Code Pro', monospace;
    font-weight: 400;
}

#cardback .st7 {
    font-size: 27px;
}

#cardback .st8 {
    opacity: 0.6;
}

#cardback .st9 {
    fill: #FFFFFF;
}

#cardback .st10 {
    font-size: 24px;
}

#cardback .st11 {
    fill: #EAEAEA;
}

#cardback .st12 {
    font-family: 'Rock Salt', cursive;
}

#cardback .st13 {
    font-size: 37.769px;
}

/* FLIP ANIMATION */
.container1 {
    perspective: 1000px;
}

.creditcard {
    width: 100%;
    max-width: 400px;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transition: -webkit-transform 0.6s;
    -webkit-transition: -webkit-transform 0.6s;
    transition: transform 0.6s;
    transition: transform 0.6s, -webkit-transform 0.6s;
    cursor: pointer;
}

.creditcard .front,
.creditcard .back {
    position: absolute;
    width: 100%;
    max-width: 400px;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-font-smoothing: antialiased;
    color: #47525d;
}

.creditcard .back {
    -webkit-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.creditcard.flipped {
    -webkit-transform: rotateY(180deg);
    transform: rotateY(180deg);
}


</style>
<h2 >Page de Paiement</h2>
<div class="row">
  <div class="col-75">
    <div class="container shadow">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Adresse De Livraison</h3>
            <label for="name"><i class="fa fa-user"></i>Nom</label>
            <input type="text"class="input_info"  id="fname" name="firstname" placeholder="John">
             <label for="prenom"><i class="fa fa-user"></i>Prenom</label>
            <input type="text"class="input_info"  id="fname" name="firstname" placeholder="M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text"class="input_info"  id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fas fa-address-card"></i> Addresse</label>
            <input type="text"class="input_info"  id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fas fa-map-marker-alt"></i> Ville</label>
            <input type="text" class="input_info" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state"><i class="fas fa-building"></i>Province</label>
                <input type="text" class="input_info"  id="state" name="state" placeholder="New York">
              </div>
              <div class="col-50">
                <label for="zip"><i class="fas fa-home"></i>Code Postale</label>
                <input type="text" class="input_info" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Paiement</h3>
            <div class="container1 preload">
        <div class="creditcard">
            <div class="front">
                <div id="ccsingle"></div>
                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <g id="CardBackground">
                            <g id="Page-1_1_">
                                <g id="amex_1_">
                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                </g>
                            </g>
                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                        </g>
                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">JOHN DOE</text>
                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
                        <g>
                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                        </g>
                        <g id="cchip">
                            <g>
                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                            </g>
                            <g>
                                <g>
                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                </g>
                                <g>
                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="Back">
                    </g>
                </svg>
            </div>
            <div class="back">
                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                    </g>
                    <g id="Back">
                        <g id="Page-1_2_">
                            <g id="amex_2_">
                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                            </g>
                        </g>
                        <rect y="61.6" class="st2" width="750" height="78" />
                        <g>
                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                        </g>
                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                        <g class="st8">
                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
                        </g>
                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">John Doe</text>
                    </g>
                </svg>
            </div>
        </div>
    </div>
            <label for="name"><i class="fab fa-cc-visa"></i>Nom sur La carte</label>
            <input type="text" class="input_info" id="name" name="cardname"  maxlength="20"  placeholder="John More Doe">
            <label for="ccnum"><i class="fab fa-cc-visa"></i>Numero de la carte bancaire</label>
            <input type="text" class="input_info" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444">
            <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">

            </svg>
            <div class="row">
              <div class="col-50">
                <label for="expyear"><i class="fas fa-calendar-alt"></i>Expiration (mm/yy)</label>
                <input type="text" class="input_info" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv"><i class="fas fa-lock"></i>CVV</label>
                <input type="text" class="input_info" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Valider et Payer" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">

        <?php 
    $total=0;
    $num=0;
    $sqql=mysqli_query($con,"SELECT * FROM `ligne`;");
    while ($cal=mysqli_fetch_array($sqql)) {
        $num++;
    }
    $result = mysqli_query($con,"SELECT * FROM `ligne`;");
    echo "<h4>Cart <span class='price' style='color:black'><i class='fa fa-shopping-cart'></i> <b>$num</b></span></h4>";
      while( $row =  mysqli_fetch_array($result))
    {
    
      $sql = mysqli_query($con,"SELECT * FROM article WHERE id_article=$row[1] ");
      if (!$sql) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
      while ($col = mysqli_fetch_array($sql) ) {
        $total+=$col[3];
      echo " <div class='d-flex justify-content-between'><h6>$col[1]</h6> <span class='price'>$col[3]</span></div>";
 
      }

    }
    echo "<hr>";
    echo "<p>Total <span class='price' style='color:black'><b>$total</b></span></p>";

         ?>
      
     
      
    </div>
  </div>
</div>
<script src="js/Payement.js"></script>
<?php
 include("includes/footer.php");
?>
