<?php
include 'User.php';
$rec = new User();
   $subcategory_id= $_POST['subcategory_id'];  
    $item = array();
 $sql = $rec->getvotesinsubcategories($subcategory_id);
 foreach ($sql as $row) {
 	$item[]=$row;
 }
 echo json_encode($item);
 ?>