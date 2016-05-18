<?php
/* =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
Nome do desenvolvedor: Emmanuel de Freitas Soares
Data de Inicio: 14/03/2011
Descrição das atividades: Desenvolvimento da estrutura em HTML, CSS, JQuery.
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */
	
	session_start();
		
	// Script de Bootstrap:
	// Contém rotinas que possam ser usadas por eventos no site todo.
	require_once "bootstrap.inc.php";	
	
	//head do site
	require_once "head.inc.php";
	
	//topo do site
	require_once "topo.inc.php";
	
	//menu do site
	require_once "menu.inc.php";
	
	//banner do site
	//require_once "banner.inc.php";
	
	//conteudo do site
	require_once "conteudo.inc.php";
	
	//rodape do site
	require_once "rodape.inc.php";
	
?>