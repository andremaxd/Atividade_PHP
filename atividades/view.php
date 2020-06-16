<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atividade <?php echo $atividade['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Tipo de Atividade:</dt>
	<dd><?php echo $atividade['tipo_atv']; ?></dd>

	<dt>Titulo:</dt>
	<dd><?php echo $atividade['titulo']; ?></dd>

	<dt>Descrição:</dt>
	<dd><?php echo $atividade['descricao']; ?></dd>

	<dt>Concluído:</dt>
	<dd>
			<?php if ($atividade['conc']): ?>
				<span>Sim</span>
			<?php else: ?>
				<span>Não</span>
			<?php endif; ?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Data de Cadastro:</dt>
	<dd><?php echo $atividade['created']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $atividade['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>