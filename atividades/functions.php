<?php

require_once('../config.php');
require_once(DBAPI);

include_once("../inc/database.php"); 

//session_start();
$atividades = null;
$atividade = null;
$atividades_concluidas = array();
$atividades_abertas = array();

/**
 *  Listagem de Atividades
 */
function index() {
  global $atividades;
  global $atividades_concluidas;
  global $atividades_abertas;

  $atividades = find_all('atividades');
  
  if($atividades){
    foreach ($atividades as &$atv) {
      if ($atv['conc']){
        array_push($atividades_concluidas, $atv);
      } else {
        array_push($atividades_abertas, $atv);
      }
  }
}


}


/**
 *  Cadastro de Clientes
 */
function add() {

    if (!empty($_POST['atividade'])) {
      
      $today = 
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
      $atividade = $_POST['atividade'];
      $atividade['modified'] = $atividade['created'] = $today->format("Y-m-d H:i:s");
      if(isset($_POST['concluido']))
      {
        $atividade['conc'] = true;
      }
      else
      {
        $atividade['conc'] = false;
      }


      $atv = array_values ($atividade);
      session_start();
      $temProblema = false;
      if ($atividade['conc']) {
        if (strlen($atv[2]) < 50 && ($atv[0] == 'Manutenção Urgente' || $atv[0] == 'Atendimento')) {
          $atividade['conc'] = false;
          $temProblema = true;
       }
      }
      date_default_timezone_set ('America/Sao_Paulo');
      if ($atv[0] == 'Manutenção Urgente' && intval(date('H')) > 13 && intval(date('w')) == 5) {
        //echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
        // alert('Não podem ser abertas Manutenções Ugentes após as 13Hrs de Sexta-Feira!');
        $_SESSION['message'] = "Não podem ser abertas Manutenções Ugentes após as 13Hrs de Sexta-Feira!";
        $_SESSION['type'] = 'warning';
        //header('location: #');
      }else{
        save('atividades', $atividade);
        if ($temProblema) {
            $_SESSION['message'] = "Para concluir uma tarefa do tipo Manutenção Urgente ou Atendimento é necessário que a descrição tenha pelo menos 50 caracteres!";
            $_SESSION['type'] = 'warning';
          }
      header('location: index.php');
      }
    }
      
  } 


  
/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
    if (isset($_GET['id'])) {
  
      $id = $_GET['id'];
  
      if (isset($_POST['atividade'])) {
  
        $atividade = $_POST['atividade'];
        $atividade['modified'] = $now->format("Y-m-d H:i:s");
  
        if(isset($_POST['concluido']))
        {
          $atividade['conc'] = true;
        }
        else
        {
          $atividade['conc'] = false;
        }

        $atv = array_values ($atividade);
        session_start();
        $temProblema = false;
        if ($atividade['conc']) {
          if (strlen($atv[2]) < 50 && ($atv[0] == 'Manutenção Urgente' || $atv[0] == 'Atendimento')) {
            $atividade['conc'] = false;
            $temProblema = true;
         }
        }

      date_default_timezone_set ('America/Sao_Paulo');
      if ($atv[0] == 'Manutenção Urgente' && intval(date('H')) > 13 && intval(date('w')) == 5) {
        //echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
        // alert('Não podem ser abertas Manutenções Ugentes após as 13Hrs de Sexta-Feira!');
        $_SESSION['message'] = "Não podem ser abertas Manutenções Ugentes após as 13Hrs de Sexta-Feira!";
        $_SESSION['type'] = 'warning';
        //header('location: #');
      } else{

        update('atividades', $id, $atividade);
        if ($temProblema) {
          $_SESSION['message'] = "Para concluir uma tarefa do tipo Manutenção Urgente ou Atendimento é necessário que a descrição tenha pelo menos 50 caracteres!";
          $_SESSION['type'] = 'warning';
        }
        header('location: index.php');
      }
      } else {
        global $atividade;
        $atividade = find('atividades', $id);
      } 
    } else {
      header('location: index.php');
    }
  }

/**
 *  Visualização da atividade
 */
function view($id = null) {
  global $atividade;
  $atividade = find('atividades', $id);

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
}


function concluir($id = null) {
  
  global $atividade;
  $atividade = find('atividades', $id);

  //$atividade['modified'] = $now->format("Y-m-d H:i:s");
  $atividade['conc'] = true;

  session_start();

  if (strlen($atividade['descricao']) < 50 && ($atividade['tipo_atv'] == 'Manutenção Urgente' || $atividade['tipo_atv'] == 'Atendimento')) {
    $_SESSION['message'] = "Para concluir uma tarefa do tipo Manutenção Urgente ou Atendimento é necessário que a descrição tenha pelo menos 50 caracteres!";
    $_SESSION['type'] = 'warning';
  } else {
    $_SESSION['message'] = 'Atividade '.$atividade['id'].' Concluída!';
    update('atividades', $id, $atividade);
  }
  header('location: index.php');
}


/**
 *  Exclusão de uma atividade
 */
function delete($id = null) {

  global $atividade;
  $atividade = remove('atividades', $id);

  header('location: index.php');
}

function clear_messages() {
  unset($_SESSION['message']);
}