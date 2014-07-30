<?php echo doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="pt-br" http-equiv="Content-Language" />
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
		<title>Mensagem encaminhada pelo website</title>
		<style type="text/css">
			div { width: 700px; float: left; border-bottom: solid 20px #000; padding-bottom: 20px;}
			div p { margin-left: 100px;}
	    </style>
	</head>
	
	<body>
		<div>
		  <!-- <img src="<?php echo base_url('assets/img/email.jpg');?>" alt="Solaris Resort Apartamentos em Boituva" /> -->
		  <p><strong>Nome:</strong> <?php echo $nome;?></p>
		  <p><strong>E-mail:</strong> <?php echo $email;?></p>
		  <p><strong>Telefone:</strong> <?php echo $telefone;?></p>
		  <p><strong>Estado civil:</strong> <?php echo $estado_civil;?></p>
		  <p><strong>Idade:</strong> <?php echo $idade;?></p>
		  <p><strong>Filhos:</strong> <?php echo $filhos;?></p>
		  <br/>
		  <p><strong>Conhece o SOLARIS - RESIDENCIAL E RESORT:</strong> <?php echo $opcao1;?></p>
          <p>
          	<strong>Como ficou sabendo sobre o empreendimento:</strong>
          	<?php 
	    	$opcoes = null;
	    	$i = 0;
	    	foreach ($items as $item) {
	    		if(($i % 2) == 0) {
	    			$opcoes .= $item . '; ';
	    		}
	    		else {
	    			$opcoes .= $item;
	    			$i++;
	    		}
	    	}
	    	#echo substr($opcoes, 0, -1);
	    	echo $opcoes;
	    	?>
          </p>
          <br>
          <p><strong>Mensagem:</strong> <?php echo $mensagem;?></p>
		</div>
	</body>
</html>