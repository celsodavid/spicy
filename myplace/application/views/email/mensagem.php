<?php echo doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="pt-br" http-equiv="Content-Language">
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<title>Mensagem encaminhada pelo website</title>
	</head>
	<body>
    	<?php 
    		echo $nome,'<br>',
    			 $telefone,'<br>',
    			 $civil,'<br>',
    			 $idade,'<br>',
    			 $email,'<br>',
    			 $filhos,'<br>',
    			 $opcao1,'<br>',
    			 $mensagem,'<br>',
    			 '<pre>',print_r($items),'</pre>';
    	?>
	</body>
</html>