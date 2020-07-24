<?php
require 'config/config.php';
$id= $_POST['hidden_id'];
$sql="DELETE FROM ligne WHERE id_article=$id ;";
if ($con->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert(" Vous Avez Supprimé l\'article avec Succés ");';
    echo 'window.history.back();';
    echo '</script>';
  } else {
    echo '<script language="javascript">';
    echo 'alert(" Erreur de Suppression");';
    echo 'window.history.back();';
    echo '</script>';
  }
  
?> 