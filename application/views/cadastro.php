<script src="<?=base_url("assets/js/Cadastro.js") ?>"></script>
<div class="cadastro">
	<div class="titulo">
		<h4>Cadastre-se para ter acesso a mais funcionalidades que o QualEPI tem a oferecer!</h4>
	</div>
	<div class="card dadosUsuario">
  		<div class="card-header">
    		<i class="fab fa-wpforms"> Cadastro de usuário</i>
  		</div>
  	<div class="card-body">
	<form id="cadastroUsuario">
		<div class="form-group offset-md-1">
			<div class="row linha">
				<div class="col-md-4 col-lg-4 col-sm-8 labels">
					<label for="nome">Nome completo:</label>
				</div>
				<div class="col-md-3 col-lg-6 col-sm-12">
					<input type="text" class="form-control" id="nome" name="nome" form="cadastroUsuario" required="required">
				</div>
			</div>
			<div class="row linha">
				<div class="col-md-3 col-lg-4 col-sm-8 labels">
					<label for="nomeUsuario">Nome de usuário:</label>
				</div>
				<div class="col-md-3 col-lg-6 col-sm-12">
					<input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" form="cadastroUsuario">
				</div>
			</div>
			<div class="row linha">
				<div class="col-md-3 col-lg-4 col-sm-8 labels">
					<label for="email">E-mail:</label>
				</div>
				<div class="col-md-3 col-lg-6 col-sm-12">
					<input type="email" class="form-control" id="email" name="email" form="cadastroUsuario">
				</div>
			</div>
			<div class="row linha">
				<div class="col-md-3 col-lg-4 col-sm-8 labels">
					<label for="confirmacaoEmail">Confirmação de e-mail:</label>
				</div>
				<div class="col-md-3 col-lg-6 col-sm-12">
					<input type="email" class="form-control" id="confirmacaoEmail" name="confirmacaoEmail" form="cadastroUsuario">
				</div>
			</div>
			<div class="row linha">
				<div class="col-md-3 col-lg-4 col-sm-8 labels">
					<label for="senha">Senha:</label>
				</div>
				<div class="col-md-3 col-lg-6 col-sm-12">
					<input type="password" class="form-control" id="senha" name="senha" form="cadastroUsuario">
				</div>
			</div>
			<div class="row linha">
				<div class="col-md-3 col-lg-4 col-sm-8 labels">
					<label for="confirmacaoSenha">Confirmação da senha:</label>
				</div>
				<div class="col-md-3 col-lg-6 col-sm-12">
					<input type="password" class="form-control" id="confirmacaoSenha" name="confirmacaoSenha" form="cadastroUsuario">
				</div>
			</div>
			<div class="col offset-md-3">
			<div class="row form-group" id="botoesForm">
				<div class="col-lg-3">
				<button type="button" class="btn btn-success" id="btnCadastrar" form="cadastroUsuario"><i class="fas fa-paper-plane"> Enviar</i></button>
				</div>
				<div class="col-lg-3">
				<button type="button" class="btn btn-success" id="btnLimpar"><i class="fas fa-eraser"> Limpar</i></button>
				</div>
			</div>
		</div>
		</div>
	</form>
</div>
</div>
</div>