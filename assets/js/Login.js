$(document).ready(function(){
  $("#btnLogin").click(function(){
    var dados = JSON.stringify($("#loginUsuario").serializeArray());
    $.ajax({
            url: "logar",
            dataType: "json",
            type:'POST',
            data: {'dados':dados},
            error: function(){
                    $("h4").html('erro');
            },
            success: function(){
                   alert("kakakak");
            }
        });
    });
});