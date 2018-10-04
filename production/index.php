<?php
/*session_start();*/
include ('include/header.php');
include("include/connect.php");
//@fetching categories
$category=$conn->query("SELECT * FROM category ORDER BY id");
?>
        <!-- /top navigation -->
        <!-- Sub menu -->
          <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div  class="form-group">
                    <div class="col-md-4">
                        <select class="form-control cat" id="select">
                            <option value="0">--Select--</option>
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
                  $artists=$rec->getallartist(1,10);
                  while($row= $artists->fetch_object()){
                              echo "<div class='col-md-3'><div class='col-md-3 col-xs-12 widget widget_tally_box'><div class='x_panel fixed_h/eight_390'><div class='x_content'><div class='flex'><img src='uploads/".$row->profile."' alt='' class='img-circle profile_img' style ='width : 100%; height: 100%' ></div><h3 class='name'>".$row->nickname."</h3><p>".$row->email."</p></div></div></div><div class='clearfix'></div></div>";
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
                  <div class="x_content graphs">
                    <canvas id="subcate" style="width:60%; height:280px;"></canvas>
                    <canvas id="categoryArtists" style="width:60%; height:280px;"></canvas> 
                    <canvas id="amusic" style="width:60%; height:280px;"></canvas> 
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
        <script>
          var anonymous=$(".cat").val();
 /* $(".artist_info").empty();*/
     //alert($(".artist_info").val());

     $.ajax({
            type: "POST",
            url: 'fetchArtistsByCategory.php',
            data: "category_id=" + anonymous,
            dataType: "json",
            cache: false,
            success: function (data) {
                for (var i in data) {
                    $(".artist_info").append("<div class=\"col-md-3\">\n" +
                        "                  <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">\n" +
                        "                    <div class=\"x_panel fixed_height_390\">\n" +
                        "                      <div class=\"x_content\">\n" +
                        "                        <div class=\"flex\">\n" +
                        "                          <img src=\"uploads/"+data[i].profile_image+"\" alt=\"...\" class=\"img-circle profile_img\">\n" +
                        "                        </div>\n" +
                        "\n" +
                        "                        <h3 class=\"name\">" + data[i].nickname + "</h3>\n" +
                        "                        <p>\n" + data[i].email + "</p>\n" +
                        "                      </div>\n" +
                        "                    </div>\n" +
                        "                  </div>\n" +
                        "                  <div class=\"clearfix\"></div>\n" +
                        "                </div>");
                }
            }
        });
</script>
        <script>
$(document).ready(function(){
  $.ajax({
    url: "http://localhost/gentelella/production/controller/fetchsubcate.php",
    method: "GET",
    dataType:"json",
    success: function(data) {
      var category = [];
      var nbr_of_subcat = [];
      for(var i in data) {
        category.push(data[i].category_name);
        nbr_of_subcat.push(data[i].subcat);
      }
      var chartdata = {
        labels: category,
        datasets : [
          {
            label: 'subcategories',
            backgroundColor: 'rgba(82, 163, 129, 1)',
            borderColor: 'rgba(82, 163, 129, 1)',
            hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
            hoverBorderColor: 'rgba(82, 163, 129, 1)',
            data : nbr_of_subcat
          }
        ]
      };
      var ctx = $("#subcate");
      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata,
        option:{
          scales: {
            yAxes:[{
              ticks:{
                beginAtZero:true,
                min:0,
                max:100
              }
            }]
          }
        }
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
$(".cat").on('change',function(){
  var category_id=$(".cat").val();

  $("#subcate").hide();
  $.ajax({
    url: "http://localhost/gentelella/production/countartistincategory.php",
    method: "POST",
    data:"category_id="+category_id,
    dataType:"json",
    cache: false,
    success: function(data) {
      var subcategory = [];
      var nbr_of_artists = [];
      for(var i in data) {
        subcategory.push(data[i].subcategory_name);
        nbr_of_artists.push(data[i].number_of_artists);
       /*alert(nbr_of_artists[i]+'and'+subcategory[i]);*/
      }
      var chartdata = {
        labels: subcategory,
        datasets : [
          {
            label:'artists',
            backgroundColor: 'rgba(82, 163, 129, 1)',
            borderColor: 'rgba(82, 163, 129, 1)',
            hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
            hoverBorderColor: 'rgba(82, 163, 129, 1)',
            data : nbr_of_artists
          }
        ]
      };
      var ctx = $("#categoryArtists");
      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata,
        option:{
          scales: {
            yAxes:[{
              ticks:{
                beginAtZero:true,
                min:0,
                max:100
              }
            }]
          }
        }
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
$(".subCat").on('change',function(){
  var subcategory_id=$(".subCat").val();
  $("#categoryArtists").hide();
 /*alert("subcategory_iditahiwe"+subcategory_id);*/
  //$(".graphs").empty();
  $.ajax({
    url: "http://localhost/gentelella/production/controller/getartvotesinsub.php",
    method: "POST",
    dataType:"json",
    data:"subcategory_id="+subcategory_id,
    cache: false,
    success: function(data) {
   /*   alert(data);*/
      var artists_nicknames = [];
      var nbr_of_votes = [];
      for(var i in data) {
        artists_nicknames.push(data[i].nickname);
        nbr_of_votes.push(data[i].number_votes);/*
        alert( artists_nicknames[i]+'; votes='+nbr_of_votes[i]);*/
      }
/*      alert(artists_nicknames+" h "+nbr_of_votes);*/
      var chartdata = {
        labels: artists_nicknames,
        datasets : [
          {
            label: 'votes',
            backgroundColor: 'rgba(82, 163, 129, 1)',
            borderColor: 'rgba(82, 163, 129, 1)',
            hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
            hoverBorderColor: 'rgba(82, 163, 129, 1)',
            data : nbr_of_votes
          }
        ]
      };
     /* alert(chartdata);*/
      var ctx = $("#amusic");
      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata,
        option:{

           scales: {
        yAxes: [{
            display: true,
            ticks: {
                beginAtZero: true   // minimum value will be 0.
            }
        }]
    }

        }
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
        </script>