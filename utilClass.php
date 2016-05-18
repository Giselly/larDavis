<?php 
/* 						CLASSE UTIl 
 Desenvolvido por Michael Bezerra e Benjamin Studart   
 DATA: 18/10/2009 
 
 Essa classe tem por objetivo armazenar rotinas
 que possam ser utilizadas para facillitar formatações ou 
 padronizações em todas as camadas.
 
*/

class util{

	/*metodo para mudar formato de numeros para o formato moeda(R$) e do formato moeda para float */
	 function moeda($numero,$banco = false){
	 
			if(!$banco){ //se vem do banco
				$numero = str_replace(",",".",$numero);
				return number_format($numero,2,",",".");
			}else{	// se vai para o banco
				$numero = str_replace(".","",$numero);
				$numero = str_replace(",",".",$numero); 
				return $numero;
			} // fim de if else		
	 } //fim de função moeda
	 
	// Efeito "Focus" em Bordas de Formularios com DHTML puro. 
	public function efeitoBordaForm($borda_f="#000",$borda_b="#000", $return=false){
	    $efeitoBordaForm = "onFocus=\"this.style.borderColor='".$borda_f."'\" onBlur=\"this.style.borderColor='".$borda_b."'\"";
		if($return)return $efeitoBordaForm;
		else echo $efeitoBordaForm;
	} //fim de função efeitobordafocus
	
	
	// Efeito opacity
	public function efeitoOpacity($opacity="0.7",$alpha="70", $return=false){
		//exemplo de utilização:
		// <img src="teste.jpg" style="opacity:0.4;filter:alpha(opacity=40)" onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100" onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=40" />	
		$efeitoOpacity = "style=\"opacity:".$opacity.";filter:alpha(opacity=".$alpha.");\" onmouseover=\"this.style.opacity=1;this.filters.alpha.opacity=100\" onmouseout=\"this.style.opacity=".$opacity."; this.filters.alpha.opacity=".$alpha."\"";
		if($return)return $efeitoOpacity;
		else echo $efeitoOpacity ;
	} //fim de função 
	
	
	public function btnVoltar() {
		$btn_voltar ="
			<br />
	        <a style=\"cursor:pointer\" onClick=\"javascript:history.back(-1)\">
            	<img src=\"../images_admin/ico_voltar.png\" title=\"voltar\" alt=\"voltar\" class=\"btn\" style=\"float:right; margin-right:30px; display:inline;\"/>
        	</a>";
		echo $btn_voltar;
	 }	 
	 
