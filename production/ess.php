//triggered when modal is about to be shown
            $('#del-event-modal').on('show.bs.modal', function(e) {
 
            //get data-id attribue of the clicked element
            var bookId = $(e.relatedTarget).data('id')
            //populate the textbox
            $(e.currentTarget).find('input[name="id"]').val(bookId);
            
            $("#del").click(function(){
                var Id = document.getElementById("id").value; alert(Id);
                
                 $.ajax({
                        url: 'delproject.php',
                        type: 'POST',                                                
                        cache: 'false',
                        cache: 'false',
                        data :{value:Id} ,
                        success: function(data){
                            var data = JSON.stringify(data)
                            //alert("id sent is "+data);    
                        window.location.href="project_category.php";                                                       
                        }
                    });
                 
              })        
            
        });
            
             $('#edit-event-modal').on('show.bs.modal', function (e) {
            
                  //get data-id attribute of the clicked element
                var bookId = $(e.relatedTarget).data('id');
        
                //populate the textbox
                $(e.currentTarget).find('input[name="proid"]').val(bookId);
                //var x = document.getElementById("proid").value; alert("pid"+x);

            });

<!-- Delete Project Modal -->
  <div id="del-event-modal" class="modal fade">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title">Confirmation</h4>

                </div><!--//modal-header-->

                <div class="modal-body">

                    <p class="text-warning">Do you want to Delete this project?</p>
                    <input type="text" value="" id="id" name="id">
            
                </div> <!--//modal-body-->

                <div class="modal-footer">

                 <!--   <button type="submit" name="del" class="btn btn-primary" id="del" onClick="document.location.href='delproject.php'" >OK</button>-->
                     <button type="submit" name="del" id="del" class="btn btn-primary" >OK</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div> <!--//Modal-footer -->

            </div><!--//modal-content-->

        </div><!--//modal-dialog-->

    </div><!--//modal-->
<!--// Delete Project Modal -->

<!-- edit project modal -->
  <div id="edit-event-modal" class="modal fade">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title">Edit Project</h4>

                </div><!--//modal-header-->

                <div class="modal-body">
          <?
                  // $id = $_POST["id"]; //escape the string if you like
                $query_selectDetails = "SELECT * FROM tblprojects WHERE ProID='$id'";
              $result_selectDetails = mysqli_query($conn,$query_selectDetails) or die(mysqli_error($conn));
              $row_selectDetails = mysqli_fetch_array($result_selectDetails);
        
        
    if(isset($_POST['edit'])){
    
        $id = $_POST["id"];
        $pronm = $_POST['pnm']; 
        $city = $_POST['pcity'];
        $feature =  implode(" ",$_POST['p_feature']);
        $spec = implode(" ",$_POST['p_spec']);
        $insertFeature = "UPDATE `tblprojects` SET `ProName` ='$pronm' , `City` ='$city',Features = '$feature', Specification = '$spec'  where `ProID` ='$id'";      echo $insertFeature;
        $executeFeature = mysqli_query($conn,$insertFeature) or die(mysqli_error($conn));
        //$getProp = mysqli_fetch_array($executeFeature);
        header("Location:projects.php");

       } 
         ?>
               <div>
                 <form action="" method="POST" class="form" id="add-department">
                 <input type="text" value="" id="proid" name="id">
                    <div class="form-group">
                      <input type="text" class="form-control" id="pnm" name="pnm" placeholder="Project Name" value="<?php echo $row_selectDetails['ProName']; ?>"/>
                      <span class="help-block"></span>
                      </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="pcity" name="pcity" placeholder="City" value="<?php echo $row_selectDetails['City']; ?>"/>
                      <span class="help-block"></span>
                      </div>
                       <div class="form-group">
                          <label>Feature : </label>
                          <textarea  class="form-control" id="p_feature" name="p_feature[]"> <? echo $row_selectDetails['Features']; ?> </textarea>
                          <span class="help-block"></span>
                          </div>
                          <div class="form-group">
                             <label>Specification : </label>
                            <textarea class="form-control" id="p_spec" name="p_spec[]" > <?php echo $row_selectDetails['Specification']; ?> </textarea>
                          <span class="help-block"></span>
                          </div>
                      <div class="modal-footer">
                    
                      <input type="submit" id="edit" name="edit" class="btn btn-primary" value="Update"/>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
                </div>
                </div> <!--//modal-body-->

                <div class="modal-footer">

                   <!-- <button type="submit" name="del" class="btn btn-primary" onClick="document.location.href='#'" >OK</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
-->

                </div> <!--//Modal-footer -->

            </div><!--//modal-content-->

        </div><!--//modal-dialog-->

    </div><!--//modal-->
<!--//edit project modal-->

              <? 
                                                            
                                                            $propertyQry ="select * from tblprojects "; 
                                                            $exeQry = mysqli_query($conn,$propertyQry);
                                                             while($getProp = mysqli_fetch_array($exeQry)){
                                                             $id = $getProp['ProID'];                                                                 
                                                                
                                                              // echo var_dump($getProp); 
                                                        ?>
                                                    <div class="col-xs-6 col-sm-4 col-md-4">
                                                    
                                                            <div class="thumbnail search-thumbnail">
                                                                  <img class="media-object" src="<? if ($getProp['image']!='')echo $getProp['image'];else echo "holder.js/100px200?theme=gray"; ?>" />

                                                                <div class="caption">
                                                                    <div class="clearfix">
                                                                        <span class="pull-right label label-grey info-label"><? echo $getProp['City'];?></span>

                                                                        <!--<div class="pull-left bigger-110">
                                                                            <i class="ace-icon fa fa-star orange2"></i>

                                                                            <i class="ace-icon fa fa-star orange2"></i>

                                                                            <i class="ace-icon fa fa-star orange2"></i>

                                                                            <i class="ace-icon fa fa-star-half-o orange2"></i>

                                                                            <i class="ace-icon fa fa-star light-grey"></i>
                                                                        </div>-->
                                                                        
                                                                    </div>

                                                                    <h3 class="search-title">
                                                                        <a href="#" class="blue"><? echo $getProp['ProName']; ?></a>
                                                                    </h3>
                                            
                                                                       <p><span class="text-info">Features :</span>
                                                                     <? 
                                                                          
                                                                         echo $getProp['Features'];  ?>
                                                                    </p>
                                                                    <p><span class="text-info">Specification :</span>
                                                                     <? echo $getProp['Specification']; echo "\n";  ?>
                                                                    </p>
                                                                    <div class="action-buttons bigger-125" align="center">
                                                                            <a href="#edit-event-modal" data-toggle="modal" data-id="<? echo $id; ?>">
                                                                                <i class="ace-icon fa fa-edit green"></i>
                                                                            </a>

                                                                            <a href="#">
                                                                                <i class="ace-icon fa fa-heart red"></i>
                                                                            </a>

                                                                            <a href="#del-event-modal" data-toggle="modal"  data-id="<? echo  $id; ?>">
                                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                                            </a>
                                                                            <!--<a href="#myModal" role="button" class="btn" data-toggle="modal">Delete Project</a>-->
                                                                </div>
                                                                </div> <!--//caption -->
                                                                
                                                            </div> <!--// thumbnail -->
                                                            
                                                        </div>
                                                        <? }?>