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
<!--<script type="text/javascript">
    
    
  alert('Seja Bem-Vindo!');
  prev: '#anterior';
  next: '#proximo';
  
</script>-->
        <nav>
            <ul>
                <li><a href=index.php>Home</a></li>
                <li><a href=Empresa.php>Empresa</a></li>
                <li><a href=Pecas.php>Peças</a></li>
                <li><a href=Servicos.php>Serviços</a></li>
                <li><a href=Contato.php>Contato</a></li>
                <li><a href=Administrador.php>Administrador</a></li>
                <li><a href=Cadastro.php>Cadastro Cliente</a></li>
            </ul></nav>


        <!--criando a conexão-->
        <?php
//$DB_URL = "jdbc:mysql://localhost/cadastro";
//$USER = "root";
//$PASS = "";
//$BANCO ="cadastro";

        $conexao = new mysqli("localhost", "root", "", "cadastro");
        ?>

        <!--VAI CAPTURAR OS DADOS DIGITADOS NO CADASTRO-->
        <!--e depois inserir no banco de dados-->
        <?php
        if (isset($_POST['nome'])) {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $endereco = $_POST['endereco'];
            $cidade = $_POST['cidade'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $stmt = $conexao->prepare("INSERT INTO usuarios(nome,cpf, endereco, cidade,email,senha)
        VALUES(?,?,?,?,?,?)");

            $stmt->bind_param("ssssss", $nome, $cpf, $endereco, $cidade, $email, $senha);


            $stmt->execute();


//        echo $conexao->error;


            echo "<center><h2>Sr. $nome, seu cadastro foi realizado com sucesso!!!</h2></center>";
        }
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
                <li class="page-item"><a class="page-link" href="Cadastro.php">7</a></li>
                <li class="page-link"><a class="page-link" href="Empresa.php">Próximo</a></li>
            </ul>
        </nav>

        <?php
        echo '---------------------------------<br>';
        $pdo = new PDO("mysql:host=localhost;dbname=cadastro", 'root', '');




        $consulta = $pdo->query('SELECT * FROM usuarios;');

        $pessoaArray = $consulta->fetchAll(PDO::FETCH_ASSOC);
        echo 'Resultado: <pre>' . print_r($pessoaArray, true) . '</pre><br>';
        ?>
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