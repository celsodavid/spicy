<?php echo doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="pt-br" http-equiv="Content-Language">
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<title>Mensagem encaminhada pelo website</title>
	</head>
	<body>

		<table align="center" border="1">
			<tr>
				<th>Nome: </th>
	            <td><?php echo $nome; ?></td>
	            <th>Telefone: </th>
	            <td><?php echo $telefone; ?></td>
			</tr>
			<tr>
				<th>Estado Civil: </th>
	            <td><?php 
					$info = array('','Solteiro (a)','Casado (a)','Divorciado (a)','Viúvo (a)');
					echo $info[$estadoCivil];
	            ?></td>
	            <th>Idade: </th>
	            <td><?php echo $idade; ?></td>
			</tr>

			<tr>
				<th>E-mail: </th>
	            <td><?php echo $email; ?></td>
	            <th>Filhos</th>
	            <td><?php echo $filhos; ?> filho(s)</td>
			</tr>

			<tr>
				<td colspan=4><strong>Você conhece a incorporadora Patriani?</strong></td>	            
			</tr>
			
			<tr>				
	            <td colspan=4><?php echo ucfirst($opcao1); ?></td>
			</tr>

			<tr>
				<td colspan=4><strong>Como ficou sabendo sobre o empreeendimento?</strong></td>
			</tr>

			<tr>
	            <td colspan="4">
	            	<?php 
	            	$txt = null;
	            	foreach ($items as $item) {
	            		if(($i % 2) == 0) {
	            			$txt .= $item . ',';	            			
	            		}
	            		else {
	            			$txt .= $item;
	            			$i++;
	            		}	            		
	            	}
	            	echo substr($txt, 0, -1);
	            	?>
	            </td>	            
			</tr>			
        </table>
    
	</body>

</html>