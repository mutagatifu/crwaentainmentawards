$(document).ready(function(){
	$.ajax({
		url: "http://localhost/gentelella/production/controller/fetchartsubcat.php",
		method: "GET",
		dataType:"json",
		success: function(data) {
			console.log(data);
			//alert(data);
			var ids = [];
			var subcate = [];
				for(var i in data){
					ids.push(data[i].artists);
				subcate.push(data[i].subcat);
			}
			var chartdata = {
				labels:subcate,
				datasets : [
					{
						label: 'number of artists',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						jsonitem: ids
					}
				]
			};
			var ctx = $("#graphh");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(jsonarray) {
			console.log(data);
		}
	});
});