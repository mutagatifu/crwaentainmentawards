$(document).ready(function(){

    fetch_data();

    function fetch_data()
    {
        var dataTable = $('#user_data').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "ajax" : {
                url:"fetch.php",
                type:"POST"
            }
        });
    }

    function update_data(row_id, artName_val, firstName_val, lastName_val, gender_val, email_val, phoneNumb_val, shortDesc_val)
    {
        $.ajax({
            url:"editartist.php",
            method:"POST",
            data:{row_id:id,
                artName_val:nick_name,
                firstName_val:first_name,
                lastName_val:last_name,
                gender_val:gender,
                email_val:email_val,
                phoneNumb_val:telephone,
                shortDesc_val:text
            },
            success:function(data)
            {
                $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                $('#user_data').DataTable().destroy();
                fetch_data();
            }
        });
        setInterval(function(){
            $('#alert_message').html('');
        }, 5000);
    }

    $(document).on('blur', '.update', function(){
        var row_id = $(this).data("id");
        var artName_val = $(this).data("name");
        var firstName_val = $(this).data("name");
        var lastName_val = $(this).data('lastName');
        var gender_val = $(this).data("gender");
        var email_val = $(this).data("email_val");
        var phoneNumb_val = $(this).data("telephone");
        var shortDesc_val  = $(this).data("text")
        update_data(row_id, artName_val, firstName_val, lastName_val, gender_val, email_val, phoneNumb_val, shortDesc_val);
    });

    $('#add').click(function(){
        var html = '<tr>';
        html += '<td contenteditable id="data1"></td>';
        html += '<td contenteditable id="data2"></td>';
        html += '<td contenteditable id="data3"></td>';
        html += '<td contenteditable id="data4"></td>';
        html += '<td contenteditable id="data5"></td>';
        html += '<td contenteditable id="data6"></td>';
        html += '<td contenteditable id="data7"></td>';
        html += '<td contenteditable id="data8"></td>';
        html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
        html += '</tr>';
        $('#user_data tbody').prepend(html);
    });

    $(document).on('click', '#insert', function(){
        var artist_nickname = $('#data1').text();
        var artist_first_name = $('#data2').text();
        var artist_last_name = $('#data3').text();
        var artist_gender = $('#data4').text();
        var artist_email = $('#data5').text();
        var artist_phone_number = $('#data6').text();
        var artist_short_desc = $('#data7').text();


            $.ajax({
                url:"appJsAddEditArtists",
                method:"POST",
                data:{artist_nickname:artist_nickname, artist_first_name:artist_first_name, artist_last_name:  artist_last_name, artist_gender: artist_gender, artist_email: artist_email, artist_phone_number:artist_phone_number, artist_short_desc:artist_short_desc },
                success:function(data)
                {
                    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                    $('#user_data').DataTable().destroy();
                    fetch_data();
                }
            });
            setInterval(function(){
                $('#alert_message').html('');
            }, 5000);

    });

    $(document).on('click', '.delete', function(){
        var id = $(this).attr("id");
        if(confirm("Are you sure you want to remove this?"))
        {
            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                    $('#user_data').DataTable().destroy();
                    fetch_data();
                }
            });
            setInterval(function(){
                $('#alert_message').html('');
            }, 5000);
        }
    });
});


$("#send").on("click", function(){

    alert("Yes");


});

