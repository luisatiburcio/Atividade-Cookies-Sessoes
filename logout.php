<?php
    if(!isset($_SESSION))
        session_start();

    //limpando os dados da sessao
    session_unset();

    session_destroy();

    //deletar os cookies -> alterar para um tempo de expiracao q ja passou
    setcookie("usermail", "", time()-1);
    setcookie("username", "", time()-1);

    //redirecionar para a tela de login
    header("Location:login.php");
?>