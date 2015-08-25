
<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup_dues/system_dues/');" 
    class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i>
        <?php echo get_phrase('Add New Due');?>
    </a> 
<br><br>
<table class="table table-bordered datatable" id="table_export">
    <thead>
        <tr>
            <th width="80"><div><?php echo get_phrase('ID');?></div></th>
            <th width="80"><div><?php echo get_phrase('Due Name');?></div></th>
            <th><div><?php echo get_phrase('Due Description');?></div></th>
            <th class="span3"><div><?php echo get_phrase('Class');?></div></th>
            <th><div><?php echo get_phrase('Due Date');?></div></th>
            <th><div><?php echo get_phrase('Action');?></div></th>
        </tr>
    </thead>
    <tbody>
        <?php 
                foreach($query as $row):?>
        <tr>
        	<td><?php echo $row['ID'];?></td>
            <td><?php echo $row['system_due_name'];?></td>
            <td><?php echo $row['system_due_desc'];?></td>
            <td><?php echo $row['class_id'];?></td>
            <td><?php echo $row['due_date'];?></td>
            <td>
                
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

						<!-- STUDENT EDITING LINK -->
                        <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?system_dues/edit/<?php echo $row['ID'];?>');">
                                <i class="entypo-pencil"></i>						
                                    <?php echo get_phrase('edit');?>
                            </a>
                        </li>

                        <!-- STUDENT DELETION LINK -->
                        <li>
                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?system_dues/delete/<?php echo $row['ID'];?>');">
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
						"mColumns": [0, 2, 3, 4]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0, 2, 3, 4]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(5, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									  datatable.fnSetColumnVis(5, true);
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