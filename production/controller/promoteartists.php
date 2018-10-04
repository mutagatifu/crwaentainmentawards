<?php
include 'User.php';
$rec= new User();

if(isset($_POST['updates'])){
$artists_id = $_POST['artist'];
$subcategory_id = $_POST['subcategory_id'];

if(!empty($artists_id)&&$subcategory_id){
for($i=0;$i<sizeof($artists_id);$i++){
	//echo "umuhanzi ufite".$artists_id[$i]."</br>";
	$query = $rec->recordvotes($subcategory_id,$artists_id[$i]);
}
//echo "success!";
header('location:../widgets.php');

}

else{
	?>
	<script type="text/javascript">
		alert("no change was applied");
	</script>
 			<!-- header('location:../widgets.php'); -->

	<?php

	//echo "<script>Failed</script>"
   
}

	
}

else{

	echo "Can't change info";
}

?>