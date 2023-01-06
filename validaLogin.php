<?php
    //iniciar uma sessao
    if(!isset($_SESSION))
        session_start();

    //definir os dados que seriam recuperados do banco de dados
    $email_cadastrado = "glutao@gmail.com";
    $senha_cadastrada = "123";

    //recuperar os dados que o usuario digitou
    $email_entrada = isset($_POST["inputEmail"]) ? $_POST["inputEmail"]:"";
    $senha_entrada = isset($_POST["inputSenha"]) ? $_POST["inputSenha"]:"";

    //verificar se o login e a senha estao corretos
    if($email_entrada == $email_cadastrado && $senha_entrada == $senha_cadastrada) {
        //guardar as informações do usuário na sessão
        //Na aplicação real: recuperar o nome do usuário do BD e guardar na sessão 
        $nome_cadastrado = "Glutão Anônimo";
        $_SESSION["user"] = $nome_cadastrado;
        
        //guardar o estado do usuário da página
        $_SESSION["logado"] = TRUE;

        if(isset($_POST["checkConectado"])){
            //criar cookies com os dados do usuario
            //cookies com duração de 1 hr = 3600 segs
            //armazena o e-mail do usuário
            setcookie("usermail", $email_entrada, time() + 3600);
            //armazena o nome do usuário
            setcookie("username", $nome_cadastrado, time() + 3600);
        }

        header("Location:home.php");

    } else {
        //enviar uma mensagem de erro para sessao
        $_SESSION["msg_login"] = "Email ou senha incorretos";
        header("Location:login.php");  //redirecionando para a página de login
    }


?>