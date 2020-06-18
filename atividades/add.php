<?php 
  require_once('functions.php'); 
  add();
?>

<!-- INCLUI O CABEÇALHO DA PÁGINA -->

<?php include(HEADER_TEMPLATE); ?>
  <div class="row">
		<div class="text-center">
      <h2>Nova Atividade</h2>
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

<!-- ADD UM METODO POST PARA ENVIO DAS INFORMAÇÕES SALVAS -->
<form action="add.php" method="post">

<?php
date_default_timezone_set ('America/Sao_Paulo');?>
  
  <hr />
<!-- FORMULÁRIO PARA INSERÇÃO DAS INFORMAÇÕES -->
    <div class="form-group">
      <label for="exampleFormControlSelect1">Tipo de Atividade</label>
      <select type="text" class="form-control" id="exampleFormControlSelect1" name="atividade['tipo_atv']">
        <option>Desenvolvimento</option>
        <option>Atendimento</option>
        <option>Manutenção</option>
        <option>Manutenção Urgente</option>
      </select>
    </div>

    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" name="atividade['titulo']">
    </div>

    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea type="textarea" class="form-control" rows="3" name="atividade['descricao']"></textarea>
    </div>

    <div class="form-group col-md-2">
      <input type="checkbox" name="concluido"> Concluído
    </div>   

    <div class="form-group col-md-3">
      <label for="campo3">Data de Cadastro:</label>
      <input type="text" class="form-control" placeholder="aaaa/mm/dd hh:mm:ss" name="atividade['created']" disabled>
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