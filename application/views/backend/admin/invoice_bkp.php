<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo get_phrase('invoice/payment_list');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_invoice/payment');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------->
		<div class="tab-content">
            <!----TABLE LISTING STARTS--->
            <div class="tab-pane box active" id="list">
				
                <table  class="table table-bordered datatable" id="table_export">
                	<thead>
                                        <tr>
                    		<th><div><?php echo get_phrase('student');?></div></th>
                    		<th><div><?php echo get_phrase('title');?></div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('amount');?></div></th>
                    		<th><div><?php echo get_phrase('status');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
			</thead>
                    <tbody>
                    	<?php foreach($invoices as $row):?>
                        <tr>
				<td><?php echo $this->crud_model->get_type_name_by_id('student',$row['student_id']);?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo $row['amount'];?></td>
				<td>
				<span class="label label-<?php if($row['status']=='paid')echo 'success';else echo 'secondary';?>"><?php echo $row['status'];?></span>
				</td>
				<td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
				<td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    
                                    <!-- VIEWING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_view_invoice/<?php echo $row['invoice_id'];?>');">
                                            <i class="entypo-credit-card"></i>
                                                <?php echo get_phrase('view_invoice');?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>
                                    
                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_invoice/<?php echo $row['invoice_id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo get_phrase('edit');?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>
                                    
                                    <!-- DELETION LINK -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/invoice/delete/<?php echo $row['invoice_id'];?>');">
                                            <i class="entypo-trash"></i>
                                                <?php echo get_phrase('delete');?>
                                            </a>
                                                    </li>
                                </ul>
                            </div>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open('admin/invoice/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('student');?></label>
                                <div class="col-sm-5">
                                    <select name="student_id" class="form-control" style="width:400px;" >
                                    	<?php 
										$this->db->order_by('class_id','asc');
										$students = $this->db->get('student')->result_array();
										foreach($students as $row):
										?>
                                    		<option value="<?php echo $row['student_id'];?>">
                                                class <?php echo $this->crud_model->get_class_name($row['class_id']);?> -
                                                roll <?php echo $row['roll'];?> -
												<?php echo $row['name'];?>
                                            </option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('title');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="title"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('description');?></label>
                                <div class="col-sm-5">
                                    <select name="description" class="form-control" style="width:100%;">
                                    	<option value="January"><?php echo get_phrase('January');?></option>
                                        <option value="February"><?php echo get_phrase('February');?></option>
                                        <option value="March"><?php echo get_phrase('March');?></option>
                                        <option value="April"><?php echo get_phrase('April');?></option>
                                        <option value="May"><?php echo get_phrase('May');?></option>
                                        <option value="June"><?php echo get_phrase('June');?></option>
                                        <option value="July"><?php echo get_phrase('July');?></option>
                                        <option value="August"><?php echo get_phrase('August');?></option>
                                        <option value="September"><?php echo get_phrase('September');?></option>
                                        <option value="October"><?php echo get_phrase('October');?></option>
                                        <option value="November"><?php echo get_phrase('November');?></option>
                                        <option value="December"><?php echo get_phrase('December');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('amount');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="amount"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('status');?></label>
                                <div class="col-sm-5">
                                    <select name="status" class="form-control" style="width:100%;">
                                    	<option value="paid"><?php echo get_phrase('paid');?></option>
                                        <option value="unpaid"><?php echo get_phrase('unpaid');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('date');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="date"/>
                                </div>
                            </div>
                        		<div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo get_phrase('add_invoice');?></button>
                              </div>
								</div>
                    	</form>                
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>

