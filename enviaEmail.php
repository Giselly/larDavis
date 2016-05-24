<?php
session_start();
//class para validação
require("utilClass.php");

// Recebendo os dados passados pela página "faleconosco.php"
$recebe_nome       = $_SESSION['faleconosco']['nome']		= $u->validar($_POST['nome'],"string","nome","post");
//$recebe_sobrenome  = $u->validar($_POST['sobrenome'],"string","sobrenome","post");
$recebe_email      = $_SESSION['faleconosco']['email'] 		= $u->validar($_POST['email'],"email","email","post");
$recebe_telefax    = $_SESSION['faleconosco']['telefax']	= $u->validar($_POST['telefax'],"string","telefax","post");
$recebe_assunto    = $_SESSION['faleconosco']['assunto'] 	= $u->validar($_POST['assunto'],"string","assunto","post");
$recebe_msg        = $u->validar($_POST['mensagem'],"string","mensagem","post");


//echo $recebe_nome."-".$recebe_telefone."-".$recebe_email."-".$recebe_assunto."-".$recebe_msg;

if(!($recebe_nome && $recebe_telefax && $recebe_email && $recebe_assunto && $recebe_msg)) 
{ 
	echo"
		<table width=\"700\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"5\">
		  <tr>
			<td align=\"center\"><img src=\"./imagens/logotipo.png\" align=\"center\" /><br /><br /></td>
		  </tr>
		   <tr>
			<td align=\"center\" style=\"border: 0px #fff solid;\"><strong style=\"color:red; text-align:center;\">ALERTA: </strong><i> Todos os campos do formulário são obrigatórios!!!</i></td>
		  </tr> 
		  <tr>
			<td align=\"center\" style=\"border: 0px #fff solid;\"><a href=\"javascript:history.go(-1)\">&laquo;&nbsp;Voltar para página fale conosco</a></td>
		  </tr>
		</table>			
	   ";
	   exit();
}
// apagando sessão de cadastros
unset($_SESSION['faleconosco']);

// Definindo os cabeçalhos do e-mail
$headers  = "MIME-Version: 1.1\n"; 
$headers .= "Content-type:text/html; charset=utf-8\n"; //"Content-type:text/html; charset=iso-8859-1\n";
$headers .= "From:$recebe_nome\n";

// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE
$para = "ivone@lardavis.org.br";


// Definindo o aspecto da mensagem  
$mensagem ="
			<table width=\"700\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"5\">
			  <tr>
				<td align=\"center\"><img src=\"www.lardavis.org.br/imagens/logotipo.png\" align=\"center\" /><br /><br /></td>
			  </tr>
			  <tr>
				<td style=\"background-color: #ccc; padding:10px; color: #fff;\">&nbsp;<strong>De:</strong>&nbsp;$recebe_nome</td>
			  </tr> 
			  <tr>
				<td style=\"background-color: #999; padding:10px; color: #fff;\">&nbsp;<strong>E-mail:</strong>&nbsp;$recebe_email</td>
			  </tr>
			  <tr>
				<td style=\"background-color: #ccc; padding:10px; color: #fff;\">&nbsp;<strong>Telefone:</strong>&nbsp;$recebe_telefax</td>
			  </tr>
			  <tr>
				<td style=\"background-color: #999; padding:10px; color: #fff;\">&nbsp;<strong>Assunto:</strong>&nbsp;$recebe_assunto</td>
			  </tr>
			  <tr>
				<td style=\"background-color: #ccc; padding:10px; color: #fff;\">&nbsp;<strong>Mensagem:</strong>&nbsp;".nl2br($recebe_msg)."</td>
			  </tr>
			</table>
		";

// Enviando a mensagem para o destinatário
//  bool mail  ( string $to  , string $subject  , string $message  [, string $additional_headers  [, string $additional_parameters  ]] )
$envia_mail =  mail($para,"E-mail do Site", $mensagem,$headers);
  
// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.
$resposta  = "<p align=\"center\"><img src=\"http://www.lardavis.org.br/imagens/logotipo.png\"  /><br /></p>";
$resposta .= "<p>Ol&aacute; <strong>" . $recebe_nome . "</strong>. Agrade&ccedil;emos sua visita e a oportunidade de recebermos o seu contato. Em at&eacute; 48 horas voc&ecirc; receber&aacute; no e-mail fornecido a resposta para sua quest&atilde;o.</p>";
$resposta .= "<p><strong>Observa&ccedil;&atilde;o</strong> - Essa &eacute; uma mensagem autom&aacute;tica, n&atilde;o &eacute; necess&aacute;rio responde-la.</p>";

$envia_resposta_auto =  mail($recebe_email,"Sua mensagem foi recebida!",$resposta,$headers);


// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a página de contato. 
if(!$envia_mail && !$envia_resposta_auto)
{
		echo"
			<table width=\"700\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"5\">
			  <tr>
				<td align=\"center\" style=\"border-bottom: 0px #ccc solid;\"><img src=\"http://www.lardavis.org.br/imagens/logotipo.png\" align=\"center\" /><br /><br /></td>
			  </tr>
			   <tr>
				<td align=\"center\" style=\"border-bottom: 0px #ccc solid;\"><strong style=\"color:red; text-align:center;\">ERRO AO ENVIAR:</strong><i> A Mensagem não pode ser enviada!</i></td>
			  </tr> 
			  <tr>
				<td align=\"center\" style=\"border-bottom: 0px #ccc solid;\"><a href=\"index.php?pagina=contato\">&laquo;&nbsp;Voltar para página de Contato</a></td>
			  </tr>
			</table>			
	       ";
}
else{
	echo " <table width=\"700\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"5\">
			  <tr>
				<td align=\"center\" style=\"border-bottom: 0px #ccc solid;\"><img src=\"./imagens/logotipo.png\" align=\"center\" /><br /><br /></td>
			  </tr>
			   <tr>
				<td align=\"center\" style=\"border-bottom: 0px #ccc solid;\"><strong style=\"color:#20609f; text-align:center;\">Mensagem enviada com Sucesso!</strong></td>
			  </tr> 
			  <tr>
				<td align=\"center\" style=\"border-bottom: 0px #ccc solid;\"><a href=\"index.php?conteudo=inicial\">&laquo;&nbsp;Voltar para pagina inicial</a></td>
			  </tr>
			</table>			
	       ";	
} 

?>
