
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

//PARA EL BOTON SELECT

// Obtener el botón "Select" y el carrusel
const selectButton = document.getElementById('selectLink');
const carousel = document.querySelector('.carousel');

// Agregar un evento de clic al botón "Select"
selectButton.addEventListener('click', () => {
    // Obtener la imagen activa en el carrusel
    const activeImage = carousel.querySelector('.carousel-item.active img');

    // Obtener el enlace de la imagen activa y redirigir
    const imageUrl = activeImage.getAttribute('src');
    window.location.href = imageUrl;
});

