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
        <h1>Serviços</h1>


        <?php
        echo "<table>";
        echo "<td><img src=imagens/caixaDeCambio.png>Caixa de Câmbio <br></td>";
        echo "<td><img src=imagens/diferencialCaminhao.jpg>Diferencial <br></td>";
        echo "<td><img src=imagens/setorHidraulico.jpg>Direções Hidraulicas <br></td>";
        echo "<td><img src=imagens/bombaHidraulica.jpeg>Bomba Hidraulica <br></td>";
        echo "<tr><td><img src=imagens/motor.png>Motor <br></td>";
        echo "<td><img src=imagens/freios.png>Freios/Suspensão <br></td>";
        echo "<td><img src=imagens/servicoTorno.png>Serviços de Torno <br></td>";
        echo "<td><img src=imagens/reparos.png>Reparos Diversos <br></td></table>";
        ?>
        <br><br>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="Pecas.php">Anterior</a></li>
                <li class="page-item"><a class="page-link" href="index.php">1</a></li>
                <li class="page-item"><a class="page-link" href="Empresa.php">2</a></li>
                <li class="page-item"><a class="page-link" href="Pecas.php">3</a></li>
                <li class="page-item"><a class="page-link" href="Servicos.php">4</a></li>
                <li class="page-item"><a class="page-link" href="Contato.php">5</a></li>
                <li class="page-item"><a class="page-link" href="Administrador.php">6</a></li>
                <li class="page-item"><a class="page-link" href="Cadastro.php">7</a></li>
                <li class="page-item"><a class="page-link" href="Contato.php">Próximo</a></li>

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



