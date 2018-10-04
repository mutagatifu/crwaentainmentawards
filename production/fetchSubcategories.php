<?php
include 'controller/User.php';
$rec = new User();
if (isset($_POST["category_id"])) {
    $id = $_POST["category_id"];
    $push = array();
    $item = array();
    $sql1 = $rec->getgroupedsub($id);
    while ($row1 = $sql1->fetch_object()) {
        $item['subcategory_id']=$row1->subcategory_id;
        $item['subcategory_name'] = $row1->subcategory_name;
        $item['art_number'] = $row1->art_number;
        array_push($push, $item);
    }
    echo json_encode($push);
}
?>
