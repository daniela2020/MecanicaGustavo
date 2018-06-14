<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="favicon.ico">
        <title>Mecânica Gustavo</title>
        <link rel="stylesheet" type="text/css"  href="stylle.css" />
    </head>
    <body>

        <img src="imagens/logo.png" vspace="10px" hspace="0px" border="5px" align="left"/>

<nav>
<ul>
<li><a href=index.php>Home</a></li>
<li><a href=Empresa.php>Empresa</a></li>
<li><a href=Pecas.php>Peças</a></li>
<li><a href=Servicos.php>Serviços</a></li>
<li><a href=Contato.php>Contato</a></li>
<li><a href=Administrador.php>Administrador</a></li>
<li><a href=Cadastro.php>Cadastro Cliente</a></li>
</ul>
</nav>
        
<h1>Envie sua mensagem</h1>

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
	$email_destinatario = "danielasampaionatividade@gmail.com"; // pode ser qualquer email que receberá as mensagens
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
	<p> <br/> 
		Nome:<br/> 
		<input type="text" size="30" name="nome"> 
	</p>   
	<p> 
		E-mail:<br/> 
		<input type="text" size="30" name="email">		
	</p>   
	<p> 
		Telefone:<br/> 
		<input type="text" size="35" name="telefone"> 
	</p>   
	<p> 
		Mensagem:<br/> 
		<input type="text" size="50" name="mensagem"> 
	</p>   
	<p>
          <input type="submit" name="BTEnvia" value="Enviar"> 
	  <input type="reset" name="BTApaga" value="Apagar">
        </p>
  
        <br><br><br>  

       <nav aria-label="Paginação de navegação">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="Servicos.php">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Empresa.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Pecas.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Servicos.php">4</a></li>
    <li class="page-item"><a class="page-link" href="Contato.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Administrador.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Cadastro.php">7</a></li>
    <li class="page-item"><a class="page-link" href="Administrador.php">Próximo</a></li>
    
  </ul>
</nav>
       
<footer>
<address>
Fones: 55 3312 3127 . 55 99961 2384 . 55 99905 2001 <br>
E-Mail: mecanicagustavo@mecanicagustavo.com.br<br>
Avenida Ipiranga, 536, Bairro Kurtz - Santo Ângelo - RS<br>
Copyright 2018 - Mecânica Gustavo <br/>
</address>
</footer>

                        </body>
                        </html>
