<?php
/*session_start();*/
include ('include/header.php');
include("include/connect.php");
//@fetching categories
$category=$conn->query("SELECT * FROM categories ORDER BY id DESC");
?>
        <!-- /top navigation -->
        <!-- Sub menu -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div  class="form-group">
                    <div class="col-md-4">
                        <select class="form-control cat">
                            <option>--Select--</option>
                            <?php
                            while($row=$category->fetch_object()){
                              echo "<option value='".$row->id."'>".$row->category_name."</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control subCat">
                        </select>
                    </div>
              </div>
            </nav>
          </div>
        </div>
        <!-- / Sub menu -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="main_container">
            <div class="row top_tiles">
              <div class="row artist_info" >
                  <?php

                  $artists=$user->getallartist(1,5);
                  while($row= $artists->fetch_object()){
                              echo "<div class='col-md-3'><div class='col-md-3 col-xs-12 widget widget_tally_box'><div class='x_panel fixed_height_390'><div class='x_content'><div class='flex'><img src='images/user.png' alt='' class='img-circle profile_img'></div><h3 class='name'>".$row->nickname."</h3><p>".$row->email."</p></div></div></div><div class='clearfix'></div></div>";
                            }

                  ?>

                  <div class="abana"></div>

                  <div class="col-md-12 col-xs-12">
                      <a class="left carousel-control" href="" data-slide="prev"><i class="glyphicon glyphicon-chevron-left" style="color: #00A000"></i></a>
                      <a class="right carousel-control" href="" data-slide="next"><i class="glyphicon glyphicon-chevron-right" style="color: #00A000"></i></a>
                  </div>
              </div>
              </div>
            </div>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-3">
                  <div class="col-md-3 col-xs-12 widget widget_tally_box">
                    <div class="x_panel fixed_height_390">
                      <div class="x_content">
                        <div class="flex">
                          <img src="images/user.png" alt="..." class="img-circle profile_img">
                        </div>
                        <h3 class="name">Musimbi</h3>
                        <p>
                          If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                        </p>
                        <h3 class="name">123 Votes</h3>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-3">
                  <div class="col-md-3 col-xs-12 widget widget_tally_box">
                    <div class="x_panel fixed_height_390">
                      <div class="x_content">

                        <div class="flex">
                          <img src="images/user.png" alt="..." class="img-circle profile_img">
                        </div>
                        <h3 class="name">Musimbi</h3>
                        <p>
                          If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                        </p>
                        <h3 class="name">123 Votes</h3>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-3">
                  <div class="col-md-3 col-xs-12 widget widget_tally_box">
                    <div class="x_panel fixed_height_390">
                      <div class="x_content">
                        <div class="flex">
                          <img src="images/user.png" alt="..." class="img-circle profile_img">
                        </div>
                        <h3 class="name">Musimbi</h3>
                        <p>
                          If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                        </p>
                        <h3 class="name">123 Votes</h3>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <div class="col-md-12 col-xs-12">
                      <a class="left carousel-control" href="" data-slide="prev"><i class="glyphicon glyphicon-chevron-left" style="color: #00A000"></i></a>
                      <a class="right carousel-control" href="" data-slide="next"><i class="glyphicon glyphicon-chevron-right" style="color: #00A000"></i></a>
                  </div>
              </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <!-- Carousel -->
            <!-- Carousel -->
            <div class="clearfix"></div>
            <!-- bar chart -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Votes <small>Percentage</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mycanvas" style="width:60%; height:280px;"></canvas>
                    <canvas id="subcate" style="width:60%; height:280px;"></canvas>
                    <canvas id="amusic" style="width:60%; height:280px;"></canvas>
                   <canvas id="amedia" style="width:60%; height:280px;"></canvas>
                    <canvas id="acomedy" style="width:60%; height:280px;"></canvas>
                    <canvas id="afashion" style="width:60%; height:280px;"></canvas>
                   <canvas id="adance" style="width:60%; height:280px;"></canvas>
                    <div id="graph_bar" style="width:60%; height:280px;"></div>
                    <canvas id="avotes" style="width:60%; height:280px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
              <!-- /bar charts -->
          </div>
        </div>
    <!-- jQuery -->
        <!-- /page content -->
        <!-- footer content -->
        <?php
        include ('include/footer.php')
        ?>

        <script type="text/javascript"> 
     


        </script>