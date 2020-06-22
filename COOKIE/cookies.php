<?php
    $a = $_GET['nome'];
    $b = $_GET['email'];
    $c = $_GET['cidade'];
    setcookie('nome', $a, time()+60*60*24);
    setcookie('email', $b, time()+60*60*24);
    setcookie('cidade', $c, time()+60*60*24);

    header('Location: mensagem.php');
?>