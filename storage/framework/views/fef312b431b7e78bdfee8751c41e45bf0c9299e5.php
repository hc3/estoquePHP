<?php $__env->startSection('conteudo'); ?>
	
		<?php if(empty($produtos)): ?>
		<div class="alert alert-danger">
			Você não tem produtos cadastrados
		</div>
		<?php else: ?>
		<h1>Listagem de Produtos</h1>
		<table class="table table-hover">
			<th>Id</th>
			<th>Nome</th>
			<th>Valor</th>
			<th>Descrição</th>
			<th>Quantidade</th>
			 	<?php foreach($produtos as $p): ?>
			<tr class="<?php echo e($p->quantidade<=1 ? 'danger' : ''); ?>">
				<td> <?php echo e($p->id); ?> </td>
				<td> <?php echo e($p->nome); ?>  </td>
				<td> <?php echo e($p->valor); ?> </td>
				<td> <?php echo e($p->descricao); ?> </td>
				<td> <?php echo e($p->quantidade); ?> </td>
				<td><a href="/produtos/show/<?= $p->id ?>">
					<span class="glyphicon glyphicon-search"></span>
				</a></td>
			</tr>
				<?php endforeach; ?>
		</table>
		<?php endif; ?>
		<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>