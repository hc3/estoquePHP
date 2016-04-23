<?php $__env->startSection('conteudo'); ?>
			<h1>Detalhes do Peça: <?php echo e($pecas->descricao); ?></h1>

			<form >
				<input type="hidden"
				name="_token" value="<?php echo e(csrf_token()); ?>" />

				<div class="form-group">
					<label>Descrição:</label>
					<input name="descricao" disabled class="form-control" value="<?php echo e($pecas->descricao); ?>"/>
				</div>

				<div class="form-group">
					<label>Valor:</label>
					<input name="valor" disabled class="form-control" value="<?php echo e($pecas->valor); ?>"/> 
				</div>

				<div class="form-group">
					<label>Quantidade:</label>
					<input name="quantidade" disabled type="number" class="form-control" value="<?php echo e($pecas->quantidade); ?>"/> 
				</div>
			</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>