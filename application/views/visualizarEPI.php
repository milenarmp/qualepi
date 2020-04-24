<script src="<?=base_url("assets/js/Comentar.js") ?>"></script>
<script src="<?=base_url("assets/js/Favoritar.js") ?>"></script>
<div class="container" id="visao">
	<div class="card verEPI">
	  <div class="card-body">
	  	<div class="row tituloEPI">
	    	<h5 class="card-title"><?=$retorno['nomeEPI']?> - C.A. <span id="CA"> <?=$retorno['caEPI']?> </span></h5>
		</div>
		<div class="row segundaLinha">
			<div class="col-lg-2">
	    		<p class="card-text"><span class="rotulo">Situação:</span> <?=$retorno['situacao']?></p>
			</div>
			<div class="col-lg-6">
	    		<p class="card-test"><span class="rotulo">Data de validade:</span> <?=$retorno['dataValidade']?></p>
			</div>
			<?php
				if($retorno['logado'] == TRUE){
			?>
			<div class="col-lg-1" id="botao1">
	    		<button class="btn btn-success" id="btnFavoritar" style="width: 134px"><i class="fas fa-heart"> Favoritar</i></button>
			</div>
			<?php
				}
			?>
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
					<br><span class="rotulo">Comentar:</span><br>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6" id="comentario">
					<div class="form-group ">
						<div class="row linha">
							<input type="text" class="form-control" id="tituloComentario" name="tituloComentario" placeholder="Título">
						</div>
						<div class="row linha">
							<textarea class="form-control" id="descricaoComentario" name="descricaoComentario" placeholder="Escreva aqui..."></textarea>
						</div>
						<div class="row" id="botaoLogin">
							<button type="submit" class="btn btn-success" id="btnComentar">Enviar</button>
						</div>
					</div>
    			</div>
    			<div class="col-lg-5 scrolar">
					<div class="swiper-container containerComentarios">
						<div class="swiper-wrapper slidesComentarios">
							<?php
								foreach($retorno['comentarios'] as $comentario){
							?>
							<div class="swiper-slide">
								<div class="itemComentario">
									<h6>Título: <?=$comentario['titulo']?></h6>
									<blockquote class="blockquote text-right">
			  						<p class="mb-0">"<?=$comentario['descricao']?>"</p>
			  						<footer class="blockquote-footer"><cite title="Título da fonte">Usuário: <?=$comentario['usuario']?></cite></footer>
									</blockquote>
								</div>
							</div>
							<?php
							}
							?>
						</div>
						<div class="swiper-pagination"></div>
					    <!-- Add Arrows -->
					    <div class="swiper-button-next"></div>
					    <div class="swiper-button-prev"></div>
					</div>
				</div>
	  		</div>
		</div>
	</div>
</div>

<div id="semLogin" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Não foi possível comentar</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div id="msgErro">
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
	      </div>
	    </div>
	  </div>
	</div>