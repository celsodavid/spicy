<?php echo doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $title; ?></title>
		<?php 
		$meta = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => $description),
			array('name' => 'keywords', 'content' => $keywords),
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
		);
		echo meta($meta);
		echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico');
		echo link_tag('assets/css/layout.css');
		echo script_tag('assets/js/jquery-1.9.1.js');
		echo script_tag('assets/js/jquery.clearinput.js');
		echo script_tag('assets/js/jFuncoes.js');		
		?>
	</head>
	<body>