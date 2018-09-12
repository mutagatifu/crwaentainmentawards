
//making fetch sub category
$(".cat").on("change",function(){
    //get change item or id
    const anonymous=$(".cat").val();
    //@empty category
    $(".Cat").empty();
    //@making ajax request
    $.ajax({
        type:"POST",
        url:'fetchCategory.php',
        data:"data="+anonymous,
        dataType:"json",
        success:function(data){
            $(".Cat").append("<option> --Select-- </option>");
            for(var i in data){
                $(".cat").append("<option value="+data[i].id+">"+data[i].category_name+"</option>");
                $(".profile").append("<option value="+data[i].id+">"+data[profile].profile_name+"</option>");

            }
        }
    })
});

$('artist').on('change', function () {
    //get change on artist category id or item
    const  anonymous=$('.cat').val();
    // making ajax retrieve the artist category
    $.ajax({
        type:'POST',
        url: "fetchArtist.php",
        data:'data='+anonymous,
        dataType: 'json',


        $("#filters").on('click', '.onArtist-filter',
                function() {
            $('.artistCategory').filter('.onArtist')
           //add class to these artist categories


        $(document)

        }
        )
        };
    )

})


