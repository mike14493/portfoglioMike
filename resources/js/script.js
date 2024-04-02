
function actualizarReloj() {
    const reloj = document.getElementById('reloj');
    const fecha = new Date();
    const hora = fecha.getHours();
    const minutos = fecha.getMinutes();
    reloj.innerText = `${hora}:${minutos < 10 ? '0' + minutos : minutos}`;
}

setInterval(actualizarReloj, 60000); // Actualizar cada minuto (60000 milisegundos)

// Actualizar el reloj al cargar la página
window.onload = function() {
    actualizarReloj();
};

