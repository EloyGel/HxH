  // Configuración de la cuadrícula
  var gridOptions = {
    columnDefs: [
      { headerName: 'Fecha', field: 'Fecha' },
      { headerName: 'Estatus', field: 'Estatus' },
      { headerName: 'Producto', field: 'Producto' },
      { headerName: 'Lote', field: 'Lote' },
      { headerName: 'OT', field: 'OT' },
      { headerName: 'Área', field: 'AREA' },
      { headerName: 'Líder', field: 'Lider' },
      { headerName: 'Supervisor', field: 'Supervisor' },
      { headerName: 'Turno', field: 'Turno' },
    ],
    defaultColDef: {
      sortable: true,
      resizable: true,
    },
  };

  // Inicializar la cuadrícula
  var grid = new agGrid.Grid(document.querySelector('#myGrid'), gridOptions);

  // Realizar una solicitud AJAX para obtener datos desde tu archivo PHP
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'ruta/a/tu/archivo.php', true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var data = JSON.parse(xhr.responseText);

      // Cargar los datos en la cuadrícula
      gridOptions.api.setRowData(data);
    }
  };
  xhr.send();