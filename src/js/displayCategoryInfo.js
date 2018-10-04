
//making fetch sub category
$(".cat").on("click",function(){
    //get change item or id
    const anonymous=$(".cat").val();
    $.(".displaycategoryInfo");
    //@empty subcategory
    $(".subCat").empty();
    //@making ajax request
    $.ajax({
        type:"POST",
        url:'fetchCategory.php',
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


var getLink = [];
getLink=document.getElementById("categoryLink");


for(var i=0; i<getLink.length(); i++){

    alert(getLink[i].content);
}




