<?php
  //iniciar uma sessao
  if(!isset($_SESSION))
    session_start();

  //verificar se existe um cookie salvo
  if(isset($_COOKIE["usermail"])){
    $_SESSION["logado"] = TRUE;
    //recupera o nome q esta no cookie e joga para sessao
    $_SESSION["user"] = $_COOKIE["username"];
  }

  //verificar se existe um usuário logado na sessao
  if(!isset($_SESSION["logado"]) || $_SESSION["logado"] == FALSE){
    
    //nao tem usuario logado, redirecionar para o login
    header("Location:login.php");

  } else {

    //tem usuário logado
    $msg_info = $_SESSION["user"]. " ainda esta logado.";
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

    <title>Página 2</title>
    </head>
              
    <body class="m-2">

    <div class="jumbotron bg-transparent">
      <h1 class="display-4"> Página 2 </h1>
      <p class="lead"><?php echo $msg_info;?></p>
     
      <hr class="my-4">
      <!-- Link para home-->
      <a class="btn btn-primary" href = "home.php" role="button">Ir para Home</a>

      <!-- Link para fazer o Logout-->
      <a class="btn btn-primary" href = "logout.php" role="button">Fazer logout</a>
	</div>
  
  </body>
</html>