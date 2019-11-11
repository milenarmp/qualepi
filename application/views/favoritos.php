<script src="<?=base_url("assets/js/DataFavorito.js") ?>"></script>
<div class="cadastro">
	<div class="titulo">
		<h4>Favoritos: </h4>
	</div>
    <div>
        <table class="display" id="favoritosEPI" style="width: 100%">
            <thead>
                <tr>
                    <th>Nº CA</th>
                    <th>Nome</th>
                    <th>Validade</th>
                    <th>Aprovado para:</th>
                    <th>Visualizar:</th>
                </tr>
            </thead>
            <tbody>
				<?php
                foreach ($EPIs as $epi) {
                    echo '<tr class="gradeA">';
                    echo '<td><center>'.$epi["numeroCA"].'</center></td>';
                    echo '<td><center>'.$epi['nome'].'</center></td>';
                    echo '<td><center>'.$epi['dataValidade'].'</center></td>';
                    echo '<td><center>'.$epi['aprovadoPara'].'</center></td>';
                    echo '<td><center>'.$epi['visualizar'].'</center></td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
      	</table>
	</div>
</div>