	/*metodo para validar informações vindas do usuário
	para que não venham informações maliciosas e garantir que as mesmas venham no formato esperado */
	function validar($valor, $tipo = " ",$nome = " ",$metodo_env = "get"){
		
		static $inputs = array("get" => INPUT_GET,"post" => INPUT_POST, "cookie" => INPUT_COOKIE,"server"=>INPUT_SERVER,"env"=>INPUT_ENV); //array com os metods de envio suportados pelo filter_has_var
		$array = (is_array($valor)) ? filter_input_array($inputs[$metodo_env], array( $nome => array('flags'  => FILTER_REQUIRE_ARRAY))) : 0;
		
		if(filter_has_var($inputs[$metodo_env], $nome) || $array[$nome] ){ // validando metodo de envio do valor 

			switch($tipo){			
				case "int":
				if(is_array($valor)){
					
					foreach($valor as $key=>$cont){
						
						if(filter_var($cont,FILTER_VALIDATE_INT)) $valor[$key] =  filter_var($cont,FILTER_SANITIZE_NUMBER_INT);
						else return 0;
					}
					return $valor;
				}else return (filter_var($valor,FILTER_VALIDATE_INT)) ? filter_var($valor,FILTER_SANITIZE_NUMBER_INT) : 0; // validação e limpeza de numero inteiro com função filtro do php
				break; 
				
				case "float": 
				return (filter_var($valor,FILTER_VALIDATE_FLOAT)) ? $valor : 0; // validação de numero com ponto flutuante com função filtro do php
				break;
				
				case "string":
				return (strlen($valor) > 0 ) ? filter_var($valor, FILTER_SANITIZE_STRING) : 0; // limpando tags de html da string com função filtro do php
				break; 		
				
				case "boolean":
				return (is_bool($valor)) ? $valor : 0; // validação de numero boleano com função que analiza o tipo boolean do php
				break; 
				
				case "email": 
				return (filter_var($valor,FILTER_VALIDATE_EMAIL)) ? filter_var($valor,FILTER_SANITIZE_EMAIL) : 0; // validação e limpeza de email com função filtro do php
				break; 
	 
				case "url":
				return (preg_match('|^http(s)?://[a-z0-9-]+(\.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $valor)) ? $valor : 0; // validação de url com expressão regular
				break; 		
				
				case "cpf": 
							//VERIFICA SE O QUE FOI INFORMADO É NÚMERO
							 if(!is_numeric($valor)) return false;							 
							 else {
									  //VERIFICA
									  if( ($valor == '11111111111') || ($valor == '22222222222') || ($valor == '33333333333') || ($valor == '44444444444') || ($valor == '55555555555') || ($valor == '66666666666') || ($valor == '77777777777') || ($valor == '88888888888') || ($valor == '99999999999') || ($valor == '00000000000') ) 
										{
											return false;
										}
										else
										{
											//PEGA O DIGITO VERIFIACADOR
											$dv_informado = substr($valor, 9,2);
											
											for($i=0; $i<=8; $i++) 
											{
												$digito[$i] = substr($valor, $i,1);
											}
											
											//CALCULA O VALOR DO 10º DIGITO DE VERIFICAÇÂO
											$posicao = 10;
											$soma = 0;
											
											for($i=0; $i<=8; $i++) {
											$soma = $soma + $digito[$i] * $posicao;
											$posicao = $posicao - 1;
										}
							
								$digito[9] = $soma % 11;
								
								if($digito[9] < 2) 
								{
									$digito[9] = 0;
								}
								else{
									$digito[9] = 11 - $digito[9];
								}
							
							   //CALCULA O VALOR DO 11º DIGITO DE VERIFICAÇÃO
							   $posicao = 11;
							   $soma = 0;
							
							   for ($i=0; $i<=9; $i++) 
							   {
								$soma = $soma + $digito[$i] * $posicao;
								$posicao = $posicao - 1;
							   }
							
							   $digito[10] = $soma % 11;
							
							   if ($digito[10] < 2) 
							   {
								$digito[10] = 0;
							   }
							   else {
								$digito[10] = 11 - $digito[10];
							   }
							
							  //VERIFICA SE O DV CALCULADO É IGUAL AO INFORMADO
							  $dv = $digito[9] * 10 + $digito[10];
							  if ($dv != $dv_informado) 
							  {
							   return false;
							  }
							  else
							   return true;
							  }//FECHA ELSE
							}//FECHA ELSE(is_numeric)
							
				break; 	//FIM DO CASE CPF					
				
			} //fim switch
		} else  return 0; // fim de if else
	} // fim de função validar
	
	//função para validar imagem
	function validar_img($img = ""){
		$img = ereg_replace("image/", "", $img); // retirando image/ que vem do formulario
		$array_img = array("jpg","pjpeg","jpeg","JPG","JPEG","JPEG","x-png","png","PNG","gif","GIF"); // construindo um array com as extensões permitidas
		return (in_array($img,$array_img)) ? true : false; // testando se o valor passado esta no array e retornando resposta
	}
	
	function data($imprimir = true,$formato ="",$dh = 0 ){
	
		$semana = array(0=>"Domingo", 1=>"Segunda", 2=>"Terça", 3=>"Quarta", 4=>"Quinta", 5=>"Sexta", 6=>"Sábado");
		$mes = array(1=>"Janeiro", 2=>"Fevereiro", 3=>"Março", 4=>"Abril", 5=>"Maio", 5=>"Junho", 7=>"Julho", 8=>"Agosto", 9=>"Setembro", 10=>"Outubro", 11=>"Novembro", 12=>"Dezembro" );
		$dt = ($dh) ? strtotime($dh) : time();
			
		switch($formato){
		
			case "d":
			$retorno = date("d",$dt)."/".date("m",$dt)."/".date("Y",$dt);
			break;
			
			case "h":
			$retorno = date("H",$dt).":".date("i",$dt).":".date("s",$dt);
			break;
			
			case "e":
			$retorno = $semana[date("w",$dt)].", ".date("d",$dt)." de ".$mes[date("n",$dt)]." de ".date("Y",$dt);
			break;
			
			case "r":
			$retorno = substr($semana[date("w",$dt)],0,3).", ".date("d",$dt)."/".date("m",$dt)."/".date("Y",$dt);
			break;
			
			case "er":
			$retorno = substr($semana[date("w",$dt)],0,3).", ".date("d",$dt)." de ".substr($mes[date("n",$dt)],0,3)." de ".date("Y",$dt);
			break;
			
			default:
			$retorno =  date("d",$dt)."/".date("m",$dt)."/".date("Y",$dt)." às ".date("H",$dt)." : ".date("i",$dt)." : ".date("s",$dt);
		}			
				
		if($imprimir) echo $retorno;
		else return $retorno;
	}	
	  public function apaga_pasta($pastas, $caminho = "")
	  {
			if(chmod($caminho,0777)) // permissão total no servidor
			{
				if(is_array($pastas)){	//if é um array de imagens
					foreach($pastas as $valor){ //percorrendo o array
						if(file_exists($caminho.$valor))
						{
							if(is_dir($caminho.$valor)){
								$arquivos = glob($caminho.$valor."/"."*");
								if(empty($arquivos)){
									rmdir($caminho.$valor); // apagando pasta
								} else{
									foreach($arquivos as $item){
										unlink($item); //apagando os arquivos
									} // foreach arquivos	
									rmdir($caminho.$valor); // apagando pasta					
								} //fim if esle arquivos 
							}
						} // fim if file_exists
 					} // foreach pastas
				}else //if não for array apagar a unica pasta enviada
				{
					if(file_exists($caminho.$pastas)){
							if(is_dir($caminho.$pastas)){
								$arquivos = glob($caminho.$pastas."/"."*");
								if(empty($arquivos)){
									rmdir($caminho.$pastas); // apagando pasta
								} else{
									foreach($arquivos as $item){
										unlink($item); //apagando os arquivos
									} // foreach arquivos	
									rmdir($caminho.$pastas); // apagando pasta					
								} //fim if esle arquivos 
							}
					}
				} //fim if else
			}	// fim if chmod	
	  }
} // fim class

$u = new util(); //instanciando objeto

?>