<?php
session_start();


$user = $_SESSION['username'];
$pass = $_SESSION['userpass'];
$mail = $_SESSION['usermail'];


if(empty($user) || empty($mail) || empty($pass)  ){   
    header('Location: index.php');
    exit();
}else{
    $_SESSION['logado'] = true;
    $logado = $_SESSION['logado'];
    $_REQUEST['logout'] = '';
}

echo "Usuário: $user <br>";
echo "Email: $mail <br>";
echo "<a href='http://localhost/login_php/doLogout.php?token=".md5(session_id())."'>Deslogar</a>";



?>

