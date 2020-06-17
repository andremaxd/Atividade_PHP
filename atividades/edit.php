<?php 
  require_once('functions.php'); 
  edit();
?>

<!-- INCLUI O CABEÇALHO DA PÁGINA -->
<?php include(HEADER_TEMPLATE); ?>

<hr>

<div class="row">
		<div class="text-center">
      <h2>Editar Atividades</h2>
    </div>
  </div>

<!-- INCLUI A MENSAGEM -->

  <?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
  <?php endif; ?>


<!-- ADD UM METODO POST PARA ENVIO DAS INFORMAÇÕES EDITADAS -->
<form action="edit.php?id=<?php echo $atividade['id']; ?>" method="post">


  <hr />
  <div class="row">

<!-- FORMULÁRIO PARA INSERÇÃO DA EDIÇAO DAS INFORMAÇÕES -->

    <div class="form-group">
      <label for="exampleFormControlSelect1">Tipo de Atividade</label>
      <select type="text" class="form-control" id="exampleFormControlSelect1" name="atividade['tipo_atv']" value="<?php echo $atividade['tipo_atv']; ?>">
        <option <?php if ($atividade['tipo_atv'] == 'Desenvolvimento'){echo 'selected';} ; ?>>Desenvolvimento</option>
        <option <?php if ($atividade['tipo_atv'] == 'Atendimento'){echo 'selected';} ; ?>>Atendimento</option>
        <option <?php if ($atividade['tipo_atv'] == 'Manutenção'){echo 'selected';} ; ?>>Manutenção</option>
        <option <?php if ($atividade['tipo_atv'] == 'Manutenção Urgente'){echo 'selected';} ; ?>>Manutenção Urgente</option>
      </select>
    </div> 

    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" name="atividade['titulo']" value="<?php echo $atividade['titulo']; ?>">
    </div>


    <div class="form-group">
        <label for="Descricao">Descrição</label>
        <textarea type="textarea" class="form-control" rows="3" name="atividade['descricao']"><?php echo $atividade['descricao']; ?></textarea> 
    </div>

    <div class="form-group col-md-2">
      <?php if ($atividade['conc']): ?>
        <input type="checkbox" name="concluido" checked />
      <?php else: ?>
        <input type="checkbox" name="concluido" />
      <?php endif; ?>
      Concluído
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Data da Criação:</label>
      <input type="text" class="form-control" placeholder="aaaa/mm/dd hh:mm:ss" name="atividade['created']" disabled value="<?php echo $atividade['created']; ?>">
    </div>

    </div>
    
    <div id="actions" class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>

<!-- INCLUI O TEMPLATE DO RODAPÉ DA PÁGINA -->
<?php include(FOOTER_TEMPLATE); ?>