    $(document).ready(function(){
        $('#btnBuscar').click(function(){

        var pesquisa = $('#pesquisa').val();
            $.post("/qualepi/index.php/EPIController/pesquisarEPIs", { 'pesquisa' : pesquisa},
                function(data){
                    $('#pesquisarEPIs').DataTable({
                        data : data.EPI,
                        columns: [
                            { data: 'numeroCA' },
                            { data: 'nome' },
                            { data: 'dataValidade' },
                            { data: 'aprovadoPara' }
                        ]
                    });
                    window.$("#meuModal").modal("show");
                }, "json");
    });

    window.$('#meuModal').on('hidden.bs.modal', function (e) {
        var table = $('#pesquisarEPIs').DataTable();
        table.destroy();
    });
});