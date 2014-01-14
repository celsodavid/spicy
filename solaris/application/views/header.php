<header>
	<section>
		<h1>
			<a href="<?php echo base_url();?>" title="Solaris Residencial e Resort" alt="Solaris Residencial e Resort">Solaris Residencial e Resort</a>
		</h1>

		<nav>
			<ul>
				<li><a <?=(isset($menu1)) ? 'class="active"': '';?> href="<?php echo base_url('residencial');?>" title="Residencial">Residencial</a></li>
				<li><a <?=(isset($menu2)) ? 'class="active"': '';?> href="<?php echo base_url('resort');?>" title="Resort">Resort</a></li>
				<li><a <?=(isset($menu3)) ? 'class="active"': '';?> href="<?php echo base_url('localizacao');?>" title="Localização">Localização</a></li>
				<li><a <?=(isset($menu4)) ? 'class="active"': '';?> href="<?php echo base_url('contato');?>" title="Contato">Contato</a></li>
			</ul>
		</nav>

	</section>
</header>