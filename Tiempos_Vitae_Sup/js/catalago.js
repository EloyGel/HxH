$(document).ready(function() {
    // Configuración del primer DataTable
    $('#M1').DataTable({
        "ajax": {
            "url": "../Controller/Grid.php", // Ruta al archivo PHP para cargar datos
            "type": "POST",
            "data": { "action": "motivo1" },
            "dataSrc": ""
        },
        "columns": [
            { "data": "Motivo" }
        ]
    });
});

$(document).ready(function() {
    $('#M2').DataTable({
        "ajax": {
            "url": "../Controller/Grid.php", // Ruta al archivo PHP para cargar datos
            "type": "POST",
            "data": { "action": "motivo2" },
            "dataSrc": ""
        },
        "columns": [
            { "data": "Motivo" }
        ]
    });
});



