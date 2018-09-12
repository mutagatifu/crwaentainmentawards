
//making fetch sub category
$(".cat").on("change",function(){
    //get change item or id
    const anonymous=$(".cat").val();
    //@empty subcategory
    $(".subCat").empty();
    //@making ajax request
    $.ajax({
        type:"POST",
        url:'fetchArtists.php',
        data:"data="+anonymous,
        dataType:"json",
        success:function(data){
            $(".subCat").append("<option> --Select-- </option>");
            for(var i in data){
                $(".subCat").append("<option value="+data[i].id+">"+data[i].subcategory_name+"</option>");
            }
        }
    })
});

