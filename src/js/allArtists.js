

    //alert(document.getElementById("category_id").value());
    const anonymous=$(".artists").val();
    //@empty subcategory
    $(".artists").empty();
    //@making ajax request
    $.ajax({
        type:"POST",
        url:'allArtists.php',
        data:"category_id="+anonymous,
        dataType:"json",
        cache: false,
        success:function(data){

            alert("Yes");
            for(var i in data){
                $(".artists").append('<tr><td><img  src="images/user.png" class="avatar" alt="Avatar" /></td></td><td><p> '+data[i].nickname+'</p></td><td><p>" +'+data[i].first_name+'</p></td><td><p>'+data[$i].last_name+'</p></td><td><p>'+data[i].gender+'</p></td><td><p>'+data[i].emails+'</p></td><td><p>'+data[i].phones+ '</p></td><td><p>'+data[i].category_name+'</p></td><td><p>'+data[i].create_date+ '</p></td><td>'+
                    '<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal'+i+'">Edit</a></button> <button type="button" class="btn btn-info btn-sm" >Delete</button>' +
                    ' <div class="modal fade" id="myModal'+i+'" role="dialog">'+
                    '<div class="modal-dialog">\n' +
                    '\n' +
                    '            <!-- Modal content-->\n' +
                    '            <div class="modal-content">\n' +
                    '                <div class="modal-body">\n' +
                    '                    <div class="row">\n' +
                    '                        <div class="col-md-12 col-sm-12 col-xs-12">\n' +
                    '                            <div class="x_panel">\n' +
                    '                                <div class="x_content">\n' +
                    '\n' +
                    '                                    <form class="form-horizontal form-label-left" novalidate>\n' +
                    '                                        <div class="item form-group">\n' +
                    '                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Profile <span class="required">*</span>\n' +
                    '                                            </label>\n' +
                    '                                            <div class="col-md-6 col-sm-6 col-xs-12">\n' +
                    '                                                <img  src="images/user.png" class="avatar" alt="Avatar" />\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="item form-group">\n' +
                    '                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Artist Name <span class="required">*</span>\n' +
                    '                                            </label>\n' +
                    '                                            <div class="col-md-6 col-sm-6 col-xs-12">\n' +
                    '                                                <input type="email" id="name" name="nickname"  required="required" value="'+data[i].nickname+'"class="form-control col-md-7 col-xs-12">\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="item form-group">\n' +
                    '                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>\n' +
                    '                                            </label>\n' +
                    '                                            <div class="col-md-6 col-sm-6 col-xs-12">\n' +
                    '                                                <input type="email" id="name" name="last_name"   required="required" value="'+data[i].last_name+'" class="form-control col-md-7 col-xs-12">\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="item form-group">\n' +
                    '                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Surname <span class="required">*</span>\n' +
                    '                                            </label>\n' +
                    '                                            <div class="col-md-6 col-sm-6 col-xs-12">\n' +
                    '                                                <input type="email" id="name" name="first_name" value="'+ data[i].first_name+'" required="required" class="form-control col-md-7 col-xs-12">\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="item form-group">\n' +
                    '                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Gender <span class="required">*</span>\n' +
                    '                                            </label>\n' +
                    '                                            <div class="col-md-6 col-sm-6 col-xs-12">\n' +
                    '                                                <div class="form-group">\n' +
                    '                                                    <select class="form-control" name="gender">\n' +
                    '\n' +
                    '                                                        <option value="\' . $row->gender. \'">'+ data[i].gender+' </option>\n' +
                    '                                                        <option value="Female"> Female </option>\n' +
                    '\n' +
                    '\n' +
                    '\n' +
                    '\n' +
                    '                                                    </select>\n' +
                    '                                                </div>\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '\n' +
                    '\n' +
                    '\n' +
                    '                                        <div class="item form-group">\n' +
                    '                                            <label for="password" class="control-label col-md-3">Email</label>\n' +
                    '                                            <div class="col-md-6 col-sm-6 col-xs-12">\n' +
                    '                                                <input id="password" type="email" name="email" data-validate-length="6,8" value="'+ data[i].emails +'" "class="form-control col-md-7 col-xs-12" required="required">\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="item form-group">\n' +
                    '                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>\n' +
                    '                                            </label>\n' +
                    '                                            <div class="col-md-6 col-sm-6 col-xs-12">\n' +
                    '                                                <input type="tel" id="telephone" name="phone" value="'+ data[i].phones+'" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="item form-group">\n' +
                    '                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Short Description <span class="required">*</span>\n' +
                    '                                            </label>\n' +
                    '                                            <div class="col-md-6 col-sm-6 col-xs-12">\n' +
                    '                                                <textarea id="textarea" required="required" name="descript" class="form-control col-md-7 col-xs-12"></textarea>\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="ln_solid"></div></td></tr>');
            }
        }
    });


