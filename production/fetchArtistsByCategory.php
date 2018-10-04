<?php
include 'controller/User.php';
$rec = new User();
if (isset($_POST["category_id"])) {
    $id = $_POST["category_id"];
     $push = array();
    $item = array();
    $sql = $rec->getartistsincategory($id);
    while ($row = $sql->fetch_object()) {
        $item['artist_id'] = $row->id;
        $item['nickname'] = $row->nickname;
        $item['email'] = $row->email;
        $item['gender']=$row->gender;
        $item['age']=$row->age;
        $item['last_name']=$row->last_name;
        $item['first_name']=$row->first_name;
        $item['phone']=$row->phone;
        $item['address']=$row->address;
        $item['profile_image']=$row->profile_image;
        $item['category_name']=$row->category_name;
        $item['datecreated']=$row->datecreated;
        array_push($push, $item);
   }

   echo json_encode($push);
}
 