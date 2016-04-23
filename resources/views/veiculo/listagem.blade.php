@extends('layout.principal')

@section('conteudo')
<script type="text/javascript">
	
</script>
<div class="container">
	<h1>Veiculos</h1>
<!--  BOTÃO QUE CHAMA O MODAL PARA CADASTRAR VEICULO   -->
	<button class="demo btn btn-primary btn-large" data-toggle="modal" href="#responsive">Cadastrar</button>
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- MODAL PARA CADASTRAR VEICULO -->
<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4 class="modal-title">Inserir Veiculos</h4>
	</div>
	<div class="modal-body">
	<form action="/veiculos/adiciona" method="post">
	<input type="hidden"
	name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
	<label>Placa:</label>
	<input name="placa" class="form-control"/>
	</div>

	<div class="form-group">
	<label>Cor:</label>
	<input name="cor" class="form-control"/>
	</div>

	<div class="form-group">
	<label>Ano:</label>
	<input name="ano" class="form-control"/>
	</div>

	<div class="form-group">
	<label>Cliente:</label>
	<input name="cliente_id" type="number" class="form-control"/>
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
				<th>Proprietário</th>
				<th>placa</th>
				<th>cor</th>
				<th>ano</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<tr>
			@foreach ($veiculos as $key=>$veiculo)
				<td> {{ $veiculo->id }} </td>
				<td> {{ $veiculo->cliente->nome }}  </td>
				<td> {{ $veiculo->placa }} </td>
				<td> {{ $veiculo->cor }} </td>
				<td> {{ $veiculo->ano }} </td>	
				<!-- 
				MENU 
				#BUSCAR
				#REMOVER
				#ALTERAR
				-->
				<td align="center">
					<a class="buscar" id="{{ $key }}" data-toggle="modal" data-id="{{ $veiculos }}">
					<span class="glyphicon glyphicon-eye-open"></span>
					</a>
				</td>

				<td align="center">
					<a href="/veiculos/remove/{{ $veiculo->id }}">
					<span class="glyphicon glyphicon-trash"> </span>
					</a>
				</td>
					<td align="center">
					<a class="editar" id="{{ $key }}" data-toggle="modal" data-id="{{ $veiculos }}" value="{{ $veiculo->id }}"> 
					<span class="glyphicon glyphicon-pencil"></span>
				</a>
				</td>
			</tr>
		@endforeach
		</tbody>
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- INICIO DO MODAL DE UPDATE VEICULO -->

<div id="divAlterar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Alterar Produto</h4> 
 </div>
 <div class="modal-body">
	<form id="formUpdate" method="post">
		<input type="hidden"
		name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group">
	 			<label>Priprietário:</label>
			<input name="nome" class="form-control" id="prodNomeEdit" value="{{ $veiculo->cliente->nome }}"/>
		</div>

		<div class="form-group">
			<label>Placa:</label>
			<input name="descricao" class="form-control" id="prodDescEdit" value="{{ $veiculo->placa }}"/>
		</div>

		<div class="form-group">
			<label>Cor:</label>
			<input name="valor" class="form-control" id="prodValEdit" value="{{ $veiculo->cor }}"/> 
		</div>

		<div class="form-group">
			<label>Ano:</label>
			<input name="quantidade" type="number" class="form-control" id="prodQntEdit" value="{{ $veiculo->ano }}"/> 
		</div>

			<button type="submit" class="btn btn-primary btn-block">Update</button>
	</form>
  </div>

</div>


<!-- FIM DO MODAL DE VEICULO -->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
	</table>
</div>

@stop