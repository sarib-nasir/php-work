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

	$user_list = mysqli_query($conn,'SELECT * FROM organizers_data');		
	$new= array();
	
	while ($display = $user_list->fetch_assoc()){
		$new[$display['user_id']][$display['meta_key']] =$display['meta_value']; 
	}

	$event_display=array();
	
 ?>
<body>
	<div class="container mt-5">
		<table id="dataTable" class="table table-striped table-bordered table-hover" >
        	<thead class="thead-dark">
        		<tr>
        			<th class="text-capitalize">user id</th>
        			<th class="text-capitalize">firstname</th>
        			<th class="text-capitalize">lastname</th>
        			<th class="text-capitalize">type</th>
        			<th class="text-capitalize">email</th>
        			<th class="text-capitalize">phone</th>
        		</tr>
        	</thead>
        	<tbody>
        		<?php 
        		foreach($new as $hh){
					$event_display[$hh['email']] = $hh; 	
					$proper_display = $event_display[$hh['email']];
				
        		echo "
					<tr>
						<td class='text-capitalize'>".$proper_display['user_id']."</td>
	        			<td class='text-capitalize'>".$proper_display['firstname']."</td>
	        			<td class='text-capitalize'>".$proper_display['lastname']."</td>
	        			<td class='text-capitalize'>".$proper_display['acc_type']."</td>
	        			<td class=''>".$proper_display['email']."</td>
	        			<td class='text-capitalize'>".$proper_display['phone']."</td>
	        		</tr>
        		"; }?>
        	</tbody>
    	</table>
    	<a href="events.php" class="btn btn-sm btn-info">events data</a>
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