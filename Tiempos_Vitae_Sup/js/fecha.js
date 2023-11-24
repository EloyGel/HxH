/*
// Obtener la fecha actual
var fecha = new Date();

// Formatear la fecha como "dd/mm/yyyy" (por ejemplo)
var opcionesDeFormato = { year: 'numeric', month: '2-digit', day: '2-digit' };
var fechaFormateada = fecha.toLocaleDateString(undefined, opcionesDeFormato);

// Mostrar la fecha en el elemento HTML
document.getElementById('fechaActual').textContent = fechaFormateada;


document.addEventListener("DOMContentLoaded", function() {
    // Obtener la fecha actual en formato ISO (AAAA-MM-DD)
    const fechaActual = new Date().toISOString().split('T')[0];
    // Establecer la fecha actual como valor predeterminado para los campos
    document.getElementById('fechaini').value = fechaActual;
    //document.getElementById('fechaini').min = fechaActual;
    document.getElementById('fechaini').max = fechaActual;

    document.getElementById('fechafin').value = fechaActual;
    document.getElementById('fechafin').min = document.getElementById('fechaini').value;
  });*/


 

  document.addEventListener("DOMContentLoaded", function() {
    // Obtener la fecha actual
    var fecha = new Date();

    // Formatear la fecha como "dd/mm/yyyy" (por ejemplo)
    var opcionesDeFormato = { year: 'numeric', month: '2-digit', day: '2-digit' };
    var fechaFormateada = fecha.toLocaleDateString(undefined, opcionesDeFormato);

    // Mostrar la fecha en el elemento HTML
    document.getElementById('fechaActual').textContent = fechaFormateada;

    // Obtener los elementos select
    const horaIniSelect = document.getElementById('horaini');
    const minIniSelect = document.getElementById('minini');
    const horaFinSelect = document.getElementById('horafin');
    const minFinSelect = document.getElementById('minfin');

    // Obtener los elementos de fecha del operador
    const fechaIniInput = document.getElementById('fechaini');
    const fechaFinInput = document.getElementById('fechafin');

    // Agregar un manejador de eventos al cambiar los select
    horaIniSelect.addEventListener('change', validarHoras);
    minIniSelect.addEventListener('change', validarHoras);
    horaFinSelect.addEventListener('change', validarHoras);
    minFinSelect.addEventListener('change', validarHoras); 

    function validarHoras() {
        // Obtener los valores seleccionados
        const horaIni = parseInt(horaIniSelect.value);
        const minIni = parseInt(minIniSelect.value);
        const horaFin = parseInt(horaFinSelect.value);
        const minFin = parseInt(minFinSelect.value);

        // Obtener las fechas
        const fechaIni = new Date(fechaIniInput.value);
        const fechaFin = new Date(fechaFinInput.value);

        // Establecer las horas y minutos en las fechas
        fechaIni.setHours(horaIni, minIni, 0, 0);
        fechaFin.setHours(horaFin, minFin, 0, 0);

        // Comparar las fechas
        if (fechaIni.getTime() > fechaFin.getTime()) {
            alert("La hora de inicio no puede ser mayor que la hora de fin.");
            horaIniSelect.value = '00';
            minIniSelect.value = '00';
            horaFinSelect.value = '00';
            minFinSelect.value = '00';
            // Puedes restablecer los valores o tomar alguna otra acción apropiada aquí
        }
    } 

    // Obtener la fecha actual en formato ISO (AAAA-MM-DD)
    const fechaActual = new Date().toISOString().split('T')[0];

    const fecha1 = new Date();
    fecha1.setDate(fecha1.getDate() + 1);
    const fechaUnDia = fecha1.toISOString().split('T')[0];

    const fecha2 = new Date();
    fecha2.setDate(fecha2.getDate() - 7);
    const fechasemana = fecha2.toISOString().split('T')[0];

    const fecha3 = new Date();
    fecha3.setDate(fecha3.getDate() - 30);
    const fechames = fecha3.toISOString().split('T')[0];

    const Archivo = fechaIniInput.getAttribute('data-archivo');

    if (Archivo === 'Sup') {
      fechaIniInput.min = fechasemana;
    }
    else
    if (Archivo === 'Admin') {
      fechaIniInput.min = fechames;
    }
    else
    {
      fechaIniInput.min = fechaActual;
    }

    fechaIniInput.value = fechaActual;
    fechaIniInput.max = fechaActual;

    fechaFinInput.min = fechaActual;
    fechaFinInput.value = fechaActual;
    fechaFinInput.max = fechaUnDia;


  });
