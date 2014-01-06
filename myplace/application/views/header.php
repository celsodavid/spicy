<header>

	<div class="box_menu">
		<figure class="menu_contato" style="margin-right:50px"><a href="<?php echo base_url('fale-conosco'); ?>" <?php echo ($menu == 'contato') ? 'class="active-contato"' : '';?> title="Contato"></a></figure>
		<figure class="menu_home"><a <?php echo ($menu == 'home') ? 'class="active-home"' : '';?> href="<?php echo base_url('home');?>" title="Home">Home</a></figure>	
	</div>

	<section>
	    <nav>
	    	<figure class="logo">
	    		<a href="<?php echo base_url('home');?>" title="Home">
	    			<h1 title="My Place,Uma nova vida começa aqui."><img src="<?php echo base_url('assets');?>/img/logo.png"></h1>
	    		</a>
	    	</figure>
		     <ul>
		     	<li><a href="<?php #echo base_url('realizacoes');?>#" title="Realizações" <?php echo ($menu == 'realizacao') ? 'class="active-realizacao"' : '';?>>realizações</a></li>
		     	<li><a href="<?php echo base_url('diferenciais-patriani');?>" title="Diferenciais" <?php echo ($menu == 'diferenciais') ? 'class="active-diferenciais"' : '';?>>diferenciais</a></li>
		     	<li><a href="<?php echo base_url('apartamento');?>" title="Seu Apartamento" <?php echo ($menu == 'seuapartamento') ? 'class="active-seuapartamento"' : '';?>>seu apartamento</a></li>
		     	<li><a href="<?php echo base_url('lazer');?>" title="Lazer" <?php echo ($menu == 'lazer') ? 'class="active-lazer"' : '';?>>lazer</a></li>
		     	<li><a href="<?php echo base_url('projeto');?>" <?php echo ($menu == 'projeto') ? 'class="active-projeto"' : '';?> title="Projeto">projeto</a></li>
				<li><a href="<?php echo base_url('localizacao');?>" <?php echo ($menu == 'localizacao') ? 'class="active-localizacao"' : '';?> title="Localização">Localização</a></li>
		     </ul>
		    <figure class="sombra_header"><img src="<?php echo base_url('assets');?>/img/sombra_menu.png"></figure>
	    </nav>
	</section>
	<span>
		<h3>
			<?php echo (isset($h3)) ? $h3 : ""; ?>
		</h3>
	</span>
</header>