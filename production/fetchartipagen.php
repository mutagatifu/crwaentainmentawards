<?php
include 'controller/User.php';

     $rec = new User();
    $pageNumber=$_POST["page_number"];
    $sql1 = $rec->getartist($pageNumber, 10);
    $push=array();
    while ($row1 = $sql1->fetch_object()) {
        $item['subcategory_id']=$row1->id;
        $item['nickname'] = $row1->nickname;
        $item['first_name'] = $row1->first_name;
        $item['last_name'] = $row1->last_name;
        $item['gender'] = $row1->gender;
        $item['phone'] = $row1->phone;
        $item['address'] = $row1->email;
        $item['category_name'] = $row1->category_name;
        $item['subcategory'] = $row1->subcategory_name;
        $item['registered'] = $row1->datecreated;

        array_push($push, $item);
    }
    echo json_encode($push);
//artist.id as id , artist.nickname as nickname, artist.first_name as first_name, artist.last_name as last_name,artist.profile_image as profile, artist.gender as gender,artist.phone as phone, artist.email as email, category.category_name as category_name,subcategory.subcategory_name,artregistration.time as datecreated,category.category_name as category_name
?>