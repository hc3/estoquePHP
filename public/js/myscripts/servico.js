$(document).ready(function() {
	$('.buscar').on('click',function() {
		var id = $(this).attr('id');
		var obj = $(this).data('id');
		
		$('#descServ').val(obj[id].descricao);
		$('#valServ').val(obj[id].valor);
		$('#divBuscar').modal('show');
	});
	$('.editar').on('click',function() {
		var id = $(this).attr('id');
		var obj = $(this).data('id');
		var idUpdate = $(this).attr('value');

		console.log('o id é: '+id);
		console.log('o index é: '+obj);
		//console.log('o id do objeto é :'+idUpdate);
		//$('#modalBuscar').html(id[$('.buscar').val()].nome);
		$('#servDescEdit').val(obj[id].descricao);
		$('#servValEdit').val(obj[id].valor);
		$('#divAlterar').modal('show');
		$('#formUpdate').attr('action','/servicos/atualizar/'+idUpdate);
	});
	$('#tabelaServico').DataTable();
});