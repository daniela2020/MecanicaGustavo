<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <title></title> 
        
    </head>
    <body>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem= $_POST['mensagem'];
        ?>
        <?php
         $to =  "financeiro@mecanicagustavo.com.br";
         $subject = "Mensagem de contato";
         $message = "Olá, Ronaldo, <br><br> Nova mensagem de contato.<br><br>Nome:$nome<br>Email:$email<br>Telefone:$telefone<br>Mensagem:$mensagem";
         $header = "MIME-Version:1.0\n";
         $header .= "Content-type: text/html; charset=iso-8859-1\n";
         $header .= "From: $email\n"; 
         $mail ($to,$subject,$message,$header);
         echo "Mensagem enviada com sucesso!!!!";
         
         
         
         ?>
   
    </body>
    
    
    
</html>