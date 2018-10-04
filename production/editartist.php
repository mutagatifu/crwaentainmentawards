
<?php
include ('include/header.php');
?>
<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 13/09/2018
 * Time: 11:15
 */

//require ('controller/User.php');
?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        
                        <ul class="nav navbar-right panel_toolbox">
                            <ul class="nav navbar-right panel_toolbox">
                                 
                            </ul>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- start project list -->
                   
            
                            <?php
                            $rec = new User();
                            $artist_id = $_GET['id'];
                            /*echo "<h1>". $artist_id."</h1>";*/
                            $query=$rec->getartistinfo($artist_id);
                            $i=0;
                            if($query) {
                              /*echo "<p>". $artist_id."</p>";*/
                              $sexx="";
                                while ($row = $query->fetch_object()) {
                                  $sex=$row->gender;
                                  if ($sex=="female") {
                                    $sexx= "male";
                                  }
                                  else{
                                    $sexx= "female";
                                  }
                               ?>
                    <div class="row">
                       
                            <div class="x_panel">
                                <div class="x_content">
                                    <form class="form-horizontal form-label-left" action="editart.php" method="post" novalidate>
                                    
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="hidden" id="name" name="id"  required="required" value="<?php echo $row->id;?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group" id="nickname">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Artist Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="name" name="nickname"  required="required" value="<?php echo $row->nickname;?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group" id="fname">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" id="fname">Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="name" name="last_name"   required="required" value="<?php echo $row->last_name ;?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group" id="lName">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number" id="lName">Surname <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="name" name="first_name" value="<?php echo $row->first_name ;?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group" id="gender">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website" >Gender <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <select class="form-control" name="gender">
                                                        <option value="<?php echo $row->gender;?>"> <?php echo $row->gender;?></option>
                                                        <option value="<?php echo $sexx;?>"> <?php echo $sexx ;?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group" id="email">
                                            <label for="password" class="control-label col-md-3" >Email</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" name="email" data-validate-length="6,8" value="<?php echo  $row->email ;?>"class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="item form-group" id="age">
                                            <label for="password" class="control-label col-md-3" >Age</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password" type="number" name="age" value="<?php echo $row->age ;?>" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        
                                         <div class="item form-group" id=" address">
                                            <label for="password" class="control-label col-md-3" >Address</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password" type="text" name="address" value="<?php echo $row->address;?>" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="item form-group" id="phoneNumb">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone" >Telephone <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="tel" id="telephone" name="phone" value="<?php echo $row->phone ;?>" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group" id="shortDesc">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Short Description <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="textarea" required="required" name="descript" value="<?php echo $row->description;?>" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="send" name="updates" type="submit" class="btn btn-success" >Update</button>
                                               
                                            </div>
                                        </div>
                                      </td></tr><?php
                                    /*                              }
                                                                  }*/

                                }
                                if (isset($_POST['updates'])) {
                                                  $artid=$_POST['id'];
                                                  $editnic=$_POST['nickname'];
                                                  $editfirst=$_POST['first_name'];
                                                  $editlast=$_POST['last_name'];
                                                  $editage=$_POST['age'];
                                                  $editfone=$_POST['phone'];
                                                  $editaddress=$_POST['address'];
                                                  $editemail=$_POST['email'];
                                                  echo "byose ni<h1>".$artid." ".$editnic." ".$editfirst." ".$editlast." ".$editage." ".$editfone." ".$editaddress." ".$editemail."</h1>";
                                                  /*$query = $rec->editartistinfo($artid,$editnic,$editfirst,$editlast,$editage,$editfone,$editaddress,$editemail);
                                                    if (!$query) {
                                                      echo "<script>
                                                      alert('wapi ntibyakunze');
                                                      </script>";
                                                    }
                                                    else{
                                                      echo "<script>
                                                      window.location.href = 'widgets.php';
                                                      </script>";
                                                    }*/
                                                  }
                            }
                            else{

                                echo '<td> <p>Sorry, there is no data </p></td><td><p> ';

                            }
                            ?>
                            <?php
                              /*if (isset($_POST['updates'])) {
                                                  $artid=$_POST['id'];
                                                  $editnic=$_POST['nickname'];
                                                  $editfirst=$_POST['first_name'];
                                                  $editlast=$_POST['last_name'];
                                                  $editage=$_POST['age'];
                                                  $editfone=$_POST['phone'];
                                                  $editaddress=$_POST['address'];
                                                  $editemail=$_POST['email'];
                                                  echo "byose ni<h1>".$artid." ".$editnic." ".$editfirst." ".$editlast." ".$editage." ".$editfone." ".$editaddress." ".$editemail."</h1>";*/
                                                  /*$query = $rec->editartistinfo($artid,$editnic,$editfirst,$editlast,$editage,$editfone,$editaddress,$editemail);
                                                    if (!$query) {
                                                      echo "<script>
                                                      alert('wapi ntibyakunze');
                                                      </script>";
                                                    }
                                                    else{
                                                      echo "<script>
                                                      window.location.href = 'widgets.php';
                                                      </script>";
                                                    }*/
                                                  //}

                            ?>

                            </tbody>
                        </table>

                        <!-- Modal -->
                        <!-- end project list -->
                    </div>
                    <ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item">
                                      
                                    </li>
                                    <!-- <li class="page-item"><input type="hidden" id="page1" value="1"/><a class="page1" href="#" >1</a></li>
                                     <li class="page-item"><input type="hidden" id="page2" value="2"/><a class="page2" href="#?pagenumber=2" >2</a></li>
                                     <li class="page-item"><input type="hidden" id="page3" value="3"/><a class="page3" href="#?pagenumber=5">3</a></li>-->
                                    <li class="page-item">
                                        <a class="nextpage" href="javascript:nextPage()" id="btn_next" aria-label="Next" >
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
include ('include/footer.php')
?>
<?php
/*                                                if (isset($_POST['updates'])) {
                                                  $artid=$_GET['id'];
                                                  $editnic=$_POST['nickname'];
                                                  $editfirst=$_POST['first_name'];
                                                  $editlast=$_POST['last_name'];
                                                  $editage=$_POST['age'];
                                                  $editfone=$_POST['phone'];
                                                  $editaddress=$_POST['address'];
                                                  $editemail=$_POST['email'];
                                                  echo "byose ni".$artid." ".$editnic." ".$editfirst." ".$editlast." ".$editage." ".$editfone." ".$editaddress." ".$editemail;
                                                  /*$query = $rec->editartistinfo($artid,$editnic,$editfirst,$editlast,$editage,$editfone,$editaddress,$editemail);
                                                    if (!$query) {
                                                      echo "<script>
                                                      alert('wapi ntibyakunze');
                                                      </script>";
                                                    }
                                                    else{
                                                      echo "<script>
                                                      window.location.href = 'widgets.php';
                                                      </script>";
                                                    }
                                                  }*/
                                                
                                                ?>