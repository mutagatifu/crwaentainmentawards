<?php
include 'controller/User.php';
$rec = new User();
    //$subcategory_id = 14;
    $subcategory_id =$_GET[''];
    //$pageNumber = 1;
    $pageNumber =$_GET['page_number'];
    $sql1 = $rec->getvotesinsubcategory($subcategory_id,$pageNumber,10);
    $push=array();
    while ($row1 = $sql1->fetch_object()) {
        $item['subcategory_id']=$row1->id;
        $item['nickname'] = $row1->nickname;
        $item['first_name'] = $row1->first_name;
        $item['last_name'] = $row1->last_name;
        $item['gender'] = $row1->gender;
        $item['subcategory'] = $row1->subcategory_name;
       $item['votes'] = $row1->number_votes;
        array_push($push, $item);
    }
    echo json_encode($push);
?>