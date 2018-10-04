<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 14/09/2018
 * Time: 17:05
 */

include 'controller/User.php';

$rec = new User();

if (isset($_POST["category_id"])) {

    $id = $_POST["category_id"];
    /*$numberItem = '3';
    $page = '1';*/

    $push = array();
    $item = array();
    //@after that let us make query
    $sql = $rec->getArtistBySubcategory($id);

    while ($row = $sql->fetch_object()) {
        $item['nickname'] = $row->nickname;
        $item['emails'] = $row->email;

        array_push($push, $item);

        echo json_encode($push);

    }
}