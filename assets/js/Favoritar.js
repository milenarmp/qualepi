$(document).ready(function(){
	//Evento do botão favoritar
    $("#btnFavoritar").click(function(){
        var certificadoAprovacao = $("#CA").text();
            $.post("/qualepi/index.php/FavoritoController/favoritar", { 'certificadoAprovacao' : certificadoAprovacao},
                function(data){
                    if(data.msg == true){
                        alert('EPI adicionado aos favoritos com sucesso!');
                    } else {
                        alert('Não foi possível adicionar o EPI aos favoritos.');
                    }
            }, "json");
    });
});