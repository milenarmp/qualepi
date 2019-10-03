$(document).ready(function(){
  $("#btnAtualizarEPIs").click(function(){
    alert("Os EPIs serão atualizados agora. Essa ação pode demorar um pouco...");
       $.ajax({
            url: "atualizarEPIs",
            dataType: "json",
		error: function(){
                    $("h4").html("Erro!");
		},
		success: function(dados){	 							 
                    $("h4").html(dados['msg'].concat(dados['registros']));
                }
    });
    });
});