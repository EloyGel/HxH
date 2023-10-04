// Función para inicializar el DataTable
function inicializarDataTable() {
    var table = $('#Hora').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        "ajax": {
            "url": "../Model/Funciones.php",
            "type": "POST",
            "data": {
                "action": "obtenerData"
            },
            "dataType": "json",
            "dataSrc": ""
        },
        "columns": [
            { "data": "Fecha" },
            { "data": "Estatus" },
            { "data": "Producto" },
            { "data": "Lote" },
            { "data": "OT" },
            { "data": "Area" },
            { "data": "Lider" },
            { "data": "Supervisor" },
            { "data": "Turno" }
        ]
    });
  return table;
}


function aplicarFiltros(table) {
    $('#btnFiltrar').on('click', function() {
        var fechaInicio = $("#fechaInicio").datepicker("getDate");
        var fechaFin = $("#fechaFin").datepicker("getDate");
        var filtroEstatus = $('#filtroEstatus').val();
        var filtroProducto = $('#filtroProducto').val();
        var filtroLote = $('#filtroLote').val();
        var filtroOT = $('#filtroOT').val();
        var filtroArea = $('#filtroArea').val();
        var filtroLider = $('#filtroLider').val();
        var filtroSupervisor = $('#filtroSupervisor').val();
        var filtroTurno = $('#turno').val();

        // Aplicar los filtros
        table.columns(0).search(fechaInicio + ' to ' + fechaFin).draw();
        table.columns(1).search(filtroEstatus).draw();
        table.columns(2).search(filtroProducto).draw();
        table.columns(3).search(filtroLote).draw();
        table.columns(4).search(filtroOT).draw();
        table.columns(5).search(filtroArea).draw();
        table.columns(6).search(filtroLider).draw();
        table.columns(7).search(filtroSupervisor).draw();
        table.columns(8).search(filtroTurno).draw();
    });
}

$(document).ready(function() {
    // Inicializar Datepicker en los campos de filtro de fecha
    $("#fechaInicio").datepicker();
    $("#fechaFin").datepicker();

    // Inicializar el DataTable y obtener la instancia
    var dataTable = inicializarDataTable();

    // Aplicar los filtros en el DataTable
    aplicarFiltros(dataTable);
});