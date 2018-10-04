$(".cat").on("change",function(){
	//get change item or id
	//alert(document.getElementById("category_id").value());
	const anonymous=$(".cat").val();
//@empty subcategory
	$(".subCat").empty();
	//@making ajax request
	$.ajax({
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
	});
     $(".artist_info").empty();
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
                        "                          <img src=\"images/user.png\" alt=\"...\" class=\"img-circle profile_img\">\n" +
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
   /* $(".artist_info").empty();
    if(anonymous==0){
        alert(anonymous)
       $.ajax({
           type: "POST",
           url: 'getAllArtists.php',

           success: function (response) {

               for (var i in response) {
                    alert(response[i].nickname);
               }


               }

           });

    }
    else {
*/
       /* $.ajax({
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
                        "                          <img src=\"images/user.png\" alt=\"...\" class=\"img-circle profile_img\">\n" +
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

    }*/

    /*$.ajax({
        type:"POST",
        url:'fetchArtistsBySubCategory.php',
        data:"category_id="+anonymous,
        dataType:"json",
        cache: false,
        success:function(data){
            /!*$(".artist_info").clean();*!/
            for(var i in data){

                $(".artist_info").append("<div class=\"col-md-3\">\n" +
                    "                  <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">\n" +
                    "                    <div class=\"x_panel fixed_height_390\">\n" +
                    "                      <div class=\"x_content\">\n" +
                    "                        <div class=\"flex\">\n" +
                    "                          <img src=\"images/user.png\" alt=\"...\" class=\"img-circle profile_img\">\n" +
                    "                        </div>\n" +
                    "\n" +
                    "                        <h3 class=\"name\">"+data[i].nickname+"</h3>\n" +
                    "                        <p>\n" + data[i].email + "</p>\n"  +
                    "                      </div>\n" +
                    "                    </div>\n" +
                    "                  </div>\n" +
                    "                  <div class=\"clearfix\"></div>\n" +
                    "                </div>");
            }
        }

    });*/


});

$(".subCat").on("change",function(){
    //get change item or id

    //alert(document.getElementById("category_id").value());
    var sub_id=$(".subCat").val();

    /*	alert(anonymous);*/
    //@empty subcategory
    $(".artist_info").empty();
    //@making ajax request


    if(sub_id==0){
        $.ajax({
            type: "POST",
            url: 'getAllArtists.php',
            success: function (response) {
                for (var i in response) {
                    alert(response[i].nickname);
                }
            }

        });
    }
    else {

        $.ajax({
            type: "POST",
            url: 'fetchSubcategoryByCategory.php',
            data: "subcategory_id="+sub_id,
            dataType: "json",
            cache: false,
            success: function (data) {
                for (var i in data) {
                    $(".artist_info1").append("<div class=\"col-md-3\">\n" +
                        "                  <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">\n" +
                        "                    <div class=\"x_panel fixed_height_390\">\n" +
                        "                      <div class=\"x_content\">\n" +
                        "                        <div class=\"flex\">\n" +
                        "                          <img src=\"images/user.png\" alt=\"...\" class=\"img-circle profile_img\">\n" +
                        "                        </div>\n" +
                        "\n" +
                        "                        <h3 class=\"name\">" + data[i].nickname + "</h3>\n" +
                        "                        <p>\n" + data[i].emails+ "</p>\n" +
                        "                      </div>\n" +
                        "                    </div>\n" +
                        "                  </div>\n" +
                        "                  <div class=\"clearfix\"></div>\n" +
                        "                </div>");
                }
            }
        });
    }

    /*$.ajax({
        type:"POST",
        url:'fetchArtistsBySubCategory.php',
        data:"category_id="+anonymous,
        dataType:"json",
        cache: false,
        success:function(data){
            /!*$(".artist_info").clean();*!/
            for(var i in data){

                $(".artist_info").append("<div class=\"col-md-3\">\n" +
                    "                  <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">\n" +
                    "                    <div class=\"x_panel fixed_height_390\">\n" +
                    "                      <div class=\"x_content\">\n" +
                    "                        <div class=\"flex\">\n" +
                    "                          <img src=\"images/user.png\" alt=\"...\" class=\"img-circle profile_img\">\n" +
                    "                        </div>\n" +
                    "\n" +
                    "                        <h3 class=\"name\">"+data[i].nickname+"</h3>\n" +
                    "                        <p>\n" + data[i].email + "</p>\n"  +
                    "                      </div>\n" +
                    "                    </div>\n" +
                    "                  </div>\n" +
                    "                  <div class=\"clearfix\"></div>\n" +
                    "                </div>");
            }
        }

    });*/


});





/*$('.cat').click(function() {
    var val1 = $('#category_id').val();
    //var val2 = $('page').val();
    alert('Hello World');
    $.ajax({
        type: 'POST',
        url: 'fetchCategory.php',
        data: { category_id: val1, page: val2},
        success: function(response) {
            $('content').html(response);
        }
    });
});
/!*$('.cat').on('change',function(){

});*!/
*/

/*


    $('.cat').on('change',function(){
    	var category_id=$("#category_id").val();
    	alert(category_id);
        $.ajax({
            url: 'fetchCategory.php',
            data: 'category_id='+category_id,
            type: 'POST',
			cache: false,
            success: function (data) {
               /!* var subcat = '<label>Sub Category</label>';*!/
              /!*  subcat += '<select name="subcatid" class="form-control">';*!/
				var subcat=$(".subcat");
                subcat.append( '<option value="0"> -- Subcategory -- </option>');
                data = $.parseJSON(data);
                $.each(data, function(i, item) {
                    subcat += '<option value="'+item.id+'">'+item.name+'</option>';
                });
                subcat += '</select>';
                $('div[id="subcat"]').html(subcat);


            }
        });
        /!*alert ("Hello world");*!/
        return false;
    });
*/

/*
$(".subCat").on("change",function() {
    //get change item or id

    //alert(document.getElementById("category_id").value());
    const anonymous = $(".subCat").val();
    //@empty subcategory
    alert( $(".artist_info").val());
    //@making ajax request
    $.ajax({
        type: "POST",
        url: 'fetchArtistsBySubCategory.php',
        data: "subcategory_id=" + anonymous,
        dataType: "json",
        cache: false,
        success: function (data) {

            for (var i in data) {

                $(".artist_info").append("<div class=\"col-md-3\">\n" +
                    "                  <div class=\"col-md-3 col-xs-12 widget widget_tally_box\">\n" +
                    "                    <div class=\"x_panel fixed_height_390\">\n" +
                    "                      <div class=\"x_content\">\n" +
                    "                        <div class=\"flex\">\n" +
                    "                          <img src=\"images/user.png\" alt=\"...\" class=\"img-circle profile_img\">\n" +
                    "                        </div>\n" +
                    "\n" +
                    "                        <h3 class=\"name\">" + data[i].nickname + "</h3>\n" +
                    "                        <p>\n" + data[i].email + "</p>\n" +
                    "                      </div>\n" + data[i].votes + "</div>\n" +
                    "                  </div>\n" +
                    "                  <div class=\"clearfix\"></div>\n" +
                    "                </div>");
            }
        }
    });
});
*/


$(".dance").on("click",function(){
    var category_id='2';
    alert(category_id);

});
$(".fashion").on("click",function(){
    var category_id='4';
    alert(category_id);

});
$(".media").on("click",function(){
    var category_id='5';
    alert(category_id);

});

$(".media").on("click",function(){
    var category_id='3';
    alert(category_id);

});






