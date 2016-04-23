<!DOCTYPE html>
<html ng-app="listaVeiculos">
<head>
	<title>Lista Veiculos</title>
	<link href='/css/bootstrap.min.css' rel="stylesheet">
	<style>
		.jumbotron {
			width:400px;
			text-align:center;
			margin-left:auto;
			margin-right:auto;
			margin-top:20px;
		}
	</style>
	<script src="/js/angular.min.js"></script>
	<script>
		angular.module("listaVeiculos",[]);
		angular.module('listaVeiculos').controller("listaVeiculosController",function ($scope) {
			$scope.app = "lista Veiculos";
			$scope.contatos = [
				{nome:"pedro",telefone:"992211222"},
				{nome:"pedro",telefone:"992211222"},
				{nome:"pedro",telefone:"992211222"}
			];
		});
	</script>
</head>
<body ng-controller="listaVeiculosController">
	<div class="jumbotron">
		<h4><?php echo e(contatos); ?></h4>
	</div>
</body>
</html>