    <div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Add Fee');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open('admin/payment/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Student');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="student_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Payment for ');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="payment_type_id" value="" >
						</div> 
					</div>
                            
                            
                            
                            
                            		<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Amount');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="amount" value="" >
						</div> 
					</div>
                            
                            
                            
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Date');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="date" value="" data-start-view="2">
						</div> 
					</div>
					
					
					
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('Add holiday');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>