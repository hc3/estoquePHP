<?php $__env->startSection('conteudo'); ?>
<h1>Novo Produto</h1>

<form action="/produtos/adiciona" method="post">
	<input type="hidden"
	name="_token" value="<?php echo e(csrf_token()); ?>" />

	<div class="form-group">
		<label>Nome:</label>
		<input name="nome" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Descrição:</label>
		<input name="descricao" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Valor:</label>
		<input name="valor" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Quantidade:</label>
		<input name="quantidade" type="number" class="form-control"/>
	</div>

		<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>