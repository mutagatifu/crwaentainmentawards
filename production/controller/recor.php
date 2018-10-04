<?php
include 'User.php';
$rec = new User();
$sql="select * from categories order by id";
$query = $rec->records($sql);
///print_r($query);
$jsonarray  = array();
$jsonitem = array();
while ($row = $query->fetch_object()) {
	$jsonitem ['id']= $row -> id;
	$jsonitem ['categories']= $row -> category_name;
	array_push($jsonarray,$jsonitem);
}
echo json_encode($jsonarray);
$query4=$rec->artinsubcategory();
        print_r($query4);
/*
$result = $rec->getvotes();
while ($rows = $result->fetch_object()) {
	echo "string";
}
*/

?>