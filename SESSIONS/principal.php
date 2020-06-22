<?php
    session_start();
    if($_SESSION['user_login']=='1'){
        echo "Seja Bem vindo";
    }else{
        header('Location: index.php');
    }
?>