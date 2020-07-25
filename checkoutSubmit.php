<?php
require 'config/config.php';
$sql="UPDATE ligne SET paid=1 WHERE paid=0;";
if ($con->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo ' window.location.href="home.php";';
    echo '</script>';
  } else {
    echo '<script language="javascript">';
    echo 'alert(" Erreur d\'enregistrement de votre commande");';
    echo 'window.history.back();';
    echo '</script>';
  }
?>
