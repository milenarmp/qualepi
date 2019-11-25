<script src="<?=base_url("assets/js/Login.js") ?>"></script>
<div class="cadastro">
	<div class="titulo">
		<h4>Faça seu login:</h4>
	</div>
	<div class="card dadosUsuarioLogin">
  		<div class="card-header">
    		<i class="fas fa-sign-in-alt"> Login</i>
  		</div>
  	<div class="card-body">
		<div class="form-group offset-md-3">
			<div class="row linha">
				<div class="col-md-3 col-lg-8 col-sm-8">
					<input type="text" class="form-control infosLogin" id="nomeUsuario" name="nomeUsuario" placeholder="Nome de usuário">
				</div>
			</div>
			<div class="row linha">
				<div class="col-md-3 col-lg-8 col-sm-8">
					<input type="password" class="form-control infosLogin" id="senha" name="senha" placeholder="Senha">
				</div>
			</div>
			<div class="col-lg-5 form-group offset-md-2" id="botaoLogin">
				<button type="submit" class="btn btn-success" id="btnLogin"><i class="fas fa-paper-plane"> Enviar</i></button>
			</div>
		</div>
</div>
</div>
</div>