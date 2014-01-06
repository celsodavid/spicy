		<?php 
		echo script_tag('assets/js/jquery-1.10.1.js');	
		echo script_tag('assets/js/jquery.maskedinput.js');		
		echo script_tag('assets/js/site.js');
		?>
		<script>
		  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				
		  	ga('create', 'UA-42428753-1', 'patrianispettacolo.com.br');
		 	ga('send', 'pageview');		
		</script>

		<div style="display: none;">
			<ul>		
				<li><a href="<?php echo base_url('home'); ?>">início</a></li>
				<li><a href="<?php echo base_url('projeto'); ?>">projeto</a></li>
				<li><a href="<?php echo base_url('localizacao'); ?>">localização</a></li>
				<li><a href="<?php echo base_url('lazer'); ?>">lazer</a></li>
				<li><a href="<?php echo base_url('seu-apartamento'); ?>">seu apartamento</a></li>
				<li><a href="<?php echo base_url('diferenciais-patriani'); ?>">diferenciais patriani</a></li>
				<li><a href="<?php echo base_url('realizacoes'); ?>">realizações</a></li>
				<li><a href="<?php echo base_url('contato'); ?>">contato</a></li>
			</ul>
		</div>
		
	</body>
</html>