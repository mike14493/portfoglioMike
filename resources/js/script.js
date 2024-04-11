
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

document.addEventListener('DOMContentLoaded', function() {
            var selectLink = document.getElementById('selectLink');
            var carouselItems = document.querySelectorAll('.carousel-item');

            selectLink.addEventListener('click', function(event) {
                event.preventDefault(); // Evita que se siga el enlace

                // Encuentra el índice de la imagen activa en el carrusel
                var activeIndex = Array.from(carouselItems).findIndex(item => item.classList.contains('active'));

                // Obtiene el enlace asociado a la imagen activa
                var activeLink = carouselItems[activeIndex].querySelector('a').getAttribute('href');

                // Redirige a la URL del enlace asociado a la imagen activa
                window.location.href = activeLink;
            });
        });
//PARA REPRODUCIR LOS AUDIOS

function playAudio(audioSrc) {
    var audio = document.getElementById('audioPlayer');
    audio.src = audioSrc;
    audio.play();
}

