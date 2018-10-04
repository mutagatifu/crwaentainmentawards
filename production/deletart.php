<?php
include 'controller/User.php';
$rec = new User();
$artist_id = $_GET['id'];
$query = $rec->deleteartistinartist($artist_id);
if ($query) {
	header('location:widgets.php');
	//echo "someone with id number ".$artist_id." is deleted!";
}
else
{
	echo "ntbikunda!";
}
?>