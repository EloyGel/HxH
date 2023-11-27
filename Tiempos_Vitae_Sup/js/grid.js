$(document).ready(function() {
  const grid = document.getElementById('Hora');
  const TipoGrid = grid.getAttribute('data-archivo');
  let dataTable; // Variable para almacenar la referencia al DataTable
  
  if(TipoGrid === 'operador') {
    dataTable = DataTableOperador();
  }else if(TipoGrid === 'personal') {
    dataTable = DataTablePersonal();
  }else if(TipoGrid === 'motivo') {
    dataTable = DataTableMotivo();
  }else if(TipoGrid === 'tiempos') {
    dataTable = DataTableTiempos();
  }
  
});


// Función para inicializar el DataTable
function DataTableTiempos() {
    var table = $('#Hora').DataTable({ 
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Exportar a Excel', // Texto del botón
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                text: 'Exportar a PDF',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [ {
            targets: -1,
            visible: false
        } ],
        'processing': true,
        'serverMethod': 'post',
        //"scrollX": true, 
        "ajax": {
            "url": "../../Controller/Grid.php",
            "type": "POST",
            "data": {
                "action": "obtenerTiempos"
            },
            "dataType": "json",
            "dataSrc": ""
        },
        "columns": [
            { "data": "MAQUINA" }, 
            { "data": "HORA" },
        ],
        "language": {"url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"},
        pageLength: 100 
    });
    return table;
}

function DataTablePersonal() {
    var table = $('#Hora').DataTable({ 
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Exportar a Excel', // Texto del botón
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                text: 'Exportar a PDF',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [ {
            targets: -1,
            visible: false
        } ],
        'processing': true,
        'serverMethod': 'post',
        //"scrollX": true, 
        "ajax": {
            "url": "../../Controller/Grid.php",
            "type": "POST",
            "data": {
                "action": "obtenerEmpleado"
            },
            "dataType": "json",
            "dataSrc": ""
        },
        "columns": [
            { "data": "ID" }, 
            { "data": "NOMBRE" },
            { "data": "PUESTO" },
            { "data": "EMPRESA" },
            { "data": "SUCURSAL" }
        ],
        "language": {"url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"},
        pageLength: 100 
    });
    return table;
}

function DataTableMotivo() {
    var table = $('#Hora').DataTable({ 
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Exportar a Excel', // Texto del botón
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                text: 'Exportar a PDF',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [ {
            targets: -1,
            visible: false
        } ],
        'processing': true,
        'serverMethod': 'post',
        //"scrollX": true, 
        "ajax": {
            "url": "../../Controller/Grid.php",
            "type": "POST",
            "data": {
                "action": "obtenerMotivo"
            },
            "dataType": "json",
            "dataSrc": ""
        },
        "columns": [
            { "data": "MAQUINA" },  
            { "data": "TIPO" },
            { "data": "NIVEL 1" },
            { "data": "NIVEL 2" },
            { "data": "NIVEL 3" },
            { "data": "NIVEL 4" }
        ],
        "language": {"url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"},
        pageLength: 100 
    });
    return table;
}

function DataTableOperador() {
    var table = $('#Hora').DataTable({ 
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Exportar a Excel', // Texto del botón
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                text: 'Exportar a PDF',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [ {
            targets: -1,
            visible: false
        } ],
        'processing': true,
        'serverMethod': 'post',
        "scrollX": true, 
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
            { "data": "Fecha_Inicio" }, 
            { "data": "Fecha_Fin" },
            { "data": "Hora_Inicio" },
            { "data": "Hora_Fin" },
            { "data": "OT" },
            { "data": "Lote" },
            { "data": "Producto" },
            { "data": "Maquina" },
            { "data": "Estatus" },
            { "data": "Turno" }, 
            { "data": "Nivel_1" },
            { "data": "Nivel_2" },
            { "data": "Nivel_3" },
            { "data": "Nivel_4" },
            { "data": "Piezas" },
            { "data": "Lider" },
            { "data": "Supervisor" },
            { "data": "Sucursal" }
        ],
        "language": {"url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"},
        pageLength: 100 
    });
    return table;
}

var languageOptions = {
    "decimal": "",
    "emptyTable": "No hay datos disponibles en la tabla",
    "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
    "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
    "infoFiltered": "(filtrado de _MAX_ entradas totales)",
    "infoPostFix": "",
    "thousands": ",",
    "lengthMenu": "Mostrar _MENU_ entradas",
    "loadingRecords": "Cargando...",
    "processing": "Procesando...",
    "search": "Buscar:",
    "columnDefs": "Columnas visibles",
    "zeroRecords": "No se encontraron registros coincidentes",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": activar para ordenar la columna en orden ascendente",
        "sortDescending": ": activar para ordenar la columna en orden descendente"
    }
};


/*function aplicarFiltros(table) {
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
}*/