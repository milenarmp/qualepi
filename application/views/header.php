	<body>

		<script src="<?=base_url("assets/js/PesquisarEPI.js") ?>"></script>
		<?php
		if(isset($logado)){
			if($logado == TRUE){
		?>
		<div class="sidenav">
			<div class="areaUsuario">
				<div class="row">
					<div class="col iconeUser">
					<i class="fas fa-user-circle fa-7x"></i>
					</div>
				</div>
				<div class="nomeUser">
					<?=$nomeUsuario?>
				</div>
			</div>
		  <a href="/qualepi/index.php/EPIController/"><i class="fas fa-home"> Início</i></a>
		  <a href="/qualepi/index.php/FavoritoController/"><i class="fas fa-heart"> Favoritos</i></a>
		  <a href="/qualepi/index.php/UsuarioController/sair"><i class="fas fa-sign-out-alt"> Sair</i></a>
		</div>
	<!-- Page Content -->
	<div class="main">
		<?php
		}
		}
		?>
		<div class="container-fluid">
		<div class="header">
			<nav class="navbar navbar-expand-lg navbar-fixed-top" id="barra">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="navbar-link" href="/qualepi/index.php/EPIController"><span class="barraNavegacao"><i class="fas fa-home"> Início</i></span></a>
					</li>
					<li class="nav-item">
						<a class="navbar-link" href=""><span class="barraNavegacao"><i class="fas fa-id-card"> Sobre Nós</i></span></a>
					</li>
					<li class="nav-item">
						<a class="navbar-link" href="#"><span class="barraNavegacao"><i class="fas fa-mail-bulk"> Contato</i></span></a>
					</li>
				</ul>
				<?php
					if(!isset($logado)){
				?>
				<span class="navbar-text linksNavbar"><a href="/qualepi/index.php/UsuarioController/cadastro"><i class="fab fa-wpforms"> Cadastro</i></a> | <a href="/qualepi/index.php/UsuarioController/login"><i class="fas fa-sign-in-alt"> Login</i></a> </span>
				<?php
			}else{
				?>
				<span class="navbar-text">Bem vindo, <?=$nomeUsuario?>!</span>
			<?php
			}
			?>
			</nav><!-- fim da barra de navegação -->
			<div>
				<div class="form-group">
					<div class="row">
					<div class="col-md-5 col-lg-6 col-sm-8 offset-md-1">
						<input type="text" class="form-control" id="pesquisa" placeholder="&#xF002;" >
						</div>
							<div class="col-lg-1">
								<button type="submit" id="btnBuscar" class="btn btn-success btn-sm" style="width: 82.4px"><i class="fas fa-search"></i> Buscar</button>
							</div>
					</div>
					</div>
					<div class="form-group" id="buscar">
						<div class="col-md-5 offset-md-1 filtros">
							<label>Pesquisar por:</label>
							<div id="termo" name ="termo" class="btn-group" role="group" aria-label="Filtros" style="margin-bottom: 5px">
								<button type="button" class="btn btn-success btn-sm">nº CA</button>
								<button type="button" class="btn btn-success btn-sm">Fabricante</button>
								<button type="button" class="btn btn-success btn-sm">Descrição</button>
								<button type="button" class="btn btn-success btn-sm">Risco</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
  </div>

	<div id="meuModal" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Pesquisa de EPIs</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
        <table class="display" id="pesquisarEPIs" style="width: 100%">
            <thead>
                <tr>
                    <th>Nº CA</th>
                    <th>Nome</th>
                    <th>Validade</th>
                    <th>Aprovado para:</th>
                    <th>Visualizar:</th>
                </tr>
            </thead>
            <tbody id="teste">
            </tbody>
        	</table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
	      </div>
	    </div>
	  </div>
	</div>
