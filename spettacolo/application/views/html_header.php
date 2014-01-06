<?php echo doctype('html5'); ?>
<html lang="pt-BR">
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf-8">
		<?php		
		$meta = array(
			array('name'=>'robots', 'content'=>$robots),
			array('name'=>'description', 'content'=>$description),
			array('name'=>'keywords', 'content'=>$keywords),
			array('name'=>'robots', 'content'=>$robots),
			array('name'=>'revisit-after', 'content'=>'1 days')
		);
		echo meta($meta);
		echo link_tag('assets/img/favicon.ico', 'shortcut icon', 'image/ico');
		echo link_tag('assets/css/style.css');		
		?>
	</head>
	<body>
	