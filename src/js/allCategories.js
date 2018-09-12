

$(".cat").on("change", function() {
    //get change item or id
    const anonymous=$(".cat").val();
    //empty subcategory
    $("subCat").empty();
    //making ajax request
    $.ajax(
        type:"POST",
        url:"fecthArtists.php",
        data:"data="+anonymous,
        dataType:"json",
        success:function(data){
        $(".subCat").append("<option> --Select-- </option>");
        for(var i in data){
            $(".subCat").append("<option value="+data[i].id+">"+data[i].subcategory_name+"</option>");
        }




        $("category").click(function(){
        });
        $("category=".sub(
            function(data){
                // GET subcategory from its  category
                success:function(data){
                    $(".subCat").append();
                    for(var i in data){
                        $(".subCat").append("<option value="+data[i].id+ data[j].id++">"+data[i].subcategory_name+"</option>");
                    }
                }
            }
        ))

        $("subCategory").click(function(){
            $("p").show();
        });
        $("p").hide();
        }
)

});
