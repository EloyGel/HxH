
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
    document.getElementById('fechafin').value = fechaActual;
  });


