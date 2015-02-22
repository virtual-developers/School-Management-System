
<table class="table table-bordered datatable" id="table_export">
    <thead>
        <tr>
            <th><div><?php echo get_phrase('roll');?></div></th>
            <th><div><?php echo get_phrase('student');?></div></th>
            <th><div><?php echo get_phrase('parent');?></div></th>
            <th><div><?php echo get_phrase('relation');?></div></th>
            <th><div><?php echo get_phrase('email');?></div></th>
            <th><div><?php echo get_phrase('phone');?></div></th>
            <th><div><?php echo get_phrase('address');?></div></th>
            <th><div><?php echo get_phrase('profession');?></div></th>
            <th><div><?php echo get_phrase('options');?></div></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($students as $row):
            $parent_info	=	$this->db->get_where('parent' , array('student_id' => $row['student_id']))->row();
        ?>
        <tr>
            <td class="span1"><?php echo $row['roll'];?></td>
            <td><?php echo $row['name'];?></td>
            <td>
                <?php 
                    if (isset($parent_info->name))
                        echo $parent_info->name;
                    else
                        echo '-';
                ?>
            </td>
            <td>
                <?php 
                    if (isset($parent_info->relation_with_student))
                        echo $parent_info->relation_with_student;
                    else
                        echo '-';
                ?>
            </td>
            <td>
                <?php 
                    if (isset($parent_info->email))
                        echo $parent_info->email;
                    else
                        echo '-';
                ?>
            </td>
            <td>
                <?php 
                    if (isset($parent_info->phone))
                        echo $parent_info->phone;
                    else
                        echo '-';
                ?>
            </td>
            <td>
                <?php 
                    if (isset($parent_info->address))
                        echo $parent_info->address;
                    else
                        echo '-';
                ?>
            </td>
            <td>
                <?php 
                    if (isset($parent_info->profession))
                        echo $parent_info->profession;
                    else
                        echo '-';
                ?>
            </td>
            <td>
            
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                        
                        
                        <?php
                                if (empty($parent_info)):
                            ?>
                        <!-- PARENT ADDING LINK -->
                        <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_parent_add/<?php echo $row['student_id'];?>/<?php echo $row['class_id'];?>');">
                                <i class="entypo-plus-circled"></i>
                                    <?php echo get_phrase('add');?>
                                </a>
                                        </li>
                            <?php
                            else:
                        ?>
                        
                        <!-- PARENT EDITING LINK -->
                        <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_parent_edit/<?php echo $parent_info->parent_id;?>/<?php echo $class_id;?>');">
                                <i class="entypo-pencil"></i>
                                    <?php echo get_phrase('edit');?>
                                </a>
                                        </li>
                        <li class="divider"></li>
                        
                        <!-- PARENT DELETION LINK -->
                        <li>
                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/parent/delete/<?php echo $parent_info->parent_id;?>/<?php echo $class_id;?>');">
                                <i class="entypo-trash"></i>
                                    <?php echo get_phrase('delete');?>
                                </a>
                                        </li>
                         <?php
                                  endif;
                             ?>
                    </ul>
                </div>
            
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
                		
<!-----  DATA TABLE EXPORT CONFIGURATIONS ----->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [0, 1, 2, 3, 4, 5, 6, 7]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0, 1, 2, 3, 4, 5, 6, 7]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(8, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(8, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>