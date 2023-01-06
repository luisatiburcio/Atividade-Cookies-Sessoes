<?php
  //iniciar uma sessao
  if(!isset($_SESSION))
    session_start();
  
  //verificar se existe um cookie salvo
  if(isset($_COOKIE["usermail"])){
    $_SESSION["logado"] = TRUE;
    //recupera o nome q esta no cookie e joga para sessao
    $_SESSION["user"] = $_COOKIE["username"];

    //redirecionar para home
    header("Location:home.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
  </head>
             
  <body class="text-center">
  
      <div class="row justify-content-center mt-5">
        <div class="jumbotron col-md-3 bg-light border mt-5">
          <div class="container ">
              <img class="mb-4" src="img/login.svg" alt="" width="72" height="72">

              <form action = "validaLogin.php" method = "POST">
                <input type="email" name="inputEmail" class="form-control" placeholder="Endereço de e-mail" required autofocus>
                <input type="password" name="inputSenha" class="form-control mt-2" placeholder="Senha" required>
                       
                <div class="form-group form-check mt-3">
                  <input type="checkbox" class="form-check-input" name = "checkConectado" id="checkConectado">
                  <label class="form-check-label" for="checkConectado">Permanecer conectado</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
              </form>

              <?php
                //verificar se a mensagem de erro existe
                if(isset($_SESSION["msg_login"])){

                  echo '<div class ="text-center text-danger mt-3">';
                  echo $_SESSION["msg_login"];
                  echo '</div';

                  //exclui a mensgem da sessao
                  unset($_SESSION["msg_login"]);
                }
              ?>

          </div>
        </div>
    </div>

  
    </body>
</html>