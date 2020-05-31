<?php
session_start();

$user = $_SESSION['username'];
$pass = $_SESSION['userpass'];
$mail = $_SESSION['usermail'];

echo "Usuário: $user <br>";
echo "Email: $mail <br>";

if(empty($user) || empty($mail) || empty($pass)){   
    header('Location: index.php');
}


?>

