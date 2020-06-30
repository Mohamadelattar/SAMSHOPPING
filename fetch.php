<?php

//fetch.php;

if(isset($_GET["term"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=webproject", "root", "");

 $query = "
 SELECT * FROM `article` 
 WHERE`titre` LIKE '%".$_GET["term"]."%' 
 ORDER BY `id_article` ASC
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $total_row = $statement->rowCount();

 $output = array();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $temp_array = array();
   $temp_array['value'] = $row['titre'];
   $temp_array['label'] =  $temp_array['label'] = '<img width="70" src="data:image/jpg;base64,' .  base64_encode($row[5])  . '" />&nbsp;&nbsp;&nbsp;'.$row['titre'].'';
   $output[] = $temp_array;
  }
 }
 else
 {
  $output['value'] = '';
  $output['label'] = 'No Record Found';
 }

 echo json_encode($output);
}

?>