<?php
require 'config/config.php';

$id= $_POST['hidden_id'];
$price = $_POST['hidden_price'];
$sql="INSERT INTO ligne (id_article,quantite,prix_unit) VALUES('$id' , '1' , '$price')";
if (!mysqli_query($con,$sql)){
    echo '<script language="javascript">';
    echo 'alert(" Error : Not Added ")';
    echo '</script>';
    header("Refresh:0");
}
else{
    echo '<script language="javascript">';
    echo 'alert(" item Added Successfully")';
    echo 'location.reload()';
    echo '</script>';

}
?>