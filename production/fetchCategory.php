<?php
session_start();
include("include/connect.php");

include("controller/User.php");
//@make secure data
/*function mySecurity($data){
	$data=htmlspecialchars($data);
	$data=htmlentities($data);

	return $data;
}*/
//return to login if not logged in
/*if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
    header('location:login.php');
}*/
//@check if user click on select box
/*if (!isset($_POST["data"])) {
	header("location:index.php");
	exit();
}else{*/

if(isset($_POST['category_id'])){
	$id=$_POST["category_id"];
	//@before let us decrypt id and prevent sql injection
	//decrypt=$conn->real_escape_string(base64_decode(urldecode($id)));
	$conn=new User();
     //
	$push=array();
	$item=array();
	//@after that let us make query
	$sql=$conn->getSubcategories($id);
	while ($row=$sql->fetch_object()) {
		$item['category_id']=$row->category_id;
		$item['subcategory_id']=$row->subcategory_id;
		$item['subcategory_name']=$row->subcategory_name;
		array_push($push,$item);
	} 
	echo json_encode($push);
} 

else{

	
}


?>