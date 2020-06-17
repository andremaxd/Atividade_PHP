<?php
//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais.
session_start();
?>

<?php require_once 'config.php';?>
<?php require_once DBAPI;?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> Controle de Atividades</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header ">
            <h1 class="text-warning" style="color: #e1e3e6" >Acesso ao Sistema de Gestão de Atividades</h1>
        </div>
      </div>
    </nav>

		<div class="container" style="padding: 60px">

          <form method="POST" action="valida.php">
          
          <div class="col text-center">
              <h2 class="form-group">Identifique-se para acesso:</h2>
          </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Informe seu email">
            </div>
            <div class="form-group">
              <label for="senha">Senha:</label>
              <input type="password" name="senha" class="form-control" id="senha" placeholder="Informe sua senha">
            </div>
            <div class="col text-center">
              <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
            </div>
          </form>

          <p>
            <?php
            //Recuperando o valor da variável global, os erro de login.
            if (isset($_SESSION['loginErro'])) {
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>

        <p>
            <?php
              //Recuperando o valor da variável global, deslogado com sucesso.
              if (isset($_SESSION['logindeslogado'])) {
                  echo $_SESSION['logindeslogado'];
                  unset($_SESSION['logindeslogado']);
              }
              ?>
        </p>
    </div>

<hr>
<footer class="container">
    <p>&copy;2020 - Andre Max Dorneles</p>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo BASEURL; ?>js/jquery-1.11.2.min.js"><\/script>')</script>

<script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script>

<script src="<?php echo BASEURL; ?>js/main.js"></script>
</body>
</html>