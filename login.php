
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Felipe Henrique">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Controlador Arduino</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">


  <link href="css/signin.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <style type="text/css" media="screen">
  body {
    padding-top: 40px;
    padding-bottom: 40px;
    background: #136a8a;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #267871, #136a8a);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #267871, #136a8a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
  .msg{
    font-size: 20px;
  }
  .fundo{
    background-color: white;
    border-radius: 5px;
  }
</style>
</head>

<body>
  <div class="background_fundo"></div>
  <div class="container">

    <form class="form-signin" method="POST" action="valida.php">

      <h2 class="form-signin-heading">Bem Vindo</h2>

      <label for="inputEmail" class="sr-only">Usuário</label>

      <input type="text" name="txt_usuario" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus>

      <label for="inputPassword" class="sr-only">Senha</label>

      <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha" required>

      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>

      <button class="btn btn-lg btn-success btn-block" type="submit">Acessar</button>
      <br>
      
      <div class="fundo">
        <p class="msg text-center text-danger">

          <?php 

          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];

            unset($_SESSION['msg']);
          }

          ?>

        </p>

        <p class="msg text-center text-success">
          <?php  

          if(isset($_SESSION['deslogado'])){
            echo $_SESSION['deslogado'];
            unset($_SESSION['deslogado']);
          }

          ?>
        </p>
      </div>
    </form>

  </div>

  <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

