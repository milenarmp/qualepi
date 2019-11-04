$(document).ready(function(){
    $("#btnLogin").click(function(){
        var nomeUsuario = $('#nomeUsuario').val();
        var senha = $('#senha').val();
            $.post("/qualepi/index.php/UsuarioController/logar", { 'nomeUsuario' : nomeUsuario, 'senha' : senha},
                function(data){
                    alert("foi");
                }, "json");
    });
});