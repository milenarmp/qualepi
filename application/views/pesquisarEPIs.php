<script src="<?=base_url("assets/js/datatable.js") ?>"></script>
<div id="tabs">
    <ul><li><a href="#tabs-1">EPIs</a></li></ul>
    <div id="tabs-1">
        <input type="button" name="novo" value="Novo" onclick="location.href =
 'index.php?pg=usuario/cad_usuario&acao=inserir'" /><br /><br />
        <table class="display" id="pesquisarEPIs">
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
                foreach ($epis as $epi) {

                    $linkVisualizar = "index.php?pg=usuario/deletarUsuario&cod_usuario=";
                ?>
                    <tr class='gradeA'>
                    <td><center><?=$epi['numeroCA']?></center></td>
                    <td><center><?=$epi['nome']?></center></td>
                    <td><center><?=$epi['dataValidade']?></center></td>
                    <td><center><?=$epi['aprovadoPara']?></center></td>
                    <td><center></center></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div><!-- div tabs-1 -->
</div><!-- div tabs -->
<!--FIM consultar_usuario.php-->