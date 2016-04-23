<?php $__env->startSection('conteudo'); ?>
<?php if(empty($produtos)): ?>
<div class="alert alert-danger">
Você não tem produtos cadastrados
</div>
<?php else: ?>
<div class="container">
	<h1>Produtos</h1>
<!--  BOTÃO QUE CHAMA O MODAL PARA CADASTRAR PRODUTO   -->
	<button class="demo btn btn-primary btn-large" data-toggle="modal" href="#responsive">Cadastrar</button>
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- MODAL PARA CADASTRAR PRODUTO -->
<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4 class="modal-title">Inserir Produto</h4>
	</div>
	<div class="modal-body">
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
	</div>
</div>
<!-- FIM MODAL -->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
	</br>
	</br>
	<table id="tabelaProduto" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Valor</th>
			<th>Quantidade</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
		
	<tbody>
		<tr>
		<?php foreach($produtos as $key=>$p): ?>	
		<td> <?php echo e($p->id); ?> </td>
		<td> <?php echo e($p->nome); ?>  </td>
		<td> <?php echo e($p->descricao); ?> </td>
		<td> <?php echo e($p->valor); ?> </td>
		<td> <?php echo e($p->quantidade); ?> </td>	
		<!-- 
			MENU 
			#BUSCAR
			#REMOVER
			#ALTERAR
		-->
		<td align="center">
			<a class="buscar" id="<?php echo e($key); ?>" data-toggle="modal" data-id="<?php echo e($produtos); ?>">
			<span class="glyphicon glyphicon-eye-open"></span>
			</a>
		</td>

		<td align="center">
			<a href="/produtos/remove/<?php echo e($p->id); ?>">
			<span class="glyphicon glyphicon-trash"> </span>
			</a>
		</td>
		<td align="center">
			<a class="editar" id="<?php echo e($key); ?>" data-toggle="modal" data-id="<?php echo e($produtos); ?>" value="<?php echo e($p->id); ?>"> 
			<span class="glyphicon glyphicon-pencil"></span>
			</a>
		</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- INICIO DO MODAL DE UPDATE PRODUTO -->

<div id="divAlterar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Alterar Produto</h4> 
 </div>
 <div class="modal-body">
	<form id="formUpdate" method="post" action="/produtos/atualizar/<?php echo e($p->id); ?>">
		<input type="hidden"
		name="_token" value="<?php echo e(csrf_token()); ?>" />

		<div class="form-group">
	 			<label>Nome:</label>
			<input name="nome" class="form-control" id="prodNomeEdit" value="<?php echo e($p->nome); ?>"/>
		</div>

		<div class="form-group">
			<label>Descrição:</label>
			<input name="descricao" class="form-control" id="prodDescEdit" value="<?php echo e($p->descricao); ?>"/>
		</div>

		<div class="form-group">
			<label>Valor:</label>
			<input name="valor" class="form-control" id="prodValEdit" value="<?php echo e($p->valor); ?>"/> 
		</div>

		<div class="form-group">
			<label>Quantidade:</label>
			<input name="quantidade" type="number" class="form-control" id="prodQntEdit" value="<?php echo e($p->quantidade); ?>"/> 
		</div>

			<button type="submit" class="btn btn-primary btn-block">Update</button>
	</form>
  </div>

</div>


<!-- FIM DO MODAL DE UPDATE -->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->

</table>
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- INICIO DO MODAL DE LISTAGEM DE PRODUTO  -->
<div id="divBuscar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Visualizar Produto</h4> 
 </div>
 <div class="modal-body" id="modalBuscar">
		<form>
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

			<div class="form-group">
				<label>Nome:</label>
				<input name="nome" id="prodNome" disabled class="form-control" id="nomePrd"/>
			</div>

			<div class="form-group">
				<label>Descrição:</label>
				<input name="descricao" id="prodDesc" disabled class="form-control"/>
			</div>

			<div class="form-group">
				<label id="total">Valor:</label>
				<input name="valor" id="prodVal" disabled class="form-control"/> 
			</div>

			<div class="form-group">
				<label>Quantidade:</label>
				<input name="quantidade" id="prodQnt" type="number" disabled class="form-control"/> 
			</div>
		</form>
  </div>

</div>
<!-- FIM DO MODAL DE LISTAGEM-->


	<?php endif; ?>
	<?php if(old('nome')): ?>
	<div class="alert alert-success">
		<strong>Sucesso!</strong> O Produto <?php echo e(old('nome')); ?> foi adicionado com sucesso
	</div>
<?php endif; ?>
<script src="/js/myscripts/produto.js" type="text/javascript" charset="utf-8"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>