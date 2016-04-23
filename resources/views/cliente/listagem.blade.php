@extends('layout.principal')

@section('conteudo')
@if(empty($clientes))
<div class="alert alert-danger">
	Você não tem clientes cadastrados
</div>
@else
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
			name="_token" value="{{{ csrf_token() }}}" />

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
		@foreach ($clientes as $key=>$cli)
			<td> {{ $cli->id }} </td>
			<td> {{ $cli->nome }}  </td>
			<td> {{ $cli->idade }} </td>
			<td> {{ $cli->cpf }} </td>
			<td> {{ $cli->telefone }} </td>
			<td> {{ $cli->email }} </td>

			<td align="center">
				<a class="buscar" id="{{ $key }}" data-toggle="modal" data-id="{{ $clientes }}">
					<span class="glyphicon glyphicon-eye-open"></span>
				</a>
			</td>

			<td align="center">
				<a href="/clientes/remove/<?= $cli->id ?>">
					<span class="glyphicon glyphicon-trash"> </span>
				</a>
			</td>
			<td align="center">
				<a class="editar" id="{{ $key }}" data-toggle="modal" data-id="{{ $clientes }}" value="{{ $cli->id }}">
					<span class="glyphicon glyphicon-pencil"></span>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
	<div id="divAlterar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4 class="modal-title">Inserir Produto</h4> 
	</div>
	<div class="modal-body">
	 	<form id="formUpdate" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

			<div class="form-group">
				<label>Nome:</label>
				<input name="nome" id="cliNomeEdit"  value="{{ $cli->nome }}"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Idade:</label>
				<input name="idade" id="cliIdadeEdit"  value="{{ $cli->idade }}"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Cpf:</label>
				<input name="cpf" id="cliCpfEdit"  value="{{ $cli->cpf }}"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input name="email" id="cliEmailEdit"  value="{{ $cli->email }}"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Telefone:</label>
				<input name="telefone" id="cliTelefoneEdit"  value="{{ $cli->telefone }}"class="form-control"/>
			</div>
			<div class="form-group">
				<label>Rua:</label>
				<input name="rua" id="cliRuaEdit"  value="{{ $cli->endereco->rua }}"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Bairro:</label>
				<input name="bairro" id="cliBairroEdit"  value="{{ $cli->endereco->bairro }}"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Cep:</label>
				<input name="cep" id="cliCepEdit" value="{{ $cli->endereco->cep }}"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Cidade:</label>
				<input name="cidade" id="cliCidadeEdit" value="{{ $cli->endereco->cidade }}"class="form-control"/>
			</div>

			<div class="form-group">
				<label>Estado:</label>
				<input name="uf" id="cliEstado"  value="{{ $cli->endereco->estado }}"class="form-control"/>
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

			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

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




@endif
@if(old('nome'))
<div class="alert alert-success">
	<strong>Sucesso!</strong> O Cliente foi adicionado com sucesso
</div>
@endif
<script src="/js/myscripts/cliente.js" type="text/javascript" charset="utf-8"></script>
@stop