<?php
require 'config/config.php';

$id= $_POST['hidden_id'];
$price = $_POST['hidden_price'];
$sql="INSERT INTO ligne (id_article,quantite,prix_unit) VALUES('$id' , '1' , '$price')";
if (!mysqli_query($con,$sql)){
    echo '<script language="javascript">';
    echo 'window.history.back();';
    echo '</script>';
}
else{
    echo '<script language="javascript">';
    echo 'window.history.back();';
    echo '</script>';

}
?>