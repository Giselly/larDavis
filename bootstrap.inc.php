<?php
	//obtem a p�gina solicitada e de origem
	$conteudo = (!empty($_GET["conteudo"])) ? $_GET["conteudo"] : "inicial";

	//bot�o para voltar p�gina		
	$btn_voltar = "<div><a href=\"javascript:history.go(-1)\"><div id=\"setinha_voltar\" title=\"Voltar\" class=\"float_right\">&nbsp;</div></a></div>";
	
?>