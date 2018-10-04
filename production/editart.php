<?php
require ('controller/User.php');
$rec = new User();
 if (isset($_POST['updates'])) {
  //($artid, $editnic, $editfirst, $editlast,$editgender, $editage, $editfone, $editaddress, $editemail)
                                                  $artid=$_POST['id'];
                                                  $editnic=$_POST['nickname'];
                                                  $editfirst=$_POST['first_name'];
                                                  $editlast=$_POST['last_name'];
                                                  $editage=$_POST['age'];
                                                  $editfone=$_POST['phonenumber'];
                                                  $editaddress=$_POST['address'];
                                                  $editemail=$_POST['email'];
                                                  $editgender=$_POST['gender'];



                                                  /*echo "byose ni<h1>".$artid." ".$editnic." ".$editfirst." ".$editlast." ".$editage." ".$editfone." ".$editaddress." ".$editemail."</h1>";*/
                                                  $query = $rec->editartistinfo($artid,$editnic,$editfirst,$editlast,$editgender,$editage,$editfone,$editaddress,$editemail);


                                                    if (!$query) {
                                                     echo "<script>alert('Operation Failed')</script>";
                                                      header("location:widgets.php");
                                                    }
                                                    else{
                                                    	echo "<script>alert('Edited Successfully')</script>";
                                                      header("location:widgets.php");
                                                    }
                                                  }

                                                  
?>