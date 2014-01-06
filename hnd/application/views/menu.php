    <div id="menu">
        <div class="conteudo_menu">
            <ul>
             <li class="menu_topo"><a class="shItem <?php echo (isset($home))?$home:"";?>" href="<?php echo base_url();?>home">Home</a></li>
             <li class="menu_topo"><a class="shItem <?php echo (isset($empresa))?$empresa:"";?>" href="<?php echo base_url();?>empresa">Empresa</a></li>
             <li class="menu_topo"><a class="shItem <?php echo (isset($principios))?$principios:"";?>" href="<?php echo base_url();?>principios">Princípios</a></li>
             <li class="menu_topo" ><a id="shItem" class="<?php echo (isset($emp))?$emp:"";?> subempreendimento" href="<?php echo base_url();?>empreendimento">Empreendimento</a> 
                 <ul><li class="submenu"><a class="sublocalizacao" href="<?php echo base_url();?>empreendimento/localizacao">Localização</a></li></ul>
			 </li>  
             <li class="menu_topo"><a class="shItem  <?php echo (isset($contato))?$contato:"";?>" href="<?php echo base_url();?>contato">Contato</a></li>   
            </ul>
        
        </div>
    
    </div>

</div>