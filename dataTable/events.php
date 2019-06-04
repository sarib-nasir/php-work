<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width ,initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<?php 
	$conn = mysqli_connect("localhost","root","","sponto");

	$event_list = mysqli_query($conn,'SELECT * FROM organizers_event ');		
	$new= array();
	
	while ($display = mysqli_fetch_assoc($event_list)){
		$new[$display['event_no']][$display['meta_key']] =$display['meta_value']; 
	}
	$event_display=array();
	
	
 ?>
<body>
	<div class="container mt-5 table-responsive-sm">
		<table id="dataTable" class="table table-striped table-bordered table-hover" >
        	<thead class="thead-dark">
        		<tr>
        			<th class="text-capitalize">event no</th>
        			<th class="text-capitalize">event name</th>
        			<th class="text-capitalize">event date</th>
        			<th class="text-capitalize">event type</th>
        			<th class="text-capitalize">event topic</th>
        			<th class="text-capitalize">location</th>
        			<th class="text-capitalize">latitude</th>
        			<th class="text-capitalize">longitude</th>
        			<th class="text-capitalize">attendees</th>
        			<th class="text-capitalize">budget</th>
        		</tr>
        	</thead>
        	<tbody>
        		<?php 
        		foreach($new as $hh){
					$event_display[$hh['eventName']] = $hh;
					$proper_display = $event_display[$hh['eventName']];
				
        		echo "
					<tr>
						<td class='text-capitalize'>".$proper_display['event_no']."</td>
	        			<td class='text-capitalize'>".$proper_display['eventName']."</td>
	        			<td class='text-capitalize'>".$proper_display['eventDate']."</td>
	        			<td class='text-capitalize'>".$proper_display['eventType']."</td>
	        			<td class='text-capitalize'>".$proper_display['eventTopic']."</td>
	        			<td class='text-capitalize'>".$proper_display['location']."</td>
	        			<td class='text-capitalize'>".$proper_display['lat']."</td>
	        			<td class='text-capitalize'>".$proper_display['lng']."</td>
	        			<td class='text-capitalize'>".$proper_display['max_attendees']."</td>
	        			<td class='text-capitalize'>".$proper_display['max_price']."</td>
	        		</tr>
        		"; }?>
        	</tbody>
    	</table>
    	<a href="events.php" class="btn btn-sm btn-info"></a>
	</div>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#dataTable').DataTable();
		});
	</script>
</body>
</html>