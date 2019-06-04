<?php 
   /* $conn = new mysqli("localhost","root","","chart");
    if (isset($_GET[''])) {
        # code...
    }
    $City = $_GET['city'];
    $pop = $_GET['pop'];
    $query = "SELECT * FROM population WHERE city='$city'";
    $result = mysqli_query($conn,$query);
    $data = mysqli_num_rows($result);
    $result1 = mysqli_fetch_assoc($data);*/
    
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
	<div class="row">
		<div class="col-sm-4" id="chart" style="height:20vh; width:35vw">
			<canvas id="myChart" ></canvas>
		</div>
	</div>
	<!-- <div class="chart-container" style="position: relative; height:40vh; width:80vw">
		    <canvas id="chart"></canvas>
		</div> -->
<script type="text/javascript" src="js/chart.min.js"></script>	
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 8, 9, 7, 15],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {}
});
</script>
</body>
</html>