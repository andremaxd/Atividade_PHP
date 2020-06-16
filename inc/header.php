
  <?php  
  if(!isset($_SESSION)) { session_start(); }
   
  
    $usr = $_SESSION['usuarioId'];

  if(!isset($usr)){
        header("Location: login.php");
    }  
  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>&bull; ADM Atividades</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">INICIO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Atividades <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>atividades/index.php">Atividades Abertas</a></li>
                    <li><a href="<?php echo BASEURL; ?>atividades/index_con.php">Atividades Concluídas</a></li>                    
                    <li><a href="<?php echo BASEURL; ?>atividades/add.php">Nova Atividade</a></li>
                </ul>
            </li>
          </ul>
          <span class="navbar-brand" style="float: right"><?php echo $_SESSION['usuarioNome'] ?> 
            <a href="<?php echo BASEURL; ?>sair.php"><i class='fas fa-power-off' style='font-size:24px'></i></a>
          </span>
         
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <main class="container">