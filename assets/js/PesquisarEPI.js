$(document).ready(function(){
    $("#btnBuscar").click(function(){
//    var dados = JSON.stringify($("#formPesquisa").serializeArray());
    $.ajax({
            url: "pesquisarEPIs",
            dataType: "json",
            type: "GET",
            error: function(){
                $('#falha').show()
            },
            success: function(){
                $('#sucesso').show()
            }
        });
    });
});