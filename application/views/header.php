	<body>

		<script src="<?=base_url("assets/js/PesquisarEPI.js") ?>"></script>
		<?php
		if(isset($logado)){
			if($logado == TRUE){
		?>
		<div class="sidenav">
			<div>
				<figure >
				<img class="icone" src="<?=base_url("images/img1.png") ?>" alt="Ícone usuário">
				</figure>
				<div class="nomeUser">
					<?=$nomeUsuario?>
				</div>
			</div>
		  <a href="/qualepi/index.php/EPIController/">Início</a>
		  <a href="/qualepi/index.php/FavoritoController/">Favoritos</a>
		  <a href="/qualepi/index.php/UsuarioController/sair">Sair</a>
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
						<a class="navbar-link" href="/qualepi/index.php/EPIController"><span class="barraNavegacao">Início</span></a>
					</li>
					<li class="nav-item">
						<a class="navbar-link" href=""><span class="barraNavegacao">Sobre Nós</span></a>
					</li>
					<li class="nav-item">
						<a class="navbar-link" href="#"><span class="barraNavegacao">Contato</span></a>
					</li>
				</ul>
				<?php
					if(!isset($logado)){
				?>
				<span class="navbar-text"><a href="/qualepi/index.php/UsuarioController/cadastro">Cadastro</a> | <a href="/qualepi/index.php/UsuarioController/login">Login</a> </span>
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
					<div class="col-md-5 col-lg-5 col-sm-8 offset-md-1">
						<input type="text" class="form-control" id="pesquisa" placeholder="&#xF002;" >
						</div>
							<div class="col-md-1 col-lg-1 col-sm-4">
								<button type="submit" id="btnBuscar" class="btn btn-success btn-sm">Buscar</button>
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