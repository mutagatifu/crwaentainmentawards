
<?php
session_start();
include("include/connect.php");
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
    header('location:login.php');
}
include 'include/funct.php';
$user = new User();
//fetch user data
$sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);

//@fetching categories
$category=$conn->query("SELECT * FROM categories ORDER BY id DESC");

?>
<?php
include ('include/header.php')
?>
        <!-- /top navigation -->
        <!-- Sub menu -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div  class="form-group">
                    <div class="col-md-4">
                        <select class="form-control cat">
                            <?php
                            while($row=$category->fetch_object()){
                              echo "<option value='".urlencode(base64_encode($row->id))."'>".$row->category_name."</option>";
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
              <div class="row">
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
                  // carousel on first page
                  <div class="container">
                      <h1>Use Bootstrap's carousel to show multiple items per slide.</h1>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="carousel slide multi-item-carousel" id="theCarousel">
                                  <div class="carousel-inner">
                                      <div class="item active">
                                          <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
                                      </div>
                                      <div class="item">
                                          <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
                                      </div>
                                      <div class="item">
                                          <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
                                      </div>
                                      <div class="item">
                                          <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
                                      </div>
                                      <div class="item">
                                          <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
                                      </div>
                                      <div class="item">
                                          <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
                                      </div>
                                      <!-- add  more items here -->
                                      <!-- Example item start:  -->

                                      <div class="item">
                                          <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
                                      </div>

                                      <!--  Example item end -->
                                  </div>
                                  <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                  <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  // End carousel field
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
                    <div id="graph_bar" style="width:100%; height:280px;"></div>
                  </div>
                </div>
              </div>
            </div>
              <!-- /bar charts -->
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php
        include ('include/footer.php')
        ?>