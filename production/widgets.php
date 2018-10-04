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
                <div class="form-group">
                  <div class="col-md-4">
                    <select class="form-control displayCategories">
                        <option value="0">--Select--</option>
                        <option value="1" id="cat1"> Music </option>
                        <option value="4" id="cat2"> Fashion </option>
                        <option value="2" id="cat3"> Dance </option>
                        <option value="3" id="cat4"> Comedy </option>
                        <option value="5" id="cat5"> Media </option>
                    </select>
                  </div>
                </div>
                <ul class="nav navbar-right panel_toolbox">
                  <ul class="nav navbar-right panel_toolbox">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" id="insert" >Add New</button>
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

                                    <form class="form-horizontal form-label-right" action="addArtist.php" method="post"  enctype="multipart/form-data" >
                                      <div class="item form-group">
                                        <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name">Profile <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="file" name="pic" accept="image/jpeg">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name">Artist Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text" id="name" name="Artist_Name" placeholder="Bruce Melody" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text" id="name" name="name" placeholder="Bruce " required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                      </div>



                                      <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Surname <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text" id="name" name="sname" placeholder="Melody " required="required" class="form-control col-md-7 col-xs-12">
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
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Age <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="number" id="name" name="age" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Category <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <div class="form-group">
                                            <select class="form-control category" name="category" >
                                                <option>--Select--</option>
                                                <option value="1" id="cat1"> Music </option>
                                                <option value="4" id="cat2"> Fashion </option>
                                                <option value="2" id="cat3"> Dance </option>
                                                <option value="3" id="cat4"> Comedy </option>
                                                <option value="5" id="cat5"> Media </option>

                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">SubCategory <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group subCat" id="category" name="">

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
                                        <label for="password" class="control-label col-md-3">Address</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input id="password" type="text" name="address" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
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
                                          <button type="button" class="btn btn-primary cancell">Cancel</button>
                                          <button  type="submit"  name="addArtist" class="btn btn-success" >Submit</button>
                                           
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
                  <tr>
                    <th>Profile</th>
                    <th>Artist Name</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Gender</th>
                    <th>Age</th>
                      <th>Email</th>
                      <th>Phone</th>
                  
                    
                      <th>Address</th>
                 
                    <th colspan="2">Action</th>
                  </tr>
                  </thead>
                  <tbody class="artists">
                      <?php
                      $rec = new User();
                      //$pageNumbers=array();
                      $pageNumber=1;
                      $query = $rec->getallartistBypages($pageNumber,10);
                       $i=0;
                      if($query) {
                          while ($row = $query->fetch_object()) {
                              $i++;
                                    $idd=$row->id;
                                    //$subcat=$row->subcategory_id;
                              $pageNumbers[$i]=$i;
                              echo '<tr><td> <input type="hidden" value="'.$row->id.'" id="'.$row->id.'"/>
                        
                              <img src="uploads/'.$row->profile_image.'" class="avatar" alt="Avatar"></td>
                              <td><p> ' . $row->nickname . '</p></td><td><p>' . $row->last_name . '</p></td>
                              <td><p>' . $row->first_name. '</p></td><td><p>' . $row->gender. '</p></td>
                              <td><p>' . $row->age. '</p></td><td><p>' . $row->email. '</p></td>
                              <td><p>' . $row->phone. '</p></td>
                             
                              <td><p>'.$row->address. '</p></td>
                            
                              <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal'.$idd.'" data-id="'.$idd.'" id="getartist">Edit</button></td>
                              <td><a type="button" href="deletart.php?id='.$idd.'" class="btn btn-info btn-sm" onclick="return confirm(\'Are you sure you want to delete?\');">Delete</a></td>
                           <div class="modal fade" id="myModal'.$idd.'" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <form class="form-horizontal form-label-left" action="editart.php"  method="post">
                                        <div class="item form-group" id="profile">
                                            <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" >Profile <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <img  src="images/user.png" class="avatar" alt="Avatar" />
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="hidden" id="id" name="id"  required="required" value="' . $idd . '" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group" id="nickname">
                                            <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" >Artist Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" email" id="nick_name" name="nickname"  required="required" value="'.$row->nickname.'" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group" id="fname">
                                            <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" id="fname">Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="last_name" name="last_name"   required="required" value="' . $row->last_name . '" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group" id="lName">
                                            <label class="control-label col-md-6 col-sm-6 col-xs-12" for="number" id="lName">Surname <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first_name" name="first_name" value="' . $row->first_name . '" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-6 col-sm-6 col-xs-12" for="website" >Gender <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <select class="form-control" name="gender" id="gender">
                                                        <option value="' . $row->gender. '"> ' . $row->gender. ' </option>
                                                        <option value="Female"> Female </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group" id="email">
                                            <label for="password" class="control-label col-md-6" >Email</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="email" type="email" name="email" data-validate-length="6,8" value="' . $row->email . '"class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="item form-group" id="age">
                                            <label for="password" class="control-label col-md-6" >Age</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="age" type="number" name="age" value="' . $row->age . '" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        
                                         <div class="item form-group" id=" address">
                                            <label for="password" class="control-label col-md-6" >Address</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="address" type="text" name="address" value="' . $row->address . '" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="item form-group" id="phoneNumb">
                                            <label class="control-label col-md-6 col-sm-6 col-xs-12" for="telephone" >Telephone <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="tel" id="phonenumber" name="phonenumber" value="' . $row->phone . '" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group" id="shortDesc">
                                            <label class="control-label col-md-6 col-sm-6 col-xs-12" for="textarea">Short Description <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="desc"  name="desc" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="button" id="cancel" class="btn btn-primary">Cancel</button>
                                                <button  class="btn btn-success" type="submit" name="updates" >Update</button>
                                                
                                              
                                            </div>
                                        </div>
                                        </form>
                                      </td></tr>';
                                        ?><?php
/*                              }
                              }*/

                          }
                      }
                      else{

                          echo '<td> <p>Sorry, there is no data </p></td><td><p> ';

                      }
                      ?>
