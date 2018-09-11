
<?php
session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
    header('location:login.php');
}
include 'include/funct.php';
$user = new User();
//fetch user data
$sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);

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
                        <select class="form-control">
                          <option value=""> --Select--</option>
                          <option value="Music"> Music </option>
                          <option value="Dance"> Dance </option>
                          <option value="Comedy"> Comedy </option>
                          <option value="Fashion"> Fashion </option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control">
                          <option value=""> --Select-- </option>
                          <option value="Music"> Music Artist Of The Year 2018 </option>
                          <option value="Music"> Best Cultural Artist Of The Year 2018 </option>
                          <option value="Music"> Best Up Coming Artist</option>
                          <option value="Music"> Best Dj 2018 </option>
                          <option value="Music"> Best Music Producer 2018 </option>
                          <option value="Music"> Best East African collaboration </option>
                          <option value="Music"> Best Gospel Artist Of The Year 2018 </option>
                          <option value="Music"> Best Upcoming Gospel Artist </option>
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