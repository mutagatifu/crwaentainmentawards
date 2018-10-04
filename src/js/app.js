/*/*/*/*/*/*/*$(document).ready(function(){
	$.ajax({
		url: "http://localhost/gentelella/production/fetchartsubcat.php",
		method: "GET",
		dataType:"json",
		success: function(data) {
			var subcategory = [];
			var nbr_of_artists = [];
			for(var i in data) {
				subcategory.push(data[i].subcat);
				nbr_of_artists.push(data[i].artid);
			}
			var chartdata = {
				labels: subcategory,
				datasets : [
					{
						label: 'artists',
						backgroundColor: 'rgba(82, 163, 129, 1)',
						borderColor: 'rgba(82, 163, 129, 1)',
						hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
						hoverBorderColor: 'rgba(82, 163, 129, 1)',
						data : nbr_of_artists
					}
				]
			};
			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				option:{
					scales: {
						yAxes:[{
							ticks:{
								beginAtZero:true,
								min:0,
								max:10
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});

 /*subcategories in categories */


/*number of artists in subcategories of music */

/*$(".cat").on('change',function(){
	var category_id=$(".cat").val();

	alert("Cateogry values");
	$.ajax({
		url: "http://localhost/gentelella/production/controller/fetartinmusic.php",
		method: "POST",
		dataType:"json",
		data:"category_id="+category_id,
		success: function(data) {
			var subcategory = [];
			var nbr_of_artists = [];

			for(var i in data) {
				subcategory.push(data[i].subcategory_name);
				nbr_of_artists.push(data[i].art_number);
			}

			var chartdata = {
				labels: subcategory,
				datasets : [
					{
						label: 'musicians',
						backgroundColor: 'rgba(82, 163, 129, 1)',
						borderColor: 'rgba(82, 163, 129, 1)',
						hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
						hoverBorderColor: 'rgba(82, 163, 129, 1)',
						data : nbr_of_artists
					}
				]
			};
			var ctx = $("#amusic");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				option:{
					scales: {
						yAxes:[{
							ticks:{
								beginAtZero:true,
								min:0,
								max:100
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});*/
/*number of artists in subcategories of media */
/*$(document).ready(function(){
	$.ajax({
		url: "http://localhost/gentelella/production/controller/fetartinmedia.php",
		method: "GET",
		dataType:"json",
		success: function(data) {
			var subcategory = [];
			var nbr_of_artists = [];

			for(var i in data) {
				subcategory.push(data[i].subcategory_name);
				nbr_of_artists.push(data[i].art_number);
			}
			var chartdata = {
				labels: subcategory,
				datasets : [
					{
						label: 'media_presenters',
						backgroundColor: 'rgba(82, 163, 129, 1)',
						borderColor: 'rgba(82, 163, 129, 1)',
						hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
						hoverBorderColor: 'rgba(82, 163, 129, 1)',
						data : nbr_of_artists
					}
				]
			};
			var ctx = $("#amedia");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				option:{
					scales: {
						yAxes:[{
							ticks:{
								beginAtZero:true,
								min:0,
								max:100
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});

*/
/*number of artists in subcategories of comedy */

/*$(document).ready(function(){
	$.ajax({
		url: "http://localhost/gentelella/production/controller/fetartincomedy.php",
		method: "GET",
		dataType:"json",
		success: function(data) {
			var subcategory = [];
			var nbr_of_artists = [];

			for(var i in data) {
				subcategory.push(data[i].subcategory_name);
				nbr_of_artists.push(data[i].art_number);
			}

			var chartdata = {
				labels: subcategory,
				datasets : [
					{
						label: 'artists',
						backgroundColor: 'rgba(82, 163, 129, 1)',
						borderColor: 'rgba(82, 163, 129, 1)',
						hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
						hoverBorderColor: 'rgba(82, 163, 129, 1)',
						data : nbr_of_artists
					}
				]
			};
			var ctx = $("#acomedy");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				option:{
					scales: {
						yAxes:[{
							ticks:{
								beginAtZero:true,
								min:0,
								max:100
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});*/
/*number of artists in subcategories of fashion */

/*$(document).ready(function(){
	$.ajax({
		url: "http://localhost/gentelella/production/controller/fetartinfashion.php",
		method: "GET",
		dataType:"json",
		success: function(data) {
			var subcategory = [];
			var nbr_of_artists = [];
			for(var i in data) {
				subcategory.push(data[i].subcategory_name);
				nbr_of_artists.push(data[i].art_number);
			}
			var chartdata = {
				labels: subcategory,
				datasets : [
					{
						label: 'models',
						backgroundColor: 'rgba(82, 163, 129, 1)',
						borderColor: 'rgba(82, 163, 129, 1)',
						hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
						hoverBorderColor: 'rgba(82, 163, 129, 1)',
						data : nbr_of_artists
					}
				]
			};
			var ctx = $("#afashion");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				option:{
					scales: {
						yAxes:[{
							ticks:{
								beginAtZero:true,
								min:0,
								max:100
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
*/

/*number of artists in subcategories of fashion */

/*$(document).ready(function(){
	$.ajax({
		url: "http://localhost/gentelella/production/controller/fetartindance.php",
		method: "GET",
		dataType:"json",
		success: function(data) {
			var subcategory = [];
			var nbr_of_artists = [];
			for(var i in data) {
				subcategory.push(data[i].subcategory_name);
				nbr_of_artists.push(data[i].art_number);
			}
			var chartdata = {
				labels: subcategory,
				datasets : [
					{
						label: 'Dancers',
						backgroundColor: 'rgba(82, 163, 129, 1)',
						borderColor: 'rgba(82, 163, 129, 1)',
						hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
						hoverBorderColor: 'rgba(82, 163, 129, 1)',
						data : nbr_of_artists
					}
				]
			};
			var ctx = $("#adance");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				option:{
					scales: {
						yAxes:[{
							stacked:true,
							gridLines:{
								display:false
							}
						}],
						xAxes:[{
							gridLines:{
								display:false
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
*/
/*/*artists and votes */

/*$(document).ready(function(){
	$.ajax({
		url: "http://localhost/gentelella/production/controller/fetallvotes.php",
		method: "GET",
		dataType:"json",
		success: function(data) {
			var nick = [];
			var votes = [];
			
		for(var i in data) {
				nick.push(data[i].nickname);
				votes.push(data[i].number_votes);
			}
			var chartdata = {
				labels: nick,
				datasets : [
					{
						label: 'votes',
						backgroundColor: 'rgba(82, 163, 129, 1)',
						borderColor: 'rgba(82, 163, 129, 1)',
						hoverBackgroundColor: 'rgba(82, 163, 129, 1)',
						hoverBorderColor: 'rgba(82, 163, 129, 1)',
						data : votes
					}
				]
			};
			var ctx = $("#avotes");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				option:{
					scales: {
						yAxes:[{
							stacked:true,
							gridLines:{
								display:false
							}
						}],
						xAxes:[{
							gridLines:{
								display:false
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});*/