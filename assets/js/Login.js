$(document).ready(function(){
  $("#btnLogin").click(function(){
  	var novaURL = "http://localhost/qualepi/index.php/UsuarioController/logar";
	$(window.document.location).attr('href',novaURL);
    // var dados = JSON.stringify($("#loginUsuario").serializeArray());
    // $.ajax({
    //         url: "EPIController/logar",
    //         dataType: "json",
    //         type:"POST",
    //         data: {'dados':dados},
    //         error: function(){
    //                 $("h4").html('erro');
    //         },
    //         success: function(){
    //                alert("");
    //         }
    //     });
 });
});