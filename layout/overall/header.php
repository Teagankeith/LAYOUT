<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$start = $time;
	?>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title><?php echo $config['site_title']; ?></title>
        <link rel="stylesheet" href="layout/css/style.css" type="text/css" />
        <script type="text/javascript" src="layout/js/menu.js"></script>
		<script type="text/javascript">
			var imagesURL = 'layout';
		</script>
    </head>
    <body onload="menuInit();" class="snow">
    	<div id="page">
        	<div id="header"></div>
			<div id="menu">
            	<div style="margin-bottom: -2px;"><img src="layout/images/menu-start.png" alt="Start Menu" /></div>
                	<?php include 'layout/menu.php'; ?>
				<div style="margin-top: -2px;"><img src="layout/images/menu-end.png" alt="End Menu" /></div>
            </div>
			
            <div id="cnt-box">
            	<div id="top"></div>
                <div id="mid">
                	<div id="margins">