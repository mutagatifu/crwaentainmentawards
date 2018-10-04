    <html>
    <body>
    <form method="post" action="">
    <input type="checkbox" name="subcategory[]" value="1"> Argentina ff <br />
    <input type="checkbox" name="subcategory[]" value="2"> Germany ff<br />
    <input type="checkbox" name="subcategory[]" value="3"> Brazil ff<br />
    <input type="checkbox" name="subcategory[]" value="4"> France ff<br />
    <input type="checkbox" name="subcategory[]" value="5"> Tanzania ff<br />
    <input type="checkbox" name="subcategory[]" value="6"> uganda ff<br />
    <input type="checkbox" name="subcategory[]" value="7"> Russia ff<br />
    <input type="checkbox" name="subcategory[]" value="8"> Croatia ff<br />
    <input type="radio" name="cate_id" value="1"> Music<input type="radio" name="cate_id" value="2">dance <input type="radio" name="cate_id" value="3"> Comedy<input type="radio" name="cate_id" value="4"> fashion <input type="radio" name="cate_id" value="5"> Media<br/>
    <input type="submit" name="submit" value="submit">
    </form>
    </body>
    </html>
    <?php
    include 'User.php';
    $rec = new User();
    if(isset($_POST['submit'])) 
    {   
        $imag=$_FILES["image"]["name"];
        $imagtmp=$_FILES["image"]["tmp_name"];
        $target= "uploads/".basename($imag);

        $nick=$_POST['nickname'];
        $fname=$_POST['nickname'];
        $lname=$_POST['nickname'];
        $age = $_POST['nickname'];
        $fone= $_POST['nickname'];
        $address=$_POST['nickname'];
        $email=$_POST['nickname'];
        $profile_image = $_POST['nickname'];
        $category=$_POST['cate_id'];
        $subcate=$_POST['subcategory'];
        //$profile=$_FILES['profile']['tmp_name'];
        //$sendimage=move_uploaded_file($imagtmp, $target);
//if(){
        $query= $rec->registerArtist($subcate,$nick,$fname,$lname,$age,$fone,$address,$email,$profile_image);       
        if ($query) {
            $query2=$rec->getmaxid();
        if($query2){
            $row = $query2->fetch_object();
            mysql_connect("localhost","root","");
            mysql_select_db("crwaentertainmentaward");
            $id=$row->id;
            $categor=$category;
            echo $categor;
           for ($i=0; $i < sizeof($subcate); $i++) { 
            $sub=$subcate[$i];
               $query3=mysql_query("insert into artregistration(artist_id,cat_id,subcategory_id,time) VALUES ($id','$categor','$sub',NOW())");
           }
        }
        else{
        echo "wapi kbsa!!!".mysql_error();
    }
        }
    //}

echo "<h2>artists in subcategories</h2>";
        $query4=$rec->artinsubcategory();
        $jsonarray  = array();
$jsonitem = array();
while ($row = $query4->fetch_object()) {
    $jsonitem ['nbr of artists']= $row -> artists;
    $jsonitem ['']= $row -> subcategory_name;
    array_push($jsonarray,$jsonitem);
}
echo json_encode($jsonarray)."<br/>";
echo "<h2>subcategories in categories<br/></h2>";
//subcategories
$query5 = $rec->getgroupedsub();
$jsonsubcanbr=array();
$jsoncateg=array();
while ($row2 = $query5->fetch_object()) {
    //print_r($row2);
    $jsonsubcanbr['subcategories']= $row2->subcat;
    $jsonsubcanbr['cateory']= $row2->category_name;
    array_push($jsoncateg, $jsonsubcanbr);
}

echo json_encode($jsoncateg);
}
        ?>
