<?php $__env->startSection('conteudo'); ?>
			<h1>Detalhes do produto: <?php echo e($p->nome); ?></h1>

			<ul>
				<li>
					<b>Nome: </b> R$ <?php echo e($p->nome); ?>

				</li>

				<li>
					<b>Valor: </b> R$  <?php echo e($p->valor); ?>

				</li>

				<li>
					<b>Descrição: </b> R$  <?php echo e($p->descricao); ?>

				</li>

				<li>
					<b>Quantidade: </b> R$ <?php echo e($p->quantidade); ?>

				</li>
			</ul>

<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>