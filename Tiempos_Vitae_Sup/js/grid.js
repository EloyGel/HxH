$(document).ready(function() {
    // Inicializar el DataTable y obtener la instancia
    //var dataTable = inicializarDataTable();
  const grid = document.getElementById('Hora');
  const TipoGrid = grid.getAttribute('data-archivo');

  if(TipoGrid === 'operador'){
    DataTableOperador();
  }
  else
  if (TipoGrid === 'personal'){
    DataTablePersonal();
  }
  else
  if (TipoGrid === 'motivo'){
    DataTableMotivo();
  }
    // Aplicar los filtros en el DataTable
    //aplicarFiltros(dataTable);
});



// Función para inicializar el DataTable
function DataTablePersonal() {
    var table = $('#Hora').DataTable({ 
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

function DataTableMotivo() {
    var table = $('#Hora').DataTable({ 
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

function DataTableOperador() {
    var table = $('#Hora').DataTable({ 
        'processing': true,
        'serverMethod': 'post',
        //"scrollX": true, 
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