<script src="<?=base_url("assets/js/Login.js") ?>"></script>
<div class="cadastro">
	<div class="titulo">
		<h4>Faça seu login:</h4>
	</div>
	<div class="card dadosUsuarioLogin">
  		<div class="card-header">
    		Login
  		</div>
  	<div class="card-body">
	<form id="loginUsuario">
		<div class="form-group offset-md-3">
			<div class="row linha">
				<div class="col-md-3 col-lg-8 col-sm-8">
					<input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Nome de usuário" form="loginUsuario">
				</div>
			</div>
			<div class="row linha">
				<div class="col-md-3 col-lg-8 col-sm-8">
					<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" form="loginUsuario">
				</div>
			</div>
			<div class="form-group offset-md-3" id="botaoLogin">
				<button type="submit" class="btn btn-success" id="btnLogin" form="loginUsuario">Logar</button>
			</div>
		</div>
	</form>
</div>
</div>
</div>