<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="favicon.ico">
        <title>Mecânica Gustavo</title>
        <link rel="stylesheet" type="text/css"  href="stylle.css" />

    </head>
    <body>
        <!-- vspace - define o tamanho da margem nas bordas superior e inferior da imagem.
        hspace - define o tamanho da margem nas bordas esquerda e direita da imagem. -->
        <!-- <img src=Logo_Nova2.jpg> Imagem pequena do logo-->


        <img src="imagens/logo.png" vspace="10px" hspace="5px" border="5px" align="left"/>

          
                        <?php
                        // put your code here
                        ?>

                

<nav>
<ul>
<li> <a href=index.php>Home</li> </a>
<li> <a href=Empresa.php>Empresa </li></a>
<li> <a href=Pecas.php>Peças</li> </a>
<li> <a href=Servicos.php>Serviços </li></a>
<li> <a href=Contato.php>Contato</li> </a>
<li> <a href=Administrativo.php>Administrativo </li></a>
</ul></nav>
<h2>Linha de Peças e Serviços</h2>


  
<?php
if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "email@doseudominio"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "email@querecebe"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Contato formmail"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-Mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
?>
	
	<form action="<? $PHP_SELF; ?>" method="POST"> 
	<p> 
		Nome:<br /> 
		<input type="text" size="30" name="nome"> 
	</p>   
	<p> 
		E-mail:<br /> 
		<input type="text" size="30" name="email">		
	</p>   
	<p> 
		Telefone:<br /> 
		<input type="text" size="35" name="telefone"> 
	</p>   
	<p> 
		Mensagem:<br /> 
		<input type="text" size="35" name="mensagem"> 
	</p>   
	<p>
          <input type="submit" name="BTEnvia" value="Enviar"> 
	  <input type="reset" name="BTApaga" value="Apagar">
        </p>





<footer>
<address>
Fones: 55 3312 3127 . 55 99961 2384 . 55 99905 2001 <br>
E-Mail: mecanicagustavo@mecanicagustavo.com.br<br>
Avenida Ipiranga, 536 Bairro Kurtz -Santo Ângelo-RS<br>
Copyright 2018 - Mecânica Gustavo <br/>
</address>

</footer>




                        </body>
                        </html>