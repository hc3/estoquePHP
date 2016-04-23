/**
ARQUIVO JAVASCRIPT DA PAGINA DE PRODUTO
**/

$(document).ready(function(){
	$('.buscar').on('click',function(){
		var id = $(this).attr('id');
		var objJson = $(this).data('id');
		
		console.log('o id é: '+id);
		console.log('o index é: '+objJson);
		//$('#modalBuscar').html(id[$('.buscar').val()].nome);
		$('#prodNome').val(objJson[id].nome);
		$('#prodDesc').val(objJson[id].descricao);
		$('#prodVal').val(objJson[id].valor);
		$('#prodQnt').val(objJson[id].quantidade);
		$('#divBuscar').modal('show');
	});
	$('.editar').on('click',function(){
		var id = $(this).attr('id');
		var objJson = $(this).data('id');
		var idUpdate = $(this).attr('value');
		
		console.log('o id é: '+id);
		console.log('o index é: '+objJson);
		//console.log('o id do objeto é :'+idUpdate);
		//$('#modalBuscar').html(id[$('.buscar').val()].nome);
		$('#prodNomeEdit').val(objJson[id].nome);
		$('#prodDescEdit').val(objJson[id].descricao);
		$('#prodValEdit').val(objJson[id].valor);
		$('#prodQntEdit').val(objJson[id].quantidade);
		$('#divAlterar').modal('show');
		$('#formUpdate').attr('action','/produtos/atualizar/'+idUpdate);
	});
	$('#tabelaProduto').DataTable();
});