<div id="conteudo_principal" class="alturaMinima"><?php if($conteudo !== "inicial") ?>
	<?php if($conteudo === "inicial") { ?>
	
    <div id="projeto_lar" class="larDavis">
    	<div id="intro" class="float_left">
            <img src="imagens/familia2.png" alt="Lar Davis" />
        </div>
    	
        <div id="video_principal" class="float_right">
            <iframe width="400" height="250" src="https://www.youtube.com/embed/RgX0cdSDUaI" frameborder="0" allowfullscreen></iframe>
            <!--<iframe width="400" height="250" src="//www.youtube.com/embed/6VDZ_w-eriA?rel=0" frameborder="0" allowfullscreen></iframe>-->
        </div>
    </div>
    
    <div class="clear">&nbsp;</div><br/> 
    
    <div class="larDavis">
        <h1>O que é Lar Davis?</h1>
        <p>O Lar Davis é uma instituição que tem como foco 
            restaurar e preparar vidas. Acolhendo crianças que 
            vivem em situação de risco, levando-as a habitar em
            um lugar digno, com boa alimentação, educação, 
            cuidado e proteção. Atuando há 14 anos no Brasil 
            e fundado pelos americanos Mark e Paige Anderson, 
            essa organização já transformou muitas vidas e continua 
            a lutar contra desafios diários, sobrevivendo com 
            doações, parcerias e convênios, sempre com determinação
            e nunca abandonando o sonho de ver adultos atuantes.</p>
    </div>
    
    <div class="clear">&nbsp;</div><br/> 
    <hr>
    <div id="parceiros" class="">
        <h2>Parceiros do Lar</h2><br />
        
        <div id="cinza2" class="img_parceiros maior"></div>
        
        <div id="cinza6" class="img_parceiros maior"></div>
        
        <div id="cinza1" class="img_parceiros maior"></div>
        
        <div id="cinza3" class="img_parceiros maior"></div>
                
        <div id="cinza4" class="img_parceiros menor"></div>
        
        <div id="cinza5" class="img_parceiros menor"></div>
        
        <div id="cinza7" class="img_parceiros menor"></div>
        
        <div id="cinza8" class="img_parceiros menor"></div>
    </div>       
     	

	
    <div id="destaque">
    	<div class="eventos float_left">
			<img src="imagens/icon_noticias.png" alt="Noticias" class="float_left" /><h2 id="titulo_noticias" style="margin-left:40px;">Nossas necessidades</h2>
				<ul>
					<li>Clique abaixo para ver a tabela com nossas necessidades e como voce pode ajudar.</li><br />			
				<span><a href="?conteudo=necessidades">Veja nossa tabela de necessidades gerais</a></span>
		</div>
	
		<div class="eventos float_left" style="margin-left:50px;">
			<img src="imagens/icon_tvvideos.png" alt="Videos" class="float_left" /><h2 style="margin-left:40px;">Vídeos</h2>
				<h3>Assista aos nossos videos</h3>
                <div id="video_miniatura">
                    <iframe width="250" height="170" src="//www.youtube.com/embed/6VDZ_w-eriA?rel=0" frameborder="0" allowfullscreen></iframe>
                </div><br />
                <span><a class="videos <?php echo ($conteudo === "videos") ? "hover" : ""; ?>" href="?conteudo=videos">Veja mais videos</a></span>
		</div>
                                
		<div class="eventos_depoimentos float_left" style="margin-left:70px;">
			<img src="imagens/icone_depoimentos.png" alt="depoimentos" class="float_left" /><h2 id="titulo_depoimentos" style="margin-left:40px;">Depoimentos</h2>			
				<ul>
					<li><a href="?conteudo=depoimentos">"Admiro o trabalho do Lar Davis porque é uma instituição 
                                                                            que busca fomentar uma cultura de acolhimento com práticas
                                                                            cotidianas desenvolvidas por equipes multiprofissionais
                                                                            que valorizam o aspecto familiar como alternativa de proteção,
                                                                            as quais   norteiam compreensões  sobre  cidadania e 
                                                                            afetividade no acolhimento institucional.  
                                                                            É uma bela família chamada Lar Davis".</a></li>
				</ul>
				<div class="clear">&nbsp;</div>
				<ul class="float_right">
					<li><strong>Joana de Fátima de Lima Alves</strong></li>							
					<span class="float_right">18/05/2016</span>
				</ul>				
				<div class="clear">&nbsp;</div>							
				<span><a href="?conteudo=depoimentos">Veja mais depoimentos.</a></span><br /><br />										
		</div>	
    </div>
	
	
	<div class="clear">&nbsp;</div>
    <br  />
	
    <?php } ?>
</div>