<script type="text/javascript">
                              /*$(document).ready(function(){
                              });
                              $(document).on('click','.edit_data',function(){
                                var artist_id=$(this).attr("id");
                                $.ajax({
                                  url:"controller/fetchartistbyid.php",
                                  method:"POST",
                                  data:{artist_id:artist_id},
                                  dataType:"json",
                                  success:function(data){
                                    $(#nickname).val(data.nickname);
                                    $(#first_name).val(data.first_name);
                                    $(#last_name).val(data.last_name);
                                    $(#gender).val(data.gender);
                                    $(#age).val(data.age);
                                    $(#email).val(data.email);
                                    $(#telephone).val(data.phone);
                                    $(#artist_id).val(data.id);
                                    $(#myModal1).modal('show');
                                  }
                                });
                              });
*/
                            </script>
                  </tbody>
                </table>
<script type="text/javascript">
  

</script>
       <!-- Modal -->

                                        <!-- end project list -->

              </div>
                <ul class="nav navbar-right panel_toolbox">
                    <ul class="nav navbar-right panel_toolbox">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="prevpage" href="javascript:prevPage()" id="btn_prev" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only prevpage" >Previous</span>
                                    </a>
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

<script>

    $(".category").on('change',function(){

        var category_id=$(".category").val();

        //alert(category_id);

        $(".subCat").empty();
        //@making ajax request
        $.ajax({
            type:"POST",
            url:'fetchCategory.php',
            data:"category_id="+category_id,
            dataType:"json",
            cache: false,
            success:function(data){
                for(var i in data){
                    $(".subCat").append("<input type='checkbox' id='subcategory_id' name='subcategory[]' value='"+data[i].subcategory_id+"' />"+data[i].subcategory_name+"<br>");
                }
            }
        });
});
    $(".displayCategories").on('change',function() {

        var discategory_id = $(".displayCategories").val();

        $(".artists").empty();
        //@making ajax request
        $.ajax({
            type: "POST",
            url: 'fetchArtistsByCategory.php',
            data: "category_id=" + discategory_id,
            dataType: "json",
            cache: false,
            success: function (data) {
                for (var i in data) {
                    $(".artists").append('<tr><td> <input type="hidden" value="'+data[i].id+'" id="'+data[i].id+'"><img src="uploads/'+data[i].profile_image+'" class="avatar" alt="Avatar" /></td></td><td><p> ' +data[i].nickname +'</p></td><td><p>' +data[i].last_name + '</p></td><td><p>' +data[i].first_name+ '</p></td><td><p>' +data[i].gender+ '</p></td><td><p>' +data[i].age+ '</p></td><td><p>' +data[i].email+'</p></td><td><p>' +data[i].phone+ '</p></td><td><p>' +data[i].address +'</p></td><td> <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal'+i+'">Edit</a></button> <button type="button" class="btn btn-info btn-sm" >Delete</button> <div class="modal fade" id="myModal'+i+'" role="dialog">');

                }
            }


        });
    });


//first way to edit the artists

    $(".send").on('click',function(){
          var id=$("#id").val();
          var nick_name=$("#nick_name").val();
          var first_name=$("#first_name").val();
          var last_name=$("#last_name").val();
          var gender=$("#gender").val();
          var email_val=$("#email_val").val();
          var desc=$("#desc").val();
           var address=$("#address").val();
            var phonenumber=$("#phonenumber").val();
        
        alert(first_name);
        alert(last_name);
        alert(nick_name);
      
        $.ajax({
            url:"editartist.php",
            method:"POST",
            data:{id:id,
                nickname:nick_name,
                first_name:first_name,
                last_name:last_name,
                age:age, 
                phone:phonenumbe,
                email:email_val,
                gender:gender,
                shortDesc_val:desc
            },
            success:function(data)
            {
                $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                $('#user_data').DataTable().destroy();
                fetch_data();
            }
          }
          );


    });


  
</script>
