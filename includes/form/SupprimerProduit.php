<?php
if(isset($_POST['supprimer']))
{
$id_article = $_POST["id_article"];
  mysqli_query($con, "DELETE FROM `article` WHERE `id_article` = '$id_article'");
  header("Location: Panel.php");

}

?>