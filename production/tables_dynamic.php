<?php
include ('include/header.php');
//include ("include/funct.php");
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
    <!-- /top navigation -->

    <!-- page content -->


    <div class="right_col" role="main">

      <div class="">
          <div class="col-md-4" style="margin-left:-10px">
              <select class="form-control cat">
                  <option value="0">--Select--</option>
                  <option value="1" id="cat1"> Music </option>
                  <option value="4" id="cat2"> Fashion </option>
                  <option value="2" id="cat3"> Dance </option>
                  <option value="3" id="cat4"> Comedy </option>
                  <option value="5" id="cat5"> Media </option>
              </select>
          </div>

          <div class="">
              <div class="col-md-4" style="margin-left:-10px">
                  <select class="form-control subCat">
                      <option value="0">--Select--</option>

                  </select>
              </div>


        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                  <!--
                  <div  class="form-group">
                      
                      //@fetching categories
                      //$category=$conn->query("SELECT * FROM categories ORDER BY id DESC");

                      ?>
                      <div class="col-md-3">
                          <select class="form-control cat">

                              //while($row=$category->fetch_object()){
                                 // echo "<option value='".urlencode(base64_encode($row->id))."'>".$row->category_name."</option>";
                              }
                              ?>
                          </select>
                      </div>
                      <div class="col-md-5">
                          <select class="form-control subCat">

                          </select>
                      </div>
                  </div> -->
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

                                  <form class="form-horizontal form-label-left" method ="post" action = "controller/promoteartists.php" novalidate>

                                    <h1 class="center"> Create New Vote Category</h1>

                                    <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Select Category <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                          <select class="form-control cat2">
                                              <option>--Select--</option>
                                            <option value="1" value=""> Music </option>
                                            <option value="3"> Comedy </option>
                                            <option value="2"> Dance </option>
                                            <option value="4"> Fashion </option>
                                              <option value="5"> Media </option>

                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                      <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website" required>Select Sub Category <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">

                                              <div class="form-group">
                                                  <select class="form-control subCatModal" required>

                                                  </select>
                                              </div>
                                          </div>
                                      </div>



                                    <div class="item form-group artists">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Artists <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12 artistsInfos">
                      
                                       
                                      </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                      <div class="col-md-6 col-md-offset-3">
                                        <ul class="nav navbar-right panel_toolbox">
                                          <button type="submit" name="updates" class="btn btn-success btn-md">Save</button>
                                        </ul>
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
                    <th>Subcategory</th>
                    <!--<th>Created Date</th>-->
                    <th>N of Votes</th>

                  </tr>
                  </thead>
                  <tbody class="votes">
                  <?php
                  $rec = new User();
                  $pageNumber=1;
                  $query = $rec->getAllVotes($pageNumber,10);

                  if($query) {
                      $i = 0;
                      while ($row = $query->fetch_object()) {

                          echo '<tr><td> <img  src="uploads/'.$row->profile.'" class="avatar" alt="Avatar" /></td></td><td><p> ' . $row->nickname . '</p></td><td><p>' . $row->last_name . '</p></td><td><p>' . $row->first_name. '</p></td><td><p>' . $row->gender. '</p></td>
                    <td><p>' . $row->subcategory_name. '</p></td> <td><p>' . $row->number_votes. '</p></td></tr>';
                      }
                  }
                  else{

                      echo '<td> <p>Sorry, there is no data </p></td><td><p> ';

                  }
                  ?>

                  </tbody>
                </table>
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

    /*$(".cat").on('change',function(){

        var category_id=$(".cat").val();
*/

        //alert(category_id);

      //  $(".subCat").empty();
        //@making ajax request
        /*$.ajax({
            type:"POST",
            url:'fetchCategory.php',
            data:"category_id="+category_id,
            dataType:"json",
            cache: false,
            success:function(data){
                $(".subCat").append("<option> --Select-- </option>");
                for(var i in data){
                    $(".subCat").append("<option id='subcategory_id' value='"+data[i].subcategory_id+"'>"+data[i].subcategory_name+"</option>");
                }
            }
        });



    });*/
