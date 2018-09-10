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
                <h3 class="center"> COMEDY CATEGORY</h3>
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
                  <tr>
                    <th>S/N</th>
                    <th>COMEDIAN CATEGORY</th>
                    <th>N of ARTISTS</th>
                    <th style="width: 20%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <p> 1.</p>
                    </td>
                    <td>
                      <p> Best Comedian</p>
                    </td>
                    <td>
                      <p> 20 Artists</p>
                    </td>
                    <td>
                      <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p> 2.</p>
                    </td>
                    <td>
                      <p> Best Comedian 2018</p>
                    </td>
                    <td>
                      <p> 30 Artists</p>
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