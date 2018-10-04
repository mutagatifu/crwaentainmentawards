<?php
	include 'User.php';
    $rec = new User();
    echo "<h2>artists in subcategories</h2>";
        $query = $rec->getartinsub();
$jsonsubcanbr=array();
$jsoncateg=array();
while ($row = $query->fetch_object()) {
    //print_r($row);
    $jsonsubcanbr['number_of_artist']= $row->artid;
    $jsonsubcanbr['subcateory']= $row->subcategory_name;
    array_push($jsoncateg, $jsonsubcanbr);
}
echo json_encode($jsoncateg);

echo "<h2><br/>artists in categories<br/></h2>";
//pagginating

$query1 = $rec->getallartistincate();
$jsonsubcanbr1=array();
$jsoncateg1=array();
while ($row1 = $query1->fetch_object()) {
    //print_r($row);
    $jsonsubcanbr1['number_of_artist']= $row1->number_artists;
    $jsonsubcanbr1['category']= $row1->category_name;
    array_push($jsoncateg1, $jsonsubcanbr1);
}
echo json_encode($jsoncateg1);
echo "<h2><br/>all artists<br/></h2>";
//pagginating
$pageNumber= 2;
//$_GET['page_no'];
$displayNumber = 5;
//$_GET['object_nbr'];
$query = $rec->getallartist($pageNumber,$displayNumber);
$jsonsubcanbr1=array();
$jsoncateg1=array();
while ($row = $query->fetch_object()) {
    //print_r($row);
    $jsonsubcanbr1['nickname']= $row->nickname;
    $jsonsubcanbr1['email']= $row->email;
    $jsonsubcanbr1['phone_number']= $row->phone;
    $jsonsubcanbr1['ages']= $row->age;
    $jsonsubcanbr1['address']= $row->address;
    array_push($jsoncateg1, $jsonsubcanbr1);
}
echo json_encode($jsoncateg1);
    ?>