/*
    $(".subCat").on('change',function(){

        var subcategory_id=$(".subCat").val();



        //alert(category_id);

        $(".artistsInfo").empty();
        //@making ajax request
        $.ajax({
            type:"POST",
            url:'fetchArtistsBySubCategory.php',
            data:"subcategory_id="+subcategory_id,
            dataType:"json",
            cache: false,
            success:function(data){
                for(var i in data){

                    $(".artistsInfo").append('<div class="col-md-3"> <div class="col-md-3 col-xs-12 widget widget_tally_box"> <div class="x_panel fixed_height_390"> <div class="x_content"> <div class="flex"> <img src="images/user.png" alt="..." class="img-circle profile_img"> </div> <h3 class="name">'+data[i].nickname+'</h3> <h3 class="name">'+data[i].votes+'</h3> </div> </div> </div>');
                }
            }
        });



    });*/

    //$(".cat").on("change",function(){
        //get change item or id

        //alert(document.getElementById("category_id").value());
        //const anonymous=$(".cat").val();
        /*	alert(anonymous);*/
        //@empty subcategory
        //$(".subCat").empty();
        //@making ajax request
       /* $.ajax({
            type:"POST",
            url:'fetchCategory.php',
            data:"category_id="+anonymous,
            dataType:"json",
            cache: false,
            success:function(data){
                $(".subCat").append("<option value='0'> --Select-- </option>");
                for(var i in data){
                    $(".subCat").append("<option id='subcategory_id' value='"+data[i].subcategory_id+"'>"+data[i].subcategory_name+"</option>");
                }
            }
        });*/


        $(".cat").on('change',function(){
          var cat_id=$(".cat").val();

          $(".votes").empty();

          $.ajax({

             type:"POST",
            url:'getvotesincategory.php',
            data:"category_id="+cat_id,
            dataType:"json",
            cache: false,
            success:function(data){

              
                for(var i in data){

                    $(".votes").append('<tr><td> <img  src="uploads/'+data[i].profile+'" class="avatar" alt="Avatar" /></td></td><td><p> '+data[i].nickname+'</p></td><td><p>'+data[i].last_name+'</p></td><td><p>'+data[i].first_name+'</p></td><td><p>'+data[i].gender+'</p></td><td><p>'+data[i].subcategory_name+'</p></td><td><p>'+data[i].number_votes+'</p></td></tr>');
                }
            }


          });




        });


        $(".subCat").on('change',function(){
          var subcat_id=$(".subCat").val();


          $(".votes").empty();

          $.ajax({

             type:"POST",
            url:'getvotesinsubcate.php',
            data:"subcategory_id="+subcat_id,
            dataType:"json",
            cache: false,
            success:function(data){

                for(var i in data){

                    $(".votes").append('<tr><td> <img  src="uploads/'+data[i].profile+'" class="avatar" alt="Avatar" /></td></td><td><p> '+data[i].nickname+'</p></td><td><p>'+data[i].last_name+'</p></td><td><p>'+data[i].first_name+'</p></td><td><p>'+data[i].gender+'</p></td><td><p>'+data[i].subcategory_name+'</p></td><td><p>'+data[i].number_votes+'</p></td></tr>');
                }
            }


          });




        });


        $(".cat2").on('change',function(){
          var cat_id=$(".cat2").val();

          $(".subCatModal").empty();
          $(".artistsInfos").empty();

         $.ajax({
             type:"POST",
             url:'fetchCategory.php',
            data:"category_id="+cat_id,
            dataType:"json",
           cache: false,
           success:function(data){
           $(".subCatModal").append("<option value='0'> --Select-- </option>");
          for(var i in data){
             $(".subCatModal").append("<option id='subcategory_id' value='"+data[i].subcategory_id+"'>"+data[i].subcategory_name+"</option>");
      }
    }
    });



        });



          $(".subCatModal").on('change',function(){
          var subcat_id=$(".subCatModal").val();

          $(".artistsInfos").empty();

          $.ajax({

             type:"POST",
            url:'getpromobysubcate.php',
            //getvotesinsubcate.php',
            data:"subcategory_id="+subcat_id,
            dataType:"json",
            cache: false,
            success:function(data){
                for(var i in data){

                    $(".artistsInfos").append('<input type="hidden" name="subcategory_id" value="'+subcat_id+'"/><input type="checkbox" required name="artist[]" value="'+data[i].id+'" />'+data[i].nickname+'<br>');
                }
            }


          });




        });




</script>

