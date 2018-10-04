<?php
include 'controller/User.php';
$rec = new User();
    $category_id = $_POST['category_id'];
    $item = array();
 $sql = $rec->getartincategory($category_id);
 foreach ($sql as $row) {
 	$item[]=$row;
 }
 echo json_encode($item);
?>