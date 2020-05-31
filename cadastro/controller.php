<?php
include('../connection.php');
$name_post = $_POST['name'];
$mail_post = $_POST['mail'];
$pass_post = $_POST['pass'];

if(  empty($name_post) || empty($mail_post || empty($pass_post))){
    header('Location: .');
    exit();
}
$name = mysqli_real_escape_string($connection,$name_post);
$mail = mysqli_real_escape_string($connection,$mail_post);
$pass = mysqli_real_escape_string($connection,$pass_post);


$query = "insert into user (name_user, mail_user, pass) values('{$name}', '{$mail}', md5('{$pass}') )";

$result = mysqli_query($connection, $query);

if(!$result) {
    die('Erro. Tente novamente mais tarde <br> <a href="http://localhost/login_php/cadastro">Voltar</a>');
}else{
    echo('<script>
        alert("Usuário cadastrado com sucesso!");
        location.href="http://localhost/login_php/index.php"
    
    </script>');
}



?>