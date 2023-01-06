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
    $msg_ola = "Olá ". $_SESSION["user"]. "!";
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

    <title>Home</title>
    </head>
              
    <body class="m-3">
    	<div class="jumbotron bg-transparent">
    		<h1 class="display-4"> <?php echo $msg_ola?> </h1>

    		<hr class="my-4">
          <p class="lead">
            <!-- Link para página2-->
            <a class="btn btn-primary" href = "page2.php" role="button">Ir para página 2</a>
            <!-- Link para fazer o Logout-->
            <a class="btn btn-primary" href = "logout.php" role="button">Fazer logout</a>
          </p>
		</div>

 
    
  
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
