
const overlay = document.getElementById('overlay');
const popup  = document.getElementById('popup');

function abrirPopUp() {
    
    overlay.classList.add('active');
    popup.classList.add('active');
}

function cerrarPopUp() {
   
   overlay.classList.remove('active');
   popup.classList.remove('active');
}



document.getElementById('btn-abrir-popup').addEventListener('click',abrirPopUp);
document.getElementById('btn-cerrar-popup').addEventListener('click',cerrarPopUp);