<?php foreach ($query as $row) { ?>
	

<h3>Edit View</h3>

<?php echo form_open('system_dues/update/' .$row['ID'] );?>
<input type="text" name="ID" value=<?php echo $row['ID']; ?> ><br><br>
<input type="text" name="system_due_name" value=<?php echo $row['system_due_name']; ?>  ><br><br>
<input type="text" name="system_due_desc" value=<?php echo $row['system_due_desc']; ?>  ><br><br>
<input type="text" name="class_id" value=<?php echo $row['class_id']; ?>  ><br><br>
<input type="text" name="due_date" value=<?php echo $row['due_date']; }?>  ><br><br>
<input type="submit" value="Update Record">

<?php form_close();?>