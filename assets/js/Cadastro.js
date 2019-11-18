$(document).ready(function(){
    //Evento do botão cadastrar
    $("#btnCadastrar").click(function(){
    var dados = JSON.stringify($("#cadastroUsuario").serializeArray());
    $.ajax({
            url: "cadastrar",
            dataType: "json",
            type: "POST",
            data: {'dados':dados},
            success: function(data){
                if(data.msg == true){
                    window.location.replace("http://localhost/qualepi/index.php/UsuarioController/login");
                }
            }
        });
    });
    //Evento do botão limpar
    $("#btnLimpar").click(function(){
        document.getElementById('cadastroUsuario').reset();
    });
});