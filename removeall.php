<?php
require 'config/config.php';
$sql="DELETE FROM ligne ;";
if ($con->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert(" Vous Avez Vidé votre Panier avec Succés ");';
    echo 'window.history.back();';
    echo '</script>';
  } else {
    echo '<script language="javascript">';
    echo 'alert(" Erreur de Suppression");';
    echo 'window.history.back();';
    echo '</script>';
  }
  
?> 