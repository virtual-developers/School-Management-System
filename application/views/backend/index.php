<?php
	$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	$text_align	=	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
	$account_type 	=	$this->session->userdata('login_type');
	?>
<!DOCTYPE html>
<html lang="en" dir="<?php if ($text_align == 'right-to-left') echo 'rtl';?>">
<head>
	
	<title><?php echo $page_title;?> | <?php echo $system_title;?></title>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Virtual-Developers School Manager Pro " />
	<meta name="author" content="Team Virtual-Developers" />
	
	

	<?php include 'includes_top.php';?>
	
</head>
<body class="page-body" >
	<div class="page-container <?php if ($text_align == 'right-to-left') echo 'right-sidebar';?>" >
		<?php include $account_type.'/navigation.php';?>	
		<div class="main-content">
		
			<?php include 'header.php';?>

           <h3 style="margin:20px 0px; color:#818da1; font-weight:200;">
           	<i class="entypo-right-circled"></i> 
				<?php echo $page_title;?>
           </h3>

			<?php include $account_type.'/'.$page_name.'.php';?>

			<?php include 'footer.php';?>

		</div>
		<?php //include 'chat.php';?>
        	
	</div>
    <?php include 'modal.php';?>
    <?php include 'includes_bottom.php';?>
    
</body>
</html>