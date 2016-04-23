<?php $__env->startSection('conteudo'); ?>
			<h1>Alterando produto</h1>

			<form action="/produtos/atualizar/<?= $produtos->id ?>" method="post">
				<input type="hidden"
				name="_token" value="<?php echo e(csrf_token()); ?>" />

				<div class="form-group">
					<label>Nome:</label>
					<input name="nome" class="form-control" value="<?php echo e($produtos->nome); ?>"/>
				</div>

				<div class="form-group">
					<label>Descrição:</label>
					<input name="descricao" class="form-control" value="<?php echo e($produtos->descricao); ?>"/>
				</div>

				<div class="form-group">
					<label>Valor:</label>
					<input name="valor" class="form-control" value="<?php echo e($produtos->valor); ?>"/> 
				</div>

				<div class="form-group">
					<label>Quantidade:</label>
					<input name="quantidade" type="number" class="form-control" value="<?php echo e($produtos->quantidade); ?>"/> 
				</div>

					<button type="submit" class="btn btn-primary btn-block">Update</button>
			</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>