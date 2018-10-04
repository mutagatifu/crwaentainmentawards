<?php
include 'controller/User.php';
$rec = new User();
if(isset($_POST["addArtist"])) {

    $imag = $_FILES["pic"]["name"];
    $imagtmp = $_FILES["pic"]["tmp_name"];
    $target = "uploads/" . basename($imag);

    $nick = $_POST['Artist_Name'];
    $fname = $_POST['name'];
    $lname = $_POST['sname'];
    $age = $_POST['age'];
    $fone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
   $description=$_POST['descript'];
    $subcate = $_POST['subcategory'];
   /* $profile=$_FILES['pic']['tmp_name'];*/
    $sendimage=move_uploaded_file($imagtmp, $target);
    if($sendimage){
        $query = $rec->registerArtist($subcate, $nick, $fname, $lname, $age, $fone, $address, $email,$description,$imag);
        if ($query) {
            $query2 = $rec->getmaxid();
            if ($query2) {
                $row = $query2->fetch_object();
                mysql_connect("localhost", "root", "");
                mysql_select_db("crwaentertainmentaward");
                $id = $row->id;
              
               
                for ($i = 0; $i < sizeof($subcate); $i++) {
                    $sub = $subcate[$i];
                    $query3 = mysql_query("insert into artregistration(artist_id,subcategory_id,time) VALUES ('$id','$sub',now())");
                }
                header('location:widgets.php');
            } else {
                echo "<script>wapi kbsa!!!</script>";
            }
        }

    }
    else{
        echo "failed due to uploads";
    }
}
else{

    echo "Not ADDED";
}
?>
