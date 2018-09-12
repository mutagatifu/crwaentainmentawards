
//making fetch sub category
$(".cat").on("change",function(){
	//get change item or id
	const anonymous=$(".cat").val();
	//@empty subcategory
	$(".subCat").empty();
	//@making ajax request
	$.ajax({
		type:"POST",
		url:'fetchCategory.php',
		data:"data="+anonymous,
		dataType:"json",
		success:function(data){
			for(var i in data){
				$(".subCat").append("<option value="+data[i].id+">"+data[i].subcategory_name+"</option>");
			}
		}
	})
});

