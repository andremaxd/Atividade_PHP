<?php
    require_once('functions.php');
    index();
?>

<!-- INCLUI O CABEÇALHO DA PÁGINA -->
<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6 text-center">
			<h2>Atividades Abertas</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Nova Atividade</a> <!-- CRIA NOVA ATIVIDADE -->
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a> <!-- ATUALIZA A PAGINA -->
	    </div>
	</div>
</header>

<!-- MENSAGEM -->
<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<!-- CAMPOS A SEREM EXIBIDOS -->
<table class="table table-borderless">
<thead >
	<tr class="text-align-center">
		<th>ID</th>
		<th >Tipo de atividade</th>
		<th>Título</th>
		<th >Descrição</th>
        <th>Concluído</th>
		<th>Atualizado em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($atividades_abertas) : ?>
<?php foreach ($atividades_abertas as $atividade) : ?>
	<tr class="text-align-center">
		<td><?php echo $atividade['id']; ?></td>
		<td><?php echo $atividade['tipo_atv']; ?></td>
		<td><?php echo $atividade['titulo']; ?></td>
        <td><?php echo $atividade['descricao']; ?></td>

        <td>
			<?php if ($atividade['conc']): ?>
				<span>Sim</span>
			<?php else: ?>
				<span>Não</span>
			<?php endif; ?>
		</td>
		
		<td><?php echo $atividade['modified']; ?></td>
		<td width="19%" class="actions text-right">
			<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#concluir-modal" data-atividades="<?php echo $atividade['id']; ?>">
					<i class="fa fa-lock"></i> Concluir</a>

			<a href="view.php?id=<?php echo $atividade['id']; ?>" title="Visualizar" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
			<a href="edit.php?id=<?php echo $atividade['id']; ?>" title="Editar" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i> </a>
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

<!-- INCLUI OS MODALS PARA A REALIZAÇÃO DA EXCLUSÃO OU CONCLUSÃO DAS ATIVIDADES -->
<?php include('modal.php'); ?>
<?php include('modal_concluir.php'); ?>

<!-- INCLUI O TEMPLATE DO RODAPÉ DA PÁGINA -->
<?php include(FOOTER_TEMPLATE); ?>