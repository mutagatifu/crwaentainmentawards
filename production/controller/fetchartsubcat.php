<?php
include 'User.php';
    $rec = new User();
        $query4=$rec->artinsubcategory();
        $jsonarray  = array();
        foreach ($query4 as $result) {
        	$jsonarray[]=$result;
        }
echo json_encode($jsonarray,JSON_NUMERIC_CHECK);
?>