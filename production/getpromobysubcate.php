<?php
include 'controller/User.php';
$rec = new User();

if(isset($_POST["subcategory_id"])){
    $subcategory_id=$_POST["subcategory_id"];
    $item = array();
 $sql = $rec->promotingartistbysubcat($subcategory_id);
foreach ($sql as $row) {
 	$item[]=$row;
 }
 echo json_encode($item);
}
?>