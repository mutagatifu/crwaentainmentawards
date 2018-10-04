<?php
include 'controller/User.php';
$rec = new User();

if(isset($_POST["category_id"])){
    $category_id=$_POST["category_id"];
    $item = array();
 $sql = $rec->getvotesincategory($category_id);
 foreach ($sql as $row) {
 	$item[]=$row;
 }
 echo json_encode($item);

}
?>