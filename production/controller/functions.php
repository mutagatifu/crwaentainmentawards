<?php
include(include/connection.php);
//Get all artists by category 
function get_artistsByCategoryId($cat_id){
	$query=mysql_query("select  * from artists where category_id ='".$cat_id."'");
	$result=mysql_fetch_assoc($query);
	return $result;
}
function get_artistsByCategoryIdAndSubCategoryId($cat_id,$subCat_id){
	$query=mysql_query("select * from artists where category_id='".$cat_id."' and subcategory_id='".$subCat_id."'");
	$result=mysql_fetch_assoc($query);
	return $result;
}
function getAllArtists(){
	$query=mysql_query("select * from artists");
	$result=mysql_fetch_assoc($query);
	return $result;
}
function getAllArtitsByCategoryId($cat_id){
    $query=mysql_query("select subcategory_name, count(artists.sub_category_id) as subcategory_id from subcategory, artists where category_id='".$cat_id."' and subcategory.id=artists.subcategory_id");
	$result=mysql_fetch_array($query);	
	return $result;
}
function editSubcategory($cat_id,$subcategory_name){
	$query=mysql_query("update subcategory set subcategory_name='".$subcategory_name."' where category_id='".$cat_id."'");
		return $query;
}
 function addNewArtist($nickname,$first_name,$last_name,$ages,$phone,$address,$email,$profile){
 $query=mysql_query("insert into artists(nickname,first_name,last_name,age,phone,address, email,profile) values('".$nickname."','".$first_name."','".$last_name."','".$ages."','".$phone."','".$address."','".$email."','".$profile."')");
  $result=mysql_fetch_assoc($query);
 }
//registrations of artists
function registerartist($nick,$fname,$lname.$age,$fone,$address,$email,$profile_image){
	$artidget=mysql_query("select max(id) id from artist");
	$idret=mysql_fetch_assoc($artidget);
	$artid=$idret['id'] + 1;
	$subcate=$_POST['subcategories'];
        for($i=0;$i<sizeof($subcate);$i++){  
        $insert=mysql_query("INSERT INTO artregistration(id,artist_id,subcategory_id) VALUES ('','$artid','$subcate[$i]')");
        }
        mysql_query("insert into artist(id,nickname,first_name,last_name,age,phone,address,email,profile_image) values('$artid','$nick','$fname','$lname','$age','$fone','$address','$email','$profile_image')");
        return $insert;
}

 function getSubcategory($cat_id){
 	$query=mysql_query("select * from subcategory where category_id='".$cat_id."'");
	$result=mysql_fetch_assoc($query);
	return $result;
 }

 function getAllCategories(){
 	$query=mysql_query($conn,"select * from categories");

 	if($query){

 		while($row=mysql_fetch_assoc($query)){


 		}
 	}
 }
function getvotes()
{ 
	//to be quoted and analysed
$query=mysql_query("select count(votes.id),artist_id,nickname,subcategory_name,category_name from votes,artists,subcategories,categories where artists.id=votes.artist_id and votes.sub_category_id=subcategories.id and subcategories.category_id=categories.id group by votes.sub_category_id,artist_id");
	$result=mysql_fetch_assoc($query);
	return $result;
	
}
function getartistbysubcateg()
{
	$query=mysql_query("select count(artists.id) as arts,subcategory_name from artists,subcategories where artists.sub_category_id=subcategories.id group by artists.sub_category_id");
	$result=mysql_fetch_assoc($query);
	return $result;
	//select count(artregistration.artist_id) as artnbr, subcategory_name from artregistration,subcategory where artregistration.subcategory_id=subcategory.subcategory_id;
}
function chooseTopArtists($cat_id, $subCat_id,array()){

	$query=mysql_query("")
}
function promoteArtists(){
	$query = mysql_query("")
}
 //select distinct artist_id,nickname from votes,artists,subcategories,categories where artists.id=votes.artist_id and votes.sub_category_id=subcategories.id and subcategories.category_id=categories.id group by votes.sub_category_id,artist_id;


 /*$ids = join("','",$galleries);   
$sql = "SELECT * FROM galleries WHERE id IN ('$ids')";*/
//update artists set status = 1 where id in (select artist_id from votes,artists,subcategories,categories where artists.id=votes.artist_id and votes.sub_category_id=subcategories.id and subcategories.category_id=categories.id group by votes.sub_category_id,artist_id order by count(votes.id) desc limit 5);
function registerartist($subcat,$nick,$fname,$lname.$age,$fone,$address,$email,$profile_image){
    $query1=$this->connection->query("insert into artist(nickname,first_name,last_name,age,phone,address,email,profile_image) values('$nick','$fname','$lname','$age','$fone','$address','$email','$profile_image')");
	if($query1){
		$query2=$this->connection->query("select max(id) as id from artist");
		if($query2){
			$row=$query2->mysql_fetch_assoc();
			$id=$row['id'];
			for($i=0; $i<sizeof($subcat); i++){
				$query3=$this->connection->query('insert into artregistration(id,artist_id,subcategory_id,time,status) VALUES ('','$id','$subcat[$i]',NOW(),0)');
			}
		}
	}

}


?>