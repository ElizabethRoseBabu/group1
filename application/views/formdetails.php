<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="get" >
	<table border="1">
		<tr>
			
			<th>FLIGHT NAME</th>
			<th>FLIGHT NUMBER</th>
			<th>DEPARTURE</th>
			<th>DEPARTURE DATE</th>
			<th>DEPARTURE TIME</th>
			<th>DESTINATION</th>
			<th>DESTINATION DATE</th>
			<th>DESTINATION TIME</th>
			<th>AVAILABLE BUSSINESS SEATS</th>
			<th>AVAILABLE  FIRST CLASS SEATS</th>
			<th>AVAILABLE ECONOMIC SEATS</th>
			<th>COST</th>
			<th>CLICK</th>
			

			
		</tr>
	</thead>
	
		<?php 
		if($n->num_rows()>0)
		{
			foreach ($n->result() as $row)
			 {
				
		?>
				<tr>
		
					<td><?php echo $row->airline;?></td>
					<td><?php echo $row->fl_number;?></td>
					<td><?php echo $row->departure;?></td>
					<td><?php echo $row->dep_date;?></td>
					<td><?php echo $row->dep_time;?></td>
					<td><?php echo $row->destination;?></td>
					<td><?php echo $row->dest_date;?></td>
					<td><?php echo $row->dest_time;?></td>
					<td><?php echo $row->baseat;?></td>
					<td><?php echo $row->faseat;?></td>
					<td><?php echo $row->easeat;?></td>
					<td><?php echo $row->cost;?></td>
					<td><a href="<?php echo base_url();?>/first/checking">BOOK NOW</a></td>
					

				</tr>
					<?php
		
		}
	}
		
		?>


</body>
</html>