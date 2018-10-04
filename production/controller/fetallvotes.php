<?php
include 'User.php';
    $rec = new User();
$query = $rec->getAllVote();
$jsonarray=array();
foreach ($query as $result) {
        	$jsonarray[]=$result;
        }
echo json_encode($jsonarray,JSON_NUMERIC_CHECK);
        ?>