$(document).ready(function(){
	$('.buscar').on('click',function(){
		var id = $(this).attr('id');
		var objJson = $(this).data('id');
		$('#cliNome').val(objJson[id].nome);
		$('#cliIdade').val(objJson[id].idade);
		$('#cliCpf').val(objJson[id].cpf);
		$('#cliEmail').val(objJson[id].email);
		$('#cliTelefone').val(objJson[id].telefone);
		$('#cliRua').val(objJson[id].endereco.rua);
		$('#cliBairro').val(objJson[id].endereco.bairro);
		$('#cliCep').val(objJson[id].endereco.cep);
		$('#cliCidade').val(objJson[id].endereco.cidade);
		$('#cliEstado').val(objJson[id].endereco.uf);
		$('#divBuscar').modal('show');
	});
	$('.editar').on('click',function(){
		var id = $(this).attr('id');
		var objJson = $(this).data('id');
		var idUpdate = $(this).attr('value');
		$('#cliNomeEdit').val(objJson[id].nome);
		$('#cliIdadeEdit').val(objJson[id].idade);
		$('#cliCpfEdit').val(objJson[id].cpf);
		$('#cliEmailEdit').val(objJson[id].email);
		$('#cliTelefoneEdit').val(objJson[id].telefone);
		$('#cliRuaEdit').val(objJson[id].endereco.rua);
		$('#cliBairroEdit').val(objJson[id].endereco.bairro);
		$('#cliCepEdit').val(objJson[id].endereco.cep);
		$('#cliCidadeEdit').val(objJson[id].endereco.cidade);
		$('#cliEstadoEdit').val(objJson[id].endereco.uf);
		$('#divAlterar').modal('show');
		$('#formUpdate').attr('action','/clientes/atualizar/'+idUpdate);
	});
	$('#tabelaCliente').DataTable();
});