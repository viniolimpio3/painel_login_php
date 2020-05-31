<?php
session_start();//sempre que usar session, colocar essa função p o php identificar!!
include('connection.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if( empty($usuario) ||  empty($senha) ){
    //se email ou senha vazio, ele seta a url pra index.php
    header('Location: index.php');
    exit();
}

//essa função também faz validação contra sql injection
$mail = mysqli_real_escape_string($connection ,$usuario);
$password = mysqli_real_escape_string($connection ,$senha);

$query = "select * from user where mail_user = '{$mail}'  and pass = md5('{$password}') ";

$result = mysqli_query($connection, $query);


$row = mysqli_num_rows($result);//retorna o número de linhas que contém a query $result

if($row !== 1){

	header('Location: index.php');
	exit();
	
}else{

	$user_name = mysqli_query($connection,$query) or die("Erro");
	
	mysqli_set_charset($connection,'utf8');

	//GUARDANDO O CONTEÚDO DA BUSCA  - IMPORTANTE
	while ($rows = mysqli_fetch_assoc($user_name)) { 
		$sess_user = $rows['name_user'];
		echo $rows['name_user'];
	}

	//sessão para fazer validação na página interna (painel.php)
	$_SESSION['usermail'] = $mail;
	$_SESSION['username'] = $sess_user;
	$_SESSION['userpass'] = $password;
	
	header('Location: painel.php');//redireciona
	exit();
}

?>