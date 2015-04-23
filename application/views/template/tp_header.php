<!DOCTYPE html>
<html>
<head>
	<title>Detail Admin - Home</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="<?php echo base_url();?>css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/elements.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/icons.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/compiled/index.css" type="text/css" media="screen" />    

     <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/compiled/signin.css" type="text/css" media="screen" />
    
    <!-- open sans font -->
    <link href="<?php echo base_url();?>css/font/lato.css" rel='stylesheet' type='text/css' />

    <!-- lato font -->
    <link href="<?php echo base_url();?>css/font/open_sans.css" rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>js/html5shim.js"></script>
    <![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- scripts -->
    <script src="<?php echo base_url();?>js/jquery-latest.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- knob -->
    <script src="<?php echo base_url();?>js/jquery.knob.js"></script>
    <!-- flot charts -->
    <script src="<?php echo base_url();?>js/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>js/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>js/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>js/theme.js"></script>
	
	<?php 
	if(isset($css_list)){
		if(is_array($css_list)){
			foreach ($css_list as $row){
				echo "<link rel=\"stylesheet\" href= \"".base_url()."css/".$row."\">";
			}
		}else{
			echo "<link rel=\"stylesheet\" href= \"".base_url()."css/".$css_list."\">";
		}
	}

	if(isset($js_list)){
		if(is_array($js_list)){
			foreach ($js_list as $row){
				echo "<script src= \"".base_url()."js/".$row."\"></script>";			
			}
		}else{
			echo "<script src= \"".base_url()."js/".$js_list."\"></script>";
		}
	}

?>
	
</head>
<body>