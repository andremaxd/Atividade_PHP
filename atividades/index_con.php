<?php
	require_once('functions.php');
    index();
?>
<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6 text-center">
			<h2>Atividades Concluídas:</h2>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr class="text-center">
		<th>ID</th>
		<th>Tipo de atividade</th>
		<th>Título</th>
        <th>Concluído</th>
		<th>Concluído em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($atividades_concluidas) : ?>
<?php foreach ($atividades_concluidas as $atividade) : ?>
	<tr class="text-algin-center">
		<td><?php echo $atividade['id']; ?></td>
		<td><?php echo $atividade['tipo_atv']; ?></td>
		<td><?php echo $atividade['titulo']; ?></td>


		<td>
			<?php if ($atividade['conc']): ?>
				<span>Sim</span>
			<?php else: ?>
				<span>Não</span>
			<?php endif; ?>
		</td>
		
		<td><?php echo $atividade['modified']; ?></td>
		<td width="13%" class="actions text-right">
			<a href="view.php?id=<?php echo $atividade['id']; ?>" title="Visualizar" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> </a>
			<a href="edit.php?id=<?php echo $atividade['id']; ?>" title="Editar" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i> </a>
			<!-- <a href="#" class="btn btn-sm btn-danger" title="Excluir" data-toggle="modal" data-target="#delete-modal" data-atividades="<?php echo $atividade['id']; ?>">
				<i class="fa fa-trash"></i> 
			</a> -->
			<?php if ($atividade['tipo_atv'] != 'Manutenção Urgente'): ?>
				<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" title="Excluir" data-target="#delete-modal" data-atividades="<?php echo $atividade['id']; ?>">
				<i class="fa fa-trash"></i>
				</a>
			<?php else: ?>
				
			<?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>