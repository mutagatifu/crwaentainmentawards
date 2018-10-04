<?php
include('connection.php');
include_once('DbConnection.php');
class User extends DbConnection
{
    public function __construct()
    {
        parent::__construct();
    }
    public function check_login($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $query = $this->connection->query($sql);
        if ($query->num_rows > 0) {
            $row = $query->fetch_array();
            return $row['id'];
        } else {
            return false;
        }
    }
    public function details($sess)
    {
        $query = $this->connection->query("SELECT * FROM user WHERE id = '".$sess."'");
        //$row = $query->fetch_array();
        return $query;
    }
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
    public function records($sql)
    {
        $query = $this->connection->query($sql);
        //$row = $query->fetch_array(); 
        return $query;
    }
    function registerArtist($subcate, $nick, $fname, $lname, $age, $fone, $address, $email,$description ,$imag)
    {
        $query1 = $this->connection->query("insert into artist(nickname,first_name,last_name,age,phone,address,email,description,profile_image) values('$nick','$fname','$lname','$age','$fone','$address','$email','$description','$imag')");
        return $query1;
    }
    function getmaxid()
    {
        $query = $this->connection->query("select max(id) as id from artist");
        return $query;
    }
//group and count artist in subcategories
    function artinsubcategory()
    {
        $query = $this->connection->query("select count(artist_id) as artists,subcategory.subcategory_id from artregistration,subcategory where artregistration.subcategory_id=subcategory.subcategory_id group by artregistration.subcategory_id");
        return $query;
    }
//subcategories in category
    function getgroupedsub()
    {
        $query = $this->connection->query("select count(subcategory_id) subcat,category_name from subcategory,category where subcategory.category_id=category.id group by category_id");
        return $query;
    }
//parametarised
    function getartinsub()
    {
        $query = $this->connection->query("select count(artist_id) artid,subcategory_name from artregistration,subcategory 
        where artregistration.subcategory_id=subcategory.subcategory_id group by subcategory_name");
        return $query;
    }
    function getallcategories()
    {
        $query = $this->connection->query("select * from category");
        return $query;
    }
    function getartistByCategory($category_id, $pageNumber, $displayNumber)
    {
        $firstNumber = (($displayNumber * $pageNumber) - $displayNumber) +1;
        $query = $this->connection->query("select id,nickname,address,email,profile_image from artist where id in (select distinct artist_id from artregistration where subcategory_id in (select subcategory_id from subcategory where category_id='$category_id' limit $firstNumber,$displayNumber))");
        return $query;
    }
    function getartistinfo($artist_id)
    {
        $query = $this->connection->query("select nickname,first_name,last_name,gender,age,phone,address,email,profile_image from artist where id='$artist_id'");
        return $query;
    }
    function editartistinfo($artid, $editnic, $editfirst, $editlast, $editgender,$editage, $editfone, $editaddress, $editemail)
    {
        $query = $this->connection->query("update artist set nickname = '$editnic',first_name = '$editfirst',last_name='$editlast',age = '$editage',phone = '$editfone',address = '$editaddress',email = '$editemail', gender='$editgender' where id='$artid'");
        return $query;
    }
    function getmusicians()
    {
        $query = $this->connection->query("select id,nickname,address,email,profile_image from artist where id in (select distinct artist_id from artregistration where subcategory_id in (select subcategory_id from subcategory where category_id=1))");
        return $query;
    }
    function getdancers()
    {
        $query = $this->connection->query("select id,nickname,address,email,profile_image from artist where id in (select distinct artist_id from artregistration where subcategory_id in (select subcategory_id from subcategory where category_id=2))");
        return $query;
    }
    function getMedians()
    {
        $query = $this->connection->query("select id,nickname,address,email,profile_image from artist where id in (select distinct artist_id from artregistration where subcategory_id in (select subcategory_id from subcategory where category_id=5))");
        return $query;
    }
    function getfashions()
    {
        $query = $this->connection->query("select id,nickname,address,email,profile_image from artist where id in (select distinct artist_id from artregistration where subcategory_id in (select subcategory_id from subcategory where category_id=4))");
        return $query;
    }
//msic artist of the year 2018
    function getartsinsubcat($subcatid)
    {
        $query = $this->connection->query("select id,nickname,address,email,profile_image from artist where id in (select distinct artist_id from artregistration where subcategory_id='$subcatid')");
        return $query;
    }
    function getallartistincate()
    {
        $query = $this->connection->query("select count(artist_id) as number_artists,category_name from artregistration,subcategory,category where artregistration.subcategory_id=subcategory.subcategory_id and subcategory.category_id=category.id group by category.id");
        return $query;
    }
//get all artists by pages
    function getallartistBypages($pageNumber, $displayNumber)
    {
        $firstNumber = (($displayNumber * $pageNumber) - $displayNumber) +1;

        $query = $this->connection->query("select * from artist limit $firstNumber,$displayNumber");
        return $query;
    }
//get all artists with thier subcategories
  function getartist($pageNumber, $displayNumber){
    $firstNumber = (($displayNumber * $pageNumber) - $displayNumber) +1;
    $query = $this->connection->query("select artist.id as id , artist.nickname as nickname, artist.first_name as first_name, artist.last_name as last_name,artist.profile_image as profile, artist.age as age,artist.address as address, artist.gender as gender,artist.phone as phone, artist.email as email, category.category_name as category_name,subcategory.subcategory_name, subcategory.subcategory_id AS subcategory_id,artregistration.time as datecreated,category.category_name as category_name from artist, artregistration,category, subcategory where artist.id=artregistration.artist_id and subcategory.subcategory_id=artregistration.subcategory_id and subcategory.category_id=category.id group by artist.id, subcategory.subcategory_id limit $firstNumber,$displayNumber");
    return $query;
}
//get all artists
    function getallartist($pageNumber, $displayNumber)
    {
        $firstNumber = (($displayNumber * $pageNumber) - $displayNumber) +1;
        $query = $this->connection->query("select artist.id as id , artist.nickname as nickname, artist.first_name as first_name, artist.last_name as last_name,artist.profile_image as profile, artist.gender as gender,artist.phone as phone, artist.email as email, category.category_name as category_name, artregistration.time as datecreated from artist, artregistration,category, subcategory where artist.id=artregistration.artist_id and subcategory.subcategory_id=artregistration.subcategory_id and subcategory.category_id=category.id group by artist.id, category.id limit $firstNumber,$displayNumber");
        return $query;
    }
    //pagenations
    function getArtistsByCategory($category_id, $pageNumber, $displayNumber)
    {
        $firstNumber = $displayNumber * $pageNumber;
        $query = $this->connection->query("select id,nickname,address,email,profile_image from artist where id in (select distinct artist_id from artregistration where subcategory_id in (select subcategory_id from subcategory where category_id='$category_id')) limit $firstNumber,$displayNumber");
        return $query;
    }
    function getArtistBySubcategory($subcategory_id, $pageNumber, $displayNumber)
    {
        $firstNumber = $displayNumber * $pageNumber - 1;
        $query = $this->connection->query("select id,nickname,address,email,profile_image from artist where id in (select distinct artist_id from artregistration where subcategory_id='$subcategory_id' limit '$firstNumber','$displayNumber' )");
        return $query;
    }
    function deleteartistinregistration($artist_id,$subcategory_id)
    {
        $query = $this->connection->query("delete from artregistration where artist_id='$artist_id' and subcategory_id='$subcategory_id'");
        return $query;
    }
    // get all artistis in category
    function getartistsincategory1($category_id,$pageNumber, $displayNumber){
         $firstNumber =(( $displayNumber  * $pageNumber)-$displayNumber );

         $query = $this->connection->query("select artist.id as id , artist.nickname as nickname, artist.first_name as first_name, artist.last_name as last_name,artist.profile_image as profile, artist.gender as gender,artist.phone as phone, artist.email as email, category.category_name as category_name,subcategory.subcategory_name,artregistration.time as datecreated,category.category_name as category_name from artist, artregistration,category, subcategory where artist.id=artregistration.artist_id and subcategory.subcategory_id=artregistration.subcategory_id and subcategory.category_id='$category_id'  limit '$firstNumber','$displayNumber' group by artist.id");

    return $query;
      }

       function getartistsincategory($category_id){

         $query = $this->connection->query("SELECT artist.id AS id, artist.nickname AS nickname, artist.first_name AS first_name, artist.last_name AS last_name, artist.profile_image AS profile_image, artist.gender AS gender, artist.age AS age, artist.phone AS phone, artist.email AS email,artist.address AS address,category.category_name AS category_name,artregistration.time AS datecreated, category.category_name AS category_name FROM artist, artregistration, category, subcategory WHERE artist.id = artregistration.artist_id AND subcategory.subcategory_id = artregistration.subcategory_id AND subcategory.category_id = category.id AND subcategory.category_id ='$category_id' GROUP BY artist.id");
    return $query;
      }
/*    function editartistinfo($artid,$editnic,$editfirst,$editlast,$editage,$editfone,$editaddress,$editemail){
    $query=$this->connection->query("update artist set nickname = '$editnic',first_name = '$editfirst',last_name='$editlast',age = '$editage',phone = '$editfone',address = '$editaddress',email = '$editemail' where id='$artid'");
    return $query;

}*/
    function getgroupedsubInDance()
    {
        $query = $this->connection->query("select count(artist_id) art_number,subcategory_name,subcategory.subcategory_id as id from artregistration,subcategory where artregistration.subcategory_id=subcategory.subcategory_id and subcategory.category_id='2' group by subcategory_name");
        return $query;
    }
    function getgroupedartinsub($category_id)
    {
        $query = $this->connection->query("SELECT COUNT( artist_id ) art_number, subcategory_name, subcategory.subcategory_id AS id FROM artregistration RIGHT JOIN subcategory ON artregistration.subcategory_id = subcategory.subcategory_id INNER JOIN category ON subcategory.category_id = category.id AND subcategory.category_id ='$category_id' GROUP BY subcategory_name");
        return $query;
    }
    function getgroupedsubInMedia()
    {
        $query = $this->connection->query("select count(artist_id) art_number,subcategory_name,subcategory.subcategory_id as id from artregistration,subcategory where artregistration.subcategory_id=subcategory.subcategory_id and subcategory.category_id='5' group by subcategory_name");
        return $query;
    }
     function getgroupedsubInMusic()
    {
        $query = $this->connection->query("select count(artist_id) art_number,subcategory_name,subcategory.subcategory_id as id from artregistration,subcategory where artregistration.subcategory_id=subcategory.subcategory_id and subcategory.category_id='1' group by subcategory_name");
        return $query;
    }
     function getgroupedsubInComedy()
    {
        $query = $this->connection->query("select count(artist_id) art_number,subcategory_name,subcategory.subcategory_id as id from artregistration,subcategory where artregistration.subcategory_id=subcategory.subcategory_id and subcategory.category_id='3' group by subcategory_name");
        return $query;
    }
     function getgroupedsubInFashion()
    {
        $query = $this->connection->query("select count(artist_id) art_number,subcategory_name,subcategory.subcategory_id as id from artregistration,subcategory where artregistration.subcategory_id=subcategory.subcategory_id and subcategory.category_id='4' group by subcategory_name");
        return $query;
    }
    //MFTPNJ123alva.
   /* function getAllVotes($pageNumber,$displayNumber)
    {
        $firstNumber = $displayNumber * $pageNumber - 1;
        $query = $this->connection->query("select count(votes.id) as number_votes,votes.date as dates , votes.id as id, artist.nickname as nickname, artist.first_name as first_name, artist.last_name as last_name,artist.profile_image as profile, artist.gender as gender,subcategory_name  from artist, votes, subcategory where artist.id=votes.artist_id  and subcategory.subcategory_id=votes.subcategory_id group by artist.id, subcategory.subcategory_id limit $firstNumber,$displayNumber");
        return $query;
    }*/
     function getAllVotes()
    {
        $query = $this->connection->query("select count(votes.id) as number_votes,votes.date as dates , votes.id as id, artist.nickname as nickname, artist.first_name as first_name, artist.last_name as last_name,artist.profile_image as profile, artist.gender as gender,subcategory_name  from artist, votes, subcategory where artist.id=votes.artist_id  and subcategory.subcategory_id=votes.subcategory_id group by artist.id, subcategory.subcategory_id ORDER BY subcategory.subcategory_id, number_votes DESC");
        return $query;
    }
    function addNewSubCategory($subcategory_name,$category_id){
        $query = $this->connection->query("insert into subcategory(subcategory_name,category_id) values('$subcategory_name','$category_id') ");
        return $query;
    }
    function editSubCategory($subcategory_id,$subcategory_name){
        $query = $this->connection->query("update subcategory set subcategory_name='$subcategory_name' where subcategory_id='$subcategory_id' ");
        return $query;
    }
    //fetch artists with their votes in their corresponding subcategories and descending order
    function getvotesinsubcategory1($subcategory_id,$pageNumber,$displayNumber){
        $firstNumber = $displayNumber * $pageNumber - 1;
    $query = $this->connection->query("SELECT COUNT( votes.id ) AS number_votes, votes.date AS dates, artist.id AS id, artist.nickname AS nickname, artist.first_name AS first_name, artist.last_name AS last_name, artist.gender AS gender, subcategory_name, category_name, votes.subcategory_id AS subcategory_id FROM artist, votes, subcategory, category WHERE artist.id = votes.artist_id AND subcategory.subcategory_id = votes.subcategory_id AND subcategory.category_id = category.id AND votes.subcategory_id ='$subcategory_id' GROUP BY artist.id, subcategory.subcategory_id ORDER BY subcategory.subcategory_id, number_votes DESC");
    return $query;
}

function getvotesinsubcategory($subcategory_id){
    $query = $this->connection->query("select count(votes.id) as number_votes,votes.date as dates , artist.id as id ,artist.nickname as nickname, artist.first_name as first_name, artist.last_name as last_name,artist.profile_image as profile, artist.gender as gender,subcategory_name from artist, votes, subcategory where artist.id=votes.artist_id and subcategory.subcategory_id=votes.subcategory_id and subcategory.subcategory_id='$subcategory_id' group by artist.id, subcategory.subcategory_id");
    return $query;
}
//artists and thier votes ordered in descending order grouped in their subcategori
function getvotesincategory($category_id){
$query = $this->connection->query("select count(votes.id) as number_votes,votes.date as dates , artist.id as id, artist.nickname as nickname, artist.first_name as first_name,artist.profile_image as profile,artist.last_name as last_name,artist.gender as gender,subcategory_name,category_name  from artist, votes, subcategory, category where artist.id=votes.artist_id  and subcategory.subcategory_id=votes.subcategory_id and subcategory.category_id=category.id and subcategory.category_id='$category_id' group by artist.id, subcategory.subcategory_id order by votes.subcategory_id,number_votes desc");
    return $query;
}
  function getSubcategories($cat_id){

        $query = $this->connection->query("SELECT * FROM subcategory WHERE category_id='$cat_id'");
         return $query;

     }

function recordvotes($subcategory_id,$artist_id){
    $query = $this->connection->query("update artregistration set status=1 where artist_id='$artist_id' and subcategory_id='$subcategory_id'");
    return $query;

}
function deleteartistinartist($artist_id){
    $query = $this->connection->query("delete from artist where id='$artist_id'");
    return $query;
}
function getartinsubcategory($subcategory_id)
    {
        $query = $this->connection->query("select count(artist_id) as artists,subcategory.subcategory_id from artregistration,subcategory where artregistration.subcategory_id=subcategory.subcategory_id and artregistration.subcategory_id='$subcategory_id' group by artregistration.subcategory_id");
        return $query;

    }
//select count(votes.id) as number_votes,votes.date as dates , votes.id as id, artist.nickname as nickname, artist.first_name as first_name,subcategory_name  from artist, votes, subcategory where artist.id=votes.artist_id  and subcategory.subcategory_id=votes.subcategory_id group by artist.id, subcategory.subcategory_id;

//get subcategories

    function getartincategory($category_id)
    {
        $query = $this->connection->query("select count(artist_id) as number_of_artists,subcategory.subcategory_id, subcategory.subcategory_name from artregistration,subcategory,category where artregistration.subcategory_id=subcategory.subcategory_id and subcategory.category_id=category.id and subcategory.category_id='$category_id' group by artregistration.subcategory_id");
        return $query;
    }


    function getvotesinsubcategories($subcategory_id){
    $query = $this->connection->query("select count(votes.id) as number_votes,votes.date as dates , artist.nickname as nickname, artist.first_name as first_name, artist.last_name as last_name,artist.profile_image as profile, artist.gender as gender,subcategory_name from artist, votes, subcategory where artist.id=votes.artist_id and subcategory.subcategory_id=votes.subcategory_id and subcategory.subcategory_id='$subcategory_id' group by artist.id, subcategory.subcategory_id");
    return $query;
}

function promotingartistbysubcat($subcategory_id){
         $query = $this->connection->query("select count(votes.id) as number_votes,votes.date as dates , artist.id as id, artist.nickname as nickname, artist.first_name as first_name,artist.last_name as last_name,artregistration.status as status,votes.subcategory_id as subcategory_id,artist.gender as gender,subcategory_name,category_name  from artist, artregistration,votes, subcategory, category where artist.id=votes.artist_id  and subcategory.subcategory_id=votes.subcategory_id and artregistration.artist_id=votes.artist_id and artregistration.subcategory_id=votes.subcategory_id and artregistration.status=0 and subcategory.category_id=category.id and subcategory.subcategory_id ='$subcategory_id' group by artist.id, subcategory.subcategory_id order by 1 desc");
         return $query;
     }
}
?>