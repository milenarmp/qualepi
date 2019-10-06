$(document).ready(function(){
  $("#btnCadastrar").click(function(){
    var dados = JSON.stringify($("#cadastroUsuario").serializeArray());
    $.ajax({
            url: "UsuarioController/cadastrar",
            dataType: "json",
            type: "POST",
            data: {'dados':dados},
            error: function(){
                    $("h4").html('erro');
            },
            success: function(retorno){
                   alert(retorno['msg']);
            }
        });
    });
});