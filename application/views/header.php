	<body>
		<div class="container-fluid">
		<div class="header">
			<nav class="navbar navbar-expand-lg navbar-fixed-top" id="barra">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="navbar-link" href="#"><span class="barraNavegacao">Início</span></a>
					</li>
					<li class="nav-item">
						<a class="navbar-link" href="#"><span class="barraNavegacao">Pesquisar EPIs</span></a>
					</li>
					<li class="nav-item">
						<a class="navbar-link" href="#"><span class="barraNavegacao">Sobre Nós</span></a>
					</li>
					<li class="nav-item">
						<a class="navbar-link" href="#"><span class="barraNavegacao">Contato</span></a>
					</li>
				</ul>
				<span class="navbar-text">Cadastro | Login </span>
			</nav><!-- fim da barra de navegação -->
			<div>
				<form>
					<div class="form-group">
						<div class="row">
						<div class="col-md-5 col-lg-5 col-sm-8 offset-md-1">
							<input type="text" class="form-control" id="pesquisa" placeholder="&#xF002;">
						</div>
							<div class="col-md-1 col-lg-1 col-sm-4">
								<button type="submit" id="btnBuscar" class="btn btn-success btn-sm">Buscar</button>
							</div>
					</div>
					</div>
					<div class="form-group" id="buscar">
						<div class="col-md-5 offset-md-1 filtros">
							<label>Pesquisar por:</label>
							<div class="btn-group" role="group" aria-label="Filtros" style="margin-bottom: 5px">
								<button type="button" class="btn btn-success btn-sm">nº CA</button>
								<button type="button" class="btn btn-success btn-sm">Fabricante</button>
								<button type="button" class="btn btn-success btn-sm">Descrição</button>
								<button type="button" class="btn btn-success btn-sm">Risco</button>
								<button type="button" class="btn btn-success btn-sm">Customização de Filtros</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>