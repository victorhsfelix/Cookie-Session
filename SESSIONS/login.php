<?php
    session_start();
    $a = $_POST['login'];
    $b = $_POST['senha'];
    if($a=="Victor" && $b==20317){
        $_SESSION['user_login']='1';
    }else{
        $_SESSION['user_login']='0';
    }
    header('Location: principal.php')
?>