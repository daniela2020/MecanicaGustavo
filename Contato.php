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

  
	<form action="processa.php" method="POST"> 
	 <br/> 
            <label>Nome</label><br>
        	 
            <input type="text" name="nome" required=""> <br>
                
                <label>E-mail</label><br>	 
	 
                <input type="email" name="email" required=""><br>		
	   
                <label>Telefone</label><br>
		
                <input type="text" name="telefone" required=""><br> 
	
                <label>Mensagem</label><br>
                 
                <textarea name="mensagem" rows="4" cols="50" placeholder="Digite sua mensagem" required=""></textarea><br>
	  
          <input type="submit" name="BTEnvia" value="Enviar"> 
	  <input type="reset" name="BTApaga" value="Apagar">

        </form>
  
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
