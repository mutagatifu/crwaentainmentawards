<?php
include 'User.php';
    $rec = new User();
    $subcatid = $_POST['subcategory_id'];
    //$subcatid=2;
    $query=$rec->getartsinsubcat($subcatid);
        $jsonarray  = array();
$jsonitem = array();
while ($row = $query->fetch_object()) {
    $jsonitem ['artist id']= $row -> id;
    $jsonitem ['nicknames']= $row -> nickname;
    $jsonitem ['addresses']= $row -> address;
    $jsonitem ['emails']= $row -> email;
    $jsonitem ['profile images']= $row -> profile_image;
    array_push($jsonarray,$jsonitem);
}
echo json_encode($jsonarray)."<br/>";
?>