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
                	alert("O usuário foi cadastrado no sistema com sucesso! Você será redirecionado para o login.");
                    window.location.replace("http://localhost/qualepi/index.php/UsuarioController/login");
                }else{
                    alert("O usuário já está cadastrado no sistema.");
                }
            }
        });
    });
    //Evento do botão limpar
    $("#btnLimpar").click(function(){
        document.getElementById('cadastroUsuario').reset();
    });
});