<?php echo doctype('html5'); ?>
<html lang="pt-BR">
	<head>
		<title>SOLARES <?php echo " - ".$title; ?></title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<?php 
		$meta = array(
			array('name' => 'description', 'content' => ''),
			array('name' => 'keywords', 'content' => ''),
			array('name' => 'robots', 'content' => ''),			
			#array ('name' => 'revisit-after', 'content' => '1 days')
		);
		echo meta($meta);
		echo link_tag('assets/img/favicon.ico', 'shortcut icon', 'image/ico');
		echo link_tag('assets/css/style_reset.css');
		echo link_tag('assets/css/style.css');
		echo script_tag('assets/js/jquery-1.10.2.min.js');
		echo script_tag('assets/js/html5shiv.js');
		echo '<script type="text/javascript"> var baseurl = "', base_url(), '";</script>';
		echo script_tag('assets/js/site.js');		
		?>
		<!--[if IE 9]>
			<link href="assets/css/style-ie.css" rel="stylesheet" type="text/css">			
		<![endif]-->		
		<!--[if !IE]><!-->
		<script>
			if (/*@cc_on!@*/false) {
		    	document.documentElement.className+='ie10';
			}
		</script>
		<!--<![endif]-->
	</head>
	<body>