<html>
	<head>
	<!-- 
	//LINK COMENTADO USAR O LAYOUT DO BOOTSTRAP
	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/custom.css" rel="stylesheet">
	<link href='/css/full.css' rel="stylesheet">
	<link href='/css/bootstrap.css' rel="stylesheet">
	<link href='/css/mycss.css' rel="stylesheet"> -->
	<link href='/css/bootstrap.min.css' rel="stylesheet">
	<link href='/css/bootstrap-modal.css' rel="stylesheet">
	<link href='//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css' rel="stylesheet">
	<link href='/css/bootstrap-modal-bs3patch.css' rel="stylesheet">
	<script src="/js/jquery-2.2.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/bootstrap-modal.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/bootstrap-modalmanager.js" type="text/javascript" charset="utf-8"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/angular.min.js" type="text/javascirpt" charset="utf-8"></script>
	<title>Controle de estoque</title>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="/produtos">
						Estoque Laravel
						</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li>
								<a href="/produtos">Produtos</a>
							</li>
							<li>
								<a href="/clientes">Clientes</a>
							</li>
							<li>
								<a href="/servicos">Serviços</a>
							</li>
							<li>
								<a href="/pecas">Peças</a>
							</li>
							<li>
								<a href="/veiculos">Veiculos</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			
			@yield('conteudo')
			<footer class="footer">
				<p align="center">Todos os direitos reservados </p></br>
				<p align="center">Aqui onde vai ficar o footer</p>
			</footer>
		</div>
	</body>
</html>