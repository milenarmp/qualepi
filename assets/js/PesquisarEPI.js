    $(document).ready(function(){
        //Evento do botão buscar epis
        $('#btnBuscar').click(function(){
        var pesquisa = $('#pesquisa').val();
            $.post("/qualepi/index.php/EPIController/pesquisarEPIs", { 'pesquisa' : pesquisa},
                function(data){
                    $('#pesquisarEPIs').DataTable({
                        language: {
                            "sEmptyTable": "Nenhum registro encontrado",
                            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                            "sInfoPostFix": "",
                            "sInfoThousands": ".",
                            "sLengthMenu": "_MENU_ resultados por página",
                            "sLoadingRecords": "Carregando...",
                            "sProcessing": "Processando...",
                            "sZeroRecords": "Nenhum registro encontrado",
                            "sSearch": "Pesquisar",
                            "oPaginate": {
                                "sNext": "Próximo",
                                "sPrevious": "Anterior",
                                "sFirst": "Primeiro",
                                "sLast": "Último"
                            },
                            "oAria": {
                                "sSortAscending": ": Ordenar colunas de forma ascendente",
                                "sSortDescending": ": Ordenar colunas de forma descendente"
                            },
                            "select": {
                                "rows": {
                                    "_": "Selecionado %d linhas",
                                    "0": "Nenhuma linha selecionada",
                                    "1": "Selecionado 1 linha"
                                }
                            }
                        },
                        data : data.EPI,
                        columns: [
                            { data: 'numeroCA' },
                            { data: 'nome' },
                            { data: 'dataValidade' },
                            { data: 'aprovadoPara' },
                            { data: 'visualizar' }
                        ]
                    });
                    window.$("#meuModal").modal("show");
                }, "json");
    });
    //Evento ao fechar modal de consulta, para destruir o datatable
    window.$('#meuModal').on('hidden.bs.modal', function (e) {
        var table = $('#pesquisarEPIs').DataTable();
        table.destroy();
    });

    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
});