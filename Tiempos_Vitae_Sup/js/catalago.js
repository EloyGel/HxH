// Función para inicializar el DataTable
function inicializarDataTable1() {   
    var table = $('#M1').DataTable({
        'processing': true,
        'serverMethod': 'post',
        "ajax": {
            "url": "../../Controller/Grid.php",
            "type": "POST",
            "data": {
                "action": "motivo1"
            },
            "dataType": "json",
            "dataSrc": ""
        },
        "columns": [
            { "data": "Motivo" }
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

function inicializarDataTable2() {   
    var table = $('#M2').DataTable({
        'processing': true,
        'serverMethod': 'post',
        "ajax": {
            "url": "../../Controller/Grid.php",
            "type": "POST",
            "data": {
                "action": "motivo2"
            },
            "dataType": "json",
            "dataSrc": ""
        },
        "columns": [
            { "data": "Motivo" }
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

$(document).ready(function() {
    inicializarDataTable1();
    inicializarDataTable2();
});



