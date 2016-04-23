@extends('layout.principal')

@section('conteudo')

<script type="text/javascript">
</script>

@if(empty($servicos))
	<div class="alert alert-danger">
		Você não tem servicos cadastrados
	</div>
	@else
	<div class="container">
	<h1>Serviços</h1>
<!--  BOTÃO QUE CHAMA O MODAL PARA CADASTRAR SERVICO   -->
	<button class="demo btn btn-primary btn-large" data-toggle="modal" href="#responsive">Cadastrar</button>
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- MODAL PARA CADASTRAR SERVICO -->
	<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Inserir Serviço</h4>
  </div>
  <div class="modal-body">
	<form action="/servicos/adiciona" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group">
		<label>Descrição:</label>
		<input name="descricao" class="form-control"/>
		</div>

		<div class="form-group">
		<label>Valor:</label>
		<input name="valor" class="form-control"/>
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
		<table id="tabelaServico" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Descrição</th>
				<th>valor</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		 
		 <tbody>
		 	<tr>	
		 	@foreach ($servicos as $key=>$servico)	
			<td> {{ $servico->id }} </td>
			<td> {{ $servico->descricao }}  </td>
			<td> {{ $servico->valor }} </td>
			<td align="center">
				<a class="buscar" id="{{ $key }}" data-toggle="modal" data-id="{{ $servicos }}">
					<span class="glyphicon glyphicon-eye-open"></span>
				</a>
			</td>
			
			<td align="center">
				<a href="/servicos/remove/<?= $servico->id ?>">
					<span class="glyphicon glyphicon-trash"> </span>
				</a>
			</td>
			<td align="center">
				<a class="editar" id="{{ $key }}" data-toggle="modal" data-id="{{ $servicos }}" value="{{ $servico->id }}">
					<span class="glyphicon glyphicon-pencil"></span>
				</a>
			</td>
			</tr>
			@endforeach
		</tbody>
	<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- INICIO DO MODAL DE UPDATE SERVICO -->
<div id="divAlterar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Inserir Produto</h4> 
 </div>
 <div class="modal-body">
	<form id="formUpdate" method="post">
		<input type="hidden"
		name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group">
			<label>Descrição:</label>
			<input name="descricao" id="servDescEdit" class="form-control" value="{{ $servico->descricao }}"/>
		</div>

		<div class="form-group">
			<label>Valor:</label>
			<input name="valor" id="servValEdit" class="form-control" value="{{ $servico->valor }}"/> 
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
		
	</div>
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- INICIO DO MODAL DE LISTAGEM DE SERVICO  -->

<div id="divBuscar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Visualizar Serviço</h4> 
 </div>
 <div class="modal-body">
	<form>
		<input type="hidden"
		name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group">
			<label>Descrição:</label>
			<input name="descricao" id="descServ" disabled class="form-control"/>
		</div>

		<div class="form-group">
			<label>Valor:</label>
			<input name="valor" id="valServ" disabled class="form-control"/> 
		</div>

	</form>
  </div>
</div>
<!-- FIM DO MODAL DE LISTAGEM-->


	@endif
	@if(old('nome'))
	<div class="alert alert-success">
		<strong>Sucesso!</strong> O Serviço foi adicionado com sucesso
	</div>
	@endif
<script src="/js/myscripts/servico.js" type="text/javascript" charset="utf-8"></script>
@stop