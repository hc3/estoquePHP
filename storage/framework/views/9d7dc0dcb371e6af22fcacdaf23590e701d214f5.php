<?php $__env->startSection('conteudo'); ?>
<h1>Novo Produto</h1>

<form action="/clientes/adiciona" method="post">
	<input type="hidden"
	name="_token" value="<?php echo e(csrf_token()); ?>" />

	<div class="form-group">
		<label>Nome:</label>
		<input name="nome" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Idade:</label>
		<input name="idade" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cpf:</label>
		<input name="cpf" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Email:</label>
		<input name="email" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Telefone:</label>
		<input name="telefone" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Rua:</label>
		<input name="rua" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Bairro:</label>
		<input name="bairro" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cep:</label>
		<input name="cep" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cidade:</label>
		<input name="cidade" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Estado:</label>
		<input name="uf" class="form-control"/>
	</div>

	<div>
		adiciona
	</div>

		<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>