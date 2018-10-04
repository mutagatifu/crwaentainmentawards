<!DOCTYPE html>
<html>
<head>
	<?php
include 'User.php';
    $rec = new User();
echo "<h2>artist info</h2>";
// artists id to edit will be given through a link
$artist_id = 111;
//$_GET['id'];
        $query=$rec->getartistinfo($artist_id);
        $row = $query->fetch_object();
        $artid = $row -> id;
        ?>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<table>
			<tr>
<td>id</td><td><input type="text" value="<?php echo $row -> id;?>"></td>
</tr>
<tr>
<td>nick name</td><td><input type="text" name="nick" value="<?php echo $row -> nickname;?>"></td>
</tr>
<tr>
<td>first name</td><td><input type="text" name="fname" value="<?php echo $row -> first_name;?>"></td>
</tr>
<tr>
<td>last name</td><td><input type="text" name="lname" value="<?php echo $row -> last_name;?>"></td>
</tr>
<tr>
<td>age</td><td><input type="number" name="age" value="<?php echo $row -> age;?>"></td>
</tr>
<tr>
<td>phone</td><td><input type="text" name="fone" value="<?php echo $row -> phone;?>"></td>
</tr>
<tr>
<td>address</td><td><input type="text" name="address" value="<?php echo $row -> address;?>"></td>
</tr>
<tr>
<td>email</td><td><input type="text" name="mail" value="<?php echo $row -> email;?>"></td>
</tr>
<tr>
<td></td><td><input type="submit" name ="submit" value="update"></td>
</tr>
</table>
</form>
<?php
if (isset($_POST['submit'])) {
	$artid = $row -> id;
	$editnic = $_POST['nick'];
	$editfirst = $_POST['fname'];
	$editlast = $_POST['lname'];
	$editage = $_POST['age'];
	$editfone = $_POST['fone'];
	$editaddress = $_POST['address'];
	$editemail = $_POST['mail'];
	$query=$rec->editartistinfo($artid,$editnic,$editfirst,$editlast,$editage,$editfone,$editaddress,$editemail);
	if (!query) {
		echo "wapi kabsa";
	}
	echo "success!!";
	header('location:fetchartistbyid.php');
}
?>
</body>
</html>
