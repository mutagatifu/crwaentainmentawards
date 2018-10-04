<?php
	
    $pageNumbersent = 1;
     //$category_id = $_POST["category_id"];
    $category_id = 1;
    $displayNumber = 10;
    //$pageNumbersent = $_GET["page_number"];
    if ($pageNumbersent >= 0) {
    	include 'User.php';
    $rec = new User();
   
    $pageNumber = $pageNumbersent -1;
$query=$rec->getArtistsByCategory($category_id,$pageNumber,$displayNumber);
        $jsonarray  = array();
$jsonitem = array();
while ($row = $query->fetch_object()) {
    $jsonitem ['artist id']= $row -> id;
    $jsonitem ['nicknames']= $row -> nickname;
    $jsonitem ['addresses']= $row -> address;
    $jsonitem ['emails']= $row -> email;
    $jsonitem ['profile images']= $row -> profile_image;
    array_push($jsonarray,$jsonitem);
}
echo json_encode($jsonarray)."<br/>";
}
else{
	echo "that page unvailable";
}
?>