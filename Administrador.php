
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

<nav>
<ul>
<li><a href=index.php>Home</a></li>
<li><a href=Empresa.php>Empresa</a></li>
<li><a href=Pecas.php>Peças</a></li>
<li><a href=Servicos.php>Serviços</a></li>
<li><a href=Contato.php>Contato</a></li>
<li><a href=Administrador.php>Administrador</a></li>
</ul></nav>

       <form>
   Novo Usuário:<input type="text" name="nome"/><br>
   Senha:<input type="password" name="senha"/><br>
   <input type="submit" name="action" value="Enviar"/>
</form>
</body>
</html>


<?php


$senhaAberta = filter_input(INPUT_GET, 'senha', FILTER_DEFAULT);


if(!is_null($senhaAberta)){
   echo 'Senha passada pelo usuario: ' . $senhaAberta . '<br>';


   $senhaParaArmazenarNoBanco = password_hash($senhaAberta, PASSWORD_DEFAULT);
   echo 'Senha para ser armazenada no banco: ' . $senhaParaArmazenarNoBanco . '<br>';
}


?>

</body>
</html>


<?php



?>


        
        
        
        
        
        
<br><br>

<div class="pagination">
				
					<a href="Administrativo.php">&laquo;</a>					
					<a href="index.php">1</a>				
					<a href="Empresa.php">2</a>				
                                        <a href="Pecas.php">3</a>				
                                        <a href="Servicos.php">4</a>				
					<a href="Contato.php">5</a>
                                        <a href="Administrador.php">Próximo</a>
                                        <a href="index.php">&raquo;</a>
				
		</div>

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

