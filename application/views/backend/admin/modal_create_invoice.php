<?php 
$edit_data		=	$this->db->get_where('student' , array('student_id' => $param2) )->result_array();
?>

<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php foreach($edit_data as $row):?>
        <?php echo form_open('admin/invoice/do_create/'.$row['student_id'], array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('student');?></label>
                    <div class="col-sm-5">
                        <select name="student_id" class="form-control" style="width:400px;" >
                            <?php 
                            $this->db->order_by('class_id','asc');
                            $students = $this->db->get('student')->result_array();
                            foreach($students as $row2):
                            ?>
                                <option value="<?php echo $row2['student_id'];?>"
                                    <?php if($row['student_id']==$row2['student_id'])echo 'selected';?>>
                                    class <?php echo $this->crud_model->get_class_name($row2['class_id']);?> -
                                    roll <?php echo $row2['roll'];?> -
                                    <?php echo $row2['name'];?>
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
                        <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('description');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="description" value="<?php echo $row['description'];?>"/>
                    </div>
                </div>
        <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('add_fee');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="add_feee" value="<?php echo $row['add_fee'];?>"/>
                    </div>
                </div>
        <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('security_fee');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="security_fee" value="<?php echo $row['security_fee'];?>"/>
                    </div>
                </div>
        <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('tuition_fee');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="tuition_fee" value="<?php echo $row['tuition_fee'];?>"/>
                    </div>
                </div>
        <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('annual_fee');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="annual_fee" value="<?php echo $row['annual_fee'];?>"/>
                    </div>
                </div>
        <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('stationary_fee');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="stationary_fee" value="<?php echo $row['stationary_fee'];?>"/>
                    </div>
                </div>
        <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('multimedia_fee');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="multimedia_fee" value="<?php echo $row['multimedia_fee'];?>"/>
                    </div>
                </div>
         <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('others');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="others" value="<?php echo $row['others'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('amount');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="amount" value="<?php echo $row['amount'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('status');?></label>
                    <div class="col-sm-5">
                        <select name="status" class="form-control">
                            <option value="paid" <?php if($row['status']=='paid')echo 'selected';?>><?php echo get_phrase('paid');?></option>
                            <option value="unpaid" <?php if($row['status']=='unpaid')echo 'selected';?>><?php echo get_phrase('unpaid');?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('date');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="datepicker form-control" name="date" 
                            value="<?php echo date('m/d/Y', $row['creation_timestamp']);?>"/>
                    </div>

                </div>
        <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('Due Date');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="datepicker form-control" name="due_date" 
                            value="<?php echo date('m/d/Y', $row['due_date']);?>"/>
                    </div>

                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-5">
                      <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_invoice');?></button>
                  </div>
                </div>
        </form>
        <?php endforeach;?>
    </div>
</div>