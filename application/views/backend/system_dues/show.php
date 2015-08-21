<html>
	<head>
		<title>System Dues List</title>
	</head>

	<body>

		
		<table border="1" style="width:80%">
			<tr>
				<th>ID</th>
				<th>System Dues Name</th>
				<th>System Dues Description</th>
				<th>Class</th>
				<th>Due Date</th>
				<th>Action</th>
			</tr>
			<tr>
				<?php foreach ($query as $row) { ?>
				
					<td> <?php echo $row['ID']; ?> </td>
					<td> <?php echo $row['system_due_name']; ?> </td>
					<td> <?php echo $row['system_due_desc']; ?></td>
					<td> <?php echo $row['class_id']; ?> </td>
					<td> <?php echo $row['due_date']; ?> </td>
					<td> 
						<a href=<?php echo base_url() . 'index.php?' . "system_dues/edit/" . $row['ID'];?>> Edit </a>
						<a href=<?php echo base_url() . 'index.php?' . "system_dues/delete/" . $row['ID'];?>> Delete </a>
					</td>
				
			</tr>
			<?php } ?>
		</table>
		<a href=<?php echo base_url() . 'index.php?/system_dues/add'  ?>><button style="margin-left:1220;">Add</button>
		</a>



	</body>
</html>