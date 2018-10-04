<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 13/09/2018
 * Time: 11:53
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 13/09/2018
 * Time: 11:53
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 13/09/2018
 * Time: 11:15
 */

//include 'controller/User.php';
?>

<?php
include('include/header.php')
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
                        <h3 class="center"> MUSIC CATEGORY</h3>
                        <ul class="nav navbar-right panel_toolbox">
                            <ul class="nav navbar-right panel_toolbox">
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add New</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="x_panel">
                                                            <div class="x_content">

                                                                <form class="form-horizontal form-label-left" novalidate>


                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sub Category<span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input type="email" id="name" name="name" placeholder="New sub Category " required="required" class="form-control col-md-7 col-xs-12">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ln_solid"></div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-6 col-md-offset-3">
                                                                            <button id="send" type="submit" class="btn btn-success">Add New</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </ul>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr id="displaycategoryInfo">
                                <th>S/N</th>

                                <th>MUSIC CATEGORY</th>
                                <th>N of ARTISTS</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php
                                //$rec = new User();
                                $category_id='4';
                                $query = $rec->getgroupedartinsub($category_id);

                                if($query) {

                                    $i = 0;
                                    while ($row = $query->fetch_object()) {
                                        $i++;
                                        echo '<tr><td> <p>' . $i . '</p></td><td><p> ' . $row->subcategory_name . '</p></td><td><p>' . $row->art_number . '</p></td>  <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal1"><i class=\"fa fa-pencil\"></i>Edit</button> 
                      <div class="modal fade" id="myModal1" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="x_panel">
                                                            <div class="x_content">

                                                                <form class="form-horizontal form-label-left" novalidate>


                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sub Category<span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                          <input type="hidden" id="id" name="id"  class="form-control col-md-7 col-xs-12" value="'.$row->id.'">
                                                                            <input type="text" id="name" name="subcategory_name" placeholder="New sub Category " required="required" class="form-control col-md-7 col-xs-12" value="'.$row->subcategory_name.'">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ln_solid"></div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-6 col-md-offset-3">
                                                                            <button id="send" type="submit" class="btn btn-success">Edit</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div></td></tr>';
                                    }
                                }
                                else{

                                    echo '<td> <p>Sorry, there is no data </p></td><td><p> ';

                                }
                                ?>





                            </tbody>
                        </table>

                        <?php

                        if(isset($_GET['name'])) {

                            $subcategory_name = $_GET['name'];

                            if (!empty($subcategory_name)) {

                                $query = $rec->addNewSubCategory($subcategory_name, $category_id);

                                if ($query) {
                                    echo "<script>alert('It was added successfully')</script>";
                                } else {
                                    echo "<script>alert('It failed')</script>\"";
                                }
                            }
                        }



                        ?>

                        <?php

                        if(isset($_GET['submit'])) {

                            $subcategory_name = $_GET['name'];
                            $subcategory_id=$_GET['id'];

                            if (!empty($subcategory_name)&&!empty($subcategory_id)) {

                                $query = $rec->editSubCategory($subcateory_id,$subcategory_name);

                                if ($query) {
                                    echo "<script>alert('It was added successfully')</script>";
                                } else {
                                    echo "<script>alert('It failed')</script>\"";
                                }
                            }
                        }

                        ?>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
include('include/footer.php')
?>

