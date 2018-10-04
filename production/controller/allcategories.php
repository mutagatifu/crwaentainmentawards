<?php
include 'User.php';
    $rec = new User();
$query4=$rec->getallcategories();
        $jsonarray  = array();
$jsonitem = array();
while ($row = $query4->fetch_object()) {
    $jsonitem ['nbr of artists']= $row -> id;
    $jsonitem ['categories']= $row -> category_name;
    array_push($jsonarray,$jsonitem);
}
echo json_encode($jsonarray)."<br/>";
?>
