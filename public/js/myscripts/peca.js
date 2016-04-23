$(document).ready(function() {
	$('.buscar').on('click',function() {
		var id = $(this).attr('id');
		var obj = $(this).data('id');

		$('#pecaDesc').val(obj[id].descricao);
		$('#pecaVal').val(obj[id].valor);
		$('#pecaQnt').val(obj[id].quantidade);
		$('#divBuscar').modal('show');
	});
	$('.editar').on('click',function(){
		var id = $(this).attr('id');
		var obj = $(this).data('id');
		var idUpdate = $(this).attr('value');
		
		console.log('o id é: '+id);
		console.log('o index é: '+obj);
		console.log('o id do objeto é :'+idUpdate);
		//$('#modalBuscar').html(id[$('.buscar').val()].nome);
		$('#pecaDescEdit').val(obj[id].descricao);
		$('#pecaValEdit').val(obj[id].valor);
		$('#pecaQntEdit').val(obj[id].quantidade);
		$('#divAlterar').modal('show');
		$('#formUpdate').attr('action','/pecas/atualizar/'+idUpdate);
	});
	$('#tabelaPeca').DataTable();
});