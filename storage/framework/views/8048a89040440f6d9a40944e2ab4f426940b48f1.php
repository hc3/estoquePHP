<?php $__env->startSection('conteudo'); ?>
<?php if(empty($clientes)): ?>
<div class="alert alert-danger">
	Você não tem clientes cadastrados
</div>
<?php else: ?>
<div class="container">
	<h1>Clientes</h1>
	<button class="demo btn btn-primary btn-large" data-toggle="modal" href="#responsive">Cadastrar</button>
</br>
</br>
<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4 class="modal-title">Inserir Clientes</h4>
	</div>
	<div class="modal-body">
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
			<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
		</form>
	</div>
</div>
		<!-- 
			TABELA QUE VAI EXIBIR OS DADOS
		-->
		<table id="tabelaCliente" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Idade</th>
			<th>Cpf</th>
			<th>Telefone</th>
			<th>Email</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
			
	<tbody>
		<tr>
		<?php foreach($clientes as $key=>$cli): ?>
			<td> <?php echo e($cli->id); ?> </td>
			<td> <?php echo e($cli->nome); ?>  </td>
			<td> <?php echo e($cli->idade); ?> </td>
			<td> <?php echo e($cli->cpf); ?> </td>
			<td> <?php echo e($cli->telefone); ?> </td>
			<td> <?php echo e($cli->email); ?> </td>

			<td align="center">
				<a class="buscar" id="<?php echo e($key); ?>" data-toggle="modal" data-id="<?php echo e($clientes); ?>">
					<span class="glyphicon glyphicon-eye-open"></span>
				</a>
			</td>

			<td align="center">
				<a href="/clientes/remove/<?= $cli->id ?>">
					<span class="glyphicon glyphicon-trash"> </span>
				</a>
			</td>
			<td align="center">
				<a class="editar" id="<?php echo e($key); ?>" data-toggle="modal" data-id="<?php echo e($clientes); ?>" value="<?php echo e($cli->id); ?>">
					<span class="glyphicon glyphicon-pencil"></span>
				</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	<div id="divAlterar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4 class="modal-title">Inserir Produto</h4> 
	</div>
	<div class="modal-body">
	 	<form id="formUpdate" method="post">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

			<div class="form-group">
				<label>Nome:</label>
				<input name="nome" id="cliNomeEdit"  value="<?php echo e($cli->nome); ?>"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Idade:</label>
				<input name="idade" id="cliIdadeEdit"  value="<?php echo e($cli->idade); ?>"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Cpf:</label>
				<input name="cpf" id="cliCpfEdit"  value="<?php echo e($cli->cpf); ?>"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input name="email" id="cliEmailEdit"  value="<?php echo e($cli->email); ?>"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Telefone:</label>
				<input name="telefone" id="cliTelefoneEdit"  value="<?php echo e($cli->telefone); ?>"class="form-control"/>
			</div>
			<div class="form-group">
				<label>Rua:</label>
				<input name="rua" id="cliRuaEdit"  value="<?php echo e($cli->endereco->rua); ?>"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Bairro:</label>
				<input name="bairro" id="cliBairroEdit"  value="<?php echo e($cli->endereco->bairro); ?>"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Cep:</label>
				<input name="cep" id="cliCepEdit" value="<?php echo e($cli->endereco->cep); ?>"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Cidade:</label>
				<input name="cidade" id="cliCidadeEdit" value="<?php echo e($cli->endereco->cidade); ?>"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Estado:</label>
				<input name="uf" id="cliEstado"  value="<?php echo e($cli->endereco->estado); ?>"class="form-control"/>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Update</button>
		</form>
	</div>
</div>
</table>
<!-- 
ESSE É O MODAL QUE VAI EXIBIR INFORMAÇÕES APÓS O CLICK NO 
LINK COM O ID buscar
-->
<div id="divBuscar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4 class="modal-title">Inserir Cliente</h4> 
	</div>
	<div class="modal-body">
		<form >

			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

			<div class="form-group">
				<label>Nome:</label>
				<input name="nome" id="cliNome" disabled  class="form-control"/>
			</div>

			<div class="form-group">
				<label>Idade:</label>
				<input name="idade" id="cliIdade" disabled class="form-control"/>
			</div>

			<div class="form-group">
				<label>Cpf:</label>
				<input name="cpf" id="cliCpf" disabled class="form-control"/>
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input name="email" id="cliEmail" disabled class="form-control"/>
			</div>

			<div class="form-group">
				<label>Telefone:</label>
				<input name="telefone" id="cliTelefone" disabled class="form-control"/>
			</div>
			<div class="form-group">
				<label>Rua:</label>
				<input name="rua" id="cliRua" disabled class="form-control"/>
			</div>

			<div class="form-group">
				<label>Bairro:</label>
				<input name="bairro" id="cliBairro" disabled class="form-control"/>
			</div>

			<div class="form-group">
				<label>Cep:</label>
				<input name="cep" id="cliCep" disabled class="form-control"/>
			</div>

			<div class="form-group">
				<label>Cidade:</label>
				<input name="cidade" id="cliCidade" disabled class="form-control"/>
			</div>

			<div class="form-group">
				<label>Estado:</label>
				<input name="uf" id="cliEstado" disabled  class="form-control"/>
			</div>
		</form>
	</div>

</div>

<!--FIM DO MODAL-->	




<?php endif; ?>
<?php if(old('nome')): ?>
<div class="alert alert-success">
	<strong>Sucesso!</strong> O Cliente foi adicionado com sucesso
</div>
<?php endif; ?>
<script src="/js/myscripts/cliente.js" type="text/javascript" charset="utf-8"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>