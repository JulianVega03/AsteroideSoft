document.querySelector('.agregarE').addEventListener('click', agregarE);
document.querySelector('.eliminarE').addEventListener('click', eliminarE);
let contenedorE = document.querySelector('.contentActividades');
let numeroE = 1;
function agregarE() {
    numeroE++;
    var child = document.createElement('DIV');
    child.classList.add('divisorSecundario', `a${numeroE}`);
    child.innerHTML = `<div class="inputs">
                            <input type="text" name="nomActividad${numeroE}" placeholder="Nombre">
                            <input type="number" name="duracionAct${numeroE}" placeholder="Duración (meses)">
                        </div>`
    contenedorE.appendChild(child);
}

function eliminarE() {
    if (numeroE > 0) {
        let child = document.querySelector(`.a${numeroE}`);
        contenedorE.removeChild(child);
        numeroE--;
    }
}