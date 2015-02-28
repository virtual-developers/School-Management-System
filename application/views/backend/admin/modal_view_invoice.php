<?php 
$edit_data		=	$this->db->get_where('invoice' , array('invoice_id' => $param2) )->result_array();
?>

<div class="tab-pane box active" id="edit" style="padding: 20px">
    <div class="box-content">
        <?php foreach($edit_data as $row):?>
        
        <div class="centered">
			<span style="font-size:20px;font-weight:200;">
				<?php echo get_phrase('Invoice #');?>
            </span>
            <br />
            <?php echo get_phrase('SN');?> / <?php echo $this->db->get_where('student' , array('student_id'=>$row['student_id']))->row()->class_id;?> - <?php echo $this->db->get_where('student' , array('student_id'=>$row['student_id']))->row()->roll;?>/<?php echo date('dmy', $this->db->get_where('invoice' , array('student_id'=>$row['student_id']))->row()->creation_timestamp);?>
            <br />
            
        </div>
        <br />
        <div class="pull-left">
			<span style="font-size:20px;font-weight:200;">
				<?php echo get_phrase('School_Name');?>
            </span>
            <br />
            <?php echo $this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;?>
            <br />
            <?php echo $this->db->get_where('settings' , array('type'=>'address'))->row()->description;?>
        </div>
        <div class="pull-right">
			<span style="font-size:20px;font-weight:200;">
				<?php echo get_phrase('Fee_Voucher_Of');?>
            </span>
            <br />
				<?php echo $this->db->get_where('student' , array('student_id'=>$row['student_id']))->row()->name;?>
            <br />
            	<?php echo get_phrase('roll');?> : 
            	<?php echo $this->db->get_where('student' , array('student_id'=>$row['student_id']))->row()->roll;?>
            <br />
            	<?php echo get_phrase('class');?> : 
            	<?php 
				$class_id	=	$this->db->get_where('student' , array('student_id'=>$row['student_id']))->row()->class_id;
				echo $this->db->get_where('class' , array('class_id'=>$class_id))->row()->name;
				?>
        </div>
        <div style="clear:both;"></div>
        <hr />
        <table width="100%">
        	<tr style="background-color:#7087A3; color:#fff; padding:5px;">
            	<td style="padding:5px;"><?php echo get_phrase('invoice_title');?></td>
            	<td width="30%" style="padding:5px;">
					<div class="pull-right">
						<?php echo get_phrase('amount');?>
                    </div>
                </td>
            </tr>
        	<tr>
            	<td>
					<span style="font-size:12px;font-weight:200;">
						<?php echo get_phrase('Addmission Fee');?>
                    </span>
                    <br />
					
                </td>
            	<td width="30%" style="padding:5px;">
					<div class="pull-right">
						<span style="font-size:12px;font-weight:200;">
							<?php echo $row['add_fee'];?>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
            	<td>
					<span style="font-size:12px;font-weight:200;">
						<?php echo get_phrase('Security Fee');?>
                    </span>
                    <br />
					
                </td>
            	<td width="30%" style="padding:5px;">
					<div class="pull-right">
						<span style="font-size:12px;font-weight:200;">
							<?php echo $row['security_fee'];?>
                        </span>
                    </div>
                </td>
            </tr>
             <tr>
            	<td>
					<span style="font-size:12px;font-weight:200;">
						<?php echo get_phrase('Tuition Fee');?>
                    </span>
                    <br />
					
                </td>
            	<td width="30%" style="padding:5px;">
					<div class="pull-right">
						<span style="font-size:12px;font-weight:200;">
							<?php echo $row['tuition_fee'];?>
                        </span>
                    </div>
                </td>
            </tr>
             <tr>
            	<td>
					<span style="font-size:12px;font-weight:200;">
						<?php echo get_phrase('Annual Charges');?>
                    </span>
                    <br />
					
                </td>
            	<td width="30%" style="padding:5px;">
					<div class="pull-right">
						<span style="font-size:12px;font-weight:200;">
							<?php echo $row['annual_fee'];?>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
            	<td>
					<span style="font-size:12px;font-weight:200;">
						<?php echo get_phrase('Stationary Charges');?>
                    </span>
                    <br />
					
                </td>
            	<td width="30%" style="padding:5px;">
					<div class="pull-right">
						<span style="font-size:12px;font-weight:200;">
							<?php echo $row['stationary_fee'];?>
                        </span>
                    </div>
                </td>
            </tr>
             <tr>
            	<td>
					<span style="font-size:12px;font-weight:200;">
						<?php echo get_phrase('Multimedia Charges');?>
                    </span>
                    <br />
					
                </td>
            	<td width="30%" style="padding:5px;">
					<div class="pull-right">
						<span style="font-size:12px;font-weight:200;">
							<?php echo $row['multimedia_fee'];?>
                        </span>
                    </div>
                </td>
            </tr>
             <tr>
            	<td>
					<span style="font-size:12px;font-weight:200;">
						<?php echo get_phrase('Other Charges');?>
                    </span>
                    <br />
					
                </td>
            	<td width="30%" style="padding:5px;">
					<div class="pull-right">
						<span style="font-size:12px;font-weight:200;">
							<?php echo $row['others'];?>
                        </span>
                    </div>
                </td>
            </tr>
             <tr>
            	<td>
					<span style="font-size:20px;font-weight:200;">
						<?php echo get_phrase('Total');?>
                    </span>
                    <br />
					
                </td>
            	<td width="30%" style="padding:5px;">
					<div class="pull-right">
						<span style="font-size:20px;font-weight:200;">
							<?php echo $row['others']+$row['multimedia_fee']+$row['multimedia_fee']+$row['stationary_fee']+$row['annual_fee']+$row['tuition_fee']+$row['security_fee']+$row['add_fee'];?>
                        </span>
                    </div>
                </td>
            </tr>
        	<tr>
            	<td></td>
            	<td width="30%" style="padding:5px;">
                	<div class="pull-right">
                    <hr />
                    <?php echo get_phrase('status');?> : <?php echo $row['status'];?>
                    <br />
                    <?php echo get_phrase('invoice_id');?> : <?php echo $row['invoice_id'];?>
                    <br />
                    <?php echo get_phrase('date');?> : <?php echo date('m/d/Y', $row['creation_timestamp']);?>
                    </div>
                </td>
            </tr>
        </table>
<br />
<br />

        
        <?php endforeach;?>
    </div>
</div>