<?php $__env->startSection('conteudo'); ?>

<h1>Detalhes do cliente: <?php echo e($cliente->nome); ?></h1>

<form >

	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

	<div class="form-group">
		<label>Nome:</label>
		<input name="nome" disabled value="<?php echo e($cliente->nome); ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Idade:</label>
		<input name="idade" disabled value="<?php echo e($cliente->idade); ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cpf:</label>
		<input name="cpf" disabled value="<?php echo e($cliente->cpf); ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Email:</label>
		<input name="email" disabled value="<?php echo e($cliente->email); ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Telefone:</label>
		<input name="telefone" disabled value="<?php echo e($cliente->telefone); ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Rua:</label>
		<input name="rua" disabled value="<?php echo e($cliente->endereco->rua); ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Bairro:</label>
		<input name="bairro" disabled value="<?php echo e($cliente->endereco->bairro); ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cep:</label>
		<input name="cep"  disabled value="<?php echo e($cliente->endereco->cep); ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cidade:</label>
		<input name="cidade"  disabled value="<?php echo e($cliente->endereco->cidade); ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Estado:</label>
		<input name="uf" disabled value="<?php echo e($cliente->endereco->uf); ?>" class="form-control"/>
	</div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>