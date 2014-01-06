<?php echo doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $title; ?> - VIVERE</title>
		
		<?php 
		// meta tags		
		echo meta($meta);
		// icon
		echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico');
		//css
		echo link_tag('assets/css/reset.css');
		echo link_tag('assets/css/style.css');		
		?>
		<!--[if IE]>
		<?php 
		echo link_tag('assets/css/iestyle.css');
		?>
		<![endif]-->		
		<?php 
		echo link_tag('assets/css/colorbox/colorbox.css');
		// js
		echo script_tag('assets/js/jquery-1.9.1.js');
		echo script_tag('assets/js/colorbox/jquery.colorbox.js');		
		echo script_tag('assets/js/jquery.maskedinput.js');	
		echo script_tag('assets/js/site.js');		
		?>	
		<style type="text/css">
			body, html{font-family: 'arial';}
			body{
				width: 100%; 
				height: 100%; 
				background: url("./assets/images/<?=$config['bg_foto']?>")  no-repeat top;
				overflow-y: hidden;overflow-x: scroll;/*#3a7a7f*/
			}
		</style>		
	</head>

<body>
<div class="transparency"></div>