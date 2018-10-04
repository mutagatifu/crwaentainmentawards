    <html>
    <body>
    <form method="post" action="" enctype="multipart/form-data">
    <input type="checkbox" name="subcategory[]" value="1"> Argentina ff <br />
    <input type="checkbox" name="subcategory[]" value="2"> Germany ff<br />
    <input type="checkbox" name="subcategory[]" value="3"> Brazil ff<br />
    <input type="checkbox" name="subcategory[]" value="4"> France ff<br />
    <input type="checkbox" name="subcategory[]" value="5"> Tanzania ff<br />
    <input type="checkbox" name="subcategory[]" value="6"> uganda ff<br />
    <input type="checkbox" name="subcategory[]" value="7"> Russia ff<br />
    <input type="checkbox" name="subcategory[]" value="8"> Croatia ff<br />
    <input type="checkbox" name="subcategory[]" value="9"> Croatia 9ff<br />
    <input type="checkbox" name="subcategory[]" value="10"> Croatia 10<br />
    <input type="checkbox" name="subcategory[]" value="11"> Croatia 11<br />
    <input type="checkbox" name="subcategory[]" value="12"> Croatia 12<br />
    <input type="checkbox" name="subcategory[]" value="13"> Croatia 13<br />
    <input type="checkbox" name="subcategory[]" value="14"> Croatia 14<br />
    <input type="file" name="profile"><br/>
    <input type="radio" name="cate_id" value="1"> Music<input type="radio" name="cate_id" value="2">dance <input type="radio" name="cate_id" value="3"> Comedy<input type="radio" name="cate_id" value="4"> fashion <input type="radio" name="cate_id" value="5"> Media<br/>
    <input type="submit" name="submit" value="submit">
    </form>
    </body>
    </html>
    <?php
    require ('controller/User.php');
    $rec = new User();
    if(isset($_POST['submit'])) 
    {   
        $imag=$_FILES["profile"]["name"];
        $imagtmp=$_FILES["profile"]["tmp_name"];
        $target= "uploads/".basename($imag);
        $nick="alivichi";
        //$_POST['nickname'];
        $fname="ishimwe";
        //$_POST['nickname'];
        $lname="olivier";
        //$_POST['nickname'];
        $age = 30;
        //$_POST['nickname'];
        $fone= "0786091893";
        //$_POST['nickname'];
        $address="huye";
        //$_POST['nickname'];
        $email="oliver@gmail.com";
        //$_POST['nickname'];
        $profile_image = $_FILES['profile']['name'];
        //$_POST['nickname'];
        $subcate=$_POST['subcategory'];
        $profile=$_FILES['profile']['tmp_name'];
        $sendimage=move_uploaded_file($imagtmp, $target);
if($sendimage){
        $query= $rec->registerArtist($subcate,$nick,$fname,$lname,$age,$fone,$address,$email,$profile_image);       
        if ($query) {
            $query2=$rec->getmaxid();
        if($query2){
            $row = $query2->fetch_object();
            mysql_connect("localhost","root","");
            mysql_select_db("crwaentertainmentaward");
            $id=$row->id;
           for ($i=0; $i < sizeof($subcate); $i++) { 
            $sub=$subcate[$i];
               $query3=mysql_query("insert into artregistration(artist_id,subcategory_id,time) VALUES ('$id','$sub',NOW())");
           }
           echo "byemeye";
        }
        else{
        echo "wapi kbsa!!!".mysql_error();
    }
        }
    }
    else{
        echo "failed due to image issue";
    }
}
        ?>
