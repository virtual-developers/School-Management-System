
<?php 
$parent_information	=	$this->db->get_where('parent' , array('parent_id' => $param2) )->result_array();
foreach($parent_information as $row):
	$student_id		=	$row['student_id'];

?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title">
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_form');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open('admin/parent/do_update/'.$row['parent_id'].'/'.$param3 , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('parent_of');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly
                            	value="<?php echo $this->db->get_where('student', array('student_id'=>$student_id))->row()->name;?>">
						</div>
					</div>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" 
                            	value="<?php echo $row['name'];?>">
						</div>
					</div>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" 
                            	value="<?php echo $row['email'];?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="password" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('relation_with_student');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="relation_with_student" value="<?php echo $row['relation_with_student'];?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('profession');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="profession" value="<?php echo $row['profession'];?>">
						</div>
					</div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-default"><?php echo get_phrase('edit_parent');?></button>
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