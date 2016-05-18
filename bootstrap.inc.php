<?php
	//obtem a página solicitada e de origem
	$conteudo = (!empty($_GET["conteudo"])) ? $_GET["conteudo"] : "inicial";

	//botão para voltar página		
	$btn_voltar = "<div><a href=\"javascript:history.go(-1)\"><div id=\"setinha_voltar\" title=\"Voltar\" class=\"float_right\">&nbsp;</div></a></div>";
	
?>