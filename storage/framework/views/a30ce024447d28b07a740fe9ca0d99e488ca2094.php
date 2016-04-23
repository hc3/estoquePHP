<?php $__env->startSection('conteudo'); ?>
<script type="text/javascript">

</script>
<?php if(empty($pecas)): ?>
<div class="alert alert-danger">
Você não tem pecas cadastrados
</div>
<?php else: ?>
<div class="container">
	<h1>Peças</h1>
<!--  BOTÃO QUE CHAMA O MODAL PARA CADASTRAR PEÇA   -->
	<button class="demo btn btn-primary btn-large" data-toggle="modal" href="#responsive">Cadastrar</button>
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- MODAL PARA CADASTRAR PEÇA -->
	<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Inserir Peça</h4>
  </div>
  <div class="modal-body">
  		<!-- URL QUE SERA REQUISITADA -->
		<form action="/pecas/adiciona" method="post">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

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
	<table id="tabelaPeca" class="table table-striped table-bordered table-hover">
	<thead>	
		<tr>
			<th>Id</th>
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
		<?php foreach($pecas as $key=>$peca): ?>		
		<td> <?php echo e($peca->id); ?> </td>
		<td> <?php echo e($peca->descricao); ?> </td>
		<td> <?php echo e($peca->valor); ?> </td>
		<td> <?php echo e($peca->quantidade); ?> </td>
		<td align="center">

			<a class="buscar" id="<?php echo e($key); ?>" data-toggle="modal" data-id="<?php echo e($pecas); ?>">
			<span class="glyphicon glyphicon-eye-open"></span>
			</a>
		</td>

		<td align="center">
			<a href="/pecas/remove/<?= $peca->id ?>">
			<span class="glyphicon glyphicon-trash"> </span>
			</a>
		</td>
		<td align="center">
			<a class="editar" id="<?php echo e($key); ?>" data-toggle="modal" data-id="<?php echo e($pecas); ?>" value="<?php echo e($peca->id); ?>">
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
    <h4 class="modal-title">Inserir Produto</h4> 
 </div>
 <div class="modal-body">
	<form id="formUpdate" method="post">
		<input type="hidden"
		name="_token" value="<?php echo e(csrf_token()); ?>" />

		<div class="form-group">
			<label>Descrição:</label>
			<input name="descricao" id="pecaDescEdit" class="form-control" value="<?php echo e($peca->descricao); ?>"/>
		</div>

		<div class="form-group">
			<label>Valor:</label>
			<input name="valor" id="pecaValEdit" class="form-control" value="<?php echo e($peca->valor); ?>"/> 
		</div>

		<div class="form-group">
			<label>Quantidade:</label>
			<input name="quantidade" type="number" id="pecaQntEdit" class="form-control" value="<?php echo e($peca->quantidade); ?>"/> 
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
    <h4 class="modal-title">Visualizar Peça</h4> 
 </div>
 <div class="modal-body">
 			<form>
				<input type="hidden"
				name="_token" value="<?php echo e(csrf_token()); ?>" />

				<div class="form-group">
					<label>Descrição:</label>
					<input name="descricao" id="pecaDesc" disabled class="form-control"/>
				</div>

				<div class="form-group">
					<label>Valor:</label>
					<input name="valor" id="pecaVal" disabled class="form-control"/> 
				</div>

				<div class="form-group">
					<label>Quantidade:</label>
					<input name="quantidade" id="pecaQnt" disabled type="number" class="form-control"/> 
				</div>
			</form>
  </div>
</div>

<!-- FIM DO MODAL DE LISTAGEM-->

	<?php endif; ?>
	<?php if(old('nome')): ?>
	<div class="alert alert-success">
		<strong>Sucesso!</strong>A Peça <?php echo e(old('nome')); ?> foi adicionado com sucesso
	</div>
<?php endif; ?>
<script src="/js/myscripts/peca.js" type="text/javascript" charset="utf-8"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>