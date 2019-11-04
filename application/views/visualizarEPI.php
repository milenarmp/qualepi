<div class="container" id="visao">
	<div class="card bg-success">
	  <div class="card-body">
	  	<div class="row">
	    	<h5 class="card-title"><?=$retorno['nomeEPI']?> - C.A. <?=$retorno['caEPI']?></h5>
		</div>
		<div class="row">
			<div class="col-lg-2">
	    		<p class="card-text"><span class="rotulo">Situação:</span> <?=$retorno['situacao']?></p>
			</div>
			<div class="col-lg-6">
	    		<p class="card-test"><span class="rotulo">Data de validade:</span> <?=$retorno['dataValidade']?></p>
			</div>
			<div class="col-lg-1" id="botao1">
	    		<button class="btn btn-danger" id="btnFavoritar">Favoritar</button>
			</div>
			<div class="col-lg-1">
	    		<button class="btn btn-primary" id="btnComentar">Comentar</button>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="cardtext"><span class="rotulo">Descrição:</span> <?=$retorno['descricao']?></p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="cardtext"><span class="rotulo">Aprovado para:</span> <?=$retorno['aprovadoPara']?></p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="cardtext"><span class="rotulo">Fabricante:</span> <?=$retorno['fabricante']?></p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="cardtext"><span class="rotulo">Natureza:</span> <?=$retorno['natureza']?></p>
			</div>
		</div>
		<?php
			if(!empty($retorno['observacoes'])){
			?>
			<div class="row">
				<div class="col">
					<br><span class="rotulo">Observações:</span> <?=$retorno['observacoes']?><br>
				</div>
			</div>
			<?php
			}
			if(!empty($retorno['restritoPara'])){
			?>
			<div class="row">
				<div class="col">
					<br><span class="rotulo">Restrições:</span> <?=$retorno['restritoPara']?><br>
				</div>
			</div>
		<?php
		}
		?>
		</div>
	<div class="card-footer">
			<div class="row">
				<div class="col">
					<br><span class="rotulo">Comentários:</span><br>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-md-3" id="comentario">
				<blockquote class="blockquote mb-0">
      				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      				<footer class="blockquote-footer">Usuário</footer>
    			</blockquote>
    			</div>
			</div>
  		</div>
	</div>
</div>