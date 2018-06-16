<!DOCTYPE html>
<!--https://www.youtube.com/watch?v=j0gu29SpAKg
ronaldo
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="favicon.ico">
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" type="text/css"  href="stylle.css" />
    </head>
    <body>

        <img src="imagens/logo.png" vspace="10px" hspace="5px" border="5px" align="left"/>

<nav>
<ul>
<li><a href=index.php>Home</a></li>
<li><a href=Empresa.php>Empresa</a></li>
<li><a href=Pecas.php>Peças</a></li>
<li><a href=Servicos.php>Serviços</a></li>
<li><a href=Contato.php>Contato</a></li>
<li><a href=Administrador.php>Administrador</a></li>
<li><a href=Cadastro.php>Cadastro de Clientes</a></li>
</ul>
</nav>
<br><br><br><br>

  <form name="signup" method="post" action="cadastrando.php"> <br><br>
      Nome: <input type="text" name="nome"  required="" /><br><br>
      CPF: <input type="text" name="cpf"  required=""/><br><br>
      Endereço <input type="text" name="endereco" required=""><br><br>
      Cidade: <input type="text" name="cidade" required="" /><br><br>
      E-mail: <input type="text" name="email" required=""/><br><br>
      Senha: <input type="password" name="senha" required="" /><br><br>
        <input type="submit" value="Cadastrar" />
                </form>
        <?php
       
        $pdo = new PDO("mysql:host=localhost;dbname=cadastro", 'root', '');


        $consulta = $pdo->query('SELECT * FROM usuarios;');

        $pessoaArray = $consulta->fetchAll(PDO::FETCH_ASSOC);
       // echo 'Resultado: <pre>' . print_r($pessoaArray, true) . '</pre><br>';
        
         
        echo '<table border="1"><br>';
        echo  '<td> Nome <br>';
        echo  '<td> CPF <br>';
        echo  '<td> Endereco <br>';
        echo  '<td> Cidade <br>';
        echo  '<td> e_mail <br>';
        echo  '<td> Senha <br>';
        
foreach ($pessoaArray as $cliente){
   echo '<tr>';
   echo '<td>' . $cliente['nome'] .'</td>';
   echo '<td>' . $cliente['cpf'] .'</td>';
   echo '<td>' . $cliente['endereco'] .'</td>';
   echo '<td>' . $cliente['cidade'] .'</td>';
   echo '<td>' . $cliente['email'] .'</td>';
   echo '<td>' . $cliente['senha'] .'</td>';
   echo '</tr>';
}
echo '</table>';
        ?>

<br><br>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="Administrador.php">Anterior</a></li>
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