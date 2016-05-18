<div id="conteudo" class="alturaMinima"><!-- conteudo -->
	<div id="contato" class="float_left">
    	<h1>Contato</h1><br />        
	</div> 
	
    <div class="clear">&nbsp;</div>
	
    <div id="contato_tel">
    <p><a class="float_left" style="margin:0 7px 0 0;"><img src="imagens/ico_telefone.png" alt="telefone" /></a>Sede Aquiraz:+55 85 3361 9098<br /> 
    <p><a class="float_left" style="margin:0 7px 0 0;"><img src="imagens/ico_telefone.png" alt="telefone" /></a>Ivone Moreira:+55 85 99188 6539<br /> 
    </div><br /><br />    
    <div style="border-bottom:1px dashed #CCC;"></div>
    <div class="clear">&nbsp;</div>
    
    <div id="conteudo_faleconosco" class="alturaMinima"><!-- conteudo fale conosco -->    	
    
        <div class="float_left">
            <form id="formulario" name="formulario" method="post" action="enviaEmail.php" />    
                <div>
                    <label>(*) Nome Completo</label><br />
                    <input type="text" name="nome" id="nome" value="<?php echo (!empty($_SESSION['faleconosco']['nome'])) ? $_SESSION['faleconosco']['nome'] : "";?>" />
                </div>
                <br />
                <div>
                    <label>(*) Email</label><br />
                    <input type="text" name="email" id="email" value="<?php echo (!empty($_SESSION['faleconosco']['email'])) ? $_SESSION['faleconosco']['email'] : "";?>" />
                </div>
                
                <br />
                <div>
                    <label>(*) Telefone</label><br />
                    <input type="text" name="telefax" id="telefax" value="<?php echo (!empty($_SESSION['faleconosco']['telefax'])) ? $_SESSION['faleconosco']['telefax'] : "";?>" />
                </div>
                
                <br />
                <div>
                    <label>(*) Assunto</label><br />
                    <input type="text" name="assunto" id="assunto" value="<?php echo (!empty($_SESSION['faleconosco']['assunto'])) ? $_SESSION['faleconosco']['assunto'] : "";?>" />
                </div>
                
                <br />
                <div>
                    <label>(*) Mensagem</label><br />
                    <textarea name="mensagem" id="mensagem"></textarea>
                </div>
                
                <br />
                <div>
                	<input type="hidden" name="estado_corrente" id="estado_corrente" value="<?php echo $w_estado?>" />
                    <input type="submit" class="btn_enviar" value="Enviar" />
                </div>		
            </form>         
        </div>
		
		<div id="contato_informacoes" class="float_left">
			<h2>Localização</h2><br />
        	<img src="imagens/ico_rua.png" alt="endereço" class="ico_rua float_left" style="margin-right:7px;" />
			<span class="float_left">Praça Araças, 14 Patacas  CEP 61.756-000<br /> Aquiraz - CE Brasil</span>			   
		
                <div id="mapaContatos">
                    <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.6473852502227!2d-38.35372668462287!3d-3.993680645698734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b8a05bbcc38ac7%3A0x804687d67ad43dcb!2sLar+de+Crian%C3%A7as+Sara+e+Burton+Davis!5e0!3m2!1spt-BR!2sbr!4v1463570642777" width="360" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                </div>
	<div class="clear">&nbsp;</div>
    </div><!-- /conteudo fale conosco -->

</div><!-- /conteudo -->

<div class="clear">&nbsp;</div>
