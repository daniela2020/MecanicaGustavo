<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="favicon.ico">
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" type="text/css"  href="stylle.css" />

    </head>
    <body>
        
      
        <!-- vspace - define o tamanho da margem nas bordas superior e inferior da imagem.
        hspace - define o tamanho da margem nas bordas esquerda e direita da imagem. -->
        <!-- <img src=Logo_Nova2.jpg> Imagem pequena do logo-->


        <img src="imagens/logo.png" vspace="10px" hspace="5px" border="5px" align="left"/>
<script type="text/javascript">
    
    
  alert('Seja Bem-Vindo!');
  prev: '#anterior';
  next: '#proximo';
  
</script>
<br><br><br>
<nav>
<ul>
<li><a href=index.php>Home</a></li>
<li><a href=Empresa.php>Empresa</a></li>
<li><a href=Pecas.php>Peças</a></li>
<li><a href=Servicos.php>Serviços</a></li>
<li><a href=Contato.php>Contato</a></li>
<li><a href=Administrador.php>Administrador</a></li>
<li><a href=Cadastro.php>Cadastro de Clientes</a></li>
</ul></nav>
<br><br>

  <form name="signup" method="post" action="cadastrando.php">
            Nome: <input type="text" name="nome" /><br/><br/>
        CPF: <input type="text" name="cpf" /><br/><br/>
       Endereço: <input type="text" name="endereço" /><br/><br/>
        Cidade: <input type="text" name="cidade" /><br/><br/>
        E-mail: <input type="text" name="email" /><br/><br/>
        Senha: <input type="password" name="senha" /><br/><br/>
        <input type="submit" value="Cadastrar" />
                </form>
<?php

?>











<br><br>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Empresa.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Pecas.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Servicos.php">4</a></li>
    <li class="page-link"><a class="page-link" href="Contato.php.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Administrador.php">6</a></li>
    <li class="page-link"><a class="page-link" href="index.php">Próximo</a></li>
  </ul>
</nav>


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