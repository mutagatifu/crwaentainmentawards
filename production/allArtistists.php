<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 13/09/2018
 * Time: 12:04
 */?>
<?php
include ('include/header.php')
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
                        <div class="form-group">
                            <div class="col-md-4">
                                <select class="form-control">
                                    <option value="Music"> Music </option>
                                    <option value="Dance"> Dance </option>
                                    <option value="Comedy"> Comedy </option>
                                    <option value="Fashion"> Fashion </option>
                                </select>
                            </div>
                        </div>
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
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Profile <span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input type="file" name="pic" accept="image/jpeg">
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Artist Name <span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input type="email" id="name" name="Artist_Name" placeholder="Bruce Melody" required="required" class="form-control col-md-7 col-xs-12">
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input type="email" id="name" name="name" placeholder="Bruce " required="required" class="form-control col-md-7 col-xs-12">
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Surname <span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input type="email" id="name" name="sname" placeholder="Melody " required="required" class="form-control col-md-7 col-xs-12">
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Gender <span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="gender">
                                                                                    <option value="Male"> Male </option>
                                                                                    <option value="Female"> Female </option>
                                                                                    <option value="Other"> Other </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Category <span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="category">
                                                                                    <option value="Music"> Music </option>
                                                                                    <option value="Fashion"> Fashion </option>
                                                                                    <option value="Dance"> Dance </option>
                                                                                    <option value="Media"> Media </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">SubCategory <span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="form-group" id="category">
                                                                                <select class="form-control" name="category" multiple size="5">
                                                                                    <option>--Select--</option>
                                                                                    <option value="Music"> 1 </option>
                                                                                    <option value="Music"> 2 </option>
                                                                                    <option value="Music"> 3 </option>
                                                                                    <option value="Music"> 4 </option>
                                                                                    <option value="Music"> 5 </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label for="password" class="control-label col-md-3">Email</label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input id="password" type="email" name="email" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Short Description <span class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <textarea id="textarea" required="required" name="descript" class="form-control col-md-7 col-xs-12"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ln_solid"></div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-6 col-md-offset-3">
                                                                            <button type="submit" class="btn btn-primary">Cancel</button>
                                                                            <button id="send" type="submit" onclick="loadDoc()" class="btn btn-success" >Submit</button>
                                                                            <script>
                                                                                function loadDoc() {
                                                                                    var xhttp = new XMLHttpRequest();
                                                                                    xhttp.onreadystatechange = function() {
                                                                                        if (this.readyState == 4 && this.status == 200) {
                                                                                            document.getElementById("category").innerHTML =
                                                                                                this.responseText;
                                                                                        }
                                                                                    };
                                                                                    xhttp.open("GET", "ajax_info.txt", true);
                                                                                    xhttp.send();
                                                                                }
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        function myFunction() {
                                                                            var profile = document.getElementById("image").value;
                                                                            var artistName = document.getElementById("artistName").value;
                                                                            var firtstName = document.getElementById("firstName").value;
                                                                            var surName = document.getElementById("surName").value;
                                                                            var gender = document.getElementById("gender").value;
                                                                            var categgory = document.getElementById("category").value;
                                                                            var email = document.getElementById("email").value;
                                                                            var phoneNumber = document.getElementById("phoneNumber").value;
                                                                            var shortDescription = document.getElementById("shortDescription").value;
                                                                            // Returns successful data submission message when the entered information is stored in database.
                                                                            var dataString = '&profile1=' + image + '&artistName1=' + artistName '&firstName1=' + firstName + '&surname1=' + surName + '&gender1=' + gender
                                                                            + '&category1=' + categgory + '&email1=' + email '&phoneNumber1=' + phoneNumber + '&shortDescription1=' + shortDescription;
                                                                            if (profile == '' || artistName == '' || firtstName == '' || surName == '' || gender == '' || categgory == '' || email == '' || password == '' || phoneNumber == '' ||
                                                                                shortDescription == '') {
                                                                                alert("Please Fill All Fields");
                                                                            } else {
                                                                                // AJAX code to submit form.
                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    url: " ",
                                                                                    data: dataString,
                                                                                    cache: false,
                                                                                    success: function(html) {
                                                                                        alert(html);
                                                                                    }
                                                                                });
                                                                            }
                                                                            return false;
                                                                        }
                                                                    </script>
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
                            <tr>
                                <th>Profile</th>
                                <th>Artist Name</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Gender</th>
                                <th>Category</th>
                                <th>Created Date</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="images/user.png" class="avatar" alt="Avatar"></td>
                                <td>
                                    <p> Bruce Melody</p>
                                </td>
                                <td>
                                    <p> Bruce</p>
                                </td>
                                <td>
                                    <p> Itahiwacu</p>
                                </td>
                                <td>
                                    <p> Male </p>
                                </td>
                                <td>
                                    <p> Music </p>
                                </td>
                                <td>
                                    <p> 2018-12-29 </p>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="images/user.png" class="avatar" alt="Avatar"></td>
                                <td>
                                    <p> Bruce Melody</p>
                                </td>
                                <td>
                                    <p> Bruce</p>
                                </td>
                                <td>
                                    <p> Itahiwacu</p>
                                </td>
                                <td>
                                    <p> Male </p>
                                </td>
                                <td>
                                    <p> Music </p>
                                </td>
                                <td>
                                    <p> 2018-12-29 </p>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="images/user.png" class="avatar" alt="Avatar"></td>
                                <td>
                                    <p> Bruce Melody</p>
                                </td>
                                <td>
                                    <p> Bruce</p>
                                </td>
                                <td>
                                    <p> Itahiwacu</p>
                                </td>
                                <td>
                                    <p> Male </p>
                                </td>
                                <td>
                                    <p> Music </p>
                                </td>
                                <td>
                                    <p> 2018-12-29 </p>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="images/user.png" class="avatar" alt="Avatar"></td>
                                <td>
                                    <p> Bruce Melody</p>
                                </td>
                                <td>
                                    <p> Bruce</p>
                                </td>
                                <td>
                                    <p> Itahiwacu</p>
                                </td>
                                <td>
                                    <p> Male </p>
                                </td>
                                <td>
                                    <p> Music </p>
                                </td>
                                <td>
                                    <p> 2018-12-29 </p>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                    <ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
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
