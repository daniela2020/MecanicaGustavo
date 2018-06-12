
<!DOCTYPE html
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
<li><a href=Cadastro.php>Cadastro Cliente</a></li>
</ul></nav>
        <br><br><br>
        <!--
       <form>
   Novo Usuário:<input type="text" name="nome"/><br>
   Senha:<input type="password" name="senha"/><br>
   <input type="submit" name="action" value="Enviar"/><hr><hr>
</form>
        <br><br>      
 <!--  Aqui tem um exemplo de LISTA que podemos usar p nosso site achei na apostila web2 pag21 -------------
  
 <form>
           <input type="text" name="valor" id="valor" />
      Digite um nome  <input type="button" onclick="adicionar()" value="Adicionar"/>
           </form>
       
       <section id="valorTotal"> </section>
       


       <section id="valoresVetor" style="border:1px solid black;width:150px;height:150px;overflow:auto">


       </section>
       <script>
           function adicionar() {
               var valorInput = document.getElementById('valor');
               var valorTotalHTML = document.getElementById('valorTotal');


               var valor = valorInput.value;
               var valorTotal = valorTotalHTML.innerHTML;


               valorTotal = parseInt(valorTotal) + parseInt(valor);


               valorTotalHTML.innerHTML = valorTotal;


               var elementoLista = document.getElementById('valoresVetor');


               elementoLista.innerHTML += "<br>" + valor;


           }


       </script><hr><hr>
   ------------------------------>

      <!--
   </head>
   <body>
       <form action="#" method="post" onSubmit="return enviardados();" >
           Nome    <input type="text" id="Nome" /> <br><br>
           Mensagem <textarea cols="40" rows="6" id="mensagem" /></textarea><br>
           <input type="submit" value="Enviar dados" />
           <input type="reset" value="Redefinir" /><hr><hr>
       </form>   

        <!--FIM DA VALIDAÇÃO DO FORMULÁRIO      ---->
     
        
        <!--apostila web2 pag8 -->
        <form method="POST"><h1>Trabalhe Conosco</h1>
        <br><b>Preencha os dados:</b><br><br>
           Nome:<input type="text" name="nome" /><br>
           Endereço:<input type="text" name="endereco" /><br>
           Cidade:<input type="text" name="cidade" /><br>
           Estado: <select name="estado">
               <option value="rs">RS</option>
               <option value="SC">SC</option>
           </select><br><br>
           <b>Natureza do cargo:</b><br><br>
           Oficina<input type="radio" name="natureza" value="Oficina" > 
           
           Loja <input type="radio" name="natureza" value="Loja" ><br><br>
           <b>Área:</b><br><br>
           <input type="checkbox" name="area[]" value="Mecânico">Mecânico:<br>
           <input type="checkbox" name="area[]" value="Auxiliar Mecânico">Auxiliar Mecânico: <br>
           <input type="checkbox" name="area[]" value="Vendedor">Vendedor: <br>
           <input type="checkbox" name="area[]" value="Aux.Escritorio">Aux.Escritorio: <br>
           <input type="checkbox" name="area[]" value="Serviços Gerais"> Serviços Gerais: <br>
           <input type="checkbox" name="area[]" value="Outros">Outros: <br>
           <input type="submit" name="submit">
           <input type="reset" name="limpar">
       </form>

       <br>
       <?php
       $handle = fopen("teste.txt", "a+");


       $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
       if (strlen(trim($nome)) > 0) {
           $arr = ['nome' => $nome,
               'endereco' => filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING),
               'cidade' => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING),
               'estado' => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING),
               'natureza' => filter_input(INPUT_POST, 'natureza', FILTER_SANITIZE_STRING),
               'area' => filter_input(INPUT_POST, 'area', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY)
           ];


           $arrSerializado = serialize($arr) . PHP_EOL;
           fputs($handle, $arrSerializado, strlen($arrSerializado));


           //fclose($handle);
           //$handle = fopen("teste.txt", "r");     
           rewind($handle);
       }


       echo '<table border=1>';
       echo '<tr>';
       echo '<th>nome</th><th>endereco</th><th>cidade</th><th>estado</th><th>natureza</th><th>area</th>';
       echo '</tr>';


       while (!feof($handle)) {


           $linha = unserialize(fgets($handle));
           if (strlen(trim($linha['nome'])) > 0) {
               echo '<tr>';
               echo '<td>' . $linha['nome'] . '</td><td>' . $linha['endereco'] . '</td><td>' . $linha['cidade'] . '</td><td>' . $linha['estado']. '</td><td>' . $linha['natureza']. '</td><td>' .print_r($linha['area'], true) . '</td>';
               echo '</tr>';
           }
       }


       echo '</table>';


       fclose($handle);
       ?>

 <!--Aguardar por enquanto este xxxxxx 
  
<form action="Script_do_Formulario.php" method="post">

<!-- DADOS PESSOAIS-->
<!--<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
   <td>
    <label for="sobrenome">Sobrenome: </label>
   </td>
   <td align="left">
    <input type="text" name="sobrenome">
   </td>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
    <input type="text" name="dia" size="2" maxlength="2" value="dd"> 
   <input type="text" name="mes" size="2" maxlength="2" value="mm"> 
   <input type="text" name="ano" size="4" maxlength="4" value="aaaa">
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="13"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2" maxlength="2">
   </td>
  </tr>
 </table>
</fieldset>

<br />
<!-- ENDEREÇO -->
<!-- <fieldset> <!--/*agrupar elementos, assim como labels (<label>), dentro de um formulário web. -->
<!-- <legend>Dados de Endereço</legend>
 <table cellspacing="10">

  <tr>
   <td>
    <label for="rua">Rua:</label>
   </td>
   <td align="left">
    <input type="text" name="rua">
   </td>
   <td>
    <label for="numero">Numero:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="4">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro">
   </td>
  </tr>
  <tr>
   <td>
    <label for="estado">Estado:</label>
   </td>
   <td align="left">
    <select name="estado"> 
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Ceará</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Espírito Santo</option> 
    <option value="go">Goiás</option> 
    <option value="ma">Maranhão</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Pará</option> 
    <option value="pb">Paraíba</option> 
    <option value="pr">Paraná</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piauí</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rondônia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">São Paulo</option> 
    <option value="to">Tocantins</option> 
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
   </td>
  </tr>
 </table>
</fieldset>
<br />
      
<!----ver se vamos utilizar-->
        <!-- DADOS DE LOGIN -->
<!--              <fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
  </tr>
  <tr>
   <td>
    <label for="imagem">Imagem de perfil:</label>
   </td>
   <td>
    <input type="file" name="imagem" >

   </td>
  </tr>
  <tr>
   <td>
    <label for="login">Login de usuário: </label>
   </td>
   <td align="left">
    <input type="text" name="login">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="pass">
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" name="passconfirm">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<input type="submit">
<input type="reset" value="Limpar">
</form> -->


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="Contato.php">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Empresa.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Pecas.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Servicos.php">4</a></li>
    <li class="page-link"><a class="page-link" href="Contato.php.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Administrador.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Cadastro.php">7</a></li>
    <li class="page-link"><a class="page-link" href="Cadastro.php">Próximo</a></li>
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

