<?php
include('../connection.php');

$post_mail = $_POST['mail'];

if(empty($post_mail)){
    header('Location:.');
    exit();
}


$mail = mysqli_real_escape_string($connection ,$post_mail);

$query = "select * from user where mail_user = '{$mail}' ";

$result = mysqli_query($connection, $query);

if($result === false) die('Erro na Conexão com o Banco de Dados!');


//BUSCANDO NOME DA PESSOA
while ($rows = mysqli_fetch_assoc($result)) { 
    $nome_user = $rows['name_user'];
}


$row = mysqli_num_rows($result);

if($row !== 1){
    echo'<script> alert("Não existe um usuário com este email!"); console.error("Usuário não existente")</script>';
}else{
    
    //Rotina de Emails
    $headers = "From: EMPRESATESTE viniolimpio3@gmail.com";   
    $to = "viniolimpio3@gmail.com";
    $subject = "Recuperação de Senha do Sistema de Login";
    $msg = 
        '<html>
            <body>

                <h1> Aperte o botão para refazer sua senha</h1>
                <button> <a href="http://localhost/login_php/recovering/"> Clique </a> </button>
            </body>    
        </html>';
    

    //CONFIGURAÇÕES
    $enviou = mail($to, $subject, $msg,$headers);

  
    
    if ($enviou ){
        echo "<script>
        alert('$nome_user, seu email foi enviado com sucesso!');
        location.href='http://localhost/login_php/index.php';
        </script>";
    }else {
        echo "<script>
        alert('$nome_user, seu email não foi enviado.');
        location.href='http://localhost/login_php/recovering/';
        </script>";

    }


}

?>