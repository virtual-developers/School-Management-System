<?php echo form_open('system_dues/add/create');?>

<label>System Dues Name</label>
<input type="text" name="system_due_name" ></br>

<?php echo form_label('System Dues Description')?>
<input type="text" name="system_due_desc" ></br>

<?php echo form_label('Class ID')?>
<input type="text" name="class_id" ></br>

<label>Apply Date</label>
<input type="date" name="due_date" ></br>

<button type="submit">Save Settings</button>

<php echo form_close();?>