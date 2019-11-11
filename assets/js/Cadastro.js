$(document).ready(function(){
    //Evento do botão cadastrar
    $("#btnCadastrar").click(function(){
    var dados = JSON.stringify($("#cadastroUsuario").serializeArray());
    $.ajax({
            url: "cadastrar",
            dataType: "json",
            type: "POST",
            data: {'dados':dados},
            error: function(){
                $('#falha').show()
            },
            success: function(){
                $('#sucesso').show()
            }
        });
    });
    //Evento do botão limpar
    $("#btnLimpar").click(function(){
        document.getElementById('cadastroUsuario').reset();
    });
});