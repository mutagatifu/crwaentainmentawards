
// Waiting to be tested
var current_page = 1;
var numPages = 20;

// previous page
$(".prevpage").on('click', function prevPage(){
    $(".artists").empty();

    if (current_page > 1) {
        current_page--;
        changePage(current_page);
        $.ajax({
            type: "POST",
            url: 'fetchartipagen.php',
            data: "page_number=" + current_page,
            dataType: "json",
            cache: false,
            success: function (data) {
                for (var i in data) {
                    $(".artists").append('<tr><td> <input type="hidden" value="'+data[i].id+'" id="'+data[i].id+'"><img  src="images/user.png" class="avatar" alt="Avatar" /></td></td><td><p> ' +data[i].nickname +'</p></td><td><p>' +data[i].last_name + '</p></td><td><p>' +data[i].first_name+ '</p></td><td><p>' +data[i].gender+ '</p></td><td><p>' +data[i].email+'</p></td><td><p>' +data[i].phone+ '</p></td><td><p>' +data[i].category_name +'</p></td><td><p>' +data[i].datecreated+'</p></td><td> <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal'+i+'">Edit</a></button> <button type="button" class="btn btn-info btn-sm" >Delete</button> <div class="modal fade" id="myModal'+i+'" role="dialog">');

                }
            }


        });
    }
});
// next page
$(".nextpage").on('click', function nextPage(){

    $(".artists").empty();

    if (current_page < numPages) {
        current_page++;
        changePage(current_page);
        $.ajax({
            type: "POST",
            url: 'fetchartipagen.php',
            data: "page_number=" + current_page,
            dataType: "json",
            cache: false,
            success: function (data) {
                for (var i in data) {
                    $(".artists").append('<tr><td> <input type="hidden" value="'+data[i].id+'" id="'+data[i].id+'"><img  src="images/user.png" class="avatar" alt="Avatar" /></td></td><td><p> ' +data[i].nickname +'</p></td><td><p>' +data[i].last_name + '</p></td><td><p>' +data[i].first_name+ '</p></td><td><p>' +data[i].gender+ '</p></td><td><p>' +data[i].email+'</p></td><td><p>' +data[i].phone+ '</p></td><td><p>' +data[i].category_name +'</p></td><td><p>' +data[i].datecreated+'</p></td><td> <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal'+i+'">Edit</a></button> <button type="button" class="btn btn-info btn-sm" >Delete</button> <div class="modal fade" id="myModal'+i+'" role="dialog">');

                }
            }


        });
    }
});
function changePage(page)
{
    var btn_next = document.getElementById("btn_next");
    var btn_prev = document.getElementById("btn_prev");

    // Validate page
    if (page < 1)
        page = 1;

    if (page == 1) {
        btn_prev.style.visibility = "hidden";
    } else {
        btn_prev.style.visibility = "visible";
    }

    if (page == numPages) {
        btn_next.style.visibility = "hidden";
    } else {
        btn_next.style.visibility = "visible";
    }
}



window.onload = function() {
    changePage(1);
};


// Waiting to be tested

