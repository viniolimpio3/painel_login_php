<?php
//Constantes da conexão
define('host', '127.0.0.1');
define('user', 'root');
define('password', '');
define('db', 'login');

$connection = mysqli_connect(host, user, password, db) or die('Não foi possível conectar com o banco de dados!');


?>