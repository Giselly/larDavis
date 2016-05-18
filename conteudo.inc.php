<div id="conteudo" class="alturaMinima">	
	<?php
	if(isset($_GET["conteudo"]) && $_GET["conteudo"] != "inicial") {
	echo $btn_voltar;
	}
	?>     
    
	<?php
	    @require_once("./".$conteudo.".inc.php");
    ?>
    
    <?php /*?><?php
	if(isset($_GET["conteudo"]) && $_GET["conteudo"] != "inicial") {
	echo $btn_voltar_dois;
	}
	?><?php */?>
    <div class="clear">&nbsp;</div> 
</div>
<div class="clear">&nbsp;</div>