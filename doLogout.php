<?php
session_start();
$t = md5(session_id());
if(isset($_GET['token']) and $_GET['token'] === $t  ){
    session_destroy();
    header('Location: http://localhost/login_php');
}else{
    echo '<a href="doLogout.php?token='.$t.'>Confirmar LogOut</a>';
}

?>