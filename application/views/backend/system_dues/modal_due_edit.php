<?php 
foreach ( $query as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Edit Due');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open('system_dues/update/' . $row['ID'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Due Name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="system_due_name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['system_due_name'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Due Description');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="system_due_desc" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['system_due_desc'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                        
						<div class="col-sm-5">
							<select name="class_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
										$classes = $this->db->get('class')->result_array();
										foreach($classes as $row2):
											?>
                                    		<option value="<?php echo $row2['class_id'];?>"
                                            	<?php if($row['class_id'] == $row2['class_id'])echo 'selected';?>>
														<?php echo $row2['name'];?>
                                                    </option>
                                        <?php
										endforeach;
								  ?>
                          </select>
						</div> 
					</div>

					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Due Date');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="due_date" value="<?php echo $row['due_date'];?>" data-start-view="2">
						</div> 
					</div>
                     
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('Save');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>