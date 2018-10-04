$(document).ready(function(){
	$.ajax({
		url: "http://localhost/gentelella/production/controller/fetchartsubcat.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var player = [];
			var score = [];
			for(var i in data) {
				player.push("Player " + data[i].artist);
				score.push(data[i].subcategory_name);
			}
			var chartdata = {
				labels: player,
				datasets : [
					{
						label: 'Player Score',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};
			var ctx = $("#mycanvas");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});