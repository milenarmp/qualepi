$(document).ready(function(){
	//Evento do botão comentar
    $("#btnComentar").click(function(){
        var tituloComentario = $('#tituloComentario').val();
        var descricaoComentario = $('#descricaoComentario').val();
        var certificadoAprovacao = $("#CA").text();
            $.post("/qualepi/index.php/ComentarioController/comentar", { 'tituloComentario' : tituloComentario, 'descricaoComentario' : descricaoComentario, 'certificadoAprovacao' : certificadoAprovacao},
                function(data){
                    if(data.msg == false){
                        $('#msgErro').text('Ooops! Parece que você não está logado. Faça seu login e tente novamente.');
                        window.$("#semLogin").modal("show");
                    }else{
                        location.reload();
                    }
            }, "json");
    });
});