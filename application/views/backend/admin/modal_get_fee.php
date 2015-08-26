
<?php 

//echo $query->num_rows();

$edit_data=$this->db->order_by('id', 'DESC')->get_where('student_payments' , array('student_id' => $param2), 5)->result_array();
$student_info=$this->crud_model->get_student_info($param2);
?>

<div class="row">
	<div class="col-md-12">
    
    	
		<div class="tab-content">
            <!----TABLE LISTING STARTS--->
            <div class="tab-pane box active" id="list">
				
                <table  class="table table-bordered datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div><?php echo get_phrase('title');?></div></th>
                    		<th><div><?php echo get_phrase('amount');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		</tr>
					</thead>
                    <tbody>
                    	<?php foreach($edit_data as $row): ?>
                       <tr> 
							<td><?php echo $this->crud_model->get_title_by_id('sys_dues',$row['sys_dues_id']);?></td>
							<td><?php echo $row['amount'];?></td>
							<td><?php echo $row['created']?></td>
							
                        </tr>
                      
                       <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
       
		</div>
	</div>    
</div>

<?php
$student_info=$this->crud_model->get_student_info($param2);
foreach($student_info as $row):?>

<div class="profile-env">
	
	<section class="profile-info-tabs">
            
		<div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="profile-name">
				<h3><?php echo $row['name'];?></h3>
				</div>
                    </div>
			<div class="col-sm-6">
                            
            		<br>
                <table class="table table-bordered datatable" id="table_export">
                    <?php if($row['class_id'] != ''):?>
                    <tr>
                       <td>Class:- <b><?php echo $this->crud_model->get_class_name($row['class_id']);?></b></td>
                       <td>Roll:- <b><?php echo $row['roll'];?></b></td>
                    </tr>
                    <?php endif;?>
                
                </table>
			</div>
                    <div class="col-sm-6 hidden-xs">
			
			<a href="#" class="profile-picture pull-right">
				<img src="<?php echo $this->crud_model->get_image_url('student' , $row['student_id']);?>" 
                	class="img-responsive img-circle" />
			</a>			
		</div>
		</div>		
	</section>
	
</div>


<?php endforeach;
//-----------------------------------End of student profile--------------------------------
$edit_data=$this->db->get_where('student_dues' , array('student_id' => $param2, 'status'=>0) )->result_array();

?>
<header class="row">

    <div class="col-sm-9">
      
 <?php
      
 echo form_open('admin/invoice/get_fee/'.$row['student_id'], array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top')); ?>
          <ul class="profile-info-sections">
        <?php foreach($edit_data as $row): 
       $s_id = $row['sys_dues_id'];
       $dues = $this->db->get_where('sys_dues', array('sys_dues_id'=>$s_id))->result_array();
     
       ?>
              <div class="col-lg-2"> <label><?php  echo get_phrase( $this->crud_model->get_title_by_id('sys_dues',$row['sys_dues_id']));?></label>
              </div>
              <div class="col-lg-10">
                 
                 <div class="input-group">
               <span class="input-group-addon">
                   <input type="checkbox" name="fee[]" value="<?= $row['id'] ?>" onclick="myFunction(<?= $row['id'] ?>)" >
               </span>
                     <input disabled  onchange="value_amount()"  id="<?= $row['id'] ?>" value="<?php echo$row['fee']; ?>"  type="number" name="value[]" class="form-control amount_select" >
            </div><!-- /input-group -->
              </div>
      
        <?php endforeach;
    
$this->db->where(['student_id'=>$param2, 'status'=>0]);
$this->db->from('student_dues');
$test=$this->db->count_all_results();
if($test >= 1){

        ?>
         <div>&nbsp;</div>      <div class="col-lg-12">
                    <input class="pull-right btn btn-default" type="submit" name="submit" Value="Submit"/>
</div>
    <?php } ?>
  </ul>
    </form></table>
    </div>

    <p id="demo">Total Amount : <span id="t_amount"></span></p>
</div>
</header>

<script>
    function value_amount() {
        
 var a = 0;
$('.amount_select').each(function( index,val ) {
    if (! $(this).prop("disabled") )
    {  
       //alert(val.value);
      if(val.value == null || val.value == ""){
          val.value=0;
      }
       a = parseInt(a)+parseInt(val.value);
                        
    }
    $('#t_amount').html(a);
});    
} 
function myFunction(id) {
    
    var x = document.getElementById(id);


    if (x.hasAttribute("disabled")) {
        x.removeAttribute("disabled"); 
            var amount = x.value
                        
        }
    else{
        x.setAttribute("disabled", "disabled");
    }
    
 var a = 0;
$('.amount_select').each(function( index,val ) {
    if (! $(this).prop("disabled") )
    {  
       //alert(val.value);
     if(val.value == null || val.value == ""){
          val.value=0;
      }
       a = parseInt(a)+parseInt(val.value);
   
    }
    $('#t_amount').html(a);
});
}
</script>
