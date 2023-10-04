$(document).ready(function() {
    // Realizar una solicitud para obtener los datos utilizando $.post
    $.post('../Controller/Grid.php', { action: 'obtenerGrid' }, function(data) {
        // Crear la tabla DataTables
        var table = $('#Hora').DataTable({
            data: data,
            columns: [
                { data: "Fecha" },
                { data: "Estatus" },
                { data: "Producto" },
                { data: "Lote" },
                { data: "OT" },
                { data: "Area" },
                { data: "Lider" },
                { data: "Supervisor" },
                { data: "Turno" }
            ]
        });
    }, 'json');
});