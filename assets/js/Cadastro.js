$(document).ready(function(){
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
});