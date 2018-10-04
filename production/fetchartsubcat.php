<?php
 include 'controller/User.php';
 $rec=new User();
 $query=$rec->getartinsub();
 //
 $item=array();
 $push=array();

 while ($row=$query->fetch_object()) {
 	$item['artid']=$row->artid;
 	$item['subcat']=$row->subcat;
 	array_push($push, $item);
 }
echo json_encode($push);
?>