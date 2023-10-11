// Función para inicializar el DataTable
function inicializarDataTable() {
    var table = $('#Hora').DataTable({
        'processing': true,
        'serverMethod': 'post',
        "ajax": {
            "url": "../../Controller/Grid.php",
            "type": "POST",
            "data": {
                "action": "obtenerGrid"
            },
            "dataType": "json",
            "dataSrc": ""
        },
        "columns": [
            { "data": "Estatus" }, 
            { "data": "Producto" },
            { "data": "Lote" },
            { "data": "OT" },
            { "data": "Area" },
            { "data": "Lider" },
            { "data": "Supervisor" },
            { "data": "Turno" }
        ],
        "language": {
            "decimal":        "",
            "emptyTable":     "No hay datos disponibles en la tabla",
            "info":           "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            "infoEmpty":      "Mostrando 0 a 0 de 0 entradas",
            "infoFiltered":   "(filtrado de _MAX_ entradas totales)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Mostrar _MENU_ entradas",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search":         "Buscar:",
            "zeroRecords":    "No se encontraron registros coincidentes",
            "paginate": {
                "first":      "Primero",
                "last":       "Último",
                "next":       "Siguiente",
                "previous":   "Anterior"
            },
            "aria": {
                "sortAscending":  ": activar para ordenar la columna en orden ascendente",
                "sortDescending": ": activar para ordenar la columna en orden descendente"
            }
        }
    });
    return table;
}


function aplicarFiltros(table) {
    $('#btnFiltrar').on('click', function() {
        var filtroEstatus = $('#filtroEstatus').val();
        var filtroProducto = $('#filtroProducto').val();
        var filtroLote = $('#filtroLote').val();
        var filtroOT = $('#filtroOT').val();
       // var filtroArea = $('#filtroArea').val();
        //var filtroLider = $('#filtroLider').val();
        var filtroSupervisor = $('#filtroSupervisor').val();
        var filtroTurno = $('#turno').val();

        // Aplicar los filtros
        table.columns(0).search(filtroEstatus).draw();
        table.columns(1).search(filtroProducto).draw();
        table.columns(2).search(filtroLote).draw();
        table.columns(3).search(filtroOT).draw();
        table.columns(4).search(filtroArea).draw();
        table.columns(5).search(filtroLider).draw();
        table.columns(6).search(filtroSupervisor).draw();
        table.columns(7).search(filtroTurno).draw();
    });
}

$(document).ready(function() {
    // Inicializar el DataTable y obtener la instancia
    var dataTable = inicializarDataTable();

    // Aplicar los filtros en el DataTable
    aplicarFiltros(dataTable);
});