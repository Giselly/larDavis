/* ***************************************************************************

Desenvolvedor: Benjamin Studart
Data: 04/07/2009
Copyright © 2009, Riscauto Micropinturas - Todos os Direitos Reservados

Site do Desenvolvedor: http://www.bstudart.com.br

*************************************************************************** */


/* ***************************************************************************
	Inicio da Função Para Carregar FLASH 
*************************************************************************** */
function carregaFlash(caminho,largura,altura)
      {
       document.write('<object classid="clsid:D27CDb6E-AE6D-11cf-96b8-444553540000" codebase="http:/download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="'+largura+'" height="'+altura+'">');
       document.write('<param name="movie" value="'+caminho+'">');
       document.write('<param name="quality" value="high">');
       document.write('<param name="bgcolor" value="">');
       document.write('<param name="wmode" value="transparent">');
       document.write('<embed src="'+caminho+'" quality="high" pluginspage="http:/www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'+largura+'" height="'+altura+'" wmode="transparent"></embed>');
       document.write('</object>');
      }
/* ***************************************************************************
//  Fim da Função Para Carregar FLASH 
*************************************************************************** */



/* ***************************************************************************
	Inicio da Função 
*************************************************************************** */
$(document).ready(function() 
		{  
			
			//pagina duvidas frequentes
			$(".content:not(:first)").hide();
			$(".ver_mais").click(function(){
				$(".content").slideUp("slow");
				$(this).next(".content").slideDown("slow");					
			});
			
		
			//mascara value
			$("#cpftitular").mask("999.999.999-99");			
			$("#inicio").mask("99:99");	
			$("#final").mask("99:99");
			$("#data_nascimento").mask("99/99/9999");
			$("#cep").mask("99999-999");
			$("#telefax").mask("(99) 9999-9999");
			$("#telefone").mask("(99) 9999-9999");
			$("#telefone1").mask("(99) 9999-9999");
			$("#telefone2").mask("(99) 9999-9999");
			$("#telefone3").mask("(99) 9999-9999");
			$("#telefone_port").mask("(99) 9999-9999");
			
			//popup
			//$('a.popup').fancybox();
			

			
});

