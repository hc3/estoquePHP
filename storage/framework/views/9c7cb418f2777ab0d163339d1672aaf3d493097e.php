<?php $__env->startSection('conteudo'); ?>
<h1>Detalhes do produto: <?php echo e($produtos->nome); ?></h1>

<form>
	<input type="hidden"
	name="_token" value="<?php echo e(csrf_token()); ?>" />

	<div class="form-group">
		<label>Nome:</label>
		<input name="nome" disabled class="form-control" value="<?php echo e($produtos->nome); ?>"/>
	</div>

	<div class="form-group">
		<label>Descrição:</label>
		<input name="descricao" disabled class="form-control" value="<?php echo e($produtos->descricao); ?>"/>
	</div>

	<div class="form-group">
		<label id="total">Valor:</label>
		<input name="valor" disabled class="form-control" value="<?php echo e($produtos->valor); ?>"/> 
	</div>

	<div class="form-group">
		<label>Quantidade:</label>
		<input name="quantidade" type="number" disabled class="form-control" value="<?php echo e($produtos->quantidade); ?>"/> 
	</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>