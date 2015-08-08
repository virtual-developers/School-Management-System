<?php 
$edit_data		=	$this->db->get_where('student_dues' , array('student_id' => $param2) )->result_array();
$student = $this->db->get_where('student', array('student_id' => $param2) )->row();

echo "<h2 align='center'>".$student->name."</h2>";

?>
<header class="row">
<div class="col-sm-3"> 
    &nbsp;&nbsp;&nbsp;
</div><br /><br /><br />
    <div class="col-sm-9">
 <?php
      
 echo form_open('admin/invoice/get_fee/'.$row['student_id'], array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top')); ?>
          <ul class="profile-info-sections">
        <?php foreach($edit_data as $row): ?> 
          
				<li style="padding:0px; margin:0px;">
            <?php
       $s_id = $row['sys_dues_id'];
       $dues = $this->db->get_where('sys_dues', array('id'=>$s_id))->result_array();
      
            ?>
         <?php if(!$row['status']==1){ ?><input type="checkbox" name="fee[]" value="<?= $row['id'] ?>"><?php }else{echo get_phrase('Paied'); } ?>
         <label><?php foreach($dues as $due){ echo " ".get_phrase($due['title']);} echo " ".$row['fee']; ?> &nbsp;&nbsp;&nbsp;<?= $row['date'] ?></label><br/><br/>
                                </li>
        <?php endforeach;?>
         
                 <input type="submit" name="submit" Value="Submit"/>
  </ul>
    </form>
    </div>

</div>
</header>